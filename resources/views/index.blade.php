<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard-style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Guerrilla&display=swap" rel="stylesheet">

</head>

<body>
    <audio id="backgroundSound" loop autoplay>
        <source src="{{ asset('music/backsound.mp3') }}" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio>

    <img src="{{ asset('img/home-img/wp-1.png') }}" alt="wallpaper" class="wallpaper">
    <img src="{{ asset('img/home-img/wp-2.png') }}" alt="wallpaper" class="cloud">
    <div class="container">

        <img src="{{ asset('img/home-img/text-1.png') }}" alt="title" class="text-1">
        <img src="{{ asset('img/home-img/logo-1.png') }}" alt="logo" class="logo-1">

        <div class="button-group">
            <button class="btn study-btn" onclick="wait('studyPage')">
                <img src="{{ asset('img/home-img/study-btn-release.png') }}" alt="start-button" class="start-btn-img">
            </button>

            <button class="btn game-btn" onclick="wait('gamePage')">
                <img src="{{ asset('img/home-img/game-btn-release.png') }}" alt="start-button" class="game-btn-img">
            </button>
        </div>

    </div>

    <script src="{{ asset('script/script.js') }}"></script>
</body>

</html>
