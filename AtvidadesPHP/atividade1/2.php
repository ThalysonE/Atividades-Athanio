
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
        
        $divisores = [];

        function Divisores ($divisores){
            return implode(" ", $divisores);
        }
        $media = NULL;
        if($_SERVER["REQUEST_METHOD"] === "POST"){
            $numero = $_POST["numero1"];

            for($n = 1; $n<=$numero; $n ++){
                if($numero % $n == 0){
                    array_push($divisores, $n);
                }
            }
        }
    ?>

    <div>
        <form method="POST" action="2.php">
            <h1>Divisores</h1>
            <label for="n1">Digite um numero:</label> 
            <input type="number" name="numero1" id="n1">
            <br>
            <button type="submit">Enviar</button> <br>
            <span>Media: <span><?php echo ($divisores !== NULL)? Divisores($divisores): ''?></span> </span>
        </form>        
    </div>    
</body>
</html>