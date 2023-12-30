<?php  


require_once('../Modelo/Materias.php');

if ($_POST) {
	
	$modeloMaterias = new Materias();

	$Id = $_POST['Id'];
	$Nombre = $_POST['Nombre'];
	$modeloMaterias->update($Id, $Nombre);

} else {
	header('Location: ../../index.php');
}

?>