<?php  

require_once('../Modelo/Estudiantes.php');


if($_POST) {
	$ModeloEstudiantes = new Estudiantes();

	$Id = $_POST['Id'];
	$Nombre = $_POST['Nombre'];
	$Apellido = $_POST['Apellido'];
	$Documento = $_POST['Documento'];
	$Correo = $_POST['Correo'];
	$Materia = $_POST['Materia'];
	$Docente = $_POST['Docente'];
	$Promedio = $_POST['Promedio'];
	$Fecha = date('Y-m-d');

	$ModeloEstudiantes->update($Id, $Nombre, $Apellido, $Documento, $Correo, $Materia, $Docente, $Promedio, $Fecha);
	echo '<meta http-equiv="refresh" content="0;url=../Pages/index.php"';
} else {
	header('Location: ../../index.php');
}

?>