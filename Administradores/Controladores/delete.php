<?php  

require_once('../Modelo/Administradores.php');

if ($_POST) {
	$modeloAdministrador = new Administradores();

	$Id = $_POST['Id'];

	$modeloAdministrador->delete($Id);
} else {
	header('Location: ../../index.php');
}


?>