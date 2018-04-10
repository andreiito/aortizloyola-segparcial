<?php
session_start();
if($_SESSION['pag']==1 && $_POST['usuario']!=NULL){
	$nombre = $_POST['usuario'];
	echo "Hola ".$nombre;
}
else{
	header("Location: login.php");
}
?>
