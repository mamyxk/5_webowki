document.getElementById("kliknij").addEventListener("click", function(e) {
    var ec = e.clientX
    var yc = e.clie
    document.getElementById("client").innerHTML = "ClientX: " + e.clientX + "  ClientY:  " + e.clientY + "<br>" + "ScreenX: " + e.screenX + "  ScreenY:  " + e.screenY
});

function images() {
    var lenimg = document.images.length;
    document.getElementById("res2").innerHTML = "Ilosc obrazow (images) w dokumencie: " + lenimg
}

function links() {
    var lenlink = document.links.length;
    document.getElementById("res3").innerHTML = "Ilosc linkow (links) w dokumencie: " + lenlink
}

window.onload = images()
window.onload = links()