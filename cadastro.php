<?php
$title = "Cadastro";
include_once __DIR__ . '/config/mysql.php';

if (isset($_POST["acao"])) {

  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $senha = $_POST["senha"];
  $cpf = $_POST["cpf"];
  $dtnascimento = $_POST["dtnascimento"];
  $telefone = $_POST["telefone"];
  $cep = $_POST["cep"];
  $estado = $_POST["estado"];
  $cidade = $_POST["cidade"];
  $bairro = $_POST["bairro"];
  $rua = $_POST["rua"];
  $numero = $_POST["numero"];

  $sql = $pdo->prepare("INSERT INTO usuarios (nome, email, senha, cpf, dtnascimento, telefone, cep, estado, cidade, bairro, rua, numero) 
                            values (?,?,?,?,?,?,?,?,?,?,?,?)");
  $sql->bindParam(1, $nome, PDO::PARAM_STR);
  $sql->bindParam(2, $email, PDO::PARAM_STR);
  $sql->bindParam(3, $senha, PDO::PARAM_STR);
  $sql->bindParam(4, $cpf, PDO::PARAM_STR);
  $sql->bindParam(5, $dtnascimento, PDO::PARAM_STR);
  $sql->bindParam(6, $telefone, PDO::PARAM_STR);
  $sql->bindParam(7, $cep, PDO::PARAM_STR);
  $sql->bindParam(8, $estado, PDO::PARAM_STR);
  $sql->bindParam(9, $cidade, PDO::PARAM_STR);
  $sql->bindParam(10, $bairro, PDO::PARAM_STR);
  $sql->bindParam(11, $rua, PDO::PARAM_STR);
  $sql->bindParam(12, $numero, PDO::PARAM_STR);
  $sql->execute();
  echo '<script>document.location = "login.php";</script>';
} 
include "head.php";
?>
<main class="imgfundo">
  <div class="container">
    <div class="row">
      <div class="col-md-6 row align-items-center justify-content-start">
        <div>
          <h1 class="msginicial">Be safe,</h1><br>
          <h1 class="msginicial">Be you,</h1><br>
          <h1 class="msginicial">Be safe map.</h1>
        </div>

      </div>
      <div class="col-md-6 mt-5 bordaform">
        <form method="POST" action="cadastro.php" id="principal" class="needs-validation" novalidate>
          <div class="row">
            <div class="mt-4 d-flex justify-content-center">
              <h3 class="msgcadastro">Insira seus dados</h3>
            </div>
            <div class="col-md-6 mt-1 ">
              <div class="form-floating mt-3 ">
                <input type="text" id="nome" class="form-control borda" required placeholder="Nome" name="nome"></input>
                <label for="floatingInput">Digite seu nome completo</label>
              </div>
              <div class="form-floating mt-3 ">
                <input type="email" id="floatingInput" class="form-control borda" required placeholder="email@gmail.com" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"></input>
                <label for="floatingInput">Digite seu email</label>
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
            <div class="col-md-6 mt-1">
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
          <!-- <div class="mt-3 d-flex">
            <input class="checkbox" type="checkbox" name="termodeuso" id="termodeuso">
            <label for="termodeuso">Aceito os <a class="textcheckbox" href="#">Termos de uso</a> e <a href="#" class="textcheckbox">Politicas de Privacidade</a></label>
          </div>
          <div class=" d-flex">
            <input class="checkbox" type="checkbox" name="termodeuso" id="termodeuso">
            <label for="termodeuso">Aceito receber informações sobre as ruas da minha região no meu email.</label>
          </div> -->
          <div class="mt-3 d-flex justify-content-center">
            <button id="botao" type="submit" class=" bordabutton bordabutton1" name="acao">Enviar</button>
          </div>
          <div class="mt-3">
          </div>
      </div>
    </div>

    </form>
  </div>

  <script>
    document.getElementById("info")
  </script>
</main>
<?php
include "footer.php";
?>