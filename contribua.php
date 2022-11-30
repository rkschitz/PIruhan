<?php 
session_start();
    $title = "Contribua";
    include_once __DIR__ . '/config/mysql.php';
    
    //inserir na tabela contribuicoes os dados do formulario junto com o usuario da sessao atual e a data atual do sistema 
    if (isset($_POST["acao"])) {
    
      $nome = $_POST["nome"];
      $endereco = $_POST["endereco"];
      $informacao = $_POST["informacao"];
      $idusuario = $_SESSION["user"];
    
      $sql = $pdo->prepare("INSERT INTO contribuicoes (nome, informacao, endereco, user) 
                                values (?,?,?,?)");
      $sql->bindParam(1, $nome, PDO::PARAM_STR);
      $sql->bindParam(2, $informacao, PDO::PARAM_STR);
      $sql->bindParam(3, $endereco, PDO::PARAM_STR);
      $sql->bindParam(4, $idusuario, PDO::PARAM_STR);
      $sql->execute();
      echo 'usuario cadastrado';
    } else {
      echo 'nao cadastrado';
    }
    
?>
<div>   
    <form method="POST" action="contribua.php" id="principal" class="needs-validation" novalidate>
      <div class="row">
        <div class="mt-4 d-flex justify-content-center">
          <h3 class="msgcadastro">Insira seus dados</h3>
        </div>
        <div class="col-md-6 mt-1 ">
          <div class="form-floating mt-3 ">
            <input type="text" id="nome" class="form-control borda" required placeholder="Nome" name="nome"></input>
            <label for="floatingInput">Digite seu nome completo</label>
          </div>
        </div>
        <div class="col-md-6 mt-1 ">
          <div class="form-floating mt-3 ">
            <input type="text" id="endereco" class="form-control borda" required placeholder="Endereço" name="endereco"></input>
            <label for="floatingInput">Digite seu endereço</label>
          </div>
        </div>
        <div class="col-md-12 mt-1 ">
          <div class="form-floating mt-3 ">
            <input type="text" id="informacao" class="form-control borda" required placeholder="Informação" name="informacao"></input>
            <label for="floatingInput">Digite sua informação</label>
          </div>
        </div>
        <div class="col-md-12 mt-1 ">
          <div class="form-floating mt-3 ">
            <input type="submit" class="btn btn-primary" value="Enviar" name="acao"></input>
          </div>
        </div>
      </div>
</div>