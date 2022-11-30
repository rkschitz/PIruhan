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

                @media (max-width: 1300px) {
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




var marker_d26f86c8b6ad9b928612f79ba1534b09 = L.marker(
    [-26.291168146927028, -48.828173191493285],
    {}
).addTo(map_6e83cbd798c966a931e947ef49eedbcb);


var icon_316a0bb963280a42128c784ecd815779 = L.AwesomeMarkers.icon(
    {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
);
marker_d26f86c8b6ad9b928612f79ba1534b09.setIcon(icon_316a0bb963280a42128c784ecd815779);


var popup_0a16867489ad0b7a4c2fec07ce356001 = L.popup({"maxWidth": "100%"});



    var html_f69b1a6327d3308b6b2a243cee64e064 = $(`<div id="html_f69b1a6327d3308b6b2a243cee64e064" style="width: 100.0%; height: 100.0%;">Caminhada&nbsp;Segura</div>`)[0];
    popup_0a16867489ad0b7a4c2fec07ce356001.setContent(html_f69b1a6327d3308b6b2a243cee64e064);



marker_d26f86c8b6ad9b928612f79ba1534b09.bindPopup(popup_0a16867489ad0b7a4c2fec07ce356001)
;




var marker_4756f868231b48f837fa62a1897e628a = L.marker(
    [-26.25998, -48.866187],
    {}
).addTo(map_6e83cbd798c966a931e947ef49eedbcb);


var icon_a111a98bea667e2f8c0963702f3ddeba = L.AwesomeMarkers.icon(
    {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
);
marker_4756f868231b48f837fa62a1897e628a.setIcon(icon_a111a98bea667e2f8c0963702f3ddeba);


var popup_b69e9e20d18b77d81dd6bbe044f5ff5d = L.popup({"maxWidth": "100%"});



    var html_54de84496e5ecc2174ee5b8d6ef5849c = $(`<div id="html_54de84496e5ecc2174ee5b8d6ef5849c" style="width: 100.0%; height: 100.0%;">Caminhada&nbsp;Segura</div>`)[0];
    popup_b69e9e20d18b77d81dd6bbe044f5ff5d.setContent(html_54de84496e5ecc2174ee5b8d6ef5849c);



marker_4756f868231b48f837fa62a1897e628a.bindPopup(popup_b69e9e20d18b77d81dd6bbe044f5ff5d)
;




var marker_3e02ab947b3a95df23fc62f30d158f0f = L.marker(
    [-26.319111, -48.842435],
    {}
).addTo(map_6e83cbd798c966a931e947ef49eedbcb);


var icon_cf2b8e27cc172caf2091e269d8eea202 = L.AwesomeMarkers.icon(
    {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
);
marker_3e02ab947b3a95df23fc62f30d158f0f.setIcon(icon_cf2b8e27cc172caf2091e269d8eea202);


var popup_7d4b9532f531fb3bdbf8af8cef4d9303 = L.popup({"maxWidth": "100%"});



    var html_a730ae91d958de96614622fdbf90087d = $(`<div id="html_a730ae91d958de96614622fdbf90087d" style="width: 100.0%; height: 100.0%;">Caminhada&nbsp;Segura</div>`)[0];
    popup_7d4b9532f531fb3bdbf8af8cef4d9303.setContent(html_a730ae91d958de96614622fdbf90087d);



marker_3e02ab947b3a95df23fc62f30d158f0f.bindPopup(popup_7d4b9532f531fb3bdbf8af8cef4d9303)
;




var marker_609bc9d195fbd860187627da934915a1 = L.marker(
    [-26.308937, -48.850754],
    {}
).addTo(map_6e83cbd798c966a931e947ef49eedbcb);


var icon_5f3dec1eff9566ff9b53ec4b829f4416 = L.AwesomeMarkers.icon(
    {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
);
marker_609bc9d195fbd860187627da934915a1.setIcon(icon_5f3dec1eff9566ff9b53ec4b829f4416);


var popup_32fe95785bb0c71dfa3099da12ba7c71 = L.popup({"maxWidth": "100%"});



    var html_c47728bd3bc98ccd5697403c2f221a08 = $(`<div id="html_c47728bd3bc98ccd5697403c2f221a08" style="width: 100.0%; height: 100.0%;">Caminhada&nbsp;Segura</div>`)[0];
    popup_32fe95785bb0c71dfa3099da12ba7c71.setContent(html_c47728bd3bc98ccd5697403c2f221a08);



marker_609bc9d195fbd860187627da934915a1.bindPopup(popup_32fe95785bb0c71dfa3099da12ba7c71)
;

//Max Colin
var marker_609bc9d195fbd860187627da934915a1 = L.marker(
    [-26.294345, -48.854704],
    {}
).addTo(map_6e83cbd798c966a931e947ef49eedbcb);


var icon_5f3dec1eff9566ff9b53ec4b829f4416 = L.AwesomeMarkers.icon(
    {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
);
marker_609bc9d195fbd860187627da934915a1.setIcon(icon_5f3dec1eff9566ff9b53ec4b829f4416);


var popup_32fe95785bb0c71dfa3099da12ba7c71 = L.popup({"maxWidth": "100%"});



    var html_c47728bd3bc98ccd5697403c2f221a08 = $(`<div id="html_c47728bd3bc98ccd5697403c2f221a08" style="width: 100.0%; height: 100.0%;">Caminhada&nbsp;Segura</div>`)[0];
    popup_32fe95785bb0c71dfa3099da12ba7c71.setContent(html_c47728bd3bc98ccd5697403c2f221a08);



marker_609bc9d195fbd860187627da934915a1.bindPopup(popup_32fe95785bb0c71dfa3099da12ba7c71)
;


//XV de Novembro
var marker_609bc9d195fbd860187627da934915a1 = L.marker(
    [-26.287328, -48.902824],
    {}
).addTo(map_6e83cbd798c966a931e947ef49eedbcb);


var icon_5f3dec1eff9566ff9b53ec4b829f4416 = L.AwesomeMarkers.icon(
    {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
);
marker_609bc9d195fbd860187627da934915a1.setIcon(icon_5f3dec1eff9566ff9b53ec4b829f4416);


var popup_32fe95785bb0c71dfa3099da12ba7c71 = L.popup({"maxWidth": "100%"});



    var html_c47728bd3bc98ccd5697403c2f221a08 = $(`<div id="html_c47728bd3bc98ccd5697403c2f221a08" style="width: 100.0%; height: 100.0%;">Caminhada&nbsp;Segura</div>`)[0];
    popup_32fe95785bb0c71dfa3099da12ba7c71.setContent(html_c47728bd3bc98ccd5697403c2f221a08);



marker_609bc9d195fbd860187627da934915a1.bindPopup(popup_32fe95785bb0c71dfa3099da12ba7c71)
;


//Benjamin Constant
var marker_609bc9d195fbd860187627da934915a1 = L.marker(
    [-26.284560, -48.855379],
    {}
).addTo(map_6e83cbd798c966a931e947ef49eedbcb);


var icon_5f3dec1eff9566ff9b53ec4b829f4416 = L.AwesomeMarkers.icon(
    {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
);
marker_609bc9d195fbd860187627da934915a1.setIcon(icon_5f3dec1eff9566ff9b53ec4b829f4416);


var popup_32fe95785bb0c71dfa3099da12ba7c71 = L.popup({"maxWidth": "100%"});



    var html_c47728bd3bc98ccd5697403c2f221a08 = $(`<div id="html_c47728bd3bc98ccd5697403c2f221a08" style="width: 100.0%; height: 100.0%;">Caminhada&nbsp;Segura</div>`)[0];
    popup_32fe95785bb0c71dfa3099da12ba7c71.setContent(html_c47728bd3bc98ccd5697403c2f221a08);



marker_609bc9d195fbd860187627da934915a1.bindPopup(popup_32fe95785bb0c71dfa3099da12ba7c71)
;


//Rua Iririu
var marker_609bc9d195fbd860187627da934915a1 = L.marker(
    [-26.276003, -48.834151],
    {}
).addTo(map_6e83cbd798c966a931e947ef49eedbcb);


var icon_5f3dec1eff9566ff9b53ec4b829f4416 = L.AwesomeMarkers.icon(
    {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
);
marker_609bc9d195fbd860187627da934915a1.setIcon(icon_5f3dec1eff9566ff9b53ec4b829f4416);


var popup_32fe95785bb0c71dfa3099da12ba7c71 = L.popup({"maxWidth": "100%"});



    var html_c47728bd3bc98ccd5697403c2f221a08 = $(`<div id="html_c47728bd3bc98ccd5697403c2f221a08" style="width: 100.0%; height: 100.0%;">Caminhada&nbsp;Segura</div>`)[0];
    popup_32fe95785bb0c71dfa3099da12ba7c71.setContent(html_c47728bd3bc98ccd5697403c2f221a08);



marker_609bc9d195fbd860187627da934915a1.bindPopup(popup_32fe95785bb0c71dfa3099da12ba7c71)
;
    
    
//Rui Barbosa
var marker_609bc9d195fbd860187627da934915a1 = L.marker(
    [-26.264618, -48.870687],
    {}
).addTo(map_6e83cbd798c966a931e947ef49eedbcb);


var icon_5f3dec1eff9566ff9b53ec4b829f4416 = L.AwesomeMarkers.icon(
    {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
);
marker_609bc9d195fbd860187627da934915a1.setIcon(icon_5f3dec1eff9566ff9b53ec4b829f4416);


var popup_32fe95785bb0c71dfa3099da12ba7c71 = L.popup({"maxWidth": "100%"});



    var html_c47728bd3bc98ccd5697403c2f221a08 = $(`<div id="html_c47728bd3bc98ccd5697403c2f221a08" style="width: 100.0%; height: 100.0%;">Caminhada&nbsp;Segura</div>`)[0];
    popup_32fe95785bb0c71dfa3099da12ba7c71.setContent(html_c47728bd3bc98ccd5697403c2f221a08);



marker_609bc9d195fbd860187627da934915a1.bindPopup(popup_32fe95785bb0c71dfa3099da12ba7c71)
;


//Rua Marquês de Olinda
var marker_609bc9d195fbd860187627da934915a1 = L.marker(
    [-26.272375, -48.863035],
    {}
).addTo(map_6e83cbd798c966a931e947ef49eedbcb);


var icon_5f3dec1eff9566ff9b53ec4b829f4416 = L.AwesomeMarkers.icon(
    {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
);
marker_609bc9d195fbd860187627da934915a1.setIcon(icon_5f3dec1eff9566ff9b53ec4b829f4416);


var popup_32fe95785bb0c71dfa3099da12ba7c71 = L.popup({"maxWidth": "100%"});



    var html_c47728bd3bc98ccd5697403c2f221a08 = $(`<div id="html_c47728bd3bc98ccd5697403c2f221a08" style="width: 100.0%; height: 100.0%;">Caminhada&nbsp;Segura</div>`)[0];
    popup_32fe95785bb0c71dfa3099da12ba7c71.setContent(html_c47728bd3bc98ccd5697403c2f221a08);



marker_609bc9d195fbd860187627da934915a1.bindPopup(popup_32fe95785bb0c71dfa3099da12ba7c71)
;


//Rua Bem-te-vi
var marker_609bc9d195fbd860187627da934915a1 = L.marker(
    [-26.268911, -48.875530],
    {}
).addTo(map_6e83cbd798c966a931e947ef49eedbcb);


var icon_5f3dec1eff9566ff9b53ec4b829f4416 = L.AwesomeMarkers.icon(
    {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
);
marker_609bc9d195fbd860187627da934915a1.setIcon(icon_5f3dec1eff9566ff9b53ec4b829f4416);


var popup_32fe95785bb0c71dfa3099da12ba7c71 = L.popup({"maxWidth": "100%"});



    var html_c47728bd3bc98ccd5697403c2f221a08 = $(`<div id="html_c47728bd3bc98ccd5697403c2f221a08" style="width: 100.0%; height: 100.0%;">Caminhada&nbsp;Segura</div>`)[0];
    popup_32fe95785bb0c71dfa3099da12ba7c71.setContent(html_c47728bd3bc98ccd5697403c2f221a08);



marker_609bc9d195fbd860187627da934915a1.bindPopup(popup_32fe95785bb0c71dfa3099da12ba7c71)
; 


//Rua Águia
var marker_609bc9d195fbd860187627da934915a1 = L.marker(
    [-26.276157, -48.878245],
    {}
).addTo(map_6e83cbd798c966a931e947ef49eedbcb);


var icon_5f3dec1eff9566ff9b53ec4b829f4416 = L.AwesomeMarkers.icon(
    {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
);
marker_609bc9d195fbd860187627da934915a1.setIcon(icon_5f3dec1eff9566ff9b53ec4b829f4416);


var popup_32fe95785bb0c71dfa3099da12ba7c71 = L.popup({"maxWidth": "100%"});



    var html_c47728bd3bc98ccd5697403c2f221a08 = $(`<div id="html_c47728bd3bc98ccd5697403c2f221a08" style="width: 100.0%; height: 100.0%;">Caminhada&nbsp;Segura</div>`)[0];
    popup_32fe95785bb0c71dfa3099da12ba7c71.setContent(html_c47728bd3bc98ccd5697403c2f221a08);



marker_609bc9d195fbd860187627da934915a1.bindPopup(popup_32fe95785bb0c71dfa3099da12ba7c71)
;


//Rua Almirante Jaceguay
var marker_609bc9d195fbd860187627da934915a1 = L.marker(
    [-26.274050, -48.886840],
    {}
).addTo(map_6e83cbd798c966a931e947ef49eedbcb);


var icon_5f3dec1eff9566ff9b53ec4b829f4416 = L.AwesomeMarkers.icon(
    {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
);
marker_609bc9d195fbd860187627da934915a1.setIcon(icon_5f3dec1eff9566ff9b53ec4b829f4416);


var popup_32fe95785bb0c71dfa3099da12ba7c71 = L.popup({"maxWidth": "100%"});



    var html_c47728bd3bc98ccd5697403c2f221a08 = $(`<div id="html_c47728bd3bc98ccd5697403c2f221a08" style="width: 100.0%; height: 100.0%;">Caminhada&nbsp;Segura</div>`)[0];
    popup_32fe95785bb0c71dfa3099da12ba7c71.setContent(html_c47728bd3bc98ccd5697403c2f221a08);



marker_609bc9d195fbd860187627da934915a1.bindPopup(popup_32fe95785bb0c71dfa3099da12ba7c71)
;


//Piratuba
var marker_609bc9d195fbd860187627da934915a1 = L.marker(
    [-26.267757, -48.836174],
    {}
).addTo(map_6e83cbd798c966a931e947ef49eedbcb);


var icon_5f3dec1eff9566ff9b53ec4b829f4416 = L.AwesomeMarkers.icon(
    {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
);
marker_609bc9d195fbd860187627da934915a1.setIcon(icon_5f3dec1eff9566ff9b53ec4b829f4416);


var popup_32fe95785bb0c71dfa3099da12ba7c71 = L.popup({"maxWidth": "100%"});



    var html_c47728bd3bc98ccd5697403c2f221a08 = $(`<div id="html_c47728bd3bc98ccd5697403c2f221a08" style="width: 100.0%; height: 100.0%;">Caminhada&nbsp;Segura</div>`)[0];
    popup_32fe95785bb0c71dfa3099da12ba7c71.setContent(html_c47728bd3bc98ccd5697403c2f221a08);



marker_609bc9d195fbd860187627da934915a1.bindPopup(popup_32fe95785bb0c71dfa3099da12ba7c71)
;


//Rua Tenente Antonio João
var marker_609bc9d195fbd860187627da934915a1 = L.marker(
    [-26.258290, -48.847191],
    {}
).addTo(map_6e83cbd798c966a931e947ef49eedbcb);


var icon_5f3dec1eff9566ff9b53ec4b829f4416 = L.AwesomeMarkers.icon(
    {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
);
marker_609bc9d195fbd860187627da934915a1.setIcon(icon_5f3dec1eff9566ff9b53ec4b829f4416);


var popup_32fe95785bb0c71dfa3099da12ba7c71 = L.popup({"maxWidth": "100%"});



    var html_c47728bd3bc98ccd5697403c2f221a08 = $(`<div id="html_c47728bd3bc98ccd5697403c2f221a08" style="width: 100.0%; height: 100.0%;">Caminhada&nbsp;Segura</div>`)[0];
    popup_32fe95785bb0c71dfa3099da12ba7c71.setContent(html_c47728bd3bc98ccd5697403c2f221a08);



marker_609bc9d195fbd860187627da934915a1.bindPopup(popup_32fe95785bb0c71dfa3099da12ba7c71)
;



//Papa
var marker_609bc9d195fbd860187627da934915a1 = L.marker(
    [-26.277896, -48.821255],
    {}
).addTo(map_6e83cbd798c966a931e947ef49eedbcb);


var icon_5f3dec1eff9566ff9b53ec4b829f4416 = L.AwesomeMarkers.icon(
    {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
);
marker_609bc9d195fbd860187627da934915a1.setIcon(icon_5f3dec1eff9566ff9b53ec4b829f4416);


var popup_32fe95785bb0c71dfa3099da12ba7c71 = L.popup({"maxWidth": "100%"});



    var html_c47728bd3bc98ccd5697403c2f221a08 = $(`<div id="html_c47728bd3bc98ccd5697403c2f221a08" style="width: 100.0%; height: 100.0%;">Caminhada&nbsp;Segura</div>`)[0];
    popup_32fe95785bb0c71dfa3099da12ba7c71.setContent(html_c47728bd3bc98ccd5697403c2f221a08);



marker_609bc9d195fbd860187627da934915a1.bindPopup(popup_32fe95785bb0c71dfa3099da12ba7c71)
;



//Rua XV de Novembro
var marker_609bc9d195fbd860187627da934915a1 = L.marker(
    [-26.294411, -48.880671],
    {}
).addTo(map_6e83cbd798c966a931e947ef49eedbcb);


var icon_5f3dec1eff9566ff9b53ec4b829f4416 = L.AwesomeMarkers.icon(
    {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
);
marker_609bc9d195fbd860187627da934915a1.setIcon(icon_5f3dec1eff9566ff9b53ec4b829f4416);


var popup_32fe95785bb0c71dfa3099da12ba7c71 = L.popup({"maxWidth": "100%"});



    var html_c47728bd3bc98ccd5697403c2f221a08 = $(`<div id="html_c47728bd3bc98ccd5697403c2f221a08" style="width: 100.0%; height: 100.0%;">Caminhada&nbsp;Segura</div>`)[0];
    popup_32fe95785bb0c71dfa3099da12ba7c71.setContent(html_c47728bd3bc98ccd5697403c2f221a08);



marker_609bc9d195fbd860187627da934915a1.bindPopup(popup_32fe95785bb0c71dfa3099da12ba7c71)
;


//Santa Catarina
var marker_609bc9d195fbd860187627da934915a1 = L.marker(
    [-26.334548, -48.847537],
    {}
).addTo(map_6e83cbd798c966a931e947ef49eedbcb);


var icon_5f3dec1eff9566ff9b53ec4b829f4416 = L.AwesomeMarkers.icon(
    {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
);
marker_609bc9d195fbd860187627da934915a1.setIcon(icon_5f3dec1eff9566ff9b53ec4b829f4416);


var popup_32fe95785bb0c71dfa3099da12ba7c71 = L.popup({"maxWidth": "100%"});



    var html_c47728bd3bc98ccd5697403c2f221a08 = $(`<div id="html_c47728bd3bc98ccd5697403c2f221a08" style="width: 100.0%; height: 100.0%;">Caminhada&nbsp;Segura</div>`)[0];
    popup_32fe95785bb0c71dfa3099da12ba7c71.setContent(html_c47728bd3bc98ccd5697403c2f221a08);



marker_609bc9d195fbd860187627da934915a1.bindPopup(popup_32fe95785bb0c71dfa3099da12ba7c71)
;
</script>