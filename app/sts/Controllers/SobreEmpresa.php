<?php

namespace Sts\Controllers;

if (!defined('URL')) {
    header("Location: /");
    exit();
}


class SobreEmpresa
{
    public function index()
    {
        echo "Página Sobre empresa <br>";
    }
}