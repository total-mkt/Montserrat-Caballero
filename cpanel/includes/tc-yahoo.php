<?php 
$de = 'USD';
$a = 'MXN';
$url = 'https://finance.yahoo.com/quote/'.$de.$a.'=X/';
$handle = fopen($url, 'r');
 
if ($handle) {
    $result = fgetcsv($handle);
    fclose($handle);
}
 
echo '1 '.$de.' vale '.$result[0].' '.$a.' De acuerdo a la información generada el '.$result[1].' '.$result[2]; 
?>