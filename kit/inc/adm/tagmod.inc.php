<?php
/**
* Tags Module Administration
*
* <I>./inc/adm/tagmod.inc.php</I>
* <BR>Contains Tags Administration Stuff
* 
* @author Radu Maier <rudisoft@rudisoft.net>
* @copyright Copyright (c) 2007-2008, Radu Maier
* @license http://opensource.org/licenses/gpl-2.0.php
* @version 10:45 2008-05-26
* @access public
* @package RudWEb
* @subpackage Modules
* @since 15:22 2008-04-26
*/

/**
* Authorized access only
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once './../../lib/404.php';}

if($_SESSION[_RUDWEB_PRE.'usr_level'] >= 3) {
  echo $rudweb_skin['cnt']['tt1']['pre'];
  echo $rudweb_ln['cnt']['tags'];
  echo $rudweb_skin['cnt']['tt1']['suf'];

  echo $rudweb_skin['cnt']['txt']['pre'];

  if (isset($_GET['act'])) {
    if(_RUDWEB_CFG_CNT_TAGS == 1) {
      $act = rudweb_filter_input($_GET['act']);
      switch($act) {
        case 'adm' : {require_once _RUDWEB_ADMIN_DIR . 'tagmodforms.inc.php'; break;}
        default : {break;}
      }
    }
  }
  echo $rudweb_skin['cnt']['txt']['suf'];
} // if user has the rights
else {
  echo "<DIV CLASS=\"err\">" . $rudweb_ln['err']['1'] . "</DIV>";
} // else if user has no rights
?>