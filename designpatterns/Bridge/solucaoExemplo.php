<?php

/* 1 - Abstração */ 
abstract class Forma{
    
    protected $cor;

    public function __construct(Cor $cor){
        $this->cor = $cor;
    }

    public function trocarDeCor(Cor $cor){
        $this->cor = $cor;
    }

    public function __get($name)
    {
        if (isset($this->$name)) {
            return $this->$name;
        }

        return null;
    }

    abstract public function getPerimetro() : int;

    abstract public function getArea() : int;
}
/** 4 - Abstrações Refinadas */
class Retangulo extends Forma{
    private $largura, $altura;

    public function __construct(Cor $cor, int $altura = 0, int $largura = 0){
        parent::__construct($cor);
        $this->altura = $altura;
        $this->largura = $largura;
    }

    public function getArea() : int{
        return $this->largura * $this->altura;
    }

    public function getPerimetro() : int{
        return 2 * $this->largura + 2 * $this->altura;
    }
}

class Quadrado extends Forma{
    private $lados;

    public function __construct(Cor $cor, int $lados = 0){
        parent::__construct($cor);
        $this->lados = $lados;
    }

    public function getArea() : int{
        return $this->lados * $this->lados;
    }

    public function getPerimetro() : int{
        return 4 * $this->lados;
    }
}

/** */

/** 2 - Implementação interface */

interface Cor{
    public function getCor();
    public function __toString();
}

/** 3 - Implementações concretas */
class CorAzul implements Cor{

    public function getCor(){
        return "Azul";
    }

    public function __toString(){
        return "\033[34m";
    }
}

class CorVermelha implements Cor{
    public function getCor(){
        return "Vermelha";
    }

    public function __toString(){
        return "\033[31m";
    }
}

/** Cliente */ 
$corAzul = new CorAzul();
$corVermelha = new CorVermelha();
$quadrado = new Quadrado($corAzul, 2);
$retangulo = new Retangulo($corVermelha,2,3);

echo "Área do quadrado {$quadrado->cor->getCor()}: {$quadrado->cor} {$quadrado->getArea()} | Perimetro do quadrado: {$quadrado->getPerimetro()}\033[0m\n";
echo "Área do retangulo {$retangulo->cor->getCor()}: {$quadrado->cor} {$retangulo->getArea()} | Perimetro do retangulo: {$retangulo->getPerimetro()}\033[0m\n";
$quadrado->trocarDeCor($corVermelha);
echo "Área do quadrado {$quadrado->cor->getCor()}: {$quadrado->cor} {$quadrado->getArea()} | Perimetro do retangulo: {$quadrado->getPerimetro()}\033[0m\n";