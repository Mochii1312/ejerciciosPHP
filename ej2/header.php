<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?= $site_title ?></title>
    <style>
        nav{
            justify-content: space-between;
            margin-left: 50px;
        }
        a{
            margin-left: 50px;
        }
        .buscador{
            background-color: burlywood;
            border: black 5px solid;
            padding: 20px;
        }
    </style>
</head>

<body>
<header class="buscador">
    <nav>
        <a href="index.php">Inicio</a>
        <a href="about.php">Acerca</a>
        <a href="contact.php">Contacto</a>
        <a href="services.php">Servicios</a>
    </nav>
</header>
</body>
</html>