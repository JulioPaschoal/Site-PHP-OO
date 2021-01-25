<?php

namespace Sts\Controllers;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

class Home
{

    private $Dados;

    public function index()
    {

        $listar_car = new \Sts\Models\StsCarousel();
        $this->Dados['sts_carousels'] = $listar_car->listar();

        $listar_ser = new \Sts\Models\StsServico();
        $this->Dados['sts_servicos'] = $listar_ser->listar();

        $carregarView = new \Core\ConfigView("sts/Views/home/home", $this->Dados);
        $carregarView->renderizar();
    }

}
