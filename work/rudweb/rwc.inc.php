<?php
/**
* rwc.inc
*
* <I> ./rwc.inc.php</I>
* <BR>Engine configuration file
*
* @author     Radu Maier <radu@rudisoft.net>
* @copyright  Copyright (c) 2008, Radu Maier
* @license    http://opensource.org/licenses/gpl-3.0.html
* @version    15:41 2009-02-09
* @since      10:40 2009-01-14
* @access     public
* @package    RudWEb
* @subpackage Settings
* @todo       stuff
*/

/**
* Prevent direct file access
*/
if(!defined('_RW_VALID')) {require_once('./index.php'); exit;}

/**
* Application full url
*/
define('_APP_URL', _APP_WWW._APP_INDEX);
/**
* Application include directory
*/
define('_APP_DIR_INC', _APP_DIR . 'inc/');
/**
* Application var directory
*/
define('_APP_DIR_VAR', _APP_DIR . 'var/');
/**
* Application var url
*/
define('_APP_URL_VAR', _APP_WWW . 'var/');
/**
* Application temp directory
*/
define('_APP_DIR_TMP', _APP_DIR_VAR . 'tmp/');
/**
* Application temp url
*/
define('_APP_URL_TMP', _APP_URL_VAR . 'tmp/');
/**
* Application content directory
*/
define('_APP_DIR_CNT', _APP_DIR_INC . 'cnt/');
/**
* Application internationalization directory
*/
define('_APP_DIR_LANG', _APP_DIR . 'intl/');
/**
* Application modules directory
*/
define('_APP_DIR_MOD', _APP_DIR . 'mod/');
/**
* Application skins directory
*/
define('_APP_DIR_SKINS', _APP_DIR . 'skins/');
/**
* Engine main library directory
*/
define('_RW_DIR_LIB', _RW_DIR . 'rwlib/');
/**
* Engine database library directory
*/
define('_RW_DIR_LIB_DB', _RW_DIR_LIB . 'libdb/');
/**
* Engine error library directory
*/
define('_RW_DIR_LIB_ERR', _RW_DIR_LIB . 'liberr/');
/**
* Engine extension library directory
*/
define('_RW_DIR_LIB_EXT', _RW_DIR_LIB . 'libext/');
/**
* Engine skin library directory
*/
define('_RW_DIR_LIB_SKIN', _RW_DIR_LIB . 'libskin/');
/**
* Engine module library directory
*/
define('_RW_DIR_LIB_MOD', _RW_DIR_LIB . 'libmod/');
/**
* Engine internationalization directory
*/
define('_RW_DIR_LANG', _RW_DIR . 'intl/');
/**
* Default skin url
*/
define('_APP_SKIN_URL', _APP_WWW . 'skins/' . _APP_SKIN . '/');
/**
* Extensions directory
*/
define('_APP_EXT_GLOBAL_DIR',_RW_DIR . 'ext/');
define('_APP_EXT_LOCAL_DIR',_APP_DIR . 'ext/');
?>