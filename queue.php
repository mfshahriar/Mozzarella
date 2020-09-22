<!-- <?php
        require "./controller/controller.php";

        $data = "";
        $arr = array();
        $totalPrice = 0;
        $item_array = array();

        if (isset($_POST['txt_name']) && $_POST['txt_name'] != "[]") {
            $data = $_POST['txt_name'];
            //print_r($data);
            $d = json_decode($data);

            for ($i = 0; $i < count($d); $i++) {
                array_push($arr, json_decode($d[$i]));
                //echo $arr[$i][0] . ' ' . $arr[$i][1] . ' ' . $arr[$i][2] . '<br>';
                $totalPrice += (int)$arr[$i][2];
                array_push($item_array, getItemById($arr[$i][0]));
            }
        }
        ?> -->






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./CSS/queue.css">
    <title>Cart</title>
</head>

<body>
    <header style="background-color: #292938;">
        <h2 class="cart-header">Order Queue</h2>
    </header>

    <div class="columns" id="div_main">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Description</th>
                    <th scope="col">Order Cost</th>
                    <th scope="col">Customer ID</th>
                    <th scope="col">Time</th>
                    <th scope="col">
                        Done Button &nbsp; &nbsp;Cancel Button
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>1</th>
                    <th>Burger(1);pizza(1);</th>
                    <th>900TK</th>
                    <th>4</th>
                    <th>11;45;55</th>
                    <th>
                        <button class="btn btn-info p_btn">Done</button>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                        <button class="btn btn-danger p_btn">Cancel</button>
                    </th>
                </tr>

            </tbody>
        </table>
    </div>
</body>

</html>