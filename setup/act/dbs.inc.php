<?php
/*
./setup/act/dbs.inc.php
12:50 2008-04-05
*/
echo "\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
echo "\n<TR><TD CLASS=\"total\" WIDTH=\"200\"><BR><B>Setup Database:</B><BR></TD>";
echo "</TR></TABLE>";

switch($step) {
  case "1" : {
    require './act/dbs01.inc.php';
    break;
  }
  case "2" : {
    require './act/dbs02.inc.php';
    break;
  }
  case "3" : {
    require './act/dbs03.inc.php';
    break;
  }
  case "4" : {
    require './act/dbs04.inc.php';
    break;
  }
  default : {break;}
}
?>