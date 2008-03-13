<?php
/*
./themes/rudwebdef/style.inc.php
17:55 2008-03-12
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once '../../lib/404.php';}

echo "\n<STYLE type=\"text/css\">";
echo "\n<!--";
require_once _RUDWEB_THEME_DIR . $_SESSION[_RUDWEB_PRE.'usr_theme_dir'] . '/styles/default.css';
require_once _RUDWEB_THEME_DIR . $_SESSION[_RUDWEB_PRE.'usr_theme_dir'] . '/styles/custom.css';
echo "\n-->";
echo "\n</STYLE>";
?>