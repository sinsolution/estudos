<?php

interface Desconto
{
  public function adcProximoDesconto(Desconto $proximoDesconto):Desconto;
  public function calcDesconto(Pedido $pedido);
}

