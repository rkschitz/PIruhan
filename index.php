<?php
$title = "Inicial lindo";
include 'head.php';
?>
<main class="imgfundoindex">
    <div class="container">
        <div class="row">
            <a class="textoinicial mt-2"></a>
            <div class="mt-4 d-flex  justify-content-center align-items-center">
                <h1 style="font-size: 50px; color:white;   text-shadow: 2px 2px 5px black; text-transform:uppercase;">Safe Map</h1>
            </div>
            <div class="col-md-2">

            </div>
            <div class="col-md-8">
                <div class="row text-center d-flex justify-content-center">
                    <a class="mt-5"></a>
                    <p style="color: white; font-size:25px; text-shadow: 2px 2px 5px black">Essa aplicação foi desenvolvida com o intuito de gerar maior segurança para as mulheres e pessoas que se indentificam com esse genero, ao circular pelas ruas do Brasil!</p>
                    <?php

if (!isset($_SESSION['user'])) {
    // echo "<li class='nav-list li'><a href='login.php'>Login</a></li>";
    $mapa = '<h2 style="text-transform: uppercase; color: white; text-shadow: 2px 2px 5px black"> Faça o login para ter acesso ao mapa!</h2>';
} else {
    $mapa = '
    <button type="button" class="acessarmapa text-center"><a style="text-decoration: none;color:white" href="./navigation/bairros.html"> ACESSAR MAPA</a></button>';
}

?>
<div class="col-md-auto mt-5 align-items-center ">
    <?php echo $mapa ?>
                    </div>
                    <div class="container mt-3">
                        <div class="row mt-5 justify-content-center align-items-center">
                            <div class="col-md-5 text-center">
                                <img class="imgloc" src="./assets/imagens/locsemfundo.png">
                            </div>
                            <div class="col-md-5 text-center">
                                <p class="msgmapa" style="text-shadow: 2px 2px 5px black">Baixe o nosso aplicativo!</p>
                                <a href="#"><img class="imgselo" src="./assets/imagens/selogoogleplay.png"></a>
                            </div>
                        </div>
                    </div>
                    <a class="textoinicial mt-5"></a>
                    <div class="col-md-2">

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
include "footer.php";
?>