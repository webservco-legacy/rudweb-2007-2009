<?php
/*
ubwsc.inc.php
11:35 25.10.2007
*/
if(!defined('_UBWS_PUBFIL')) {require_once './../lib/404.php';}

define("_UBWS_SITE_AUTH", "Radu Maier"); // ub
// INCLUDES
define("_UBWS_INC_DIR",_UBWS_SITE_DIR ."inc/");
// VAR
define("_UBWS_VAR_DIR",_UBWS_SITE_DIR ."var/");
define("_UBWS_VAR_URL",_UBWS_SITE_URL ."var/");
// PAGES
define("_UBWS_PG_DIR",_UBWS_INC_DIR ."pages/");
// LIBS
define("_UBWS_LIB_DIR",_UBWS_SITE_DIR ."lib/");
define("_UBWS_LIB_URL",_UBWS_SITE_URL ."lib/");
// LANGUAGES
define("_UBWS_LANG_DIR",_UBWS_SITE_DIR ."langs/");
// THEMES
define("_UBWS_THEME_DIR",_UBWS_SITE_DIR ."themes/");
define("_UBWS_THEME_URL",_UBWS_SITE_URL ."themes/");
// SITE MODULES
define("_UBWS_MOD_DIR",_UBWS_SITE_DIR ."mod/");
// JAVASCRIPT
define("_UBWS_JS_DIR",_UBWS_INC_DIR ."js/");
// USER PICTURES
define("_UBWS_PIC_DIR",_UBWS_VAR_DIR ."pics/");
define("_UBWS_PIC_URL",_UBWS_VAR_URL ."pics/");
?>