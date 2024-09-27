function test() {
    console.log(localStorage.getItem("statusLevel1"));
}

window.onload = function () {
    let statusLevel1 = sessionStorage.getItem("statusLevel1");
    let statusLevel2 = sessionStorage.getItem("statusLevel2");

    if (statusLevel1 == 1) {
        document.querySelector(".level2").classList.add("active");
        document.querySelector(".locked").style.display = "none";
        document.querySelector(".new").style.display = "flex";
        document.querySelector(".level2").removeAttribute("disabled");
    } else if (statusLevel2 == 1) {
        document.querySelector(".level2").classList.add("active");
        document.querySelector(".locked").style.display = "none";
        document.querySelector(".new").style.display = "none";
        document.querySelector(".level2").removeAttribute("disabled");
    } else {
        sessionStorage.setItem("statusLevel1", 0);
        sessionStorage.setItem("statusLevel2", 0);
    }
    sessionStorage.setItem("statusLevel1", 0);
    sessionStorage.setItem("statusLevel2", 0);
};
