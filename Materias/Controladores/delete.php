<?php  

require_once('../Modelo/Materias.php');

if ($_POST) {
	$modeloMateria = new Materias();

	$Id = $_POST['Id'];

	$modeloMateria->delete($Id);
} else {
	header('Locaton: ../../index.php');
}


?>