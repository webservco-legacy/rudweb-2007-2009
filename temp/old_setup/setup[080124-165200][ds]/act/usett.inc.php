<?php
/*
./setup/act/verif.inc.php
16:56 2008-01-09
*/
$usett_err = '0';

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