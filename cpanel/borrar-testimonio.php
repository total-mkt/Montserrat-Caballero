<?php session_start();
$Bee_in = $_SESSION[ 'Cookie_bee' ];

require_once( 'includes/conn.php' );
require_once( 'includes/acceso.php' );
include( 'includes/logout.php' );
mysql_select_db( $database_conn, $conn );

include( 'includes/function-string.php' );
include( 'includes/datos-empleados.php' );



$id = $_REQUEST['id'];

// Borrar Usuario
  $updateSQL = sprintf("DELETE FROM testimonios WHERE id = %s",
					   GetSQLValueString($id, "text"));
					   

  mysql_select_db($database_conn, $conn);
  $UpdateResult = mysql_query($updateSQL, $conn) or die(mysql_error());



// Ir a Link
  $insertGoTo = "./catalogo-testimonio.php";
  header(sprintf("Location: %s", $insertGoTo));
?>
