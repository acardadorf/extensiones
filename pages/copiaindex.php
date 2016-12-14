<!DOCTYPE html>
<html lang="es">

<head>
    <?php include '../pages/meta.php'; ?>
    <title>Listado de Extensiones</title>
    <?php include '../pages/link.php'; ?>
</head>

<body>

    <div id="wrapper"> <!-- DIB principal que contiene toda la pagina beb -->
        <?php include '../pages/encabezado.php'; ?>
        <?php include '../pages/menu.php'; ?>
            <!-- Comienza el contenido de la pagina  -->
                <!-- Encabezado del cuerpo de la pagina principal -->
        <div id="page-wrapper">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Extensiones Fijas</h1>
                    </div>
                </div>
 
            <div class="row"> <!--Panel Central de pagina -->
                <div class="col-lg-8">                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Barra de Búsqueda en Cabecera del Panel
                        </div>
                        <!-- Encabezado del panel central-->

                        <div class="panel-body">  <!-- Cuerpo del panel central de Página -->
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Dia</th>
                                                    <th>Hora</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>3326</td>
                                                    <td>10/21/2013</td>
                                                    <td>3:29 PM</td>
                                                    <td>$321.33</td>
                                                </tr>
                                                <tr>
                                                    <td>3325</td>
                                                    <td>10/21/2013</td>
                                                    <td>3:20 PM</td>
                                                    <td>$234.34</td>
                                                </tr>
                                                <tr>
                                                    <td>3324</td>
                                                    <td>10/21/2013</td>
                                                    <td>3:03 PM</td>
                                                    <td>$724.17</td>
                                                </tr>
                                                <tr>
                                                    <td>3323</td>
                                                    <td>10/21/2013</td>
                                                    <td>3:00 PM</td>
                                                    <td>$23.71</td>
                                                </tr>
                                                <tr>
                                                    <td>3322</td>
                                                    <td>10/21/2013</td>
                                                    <td>2:49 PM</td>
                                                    <td>$8345.23</td>
                                                </tr>
                                                <tr>
                                                    <td>3321</td>
                                                    <td>10/21/2013</td>
                                                    <td>2:23 PM</td>
                                                    <td>$245.12</td>
                                                </tr>
                                                <tr>
                                                    <td>3320</td>
                                                    <td>10/21/2013</td>
                                                    <td>2:15 PM</td>
                                                    <td>$5663.54</td>
                                                </tr>
                                                <tr>
                                                    <td>3319</td>
                                                    <td>10/21/2013</td>
                                                    <td>2:13 PM</td>
                                                    <td>$943.45</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->

                </div>
                <!-- /.col-lg-8  -->

                
                <div class="col-lg-4">  <!-- Panel lateral derecho  ancho 4 columnas-->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Últimas Noticias Municipales
                        </div>
                        <!-- /.panel-heading -->                                           
                        <div class="panel-body">
                            <a class="twitter-timeline" href="https://twitter.com/Ayto_Valdemoro" data-widget-id="710557095498805254">Tweets Publicados por: @Ayto_Valdemoro.</a>
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

</div> <!-- Final del DIV Principal -->

    <?php include '../pages/scripts.php'; ?>
    <?php include '../pages/pie.php'; ?>
    <!-- /#wrapper -->
</body>

</html>
