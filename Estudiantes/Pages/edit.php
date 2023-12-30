<?php  

require_once('../../Usuarios/Modelo/Usuarios.php');
require_once('../Modelo/Estudiantes.php');
require_once('../../metodos.php');

$modeloUsuarios = new Usuarios();
$modeloUsuarios->validateSession();

$modeloMetodos = new Metodos();

$modeloEstudiantes = new Estudiantes();
$Id = $_GET['Id'];
$informacion = $modeloEstudiantes->getById($Id);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Sistema de notas</title>
	<link rel="stylesheet" type="text/css" href="../../estilos.css">
</head>
<body>
	<form method="POST" action="../Controladores/edit.php">
		<h1>Editar Estudiante</h1>
		<input type="hidden" name="Id" value="<?php echo $Id; ?>">
		<?php 
		if ($informacion != null) {
			foreach ($informacion as $info) {
		?>
		Nombre <br>
		<input type="text" name="Nombre" required="" autocomplete="off" placeholder="Nombre" value="<?php echo $info['NOMBRE']?>"><br><br>
		Apellido <br>
		<input type="text" name="Apellido" required="" autocomplete="off"  placeholder="Apellido" value="<?php echo $info['APELLIDO']?>"><br><br>
		Documento <br>
		<input type="text" name="Documento" required="" autocomplete="off"  placeholder="Documento" value="<?php echo $info['DOCUMENTO']?>"><br><br>
		Correo <br>
		<input type="email" name="Correo" required="" autocomplete="off"  placeholder="Correo" value="<?php echo $info['CORREO']?>"><br><br>
		Materia <br>
		<select name="Materia" required="">
			<option value="<?php echo $info['MATERIA']?>"><?php echo $info['MATERIA']?></option>
			<?php  
			$Materias = $modeloMetodos->getMaterias();
			if($Materias != null) {
				foreach ($Materias as $Materia) {
				?>
				<option value="<?php echo $Materia['MATERIA']; ?>"><?php echo $Materia['MATERIA']; ?></option>
				<?php 
				}
			}
			?>
		</select><br><br>
		Docente <br>
		<select name="Docente" required="">
			<option value="<?php echo $info['DOCENTE']?>"><?php echo $info['DOCENTE']?></option>
			<?php  
			$Docentes = $modeloMetodos->getDocentes();
			if ($Docentes != null) {
				foreach ($Docentes as $Docente) {
				?>
				<option value="<?php echo $Docente['NOMBRE']." ".$Docente['APELLIDO']; ?>"><?php echo $Docente['NOMBRE']." ".$Docente['APELLIDO']; ?></option>
			<?php
				}
			}
			?>
		</select><br><br>
		Promedio <br>
		<input type="number" name="Promedio" required="" autocomplete="off"  placeholder="Promedio" value="<?php echo $info['PROMEDIO']?>"><br><br>
		<?php 
			}
		}
		?>
		<input type="submit" value="Editar Estudiante">
	</form>
</body>
</html>












