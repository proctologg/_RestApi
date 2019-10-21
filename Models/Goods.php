<?php
class Goods
{
    private $conn;
    private $table = 'goods';
    //свойства товаров
    public $id;
    public $name;
    public $type;
    public $year;
    public $description;

    public function __construct($db)
    {
        $this->conn = $db;
    }

// Получить всех роботов
public function readRobo()
 {
     //создаем запрос
     $query = 'SELECT id, name, type, year, description FROM ' . $this->table . '';
     // подготавливаем
     $statement = $this->conn-prepare($query);
     //выполняем запрос
     $statement->execute();
     return $statement;
 }

}
