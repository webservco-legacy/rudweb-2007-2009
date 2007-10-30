<?php
/*
style.inc.php
17:54 27.10.2007
*/
if(!defined('_UBWS_PUBFIL')) {require_once '../../lib/404.php';}

echo "\n<STYLE type=\"text/css\">";
echo "\n<!--";
require_once _UBWS_THEME_DIR . $_SESSION[_UBWS_PRE.'usr_theme_dir'] . '/styles/default.css';
require_once _UBWS_THEME_DIR . $_SESSION[_UBWS_PRE.'usr_theme_dir'] . '/styles/custom.css';
echo "\n-->";
echo "\n</STYLE>";
?>