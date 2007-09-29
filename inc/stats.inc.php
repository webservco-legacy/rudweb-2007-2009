<?php
/*
stats.inc.php
18:36 29.09.2007
*/

$stats_page = 'index';

if(!defined('_UBWS_PUBFIL')) {require_once './../lib/404.php';}

if (isset($_SERVER['REMOTE_ADDR'])) {$stats_ip = $_SERVER['REMOTE_ADDR'];}
else {$stats_ip = 'n/a';}

if (isset($_SERVER['HTTP_USER_AGENT'])) {$stats_browser = $_SERVER['HTTP_USER_AGENT'];}
else {$stats_browser = 'n/a';}

if (isset($_SERVER['REMOTE_HOST'])) {$stats_host = $_SERVER['REMOTE_HOST'];}
else {$stats_host = 'n/a';}

if (isset($_SERVER['HTTP_REFERER'])) {$stats_referer = $_SERVER['HTTP_REFERER'];}
else {$stats_referer = 'n/a';}

if (isset($_SERVER['REQUEST_URI'])) {$stats_requesturi = $_SERVER['REQUEST_URI'];}
else {$stats_requesturi = 'n/a';}

if ($stats_page == 'index' || $_SESSION[_UBWS_PRE.'usr_id'] == '0') {
  $query_lock = "LOCK TABLES `"._UBWS_PRE."var_stats` WRITE";
  mysql_query($query_lock) or require _UBWS_LIB_DIR . 'myerr.php';

  $query_rstId = "SELECT MAX(`stats_id`) FROM `"._UBWS_PRE."var_stats`";
	$rstId=mysql_query($query_rstId) or require _UBWS_LIB_DIR . 'myerr.php';
	$stats_id = (mysql_result($rstId, 0)) + 1;
  mysql_free_result($rstId);

	$query = "INSERT INTO `"._UBWS_PRE."var_stats` (stats_id, usr_id, usr_lang_index, stats_page, stats_ip, stats_date, stats_time, stats_browser, stats_host, stats_referer, stats_requesturi) VALUES ('".$stats_id."', '".$_SESSION[_UBWS_PRE.'usr_id']."', '".$_SESSION[_UBWS_PRE.'usr_lang_index']."', '".$stats_page."', '".$stats_ip."', '".$_SESSION[_UBWS_PRE.'visit_date']."', '".$_SESSION[_UBWS_PRE.'visit_time']."', '".$stats_browser."', '".$stats_host."', '".$stats_referer."', '".$stats_requesturi."')";
	mysql_query($query) or require _UBWS_LIB_DIR . 'myerr.php';
  
  $query_unlock = "UNLOCK TABLES";
  mysql_query($query_unlock) or require _UBWS_LIB_DIR . 'myerr.php';
}
?>