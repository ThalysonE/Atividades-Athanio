<!DOCTYPE html>
<html>
<head>
    <title>Distancia entre dois pontos</title>
</head>
<body>
    <form method="post" action="3.php">
        <label for="p1">Digite o primeiro ponto (x,y)</label>
        <input type="text" id="data" name="ponto1" required>
        <label for="p2">Digite o segundo ponto (x,y)</label>
        <input type="text" id="p2" name="ponto2" required>
        <input type="submit" value="Calcular">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ponto1 = explode(",",str_replace(' ', '', $_POST["ponto1"]));
        $ponto2 = explode(",",str_replace(' ', '', $_POST["ponto2"]));
        $x1 = intval($ponto1[0]);
        $y1 = intval($ponto1[1]);
        $x2 = intval($ponto2[0]);
        $y2 = intval($ponto2[1]);
        $d = sqrt(pow(($x2-$x1),2) + pow(($y2-$y1),2));
        echo "A distancia entre os pontos é $d";
        
    }
    ?>
</body>
</html>
s