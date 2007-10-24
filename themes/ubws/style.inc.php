<?php
/*
style.inc.php
11:14 06.10.2007
*/
if(!defined('_UBWS_PUBFIL')) {require_once '../../lib/404.php';}

echo "\n<STYLE type=\"text/css\">";
echo "\n<!--";
require_once _UBWS_THEME_DIR . $_SESSION[_UBWS_PRE.'usr_theme_dir'] . '/styles/style1.css';
echo "\n-->";
echo "\n</STYLE>";
?>