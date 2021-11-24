console.log("Loaded")

const obrazek = document.getElementById("tenobraz");
const klikajj = document.getElementById("kliknij");

klikajj.addEventListener("click", function(e) {
    var ec = e.clientX;
    var yc = e.clie;
    document.getElementById("client").innerHTML = "ClientX: " + e.clientX + "  ClientY:  " + e.clientY + "<br>" + "ScreenX: " + e.screenX + "  ScreenY:  " + e.screenY;
});

document.onkeypress = function(e) {
    e = e || window.event;
    if (e.shiftKey) {
        console.log("Wcisniety SHIFT")
        document.getElementById("kontakt").innerHTML = ""
    } else {
        if (e.keyCode == 13) {
            links()
        }
        console.log(e.keyCode)
    }

};

obrazek.addEventListener("mousedown", e => {
    console.log("Klikniety obrazek")
});

obrazek.addEventListener("mouseup", e => {
    console.log("Puszczony kursor nad obrazkiem")
});

klikajj.addEventListener("mouseover", e => {
    console.log("Kursor nad kliknieciem")
});

klikajj.addEventListener("mouseout", e => {
    console.log("Kursor juz przemieszony")
});