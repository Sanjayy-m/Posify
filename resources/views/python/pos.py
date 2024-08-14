from flask import Flask, render_template, Response
import cv2
import mediapipe as mp
import math

app = Flask(__name__)

# Initialize MediaPipe Pose model
mp_pose = mp.solutions.pose
pose = mp_pose.Pose()
mp_drawing = mp.solutions.drawing_utils

def calculate_angle(landmark1, landmark2, landmark3):
    '''
    This function calculates angle between three different landmarks.
    Args:
        landmark1: The first landmark containing the x, y, and z coordinates.
        landmark2: The second landmark containing the x, y, and z coordinates.
        landmark3: The third landmark containing the x, y, and z coordinates.
    Returns:
        angle: The calculated angle between the three landmarks.
    '''
    # Get the required landmarks coordinates.
    x1, y1, _ = landmark1
    x2, y2, _ = landmark2
    x3, y3, _ = landmark3

    # Calculate the angle between the three points
    angle = math.degrees(math.atan2(y3 - y2, x3 - x2) - math.atan2(y1 - y2, x1 - x2))

    # Ensure the angle is positive
    if angle < 0:
        angle += 360

    return angle

def classify_pose(landmarks, output_image):
    # Initialize the label of the pose.
    label = '--Unknown Pose--'
    
    # Specify the color (Red) for incorrect posture.
    color = (0, 0, 255)
    
    # Calculate the required angles for posture analysis.
    right_shoulder_angle = calculate_angle(landmarks[mp_pose.PoseLandmark.RIGHT_EAR.value],
                                           landmarks[mp_pose.PoseLandmark.RIGHT_SHOULDER.value],
                                           landmarks[mp_pose.PoseLandmark.RIGHT_HIP.value])
                                           
    left_shoulder_angle = calculate_angle(landmarks[mp_pose.PoseLandmark.LEFT_EAR.value],
                                          landmarks[mp_pose.PoseLandmark.LEFT_SHOULDER.value],
                                          landmarks[mp_pose.PoseLandmark.LEFT_HIP.value])

    # Define the correct angle range
    correct_range = (140, 220)  # Adjust based on your specific posture criteria

    right_deviation = abs(right_shoulder_angle - (sum(correct_range) / 2))
    left_deviation = abs(left_shoulder_angle - (sum(correct_range) / 2))

    # Calculate correctness percentage based on average deviation
    correctness_percentage = 100 - ((right_deviation + left_deviation) / 2)
    correctness_percentage = format(correctness_percentage,'.3f')
    
    # Check if the posture is within the correct range
    if (correct_range[0] <= right_shoulder_angle <= correct_range[1] and
        correct_range[0] <= left_shoulder_angle <= correct_range[1]):
        label = 'Correct Posture'
        color = (0, 255, 0)
    else:
        label = 'Incorrect Posture'
    print("Left",left_shoulder_angle)
    print("Right",right_shoulder_angle)
    # Display the label on the image.
    cv2.putText(output_image,label, (10, 30), cv2.FONT_HERSHEY_PLAIN, 2, color, 2)
    
    return label

def gen_frames():
    cap = cv2.VideoCapture(1)

    while True:
        success, frame = cap.read()
        if not success:
            break
        else:
            # Convert frame to RGB format
            image_rgb = cv2.cvtColor(frame, cv2.COLOR_BGR2RGB)

            # Perform Pose Detection
            results = pose.process(image_rgb)

            # Initialize a list to store the detected landmarks
            landmarks = []

            # Check if any landmarks are detected
            if results.pose_landmarks:
                # Draw Pose landmarks on the frame
                mp_drawing.draw_landmarks(image=frame, landmark_list=results.pose_landmarks,
                                          connections=mp_pose.POSE_CONNECTIONS)

                # Iterate over the detected landmarks
                for landmark in results.pose_landmarks.landmark:
                    # Append the landmark into the list
                    landmarks.append((int(landmark.x * frame.shape[1]), int(landmark.y * frame.shape[0]),
                                      (landmark.z * frame.shape[1])))

                # Call classify_pose to analyze posture
                classify_pose(landmarks, frame)

            ret, buffer = cv2.imencode('.jpg', frame)
            frame = buffer.tobytes()
            yield (b'--frame\r\n'
                   b'Content-Type: image/jpeg\r\n\r\n' + frame + b'\r\n')

@app.route('/')
def index():
    return render_template('index.html')

@app.route('/video_feed')
def video_feed():
    return Response(gen_frames(), mimetype='multipart/x-mixed-replace; boundary=frame')

if __name__ == '__main__':
    app.run(debug=True)