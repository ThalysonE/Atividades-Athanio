<?php
    class Database{
        private $host = "localhost";
        private $dbname = "pedidos";
        private $user = "root";
        private $pass = "";
        private $conn;

        function Connect(){
            try{
                $this->conn = new PDO("mysql:host=".$this->host .";dbname=". $this->dbname, $this->user, $this->pass);
            }catch(PDOException $e){
                echo "Erro de conexão " . $e;
            }
            return $this->conn;
        }
    }
?>