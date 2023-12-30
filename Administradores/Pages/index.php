<?php  

require_once('../../Usuarios/Modelo/Usuarios.php');
require_once('../Modelo/Administradores.php');

$modeloUsuarios = new Usuarios();
$modeloUsuarios->validateSessionAdmin();

$modeloAdministrador = new Administradores();
$informacion = $modeloAdministrador->get();

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
			<li class="nav__li"><i class="fas fa-user-shield"></i><a href="#">Administradores</a></li>
			<li class="nav__li"><i class="fas fa-chalkboard-teacher"></i><a href="../../Docentes/Pages/index.php">Docentes</a></li>
			<li class="nav__li"><i class="fas fa-book"></i><a href="../../Materias/Pages/index.php">Materias</a></li>
			<li class="nav__li"><i class="fas fa-user-graduate"></i><a href="../../Estudiantes/Pages/index.php">Estudiantes</a></li>
			<li class="nav__li"><i class="fas fa-sign-out-alt"></i><a href="../../Usuarios/Controladores/exit.php">Salir</a></li>
		</ul>
		<ul class="nav_responsive-ul">
			<div class="nav__responsive-button fas fa-bars"></div>
			<div class="nav__li-container">
				<li class="nav_responsive-li"><i class="fas fa-user-shield"></i><a href="#">Administradores</a></li>
				<li class="nav_responsive-li"><i class="fas fa-chalkboard-teacher"></i><a href="../../Docentes/Pages/index.php">Docentes</a></li>
				<li class="nav_responsive-li"><i class="fas fa-book"></i><a href="../../Materias/Pages/index.php">Materias</a></li>
				<li class="nav_responsive-li"><i class="fas fa-user-graduate"></i><a href="../../Estudiantes/Pages/index.php">Estudiantes</a></li>
				<li class="nav_responsive-li"><i class="fas fa-sign-out-alt"></i><a href="../../Usuarios/Controladores/exit.php">Salir</a></li>
			</div>
		</ul>
	</nav>
	<h2><?php echo $modeloUsuarios->getPerfil()." ".$modeloUsuarios->getNombre(); ?></h2>
	<a href="add.php" title="agregar" target="_BLANK" class="add">Registrar Administrador</a><br><br>
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
		if ($informacion != null) {
			foreach ($informacion as $info) {
		?>
		<tr>
			<td><?php echo $info['ID_USUARIO']; ?></td>
			<td><?php echo $info['NOMBRE']; ?></td>
			<td><?php echo $info['APELLIDO']; ?></td>
			<td><?php echo $info['USUARIO']; ?></td>
			<td><?php echo $info['PERFIL']; ?></td>
			<td><?php echo $info['ESTADO']; ?></td>
			<td>
				<a href="edit.php?Id=<?php echo $info['ID_USUARIO']; ?>" target="_BLANK" title="editar">Editar</a>
				<a href="delete.php?Id=<?php echo $info['ID_USUARIO']; ?>" title="eliminar" target="_BLANK">Eliminar</a>
			</td>
		</tr>
		<?php  
			}
		}
		?>
	</table>
</body>
</html>