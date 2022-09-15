<?php
class Sql{
    public $conectar;

    public function __construct()
    {
        try{
            $conn = new PDO("mysql:host=localhost;dbname=academia", "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);               
            $this->conectar = $conn;
        }catch(PDOException $e) {
            echo 'Erro com o banco de dados: ' . $e->getMessage();
        }
    }
}
    