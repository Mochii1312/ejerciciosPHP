<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?= $site_title ?></title>
    <style>
    .fin{
    background-color: burlywood;
    border: black 5px solid;
    padding: 20px;
    }
    </style>
</head>

<body>
    <footer class="fin">
        <p>&copy; <?= date("Y") ?> <?= $site_title ?>. Todos los derechos reservados.</p>
    </footer>
</body>
</html>

