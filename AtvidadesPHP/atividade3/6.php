<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="6.php" method="POST">
        <label for="nota1">Digite a nota 1: </label> 
        <input type="number" name="nota1" id="nota1"> <br>
        <label for="nota2">Digite a nota 2: </label>
        <input type="number" id="nota2" name="nota2"> <br>
        <label for="nota3">Digite a nota 3: </label>
        <input type="number" id="nota3" name="nota3"> <br>
        <label for="notaex">Digite a nota de exercicios</label>
        <input type="number" id="notaex" name="notaex"> <br>
        <button type="submit">Enviar</button>
    </form>

    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $nota1 = intval($_POST["nota1"]);
            $nota2 = intval($_POST["nota2"]);
            $nota3 = intval($_POST["nota3"]);
            $notaex = intval($_POST["notaex"]);

            $ma =($nota1 +$nota2 * 2 + $nota3 * 3+ $notaex)/7;

            if($ma <4){
                echo"Aluno com conceito E". " Nota = ".$ma;
            }else if($ma >=4 && $ma<6){
                echo"Aluno com conceito D". " Nota = ".$ma;
            }else if($ma >=6 && $ma<7.5){
                echo"Aluno com conceito C". " Nota = ".$ma;
            }else if($ma >=7.5 && $ma<9){
                echo"Aluno com conceito B". " Nota = ".$ma;
            }else {
                echo "Aluno com conceito A". " Nota = ".$ma;
            }
        }
    
    ?>
</body>
</html>