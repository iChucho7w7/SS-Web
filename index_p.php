<?php
	//conexion con la base de datos y el servidor
    $db_host="a2nlmysql61plsk.secureserver.net:3306";
    $db_user="idiazlarajesus4";
    $db_pass="AZC5tFmqtjts67h";
    $db_database="dates-ss-database";

	$link = mysql_connect($db_host,$db_user,$db_pass) or die("<h2>No se encuentra el servidor</h2>");
	$db = mysql_select_db($db_database,$link) or die("<h2>Error de Conexion</h2>");

	//obtenemos los valores del formulario
	$user_ingresado = $_POST['user'];
	$pass_ingresada = $_POST['pass'];

	//Valida la longitud de caracteres
	$req = (strlen($user_ingresado)*strlen($pass_ingresada)) or die("No se han llenado todos los campos");

	//Validación de usuario
	$consulta= "select user_name, user_ap, user_am, user_id, user_pass, user_mail from Usuarios where user_mail='$user_ingresado'";
	$datos= mysql_query($consulta) or die("<h2>Error de Conexion consulta</h2>");
	$usuario_encontrado=false;
	while ($fila = mysql_fetch_array($datos)){
		if($fila["user_mail"]==$user_ingresado && $fila["user_pass"]==$pass_ingresada){
			$usuario_encontrado=true;
		}
	}
	if($usuario_encontrado==true){
		echo'
			<script>
			alert("Bienvenido");
			location.href="general.php";
			</script>
		';
	}else{
		echo'
			<script>
			alert("Usuario no encontrado");
			location.href="index.php";
			</script>
		';
	}
?>
