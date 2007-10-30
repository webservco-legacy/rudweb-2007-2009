<?php
/*
redirect.php
10:31 28.10.2007
*/

error_reporting(E_ALL);

define("_UBWS_PUBFIL", TRUE);

require_once './inc/config.inc.php';
require_once './inc/ubwsc.inc.php';
require_once _UBWS_INC_DIR . 'ubwsf.inc.php';

// START SESSION
session_cache_limiter ('public, must-revalidate');
session_cache_expire(600); //minutes
ini_set("session.gc_maxlifetime","36000"); //seconds
session_start();

if (isset($_GET['url']) && isset($_SERVER['HTTP_REFERER'])) {
  $parsed_url = $_GET['url'];
  $parsed_url = urldecode($parsed_url);
  $parsed_url = eregi_replace('&','&amp;',$parsed_url);
  $ubws_stats_page = $parsed_url;
  $stats_redirect_referer = strpos($_SERVER['HTTP_REFERER'], _UBWS_SITE_URL);
  if ($stats_redirect_referer !== false) {
    dbopen();
    webStats($ubws_cfg['site']['ignorip']);
    dbclose(dbopen());
    header("Location: $parsed_url");
    exit;
  }
}
else {
  require_once './lib/404.php';
}
?>