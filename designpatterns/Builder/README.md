Padrão Builder
------------

O padrão de projetos conhecido como Builder faz parte do grupo de padrões titulado como padrões criacionais definidos pelo GoF.

Geralmente é usado
------------
O padrão builder é utilizado para construção de objetos complexos fazendo-se uso de uma abordagem de desenvolvimento passo a passo.

Vantagens
------------

- Você pode construir objetos passo a passo, adiar as etapas de construção ou rodar etapas recursivamente.
- Você pode reutilizar o mesmo código de construção quando construindo várias representações de produtos.
- Princípio de responsabilidade única. Você pode isolar um código de construção complexo da lógica de negócio do produto.

Desvantagens
------------

- A complexidade geral do código aumenta uma vez que o padrão exige criar muitas classes novas.

Docker
------------

```
sudo docker run -it --rm -v $PWD/designpatterns:/tmp --name padraoBuilder php:cli php /tmp/Builder/exemplo.php
```

