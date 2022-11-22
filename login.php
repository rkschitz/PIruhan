<?php
@session_start();
// $_SESSION["user"]['senha'] = false;
// $_SESSION["user"]['nome'] = false;


$titulo = "Login";
include __DIR__ . './head.php';
include_once __DIR__ . './config/mysql.php';


if (isset($_POST['acao'])) {
    // $_SESSION["user"]['senha'] = $_POST["senha"];
    $_SESSION["user"]['senha'] = $_POST["senha"];
    $_SESSION["user"]['email'] = $_POST["email"];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = ? AND senha = ?");
    if ($sql->execute(array($email, $senha))) {
        if ($sql->rowCount() > 0) {
            $info = $sql->fetchAll(PDO::FETCH_ASSOC);
            foreach ($info as $key => $values) {
                echo $values["nome"];
                echo $values["email"];
            }
            echo '<script>document.location = "index.php";</script>';
        } else {
            echo 'Usuário ou senha inválido.';
        }
    }
}

?>
<main class="imgfundo">
    <div class="container">
        <div class="row h-100 d-flex justify-content-center align-items-center">
            <div class="col-md-6 row align-items-center justify-content-start">
                <div>
                    <h1 class="msginicial ">Be safe,</h1><br>
                    <h1 class="msginicial">Be you,</h1><br>
                    <h1 class="msginicial">Be safe map.</h1>
                </div>

            </div>
            <div class="col-md-6 mt-0 bordaform aling-items-center justify-content-center">
                <form method="POST" action="login.php" id="principal" class="needs-validation" novalidate>
                    <div class="row">
                        <div>
                            <div class="mt-0 d-flex justify-content-center">
                                <h3 class="msgcadastro">Insira seus dados</h3>
                                
                            </div>
                            <div class="form-floating mt-3 ">
                                <input type="email" id="floatingInput" class="form-control borda" required placeholder="email@gmail.com" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"></input>
                                <label for="floatingInput">Digite seu email</label>
                            </div>
                            <div class="form-floating mt-3 ">
                                <input type="password" id="senha" class="form-control borda" required placeholder="*******" name="senha" minlength="8" maxlength="20"></input>
                                <label for="floatingInput">Digite sua senha</label>
                                <span>*Digite sua senha de 8 digitos*</span>

                            </div>
                                
                            <div class="mt-1 d-flex justify-content-center">
                                
                                <button id="botao" type="submit" class=" bordabutton bordabutton1" name="acao">Enviar</button><br>
                            </div>
                            <p class="msglogin">Caso não possua um login <a class="cadastro1" href="cadastro.php">CADASTRE-SE</a></p>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<?php

include __DIR__ . './footer.php';
?>