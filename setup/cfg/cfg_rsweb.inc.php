<?php
/*
./setup/cfg/cfg_rsweb.inc.php
15:48 2008-03-12

rsweb configration
do not modify this file
*/
define('_RSWEB_NAME', 'rsweb');
define('_RSWEB_PHP_VER', '4.3.4');
$acts = array('index', 'verif', 'engn', 'lngs', 'thms', 'usett', 'cfgs', 'dbs', 'finish', 'removed', 'removefu', 'removef');
$sets = array('install', 'upgrade', 'remove');
$langs = array('en', 'de', 'es', 'fr', 'it', 'ro'); // don't need this yet

$eol = "\n";

$config_file_path = "inc/";
$config_file_name = "config.inc.php";

$rswebcfg_file_path = "inc/";
$rswebcfg_file_name = "rswebcfg.inc.php";

$lang_file_path    = "inc/langs/";
$lang_file_name    = "langcfg.inc.php";

$thm_file_path     = "themes/";
$thm_file_name     = "theme.info.php";

$sql_file_name     = "dbs.sql";
$sql_delimiter     = ";";

$file_time_stamp = date("Y-m-d H:i:s");
?>