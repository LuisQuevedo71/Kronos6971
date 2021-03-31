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
<body class="body bg-light">

    <div>

         <nav class="navbar navbar-dark">
            <div class="navbar-child ">Kronos</div>
            <div class="navbar-child ">
              
               <ul class="nav">
                    
                    <div class="dropdown nav-item" >
                    <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuBoton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Usuarios
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuBoton">
                        <a href="usu_listar_usuario.php" class="dropdown-item">Ver listado</a>
                    </div>            
                </div>
                <div class="dropdown nav-item" >
                    <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuBoton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Laboratorios
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuB oton">
                        <a href="usu_listar_laboratorio.php" class="dropdown-item">Ver listado</a>
                    </div>            
                </div><div class="dropdown nav-item" >
                    <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuBoton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Equipos
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuBoton">
                        <a href="usu_listar_equipo.php" class="dropdown-item">Ver listado</a>
                    </div>            
                </div> <div class="dropdown nav-item" >
                    <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuBoton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Encargado de Laboratorio
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuBoton">
                        <a href="usu_listar_encargado.php" class="dropdown-item">Ver listado</a>
                    </div>            
                </div><div class="dropdown nav-item" >
                    <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuBoton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Partes
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuBoton">
                        <a href="usu_listar_partes.php" class="dropdown-item">Ver listado</a>
                    </div>            
                </div>
                <li >
                    <a class="nav-link" a href="usu_principal.php">Inicio</a>
                </li> 
                <li >
                    <a class="nav-link" a href="../index.php">Cerrar sesion</a>
                </li> 
                </ul>
            </div>
         </nav>
                    <?php
                    if(!empty($r)){echo $r;}
                  ?>    
         <main>
             <div class="container" style="width: 40rem;">	
				 <center><h3>Listado de Equipos</h3></center>
              </div>
              <div>
                <a href="../re.php" class="btn btn-info add-new"><i class="fa fa-plus"></i> Generar Reportes</a>

              </div>
		<table class="table table-striped table-hover">
		
		<tbody id="cuerpoconsulta">
            <td>
                     <tr>
                        <th>Codigo PC</th>
                        <th>Modelo</th>
                        <th>Fecha de Ingreso</th>
                         <th>Statud</th>
                        <th>Observacion</th>
                        <th>Codigo de Laboratorio</th>
                    </tr>
		  </td>
<?php
include ('../modelo/equipo.php');
$equipos = new equipos();
$listado=$equipos->read();
?>
<?php 
while ($row=mysqli_fetch_object($listado)){
$codigo_pc=$row->codigo_pc;
$modelo=$row->modelo;
$fecha_ingreso=$row->fecha_ingreso;
$statud=$row->statud;
$observacion=$row->observacion;
$codigo_laboratorio=$row->codigo_laboratorio;
?>
<tr>
<td><?php echo $codigo_pc;?></td>
<td><?php echo $modelo;?></td>
<td><?php echo $fecha_ingreso;?></td>
<td><?php echo $statud;?></td>
<td><?php echo $observacion;?></td>
<td><?php echo $codigo_laboratorio;?></td>


</tr>   
<?php
}
?>
		</tbody>
		</table>
             </div>
         </main>

    </div>

    

     <!--Archivos de javascript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!--Archivos de javascript-->

    <script type="text/javascript" src="nuusu.js"></script>
</body>
</html>