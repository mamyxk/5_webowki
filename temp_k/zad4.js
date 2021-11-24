console.log("Loaded")

document.getElementById("kliknij").addEventListener("click", function(e) {
    var ec = e.clientX
    var yc = e.clie
    document.getElementById("client").innerHTML = "ClientX: " + e.clientX + "  ClientY:  " + e.clientY + "<br>" + "ScreenX: " + e.screenX + "  ScreenY:  " + e.screenY
});

document.onkeypress = function(e) {
    e = e || window.event;
    if (e.shiftKey) {
        console.log("Wcisniety SHIFT")
    } else {
        console.log(e.keyCode)
    }

};