<?php session_start();
$Bee_in = $_SESSION[ 'Cookie_bee' ];

require_once( 'includes/conn.php' );
require_once( 'includes/acceso.php' );
include( 'includes/logout.php' );
mysql_select_db( $database_conn, $conn );

include( 'includes/function-string.php' );
include( 'includes/datos-empleados.php' );


// Año calendario
$year = date('Y');
$month = date('m');
if($month == 12){
	$next_month = "01";
} else {
	$next_month = $month + 1;
}
$next_year = $year + 1;

// Editar
$id = $_REQUEST['id'];

$query_edit = sprintf("SELECT * FROM monitor_publicacion WHERE id = %s",
GetSQLValueString($id, "text"));
$edit = mysql_query($query_edit, $conn) or die(mysql_error());
$editando = mysql_fetch_assoc($edit);

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Alta Seguimiento - <?php echo $title?></title>
   <link href="../assets/node_modules/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
	<link href="../assets/node_modules/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
    <!-- Page plugins css -->
    <link href="../assets/node_modules/clockpicker/dist/jquery-clockpicker.min.css" rel="stylesheet">
    <!-- Color picker plugins css -->
    <link href="../assets/node_modules/jquery-asColorPicker-master/dist/css/asColorPicker.css" rel="stylesheet">
    <!-- Date picker plugins css -->
    <link href="../assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker plugins css -->
    <link href="../assets/node_modules/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="../assets/node_modules/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
	
	 <link rel="stylesheet" href="../assets/node_modules/html5-editor/bootstrap-wysihtml5.css" />
	
	
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
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
                        <h4 class="text-themecolor">Alta Seguimiento</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./"><?php echo _INICIO?></a></li>
                                <li class="breadcrumb-item"><a href="./catalogo-publicacion.php">Publicación</a></li>
                                <li class="breadcrumb-item"><a href="./editar-publicacion.php?id=<?php echo $editando['id'];?>"><?php echo $editando['titulo'];?></a></li>
                                <li class="breadcrumb-item active">Alta Seguimiento</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
				<form action="insert-seguimiento.php" method="post" enctype="multipart/form-data"> 
                <div class="row">
                    <div class="col-12">
                        <!-- Card -->

                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Alta Seguimiento</h4>
                                <div class="row" style="margin-top: 34px;">
								
                                     
									
									<div class="col-md-4">
									<div class="form-group">
                                        <label>Día</label>
                                        <select class="form-control custom-select" name="dia" id="dia" required>
										  <option value="" selected>Seleccionar</option>	
											<?php
												for($i=1; $i<=31; $i++){
												   echo $i;// Imprime Ciclos
												   echo '<option value="'.$i.'">'.$i.'</option>';
												}
											?>
									</select>
									</div>
									</div>
									
									<div class="col-md-4">
									<div class="form-group">
                                        <label>Mes</label>
                                        <select class="form-control custom-select" name="mes" id="mes" required>
										  <option value="" selected>Seleccionar</option>	
										  <option value="Enero">Enero</option>
										  <option value="Febrero">Febrero</option>
										  <option value="Marzo">Marzo</option>
										  <option value="Abril">Abril</option>
										  <option value="Mayo">Mayo</option>
										  <option value="Junio">Junio</option>
										  <option value="Julio">Julio</option>
										  <option value="Agosto">Agosto</option>
										  <option value="Septiembre">Septiembre</option>
										  <option value="Octubre">Octubre</option>
										  <option value="Noviembre">Noviembre</option>
										  <option value="Diciembre">Diciembre</option>
										</select>
									</div>
									</div>
									
									<div class="col-md-4">
									<div class="form-group">
                                        <label>Año</label>
                                        <select class="form-control custom-select" name="anio" id="anio" required>
										  <option value="2021" selected>2021</option>	
									</select>
									</div>
									</div>

									
									<div class="col-md-12">
									<div class="form-group">
                                        <label>Usuario</label>
                                        <input type="input" class="form-control" name="usuario" value="<?php echo $editando['usuario'];?>" style="cursor: auto;"> 
									</div>
									</div>
									
									<div class="col-md-12">
									<div class="form-group">
                                        <label>Perfil</label>
                                        <input type="input" class="form-control" name="perfil" value="<?php echo $editando['perfil'];?>" style="cursor: auto;"> 
									</div>
									</div>
									
									<div class="col-md-12" style="margin-top: 16px;">
									<div class="form-group">
                                        <label>Colonia</label>
                                         <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="nombre_colonia">
                                    <option>Seleccionar</option>
