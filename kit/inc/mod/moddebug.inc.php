<?php
/*
./inc/mod/moddebug.inc.php
12:50 2008-04-05
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once './../lib/404.php';}

function debugOutput($what) {
  if (_RUDWEB_CFG_DEBUG === "1") {
    echo "\n<HR WIDTH=\"50%\" ALIGN=\"left\">\n<PRE><B>";
    echo $what . "</B>:\n";
    switch($what) {
      case "SESSION": {print_r($_SESSION); break;}
      case "REQUEST": {print_r($_REQUEST); break;}
      case "GET": {print_r($_GET); break;}
      case "POST": {print_r($_POST); break;}
      case "FILES": {print_r($_FILES); break;}
      case "SERVER": {print_r($_SERVER); break;}
      case "CONSTANTS": {print_r(get_defined_constants(true));; break;}
      case "PHPINI": {print_r(ini_get_all());; break;}
      default: {break;}
    }
    echo "</PRE>\n";
  }
}
?>