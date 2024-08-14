<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pose Classification Result</title>
</head>
<body>
    <h1>Pose Classification Result</h1>
    <img src="{{ asset($imagePath) }}" alt="Uploaded Image">
    <p>{{ $output }}</p>
    <a href="{{ route('pose.index') }}">Upload Another Image</a>
</body>
</html>
