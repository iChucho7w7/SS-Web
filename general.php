<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="CSS/estilo.css">
  <title>Formulario</title>
</head>
<body>
  <form action="main.php" method="POST" enctype="multipart/form-data">
    <section class="class_formulario">
      <h4>Formulario</h4>
      <input class="controls" type="text" name="nombres" id="nombres" placeholder="Nombre">
      <input class="controls" type="text" name="apellidos" id="apellidos" placeholder="Apellido">
      <input class="controls" type="email" name="correo" id="correo" placeholder="Correo electrónico">
      <input class="controls" type="password" name="pass" id="pass" placeholder="Contraseña">
      <input class="botons" type="file" name="archivosubido" id="archivosubido" placeholder="sa">
      <input class="btn_send" type="submit" value="Registrar">
    </section>
  </form>
</body>
</html>