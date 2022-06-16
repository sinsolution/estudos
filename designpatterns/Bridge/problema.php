<?php


class Forma{
    protected int $altura;
    protected int $largura;

    public function __construct(string $nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getPerimetro(): int{
        return 0;
    }

    public function getArea() : int{
        return 0;
    }
}

class QuadradoAzul extends Forma{

    public function __construct(int $lados = 2, int $largura = 2){
        $this->altura = $altura;
        $this->largura = $largura;
    }

    public function getArea() : int{
        return $this->largura * $this->altura;
    }

    public function getPerimetro() : int{
        return 4 * $this->lados;
    }

    public function __toString(){
        return 'Quadrado Azul';
    }
}

class QuadradoVermelho extends Forma{

    public function __construct(int $altura = 2, int $largura = 2){
        $this->altura = $altura;
        $this->largura = $largura;
    }

    public function getArea() : int{
        return $this->largura * $this->altura;
    }

    public function getPerimetro() : int{
        return 4 * $this->largura;
    }

    public function __toString(){
        return 'Quadrado Vermelho';
    }
}

class RetanguloAzul extends Forma{

    public function __construct(int $altura = 3, int $largura = 2){
        $this->altura = $altura;
        $this->largura = $largura;
    }

    public function getArea() : int{
        return $this->largura * $this->altura;
    }

    public function getPerimetro() : int{
        return 2 * $this->largura + 2 * $this->altura;
    }

    public function __toString(){
        return "Retangulo Azul com {$this->getPerimetro()} de perimetro";
    }
}

class RetanguloVermelho extends Forma{

    public function __construct(int $altura = 2, int $largura = 3){
        $this->altura = $altura;
        $this->largura = $largura;
    }

    public function getArea() : int{
        return $this->largura * $this->altura;
    }

    public function getPerimetro() : int{
        return 2 * $this->largura + 2 * $this->altura;
    }

    public function __toString(){
        return "Retangulo Vermelho com {$this->getPerimetro()} de perimetro";
    }
}

$quadradoVermelho = new QuadradoVermelho();
$retanguloVermelho = new RetanguloVermelho();

echo $quadradoVermelho."\n";
echo $retanguloVermelho."\n";
