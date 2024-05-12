<?php

class Tv
{
    private $marca;
    private $tamanho;
    private $modelo;
    private $cor;

    public function __construct($modelo, $marca, $tamanho, $cor){
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->tamanho = $tamanho;
        $this->cor = $cor;
    }

    public function getModelo(): string
    {
        return $this->modelo;
    }

    public function setModelo($modelo){
        $this->modelo =$modelo;
    }

    public function __destruct()
    {
        echo "Destutor foi invocado!" . PHP_EOL;
    }
}
