<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

include_once '../../Configuration/DataBase.php';
include_once '../../Models/Goods.php';

$database = new Database();
$db = $database->connect();
// Создаем объект товара
$product = new Goods($db);


// получаем равку данных
$data = json_decode(file_get_contents("php://input"));

$product->name = $data->name;
$product->type = $data->type;
$product->year = $data->year;
$product->description = $data->descripton;

// Создаем пост
if($product->createRobo()) {
    echo json_encode(
        array('trueMesssage' => 'Робот создан в базе данных')
    );
} else {
    echo json_encode(
        array('falseMessage' => 'Робот не создан в базе данных')
    );
}