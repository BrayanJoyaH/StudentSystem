<?php  

require_once('../Modelo/Docentes.php');

if ($_POST) {
	$modeloDocentes = new Docentes();

	$Id = $_POST['Id'];

	$modeloDocentes->delete($Id);
} else {
	header('Location: ../../index.php');
}


?>