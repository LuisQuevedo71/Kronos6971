<?php 
if (isset($_GET['cedula'])){
	include('../modelo/usuarios.php');
	$usuario = new usuarios();
	$cedula=intval($_GET['cedula']);
	$res = $usuario->delete($cedula);
	if($res){
		header('location: listar_usuario.php');
	}else{
		echo "Error al eliminar el registro";
	}
}
?>