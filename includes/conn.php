<?php error_reporting(0);

$hostname_conn = "localhost";
$database_conn = "consuvenia";
$username_conn = "consuvenia";
$password_conn = "Aha101213##13";
$conn  = mysql_pconnect($hostname_conn, $username_conn, $password_conn) or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_query("SET NAMES 'utf8'"); 
mysql_select_db($database_conn, $conn);


// Url
$url = "https://www.total-mkt.com/_sitios/diputada/";

$desarrollo = "https://www.total-mkt.com/";

// Vars contacto
$title = "Diputada Montserrat Caballero";
$email_empresa = "hola@montserratcaballero.com";
$telefono = "(664) 121-9282";
$direccion = "Sánchez Taboada, Tijuana, B.C.";

//Redes
$facebook = "https://www.facebook.com/MontserratCaballero.Bc/";
$instagram = "https://www.instagram.com/montserratcaballero.bc/";
$twitter = "https://www.twitter.com/MontseMorenaBC";
$youtube = "https://www.youtube.com/channel/UCDC2sRkJav0vkfo2BIwBiJw";

// EMAIL DE ENVIOS

$envios_email = 'contacto@total-mkt.com';
$envios_host = 'smtpout.secureserver.net';
$envios_mailer = 'smtp';
$envios_puerto = 80;
$envios_password = 'Aha101213##13';

// Footer
$desc_footer = 'Desde mi toma de protesta como diputada, he ejercido como presidenta de la Jucopo (Junta de Coordinación Política) de la XXIII Legislatura, siendo la única mujer en encabezarla por tres periodos consecutivos, trabajando siempre bajo los valores éticos y morales de la Cuarta Transformación.';
	
$desc_congreso = 'Represento al órgano de gobierno del Estado de Baja California, al que le corresponde el ejercicio de las funciones legislativas, de fiscalización, así como el ámbito de la gestoría comunitaria que la Constitución Política de los Estados Unidos Mexicanos y la Constitución Local le confieren.';
?>