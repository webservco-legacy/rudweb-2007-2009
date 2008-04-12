<?php
/*
./lib/pic.php
12:50 2008-04-05
*/
/*
WORK ON THIS + UBTHUMB
FOR
SECURITY + FUNCTIONALITY!
*/
error_reporting(E_ALL);

define("_RUDWEB_PUBFIL", TRUE);
//if(!defined('_RUDWEB_PUBFIL')) {require_once './../lib/404.php';}
require_once '../inc/config.inc.php';
require_once '../inc/rudwebc.inc.php';
require_once _RUDWEB_INC_DIR . 'rudwebf.inc.php';

// START SESSION
session_cache_limiter ('public, must-revalidate');
session_cache_expire(600); //minutes
ini_set("session.gc_maxlifetime","36000"); //seconds
session_start();

if (isset($_GET['imgfile']) && isset($_SESSION[_RUDWEB_PRE.'usr_level'])) {
  require_once './ubthumb.php';
}
else {
  require_once './404.php';
}
?>