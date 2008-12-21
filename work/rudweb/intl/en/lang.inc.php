<?php
/**
* lang.inc
*
* <I> ./langs/en/lang.inc.php</I>
* <BR>English language file (core)
*
* @author     Radu Maier <radu@rudisoft.net>
* @copyright  Copyright (c) 2008, Radu Maier
* @license    http://opensource.org/licenses/gpl-3.0.html
* @version    09:36 2008-12-16
* @since      14:27 2008-12-12
* @access     public
* @package    RudWEb
* @subpackage Internationalization
* @todo       stuff
*/

/**
* Prevent direct file access
*/
if(!defined('_RW_VALID')) {require_once('./index.php'); exit;}

/**
* Initialize
*/
$lang = array();

/**
* User status
*/
$lang['USR_STATUS'][1] = 'Not logged in';
$lang['USR_STATUS'][2] = 'Empty fields';
$lang['USR_STATUS'][3] = 'Incorrect data';
$lang['USR_STATUS'][4] = 'Suspended account';
$lang['USR_STATUS'][5] = 'Authentication ok';
$lang['USR_STATUS'][6] = 'Logged in';
$lang['USR_STATUS'][7] = 'Incorrect verification code';
$lang['USR_STATUS'][8] = 'Multiple submits';
$lang['USR_STATUS'][9] = 'Hacker attack';
?>