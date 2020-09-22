<?php
require "./controller/controller.php";

if(isset($_POST['data'])){
  $data=$_POST['data'];
  $data=json_decode($data);
  //var_dump($data);
  upateInventoryById($data[0],$data[1]);
}

$items = getAllInventoryItems();

?>




<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv='cache-control' content='no-cache'>
  <meta http-equiv='expires' content='0'>
  <meta http-equiv='pragma' content='no-cache'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



  <title>Inventory</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./CSS/orderStyle.css">
</head>

<body>
  <header>
    <nav class="navbar  justify-content-between">
      <a class="navbar-brand"> <img src="./Images/logo.png" alt="" class="logo"></a>
      <form class="form-inline">

        <button class="btn btn-outline-danger my-2 my-sm-0 " type="submit">Manage Account</button>
      </form>
    </nav>
    </div>
  </header>

  <div class="container-fluid ">
    <div class="row">
      <div class="col-sm-3">
        <nav id="sidebarMenu" class="navbar navbar-light navbar-expand-sm px-0 flex-row flex-nowrap">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarWEX" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="navbar-collapse collapse" id="navbarWEX">
            <div class="nav flex-sm-column flex-row" style="padding-top:360px; position: fixed;">
              <a id="burger_btn" class="nav-item nav-link optn_btn " href="#Burger_h1">Food</a>
              <a id="pizza_btn" class="nav-item nav-link optn_btn " href="#Pizza_h1">Delivery Man</a>
              <a id="sub_btn" class="nav-item nav-link optn_btn" href="#Sub_h1">Inventory</a>
            </div>
          </div>
        </nav>
      </div>


      <div class="col-sm-8" style="background-color:#e0e0d1; margin-top: 50px; ">
        <h1>INVENTORY</h1>
        <?php

        foreach ($items as $item) {

        ?>
          <div class="row m-3" style="height: 100px; background-color:white;">
            <div class="col-sm-5" style="background-color:white;">
              <h3 class="text-center"><?php echo $item["ing_name"] ?></h3>
              <h4 class="text-center">Left in Storage: <i id="amount_<?php echo $item["id"] ?>"><?php echo $item["quantity(KG)"] ?></i>KG</h4>
            </div>

            <div class="col-sm-5" style="background-color:#A9A9A9;">
              <p class="text-center">Last added : <?php echo (string)$item["last_resupply"] ?></p>
              <h4>
                <div class="input-group">
                  <span class="input-group-addon">
                    <h5 class="text-center">AMOUNT TO ADDED:</h5>
                  </span>
                  <input id="inp_<?php echo $item["id"] ?>" type="text" class="form-control" name="msg">
                </div>
            </div>
            <div class="col-sm-2">
              <button onclick='sendData("<?php echo $item["id"] ?>")' type="submit" class="add_btn btn btn-info mt-0" style="font-size:large; height: 100px; width: 130px; background-color:#e67300;">ADD</button>
            </div>
          </div>

        <?php

        }

        ?>


        <div class="row" style="height: 75px; background-color:white; margin-top: 25px;">
          <div class="col-sm-12" style="background-color:white;" align="center">
            <button type="button" class="btn">
              <h1>+</h1>
            </button>

          </div>

        </div>



</body>

<div class="footer text-muted">
  <div id="hidden_div">
    <form action="inventory.php" method="POST">
      <input name="data" id="hidden_txt" type="text">
      <button id="hidden_btn" type="submit"></button>
    </form>
  </div>
  <script src="JS/inventory.js"></script>
</div>

</html>