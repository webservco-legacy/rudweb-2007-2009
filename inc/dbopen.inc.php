<?php
/*
dbopen.inc.php
17:15 29.09.2007
*/

if(!defined('_UBWS_PUBFIL')) {require_once './../lib/404.php';}

$ubws_dbconn = mysql_connect($ubws_dbhost, $ubws_dbuser, $ubws_dbpass) or die('Oups!<BR>' . mysql_error());
mysql_select_db($ubws_dbname) or require _UBWS_LIB_DIR . 'myerr.php';
?>