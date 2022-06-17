<?php

class Carro {
  
  protected $modelo;
  protected $motor;
  protected $anoFabricacao;
  protected $fabricante;
  protected $bateria = '0kWh';

  public function setModelo($modelo)
  {
    $this->modelo = $modelo;
    return $this;
  } 

  public function setMotor($motor)
  {
    $this->motor = $motor;
    return $this;
  }

  public function setAno($ano)
  {
    $this->ano = $ano;
    return $this;
  }   

  public function setFabricante($fabricante)
  {
    $this->fabricante = $fabricante;
    return $this;
  }

  public function setBateria($bateria)
  {
    $this->bateria = $bateria;
  }

  public function getFabricante()
  {
    return $this->fabricante;
  }

  public function __toString()
  {
    return "Fabricante {$this->fabricante}, {$this->modelo}, {$this->motor}, bateria {$this->bateria} ano {$this->ano}";
  }

}
