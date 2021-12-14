<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="CSS/index_style.css">
  <title>Acceso</title>
</head>
<body>
  <form action="index_p.php" method="POST" enctype="multipart/form-data">
    <section class="class_index">
      <h4>Acceso</h4>
      <input class="controls" type="text" name="user" id="user" placeholder="Usuario">
      <input class="controls" type="text" name="pass" id="pass" placeholder="Contraseña">
      <input class="btn_send" type="submit" value="Ingresar">
      <a class="htext" href="registro.php">No tengo una cuenta</a>
    </section>
  </form>
</body>
</html>