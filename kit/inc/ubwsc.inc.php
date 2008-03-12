<?php
/*
./inc/ubwsc.inc.php
09:27 2008-03-12
*/
if(!defined('_UBWS_PUBFIL')) {require_once './../lib/404.php';}

// VERSION
define("_UBWS_SITE_VERSION", "0.2.080312");
// AUTHOR
define("_UBWS_SITE_AUTH", "Radu Maier");
// INCLUDES
define("_UBWS_INC_DIR",_UBWS_SITE_DIR ."inc/");
// VAR
define("_UBWS_VAR_DIR",_UBWS_SITE_DIR ."var/");
define("_UBWS_VAR_URL",_UBWS_SITE_URL ."var/");
// LIBS
define("_UBWS_LIB_DIR",_UBWS_SITE_DIR ."lib/");
define("_UBWS_LIB_URL",_UBWS_SITE_URL ."lib/");
// LANGUAGES
define("_UBWS_LANG_DIR",_UBWS_INC_DIR ."langs/");
// THEMES
define("_UBWS_THEME_DIR",_UBWS_SITE_DIR ."themes/");
define("_UBWS_THEME_URL",_UBWS_SITE_URL ."themes/");
// SITE MODULES
define("_UBWS_MOD_DIR",_UBWS_INC_DIR ."mod/");
// JAVASCRIPT
define("_UBWS_JS_DIR",_UBWS_INC_DIR ."js/");
define("_UBWS_JS_URL",_UBWS_SITE_URL ."inc/js/");
// FONTS
define("_UBWS_TTF_DIR",_UBWS_LIB_DIR ."ttf/");
define("_UBWS_TTF_URL",_UBWS_LIB_URL ."ttf/js/");
// USER PAGES
define("_UBWS_PG_DIR",_UBWS_VAR_DIR ."pages/");
// SITE PAGES
define("_UBWS_UBWS_DIR",_UBWS_INC_DIR ."ubws/");
// CONTENT PICTURES
define("_UBWS_PIC_DIR",_UBWS_VAR_DIR ."pcscnt/");
define("_UBWS_PIC_URL",_UBWS_VAR_URL ."pcscnt/");
// USER PICTURES
define("_UBWS_USR_PIC_DIR",_UBWS_VAR_DIR ."pcsusr/");
define("_UBWS_USR_PIC_URL",_UBWS_VAR_URL ."pcsusr/");
?>