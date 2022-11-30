<?php 
if (!isset($_SESSION['user'])) {
  // echo "<li class='nav-list li'><a href='login.php'>Login</a></li>";
  $abrirmapa = '';
  $contribua = '';
} else {
  $abrirmapa = ' <li class="nav-item">
  <a class="nav-link text-white" href="./navigation/bairros.php">Abrir mapa</a> </li>';
  $contribua = ' <li class="nav-item">
  <a class="nav-link text-white" href="contribua.php">Contribua</a> </li>';
}

?>

<nav class="navbar navbar-dark navbar-expand-lg bg-dark text-white bg-black">
  <div class="container">
    <a class="navbar-brand" href="index.php">SAFE MAP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      
    <ul class="navbar-nav w-100 items justify-content-end align-items-end me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">  
      <?php //echo $contribua ?>
      <li class="nav-item">
        <a class="nav-link text-white" href="#sobrenos">Sobre nós</a>
      </li>
      <?php echo $abrirmapa ?>
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="./navigation/bairros.html" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li> -->
        <li class="nav-item dropdown">
          <?php

          if (!isset($_SESSION['user'])) {
            // echo "<li class='nav-list li'><a href='login.php'>Login</a></li>";
            echo "<a class='nav-link d-ropdown-toggle text-white' href='login.php' role='button' d-ata-bs-toggle='dropdown' a-ria-expanded='false'>Login</a>";
            $acoes = '';
          } else {
            $acoes = '
            <li style="display:flex; flex-direction:column; border-bottom: 1px solid gray;" class="p-3 text-center d-flex mb-2 my-3 tamanhobarra">
            <h5 class="text-center"> Olá ' . $_SESSION['user']['nome'] . ' </h5>
            </li>
            ';
            $acoes .= '<li><a class="dropdown-item text-center"border-bottom: 1px solid gray; href="perfil.php">Perfil</a></li>';
            $acoes .= '<li><a class="dropdown-item text-center" border-bottom: 1px solid gray; href="destruir.php">Logout</a></li>';
            echo "<a class='nav-link dropdown-toggle text-white' href='#' role='button' data-bs-toggle='dropdown' aria-expanded='false'>Perfil</a>";
          }

          ?>
          <ul class="dropdown-menu" style="left:-40px ;">
            <?php echo $acoes; ?>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>