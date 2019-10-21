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
        $query = 'SELECT id, name, type, year, description FROM ' . $this->table . ' WHERE id = ?';
        // подготавливаем
        $statement = $this->conn->prepare($query);
        //Биндим id
        $statement->bindParam(1, $this->id);
        //выполняем запрос
        $statement->execute();

        $row = $statement->fetch(PDO::FETCH_ASSOC);

        // устанавливаем свойства
        $this->name = $row['name'];
        $this->type = $row['type'];
        $this->year = $row['year'];
        $this->description = $row['description'];

    }


//СОздание робота
    public function createRobo()
    {
        $query = 'INSERT INTO ' . $this->table . ' SET name = :name, type = :type, year = :year, description = :description';
// подготавливаем
        $statement = $this->conn->prepare($query);
        // Очищаем даннные
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->type = htmlspecialchars(strip_tags($this->type));
        $this->year = htmlspecialchars(strip_tags($this->year));
        $this->description = htmlspecialchars(strip_tags($this->description));
        // Биндим аднные
        $statement->bindParam(':name', $this->name);
        $statement->bindParam(':type', $this->type);
        $statement->bindParam(':year', $this->year);
        $statement->bindParam(':description', $this->description);
        // Выполняем запрос
        if ($statement->execute()) {
            return true;
        }
    }


    public function updateRobo()
    {
        $query = 'UPDATE ' . $this->table . ' SET name = :name, type = :type, year = :year, description = :description WHERE id = :id';
// подготавливаем
        $statement = $this->conn->prepare($query);
        // Очищаем даннные
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->type = htmlspecialchars(strip_tags($this->type));
        $this->year = htmlspecialchars(strip_tags($this->year));
        $this->description = htmlspecialchars(strip_tags($this->description));
        $this->id = htmlspecialchars(strip_tags($this->id));

        // Биндим данные
        $statement->bindParam(':name', $this->name);
        $statement->bindParam(':type', $this->type);
        $statement->bindParam(':year', $this->year);
        $statement->bindParam(':description', $this->description);
        $statement->bindParam(':id', $this->id);
        // Выполняем запрос
        if ($statement->execute()) {
            return true;
        }
    }


    //Удаление робота
    public function deleteRobo()
    {
        $query = 'DELETE FROM ' . $this->table . ' WHERE id = :id';
        // подготавливаем
        $statement = $this->conn->prepare($query);

        // Очищаем даннные
        $this->id = htmlspecialchars(strip_tags($this->id));
        // Биндим данные
        $statement->bindParam(':id', $this->id);
    }

}
