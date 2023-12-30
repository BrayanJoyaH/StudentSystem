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
		<h1>Registrar Administrador</h1>
		Nombre <br>
		<input type="text" name="Nombre" required="" autocomplete="off" placeholder="Nombre"><br><br>
		Apellido <br>
		<input type="text" name="Apellido" required="" autocomplete="off" placeholder="Apellido"><br><br>
		Usuario <br>
		<input type="text" name="Usuario" required="" autocomplete="off" placeholder="Usuario"><br><br>
		Password <br>
		<input type="password" name="Password" required="" autocomplete="off" placeholder="Password"><br><br>	
		<input type="submit" value="Registrar administador">
	</form>
</body>
</html>