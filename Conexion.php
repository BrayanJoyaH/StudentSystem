<?php  

class Conexion {

	protected $db;
	private $drive = "mysql";
	private $host = "localhost";
	private $dbname = "school";
	private $usuario = "root";
	private $contraseña = "";

	public function __construct() {
		try {
			$db = new PDO("{$this->drive}:host={$this->host};dbname={$this->dbname}", $this->usuario, $this->contraseña);
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $db;
			
		} catch (PDOException $e) {
			echo "Ha surgido algún error: Detalle: ".$e->getMessage();
			die();
		}
	}

}