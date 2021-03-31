<?php
		 	
			$usuario = $_GET["usu"];
			
			$password = $_GET["con"];
        	
            require ("datos_conexion.php");
            
            $conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
			
			if(mysqli_connect_errno()){
				echo "Fallo al conectar con la BBDD";
				exit();
			}
			
			mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
			
			mysqli_set_charset($conexion, "utf8");
            
           
			
			$consulta="SELECT usuario, contrasena, rol FROM usuario WHERE usuario = ? AND contrasena= ?";  
			
			echo "<br><br>";        
			
           // $resultados=mysqli_query($conexion, $consulta);
		   
		   $resultados=mysqli_prepare($conexion,$consulta);
		   
		   $ok=mysqli_stmt_bind_param($resultados, 'ss', $usuario, $password);
		   	   
		   $ok=mysqli_stmt_execute($resultados);
		   
		   if($ok==false){
			   
			   echo "Error en la consulta";
			   
		   } else{
			
				$ok=mysqli_stmt_bind_result($resultados,$usuario,$password, $rol);   
				
				 
			   
		   }
		   
		   
		   while(mysqli_stmt_fetch($resultados)){
			
				echo "Hola " . $usuario . "<br>";
				
				echo "Tu perfil es " . $rol. "<br>";   
			   
		   }
		   
		   if($rol=="Administrador"){
			   
				require_once("principal.php");   
			   
			   
		   }elseif($rol=="Usuario"){


		   	require_once("usu_principal.php");  



		   }else{
			   
			echo "Los Datos Ingresados no Existen";
			
			   
		   }
            
        
		   
		   
			mysqli_stmt_close($resultados);
			mysqli_close($conexion);
            
        ?>
