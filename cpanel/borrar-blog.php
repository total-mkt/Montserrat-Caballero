<?php session_start();
$Bee_in = $_SESSION[ 'Cookie_bee' ];

require_once( 'includes/conn.php' );
require_once( 'includes/acceso.php' );
include( 'includes/logout.php' );
mysql_select_db( $database_conn, $conn );

include( 'includes/function-string.php' );
include( 'includes/datos-empleados.php' );



$track_cliente = $_REQUEST['track_cliente'];
$estatus = 'Inactivo'; 

// Borrar Usuario
  $updateSQL = sprintf("DELETE FROM catalogo_clientes_proveedores WHERE track_cliente = %s",
					   GetSQLValueString($track_cliente, "text"));
					   

  mysql_select_db($database_conn, $conn);
  $UpdateResult = mysql_query($updateSQL, $conn) or die(mysql_error());



// Ir a Link
  $insertGoTo = "./catalogo-clientes.php";
  header(sprintf("Location: %s", $insertGoTo));
?>
