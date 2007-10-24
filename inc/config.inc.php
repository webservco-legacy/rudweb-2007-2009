<?php
/*
config.inc.php
16:47 21.10.2007
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
//define("_UBWS_SITE_URL","http://underbeat.homelinux.net:1980/private/travel-agency/site/");
//define("_UBWS_SITE_DIR","d:/home/devel/server/htdocs/private/travel-agency/site/");
// temp:
define("_UBWS_SITE_URL","http://80.96.77.225:1980/work/site/");
define("_UBWS_SITE_DIR","d:/home/devel/server/htdocs/work/site/");
// WEBSITE TITLE, DESCRIPTION, KEYWORDS - GLOBAL
define("_UBWS_WSTT", "Web Site Title");
define("_UBWS_WSDS", "Web Site Description");
define("_UBWS_WSKW", "Web Site Keywords");
// HTML HEADER META
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
// OPTIONAL CONTENT MODULES
$ubws_cfg['cont']['tagmod'] = 1; // enable content tags
$ubws_cfg['cont']['commod'] = 1; // enable content comments
$ubws_cfg['cont']['picmod'] = 1; // enable content pictures
$ubws_cfg['cont']['lnkmod'] = 1; // enable content links
?>