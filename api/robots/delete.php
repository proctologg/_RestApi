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

// Устанаваливаем ID для удаления
$product->id = $data->id;

// Метод удаления
if ($product->deleteRobo()) {
    echo json_encode(
        array('trueMesssage' => 'Робот удален в базе данных')
    );
} else {
    echo json_encode(
        array('falseMessage' => 'Робот не удален в базе данных')
    );
}
