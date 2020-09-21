var ajx = new XMLHttpRequest();
//arr = [id, count.value, addon_list, name, cost];
var arr = [];
var cost = 0;
var count = 1;
var name;
var addon_list = [];
var addon_cost = 0;
var list = [];
var addons;
var cost_txt;
var mainItemCost = 0;
var id;
var add_btn;

function exist(id) {
  if (list[id + ""] == undefined) {
    return false;
  } else {
    return true;
  }
}

function loadPopup(f_id) {
  id = f_id;
  link = "./popup.php?id=" + id;
  ajx.open("GET", link, false);
  ajx.send();
  ajx.onreadystatechange = function () {
    if (this.status == 200) {
      document.getElementById("popup_container").innerHTML = this.responseText;
      name = document.getElementById("p_name").textContent;
      mainItemCost = parseInt(document.getElementById("price_txt").innerText);
      count = document.getElementById("p_input");
      document.getElementById("regular").click();
      cost_txt = document.getElementById("t_cost_txt");
      cost_txt.innerText = mainItemCost + "TK";
      cost = mainItemCost;
      count.value = 1;
      if (exist(id)) {
        addons = document.getElementsByClassName("addon_class");
        addon_list = list[id + ""][2];
        count.value = list[id + ""][1];
        cost = parseInt(count.value) * mainItemCost;
        cost_txt.innerText = cost + "TK";
        for (var i = 0; i < addon_list.length; i++) {
          addons[addon_list[i]].checked = true;
          add_cb(addon_list[i] + 1);
        }
        addon_list = [];
      }
    }
  };
}

function addClick() {
  var name = document.getElementById("p_name").innerText;
  addons = document.getElementsByClassName("addon_class");
  for (var i = 0; i < addons.length; i++) {
    if (addons[i].checked) {
      addon_list.push(i);
    }
  }

  arr = [id, count.value, addon_list, name, cost];
  list[id + ""] = arr;
  document.getElementById("cross_btn").click();
  arr = [];
  cost = 0;
  count = 1;
  addon_list = [];
  addon_cost = 0;
  side_queue();
}

function cancleClick() {
  list[id + ""] = undefined;
  arr = [];
  cost = 0;
  count = 1;
  addon_list = [];
  addon_cost = 0;
  side_queue();
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

function side_queue() {
  var list_filtered = list.filter(function (el) {
    return el != null;
  });
  var totalCost = 0;
  var str = "";
  for (var i = 0; i < list_filtered.length; i++) {
    totalCost += parseInt(list_filtered[i][4]);
    str +=
      `<tr><th>
    #` +
      list_filtered[i][3] +
      `(` +
      list_filtered[i][1] +
      `)` +
      `
 </th>
 <th>
 ` +
      list_filtered[i][4] +
      `
 </th></tr>`;
  }

  var sq = document.getElementById("side_q_table");
  sq.innerHTML =
    `
    <h1>Your Orders</h1>
    <table id="ordered_table" class="table">


` +
    str +
    `
<th style="color:red">
    Total
</th>
<th style="color:red">
` +
    totalCost +
    `TK` +
    `
</th>
</tr>
</table>`;
}
side_queue();

// function sendData() {
//   // var data = list.filter(function (el) {
//   //   return el != null;
//   // });
//   // var d2=[];
//   // for(var i=0;i<data.length;i++){
//   //   d2[i]=JSON.stringify(data[i]);
//   // }
//   // var data1="John";
//   // var jsonString = JSON.stringify(data1);
//    $.ajax({
//         type: "POST",
//         url: "./data.php",
//         data: "nigga",
//         cache: false,
//         contentType:"application/json",

//         success: function(){
//             alert(Response);
//         }
//     });
// }
