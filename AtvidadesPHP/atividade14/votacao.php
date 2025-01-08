<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<style>
    .flex{
        display: flex;
        justify-content: space-around;
    }
    .principal{
        padding: 10px;
        border: 1px solid black;
    }
    h1{
        text-align: center;
    }
    img{
        width: 100px;
        height: 80px;

    }
    main{
        margin: 20px auto;
    }
 
</style>
<body>
    <?php
        session_start();
        $arquivo;
        if(isset(($_SESSION["votos"]))){
            $_SESSION["   "]
        }

    ?>
    <h1>Sistema de Votação - IFPI</h1>
    <div class="main">
        <b>Qual o candidato voce esccolhe para o presidente do Grêmio Estudantil?</b>
        <div>
            <div class="principal flex ">
                <div class="flex separacao">
                    <img src="darth.jpg" alt="">
                    <p><b>Dark Vander</b> - Candidato 01</p>
                </div>
                <div class="flex separacao">
                    <img src="homer.png" alt="">
                    <p><b>Homer Simpson</b> - Candidato 02</p>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="flex">
            <button> Dath Vader</button>
            <button>Homer Simpson</button>
            <button>Branco</button>
            <button>Nulo</button>
        </div>
        <fieldset>
            <legend>Resultado Parcial</legend>
            <?php
            echo "Candidato 01 - ".$python."%";
            echo "<div style='width:".($*5)."px; background-color: red; height: 20px;'></div>";
            ?>
        </fieldset>
    </div>
    
</body>
</html>