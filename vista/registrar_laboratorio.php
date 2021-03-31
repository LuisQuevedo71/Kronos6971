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
            </div>
         </nav>
         <?php
          require_once("../controlador/c_registrar_laboratorio.php")
          ?>
           <div class="row">
                    <div class="col-sm-8"><h2>Agregar <b>Laboratorio</b></h2></div>
                    <div class="col-sm-4">
                        <a href="listar_laboratorio.php" class="btn btn-info add-new"><i class="fa fa-arrow-left"></i> Regresar</a>
                    </div>
                </div>
         <main>
             <div class="">
                <form method="post">
                <div class="col-md-6">
                    <label>Codigo Laboratorio:</label>
                <input type="text" name="codigo_lab" id="codigo_lab" class='form-control' maxlength="100" required >
                </div>
                <div class="col-md-6">
                    <label>Nombre:</label>
                    <input type="text" name="nombre" id="nombre" class='form-control' maxlength="100" required >
                </div>
                <div class="col-md-6">
                    <label>Fecha Ingreso:</label>
                    <input type="date" name="fecha" id="fecha" class='form-control' maxlength="100" required>
                </div>
                <div class="col-md-12">
                    <label type="text" name="nombre_pnf" id="nombre_pnf"  class='form-control' maxlength="100" required>Pnf Perteneciente:</label>
                    
                   <select name="nombre_pnf" multiple>
                <option>Pnf Administracion</option>
                <option>Pnf Agroalimentaria</option>
                <option>Pnf Calidad y Ambiente</option>
                <option>Pnf Contaduría</option>
                <option>Pnf Deportes</option>
                <option>Pnf Distribucion y Logistica</option>
                <option>Pnf Higiene y Seguridad Labora</option>
                <option>Pnf Informatica</option>
                   </select>
                </div>

                <div class="col-md-12 pull-right">
                <hr>
                    <button type="submit" class="btn btn-success">Registrar Laboratorio</button>
                </div>
                </form>
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