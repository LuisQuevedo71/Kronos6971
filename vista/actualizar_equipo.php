<?php
	if (isset($_GET['codigo_pc'])){
		$id=intval($_GET['codigo_pc']);
	} else {
		header("location:listar_equipo.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head> <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kronos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
 integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
 <link rel="stylesheet" href="css/registrar_usuario.css">
 <!--Hojas de Estilo -->    
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">    
 <!--Hojas de Estilo -->

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
                    <div class="col-sm-8"><h2>Editar <b>Equipo</b></h2></div>
                    <div class="col-sm-4">

                        <a href="listar_equipo.php" class="btn btn-info add-new"><i class="fa fa-arrow-left"></i> Regresar</a>
                    </div>
                </div>
            </div>
         
			<div class="">
				<?php
				require_once("../controlador/c_actualizar_equipo.php")
				?>
				<form method="post">
					<div class="col-md-2">
					<label>Codigo PC:</label>
					<input type="text" name="codigo_pc" id="codigo_pc" class='form-control' maxlength="100" required  value="<?php echo $datos_equipos->codigo_pc;?>">
				
				</div>
				<div class="col-md-64">
					<label>Modelo:</label>
					<input type="text" name="modelo" id="modelo" class='form-control' maxlength="100" required  value="<?php echo $datos_equipos->modelo;?>">
					
				</div>
				<div class="col-md-2">
					<label>Fecha de Ingreso:</label>
					<input type="date" name="fecha_ingreso" id="fecha_ingreso" class='form-control' maxlength="100" required value="<?php echo $datos_equipos->fecha_ingreso;?>">
				</div>
				<div class="col-md-6">
					<label>Statud:</label>
					<input type="text" name="statud" id="statud" class='form-control' maxlength="255" required value="<?php echo $datos_equipos->statud;?>">
				</div>
				<div class="col-md-4">
					<label>Observaciones:</label>
					<input type="text" name="observacion" id="observacion" class='form-control' maxlength="15" required value="<?php echo $datos_equipos->observacion;?>">
				</div>
				<div class="col-md-2">
					<label>Codigo de Laboratorio :</label>
					<input type="text" name="codigo_laboratorio" id="codigo_laboratorio" class='form-control' maxlength="64" required value="<?php echo $datos_equipos->codigo_laboratorio;?>">
				
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