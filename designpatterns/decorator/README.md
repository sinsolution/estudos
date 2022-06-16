# Padrões estruturais

## Decorator

### O que é

O Decorator é um padrão de projeto estrutural que permite adicionar um comportamento a um objeto já existente em tempo de execução, ou seja, agrega dinamicamente responsabilidades adicionais a um objeto. 

### O que resolve

O Decorator surgiu da necessidade de adicionar um comportamento, funcionalidade ou estado extra a um objeto em tempo de execução, por exemplo quando Herança não é concebível por ser um caso que geraria um número muito alto de subclasses.

### Prós e Contras

- Acrescentar ou remover responsabilidades a objetos individuais dinamicamente, de forma transparente.
- Evitar a explosão de subclasses para prover todas as combinações de responsabilidades.
- As subclasses só podem ter uma classe pai. Na maioria das linguagens, a herança não permite que uma classe herde comportamentos de múltiplas classes ao mesmo tempo.
- É difícil implementar um decorador de tal maneira que seu comportamento não dependa da ordem do pilha de decoradores.
- A configuração inicial do código de camadas pode ficar bastante feia
