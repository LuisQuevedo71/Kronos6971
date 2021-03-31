<?php 
if (isset($_GET['codigo_lab'])){
	include('../modelo/laboratorio.php');
	$laboratorio = new laboratorio();
	$codigo_lab=intval($_GET['codigo_lab']);
	$res = $laboratorio->delete($codigo_lab);
	if($res){
		header('location: listar_laboratorio.php');
	}else{
		echo "Error al eliminar el registro";
	}
}
?>