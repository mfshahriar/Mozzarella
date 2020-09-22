<?php
require_once 'config.php';


function getAllFoodByType($i)
{
    $query="SELECT * FROM `menu` WHERE f_type like " . $i;
    $foods=getArray($query);
    return $foods;
}

function getItemById($id){
    $query="SELECT * from menu WHERE id=" . $id;
    $item=getResult($query);
    return mysqli_fetch_assoc($item);
}

function getAllAddOns(){
    $query="SELECT * FROM addons";
    $addons=getArray($query);
    return $addons;
}

function getMenuRowCount(){
    $query="SELECT COUNT(*) FROM menu";
    $item=getResult($query);
    return mysqli_fetch_assoc($item);
}

function getAllFoods()
{
    $query="SELECT * FROM menu";
    $foods=getArray($query);
    return $foods;
}



function addOrderToQueue($decpription,$totalCost,$customer_id){
    $orderTime=date("h:i:s");
    $query='INSERT INTO queue (description, totalCost,orderTime,customer_id)
    VALUES ("'.$decpription.'", '.$totalCost.','.$orderTime.', '.$customer_id.');';
    echo $query;
    execute($query);
}

?>