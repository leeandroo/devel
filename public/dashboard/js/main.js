// Add active class to the current button (highlight it)
var header = document.getElementById("lista");
var btns = header.getElementsByClassName("list-item");
var mrks = header.getElementsByClassName("list-mark");
var tabs = document.getElementsByClassName("nav-link");

for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active-item");
    current[0].className = current[0].className.replace(" active-item", "");
    this.className += " active-item";
  });
}

for (var j = 0; j < tabs.length; j++) {
  tabs[j].addEventListener("click", function() {
    var current = document.getElementsByClassName("active-tab");
    current[0].className = current[0].className.replace("active-tab", "");
    this.className += " active-tab";

  });
}

$(".button-collapse").sideNav();
$('#message').modal('show');
