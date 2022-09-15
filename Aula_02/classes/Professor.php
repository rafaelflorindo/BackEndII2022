<?php
include ("Sql.php");

class Professor extends Sql{
    /*public $conectar;

    public function __construct()
    {
        try{
            $conn = new PDO("mysql:host=localhost;dbname=academia", "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);               
            $this->conectar = $conn;
        }catch(PDOException $e) {
            echo 'Erro com o banco de dados: ' . $e->getMessage();
        }
    }*/
    public function inserir($nome)
    {
        try {
            $stmt = $this->conectar->prepare('INSERT INTO professor (nome) VALUES (:NOME)');
            
            $stmt->execute(array(':NOME' => $nome));
            if($stmt->rowCount() > 0){
                return true;
            }
        } catch(PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }
    
    public function listar()
    {
        try {       
            $stmt = $this->conectar->prepare('SELECT * FROM professor');
            $stmt->execute();
            
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        } catch(PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    public function atualizar($id, $nome)
    {
        try {       
            $stmt = $this->conectar->prepare('UPDATE professor SET nome = :NOME WHERE id = :ID');
            $stmt->execute(array(':ID' => $id, ':NOME'=>$nome));
            
            if($stmt->rowCount() > 0){
                return true;
            }
        } catch(PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    public function deletar($id)
    {
        try {       
            $stmt = $this->conectar->prepare('DELETE FROM professor WHERE id= :ID');
            $stmt->execute(array(':ID' => $id));
            
            if($stmt->rowCount() > 0){
                return true;
            }
        } catch(PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    public function listarUm($id)
    {
        try {       
            $stmt = $this->conectar->prepare('SELECT * FROM professor WHERE id = :id');
            $stmt->execute(array('id' => $id));
            
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        } catch(PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }
}
    
