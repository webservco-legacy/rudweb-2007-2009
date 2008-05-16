<?php
/*
./skins/icskin/style.inc.php
16:26 2008-05-16
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once '../../lib/404.php';}

echo "\n<STYLE type=\"text/css\">";
echo "\n<!--";
require_once _RUDWEB_SKIN_DIR . $_SESSION[_RUDWEB_PRE.'usr_skin_dir'] . '/styles/default.css';
require_once _RUDWEB_SKIN_DIR . $_SESSION[_RUDWEB_PRE.'usr_skin_dir'] . '/styles/custom.css';
echo "\n-->";
echo "\n</STYLE>";
?>