<?php
/**
* Engine Configuration
*
* <I>./inc/rudwebc.inc.php</I>
* <BR>Contains Main Engine Path and URL settings
* 
* @author Radu Maier <rudisoft@rudisoft.net>
* @copyright Copyright (c) 2007-2008, Radu Maier
* @license http://opensource.org/licenses/gpl-2.0.php
* @version 16:07 2008-06-30
* @access public
* @package RudWEb
* @subpackage Settings
* @since 12:42 2008-04-26
*/

/**
* Authorized access only
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once './../lib/404.php';}

/**
* Engine Version
*/
define("_RUDWEB_SITE_VERSION", "0.8.080630");
/**
* Engine Author
*/
define("_RUDWEB_SITE_AUTH", "Radu Maier");
/**
* Includes Directory
*/
define("_RUDWEB_INC_DIR",_RUDWEB_SITE_DIR ."inc/");
/**
* Variables Directory
*/
define("_RUDWEB_VAR_DIR",_RUDWEB_SITE_DIR ."var/");
/**
* Variables URL
*/
define("_RUDWEB_VAR_URL",_RUDWEB_SITE_URL ."var/");
/**
* Library Directory
*/
define("_RUDWEB_LIB_DIR",_RUDWEB_SITE_DIR ."lib/");
/**
* Library URL
*/
define("_RUDWEB_LIB_URL",_RUDWEB_SITE_URL ."lib/");
/**
* Languages Directory
*/
define("_RUDWEB_LANG_DIR",_RUDWEB_INC_DIR ."langs/");
/**
* Skins Directory
*/
define("_RUDWEB_SKIN_DIR",_RUDWEB_SITE_DIR ."skins/");
/**
* Skins URL
*/
define("_RUDWEB_SKIN_URL",_RUDWEB_SITE_URL ."skins/");
/**
* Modules Directory
*/
define("_RUDWEB_MOD_DIR",_RUDWEB_INC_DIR ."mod/");
/**
* JavaScript Directory
*/
define("_RUDWEB_JS_DIR",_RUDWEB_INC_DIR ."js/");
/**
* JavaScript URL
*/
define("_RUDWEB_JS_URL",_RUDWEB_SITE_URL ."inc/js/");
/**
* Fonts Directory
*/
define("_RUDWEB_TTF_DIR",_RUDWEB_LIB_DIR ."ttf/");
//define("_RUDWEB_TTF_URL",_RUDWEB_LIB_URL ."ttf/js/");
/**
* Custom user pages Directory
*/
define("_RUDWEB_PG_DIR",_RUDWEB_VAR_DIR ."pages/");
/**
* Administration Directory
*/
define("_RUDWEB_ADMIN_DIR",_RUDWEB_INC_DIR ."adm/");
/**
* User Catalog Directory
*/
define("_RUDWEB_CAT_DIR",_RUDWEB_INC_DIR ."cat/");
/**
* User Catalog Category Pictures Directory
*/
define("_RUDWEB_CATP_DIR",_RUDWEB_VAR_DIR ."cat/catp/");
/**
* User Catalog Product Pictures Directory
*/
define("_RUDWEB_PRDP_DIR",_RUDWEB_VAR_DIR ."cat/prdp/");
/**
* User Catalog Product Pictures URL
*/
define("_RUDWEB_PRDP_URL",_RUDWEB_VAR_URL ."cat/prdp/");
/**
* User Content Pictures Directory
*/
define("_RUDWEB_PIC_DIR",_RUDWEB_VAR_DIR ."pcscnt/");
/**
* User Content Pictures URL
*/
define("_RUDWEB_PIC_URL",_RUDWEB_VAR_URL ."pcscnt/");
?>