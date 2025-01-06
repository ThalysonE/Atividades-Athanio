<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        div{
            margin: 50px auto;
            text-align: center;
        }
    </style>
</head>
<body>
    <form method="post" action="6.php">
        <div>
            <h1>Serie de 20</h1>
            <label for="num">Digite o numero</label>
            <input type="number" name="numero" id="num" required> <br>
            <button type="submit">Enviar</button> <br>
            <div>
                <?php
                  if($_SERVER["REQUEST_METHOD"]=='POST' && strlen($_POST["numero"]) > 0){
                        $numero = $_POST["numero"];
                        $fatorial = 1;
                        for($i = 1; $i <= 20;$i++){
                            echo $i*intval($numero).' ';
                        }
                  }
            ?>
            </div>
            
        </div>
    </form>

</body>
</html>

