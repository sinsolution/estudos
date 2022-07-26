<?php

class descontoDeNatal extends BaseDesconto
{
  private $desconto = 0.5;

  public function calcDesconto(Pedido $pedido)
  {
    if($pedido->eNatal)
    {
      $pedido->desconto += $this->desconto;
      echo self::class . " aplicado {$this->desconto}%.\n";
    }
    $this->calcProximoDesconto($pedido);
  }
}
