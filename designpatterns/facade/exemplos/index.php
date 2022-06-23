<?php

namespace designerpatterns\facade\exemplos;

require_once("Delivery.php");

$itens = ["X-Burger", "X-Salada", "X-Tudo", "Fritas", "Coca-Cola"];
$formaPagamento = Delivery::PAGAMENTO_CARTAO;
$endereco = "Rua Da minha casa, 123";

$delivery = new Delivery($itens, $endereco, $formaPagamento);
print_r($delivery->fazerPedido());
