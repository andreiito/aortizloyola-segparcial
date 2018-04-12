<!DOCTYPE html>
 
<?php 
$_SESSION['pag']=1;
include "filtro1.php";
?>
<html>
<head>
<meta charset="UTF-8">
<title>Alta</title>
</head>
<body>
<?php
include_once("conexion.php");
var_dump($_POST);


if(isset($_POST['usuario'])){
	if(!empty($nombre)||!empty($usuario)||!empty($pass)||!empty($appat)||!empty($apmat)){
$nombre =filter_var( $_POST['nombre'], FILTER_SANITIZE_STRING);
$appat = filter_var($_POST['appat'], FILTER_SANITIZE_STRING);
$apmat = filter_var($_POST['apmat'], FILTER_SANITIZE_STRING);
$usuario = filter_var($_POST['usuario'], FILTER_SANITIZE_STRING);
$pass = $_POST['contrasena'];
	$comentario = "insert into usuarios (nombre,  apaterno, amaterno, usuario, contraseña) values('$nombre','$appat','$apmat','$usuario','$pass');";
	$guarda_comentario = consulta($comentario);
	if($guarda_comentario == false){
		echo "<p>***Usuario registrado con exito***</p>";
	}
	else{
		echo "<p>***Hubo un error al intentar guardar el usuario***</p>";
	}
}}

if(isset($_POST['titulo'])){
	if(!empty($titulo)||!empty($aut)||!empty($an)){
$titulo = filter_var($_POST['titulo'], FILTER_SANITIZE_STRING);
$an = $_POST['apub'];
$aut = $_POST['id_autor'];
	$comentario = "insert into libros (id_autor, añopublic, titulo) values('$aut','$an','$titulo');";
	$guarda_comentario = consulta($comentario);
	if($guarda_comentario == false){
		echo "<p>***Libro registrado con exito***</p>";
	}
	else{
		echo "<p>***Hubo un error al intentar guardar el libro***</p>";
	}
}}
if(isset($_POST['nacionalidad'])){
if(!empty($nombre)||!empty($nac)||!empty($appat)||!empty($apmat)){
$nombre =filter_var( $_POST['nombre'], FILTER_SANITIZE_STRING);
$appat = filter_var($_POST['appat'], FILTER_SANITIZE_STRING);
$apmat = filter_var($_POST['apmat'], FILTER_SANITIZE_STRING);
$nac = filter_var($_POST['nacionalidad'], FILTER_SANITZE_STRING);
	$comentario = "insert into autores (nombre, appaterno, apmaterno, nacionalidad) values('$nombre','$appat','$apmat','$nac');";
	$guarda_comentario = consulta($comentario);
	if($guarda_comentario == false){
		echo "<p>***Autor registrado con exito***</p>";
	}
	else{
		echo "<p>***Hubo un error al intentar guardar el autor***</p>";
	}
}}

?>
</body>
</html>
