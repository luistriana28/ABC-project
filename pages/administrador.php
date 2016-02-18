<?php
    session_start();
    if($_SESSION['Tipo']=='Administrativos')
{
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ESCUELA</title>
        
        <link href="../css/bootstrap.css" rel="stylesheet">
        <link href="../css/estilos.css" rel="stylesheet">
        <link href="../plugins/DataTables/css/dataTables.bootstrap.css" rel="stylesheet">
        <link href="../plugins/Select/css/bootstrap-select.css" rel="stylesheet">

        <script src="../js/jquery-2.1.3.js"></script>
        <script src="../js/bootstrap.js"></script>
        <script src="../plugins/DataTables/js/jquery.dataTables.js"></script>
        <script src="../plugins/DataTables/extensions/TableTools/js/dataTables.tableTools.js"></script>
        <script src="../plugins/DataTables/js/dataTables.bootstrap.js"></script>
        <script src="../plugins/Select/js/bootstrap-select.js"></script>
        <script src="../js/tablasHermes.js"></script>
        <script src="../js/app.js"></script>
    </head>
    <body>
        <!-- Barra de Navegacion -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapsed" data-target="#barra" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <img id="logo" src="../img/logo2.png" alt="logo">
                </div>
                <div id="barra" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <img class="center-block img-circle" src="../img/user.png" alt="usuario" style="max-width:40px;">
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">NetoX<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="../script/logout.php">Salir</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2 col-md-2 sidebar" id="menu_sidebar">
                    <ul class="nav nav-sidebar">
                        <li>
                            <a id="pag_home" class="active">Home</a>
                        </li>
                        <li>
                            <a href="#Menu1" data-toggle="collapse" data-parent="#MainMenu"><span class="glyphicon glyphicon-education"></span> Catalogos</a>
                        </li>
                        
                        <div class="collapse" id="Menu1">
                            <li><a id="pag_reg_carreras" class="list-group-item">Carreras</a></li>
                            <li><a id="pag_reg_grupos" class="list-group-item">Grupos</a></li>
                            <li><a id="pag_rep_usuarios" class="list-group-item">Usuarios</a></li>
                            <li><a id="pag_rep_alumno" class="list-group-item">Alumnos</a></li>
                            <li><a id="pag_rep_profesor" class="list-group-item">Profesores</a></li>
                            <li><a id="pag_rep_materias" class="list-group-item">Materias</a></li>
                            <li><a id="pag_rep_asignaturas" class="list-group-item">Asignaturas</a></li>
                            <li><a id="pag_rep_unidades" class="list-group-item">Unidades</a></li>
                            <li><a id="pag_rep_criterios" class="list-group-item">Criterios</a></li>
                            <li><a id="pag_rep_calificaciones" class="list-group-item">Calificaciones</a></li>
                        </div>
                        
                        <li>
                            <a href="#Menu2" data-toggle="collapse" data-parent="#MainMenu"><span class="glyphicon glyphicon-briefcase"></span> Modulos</a>
                        </li>
                        <div class="collapse" id="Menu2">
                            <li><a id="pag_grupos_prof" class="list-group-item">Calificaciones</a></li>
                            <li><a id="pag_alumnos_prof" class="list-group-item">Asistencias</a></li>
                            <li><a id="pag_cal_prof" class="list-group-item">Reporte</a></li>
                        </div>
                        
                    </ul>
                </div>
                <div id="principal" class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">
                    <nav id="bar">
                        <div class="container-fluid">
                            <button id="menu_plus" class="btn btn-default" type="button"><span class="glyphicon glyphicon-plus"></span></button>
                        </div>
                    </nav> 
                    <div id="area_trabajo">
                        <br>
                        <br>
                        <div class="jumbotron">
                          <h1>Arkebit Desarrollo Web </h1>
                          <p>Esta es una clase modelo de un A - B - C con las Tecnologias de HTML5, CSS3, Bootstrap 3, JavaScript, JQuery, Ajax Php, Clase PDO Y MySQL</p>
                          <p><a class="btn btn-primary btn-lg" href="http://arkebit.com/" role="button">Leer Mas</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php }
    else
    {
        session_destroy();
        header("Location:../script/logout.php");
    }
?>