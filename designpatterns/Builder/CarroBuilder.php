<?php

interface CarroBuilder {
  
  public function buildMotor();
  public function buildModelo();
  public function buildFabricante();
  public function buildAnoFabricacao();
  public function getCarro() : Carro;

}
