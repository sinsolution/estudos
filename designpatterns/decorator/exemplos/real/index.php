<?php

require "Component.php";
require "PedidoDecorator.php";
require "ConcreteComponent.php";
require "Pedido.php";
require "PedidoPessoaFisica.php";
require "PedidoPessoaJuridica.php";
require "PedidoComDesconto.php";

$pedido = Pedido::create();

$pedidoDefault = new ConcreteComponent();
print_r($pedidoDefault->execute($pedido));

$pedidoPF = new PedidoPessoaFisica($pedidoDefault);
print_r($pedidoPF->execute($pedido));
//
$pedidoPJ = new PedidoPessoaJuridica($pedidoDefault);
print_r($pedidoPJ->execute($pedido));
//
$pedidoDesconto = new PedidoComDesconto($pedidoDefault);
print_r($pedidoDesconto->execute($pedido));
//
$pedidoPFComDesconto = new PedidoComDesconto($pedidoPF);
print_r($pedidoPFComDesconto->execute($pedido));
//
$pedidoCompleto = new PedidoPessoaFisica($pedidoDefault);
$pedidoCompleto = new PedidoPessoaJuridica($pedidoCompleto);
$pedidoCompleto = new PedidoComDesconto($pedidoCompleto);

print_r($pedidoCompleto->execute($pedido));
