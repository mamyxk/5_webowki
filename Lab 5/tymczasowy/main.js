document.getElementById("myButton").addEventListener("click", function() {
    var iframeDocument = window.frames["myiframe"].document;
    iframeDocument.open();
    iframeDocument.writeln("<h1 style='color: red;'>Hello, world!</h1>");
    iframeDocument.close();
});

document.getElementById("button1").addEventListener("click", function() {
    var textarea = document.getElementById("textarea1");
    var text = window.prompt("Podaj tekst który ma być wypisany");
    textarea.innerText = text;
});

document.getElementById("button2").addEventListener("click", function() {
    window.alert("You shall not pass");
});

window.addEventListener("resize", function() {
    var paragraph = document.getElementById("para");
    paragraph.innerHTML = window.innerWidth + "px ✕ " + window.innerHeight + "px";
});