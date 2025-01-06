
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo do Acerto</title>

    <style>

    </style>
</head>
<body>
    <div>
        <h1>Jogo do Acerto</h1>
        <form action="jogo_do_acerto.php" method="POST">
            <label for="numero">Digite um número entre 1 e 20</label> 
            <input type="number" id="numero" name="numero">
            <br>
            <button type="submit">Verificar</button>
        </form>
        <fieldset>
            <legend>Resultado</legend>
            <?php
                
                if($_SERVER["REQUEST_METHOD"]=="POST"){
                    $numero = $_POST["numero"];
                    $acertou = false;
                    $sorteados = [];                                        
                    while(count($sorteados)<= 6){
                        $aleatorio = rand(1,20);
                        if(!in_array($aleatorio,$sorteados)){
                            $sorteados[] = $aleatorio;
                        }
                    }
                    for($x = 0; $x<count($sorteados); $x++){
                        if($sorteados[$x] == $numero){
                            $acertou = True;
                        }
                    }
                    if($acertou){
                        echo "<p style='color: green'>VOCE ACERTOU</p>";
                        echo "<span>Número digitado: </span>".$numero."<br>";
                        echo "Números sorteados: ".implode(" ", $sorteados) ;
                    }else{
                        echo "<p style='color: red'>VOCE ERROU</p>";
                        echo "<span>Número digitado: </span>".$numero."<br>";
                        echo "Números sorteados: ".implode(" ", $sorteados) ;
                    }
                }
            
            ?>
        </fieldset>
    </div>
</body>
</html>