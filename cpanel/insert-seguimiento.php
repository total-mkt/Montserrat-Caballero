<?php session_start();
require_once( 'includes/conn.php' );
require_once( 'includes/acceso.php' );
include( 'includes/logout.php' );
mysql_select_db( $database_conn, $conn );
$Bee_in = $_SESSION[ 'Cookie_bee' ];
$FB_in = $_SESSION[ 'FBID' ];
// Email FB
 $_SESSION['EMAIL'] =  $femail;


include( 'includes/function-string.php' );
include( 'includes/datos-empleados.php' );

// Publicacion
$query_p = sprintf("SELECT * FROM monitor_publicacion WHERE id = %s",
GetSQLValueString($_POST['id_publicacion'], "int"));
$publish = mysql_query($query_p, $conn) or die(mysql_error());
$publicacion = mysql_fetch_assoc($publish);

// Usuario
$query_edit = sprintf("SELECT usuario FROM monitor_usuarios WHERE usuario = %s",
GetSQLValueString($_REQUEST['usuario'], "text"));
$edit = mysql_query($query_edit, $conn) or die(mysql_error());
$editando = mysql_fetch_assoc($edit);

if($editando['usuario'] == ''){

	// Insert usuario

	$insertSQL = sprintf("INSERT INTO monitor_usuarios (usuario, perfil, colonia, distrito) VALUES (%s, %s, %s, %s)",
						 GetSQLValueString($_POST['usuario'], "text"),
					     GetSQLValueString($_POST['perfil'], "text"),
					     GetSQLValueString($_POST['colonia'], "text"),
						 GetSQLValueString($_POST['distrito'], "text"));
  $Result = mysql_query($insertSQL, $conn) or die(mysql_error());
}


// Datos Colonia ...
$query_col = sprintf("SELECT * FROM monitor_colonias WHERE nombre_colonia = %s ORDER BY nombre_colonia DESC LIMIT 1",
GetSQLValueString($_POST['nombre_colonia'], "int"));
$col = mysql_query($query_col, $conn) or die(mysql_error());
$colonia = mysql_fetch_assoc($col);

$seccion = $colonia['seccion'];


// Y Distrito Local
$query_dis= sprintf("SELECT distrito_local FROM monitor_distritos WHERE seccion = %s",
GetSQLValueString($seccion, "int"));
$dis = mysql_query($query_dis, $conn) or die(mysql_error());
$distrito = mysql_fetch_assoc($dis);

$distrito_local = $distrito['distrito_local'];


$dia = $_POST['dia'];
$mes = $_POST['mes'];
	if($mes == 'Enero'){ $el_mes = '01'; }
	if($mes == 'Febrero'){ $el_mes = '02'; }
	if($mes == 'Marzo'){ $el_mes = '03'; }
	if($mes == 'Abril'){ $el_mes = '04'; }
	if($mes == 'Mayo'){ $el_mes = '05'; }
	if($mes == 'Junio'){ $el_mes = '06'; }
	if($mes == 'Julio'){ $el_mes = '07'; }
	if($mes == 'Agosto'){ $el_mes = '08'; }
	if($mes == 'Septiembre'){ $el_mes = '09'; }
	if($mes == 'Octubre'){ $el_mes = '10'; }
	if($mes == 'Noviembre'){ $el_mes = '11'; }
	if($mes == 'Diciembre'){ $el_mes = '12'; }
$anio = $_POST['anio'];

$fecha = $anio.'-'.$el_mes.'-'.$dia;


// Insert Seguimiento

	$insertSQL = sprintf("INSERT INTO monitor (id_publicacion, fecha, dia, mes, anio, distrito, colonia, usuario, perfil, publicacion_titulo, publicacion_link, comentario) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
					   
					     GetSQLValueString($_POST['id_publicacion'], "int"),
						 GetSQLValueString($fecha, "text"),
					     GetSQLValueString($dia, "text"),
						 GetSQLValueString($mes, "text"),
						 GetSQLValueString($anio, "int"),
						 GetSQLValueString($distrito_local, "text"),
					     GetSQLValueString($_POST['nombre_colonia'], "text"),
					     GetSQLValueString($_POST['usuario'], "text"),
					     GetSQLValueString($_POST['perfil'], "text"),
					     GetSQLValueString($publicacion['titulo'], "text"),
					     GetSQLValueString($publicacion['link'], "text"),
						 GetSQLValueString($_POST['comentario'], "text"));

  $Result = mysql_query($insertSQL, $conn) or die(mysql_error());
  
  
  

 // Vamonos! 
  
  $insertGoTo = $url."seguimiento-publicacion.php?id=".$_POST['id_publicacion'];
  header(sprintf("Location: %s", $insertGoTo));

?>