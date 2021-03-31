<?php
	if (isset($_GET['codigo_lab'])){
		$id=intval($_GET['codigo_lab']);
	} else {
		header("location:listar_laboratorio.php");
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
                    <div class="col-sm-8"><h2>Editar <b>Laboratorio</b></h2></div>
                    <div class="col-sm-4">

                        <a href="listar_laboratorio.php" class="btn btn-info add-new"><i class="fa fa-arrow-left"></i> Regresar</a>
                    </div>
                </div>
            </div>
         
			<div class="">
				<?php
				require_once("../controlador/c_actualizar_laboratorio.php")
				?>
				<form method="post">
					<div class="col-md-4">
					<label>Codigo Laboratorio:</label>
					<input type="text" name="codigo_lab" id="codigo_lab" class='form-control' maxlength="100" required  value="<?php echo $datos_laboratorio->codigo_lab;?>">
				
				</div>
				<div class="col-md-4">
					<label>Nombre:</label>
					<input type="text" name="nombre" id="nombre" class='form-control' maxlength="100" required  value="<?php echo $datos_laboratorio->nombre;?>">
					
				</div>
				<div class="col-md-4">
					<label>Fecha Ingreso:</label>
					<input type="date" name="fecha" id="fecha" class='form-control' maxlength="100" required value="<?php echo $datos_laboratorio->fecha;?>">
				</div>
				<div class="col-md-4">
					  <label>Pnf Perteneciente:</label>
                   <select type="text" name="nombre_pnf" id="nombre_pnf" class='form-control' maxlength="255" required value="<?php echo $datos_laboratorio->nombre_pnf;?>"multiple>
                <option>Pnf Administracion</option>
                <option>Pnf Agroalimentaria</option>
                <option>Pnf Calidad y Ambiente</option>
                <option>Pnf Contaduria</option>
                <option>Pnf Deportes</option>
                <option>Pnf Distribucion y Logistica</option>
                <option>Pnf Higiene y Seguridad Labora</option>
                <option>Pnf Informatica</option>
                   </select>
					
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