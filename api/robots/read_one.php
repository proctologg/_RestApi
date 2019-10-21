<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
include_once '../../Configuration/DataBase.php';
include_once '../../Models/Goods.php';


//Создаем объект из класса и коннектимся
$database = new Database();
$db = $database->connect();
// Создаем объект товара
$product = new Goods($db);

// получаем id
$product->id = isset($_GET['id']) ? $_GET['id'] : die();

// получить робота
$product->readOneRobo();

// созданте массива
$product_arr = array(
    'id' => $product->id,
    'name' => $product->name,
    'type' => $product->type,
    'year' => $product->year,
    'description' => $product->description
);

// Создание JSON
print_r(json_encode($product_arr));