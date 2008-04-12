<?php
/*
./inc/mod/modcpy.inc.php
12:50 2008-04-05
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once './../lib/404.php';}

function genCopyright() {
  global $rudweb_ln;
  global $rudweb_skin;
  $this_year = substr(date("Y-m-d"), 0, 4);
  $that_year = substr(_RUDWEB_CFG_START, 0, 4);
  echo $rudweb_skin['cpy']['pre'];
  echo $rudweb_ln['cpy']['1'] . " ";
  if (($this_year !== $that_year) && ($this_year > $that_year)) {
    echo $that_year . " - " . $this_year;
  }
  else if ($this_year == $that_year) {echo $that_year;}
  echo " " . _RUDWEB_CFG_CLCOM . ". " . $rudweb_ln['cpy']['2'] . ". ";
  if (_RUDWEB_CFG_CPYDEV === "1") {
    echo $rudweb_ln['cpy']['3'] . " ";
    restrictedExtLink("copylink", _RUDWEB_CFG_DVCOM, _RUDWEB_CFG_DVURL, $_SESSION[_RUDWEB_PRE.'usr_level'], 0, $rudweb_ln['WinStatOver'], $rudweb_ln['WinStatOut'], "_blank");
    echo ".";
  }
  echo $rudweb_skin['cpy']['suf'];
  
}
?>