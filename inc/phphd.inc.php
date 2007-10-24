<?php
/*
phphd.inc.php
16:47 21.10.2007
*/
if(!defined('_UBWS_PUBFIL')) {require_once './../lib/404.php';}

echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">";
echo "\n<HTML>\n<HEAD>";
genHtmlHeader();
require_once _UBWS_THEME_DIR . $_SESSION[_UBWS_PRE.'usr_theme_dir'] . '/style.inc.php';
echo "\n";
require_once _UBWS_JS_DIR . 'jsfunc.inc.php';
echo "\n</HEAD>\n<BODY>\n\n";
require_once _UBWS_THEME_DIR . $_SESSION[_UBWS_PRE.'usr_theme_dir'] . '/header.inc.php';
?>