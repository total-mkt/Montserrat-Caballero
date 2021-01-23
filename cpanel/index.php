<?php session_start();
require_once('includes/conn.php');
mysql_select_db($database_conn, $conn);
$Bee_in = $_SESSION['Cookie_bee'];


// Si No estamos dentro
if($Bee_in == ''){


require_once('includes/function-string.php');

// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['login_name'])) {
  $loginUsername=$_POST['login_name'];
  $password=$_POST['login_password'];
  $EM_fldUserAuthorization = "";
  $EM_redirectLoginSuccess = "check-session.php";
  $EM_redirectLoginFailed = $url."?Login=Error";
  $EM_redirecttoReferrer = false;
  mysql_select_db($database_conn, $conn);

  // HASH
  $password = md5($password);

  // Activo
  $estatus = 'Activo';
  $LoginRS__query=sprintf("SELECT id_usuario, track_usuario, nombre FROM usuarios WHERE email=%s AND clave=%s AND estatus=%s",
    GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text"), GetSQLValueString($estatus, "text"));
	
	echo $LoginRS__query;

  $LoginRS = mysql_query($LoginRS__query, $conn) or die(mysql_error());
  $chekin = mysql_fetch_assoc($LoginRS);
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";

	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['Cookie_bee'] = $chekin['track_usuario'];
    $_SESSION['EM_UserGroup'] = $loginStrGroup;

	  	  

    if (isset($_SESSION['PrevUrl']) && false) {
      $EM_redirectLoginSuccess = $_SESSION['PrevUrl'];
    }
    header("Location: " . $EM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $EM_redirectLoginFailed );
  }
}

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
    <title>Login - <?php echo $title;?></title>
    
    <!-- page css -->
    <link href="dist/css/pages/login-register-lock.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
	<!-- Sweet Alert CSS -->
	<link href="../assets/node_modules/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
    
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <?php //include('includes/preloader.php');?>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper" class="login-register login-sidebar" style="background-image:url(../images/login.jpg);">
        <div class="login-box card">
            <div class="card-body">
                <form class="form-horizontal form-material text-center" id="loginform" action="<?php echo $loginFormAction; ?>" method="post">
					<div style="padding-top: 16px;"></div>
                    <a href="javascript:void(0)" class="db"><img src="../images/logo-login.png" alt="Home" /></a>
                    <div class="form-group m-t-40">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" name="login_name" required="" placeholder="<?php echo _USUARIO;?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" name="login_password" required="" placeholder="<?php echo _CLAVE;?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <div class="d-flex no-block align-items-center">
                                
                                <div class="ml-auto">
                                    <a href="javascript:void(0)" id="to-recover" class="text-muted"><i class="fas fa-lock m-r-5"></i> <?php echo _OLVIDASTE;?></a> 
                                </div>
                            </div>   
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase btn-rounded" type="submit"><?php echo _LOGIN;?></button>
                        </div>
                    </div>
                    
                    <div class="form-group m-b-0" style="padding-bottom: 13px;">
                        <div class="col-sm-12 text-center">
                            <?php echo _NOTIENES;?> <a href="registro.php" class="text-primary m-l-5"><b><?php echo _SOLICITA;?></b></a>
                        </div>
                    </div>
<?php  if($lenguaje == 'esp'){ $el_idioma = "English"; $cambio = 'eng'; }?>
<?php  if($lenguaje == 'eng'){ $el_idioma = "Español"; $cambio = 'esp'; }?>
<?php  if($lenguaje == '')   { $el_idioma = "Español"; $cambio = 'esp'; }?>

					<!--<div class="form-group m-b-0" >
                        <div class="col-sm-12 text-center">
                           <a href="cambiar-idioma.php?lenguaje=<?php echo $cambio;?>" class="btn-danger m-l-5" style="padding: 20px;">
							   <b><?php echo _CAMBIAR_IDIOMA;?> <?php echo $el_idioma;?></b>
						   </a>
                        </div> 
                    </div>-->
					
                </form>
                <form class="form-horizontal" id="recoverform" action="clave-pedir.php" method="post">
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <h3><?php echo _RESTABlECER_CLAVE;?></h3>
                            <p class="text-muted"><?php echo _RESTABlECER_CLAVE_ANUNCIO;?></p>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" name="forgot_email" type="text" required="" placeholder="<?php echo _EMAIL;?>">
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit"><?php echo _RESTABlECER;?></button>
                        </div>
                    </div>
					<div class="form-group m-b-0" >
                        <div class="col-sm-12 text-center">
                           <a href="./" class="btn-danger m-l-5" style="padding: 20px;">
							   <b><?php echo _REGRESAR_LOGIN;?></b>
						   </a>
                        </div> 
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="..//assets/node_modules/popper/popper.min.js"></script>
    <script src="../assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!--Custom JavaScript -->
    <script type="text/javascript">
        $(function() {
            $(".preloader").fadeOut();
        });
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        });
        // ============================================================== 
        // Login and Recover Password 
        // ============================================================== 
        $('#to-recover').on("click", function() {
            $("#loginform").slideUp();
            $("#recoverform").fadeIn();
        });
    </script>
	
<!-- Sweet-Alert  -->
<script src="../assets/node_modules/sweetalert/sweetalert.min.js"></script>


<script>
!function($) {
    "use strict";

    var SweetAlert = function() {};
	
	SweetAlert.prototype.init = function() {
<?php 
// Registro
if($_REQUEST['Registro'] == 'Exitoso'){?>
        	swal("<?php echo _PERFECTO;?>", "<?php echo _RESTABlECER;?>", "success");
<?php }?>
	
<?php 
// Verificar
if($_REQUEST['track_usuario'] != ''){?>
  $(window).load(function(){
        	swal("<?php echo _LISTO;?>", "<?php echo _LISTO_ANUNCIO;?>", "success");
<?php }?>

<?php 
// Reset Clave
if($_REQUEST['Clave'] == 'Reset'){?>
        	swal("<?php echo _REVISA_EMAIL;?>", "<?php echo _REVISA_EMAIL_ANUNCIO;?>", "success");
<?php }?>

<?php 
// Nueva Clave
if($_REQUEST['Cambio'] == 'Exitoso'){?>
        	swal("<?php echo _CAMBIO;?>", "<?php echo _CAMBIO_ANUNCIO;?>", "success");
<?php }?>	
	
<?php 
// No Login
if($_REQUEST['Login'] == 'Error'){?>
        swal("<?php echo _ERROR;?>", "<?php echo _ERROR_ANUNCIO;?>", "error")
<?php } ?>
		
		 },
    //init
    $.SweetAlert = new SweetAlert, $.SweetAlert.Constructor = SweetAlert
}(window.jQuery),

//initializing 
function($) {
    "use strict";
    $.SweetAlert.init()
}(window.jQuery);
</script>


<?php
// Verificar
	if($_REQUEST['track_usuario'] != ''){
		
		
	$estatus = 'Activo';
	$updateSQL = sprintf("UPDATE usuarios SET estatus = %s WHERE track_usuario = %s",
					   GetSQLValueString($estatus, "text"),
					   GetSQLValueString($_REQUEST['track_usuario'], "text"));
  mysql_select_db($database_conn, $conn);
  $Result = mysql_query($updateSQL, $conn) or die(mysql_error());
	}
?>

    
</body>
</html>
<?php
}
// SI estamos dentro
if($Bee_in != ''){
	echo '<script type="text/javascript">window.location="dashboard.php";</script>';
}
?>