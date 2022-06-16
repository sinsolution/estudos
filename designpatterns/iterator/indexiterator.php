<?php

class Lista implements Iterator {
    private $inicio;
    private $fim;
    private $atual;
    private $indice;

    public function __construct($inicio, $fim) {
        if ($fim < $inicio) {
            throw new \InvalidArgumentException('Fim precisa ser maior ou igual ao inicio');
        }
        $this->inicio = $inicio;
        $this->fim = $fim;
        $this->atual = $inicio;
        $this->indice = 0;
    }

    public function current() {
        return $this->atual;
    }

    public function key() {
        return $this->indice;
    }

    public function next() {
        if ($this->valid()) {
            $this->indice += 1;
            $this->atual += 1;
        }
    }

    public function rewind() {
        $this->indice = 0;
        $this->atual = $this->inicio;
    }

    public function valid(): bool {
        return $this->atual <= $this->fim;
    }
}


$obj = new Lista(10, 1000000);
foreach ($obj as $key => $val) {
    printf("%d => %d\n", $key, $val);
}

$bytesUsados = memory_get_usage();

function formatBytes($size, $precision = 2)
{
    $base = log($size, 1024);
    $suffixes = array('', 'KB', 'MB', 'GB', 'TB');

    return round(pow(1024, $base - floor($base)), $precision) .' '. $suffixes[floor($base)];
}
echo "<br>";
echo "Memoria usada: ".formatBytes($bytesUsados,2);