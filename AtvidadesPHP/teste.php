<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            width: fit-content;
            margin: 0 auto;
            margin-top: 100px;
            text-align:center;
        }
    </style>
</head>
<body>
    <?php
        function NumeroPar($numero){
            if($numero % 2 == 0){
                return true;
            }
             return false;
          }
          if($_SERVER["REQUEST_METHOD"]=== "POST"){
                $numero = $_POST["numero"];
                $result = NumeroPar($numero);
          }

    ?>
    <div>
        <h1>Teste de numero impar ou par</h1>
        <form method="POST" action="teste.php">
            <label for="num">Digite um número: </label>
            <input type="number" id='num' name="numero" required><br>
            <button type='submit'>Enviar</button><br>
            <span>Resultado: <span><?php echo isset($result)? ($result? "Numero Par": "Numero Impar"): '';?></span></span>
        </form>
    </div>
    <?php
        
    ?>

</body>
</html>