<?php
if (!defined('URL')) {
    header("Location: /");
    exit();
}
//echo "View HOME  <br>";
//var_dump($this->Dados['sts_carousels']);
?>
<main role="main">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php
            $cont_marc = 0;
            foreach ($this->Dados['sts_carousels'] as $carousel) {
                echo "<li data-target='#myCarousel' data-slide-to='$cont_marc'></li>";
                $cont_marc++;
            }
            ?>
        </ol>
        <div class="carousel-inner">
            <?php
            $cont_slide = 0;
            foreach ($this->Dados['sts_carousels'] as $carousel) {
                extract($carousel);
                ?>
                <div class="carousel-item <?php
                if ($cont_slide == 0) {
                    echo 'active';
                }
                ?>">
                    <img class="first-slide img-fluid"
                         src="<?php echo URL . 'assets/imagens/carousel/' . $id . '/' . $imagem; ?>"
                         alt="<?php echo $titulo; ?>">
                    <div class="container">
                        <div class="carousel-caption <?php echo $posicao_text; ?>">
                            <h1 class="d-none d-md-block"><?php echo $titulo; ?></h1>
                            <p class="d-none d-md-block"><?php echo $descricao; ?></p>
                            <p class="d-none d-md-block"><a class="btn btn-lg btn-<?php echo $cor; ?>"
                                                            href="<?php echo $link; ?>"
                                                            role="button"><?php echo $titulo_botao; ?></a></p>
                        </div>
                    </div>
                </div>
                <?php
                $cont_slide++;
            }
            ?>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

        <?php extract($this->Dados['sts_servicos'][0]); ?>
        <div class="jumbotron servicos">
            <div class="container">
                <h2 class="display-4 text-center" style="margin-bottom: 40px;"><?php echo $titulo; ?></h2>
                <div class="card-deck">
                    <div class="card text-center card-um">
                        <div class="icon-row tamanh-icone">
								<span class="step size-96 text-danger">
									<i class="icon ion-ios-camera-outline"></i>
								</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Serviço um</h5>
                            <p class="card-text lead">This is a longer card with supporting text below as a natural
                                lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                    <div class="card text-center card-dois">
                        <div class="icon-row tamanh-icone">
								<span class="step size-96 text-danger">
									<i class="icon ion-ios-film-outline"></i>
								</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Serviços dois</h5>
                            <p class="card-text lead">This card has supporting text below as a natural lead-in to
                                additional content.</p>
                        </div>
                    </div>
                    <div class="card text-center card-tres">
                        <div class="icon-row tamanh-icone ">
								<span class="step size-96 text-danger">
									<i class="icon ion-ios-videocam-outline"></i>
								</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Serviço tres</h5>
                            <p class="card-text lead">This is a wider card with supporting text below as a natural
                                lead-in to additional content. This card has even longer content than the first to show
                                that equal height action.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>