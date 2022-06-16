# Factory Method

- O padrão Factory Method é um padrão de design usado para definir uma interface de tempo de execução para criar um objeto. Chama-se Factory porque cria vários tipos de objetos sem necessariamente saber que tipo de objeto cria ou como criá-lo.

# Geralmente é usado:

- Uma classe não pode antecipar o tipo de objetos que precisa criar de antemão.
- Uma classe requer que suas subclasses especifiquem os objetos que ela cria.
- Você deseja localizar a lógica para instanciar um objeto complexo.

# Vantagem:

- A principal vantagem deste padrão é que você ganha muita flexibilidade quando precisa criar novas adições de classes. Ele é bem desacoplado na sua totalidade o que deixa o código flexível e extensível para implementações futuras.

# Desvantagem: 

- Criação de várias classes.
- Caso haja um pequeno problema, pode gerar maior complexidade ao código.



