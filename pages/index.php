<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Listado de Extensiones</title>
	<link rel="shortcut icon" href="../imagenes/logoayto.ico">
    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper"> <!-- DIB principal que contiene toda la pagina beb -->
                <div class="row"> 
                <header>               
                    <div class="col-lg-12">                        
                    <div class="jumbotron">            
                        <p>&nbsp&nbsp&nbsp<img src="../imagenes/valdemoro_logo.png" alt="Mountain View"></img><h2 align="center">DIRECTORIO TELEFÓNICO</h2>
                        </p>
                        <?php
                           // echo gethostbyaddr($_SERVER['REMOTE_ADDR']);
                        ?>                    
                     </div>
                    </div>
                    </div>
                </header>
                <!-- /.col-lg-12 -->
                </div>

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            
            <div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>  
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                     
                </button>
                <a class="navbar-brand" href="index.php"> Edificios Municipales</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-phone fa-fw"></i> Directorios <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="index.php">
                                <div>
                                    <i class="fa fa-th-list fa-fw"></i> Extensiones Fijas por Edificios                                                                       
                                </div>                                
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="index.php">
                                <div>
                                    <i class="fa fa-th-list fa-fw"></i> Extensiones Fijas por Concejalías
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="index.php">
                                <div>
                                    <i class="fa fa-th-list fa-fw"></i> Teléfonos Directos por Edificios
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="index.php">
                                <div>
                                    <i class="fa fa-th-list fa-fw"></i> Teléfonos Directos por Concejalías
                                </div>
                            </a>
                        </li>                        
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-search fa-fw"></i> Buscador <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-phone fa-fw"></i> Extensiones Fijas                                    
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-phone fa-fw"></i> Teléfonos Directos                                   
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-mobile fa-fw"></i> Extensiones móviles                                    
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-user fa-fw"></i> Personal                                
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-sitemap fa-fw"></i> Intranet <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="https://sede.valdemoro.es/autoliquidacion">
                                <div>
                                    <i class="fa fa-euro fa-fw"></i> Autoliquidaciones
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="http://notificadores.aytovalde.inf:8080/sgn/login">
                                <div>
                                    <i class="fa fa-pencil fa-fw"></i> Notificaciones
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="http://192.168.250.58:8080/epsilonnet/">
                                <div>
                                    <i class="fa fa-users fa-fw"></i> Portal del Empleado
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="http://copernico/servex/">
                                <div>
                                    <i class="fa fa-list-alt fa-fw"></i> SERVEX
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="https://retogenes/OWA/">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Correo Interno                                    
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="http://correoweb.acens.com/">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Correo Externo                                   
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="http://catalogo.valdemoro.es/ABSYS/abwebp.exe/">
                                <div>
                                    <i class="fa fa-book fa-fw"></i> OPAC (Bibliotecas)                                    
                                </div>
                            </a>
                        </li>                                               
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-support fa-fw"></i> Ayuda <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-print fa-fw"></i> Impresoras</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-phone fa-fw"></i> Teléfonos</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-windows fa-fw"></i> Windows</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Perfil de Usuario</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Preferencias</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Desconectar</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->                
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="#"><i class="fa fa-bank fa-fw"></i> Ayuntamiento<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Alcaldía<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="index.php?departamento='Alcaldía'&edificio='Ayuntamiento'"> Alcalde</a>
                                        </li>                                        
                                        <li>
                                            <a href="index.php?departamento='Primera Tenencia de Alcaldía'&edificio='Ayuntamiento'">Primer Tte. de Alcalde</a>
                                        </li>
                                        <li>
                                            <a href="index.php?departamento='Gabinete de Alcaldía'&edificio='Ayuntamiento'">Gabinete de Alcaldía</a>
                                        </li>
                                        <li>
                                            <a href="index.php?departamento='Gabinete de Comunicación'&edificio='Ayuntamiento'">Comunicación</a>
                                        </li>
                                        <li>
                                            <a href="index.php?departamento='Gabinete de Prensa'&edificio='Ayuntamiento'">Prensa</a>
                                        </li>
                                        <li>
                                            <a href="index.php?departamento='Servicios Jurídicos'&edificio='Ayuntamiento'">Servicios Jurídicos</a>
                                        </li>     
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li> 
                                <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Personal<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="index.php?departamento='Área de Personal'&edificio='Ayuntamiento'">Área de Personal</a>
                                        </li>                                        
                                        <li>
                                            <a href="index.php?departamento='Servicio de Prevención'&edificio='Ayuntamiento'">Servicio de Prevención</a>
                                        </li>    
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Régimen Interior<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Concejal</a>
                                        </li>                                        
                                        <li>
                                            <a href="#">Archivo Municipal</a>
                                        </li>
                                        <li>
                                            <a href="#">Contratación y R. P.</a>
                                        </li>
                                        <li>
                                            <a href="#">S.A.C. Registro</a>
                                        </li>
                                        <li>
                                            <a href="#">S.A.C. Centralita</a>
                                        </li>
                                        <li>
                                            <a href="#">Secretario</a>
                                        </li>
                                        <li>
                                            <a href="#">Secretaría General</a>
                                        </li>
                                        <li>
                                            <a href="#">Estadística</a>
                                        </li>                                                                                     
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Oficinas de Portavoces <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Portavoz PP</a>
                                        </li>
                                        <li>
                                            <a href="#">Portavoz PSOE</a>
                                        </li>
                                        <li>
                                            <a href="#">Portavoz GaV</a>
                                        </li>
                                        <li>
                                            <a href="#">Portavoz TUD</a>
                                        </li>
                                        <li>
                                            <a href="#">Portavoz IU</a>
                                        </li>                                        
                                        
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>  
                                <li>
                                    <a href="index.php?departamento='TIC e Innovación'&edificio='Ayuntamiento'"><i class="fa fa-angle-right fa-fw"></i>Datacenter</a>
                                </li>                                                                                                                                                                                              
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-bank fa-fw"></i> Antíguo Consistorio<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Concejalía de Educación</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Administración</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Información y Centralita</a>
                                </li>                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-bank fa-fw"></i> Antígua Residencia<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Área de Prevención</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Sindicatos</a>
                                </li>                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-bank fa-fw"></i> Área Económica<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Concejalía de Hacienda</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Información y Centralita</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Oficina de Catastro</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Tesorería</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Intervención</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Rentas</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Recaudación</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Informática</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Inspección Tributaria</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Notificadores</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                            
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bank fa-fw"></i> Biblioteca Central<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Dirección</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Administración</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Salas</a>
                                </li>                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bank fa-fw"></i> C. Calle Apolo<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Conserje</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>S. Orientación Psicológica</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Centro de Barrio</a>
                                </li>                                                                                              
                                
                                <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Área de Mujer <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Técnica</a>
                                        </li>
                                        <li>
                                            <a href="#">Administración</a>
                                        </li>
                                        <li>
                                            <a href="#">P.M.O.R.V.G</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Asuntos Sociales <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Administración</a>
                                        </li>
                                        <li>
                                            <a href="#">Área de Familia</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Ayuda a domicilio <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Dirección</a>
                                        </li>
                                        <li>
                                            <a href="#">Administración</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>                                                              
                            </ul>
                            <!-- /.nav-second-level  -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bank fa-fw"></i> C. Plaza de Autos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Concejalía de A. Sociales</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Dirección</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Atención al Público</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Administración</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Unidad de Trabajo Social</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Atención al Mayor</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Discapacidad</a>
                                </li>                                                                                                                                                                  
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bank fa-fw"></i> C. Plaza Montserrat<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>OMIC</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Área de Salud</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-bank fa-fw"></i> C. Emergencias (Policia)<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Concejalía de Seguridad</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Policía local <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Jefe de Policía</a>
                                        </li>
                                        <li>
                                            <a href="#">Sargentos</a>
                                        </li>
                                        <li>
                                            <a href="#">Atención al Ciudadano</a>
                                        </li>
                                        <li>
                                            <a href="#">Área Administrativa</a>
                                        </li>
                                        <li>
                                            <a href="#">Unidad de Polígonos</a>
                                        </li>
                                        <li>
                                            <a href="#">Agentes Tutores</a>
                                        </li>
                                        <li>
                                            <a href="#">U. Violencia de Género</a>
                                        </li>
                                        <li>
                                            <a href="#">Atestados</a>
                                        </li>
                                        <li>
                                            <a href="#">Tráfico</a>
                                        </li>                                                                                                                                                                                                      
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Ambulancia</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Protección Civil</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>TIC e Innovación</a>
                                </li>                                                                                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        
                        <li>
                            <a href="#"><i class="fa fa-bank fa-fw"></i> C. Actividades Educativas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Información y Centralita</a>
                                </li>
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Escuela de Música</a>
                                </li>
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Escuela oficial de Idiomas</a>
                                </li>
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Escuela de Adultos</a>
                                </li>
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>UNED</a>
                                </li>
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Comisión de Escolarización</a>
                                </li>
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Unidad ASINTE</a>
                                </li>                                                                                                                                                                                              
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        
                        <li>
                            <a href="#"><i class="fa fa-bank fa-fw"></i> Centro de Asociaciones<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Información y Centralita</a>
                                </li>
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Dirección</a>
                                </li>
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Administración</a>
                                </li>
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Asociaciones</a>
                                </li>
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Patrimonio Histórico</a>
                                </li>
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>P.I. Voluntariado</a>
                                </li>                                                                                                                                                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-bank fa-fw"></i> C. de Barrio "Vivaverde"<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Dirección</a>
                                </li>
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Administración</a>
                                </li>
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Biblioteca</a>
                                </li>                                                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        
                        <li>
                            <a href="#"><i class="fa fa-bank fa-fw"></i> C. Cultural "Juan Prado"<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Conserjería</a>
                                </li>
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Dirección</a>
                                </li>
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Técnica de Cultura</a>
                                </li>
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Administración</a>
                                </li>
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Dpto. de Plásticas</a>
                                </li>
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Biblioteca</a>
                                </li>
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Teatro</a>
                                </li>
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Universidad Polpular</a>
                                </li>                                                                                                                                                                                                                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        
                        <li>
                            <a href="#"><i class="fa fa-bank fa-fw"></i> Centro de Empresas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Información y Centralita</a>
                                </li>
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Dirección</a>
                                </li>
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Administración</a>
                                </li>
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Cámara de Comercio</a>
                                </li>                                                                                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        
                        
                        <li>
                            <a href="#"><i class="fa fa-bank fa-fw"></i> Centro de Mayores<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Información y Centralita</a>
                                </li>
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Dirección</a>
                                </li>
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Administración</a>
                                </li>
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Animadoras</a>
                                </li>                                                                                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        
                        <li>
                            <a href="#"><i class="fa fa-bank fa-fw"></i> Centro Ocupacional<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Dirección</a>
                                </li>
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Técnicos</a>
                                </li>
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Administración</a>
                                </li>
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Conserjería</a>
                                </li>                                                                                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        
                        <li>
                            <a href="#"><i class="fa fa-bank fa-fw"></i> Centro "Ramón Areces"<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Dirección</a>
                                </li>
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Administración</a>
                                </li>
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>TIC e Innovación</a>
                                </li>
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Información y Centralita</a>
                                </li>
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Comercio</a>
                                </li>
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Sanciones</a>
                                </li>
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Bolsa de Empleo</a>
                                </li>                                                                                                                                                                                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        
                        
                        <li>
                            <a href="#"><i class="fa fa-bank fa-fw"></i> Centro "Vicente Ferrer"<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Recepción</a>
                                </li>
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Cooperación Social</a>
                                </li>                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
 
                        <li>
                            <a href="#"><i class="fa fa-bank fa-fw"></i> Juventud<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Administración</a>
                                </li>                                                                                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        
                        
                        <li>
                            <a href="#"><i class="fa fa-bank fa-fw"></i> Piscina "Valdesanchuela"<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Dirección</a>
                                </li>
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Administración</a>
                                </li>
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Taquilla</a>
                                </li>                                                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        
                        
                        <li>
                            <a href="#"><i class="fa fa-bank fa-fw"></i> Torre del Reloj<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Turismo</a>
                                </li>
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Gesvival</a>
                                </li>                                                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        
                        <li>
                            <a href="#"><i class="fa fa-bank fa-fw"></i> Urbanismo<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Concejalía de Urbanismo</a>
                                </li>
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Arquitecto Municipal</a>
                                </li>
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Servicios Técnicos</a>
                                </li>
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Servicios Jurídicos</a>
                                </li>
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Administración</a>
                                </li>
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Obras y Servicios</a>
                                </li>
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Medio Ambiente</a>
                                </li>
                                 <li>
                                    <a href="#"><i class="fa fa-angle-right fa-fw"></i>Oficina de Vivienda</a>
                                </li>                                                                                                                                                                                                                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>         
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

            <!-- Comienza el contenido de la pagina  -->
                <!-- Encabezado del cuerpo de la pagina principal -->
        <div id="page-wrapper">
            <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Extensiones Fijas</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
 
            <div class="row">
                <div class="col-lg-8">                    
                    <div class="panel panel-default">
                        <div class="panel-heading">                            
                            <!--<i class="fa fa-bar-chart-o fa-fw"></i> Barra de busqueda en cabecera del panel -->
                            <?php
                            $row_recordset2 = 8;
                            require_once('../consultas/consulta1.php');
                            if ($row_recordset2 != 8) {                           
                            echo '<p><strong>' . $row_recordset2["edificio"] . '<b>&nbsp;&nbsp;>>&nbsp;&nbsp;</b>' . $row_recordset2["departamento"] . '</strong></p>';
                            echo '</div>'; // Termino la cabecera del panel.                            
                            echo '<div class="panel-body">';                           
                            echo '<div class="table-responsive">';
                            echo '<table class="table table-bordered table-hover table-striped"><thead><tr><th> Nombre</th><th>Extensión&nbsp;</th></tr></thead>';
                            echo '<tbody>';
                            do {
                            echo '<tr><td>' . $row_recordset2['nombre'] . '&nbsp;' . $row_recordset2['apellido1'] . '&nbsp;' . $row_recordset2['apellido2'] . '&nbsp;' . $row_recordset2['categoria'] . '</td><td>' . $row_recordset2['extension'] . '&nbsp;</td></tr>';
                             } while ($row_recordset2 = mysql_fetch_assoc($Recordset2));
                            echo '</tbody></table>';
                            echo '</div>'; // Termino el div de la table-responsive.
                            } else {//muestro la imagen de cabecera si no tengo ningún registro en el recordset.
                            echo '</div>'; // Termino la cabecera del panel.
                            echo '<img  class="imcentral" src="../imagenes/3c0m.jpg"  alt="Teléfonos" name="Insert_logo" width="390px" height="350px" id="Insert_logo">';
                            echo '<div class="panel-body">';
                            }
                            ?>
                                                
                        <!-- /.panel-heading -->                                                     
                        

                                    <!-- /.table-responsive -->
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->

                </div>
                <!-- /.col-lg-8  -->

                
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Últimas Noticias Municipales
                        </div>
                        <!-- /.panel-heading -->                                           
                        <div class="panel-body">
                            <a class="twitter-timeline" href="https://twitter.com/Ayto_Valdemoro" data-widget-id="710557095498805254">Tweets por el @Ayto_Valdemoro.</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                        </div>
                        <!-- /.panel-body -->                                                
                    </div>
                    <!-- /.paneL -->                    
                </div>
                <!-- /.col-lg-4 -->
                
                
            </div>
            <!-- /.row -->
        <!-- Final del contenido de la pagina -->
        <!-- /#page-wrapper -->
    </div>
     <div class="panel-footer">Pie del panel</div>

</div> <!-- Final del DIV Principal -->

    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript   HEMOS COMENTADO ESTOS COMPONENTES QUE SI APARECEN EN LA PAJ ORIGINAL
    <script src="../bower_components/raphael/raphael-min.js"></script>
    <script src="../bower_components/morrisjs/morris.min.js"></script>
    <script src="../js/morris-data.js"></script>  -->

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
