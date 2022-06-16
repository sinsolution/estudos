<?php

class LancheDecorator implements LancheComponent
{
    protected $component = null;

    public function __construct(LancheComponent $component)
    {
        $this->component = $component;
    }

    public function adicionarItems()
    {
        $this->component->adicionarItems();
    }

}
