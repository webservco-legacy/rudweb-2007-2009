<?php
/*
./themes/rswebdef/headeri.inc.php
18:09 2008-03-12
*/
if(!defined('_RSWEB_PUBFIL')) {require_once '../../lib/404.php';}
?>
<DIV ID="container">
  <DIV CLASS="header">
    <?php restrictedLocalLink('default', _RSWEB_WSTT, 'index.php/content/default', $_SESSION[_RSWEB_PRE.'usr_level'], 0, $rsweb_ln['WinStatOver'], $rsweb_ln['WinStatOut'], "_self"); ?>
  </DIV>
  <DIV ID="footer">
    <?php genCopyright(); ?>
  </DIV>
</DIV>