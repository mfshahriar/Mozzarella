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

function getMenuRowCount(){
    $query="SELECT COUNT(*) FROM menu";
    $item=getResult($query);
    return mysqli_fetch_assoc($item);
}

function getAllFoods()
{
    $query="SELECT * FROM `menu";
    $foods=getArray($query);
    return $foods;
}

?>