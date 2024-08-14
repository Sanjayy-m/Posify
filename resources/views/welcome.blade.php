<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel Bootstrap Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Tilt+Neon&display=swap">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<img class="bg-image" src="{{ url('/body1.jpg') }}" alt="Background Image">
<nav class="navbar">
        <div class="container">
            <a class="navbar-brand" href="#">Posify</a>
            <livewire:welcome.supernav/>
            @if (Route::has('login'))
                <livewire:welcome.navigation/>
            @endif
        </div>
</nav>

    <div class="container content">
        <div class="row">
            <div class="col-lg-12">
                    <h2 class="heading">Posify</h2>
                    <p class="description">Posify is your ultimate companion in achieving optimal posture and promoting musculoskeletal health. Our innovative system utilizes cutting-edge technology to detect and analyze posture, providing real-time feedback and personalized guidance to enhance your well-being.</p>
            </div>
            <div class="col-lg-12">
                    <h2 class="heading">Why you should use our Application?</h2>
                    <p class="description">Improper posture detection is crucial in healthcare and physical therapy, addressing issues like back pain and reduced mobility. Long working hours contribute to poor posture, impacting overall well-being. Correcting posture through ergonomic principles is essential for preventing musculoskeletal problems and promoting health.</p>
            </div>
            
        </div>
        <div class="row justify-content-end">
            <div class="col align-self-center">
                <div class="image-container">
                    <img src="{{url('/front_img.jpg')}}" alt="Image" title="" />
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <!-- For playing the audio assistance -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <audio autoplay controls style="display: none">
        <source src="{{url('/audio/front.mp3')}}" type="audio/mp3">
        Your browser does not support the audio element.
    </audio>
</body>
</html>