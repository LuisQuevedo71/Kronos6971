<?php 
if (isset($_GET['serial'])){
	include('../modelo/partes.php');
	$partes = new partes();
	$serial=intval($_GET['serial']);
	$res = $partes->delete($serial);
	if($res){
		header('location: listar_partes.php');
	}else{
		echo "Error al eliminar el registro";
	}
}
?>