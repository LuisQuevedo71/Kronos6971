  <?php
				include ("../modelo/laboratorio.php");
				$laboratorio= new laboratorio();
				if(isset($_POST) && !empty($_POST)){
					$codigo_lab = $laboratorio->sanitize($_POST['codigo_lab']);
					$nombre = $laboratorio->sanitize($_POST['nombre']);
					$fecha = $laboratorio->sanitize($_POST['fecha']);
					$nombre_pnf = $laboratorio->sanitize($_POST['nombre_pnf']);
					
					$res = $laboratorio->create($codigo_lab, $nombre, $fecha, $nombre_pnf);
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
	require_once("../vista/registrar_laboratorio.php");	
?>
