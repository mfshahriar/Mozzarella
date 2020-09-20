$(document).ready(function () {
  var count = document.getElementById("rowCount");
  count = parseInt(count.textContent);
  var id;

//   for (var i = 1; i <= count; i++) {
//     var b_id = +i + "_opt_btn";
//     document.getElementById(b_id).addEventListener("click", loadPopup);
//   }

document.getElementById("3_opt_btn").addEventListener("click", loadPopup);
  function loadPopup() {
    var fired_button = $(this).val();
    id = fired_button;
    $("#popup_container").load("./popup.php", {
      food_id: id,
    });
  }
});

// $("#popup_container").load("./popup.php", {
//   food_id: id,
// });
