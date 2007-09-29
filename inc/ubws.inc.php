<?php
/*
ubws.inc.php
13:44 29.09.2007
*/

if(!defined('_UBWS_PUBFIL')) {require_once './../lib/404.php';}
// ERROR REPORTING
// report all errors
error_reporting(E_ALL);
// report all errors except E_NOTICE
//error_reporting(E_ALL ^ E_NOTICE);

// REQUIRED FILES
// open database connection
require_once _UBWS_INC_DIR . 'dbopen.inc.php';
// php functions
require_once _UBWS_INC_DIR . 'functions.inc.php';
// other custom functions
seo_urls();

// START PARSE TIME COUNT
startTimer();

// START SESSION
session_start();
//$ubws_token = md5(uniqid(rand(), TRUE));
//$_SESSION[_UBWS_PRE.'token'] = $ubws_token;
//$_SESSION[_UBWS_PRE.'visit_date'] = date("Y-m-d");
//$_SESSION[_UBWS_PRE.'visit_time'] = date("H:i:s");

//if no user is logged in
if (!isset($_SESSION[_UBWS_PRE.'logged_in'])) {
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
  $_SESSION[_UBWS_PRE.'usr_lang_index'] = _UBWS_LANG_DEF;
  require_once _UBWS_LANG_DIR . $_SESSION[_UBWS_PRE.'usr_lang_index'] . '/lang.info.php';
  $_SESSION[_UBWS_PRE.'usr_lang_index']      = $ubws_lang_index;
  $_SESSION[_UBWS_PRE.'usr_lang_name']       = $ubws_lang_name;
  $_SESSION[_UBWS_PRE.'usr_lang_local_name'] = $ubws_lang_local_name;
  $_SESSION[_UBWS_PRE.'usr_lang_translator'] = $ubws_lang_translator;
  $_SESSION[_UBWS_PRE.'usr_lang_charset']    = $ubws_lang_charset;
  // default theme
  $_SESSION[_UBWS_PRE.'usr_theme_dir'] = _UBWS_THEME_DEF;
  require_once _UBWS_THEME_DIR . $_SESSION[_UBWS_PRE.'usr_theme_dir'] . '/theme.info.php';
  //require_once _UBWS_THEME_DIR . $_SESSION[_UBWS_PRE.'usr_theme_dir'] . '/theme.inc.php';
  $_SESSION[_UBWS_PRE.'usr_theme_name']    = $ubws_theme_name;
  $_SESSION[_UBWS_PRE.'usr_theme_version'] = $ubws_theme_version;
  $_SESSION[_UBWS_PRE.'usr_theme_author']  = $ubws_theme_author;
  $_SESSION[_UBWS_PRE.'usr_theme_notes']   = $ubws_theme_notes;
  // load login module
  require_once _UBWS_INC_DIR . 'login.inc.php';
} // if not logged in
else if (isset($_SESSION[_UBWS_PRE.'logged_in'])) {
  $ubws_login_status = 'LOGIN_STATUS_6';
} // if logged in

// LOAD LANGUAGE
require_once _UBWS_LANG_DIR . $_SESSION[_UBWS_PRE.'usr_lang_index'] . '/lang.inc.php';
// LOAD THEME
require_once _UBWS_THEME_DIR . $_SESSION[_UBWS_PRE.'usr_theme_dir'] . '/theme.inc.php';
?>