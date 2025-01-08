<?php
$url = '';
$reposta = file_get_contents(($url));
$dados = json_encode($reposta, true);

var_dump($dados);

echo "Valor do dolar:".$dados["USDBRL"]['bid']. '<br>';
?>
