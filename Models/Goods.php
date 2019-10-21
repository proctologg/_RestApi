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


}
