<?php
/**
* cfg.inc
*
* <I> ./config/cfg.inc.php</I>
* <BR>Configuration file
*
* @author     Radu Maier <radu@rudisoft.net>
* @copyright  Copyright (c) 2008, Radu Maier
* @license    http://opensource.org/licenses/gpl-3.0.html
* @version    15:29 2009-01-19
* @since      15:29 2009-01-19
* @access     public
* @package    RudWEb
* @subpackage Settings
* @todo       stuff
*/

/**
* Prevent direct file access
*/
if(!defined('_RW_VALID')) {require_once('./index.php'); exit;}

/* ********** ********** ********** ********** ********** MAIN CONFIGURATION ********** ********** ********** ********** ********** */
/**
* Error reporting (TRUE/FALSE)
*/
define('_APP_CFG_ERRORS',TRUE);
/**
* Use a database? (TRUE/FALSE)
*/
define('_APP_CFG_DATABASE',TRUE);
/**
* Use sessions and users? (TRUE/FALSE)
*/
define('_APP_CFG_SESSIONS',TRUE);
/**
* Use user authentication? (TRUE/FALSE)
*/
define('_APP_CFG_USERS',TRUE);
/* ********** ********** ********** ********** ********** PATHS ********** ********** ********** ********** ********** */
/**
* Application path
*
* Must end with a slash (/)
*/
define('_APP_DIR', 'e:/home/devel/server/www/mvc/work/test/');
/**
* Engine path
*
* Must end with a slash (/)
*/
define('_RW_DIR', 'e:/home/devel/server/www/mvc/work/rudweb/');
/**
* Application url
*
* Must end with a slash (/)
*/
define('_APP_WWW','http://localhost/mvc/work/test/');
/* ********** ********** ********** ********** ********** SEO ********** ********** ********** ********** ********** */
/**
* Application index
*
* For full SEO make sure mod_rewrite is enabled and set this value to ''
* Otherwise this value must be 'index.php/'
*/
define('_APP_INDEX','');
/* ********** ********** ********** ********** ********** DATABASE ********** ********** ********** ********** ********** */
/**
* Database information
*
* Only needed is a database is actually used
*/
define('_APP_DB_TYPE','mysql');
define('_APP_DB_HOST','localhost');
define('_APP_DB_PORT','3306');
define('_APP_DB_USER','root');
define('_APP_DB_PASS','');
define('_APP_DB_NAME','test');
/* ********** ********** ********** ********** ********** APPLICATION ********** ********** ********** ********** ********** */
/**
* Application Information
*/
define('_APP_NAME','Test App');
define('_APP_AUTH','Radu Maier');
define('_APP_PRE','test');
/* ********** ********** ********** ********** ********** LANGUAGE ********** ********** ********** ********** ********** */
/**
* Default language
*/
define('_APP_LANG','ro');
/* ********** ********** ********** ********** ********** SKINS ********** ********** ********** ********** ********** */
/**
* Default template engine (Smarty/rudweb/)
*/
define('_APP_TPL','Smarty');
/**
* Default skin (skin directory name)
*/
define('_APP_SKIN','mdc_v2');
/* ********** ********** ********** ********** ********** MISC ********** ********** ********** ********** ********** */
/**
* Default timezone (http://www.php.net/timezones)
*/
define('_APP_TIMEZONE','Europe/Bucharest');
/* ********** ********** ********** ********** ********** DO NOT EDIT PAST THIS LINE ********** ********** ********** ********** ********** */
/**
* Extensions
*/
if(is_readable(_APP_DIR.'cfg/cfg.ext.inc.php')) {require_once(_APP_DIR.'cfg/cfg.ext.inc.php');} else {require_once('./404.php'); exit;}
/**
* Engine config
*/
if(is_readable(_RW_DIR.'rwc.inc.php')) {require_once(_RW_DIR.'rwc.inc.php');} else {require_once('./404.php'); exit;}
/**
* Core
*/
if(is_readable(_APP_DIR_INC.'app.inc.php')) {require_once(_APP_DIR_INC.'app.inc.php');} else {require_once('./404.php'); exit;}
?>