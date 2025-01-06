<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <form method="post" action="2.php">
        <div>
            <h1>Expressão Numerica</h1>
            <label for="n1"></label>
            <input type="number" name="numero" id = "n"><br>
            <button type="submit">Enviar</button> <br>
        </div>

    </form>    
         <?php 
            if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["numero"])){
                $numero = intval($_POST["numero"]);
                $e = 1;
                $cont = 1;
                while($cont <= $numero){
                    $fat = 1;
                    for($i = 1; $i<= $cont; $i++){
                        $fat *= $i;
                    }
                    $e += 1/$fat;
                    $cont++;
                }
                echo "O resultado é: ".$e;
            }
        ?>
        
</body>
</html>