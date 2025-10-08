<?php
require_once 'config.php';
include 'header.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?= $site_title ?></title>
    <style>
        div.general h1{
            text-align: center;
        }
    .general{
        background-color: lightcoral;
    }

    .album3{
        margin-left: 100px;
    }
    .album4{
        margin-left: 300px;
    }
    .album5{
        margin-left: 300px;
    }
    .album6{
        margin-left: 100px;
        width: 300px;
        height: 300px;
    }
    .album7{
        margin-left: 300px;
        width: 300px;
        height: 300px;
    }
    .album8{
        margin-left: 300px;
        width: 300px;
        height: 300px;
    }

    .titulo{
    display: flex;
        margin-left: 100px;

    }
    .titulos{
        display: flex;
        margin-left: 100px;
    }
    .titulo1{
        margin-left: 100px;
    }
    .titulo2{
        margin-left: 530px;
    }
    .titulo3{
        margin-left: 530px;
    }
    .titulo4{
        margin-left: 100px;
    }
    .titulo5{
        margin-left: 470px;
    }
    .titulo6{
        margin-left: 470px;
    }
    </style>
</head>
<body>
<div class="general">
<div class="si">
<h1>Galeria de albumes</h1>
<img class="album3" src="imagenes/album3png">

<img class="album4" src="imagenes/album4.png">
<img class="album5" src="imagenes/album5.jpg">

</div>
    <div class="titulo">
        <p class="titulo1">Thank you</p>
        <p class="titulo2">I love you</p>
        <p class="titulo3">000000 & #ffffff</p>
    </div>
<div class="no">
    <img class="album6" src="imagenes/album6.jpg">
    <img class="album7" src="imagenes/album7.jpg">
    <img class="album8" src="imagenes/album8.jpg">
</div>
<div class="titulos">
    <p class="titulo4">Nervous</p>
    <p class="titulo5">Welcome to the Neighbourhood</p>
    <p class="titulo6">EP</p>
</div>
</div>
</body>
</html>
<?php
include 'footer.php'; ?>