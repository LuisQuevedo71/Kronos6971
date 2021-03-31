<?php

	class encargado extends PDO
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

		private $cod_lab;
	private $nombre;
	private $cod_usuario;
	private $fecha_entrega;
	private $fecha_salida;

	

	 function Getcod_lab(){
		return $this->cod_lab;
	}


	 function Getnombre(){
		return $this->nombre;
	}
	
	 function Getcod_usuario(){
		return $this->cod_usuario;
	}
	
	 function Getfecha_entrega(){
		return $this->fecha_entrega;
	}
	
	 function Getfecha_salida(){
		return $this->fecha_salida;
	}

	 function Setcod_lab($cod_lab){
		$this->cod_lab=$cod_lab;

	}
	 function Setnombre($nombre){
		$this->nombre=$nombre;

	}

	 function Setcod_usuario($cod_usuario){
		$this->cod_usuario=$cod_usuario;

	}

	 function Setfecha_entrega($fecha_entrega){
		$this->fecha_entrega=$fecha_entrega;

	}

	 function Setfecha_salida($fecha_salida){
		$this->fecha_salida=$fecha_salida;

	}



 public function sanitize($var)
	{
  $return = mysqli_real_escape_string($this->con, $var);
  return $return;
	}


	public function create($cod_lab,$nombre,$cod_usuario,$fecha_entrega,$fecha_salida)
	{
		$sql = "INSERT INTO `encargado_lab` (cod_lab, nombre, cod_usuario, fecha_entrega, fecha_salida) VALUES ('$cod_lab', '$nombre', '$cod_usuario', '$fecha_entrega', '$fecha_salida')";
		$res = mysqli_query($this->con, $sql);
		if($res){
	  return true;
		}else{
		return false;
 			}
	}

	public function read()
	{
		$sql = "SELECT * FROM encargado_lab";
		$res = mysqli_query($this->con, $sql);
		return $res;
	}

		public function single_record($cod_lab)
		{
			$sql = "SELECT * FROM encargado_lab where cod_lab='$cod_lab'";
			$res = mysqli_query($this->con, $sql);
			$return = mysqli_fetch_object($res );
			return $return ;
		}
		public function update($cod_lab,$nombre,$cod_usuario,$fecha_entrega,$fecha_salida)
		{
			$sql = "UPDATE encargado_lab SET cod_lab='$cod_lab', nombre='$nombre', cod_usuario='$cod_usuario', fecha_entrega='$fecha_entrega', fecha_salida='$fecha_salida' WHERE cod_usuario=$cod_usuario";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}
		public function delete($cod_usuario)
		{
			$sql = "DELETE FROM encargado_lab WHERE cod_usuario=$cod_usuario";
			$res = mysqli_query($this->con, $sql);
			if($res){
			return true;
			}else{
			return false;
				}		
	}

}
?>
