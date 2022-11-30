<?php 
include "head.php";
    if (!isset($_SESSION['user'])) {
        header("location:../index.php");
    } else {
        $asd = '';
    }
?>

<!DOCTYPE html>
<head>    
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <link rel="shortcut icon" href="./assets/imagens/logo.jfif">
    
        <script>
            L_NO_TOUCH = false;
            L_DISABLE_3D = false;
        </script>
    
    <style>html, body {width: 100%;height: 100%;margin: 0;padding: 0;}</style>
    <style>#map {position:absolute;top:0;bottom:0;right:0;left:0;}</style>
    <script src="https://cdn.jsdelivr.net/npm/leaflet@1.6.0/dist/leaflet.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Leaflet.awesome-markers/2.0.2/leaflet.awesome-markers.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet@1.6.0/dist/leaflet.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Leaflet.awesome-markers/2.0.2/leaflet.awesome-markers.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/python-visualization/folium/folium/templates/leaflet.awesome.rotate.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https: //fonts.googleapis.com/css2? family= Libre+Baskerville & display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    
    
    <meta name="viewport" content="width=device-width,
        initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <style>
                body{
                    background-color: black;

                }
                #map_6e83cbd798c966a931e947ef49eedbcb {
                    border-style: solid;
                    border-color: grey;
                    position: relative;
                    width: 77%;
                    height: 90%;
                    left: 20%;
                    top: 0%;
                }
                #marcador{
                    margin-top: -6px;
                    height: 15px;
                }
                #descricao{
                    margin: 5px;
                }
                #rodape{
                    display: flex;
                    justify-content: space-evenly;
                    position: relative;
                    border-style: inset;
                    user-select: none;
                    border-width: 0.1px;
                    border-left-width: 0;
                    border-bottom-width: 0;
                    border-right-width: 0;
                    border-color: rgb(255, 255, 255);
                    backdrop-filter: blur(5px);
                    padding: 10px;
                    top: 89.7%;                 
                    z-index: 0;
                    height: 200px;
                    width: 100%;
                    font-size: 2.5rem;
                }
                #rodape{
                    display: flex;
                    justify-content: space-evenly;
                    position: relative;
                    border-style: inset;
                    user-select: none;
                    border-width: 0.1px;
                    border-left-width: 0;
                    border-bottom-width: 0;
                    border-right-width: 0;
                    border-color: rgb(255, 255, 255);
                    backdrop-filter: blur(5px);
                    padding: 10px;
                    top: 89.7%;                 
                    z-index: -1;
                    height: 200px;
                    width: 100%;
                    font-size: 2.5rem;
                }
                #pesquisa{
                    position: relative;
                    width: 20%;
                }
                #dados{
                    font-family: 'Libre Baskerville', serif;
                    border-style: inset;
                    border-color: grey;
                    border-width: 2px;
                    z-index: -1;
                    position: absolute;
                    font-size: 20px;
                    top: 1.5%;
                    left: 1%;
                    padding: 5px;  
                    background-color: rgb(236, 236, 236);
                    border-radius: 5px;
                    min-height: auto;
                }
                #icones{
                    display: flex;
                    border-style: inset;
                    text-decoration: none;
                    color: rgb(207, 49, 49);
                    border-width: 1px;
                    border-left-width: 0;
                    border-right-width: 0;
                    border-bottom-width: 0;
                    margin-top: 5px;
                    max-width: 300px;
                    max-height: 500px;
                    font-size: 15px;
                    padding: 10px;
                }
                #esquerda{
                    position: absolute;
                    margin-top: 30%;
                    left: 10%;
                }
                #recentes{
                    margin-top: 50%;
                }
                #favoritos{
                    margin-top: 5%;
                }
                #localizacao{
                    font-size: 16px; 
                    padding-left: 1rem; 
                    text-decoration: none; 
                    color: white;
                }
                #salvar{
                    margin-top: 5%;
                    margin-left: 22%;
                    background-color: lightgray;
                    color: black;
                    width: 40%;
                    height: 40px;
                    border-radius: 5px;
                }
                #input{
                    font-size: 17px;
                    color: white;
                    padding-left: 20px;
                    border-radius: 30px;
                    background-color: rgb(175, 175, 175);
                    width: 85%;
                    height: 45px;
                    border-style: solid;
                    border-width: 3px;
                }
                #input::placeholder{
                    color: white;
                }
                #inputdois{
                    color: white;
                    padding-left: 10px;
                    text-decoration: none;
                    width: 85%;
                    height: 45px;
                    border-style: solid;
                    border-width: 3px;
                    background-color: rgb(175, 175, 175);
                    margin-top: 5px;
                    border-radius: 20px;
                }
                #direita{
                    position: relative;
                    top: 1.5%;
                    float: right;
                    right: 1.5%;
                    width: 400px;
                    height: 30px;
                    display: flex;
                    justify-content: space-evenly;
                    z-index: 3000;
                }
                #nivel{
                    border-style: solid; 
                    border-right: 1px; 
                    border-color: #000000;
                    width: 8rem; 
                    text-align: center;
                    color: rgb(231, 231, 231);
                    padding: 3.5px;
                    font-size: 1.5rem;
                }
                #display{
                    display: flex;
                }
                #espaco{
                    position: relative;
                    width: 20%;
                }
                #navbar{
                    display: flex;    
                    justify-content: space-evenly; 
                    position: relative;
                    width: 100%;        
                }
                #links{
                    font-size: 20px;
                    margin: 10px;
                    text-decoration: none;
                    color: rgb(216, 216, 216);
                }
                #menu{
                    max-width: 500px;
                }
                #menuinput{
                    font-size: 17px;
                    color: white;
                    padding-left: 20px;
                    border-radius: 30px;
                    background-color: rgb(209, 209, 209);
                    width: 100%;
                    height: 45px;
                    border-style: solid;
                    border-width: 3px;
                }
                #menuinput::placeholder{
                    color: grey;
                }
                #menuinputdois{
                    color: white;
                    padding-left: 10px;
                    text-decoration: none;
                    width: 100%;
                    height: 45px;
                    border-style: solid;
                    border-width: 3px;
                    background-color: rgb(209, 209, 209);
                    margin-top: 5px;
                    border-radius: 20px;
                }
                #menulocalizacao{
                    font-size: 16px; 
                    padding-left: 1rem; 
                    text-decoration: none; 
                    color: grey;
                    width: 100%;
                }
                #menusalvar{
                    margin-top: 5%;
                    margin-left: 31%;
                    background-color: lightgray;
                    color: black;
                    width: 35%;
                    height: 40px;
                    border-radius: 5px;
                }
                #menufavoritos{
                    margin-top: 1%;
                }
                #menurecentes{
                    margin-top: 1%;
                }

                @media (max-height: 900px) {
                    body{
                    background-color: black;

                }
                #map_6e83cbd798c966a931e947ef49eedbcb {
                    border-style: solid;
                    border-color: grey;
                    position: relative;
                    width: 77%;
                    height: 90%;
                    left: 20%;
                    top: 0%;
                }
                #marcador{
                    margin-top: -6px;
                    height: 15px;
                }
                #descricao{
                    margin: 5px;
                }
                #rodape{
                    display: flex;
                    justify-content: space-evenly;
                    position: relative;
                    border-style: inset;
                    user-select: none;
                    border-width: 0.1px;
                    border-left-width: 0;
                    border-bottom-width: 0;
                    border-right-width: 0;
                    border-color: rgb(255, 255, 255);
                    backdrop-filter: blur(5px);
                    padding: 10px;
                    top: 90%;                 
                    z-index: 0;
                    height: 200px;
                    width: 100%;
                    font-size: 2.5rem;
                }
                #rodape{
                    display: flex;
                    justify-content: space-evenly;
                    position: relative;
                    border-style: inset;
                    user-select: none;
                    border-width: 0.1px;
                    border-left-width: 0;
                    border-bottom-width: 0;
                    border-right-width: 0;
                    border-color: rgb(255, 255, 255);
                    backdrop-filter: blur(5px);
                    padding: 10px;
                    top: 89.7%;                 
                    z-index: -1;
                    height: 200px;
                    width: 100%;
                    font-size: 2.5rem;
                }
                #pesquisa{
                    position: relative;
                    width: 20%;
                }
                #dados{
                    font-family: 'Libre Baskerville', serif;
                    border-style: inset;
                    border-color: grey;
                    border-width: 2px;
                    z-index: -1;
                    position: absolute;
                    font-size: 20px;
                    top: 1.5%;
                    left: 1%;
                    padding: 5px;  
                    background-color: rgb(236, 236, 236);
                    border-radius: 5px;
                    min-height: auto;
                }
                #icones{
                    display: flex;
                    border-style: inset;
                    text-decoration: none;
                    color: rgb(207, 49, 49);
                    border-width: 1px;
                    border-left-width: 0;
                    border-right-width: 0;
                    border-bottom-width: 0;
                    margin-top: 5px;
                    max-width: 300px;
                    max-height: 500px;
                    font-size: 15px;
                    padding: 10px;
                }
                #esquerda{
                    position: absolute;
                    margin-top: 30%;
                    left: 10%;
                }
                #recentes{
                    margin-top: 50%;
                }
                #favoritos{
                    margin-top: 5%;
                }
                #salvar{
                    margin-top: 5%;
                    margin-left: 22.5%;
                    background-color: lightgray;
                    color: black;
                    width: 40%;
                    height: 40px;
                    border-radius: 5px;
                }
                #input{
                    font-size: 14px;
                    color: white;
                    padding-left: 5px;
                    border-radius: 30px;
                    background-color: rgb(175, 175, 175);
                    width: 85%;
                    height: 40px;
                    border-style: solid;
                    border-width: 3px;
                }
                #input::placeholder{
                    color: white;
                }
                #inputdois{
                    color: white;
                    padding-left: 0px;
                    text-decoration: none;
                    width: 85%;
                    height: 40px;
                    border-style: solid;
                    border-width: 3px;
                    background-color: rgb(175, 175, 175);
                    margin-top: 5px;
                    border-radius: 20px;
                }
                #localizacao{
                    font-size: 16px; 
                    padding-left: 1rem; 
                    text-decoration: none; 
                    color: white;
                }
                #direita{
                    position: relative;
                    top: 1.5%;
                    float: right;
                    right: 1.5%;
                    width: 400px;
                    height: 30px;
                    display: flex;
                    justify-content: space-evenly;
                    z-index: 3000;
                }
                #nivel{
                    border-style: solid; 
                    border-right: 1px; 
                    border-color: #000000;
                    width: 8rem; 
                    text-align: center;
                    color: rgb(231, 231, 231);
                    padding: 3.5px;
                    font-size: 1.5rem;
                }
                #display{
                    display: flex;
                }
                #espaco{
                    position: relative;
                    width: 20%;
                }
                #navbar{
                    display: flex;    
                    justify-content: space-evenly; 
                    position: relative;
                    width: 100%;        

                }
                #links{
                    font-size: 20px;
                    margin: 10px;
                    text-decoration: none;
                    color: rgb(216, 216, 216);
                }
                }
                @media (max-height: 800px) {
                    body{
                    background-color: black;

                }
                #map_6e83cbd798c966a931e947ef49eedbcb {
                    border-style: solid;
                    border-color: grey;
                    position: relative;
                    width: 77%;
                    height: 90%;
                    left: 20%;
                    top: 0%;
                }
                #marcador{
                    margin-top: -6px;
                    height: 15px;
                }
                #descricao{
                    margin: 5px;
                }
                #rodape{
                    display: flex;
                    justify-content: space-evenly;
                    position: relative;
                    border-style: inset;
                    user-select: none;
                    border-width: 0.1px;
                    border-left-width: 0;
                    border-bottom-width: 0;
                    border-right-width: 0;
                    border-color: rgb(255, 255, 255);
                    backdrop-filter: blur(5px);
                    padding: 10px;
                    top: 84%;                 
                    z-index: -1;
                    height: 200px;
                    width: 100%;
                    font-size: 2.5rem;
                }
                #pesquisa{
                    position: relative;
                    width: 20%;
                }
                #dados{
                    font-family: 'Libre Baskerville', serif;
                    border-style: inset;
                    border-color: grey;
                    border-width: 2px;
                    z-index: -1;
                    position: absolute;
                    font-size: 20px;
                    top: 1.5%;
                    left: 1%;
                    padding: 5px;  
                    background-color: rgb(236, 236, 236);
                    border-radius: 5px;
                    min-height: auto;
                }
                #icones{
                    display: flex;
                    border-style: inset;
                    text-decoration: none;
                    color: rgb(207, 49, 49);
                    border-width: 1px;
                    border-left-width: 0;
                    border-right-width: 0;
                    border-bottom-width: 0;
                    margin-top: 5px;
                    max-width: 300px;
                    max-height: 500px;
                    font-size: 15px;
                    padding: 10px;
                }
                #esquerda{
                    position: absolute;
                    margin-top: 30%;
                    left: 10%;
                }
                #recentes{
                    margin-top: 50%;
                }
                #favoritos{
                    margin-top: 5%;
                }
                #salvar{
                    margin-top: 5%;
                    margin-left: 22.5%;
                    background-color: lightgray;
                    color: black;
                    width: 40%;
                    height: 40px;
                    border-radius: 5px;
                }
                #input{
                    font-size: 14px;
                    color: white;
                    padding-left: 5px;
                    border-radius: 30px;
                    background-color: rgb(175, 175, 175);
                    width: 85%;
                    height: 40px;
                    border-style: solid;
                    border-width: 3px;
                }
                #input::placeholder{
                    color: white;
                }
                #inputdois{
                    color: white;
                    padding-left: 0px;
                    text-decoration: none;
                    width: 85%;
                    height: 40px;
                    border-style: solid;
                    border-width: 3px;
                    background-color: rgb(175, 175, 175);
                    margin-top: 5px;
                    border-radius: 20px;
                }
                #localizacao{
                    font-size: 16px; 
                    padding-left: 1rem; 
                    text-decoration: none; 
                    color: white;
                }
                #direita{
                    position: relative;
                    top: 1.5%;
                    float: right;
                    right: 1.5%;
                    width: 400px;
                    height: 30px;
                    display: flex;
                    justify-content: space-evenly;
                    z-index: 3000;
                }
                #nivel{
                    border-style: solid; 
                    border-right: 1px; 
                    border-color: #000000;
                    width: 8rem; 
                    text-align: center;
                    color: rgb(231, 231, 231);
                    padding: 3.5px;
                    font-size: 1.5rem;
                }
                #display{
                    display: flex;
                }
                #espaco{
                    position: relative;
                    width: 20%;
                }
                #navbar{
                    display: flex;    
                    justify-content: space-evenly; 
                    position: relative;
                    width: 100%;        

                }
                #links{
                    font-size: 20px;
                    margin: 10px;
                    text-decoration: none;
                    color: rgb(216, 216, 216);
                }
                }
                @media (max-height: 700px) {
                    body{
                    background-color: black;

                }
                #map_6e83cbd798c966a931e947ef49eedbcb {
                    border-style: solid;
                    border-color: grey;
                    position: relative;
                    width: 77%;
                    height: 90%;
                    left: 20%;
                    top: 0%;
                }
                #marcador{
                    margin-top: -6px;
                    height: 15px;
                }
                #descricao{
                    margin: 5px;
                }
                #rodape{
                    display: flex;
                    justify-content: space-evenly;
                    position: relative;
                    border-style: inset;
                    user-select: none;
                    border-width: 0.1px;
                    border-left-width: 0;
                    border-bottom-width: 0;
                    border-right-width: 0;
                    border-color: rgb(255, 255, 255);
                    backdrop-filter: blur(5px);
                    padding: 10px;
                    top: 84%;                 
                    z-index: -1;
                    height: 200px;
                    width: 100%;
                    font-size: 2.5rem;
                }
                #pesquisa{
                    position: relative;
                    width: 20%;
                }
                #dados{
                    font-family: 'Libre Baskerville', serif;
                    border-style: inset;
                    border-color: grey;
                    border-width: 2px;
                    z-index: -1;
                    position: absolute;
                    font-size: 20px;
                    top: 1.5%;
                    left: 1%;
                    padding: 5px;  
                    background-color: rgb(236, 236, 236);
                    border-radius: 5px;
                    min-height: auto;
                }
                #icones{
                    display: flex;
                    border-style: inset;
                    text-decoration: none;
                    color: rgb(207, 49, 49);
                    border-width: 1px;
                    border-left-width: 0;
                    border-right-width: 0;
                    border-bottom-width: 0;
                    margin-top: 5px;
                    max-width: 300px;
                    max-height: 500px;
                    font-size: 15px;
                    padding: 10px;
                }
                #esquerda{
                    position: absolute;
                    margin-top: 10%;
                    left: 10%;
                }
                #recentes{
                    margin-top: 50%;
                }
                #favoritos{
                    margin-top: 5%;
                }
                #salvar{
                    margin-top: 5%;
                    margin-left: 22.5%;
                    background-color: lightgray;
                    color: black;
                    width: 40%;
                    height: 40px;
                    border-radius: 5px;
                }
                #input{
                    font-size: 14px;
                    color: white;
                    padding-left: 5px;
                    border-radius: 30px;
                    background-color: rgb(175, 175, 175);
                    width: 85%;
                    height: 40px;
                    border-style: solid;
                    border-width: 3px;
                }
                #input::placeholder{
                    color: white;
                }
                #inputdois{
                    color: white;
                    padding-left: 0px;
                    text-decoration: none;
                    width: 85%;
                    height: 40px;
                    border-style: solid;
                    border-width: 3px;
                    background-color: rgb(175, 175, 175);
                    margin-top: 5px;
                    border-radius: 20px;
                }
                #localizacao{
                    font-size: 16px; 
                    padding-left: 1rem; 
                    text-decoration: none; 
                    color: white;
                }
                #direita{
                    position: relative;
                    top: 1.5%;
                    float: right;
                    right: 1.5%;
                    width: 400px;
                    height: 30px;
                    display: flex;
                    justify-content: space-evenly;
                    z-index: 3000;
                }
                #nivel{
                    border-style: solid; 
                    border-right: 1px; 
                    border-color: #000000;
                    width: 8rem; 
                    text-align: center;
                    color: rgb(231, 231, 231);
                    padding: 3.5px;
                    font-size: 1.5rem;
                }
                #display{
                    display: flex;
                }
                #espaco{
                    position: relative;
                    width: 20%;
                }
                #navbar{
                    display: flex;    
                    justify-content: space-evenly; 
                    position: relative;
                    width: 100%;        

                }
                #links{
                    font-size: 20px;
                    margin: 10px;
                    text-decoration: none;
                    color: rgb(216, 216, 216);
                }
                }
                @media (max-height: 600px) {
                       #map_6e83cbd798c966a931e947ef49eedbcb {
                    border-style: none;
                    border-color: grey;
                    position: relative;
                    width: 100%;
                    height: 135%;
                    left: 0%;
                    top:  -8%;
                }
                #rodape{
                    display: flex;
                    justify-content: space-evenly;
                    position: relative;
                    border-style: inset;
                    user-select: none;
                    border-width: 0.1px;
                    border-left-width: 0;
                    border-bottom-width: 0;
                    border-right-width: 0;
                    border-color: rgb(255, 255, 255);
                    backdrop-filter: blur(5px);
                    padding: 10px;
                    top: 80%;                 
                    z-index: 1000;
                    height: 200px;
                    width: 100%;
                    font-size: 2.5rem;
                }
                #dados{
                    font-family: 'Libre Baskerville', serif;
                    border-style: inset;
                    border-color: grey;
                    border-width: 2px;
                    z-index: 1000;
                    position: absolute;
                    font-size: 20px;
                    top: 2%;
                    left: 2%;
                    padding: 5px;  
                    background-color: rgb(236, 236, 236);
                    border-radius: 5px;
                    min-height: auto;
                }
                #icones{
                    display: flex;
                    border-style: inset;
                    text-decoration: none;
                    color: rgb(207, 49, 49);
                    border-width: 1px;
                    border-left-width: 0;
                    border-right-width: 0;
                    border-bottom-width: 0;
                    margin-top: 5px;
                    max-width: 300px;
                    max-height: 500px;
                    font-size: 15px;
                    padding: 10px;
                }
                #direita{
                    position: relative;
                    top: 2.7%;
                    float: right;
                    right: 2%;
                    width: 400px;
                    height: 30px;
                    display: flex;
                    justify-content: space-evenly;
                    z-index: 3000;
                }
                #nivel{
                    border-style: solid; 
                    border-right: 1px; 
                    border-color: #000000;
                    width: 8rem; 
                    text-align: center;
                    color: rgb(231, 231, 231);
                    padding: 3.5px;
                    font-size: 1.5rem;
                }
                }
                @media (max-height: 500px) {
                    #map_6e83cbd798c966a931e947ef49eedbcb {
                    border-style: none;
                    border-color: grey;
                    position: relative;
                    width: 100%;
                    height: 125%;
                    left: 0%;
                    top:  -9%;
                }
                #rodape{
                    display: flex;
                    justify-content: space-evenly;
                    position: relative;
                    border-style: inset;
                    user-select: none;
                    border-width: 0.1px;
                    border-left-width: 0;
                    border-bottom-width: 0;
                    border-right-width: 0;
                    border-color: rgb(255, 255, 255);
                    backdrop-filter: blur(5px);
                    padding: 10px;
                    top: 73%;                 
                    z-index: 1000;
                    height: 200px;
                    width: 100%;
                    font-size: 2.5rem;
                }
                #dados{
                    font-family: 'Libre Baskerville', serif;
                    border-style: inset;
                    border-color: grey;
                    border-width: 2px;
                    z-index: 1000;
                    position: absolute;
                    font-size: 20px;
                    top: 2%;
                    left: 2%;
                    padding: 5px;  
                    background-color: rgb(236, 236, 236);
                    border-radius: 5px;
                    min-height: auto;
                }
                #icones{
                    display: flex;
                    border-style: inset;
                    text-decoration: none;
                    color: rgb(207, 49, 49);
                    border-width: 1px;
                    border-left-width: 0;
                    border-right-width: 0;
                    border-bottom-width: 0;
                    margin-top: 5px;
                    max-width: 300px;
                    max-height: 500px;
                    font-size: 15px;
                    padding: 10px;
                }
                #direita{
                    position: relative;
                    top: 2.7%;
                    float: right;
                    right: 2%;
                    width: 400px;
                    height: 30px;
                    display: flex;
                    justify-content: space-evenly;
                    z-index: 3000;
                }
                #nivel{
                    border-style: solid; 
                    border-right: 1px; 
                    border-color: #000000;
                    width: 8rem; 
                    text-align: center;
                    color: rgb(231, 231, 231);
                    padding: 3.5px;
                    font-size: 1.5rem;
                }
                }
                @media (max-height: 400px) {
                    #rodape{
                        top: 75%;
                    }
                    #map_6e83cbd798c966a931e947ef49eedbcb {
                        border-style: none;
                        border-color: grey;
                        position: relative;
                        width: 100%;
                        height: 150%;
                        left: 0%;
                        top:  -14%;
                    }
                }
                @media (max-height: 330px) {
                    #rodape{
                        top: 75%;
                    }
                    #map_6e83cbd798c966a931e947ef49eedbcb {
                        border-style: none;
                        border-color: grey;
                        position: relative;
                        width: 100%;
                        height: 165%;
                        left: 0%;
                        top:  -18%;
                    }
                }
                @media (max-height: 300px) {
                    #rodape{
                        top: 80%;
                    }
                    #map_6e83cbd798c966a931e947ef49eedbcb {
                        border-style: none;
                        border-color: grey;
                        position: relative;
                        width: 100%;
                        height: 200%;
                        left: 0%;
                        top: -18%;
                    }
                }
                @media (max-height: 200px) {
                    #map_6e83cbd798c966a931e947ef49eedbcb {
                        border-style: none;
                        border-color: grey;
                        position: relative;
                        width: 100%;
                        height: 260%;
                        left: 0%;
                        top: -18%;
                    }
                }
                @media (max-height: 140px) {
                    #map_6e83cbd798c966a931e947ef49eedbcb {
                        border-style: none;
                        border-color: grey;
                        position: relative;
                        width: 100%;
                        height: 400%;
                        left: 0%;
                        top: -18%;
                    }
                }
                @media (max-height: 60px) {
                    #map_6e83cbd798c966a931e947ef49eedbcb {
                        border-style: none;
                        border-color: grey;
                        position: relative;
                        width: 100%;
                        height: 600%;
                        left: 0%;
                        top: -18%;
                    }
                }


                @media (max-width: 1300px)  {
                    body{
                    background-color: black;

                }
                #map_6e83cbd798c966a931e947ef49eedbcb {
                    border-style: solid;
                    border-color: grey;
                    position: relative;
                    width: 77%;
                    height: 90%;
                    left: 20%;
                    top: 0%;
                }
                #marcador{
                    margin-top: -6px;
                    height: 15px;
                }
                #descricao{
                    margin: 5px;
                }
                #rodape{
                    display: flex;
                    justify-content: space-evenly;
                    position: relative;
                    border-style: inset;
                    user-select: none;
                    border-width: 0.1px;
                    border-left-width: 0;
                    border-bottom-width: 0;
                    border-right-width: 0;
                    border-color: rgb(255, 255, 255);
                    backdrop-filter: blur(5px);
                    padding: 10px;
                    top: 89.7%;                 
                    z-index: 0;
                    height: 200px;
                    width: 100%;
                    font-size: 2.5rem;
                }
                #rodape{
                    display: flex;
                    justify-content: space-evenly;
                    position: relative;
                    border-style: inset;
                    user-select: none;
                    border-width: 0.1px;
                    border-left-width: 0;
                    border-bottom-width: 0;
                    border-right-width: 0;
                    border-color: rgb(255, 255, 255);
                    backdrop-filter: blur(5px);
                    padding: 10px;
                    top: 89.7%;                 
                    z-index: -1;
                    height: 200px;
                    width: 100%;
                    font-size: 2.5rem;
                }
                #pesquisa{
                    position: relative;
                    width: 20%;
                }
                #dados{
                    font-family: 'Libre Baskerville', serif;
                    border-style: inset;
                    border-color: grey;
                    border-width: 2px;
                    z-index: -1;
                    position: absolute;
                    font-size: 20px;
                    top: 1.5%;
                    left: 1%;
                    padding: 5px;  
                    background-color: rgb(236, 236, 236);
                    border-radius: 5px;
                    min-height: auto;
                }
                #icones{
                    display: flex;
                    border-style: inset;
                    text-decoration: none;
                    color: rgb(207, 49, 49);
                    border-width: 1px;
                    border-left-width: 0;
                    border-right-width: 0;
                    border-bottom-width: 0;
                    margin-top: 5px;
                    max-width: 300px;
                    max-height: 500px;
                    font-size: 15px;
                    padding: 10px;
                }
                #esquerda{
                    position: absolute;
                    margin-top: 30%;
                    left: 10%;
                }
                #recentes{
                    margin-top: 50%;
                }
                #favoritos{
                    margin-top: 5%;
                }
                #localizacao{
                    font-size: 12px; 
                    padding-left: 1rem; 
                    text-decoration: none; 
                    color: white;
                }
                #salvar{
                    margin-top: 5%;
                    margin-left: 22.5%;
                    background-color: lightgray;
                    color: black;
                    width: 40%;
                    height: 40px;
                    border-radius: 5px;
                }
                #input{
                    font-size: 14px;
                    color: white;
                    padding-left: 5px;
                    border-radius: 30px;
                    background-color: rgb(175, 175, 175);
                    width: 85%;
                    height: 40px;
                    border-style: solid;
                    border-width: 3px;
                }
                #input::placeholder{
                    color: white;
                }
                #inputdois{
                    color: white;
                    padding-left: 0px;
                    text-decoration: none;
                    width: 85%;
                    height: 40px;
                    border-style: solid;
                    border-width: 3px;
                    background-color: rgb(175, 175, 175);
                    margin-top: 5px;
                    border-radius: 20px;
                }
                #direita{
                    position: relative;
                    top: 1.5%;
                    float: right;
                    right: 1.5%;
                    width: 400px;
                    height: 30px;
                    display: flex;
                    justify-content: space-evenly;
                    z-index: 3000;
                }
                #nivel{
                    border-style: solid; 
                    border-right: 1px; 
                    border-color: #000000;
                    width: 8rem; 
                    text-align: center;
                    color: rgb(231, 231, 231);
                    padding: 3.5px;
                    font-size: 1.5rem;
                }
                #display{
                    display: flex;
                }
                #espaco{
                    position: relative;
                    width: 20%;
                }
                #navbar{
                    display: flex;    
                    justify-content: space-evenly; 
                    position: relative;
                    width: 100%;        

                }
                #links{
                    font-size: 20px;
                    margin: 10px;
                    text-decoration: none;
                    color: rgb(216, 216, 216);
                }
                }
                @media (max-width: 1150px) {
                    #map_6e83cbd798c966a931e947ef49eedbcb {
                    border-style: none;
                    border-color: grey;
                    position: relative;
                    width: 100%;
                    height: 100%;
                    left: 0%;
                    top:  -5.2%;
                }
                #rodape{
                    display: flex;
                    justify-content: space-evenly;
                    position: relative;
                    border-style: inset;
                    user-select: none;
                    border-width: 0.1px;
                    border-left-width: 0;
                    border-bottom-width: 0;
                    border-right-width: 0;
                    border-color: rgb(255, 255, 255);
                    backdrop-filter: blur(5px);
                    padding: 10px;
                    top: 89.7%;                 
                    z-index: 1000;
                    height: 200px;
                    width: 100%;
                    font-size: 2.5rem;
                }
                #dados{
                    font-family: 'Libre Baskerville', serif;
                    border-style: inset;
                    border-color: grey;
                    border-width: 2px;
                    z-index: 4000;
                    position: absolute;
                    font-size: 20px;
                    top: 2%;
                    left: 2%;
                    padding: 8px;  
                    background-color: rgb(236, 236, 236);
                    border-radius: 5px;
                    min-height: auto;
                    max-width: 280px;
                }
                #icones{
                    display: flex;
                    border-style: inset;
                    text-decoration: none;
                    color: rgb(207, 49, 49);
                    border-width: 1px;
                    border-left-width: 0;
                    border-right-width: 0;
                    border-bottom-width: 0;
                    margin-top: 5px;
                    max-width: 300px;
                    max-height: 500px;
                    font-size: 15px;
                    padding: 15px;
                }
                #direita{
                    position: relative;
                    top: 2.7%;
                    float: right;
                    right: 2%;
                    width: 400px;
                    height: 30px;
                    display: flex;
                    justify-content: space-evenly;
                    z-index: 3000;
                }
                #nivel{
                    border-style: solid; 
                    border-right: 1px; 
                    border-color: #000000;
                    width: 8rem; 
                    text-align: center;
                    color: rgb(231, 231, 231);
                    padding: 3.5px;
                    font-size: 1.5rem;
                }
                }
                @media (max-width: 500px) {
                    #map_6e83cbd798c966a931e947ef49eedbcb {
                        border-style: none;
                        border-color: grey;
                        position: relative;
                        width: 100%;
                        height: 100%;
                        left: 0%;
                        top:  -5.2%;
                    }
                    #direita{
                        position: relative;
                        top: 3%;
                        float: right;
                        right: 2%;
                        width: 250px;
                        height: 23px;
                        display: flex;
                        justify-content: space-evenly;
                        z-index: 3000;
                    }
                    #nivel{
                        border-style: solid; 
                        border-right: 1px; 
                        border-color: #000000;
                        width: 5rem; 
                        text-align: center;
                        color: rgb(231, 231, 231);
                        padding: 3.5px;
                        font-size: 1.5rem;
                    }
                    #rodape{
                        display: flex;
                        justify-content: space-evenly;
                        position: relative;
                        border-style: inset;
                        user-select: none;
                        border-width: 0.1px;
                        border-left-width: 0;
                        border-bottom-width: 0;
                        border-right-width: 0;
                        border-color: rgb(255, 255, 255);
                        backdrop-filter: blur(5px);
                        padding: 10px;
                        top: 89.7%;                 
                        z-index: 1000;
                        height: 200px;
                        width: 100%;
                        font-size: 1.5rem;
                    }
                }
                @media (max-width: 325px) {
                    #direita{
                        position: relative;
                        top: 1%;
                        float: right;
                        right: 2%;
                        width: 250px;
                        height: 23px;
                        display: flex;
                        justify-content: space-evenly;
                        z-index: 3000;
                    }
                    #dados{
                        font-family: 'Libre Baskerville', serif;
                        border-style: inset;
                        border-color: grey;
                        border-width: 2px;
                        z-index: 1000;
                        position: absolute;
                        font-size: 20px;
                        top: 5%;
                        left: 2%;
                        padding: 5px;  
                        background-color: rgb(236, 236, 236);
                        border-radius: 5px;
                        min-height: auto;
                    }
                }
                @media (max-width: 420px) {
                    #rodape{
                        font-size: 1.1rem;
                    }
                    #direita{
                        width: 295px;
                    }
                    #nivel{
                        font-size: 1.2rem;   
                        padding: 0.4rem;
                    }
                }



                
    </style>       
