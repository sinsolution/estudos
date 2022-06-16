# Iterator – Padrões Comportamentais

- O Iterator é um padrão de projeto comportamental que permite a passagem sequencial através de uma estrutura de dados complexa sem expor seus detalhes internos.
- Seu objetivo é encapsular em um objeto a lógica de uma iteração, tornando o cliente mais simples, baseando-se em uma interface.

# Pontos Positivos e Negativos

- Facilita nossa vida isolando a lógica ou forma de iterar um determinado tipo de coleção, evitando inclusive duplicação de código ou complexidade em várias partes do código.
- Outra vantagem dos iteradores é que eles podem economizar muito mais memória do que se tivéssemos usando os arrays convencionais.

- Aumento na estrutura do projeto, devido a Interface e diferentes implementações para as iterações, aumentando o número de classes no projeto.
- Outro problema com o Iterator é que devemos ter uma atenção especial em qual operação o Iterator realizará, pois, caso ele altere, adicione ou remova objetos do conjunto de dados, temos que garantir que essa operação não invalidará os dados do conjunto. 

