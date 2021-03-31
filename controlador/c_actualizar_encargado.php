<?php
				
				include ("../modelo/encargado.php");
				$encargado= new encargado();
				
				if(isset($_POST) && !empty($_POST)){
					$cod_lab = $encargado->sanitize($_POST['cod_lab']);
					$nombre = $encargado->sanitize($_POST['nombre']);
					$cod_usuario = $encargado->sanitize($_POST['cod_usuario']);
					$fecha_entrega = $encargado->sanitize($_POST['fecha_entrega']);
					$fecha_salida = $encargado->sanitize($_POST['fecha_salida']);
					$res = $encargado->update($cod_lab, $nombre, $cod_usuario, $fecha_entrega, $fecha_salida);
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
				$datos_encargado=$encargado->single_record($id);
				require_once("../vista/actualizar_encargado.php");
?>