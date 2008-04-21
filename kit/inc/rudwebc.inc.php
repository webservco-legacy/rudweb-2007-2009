<?php
/*
./inc/rudwebc.inc.php
12:03 2008-04-21
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once './../lib/404.php';}

// VERSION
define("_RUDWEB_SITE_VERSION", "0.4.080421");
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
// skinS
define("_RUDWEB_SKIN_DIR",_RUDWEB_SITE_DIR ."skins/");
define("_RUDWEB_SKIN_URL",_RUDWEB_SITE_URL ."skins/");
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
// ADMIN PAGES
define("_RUDWEB_ADMIN_DIR",_RUDWEB_INC_DIR ."adm/");
// CATALOG PAGES
define("_RUDWEB_CAT_DIR",_RUDWEB_INC_DIR ."cat/");
define("_RUDWEB_CATP_DIR",_RUDWEB_VAR_DIR ."cat/catp/");
//define("_RUDWEB_SCATP_DIR",_RUDWEB_VAR_DIR ."cat/scatp/");
define("_RUDWEB_PRDP_DIR",_RUDWEB_VAR_DIR ."cat/prdp/");
define("_RUDWEB_PRDP_URL",_RUDWEB_VAR_URL ."cat/prdp/");
// CONTENT PICTURES
define("_RUDWEB_PIC_DIR",_RUDWEB_VAR_DIR ."pcscnt/");
define("_RUDWEB_PIC_URL",_RUDWEB_VAR_URL ."pcscnt/");
?>