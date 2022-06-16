<?php

class ConcreteComponent implements Component
{
    public function execute(Pedido $pedido)
    {
        return $pedido;
    }
}
