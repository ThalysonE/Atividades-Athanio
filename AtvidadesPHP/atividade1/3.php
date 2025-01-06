
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
        
       
        $salario = NULL;
        $novosalario = NULL;
        if($_SERVER["REQUEST_METHOD"] === "POST"){
            
            $salario= floatval($_POST["salario"]);
            if($salario <= 300){
                $novosalario = $salario*1.5;
            }else{
                $novosalario = $salario*1.3;
            }
        }
    ?>
    <div>
        <form method="POST" action="3.php">
            <h1>Calculo de salario</h1>
            <label for="n1">Informe o Salário:</label> 
            <input type="number" name="salario" id="n1">
            <br>
            <button type="submit">Enviar</button> <br>
            <span>Reajuste Salario: <span><?php echo ($salario !== null)? number_format($novosalario, 2, ',', '.'): '';?></span> </span>
        </form>        
    </div>    
</body>
</html>