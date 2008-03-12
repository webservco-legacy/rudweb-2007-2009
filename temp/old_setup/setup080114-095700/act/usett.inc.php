<?php
/*
./setup/act/verif.inc.php
16:56 2008-01-09
*/
$usett_err = '0';

echo "\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
echo "\n<TR><TD CLASS=\"total\" WIDTH=\"40\"><BR><B>Gathering Settings:</B><BR></TD>";
echo "</TR></TABLE>";

switch($step) {
  case "1" : {
    require './act/usett01.inc.php';
    break;
  }
  case "2" : {
    require './act/usett02.inc.php';
    break;
  }
  case "3" : {
    require './act/usett03.inc.php';
    break;
  }
  default : {break;}
}
?>