<?php  

require_once('../Modelo/Docentes.php');

if ($_POST) {
	$modeloDocentes = new Docentes();

	$Id = $_POST['Id'];
	$Nombre = $_POST['Nombre'];
	$Apellido = $_POST['Apellido'];
	$Usuario = $_POST['Usuario'];
	$Password = $_POST['Password'];
	$Estado = $_POST['Estado'];

	$modeloDocentes->update($Id, $Nombre, $Apellido, $Usuario, $Password, $Estado);
} else {
	header('Location: ../../index.php');
}



?>