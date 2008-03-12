<?php
/*
./setup/cfg/func.inc.php
11:18 2008-01-09
*/
function generate_lncfg_str($eol, $now, $ln) {
  $c  = '<?php'.$eol.'/*'.$eol.'./inc/langs/'.$ln.'/langcfg.inc.php'.$eol.$now.$eol.'*/'.$eol;
  $c .= $eol . 'if(!defined(\'_UBWS_PUBFIL\')) {require_once \'./../lib/404.php\';}';
  $c .= $eol . '';
  $c .= $eol . '// WEBSITE TITLE, DESCRIPTION, KEYWORDS - GLOBAL - in the default language';
  $c .= $eol . 'define(\'_UBWS_WSTT\', \''.$_SESSION['ubwset_langs_wstt'][$ln].'\');';
  $c .= $eol . 'define(\'_UBWS_WSDS\', \''.$_SESSION['ubwset_langs_wsds'][$ln].'\');';
  $c .= $eol . 'define(\'_UBWS_WSKW\', \''.$_SESSION['ubwset_langs_wskw'][$ln].'\');';
  $c .= $eol . '// FEATURED CONTENT';
  $c .= $eol . '$ubws_ln[\'featured\'][\'tt\']   = \''.$_SESSION['ubwset_langs_ftt'][$ln].'\';';
  $c .= $eol . '$ubws_ln[\'featured\'][\'desc\'] = \''.$_SESSION['ubwset_langs_fds'][$ln].'\';';
  $c .= $eol . '?>';
  return $c;
}
function generate_config_str($eol, $now) {
  $c  = '<?php'.$eol.'/*'.$eol.'./inc/config.inc.php'.$eol.$now.$eol.'*/'.$eol;
  $c .= $eol . 'if(!defined(\'_UBWS_PUBFIL\')) {require_once \'./../lib/404.php\';}';
  $c .= $eol . '';
  $c .= $eol . '// DATABASE CONNECTION SETTINGS';
  $c .= $eol . '$ubws_dbtype = \''.$_SESSION['ubwset_set_dbtype'].'\';';
  $c .= $eol . '$ubws_dbport = \''.$_SESSION['ubwset_set_dbport'].'\';';
  $c .= $eol . '$ubws_dbhost = \''.$_SESSION['ubwset_set_dbhost'].'\';';
  $c .= $eol . '$ubws_dbuser = \''.$_SESSION['ubwset_set_dbuser'].'\';';
  $c .= $eol . '$ubws_dbpass = \''.$_SESSION['ubwset_set_dbpass'].'\';';
  $c .= $eol . '$ubws_dbname = \''.$_SESSION['ubwset_set_dbname'].'\';';
  $c .= $eol . '// WEBSITE URL';
  $c .= $eol . 'define(\'_UBWS_SITE_URL\',\''.$_SESSION['ubwset_set_site_url1'].'\');';
  $c .= $eol . '//define(\'_UBWS_SITE_URL\',\''.$_SESSION['ubwset_set_site_url2'].'\');';
  $c .= $eol . '// WEBSITE DIRECTORY';
  $c .= $eol . 'define(\'_UBWS_SITE_DIR\',\''.$_SESSION['ubwset_set_site_root1'].'\');';
  $c .= $eol . '//define(\'_UBWS_SITE_DIR\',\''.$_SESSION['ubwset_set_site_root2'].'\');';
  $c .= $eol . '// TAKE SITE SETTINGS FROM DB (1) OR FROM FILE (0)';
  $c .= $eol . 'define(\'_UBWS_DBCFG\', \''.$_SESSION['ubwset_set_dbcfg'].'\');';
  $c .= $eol . '// TAKE THEME SETTINGS FROM DB(1) OR FROM FILE (0)';
  $c .= $eol . 'define(\'_UBWS_DBTHM\', \''.$_SESSION['ubwset_set_dbthm'].'\');';
  $c .= $eol . '// GLOBAL PREFIX, INCLUDING DATABASE TABLES PREFIX';
  $c .= $eol . 'define(\'_UBWS_PRE\', \''.$_SESSION['ubwset_set_pre'].'_\');';
  $c .= $eol . '?>';
  return $c;
}
function generate_ubwscfg_str($eol, $now) {
  $c  = '<?php'.$eol.'/*'.$eol.'./inc/ubwscfg.inc.php'.$eol.$now.$eol.'*/'.$eol;
  $c .= $eol . 'if(!defined(\'_UBWS_PUBFIL\')) {require_once \'./../lib/404.php\';}';
  $c .= $eol . '';
  $c .= $eol . '// WEBSITE START DATE';
  $c .= $eol . 'define(\'_UBWS_CFG_START\', \''.$_SESSION['ubwset_cfg_start'].'\');';
  $c .= $eol . '// WEBSITE OWNER/CLIENT DATA';
  $c .= $eol . 'define(\'_UBWS_CFG_CLCOM\', \''.$_SESSION['ubwset_cfg_clcom'].'\'); // company name';
  $c .= $eol . 'define(\'_UBWS_CFG_CLNAM\', \''.$_SESSION['ubwset_cfg_clnam'].'\'); // contact person';
  $c .= $eol . '// WEBSITE DEVELOPER DATA';
  $c .= $eol . 'define(\'_UBWS_CFG_DVCOM\', \''.$_SESSION['ubwset_cfg_dvcom'].'\'); // company name';
  $c .= $eol . 'define(\'_UBWS_CFG_DVURL\', \''.$_SESSION['ubwset_cfg_dvurl'].'\'); // company url';
  $c .= $eol . 'define(\'_UBWS_CFG_DVNAM\', \''.$_SESSION['ubwset_cfg_dvnam'].'\'); // contact person';
  $c .= $eol . '// HTML HEADER META';
  $c .= $eol . 'define(\'_UBWS_CFG_DESIG\', _UBWS_CFG_DVNAM); // company';
  $c .= $eol . 'define(\'_UBWS_CFG_PUBL\', _UBWS_CFG_DVCOM); // company';
  $c .= $eol . 'define(\'_UBWS_CFG_COPY\', \'&copy; \' . substr(_UBWS_CFG_START, 0, 4) . \' \' . _UBWS_CFG_CLCOM);';
  $c .= $eol . 'define(\'_UBWS_CFG_RATNG\', \''.$_SESSION['ubwset_cfg_ratng'].'\');';
  $c .= $eol . 'define(\'_UBWS_CFG_DISTR\', \''.$_SESSION['ubwset_cfg_distr'].'\'); /* Global / Local */';
  $c .= $eol . 'define(\'_UBWS_CFG_ROBOTS\', \''.$_SESSION['ubwset_cfg_robots'].'\'); /* INDEX, FOLLOW / NOINDEX, NOFOLLOW */';
  $c .= $eol . 'define(\'_UBWS_CFG_PRAG\', \''.$_SESSION['ubwset_cfg_prag'].'\');';
  $c .= $eol . 'define(\'_UBWS_CFG_EXP\', \''.$_SESSION['ubwset_cfg_exp'].'\');';
  $c .= $eol . 'define(\'_UBWS_CFG_CACHE\', \''.$_SESSION['ubwset_cfg_cache'].'\');';
  $c .= $eol . '// DEFAULT LANGUAGE';
  $c .= $eol . 'define(\'_UBWS_CFG_LANG\',\''.$_SESSION['ubwset_cfg_lang'].'\');';
  $c .= $eol . '// DEFAULT THEME';
  $c .= $eol . 'define(\'_UBWS_CFG_THEME\',\''.$_SESSION['ubwset_cfg_theme'].'\');';
  $c .= $eol . '// DEFAULT PAGE TO DISPLAY AT FIRST (IF ENABLED)';
  $c .= $eol . 'define(\'_UBWS_CFG_CNT_EN\',\''.$_SESSION['ubwset_cfg_cnt_en'].'\');';
  $c .= $eol . 'define(\'_UBWS_CFG_CNT_DE\',\''.$_SESSION['ubwset_cfg_cnt_de'].'\');';
  $c .= $eol . 'define(\'_UBWS_CFG_CNT_ES\',\''.$_SESSION['ubwset_cfg_cnt_es'].'\');';
  $c .= $eol . 'define(\'_UBWS_CFG_CNT_FR\',\''.$_SESSION['ubwset_cfg_cnt_fr'].'\');';
  $c .= $eol . 'define(\'_UBWS_CFG_CNT_IT\',\''.$_SESSION['ubwset_cfg_cnt_it'].'\');';
  $c .= $eol . 'define(\'_UBWS_CFG_CNT_RO\',\''.$_SESSION['ubwset_cfg_cnt_ro'].'\');';
  $c .= $eol . '//OPTIONAL SITE MODULES';
  $c .= $eol . 'define(\'_UBWS_CFG_CNT_SHW\', \''.$_SESSION['ubwset_cfg_cnt_shw'].'\'); // enable display of content at start';
  $c .= $eol . 'define(\'_UBWS_CFG_LANG_ON\', \''.$_SESSION['ubwset_cfg_lang_on'].'\'); // enable multiple languages';
  $c .= $eol . 'define(\'_UBWS_CFG_USR_ON\', \''.$_SESSION['ubwset_cfg_usr_on'].'\'); // enable user authentification';
  $c .= $eol . 'define(\'_UBWS_CFG_THEME_ON\', \''.$_SESSION['ubwset_cfg_theme_on'].'\'); // enable multiple themes';
  $c .= $eol . 'define(\'_UBWS_CFG_CART_ON\', \''.$_SESSION['ubwset_cfg_cart_on'].'\'); // enable shopping cart';
  $c .= $eol . 'define(\'_UBWS_CFG_STATS_ON\', \''.$_SESSION['ubwset_cfg_stats_on'].'\'); // enable visitor statistics';
  $c .= $eol . 'define(\'_UBWS_CFG_STATS_IP\', \''.$_SESSION['ubwset_cfg_stats_ip'].'\'); // visitor ip to ignore in statistics';
  $c .= $eol . '// OPTIONAL CONTENT MODULES';
  $c .= $eol . 'define(\'_UBWS_CFG_FTR_ON\', \''.$_SESSION['ubwset_cfg_ftr_on'].'\'); // enable featured content';
  $c .= $eol . 'define(\'_UBWS_CFG_FTR_LMT\', \''.$_SESSION['ubwset_cfg_ftr_lmt'].'\'); // number of featured items';
  $c .= $eol . 'define(\'_UBWS_CFG_PICS_0\', \''.$_SESSION['ubwset_cfg_pics_0'].'\'); // enable content pictures 0';
  $c .= $eol . 'define(\'_UBWS_CFG_PICS_1\', \''.$_SESSION['ubwset_cfg_pics_1'].'\'); // enable content pictures 1';
  $c .= $eol . 'define(\'_UBWS_CFG_PICS_2\', \''.$_SESSION['ubwset_cfg_pics_2'].'\'); // enable content pictures 2';
  $c .= $eol . 'define(\'_UBWS_CFG_PICS_3\', \''.$_SESSION['ubwset_cfg_pics_3'].'\'); // enable content pictures 3';
  $c .= $eol . 'define(\'_UBWS_CFG_PICS_4\', \''.$_SESSION['ubwset_cfg_pics_4'].'\'); // enable content pictures 4';
  $c .= $eol . 'define(\'_UBWS_CFG_CNT_POSTED\', \''.$_SESSION['ubwset_cfg_cnt_posted'].'\'); // enable content posted by';
  $c .= $eol . 'define(\'_UBWS_CFG_CNT_TAGS\', \''.$_SESSION['ubwset_cfg_cnt_tags'].'\'); // enable content tags';
  $c .= $eol . 'define(\'_UBWS_CFG_CNT_CMNTS\', \''.$_SESSION['ubwset_cfg_cnt_cmnts'].'\'); // enable content comments';
  $c .= $eol . 'define(\'_UBWS_CFG_CNT_LNKS\', \''.$_SESSION['ubwset_cfg_cnt_lnks'].'\'); // enable content links';
  $c .= $eol . 'define(\'_UBWS_CFG_BLG_POSTED\', \''.$_SESSION['ubwset_cfg_blg_posted'].'\'); // enable blog posted by';
  $c .= $eol . 'define(\'_UBWS_CFG_BLG_TAGS\', \''.$_SESSION['ubwset_cfg_blg_tags'].'\'); // enable blog tags';
  $c .= $eol . 'define(\'_UBWS_CFG_BLG_CMNTS\', \''.$_SESSION['ubwset_cfg_blg_cmnts'].'\'); // enable blog comments';
  $c .= $eol . 'define(\'_UBWS_CFG_BLG_LNKS\', \''.$_SESSION['ubwset_cfg_blg_lnks'].'\'); // enable blog links';
  $c .= $eol . '// MISC OPTIONS';
  $c .= $eol . 'define(\'_UBWS_CFG_CPYDEV\', \''.$_SESSION['ubwset_cfg_cpydev'].'\'); // show developer info in copyright notice';
  $c .= $eol . 'define(\'_UBWS_CFG_DEBUG\', \''.$_SESSION['ubwset_cfg_debug'].'\'); // enable debug info';
  $c .= $eol . 'define(\'_UBWS_CFG_TIMER\', \''.$_SESSION['ubwset_cfg_timer'].'\'); // enable page load time';
  $c .= $eol . '?>';
  return $c;
}
function generate_dbd_str($eol) {
  $c  = $eol . 'TRUNCATE TABLE ubws_set_cfg;';
  $c .= $eol . 'INSERT INTO ubws_set_cfg VALUES(1, \'START\', \''.$_SESSION['ubwset_cfg_start'].'\', \'VAL_CRD\', \'VAL_CRT\', 1, \'0000-00-00\', \'00:00:00\', 0);';
  $c .= $eol . 'INSERT INTO ubws_set_cfg VALUES(2, \'CLCOM\', \''.$_SESSION['ubwset_cfg_clcom'].'\', \'VAL_CRD\', \'VAL_CRT\', 1, \'0000-00-00\', \'00:00:00\', 0);';
  $c .= $eol . 'INSERT INTO ubws_set_cfg VALUES(3, \'CLNAM\', \''.$_SESSION['ubwset_cfg_clnam'].'\', \'VAL_CRD\', \'VAL_CRT\', 1, \'0000-00-00\', \'00:00:00\', 0);';
  $c .= $eol . 'INSERT INTO ubws_set_cfg VALUES(4, \'DVCOM\', \''.$_SESSION['ubwset_cfg_dvcom'].'\', \'VAL_CRD\', \'VAL_CRT\', 1, \'0000-00-00\', \'00:00:00\', 0);';
  $c .= $eol . 'INSERT INTO ubws_set_cfg VALUES(5, \'DVURL\', \''.$_SESSION['ubwset_cfg_dvurl'].'\', \'VAL_CRD\', \'VAL_CRT\', 1, \'0000-00-00\', \'00:00:00\', 0);';
  $c .= $eol . 'INSERT INTO ubws_set_cfg VALUES(6, \'DVNAM\', \''.$_SESSION['ubwset_cfg_dvnam'].'\', \'VAL_CRD\', \'VAL_CRT\', 1, \'0000-00-00\', \'00:00:00\', 0);';
  $c .= $eol . 'INSERT INTO ubws_set_cfg VALUES(7, \'DESIG\', \''.$_SESSION['ubwset_cfg_dvnam'].'\', \'VAL_CRD\', \'VAL_CRT\', 1, \'0000-00-00\', \'00:00:00\', 0);';
  $c .= $eol . 'INSERT INTO ubws_set_cfg VALUES(8, \'PUBL\', \''.$_SESSION['ubwset_cfg_dvcom'].'\', \'VAL_CRD\', \'VAL_CRT\', 1, \'0000-00-00\', \'00:00:00\', 0);';
  $c .= $eol . 'INSERT INTO ubws_set_cfg VALUES(9, \'RATNG\', \''.$_SESSION['ubwset_cfg_ratng'].'\', \'VAL_CRD\', \'VAL_CRT\', 1, \'0000-00-00\', \'00:00:00\', 0);';
  $c .= $eol . 'INSERT INTO ubws_set_cfg VALUES(10, \'DISTR\', \''.$_SESSION['ubwset_cfg_distr'].'\', \'VAL_CRD\', \'VAL_CRT\', 1, \'0000-00-00\', \'00:00:00\', 0);';
  $c .= $eol . 'INSERT INTO ubws_set_cfg VALUES(11, \'ROBOTS\', \''.$_SESSION['ubwset_cfg_robots'].'\', \'VAL_CRD\', \'VAL_CRT\', 1, \'0000-00-00\', \'00:00:00\', 0);';
  $c .= $eol . 'INSERT INTO ubws_set_cfg VALUES(12, \'PRAG\', \''.$_SESSION['ubwset_cfg_prag'].'\', \'VAL_CRD\', \'VAL_CRT\', 1, \'0000-00-00\', \'00:00:00\', 0);';
  $c .= $eol . 'INSERT INTO ubws_set_cfg VALUES(13, \'EXP\', \''.$_SESSION['ubwset_cfg_exp'].'\', \'VAL_CRD\', \'VAL_CRT\', 1, \'0000-00-00\', \'00:00:00\', 0);';
  $c .= $eol . 'INSERT INTO ubws_set_cfg VALUES(14, \'CACHE\', \''.$_SESSION['ubwset_cfg_cache'].'\', \'VAL_CRD\', \'VAL_CRT\', 1, \'0000-00-00\', \'00:00:00\', 0);';
  $c .= $eol . 'INSERT INTO ubws_set_cfg VALUES(15, \'LANG\', \''.$_SESSION['ubwset_cfg_lang'].'\', \'VAL_CRD\', \'VAL_CRT\', 1, \'0000-00-00\', \'00:00:00\', 0);';
  $c .= $eol . 'INSERT INTO ubws_set_cfg VALUES(16, \'THEME\', \''.$_SESSION['ubwset_cfg_theme'].'\', \'VAL_CRD\', \'VAL_CRT\', 1, \'0000-00-00\', \'00:00:00\', 0);';
  $c .= $eol . 'INSERT INTO ubws_set_cfg VALUES(17, \'CNT_EN\', \''.$_SESSION['ubwset_cfg_cnt_en'].'\', \'VAL_CRD\', \'VAL_CRT\', 1, \'0000-00-00\', \'00:00:00\', 0);';
  $c .= $eol . 'INSERT INTO ubws_set_cfg VALUES(18, \'CNT_DE\', \''.$_SESSION['ubwset_cfg_cnt_de'].'\', \'VAL_CRD\', \'VAL_CRT\', 1, \'0000-00-00\', \'00:00:00\', 0);';
  $c .= $eol . 'INSERT INTO ubws_set_cfg VALUES(19, \'CNT_ES\', \''.$_SESSION['ubwset_cfg_cnt_es'].'\', \'VAL_CRD\', \'VAL_CRT\', 1, \'0000-00-00\', \'00:00:00\', 0);';
  $c .= $eol . 'INSERT INTO ubws_set_cfg VALUES(20, \'CNT_FR\', \''.$_SESSION['ubwset_cfg_cnt_fr'].'\', \'VAL_CRD\', \'VAL_CRT\', 1, \'0000-00-00\', \'00:00:00\', 0);';
  $c .= $eol . 'INSERT INTO ubws_set_cfg VALUES(21, \'CNT_IT\', \''.$_SESSION['ubwset_cfg_cnt_it'].'\', \'VAL_CRD\', \'VAL_CRT\', 1, \'0000-00-00\', \'00:00:00\', 0);';
  $c .= $eol . 'INSERT INTO ubws_set_cfg VALUES(22, \'CNT_RO\', \''.$_SESSION['ubwset_cfg_cnt_ro'].'\', \'VAL_CRD\', \'VAL_CRT\', 1, \'0000-00-00\', \'00:00:00\', 0);';
  $c .= $eol . 'INSERT INTO ubws_set_cfg VALUES(23, \'CNT_SHW\', \''.$_SESSION['ubwset_cfg_cnt_shw'].'\', \'VAL_CRD\', \'VAL_CRT\', 1, \'0000-00-00\', \'00:00:00\', 0);';
  $c .= $eol . 'INSERT INTO ubws_set_cfg VALUES(24, \'LANG_ON\', \''.$_SESSION['ubwset_cfg_lang_on'].'\', \'VAL_CRD\', \'VAL_CRT\', 1, \'0000-00-00\', \'00:00:00\', 0);';
  $c .= $eol . 'INSERT INTO ubws_set_cfg VALUES(25, \'USR_ON\', \''.$_SESSION['ubwset_cfg_usr_on'].'\', \'VAL_CRD\', \'VAL_CRT\', 1, \'0000-00-00\', \'00:00:00\', 0);';
  $c .= $eol . 'INSERT INTO ubws_set_cfg VALUES(26, \'THEME_ON\', \''.$_SESSION['ubwset_cfg_theme_on'].'\', \'VAL_CRD\', \'VAL_CRT\', 1, \'0000-00-00\', \'00:00:00\', 0);';
  $c .= $eol . 'INSERT INTO ubws_set_cfg VALUES(27, \'CART_ON\', \''.$_SESSION['ubwset_cfg_cart_on'].'\', \'VAL_CRD\', \'VAL_CRT\', 1, \'0000-00-00\', \'00:00:00\', 0);';
  $c .= $eol . 'INSERT INTO ubws_set_cfg VALUES(28, \'STATS_ON\', \''.$_SESSION['ubwset_cfg_stats_on'].'\', \'VAL_CRD\', \'VAL_CRT\', 1, \'0000-00-00\', \'00:00:00\', 0);';
  $c .= $eol . 'INSERT INTO ubws_set_cfg VALUES(29, \'STATS_IP\', \''.$_SESSION['ubwset_cfg_stats_ip'].'\', \'VAL_CRD\', \'VAL_CRT\', 1, \'0000-00-00\', \'00:00:00\', 0);';
  $c .= $eol . 'INSERT INTO ubws_set_cfg VALUES(30, \'FTR_ON\', \''.$_SESSION['ubwset_cfg_ftr_on'].'\', \'VAL_CRD\', \'VAL_CRT\', 1, \'0000-00-00\', \'00:00:00\', 0);';
  $c .= $eol . 'INSERT INTO ubws_set_cfg VALUES(31, \'FTR_LMT\', \''.$_SESSION['ubwset_cfg_ftr_lmt'].'\', \'VAL_CRD\', \'VAL_CRT\', 1, \'0000-00-00\', \'00:00:00\', 0);';
  $c .= $eol . 'INSERT INTO ubws_set_cfg VALUES(32, \'PICS_0\', \''.$_SESSION['ubwset_cfg_pics_0'].'\', \'VAL_CRD\', \'VAL_CRT\', 1, \'0000-00-00\', \'00:00:00\', 0);';
  $c .= $eol . 'INSERT INTO ubws_set_cfg VALUES(33, \'PICS_1\', \''.$_SESSION['ubwset_cfg_pics_1'].'\', \'VAL_CRD\', \'VAL_CRT\', 1, \'0000-00-00\', \'00:00:00\', 0);';
  $c .= $eol . 'INSERT INTO ubws_set_cfg VALUES(34, \'PICS_2\', \''.$_SESSION['ubwset_cfg_pics_2'].'\', \'VAL_CRD\', \'VAL_CRT\', 1, \'0000-00-00\', \'00:00:00\', 0);';
  $c .= $eol . 'INSERT INTO ubws_set_cfg VALUES(35, \'PICS_3\', \''.$_SESSION['ubwset_cfg_pics_3'].'\', \'VAL_CRD\', \'VAL_CRT\', 1, \'0000-00-00\', \'00:00:00\', 0);';
  $c .= $eol . 'INSERT INTO ubws_set_cfg VALUES(36, \'PICS_4\', \''.$_SESSION['ubwset_cfg_pics_4'].'\', \'VAL_CRD\', \'VAL_CRT\', 1, \'0000-00-00\', \'00:00:00\', 0);';
  $c .= $eol . 'INSERT INTO ubws_set_cfg VALUES(37, \'CNT_POSTED\', \''.$_SESSION['ubwset_cfg_cnt_posted'].'\', \'VAL_CRD\', \'VAL_CRT\', 1, \'0000-00-00\', \'00:00:00\', 0);';
  $c .= $eol . 'INSERT INTO ubws_set_cfg VALUES(38, \'CNT_TAGS\', \''.$_SESSION['ubwset_cfg_cnt_tags'].'\', \'VAL_CRD\', \'VAL_CRT\', 1, \'0000-00-00\', \'00:00:00\', 0);';
  $c .= $eol . 'INSERT INTO ubws_set_cfg VALUES(39, \'CNT_CMNTS\', \''.$_SESSION['ubwset_cfg_cnt_cmnts'].'\', \'VAL_CRD\', \'VAL_CRT\', 1, \'0000-00-00\', \'00:00:00\', 0);';
  $c .= $eol . 'INSERT INTO ubws_set_cfg VALUES(40, \'CNT_LNKS\', \''.$_SESSION['ubwset_cfg_cnt_lnks'].'\', \'VAL_CRD\', \'VAL_CRT\', 1, \'0000-00-00\', \'00:00:00\', 0);';
  $c .= $eol . 'INSERT INTO ubws_set_cfg VALUES(41, \'BLG_POSTED\', \''.$_SESSION['ubwset_cfg_blg_posted'].'\', \'VAL_CRD\', \'VAL_CRT\', 1, \'0000-00-00\', \'00:00:00\', 0);';
  $c .= $eol . 'INSERT INTO ubws_set_cfg VALUES(42, \'BLG_TAGS\', \''.$_SESSION['ubwset_cfg_blg_tags'].'\', \'VAL_CRD\', \'VAL_CRT\', 1, \'0000-00-00\', \'00:00:00\', 0);';
  $c .= $eol . 'INSERT INTO ubws_set_cfg VALUES(43, \'BLG_CMNTS\', \''.$_SESSION['ubwset_cfg_blg_cmnts'].'\', \'VAL_CRD\', \'VAL_CRT\', 1, \'0000-00-00\', \'00:00:00\', 0);';
  $c .= $eol . 'INSERT INTO ubws_set_cfg VALUES(44, \'BLG_LNKS\', \''.$_SESSION['ubwset_cfg_blg_lnks'].'\', \'VAL_CRD\', \'VAL_CRT\', 1, \'0000-00-00\', \'00:00:00\', 0);';
  $c .= $eol . 'INSERT INTO ubws_set_cfg VALUES(45, \'CPYDEV\', \''.$_SESSION['ubwset_cfg_cpydev'].'\', \'VAL_CRD\', \'VAL_CRT\', 1, \'0000-00-00\', \'00:00:00\', 0);';
  $c .= $eol . 'INSERT INTO ubws_set_cfg VALUES(46, \'DEBUG\', \''.$_SESSION['ubwset_cfg_debug'].'\', \'VAL_CRD\', \'VAL_CRT\', 1, \'0000-00-00\', \'00:00:00\', 0);';
  $c .= $eol . 'INSERT INTO ubws_set_cfg VALUES(47, \'TIMER\', \''.$_SESSION['ubwset_cfg_timer'].'\', \'VAL_CRD\', \'VAL_CRT\', 1, \'0000-00-00\', \'00:00:00\', 0);';

  $c .= $eol . 'INSERT INTO ubws_set_usr VALUES (1, \'The\', \'Website\', \'Admin\', \'\', \'Root\', \'admin\', \''.$_SESSION['ubwset_set_pre'].'admin00\', \''.$_SESSION['ubwset_cfg_theme'].'\', \''.$_SESSION['ubwset_cfg_lang'].'\', 5, 1, \'default admin\', \'VAL_CRD\');';
  return $c;
}
function generate_removed01($eol) {
  $c  = $eol . 'TRUNCATE TABLE ubws_set_cfg;';
  $c  .= $eol . 'TRUNCATE TABLE ubws_set_thm;';
  $c  .= $eol . 'TRUNCATE TABLE ubws_set_usr;';
  $c  .= $eol . 'TRUNCATE TABLE ubws_var_logins;';
  $c  .= $eol . 'TRUNCATE TABLE ubws_var_stats;';
  $c  .= $eol . 'TRUNCATE TABLE ubws_ws_cnt;';
  $c  .= $eol . 'TRUNCATE TABLE ubws_ws_ftr;';
  $c  .= $eol . 'TRUNCATE TABLE ubws_ws_lnk;';
  $c  .= $eol . 'TRUNCATE TABLE ubws_ws_mnu;';
  $c  .= $eol . 'TRUNCATE TABLE ubws_ws_pic;';
  $c  .= $eol . 'OPTIMIZE TABLE ubws_set_cfg;';
  $c  .= $eol . 'OPTIMIZE TABLE ubws_set_thm;';
  $c  .= $eol . 'OPTIMIZE TABLE ubws_set_usr;';
  $c  .= $eol . 'OPTIMIZE TABLE ubws_var_logins;';
  $c  .= $eol . 'OPTIMIZE TABLE ubws_var_stats;';
  $c  .= $eol . 'OPTIMIZE TABLE ubws_ws_cnt;';
  $c  .= $eol . 'OPTIMIZE TABLE ubws_ws_ftr;';
  $c  .= $eol . 'OPTIMIZE TABLE ubws_ws_lnk;';
  $c  .= $eol . 'OPTIMIZE TABLE ubws_ws_mnu;';
  $c  .= $eol . 'OPTIMIZE TABLE ubws_ws_pic;';
  return $c;
}
function generate_removed02($eol) {
  $c  = $eol . 'DROP TABLE IF EXISTS ubws_set_cfg;';
  $c  .= $eol . 'DROP TABLE IF EXISTS ubws_set_thm;';
  $c  .= $eol . 'DROP TABLE IF EXISTS ubws_set_usr;';
  $c  .= $eol . 'DROP TABLE IF EXISTS ubws_var_logins;';
  $c  .= $eol . 'DROP TABLE IF EXISTS ubws_var_stats;';
  $c  .= $eol . 'DROP TABLE IF EXISTS ubws_ws_cnt;';
  $c  .= $eol . 'DROP TABLE IF EXISTS ubws_ws_ftr;';
  $c  .= $eol . 'DROP TABLE IF EXISTS ubws_ws_lnk;';
  $c  .= $eol . 'DROP TABLE IF EXISTS ubws_ws_mnu;';
  $c  .= $eol . 'DROP TABLE IF EXISTS ubws_ws_pic;';
  return $c;
}
function check_cfg_file($path, $file) {
  $err = 0;
  if(!is_dir($path)) {$err = 1;} /* directory doesn't exist */
  else if(!is_writable($path)) {$err = 2;} /* directory isn't writable */
  else if(file_exists($path.$file)) {$err = 3;} /* file already exists */
  else if(file_exists($path.$file) && !is_writable($path.$file)) {$err = 4;} /* file exists but writing is not possible */
  return $err;
}
function write_config_str($str, $file) {
  $err = 0;
  $f = fopen($file, 'wb');
  if($f !== false) {
    $w = fwrite($f, $str);
    if ($w === false) {$err = 1;} // could not write
    else {$err = 0;} // write ok
    fclose($f);
  }
  else {$err = 2;} // could not open file for writing
  return $err;
}
function get_version($location) {
  if(is_readable($location.'inc/ubwsc.inc.php')) {
    $version_raw = file($location.'inc/ubwsc.inc.php');
    $version_full = eregi_replace('define\("_UBWS_SITE_VERSION", "', '', $version_raw['8']);
    $version['0']  = eregi_replace('"\);', '', $version_full);
  }
  else {
    $version['0'] = '0.0.000000';
  }
  $version['1'] = substr($version['0'], 0, 3);
  $version['2'] = '20' . substr($version['0'], 4, 2) . '-' .substr($version['0'], 6, 2) . '-' . substr($version['0'], 8, 2);
  $version['3'] = substr($version['0'], 4, 6);
  return $version;
}
function compare_version($version_ub, $version_cl) {
  $compare = null;
  if($version_cl['0'] == '0.0.000000') {$compare = 0;} // TARGET DOESN'T EXIST
  else if($version_ub['0'] == $version_cl['0']) {$compare = 1;} // IDENTICAL
  else if($version_ub['0'] != $version_cl['0']) {
    $compare = 2; // DIFFERENT
    if($version_ub['1'] == $version_cl['1']) {
      $compare = 3; // SAME VERSION DIFFERENT BUILD
      if($version_ub['2'] > $version_cl['2']) {
        $compare = 4; // NEWER BUILD AVAILABLE
      }
      else if($version_ub['2'] < $version_cl['2']) {
        $compare = 5; // YOUR BUILD IS NEWER THAN OURS :-)
      }
    }
    else if($version_ub['1'] > $version_cl['1']) {
      $compare = 6; // NEWER VERSION AVAILABLE
    }
    else if($version_ub['1'] < $version_cl['1']) {
      $compare = 7; // YOU HAVE A NEWER VERSION THAN US :-)
    }
  }
  return $compare;
}
function version_age($version_ub, $version_cl) {
  //date_default_timezone_set('Europe/Helsinki');
  $today = mktime(0,0,0,date("m"),date("d"),date("Y"));
  
  $version_ub_a = explode('-',$version_ub[2]);
  $version_ub_sec = mktime(0,0,0,$version_ub_a[1],$version_ub_a[2],$version_ub_a[0]);
  $diff[0] = (($today - $version_ub_sec) / 3600) / 24;
  if($version_cl['3'] == '000000') {$version_cl_sec = '0';$diff[1] = 'n/a';$diff[2] = 'n/a';}
  else {
    $version_cl_a = explode('-',$version_cl[2]);
    $version_cl_sec = mktime(0,0,0,$version_cl_a[1],$version_cl_a[2],$version_cl_a[0]);
    $diff[1] = (($today - $version_cl_sec) / 3600) / 24;
    $diff[2] = (($version_ub_sec - $version_cl_sec) / 3600) / 24;
  }
  return $diff;
}
function show_version_age($version_age) {
  $version_msg = 'n/a';
  if($version_age < '0' || $version_age == 'n/a') {$version_msg = 'n/a';}
  else if($version_age >= '0') {
    if     ($version_age == '0') {$version_msg = 'today';}
    else if($version_age == '1') {$version_msg = 'yesterday';}
    else                         {$version_msg = $version_age . ' days ago';}
  }
  return $version_msg;
}
function show_compare_version($compare_version) {
  switch($compare_version){
    case '0' : {$compare_msg = 'File not found.'; break;}
    case '1' : {$compare_msg = 'You have the latest version!'; break;}
    case '2' : {$compare_msg = 'You have a different version.'; break;}
    case '3' : {$compare_msg = 'You have the latest version but a different build'; break;}
    case '4' : {$compare_msg = 'You have the latest version, but a new build is available!'; break;}
    case '5' : {$compare_msg = 'You have the latest version, but your build is newer.'; break;}
    case '6' : {$compare_msg = 'A new version is available'; break;}
    case '7' : {$compare_msg = 'Your version is newer!?!'; break;}
    default  : {break;}
  }
  return $compare_msg;
}
function check_gd() {
  if(function_exists('gd_info')) {
    $raw_gd_info = gd_info();
    $gd_check[0] = ereg_replace('[[:alpha:][:space:]()]+', '', $raw_gd_info['GD Version']);
    $gd_check[1] = $raw_gd_info['FreeType Support'];
  }
  else {
    $gd_check[0] = '0';
    $gd_check[1] = '0';
  }
  return $gd_check;
}
function get_dbsettings($location) {
  if(is_readable($location.'inc/config.inc.php')) {
    $lines = file($location.'inc/config.inc.php');
    $dbconfig['dbtype'] = eregi_replace('\$ubws_dbtype = \'', '', $lines['9']);
    $dbconfig['dbtype'] = eregi_replace('\';', '', $dbconfig['dbtype']);
    $dbconfig['dbtype'] = trim($dbconfig['dbtype']);
    
    $dbconfig['dbport'] = eregi_replace('\$ubws_dbport = \'', '', $lines['10']);
    $dbconfig['dbport'] = eregi_replace('\';', '', $dbconfig['dbport']);
    $dbconfig['dbport'] = trim($dbconfig['dbport']);
    
    $dbconfig['dbhost'] = eregi_replace('\$ubws_dbhost = \'', '', $lines['11']);
    $dbconfig['dbhost'] = eregi_replace('\';', '', $dbconfig['dbhost']);
    $dbconfig['dbhost'] = trim($dbconfig['dbhost']);
    
    $dbconfig['dbuser'] = eregi_replace('\$ubws_dbuser = \'', '', $lines['12']);
    $dbconfig['dbuser'] = eregi_replace('\';', '', $dbconfig['dbuser']);
    $dbconfig['dbuser'] = trim($dbconfig['dbuser']);
    
    $dbconfig['dbpass'] = eregi_replace('\$ubws_dbpass = \'', '', $lines['13']);
    $dbconfig['dbpass'] = eregi_replace('\';', '', $dbconfig['dbpass']);
    $dbconfig['dbpass'] = trim($dbconfig['dbpass']);
    
    $dbconfig['dbname'] = eregi_replace('\$ubws_dbname = \'', '', $lines['14']);
    $dbconfig['dbname'] = eregi_replace('\';', '', $dbconfig['dbname']);
    $dbconfig['dbname'] = trim($dbconfig['dbname']);
    
    $dbconfig['ubwspre'] = eregi_replace('define\(\'_UBWS_PRE\', \'', '', $lines['26']);
    $dbconfig['ubwspre'] = eregi_replace('_\'\);', '', $dbconfig['ubwspre']);
    $dbconfig['ubwspre'] = trim($dbconfig['ubwspre']);
  }
  else {
    $dbconfig = null;
  }
  return $dbconfig;
}
/* ********** ********** ********** ********** ********** ********** ********** ********** ********** ********** */
// DATABASE FUNCTIONS
function ubws_dbopen($db_type, $ubws_dbhost, $ubws_dbport, $ubws_dbuser, $ubws_dbpass, $ubws_dbname) {
  switch($db_type) {
    case "my": {
      $ubws_dbconn = mysql_connect($ubws_dbhost . ":" . $ubws_dbport , $ubws_dbuser, $ubws_dbpass) or die ("<B>Oups! [" . mysql_errno() . "]: " .mysql_error() . "</B>");
      mysql_select_db($ubws_dbname) or die ("<B>Oups! [" . mysql_errno() . "]: " .mysql_error() . "</B>");
      break;
    }
    case "pg": {
      $ubws_dbconn = pg_connect("host=" . $ubws_dbhost . " port=".$ubws_dbport." dbname=".$ubws_dbname." user=".$ubws_dbuser." password=".$ubws_dbpass."") or die("Oops! Could not connect" . pg_connection_status($ubws_dbconn));
      break;
    }
    default  : {$ubws_conn = NULL; break;}
  }
  return $ubws_dbconn;
}
function ubws_dbclose($db_type, $ubws_dbconn) {
  switch($db_type) {
    case "my": {mysql_close($ubws_dbconn); break;}
    case "pg": {pg_close($ubws_dbconn); break;}
    default  : {break;}
  }
}
function ubws_qres($db_type, $query) {
  switch($db_type) {
    //case "my": {$result = mysql_query($query) or die("Oops! Query Failed. " . mysql_errno() . " : " . mysql_error()); break;}
    case "my": {$result = mysql_query($query);
    if($result == FALSE) {
      $result = "Oops! Query Failed. " . mysql_errno() . " : " . mysql_error();
    }
    break;
    }
    case "pg": {$result = pg_query($query) or die("Oops! Query Failed. " . pg_last_error()); break;}
    default  : {$result = NULL; break;}
  }
  return $result;
}
function ubws_qtotal($db_type, $result) {
  switch($db_type) {
    case "my": {$total = mysql_num_rows($result); break;}
    case "pg": {$total = pg_num_rows($result); break;}
    default  : {$total = NULL; break;}
  }
  return $total;
}
function ubws_fetch_assoc($db_type, $result) {
  switch($db_type) {
    case "my": {$row = mysql_fetch_assoc($result); break;}
    case "pg": {$row = pg_fetch_assoc($result); break;}
    default  : {$row = NULL; break;}
  }
  return $row;
}
function ubws_affected($db_type, $result) {
  switch($db_type) {
    case "my": {$affected = mysql_affected_rows(); break;}
    case "pg": {$affected = pg_affected_rows($result); break;}
    default  : {$affected = NULL; break;}
  }
  return $affected;
}
function lsdir($dir) {
  $subdirs = NULL;
  $i = '1';
  if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
      while (($file = readdir($dh)) !== false) {
        if ($file != "." && $file != "..") {
          if (filetype($dir . $file) == 'dir') {
            $subdirs[$i] = $file;
            $i++;
          }
        }
      }
    closedir($dh);
    }
  }
  return $subdirs;
}
/*
inspired by the phpbb code
start: 16:01 2008-01-07
10:44 2008-01-21
*/
function split_sql($sql, $delimiter) {
  // trim
  $sql = trim($sql);
	// remove # comments
  $sql = preg_replace('/\n{2,}/', "\n", preg_replace('/^#.*$/m', "\n", $sql));
  // remove -- comments
	$sql = preg_replace('/\n{2,}/', "\n", preg_replace('/^--.*$/m', "\n", $sql));
  // remove \r
  $sql = eregi_replace("\r", "", $sql);
  // split
  $sql = preg_split('/' . preg_quote($delimiter, '/') . '$/m', $sql);
  // trim pieces
  $sql = array_map('trim', $sql);
  // delete last one if empty
  $last_one = end($sql);
  if(empty($last_one)) {unset($sql[key($sql)]);}
  // return
  return $sql;
}
/* ********** ********** ********** ********** ********** ********** ********** ********** ********** ********** */
//rchillet at hotmail dot com (28-Apr-2006 09:45)

