<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Guarda comentario</title>
</head>
<body>
<?php
include_once("conexion.php");
echo "hola";
var_dump($_POST);

$nombre =filter_var( $_POST['nombre'], FILTER_SANITIZE_STRING);
$appat = filter_var($_POST['appat'], FILTER_SANITIZE_STRING);
$correo =filter_var($_POST['correo'], FILTER_SANITIZE_EMAIL);
$apmat = filter_var($_POST['apmat'], FILTER_SANITIZE_STRING);
$tel = filter_var($_POST['tel'], FILTER_SANITIZE_STRING);
if(!empty($nombre)||!empty($correo)||!empty($tel)||!empty($appat)||!empty($apmat)){
	$comentario = "insert into registro (nombre, correo, telefono, appaterno, apmaterno) values('$nombre','$correo','$tel','$appat','$apmat');";
	$guarda_comentario = consulta($comentario);
	if($guarda_comentario == false){
		echo "Gracias por dejar tu comentario, en caso de ser necesario nuestros colaboradores se pondrán en contacto contigo";
	}
	else{
		echo "Hubo un error al intentar guardar tu comentario, intenta más tarde";
	}
}
else{
	echo "Los valores ingresados no son válidos";
}
?>
</body>
</html>
