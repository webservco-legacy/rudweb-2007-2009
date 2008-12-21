<?php
/**
* cfg.inc
*
* <I> ./cfg.inc.php</I>
* <BR>Configuration file
*
* @author     Radu Maier <radu@rudisoft.net>
* @copyright  Copyright (c) 2008, Radu Maier
* @license    http://opensource.org/licenses/gpl-3.0.html
* @version    20:28 2008-12-21
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

define('_APP_URL', _APP_WWW._APP_INDEX);
define('_APP_DIR_INC', _APP_DIR . 'inc/');
define('_APP_DIR_CNT', _APP_DIR_INC . 'cnt/');
define('_APP_DIR_LANG', _APP_DIR . 'intl/');
define('_APP_DIR_SKINS', _APP_DIR . 'skins/');
define('_RW_DIR_LIB', _RW_DIR . 'rwlib/');
define('_RW_DIR_LANG', _RW_DIR . 'intl/');

?>