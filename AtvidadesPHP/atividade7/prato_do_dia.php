<?php
    $dia = 6;
    class PratoDodia{
        public $dia;
        public $prato;
        public $preco;

        public function __construct($dia,$prato,$preco) {
            $this->dia = $dia;
            $this->prato = $prato;
            $this->preco = $preco;
        }
    }
    $p1 = new PratoDodia('Domingo','Lasanha a quatro queijos', 12.60);
    $p2 = new PratoDodia('Segunda-feira','Frango ao molho madeira', 10.00);
    $p3 = new PratoDodia('Terça-feira','Arroz à grega', 09.40);
    $p4 = new PratoDodia('Quarta-feira','Feijoada à moda da casa', 11.20);
    $p5 = new PratoDodia('Quinta-feira','Nhoque paulista', 08.50);
    $p6 = new PratoDodia('Sexta-feira','Bacalhau ao forno', 15.20);
    $p7 = new PratoDodia('Sabado','Feijão branco', 10.00);
    $pratos = [$p1,$p2,$p3,$p4,$p5,$p6,$p7];

    echo '<p>Hoje é <strong>'.$pratos[$dia]->dia .'</strong></p>';
    echo '<p>Nossa sugestão para hoje é: <strong>'.$pratos[$dia]->prato.'</strong></p>';
    echo '<p>Preço: <strong>'.$pratos[$dia]->preco.'</strong></p>';
?>