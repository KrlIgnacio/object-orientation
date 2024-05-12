<?php

    class Carro{
        private $cor;
        private $modelo;
        private $marca;
        private $combutivel;
        private $valor;

        public function __construct($cor, $modelo, $marca, $combutivel, $valor)
        {
            $this->cor = $cor;
            $this->modelo = $modelo;
            $this->marca = $marca;
            $this->combutivel = $combutivel;
            $this->valor = (float)$valor;
        }
        
    }