</head>
<body>      
            <div id="display">
                <div id="espaco">
                    <a href="../index.php" id="links">Voltar</a>
                </div>
                <div id="navbar">
                    <a href="perigo.php" id="links">Cuidado</a>
                    <a href="seguro.php" id="links">Seguro</a>
                    <a href="bairros.php" id="links">Bairros</a>
                </div>
            </div>
            <div id="pesquisa">
                <div id="esquerda">
                    <input id="input" placeholder="Para onde você deseja ir?"></input>
                    <div id="recentes">
                        <a id="localizacao">Últimas Localizações:</a>
                        <input id="inputdois"></input>
                        <input id="inputdois"></input>
                    </div>
                    <div id="favoritos">
                        <a id="localizacao">Localização favorita</a>
                        <input id="inputdois" type="text"></input>
                        <button id="salvar" type="submit">Salvar</button>
                    </div>
                </div>
            </div>
            <div class="folium-map" id="map_6e83cbd798c966a931e947ef49eedbcb" >
                <div class="folium-map" id="map_aea79f4b9faeb2fbe1d50866f21e4136" >
                    <div class="folium-map" id="map_db45728d0d9ca290d99d424728a0f5d0" >
                    </div>
                </div>
                <details id="dados">
                    <summary style="text-align: center;">Menu</summary>
                        <div id="icones"></div>
                        <br>
                        <div id="menu">
                            <input id="menuinput" type="text" placeholder="Para onde você deseja ir?"></input>
                        </div>
                        <br>
                        <div id="menurecentes">
                            <div id="menulocalizacao">Últimas Localizações:</div>
                            <input id="menuinputdois"></input>
                            <input id="menuinputdois"></input>
                        </div>
                        <div id="menufavoritos">
                            <a id="menulocalizacao">Localização favorita</a>
                            <input id="menuinputdois" type="text"></input>
                            <button id="menusalvar" type="submit">Salvar</button>
                        </div>
                        <br>
                </details>
                <div id="direita">
                    <div id="nivel" style="background-color: #9A0B0B;"></div>
                    <div id="nivel" style="background-color: #C64103;"></div>                    
                    <div id="nivel" style="background-color: #E98100;"></div>
                    <div id="nivel" style="background-color: #F79D1A;"></div>
                    <div id="nivel" style="background-color: #F8CF29;"></div>
                    <div id="nivel" style="background-color: #A4CC1F;"></div>
                    <div id="nivel" style="background-color: #89CB23;"></div>
                    <div id="nivel" style="background-color: #60B31E;"></div>
                    <div id="nivel" style="background-color: #229A2F;"></div>
                    <div id="nivel" style="background-color: #0E8940; border-style: solid; border-right-width: 3px;"></div>
                </div>
                <footer id="rodape">
                    <a href="perigo.html" style="color: black; text-decoration: none; font-family: 'Roboto Condensed', sans-serif;">CUIDADO</a>
                    <a href="seguro.html" style="color: black; text-decoration: none; font-family: 'Roboto Condensed', sans-serif;">SEGURO</a>                    
                    <a href="bairros.html" style="color: black; text-decoration: none; font-family: 'Roboto Condensed', sans-serif;">BAIRROS</a>
                </footer>
            </div>       
            
