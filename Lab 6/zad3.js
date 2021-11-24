var elem = document.getElementById("zad3");

for (let i = 0; i < 5; i++) {
  var text = document.createTextNode("Created !!");
  elem.appendChild(text);
}
elem.appendChild(document.createElement("br"));
for (let i = 0; i < 5; i++) {
  var text = document.createTextNode("Created !!");
  elem.appendChild(text);
}
elem.appendChild(document.createElement("br"));
elem.appendChild(document.createElement("br"));

function changeStyle1() {
  elem.style.backgroundColor = "blue";
  elem.style.fontFamily = "Impact";
  elem.style.color = "red";
}

function changeStyle2() {
  elem.style.backgroundColor = "red";
  elem.style.fontFamily = "Charcoal";
  elem.style.color = "blue";
}
