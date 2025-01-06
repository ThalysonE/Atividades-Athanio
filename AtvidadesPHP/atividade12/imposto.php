<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imposto</title>
</head>
<body>
    <h1>Calculadora de Imposto</h1>
    <form action="" method="POST">
        <label for="imposto">Imposto (%): </label>
        <input type="text" name="imposto" id="imposto"> <br>
        <label for="taxa">Taxa de Serviço (%): </label>
        <input type="text" name="taxa" id="taxa"> <br>
        <label for="comb">Preço do Combustível (R$): </label>
        <input type="text" name="comb" id="comb">
        <br>
        <button type ="submit" name="calc">Calcular</button>
    </form>

    <?php
        if(isset($_POST["calc"])){
            $preco = $_POST["comb"];
            $imposto = $preco * ($_POST["imposto"]/100);
            $taxa = $preco * ($_POST["taxa"]/100);
            $total = $preco + $imposto + $taxa;
            echo "Imposto : R$".$imposto;
            echo "<br>Taxa de Serviço: R$".$taxa;
            echo "<br>Total: R$".$total;
        }
    ?>
</body >
</html>