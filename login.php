<?php
@session_start();
// $_SESSION["user"]['senha'] = false;
// $_SESSION["user"]['name'] = false;


$titulo = "Login";
include __DIR__ . '/head.php';
include_once __DIR__ . '/config/mysql.php';

$aviso =  false;
if (isset($_POST['acao'])) {
    // $_SESSION["user"]['senha'] = $_POST["senha"];
    // $_SESSION["user"]['senha'] = $_POST["senha"];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = ? AND senha = ? ");
    if ($sql->execute(array($email, $senha))) {
        if ($sql->rowCount() > 0) {
            $info = $sql->fetchAll(PDO::FETCH_ASSOC);
            foreach ($info as $key => $values) {
                $_SESSION["user"]['email'] = $_POST["email"];
                $_SESSION["user"]['nome'] =  $values["nome"];
                $_SESSION["user"]['cpf'] =  $values["cpf"];
                $_SESSION["user"]['dtnascimento'] =  $values["dtnascimento"];
                $_SESSION["user"]['telefone'] =  $values["telefone"];
                $_SESSION["user"]['cep'] =  $values["cep"];
                $_SESSION["user"]['cidade'] =  $values["cidade"];
                $_SESSION["user"]['bairro'] =  $values["bairro"];
                $_SESSION["user"]['rua'] =  $values["rua"];
                $_SESSION["user"]['numero'] =  $values["numero"];

                echo $values["name"];
                echo $values["email"];
                echo $values["cpf"];
                echo $values["dtnascimento"];
                echo $values["telefone"];
                echo $values["cep"];
                echo $values["cidade"];
                echo $values["bairro"];
                echo $values["rua"];
                echo $values["numero"];
            }
            echo '<script>document.location = "index.php";</script>';
        } else {
            $aviso =  'Usuário ou senha inválido.';
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
                            <?php if ($aviso) : ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $aviso; ?>
                                </div>
                            <?php endif; ?>
                            <div class="form-floating mt-3 ">
                                <input type="email" id="floatingInput" class="form-control borda" required placeholder="email@gmail.com" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"></input>
                                <label for="floatingInput">Digite seu email</label>
                            </div>
                            <div class="form-floating mt-3 ">
                                <input type="password" id="senha" class="form-control borda" required placeholder="*******" name="senha" minlength="8" maxlength="8"></input>
                                <label for="floatingInput">Digite sua senha</label>
                                <span>*Digite sua senha de 8 digitos*</span>

                            </div>

                            <div class="mt-1 d-flex justify-content-center">
                                <input type="submit" id="botao" type="submit" class=" bordabutton bordabutton1" name="acao" value="Enviar"><br>
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

include __DIR__ . '/footer.php';
?>