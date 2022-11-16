<nav>
    <a class="logo" href="index.php">Safe Map</a>
    <div class="mobile-menu">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>
    <ul class="nav-list">
        <li class="nav-list li"><a href="#">Sobre nós</a> </li>
        <li class="nav-list li"><a href="cadastro.php">Cadastro</a> </li>
        <li class="nav-list li"><a href="#">Abrir mapa</li>
        <?php

        if ((!isset($_SESSION['email'])) and (!isset($_SESSION['senha']))) {
            echo "<li class='nav-list li'><a href='login.php'>Login</a></li>";
        } else {
            echo "<li class='nav-list li'><a href='perfil.html';>Perfil</a></li>";
        }

        ?>
        <li>
    </ul>
</nav>