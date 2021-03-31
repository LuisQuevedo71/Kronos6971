  <?php
				include ("../modelo/partes.php");
				$partes= new partes();
				if(isset($_POST) && !empty($_POST)){
					$serial = $partes->sanitize($_POST['serial']);
					$caracteristicas = $partes->sanitize($_POST['caracteristicas']);
					$tipo = $partes->sanitize($_POST['tipo']);
					$observaciones = $partes->sanitize($_POST['observaciones']);
					$statud = $partes->sanitize($_POST['statud']);
					$codigo_equipo = $partes->sanitize($_POST['codigo_equipo']);
					
					$res = $partes->create($serial, $caracteristicas, $tipo, $observaciones, $statud, $codigo_equipo);
					if($res){
						$message= "Datos insertados con éxito";
						$class="alert alert-success";
					}else{
						$message="No se pudieron insertar los datos";
						$class="alert alert-danger";
					}
					
					?>
				<div class="<?php echo $class?>">
				  <?php echo $message;?>
				</div>	
					<?php
				}
	require_once("../vista/registrar_partes.php");	
?>
