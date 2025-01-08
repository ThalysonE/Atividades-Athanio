<?php

    include_once "produtos.php";
    $produto = new Produto();
    
    $produto->Inserir("produto1", 10.4);
    $dados = $produto->Mostrar();

    foreach ($dados as $d){
        foreach($d as $x){
            echo $x;
        }
    }




?>