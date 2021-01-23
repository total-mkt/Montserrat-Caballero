<?php 
// Servicio de Google para cambio de divisas
// Se definen los parámetros
$amount         = urlencode("1");   // Convertir 1
$from_Currency  = urlencode("USD"); // USD (Dolar USA)
$to_Currency    = urlencode("MXN"); // a COP (Pesos Colombianos)
// Se genera la URL
$url            = $amount.'+'.$from_Currency.'+to+'.$to_Currency;
// Se consultan los datos desde Google
$rawdata = file_get_contents('https://www.google.com/search?q='.$url);
// Se procesa la respuesta
$data = explode('"', $rawdata);
$data = explode(' ', $data['3']);
$var = $data['1'];
$var = preg_replace('/[^0-9\.]/', '', $var);
$var = doubleval($var);
// Se presenta la respuesta con el formato deseado. $var contiene el valor de 
// conversion final
echo '<h3>Google Currency:</h3> <i>' . $amount . ' ' . $from_Currency . '</i> equivale a <i>' . $var . ' ' . $to_Currency . '</i>';
echo '<hr />';
?>