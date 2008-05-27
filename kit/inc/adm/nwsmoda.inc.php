<?php
/**
* News Module Administration
*
* <I>./inc/adm/nwsmoda.inc.php</I>
* <BR>Contains News Module Activation/Deactivation Stuff
* 
* @author Radu Maier <rudisoft@rudisoft.net>
* @copyright Copyright (c) 2007-2008, Radu Maier
* @license http://opensource.org/licenses/gpl-2.0.php
* @version 10:37 2008-05-26
* @access public
* @package RudWEb
* @subpackage Modules
* @since 10:34 2008-05-26
*/

/**
* Authorized access only
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once './../../lib/404.php';}

if($_SESSION[_RUDWEB_PRE.'usr_level'] >= 5) {

  echo $rudweb_skin['cnt']['tt1']['pre'];
  echo $rudweb_ln['nws']['tt'];
  echo $rudweb_skin['cnt']['tt1']['suf'];

  echo $rudweb_skin['cnt']['txt']['pre'];

  if(!isset($_GET['act'])) {
    if(_RUDWEB_CFG_NWS == "0") {
      echo $rudweb_skin['adm']['mod']['pre'];
      echo $rudweb_ln['adm']['modstat0'];
      echo "<BR>";
      if(_RUDWEB_DBCFG == "1") {
        echo "<FORM ENCTYPE=\"multipart/form-data\" CLASS=\"nwsonoffform\" NAME=\"nwsonoffform\" ACTION=\"\" METHOD=\"post\">";
        echo "<INPUT TYPE=\"hidden\" NAME=\"nwsonoff\" VALUE=\"1\">";
        echo "<BR>";
        echo "<INPUT CLASS=\"formsubmit\" TYPE=\"submit\" NAME=\"nwsmod\" VALUE=\"".$rudweb_ln['adm']['modstat01']."\">";
        echo "</FORM>";
      }
      else {
        echo $rudweb_ln['adm']['modstat00'];
      }
      echo $rudweb_skin['adm']['mod']['suf'];
    } // if disabled
    else {
      echo $rudweb_skin['adm']['mod']['pre'];
      echo $rudweb_ln['adm']['modstat1'];
      echo "<BR>";
      
      if(_RUDWEB_DBCFG == "1") {
        echo "<FORM ENCTYPE=\"multipart/form-data\" CLASS=\"nwsonoffform\" NAME=\"nwsonoffform\" ACTION=\"\" METHOD=\"post\">";
        echo "<INPUT TYPE=\"hidden\" NAME=\"nwsonoff\" VALUE=\"0\">";
        echo "<BR>";
        echo "<INPUT CLASS=\"formsubmit\" TYPE=\"submit\" NAME=\"nwsmod\" VALUE=\"".$rudweb_ln['adm']['modstat10']."\">";
        echo "</FORM>";
      }
      else {
        echo $rudweb_ln['adm']['modstat11'];
      }  

      echo $rudweb_skin['adm']['mod']['suf'];
    } // else if enabled
  }
  else if (isset($_GET['act'])) {
    if(_RUDWEB_CFG_NWS == 1) {
      $act = rudweb_filter_input($_GET['act']);
      $nws_id = 0;
      if(isset($_GET['nws'])) {$nws_id = rudweb_filter_input($_GET['nws']);}
      switch($act) {
        case 'add'  : {addNewsItem(); break;}
        case 'mod'  : {showNewsItem($nws_id,1); break;}
        case 'view' : {showNewsAll(1); break;}
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