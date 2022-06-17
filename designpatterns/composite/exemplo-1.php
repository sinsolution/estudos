<?php

# --------------- Component - Interface --------------- #
interface ProdutoComponent {
    public function add(ProdutoComponent $produto): void;
    public function remove(ProdutoComponent $produto): void;
    public function getPreco(): float;
    public function show(): string;
}


# --------------- Leaf (folha) - Objeto Individual --------------- #
class Produto implements ProdutoComponent {
    private $nome;
    private $valor;

    public function __construct(string $nome, float $valor)
    {
        $this->nome = $nome;
        $this->valor = $valor;
    }

    public function add(ProdutoComponent $produto): void {
        throw new Exception('Método não implementado.');
    }

    public function remove(ProdutoComponent $produto): void {
        throw new Exception('Método não implementado.');
    }

    public function getPreco(): float
    {
        return $this->valor;
    }

    public function show(): string
    {
        return "<li>" . $this->nome. ' - R$ ' . number_format($this->valor, 2, ',', '.') . "</li>";
    }
}


# --------------- Composite - Objeto Composto --------------- #
class Caixa implements ProdutoComponent {
    private SplObjectStorage $produtos;

    public function __construct()
    {
        $this->produtos = new SplObjectStorage;
    }

    public function add(ProdutoComponent $produto): void
    {
        $this->produtos->attach($produto);
    }

    public function remove(ProdutoComponent $produto): void
    {
        $this->produtos->detach($produto);
    }

    public function getPreco(): float
    {
        $somaPrecos = 0;
        foreach($this->produtos as $produto) {
            $somaPrecos += $produto->getPreco();
        }
        
       return $somaPrecos;
    }

    public function show(): string {
        $produtos = '<ul>';

        foreach($this->produtos as $produto) {
            $produtos .= $produto->show();
        }

        $produtos .= '</ul>';

        return $produtos;
    }
}


# --------------- Exemplo --------------- #

// Produtos
$martelo = new Produto('Martelo', 50);
$carregador = new Produto('Carregador', 30);
$fones = new Produto('Fones de Ouvido', 40);
$telefone = new Produto('Telefone', 1500);

$caixaPrincipal = new Caixa;
$caixaPrincipal->add($martelo);
$caixaPrincipal->add($carregador);

$caixaMenor = new Caixa;
$caixaMenor->add($fones);
$caixaMenor->add($telefone);

$caixaPrincipal->add($caixaMenor);

echo $caixaPrincipal->show();
echo $caixaPrincipal->getPreco();