<?php
/*
./inc/rudwebm.inc.php
20:47 2008-03-17
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once './../lib/404.php';}

/* ********** ********** ********** MULTIPLE LANGUAGES ********** ********** ********** */
if (_RUDWEB_CFG_LANG_ON === "1") {require _RUDWEB_MOD_DIR . 'modlang.inc.php';}
else {function genLangMod() {}}
/* ********** ********** ********** //MULTIPLE LANGUAGES ********** ********** ********** */
/* ********** ********** ********** MULTIPLE THEMES ********** ********** ********** */
if (_RUDWEB_CFG_THEME_ON === "1") {require _RUDWEB_MOD_DIR . 'modtheme.inc.php';}
/* ********** ********** ********** //MULTIPLE THEMES ********** ********** ********** */
/* ********** ********** ********** MULTIPLE USERS ********** ********** ********** */
if (_RUDWEB_CFG_USR_ON === "1") {require _RUDWEB_MOD_DIR . 'moduser.inc.php';}
else {function genUserMod() {}}
/* ********** ********** ********** //MULTIPLE USERS ********** ********** ********** */
/* ********** ********** ********** SHOPPING CART ********** ********** ********** */
if (_RUDWEB_CFG_CART_ON === "1") {require _RUDWEB_MOD_DIR . 'modcart.inc.php';}
else {
  function showProducts() {}
  function showCart() {}
}
/* ********** ********** ********** //SHOPPING CART ********** ********** ********** */
/* ********** ********** ********** VISITOR STATISTICS ********** ********** ********** */
if (_RUDWEB_CFG_STATS_ON === "1") {require _RUDWEB_MOD_DIR . 'modstats.inc.php';}
else {
  function doStats() {}
  function showStats() {}
}
/* ********** ********** ********** //VISITOR STATISTICS ********** ********** ********** */
/* ********** ********** ********** PAGE PARSE TIME ********** ********** ********** */
if (_RUDWEB_CFG_TIMER === "1") {require _RUDWEB_MOD_DIR . 'modtimer.inc.php';}
else {function pageLoadTime() {}}
/* ********** ********** ********** //PAGE PARSE TIME ********** ********** ********** */
/* ********** ********** ********** FEATURED CONTENT ********** ********** ********** */
if (_RUDWEB_CFG_FTR_ON === "1") {require _RUDWEB_MOD_DIR . 'modftr.inc.php';}
else {function showFeatured() {}}
/* ********** ********** ********** //FEATURED CONTENT ********** ********** ********** */
/* ********** ********** ********** FEATURED CONTENT ********** ********** ********** */
if (_RUDWEB_CFG_DEBUG === "1") {require _RUDWEB_MOD_DIR . 'moddebug.inc.php';}
else {function debugOutput() {}}
/* ********** ********** ********** //FEATURED CONTENT ********** ********** ********** */
/* ********** ********** ********** COPYRIGHT ********** ********** ********** */
if (_RUDWEB_CFG_CPY === "1") {require _RUDWEB_MOD_DIR . 'modcpy.inc.php';}
else {function genCopyright() {}}
/* ********** ********** ********** //COPYRIGHT ********** ********** ********** */
/* ********** ********** ********** SITEMAP ********** ********** ********** */
if (_RUDWEB_CFG_SMAP === "1") {require _RUDWEB_MOD_DIR . 'modsmap.inc.php';}
/* ********** ********** ********** //SITEMAP ********** ********** ********** */
/* ********** ********** ********** YOUAREHERE ********** ********** ********** */
if (_RUDWEB_CFG_YAH === "1") {require _RUDWEB_MOD_DIR . 'modyah.inc.php';}
else {function youAreHere() {}}
/* ********** ********** ********** //YOUAREHERE ********** ********** ********** */
/* ********** ********** ********** NEWS ********** ********** ********** */
if (_RUDWEB_CFG_NWS === "1") {require _RUDWEB_MOD_DIR . 'modnws.inc.php';}
/* ********** ********** ********** //NEWS ********** ********** ********** */
/* ********** ********** ********** SEARCH ********** ********** ********** */
if (_RUDWEB_CFG_SRC === "1") {require _RUDWEB_MOD_DIR . 'modsrc.inc.php';}
/* ********** ********** ********** //SEARCH ********** ********** ********** */
/* ********** ********** ********** CONTENT TAGS ********** ********** ********** */
if (_RUDWEB_CFG_CNT_TAGS === "1") {require _RUDWEB_MOD_DIR . 'modtagsc.inc.php';}
else {function showCntTags() {}}
/* ********** ********** ********** //CONTENT TAGS ********** ********** ********** */
?>