<?php
include_once __DIR__ . './head.php';
?>
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <h1>Faça seu cadastro</h1>
    </div>
    <div class="col-md-2">
      <form method="POST" action="cadastro.php" id="principal">
        <div class="form-floating mt-3">
          <input type="text" id="floatingInput" class="form-control " required placeholder="Nome" name="nome"></input>
          <label for="floatingInput">Digite seu nome </label>
        </div>
        <div class="form-floating mt-3">
          <input type="text" id="floatingInput" class="form-control" required placeholder="email@gmail.com" name="email" onblur="checarEmail()"></input>
          <label for="floatingInput">Digite seu email</label>
          <div id="emailHelp" class="form-text">Nós nunca compartilharemos seu email com ninguem.</div>
        </div>
    </div>
    <div class="col-md-2">
      <div class="form-floating mt-3">
        <input type="password" id="senha" class="form-control" required placeholder="*******" name="senha"></input>
        <label for="floatingInput">Digite sua senha</label>
      </div>
      <div class="form-floating mt-3">
        <input type="text" id="cpf" class="form-control" required placeholder="000.000.000-00" name="cpf"></input>
        <label for="floatingInput">Digite seu cpf</label>
      </div>
    </div>

    <button id="botao" type="submit" class="btn btn-primary" name="acao">Enviar</button>


    </form>
    <button class="btn btn-primary" onclick="alerta()">Alerta</button>
  </div>
</div>

<?php
include_once __DIR__ . './footer.php';
?>