<?php
/*
phphdp.inc.php
15:30 29.11.2007
*/
if(!defined('_UBWS_PUBFIL')) {require_once './../lib/404.php';}

echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">";
echo "\n<HTML>\n<HEAD>";
genHtmlHeader($ubws_page_title, $ubws_page_description, $ubws_page_keywords);
require_once _UBWS_THEME_DIR . $_SESSION[_UBWS_PRE.'usr_theme_dir'] . '/style.inc.php';
echo "\n<SCRIPT TYPE=\"text/javascript\" LANGUAGE=\"JavaScript\" SRC=\""._UBWS_JS_URL ."prototype.js\"></SCRIPT>";
echo "\n<SCRIPT TYPE=\"text/javascript\" LANGUAGE=\"JavaScript\" SRC=\""._UBWS_JS_URL ."scriptaculous.js?load=effects\"></SCRIPT>";
echo "\n";
require_once _UBWS_JS_DIR . 'jsfunc.inc.php';
echo "\n";
require_once _UBWS_JS_DIR . 'jsuser.inc.php';
echo "\n<SCRIPT TYPE=\"text/javascript\" LANGUAGE=\"JavaScript\" SRC=\""._UBWS_JS_URL ."lightbox.js\"></SCRIPT>";
echo "\n</HEAD>\n<BODY>\n\n";
require_once _UBWS_THEME_DIR . $_SESSION[_UBWS_PRE.'usr_theme_dir'] . '/header.print.inc.php';
?>