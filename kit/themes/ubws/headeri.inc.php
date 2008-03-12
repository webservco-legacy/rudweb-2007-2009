<?php
/*
./themes/ubws/headeri.inc.php
09:46 2008-01-21
*/
if(!defined('_UBWS_PUBFIL')) {require_once '../../lib/404.php';}
?>
<DIV ID="container">
  <DIV CLASS="header">
    <?php restrictedLocalLink('default', _UBWS_WSTT, 'index.php/ubws/about', $_SESSION[_UBWS_PRE.'usr_level'], 0, $ubws_ln['WinStatOver'], $ubws_ln['WinStatOut'], "_self"); ?>
  </DIV>
  <DIV ID="footer">
    <?php genCopyright(); ?>
  </DIV>
</DIV>