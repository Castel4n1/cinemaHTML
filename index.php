<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vísio Play</title>

    <!-- CSS -->
    <?php include_once('inc/css.php'); ?>
    <!-- /CSS -->
</head>

<body>
    <div class="bg-dark">

        <!-- CONTAINER -->
        <div class="container">
            <!-- CABEÇALHO -->
            <?php include_once('inc/topo.php'); ?>
            <!-- /CABEÇALHO -->
            <!-- CONTEÚDO -->
            <div class="row">
                <!-- BANNER -->
                <h2></h2>
                <br><br><br>
                <div id="carousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="2000">
                            <img src="img/banner1.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">

                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/banner2.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">

                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/banner3.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">

                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Próximo</span>
                    </button>
                </div>
            </div>
            <!-- /BANNER -->
            <!-- FILMES EM BREVE -->
            <br>
            <h2>Filmes em Breve</h2>
            <br>
            <div class="card-group">
                <div class="card">
                    <img src="img/Foto4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Sonic</h5>

                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Em breve no VísioPlay </small>
                    </div>
                </div>
                <div class="card">
                    <img src="img/Foto3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Doutor Estranho</h5>

                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Em breve no VísioPlay</small>
                    </div>
                </div>
                <div class="card">
                    <img src="img/Foto1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Maverick</h5>

                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Em breve no VísioPlay</small>
                    </div>
                </div>
                <div class="card">
                    <img src="img/Foto4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Sonic</h5>

                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Em breve no VísioPlay</small>
                    </div>
                </div>
                <div class="card">
                    <img src="img/Foto2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">LightYear</h5>

                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Em breve no VísioPlay</small>
                    </div>
                </div>
            </div>
            <!-- /FILMES EM BREVE -->
            <br>
            <!-- PROMOÇÕES -->
            <h2>Nossas Promoções</h2>
            <br>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card">
                        <img src="img/imagem.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card Title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="img/imagem1.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="img/imagem2.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="img/imagem4.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /PROMOÇÕES -->
            <br>
            <!-- DISPONIVEL PARA COMPRA -->
            <div class="row">
                <br><br><br>
                <h2> Disponivel para compra </h2>
                <div id="carousel2" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="2000">
                            <img src="img/banner-disponivel para compra.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>O Homem sem Arma</h5>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/banner-disponivel para compra1.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>As figuras do Além</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/banner-disponivel para compra2.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="text right">Ruby antes de Euphoria</h5>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel2" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousel2" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Próximo</span>
                    </button>
                </div>
            </div>
            <!-- /DISPONIVEL PARA COMPRA -->
        </div>
        <!-- /CONTEÚDO -->

        <!-- RODAPÉ -->
        <?php include_once('inc/rodape.php'); ?>
        <!-- RODAPÉ -->

        <!-- /CONTAINER -->
    </div>
</body>
<!-- JS -->
<?php include_once('inc/js.php'); ?>
<!-- /JS -->

</html>