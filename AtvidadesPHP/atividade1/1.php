
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
        

        function CalcMedia ($n1, $n2){
            return ($n1 +$n2)/2;
        }
        $media = NULL;
        if($_SERVER["REQUEST_METHOD"] === "POST"){
            $nota1 = $_POST["numero1"];
            $nota2 = $_POST["numero2"];
            $media = CalcMedia($nota1, $nota2);
        }
    ?>

    <div>
        <form method="POST" action="1.php">
            <h1>Calculo de notas</h1>
            <label for="n1">Nota 1:</label> 
            <input type="number" name="numero1" id="n1">
            <br>
            <label for="n2">Nota 2:</label> 
            <input type="number" name="numero2" id="n2">
            <br>
            <button type="submit">Enviar</button> <br>
            <span>Media: <span><?php echo ($media !== null)? $media:'';?></span> </span>
        </form>        
    </div>    
</body>
</html>