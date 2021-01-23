<?php session_start();
$Bee_in = $_SESSION[ 'Cookie_bee' ];

require_once( 'includes/conn.php' );
require_once( 'includes/acceso.php' );
include( 'includes/logout.php' );
mysql_select_db( $database_conn, $conn );

include( 'includes/function-string.php' );
include( 'includes/datos-empleados.php' );
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Somos Web">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title><?php echo $title;?></title>
	<base href="<?php echo $url;?>" />
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="../assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <!--Toaster Popup message CSS -->
    <link href="../assets/node_modules/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="dist/css/pages/dashboard1.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-default-dark fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <?php include('includes/preloader.php');?>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php include('includes/header.php');?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php include('includes/left-sidebar.php');?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Dashboard</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)"><?php echo _INICIO;?></a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
							
							
							 <div class="btn-grou d-none d-lg-block m-l-15p" style="padding-left: 10px; margin-left: 13px;">
                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Alta </button>
                            <div class="dropdown-menu"> <a class="dropdown-item" href="alta-logro.php">Logro</a> <a class="dropdown-item" href="alta-blog.php">Blog</a> <a class="dropdown-item" href="alta-video.php">Video</a> <a class="dropdown-item" href="alta-testimonio.php">Testimonio</a> </div>
                          </div>
							
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Info box -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round align-self-center round-success"><i class="ti-wallet"></i></div>
                                    <div class="m-l-10 align-self-center">
                                        <h3 class="m-b-0">11564</h3>
                                        <h5 class="text-muted m-b-0">Clientes</h5></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round align-self-center round-info"><i class="ti-user"></i></div>
                                    <div class="m-l-10 align-self-center">
                                        <h3 class="m-b-0">5345</h3>
                                        <h5 class="text-muted m-b-0">Productos</h5></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round align-self-center round-danger"><i class="ti-calendar"></i></div>
                                    <div class="m-l-10 align-self-center">
                                        <h3 class="m-b-0">56%</h3>
                                        <h5 class="text-muted m-b-0">Tareas completadas</h5></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round align-self-center round-success"><i class="ti-settings"></i></div>
                                    <div class="m-l-10 align-self-center">
                                        <h3 class="m-b-0">56%</h3>
                                        <h5 class="text-muted m-b-0">Ventas</h5></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End Info box -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Over Visitor, Our income , slaes different and  sales prediction -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title ">Fuente de Ventas</h5>
                                <div id="morris-donut-chart" class="ecomm-donute" style="height: 317px;"></div>
                                <ul class="list-inline m-t-30 text-center">
                                    <li class="p-r-20">
                                        <h5 class="text-muted"><i class="fa fa-circle" style="color: #fb9678;"></i> Tienda</h5>
                                        <h4 class="m-b-0">8500</h4>
                                    </li>
                                    <li class="p-r-20">
                                        <h5 class="text-muted"><i class="fa fa-circle" style="color: #01c0c8;"></i> Vendedores</h5>
                                        <h4 class="m-b-0">3630</h4>
                                    </li>
                                    <li>
                                        <h5 class="text-muted"> <i class="fa fa-circle" style="color: #4F5467;"></i> Web</h5>
                                        <h4 class="m-b-0">4870</h4>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-8 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Productos + Vendidos</h5>
                                <ul class="list-inline text-center">
                                    <li>
                                        <h5><i class="fa fa-circle m-r-5" style="color: #00bfc7;"></i>Madera X</h5>
                                    </li>
                                    <li>
                                        <h5><i class="fa fa-circle m-r-5" style="color: #b4becb;"></i>Madera Y</h5>
                                    </li>
                                </ul>
                                <div id="morris-area-chart2" style="height: 370px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Total Leads -->
                <!-- ============================================================== -->
                <!-- .row -->
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><small class="pull-right text-success"><i class="fa fa-sort-asc"></i> 18% Mas (mes pasado)</small> Ventas</h5>
                                <div class="stats-row">
                                    <div class="stat-item">
                                        <h6>Todo</h6>
                                        <b>80.40%</b></div>
                                    <div class="stat-item">
                                        <h6>Mensual</h6>
                                        <b>15.40%</b></div>
                                    <div class="stat-item">
                                        <h6>Diario</h6>
                                        <b>5.50%</b></div>
                                </div>
                            </div>
                            <div id="sparkline8" class="minus-mar"></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><small class="pull-right text-danger"><i class="fa fa-sort-desc"></i> 18% Menos (mes pasado)</small> Por Vendedor</h5>
                                <div class="stats-row">
                                    <div class="stat-item">
                                        <h6>Todo</h6>
                                        <b>80.40%</b></div>
                                    <div class="stat-item">
                                        <h6>Mensual</h6>
                                        <b>15.40%</b></div>
                                    <div class="stat-item">
                                        <h6>Diario</h6>
                                        <b>5.50%</b></div>
                                </div>
                            </div>
                            <div id="sparkline9" class="minus-mar"></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><small class="pull-right text-success"><i class="fa fa-sort-asc"></i> 18% Mas (mes pasado)</small> Facturas</h5>
                                <div class="stats-row">
                                    <div class="stat-item">
                                        <h6>Todo</h6>
                                        <b>80.40%</b></div>
                                    <div class="stat-item">
                                        <h6>Mensual</h6>
                                        <b>15.40%</b></div>
                                    <div class="stat-item">
                                        <h6>Diario</h6>
                                        <b>5.50%</b></div>
                                </div>
                            </div>
                            <div id="sparkline10" class="minus-mar"></div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- End Total Leads -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- New Customers List and New Products List -->
                <!-- ============================================================== -->
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">Nuevos Clientes</h5>
                                <p class="text-muted">Clientes recientes</p>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nombre</th>
                                                <th>Apellido</th>
                                                <th>empresa</th>
                                                <th>Email</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Isvet</td>
                                                <td>Elías</td>
                                                <td>Somos Web</td>
                                                <td>isvet@somosweb.mx</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Dante</td>
                                                <td>Ramírez</td>
                                                <td>Home Depot</td>
                                                <td>dante@email.com</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Héctor</td>
                                                <td>Ramírez</td>
                                                <td>Home Depot</td>
                                                <td>hector@email.com</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Alberto</td>
                                                <td>Ramírez</td>
                                                <td>Home Depot</td>
                                                <td>alberto@email.com</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Carlos</td>
                                                <td>Ramírez</td>
                                                <td>Home Depot</td>
                                                <td>carlos@email.com</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Jesus</td>
                                                <td>Ramírez</td>
                                                <td>Home Depot</td>
                                                <td>jesus@email.com</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">Nuebos productos</h5>
                                <p class="text-muted">lista de productos nuevos</p>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Producto</th>
                                                <th>Popularidad</th>
                                                <th>Ventas</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Producto 1</td>
                                                <td><span class="peity-line" data-width="120" data-peity='{ "fill": ["#13dafe"], "stroke":["#13dafe"]}' data-height="40">0,-3,-2,-4,-5,-4,-3,-2,-5,-1</span> </td>
                                                <td><span class="text-danger text-semibold"><i class="fa fa-level-down" aria-hidden="true"></i> 28.76%</span> </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Producto 2</td>
                                                <td><span class="peity-line" data-width="120" data-peity='{ "fill": ["#13dafe"], "stroke":["#13dafe"]}' data-height="40">0,-1,-1,-2,-3,-1,-2,-3,-1,-2</span> </td>
                                                <td><span class="text-warning text-semibold"><i class="fa fa-level-down" aria-hidden="true"></i> 8.55%</span> </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Producto 3</td>
                                                <td><span class="peity-line" data-width="120" data-peity='{ "fill": ["#13dafe"], "stroke":["#13dafe"]}' data-height="40">0,3,6,1,2,4,6,3,2,1</span> </td>
                                                <td><span class="text-success text-semibold"><i class="fa fa-level-up" aria-hidden="true"></i> 58.56%</span> </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Producto 4</td>
                                                <td><span class="peity-line" data-width="120" data-peity='{ "fill": ["#13dafe"], "stroke":["#13dafe"]}' data-height="40">0,3,6,4,5,4,7,3,4,2</span> </td>
                                                <td><span class="text-info text-semibold"><i class="fa fa-level-up" aria-hidden="true"></i> 35.76%</span> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- End Page Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <?php include('includes/right-sidebar.php');?>
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <?php include('includes/footer.php');?>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="../assets/node_modules/popper/popper.min.js"></script>
    <script src="../assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <script src="../assets/node_modules/raphael/raphael-min.js"></script>
    <script src="../assets/node_modules/morrisjs/morris.min.js"></script>
    <script src="../assets/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- Popup message jquery -->
    <script src="../assets/node_modules/toast-master/js/jquery.toast.js"></script>
    <!-- Chart JS -->
    <script src="dist/js/dashboard1.js"></script>
    <script src="../assets/node_modules/toast-master/js/jquery.toast.js"></script>
    <!-- jQuery peity -->
    <script src="../assets/node_modules/peity/jquery.peity.min.js"></script>
    <script src="../assets/node_modules/peity/jquery.peity.init.js"></script>
</body>

</html>