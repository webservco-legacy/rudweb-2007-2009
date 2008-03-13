<?php
/*
phphdp.inc.php
15:30 29.11.2007
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once './../lib/404.php';}

echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">";
echo "\n<HTML>\n<HEAD>";
genHtmlHeader($rudweb_page_title, $rudweb_page_description, $rudweb_page_keywords);
require_once _RUDWEB_THEME_DIR . $_SESSION[_RUDWEB_PRE.'usr_theme_dir'] . '/style.inc.php';
echo "\n<SCRIPT TYPE=\"text/javascript\" LANGUAGE=\"JavaScript\" SRC=\""._RUDWEB_JS_URL ."prototype.js\"></SCRIPT>";
echo "\n<SCRIPT TYPE=\"text/javascript\" LANGUAGE=\"JavaScript\" SRC=\""._RUDWEB_JS_URL ."scriptaculous.js?load=effects\"></SCRIPT>";
echo "\n";
require_once _RUDWEB_JS_DIR . 'jsfunc.inc.php';
echo "\n";
require_once _RUDWEB_JS_DIR . 'jsuser.inc.php';
echo "\n<SCRIPT TYPE=\"text/javascript\" LANGUAGE=\"JavaScript\" SRC=\""._RUDWEB_JS_URL ."lightbox.js\"></SCRIPT>";
echo "\n</HEAD>\n<BODY>\n\n";
require_once _RUDWEB_THEME_DIR . $_SESSION[_RUDWEB_PRE.'usr_theme_dir'] . '/header.print.inc.php';
?>