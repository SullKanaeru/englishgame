let selectedAnswer = "";

// Simpan jawaban
function saveAnswer(answer) {
    selectedAnswer = answer;
    console.log(selectedAnswer);
}

function check(source) {
    var selectedButton = "";

    //Cek button yang ditekan berdasarkan jawaban sebelumnya
    if (selectedAnswer == "A") {
        selectedButton = document.querySelector(".a-box");
    } else if (selectedAnswer == "B") {
        selectedButton = document.querySelector(".b-box");
    } else if (selectedAnswer == "C") {
        selectedButton = document.querySelector(".c-box");
    }

    //Cek jawaban berdasarkan sumber dikirimkan datanya
    if (source == "l1n1") {
        if (selectedAnswer == "A") {
            console.log("Button A");
            selectedButton.classList.add("wrong");
        } else if (selectedAnswer == "B") {
            console.log("Button B");
            selectedButton.classList.add("wrong");
        } else if (selectedAnswer == "C") {
            console.log("Button C");
            selectedButton.classList.add("right");

            setTimeout(function () {
                window.location.href = "/l1n2";
            }, 1000);
        } else {
            console.log("Tidak ada button yang dipilih");
        }
    }

    if (source == "l1n2") {
        if (selectedAnswer == "A") {
            console.log("Button A");
            selectedButton.classList.add("right");

            setTimeout(function () {
                window.location.href = "/l1n3";
            }, 1000);
        } else if (selectedAnswer == "B") {
            console.log("Button B");
            selectedButton.classList.add("wrong");
        } else if (selectedAnswer == "C") {
            console.log("Button C");
            selectedButton.classList.add("wrong");
        } else {
            console.log("Tidak ada button yang dipilih");
        }
    }

    if (source == "l1n3") {
        if (selectedAnswer == "A") {
            console.log("Button A");
            selectedButton.classList.add("wrong");
        } else if (selectedAnswer == "B") {
            console.log("Button B");
            selectedButton.classList.add("right");
            sessionStorage.setItem("statusLevel1", 1);

            setTimeout(function () {
                window.location.href = "/gamePage";
            }, 1000);
        } else if (selectedAnswer == "C") {
            console.log("Button C");
            selectedButton.classList.add("wrong");
        } else {
            console.log("Tidak ada button yang dipilih");
        }
    }

    setTimeout(function () {
        selectedButton.classList.remove("wrong");
        selectedButton.classList.remove("right");
    }, 1000);

    source = "";
    selectedAnswer = "";
}
