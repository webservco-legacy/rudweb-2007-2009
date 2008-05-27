<?php
/*
./inc/adm/cspmoda.inc.php
11:40 2008-05-26
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once './../../lib/404.php';}

if($_SESSION[_RUDWEB_PRE.'usr_level'] >= 5) {

  echo $rudweb_skin['cnt']['tt1']['pre'];
  echo $rudweb_ln['catalog']['csp'] ;
  echo $rudweb_skin['cnt']['tt1']['suf'];

  echo $rudweb_skin['cnt']['txt']['pre'];
  if (!isset($_GET['act'])) {
    if(_RUDWEB_CFG_CSP_ON == "0") {
      echo $rudweb_skin['adm']['mod']['pre'];
      echo $rudweb_ln['adm']['cspmodstat0'];
      echo "<BR>";
      if(_RUDWEB_DBCFG == "1") {
        echo "<FORM ENCTYPE=\"multipart/form-data\" CLASS=\"csponoffform\" NAME=\"csponoffform\" ACTION=\"\" METHOD=\"post\">";
        echo "<INPUT TYPE=\"hidden\" NAME=\"csponoff\" VALUE=\"1\">";
        echo "<BR>";
        echo "<INPUT CLASS=\"formsubmit\" TYPE=\"submit\" NAME=\"cspmod\" VALUE=\"".$rudweb_ln['adm']['cspmodstat01']."\">";
        echo "</FORM>";
      }
      else {
        echo $rudweb_ln['adm']['cspmodstat00'];
      }
      echo $rudweb_skin['adm']['mod']['suf'];
    } // if disabled

    else {
      echo $rudweb_skin['adm']['mod']['pre'];
      echo $rudweb_ln['adm']['cspmodstat1'];
      echo "<BR>";
      
      if(_RUDWEB_DBCFG == "1") {
        echo "<FORM ENCTYPE=\"multipart/form-data\" CLASS=\"csponoffform\" NAME=\"csponoffform\" ACTION=\"\" METHOD=\"post\">";
        echo "<INPUT TYPE=\"hidden\" NAME=\"csponoff\" VALUE=\"0\">";
        echo "<BR>";
        echo "<INPUT CLASS=\"formsubmit\" TYPE=\"submit\" NAME=\"cspmod\" VALUE=\"".$rudweb_ln['adm']['cspmodstat10']."\">";
        echo "</FORM>";
      }
      else {
        echo $rudweb_ln['adm']['cspmodstat11'];
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