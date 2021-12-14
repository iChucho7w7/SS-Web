<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="CSS/registro_style.css">
  <title>Registro</title>
</head>
<body>
  <form action="index_p.php" method="POST" enctype="multipart/form-data">
    <section class="class_registro">
      <h4>Registro</h4>
      <input class="controls" type="text" name="nombres" id="nombres" placeholder="Nombre">
      <input class="controls" type="text" name="app" id="app" placeholder="Apellido paterno">
      <input class="controls" type="text" name="apm" id="apm" placeholder="Apellido materno">
      <input class="controls" type="email" name="correo" id="correo" placeholder="Correo electrónico">
      <input class="controls" type="password" name="pass" id="pass" placeholder="Contraseña">
      <input class="btn_send" type="submit" value="Registrar">
    </section>
  </form>
</body>
</html>