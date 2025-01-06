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
            <?php
               /*
               Letra A

               $produto = "1"; 
        
                for ($i = 98; $i <= 1478; $i++) {
                    $primo = true;
                    for ($x = 2; $x <= sqrt($i); $x++) {
                        if ($i % $x == 0) {
                            $primo = false;
                            break;
                        }
                    }
                    if ($primo == true) {
                        $produto = bcmul($produto, (string)$i); // Multiplicação com `BCMath`
                    }
                }
        
                echo "O resultado é: " . $produto;
               */
              
              #Letra B (daqui pra baixo)

              $fatorial = null;
              if($_SERVER["REQUEST_METHOD"]=='POST' && isset($_POST["numero"])){
                    $numero = $_POST["numero"];
                    $fatorial = 1;
                    for($i = 2; $i <= $numero;$i++){
                        $fatorial *= $i;
                    }
                    
              }
            ?>
    <form method="post" action="5.php">
        <div>
            <h1>Numero Fatorial</h1>
            <label for="num">Digite o numero</label>
            <input type="number" name="numero" id="num"> <br>
            <button type="submit">Enviar</button> <br>
            
            <?php
                echo isset($fatorial)? "<span>O fatorial é igual a </span>" . $fatorial: '';
            ?>
        </div>
    </form>

</body>
</html>