</body>
<script>    
    
            var map_6e83cbd798c966a931e947ef49eedbcb = L.map(
                "map_6e83cbd798c966a931e947ef49eedbcb",
                {
                    center: [-26.3051, -48.8461],
                    crs: L.CRS.EPSG3857,
                    zoom: 12,
                    zoomControl: false,
                    preferCanvas: false,
                }
            );        
    
            var tile_layer_a55f0a126099f79424467786d32cd1d9 = L.tileLayer(
                "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",
                {"attribution": "Data by \u0026copy; \u003ca href=\"http://openstreetmap.org\"\u003eOpenStreetMap\u003c/a\u003e, under \u003ca href=\"http://www.openstreetmap.org/copyright\"\u003eODbL\u003c/a\u003e.", "detectRetina": false, "maxNativeZoom": 18, "maxZoom": 18, "minZoom": 0, "noWrap": false, "opacity": 1, "subdomains": "abc", "tms": false}
            ).addTo(map_6e83cbd798c966a931e947ef49eedbcb);
        
    
            //Jardim Paraiso
            var circle_e1e9582f630b186f9941973badf59709 = L.circle(
                [-26.212024, -48.822281],
                {"bubblingMouseEvents": true, "color": "#E98100", "dashArray": null, "dashOffset": null, "fill": true, "fillColor": "#E98100", "fillOpacity": 0.2, "fillRule": "evenodd", "lineCap": "round", "lineJoin": "round", "opacity": 1.0, "radius": 1000, "stroke": true, "weight": 3}
            ).addTo(map_6e83cbd798c966a931e947ef49eedbcb);
        
    
        var popup_4dd2ffc11c77cf9d6a91fa757226ca6f = L.popup({"maxWidth": "100%"});

        
            
                var html_deb4ca415b635a25c3ca3697cdcd076c = $(`<div id="html_deb4ca415b635a25c3ca3697cdcd076c" style="width: 100.0%; height: 100.0%;">nota&nbsp;3</div>`)[0];
                popup_4dd2ffc11c77cf9d6a91fa757226ca6f.setContent(html_deb4ca415b635a25c3ca3697cdcd076c);
            
        

        circle_e1e9582f630b186f9941973badf59709.bindPopup(popup_4dd2ffc11c77cf9d6a91fa757226ca6f)
        ;

        
    
            //Morro do Meio
            var circle_a5652e0b7b551a63ed87eeae0b3612de = L.circle(
                [-26.324341, -48.908623],
                {"bubblingMouseEvents": true, "color": "#E98100", "dashArray": null, "dashOffset": null, "fill": true, "fillColor": "#E98100", "fillOpacity": 0.2, "fillRule": "evenodd", "lineCap": "round", "lineJoin": "round", "opacity": 1.0, "radius": 800, "stroke": true, "weight": 3}
            ).addTo(map_6e83cbd798c966a931e947ef49eedbcb);
        
    
        var popup_7eeac6990d6019335a8d7a69d43e5a28 = L.popup({"maxWidth": "100%"});

        
            
                var html_a4ec99c819de154af4a3c67d967d9281 = $(`<div id="html_a4ec99c819de154af4a3c67d967d9281" style="width: 100.0%; height: 100.0%;">nota&nbsp;3</div>`)[0];
                popup_7eeac6990d6019335a8d7a69d43e5a28.setContent(html_a4ec99c819de154af4a3c67d967d9281);
            
        

        circle_a5652e0b7b551a63ed87eeae0b3612de.bindPopup(popup_7eeac6990d6019335a8d7a69d43e5a28)
        ;

        

        //Boa Vista
        var circle_29f020e5578f96f0d053792740448d20 = L.circle(
                [-26.298657, -48.822451],
                {"bubblingMouseEvents": true, "color": "#A4CC1F", "dashArray": null, "dashOffset": null, "fill": true, "fillColor": "#A4CC1F", "fillOpacity": 0.2, "fillRule": "evenodd", "lineCap": "round", "lineJoin": "round", "opacity": 1.0, "radius": 900, "stroke": true, "weight": 3}
            ).addTo(map_6e83cbd798c966a931e947ef49eedbcb);
        
    
        var popup_3632cb37936a51c2f443c335cc854a1c = L.popup({"maxWidth": "100%"});

        
            
                var html_edf52eba53abe2c092614de72a3c2a7b = $(`<div id="html_edf52eba53abe2c092614de72a3c2a7b" style="width: 100.0%; height: 100.0%;">nota&nbsp;6</div>`)[0];
                popup_3632cb37936a51c2f443c335cc854a1c.setContent(html_edf52eba53abe2c092614de72a3c2a7b);
            
        

        circle_29f020e5578f96f0d053792740448d20.bindPopup(popup_3632cb37936a51c2f443c335cc854a1c)
        ;


    
        //Aventureiro
        var circle_29f020e5578f96f0d053792740448d20 = L.circle(
                [-26.244205, -48.810233],
                {"bubblingMouseEvents": true, "color": "#E98100", "dashArray": null, "dashOffset": null, "fill": true, "fillColor": "#E98100", "fillOpacity": 0.2, "fillRule": "evenodd", "lineCap": "round", "lineJoin": "round", "opacity": 1.0, "radius": 900, "stroke": true, "weight": 3}
            ).addTo(map_6e83cbd798c966a931e947ef49eedbcb);
        
    
        var popup_3632cb37936a51c2f443c335cc854a1c = L.popup({"maxWidth": "100%"});

        
            
                var html_edf52eba53abe2c092614de72a3c2a7b = $(`<div id="html_edf52eba53abe2c092614de72a3c2a7b" style="width: 100.0%; height: 100.0%;">nota&nbsp;3</div>`)[0];
                popup_3632cb37936a51c2f443c335cc854a1c.setContent(html_edf52eba53abe2c092614de72a3c2a7b);
            
        

        circle_29f020e5578f96f0d053792740448d20.bindPopup(popup_3632cb37936a51c2f443c335cc854a1c)
        ;



        //Jardim Iririu
        var circle_29f020e5578f96f0d053792740448d20 = L.circle(
                [-26.263659, -48.807010],
                {"bubblingMouseEvents": true, "color": "#E98100", "dashArray": null, "dashOffset": null, "fill": true, "fillColor": "#E98100", "fillOpacity": 0.2, "fillRule": "evenodd", "lineCap": "round", "lineJoin": "round", "opacity": 1.0, "radius": 1200, "stroke": true, "weight": 3}
            ).addTo(map_6e83cbd798c966a931e947ef49eedbcb);
        
    
        var popup_3632cb37936a51c2f443c335cc854a1c = L.popup({"maxWidth": "100%"});

        
            
                var html_edf52eba53abe2c092614de72a3c2a7b = $(`<div id="html_edf52eba53abe2c092614de72a3c2a7b" style="width: 100.0%; height: 100.0%;">nota&nbsp;3</div>`)[0];
                popup_3632cb37936a51c2f443c335cc854a1c.setContent(html_edf52eba53abe2c092614de72a3c2a7b);
            
        

        circle_29f020e5578f96f0d053792740448d20.bindPopup(popup_3632cb37936a51c2f443c335cc854a1c)
        ;



        //Paranaguamirim
        var circle_29f020e5578f96f0d053792740448d20 = L.circle(
                [-26.347808, -48.779518],
                {"bubblingMouseEvents": true, "color": "#F79D1A", "dashArray": null, "dashOffset": null, "fill": true, "fillColor": "#F79D1A", "fillOpacity": 0.2, "fillRule": "evenodd", "lineCap": "round", "lineJoin": "round", "opacity": 1.0, "radius": 1300, "stroke": true, "weight": 3}
            ).addTo(map_6e83cbd798c966a931e947ef49eedbcb);
        
    
        var popup_3632cb37936a51c2f443c335cc854a1c = L.popup({"maxWidth": "100%"});

        
            
                var html_edf52eba53abe2c092614de72a3c2a7b = $(`<div id="html_edf52eba53abe2c092614de72a3c2a7b" style="width: 100.0%; height: 100.0%;">nota&nbsp;4</div>`)[0];
                popup_3632cb37936a51c2f443c335cc854a1c.setContent(html_edf52eba53abe2c092614de72a3c2a7b);
            
        

        circle_29f020e5578f96f0d053792740448d20.bindPopup(popup_3632cb37936a51c2f443c335cc854a1c)
        ;



        //Espinheiros
        var circle_29f020e5578f96f0d053792740448d20 = L.circle(
                [-26.283535, -48.779739],
                {"bubblingMouseEvents": true, "color": "#F8CF29", "dashArray": null, "dashOffset": null, "fill": true, "fillColor": "#F8CF29", "fillOpacity": 0.2, "fillRule": "evenodd", "lineCap": "round", "lineJoin": "round", "opacity": 1.0, "radius": 1000, "stroke": true, "weight": 3}
            ).addTo(map_6e83cbd798c966a931e947ef49eedbcb);
        
    
        var popup_3632cb37936a51c2f443c335cc854a1c = L.popup({"maxWidth": "100%"});

        
            
                var html_edf52eba53abe2c092614de72a3c2a7b = $(`<div id="html_edf52eba53abe2c092614de72a3c2a7b" style="width: 100.0%; height: 100.0%;">nota&nbsp;5</div>`)[0];
                popup_3632cb37936a51c2f443c335cc854a1c.setContent(html_edf52eba53abe2c092614de72a3c2a7b);
            
        

        circle_29f020e5578f96f0d053792740448d20.bindPopup(popup_3632cb37936a51c2f443c335cc854a1c)
        ;


        //comasa
        var circle_29f020e5578f96f0d053792740448d20 = L.circle(
                [-26.279808, -48.801613],
                {"bubblingMouseEvents": true, "color": "#F8CF29", "#F8CF29": null, "dashOffset": null, "fill": true, "fillColor": "#F8CF29", "fillOpacity": 0.2, "fillRule": "evenodd", "lineCap": "round", "lineJoin": "round", "opacity": 1.0, "radius": 600, "stroke": true, "weight": 3}
            ).addTo(map_6e83cbd798c966a931e947ef49eedbcb);
        
    
        var popup_3632cb37936a51c2f443c335cc854a1c = L.popup({"maxWidth": "100%"});

        
            
                var html_edf52eba53abe2c092614de72a3c2a7b = $(`<div id="html_edf52eba53abe2c092614de72a3c2a7b" style="width: 100.0%; height: 100.0%;">nota&nbsp;5</div>`)[0];
                popup_3632cb37936a51c2f443c335cc854a1c.setContent(html_edf52eba53abe2c092614de72a3c2a7b);
            
        

        circle_29f020e5578f96f0d053792740448d20.bindPopup(popup_3632cb37936a51c2f443c335cc854a1c)
        ;



        //América
        var circle_29f020e5578f96f0d053792740448d20 = L.circle(
                [-26.290569, -48.853684],
                {"bubblingMouseEvents": true, "color": "#0E8940", "dashArray": null, "dashOffset": null, "fill": true, "fillColor": "#0E8940", "fillOpacity": 0.2, "fillRule": "evenodd", "lineCap": "round", "lineJoin": "round", "opacity": 1.0, "radius": 750, "stroke": true, "weight": 3}
            ).addTo(map_6e83cbd798c966a931e947ef49eedbcb);
        
    
        var popup_3632cb37936a51c2f443c335cc854a1c = L.popup({"maxWidth": "100%"});

        
            
                var html_edf52eba53abe2c092614de72a3c2a7b = $(`<div id="html_edf52eba53abe2c092614de72a3c2a7b" style="width: 100.0%; height: 100.0%;">nota&nbsp;10</div>`)[0];
                popup_3632cb37936a51c2f443c335cc854a1c.setContent(html_edf52eba53abe2c092614de72a3c2a7b);
            
        

        circle_29f020e5578f96f0d053792740448d20.bindPopup(popup_3632cb37936a51c2f443c335cc854a1c)
        ;



        //Nova Brasilia
        var circle_29f020e5578f96f0d053792740448d20 = L.circle(
                [-26.340759, -48.870900],
                {"bubblingMouseEvents": true, "color": "#89CB23", "dashArray": null, "dashOffset": null, "fill": true, "fillColor": "#89CB23", "fillOpacity": 0.2, "fillRule": "evenodd", "lineCap": "round", "lineJoin": "round", "opacity": 1.0, "radius": 1300, "stroke": true, "weight": 3}
            ).addTo(map_6e83cbd798c966a931e947ef49eedbcb);
        
    
        var popup_3632cb37936a51c2f443c335cc854a1c = L.popup({"maxWidth": "100%"});

        
            
                var html_edf52eba53abe2c092614de72a3c2a7b = $(`<div id="html_edf52eba53abe2c092614de72a3c2a7b" style="width: 100.0%; height: 100.0%;">nota&nbsp;7</div>`)[0];
                popup_3632cb37936a51c2f443c335cc854a1c.setContent(html_edf52eba53abe2c092614de72a3c2a7b);
            
        

        circle_29f020e5578f96f0d053792740448d20.bindPopup(popup_3632cb37936a51c2f443c335cc854a1c)
        ;
        

        //Floresta
        var circle_29f020e5578f96f0d053792740448d20 = L.circle(
                [-26.334680, -48.849696],
                {"bubblingMouseEvents": true, "color": "#89CB23", "dashArray": null, "dashOffset": null, "fill": true, "fillColor": "#89CB23", "fillOpacity": 0.2, "fillRule": "evenodd", "lineCap": "round", "lineJoin": "round", "opacity": 1.0, "radius": 800, "stroke": true, "weight": 3}
            ).addTo(map_6e83cbd798c966a931e947ef49eedbcb);
        
    
        var popup_3632cb37936a51c2f443c335cc854a1c = L.popup({"maxWidth": "100%"});

        
            
                var html_edf52eba53abe2c092614de72a3c2a7b = $(`<div id="html_edf52eba53abe2c092614de72a3c2a7b" style="width: 100.0%; height: 100.0%;">Nota&nbsp;7</div>`)[0];
                popup_3632cb37936a51c2f443c335cc854a1c.setContent(html_edf52eba53abe2c092614de72a3c2a7b);
            
        

        circle_29f020e5578f96f0d053792740448d20.bindPopup(popup_3632cb37936a51c2f443c335cc854a1c)
        ;


        //Itaum
        var circle_29f020e5578f96f0d053792740448d20 = L.circle(
                [-26.333383, -48.829817],
                {"bubblingMouseEvents": true, "color": "#A4CC1F", "dashArray": null, "dashOffset": null, "fill": true, "fillColor": "#A4CC1F", "fillOpacity": 0.2, "fillRule": "evenodd", "lineCap": "round", "lineJoin": "round", "opacity": 1.0, "radius": 700, "stroke": true, "weight": 3}
            ).addTo(map_6e83cbd798c966a931e947ef49eedbcb);
        
    
        var popup_3632cb37936a51c2f443c335cc854a1c = L.popup({"maxWidth": "100%"});

        
            
                var html_edf52eba53abe2c092614de72a3c2a7b = $(`<div id="html_edf52eba53abe2c092614de72a3c2a7b" style="width: 100.0%; height: 100.0%;">Nota&nbsp;6</div>`)[0];
                popup_3632cb37936a51c2f443c335cc854a1c.setContent(html_edf52eba53abe2c092614de72a3c2a7b);
            
        

        circle_29f020e5578f96f0d053792740448d20.bindPopup(popup_3632cb37936a51c2f443c335cc854a1c)
        ;



        //petropoles
        var circle_29f020e5578f96f0d053792740448d20 = L.circle(
                [-26.348983, -48.830657],
                {"bubblingMouseEvents": true, "color": "#F8CF29", "dashArray": null, "dashOffset": null, "fill": true, "fillColor": "#F8CF29", "fillOpacity": 0.2, "fillRule": "evenodd", "lineCap": "round", "lineJoin": "round", "opacity": 1.0, "radius": 700, "stroke": true, "weight": 3}
            ).addTo(map_6e83cbd798c966a931e947ef49eedbcb);
        
    
        var popup_3632cb37936a51c2f443c335cc854a1c = L.popup({"maxWidth": "100%"});

        
            
                var html_edf52eba53abe2c092614de72a3c2a7b = $(`<div id="html_edf52eba53abe2c092614de72a3c2a7b" style="width: 100.0%; height: 100.0%;">Nota&nbsp;5</div>`)[0];
                popup_3632cb37936a51c2f443c335cc854a1c.setContent(html_edf52eba53abe2c092614de72a3c2a7b);
            
        

        circle_29f020e5578f96f0d053792740448d20.bindPopup(popup_3632cb37936a51c2f443c335cc854a1c)
        ;


        //itinga
        var circle_29f020e5578f96f0d053792740448d20 = L.circle(
                [-26.411333, -48.795449],
                {"bubblingMouseEvents": true, "color": "#F8CF29", "dashArray": null, "dashOffset": null, "fill": true, "fillColor": "#F8CF29", "fillOpacity": 0.2, "fillRule": "evenodd", "lineCap": "round", "lineJoin": "round", "opacity": 1.0, "radius": 1800, "stroke": true, "weight": 3}
            ).addTo(map_6e83cbd798c966a931e947ef49eedbcb);
        
    
        var popup_3632cb37936a51c2f443c335cc854a1c = L.popup({"maxWidth": "100%"});

        
            
                var html_edf52eba53abe2c092614de72a3c2a7b = $(`<div id="html_edf52eba53abe2c092614de72a3c2a7b" style="width: 100.0%; height: 100.0%;">Nota&nbsp;5</div>`)[0];
                popup_3632cb37936a51c2f443c335cc854a1c.setContent(html_edf52eba53abe2c092614de72a3c2a7b);
            
        

        circle_29f020e5578f96f0d053792740448d20.bindPopup(popup_3632cb37936a51c2f443c335cc854a1c)
        ;


        //itinga2
        var circle_29f020e5578f96f0d053792740448d20 = L.circle(
                [-26.382917, -48.825690],
                {"bubblingMouseEvents": true, "color": "#F8CF29", "dashArray": null, "dashOffset": null, "fill": true, "fillColor": "#F8CF29", "fillOpacity": 0.2, "fillRule": "evenodd", "lineCap": "round", "lineJoin": "round", "opacity": 1.0, "radius": 1200, "stroke": true, "weight": 3}
            ).addTo(map_6e83cbd798c966a931e947ef49eedbcb);
        
    
        var popup_3632cb37936a51c2f443c335cc854a1c = L.popup({"maxWidth": "100%"});

        
            
                var html_edf52eba53abe2c092614de72a3c2a7b = $(`<div id="html_edf52eba53abe2c092614de72a3c2a7b" style="width: 100.0%; height: 100.0%;">Nota&nbsp;5</div>`)[0];
                popup_3632cb37936a51c2f443c335cc854a1c.setContent(html_edf52eba53abe2c092614de72a3c2a7b);
            
        

        circle_29f020e5578f96f0d053792740448d20.bindPopup(popup_3632cb37936a51c2f443c335cc854a1c)
        ;


        //profipo
        var circle_29f020e5578f96f0d053792740448d20 = L.circle(
                [-26.368960, -48.839359],
                {"bubblingMouseEvents": true, "color": "#F79D1A", "dashArray": null, "dashOffset": null, "fill": true, "fillColor": "#F79D1A", "fillOpacity": 0.2, "fillRule": "evenodd", "lineCap": "round", "lineJoin": "round", "opacity": 1.0, "radius": 600, "stroke": true, "weight": 3}
            ).addTo(map_6e83cbd798c966a931e947ef49eedbcb);
        
    
        var popup_3632cb37936a51c2f443c335cc854a1c = L.popup({"maxWidth": "100%"});

        
            
                var html_edf52eba53abe2c092614de72a3c2a7b = $(`<div id="html_edf52eba53abe2c092614de72a3c2a7b" style="width: 100.0%; height: 100.0%;">Nota&nbsp;3.5</div>`)[0];
                popup_3632cb37936a51c2f443c335cc854a1c.setContent(html_edf52eba53abe2c092614de72a3c2a7b);
            
        

        circle_29f020e5578f96f0d053792740448d20.bindPopup(popup_3632cb37936a51c2f443c335cc854a1c)
        ;


        
        //Santa Catarina
        var circle_29f020e5578f96f0d053792740448d20 = L.circle(
                [-26.365724, -48.852571],
                {"bubblingMouseEvents": true, "color": "#60B31E", "dashArray": null, "dashOffset": null, "fill": true, "fillColor": "#60B31E", "fillOpacity": 0.2, "fillRule": "evenodd", "lineCap": "round", "lineJoin": "round", "opacity": 1.0, "radius": 600, "stroke": true, "weight": 3}
            ).addTo(map_6e83cbd798c966a931e947ef49eedbcb);
        
    
        var popup_3632cb37936a51c2f443c335cc854a1c = L.popup({"maxWidth": "100%"});

        
            
                var html_edf52eba53abe2c092614de72a3c2a7b = $(`<div id="html_edf52eba53abe2c092614de72a3c2a7b" style="width: 100.0%; height: 100.0%;">Nota&nbsp;8</div>`)[0];
                popup_3632cb37936a51c2f443c335cc854a1c.setContent(html_edf52eba53abe2c092614de72a3c2a7b);
            
        

        circle_29f020e5578f96f0d053792740448d20.bindPopup(popup_3632cb37936a51c2f443c335cc854a1c)
        ;


        //Boehmerwald
        var circle_29f020e5578f96f0d053792740448d20 = L.circle(
                [-26.363228, -48.829078],
                {"bubblingMouseEvents": true, "color": "#89CB23", "dashArray": null, "dashOffset": null, "fill": true, "fillColor": "#89CB23", "fillOpacity": 0.2, "fillRule": "evenodd", "lineCap": "round", "lineJoin": "round", "opacity": 1.0, "radius": 500, "stroke": true, "weight": 3}
            ).addTo(map_6e83cbd798c966a931e947ef49eedbcb);
        
    
        var popup_3632cb37936a51c2f443c335cc854a1c = L.popup({"maxWidth": "100%"});

        
            
                var html_edf52eba53abe2c092614de72a3c2a7b = $(`<div id="html_edf52eba53abe2c092614de72a3c2a7b" style="width: 100.0%; height: 100.0%;">Nota&nbsp;7</div>`)[0];
                popup_3632cb37936a51c2f443c335cc854a1c.setContent(html_edf52eba53abe2c092614de72a3c2a7b);
            
        

        circle_29f020e5578f96f0d053792740448d20.bindPopup(popup_3632cb37936a51c2f443c335cc854a1c)
        ;


        //Parque Guarani
        var circle_29f020e5578f96f0d053792740448d20 = L.circle(
                [-26.361230, -48.807233],
                {"bubblingMouseEvents": true, "color": "#89CB23", "dashArray": null, "dashOffset": null, "fill": true, "fillColor": "#89CB23", "fillOpacity": 0.2, "fillRule": "evenodd", "lineCap": "round", "lineJoin": "round", "opacity": 1.0, "radius": 900, "stroke": true, "weight": 3}
            ).addTo(map_6e83cbd798c966a931e947ef49eedbcb);
        
    
        var popup_3632cb37936a51c2f443c335cc854a1c = L.popup({"maxWidth": "100%"});

        
            
                var html_edf52eba53abe2c092614de72a3c2a7b = $(`<div id="html_edf52eba53abe2c092614de72a3c2a7b" style="width: 100.0%; height: 100.0%;">Nota&nbsp;7</div>`)[0];
                popup_3632cb37936a51c2f443c335cc854a1c.setContent(html_edf52eba53abe2c092614de72a3c2a7b);
            
        

        circle_29f020e5578f96f0d053792740448d20.bindPopup(popup_3632cb37936a51c2f443c335cc854a1c)
        ;


        //Jarivatuba
        var circle_29f020e5578f96f0d053792740448d20 = L.circle(
                [-26.332792, -48.805232],
                {"bubblingMouseEvents": true, "color": "#F8CF29", "dashArray": null, "dashOffset": null, "fill": true, "fillColor": "#F8CF29", "fillOpacity": 0.2, "fillRule": "evenodd", "lineCap": "round", "lineJoin": "round", "opacity": 1.0, "radius": 500, "stroke": true, "weight": 3}
            ).addTo(map_6e83cbd798c966a931e947ef49eedbcb);
        
    
        var popup_3632cb37936a51c2f443c335cc854a1c = L.popup({"maxWidth": "100%"});

        
            
                var html_edf52eba53abe2c092614de72a3c2a7b = $(`<div id="html_edf52eba53abe2c092614de72a3c2a7b" style="width: 100.0%; height: 100.0%;">Nota&nbsp;5</div>`)[0];
                popup_3632cb37936a51c2f443c335cc854a1c.setContent(html_edf52eba53abe2c092614de72a3c2a7b);
            
        

        circle_29f020e5578f96f0d053792740448d20.bindPopup(popup_3632cb37936a51c2f443c335cc854a1c)
        ;


        //Ulices Guimarães
        var circle_29f020e5578f96f0d053792740448d20 = L.circle(
                [-26.326377, -48.791790],
                {"bubblingMouseEvents": true, "color": "#A4CC1F", "dashArray": null, "dashOffset": null, "fill": true, "fillColor": "#A4CC1F", "fillOpacity": 0.2, "fillRule": "evenodd", "lineCap": "round", "lineJoin": "round", "opacity": 1.0, "radius": 500, "stroke": true, "weight": 3}
            ).addTo(map_6e83cbd798c966a931e947ef49eedbcb);
        
    
        var popup_3632cb37936a51c2f443c335cc854a1c = L.popup({"maxWidth": "100%"});

        
            
                var html_edf52eba53abe2c092614de72a3c2a7b = $(`<div id="html_edf52eba53abe2c092614de72a3c2a7b" style="width: 100.0%; height: 100.0%;">Nota&nbsp;6</div>`)[0];
                popup_3632cb37936a51c2f443c335cc854a1c.setContent(html_edf52eba53abe2c092614de72a3c2a7b);
            
        

        circle_29f020e5578f96f0d053792740448d20.bindPopup(popup_3632cb37936a51c2f443c335cc854a1c)
        ;



        //Ademar Garcia
        var circle_29f020e5578f96f0d053792740448d20 = L.circle(
                [-26.321767, -48.801658],
                {"bubblingMouseEvents": true, "color": "#60B31E", "dashArray": null, "dashOffset": null, "fill": true, "fillColor": "#60B31E", "fillOpacity": 0.2, "fillRule": "evenodd", "lineCap": "round", "lineJoin": "round", "opacity": 1.0, "radius": 500, "stroke": true, "weight": 3}
            ).addTo(map_6e83cbd798c966a931e947ef49eedbcb);
        
    
        var popup_3632cb37936a51c2f443c335cc854a1c = L.popup({"maxWidth": "100%"});

        
            
                var html_edf52eba53abe2c092614de72a3c2a7b = $(`<div id="html_edf52eba53abe2c092614de72a3c2a7b" style="width: 100.0%; height: 100.0%;">Nota&nbsp;8</div>`)[0];
                popup_3632cb37936a51c2f443c335cc854a1c.setContent(html_edf52eba53abe2c092614de72a3c2a7b);
            
        

        circle_29f020e5578f96f0d053792740448d20.bindPopup(popup_3632cb37936a51c2f443c335cc854a1c)
        ;


        //Fatima
        var circle_29f020e5578f96f0d053792740448d20 = L.circle(
                [-26.324206, -48.815570],
                {"bubblingMouseEvents": true, "color": "#60B31E", "dashArray": null, "dashOffset": null, "fill": true, "fillColor": "#60B31E", "fillOpacity": 0.2, "fillRule": "evenodd", "lineCap": "round", "lineJoin": "round", "opacity": 1.0, "radius": 600, "stroke": true, "weight": 3}
            ).addTo(map_6e83cbd798c966a931e947ef49eedbcb);
        
    
        var popup_3632cb37936a51c2f443c335cc854a1c = L.popup({"maxWidth": "100%"});

        
            
                var html_edf52eba53abe2c092614de72a3c2a7b = $(`<div id="html_edf52eba53abe2c092614de72a3c2a7b" style="width: 100.0%; height: 100.0%;">Nota&nbsp;8</div>`)[0];
                popup_3632cb37936a51c2f443c335cc854a1c.setContent(html_edf52eba53abe2c092614de72a3c2a7b);
            
        

        circle_29f020e5578f96f0d053792740448d20.bindPopup(popup_3632cb37936a51c2f443c335cc854a1c)
        ;


        //Guanabara
        var circle_29f020e5578f96f0d053792740448d20 = L.circle(
                [-26.322200, -48.828861],
                {"bubblingMouseEvents": true, "color": "#A4CC1F", "dashArray": null, "dashOffset": null, "fill": true, "fillColor": "#A4CC1F", "fillOpacity": 0.2, "fillRule": "evenodd", "lineCap": "round", "lineJoin": "round", "opacity": 1.0, "radius": 500, "stroke": true, "weight": 3}
            ).addTo(map_6e83cbd798c966a931e947ef49eedbcb);
        
    
        var popup_3632cb37936a51c2f443c335cc854a1c = L.popup({"maxWidth": "100%"});

        
            
                var html_edf52eba53abe2c092614de72a3c2a7b = $(`<div id="html_edf52eba53abe2c092614de72a3c2a7b" style="width: 100.0%; height: 100.0%;">Nota&nbsp;6</div>`)[0];
                popup_3632cb37936a51c2f443c335cc854a1c.setContent(html_edf52eba53abe2c092614de72a3c2a7b);
            
        

        circle_29f020e5578f96f0d053792740448d20.bindPopup(popup_3632cb37936a51c2f443c335cc854a1c)
        ;


        //Bucarein
        var circle_29f020e5578f96f0d053792740448d20 = L.circle(
                [-26.314671, -48.838401],
                {"bubblingMouseEvents": true, "color": "#229A2F", "dashArray": null, "dashOffset": null, "fill": true, "fillColor": "#229A2F", "fillOpacity": 0.2, "fillRule": "evenodd", "lineCap": "round", "lineJoin": "round", "opacity": 1.0, "radius": 600, "stroke": true, "weight": 3}
            ).addTo(map_6e83cbd798c966a931e947ef49eedbcb);
        
    
        var popup_3632cb37936a51c2f443c335cc854a1c = L.popup({"maxWidth": "100%"});

        
            
                var html_edf52eba53abe2c092614de72a3c2a7b = $(`<div id="html_edf52eba53abe2c092614de72a3c2a7b" style="width: 100.0%; height: 100.0%;">Nota&nbsp;9</div>`)[0];
                popup_3632cb37936a51c2f443c335cc854a1c.setContent(html_edf52eba53abe2c092614de72a3c2a7b);
            
        

        circle_29f020e5578f96f0d053792740448d20.bindPopup(popup_3632cb37936a51c2f443c335cc854a1c)
        ;



        //Atiradores
        var circle_29f020e5578f96f0d053792740448d20 = L.circle(
                [-26.310390, -48.863236],
                {"bubblingMouseEvents": true, "color": "#0E8940", "dashArray": null, "dashOffset": null, "fill": true, "fillColor": "#0E8940", "fillOpacity": 0.2, "fillRule": "evenodd", "lineCap": "round", "lineJoin": "round", "opacity": 1.0, "radius": 500, "stroke": true, "weight": 3}
            ).addTo(map_6e83cbd798c966a931e947ef49eedbcb);
        
    
        var popup_3632cb37936a51c2f443c335cc854a1c = L.popup({"maxWidth": "100%"});

        
            
                var html_edf52eba53abe2c092614de72a3c2a7b = $(`<div id="html_edf52eba53abe2c092614de72a3c2a7b" style="width: 100.0%; height: 100.0%;">Nota&nbsp;10</div>`)[0];
                popup_3632cb37936a51c2f443c335cc854a1c.setContent(html_edf52eba53abe2c092614de72a3c2a7b);
            
        

        circle_29f020e5578f96f0d053792740448d20.bindPopup(popup_3632cb37936a51c2f443c335cc854a1c)
        ;


        //João Costa
        var circle_29f020e5578f96f0d053792740448d20 = L.circle(
                [-26.347128, -48.809703],
                {"bubblingMouseEvents": true, "color": "#89CB23", "dashArray": null, "dashOffset": null, "fill": true, "fillColor": "#89CB23", "fillOpacity": 0.2, "fillRule": "evenodd", "lineCap": "round", "lineJoin": "round", "opacity": 1.0, "radius": 550, "stroke": true, "weight": 3}
            ).addTo(map_6e83cbd798c966a931e947ef49eedbcb);
        
    
        var popup_3632cb37936a51c2f443c335cc854a1c = L.popup({"maxWidth": "100%"});

        
            
                var html_edf52eba53abe2c092614de72a3c2a7b = $(`<div id="html_edf52eba53abe2c092614de72a3c2a7b" style="width: 100.0%; height: 100.0%;">Nota&nbsp;7</div>`)[0];
                popup_3632cb37936a51c2f443c335cc854a1c.setContent(html_edf52eba53abe2c092614de72a3c2a7b);
            
        

        circle_29f020e5578f96f0d053792740448d20.bindPopup(popup_3632cb37936a51c2f443c335cc854a1c)
        ;


        //São Marcos
        var circle_29f020e5578f96f0d053792740448d20 = L.circle(
                [-26.313239, -48.883414],
                {"bubblingMouseEvents": true, "color": "#0E8940", "dashArray": null, "dashOffset": null, "fill": true, "fillColor": "#0E8940", "fillOpacity": 0.2, "fillRule": "evenodd", "lineCap": "round", "lineJoin": "round", "opacity": 1.0, "radius": 700, "stroke": true, "weight": 3}
            ).addTo(map_6e83cbd798c966a931e947ef49eedbcb);
        
    
        var popup_3632cb37936a51c2f443c335cc854a1c = L.popup({"maxWidth": "100%"});

        
            
                var html_edf52eba53abe2c092614de72a3c2a7b = $(`<div id="html_edf52eba53abe2c092614de72a3c2a7b" style="width: 100.0%; height: 100.0%;">Nota&nbsp;10</div>`)[0];
                popup_3632cb37936a51c2f443c335cc854a1c.setContent(html_edf52eba53abe2c092614de72a3c2a7b);
            
        

        circle_29f020e5578f96f0d053792740448d20.bindPopup(popup_3632cb37936a51c2f443c335cc854a1c)
        ;


        //Glória
        var circle_29f020e5578f96f0d053792740448d20 = L.circle(
                [-26.295940, -48.873812],
                {"bubblingMouseEvents": true, "color": "#229A2F", "dashArray": null, "dashOffset": null, "fill": true, "fillColor": "#229A2F", "fillOpacity": 0.2, "fillRule": "evenodd", "lineCap": "round", "lineJoin": "round", "opacity": 1.0, "radius": 1100, "stroke": true, "weight": 3}
            ).addTo(map_6e83cbd798c966a931e947ef49eedbcb);
        
    
        var popup_3632cb37936a51c2f443c335cc854a1c = L.popup({"maxWidth": "100%"});

        
            
                var html_edf52eba53abe2c092614de72a3c2a7b = $(`<div id="html_edf52eba53abe2c092614de72a3c2a7b" style="width: 100.0%; height: 100.0%;">Nota&nbsp;9</div>`)[0];
                popup_3632cb37936a51c2f443c335cc854a1c.setContent(html_edf52eba53abe2c092614de72a3c2a7b);
            
        

        circle_29f020e5578f96f0d053792740448d20.bindPopup(popup_3632cb37936a51c2f443c335cc854a1c)
        ;



        //Anita Garibaldi
        var circle_29f020e5578f96f0d053792740448d20 = L.circle(
                [-26.318647, -48.856181],
                {"bubblingMouseEvents": true, "color": "#0E8940", "dashArray": null, "dashOffset": null, "fill": true, "fillColor": "#0E8940", "fillOpacity": 0.2, "fillRule": "evenodd", "lineCap": "round", "lineJoin": "round", "opacity": 1.0, "radius": 600, "stroke": true, "weight": 3}
            ).addTo(map_6e83cbd798c966a931e947ef49eedbcb);
        
    
        var popup_3632cb37936a51c2f443c335cc854a1c = L.popup({"maxWidth": "100%"});

        
            
                var html_edf52eba53abe2c092614de72a3c2a7b = $(`<div id="html_edf52eba53abe2c092614de72a3c2a7b" style="width: 100.0%; height: 100.0%;">Nota&nbsp;10</div>`)[0];
                popup_3632cb37936a51c2f443c335cc854a1c.setContent(html_edf52eba53abe2c092614de72a3c2a7b);
            
        

        circle_29f020e5578f96f0d053792740448d20.bindPopup(popup_3632cb37936a51c2f443c335cc854a1c)
        ;
    
        //Saguaçu
        var circle_29f020e5578f96f0d053792740448d20 = L.circle(
                [-26.286035, -48.838580],
                {"bubblingMouseEvents": true, "color": "#229A2F", "dashArray": null, "dashOffset": null, "fill": true, "fillColor": "#229A2F", "fillOpacity": 0.2, "fillRule": "evenodd", "lineCap": "round", "lineJoin": "round", "opacity": 1.0, "radius": 600, "stroke": true, "weight": 3}
            ).addTo(map_6e83cbd798c966a931e947ef49eedbcb);
        
    
        var popup_3632cb37936a51c2f443c335cc854a1c = L.popup({"maxWidth": "100%"});

        
            
                var html_edf52eba53abe2c092614de72a3c2a7b = $(`<div id="html_edf52eba53abe2c092614de72a3c2a7b" style="width: 100.0%; height: 100.0%;">Nota&nbsp;9</div>`)[0];
                popup_3632cb37936a51c2f443c335cc854a1c.setContent(html_edf52eba53abe2c092614de72a3c2a7b);
            
        

        circle_29f020e5578f96f0d053792740448d20.bindPopup(popup_3632cb37936a51c2f443c335cc854a1c)
        ;
    


        //Iririu
        var circle_29f020e5578f96f0d053792740448d20 = L.circle(
                [-26.275244, -48.823764],
                {"bubblingMouseEvents": true, "color": "#A4CC1F", "dashArray": null, "dashOffset": null, "fill": true, "fillColor": "#A4CC1F", "fillOpacity": 0.2, "fillRule": "evenodd", "lineCap": "round", "lineJoin": "round", "opacity": 1.0, "radius": 700, "stroke": true, "weight": 3}
            ).addTo(map_6e83cbd798c966a931e947ef49eedbcb);
        
    
        var popup_3632cb37936a51c2f443c335cc854a1c = L.popup({"maxWidth": "100%"});

        
            
                var html_edf52eba53abe2c092614de72a3c2a7b = $(`<div id="html_edf52eba53abe2c092614de72a3c2a7b" style="width: 100.0%; height: 100.0%;">Nota&nbsp;6</div>`)[0];
                popup_3632cb37936a51c2f443c335cc854a1c.setContent(html_edf52eba53abe2c092614de72a3c2a7b);
            
        

        circle_29f020e5578f96f0d053792740448d20.bindPopup(popup_3632cb37936a51c2f443c335cc854a1c)
        ;
    


                //Bom Retiro
                var circle_29f020e5578f96f0d053792740448d20 = L.circle(
                [-26.261029, -48.841887],
                {"bubblingMouseEvents": true, "color": "#60B31E", "dashArray": null, "dashOffset": null, "fill": true, "fillColor": "#60B31E", "fillOpacity": 0.2, "fillRule": "evenodd", "lineCap": "round", "lineJoin": "round", "opacity": 1.0, "radius": 800, "stroke": true, "weight": 3}
            ).addTo(map_6e83cbd798c966a931e947ef49eedbcb);
        
    
        var popup_3632cb37936a51c2f443c335cc854a1c = L.popup({"maxWidth": "100%"});

        
            
                var html_edf52eba53abe2c092614de72a3c2a7b = $(`<div id="html_edf52eba53abe2c092614de72a3c2a7b" style="width: 100.0%; height: 100.0%;">Nota&nbsp;8</div>`)[0];
                popup_3632cb37936a51c2f443c335cc854a1c.setContent(html_edf52eba53abe2c092614de72a3c2a7b);
            
        

        circle_29f020e5578f96f0d053792740448d20.bindPopup(popup_3632cb37936a51c2f443c335cc854a1c)
        ;

        //Santo Antonio
        var circle_29f020e5578f96f0d053792740448d20 = L.circle(
                [-26.269380, -48.856355],
                {"bubblingMouseEvents": true, "color": "#60B31E", "dashArray": null, "dashOffset": null, "fill": true, "fillColor": "#60B31E", "fillOpacity": 0.2, "fillRule": "evenodd", "lineCap": "round", "lineJoin": "round", "opacity": 1.0, "radius": 800, "stroke": true, "weight": 3}
            ).addTo(map_6e83cbd798c966a931e947ef49eedbcb);
        
    
        var popup_3632cb37936a51c2f443c335cc854a1c = L.popup({"maxWidth": "100%"});

        
            
                var html_edf52eba53abe2c092614de72a3c2a7b = $(`<div id="html_edf52eba53abe2c092614de72a3c2a7b" style="width: 100.0%; height: 100.0%;">Nota&nbsp;8</div>`)[0];
                popup_3632cb37936a51c2f443c335cc854a1c.setContent(html_edf52eba53abe2c092614de72a3c2a7b);
            
        

        circle_29f020e5578f96f0d053792740448d20.bindPopup(popup_3632cb37936a51c2f443c335cc854a1c)
        ;

        //Costa e Silva
        var circle_29f020e5578f96f0d053792740448d20 = L.circle(
                [-26.274604, -48.879998],
                {"bubblingMouseEvents": true, "color": "#60B31E", "dashArray": null, "dashOffset": null, "fill": true, "fillColor": "#60B31E", "fillOpacity": 0.2, "fillRule": "evenodd", "lineCap": "round", "lineJoin": "round", "opacity": 1.0, "radius": 1100, "stroke": true, "weight": 3}
            ).addTo(map_6e83cbd798c966a931e947ef49eedbcb);
        
    
        var popup_3632cb37936a51c2f443c335cc854a1c = L.popup({"maxWidth": "100%"});

        
            
                var html_edf52eba53abe2c092614de72a3c2a7b = $(`<div id="html_edf52eba53abe2c092614de72a3c2a7b" style="width: 100.0%; height: 100.0%;">Nota&nbsp;8</div>`)[0];
                popup_3632cb37936a51c2f443c335cc854a1c.setContent(html_edf52eba53abe2c092614de72a3c2a7b);
            
        

        circle_29f020e5578f96f0d053792740448d20.bindPopup(popup_3632cb37936a51c2f443c335cc854a1c)
        ;



        //Vila Nova
        var circle_29f020e5578f96f0d053792740448d20 = L.circle(
                [-26.284553, -48.905632],
                {"bubblingMouseEvents": true, "color": "#A4CC1F", "dashArray": null, "dashOffset": null, "fill": true, "fillColor": "#A4CC1F", "fillOpacity": 0.2, "fillRule": "evenodd", "lineCap": "round", "lineJoin": "round", "opacity": 1.0, "radius": 1400, "stroke": true, "weight": 3}
            ).addTo(map_6e83cbd798c966a931e947ef49eedbcb);
        
    
        var popup_3632cb37936a51c2f443c335cc854a1c = L.popup({"maxWidth": "100%"});

        
            
                var html_edf52eba53abe2c092614de72a3c2a7b = $(`<div id="html_edf52eba53abe2c092614de72a3c2a7b" style="width: 100.0%; height: 100.0%;">Nota&nbsp;6</div>`)[0];
                popup_3632cb37936a51c2f443c335cc854a1c.setContent(html_edf52eba53abe2c092614de72a3c2a7b);
            
        

        circle_29f020e5578f96f0d053792740448d20.bindPopup(popup_3632cb37936a51c2f443c335cc854a1c)
        ;



        //Jardim Sofia
        var circle_29f020e5578f96f0d053792740448d20 = L.circle(
                [-26.238651, -48.840941],
                {"bubblingMouseEvents": true, "color": "#89CB23", "dashArray": null, "dashOffset": null, "fill": true, "fillColor": "#89CB23", "fillOpacity": 0.2, "fillRule": "evenodd", "lineCap": "round", "lineJoin": "round", "opacity": 1.0, "radius": 1000, "stroke": true, "weight": 3}
            ).addTo(map_6e83cbd798c966a931e947ef49eedbcb);
        
    
        var popup_3632cb37936a51c2f443c335cc854a1c = L.popup({"maxWidth": "100%"});

        
            
                var html_edf52eba53abe2c092614de72a3c2a7b = $(`<div id="html_edf52eba53abe2c092614de72a3c2a7b" style="width: 100.0%; height: 100.0%;">Nota&nbsp;7</div>`)[0];
                popup_3632cb37936a51c2f443c335cc854a1c.setContent(html_edf52eba53abe2c092614de72a3c2a7b);
            
        

        circle_29f020e5578f96f0d053792740448d20.bindPopup(popup_3632cb37936a51c2f443c335cc854a1c)
        ;



        //Pirabeiraba
        var circle_29f020e5578f96f0d053792740448d20 = L.circle(
                [-26.213104, -48.907975],
                {"bubblingMouseEvents": true, "color": "#229A2F", "dashArray": null, "dashOffset": null, "fill": true, "fillColor": "#229A2F", "fillOpacity": 0.2, "fillRule": "evenodd", "lineCap": "round", "lineJoin": "round", "opacity": 1.0, "radius": 1400, "stroke": true, "weight": 3}
            ).addTo(map_6e83cbd798c966a931e947ef49eedbcb);
        
    
        var popup_3632cb37936a51c2f443c335cc854a1c = L.popup({"maxWidth": "100%"});

        
            
                var html_edf52eba53abe2c092614de72a3c2a7b = $(`<div id="html_edf52eba53abe2c092614de72a3c2a7b" style="width: 100.0%; height: 100.0%;">Nota&nbsp;9</div>`)[0];
                popup_3632cb37936a51c2f443c335cc854a1c.setContent(html_edf52eba53abe2c092614de72a3c2a7b);
            
        

        circle_29f020e5578f96f0d053792740448d20.bindPopup(popup_3632cb37936a51c2f443c335cc854a1c)
        ;


        
    
    
</script>