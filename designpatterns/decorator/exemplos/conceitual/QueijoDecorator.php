<?php

class QueijoDecorator extends LancheDecorator
{
    public function adicionarItems()
    {
        parent::adicionarItems();

        print "+ Queijo\n";
    }

}
