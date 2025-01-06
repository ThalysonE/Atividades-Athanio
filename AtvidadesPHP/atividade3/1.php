<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        div{
            margin: 50px auto;
            text-align: center;
        }
    </style>
</head>
<body>
                <?php
                  $n1 = 10;
                  $n2 = 15;
                  $n3 = 5;

                  $numeros = [$n1,$n2, $n3];
                  sort($numeros);
                  for($i = 0; $i<=2; $i++){
                    if($i == 2){
                        echo "<span style ='color: red'>$numeros[$i]</span>";
                    }else{
                        echo "<span style ='color: gray'>$numeros[$i] </span>";
                    }
                  }
                                          
            ?>
</body>
</html>

