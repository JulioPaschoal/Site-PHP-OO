<?php


namespace Core;


class ConfigView
{
    private $Nome;
    private $Dados;

    public function __construct($Nome, array $Dados = null)
    {
        $this->Nome = (string) $Nome;
        $this->Dados = $Dados;
    }
}