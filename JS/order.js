var ajx = new XMLHttpRequest();

function loadPopup(f_id) {

  link = "./popup.php?id=" + f_id;
  ajx.open("GET", link, false);
  ajx.send();
  ajx.onreadystatechange = function () {
    if (this.status == 200) {
      document.getElementById("popup_container").innerHTML = this.responseText;
    }
  };
}

document.getElementsByClassName("opt_btn")[0].click();
