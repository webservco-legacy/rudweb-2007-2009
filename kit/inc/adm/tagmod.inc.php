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
* @version 15:22 2008-04-26
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

if(_RUDWEB_CFG_CNT_TAGS == "0") {
  echo "<DIV STYLE=\"text-align: center\">";
  echo $rudweb_ln['adm']['tagmodstat0'];
  echo "<BR>";
  if(_RUDWEB_DBCFG == "1") {
    echo "<FORM ENCTYPE=\"multipart/form-data\" CLASS=\"tagonoffform\" NAME=\"tagonoffform\" ACTION=\"\" METHOD=\"post\">";
    echo "<INPUT TYPE=\"hidden\" NAME=\"tagonoff\" VALUE=\"1\">";
    echo "<BR>";
    echo "<INPUT CLASS=\"formsubmit\" TYPE=\"submit\" NAME=\"tagmod\" VALUE=\"".$rudweb_ln['adm']['tagmodstat01']."\">";
    echo "</FORM>";
  }
  else {
    echo $rudweb_ln['adm']['tagmodstat00'];
  }
  echo "</DIV>";
} // if disabled

else {
  echo "<DIV STYLE=\"text-align: center\">";
  echo $rudweb_ln['adm']['tagmodstat1'];
  echo "<BR>";
  
  if(_RUDWEB_DBCFG == "1") {
    echo "<FORM ENCTYPE=\"multipart/form-data\" CLASS=\"tagonoffform\" NAME=\"tagonoffform\" ACTION=\"\" METHOD=\"post\">";
    echo "<INPUT TYPE=\"hidden\" NAME=\"tagonoff\" VALUE=\"0\">";
    echo "<BR>";
    echo "<INPUT CLASS=\"formsubmit\" TYPE=\"submit\" NAME=\"tagmod\" VALUE=\"".$rudweb_ln['adm']['tagmodstat10']."\">";
    echo "</FORM>";
  }
  else {
    echo $rudweb_ln['adm']['tagmodstat11'];
  }  
  echo '<BR><BR>';

  echo "</DIV>";
  require_once _RUDWEB_ADMIN_DIR . 'tagmodforms.inc.php';
} // else if enabled
echo $rudweb_skin['cnt']['txt']['suf'];
} // if user has the rights
else {
  echo "<DIV CLASS=\"err\">" . $rudweb_ln['err']['1'] . "</DIV>";
} // else if user has no rights
?>