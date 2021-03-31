<?php

	class equipos extends PDO
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
		
			
	private $codigo_pc;
	private $modelo;
	private $fecha_ingreso;
	private $statud;
	private $observacion;
	private $codigo_laboratorio;

	

	 function Getcodigo_pc(){
		return $this->codigo_pc;
	}


	 function Getmodelo(){
		return $this->modelo;
	}
	
	 function Getfecha_ingreso(){
		return $this->fecha_ingreso;
	}
	
	 function Getstatud(){
		return $this->statud;
	}
	
	 function Getobservacion(){
		return $this->observacion;
	}
	

	 function Getcodigo_laboratorio(){
		return $this->codigo_laboratorio;
	}
	
	 function Setcodigo_pc($codigo_pc){
		$this->codigo_pc=$codigo_pc;

	}
	 function Setmodelo($modelo){
		$this->modelo=$modelo;

	}

	 function Setfecha_ingreso($fecha_ingreso){
		$this->fecha_ingreso=$fecha_ingreso;

	}

	 function Setstatud($statud){
		$this->statud=$statud;

	}

	 function Setobservacion($observacion){
		$this->observacion=$observacion;

	}

	 function Setcodigo_laboratorio($codigo_laboratorio){
		$this->codigo_laboratorio=$codigo_laboratorio;

	}

	 public function sanitize($var)
	{
  $return = mysqli_real_escape_string($this->con, $var);
  return $return;
	}


	public function create($codigo_pc,$modelo,$fecha_ingreso,$statud,$observacion,$codigo_laboratorio)
	{
		$sql = "INSERT INTO `equipo` (codigo_pc, modelo, fecha_ingreso, statud, observacion, codigo_laboratorio) VALUES ('$codigo_pc', '$modelo', '$fecha_ingreso', '$statud', '$observacion','$codigo_laboratorio')";
		$res = mysqli_query($this->con, $sql);
		if($res){
	  return true;
		}else{
		return false;
 			}
	}

	public function read()
	{
		$sql = "SELECT * FROM equipo";
		$res = mysqli_query($this->con, $sql);
		return $res;
	}

		public function single_record($codigo_pc)
		{
			$sql = "SELECT * FROM equipo where codigo_pc='$codigo_pc'";
			$res = mysqli_query($this->con, $sql);
			$return = mysqli_fetch_object($res );
			return $return ;
		}
		public function update($codigo_pc,$modelo,$fecha_ingreso,$statud,$observacion,$codigo_laboratorio)
		{
			$sql = "UPDATE equipo SET codigo_pc='$codigo_pc', modelo='$modelo', fecha_ingreso='$fecha_ingreso', statud='$statud', observacion='$observacion', codigo_laboratorio='$codigo_laboratorio' WHERE codigo_pc=$codigo_pc";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}
		public function delete($codigo_pc)
		{
			$sql = "DELETE FROM equipo WHERE codigo_pc=$codigo_pc";
			$res = mysqli_query($this->con, $sql);
			if($res){
			return true;
			}else{
			return false;
				}		
	}

}
?>
