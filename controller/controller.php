<?php
require_once 'config.php';



function addFood($name, $price, $type)
{
    $query = 'INSERT INTO menu (f_name, price,f_type,review,image)
    VALUES ("' . $name . '", ' . $price . ',' . $type . ',5,null);';
    execute($query);
}

function addItem($name, $amount, $per_cost)
{
    $query = 'INSERT INTO `inventory`(`ing_name`, `quantity(KG)`, `cost_per_kg`, `last_resupply`) VALUES ("' . $name . '", ' . $amount . ',' . $per_cost . ',null);';
    execute($query);
}

function addOrderToQueue($decpription, $totalCost, $customer_id)
{
    $orderTime=date("h:i:s");
    //$orderTime = "null";
    $query = 'INSERT INTO queue (description, totalCost,orderTime,customer_id)
    VALUES ("' . $decpription . '", ' . $totalCost . ',"' . $orderTime . '", ' . $customer_id . ');';
    //echo $query;
    execute($query);
}

function getAllFoodByType($i)
{
    $query = "SELECT * FROM `menu` WHERE f_type like " . $i;
    $foods = getArray($query);
    return $foods;
}

function getItemById($id)
{
    $query = "SELECT * from menu WHERE id=" . $id;
    $item = getResult($query);
    return mysqli_fetch_assoc($item);
}

function getAllAddOns()
{
    $query = "SELECT * FROM addons";
    $addons = getArray($query);
    return $addons;
}

function getMenuRowCount()
{
    $query = "SELECT COUNT(*) FROM menu";
    $item = getResult($query);
    return mysqli_fetch_assoc($item);
}

function getAllFoods()
{
    $query = "SELECT * FROM menu";
    $foods = getArray($query);
    return $foods;
}

function getAllOrders()
{
    $query = "SELECT * FROM queue";
    $order = getArray($query);
    return $order;
}

function getAllInventoryItems()
{
    $query = "SELECT * FROM inventory";
    $order = getArray($query);
    return $order;
}


function upateInventoryById($id, $quantity)
{
    $query = "UPDATE `inventory` SET `quantity(KG)` = '" . $quantity . "' WHERE `inventory`.`id` =" . $id . ";";
    execute($query);
}

function upateFoodById($id, $amount)
{
    $query = "UPDATE `menu` SET `price` = '" . $amount . "' WHERE `menu`.`id` =" . $id . ";";
    execute($query);
}

function removeOrderById($id)
{
    $query = "DELETE FROM queue WHERE queue.id = " . $id;
    execute($query);
}
