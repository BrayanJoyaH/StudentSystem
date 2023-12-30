<?php  

require_once('../../Usuarios/Modelo/Usuarios.php');
require_once('../Modelo/Estudiantes.php');

$modeloUsuarios = new Usuarios();
$modeloUsuarios->validateSession();

$modeloEstudiantes = new Estudiantes();

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Sistema de notas</title>
		<link rel="stylesheet" type="text/css" href="../../estilos.css">
		<script src="https://kit.fontawesome.com/776212aa00.js" crossorigin="anonymous"></script>
	</head>
	<body>
		<?php 
		if ($modeloUsuarios->getPerfil() == 'Docente') {
		?>
		<nav class="nav">
			<ul class="nav__ul">
				<li class="nav__li"><i class="fas fa-user-graduate"></i><a href="#">Estudiantes</a></li>
				<li class="nav__li"><i class="fas fa-sign-out-alt"></i><a href="../../Usuarios/Controladores/exit.php">Salir</a></li>
			</ul>
			<ul class="nav_responsive-ul">
				<div class="nav__responsive-button fas fa-bars"></div>
				<div class="nav__li-container">
					<li class="nav_responsive-li"><i class="fas fa-user-graduate"></i><a href="#">Estudiantes</a></li>
					<li class="nav_responsive-li"><i class="fas fa-sign-out-alt"></i><a href="../../Usuarios/Controladores/exit.php">Salir</a></li>
				</div>
			</ul>
		</nav>
		<?php 
		} else {
		?>
		<nav class="nav">
			<ul class="nav__ul">
				<li class="nav__li"><i class="fas fa-user-shield"></i><a href="../../Administradores/Pages/index.php">Administradores</a></li>
				<li class="nav__li"><i class="fas fa-chalkboard-teacher"></i><a href="../../Docentes/Pages/index.php">Docentes</a></li>
				<li class="nav__li"><i class="fas fa-book"></i><a href="../../Materias/Pages/index.php">Materias</a></li>
				<li class="nav__li"><i class="fas fa-user-graduate"></i><a href="#">Estudiantes</a></li>
				<li class="nav__li"><i class="fas fa-sign-out-alt"></i><a href="../../Usuarios/Controladores/exit.php">Salir</a></li>
			</ul>
			<ul class="nav_responsive-ul">
				<div class="nav__responsive-button fas fa-bars"></div>
				<div class="nav__li-container">
					<li class="nav_responsive-li"><i class="fas fa-user-shield"></i><a href="../../Administradores/Pages/index.php">Administradores</a></li>
					<li class="nav_responsive-li"><i class="fas fa-chalkboard-teacher"></i><a href="../../Docentes/Pages/index.php">Docentes</a></li>
					<li class="nav_responsive-li"><i class="fas fa-book"></i><a href="../../Materias/Pages/index.php">Materias</a></li>
					<li class="nav_responsive-li"><i class="fas fa-user-graduate"></i><a href="#">Estudiantes</a></li>
					<li class="nav_responsive-li"><i class="fas fa-sign-out-alt"></i><a href="../../Usuarios/Controladores/exit.php">Salir</a></li>
				</div>
			</ul>
		</nav>
		<?php
		}
		?>
		<h2><?php echo $modeloUsuarios->getPerfil()." ".$modeloUsuarios->getNombre(); ?></h2>
		<input type="search" name="Search" placeholder="buscar"><br><br>
		<a href="add.php" title="agrear" class="add">Registrar Estudiante</a><br><br>
		<table border="1">
			<tr>
				<th>Id</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Documento</th>
				<th>Correo</th>
				<th>Materias</th>
				<th>Docentes</th>
				<th>Promedio</th>
				<th>Fecha de registro</th>
				<th>Acciones</th>

			</tr>
			<?php 
			$Estudiantes = $modeloEstudiantes->get();
			if ($Estudiantes != null) {
				foreach ($Estudiantes as $Estudiante) {
			?>
			<tr>
				<td><?php echo $Estudiante['ID_ESTUDIANTES']; ?></td>
				<td><?php echo $Estudiante['NOMBRE']; ?></td>
				<td><?php echo $Estudiante['APELLIDO']; ?></td>
				<td><?php echo $Estudiante['DOCUMENTO']; ?></td>
				<td><?php echo $Estudiante['CORREO']; ?></td>
				<td><?php echo $Estudiante['MATERIA']; ?></td>
				<td><?php echo $Estudiante['DOCENTE']; ?></td>
				<td><?php echo $Estudiante['PROMEDIO']; ?></td>
				<td><?php echo $Estudiante['FECHA_REGISTRO']; ?></td>
				<td>
					<!--(edit.php)-Parte a donde nos envia pero usamos (?) como forma de enviar un GET a edit.php y utilizamos el id del estudiante de la fila donde se presione edit o delete ya que es como si le estuviesemos guardando el id en e la etiqueta a-->
					<a href="edit.php?Id=<?php echo $Estudiante['ID_ESTUDIANTES']; ?>" title="editar">Editar</a>
					<a href="delete.php?Id=<?php echo $Estudiante['ID_ESTUDIANTES']; ?>" title="eliminar" >Eliminar</a>
				</td>
			</tr>
			<?php  
				}
			}
			?>
		</table>
	</body>
</html>









