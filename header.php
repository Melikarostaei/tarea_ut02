<?php
// Si no se define un título, ponemos uno por defecto
$titulo_pagina = $titulo_pagina ?? "¡Bienvenido/a a mySushi!";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title><?php echo $titulo_pagina; ?></title>
    <link rel="stylesheet" href="tarea_ut02.css">
</head>

<body>
    <div class="header">
        <h1><?php echo $titulo_pagina; ?></h1>
        <div class="login">
            <input type="text" placeholder="Usuario">
            <input type="password" placeholder="Clave">
            <button>Conectar</button>
        </div>
    </div>