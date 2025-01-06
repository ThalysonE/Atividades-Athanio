<!DOCTYPE html>
<html>
<head>
    <title>Classificação de Nadador</title>
</head>
<body>
    <form method="post" action="4.php">
        <label for="p1">Digite a idade do nadador</label>
        <input type="text" id="data" name="idade" required>
        <input type="submit" value="Calcular">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $idade = $_POST["idade"];
        if($idade >= 5 && $idade <=7){
            echo "Classificação: infantil A";
        }else if($idade >= 8 && $idade <=10){
            echo "Classificação: infantil B";
        }else if($idade >= 11 && $idade <=13){
            echo "Juvenil A";
        }else if($idade >= 14 && $idade <=17){
            echo "Juvenil B";
        }else{
            echo "Adulto";
        }
    }
    ?>
</body>
</html>
