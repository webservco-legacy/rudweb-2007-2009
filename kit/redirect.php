<?php
/*
redirect.php
16:09 2008-03-12
*/

error_reporting(E_ALL);

define("_RSWEB_PUBFIL", TRUE);

require_once './inc/config.inc.php';
require_once './inc/rswebc.inc.php';
require_once _RSWEB_INC_DIR . 'rswebf.inc.php';

dbopen();

// GET SITE SETTINGS
if(_RSWEB_DBCFG === "1") {
  // query
  $query_cfg = "SELECT * FROM "._RSWEB_PRE."set_cfg";
  $rst_query_cfg = mysql_query($query_cfg) or require _RSWEB_SITE_DIR . 'lib/myerr.php';
  $total_cfg = mysql_num_rows($rst_query_cfg);
  for ($cfg=1; $cfg<=$total_cfg; $cfg++) {
    $row_rst_cfg = mysql_fetch_assoc($rst_query_cfg);
    $row_rst_cfg['set_val'] = strval($row_rst_cfg['set_val']);
    define("_RSWEB_CFG_".$row_rst_cfg['set_set'], $row_rst_cfg['set_val']);
  }
  define("_RSWEB_CFG_COPY", "&copy; " . substr(_RSWEB_CFG_START, 0, 4) . " " . _RSWEB_CFG_CLCOM);
}
else {require_once _RSWEB_INC_DIR . 'rswebcfg.inc.php';}

// START SESSION
//session_cache_limiter ('public, must-revalidate');
session_cache_limiter('nocache');
session_cache_expire(600); //minutes
ini_set("session.gc_maxlifetime","36000"); //seconds
session_start();

if (isset($_GET['url']) && isset($_SERVER['HTTP_REFERER'])) {
  $parsed_url = $_GET['url'];
  $parsed_url = urldecode($parsed_url);
  $parsed_url = eregi_replace('&','&amp;',$parsed_url);
  $rsweb_stats_page = $parsed_url;
  $stats_redirect_referer = strpos($_SERVER['HTTP_REFERER'], _RSWEB_SITE_URL);
  if ($stats_redirect_referer !== false) {
    doStats();
    dbclose(dbopen());
    header("Location: $parsed_url");
    exit;
  }
}
else {
  dbclose(dbopen());
  require_once './lib/404.php';
}
?>