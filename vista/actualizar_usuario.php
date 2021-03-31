<?php
	if (isset($_GET['cedula'])){
		$id=intval($_GET['cedula']);
	} else {
		header("location:listar_usuario.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kronos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
 integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
 <link rel="stylesheet" href="css/registrar_usuario.css">
 <!--Hojas de Estilo -->    
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">    
 <!--Hojas de Estilo -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Kronos</title>


</head>
<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                	<ul class="nav">
                    
                    <div class="dropdown nav-item" >
                    <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuBoton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Usuarios
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuBoton">
                        <a href="?pagina=listar_usuario" class="dropdown-item">Ver listado</a>
                    </div>            
                </div>
                <div class="dropdown nav-item" >
                    <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuBoton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Laboratorios
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuB oton">
                        <a href="?pagina=listar_laboratorio" class="dropdown-item">Ver listado</a>
                    </div>            
                </div><div class="dropdown nav-item" >
                    <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuBoton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Equipos
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuBoton">
                        <a href="?pagina=listar_equipo" class="dropdown-item">Ver listado</a>
                    </div>            
                </div> <div class="dropdown nav-item" >
                    <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuBoton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Encargado de Laboratorio
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuBoton">
                        <a href="?pagina=listar_encargado" class="dropdown-item">Ver listado</a>
                    </div>            
                </div><div class="dropdown nav-item" >
                    <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuBoton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Partes
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuBoton">
                        <a href="?pagina=listar_partes" class="dropdown-item">Ver listado</a>
                    </div>            
                </div>
                <li >
                    <a class="nav-link" a href="?pagina=principal">Inicio</a>
                </li> 
                <li >
                    <a class="nav-link" a href="?pagina=inicio">Cerrar sesion</a>
                </li> 
                </ul>
                    <div class="col-sm-8"><h2>Editar <b>Usuario</b></h2></div>
                    <div class="col-sm-4">

                        <a href="listar_usuario.php" class="btn btn-info add-new"><i class="fa fa-arrow-left"></i> Regresar</a>
                    </div>
                </div>
            </div>
         
			<div class="">
				<?php
				require_once("../controlador/c_actualizar_usuario.php")
				?>
				<form method="post">
					<div class="col-md-6">
					<label>Cedula:</label>
					<input type="text" name="cedula" id="cedula" class='form-control' maxlength="100" required  value="<?php echo $datos_usuario->cedula;?>">
				
				</div>
				<div class="col-md-6">
					<label>Nombre:</label>
					<input type="text" name="nombre" id="nombre" class='form-control' maxlength="100" required  value="<?php echo $datos_usuario->nombre;?>">
					
				</div>
				<div class="col-md-6">
					<label>Usuario:</label>
					<input type="text" name="usuario" id="usuario" class='form-control' maxlength="100" required value="<?php echo $datos_usuario->usuario;?>">
				</div>
				<div class="col-md-2">
					<label>Contrasena:</label>
					<input type="text" name="contrasena" id="contrasena" class='form-control' maxlength="12" required value="<?php echo $datos_usuario->contrasena;?>">
				</div>
				<div class="col-md-6">
					<label>Rol:</label>
					<select type="text" name="rol" id="euk" class='form-control' maxlength="15" required value="<?php echo $datos_usuario->rol;?>">
						<option>Administrador</option>
						<option>Usuario</option>

					</select>
				</div>
				<div class="col-md-6">
					<label>Correo :</label>
					<input type="email" name="correo" id="correo" class='form-control' maxlength="64" required value="<?php echo $datos_usuario->correo;?>">
				
				</div>
				
				<div class="col-md-12 pull-right">
				<hr>
					<button type="submit" class="btn btn-success">Actualizar datos</button>
				</div>
				</form>
			</div>
        </div>
    </div>     
</body>
</html>