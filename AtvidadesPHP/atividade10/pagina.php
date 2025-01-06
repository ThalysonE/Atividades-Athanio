<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livro de Visitantes</title>
</head>
<style>
    .blue{
        color: blue;
    }
    
</style>
<body>
    <?php
        session_start(
        );
        include_once 'classe_visitante.php';
        
        if(!isset($_SESSION["visitantes"])){
            $_SESSION["visitantes"] = [];
        }
        if(isset($_POST["btn-limpar"])){
            session_unset();
        }
        if(isset($_POST["btn-assinar"])){
            $visitante = new Visitante($_POST["nome"], $_POST["email"], $_POST["msg"], date('d-m-Y'));
            $_SESSION["visitantes"][] = $visitante;
            echo "<span><span>Assinado em </span>".date('d-m-Y')."<span class='blue'> por <a href='livro.php'>".$visitante->nome."</a></span> <br>".$visitante->msg."</span>";
        }    
    ?>
    <div>
        <form action="" method="POST">
            <label for="">Nome (*):</label>
            <input type="text" id="nome" name="nome" require> <br>
            <label for="email">E-mail(*):</label>
            <input type="email" id="email" name="email" require> <br>
            <label for="msg">Mensagem : <span class="blue">Obs: (*) Preenchimento obrigatório</span> </label> <br>
            <textarea name="msg" id="msg">
            </textarea> <br>
            <button type= "submit" name="btn-assinar">Assinar</button>
            <button type ="submit" name ="btn-limpar">Limpar</button>
        </form>
    </div>
</body>
</html>