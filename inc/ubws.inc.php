<?php
/*
ubws.inc.php
16:47 21.10.2007
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
require_once _UBWS_INC_DIR . 'ubwsf.inc.php';

// CALL NEEDED PHP FUNCTIONS
seo_urls();

// START PARSE TIME COUNT
startTimer();

// OPEN DATABASE CONNECTION
require_once _UBWS_INC_DIR . 'dbopen.inc.php';

// START SESSION
session_cache_limiter ('public, must-revalidate');
session_cache_expire(600); //minutes
ini_set("session.gc_maxlifetime","36000"); //seconds
session_start();
//setcookie("PHPSESSID",$_COOKIE['PHPSESSID'],time()+1800);

//if no user is logged in
if (!isset($_SESSION[_UBWS_PRE.'usr_logged_in'])) {
  session_regenerate_id();
  
  $ubws_token = md5(uniqid(rand(), TRUE));
  $_SESSION[_UBWS_PRE.'token'] = $ubws_token;
  $_SESSION[_UBWS_PRE.'visit_date'] = date("Y-m-d");
  $_SESSION[_UBWS_PRE.'visit_time'] = date("H:i:s");
  //default user data
  $_SESSION[_UBWS_PRE.'usr_id']    = '0';
  $_SESSION[_UBWS_PRE.'usr_level'] = '0';
  $_SESSION[_UBWS_PRE.'usr_alias'] = 'NO_ALIAS';
  $_SESSION[_UBWS_PRE.'usr_name']  = 'NO_NAME';
  // default language
  if (!isset($_SESSION[_UBWS_PRE.'usr_lang_index'])) {
    $_SESSION[_UBWS_PRE.'usr_lang_index'] = _UBWS_LANG_DEF;
  }
  // default theme
  if (!isset($_SESSION[_UBWS_PRE.'usr_theme_dir'])) {
    $_SESSION[_UBWS_PRE.'usr_theme_dir'] = _UBWS_THEME_DEF;
  }
  //load default language
  
  // load login module if user authentification is enabled
  if($ubws_cfg['site']['usermod'] === 1) {require_once _UBWS_INC_DIR . 'login.inc.php';}
} // if not logged in
else if (isset($_SESSION[_UBWS_PRE.'usr_logged_in'])) {
  if($ubws_cfg['site']['usermod'] === 1) {$ubws_login_status = 6;}
} // if logged in

// CHANGE LANGUAGE OR THEME ON THE FLY
require_once _UBWS_INC_DIR . 'setlntm.inc.php';

// LOAD LANGUAGE
require_once _UBWS_LANG_DIR . $_SESSION[_UBWS_PRE.'usr_lang_index'] . '/lang.info.php';
$_SESSION[_UBWS_PRE.'usr_lang_index']      = $ubws_lang_index;
$_SESSION[_UBWS_PRE.'usr_lang_name']       = $ubws_lang_name;
$_SESSION[_UBWS_PRE.'usr_lang_local_name'] = $ubws_lang_local_name;
$_SESSION[_UBWS_PRE.'usr_lang_translator'] = $ubws_lang_translator;
$_SESSION[_UBWS_PRE.'usr_lang_charset']    = $ubws_lang_charset;
require_once _UBWS_LANG_DIR . $_SESSION[_UBWS_PRE.'usr_lang_index'] . '/lang.inc.php';

// LOAD THEME
require_once _UBWS_THEME_DIR . $_SESSION[_UBWS_PRE.'usr_theme_dir'] . '/theme.info.php';
$_SESSION[_UBWS_PRE.'usr_theme_name']    = $ubws_theme_name;
$_SESSION[_UBWS_PRE.'usr_theme_version'] = $ubws_theme_version;
$_SESSION[_UBWS_PRE.'usr_theme_author']  = $ubws_theme_author;
$_SESSION[_UBWS_PRE.'usr_theme_notes']   = $ubws_theme_notes;
require_once _UBWS_THEME_DIR . $_SESSION[_UBWS_PRE.'usr_theme_dir'] . '/theme.inc.php';

// MENU & PAGE STUFF
$ubws_this_content       = 'index';
$ubws_this_content_level = getCntLev($ubws_this_content);
$ubws_mnu_id             = getCntMnuId('index');
$ubws_stats_page         = 'index';
$ubws_req_page           = 'index';
$ubws_page_title         = _UBWS_WSTT . " - " . "Index";
$ubws_page_description   = _UBWS_WSDS;
$ubws_page_keywords      = _UBWS_WSKW;
if (isset($_GET['content'])) {
  $ubws_this_content       = ubws_filter_input($_GET['content']);
  $ubws_this_content_level = getCntLev('index');
  $ubws_mnu_id             = getCntMnuId('index');
  $ubws_stats_page         = 'index';
  $ubws_req_page           = 'index';
  $cnt_cnt_query = "SELECT * FROM `"._UBWS_PRE."ws_cnt` WHERE `cnt_alias` = '".$ubws_this_content."' AND (`cnt_ln` = '".$_SESSION[_UBWS_PRE.'usr_lang_index']."' AND `cnt_lvl` <= '".$_SESSION[_UBWS_PRE.'usr_level']."') LIMIT 1";
  $rst_cnt_cnt   = mysql_query($cnt_cnt_query) or require _UBWS_LIB_DIR . 'myerr.php';
  $total_cnt_cnt = mysql_num_rows($rst_cnt_cnt);
  if ($total_cnt_cnt == '1') {
    $ubws_this_content_level = getCntLev($ubws_this_content);
    $ubws_mnu_id             = getCntMnuId($ubws_this_content);
    $ubws_stats_page         = "ct-" . $ubws_this_content;
    $ubws_req_page           = $ubws_this_content;
    $row_rst_cnt_cnt         = mysql_fetch_assoc($rst_cnt_cnt);
    $ubws_page_title         = _UBWS_WSTT . " - " . $row_rst_cnt_cnt['cnt_tt'];
    $ubws_page_description   = $row_rst_cnt_cnt['cnt_dsc'];
    $ubws_page_keywords      = $row_rst_cnt_cnt['cnt_kw'];
  }
}
else if (isset($_GET['page'])) {
  $ubws_this_content       = ubws_filter_input($_GET['page']);
  $ubws_this_content_level = getCntLev('index');
  $ubws_mnu_id             = getCntMnuId('index');
  $ubws_stats_page         = 'index';
  $ubws_req_page           = 'index';
  if (is_file(_UBWS_PG_DIR . $ubws_this_content . ".inc.php")) {
    $ubws_this_content_level = getCntLev($ubws_this_content);
    $ubws_mnu_id             = getCntMnuId($ubws_this_content);
    $ubws_stats_page         = "pg-" . $ubws_this_content;
    $ubws_req_page           = $ubws_this_content;
    $ubws_page_title         = _UBWS_WSTT . " - " . $ubws_this_content;
    $ubws_page_description   = _UBWS_WSDS;
    $ubws_page_keywords      = _UBWS_WSKW;
  }
}

// STATS
require_once _UBWS_INC_DIR . 'stats.inc.php';
?>