<?php  

require_once('../Modelo/Materias.php');

if ($_POST) {
	$modeloMaterias = new Materias();

	$Nombre = $_POST['Nombre'];

	$modeloMaterias->add($Nombre);

} else {
	header('Location: ../../index.php');
}

?>