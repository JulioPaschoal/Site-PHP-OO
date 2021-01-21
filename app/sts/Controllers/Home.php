<?php


namespace Sts\Controllers;

if (!define('URL')) {
    header("Location: /");
    exit();
}

class Home
{
    public function index()
    {

        $carregarView = new \Core\ConfigView("sts/Views/home/home");
    }
}