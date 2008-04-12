<?php
/*
./setup/cfg/cfg_rudweb.inc.php
12:57 2008-04-06

rudweb configration
do not modify this file
*/
define('_RUDWEB_NAME', 'rudweb');
define('_RUDWEB_PHP_VER', '4.3.4');
$acts = array('index', 'verif', 'engn', 'lngs', 'skins', 'usett', 'cfgs', 'dbs', 'finish', 'removed', 'removefu', 'removef');
$sets = array('install', 'upgrade', 'remove');
$langs = array('en', 'de', 'es', 'fr', 'it', 'ro'); // don't need this yet

$eol = "\n";

$config_file_path = "inc/";
$config_file_name = "config.inc.php";

$rudwebcfg_file_path = "inc/";
$rudwebcfg_file_name = "rudwebcfg.inc.php";

$lang_file_path    = "inc/langs/";
$lang_file_name    = "langcfg.inc.php";

$skin_file_path     = "skins/";
$skin_file_name     = "skin.info.php";

$sql_file_name     = "dbs.sql";
$sql_delimiter     = ";";

$file_time_stamp = date("H:i Y-m-d");
?>