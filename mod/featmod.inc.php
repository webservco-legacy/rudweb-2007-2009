<?php
/*
featmod.inc.php
12:33 25.10.2007
*/
if(!defined('_UBWS_PUBFIL')) {require_once './../lib/404.php';}

if($ubws_cfg['site']['featmod'] === 1) {
  echo $ubws_theme_ftrHdr;
  echo $ubws_theme_ftrFtr;
}
?>