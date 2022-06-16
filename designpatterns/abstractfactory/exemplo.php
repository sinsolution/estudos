<?php

namespace RefactoringGuru\AbstractFactory\Conceptual;

/**
 * A interface Abstract Factory declara um conjunto de métodos que retornam diferentes produtos abstratos.
 * Esses produtos são chamados de família e estão relacionados por um tema ou conceito de alto nível.
 * Os produtos de uma família geralmente são capazes de colaborar entre si.
 * Uma família de produtos pode ter várias variantes, mas os produtos de uma variante são incompatíveis
 * com os produtos de outra.
 */
interface AbstractFactory
{
    public function createProductA(): AbstractProductA;

    public function createProductB(): AbstractProductB;
}

/**
 * ConcretFactory produz uma família de produtos que pertencem a uma única variante.
 * Garante que os produtos resultantes são compatíveis.
 * Observe que as assinaturas dos métodos da Concrete Factory retornam um produto abstrato,
 * enquanto dentro do método um produto concreto é instanciado.
 */
class ConcreteFactory1 implements AbstractFactory
{
    public function createProductA(): AbstractProductA
    {
        return new ConcreteProductA1();
    }

    public function createProductB(): AbstractProductB
    {
        return new ConcreteProductB1();
    }
}


/*class ConcreteFactory2 implements AbstractFactory
{
    public function createProductA(): AbstractProductA
    {
        return new ConcreteProductA2();
    }

    public function createProductB(): AbstractProductB
    {
        return new ConcreteProductB2();
    }
}*/

/**
 * Cada produto distinto de uma família de produtos deve ter uma interface básica.
 * Todas as variantes do produto devem implementar esta interface.
 */
interface AbstractProductA
{
    public function usefulFunctionA(): string;
}

/**
 * Concrete Products são criados pelas Concrete Factories correspondentes.
 */
class ConcreteProductA1 implements AbstractProductA
{
    public function usefulFunctionA(): string
    {
        return "Resultado do produto A1.";
    }
}
/*
class ConcreteProductA2 implements AbstractProductA
{
    public function usefulFunctionA(): string
    {
        return "Resultado do produto A2.";
    }
}*/

/**
 * Aqui está a interface base de outro produto.
 * Todos os produtos podem interagir uns com os outros,
 * mas a interação adequada só é possível entre produtos da mesma variante.
 */
interface AbstractProductB
{
    /**
     * ProductB é capaz de fazer suas próprias coisas...
     */
    public function usefulFunctionB(): string;

    /**
     * ... mas também pode colaborar com o ProductA.
     *
     * Abstract Factory garante que todos os produtos que cria
     * sejam da mesma variante e, portanto, compatíveis.
     */
    public function anotherUsefulFunctionB(AbstractProductA $collaborator): string;
}

/**
 * Concrete Products são criados pelas Concrete Factories correspondentes.
 */
class ConcreteProductB1 implements AbstractProductB
{
    public function usefulFunctionB(): string
    {
        return "Resultado do produto B1.";
    }

    /**
     * A variavel do Produto B1, só funciona corretamente com Produto A1.
     * No entanto, ele aceita qualquer instância de AbstractProductA como argumento.
     */
    public function anotherUsefulFunctionB(AbstractProductA $collaborator): string
    {
        $result = $collaborator->usefulFunctionA();

        return "O Resultado do B1 colaborando com ({$result})";
    }
}

/*class ConcreteProductB2 implements AbstractProductB
{
    public function usefulFunctionB(): string
    {
        return "Resultado do produto B2.";
    }

    /**
     * Produto B2, só funciona corretamente com a variante, Produto A2.
     * No entanto, ele aceita qualquer instância de AbstractProductA como argumento.

    public function anotherUsefulFunctionB(AbstractProductA $collaborator): string
    {
        $result = $collaborator->usefulFunctionA();

        return "O Resultado do B2 coloaborando com o ({$result})";
    }
}*/

/**
 * O client code trabalha com factories and produtos apenas por meios de tipos abstratos.
 * Tipos: AbstractFactory and AbstractProduct. Isso permite que você passe qualquer factory ou produto.
 */
function clientCode(AbstractFactory $factory)
{
    $productA = $factory->createProductA();
    $productB = $factory->createProductB();

    echo $productB->usefulFunctionB() . "<br>";
    echo $productB->anotherUsefulFunctionB($productA) . "\n";
}
 
 
 
 
echo "Client: Testando client code com o primeiro tipo de factory:<br>";
clientCode(new ConcreteFactory1());

/*echo "<br><br>";

echo "Client: Testando o mesmo client code com o segundo tipo de factory:<br>";
clientCode(new ConcreteFactory2());  */