<?php session_start();
$Bee_in = $_SESSION[ 'Cookie_bee' ];

require_once( 'includes/conn.php' );
require_once( 'includes/acceso.php' );
include( 'includes/logout.php' );
mysql_select_db( $database_conn, $conn );

include( 'includes/function-string.php' );
include( 'includes/datos-empleados.php' );


$i_principal = $_POST['i_principal'];
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

if( $ruta_imagen_principal != "") {
		$img_principal = $ruta_imagen_principal;
		//unlink($i_principal);
}


if( $ruta_imagen_principal == "") {
		$img_principal = $i_principal;
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

// Update Solicitud de amistad
	$updateSQL = sprintf("UPDATE testimonios SET fecha = %s, dia = %s, mes = %s, anio = %s, categoria = %s, titulo = %s, permalink = %s, contenido = %s,  foto = %s,  testimonio = %s,  nombre = %s,  apellido = %s, mostrar = %s WHERE id = %s",
						 GetSQLValueString($fecha, "text"),
						 GetSQLValueString($_POST['dia'], "text"),
						 GetSQLValueString($_POST['mes'], "text"),
						 GetSQLValueString($_POST['anio'], "text"),
						 GetSQLValueString($_POST['categoria'], "text"),
						 GetSQLValueString($_POST['titulo'], "text"),
						 GetSQLValueString($_POST['permalink'], "text"),
						 GetSQLValueString($_POST['contenido'], "text"),
						 GetSQLValueString($img_principal, "text"),
						 GetSQLValueString($_POST['testimonio'], "text"),
						 GetSQLValueString($_POST['nombre'], "text"),
						 GetSQLValueString($_POST['apellido'], "text"),
						 GetSQLValueString($_POST['mostrar'], "text"),
					   GetSQLValueString($_POST['id'], "text"));
					   

  mysql_select_db($database_conn, $conn);
  $UpdateResult = mysql_query($updateSQL, $conn) or die(mysql_error());



  $insertGoTo = $url."catalogo-testimonio.php";
  header(sprintf("Location: %s", $insertGoTo));

?>