<?php

class FrangoDecorator extends LancheDecorator
{
    public function adicionarItems()
    {
        parent::adicionarItems();

        print "+ Frango\n";
    }

}