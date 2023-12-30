<?php  

require_once('../../Usuarios/Modelo/Usuarios.php');

$modeloUsuarios = new Usuarios();
$modeloUsuarios->validateSessionAdmin();


?>
<!DOCTYPE html>
<html>
<head>
	<title>Sistema de Notas</title>
	<link rel="stylesheet" type="text/css" href="../../estilos.css">
</head>
<body>
	<form method="POST" action="../Controladores/add.php">
		<h1>Registrar Materia</h1>
		Nombre <br>
		<input type="text" name="Nombre" required="" autocomplete="off" placeholder="Materia"><br><br>
		<input type="submit" value="Registrar Materia">
	</form>
</body>
</html>