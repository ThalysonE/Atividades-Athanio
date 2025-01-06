<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de dados</title>
</head>
<body>
    <form action="" method="POST">
        <label for="dados">Estrutura de Dados 2</label><br>
        <input type="text" name="dados" id="dados">
        <button type="submit" name="add">adicionar</button>
        <button type="submit" name="sub">subtrair</button>
    </form>
    <br>
    
    <?php
    session_start();
    if(isset($_POST["add"]) || isset($_POST["sub"])){
        if(!isset($_SESSION["array"])){
            $_SESSION["array"] = [];
        }
        $dados = $_POST["dados"];
        if(isset($_POST["add"])){
            $_SESSION["array"][] = $dados;
        }else if(isset($_POST["sub"])){
            array_shift($_SESSION["array"]);
        }
        print_r($_SESSION["array"]);
    }
    ?>
</body>
</html>