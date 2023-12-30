<?php  

require_once('../../Usuarios/Modelo/Usuarios.php');
require_once('../Modelo/Docentes.php');

$modeloUsuarios = new Usuarios();
$modeloUsuarios->validateSessionAdmin();

$modeloDocentes = new Docentes();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Sistema de Notas</title>
	<link rel="stylesheet" type="text/css" href="../../estilos.css">
	<script src="https://kit.fontawesome.com/776212aa00.js" crossorigin="anonymous"></script>
</head>
<body>
	<nav class="nav">
		<ul class="nav__ul">
			<li class="nav__li"><i class="fas fa-user-shield"></i><a href="../../Administradores/Pages/index.php">Administradores</a></li>
			<li class="nav__li"><i class="fas fa-chalkboard-teacher"></i><a href="#">Docentes</a></li>
			<li class="nav__li"><i class="fas fa-book"></i><a href="../../Materias/Pages/index.php">Materias</a></li>
			<li class="nav__li"><i class="fas fa-user-graduate"></i><a href="../../Estudiantes/Pages/index.php">Estudiantes</a></li>
			<li class="nav__li"><i class="fas fa-sign-out-alt"></i><a href="../../Usuarios/Controladores/exit.php">Salir</a></li>
		</ul>
		<ul class="nav_responsive-ul">
			<div class="nav__responsive-button fas fa-bars"></div>
			<div class="nav__li-container">
				<li class="nav_responsive-li"><i class="fas fa-user-shield"></i></i><a href="../../Administradores/Pages/index.php">Administradores</a></li>
				<li class="nav_responsive-li"><i class="fas fa-chalkboard-teacher"></i><a href="#">Docentes</a></li>
				<li class="nav_responsive-li"><i class="fas fa-book"></i><a href="../../Materias/Pages/index.php">Materias</a></li>
				<li class="nav_responsive-li"><i class="fas fa-user-graduate"></i><a href="../../Estudiantes/Pages/index.php">Estudiantes</a></li>
				<li class="nav_responsive-li"><i class="fas fa-sign-out-alt"></i><a href="../../Usuarios/Controladores/exit.php">Salir</a></li>
			</div>
		</ul>
	</nav>
	<h2><?php echo $modeloUsuarios->getPerfil()." ".$modeloUsuarios->getNombre(); ?></h2>
	<a href="add.php" title="agregar" class="add">Registrar Docente</a><br><br>
	<table border="1">
		<tr>
			<th>Id</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Usuario</th>
			<th>Perfil</th>
			<th>Estado</th>
			<th>Aciones</th>
		</tr>
		<?php  
		$docentes = $modeloDocentes->get();
		if ($docentes != null) {
			foreach ($docentes as $docente) {
		?>
		<tr>
			<td><?php echo $docente['ID_USUARIO']; ?></td>
			<td><?php echo $docente['NOMBRE']; ?></td>
			<td><?php echo $docente['APELLIDO']; ?></td>
			<td><?php echo $docente['USUARIO']; ?></td>
			<td><?php echo $docente['PERFIL']; ?></td>
			<td><?php echo $docente['ESTADO']; ?></td>
			<td>
				<a href="edit.php?Id=<?php echo $docente['ID_USUARIO']; ?>" title="editar">Editar</a>
				<a href="delete.php?Id=<?php echo $docente['ID_USUARIO']; ?>" title="eliminar">Eliminar</a>
			</td>
		</tr>
		<?php  
			}
		}
		?>
	</table>
</body>
</html>