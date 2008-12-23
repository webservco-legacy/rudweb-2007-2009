<?php
/**
* cfg.inc
*
* <I> ./cfg.inc.php</I>
* <BR>Engine configuration file
*
* @author     Radu Maier <radu@rudisoft.net>
* @copyright  Copyright (c) 2008, Radu Maier
* @license    http://opensource.org/licenses/gpl-3.0.html
* @version    12:15 2008-12-22
* @since      10:50 2008-12-10
* @access     public
* @package    RudWEb
* @subpackage Sandbox
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
* Application content directory
*/
define('_APP_DIR_CNT', _APP_DIR_INC . 'cnt/');
/**
* Application internationalization directory
*/
define('_APP_DIR_LANG', _APP_DIR . 'intl/');
/**
* Application skins directory
*/
define('_APP_DIR_SKINS', _APP_DIR . 'skins/');
/**
* Engine library directory
*/
define('_RW_DIR_LIB', _RW_DIR . 'rwlib/');
/**
* Engine internationalization directory
*/
define('_RW_DIR_LANG', _RW_DIR . 'intl/');
?>