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

//Запрос товара
$result = $product->readRobo();

//Возвращаем строку
$num = $result->rowCount();

//Проверяем  товары
if($num > 0) {
    // Массив товара
    $products_arr = array();

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        $product_item = array(
            'id' => $id,
            'name' => $name,
            'type' => $type,
            'year' => $year,
            'description' => html_entity_decode($description)
        );

        //Отправить в 'data'
        array_push($products_arr, $product_item);
    }

    echo json_encode($products_arr);

}  else {
    //  На случай если в базе нет роботов
    echo json_encode(
        array('notfoundmessage' => 'Роботы не найдены')
    );
}

