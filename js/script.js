window.onload = function showPanel(fieldName) {
   document.getElementById("demo").innerHTML = 5 + 6;


var select = document.getElementById("district");
var options = ["Anuradhapura", "Gampaha", "Colombo", "Galle", "Jaffna"];
for(var i = 0; i < options.length; i++) {
    var opt = options[i];
    var el = document.createElement("option");
    el.textContent = opt;
    el.value = opt;
    select.appendChild(el);
}


}

function outputUpdate(n) {
  document.querySelector('.num').value = n;
}

