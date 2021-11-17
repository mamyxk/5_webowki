document.getElementById("myButton").addEventListener("click", function() {
    var iframeDocument = window.frames["myiframe"].document;
    iframeDocument.open();
    iframeDocument.writeln("<p style='color: red;'>Hello, world!</p>");
    iframeDocument.close();
});

document.getElementById("button1").addEventListener("click", function() {
    var textarea = getElementById("textarea1");
    var text = window.prompt("Podaj tekst który ma być wypisany");

})