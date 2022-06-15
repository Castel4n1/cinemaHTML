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
    <br>
    <div class="bg-dark">
        <!-- CONTAINER -->
        <div class="container">
            <!-- CABEÇALHO -->
            <?php include_once('inc/topo.php'); ?>
            <!-- /CABEÇALHO -->
            <!-- CONTEÚDO -->
            <div class="row">
                <h1 class="text-dark">.</h1>
                <h2>Filmes em Cartaz</h2>
                <!-- FILMES CARDS-->
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100">
                            <img src="img/Fiilme1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">A Medium</h5>
                                <p class="card-text">Uma história assustadora sobre a herança de um xamã na região de Isan, na Tailândia.
                                    O que pode estar a possuir um membro da família pode não ser a Deusa que eles dizem ser.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Lançado no VísioPlay</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="img/filme2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">O cachorro e o Guarda</h5>
                                <p class="card-text">A história segue dois rangers do Exército norte-americano: Briggs, um humano, e Lulu, uma
                                    cadela pastor-belga malinois.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Lançado no VísioPlay</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="img/fiilme3.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Harry Potter Falso</h5>
                                <p class="card-text">O professor Alvo Dumbledore sabe que o poderoso mago das trevas Gellert Grindelwald
                                    está se movimentando para assumir o controle do mundo mágico. </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Lançado no VísioPlay</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="img/filme4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">A agiota</h5>
                                <p class="card-text">Recentemente viúva, Amy Carr está fazendo o seu melhor para retornar
                                    à normalidade da vida com seus jovens filhos em uma cidade pequena.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Lançado no VísioPlay</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="img/filme5.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Ilusões Perdidas</h5>
                                <p class="card-text">Lucien é um jovem poeta desconhecido da França do século XIX.
                                    Ele tem grandes esperanças e quer escolher seu destino.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Lançado no VísioPlay</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="img/filme6.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Nem sempre é por Dinheiro</h5>
                                <p class="card-text">Emmanuèle, romancista realizada na sua vida privada e profissional, se dirige
                                    ao hospital onde o seu pai, André, acaba de sofrer um AVC.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Lançado no VísioPlay</small>
                            </div>
                        </div>
                    </div>
                    <!-- /FILME CARDS -->

                </div>
                <h3 class="text-dark">.</h3>
                <h2>Nosso Diferencial</h2>
                
                <!-- Diferenciais -->
                <div id="carouselBanner1" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselBanner1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselBanner1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselBanner1" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="2000">
                            <img src="img/banner1-emcartaz.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/banner1-emcartaz2.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/banner1-emcartaz3.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselBanner1" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselBanner1" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Próximo</span>
                    </button>
                    <!-- /Diferenciais -->
                </div>
                <!-- CONTEÚDO -->
                <!-- RODAPÉ -->
                <?php include_once('inc/rodape.php'); ?>
                <!-- RODAPÉ -->
            </div>
            <!-- /CONTAINER -->
        </div>
</body>
<!-- JS -->
<?php include_once('inc/js.php'); ?>
<!-- /JS -->

</html>