<?php
/*
config.inc.php
19:42 30.10.2007
*/
if(!defined('_UBWS_PUBFIL')) {require_once './../lib/404.php';}

// DATABASE CONNECTION SETTINGS
$ubws_dbhost = 'localhost';
$ubws_dbuser = 'ubws';
$ubws_dbpass = 'ubws';
$ubws_dbname = 'ubws';
// WEBSITE URL AND LOCAL DIRECTORY
//define("_UBWS_SITE_URL","http://seytourt1.onix.ro:1980/site/");
//define("_UBWS_SITE_DIR","d:/devel/server/htdocs/site/");
// home:
//define("_UBWS_SITE_URL","http://underbeat.homelinux.net:1980/private/work/site/");
//define("_UBWS_SITE_DIR","d:/home/devel/server/htdocs/private/work/site/");
// temp:
//define("_UBWS_SITE_URL","http://80.96.77.225:1980/work/site/");
//define("_UBWS_SITE_DIR","d:/home/devel/server/htdocs/work/site/");

// WEBSITE START DATE
define("_UBWS_WS_START", "2006-10-21");
// WEBSITE OWNER/CLIENT DATA
define("_UBWS_WS_CLCOM", "Client Company"); // company name
define("_UBWS_WS_CLNAM", "John Doe"); // contact person
// WEBSITE DEVELOPER DATA
define("_UBWS_WS_DVCOM", "WebDev Company"); // company name
define("_UBWS_WS_DVURL", "http://underbeat.evonet.ro"); // company url
define("_UBWS_WS_DVNAM", "Web Designer"); // contact person
// WEBSITE TITLE, DESCRIPTION, KEYWORDS - GLOBAL
define("_UBWS_WSTT", "Web Site Title");
define("_UBWS_WSDS", "Web Site Description");
define("_UBWS_WSKW", "keyword1, keyword2");
// HTML HEADER META
define("_UBWS_SITE_DESIG", _UBWS_WS_DVNAM); // company
define("_UBWS_SITE_PUBL", _UBWS_WS_DVCOM); // company
define("_UBWS_SITE_COPY", "&copy; " . substr(_UBWS_WS_START, 0, 4) . " " . _UBWS_WS_CLCOM); // copyright
define("_UBWS_SITE_RATNG", "General");
define("_UBWS_SITE_DISTR", "Global"); /* Global / Local */
define("_UBWS_SITE_ROBOTS", "INDEX, FOLLOW"); /* INDEX, FOLLOW / NOINDEX, NOFOLLOW */
define("_UBWS_SITE_PRAG", "no-cache");
define("_UBWS_SITE_EXP", "0");
define("_UBWS_SITE_CACHE", "no-cache");
// GLOBAL PREFIX, INCLUDING DATABASE TABLES PREFIX
define("_UBWS_PRE", "ubws_");
// DEFAULT LANGUAGE
define("_UBWS_LANG_DEF","en");
// DEFAULT THEME
define("_UBWS_THEME_DEF","ubws");
//OPTIONAL SITE MODULES
$ubws_cfg['site']['langmod'] = 0; // enable multiple languages
$ubws_cfg['site']['usermod'] = 0; // enable user authentification
$ubws_cfg['site']['thmemod'] = 0; // enable multiple themes
$ubws_cfg['site']['vststat'] = 0; // enable visitor statistics
$ubws_cfg['site']['ignorip'] = null; // visitor ip to ignore in statistics
// OPTIONAL CONTENT MODULES
$ubws_cfg['cont']['ftrmod'] = 1; // enable featured content
$ubws_cfg['cont']['picmod'] = 1; // enable content pictures
$ubws_cfg['cont']['tagmod'] = 1; // enable content tags
$ubws_cfg['cont']['commod'] = 1; // enable content comments
$ubws_cfg['cont']['lnkmod'] = 1; // enable content links
// MISC OPTIONS
$ubws_cfg['misc']['cpydev'] = 0; // show developer info in copyright notice
$ubws_cfg['misc']['dbgout'] = 0; // enable debug info
$ubws_cfg['misc']['loadtm'] = 0; // enable page load time
?>