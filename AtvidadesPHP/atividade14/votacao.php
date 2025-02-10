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
        $quantVotosFile = "quantVotos.txt";
        $votosDathFile = "votosDath.txt";
        $votosHomerFile = "votosHomer.txt";
        $votosBrancoFile = "votosBranco.txt";
        $votosNuloFile = "votosNulo.txt";

        if(!file_exists($quantVotosFile)){
            file_put_contents($quantVotosFile,'0');
            file_put_contents($votosDathFile,'0');
            file_put_contents($votosBrancoFile,'0');
            file_put_contents($votosNuloFile,'0');
            file_put_contents($votosHomerFile,'0');
        }

        if(isset($_POST["bt-dath"])|| isset($_POST["bt-homer"])|| isset($_POST["bt-branco"]) ||isset($_POST["bt-nulo"])){
            function atualizarVotos($arquivo) {
                $votosR = fopen($arquivo, "r");
                $quant = intval(fgets($votosR));
                fclose($votosR);
                $quant += 1;
                file_put_contents($arquivo, $quant);
            }
    
            if (isset($_POST["bt-dath"])) {
                atualizarVotos($votosDathFile);
            }
            if (isset($_POST["bt-homer"])) {
                atualizarVotos($votosHomerFile);
            }
            if (isset($_POST["bt-branco"])) {
                atualizarVotos($votosBrancoFile);
            }
            if (isset($_POST["bt-nulo"])) {
                atualizarVotos($votosNuloFile);
            }
            atualizarVotos($quantVotosFile);
        }

    ?>
    <h1>Sistema de Votação - IFPI</h1>
    <div class="main">
        <form action="" method="POST">
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
             <button name="bt-dath">Dath Vader</button>
             <button name ="bt-homer">Homer Simpson</button>
             <button name="bt-branco">Branco</button>
             <button name="bt-nulo">Nulo</button>
         </div>
        </form>
        <fieldset>
            <legend>Resultado Parcial</legend>
            <?php
                if(isset($_POST["bt-dath"])|| isset($_POST["bt-homer"])|| isset($_POST["bt-branco"]) ||isset($_POST["bt-nulo"])){
                    $quantVotosR = fopen("quantVotos.txt", "r");
                    $votosDathR = fopen("votosDath.txt", "r");
                    $votosHomerR = fopen("votosHomer.txt", "r");
                    $votosBrancoR = fopen("votosBranco.txt", "r");
                    $votosNuloR = fopen("votosNulo.txt", "r");
                    $votosTotais = intval(fgets($quantVotosR));
                    $votosTotaisBranco = intval(fgets($votosBrancoR));
                    $votosTotaisDath = intval(fgets($votosDathR));
                    $votosTotaisHomer = intval(fgets($votosHomerR));
                    $votosTotaisNulo = intval(fgets($votosNuloR));

                    print($votosTotais);
                    print($votosTotaisDath);
                    echo "<li>Candidato 1 - ".floor($votosTotaisDath/$votosTotais*100)."%</li>";
                    echo "<li>Candidato 2 - ".floor($votosTotaisHomer/$votosTotais*100)."%</li>";
                    echo "<li>Branco - ".floor($votosTotaisBranco/$votosTotais*100)."%</li>";
                    echo "<li>Nulo - ".floor($votosTotaisNulo/$votosTotais*100)."%</li>";
                }
            ?>
        </fieldset>
    </div>
    
</body>
</html>