<?php
				
				include ("../modelo/equipo.php");
				$equipos= new equipos();
				
				if(isset($_POST) && !empty($_POST)){
					$codigo_pc = $equipos->sanitize($_POST['codigo_pc']);
					$modelo = $equipos->sanitize($_POST['modelo']);
					$fecha_ingreso = $equipos->sanitize($_POST['fecha_ingreso']);
					$statud = $equipos->sanitize($_POST['statud']);
					$observacion = $equipos->sanitize($_POST['observacion']);
					$codigo_laboratorio = $equipos->sanitize($_POST['codigo_laboratorio']);
					$res = $equipos->update($codigo_pc, $modelo, $fecha_ingreso, $statud, $observacion, $codigo_laboratorio);
					if($res){
						$message= "Datos actualizados con éxito";
						$class="alert alert-success";
						
					}else{
						$message="No se pudieron actualizar los datos";
						$class="alert alert-danger";
					}
					
					?>
				<div class="<?php echo $class?>">
				  <?php echo $message;?>
				</div>	
					<?php
				}
				$datos_equipos=$equipos->single_record($id);
				require_once("actualizar_equipo.php");
?>