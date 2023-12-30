<?php  

require_once('../../Usuarios/Modelo/Usuarios.php');

$modeloUsuarios = new Usuarios();
$modeloUsuarios->validateSessionAdmin();

$Id = $_GET['Id'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Sistema de Notas</title>
	<link rel="stylesheet" type="text/css" href="../../estilos.css">
</head>
<body>
	<form method="POST" action="../Controladores/delete.php">
		<h1>Eliminar Docente</h1>
		<input type="hidden" name="Id" value="<?php echo $Id; ?>">
		<p>¿Estás seguro de que quieres eliminar este docente?</p>
		<input type="submit" value="Eliminar Docente">
	</form>
</body>
</html>