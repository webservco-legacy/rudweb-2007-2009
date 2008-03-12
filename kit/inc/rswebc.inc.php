<?php
/*
./inc/rswebc.inc.php
09:27 2008-03-12
*/
if(!defined('_RSWEB_PUBFIL')) {require_once './../lib/404.php';}

// VERSION
define("_RSWEB_SITE_VERSION", "0.2.080312");
// AUTHOR
define("_RSWEB_SITE_AUTH", "Radu Maier");
// INCLUDES
define("_RSWEB_INC_DIR",_RSWEB_SITE_DIR ."inc/");
// VAR
define("_RSWEB_VAR_DIR",_RSWEB_SITE_DIR ."var/");
define("_RSWEB_VAR_URL",_RSWEB_SITE_URL ."var/");
// LIBS
define("_RSWEB_LIB_DIR",_RSWEB_SITE_DIR ."lib/");
define("_RSWEB_LIB_URL",_RSWEB_SITE_URL ."lib/");
// LANGUAGES
define("_RSWEB_LANG_DIR",_RSWEB_INC_DIR ."langs/");
// THEMES
define("_RSWEB_THEME_DIR",_RSWEB_SITE_DIR ."themes/");
define("_RSWEB_THEME_URL",_RSWEB_SITE_URL ."themes/");
// SITE MODULES
define("_RSWEB_MOD_DIR",_RSWEB_INC_DIR ."mod/");
// JAVASCRIPT
define("_RSWEB_JS_DIR",_RSWEB_INC_DIR ."js/");
define("_RSWEB_JS_URL",_RSWEB_SITE_URL ."inc/js/");
// FONTS
define("_RSWEB_TTF_DIR",_RSWEB_LIB_DIR ."ttf/");
define("_RSWEB_TTF_URL",_RSWEB_LIB_URL ."ttf/js/");
// USER PAGES
define("_RSWEB_PG_DIR",_RSWEB_VAR_DIR ."pages/");
// SITE PAGES
define("_RSWEB_RSWEB_DIR",_RSWEB_INC_DIR ."rsweb/");
// CONTENT PICTURES
define("_RSWEB_PIC_DIR",_RSWEB_VAR_DIR ."pcscnt/");
define("_RSWEB_PIC_URL",_RSWEB_VAR_URL ."pcscnt/");
// USER PICTURES
define("_RSWEB_USR_PIC_DIR",_RSWEB_VAR_DIR ."pcsusr/");
define("_RSWEB_USR_PIC_URL",_RSWEB_VAR_URL ."pcsusr/");
?>