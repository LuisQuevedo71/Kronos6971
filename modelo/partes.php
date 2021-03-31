<?php

	class partes extends PDO
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
		
		function Getserial(){
		return $this->serial;
	}


	 function Getcaracteristicas(){
		return $this->caracteristicas;
	}
	
	 function Gettipo(){
		return $this->tipo;
	}
	
	 function Getobservaciones(){
		return $this->observaciones;
	}
	
	 function Getstatud(){
		return $this->statud;
	}
	

	 function Getcodigo_equipo(){
		return $this->codigo_equipo;
	}
	
	 function Setserial($serial){
		$this->serial=$serial;

	}
	 function Setcaracteristicas($caracteristicas){
		$this->caracteristicas=$caracteristicas;

	}

	 function Settipo($tipo){
		$this->tipo=$tipo;

	}

	 function Setobservaciones($observaciones){
		$this->observaciones=$observaciones;

	}

	 function Setstatud($statud){
		$this->statud=$statud;

	}

	 function Setcodigo_equipo($codigo_equipo){
		$this->codigo_equipo=$codigo_equipo;

	}


 public function sanitize($var)
	{
  $return = mysqli_real_escape_string($this->con, $var);
  return $return;
	}


	public function create($serial,$caracteristicas,$tipo,$observaciones,$statud,$codigo_equipo)
	{
		$sql = "INSERT INTO `partes` (serial, caracteristicas, tipo, observaciones, statud, codigo_equipo) VALUES ('$serial', '$caracteristicas', '$tipo', '$observaciones', '$statud','$codigo_equipo')";
		$res = mysqli_query($this->con, $sql);
		if($res){
	  return true;
		}else{
		return false;
 			}
	}

	public function read()
	{
		$sql = "SELECT * FROM partes";
		$res = mysqli_query($this->con, $sql);
		return $res;
	}

		public function single_record($serial)
		{
			$sql = "SELECT * FROM partes where serial='$serial'";
			$res = mysqli_query($this->con, $sql);
			$return = mysqli_fetch_object($res );
			return $return ;
		}
		public function update($serial,$caracteristicas,$tipo,$observaciones,$statud,$codigo_equipo)
		{
			$sql = "UPDATE partes SET serial='$serial', caracteristicas='$caracteristicas', tipo='$tipo', observaciones='$observaciones', statud='$statud', codigo_equipo='$codigo_equipo' WHERE serial=$serial";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}
		public function delete($serial)
		{
			$sql = "DELETE FROM partes WHERE serial=$serial";
			$res = mysqli_query($this->con, $sql);
			if($res){
			return true;
			}else{
			return false;
				}		
	}

}
?>
