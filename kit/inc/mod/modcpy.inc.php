<?php
/*
./inc/modcpy.inc.php
14:33 2008-03-12
*/
if(!defined('_RSWEB_PUBFIL')) {require_once './../lib/404.php';}

function genCopyright() {
  global $rsweb_ln;
  global $rsweb_theme;
  $this_year = substr(date("Y-m-d"), 0, 4);
  $that_year = substr(_RSWEB_CFG_START, 0, 4);
  echo $rsweb_theme['cpy']['pre'];
  echo $rsweb_ln['cpy']['1'] . " ";
  if (($this_year !== $that_year) && ($this_year > $that_year)) {
    echo $that_year . " - " . $this_year;
  }
  else if ($this_year == $that_year) {echo $that_year;}
  echo " " . _RSWEB_CFG_CLCOM . ". " . $rsweb_ln['cpy']['2'] . ". ";
  if (_RSWEB_CFG_CPYDEV === "1") {
    echo $rsweb_ln['cpy']['3'] . " ";
    restrictedExtLink("copylink", _RSWEB_CFG_DVCOM, _RSWEB_CFG_DVURL, $_SESSION[_RSWEB_PRE.'usr_level'], 0, $rsweb_ln['WinStatOver'], $rsweb_ln['WinStatOut'], "_blank");
    echo ".";
  }
  echo $rsweb_theme['cpy']['suf'];
  
}
?>