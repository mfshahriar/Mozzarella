//$(document).ready(function () {
// var count = document.getElementById("rowCount");
// count = parseInt(count.textContent);
var id = 6;
var btns = document.getElementsByClassName("opt_btn");
var count = btns.length;
var ajx = new XMLHttpRequest();

for (var i = 0; i < count; i++) {
  btns[i].addEventListener("click", loadPopup);
}

//   for (var i = 1; i <= count; i++) {
//     var b_id = +i + "_opt_btn";
//     document.getElementById(b_id).addEventListener("click", loadPopup);
//   }

// document.getElementById("3_opt_btn").addEventListener("click", loadPopup);
function loadPopup() {
  // var fired_button = $(this).val();
  // id = fired_button;
  // $("#popup_container").load("./popup.php", {
  //   food_id: id,
  // });
  id = $(this).val();
  //alert(id);
  link = "./popup.php?id=" + id;
  ajx.open("GET", link, true);
  ajx.send();
  ajx.onreadystatechange = function () {
    if (this.status == 200) {
      document.getElementById("popup_container").innerHTML = this.responseText;
    }
  };
}

// $("#popup_container").load("./popup.php", {
//   food_id: id,
// });
