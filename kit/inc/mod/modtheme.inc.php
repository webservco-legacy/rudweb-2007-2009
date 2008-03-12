<?php
/*
./inc/modtheme.inc.php
13:24 2008-03-12
*/
if(!defined('_RSWEB_PUBFIL')) {require_once './../lib/404.php';}

if (isset($_GET['tm']) && (!isset($_POST[_RSWEB_PRE.'usr_login']) && _RSWEB_CFG_THEME_ON === "1")) {
  $rsweb_new_theme = $_SESSION[_RSWEB_PRE.'usr_theme_dir'];
  $raw_new_theme = rsweb_filter_input($_GET['tm']);
  if(is_file(_RSWEB_THEME_DIR . $raw_new_theme . "/" . "theme.info.php")) {
    $rsweb_new_theme = rsweb_filter_input($_GET['tm']);
  }
  //current session
  unset($_SESSION[_RSWEB_PRE.'usr_theme_dir']);
  $_SESSION[_RSWEB_PRE.'usr_theme_dir'] = $rsweb_new_theme;
  //update db
  if(isset($_GET['settm'])) {
    switch($_GET['settm']) {
      case "1" : {
        // current user
        if(_RSWEB_CFG_USR_ON === "1") {
          if (isset($_SESSION[_RSWEB_PRE.'usr_id']) && $_SESSION[_RSWEB_PRE.'usr_id'] != "0") {
            $query_tm = "UPDATE `"._RSWEB_PRE."set_usr` SET `usr_theme` = '" . $rsweb_new_theme . "' WHERE `usr_id` = '" . $_SESSION[_RSWEB_PRE.'usr_id'] . "' LIMIT 1";
            mysql_query($query_tm) or require _RSWEB_LIB_DIR . 'myerr.php';
          }
        }
        break;
      }
      case "2" : {
        // all users
        if (isset($_SESSION[_RSWEB_PRE.'usr_level']) && $_SESSION[_RSWEB_PRE.'usr_level'] >= "4") {
          $query_tm = "UPDATE `"._RSWEB_PRE."set_usr` SET `usr_theme` = '" . $rsweb_new_theme . "'";
          mysql_query($query_tm) or require _RSWEB_LIB_DIR . 'myerr.php';
        }
        break;
      }
      case "3" : {
        // default theme
        if (isset($_SESSION[_RSWEB_PRE.'usr_level']) && $_SESSION[_RSWEB_PRE.'usr_level'] >= "4") {
          $query_tm = "UPDATE `"._RSWEB_PRE."set_cfg` SET `set_val` = '" . $rsweb_new_theme . "' WHERE `set_set` = 'THEME'";
          mysql_query($query_tm) or require _RSWEB_LIB_DIR . 'myerr.php';
        }
        break;
      }
      case "4" : {
        // default theme and all users
        if (isset($_SESSION[_RSWEB_PRE.'usr_level']) && $_SESSION[_RSWEB_PRE.'usr_level'] >= "4") {
          $query_tm = "UPDATE `"._RSWEB_PRE."set_usr` SET `usr_theme` = '" . $rsweb_new_theme . "'";
          mysql_query($query_tm) or require _RSWEB_LIB_DIR . 'myerr.php';
          
          $query_tm2 = "UPDATE `"._RSWEB_PRE."set_cfg` SET `set_val` = '" . $rsweb_new_theme . "' WHERE `set_set` = 'THEME'";
          mysql_query($query_tm2) or require _RSWEB_LIB_DIR . 'myerr.php';
        }
        break;
      }
      default  : {break;}
    }
  }
  
  $theme_request_uri = eregi_replace("/tm/".$_GET['tm'], "", $_SERVER['REQUEST_URI']);
  if(isset($_GET['settm'])) {
    $theme_request_uri = eregi_replace("/settm/".$_GET['settm'], "", $_SERVER['REQUEST_URI']);
  }
  $theme_redirect = "http://".$_SERVER['HTTP_HOST'] . $theme_request_uri;
  header("Location: $theme_redirect");
} //CHANGE THEME IS SET
?>