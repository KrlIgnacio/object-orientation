<?php

    class Pessoa{
        private $cor;
        private float $tamanho;
        private $sexo;
        private $idade;
        private $nome;

        public function __construct($cor, $tamanho, $sexo, $idade, $nome)
        {
            $this->cor = $cor;
            $this->tamanho = $tamanho;
            $this->sexo = $sexo;
            $this->idade = $idade;
            $this->nome = $nome;
           
        }
        public function getCor() : string{
            return $this->cor;
        }
        public function setCor ($cor){
            $this->cor = $cor;
        } 
        
        public function setNome($nome){
            $this->nome = $nome;
        }
    }