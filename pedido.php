<?php
$titulo_pagina = "Generar pedido";
$mensaje_oferta = "";
$cantidad_sushi = 0; # de momento ponemos 0, pero sera la mult entre las unidades pedidas y su precio
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo_pagina; ?></title>
    <link rel="stylesheet" href="tarea_ut02.css">
</head>

<body>
    <!-- Cabecera estándar -->
    <div class="header">
        <p><?php echo $titulo_pagina; ?></p>
        <div class="login">
            <input type="text" placeholder="Usuario">
            <input type="password" placeholder="Clave">
            <button>Conectar</button>
        </div>
    </div>

    <div class="menu_lateral">
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="perfil.php">Perfil</a></li>
            <li><a href="pedido.php">Generar pedido</a></li>
            <li><a href="carta.php">Gestión de carta</a></li>
            <li><a href="cliente.php">Mejores clientes</a></li>
        </ul>
    </div>


    <div class="inicio">
        <div class="acciones-pedido">
            <button type="button">Comprobar ofertas</button>
            <button type="button">Finalizar pedido</button>
        </div>

        <table class="tabla-pedido">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Imagen</th>
                    <th>Alérgenos</th>
                    <th>Cantidad Total</th>
                    <th>Ofertas</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nigiri de Salmón</td>
                    <td>1.95</td>
                    <td><img src="sushi/niguiri_salmon.jpg" alt="Nigiri" width="150"></td>
                    <td>
                        <img src="alergenos/lacteos.png" alt="Alérgeno" width="20">
                        <img src="alergenos/gluten.png"  alt="Alérgeno" width="20">
                    </td>
                    <td><input type="number" value="0" min="0" style="width: 60px;"></td>
                    <td><strong><?php echo $cantidad_sushi; ?> €</strong></td>
                    <td><?php echo $mensaje_oferta; ?></td>
                </tr>
                <tr>
                    <td>Nigiri de Atún</td>
                    <td>2.25</td>
                    <td><img src="sushi/niguiri_atun.jpg"  alt="Nigiri de Atún" width="150"></td>
                    <td>
                        <img src="alergenos/lacteos.png" alt="Alérgeno" width="20">
                        <img src="alergenos/gluten.png"  alt="Alérgeno" width="20">
                    </td>
                    <td><input type="number" value="0" min="0" style="width: 60px;"></td>
                    <td><strong><?php echo $cantidad_sushi; ?> €</strong></td>
                    <td><?php echo $mensaje_oferta; ?></td>
                </tr>
                <tr>
                    <td>Nigiri de Langostino</td>
                    <td>1.85</td>
                    <td><img src="sushi/niguiri_langostino.jpg"alt="Nigiri de Langostino" width="150"></td>
                    <td>
                        <img src="alergenos/lacteos.png" alt="Alérgeno" width="20">
                    </td>
                    <td><input type="number" value="0" min="0" style="width: 60px;"></td>
                    <td><strong><?php echo $cantidad_sushi; ?> €</strong></td>
                    <td><?php echo $mensaje_oferta; ?></td>
                </tr>
            </tbody>
        </table>
    </div>


    <div class="footer">
        AMT v1.0 2026/10/06
    </div>
</body>

</html>