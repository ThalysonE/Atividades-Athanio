<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <form method="post" action="1.php">
        <div>
            <h1>Pirâmide de números</h1>
            <label for="n1"></label>
            <input type="number" name="numero" id = "n"><br>
            <button type="submit">Enviar</button> <br>
        </div>

    </form>    
         <?php 
            if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["numero"])){
                $numero = intval($_POST["numero"]);
                for($x = 1;$x <= $numero; $x++){
                    for($y = 1; $y <= $x; $y++){
                        echo $y;
                    }
                    echo "<br>";
                }
                for($x = $numero-1; $x >= 1; $x--){
                    for($y = 1; $y <= $x; $y ++){
                        echo $y;
                    }
                    echo "<br>";
                };
            }

        ?>
</body>
</html>