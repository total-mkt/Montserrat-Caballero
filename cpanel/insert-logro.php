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

// Imagen Portada

$status = "";
if ($_POST["action"] == "upload") {
	// obtenemos los datos del archivo 
	$tamano2 = $_FILES["archivo2"]['size'];
	$tipo2 = $_FILES["archivo2"]['type'];
	$archivo2 = $_FILES["archivo2"]['name'];
	$prefijo2 = substr(md5(uniqid(rand())),0,6);
	
	if ($archivo2 != "") {
		$el_archivo2 = sanear_fotos($archivo2);
		// guardamos el archivo a la carpeta files
		$imagen_principal2 =  "../img/".$prefijo2."_".$el_archivo2;
		$ruta_imagen_principal2 =  "img/".$prefijo2."_".$el_archivo2;
		if (copy($_FILES['archivo2']['tmp_name'],$imagen_principal2)) {
			$status = "Archivo2 subido: <b>".$archivo2."</b>";
		} else {
			$status = "Error al subir el archivo";
		}
	} else {
		$status = "Error al subir archivo";
	}
}


$dia = date('d');
$mes = date('m');
$anio = date('Y');

$fecha = $anio.'-'.$mes.'-'.$dia;

$categoria_permalink = sanear_string($_POST['categoria']);


// Insert 

	$insertSQL = sprintf("INSERT INTO logros (fecha, dia, mes, anio, categoria, categoria_permalink, titulo, permalink, excerp, contenido, imagen, portada, video, mostrar) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
					   
					     GetSQLValueString($fecha, "text"),
					     GetSQLValueString($dia, "text"),
						 GetSQLValueString($mes, "text"),
						 GetSQLValueString($anio, "int"),
						 GetSQLValueString($_POST['categoria'], "text"),
						 GetSQLValueString($categoria_permalink, "text"),
					     GetSQLValueString($_POST['titulo'], "text"),
					     GetSQLValueString($_POST['permalink'], "text"),
					     GetSQLValueString($_POST['excerp'], "text"),
					     GetSQLValueString($_POST['contenido'], "text"),
						 GetSQLValueString($ruta_imagen_principal, "text"),
						 GetSQLValueString($ruta_imagen_principal2, "text"),
						 GetSQLValueString($_POST['video'], "text"),
						 GetSQLValueString($_POST['mostrar'], "text"));

  $Result = mysql_query($insertSQL, $conn) or die(mysql_error());
  
  
  

 // Vamonos! 
  
  $insertGoTo = $url."catalogo-logros.php";
  header(sprintf("Location: %s", $insertGoTo));

?>