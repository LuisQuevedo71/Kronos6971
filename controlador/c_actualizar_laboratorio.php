<?php
				
				include ("../modelo/laboratorio.php");
				$laboratorio= new laboratorio();
				
				if(isset($_POST) && !empty($_POST)){
					$codigo_lab = $laboratorio->sanitize($_POST['codigo_lab']);
					$nombre = $laboratorio->sanitize($_POST['nombre']);
					$fecha = $laboratorio->sanitize($_POST['fecha']);
					$nombre_pnf = $laboratorio->sanitize($_POST['nombre_pnf']);
					$res = $laboratorio->update($codigo_lab, $nombre, $fecha, $nombre_pnf);
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
				$datos_laboratorio=$laboratorio->single_record($id);
				require_once("actualizar_laboratorio.php");
?>