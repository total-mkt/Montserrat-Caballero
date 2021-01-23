<?php
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
$materno = $user['materno'];
$direccion = $user['direccion'];
$cp = $user['cp'];
$ciudad = $user['ciudad'];
$sexo = $user['sexo'];
$foto = $user['foto'];
$mensaje = $user['mensaje'];
$facebook = $user['facebook'];
$twitter = $user['twitter'];

$nombre_completo = $nombre.' '.$paterno.' '.$materno;

?>