<?php

class Cpf{
    private string $cpf;

    public function __construct(string $cpf)
    {
        $this->validaCpf($cpf);
        $this->cpf = $cpf;
    }

    public function getCpf() : string
    {
        return $this->cpf;
    }

    private function validaCpf($cpf) : void{
        $cpfValido = filter_var($cpf, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            ]
            ]);

            if(!$cpfValido){
                echo "O formato do CPF é inválido" . PHP_EOL;
                exit();
            }
    }
}