<?php
/*
./skins/thskin/style.inc.php
13:30 2008-05-18
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once '../../lib/404.php';}

echo "\n<STYLE type=\"text/css\">";
echo "\n<!--";
require_once _RUDWEB_SKIN_DIR . $_SESSION[_RUDWEB_PRE.'usr_skin_dir'] . '/styles/default.css';
require_once _RUDWEB_SKIN_DIR . $_SESSION[_RUDWEB_PRE.'usr_skin_dir'] . '/styles/custom.css';
echo "\n-->";
echo "\n</STYLE>";
?>