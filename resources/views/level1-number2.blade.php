<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Level 1</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ingame-style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Guerrilla&display=swap" rel="stylesheet">
</head>

<body>
    <audio id="backgroundSound" loop autoplay>
        <source src="{{ asset('music/backsound.mp3') }}" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio>

    <img src="{{ asset('img/level-1-img/wp-1.png') }}" alt="wallpaper" class="wallpaper">
    <img src="{{ asset('img/level-1-img/wp-2.png') }}" alt="wallpaper" class="decor">
    <img src="{{ asset('img/level-1-img/grass-1.png') }}" alt="wallpaper" class="grass-1">
    <img src="{{ asset('img/level-1-img/grass-2.png') }}" alt="wallpaper" class="grass-2">

    <div class="container">
        <div class="question">
            <div class="number">
                <h1 class="no">Number 2</h1>
            </div>
            <br><br>

            <div class="quest-box">
                <div class="quest-header">
                    <p class="quest-text">Di kelas sering kita gunakan
                        benda ini untuk menempel Kertas di papan tulis. Biasanya benda ini lengket
                    </p>
                </div>
                <img src="{{ asset('img/level-1-img/soal2.png') }}" alt="soal2" class="soal-img">
                <div class="quest-footer">
                    <p class="quest-text">
                        Apa nama benda ini dalam bahasa inggris?
                    </p>
                </div>
            </div>

            <div class="answer">
                <button class="ans-box a-box" onclick="saveAnswer('A')">
                    <p class="quest-ans">A. Glue</p>
                </button>
                <button class="ans-box b-box" onclick="saveAnswer('B')">
                    <p class="quest-ans">B. O'clock</p>
                </button>
                <button class="ans-box c-box" onclick="saveAnswer('C')">
                    <p class="quest-ans">C. Bag</p>
                </button>
            </div>

            <button class="submit" onclick="check('l1n2')">CHECK!</button>
        </div>
    </div>

    <script src="{{ asset('script/level1-script.js') }}"></script>
</body>

</html>
