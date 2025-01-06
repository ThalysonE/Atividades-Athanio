
<html lang="en">
<head>
    <style>
        div{
            width: fit-content;
            margin: 0 auto;
            margin-top: 100px;
            text-align:center;
        }
        input{
            margin: 10px auto;
        }
        button{
            margin-bottom: 6px;
        }
    </style>
</head>
<body>
    <?php
        $pesoIdeal = NULL;
       
        $salario = NULL;
        $novosalario = NULL;
        if($_SERVER["REQUEST_METHOD"] === "POST"){
            $sexo = $_POST["sexo"];
            $altura = floatval($_POST["altura"]);

            if($sexo === "M" || $sexo == 'm'){
                $pesoIdeal = (72.7 * $altura ) - 58;
            }else if ($sexo === "F" || $sexo  = 'f'){
                $pesoIdeal = (62.1 * $altura) - 44.7;
            }
        }
    ?>
    <div>
        <form method="POST" action="4.php">
            <h1>Calculo de peso ideal</h1>
            <label for="n1">Informe sua altura</label> 
            <input type="text" name="altura" id="n1">
            <br>
            <label for="sex">Sexo(M - masc, F - fem): </label>
            <input type="text" name="sexo" id="sex"> <br>
            <button type="submit">Enviar</button> <br>
            <span>Seu Peso Ideal:  <span><?php echo ($pesoIdeal !==NULL)? $pesoIdeal: '';?></span> </span>
        </form>        
    </div>    
</body>
</html>