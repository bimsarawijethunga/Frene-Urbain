function check() {
  var checkBox = document.getElementById("toc");
  var text = document.getElementById("txt");

  if (checkBox.checked == true){
      text.style.color = "black";
    text.innerHTML = "User agreed with ToC"
  } else {
    text.style.color = "red";
  }
}