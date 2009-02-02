<?php
/**
* lang.inc
*
* <I> ./langs/ro/lang.inc.php</I>
* <BR>Romanian language file (core)
*
* @author     Radu Maier <radu@rudisoft.net>
* @copyright  Copyright (c) 2008, Radu Maier
* @license    http://opensource.org/licenses/gpl-3.0.html
* @version    12:37 2009-02-01
* @since      16:27 2009-01-12
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
$lang['USR_STATUS'][1]  = 'Neautentificat';
$lang['USR_STATUS'][2]  = 'C&#226;mpuri necompletate';
$lang['USR_STATUS'][3]  = 'Date incorecte';
$lang['USR_STATUS'][4]  = 'Cont suspendat';
$lang['USR_STATUS'][5]  = 'Autentificare reu&#351;it&#259;';
$lang['USR_STATUS'][6]  = 'Autentificat';
$lang['USR_STATUS'][7]  = 'Cod de verificare incorect';
$lang['USR_STATUS'][8]  = 'Submit-uri multiple';
$lang['USR_STATUS'][9]  = 'Atack hacker';
$lang['404']['TITLE']   = 'Resursa nu a fost g&#259;sit&#259;';
$lang['404']['MESSAGE'] = 'Ne pare r&#259;u, resursa solicitat&#259; nu a fost g&#259;sit&#259; pe acest server.';
?>