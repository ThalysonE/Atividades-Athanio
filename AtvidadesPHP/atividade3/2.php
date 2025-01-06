<!DOCTYPE html>
<html>
<head>
    <title>Calcular Diferença de Datas</title>
</head>
<body>
    <form method="post" action="">
        <label for="data">Data:</label>
        <input type="date" id="data" name="data" required>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Capturar a data do POST
        $data = $_POST["data"];
        
        // Obter a data atual
        $dataAtual = date('Y-m-d');

        // Converter as datas para timestamps
        $timestampInicial = strtotime($data);
        $timestampAtual = strtotime($dataAtual);

        // Calcular a diferença em segundos
        $diferencaSegundos = $timestampAtual - $timestampInicial;

        // Converter a diferença de segundos para dias, meses e anos
        $dias = floor($diferencaSegundos / (60 * 60 * 24));
        $meses = floor($dias / 30);
        $anos = floor($dias / 365);

        // Ajustar os dias e meses para mostrar o restante corretamente
        $dias = $dias % 30;
        $meses = $meses % 12;

        // Exibir a diferença
        echo "$anos anos, $meses meses e $dias dias";
    }
    ?>
</body>
</html>
