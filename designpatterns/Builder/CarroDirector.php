<?php

class CarroDirector {

  protected $builder;

  public function __construct(CarroBuilder $builder)
  {
    $this->builder = $builder;
  }

  public function buildCarro()
  {
    $this->builder
         ->buildFabricante()
         ->buildAnoFabricacao()
         ->buildModelo()
         ->buildMotor();

    if($this->builder->getCarro()->getFabricante() == 'Tesla')
    {
      $this->builder
           ->buildBateria();
    }

    return $this;
  }

  public function getCarro()
  {
    return $this->builder->getCarro();
  }
}
