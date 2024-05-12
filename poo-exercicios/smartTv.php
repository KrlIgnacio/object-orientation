<?php

require_once ('./tv.php');
require_once ('./conectividade.php');


class SmartTv extends Tv implements Conectividade
{
    private $sistemaOperacional;

    public function __construct($modelo, $marca, $tamanho, $cor, $sistemaOperacional)
    {
        parent::__construct($modelo, $marca, $tamanho, $cor);
        $this->sistemaOperacional = $sistemaOperacional;
    }

    public function navegarNaInternet()
    {
        echo "navegando na web..." .PHP_EOL;
    }

    public function assistirStreamingDeVideo(string $servico)
    {
        echo "assistindo streaming de video {$servico}" . PHP_EOL;
    }
}
