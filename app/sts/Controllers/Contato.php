<?php

namespace Sts\Controllers;

if (!define('URL')) {
    header("Location: /");
    exit();
}

class Contato
{
    public function index()
    {
        echo "Página de contato <br>";
    }
}