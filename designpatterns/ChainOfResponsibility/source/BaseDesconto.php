<?php

abstract class BaseDesconto implements Desconto
{
  protected $proximoDesconto;

  public function adcProximoDesconto(Desconto $proximoDesconto): Desconto
  {
    $this->proximoDesconto = $proximoDesconto;
    return $this->proximoDesconto;
  }

  protected function calcProximoDesconto(Pedido $pedido)
  {
    if(!empty($this->proximoDesconto))
    {
      $this->proximoDesconto->calcDesconto($pedido);
    }
  }
}
