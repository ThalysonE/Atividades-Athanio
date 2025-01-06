<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <form method="post" action="4.php">
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
                $quantNum = $numero;
                $quantX = 0;
                for($i =1 ; $i<=$numero ; $i++){
                    if($quantX> 0){
                        for($x = 1; $x<= $quantX; $x++){
                            echo "x";
                        }

                    }
                    for($y = 1; $y<= $quantNum; $y++){
                        echo $y;
                    }
                    echo "<br>";
                    $quantNum --;
                    $quantX ++;
                }
            }
        ?>
        
</body>
</html>