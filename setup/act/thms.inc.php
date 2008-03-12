<?php
/*
./setup/act/thms.inc.php
11:48 2008-01-17
*/
echo "\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
echo "\n<TR><TD CLASS=\"total\" WIDTH=\"200\"><BR><B>Install Themes:</B><BR></TD>";
echo "</TR></TABLE>";

switch($step) {
  case "1" : {
    require './act/thms01.inc.php';
    break;
  }
  case "2" : {
    require './act/thms02.inc.php';
    break;
  }
  default : {break;}
}
?>