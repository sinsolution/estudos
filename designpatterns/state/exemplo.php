<?php

// Contexto
class DocumentoContexto 
{
    private $state;

    public function __construct(DocumentoState $state)
    {
        $this->alterarState($state);
    }

    public function alterarState(DocumentoState $state): void
    {
        echo "Contexto: Transição para " . get_class($state) . ".<hr />";
        $this->state = $state;
        $this->state->setContexto($this);
    }

    public function publicar(): void
    {
        $this->state->publicar();
    }

    public function recusar(): void
    {
        $this->state->recusar();
    }
}

// Interface ou classe abstrata
abstract class DocumentoState
{    
    protected $contexto;

    public function setContexto(DocumentoContexto $contexto)
    {
        $this->contexto = $contexto;
    }

    abstract public function publicar(): void;

    abstract public function recusar(): void;
}

// Estados possíveis
class Rascunho extends DocumentoState
{
    public function publicar(): void
    {
        // Verifica se usuário possui permissão para publicar

        $this->contexto->alterarState(new Moderacao);
    }

    public function recusar(): void
    {
        // Deleta o Documento
        echo 'Documento excluído';
    }
}

class Moderacao extends DocumentoState
{
    public function publicar(): void
    {
        // Verifica se usuário possui permissão para publicar
        
        $this->contexto->alterarState(new Publicado);
    }

    public function recusar(): void
    {
        // Retorna o Documento ao state de Rascunho

        $this->contexto->alterarState(new Rascunho);
    }
}

class Publicado extends DocumentoState
{
    public function publicar(): void
    {
        // Não faz nada
        echo 'Nenhuma ação';
    }

    public function recusar(): void
    {
        $this->contexto->alterarState(new Moderacao);
    }
}

// Exemplo
$documento = new DocumentoContexto(new Rascunho);
$documento->publicar();
$documento->recusar();
$documento->publicar();
$documento->publicar();