<?php

$pdo = new PDO("mysql:host=mysql27-farm15.uni5.net;dbname=copavisconde","copavisconde","Ruhan2022");

if (isset($_POST["acao"])) {
    
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $responsavel = $_POST["responsavel"];
    $numero = $_POST["numero"];

    $sql = $pdo ->prepare("INSERT INTO usuario (nome, email, responsavel, numero) 
                            values (?,?,?,?)");
                            $sql->bindParam(1, $nome, PDO::PARAM_STR);
                            $sql->bindParam(2, $email, PDO::PARAM_STR);
                            $sql->bindParam(3, $responsavel, PDO::PARAM_STR);
                            $sql->bindParam(4, $numero, PDO::PARAM_INT);
                            $sql->execute();
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Silkscreen&display=swap" rel="stylesheet">
    <style>
        body{
            margin: 0;
            padding: 0;
            display: flex;
            place-content: center;
            background-color: #012b63;
            padding: 20px;
        }
        #principal{
            border-radius: 7px;
            padding: 25px;
            border-style: inset;
            border-color: goldenrod;
            border-width: 4px;
            background-color: #003b88;
        }
        #input{
            color: white;
            padding-left: 7px;
            width: 290px;
            height: 45px;
            background-color: rgb(48, 48, 48);
            border-radius: 5px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-top-width: 0px;
            margin: 6px;
        }
        #botao{
            font-family: 'Silkscreen', cursive;
            margin-top: 25px;
            display: grid;
            place-content: center;
            width: 230px;
            height: 40px;
            background-color: rgb(165, 165, 165);
            color: rgb(2, 2, 2);
            margin-left: auto;
            margin-right: auto;
            font-size: 20px;
        }
        
        @media screen and (min-height: 400px){
            #principal{
            margin-top: 0px;
            }
        }
        @media screen and (min-height: 450px){
            #principal{
            margin-top: 0px;
            }
        }
        @media screen and (min-height: 500px){
            #principal{
            margin-top: 0px;
            }
        }
        @media screen and (min-height: 550px){
            #principal{
            margin-top: 0px;
            }
        }
        @media screen and (min-height: 600px){
            #principal{
            margin-top: 35px;
            }
        }
        @media screen and (min-height: 650px){
            #principal{
            margin-top: 65px;
            }
        }
        @media screen and (min-height: 700px){
            #principal{
            margin-top: 80px;
            }
        }
        @media screen and (min-height: 750px){
            #principal{
            margin-top: 100px;
            }
        }
        @media screen and (min-height: 800px){
            #principal{
            margin-top: 200px;
            }
        }
        @media screen and (min-height: 850px){
            #principal{
            margin-top: 200px;
            }
        }
        @media screen and (min-height: 900px){
            #principal{
            margin-top: 200px;
            }
        }
        @media screen and (min-height: 950px){
            #principal{
            margin-top: 200px;
            }
        }
        @media screen and (min-height: 1000px){
            #principal{
            margin-top: 200px;
            }
        }




        @media screen and (min-height: 400px){
            #principaldois{
            margin-top: 0px;
            }
        }
        @media screen and (min-height: 450px){
            #principaldois{
            margin-top: 0px;
            }
        }
        @media screen and (min-height: 500px){
            #principaldois{
            margin-top: 0px;
            }
        }
        @media screen and (min-height: 550px){
            #principaldois{
            margin-top: 0px;
            }
        }
        @media screen and (min-height: 600px){
            #principaldois{
            margin-top: 35px;
            }
        }
        @media screen and (min-height: 650px){
            #principaldois{
            margin-top: 65px;
            }
        }
        @media screen and (min-height: 700px){
            #principaldois{
            margin-top: 80px;
            }
        }
        @media screen and (min-height: 750px){
            #principaldois{
            margin-top: 100px;
            }
        }
        @media screen and (min-height: 800px){
            #principaldois{
            margin-top: 200px;
            }
        }
        @media screen and (min-height: 850px){
            #principaldois{
            margin-top: 200px;
            }
        }
        @media screen and (min-height: 900px){
            #principaldois{
            margin-top: 200px;
            }
        }
        @media screen and (min-height: 950px){
            #principaldois{
            margin-top: 200px;
            }
        }
        @media screen and (min-height: 1000px){
            #principaldois{
            margin-top: 200px;
            }
        }
    </style>
</head>
<body>
    <form method="POST" action="cadastro.php" id="principal">
        <h2 style="text-align: center; color: rgb(212, 159, 22);">Cadastro dos participantes</h2>
        <h4 style="color: rgb(221, 159, 3); text-align: center;">Formas de pagamento: pix ou dinheiro</h4>
        <br>
        <input type="text" id="input" required placeholder="Nome do time..." name="nome"></input>
        <br>
        <input id="input" required placeholder="Nome do responsável..." name="responsavel"></input>
        <br>
        <input type="email" required id="input" placeholder="Email..." name="email"></input>
  <br>
        <input type="number" id="input" required placeholder="(xx)xxxxx-xxxx" name="numero"></input>
        <br>           
        <button id="botao" type="submit" name="acao"onclick="alert('Você foi cadastrado com sucesso, aguarde alguns minutos que entraremos em contato via email ou pelo celular')">Enviar</button>
    </form>
    <script>
        function cadastro(){
        alert('ok');
        }
    </script>
</body>
</html>
