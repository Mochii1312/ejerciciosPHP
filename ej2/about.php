<?php
require_once 'config.php';
include 'header.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?= $site_title ?></title>
    <style>
    .historia{
        text-align: center;
    }
    .the{
        background-color: lightcoral;
        text-align: center;
    }
    header{
        text-align: center;
        background-color: lightcoral;
    }
    .album2{
        width: 320px;
        height: 320px;
        margin-left: 10px;
    }
    </style>

</head>
<body>
<div class="the">
    <h1>Sobre the neighbourhood</h1>
<p class="historia">Los miembros de la banda eligieron el deletreo británico de
    <br>
    «neighbourhood» en consejo de su mánager, con el fin de
    <br>
    distinguirse de una banda que ya utilizaba la palabra americana
    <br>
    «neighborhood». A principios de 2012, The Neighbourhood se
    <br>
    unió para lanzar «Female Robbery» y «Sweater Weather». En
    <br>
    mayo de 2012, la banda dio a conocer un EP autoeditado
    <br>
    titulado I'm Sorry..., producido por Justyn Pilbrow. El video para
    <br>
    el sencillo «Sweater Weather» fue lanzado el 5 de marzo de 2013 y el 27 de junio interpretaron en vivo dicha
    <br>
    canción en el programa Jimmy Kimmel Live. «Sweater Weather» también encabezó la lista Alternative Songs de
    <br>
    Billboard a principios de junio de 2013.El álbum debut de la banda, I Love You., fue lanzado el 23 de abril de
    <br>
    2013 e ingresó en el puesto número treinta y nueve en la lista Billboard 200.Rolling Stone ya había estrenado
    <br>
    I Love You. el 16 de abril en su página web, y lo describieron como «atmosférico».La banda es conocida por sus imágenes en blanco y negro, como se ve en toda su música, obras de arte y vídeos; últimamente han
    <br>
    estado usando colores fuertes RGB.</p>
    <img class="album" src="imagenes/album.jpeg">
    <img class="album2" src="imagenes/album2.jpg">
</div>
</body>
</html>
<?php
include 'footer.php'; ?>
