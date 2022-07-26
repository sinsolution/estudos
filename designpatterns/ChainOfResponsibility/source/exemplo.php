<?php

require "Desconto.php";
require "BaseDesconto.php";
require "DescontoMaisDe500Reais.php";
require "DescontoMaisDe5Itens.php";
require "DescontoDeNatal.php";
require "Pedido.php";

$pedido = new Pedido();
$pedido->itens = 4;
$pedido->valor = 600;
$pedido->eNatal = True;

$filaDesconto = new DescontoMaisDe500Reais();
$filaDesconto->adcProximoDesconto(new DescontoMaisDe5Itens())
             ->adcProximoDesconto(new DescontoDeNatal());

$filaDesconto->calcDesconto($pedido);
echo "Desconto pedido {$pedido->desconto}%\n";
