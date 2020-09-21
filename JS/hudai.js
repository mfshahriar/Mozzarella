function sendData() {
    // var data = list.filter(function (el) {
    //   return el != null;
    // });
    // var d2=[];
    // for(var i=0;i<data.length;i++){
    //   d2[i]=JSON.stringify(data[i]);
    // }
    // var data1="John";
    // var jsonString = JSON.stringify(data1);
     $.ajax({
          type: "POST",
          url: "bad_data.php",
          data: "nigga",
          cache: false,
          contentType:"application/json",
  
          success: function(){
              console.log(Response);
          }
      });
  }
  