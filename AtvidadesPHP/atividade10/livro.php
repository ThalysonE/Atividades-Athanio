<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livro</title>
</head>
<style>
    .centro{
        text-align: center;
    }
    div{
        width: 500px;
        margin: 6px auto;
        background-color: rgb(205, 205, 205);
        padding: 6px 10px;
    }
    .green{
        color:green;
    }
    .blue{
        color:blue;
    }
</style>
<body>
    <h1 class="centro">Livro de Visitantes</h1>
    <?php
        session_start();
        class Visitante{
            public $nome;
            public $email;
            public $msg;
    
            public function __construct($nome, $email, $msg) {
                $this->nome = $nome;
                $this->email = $email;
                $this->msg = $msg;
            }
        }
        foreach($_SESSION["visitantes"] as $visit){
            echo "<div>"; 
            echo "<span><span class='green'>Assinado em </span>".$visit->data."<span class='blue'> por ".$visit->nome."</span></span><br>";
            echo "<span class='centro'>".$visit->msg."</span>";
            echo "</div>";
        }
    ?>
</body>
</html>