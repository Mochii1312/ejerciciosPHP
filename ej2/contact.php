<?php
require_once 'config.php';
include 'header.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?= $site_title ?></title>
    <style>
    body{
        background-color: lightcoral;
    }
    </style>
</head>
<body>
<p class = "fecha">Hoy es: <?php echo $fecha?></p>
<p class = "hora">Y son las: <span id="hora"></span></p>
<script>
    function actualizarHora() {
        const ahora = new Date();
        const hora = ahora.toLocaleTimeString('es-Es');
        document.getElementById("hora").textContent = hora;
    }
    setInterval(actualizarHora, 1000);
    actualizarHora();
</script>
</body>
</html>
<?php
include 'footer.php'; ?>