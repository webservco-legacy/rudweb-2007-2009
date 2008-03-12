<?php
/*
./inc/modcpy.inc.php
14:33 2008-03-12
*/
if(!defined('_UBWS_PUBFIL')) {require_once './../lib/404.php';}

function genCopyright() {
  global $ubws_ln;
  global $ubws_theme;
  $this_year = substr(date("Y-m-d"), 0, 4);
  $that_year = substr(_UBWS_CFG_START, 0, 4);
  echo $ubws_theme['cpy']['pre'];
  echo $ubws_ln['cpy']['1'] . " ";
  if (($this_year !== $that_year) && ($this_year > $that_year)) {
    echo $that_year . " - " . $this_year;
  }
  else if ($this_year == $that_year) {echo $that_year;}
  echo " " . _UBWS_CFG_CLCOM . ". " . $ubws_ln['cpy']['2'] . ". ";
  if (_UBWS_CFG_CPYDEV === "1") {
    echo $ubws_ln['cpy']['3'] . " ";
    restrictedExtLink("copylink", _UBWS_CFG_DVCOM, _UBWS_CFG_DVURL, $_SESSION[_UBWS_PRE.'usr_level'], 0, $ubws_ln['WinStatOver'], $ubws_ln['WinStatOut'], "_blank");
    echo ".";
  }
  echo $ubws_theme['cpy']['suf'];
  
}
?>