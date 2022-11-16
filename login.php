<?php
    session_start();
    $_SESSION["email"] = "";
    $_SESSION["senha"] = "";
?> 
<html>
    <head>
        <title>cadastro</title>
        <link rel="stylesheet" href="assets/css/cadastro.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
        <link>
</head>
<body>
<header>
      <nav>
        <a class="logo" href="index.php">Safe Map</a>
        <div class="mobile-menu">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
        <ul class="nav-list">
          <!--<li><a href="#">Para onde vai?</a></li>
          <li><a href="#">Contribua</a></li>
          <li><a href="#">Quem somos</a></li>
          <li><a href="cadastro.php">Cadastro</a></li>-->
        </ul>
      </nav>
    </header>
    <main>
        <form method="POST" id="principal">

        <input  required placeholder="Nome do responsável..." name="email"></input>
        <br>
        <input type="text" required  placeholder="Email..." name="senha"></input>

        <button type="submit" name="acao">Enviar</button>
    </form>
    <div id="erro">
    </div>
    </main>
    <script>
        function cadastro(){
        alert('ok');
        }
    </script>

    </body>
    </html>
    <?php
    $pdo = new PDO("mysql:host=localhost;dbname=copavisconde","root","");
 
    if(isset($_POST['acao'])){
        
        $email = $_POST["email"];
        $senha = $_POST["senha"];
 
        $sql = $pdo->prepare("SELECT * FROM usuarios
                              WHERE email = ? AND senha = ?");
 
        if ($sql->execute(array($email, $senha))){
            if ($sql->rowCount() > 0){
                $info = $sql->fetchAll(PDO::FETCH_ASSOC);
                foreach($info as $key => $values){
                    $_SESSION["nome"] = $values["nome"];
                    $_SESSION["email"] = $values["email"];
                }
                ?>
                <script>
                document.location = "index.php";
                </script>
                <?php
            }else{
              ?>
                <script>
                   const diverro = document.getElementById ("erro");
                   diverro.innerHTML = "Usuario não cadastrado";
                </script>
                <?php
            }
        }
    }
?>