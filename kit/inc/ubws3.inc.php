<?php
/*
./inc/ubws3.inc.php
13:00 2008-03-12
*/
if(!defined('_UBWS_PUBFIL')) {require_once './../lib/404.php';}

// LOAD THEME
require_once _UBWS_THEME_DIR . $_SESSION[_UBWS_PRE.'usr_theme_dir'] . '/theme.info.php';
$_SESSION[_UBWS_PRE.'usr_theme_name']    = $ubws_theme_name;
$_SESSION[_UBWS_PRE.'usr_theme_version'] = $ubws_theme_version;
$_SESSION[_UBWS_PRE.'usr_theme_author']  = $ubws_theme_author;
$_SESSION[_UBWS_PRE.'usr_theme_notes']   = $ubws_theme_notes;
require_once _UBWS_THEME_DIR . $_SESSION[_UBWS_PRE.'usr_theme_dir'] . '/theme.inc.php';
$_SESSION[_UBWS_PRE.'usr_theme_bg']   = $ubws_theme['BgColor'];
$_SESSION[_UBWS_PRE.'usr_theme_fg']   = $ubws_theme['FontColor'];

// STATS
if (_UBWS_CFG_STATS_ON === "1") {doStats();}
?>