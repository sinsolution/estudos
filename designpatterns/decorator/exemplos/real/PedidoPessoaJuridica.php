<?php

class PedidoPessoaJuridica extends PedidoDecorator
{
    public function execute(Pedido $pedido)
    {
        $pedido = clone $pedido;
        $pedido->cnpj = "12345678000100";
        $pedido->nome_fantasia = "Nome Teste";

        return parent::execute($pedido);
    }

}