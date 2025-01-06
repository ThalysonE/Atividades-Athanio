<?php
    class Visitante{
        public $nome;
        public $email;
        public $msg;
        public $data;

        public function __construct($nome, $email, $msg, $data) {
            $this->nome = $nome;
            $this->email = $email;
            $this->msg = $msg;
            $this->data = $data;
        }
    }
?>