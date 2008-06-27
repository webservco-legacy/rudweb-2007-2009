<?php
/**
* Contact Module Administration
*
* <I>./inc/adm/conmoda.inc.php</I>
* <BR>Contains Contact Module Activation/Deactivation Stuff
* 
* @author Radu Maier <rudisoft@rudisoft.net>
* @copyright Copyright (c) 2007-2008, Radu Maier
* @license http://opensource.org/licenses/gpl-2.0.php
* @version 14:28 2008-06-27
* @access public
* @package RudWEb
* @subpackage Modules
* @since 19:06 2008-05-31
*/

/**
* Authorized access only
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once './../../lib/404.php';}

if($_SESSION[_RUDWEB_PRE.'usr_level'] >= 5) {

  echo $rudweb_skin['cnt']['tt1']['pre'];
  echo $rudweb_ln['con']['tt'];
  echo $rudweb_skin['cnt']['tt1']['suf'];

  echo $rudweb_skin['cnt']['txt']['pre'];

  if(!isset($_GET['act'])) {
    if(_RUDWEB_CFG_CON == "0") {
      echo $rudweb_skin['adm']['mod']['pre'];
      echo $rudweb_ln['adm']['modstat0'];
      echo "<BR>";
      if(_RUDWEB_DBCFG == "1") {
        echo "<FORM ENCTYPE=\"multipart/form-data\" CLASS=\"cononoffform\" NAME=\"cononoffform\" ACTION=\"\" METHOD=\"post\">";
        echo "<INPUT TYPE=\"hidden\" NAME=\"cononoff\" VALUE=\"1\">";
        echo "<BR>";
        echo "<INPUT CLASS=\"formsubmit\" TYPE=\"submit\" NAME=\"conmod\" VALUE=\"".$rudweb_ln['adm']['modstat01']."\">";
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
        echo "<FORM ENCTYPE=\"multipart/form-data\" CLASS=\"cononoffform\" NAME=\"cononoffform\" ACTION=\"\" METHOD=\"post\">";
        echo "<INPUT TYPE=\"hidden\" NAME=\"cononoff\" VALUE=\"0\">";
        echo "<BR>";
        echo "<INPUT CLASS=\"formsubmit\" TYPE=\"submit\" NAME=\"conmod\" VALUE=\"".$rudweb_ln['adm']['modstat10']."\">";
        echo "</FORM>";
      }
      else {
        echo $rudweb_ln['adm']['modstat11'];
      }  

      echo $rudweb_skin['adm']['mod']['suf'];
    } // else if enabled
  }
  echo $rudweb_skin['cnt']['txt']['suf'];
} // if user has the rights
else {
  echo "<DIV CLASS=\"err\">" . $rudweb_ln['err']['1'] . "</DIV>";
} // else if user has no rights
?>