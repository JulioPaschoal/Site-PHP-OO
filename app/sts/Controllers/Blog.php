<?php


namespace Sts\Controllers;

if (!define('URL')) {
    header("Location: /");
    exit();
}

class Blog
{
    public function index()
    {
        echo "Página Blog <br>";
    }

}