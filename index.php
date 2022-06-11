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
            <br><br><br>
            <h2> LANÇAMENTOS </h2>
            <div id="carouselBanner" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselBanner" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselBanner" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselBanner" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="2000">
                        <img src="img/banner1.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/banner2.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/banner3.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselBanner" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselBanner" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Próximo</span>
                </button>
            </div>
            <!-- /BANNER -->
        </div>
        <!-- /CONTEÚDO -->
        <br><br><br>
        <!-- PROPAGANDA -->
        <img src="https://tpc.googlesyndication.com/simgad/13054031593377249008" width="1290" height="250" alt="" class="img_ad">
        <!-- /PROPAGANDA -->
        <!-- FILMES EM BREVE -->
        <br><br><br>
        <h2>FILMES EM BREVE</h2>
        <div class="card-group">
            <div class="card">
                <img src="img/Foto4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Sonic</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id itaque consequuntur labore fugiat ipsam, officiis suscipit odit recusandae, nobis, quas reiciendis quae? Dolore aperiam consequuntur corporis nesciunt dicta incidunt animi.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
            <div class="card">
                <img src="img/Foto3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Doutor Estranho</h5>
                    <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi expedita maiores provident corporis sunt, nisi rem dolorem delectus ipsam labore doloribus, libero accusamus vitae reprehenderit reiciendis nulla recusandae. Velit, id.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
            <div class="card">
                <img src="img/Foto1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Maverick</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo provident ducimus totam facilis id, est vero perspiciatis in, optio ipsa magni fugiat ipsam? Reiciendis necessitatibus labore ducimus, fugit dolor tenetur?</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>

        <!-- /FILMES EM BREVE -->

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