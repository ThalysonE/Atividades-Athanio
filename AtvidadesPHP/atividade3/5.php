<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aumento de salário</title>
    <style>
        div{
            margin: 50px auto;
            width:100;
            text-align:center;
        }
    </style>
</head>
<body>
    <div>
        <form action="5.php" method="POST">
            <label for="cargo">Digite o cargo: </label>
            <input type="text" id ="cargo" name="cargo"><br>
            <label for="salario">Digite o salário</label>
            <input type="number" id ="salario" name="salario"> <br>
            <button type="submit">Enviar</button>
        </form>
    </div>
    <?php
        
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $cargo = $_POST["cargo"];
            $salario = floatval($_POST["salario"]);
            if($cargo == "Gerente"||$cargo == "gerente"){
                $salarioFinal = $salario * 1.1;
            }else if($cargo == "Engenheiro"||$cargo == "engenheiro"){
                $salarioFinal = $salario * 1.2;
            }else if($cargo =="Tecnico"||$cargo == "tecnico"){
                $salarioFinal = $salario * 1.3;
            }else{
                $salarioFinal = $salario * 1.4;
            }
            echo '<p>Salario Antigo: '.$salario.'</p>';
            echo '<p>Novo Salario: '.$salarioFinal.'</p>';
            echo '<p>Diferença: '.$salarioFinal - $salario.'</p>';
        }
    
        
        
        
        
    ?>
    
</body>
</html>