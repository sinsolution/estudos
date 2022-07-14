<?php

class DescontoMaisDe5Itens extends BaseDesconto
{
  private $desconto = 0.1;

  public function calcDesconto(Pedido $pedido)
  {
    if($pedido->itens > 5)
    {
      $pedido->desconto += $this->desconto;
      echo self::class . " aplicado {$this->desconto}%.\n";
    }
    $this->calcProximoDesconto($pedido);
  }
}
