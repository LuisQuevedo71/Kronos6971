<?php
	if (isset($_GET['serial'])){
		$id=intval($_GET['serial']);
	} else {
		header("location:listar_partes.php");
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
 <link rel="stylesheet" href="../css/registrar_usuario.css">
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
                        <a href="listar_usuario.php" class="dropdown-item">Ver listado</a>
                    </div>            
                </div>
                <div class="dropdown nav-item" >
                    <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuBoton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Laboratorios
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuB oton">
                        <a href="listar_laboratorio.php" class="dropdown-item">Ver listado</a>
                    </div>            
                </div><div class="dropdown nav-item" >
                    <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuBoton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Equipos
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuBoton">
                        <a href="listar_equipo.php" class="dropdown-item">Ver listado</a>
                    </div>            
                </div> <div class="dropdown nav-item" >
                    <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuBoton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Encargado de Laboratorio
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuBoton">
                        <a href="listar_encargado.php" class="dropdown-item">Ver listado</a>
                    </div>            
                </div><div class="dropdown nav-item" >
                    <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuBoton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Partes
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuBoton">
                        <a href="listar_partes.php" class="dropdown-item">Ver listado</a>
                    </div>            
                </div>
                <li >
                    <a class="nav-link" a href="principal.php">Inicio</a>
                </li> 
                <li >
                    <a class="nav-link" a href="inicio.php">Cerrar sesion</a>
                </li> 
                </ul>
                    <div class="col-sm-8"><h2>Editar <b>Partes</b></h2></div>
                    <div class="col-sm-4">

                        <a href="listar_partes.php" class="btn btn-info add-new"><i class="fa fa-arrow-left"></i> Regresar</a>
                    </div>
                </div>
            </div>
         
			<div class="row">
				<?php
				require_once("../controlador/c_actualizar_partes.php")
				?>
            </div>
            <div class="">
				<form method="post">
					<div class="col-md-2">
					<label>Serial:</label>
					<input type="text" name="serial" id="serial" class='form-control' maxlength="100" required  value="<?php echo $datos_partes->serial;?>">
				
				</div>
				<div class="col-md-4">
					<label>Caracteristicas:</label>
					<input type="text" name="caracteristicas" id="caracteristicas" class='form-control' maxlength="100" required  value="<?php echo $datos_partes->caracteristicas;?>">
					
				</div>
				<div class="col-md-3">
					<label>Tipo:</label>
					<input type="text" name="tipo" id="tipo" class='form-control' maxlength="100" required value="<?php echo $datos_partes->tipo;?>">
				</div>
                <div class="col-md-4">
                    <label>Observaciones:</label>
                    <input type="text" name="observaciones" id="observaciones" class='form-control' maxlength="64" required value="<?php echo $datos_partes->observaciones;?>">
                </div>
				<div class="col-md-6">
					<label>Statud:</label>
					<input type="text" name="statud" id="statud" class='form-control' maxlength="255" required value="<?php echo $datos_partes->statud;?>">
				</div>
				<div class="col-md-2">
					<label>Codigo Equipo:</label>
					<input type="text" name="codigo_equipo" id="codigo_equipo" class='form-control' maxlength="15" required value="<?php echo $datos_partes->codigo_equipo;?>">
				</div>
				
				
				<div class="col-md-12 pull-right">
				<hr>
					<button type="submit" class="btn btn-success">Actualizar datos</button>
				</div>
				</form>
                </div>
			</div>
        </div>
    </div>     
</body>
</html>