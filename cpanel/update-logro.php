<?php session_start();
$Bee_in = $_SESSION[ 'Cookie_bee' ];

require_once( 'includes/conn.php' );
require_once( 'includes/acceso.php' );
include( 'includes/logout.php' );
mysql_select_db( $database_conn, $conn );

include( 'includes/function-string.php' );
include( 'includes/datos-empleados.php' );


$i_principal = $_POST['i_principal'];
$i_portada = $_POST['i_portada'];


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
			$status = "Archivo 2 subido: <b>".$archivo."</b>";
		} else {
			$status = "Error al subir el archivo";
		}
	} else {
		$status = "Error al subir archivo";
	}
}

if( $ruta_imagen_principal2 != "") {
		$img_principal2 = $ruta_imagen_principal2;
		//unlink($i_principal);
}


if( $ruta_imagen_principal2 == "") {
		$img_principal2 = $i_portada;
}



// Update Solicitud de amistad
	$updateSQL = sprintf("UPDATE logros SET categoria = %s, video = %s, titulo = %s, permalink = %s, contenido = %s, imagen = %s, portada = %s, excerp = %s, mostrar = %s WHERE id = %s",
						 GetSQLValueString($_POST['categoria'], "text"),
						 GetSQLValueString($_POST['video'], "text"),
						 GetSQLValueString($_POST['titulo'], "text"),
						 GetSQLValueString($_POST['permalink'], "text"),
						 GetSQLValueString($_POST['contenido'], "text"),
						 GetSQLValueString($img_principal, "text"),
						 GetSQLValueString($img_principal2, "text"),
						 GetSQLValueString($_POST['excerp'], "text"),
						 GetSQLValueString($_POST['mostrar'], "text"),
					   GetSQLValueString($_POST['id'], "text"));
					   

  mysql_select_db($database_conn, $conn);
  $UpdateResult = mysql_query($updateSQL, $conn) or die(mysql_error());



  $insertGoTo = $url."catalogo-logros.php";
  header(sprintf("Location: %s", $insertGoTo));

?>