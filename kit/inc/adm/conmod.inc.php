<?php
/**
* Contact Module Administration
*
* <I>./inc/adm/conmod.inc.php</I>
* <BR>Contains Contact Administration Stuff
* 
* @author Radu Maier <rudisoft@rudisoft.net>
* @copyright Copyright (c) 2007-2008, Radu Maier
* @license http://opensource.org/licenses/gpl-2.0.php
* @version 19:13 2008-05-31
* @access public
* @package RudWEb
* @subpackage Modules
* @since 19:13 2008-05-31
*/

/**
* Authorized access only
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once './../../lib/404.php';}

if($_SESSION[_RUDWEB_PRE.'usr_level'] >= 3) {

  echo $rudweb_skin['cnt']['tt1']['pre'];
  echo $rudweb_ln['con']['tt'];
  echo $rudweb_skin['cnt']['tt1']['suf'];

  echo $rudweb_skin['cnt']['txt']['pre'];

  if(!isset($_GET['act'])) {
    if(_RUDWEB_CFG_NWS == "0") {
      echo $rudweb_skin['adm']['mod']['pre'];
      echo $rudweb_ln['adm']['modstat0'];
      echo "<BR>";
      echo $rudweb_skin['adm']['mod']['suf'];
    } // if disabled
    else {
      if(_RUDWEB_DBCFG == "1") {  
        echo $rudweb_skin['adm']['mod']['pre'];
        // xxx
        echo $rudweb_ln['con']['tt'];
        echo $rudweb_skin['adm']['mod']['suf'];
      }
      else {
        echo $rudweb_skin['adm']['mod']['pre'];
        // yyy
        echo $rudweb_ln['con']['tt'];
        echo "<BR>";
        echo $rudweb_ln['adm']['modstat12'];
        echo $rudweb_skin['adm']['mod']['suf'];
      }
      
      if(_RUDWEB_DBCFG == "1") {  
        echo $rudweb_skin['adm']['mod']['pre'];
        // xxx1
        echo $rudweb_ln['con']['tt'];
        echo $rudweb_skin['adm']['mod']['suf'];
      }
      else {
        echo $rudweb_skin['adm']['mod']['pre'];
        // yyy2
        echo $rudweb_ln['con']['tt'];
        echo "<BR>";
        echo $rudweb_ln['adm']['modstat12'];
        echo $rudweb_skin['adm']['mod']['suf'];
      }
      
      
    } // else if enabled
  }
  else if (isset($_GET['act'])) {
    if(_RUDWEB_CFG_CON == 1) {
      $act = rudweb_filter_input($_GET['act']);
      $con_id = 0;
      if(isset($_GET['contact'])) {$con_id = rudweb_filter_input($_GET['contact']);}
      switch($act) {
        case 'del'  : {delConItem(); break;}
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