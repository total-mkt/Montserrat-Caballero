<script type="text/javascript">
// Salir
var IDLE_TIMEOUT = 600; //600 seconds = 10 min
var _idleSecondsCounter = 0;
document.onclick = function() {
    _idleSecondsCounter = 0;
};
document.onmousemove = function() {
    _idleSecondsCounter = 0;
};
document.onkeypress = function() {
    _idleSecondsCounter = 0;
};
window.setInterval(CheckIdleTime, 1000);

function CheckIdleTime() {
    _idleSecondsCounter++;
    var oPanel = document.getElementById("SecondsUntilExpire");
    if (oPanel)
        oPanel.innerHTML = (IDLE_TIMEOUT - _idleSecondsCounter) + "";
    if (_idleSecondsCounter >= IDLE_TIMEOUT) {
        //alert("Time expired!");
        document.location.href = "./locked.php?usuario=<?php echo $email;?>";
		//document.getElementById("cerrado").click(); //--- Este era!
    }
}
</script>

