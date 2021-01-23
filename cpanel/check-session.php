<?php session_start();
require_once('includes/conn.php');
require_once('includes/acceso.php');
include('includes/logout.php');
//include('includes/datosip.php');
$Bee_in = $_SESSION['Cookie_bee'];
$Chat_in = $_SESSION['id'];
mysql_select_db($database_conn, $conn);

include('includes/function-string.php');
?>
<script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>


	
<script>
function getLocation()
{
    if (navigator.geolocation)
    {
        navigator.geolocation.getCurrentPosition(showPosition);
    }
}
function showPosition(position)
{
    var lat = position.coords.latitude;
    var long = position.coords.longitude;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
        }
    };
    xmlhttp.open("GET", "getLocation.php?latitude=" + lat + "&longitude=" + long, true);
    xmlhttp.send();
}
getLocation();
	
</script>
<script>window.location.replace("<?php echo $url_in;?>");</script>
<?php
	 $insertGoTo = $url_in."dashboard.php";
	header(sprintf("Location: %s", $insertGoTo));

?>