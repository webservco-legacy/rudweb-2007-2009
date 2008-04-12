<?php
/*
./inc/rudweb3.inc.php
12:50 2008-04-05
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once './../lib/404.php';}

// LOAD SKIN
require_once _RUDWEB_SKIN_DIR . $_SESSION[_RUDWEB_PRE.'usr_skin_dir'] . '/skin.info.php';
$_SESSION[_RUDWEB_PRE.'usr_skin_name']    = $rudweb_skin_name;
$_SESSION[_RUDWEB_PRE.'usr_skin_version'] = $rudweb_skin_version;
$_SESSION[_RUDWEB_PRE.'usr_skin_author']  = $rudweb_skin_author;
$_SESSION[_RUDWEB_PRE.'usr_skin_notes']   = $rudweb_skin_notes;
require_once _RUDWEB_SKIN_DIR . $_SESSION[_RUDWEB_PRE.'usr_skin_dir'] . '/skin.inc.php';
$_SESSION[_RUDWEB_PRE.'usr_skin_bg']   = $rudweb_skin['BgColor'];
$_SESSION[_RUDWEB_PRE.'usr_skin_fg']   = $rudweb_skin['FontColor'];

// STATS
if (_RUDWEB_CFG_STATS_ON === "1") {doStats();}
?>