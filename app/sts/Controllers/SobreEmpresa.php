<?php

namespace Sts\Controllers;

if (!define('URL')) {
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