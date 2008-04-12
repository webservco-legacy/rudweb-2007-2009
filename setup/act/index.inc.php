<?php
/*
./setup/act/index.inc.php
12:50 2008-04-05
*/
echo "\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
echo "\n<TR><TD CLASS=\"total\" WIDTH=\"200\"><BR><B>Start:</B><BR></TD>";
echo "</TR></TABLE>";

switch($set) {
  case "remove" : {
    require './act/startr.inc.php';
    break;
  }
  case "upgrade" : {
    require './act/startu.inc.php';
    break;
  }
  case "install" : {
    require './act/starti.inc.php';
    break;
  }
  default : {break;}
}