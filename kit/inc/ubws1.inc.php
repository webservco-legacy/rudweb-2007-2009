<?php
/*
./inc/ubws1.inc.php
12:23 2008-03-12
*/
if(!defined('_UBWS_PUBFIL')) {require_once './../lib/404.php';}

// ERROR REPORTING
// report all errors
error_reporting(E_ALL);
// report all errors except E_NOTICE
//error_reporting(E_ALL ^ E_NOTICE);

//REDIRECT TO INDEX.PHP
if ($_SERVER['REQUEST_URI'][strlen($_SERVER['REQUEST_URI'])-1] === "/") {
    $site_root = _UBWS_SITE_URL . 'index.php';
    header("Location: $site_root");
    exit;
}

// INCLUDE RUNTIME REQUIRED PHP FUNCTIONS
require_once _UBWS_LIB_DIR . 'ubmydate.php';
require_once _UBWS_INC_DIR . 'ubwsf.inc.php';

// SEARCH ENGINE OPTIMIZATION FUNCTION
seo_urls();

// OPEN DATABASE CONNECTION
dbopen();

// GET SITE SETTINGS
if(_UBWS_DBCFG === "1") {
  // query
  $query_cfg = "SELECT * FROM "._UBWS_PRE."set_cfg";
  $rst_query_cfg = mysql_query($query_cfg) or require _UBWS_SITE_DIR . 'lib/myerr.php';
  $total_cfg = mysql_num_rows($rst_query_cfg);
  for ($cfg=1; $cfg<=$total_cfg; $cfg++) {
    $row_rst_cfg = mysql_fetch_assoc($rst_query_cfg);
    $row_rst_cfg['set_val'] = strval($row_rst_cfg['set_val']);
    define("_UBWS_CFG_".$row_rst_cfg['set_set'], $row_rst_cfg['set_val']);
  }
  define("_UBWS_CFG_COPY", "&copy; " . substr(_UBWS_CFG_START, 0, 4) . " " . _UBWS_CFG_CLCOM);
}
else {require_once _UBWS_INC_DIR . 'ubwscfg.inc.php';}

// START SESSION
/*
// try this:
header("ETag: PUB" . time());
header("Last-Modified: " . gmdate("D, d M Y H:i:s", time()-10) . " GMT");
header("Expires: " . gmdate("D, d M Y H:i:s", time() + 5) . " GMT");
header("Pragma: no-cache");
header("Cache-Control: max-age=1, s-maxage=1, no-cache, must-revalidate");
session_cache_limiter("nocache");
*/
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
if (!isset($_SESSION[_UBWS_PRE.'token'])) { // if first load of the page
  //session_regenerate_id(TRUE);
  $_SESSION[_UBWS_PRE.'token'] = md5(uniqid(rand(), TRUE));
  $_SESSION[_UBWS_PRE.'visit_date'] = date("Y-m-d");
  $_SESSION[_UBWS_PRE.'visit_time'] = date("H:i:s");
  //default user data
  $_SESSION[_UBWS_PRE.'usr_id']    = '0';
  $_SESSION[_UBWS_PRE.'usr_level'] = '0';
  $_SESSION[_UBWS_PRE.'usr_alias'] = 'NO_ALIAS';
  $_SESSION[_UBWS_PRE.'usr_name']  = 'NO_NAME';
  // default language
  if (!isset($_SESSION[_UBWS_PRE.'usr_lang_index'])) {$_SESSION[_UBWS_PRE.'usr_lang_index'] = _UBWS_CFG_LANG;}
  //default charset
  if (!isset($_SESSION[_UBWS_PRE.'usr_lang_charset'])) {$_SESSION[_UBWS_PRE.'usr_lang_charset'] = "UTF-8";}
  // default theme
  if (!isset($_SESSION[_UBWS_PRE.'usr_theme_dir'])) {$_SESSION[_UBWS_PRE.'usr_theme_dir'] = _UBWS_CFG_THEME;}
  //reset shopping cart
  if(_UBWS_CFG_CART_ON === "1") {$_SESSION[_UBWS_PRE.'cart'] = NULL;}
  // load login module if user authentification is enabled
  //if(_UBWS_CFG_USR_ON === 1) {require_once _UBWS_INC_DIR . 'login.inc.php';}
  if(_UBWS_CFG_USR_ON === "1") {require_once _UBWS_INC_DIR . 'login.inc.php';}
} // if first load of the page
else {
  if (!isset($_SESSION[_UBWS_PRE.'usr_logged_in'])) {
    // load login module if user authentification is enabled
    if(_UBWS_CFG_USR_ON === "1") {require_once _UBWS_INC_DIR . 'login.inc.php';}
  } // if not logged in
  else if (isset($_SESSION[_UBWS_PRE.'usr_logged_in'])) {
    if(_UBWS_CFG_USR_ON === "1") {$ubws_login_status = 6;}
  } // if logged in
}

// MODULE FUNCTIONS
require_once _UBWS_INC_DIR . 'ubwsm.inc.php';

// START PARSE TIME COUNT
if (_UBWS_CFG_TIMER === "1") {startTimer();}

// LOAD LANGUAGE
require_once _UBWS_LANG_DIR . $_SESSION[_UBWS_PRE.'usr_lang_index'] . '/lang.info.php';
$_SESSION[_UBWS_PRE.'usr_lang_index']      = $ubws_lang_index;
$_SESSION[_UBWS_PRE.'usr_lang_name']       = $ubws_lang_name;
$_SESSION[_UBWS_PRE.'usr_lang_local_name'] = $ubws_lang_local_name;
$_SESSION[_UBWS_PRE.'usr_lang_translator'] = $ubws_lang_translator;
$_SESSION[_UBWS_PRE.'usr_lang_charset']    = $ubws_lang_charset;
require_once _UBWS_LANG_DIR . $_SESSION[_UBWS_PRE.'usr_lang_index'] . '/langcfg.inc.php';
require_once _UBWS_LANG_DIR . $_SESSION[_UBWS_PRE.'usr_lang_index'] . '/lang.inc.php';

// admin stuff
if ($_SESSION[_UBWS_PRE.'usr_level'] >=3) {
  require_once _UBWS_INC_DIR . 'admin.inc.php';
  require_once _UBWS_LIB_DIR . 'editor/fckeditor.php';
}

if(isset($_GET['do'])) {
  if($_GET['do'] == "lock") {
    // LOCK
    $query_lock = "UPDATE "._UBWS_PRE."ws_cnt SET cnt_dis = '2' WHERE cnt_dis = '0'";
    mysql_query($query_lock) or require _UBWS_LIB_DIR . 'myerr.php';
  }
  else if($_GET['do'] == "unlock") {
    //UNLOCK
    $query_lock = "UPDATE "._UBWS_PRE."ws_cnt SET cnt_dis = '0' WHERE cnt_dis = '2'";
    mysql_query($query_lock) or require _UBWS_LIB_DIR . 'myerr.php';
  }
}
?>