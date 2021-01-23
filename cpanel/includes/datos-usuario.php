<?php require_once('conn.php');
include('function-string.php');
mysql_select_db($database_conn, $conn);
$Bee_in = $_SESSION['Cookie_bee'];

// Perfil Personal
$query_user = sprintf("SELECT * FROM usuarios WHERE track_usuario= %s",
GetSQLValueString($Bee_in, "text"));
$dats = mysql_query($query_user, $conn) or die(mysql_error());
$user = mysql_fetch_assoc($dats);

$id_usuario = $user['id_usuario'];
$tipo_usuario = $user['tipo_usuario'];
$track_usuario = $user['track_usuario'];
$email = $user['email'];
$telefono = $user['telefono'];
$nombre = $user['nombre'];
$paterno = $user['paterno'];
$materno = $user['nombre'];
$direccion = $user['direccion'];
$cp = $user['cp'];
$ciudad = $user['ciudad'];
$sexo = $user['sexo'];
$foto = $user['foto'];
$mensaje = $user['mensaje'];

$latitud = $user['lat'];
$longitud = $user['lng'];

$modo_perfil = $user['modo_perfil'];

// Privacidad
$mostrar_mi_perfil = $user['mostrar_mi_perfil'];
$mostrar_mi_telefono = $user['mostrar_mi_telefono'];
$mostrar_mi_email = $user['mostrar_mi_email'];
?>