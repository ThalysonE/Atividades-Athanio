<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explode</title>
</head>
<body>
    <form action="explode.php" method="POST">
        <label for="lista">Entre com uma lista de numeros separados por virgula para serem somados</label>
        <input type="text" id="lista" name="lista"> <br>
        <button type="submit">Enviar</button>
    </form>
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $listaStr = $_POST["lista"];
            $listaNum = explode(",", $listaStr);
            $soma = 0;
            foreach($listaNum as $x){
                $soma+=$x; 
            }
            echo "<br><strong>Resultado: ".$soma."</strong>";
        }
    ?>
</body>
</html>