<?php
session_start();
$title = "Editar perfil";
include_once __DIR__ . './head.php';


//alterar dados do usuario no banco de dados
if (isset($_POST['acao'])) {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $dtnascimento = $_POST['dtnascimento'];
    $telefone = $_POST['telefone'];
    $cep = $_POST['cep'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = $pdo->prepare("UPDATE usuarios SET nome = ?, cpf = ?, dtnascimento = ?, telefone = ?, cep = ?, cidade = ?, bairro = ?, rua = ?, numero = ?, email = ?, senha = ? WHERE id = ?");
    if ($sql->execute(array($nome, $cpf, $dtnascimento, $telefone, $cep, $cidade, $bairro, $rua, $numero, $email, $senha, $_SESSION["user"]['id']))) {
        echo '<script>document.location = "index.php";</script>';
    } else {
        echo '<script>document.location = "editperfil.php";</script>';
    }
}
?>
<main class="fundoperfil">
  <div class="container">
    <div class="row">
      <div class="col-md-2">
        .
      </div>
      <div class="col-md-8 MT-3 text-center">
        <?php

        if (!isset($_SESSION['user'])) {
          $acoes = '';
        } else {
          $acoes = '';
             $name = '<input type="text" id="nome" class=" borda inputperfil" placeholder="' . $_SESSION['user']['cpf'] . '" name="name"></input>';
          //   $email = '<input type="text" id="nome" class=" borda inputperfil" placeholder="' . $_SESSION['user']['email'] . '" name="name"></input>';
          //   $nome = '<input type="text" id="nome" class=" borda inputperfil" placeholder="' . $_SESSION['user']['nome'] . '" name="name"></input>';
          //   $senha = '<input type="text" id="nome" class=" borda inputperfil" placeholder="' . $_SESSION['user']['senha'] . '" name="name"></input>';
          //   $dt = '<input type="text" id="nome" class=" borda inputperfil" placeholder="' . $_SESSION['user']['dtnascimento'] . '" name="name"></input>';
          //   $email = '<input type="text" id="nome" class=" borda inputperfil" placeholder="' . $_SESSION['user']['email'] . '" name="name"></input>';
          //   $email = '<input type="text" id="nome" class=" borda inputperfil" placeholder="' . $_SESSION['user']['email'] . '" name="name"></input>';
          //   $email = '<input type="text" id="nome" class=" borda inputperfil" placeholder="' . $_SESSION['user']['email'] . '" name="name"></input>';
          // 
        }

        ?>
        <h5 class="text-center titleperfil"> Olá <?php echo $_SESSION['user']['nome']; ?> </h5>
        <h3 class="h3perfil">Aqui você pode alterar as suas informações<h3>
            <div class="row">
              <div class="col-md-6 mt-3">
                <div class="mt-3">
                  <?php echo $name ?>
                  <div class="form-floating mt-3 ">
                    <label class="" for="cpf">Digite seu CPF</label>
                  </div>
                  <div class="form-floating mt-3 ">
                    <label class="nomelabel form-label" for="email"> Digite seu novo email</label>
                    <input type="text" id="email" class="form-control borda inputperfil" placeholder="<?php echo  $_SESSION['user']['email'];  ?>" name="email"></input>
                  </div>
                  <div class="form-floating mt-3 ">
                    <label class="nomelabel form-label" for="nome"> Digite seu Nome</label>
                    <input type="text" id="nome" class="form-control borda inputperfil" placeholder="<?php echo  $_SESSION['user']['nome'];  ?>" name="nome"></input>
                  </div>
                  <!-- <div class="form-floating mt-3 ">
                    <label class="nomelabel form-label" for="senha"> Digite sua senha</label>
                    <input type="text" id="senha" class="form-control borda inputperfil" placeholder="<?php /*echo  $_SESSION['user']['senha'];/**/  ?>" name="senha"></input>
                  </div> -->
                  <div class="form-floating mt-3 ">
                    <label class="nomelabel form-label" for="dtnascimento"> Digite sua data nascimento</label>
                    <input type="text" id="dtnascimento" class="form-control borda inputperfil" placeholder="<?php echo  $_SESSION['user']['dtnascimento'];  ?>" name="dtnascimento"></input>
                  </div>



                </div>
                <div class="form-floating mt-3 ">
                  <input type="email" id="digiteEmail" class="form-control borda" required placeholder=" " name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"></input>
                  <label for="digiteEmail">Digite seu email</label>
                </div>
                <div class="form-floating mt-3 ">
                  <input type="password" id="senha" class="form-control borda" required placeholder="*******" name="senha" minlength="8" maxlength="8"></input>
                  <label for="floatingInput">Digite sua senha (8 digitos)</label>
                </div>
                <div class="form-floating mt-3 ">
                  <input type="text" id="cpf" class="form-control borda" required placeholder="000.000.000-00" name="cpf" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}"></input>
                  <label for="floatingInput">Digite seu cpf</label>
                </div>
                <div class="form-floating mt-3 ">
                  <input type="text" maxlength="8" id="dtnascimento" class="form-control borda" required placeholder="00/00/0000" name="dtnascimento" minlength="8" maxlength="8"></input>
                  <label for="flotaingInput">Digite sua data de nascimento</label>
                </div>
                <div class="form-floating mt-3 ">
                  <input type="text" id="telefone" class="form-control borda" required placeholder="(00) 00000-0000" name="telefone" pattern="^\(?\d{2}\)?[\s-]?[\s9]?\d{4}-?\d{4}$" />
                  <label for="flotaingInput">Digite seu telefone</label>
                </div>
              </div>

              <div class="col-md-6 mt-3">
                <div class="form-floating mt-3 ">
                  <input type="text" id="cep" class="form-control borda" required placeholder="00000-000" name="cep" pattern="\d{5}-?\d{3}"></input>
                  <label for="flotaingInput">Digite seu CEP</label>
                </div>

                <div class="form-floating mt-3 ">
                  <input type="input" id="uf" class="form-control borda" readonly placeholder="UF" name="estado"></input>
                  <label for="flotaingInput">Estado</label>
                </div>

                <div class="form-floating mt-3 ">
                  <input type="input" id="cidade" class="form-control borda" placeholder="cidade" readonly name="cidade"></input>
                  <label for="flotaingInput">Cidade</label>
                </div>

                <div class="form-floating mt-3 ">
                  <input type="input" id="bairro" class="form-control borda" placeholder="bairo" readonly name="bairro"></input>
                  <label for="flotaingInput">Bairro</label>
                </div>

                <div class="form-floating mt-3 ">
                  <input type="input" id="rua" class="form-control borda" placeholder="rua" readonly name="rua"></input>
                  <label for="flotaingInput">Rua</label>
                </div>

                <div class="form-floating mt-3 ">
                  <input type="text" onkeypress="return event.charCode >= 48 && event.charCode <= 57" id="flotaingInput" class="form-control borda" placeholder="numero" required name="numero"></input>
                  <label for="flotaingInput">Digite o número</label>
                </div>
              </div>
            </div>
            <div class="mt-3 d-flex justify-content-center">
              <button id="botao" type="submit" class=" bordabutton bordabutton1" name="acao">Enviar</button>
            </div>
            <div class="mt-3">
            </div>



      </div>
      <div class="col-md-2">
        .
      </div>
    </div>
  </div>
</main>

<?php
include_once __DIR__ . './footer.php';
?>