<?php
$query_col = sprintf("SELECT tipo_colonia, nombre_colonia FROM monitor_colonias ORDER BY nombre_colonia ASC");
$col = mysql_query($query_col, $conn) or die(mysql_error());
while($colonia = mysql_fetch_assoc($col)){
?>
<option value="<?php echo $colonia['tipo_colonia'];?> <?php echo $colonia['nombre_colonia'];?>"><?php echo $colonia['tipo_colonia'];?> <?php echo $colonia['nombre_colonia'];?></option>
<?php
}
?>
                                </select>
									</div>
									</div>
									

									
									<div class="col-md-12" style="margin-top: 16px;">
									<div class="form-group">
                                        <label>Comentario</label>
                                        <textarea id="mymce" name="contenido"></textarea>
									</div>
									</div>
									
									
							
									
                                </div>
                            </div>
                        </div>
						
						
						
						
												<div class="card">
                            <div class="card-body">
                                <div class="row" style="margin-top: 34px;">
									<input type="hidden" name="action" value="upload">
						            <input type="hidden" name="id_publicacion" value="<?php echo $_REQUEST['id'];?>">
										<button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Alta Seguimiento</button>
								</div>
                            </div>
                        </div>	

						
                    </div>
                </div>
				</form>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
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
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/node_modules/popper/popper.min.js"></script>
    <script src="../assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="../assets/node_modules/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- Plugins for this page -->
    <!-- ============================================================== -->
    <!-- Plugin JavaScript -->
    <script src="../assets/node_modules/moment/moment.js"></script>
    <script src="../assets/node_modules/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <!-- Clock Plugin JavaScript -->
    <script src="../assets/node_modules/clockpicker/dist/jquery-clockpicker.min.js"></script>
    <!-- Color Picker Plugin JavaScript -->
    <script src="../assets/node_modules/jquery-asColor/dist/jquery-asColor.js"></script>
    <script src="../assets/node_modules/jquery-asGradient/dist/jquery-asGradient.js"></script>
    <script src="../assets/node_modules/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js"></script>
    <!-- Date Picker Plugin JavaScript -->
    <script src="../assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- Date range Plugin JavaScript -->
    <script src="../assets/node_modules/timepicker/bootstrap-timepicker.min.js"></script>
    <script src="../assets/node_modules/bootstrap-daterangepicker/daterangepicker.js"></script>
	<script src="../assets/node_modules/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
    <script>
        $(function () {
            // Switchery
            var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
            $('.js-switch').each(function () {
                new Switchery($(this)[0], $(this).data());
            });
            // For select 2
            $(".select2").select2();
            $('.selectpicker').selectpicker();
            //Bootstrap-TouchSpin
            $(".vertical-spin").TouchSpin({
                verticalbuttons: true
            });
            var vspinTrue = $(".vertical-spin").TouchSpin({
                verticalbuttons: true
            });
            if (vspinTrue) {
                $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
            }
            $("input[name='tch1']").TouchSpin({
                min: 0,
                max: 100,
                step: 0.1,
                decimals: 2,
                boostat: 5,
                maxboostedstep: 10,
                postfix: '%'
            });
            $("input[name='tch2']").TouchSpin({
                min: -1000000000,
                max: 1000000000,
                stepinterval: 50,
                maxboostedstep: 10000000,
                prefix: '$'
            });
            $("input[name='tch3']").TouchSpin();
            $("input[name='tch3_22']").TouchSpin({
                initval: 40
            });
            $("input[name='tch5']").TouchSpin({
                prefix: "pre",
                postfix: "post"
            });
            // For multiselect
            $('#pre-selected-options').multiSelect();
            $('#optgroup').multiSelect({
                selectableOptgroup: true
            });
            $('#public-methods').multiSelect();
            $('#select-all').click(function () {
                $('#public-methods').multiSelect('select_all');
                return false;
            });
            $('#deselect-all').click(function () {
                $('#public-methods').multiSelect('deselect_all');
                return false;
            });
            $('#refresh').on('click', function () {
                $('#public-methods').multiSelect('refresh');
                return false;
            });
            $('#add-option').on('click', function () {
                $('#public-methods').multiSelect('addOption', {
                    value: 42,
                    text: 'test 42',
                    index: 0
                });
                return false;
            });
            $(".ajax").select2({
                ajax: {
                    url: "https://api.github.com/search/repositories",
                    dataType: 'json',
                    delay: 250,
                    data: function (params) {
                        return {
                            q: params.term, // search term
                            page: params.page
                        };
                    },
                    processResults: function (data, params) {
                        // parse the results into the format expected by Select2
                        // since we are using custom formatting functions we do not need to
                        // alter the remote JSON data, except to indicate that infinite
                        // scrolling can be used
                        params.page = params.page || 1;
                        return {
                            results: data.items,
                            pagination: {
                                more: (params.page * 30) < data.total_count
                            }
                        };
                    },
                    cache: true
                },
                escapeMarkup: function (markup) {
                    return markup;
                }, // let our custom formatter work
                minimumInputLength: 1,
                //templateResult: formatRepo, // omitted for brevity, see the source of this page
                //templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
            });
        });
    </script>
	
	<!-- wysuhtml5 Plugin JavaScript -->
    <script src="../assets/node_modules/tinymce/tinymce.min.js"></script>
    <script>
    $(document).ready(function() {

        if ($("#mymce").length > 0) {
            tinymce.init({
                selector: "textarea#mymce",
                theme: "modern",
                height: 300,
                plugins: [
                    "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "save table contextmenu directionality emoticons template paste textcolor"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",

            });
        }
    });
    </script>
</body>

</html>