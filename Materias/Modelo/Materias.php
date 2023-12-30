<?php  

require_once('../../Conexion.php');

class Materias extends Conexion {
	
	public function __construct() {
		$this->db = parent::__construct();
	}

	public function add($Nombre) {
		$statement = $this->db->prepare("INSERT INTO materia (MATERIA) VALUES (:Nombre)");
		$statement->bindParam(":Nombre",$Nombre);
		if ($statement->execute()) {
			header("Location: ../Pages/index.php");
		} else {
			header("Location: ../Pages/add.php");
		}
	}

	public function get() {
		$rows = null;
		$statement = $this->db->prepare("SELECT * FROM materia");
		$statement->execute();
		while ($result = $statement->fetch()) {
			$rows[] = $result;
		}
		return $rows;
	}

	public function getById($Id) {
		$rows = null;
		$statement = $this->db->prepare("SELECT * FROM materia WHERE ID_MATERIA = :Id");
		$statement->bindParam(":Id",$Id);
		$statement->execute();
		while ($result = $statement->fetch()) {
			$rows[] = $result;
		}
		return $rows;
	}

	public function update($Id, $Nombre) {
		$statement = $this->db->prepare("UPDATE materia SET MATERIA = :Nombre WHERE ID_MATERIA = :Id");
		$statement->bindParam(":Nombre", $Nombre);
		$statement->bindParam(":Id", $Id);
		if ($statement->execute()) {
			header("Location: ../Pages/index.php");
		} else {
			header("Location: ../Pages/edit.php");
		}
	}

	public function delete($Id) {
		$statement = $this->db->prepare("DELETE FROM materia WHERE ID_MATERIA = :Id");
		$statement->bindParam(":Id",$Id);
		if ($statement->execute()) {
			header("Location: ../Pages/index.php");
		} else {
			header("Location: ../Pages/delete.php");
		}
	}
}

?>