document.getElementById("hidden_div").hidden = true;

    function sendData(id) {
      if (document.getElementById("inp_" + id).value != "") {
        var x = parseInt(document.getElementById("inp_" + id).value);
        var y = parseInt(document.getElementById("amount_" + id).innerText);
        var newAmount=x+y;
        var data=[id,newAmount];
        var sendData=JSON.stringify(data);
        document.getElementById("hidden_txt").value=sendData;
        //alert(typeof(sendData));
        document.getElementById("hidden_btn").click();
      }
    }