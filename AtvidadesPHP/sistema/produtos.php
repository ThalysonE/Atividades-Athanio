<?php
    include_once "database.php";
    class Produto{
        private $conn;
        private $table;
        public function __construct() {
            $database = new Database();
            $this->conn = $database->Connect();
        }
        public function Mostrar(){
            $sql = "SELECT *FROM ".$this->table;
            $start =$this->conn->query($sql);
            return $start->fetchAll(PDO::FETCH_ASSOC);
        }
        public function Inserir($preco, $nome){
            $sql = "INSERT INTO ".$this->table." (nome, preco) VALUES(:nome, :preco)";
            $start = $this->conn->prepare($sql);

            $start->execute([":nome"=>$nome, ":preco"=>$preco]);
            $start->execute();
        }
    
    }
?>