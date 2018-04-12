<!DOCTYPE html>
 
<?php 
$_SESSION['pag']=1;

include "filtro1.php";
?>
<html>
	<head>
		<title>Alta de Libro</title>
<meta charset="UTF-8">
		<link href="css/estilo_registro.css" type="text/css" rel="stylesheet">
	</head>
	<body>
		<h1>Alta de libro</h1>
		<p>Por favor ingrese sus datos en el siguiente formulario.</p>
		<br/> <br/>
		<h2>Datos</h2>
	
	<form action="alta.php" method="post">
		<p>Titulo</p><input type="text" name="titulo" autocomplete="off"/><br/>
		<p>Autor (nùmero)</p><input type="text" name="id_autor"/><br/>
		<p>Año de publicaciòn</p><input type="text" name="apub"/><br/>
		<input type="submit" value="Enviar">
	</form>

	</body>
</html>
	
