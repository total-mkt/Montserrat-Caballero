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



// Update Solicitud de amistad
	$updateSQL = sprintf("UPDATE monitor_publicacion SET titulo = %s, influencer = %s, link = %s, contenido = %s, imagen = %s WHERE id = %s",
						 GetSQLValueString($_POST['titulo'], "text"),
						 GetSQLValueString($_POST['influencer'], "text"),
						 GetSQLValueString($_POST['link'], "text"),
						 GetSQLValueString($_POST['contenido'], "text"),
						 GetSQLValueString($img_principal, "text"),
					     GetSQLValueString($_POST['id'], "text"));
					   

  mysql_select_db($database_conn, $conn);
  $UpdateResult = mysql_query($updateSQL, $conn) or die(mysql_error());



  $insertGoTo = $url."editar-publicacion.php?id=".$_POST['id'];
  header(sprintf("Location: %s", $insertGoTo));

?>