<?php
/*
config.inc.php
13:44 29.09.2007
*/
if(!defined('_UBWS_PUBFIL')) {require_once './../lib/404.php';}
/* ********** ********** ********** START EDITING ********** ********** ********** */
// database stuff
$ubws_dbhost = 'localhost';
$ubws_dbuser = 'root';
$ubws_dbpass = 'REDACTED';
$ubws_dbname = 'travel_agency_ap';
// global prefix
define('_UBWS_PRE', 'sey_');
// site url and directory
define("_UBWS_SITE_URL","http://seytourt1.onix.ro:1980/site/");
define("_UBWS_SITE_DIR","d:/devel/server/htdocs/site/");
// defualt language
define("_UBWS_LANG_DEF","en");
// default theme
define("_UBWS_THEME_DEF","ubws");

/* ********** ********** ********** STOP EDITING ********** ********** ********** */
// INCLUDES
define("_UBWS_INC_DIR",_UBWS_SITE_DIR ."inc/");
// LIBS
define("_UBWS_LIB_DIR",_UBWS_SITE_DIR ."lib/");
// LANGUAGES
define("_UBWS_LANG_DIR",_UBWS_SITE_DIR ."langs/");
// THEMES
define("_UBWS_THEME_DIR",_UBWS_SITE_DIR ."themes/");
// HTML PAGES
define("_UBWS_HTM_DIR",_UBWS_SITE_DIR ."htm/");
?>