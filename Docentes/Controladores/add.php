<?php  

require_once('../Modelo/Docentes.php');

if ($_POST) {
	$modeloDocentes = new Docentes();

	$Nombre = $_POST['Nombre'];
	$Apellido = $_POST['Apellido'];
	$Usuario = $_POST['Usuario'];
	$Password = $_POST['Password'];

	$modeloDocentes->add($Nombre, $Apellido, $Usuario, $Password);
} else {
	header('Location: ../../index.php');
}


?>