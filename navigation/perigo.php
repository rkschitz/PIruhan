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
            <div class="folium-map" id="map_db45728d0d9ca290d99d424728a0f5d0"></div>
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
        </div>    
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




    var marker_1ed7006925534cf7326756d0c7a6d2a6 = L.marker(
        [-26.3051, -48.8461],
        {}
    ).addTo(map_6e83cbd798c966a931e947ef49eedbcb);


    var icon_631d241e9a691b7127049ef454b263b0 = L.AwesomeMarkers.icon(
        {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "red", "prefix": "glyphicon"}
    );
    marker_1ed7006925534cf7326756d0c7a6d2a6.setIcon(icon_631d241e9a691b7127049ef454b263b0);


    var popup_e9f1f086300b89729571ff3c39560d34 = L.popup({"maxWidth": "100%"});



        var html_75b47f8c8a727deca107ea3290fd74fe = $(`<div id="html_75b47f8c8a727deca107ea3290fd74fe" style="width: 100.0%; height: 100.0%;">Alerta&nbsp;de&nbsp;Ataques</div>`)[0];
        popup_e9f1f086300b89729571ff3c39560d34.setContent(html_75b47f8c8a727deca107ea3290fd74fe);



    marker_1ed7006925534cf7326756d0c7a6d2a6.bindPopup(popup_e9f1f086300b89729571ff3c39560d34)
    ;




    var marker_d30125b05085eab3f77ebd73be6e20a5 = L.marker(
        [-26.28652, -48.843258],
        {}
    ).addTo(map_6e83cbd798c966a931e947ef49eedbcb);


    var icon_9307e61f6eefa31f11b3b58d1a37dfea = L.AwesomeMarkers.icon(
        {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "red", "prefix": "glyphicon"}
    );
    marker_d30125b05085eab3f77ebd73be6e20a5.setIcon(icon_9307e61f6eefa31f11b3b58d1a37dfea);


    var popup_d3a838457c853b30d1e2067a0b48517a = L.popup({"maxWidth": "100%"});



        var html_af4cf5c61dd41e22bda1af014433be55 = $(`<div id="html_af4cf5c61dd41e22bda1af014433be55" style="width: 100.0%; height: 100.0%;">Alerta&nbsp;de&nbsp;Ataques</div>`)[0];
        popup_d3a838457c853b30d1e2067a0b48517a.setContent(html_af4cf5c61dd41e22bda1af014433be55);



    marker_d30125b05085eab3f77ebd73be6e20a5.bindPopup(popup_d3a838457c853b30d1e2067a0b48517a)
    ;




    var marker_db0e95e6f1c3d95a3b49a6e129c18ca3 = L.marker(
        [-26.289028, -48.900459],
        {}
    ).addTo(map_6e83cbd798c966a931e947ef49eedbcb);


    var icon_a3f204f69ad5c79ff239a8526b393680 = L.AwesomeMarkers.icon(
        {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "red", "prefix": "glyphicon"}
    );
    marker_db0e95e6f1c3d95a3b49a6e129c18ca3.setIcon(icon_a3f204f69ad5c79ff239a8526b393680);


    var popup_58cffadc329f0f2135137f847cfbebe9 = L.popup({"maxWidth": "100%"});



        var html_31324832edbe91c85a42744b5a90572b = $(`<div id="html_31324832edbe91c85a42744b5a90572b" style="width: 100.0%; height: 100.0%;">Alerta&nbsp;de&nbsp;Ataques</div>`)[0];
        popup_58cffadc329f0f2135137f847cfbebe9.setContent(html_31324832edbe91c85a42744b5a90572b);



    marker_db0e95e6f1c3d95a3b49a6e129c18ca3.bindPopup(popup_58cffadc329f0f2135137f847cfbebe9)
    ;




    var marker_2f5041a4c0c59c893a8b04e6eb8e660b = L.marker(
        [-26.337793, -48.838545],
        {}
    ).addTo(map_6e83cbd798c966a931e947ef49eedbcb);


    var icon_bf0b2ebbad3cbc5d61576b4a86d6c827 = L.AwesomeMarkers.icon(
        {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "red", "prefix": "glyphicon"}
    );
    marker_2f5041a4c0c59c893a8b04e6eb8e660b.setIcon(icon_bf0b2ebbad3cbc5d61576b4a86d6c827);


    var popup_986a1f1c2614ec146b5bec4cc2b33f22 = L.popup({"maxWidth": "100%"});



        var html_56b69f5577be60dc43dfcad79e668a79 = $(`<div id="html_56b69f5577be60dc43dfcad79e668a79" style="width: 100.0%; height: 100.0%;">Alerta&nbsp;de&nbsp;Ataques</div>`)[0];
        popup_986a1f1c2614ec146b5bec4cc2b33f22.setContent(html_56b69f5577be60dc43dfcad79e668a79);



    marker_2f5041a4c0c59c893a8b04e6eb8e660b.bindPopup(popup_986a1f1c2614ec146b5bec4cc2b33f22)
    ;




    var marker_2ba4c148752ffa3dc98f7c6f5f4bc7bf = L.marker(
        [-26.33673, -48.811231],
        {}
    ).addTo(map_6e83cbd798c966a931e947ef49eedbcb);


    var icon_76dd32370b8b6f022fbde54d2038219b = L.AwesomeMarkers.icon(
        {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "red", "prefix": "glyphicon"}
    );
    marker_2ba4c148752ffa3dc98f7c6f5f4bc7bf.setIcon(icon_76dd32370b8b6f022fbde54d2038219b);


    var popup_e47853b33bde17b2112ce0d6f92b1061 = L.popup({"maxWidth": "100%"});



        var html_01090b72266d2659bcdb86ed569c68d1 = $(`<div id="html_01090b72266d2659bcdb86ed569c68d1" style="width: 100.0%; height: 100.0%;">Alerta&nbsp;de&nbsp;Ataques</div>`)[0];
        popup_e47853b33bde17b2112ce0d6f92b1061.setContent(html_01090b72266d2659bcdb86ed569c68d1);



    marker_2ba4c148752ffa3dc98f7c6f5f4bc7bf.bindPopup(popup_e47853b33bde17b2112ce0d6f92b1061)
    ;




    var marker_52874b4cc82f8ccf23e0c8cba3ddcfab = L.marker(
        [-26.269079, -48.869703],
        {}
    ).addTo(map_6e83cbd798c966a931e947ef49eedbcb);


    var icon_5b7fa316a3db67d3290de78fc2952e72 = L.AwesomeMarkers.icon(
        {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "red", "prefix": "glyphicon"}
    );
    marker_52874b4cc82f8ccf23e0c8cba3ddcfab.setIcon(icon_5b7fa316a3db67d3290de78fc2952e72);


    var popup_753a43193a48c9de29cb05fe34721c32 = L.popup({"maxWidth": "100%"});



        var html_9065c4d29dfe6b82aa4759b77303fadf = $(`<div id="html_9065c4d29dfe6b82aa4759b77303fadf" style="width: 100.0%; height: 100.0%;">Alerta&nbsp;de&nbsp;Ataques</div>`)[0];
        popup_753a43193a48c9de29cb05fe34721c32.setContent(html_9065c4d29dfe6b82aa4759b77303fadf);



    marker_52874b4cc82f8ccf23e0c8cba3ddcfab.bindPopup(popup_753a43193a48c9de29cb05fe34721c32)
    ;




    var marker_43040e021c7d4703d99b9b7b839671dc = L.marker(
        [-26.239347, -48.816474],
        {}
    ).addTo(map_6e83cbd798c966a931e947ef49eedbcb);


    var icon_c53cef1eeca5cd7fbd57e0bebd93cbd5 = L.AwesomeMarkers.icon(
        {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "red", "prefix": "glyphicon"}
    );
    marker_43040e021c7d4703d99b9b7b839671dc.setIcon(icon_c53cef1eeca5cd7fbd57e0bebd93cbd5);


    var popup_45e51a8991797aeec614a5855e8f0647 = L.popup({"maxWidth": "100%"});



        var html_9301ec30c34b68d059033b4b285f5506 = $(`<div id="html_9301ec30c34b68d059033b4b285f5506" style="width: 100.0%; height: 100.0%;">Alerta&nbsp;de&nbsp;Ataques</div>`)[0];
        popup_45e51a8991797aeec614a5855e8f0647.setContent(html_9301ec30c34b68d059033b4b285f5506);



    marker_43040e021c7d4703d99b9b7b839671dc.bindPopup(popup_45e51a8991797aeec614a5855e8f0647)
    ;




    var marker_c02010503b9aebf2ef99ed797e189268 = L.marker(
        [-26.278801, -48.80289],
        {}
    ).addTo(map_6e83cbd798c966a931e947ef49eedbcb);


    var icon_15a357b9216790650968665b8ca2b550 = L.AwesomeMarkers.icon(
        {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "red", "prefix": "glyphicon"}
    );
    marker_c02010503b9aebf2ef99ed797e189268.setIcon(icon_15a357b9216790650968665b8ca2b550);


    var popup_e1ee77269d8454e8aa1d1cdf2e2c86fa = L.popup({"maxWidth": "100%"});



        var html_8a6461370a5310b0c5e833533d94e702 = $(`<div id="html_8a6461370a5310b0c5e833533d94e702" style="width: 100.0%; height: 100.0%;">Alerta&nbsp;de&nbsp;Ataques</div>`)[0];
        popup_e1ee77269d8454e8aa1d1cdf2e2c86fa.setContent(html_8a6461370a5310b0c5e833533d94e702);



    marker_c02010503b9aebf2ef99ed797e189268.bindPopup(popup_e1ee77269d8454e8aa1d1cdf2e2c86fa)
    ;




    var marker_638cfbeeafce78348ce47eef057c6240 = L.marker(
        [-26.331592, -48.813102],
        {}
    ).addTo(map_6e83cbd798c966a931e947ef49eedbcb);


    var icon_08f81f2bec75ed7ae094e4df162980d5 = L.AwesomeMarkers.icon(
        {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "red", "prefix": "glyphicon"}
    );
    marker_638cfbeeafce78348ce47eef057c6240.setIcon(icon_08f81f2bec75ed7ae094e4df162980d5);


    var popup_bce18a38433aae62c76ea2af450deec7 = L.popup({"maxWidth": "100%"});



        var html_d1807b1e40e23f61ea20fb69d400a65d = $(`<div id="html_d1807b1e40e23f61ea20fb69d400a65d" style="width: 100.0%; height: 100.0%;">Alerta&nbsp;de&nbsp;Ataques</div>`)[0];
        popup_bce18a38433aae62c76ea2af450deec7.setContent(html_d1807b1e40e23f61ea20fb69d400a65d);



    marker_638cfbeeafce78348ce47eef057c6240.bindPopup(popup_bce18a38433aae62c76ea2af450deec7)
    ;




    var marker_8f1dbe1bbaa719b246de6e711d31e97c = L.marker(
        [-26.289584, -48.771896],
        {}
    ).addTo(map_6e83cbd798c966a931e947ef49eedbcb);


    var icon_2386e8ad0dfa4c1f009e53a0db8c9c7c = L.AwesomeMarkers.icon(
        {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "red", "prefix": "glyphicon"}
    );
    marker_8f1dbe1bbaa719b246de6e711d31e97c.setIcon(icon_2386e8ad0dfa4c1f009e53a0db8c9c7c);


    var popup_79c2b7fd6112b606d5086133b2acdf88 = L.popup({"maxWidth": "100%"});



        var html_985aebe89bb1c36aed8d27e874dd66e1 = $(`<div id="html_985aebe89bb1c36aed8d27e874dd66e1" style="width: 100.0%; height: 100.0%;">Alerta&nbsp;de&nbsp;Ataques</div>`)[0];
        popup_79c2b7fd6112b606d5086133b2acdf88.setContent(html_985aebe89bb1c36aed8d27e874dd66e1);



    marker_8f1dbe1bbaa719b246de6e711d31e97c.bindPopup(popup_79c2b7fd6112b606d5086133b2acdf88)
    ;




    var marker_2f1c3ea13f7cce710b4a0f2ec3dfa9f0 = L.marker(
        [-26.260891, -48.804811],
        {}
    ).addTo(map_6e83cbd798c966a931e947ef49eedbcb);


    var icon_1d2a97587bc5cd558125ac4552ca4528 = L.AwesomeMarkers.icon(
        {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "red", "prefix": "glyphicon"}
    );
    marker_2f1c3ea13f7cce710b4a0f2ec3dfa9f0.setIcon(icon_1d2a97587bc5cd558125ac4552ca4528);


    var popup_e883d36946ccff62de0dbb58380f9ba9 = L.popup({"maxWidth": "100%"});



        var html_21aa921a038be904dee75d2b80ad8166 = $(`<div id="html_21aa921a038be904dee75d2b80ad8166" style="width: 100.0%; height: 100.0%;">Alerta&nbsp;de&nbsp;Ataques</div>`)[0];
        popup_e883d36946ccff62de0dbb58380f9ba9.setContent(html_21aa921a038be904dee75d2b80ad8166);



    marker_2f1c3ea13f7cce710b4a0f2ec3dfa9f0.bindPopup(popup_e883d36946ccff62de0dbb58380f9ba9)
    ;

        
    
    
</script>