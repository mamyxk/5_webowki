div = document.getElementById("zad1");

function addHeader() {
  var h = document.createElement("h2");
  var t = document.createTextNode("Text");
  h.appendChild(t);
  div.appendChild(h);
}

before = "before";
after = "after";

function addbefore() {
  var newItem = document.createElement("li");
  var textnode = document.createTextNode(before);
  newItem.appendChild(textnode);

  var list = document.getElementById("list");
  list.insertBefore(newItem, list.childNodes[0]);
}

function addafter() {
  var newItem = document.createElement("li");
  var textnode = document.createTextNode(after);
  newItem.appendChild(textnode);

  var list = document.getElementById("list");
  list.appendChild(newItem);
}

function removeLast() {
  var list = document.getElementById("list");
  list.removeChild(list.lastChild);
}

function replaceFirst() {
  var listItem = document.getElementById("list").childNodes[0];
  var textnode = document.createTextNode("Water");
  listItem.replaceChild(textnode, listItem.childNodes[0]);
}
