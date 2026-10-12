<?php
$titulo_pagina = "Perfil";
$usuario_valido = "admin";
$password_valido = "1234";
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
    <form>
      <h3>Datos de cuenta</h3>
      <div class="campo">
        <label>Nombre de usuario</label>
        <input type="text">
      </div>
      <div class="campo">
        <label>Contraseña</label>
        <input type="password">
      </div>

      <h3>Datos personales</h3>
      <div class="campo">
        <label>Nombre completo</label>
        <input type="text">
      </div>
      <div class="campo">
        <label>País</label>
        <select>
          <option value=""></option>
          <option value="es">España</option>
          <option value="mx">México</option>
          <option value="ar">Argentina</option>
        </select>
      </div>
      <div class="campo">
        <label>Teléfono</label>
        <input type="number">
      </div>
      <div class="campo">
        <label>Correo</label>
        <input type="email">
      </div>

      <h3>Avatar</h3>
      <div class="avatars">
        <label><input type="radio" name="avatar"> <img src="avatars/avatar1.jpg" alt="Avatar 1" width="60"></label>
        <label><input type="radio" name="avatar"> <img src="avatars/avatar2.jpg" alt="Avatar 2" width="60"></label>
        <label><input type="radio" name="avatar"> <img src="avatars/avatar3.jpg" alt="Avatar 3" width="60"></label>
      </div>
      <div class="campo">
        <input type="file">
      </div>

      <br>
      <button type="submit">Crear</button>
    </form>
  </div>

  <div class="footer">
    AMT v1.0 2026/10/06
  </div>
</body>

</html>