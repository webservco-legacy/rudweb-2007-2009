<?php
/*
./setup/act/removef.inc.php
14:38 2008-01-23
*/
echo "\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
echo "\n<TR><TD CLASS=\"total\" WIDTH=\"200\"><BR><B>Remove Files:</B><BR></TD>";
echo "</TR></TABLE>";

switch($step) {
  case "1" : {
    require './act/removef01.inc.php';
    break;
  }
  default : {break;}
}
?>