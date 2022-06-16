# AdaPTER – Padrões estruturais

- Adapter é um dos padrões de projeto estruturais do GoF (Gang of Four), também conhecido por Wrapper.
- Sua finalidade está na conversão da interface de uma classe para outra interface que o cliente espera encontrar, adaptando solicitações do formato requerido pelo usuário para o formato compatível com o a classe adaptada e as redirecionando. 

# Prós e Contras

- Desacoplamento de códigos com dependências diretas.
- Aplica o Single Responsability Principle ao separar lógica e conversão de interfaces.
- Aplica o Open–closed principle pois novos Adapters podem ser adicionados ao código existente.
- Camada adicional de abstração a nível de código.
