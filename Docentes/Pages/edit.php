<?php  

require_once('../../Usuarios/Modelo/Usuarios.php');
require_once('../Modelo/Docentes.php');

$modeloUsuarios = new Usuarios();
$modeloUsuarios->validateSessionAdmin();

$modeloDocentes = new Docentes();

$Id = $_GET['Id'];

$informacion = $modeloDocentes->getById($Id);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Sistema de Notas</title>
	<link rel="stylesheet" type="text/css" href="../../estilos.css">
</head>
<body>
	<form method="POST" action="../Controladores/edit.php">
		<h1>Editar Docente</h1>
		<input type="hidden" name="Id" value="<?php echo $Id; ?>">
		<?php  
		if ($informacion != null) {
			foreach ($informacion as $info) {
		?>
		Nombre <br>
		<input type="text" name="Nombre" required="" autocomplete="off" placeholder="Nombre" value="<?php echo $info['NOMBRE']; ?>"><br><br>
		Apellido <br>
		<input type="text" name="Apellido" required="" autocomplete="off" placeholder="Apellido" value="<?php echo $info['APELLIDO']; ?>"><br><br>
		Usuario <br>
		<input type="text" name="Usuario" required="" autocomplete="off" placeholder="Usuario" value="<?php echo $info['USUARIO']; ?>"><br><br>
		Password <br>
		<input type="password" name="Password" required="" autocomplete="off" placeholder="Password" value="<?php echo $info['PASSWORD']; ?>"><br><br>
		Estado <br>
		<select name="Estado" required="">
			<option value="<?php echo $info['ESTADO']; ?>"><?php echo $info['ESTADO']; ?></option>
			<option value="Activo">Activo</option>
			<option value="Inactivo">Inactivo</option>
		</select><br><br>
		<?php  
			}
		}
		?>
		<input type="submit" value="Editar Docente">
	</form>
</body>
</html>