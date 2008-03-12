<?php
/*
./setup/act/cfgs.inc.php
12:40 2008-01-14
*/
switch($step) {
  case "1" : {
    require './act/cfgs01.inc.php';
    break;
  }
  case "2" : {
    require './act/cfgs02.inc.php';
    break;
  }
  default : {break;}
}