//improvement the function of heavyraptor with int offset parametre. 
if (!function_exists("stripos")) {
 function stripos($str,$needle,$offset=0)
 {
  return strpos(strtolower($str),strtolower($needle),$offset);
 }
}
/* ********** ********** ********** ********** ********** ********** ********** ********** ********** ********** */
// from php manual
//ggarciaa's post above has one small error, it will ignore file and directory strings that are evaluated as false (ie. "0")
//Fixed code is below (false !==)

// ggarciaa at gmail dot com (04-July-2007 01:57)
// I needed to empty a directory, but keeping it
// so I slightly modified the contribution from
// stefano at takys dot it (28-Dec-2005 11:57)
// A short but powerfull recursive function
// that works also if the dirs contain hidden files
//
// $dir = the target directory
// $DeleteMe = if true delete also $dir, if false leave it alone
function SureRemoveDir($dir, $DeleteMe) {
   $err = '1';
   if(!$dh = @opendir($dir)) return;
   while (false !== ($obj = readdir($dh))) {
       if($obj=='.' || $obj=='..') continue;
       if (!@unlink($dir.'/'.$obj)) SureRemoveDir($dir.'/'.$obj, true);
   }
   if ($DeleteMe){
       closedir($dh);
       //@rmdir($dir);
       if(@rmdir($dir)) {$err = '0';}
   }
   if($err == '0') {return true;}
   else {return false;}
}
//SureRemoveDir('EmptyMe', false);
//SureRemoveDir('RemoveMe', true);
/* ********** ********** ********** ********** ********** ********** ********** ********** ********** ********** */
?>