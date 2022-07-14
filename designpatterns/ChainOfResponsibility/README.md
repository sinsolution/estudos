Padrão Chain Of Responsibility
------------

O padrão de projetos conhecido como chain of responsibility faz parte do grupo de padrões titulado como padrões comportamentais definidos pelo GoF.

Geralmente é usado
------------

- Use o quando seu sistema precisa processar uma requisição em várias etapas diferentes e você não quer criar um ordem rígida para o processamento.
- Quando você quer aplicar o principio da responsabilidade única para tratamento de dados da requisição.
- Quando você quer permitir que os objetos responsáveis pelo tratamento de requisição possam variar em tempo de execução .

Vantagens
------------

- Você pode controlar a ordem de tratamento dos pedidos. 
- Princípio de responsabilidade única. Você pode desacoplar classes que invocam operações de classes que realizam operações.
- Princípio aberto/fechado. Você pode introduzir novos objetos manipuladores na aplicação sem quebrar o código cliente existente.

Desvantagens
------------

- Algumas requisições podem acabar sem tratamento.

Docker
------------

```
sudo docker run -it --rm -v $PWD/designpatterns:/tmp --name padraoCoR php:cli php /tmp/ChainOfResponsibility/source/exemplo.php
```

