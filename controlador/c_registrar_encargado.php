  <?php
				include ("../modelo/encargado.php");
				$encargado= new encargado();
				if(isset($_POST) && !empty($_POST)){
					$cod_lab = $encargado->sanitize($_POST['cod_lab']);
					$nombre = $encargado->sanitize($_POST['nombre']);
					$cod_usuario = $encargado->sanitize($_POST['cod_usuario']);
					$fecha_entrega = $encargado->sanitize($_POST['fecha_entrega']);
					$fecha_salida = $encargado->sanitize($_POST['fecha_salida']);
					
					
					$res = $encargado->create($cod_lab, $nombre, $cod_usuario, $fecha_entrega, $fecha_salida);
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
	require_once("../vista/registrar_encargado.php");	
?>
