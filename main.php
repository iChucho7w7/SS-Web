<?php
	//conexion con la base de datos y el servidor
    $db_host="a2nlmysql61plsk.secureserver.net:3306";
    $db_user="idiazlarajesus";
    $db_pass="AZC5tFmqtjts67h";
    $db_database="form-ss-database";

	$link = mysql_connect($db_host,$db_user,$db_pass) or die("<h2>No se encuentra el servidor</h2>");
	$db = mysql_select_db($db_database,$link) or die("<h2>Error de Conexion</h2>");

	//obtenemos los valores del formulario
	$nombres = $_POST['nombres'];
	$apellidos = $_POST['apellidos'];
	$email = $_POST['correo'];
	$pass = $_POST['pass'];

    //Transformación del archivo a binario
    $tipoArchivo=$_FILES['archivosubido']['type'];
    $nombreArchivo=$_FILES['archivosubido']['name'];
    $tamanoArchivo=$_FILES['archivosubido']['size'];
    $imagenSubida=fopen($_FILES['archivosubido']['tmp_name'],'r');
    $binariosImagen=fread($imagenSubida, $tamanoArchivo);
    $con = mysqli_connect($db_host, $db_user, $db_pass, $db_database);
    $binariosImagen = mysqli_escape_string($con, $binariosImagen);

	//Obtiene la longitus de un string
	$req = (strlen($nombres)*strlen($apellidos)*strlen($email)*strlen($pass)) or die("No se han llenado todos los campos");


	//ingresamos la informacion a la base de datos
	mysql_query("INSERT INTO Registros VALUES('','$nombres','$apellidos','$email','$pass','$binariosImagen')",$link) or die("<h2>Error Guardando los datos</h2>");
	echo'
		<script>
			alert("Registro Exitoso");
			location.href="index.php";
		</script>
	'

?>
