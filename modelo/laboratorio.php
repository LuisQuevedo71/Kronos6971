<?php

	class laboratorio extends PDO
{
		private $con;
		private $dbhost="localhost";
		private $dbuser="root";
		private $dbpass="";
		private $dbname="baes";
		function __construct(){
			$this->connect_db();
		}
		public function connect_db(){
			$this->con = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
			if(mysqli_connect_error()){
				die("Conexión a la base de datos falló " . mysqli_connect_error() . mysqli_connect_errno());
			}
		}
	private $codigo_lab;
	private $nombre;
	private $fecha;
	private $nombre_pnf;



	 function Getcodigo_lab(){
		return $this->codigo_lab;
	}


	 function Getnombre(){
		return $this->nombre;
	}
	
	 function Getfecha(){
		return $this->fecha;
	}
	
	 function Getnombre_pnf(){
		return $this->nombre_pnf;
	}
	
	
	 function Setcodigo_lab($codigo_lab){
		$this->codigo_lab=$codigo_lab;

	}
	 function Setnombre($nombre){
		$this->nombre=$nombre;

	}

	 function Setfecha($fecha){
		$this->fecha=$fecha;

	}

	 function Setnombre_pnf($nombre_pnf){
		$this->nombre_pnf=$nombre_pnf;

	}


 public function sanitize($var)
	{
  $return = mysqli_real_escape_string($this->con, $var);
  return $return;
	}


	public function create($codigo_lab,$nombre,$fecha,$nombre_pnf)
	{
		$sql = "INSERT INTO `laboratorio` (codigo_lab, nombre, fecha, nombre_pnf) VALUES ('$codigo_lab', '$nombre', '$fecha', '$nombre_pnf')";
		$res = mysqli_query($this->con, $sql);
		if($res){
	  return true;
		}else{
		return false;
 			}
	}

	public function read()
	{
		$sql = "SELECT * FROM laboratorio";
		$res = mysqli_query($this->con, $sql);
		return $res;
	}

		public function single_record($codigo_lab)
		{
			$sql = "SELECT * FROM laboratorio where codigo_lab='$codigo_lab'";
			$res = mysqli_query($this->con, $sql);
			$return = mysqli_fetch_object($res );
			return $return ;
		}
		public function update($codigo_lab,$nombre,$fecha,$nombre_pnf)
		{
			$sql = "UPDATE laboratorio SET codigo_lab='$codigo_lab', nombre='$nombre', fecha='$fecha', nombre_pnf='$nombre_pnf' WHERE codigo_lab=$codigo_lab";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}
		public function delete($codigo_lab)
		{
			$sql = "DELETE FROM laboratorio WHERE codigo_lab=$codigo_lab";
			$res = mysqli_query($this->con, $sql);
			if($res){
			return true;
			}else{
			return false;
				}		
	}

}
?>
