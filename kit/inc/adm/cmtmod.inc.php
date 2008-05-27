<?php
/*
./inc/adm/cmtmod.inc.php
10:58 2008-05-26
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once './../../lib/404.php';}

if($_SESSION[_RUDWEB_PRE.'usr_level'] >= 3) {

  echo $rudweb_skin['cnt']['tt1']['pre'];
  echo $rudweb_ln['cmt']['cmtt'] ;
  echo $rudweb_skin['cnt']['tt1']['suf'];

  echo $rudweb_skin['cnt']['txt']['pre'];
  
  if (isset($_GET['act'])) {
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