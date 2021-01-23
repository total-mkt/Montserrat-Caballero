<?php
include('ip2locationlite.class.php');
 
 
 // Function to get the client ip address
function get_client_ip_env() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
 
    return $ipaddress;
}
$yourip=get_client_ip_env();



//Load the class
$ipLite = new ip2location_lite;
$ipLite->setKey('0e7db9e55d670898de9acc27c323ab3487d599f89b3fabdb5a493905480f835f');
 
//Get errors and locations
//$locations = $ipLite->getCity($_SERVER['REMOTE_ADDR']);
$locations = $ipLite->getCity($yourip);
$errors = $ipLite->getError();

/* 
//Getting the result
echo "<p>\n";
echo "<strong>First result</strong><br />\n";
*/
if (!empty($locations) && is_array($locations)) {
  foreach ($locations as $field => $val) {
	  
	  $var =$field;
	  $$var =$val;
    //echo $field . ' : ' . $val . "<br />\n";
  }
}

/*echo "</p>\n";
 
echo 'Ciudad:' . $cityName;
 
//Show errors
echo "<p>\n";
echo "<strong>Dump of all errors</strong><br />\n";

*/

if (!empty($errors) && is_array($errors)) {
  foreach ($errors as $error) {
    //echo var_dump($error) . "<br /><br />\n";
  }
} else {
	
  //echo "No errors" . "<br />\n";
}

$ip_Address=$ipAddress; //74.125.45.100
$ip_countryCode=$countryCode; //US
$ip_countryName=$countryName; //UNITED STATES
$ip_regionName=$regionName; //CALIFORNIA
$ip_cityName=$cityName; //MOUNTAIN VIEW
$ip_zipCode=$zipCode; //94043
$ip_latitude=$latitude; //37.3956
$ip_longitude=$longitude; //-122.076


//echo "</p>\n";

?>