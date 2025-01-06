<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
        <div>
            <h1>Idade maior que a outra</h1>
            <?php 
                $alturaChico = 1.5;
                $alturaZe = 1.1;
                $anos = 0;
                while($alturaZe<$alturaChico){
                    $alturaChico += 0.2;
                    $alturaZe += 0.3;
                    $anos ++;
                }
                echo "A quantidade de anos: ".$anos;
            
            ?>  
        </div>
</body>
</html>