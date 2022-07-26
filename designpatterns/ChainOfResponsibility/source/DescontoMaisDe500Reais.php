<?php

class DescontoMaisDe500Reais extends BaseDesconto
{
  private $desconto = 0.2;

  public function calcDesconto(Pedido $pedido)
  {
    if($pedido->valor > 500)
    {
      $pedido->desconto += $this->desconto;
      echo self::class . " aplicado {$this->desconto}%.\n";
    } 
    $this->calcProximoDesconto($pedido);
  }
}
