<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Level Page</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/level-page-style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Guerrilla&display=swap" rel="stylesheet">

</head>

<body>
    <audio id="backgroundSound" loop autoplay>
        <source src="{{ asset('music/backsound.mp3') }}" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio>

    <img src="{{ asset('img/level-page/wp-1.png') }}" alt="" class="wallpaper">
    <div class="container">
        <img src="{{ asset('img/level-page/select-box.png') }}" alt="" class="wp-1">

        <div class="game-level">
            <button class="level-box level1 active" onclick="wait('/l1n1')">
                <img src="{{ asset('img/level-page/level1-btn-release.png') }}" alt="">
            </button>

            <button class="level-box level2" onclick="wait('/l2n1')" disabled>
                <img src="{{ asset('img/level-page/level2-btn-release.png') }}" alt="">
                <img src="{{ asset('img/level-page/locked.png') }}" alt="" class="locked">
                <img src="{{ asset('img/level-page/new.png') }}" alt="" class="new">
            </button>
        </div>
    </div>

    <script src="{{ asset('script/script.js') }}"></script>
    <script src="{{ asset('script/level-page-script.js') }}"></script>
    <script src="{{ asset('script/level1-script.js') }}"></script>
</body>

</html>
