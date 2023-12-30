<!DOCTYPE html>
<html>
	<head>
		<title>Sistema de notas</title>
		<link rel="icon" href="images/logoclorido_foto_con_WBj.ico">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="estilos.css">
		<script src="https://kit.fontawesome.com/776212aa00.js" crossorigin="anonymous"></script>
	</head>
	<body>
		<form method="POST" action="Usuarios/Controladores/login.php">
			<h1>Inicio de Sesión</h1>
			Usuario <br>
			<input type="text" name="Usuario" required="" autocomplete="off" placeholder="Usuario"><br><br>
			Contraseña <br>
			<input type="password" name="Contrasena" required="" autocomplete="off" placeholder="Contraseña"> <br><br>
			<input type="submit" value="Inicia Sesión">
		</form>
		<footer>
			<h3>©Copyright - Todos los derechos reservados Elipson WBJ</h3>
		</footer>
	</body>
</html>