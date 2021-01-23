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




// Imagen Principal

$status = "";
if ($_POST["action"] == "upload") {
	// obtenemos los datos del archivo 
	$tamano = $_FILES["archivo"]['size'];
	$tipo = $_FILES["archivo"]['type'];
	$archivo = $_FILES["archivo"]['name'];
	$prefijo = substr(md5(uniqid(rand())),0,6);
	
	if ($archivo != "") {
		$el_archivo = sanear_fotos($archivo);
		// guardamos el archivo a la carpeta files
		$imagen_principal =  "../img/".$prefijo."_".$el_archivo;
		$ruta_imagen_principal =  "img/".$prefijo."_".$el_archivo;
		if (copy($_FILES['archivo']['tmp_name'],$imagen_principal)) {
			$status = "Archivo subido: <b>".$archivo."</b>";
		} else {
			$status = "Error al subir el archivo";
		}
	} else {
		$status = "Error al subir archivo";
	}
}


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


// Insert 

	$insertSQL = sprintf("INSERT INTO monitor_publicacion (titulo, influencer, link, contenido, imagen, fecha, dia, mes, anio) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s)",
					   
					     GetSQLValueString($_POST['titulo'], "text"),
					     GetSQLValueString($_POST['influencer'], "text"),
					     GetSQLValueString($_POST['link'], "text"),
					     GetSQLValueString($_POST['contenido'], "text"),
						 GetSQLValueString($ruta_imagen_principal, "text"),
						 GetSQLValueString($fecha, "text"),
					     GetSQLValueString($dia, "text"),
						 GetSQLValueString($mes, "text"),
						 GetSQLValueString($anio, "int"));

  $Result = mysql_query($insertSQL, $conn) or die(mysql_error());
  
  
  

 // Vamonos! 
  
  $insertGoTo = $url."catalogo-publicacion.php";
  header(sprintf("Location: %s", $insertGoTo));

?>