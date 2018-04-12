<!DOCTYPE html> 
<?php 
$_SESSION['pag']=1;

include "filtro1.php";
?>
<html>
	<head>
<meta charset="UTF-8">
		<title>Alta de Autores</title>
		<link href="css/estilo_registro.css" type="text/css" rel="stylesheet">
	</head>
	<body>
		<h1>Alta de Autores</h1>
		<p>Por favor ingrese los datos en el siguiente formulario.</p>
		<br/> <br/>
		<h2>Datos</h2>
	<form action="alta.php" method="post">
		<p>Nombre</p><input type="text" name="nombre" autocomplete="off"/><br/>
		<p>Apellido Paterno</p><input type="text" name="appat" autocomplete="off"/><br/>
		<p>Apellido Materno</p><input type="text" name="apmat" autocomplete="off"/><br/>
		<p>Nacionalidad</p><input type="text" name="nacionalidad"/><br/>
		<input type="submit" value="Enviar">
	</form>
<body>
</html>
	
