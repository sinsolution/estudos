<?php

class Pedido
{
    public static function create()
    {
        $pedido = new self();
        $pedido->nome = "Teste";
        $pedido->email = "teste@teste.com";
        $pedido->valor = 15.00;

        return $pedido;
    }
}