<?php
/**
* cfg.ext.inc
*
* <I> ./config/cfg.ext.inc.php</I>
* <BR>Extensions configuration file
*
* @author     Radu Maier <radu@rudisoft.net>
* @copyright  Copyright (c) 2008, Radu Maier
* @license    http://opensource.org/licenses/gpl-3.0.html
* @version    14:44 2009-01-19
* @since      16:54 2009-01-06
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
* Each available extension must be listed here in order for it to be loaded
*/
$exts = array();
$exts[] = 'SeoURLs';
$exts[] = 'Thumb';
$exts[] = 'Session';
$exts[] = 'Users';
?>