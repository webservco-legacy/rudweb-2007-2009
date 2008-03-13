<?php
/*
./inc/rudwebc.inc.php
09:26 2008-03-13
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once './../lib/404.php';}

// VERSION
define("_RUDWEB_SITE_VERSION", "0.2.080312");
// AUTHOR
define("_RUDWEB_SITE_AUTH", "Radu Maier");
// INCLUDES
define("_RUDWEB_INC_DIR",_RUDWEB_SITE_DIR ."inc/");
// VAR
define("_RUDWEB_VAR_DIR",_RUDWEB_SITE_DIR ."var/");
define("_RUDWEB_VAR_URL",_RUDWEB_SITE_URL ."var/");
// LIBS
define("_RUDWEB_LIB_DIR",_RUDWEB_SITE_DIR ."lib/");
define("_RUDWEB_LIB_URL",_RUDWEB_SITE_URL ."lib/");
// LANGUAGES
define("_RUDWEB_LANG_DIR",_RUDWEB_INC_DIR ."langs/");
// THEMES
define("_RUDWEB_THEME_DIR",_RUDWEB_SITE_DIR ."themes/");
define("_RUDWEB_THEME_URL",_RUDWEB_SITE_URL ."themes/");
// SITE MODULES
define("_RUDWEB_MOD_DIR",_RUDWEB_INC_DIR ."mod/");
// JAVASCRIPT
define("_RUDWEB_JS_DIR",_RUDWEB_INC_DIR ."js/");
define("_RUDWEB_JS_URL",_RUDWEB_SITE_URL ."inc/js/");
// FONTS
define("_RUDWEB_TTF_DIR",_RUDWEB_LIB_DIR ."ttf/");
define("_RUDWEB_TTF_URL",_RUDWEB_LIB_URL ."ttf/js/");
// USER PAGES
define("_RUDWEB_PG_DIR",_RUDWEB_VAR_DIR ."pages/");
// SITE PAGES
define("_RUDWEB_RUDWEB_DIR",_RUDWEB_INC_DIR ."rudweb/");
// CONTENT PICTURES
define("_RUDWEB_PIC_DIR",_RUDWEB_VAR_DIR ."pcscnt/");
define("_RUDWEB_PIC_URL",_RUDWEB_VAR_URL ."pcscnt/");
?>