<?php

class PedidoDecorator implements Component
{
    protected $component = null;

    public function __construct(Component $component)
    {
        $this->component = $component;
    }

    public function execute(Pedido $pedido)
    {
        return $this->component->execute($pedido);
    }
}