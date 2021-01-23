<?php //error_reporting(0);
$hostname_conn = "localhost";
$database_conn = "consuvenia";
$username_conn = "consuvenia";
$password_conn = "Aha101213##13";
$conn  = mysql_pconnect($hostname_conn, $username_conn, $password_conn) or trigger_error(mysql_error(),E_USER_ERROR); 

mysql_query("SET NAMES 'utf8'"); 
mysql_select_db($database_conn, $conn);

date_default_timezone_set('America/Los_Angeles');


// Vars
$title = "C-Panel";
$url = "https://www.total-mkt.com/_sitios/diputada/cpanel/";
$url_in = 'https://www.total-mkt.com/_sitios/diputada/cpanel/';

$llave_captcha = "6LcTBRgUAAAAAEF7YcyBXCgWLU-5icFBql2kNxrW";


// ---------- Lenguaje ----------------- // 
$lenguaje = $_SESSION['lenguaje'];
if($lenguaje == 'esp'){ include("idioma/esp.php");}
if($lenguaje == 'eng'){ include("idioma/eng.php");}
if($lenguaje == ''){ include("idioma/esp.php");}

// EMAIL DE ENVIOS

$envios_email = 'app@tocappme.com';
$envios_host = 'smtpout.secureserver.net';
$envios_mailer = 'smtp';
$envios_puerto = 80;
$envios_password = 'Aha101213##13';

// ---------------------- Limpiar Fotos  --------------------- //

function sanear_fotos($string)
{

    $string = trim($string);

    $string = str_replace(
        array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä', 'A'),
        array('a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a'),
        $string
    );

    $string = str_replace(
        array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë' , 'E'),
        array('e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e'),
        $string
    );

    $string = str_replace(
        array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î', 'I'),
        array('i', 'i', 'i', 'i', 'i', 'i', 'i', 'i', 'i'),
        $string
    );

    $string = str_replace(
        array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô', 'O'),
        array('o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o'),
        $string
    );

    $string = str_replace(
        array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü', 'U'),
        array('u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u'),
        $string
    );

    $string = str_replace(
        array('ñ', 'Ñ', 'ç', 'Ç'),
        array('n', 'n', 'c', 'c',),
        $string
    );
	$string = str_replace(
        array('Q', 'W', 'R', 'T', 'Y', 'P', 'S', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'Z', 'X', 'C', 'V', 'B', 'N', 'M'),
        array('q', 'w', 'r', 't', 'y', 'p', 's', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'z', 'x', 'c', 'v', 'b', 'n', 'm'),
        $string
    );

    //Esta parte se encarga de eliminar cualquier caracter extraño
    $string = str_replace(
        array("\\", "¨", "º", "-", "~",
             "#", "@", "|", "!", "\"",
             "·", "$", "%", "&", "/",
             "(", ")", "?", "'", "¡",
             "¿", "[", "^", "`", "]",
             "+", "}", "{", "¨", "´",
             ">", "<", ";", ",", ":",
             " "),
        '-',
        $string
    );


    return $string;
}

// String....

function sanear_string($string)
{
 
    $string = trim($string);
 
    $string = str_replace(
        array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä', 'A'),
        array('a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a'),
        $string
    );
 
    $string = str_replace(
        array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë' , 'E'),
        array('e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e'),
        $string
    );
 
    $string = str_replace(
        array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î', 'I'),
        array('i', 'i', 'i', 'i', 'i', 'i', 'i', 'i', 'i'),
        $string
    );
 
    $string = str_replace(
        array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô', 'O'),
        array('o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o'),
        $string
    );
 
    $string = str_replace(
        array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü', 'U'),
        array('u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u'),
        $string
    );
 
    $string = str_replace(
        array('ñ', 'Ñ', 'ç', 'Ç'),
        array('n', 'n', 'c', 'c',),
        $string
    );
	$string = str_replace(
        array('Q', 'W', 'R', 'T', 'Y', 'P', 'S', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'Z', 'X', 'C', 'V', 'B', 'N', 'M'),
        array('q', 'w', 'r', 't', 'y', 'p', 's', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'z', 'x', 'c', 'v', 'b', 'n', 'm'),
        $string
    );
 
    //Esta parte se encarga de eliminar cualquier caracter extraño
    $string = str_replace(
        array("\\", "¨", "º", "-", "~",
             "#", "@", "|", "\"",
             "·", "$", "%", "&", "/",
             "(", ")",
             "[", "^", "`", "]",
             "+", "}", "{", "¨", "´",
             ">", "<",
             " "),
        '-',
        $string
    );
	//Esta parte se encarga de eliminar cualquier caracter extraño
    $string = str_replace(
        array("!","?", "'", "¡",
             "¿", "[", "^", "`", "]",
             "+", "'", ";", ",", ":"),
        '',
        $string
    );
 
 
    return $string;
}

