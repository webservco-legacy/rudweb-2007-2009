<?php
/*
./redirect.php
09:49 2008-06-04
*/

error_reporting(E_ALL);

define("_RUDWEB_PUBFIL", TRUE);

require_once './inc/config.inc.php';
require_once './inc/rudwebc.inc.php';
require_once _RUDWEB_INC_DIR . 'rudwebf.inc.php';

rudweb_dbopen($rudweb_dbtype, $rudweb_dbhost, $rudweb_dbport, $rudweb_dbuser, $rudweb_dbpass, $rudweb_dbname);

// GET SITE SETTINGS

if(_RUDWEB_DBCFG === "1") {
  // query
  $query_cfg = "SELECT * FROM "._RUDWEB_PRE."set_cfg";
  $rst_query_cfg = mysql_query($query_cfg) or require _RUDWEB_SITE_DIR . 'lib/myerr.php';
  $total_cfg = mysql_num_rows($rst_query_cfg);
  for ($cfg=1; $cfg<=$total_cfg; $cfg++) {
    $row_rst_cfg = mysql_fetch_assoc($rst_query_cfg);
    $row_rst_cfg['set_val'] = strval($row_rst_cfg['set_val']);
    define("_RUDWEB_CFG_".$row_rst_cfg['set_set'], $row_rst_cfg['set_val']);
  }
  define("_RUDWEB_CFG_COPY", "&copy; " . substr(_RUDWEB_CFG_START, 0, 4) . " " . _RUDWEB_CFG_CLCOM);
}
else {require_once _RUDWEB_INC_DIR . 'rudwebcfg.inc.php';}

require_once _RUDWEB_INC_DIR . 'rudwebm.inc.php';

// START SESSION
session_cache_limiter('public, must-revalidate');
//session_cache_limiter('nocache');
session_cache_expire(600); //minutes
ini_set("session.gc_maxlifetime","36000"); //seconds
//setcookie("PHPSESSID",$_COOKIE['PHPSESSID'],time()+1800);
session_start();
header("ETag: PUB" . time());
header("Last-Modified: " . gmdate("D, d M Y H:i:s", time()-10) . " GMT");
header("Expires: " . gmdate("D, d M Y H:i:s", time() + 5) . " GMT");
header("Pragma: no-cache");
header("Cache-Control: max-age=1, s-maxage=1, no-cache, must-revalidate");

if (isset($_GET['url']) && isset($_SERVER['HTTP_REFERER'])) {
  $parsed_url = $_GET['url'];
  $parsed_url = urldecode($parsed_url);
  $parsed_url = eregi_replace('&','&amp;',$parsed_url);
  $rudweb_stats_page = $parsed_url;
  $stats_redirect_referer = strpos($_SERVER['HTTP_REFERER'], _RUDWEB_SITE_URL);
  if ($stats_redirect_referer !== false) {
    doStats();
    rudweb_dbclose($rudweb_dbtype, rudweb_dbopen($rudweb_dbtype, $rudweb_dbhost, $rudweb_dbport, $rudweb_dbuser, $rudweb_dbpass, $rudweb_dbname));
    header("Location: $parsed_url");
    exit;
  }
}
else {
  rudweb_dbclose($rudweb_dbtype, rudweb_dbopen($rudweb_dbtype, $rudweb_dbhost, $rudweb_dbport, $rudweb_dbuser, $rudweb_dbpass, $rudweb_dbname));
  require_once './lib/404.php';
}
?>