<?php
/*
setlnthm.inc.php
14:23 06.10.2007
*/
if(!defined('_UBWS_PUBFIL')) {require_once './../lib/404.php';}

if (isset($_GET['ln']) && (!isset($_POST[_UBWS_PRE.'usr_login']) && $ubws_cfg['site']['langmod'] === 1)) {
  $ubws_new_lang = ubws_filter_input($_GET['ln']);
  if (is_file(_UBWS_LANG_DIR . $ubws_new_lang . "/" . "lang.info.php")) {
    $_SESSION[_UBWS_PRE.'usr_lang_index'] = $ubws_new_lang;
  }
  if (isset($_GET['setln']) && ($_GET['setln'] === "1" && $ubws_cfg['site']['usermod'] === 1)) {
    if (isset($_SESSION[_UBWS_PRE.'usr_id']) && $_SESSION[_UBWS_PRE.'usr_id'] != "0") {
      $query_ln = "UPDATE `"._UBWS_PRE."set_usr` SET `usr_lang_index` = '" . $ubws_new_lang . "' WHERE `usr_id` = '" . $_SESSION[_UBWS_PRE.'usr_id'] . "' LIMIT 1";
      mysql_query($query_ln) or require _UBWS_LIB_DIR . 'myerr.php';
    }
  }
} //CHANGE LANGUAGE IS SET

if (isset($_GET['tm']) && (!isset($_POST[_UBWS_PRE.'usr_login']) && $ubws_cfg['site']['thmemod'] === 1)) {
  $ubws_new_theme = ubws_filter_input($_GET['tm']);
  if (is_file(_UBWS_THEME_DIR . $ubws_new_theme . "/" . "theme.info.php")) {
    $_SESSION[_UBWS_PRE.'usr_theme_dir'] = $ubws_new_theme;
  }
  if (isset($_GET['settm']) && ($_GET['settm'] === "1" && $ubws_cfg['site']['usermod'] === 1)) {
    if (isset($_SESSION[_UBWS_PRE.'usr_id']) && $_SESSION[_UBWS_PRE.'usr_id'] != "0") {
      $query_ln = "UPDATE `"._UBWS_PRE."set_usr` SET `usr_theme` = '" . $ubws_new_theme . "' WHERE `usr_id` = '" . $_SESSION[_UBWS_PRE.'usr_id'] . "' LIMIT 1";
      mysql_query($query_ln) or require _UBWS_LIB_DIR . 'myerr.php';
    }
  }
} //CHANGE THEME IS SET
?>