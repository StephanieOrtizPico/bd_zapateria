<?php
    require 'modelo/conexion.php';

    session_start();

    if(isset($_SESSION['username'] && isset($_SESSION['correo'])))
    {
        $nombre_usuario = $_SESSION['username'];
        $correo_usuario = $_SESSION['correo'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
</head>
<body>
    <div id="contenedor_principal">
        <h1>Usuario: <?php echo ' '.$nombre_usuario;?></h1>
    </div>
</body>
</html>