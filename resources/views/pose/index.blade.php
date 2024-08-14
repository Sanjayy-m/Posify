<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pose Classification</title>
</head>
<body>
    <h1>Upload Image for Pose Classification</h1>
    <form action="{{ route('pose.classify') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image" accept="image/*" required>
        <button type="submit">Classify Pose</button>
    </form>
</body>
</html>
