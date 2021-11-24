ele = document.getElementById("zad3");

function foc() {
  var text = document.getElementById("help");
  text.innerText = "You can type something there";
}
function bl() {
  var text = document.getElementById("help");
  text.innerText = "You lost focus";
}

function res() {
  window.alert("Form reset");
}

function sub() {
  window.alert("Form submitted");
}
