<?php
/*
./inc/rudweb3.inc.php
13:00 2008-03-12
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once './../lib/404.php';}

// LOAD THEME
require_once _RUDWEB_THEME_DIR . $_SESSION[_RUDWEB_PRE.'usr_theme_dir'] . '/theme.info.php';
$_SESSION[_RUDWEB_PRE.'usr_theme_name']    = $rudweb_theme_name;
$_SESSION[_RUDWEB_PRE.'usr_theme_version'] = $rudweb_theme_version;
$_SESSION[_RUDWEB_PRE.'usr_theme_author']  = $rudweb_theme_author;
$_SESSION[_RUDWEB_PRE.'usr_theme_notes']   = $rudweb_theme_notes;
require_once _RUDWEB_THEME_DIR . $_SESSION[_RUDWEB_PRE.'usr_theme_dir'] . '/theme.inc.php';
$_SESSION[_RUDWEB_PRE.'usr_theme_bg']   = $rudweb_theme['BgColor'];
$_SESSION[_RUDWEB_PRE.'usr_theme_fg']   = $rudweb_theme['FontColor'];

// STATS
if (_RUDWEB_CFG_STATS_ON === "1") {doStats();}
?>