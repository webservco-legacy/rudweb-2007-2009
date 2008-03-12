<?php
/*
./inc/phphd.inc.php
14:07 2008-03-11
*/
if(!defined('_UBWS_PUBFIL')) {require_once './../lib/404.php';}

echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">";
echo "\n<HTML>\n<HEAD>";
genHtmlHeader($ubws_page_title, $ubws_page_description, $ubws_page_keywords);
echo "\n<!--[if IE]>";
echo "\n<STYLE type=\"text/css\">";
echo "\nIMG.op { filter:alpha(opacity=50); }";
echo "\n</STYLE>";
echo "\n<![endif]-->";
echo "\n<STYLE type=\"text/css\">";
echo "\n<!--";
echo "\nIMG.op { -moz-opacity: .5;}";
echo "\n-->";
echo "\n</STYLE>";
require_once _UBWS_THEME_DIR . $_SESSION[_UBWS_PRE.'usr_theme_dir'] . '/style.inc.php';
echo "\n<SCRIPT TYPE=\"text/javascript\" LANGUAGE=\"JavaScript\" SRC=\""._UBWS_JS_URL."CalendarPopup.js\"></SCRIPT>";
// de aici
echo "\n<SCRIPT TYPE=\"text/javascript\" LANGUAGE=\"JavaScript\" SRC=\""._UBWS_JS_URL ."prototype.js\"></SCRIPT>";
// lightbox
echo "\n<SCRIPT TYPE=\"text/javascript\" LANGUAGE=\"JavaScript\" SRC=\""._UBWS_JS_URL ."scriptaculous.js?load=effects\"></SCRIPT>";
echo "\n<SCRIPT TYPE=\"text/javascript\" LANGUAGE=\"JavaScript\" SRC=\""._UBWS_JS_URL ."lightbox.js\"></SCRIPT>";
// moo.fx
//echo "\n<SCRIPT TYPE=\"text/javascript\" LANGUAGE=\"JavaScript\" SRC=\""._UBWS_JS_URL ."moo.fx.js\"></SCRIPT>";
//echo "\n<SCRIPT TYPE=\"text/javascript\" LANGUAGE=\"JavaScript\" SRC=\""._UBWS_JS_URL ."moo.fx.pack.js\"></SCRIPT>"; // OPT
//echo "\n<SCRIPT TYPE=\"text/javascript\" LANGUAGE=\"JavaScript\" SRC=\""._UBWS_JS_URL ."moo.fx.utils.js\"></SCRIPT>"; // OPT
//echo "\n<SCRIPT TYPE=\"text/javascript\" LANGUAGE=\"JavaScript\" SRC=\""._UBWS_JS_URL ."accordion.js\"></SCRIPT>"; // OPT
//echo "\n<SCRIPT TYPE=\"text/javascript\" LANGUAGE=\"JavaScript\" SRC=\""._UBWS_JS_URL ."moo.fx.transitions.js\"></SCRIPT>"; // OPT
// default scripts
echo "\n";
require_once _UBWS_JS_DIR . 'jsfunc.inc.php';
// user's scripts
echo "\n";
require_once _UBWS_THEME_DIR . $_SESSION[_UBWS_PRE.'usr_theme_dir'] . '/scripts/js.inc.php';
echo "\n";
// DIRTY SOLUTION FOR DEZY DESIGN
//echo "\n</HEAD>\n<BODY onload=\"StartClock()\" onunload=\"KillClock()\">\n\n";
echo "\n</HEAD>\n<BODY>\n\n";
require_once _UBWS_THEME_DIR . $_SESSION[_UBWS_PRE.'usr_theme_dir'] . '/header.inc.php';
?>