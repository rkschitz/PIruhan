<?php
$title = "Perfil";
include_once __DIR__ . './head.php';

if (!isset($_SESSION['user'])) {
    header("location:index.php");
} else {
    $asd = '';
}


if (!isset($_SESSION['user'])) {
    $name = 'Faça login para saber';
} else {
    $name = '<h5 class="text-center titleperfil fw-bold">  OLÁ ' . $_SESSION['user']['nome'] . ' </h5>';
    $nome = '<h5 class="text-start subtitleperfil">  Nome: ' . $_SESSION['user']['nome'] . ' </h5>';
    $email = '<h5 class="text-start subtitleperfil">  Email: ' . $_SESSION['user']['email'] . ' </h5>';
    $cpf = '<h5 class="text-start subtitleperfil">  CPF: ' . $_SESSION['user']['cpf'] . ' </h5>';
    $dtnascimento = '<h5 class="text-start subtitleperfil">  Data de nascimento: ' . $_SESSION['user']['dtnascimento'] . ' </h5>';
    $telefone = '<h5 class="text-start subtitleperfil">  Telefone: ' . $_SESSION['user']['telefone'] . ' </h5>';
    $cep = '<h5 class="text-start subtitleperfil">  CEP: ' . $_SESSION['user']['cep'] . ' </h5>';
    $cidade = '<h5 class="text-start subtitleperfil">  Cidade: ' . $_SESSION['user']['cidade'] . ' </h5>';
    $bairro = '<h5 class="text-start subtitleperfil">  Bairro: ' . $_SESSION['user']['bairro'] . ' </h5>';
    $rua = '<h5 class="text-start subtitleperfil">  Rua: ' . $_SESSION['user']['rua'] . ' </h5>';
    $numero = '<h5 class="text-start subtitleperfil">  Número: ' . $_SESSION['user']['numero'] . ' </h5>';
};
?>


<main class="fundoperfil">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="text-center">
            <?php echo $name; ?>
                <h3 class="h3perfil">Aqui você pode ver as suas informações<h3>
            </div>
            <div class="col-md-auto MT-3 text-center">
            
                                    <div class="mt-4">
                                            <div class=" mt-3"><?php echo $nome;?></div>
                                            <div class=" mt-3"><?php echo $email;?></div>
                                            <div class=" mt-3"><?php echo $cpf;?></div>
                                            <div class=" mt-3"><?php echo $dtnascimento;?></div>
                                            <div class=" mt-3"><?php echo $telefone;?></div>
                                            <div class=" mt-3"><?php echo $cep;?></div>
                                            <div class=" mt-3"><?php echo $cidade;?></div>
                                            <div class=" mt-3"><?php echo $bairro;?></div>
                                            <div class=" mt-3"><?php echo $rua;?></div>
                                            <div class=" mt-3"><?php echo $numero;?></div>
                                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-center">
                <img class="imguser" src="./assets/imagens/usergraysemfundo.png">
            
            </div>
        </div>
    </div>
            </main>
        <?php
        include_once __DIR__ . './footer.php';
        ?>