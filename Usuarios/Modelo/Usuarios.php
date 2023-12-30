<?php  

require_once("../../Conexion.php");
session_start();

class Usuarios extends Conexion {
	
	public function __construct() {
		$this->db = parent::__construct();
	}

	public function login($Usuario, $Password) {
		$rows = null;
		$statement = $this->db->prepare("SELECT * FROM usuarios WHERE USUARIO = :Usuario AND PASSWORD = :Password");
		$statement->bindParam(':Usuario',$Usuario);
		$statement->bindParam(':Password',$Password);
		$statement->execute();
		// aseguramos que solo haya un usuario con ese User y password con el metodo rowCount(contar filas->afectadas por la sentencia sql)
		if ($statement->rowCount() == 1) {
			$result = $statement->fetch();//En caso de que se cumpla el rowCount traemos todos los datos del usuario con fetch en el array $result.
			$_SESSION['NOMBRE'] = $result["NOMBRE"]." ".$result["APELLIDO"];
			$_SESSION['ID'] = $result["ID_USUARIO"];
			$_SESSION['PERFIL'] = $result["PERFIL"];
			return true;
		}
		return false;
	}

	public function getNombre() {
		return $_SESSION['NOMBRE'];
	}

	public function getId() {
		return $_SESSION['ID'];
	}

	public function getPerfil() {
		return $_SESSION['PERFIL'];
	}

	public function validateSession() {
		// validar que exise la sesión
		if (isset($_SESSION['ID'])) {
			if ($_SESSION['ID'] == null) {
				header('Location: ../../index.php');
			}
		} else {
			echo "no tiene permiso para entrar";
			echo '<meta http-equiv="refresh" content="0; url=../../index.php">';
			die();	
		}
	}

	public function validateSessionAdmin() {

		if (isset($_SESSION['ID'])) {
			if ($_SESSION['ID'] != null) {
				if ($_SESSION['PERFIL'] == 'Docente') {
					header('Location: ../../Estudiantes/Pages/index.php');
				} 
			} else {
				header('Location: ../../index.php');
			}
		} else {
			echo "no tiene permiso para entrar";
			echo '<meta http-equiv="refresh" content="0; url=../../index.php">';
			die();
		}	
	}

	public function exit() {
		$_SESSION['ID'] = null;
		$_SESSION['NOMBRE'] = null;
		$_SESSION['Perfil'] = null;
		session_destroy();
		header('Location: ../../index.php');
	}
}

?>


