<?php
/*
./inc/adm/cmtmoda.inc.php
10:54 2008-05-26
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once './../../lib/404.php';}

if($_SESSION[_RUDWEB_PRE.'usr_level'] >= 5) {

  echo $rudweb_skin['cnt']['tt1']['pre'];
  echo $rudweb_ln['cmt']['cmtt'] ;
  echo $rudweb_skin['cnt']['tt1']['suf'];

  echo $rudweb_skin['cnt']['txt']['pre'];
  
  if(!isset($_GET['act'])) {
    if(_RUDWEB_CFG_CNT_CMNTS == "0") {
      echo $rudweb_skin['adm']['mod']['pre'];
      echo $rudweb_ln['adm']['modstat0'];
      echo "<BR>";
      if(_RUDWEB_DBCFG == "1") {
        echo "<FORM ENCTYPE=\"multipart/form-data\" NAME=\"cmtonoffform\" ACTION=\"\" METHOD=\"post\">";
        echo "<INPUT TYPE=\"hidden\" NAME=\"cmtonoff\" VALUE=\"1\">";
        echo "<BR>";
        echo "<INPUT CLASS=\"formsubmit\" TYPE=\"submit\" NAME=\"modcmt\" VALUE=\"".$rudweb_ln['adm']['modstat01']."\">";
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
        echo "<FORM ENCTYPE=\"multipart/form-data\" CLASS=\"cmtonoffform\" NAME=\"cmtonoffform\" ACTION=\"\" METHOD=\"post\">";
        echo "<INPUT TYPE=\"hidden\" NAME=\"cmtonoff\" VALUE=\"0\">";
        echo "<BR>";
        echo "<INPUT CLASS=\"formsubmit\" TYPE=\"submit\" NAME=\"modcmt\" VALUE=\"".$rudweb_ln['adm']['modstat10']."\">";
        echo "</FORM>";
      }
      else {
        echo $rudweb_ln['adm']['modstat11'];
      }  
      echo $rudweb_skin['adm']['mod']['suf'];
    } // else if enabled
  }
  else if (isset($_GET['act'])) {
    if(_RUDWEB_CFG_CNT_CMNTS == 1) {
      $act = rudweb_filter_input($_GET['act']);
      switch($act) {
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