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
        $statement = $this->conn->prepare($query);
        //выполняем запрос
        $statement->execute();
        return $statement;
    }

    //Получить одного робота
    public function readOneRobo()
    {
        $query = 'SELECT id, name, type, year, description FROM ' . $this->table . ' WHERE id = ? LIMIT 0,1';
        // подготавливаем
        $statement = $this->conn->prepare($query);
        //Биндим id
        ;$statement(1, $this->id);
        //выполняем запрос
        $statement->execute();

        $row = $statement->fetch(PDO::FETCH_ASSOC);

        // устанавливаем свойства
        $this->name = $row['name'];
        $this->type = $row['type'];
        $this->year = $row['year'];
        $this->description = $row['description'];

    }
}