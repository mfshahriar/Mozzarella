var ajx = new XMLHttpRequest();

var count = 1;
var cost = 0;
var cost_txt;
var mainItemCost = 0;
var addon_cost = 0;

function loadPopup(f_id) {
  link = "./popup.php?id=" + f_id;
  ajx.open("GET", link, false);
  ajx.send();
  ajx.onreadystatechange = function () {
    if (this.status == 200) {
      document.getElementById("popup_container").innerHTML = this.responseText;
      mainItemCost = parseInt(document.getElementById("price_txt").innerText);
      count = document.getElementById("p_input");
      count.value = 1;
      document.getElementById("regular").click();
      cost_txt = document.getElementById("t_cost_txt");
      cost_txt.innerText = mainItemCost + "TK";
      cost = mainItemCost;
    }
  };
}

document.getElementsByClassName("opt_btn")[0].click();

function incCount() {
  if (parseInt(count.value) <= 50) {
    count.value = parseInt(count.value) + 1;
    cost += mainItemCost;
    cost_txt.innerText = cost + "TK";
  }
}

function decCount() {
  if (parseInt(count.value) > 1) {
    count.value = parseInt(count.value) - 1;
    cost -= mainItemCost;
    cost_txt.innerText = cost + "TK";
  }
}

function add_cb(id) {
  cost -= addon_cost;
  if (document.getElementById("addon_" + id).checked) {
    addon_cost += parseInt(
      document.getElementById("addon_price_" + id).innerText
    );
  } else {
    addon_cost -= parseInt(
      document.getElementById("addon_price_" + id).innerText
    );
  }
  cost += addon_cost;
  cost_txt.innerText = cost + "TK";
}
