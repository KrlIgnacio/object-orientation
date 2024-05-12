<?php

class Titular{

    private Cpf $cpf;
    private string $nome;

    public function __construct(Cpf $cpf, string $nome)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function getCpf() : string
    {
        return $this->cpf->getCpf();
    }
    public function getNome() : string{
        return $this->nome;
    }
    private function validaNome($nome) : void
    {
        if(strlen($nome) < 3){
            echo "O nome deve conter no minímo 3 caracteres" . PHP_EOL;
            exit();
        }
    }
}