<?php 
if (isset($_GET['cod_usuario'])){
	include('../modelo/encargado.php');
	$encargado = new encargado();
	$cod_usuario=intval($_GET['cod_usuario']);
	$res = $encargado->delete($cod_usuario);
	if($res){
		header('location: listar_encargado.php');
	}else{
		echo "Error al eliminar el registro";
	}
}
?>