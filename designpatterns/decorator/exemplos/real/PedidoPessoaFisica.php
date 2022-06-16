<?php

class PedidoPessoaFisica extends PedidoDecorator
{
    public function execute(Pedido $pedido)
    {
        $pedido = clone $pedido;
        $pedido->cpf = "12345678901";

        return parent::execute($pedido);
    }

}