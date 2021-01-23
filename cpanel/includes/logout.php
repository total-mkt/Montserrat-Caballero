<?php 
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}
// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles
  $_SESSION['Cookie_bee'] = NULL;
  $_SESSION['EM_UserGroup'] = NULL;
  $_SESSION['PrevUrl'] = NULL;
  // Facebook
  $_SESSION['FBID'] = NULL;
  $_SESSION['FULLNAME'] = NULL;
  $_SESSION['EMAIL'] =  NULL;	
  unset($_SESSION['Cookie_bee']);
  unset($_SESSION['EM_UserGroup']);
  unset($_SESSION['PrevUrl']);
  // Facebook
  unset($_SESSION['FBID']);
  unset($_SESSION['FULLNAME']);
  unset($_SESSION['EMAIL']);
  // Chat
 $_SESSION['id'] = NULL;
 $_SESSION['username'] = NULL;
 unset($_SESSION['id']);
 unset($_SESSION['username']);
	
  $logoutGoTo = $url;
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}
?>