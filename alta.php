<!DOCTYPE html>
<?php include "filtro1.php" ?> 
<html>
<head>
<meta charset="UTF-8">
<title>Guarda comentario</title>
</head>
<body>
<?php
include_once("conexion.php");
var_dump($_POST);

$nombre =filter_var( $_POST['nombre'], FILTER_SANITIZE_STRING);
$appat = filter_var($_POST['appat'], FILTER_SANITIZE_STRING);

$apmat = filter_var($_POST['apmat'], FILTER_SANITIZE_STRING);

$titulo = filter_var($_POST['titulo'], FILTER_SANITIZE_STRING);
$an = $_POST['apub'];
$aut = $_POST['id_autor'];
$usuario = filter_var($_POST['usuario'], FILTER_SANITIZE_STRING);
$pass = $_POST['contrasena'];
$nac = filter_var($_POST['nacionalidad'], FILTER_SANITZE_STRING);


if(!empty($nombre)||!empty($usuario)||!empty($pass)||!empty($appat)||!empty($apmat)){
	$comentario = "insert into usuarios (nombre,  apaterno, amaterno, usuario, contraseña) values('$nombre','$appat','$apmat','$usuario','$pass');";
	$guarda_comentario = consulta($comentario);
	if($guarda_comentario == false){
		echo "<p>***Usuario registrado con exito***</p>";
	}
	else{
		echo "<p>***Hubo un error al intentar guardar el usuario***</p>";
	}
}
else{

if(!empty($titulo)||!empty($aut)||!empty($an)){
	$comentario = "insert into libros (id_autor, añopublic, titulo) values('$aut','$an','$titulo');";
	$guarda_comentario = consulta($comentario);
	if($guarda_comentario == false){
		echo "<p>***Libro registrado con exito***</p>";
	}
	else{
		echo "<p>***Hubo un error al intentar guardar el libro***</p>";
	}
}
else{

if(!empty($nombre)||!empty($nac)||!empty($appat)||!empty($apmat)){
	$comentario = "insert into autores (nombre, appaterno, apmaterno, nacionalidad) values('$nombre','$appat','$apmat','$nac');";
	$guarda_comentario = consulta($comentario);
	if($guarda_comentario == false){
		echo "<p>***Autor registrado con exito***</p>";
	}
	else{
		echo "<p>***Hubo un error al intentar guardar el autor***</p>";
	}
}
else{
	echo "Los valores ingresados no son válidos";
}}}

?>
</body>
</html>
