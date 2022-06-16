<?php

class PaoDecorator extends LancheDecorator
{
    public function adicionarItems()
    {
        parent::adicionarItems();

        print "+ Pão\n";
    }

}
