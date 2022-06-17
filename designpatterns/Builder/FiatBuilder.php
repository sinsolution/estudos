<?php

class FiatBuilder implements CarroBuilder {

  protected $carro;

  public function __construct()
  {
    $this->carro = new Carro();
    return $this;
  }

  public function buildMotor()
  {
    // Operação Complexa
    $this->carro->setMotor('Combustão');
    return $this;
  }

  public function buildModelo()
  {
    // Operação Complexa
    $this->carro->setModelo('147');
    return $this;
  }

  public function buildFabricante()
  {
    // Operação Complexa
    $this->carro->setFabricante('Fiat');
    return $this;
  }

  public function buildAnoFabricacao()
  {
    // Operação Complexa
    $this->carro->setAno('1982');
    return $this;
  }

  public function getCarro() : Carro
  {
    return $this->carro;
  }
  
}
