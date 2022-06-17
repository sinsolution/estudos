<?php

class TeslaBuilder implements CarroBuilder {

  protected $carro;

  public function __construct()
  {
    $this->carro = new Carro();
    return $this;
  }

  public function buildMotor()
  {
    // Operação Complexa
    $this->carro->setMotor('Elétrico');
    return $this;
  }

  public function buildModelo()
  {
    // Operação Complexa
    $this->carro->setModelo('Model S');
    return $this;
  }
  
  public function buildBateria()
  {
    $this->carro->setBateria('200 kWh');
    return $this;
  }

  public function buildFabricante()
  {
    // Operação Complexa
    $this->carro->setFabricante('Tesla');
    return $this;
  }

  public function buildAnoFabricacao()
  {
    // Operação Complexa
    $this->carro->setAno('2020');
    return $this;
  }

  public function getCarro() : Carro
  {
    return $this->carro;
  }
  
}
