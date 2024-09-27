<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/study-page-style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Guerrilla&display=swap" rel="stylesheet">

</head>

<body>
    <audio id="backgroundSound" loop autoplay>
        <source src="{{ asset('music/backsound.mp3') }}" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio>

    <img src="{{ asset('img/study-page/wp-1.png') }}" alt="wallpaper" class="wallpaper">

    <div class="container">
        <img src="{{ asset('img/study-page/materi.png') }}" alt="materi" class="materi">

        <button class="submit" onclick="wait('/')">FINISH!</button>
    </div>

    <script src="{{ asset('script/script.js') }}"></script>
    <script src="{{ asset('script/study-script.js') }}"></script>
</body>

</html>
