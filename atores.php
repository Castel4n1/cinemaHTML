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
    <!-- CONTAINER -->
    <div class="container">
        <!-- CABEÇALHO -->
        <?php include_once('inc/topo.php'); ?>
        <!-- /CABEÇALHO -->
        <!-- CONTEÚDO -->
        <!-- card inicial -->
        <div class="card bg-dark text-white">
            <img src="img/Foto54.jpg" class="card-img" alt="...">
            <div class="card-img-overlay">
                <h3 class="card-title">ATORES</h3>
                <p class="card-text"> <h1>Nessa pagina fica todos os atores que estão inclusos na page WEB</h1></p>
                <p class="card-text"></p>
            </div>
        </div>
        <!-- /card inicial -->
        <br><br>
        <!-- CARD ATOR -->
        <div class="row">
            <h1>Todos Atores</h1>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img src="img/ator1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="img/ator2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a short card.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="img/ator3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="img/ator4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="img/ator5.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="img/ator6.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Atores Cards -->
            <!-- /Atores Cards -->
            <!-- CONTEÚDO -->
            <!-- RODAPÉ -->
            <?php include_once('inc/rodape.php'); ?>
            <!-- RODAPÉ -->
        </div>
        <!-- /CARD ATOR -->

        <!-- /CONTAINER -->
</body>
<!-- JS -->
<?php include_once('inc/js.php'); ?>
<!-- /JS -->

</html>