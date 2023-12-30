<?php  

require_once('../Modelo/Estudiantes.php');

if($_POST) {
	$ModeloEstudiantes = new Estudiantes();

	$Id = $_POST['Id'];

	$ModeloEstudiantes->delete($Id);
	echo '<meta http-equiv="refresh" content="0;url=../Pages/index.php"';
} else {
	header('Location: ../../index.php');
}

?>