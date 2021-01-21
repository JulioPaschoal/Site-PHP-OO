<?php


namespace Sts\Models\helper;

use PDO;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

class StsRead extends StsConn
{
    private $Select;
    private $Values;
    private $Resultado;
    private $Query;
    private $Conn;

    public function getResultado()
    {
        return $this->Resultado;
    }

    public function exeRead($Tabela, $Termos = null, $ParseString = null)
    {
        if (!empty($ParseString)) {
            parse_str($ParseString, $this->Values);
        }
        $this->Select = "SELECT * FROM {$Tabela} {$Termos}";
        $this->exeInstruction();
    }

    public function fullRead($Query, $ParseString = null)
    {
        $this->Select = (string)$Query;
        if (!empty($ParseString)) {
            parse_str($ParseString, $this->Values);
        }
        $this->exeInstrucao();
    }

    private function exeInstruction()
    {
        $this->conexao();
        try {
            $this->getInstruction();
            $this->Query->execute();
            $this->Resultado = $this->Query->fetchAll();
        } catch (Exception $ex) {
            $this->Resultado = null;
        }
    }

    private function conexao()
    {
        $this->Conn = parent::getConn();
        $this->Query = $this->Conn->prepare($this->Select);
        $this->Query->setFetchMode(PDO::FETCH_ASSOC);
    }

    private function getInstruction()
    {
        if ($this->Values) {
            foreach ($this->Values as $link => $value) {
                if ($link == 'limit' || $link == 'offet') {
                    $value = (int)$value;
                }
                $this->Query->bindValue(":{$link}", $value, (is_int($value) ? PDO::PARAM_INT : PDO::PARAM_STR));
            }
        }
    }
}