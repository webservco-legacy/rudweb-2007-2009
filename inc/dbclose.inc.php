<?php
/*
dbclose.inc.php
17:15 29.09.2007
*/

if(!defined('_UBWS_PUBFIL')) {require_once './../lib/404.php';}

mysql_close($ubws_dbconn);
?>