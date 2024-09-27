function wait(target) {
    setTimeout(() => {
        window.location.href = target;
    }, 100);
}

// window.onload = function () {
//     var audio = document.getElementById("backgroundSound");
//     var soundPlayed = sessionStorage.getItem("soundPlayed");

//     if (!soundPlayed) {
//         audio.play();
//         sessionStorage.setItem("soundPlayed", "true");
//     }

//     window.addEventListener("beforeunload", function () {
//         sessionStorage.removeItem("soundPlayed");
//     });
// };
