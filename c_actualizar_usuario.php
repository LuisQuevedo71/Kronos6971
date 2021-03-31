<?php
				
				include ("../modelo/usuarios.php");
				$usuarios= new usuarios();
				
				if(isset($_POST) && !empty($_POST)){
					$cedula = $usuarios->sanitize($_POST['cedula']);
					$nombre = $usuarios->sanitize($_POST['nombre']);
					$usuario = $usuarios->sanitize($_POST['usuario']);
					$contrasena = $usuarios->sanitize($_POST['contrasena']);
					$rol = $usuarios->sanitize($_POST['rol']);
					$correo = $usuarios->sanitize($_POST['correo']);
					$res = $usuarios->update($cedula, $nombre, $usuario, $contrasena, $rol, $correo);
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
				$datos_usuario=$usuarios->single_record($id);
				require_once("../vista/actualizar_usuario.php");
?>