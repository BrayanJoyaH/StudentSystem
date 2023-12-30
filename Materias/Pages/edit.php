<?php  

require_once('../../Usuarios/Modelo/Usuarios.php');
require_once('../Modelo/Materias.php');

$modeloUsuarios = new Usuarios();
$modeloUsuarios->validateSessionAdmin();

$modeloMateria = new Materias();
$Id = $_GET['Id'];
$informacion = $modeloMateria->getById($Id);


?>
<!DOCTYPE html>
<html>
<head>
	<title>Sistema de Notas</title>
	<link rel="stylesheet" type="text/css" href="../../estilos.css">
</head>
<body>
	<form method="POST" action="../Controladores/edit.php">
		<h1>Editar Materia</h1>
		<input type="hidden" name="Id" value="<?php echo $Id; ?>">
		<?php  
		if ($informacion != null) {
			foreach ($informacion as $info) {
		?>
		Nombre <br>
		<input type="text" name="Nombre" required="" autocomplete="off" placeholder="Materia" value="<?php echo $info['MATERIA']?>"><br><br>
		<?php 				
			}
		}
		?>
		<input type="submit" value="Editar Materia">
	</form>
</body>
</html>