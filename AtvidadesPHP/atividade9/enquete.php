<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enquete</title>
</head>
<style>
    li div{
        background-color:green
    }
</style>
<body>
    <?php
        session_start();
        if(!isset($_SESSION["votos"])){
            $_SESSION['python'] = 0;
            $_SESSION["java"]= 0;
            $_SESSION["c"] = 0;
            $_SESSION ["PHP"] = 0;
            $_SESSION["votos"] = 0;
        }
        if(isset($_POST["btn-limpar"])){
            session_unset();
        }
        if(isset($_POST["btn-votar"])){
            if(isset($_POST["ling"])){
                $option = $_POST["ling"];
                if($option == "py"){
                    $_SESSION["python"] ++;
                    $_SESSION["votos"] ++;
                }else if($option =="jv"){
                    $_SESSION["java"]++;
                    $_SESSION["votos"] ++;
                }
                else if($option =="c"){                                                                                     
                    $_SESSION["c"]++;
                    $_SESSION["votos"] ++;
                }
                else if($option =="ty"){
                    $_SESSION["PHP"]++;
                    $_SESSION["votos"] ++;
                }
            }
        } 
    ?>
    <fieldset>
        <legend>Enquete</legend>
        <form action="enquete.php" method="POST">
            <label for="">Qual linguagem de programação você mais   gosta?</label> <br> <br>
            <input type="radio" id="py" name="ling" value="py" >
            <label for="py">Python</label> <br>
            <input type="radio" id="pv" name="ling" value="jv" >
            <label for="py">Java</label> <br>
            <input type="radio" id="c" name="ling" value="c" >
            <label for="py">C</label> <br>
            <input type="radio" id="ty" name="ling" value="ty" >
            <label for="py">PHP</label> <br> <br>
            <button type="submit" name="btn-votar">Votar</button>
            <button type="submit" name="btn-limpar">Limpar</button>
        </form>
    </fieldset>
    <br>
    <?php
        if(isset($_POST["btn-votar"])){
            $python = floor($_SESSION["python"]/$_SESSION["votos"]*100);
            $c = floor($_SESSION["c"]/$_SESSION["votos"]*100);
            $php = floor($_SESSION["PHP"]/$_SESSION["votos"]*100);
            $java=floor( $_SESSION["java"]/$_SESSION["votos"]*100);
            echo "<fieldset>";
            echo "<legend>Resultados</legend>";
            echo "<li>Python - ".$python."%</li>";
            echo "<div style='width:".($python*5)."px; background-color: red; height: 20px;'></div>";
            echo "<li>C - ".$c."%</li>";
            echo "<div style='width:".($c*5)."px; background-color: yellow; height: 20px;'></div>";
            echo "<li>PHP - ".$php."%</li>";
            echo "<div style='width:".($php*5)."px; background-color: green; height: 20px;'></div>";
            echo "<li>Java - ".$java."%</li>";
            echo "<div style='width:".($java*5)."px; background-color: blue; height: 20px;'></div>";
            echo "</fieldset>";
        }
    ?>
</body>
</html>