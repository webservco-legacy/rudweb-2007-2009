<?php
/*
./setup/cfg/cfg_ubws.inc.php
11:17 2008-01-09

ubws configration
do not modify this file
*/
define('_UBWS_NAME', 'ubws');
define('_UBWS_PHP_VER', '4.3.4');
$acts = array('index', 'verif', 'usett' , 'core', 'langs', 'themes', 'cfgs', 'database', 'data', 'finish');
$sets = array('install', 'upgrade', 'remove');

$eol = "\n";

$config_file_path = "inc";
$config_file_name = "config.inc.php";

//$file_time_stamp = date("Y-m-d H:i:s");
?>