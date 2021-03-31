<?php 
if (isset($_GET['codigo_pc'])){
	include('../modelo/equipo.php');
	$equipos = new equipos();
	$codigo_pc=intval($_GET['codigo_pc']);
	$res = $equipos->delete($codigo_pc);
	if($res){
		header('location: listar_equipo.php');
	}else{
		echo "Error al eliminar el registro";
	}
}
?>