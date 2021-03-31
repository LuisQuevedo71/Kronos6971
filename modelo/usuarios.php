<?php

	class usuarios extends PDO
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
		
			
	private $cedula;
	private $nombre;
	private $usuario;
	private $contrasena;
	private $rol;
	private $correo;


	 function Getcedula(){
		return $this->cedula;
	}


	 function Getnombre(){
		return $this->nombre;
	}
	
	 function Getusuario(){
		return $this->usuario;
	}
	
	 function Getcontrasena(){
		return $this->contrasena;
	}
	
	 function Getrol(){
		return $this->rol;
	}
	

	 function Getcorreo(){
		return $this->correo;
	}
	
	 function Setcedula($cedula){
		$this->cedula=$cedula;

	}
	 function Setnombre($nombre){
		$this->nombre=$nombre;

	}

	 function Setusuario($usuario){
		$this->usuario=$usuario;

	}

	 function Setcontrasena($contrasena){
		$this->contrasena=$contrasena;

	}

	 function Setrol($rol){
		$this->rol=$rol;

	}

	 function Setcorreo($correo){
		$this->correo=$correo;

	}



 public function sanitize($var)
	{
  $return = mysqli_real_escape_string($this->con, $var);
  return $return;
	}


	public function create($cedula,$nombre,$usuario,$contrasena,$rol,$correo)
	{
		$sql = "INSERT INTO `usuario` (cedula, nombre, usuario, contrasena, rol, correo) VALUES ('$cedula', '$nombre', '$usuario', '$contrasena', '$rol','$correo')";
		$res = mysqli_query($this->con, $sql);
		if($res){
	  return true;
		}else{
		return false;
 			}
	}

	public function read()
	{
		$sql = "SELECT * FROM usuario";
		$res = mysqli_query($this->con, $sql);
		return $res;
	}

		public function single_record($cedula)
		{
			$sql = "SELECT * FROM usuario where cedula='$cedula'";
			$res = mysqli_query($this->con, $sql);
			$return = mysqli_fetch_object($res );
			return $return ;
		}
		public function update($cedula,$nombre,$usuario,$contrasena,$rol,$correo)
		{
			$sql = "UPDATE usuario SET cedula='$cedula', nombre='$nombre', usuario='$usuario', contrasena='$contrasena', rol='$rol', correo='$correo' WHERE cedula=$cedula";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}
		public function delete($cedula)
		{
			$sql = "DELETE FROM usuario WHERE cedula=$cedula";
			$res = mysqli_query($this->con, $sql);
			if($res){
			return true;
			}else{
			return false;
				}		
	}

}
?>
