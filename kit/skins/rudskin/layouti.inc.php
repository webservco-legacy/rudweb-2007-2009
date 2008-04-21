<?php
/*
./skins/rudskin/layouti.inc.php
09:34 2008-04-21
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once '../../lib/404.php';}
?>
<DIV CLASS="vcentered">
  <?php restrictedLocalLink('default', _RUDWEB_WSTT, 'index.php/content/default', $_SESSION[_RUDWEB_PRE.'usr_level'], 0, $rudweb_ln['WinStatOver'], $rudweb_ln['WinStatOut'], "_self"); ?>
</DIV>