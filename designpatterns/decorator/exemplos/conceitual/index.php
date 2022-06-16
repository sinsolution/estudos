<?php

require "LancheComponent.php";
require "LancheConcreteComponent.php";
require "LancheDecorator.php";
require "FrangoDecorator.php";
require "PaoDecorator.php";
require "QueijoDecorator.php";

$lanche = new LancheConcreteComponent();
$lanche = new PaoDecorator($lanche);
$lanche = new FrangoDecorator($lanche);
$lanche = new QueijoDecorator($lanche);
$lanche = new QueijoDecorator($lanche);

$lanche->adicionarItems();
