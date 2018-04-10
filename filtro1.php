<?php
echo $_SESSION['pag'];
if($_SESSION['pag']==1){

}
else{
	header("Location: login.php");
}
?>
