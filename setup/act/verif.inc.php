<?php
/*
./setup/act/verif.inc.php
12:50 2008-04-05
*/
echo "\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
echo "\n<TR><TD CLASS=\"total\" WIDTH=\"200\"><BR><B>Check Requirements:</B><BR></TD>";
echo "</TR></TABLE>";

switch($step) {
  case "1" : {
    require './act/verif01.inc.php';
    break;
  }
  case "2" : {
    require './act/verif02.inc.php';
    break;
  }
  default : {break;}
}
?>