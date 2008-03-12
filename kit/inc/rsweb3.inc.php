<?php
/*
./inc/rsweb3.inc.php
13:00 2008-03-12
*/
if(!defined('_RSWEB_PUBFIL')) {require_once './../lib/404.php';}

// LOAD THEME
require_once _RSWEB_THEME_DIR . $_SESSION[_RSWEB_PRE.'usr_theme_dir'] . '/theme.info.php';
$_SESSION[_RSWEB_PRE.'usr_theme_name']    = $rsweb_theme_name;
$_SESSION[_RSWEB_PRE.'usr_theme_version'] = $rsweb_theme_version;
$_SESSION[_RSWEB_PRE.'usr_theme_author']  = $rsweb_theme_author;
$_SESSION[_RSWEB_PRE.'usr_theme_notes']   = $rsweb_theme_notes;
require_once _RSWEB_THEME_DIR . $_SESSION[_RSWEB_PRE.'usr_theme_dir'] . '/theme.inc.php';
$_SESSION[_RSWEB_PRE.'usr_theme_bg']   = $rsweb_theme['BgColor'];
$_SESSION[_RSWEB_PRE.'usr_theme_fg']   = $rsweb_theme['FontColor'];

// STATS
if (_RSWEB_CFG_STATS_ON === "1") {doStats();}
?>