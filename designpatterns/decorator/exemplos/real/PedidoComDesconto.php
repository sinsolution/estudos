<?php

class PedidoComDesconto extends PedidoDecorator
{
    public function execute(Pedido $pedido)
    {
        $pedido = clone $pedido;
        $pedido->desconto = 0.4;
        $pedido->valor_desconto = $pedido->valor * $pedido->desconto;

        return parent::execute($pedido);
    }
}
