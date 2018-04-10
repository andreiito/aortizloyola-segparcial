<!DOCTYPE html>
<?php
session_start();
$_SESSION['pag']=1;
?>
<html>
	<head>
		<title>Inicio de sesiòn</title>
<meta charset="UTF-8">
		<link href="css/estilo_registro.css" type="text/css" rel="stylesheet">
	</head>
	<body>
		<h1>Inicio de Sesiòn</h1>
		<p>Por favor ingrese sus datos en el siguiente formulario.</p>
		<br/> <br/>
		<h2>Registro</h2>
	<form action="menu.php" method="post">
	<label for="usuario">Usuario</label>
	<input type="text" name="usuario" autocomplete="off">
	<label for "password">Contraseña</label>
	<input type="password" name="password" autocomplete="off">
		<input type="submit" value="Enviar">
	</form>

	</body>
</html>
	
