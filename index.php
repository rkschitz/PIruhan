<?php
$title = "Pagina Inicial";
include 'head.php';
?>
<main class="">
    <div class="container-fluid imgfundoindex min-vh-100">
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

<a href="apk/Safemap.apk" download="SafeMap1.0"><img class="imgselo" src="./assets/imagens/selogoogleplay.png"></a>
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
    <section id="sobrenos">
        <div class="container">
            <h2 class="titulosobre mt-5">Desenvolvedores</h2>
            <br>
          
            <div class="row text-center">
                <div id="centro" class="col-md-4 mt-3">
                    <img id="programadores" src="assets\imagens\eike.png" width="400px" height="400pt">
                    <br>
                    <p style="margin-top: -90px">Eike Wéslley de Oliveira
                        <br>
                        Programador
                        <br>
                        <a style="text-decoration: none" target="_blank" href="https://www.linkedin.com/in/eike-weslley/"> <img src="assets\imagens\linkedin.png" width="20px" height="20px"> </a>
                        <a style="text-decoration: none" target="_blank" href="https://github.com/eikewdo"> <img src="assets\imagens\github2.png" width="20px" height="20px">
                        </a>
                    </p>
                </div>
                <br>
                <div id="centro" class="col-md-4">
                    <img id="programadores" src="assets\imagens\isa.png" width="400px" height="400pt">
                    <br>
                    <p style="margin-top: -90px">Isabella Miranda da Silva
                        <br>
                        Designer
                        <br>
                        <a style="text-decoration: none" target="_blank" href="https://www.linkedin.com/in/isabella-miranda-a05112238"> <img src="assets\imagens\linkedin.png" width="20px" height="20px"> </a>
                        <a style="text-decoration: none" target="_blank" href="https://github.com/isamirandaaa"> <img src="assets\imagens\github2.png" width="20px" height="20px">
                        </a>
                    </p>
                </div>
                <br>
                <div id="centro" class="col-md-4">
                    <img id="programadores" src="assets\imagens\julia.png" width="400px" height="400pt">
                    <br>
                    <p style="margin-top: -90px">Júlia Alves Theodoro
                        <br>
                        Designer
                        <br>
                        <a style="text-decoration: none" target="_blank" href="https://www.linkedin.com/in/julia-alves-theodoro"> <img src="assets\imagens\linkedin.png" width="20px" height="20px"> </a>
                        <a style="text-decoration: none" target="_blank" href="https://github.com/juliatheodoro"> <img src="assets\imagens\github2.png" width="20px" height="20px">
                        </a>
                    </p>
                </div>
                <br>
                <div id="centro" class="col-md-4">
                    <img id="programadores" src="assets\imagens\nicolas.png" width="400px" height="400pt">
                    <br>
                    <p style="margin-top: -90px">Nicolas Brüski
                        <br>
                        Programador
                        <br>
                        <a style="text-decoration: none" target="_blank" href="https://www.linkedin.com/in/nicolas-br%C3%BCski-226473209"> <img src="assets\imagens\linkedin.png" width="20px" height="20px"> </a>
                        <a style="text-decoration: none" target="_blank" href="https://github.com/nicolasbruski"> <img src="assets\imagens\github2.png" width="20px" height="20px">
                        </a>
                    </p>
                </div>
                <br>
                <div id="centro" class="col-md-4">
                    <img id="programadores" src="assets\imagens\ruhan.png" width="400px" height="400pt">
                    <br>
                    <p style="margin-top: -90px">Ruhan Kaio Schitz
                        <br>
                        Programador
                        <br>
                        <a style="text-decoration: none" target="_blank" href="https://www.linkedin.com/in/ruhankaio"> <img src="assets\imagens\linkedin.png" width="20px" height="20px"> </a>
                        <a style="text-decoration: none" target="_blank" href="https://github.com/rkschitz"> <img src="assets\imagens\github2.png" width="20px" height="20px">
                        </a>
                    </p>
                </div>
                <br>
                <div id="centro" class="col-md-4">
                    <img id="programadores" src="assets\imagens\richard.png" width="400px" height="400px">
                    <br>
                    <p style="margin-top: -90px">Richard Pereira Fernandes
                        <br>
                        Programador
                        <br>
                        <a style="text-decoration: none" target="_blank" href="https://www.linkedin.com/in/richard-fernandes-882b77233"> <img src="assets\imagens\linkedin.png" width="20px" height="20px"> </a>
                        <a style="text-decoration: none" target="_blank" href="https://github.com/NomadesPrime"> <img src="assets\imagens\github2.png" width="20px" height="20px">
                        </a>
                    </p>
                </div>
                <br>
            </div>
        </div>
        </div>
        </div>
</main>
</section>


<style>
    .fundo {
        background-color: #101020;
        background-size: 100%;

    }

    .titulosobre {
        color: white;
        font-size: 50px;
        text-align: center;

    }

    .textosobre {
        color: white;
        margin-left: 40px;
        margin-right: 40px;
        font-size: 15px;
        text-align: center;


    }

    #centro {
        margin-left: 0px;
        color: white;
    }

    #programadores {
        padding: 10px;
        background-size: 100%;
    }
</style>
</main>
<?php
include "footer.php";
?>