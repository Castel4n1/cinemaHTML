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
            <!-- FILMES CARDS-->
            <h2>FILMES EM CARTAZ</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img src="img/Foto1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">ATOR</h5>
                            <p class="card-text">BIOGRAFIA</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="img/Foto3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">ATOR</h5>
                            <p class="card-text">BIOGRAFIA.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="img/Foto5.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">ATOR</h5>
                            <p class="card-text">BIOGRAFIA.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Filmes CARDS -->
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