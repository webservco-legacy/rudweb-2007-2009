<?php
/*
./setup/cfg/cfg_ubws.inc.php
16:06 2008-01-14

ubws configration
do not modify this file
*/
define('_UBWS_NAME', 'ubws');
define('_UBWS_PHP_VER', '4.3.4');
$acts = array('index', 'verif', 'engn', 'lngs', 'thms', 'usett', 'cfgs', 'dbs', 'finish', 'removed', 'removef');
$sets = array('install', 'upgrade', 'remove');
$langs = array('en', 'de', 'es', 'fr', 'it', 'ro'); // don't need this yet

$eol = "\n";

$config_file_path = "inc/";
$config_file_name = "config.inc.php";

$ubwscfg_file_path = "inc/";
$ubwscfg_file_name = "ubwscfg.inc.php";

$lang_file_path    = "inc/langs/";
$lang_file_name    = "langcfg.inc.php";

$thm_file_path     = "themes/";
$thm_file_name     = "theme.info.php";

$sql_file_name     = "dbs.sql";
$sql_delimiter     = ";";

$file_time_stamp = date("Y-m-d H:i:s");
?>