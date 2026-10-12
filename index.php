<?php
$titulo_pagina = "¡Bienvenido/a a mySushi!";
$usuario_valido = "admin";
$password_valido = "1234";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $titulo_pagina; ?></title>
  <link rel="stylesheet" href="tarea_ut02.css">
</head>

<body>
  <div class="header">
    <p><?php echo $titulo_pagina; ?></p>
    <div class="login">
      <input type="text" placeholder="Usuario" value="<?php echo $usuario_valido; ?>">
      <input type="password" placeholder="Clave" value="<?php echo $password_valido; ?>">
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
    <p>Bienvenido. Por favor inicia sesión o crea un usuario.</p>
  </div>

  <div class="footer">
    AMT v1.0 2026/10/06
  </div>
</body>

</html>