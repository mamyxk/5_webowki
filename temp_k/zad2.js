document.forms.item(0)["sum_form"].addEventListener("click", function(e) {
    console.log("Udana demonstracja")
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