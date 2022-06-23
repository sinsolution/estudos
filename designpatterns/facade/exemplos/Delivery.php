<?php

namespace designerpatterns\facade\exemplos;

use \StdClass;

class Delivery
{
    const PAGAMENTO_CARTAO = "cartao";
    const PAGAMENTO_DINHEIRO = "dinheiro";

    protected $pedidoItens;
    protected $endereco;
    protected $formaPagamento;

    public function __construct(array $pedidoItens, string $endereco, string $formaPagamento)
    {
        $this->pedidoItens = $pedidoItens;
        $this->endereco = $endereco;
        $this->formaPagamento = $formaPagamento;
    }

    public function fazerPedido()
    {
        $pedido = new StdClass();
        $pedido->total = 0;
        foreach ($this->pedidoItens as $key => $item) {
            $pedidoItem = new StdClass();
            $pedidoItem->item = $item;
            $pedidoItem->valor = ($key + 1) * 2;

            $pedido->itens[] = $pedidoItem;
            $pedido->total += $pedidoItem->valor;
        }

        $pedido->levarMaquina = $this->formaPagamento == self::PAGAMENTO_CARTAO ? "sim" : "não";
        $pedido->formaPgamento = $this->formaPagamento;
        $pedido->endereco = $this->endereco;

        return $pedido;
    }
}