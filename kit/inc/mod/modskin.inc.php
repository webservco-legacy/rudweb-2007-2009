<?php
/*
./inc/mod/modskin.inc.php
12:50 2008-04-05
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once './../lib/404.php';}

if (isset($_GET['skin']) && (!isset($_POST[_RUDWEB_PRE.'usr_login']) && _RUDWEB_CFG_SKIN_ON === "1")) {
  $rudweb_new_skin = $_SESSION[_RUDWEB_PRE.'usr_skin_dir'];
  $raw_new_skin = rudweb_filter_input($_GET['skin']);
  if(is_file(_RUDWEB_SKIN_DIR . $raw_new_skin . "/" . "skin.info.php")) {
    $rudweb_new_skin = rudweb_filter_input($_GET['skin']);
  }
  //current session
  unset($_SESSION[_RUDWEB_PRE.'usr_skin_dir']);
  $_SESSION[_RUDWEB_PRE.'usr_skin_dir'] = $rudweb_new_skin;
  //update db
  if(isset($_GET['setskin'])) {
    switch($_GET['setskin']) {
      case "1" : {
        // current user
        if(_RUDWEB_CFG_USR_ON === "1") {
          if (isset($_SESSION[_RUDWEB_PRE.'usr_id']) && $_SESSION[_RUDWEB_PRE.'usr_id'] != "0") {
            $query_skin = "UPDATE `"._RUDWEB_PRE."set_usr` SET `usr_skin` = '" . $rudweb_new_skin . "' WHERE `usr_id` = '" . $_SESSION[_RUDWEB_PRE.'usr_id'] . "' LIMIT 1";
            mysql_query($query_skin) or require _RUDWEB_LIB_DIR . 'myerr.php';
          }
        }
        break;
      }
      case "2" : {
        // all users
        if (isset($_SESSION[_RUDWEB_PRE.'usr_level']) && $_SESSION[_RUDWEB_PRE.'usr_level'] >= "4") {
          $query_skin = "UPDATE `"._RUDWEB_PRE."set_usr` SET `usr_skin` = '" . $rudweb_new_skin . "'";
          mysql_query($query_skin) or require _RUDWEB_LIB_DIR . 'myerr.php';
        }
        break;
      }
      case "3" : {
        // default skin
        if (isset($_SESSION[_RUDWEB_PRE.'usr_level']) && $_SESSION[_RUDWEB_PRE.'usr_level'] >= "4") {
          $query_skin = "UPDATE `"._RUDWEB_PRE."set_cfg` SET `set_val` = '" . $rudweb_new_skin . "' WHERE `set_set` = 'SKIN'";
          mysql_query($query_skin) or require _RUDWEB_LIB_DIR . 'myerr.php';
        }
        break;
      }
      case "4" : {
        // default skin and all users
        if (isset($_SESSION[_RUDWEB_PRE.'usr_level']) && $_SESSION[_RUDWEB_PRE.'usr_level'] >= "4") {
          $query_skin = "UPDATE `"._RUDWEB_PRE."set_usr` SET `usr_skin` = '" . $rudweb_new_skin . "'";
          mysql_query($query_skin) or require _RUDWEB_LIB_DIR . 'myerr.php';
          
          $query_skin2 = "UPDATE `"._RUDWEB_PRE."set_cfg` SET `set_val` = '" . $rudweb_new_skin . "' WHERE `set_set` = 'SKIN'";
          mysql_query($query_skin2) or require _RUDWEB_LIB_DIR . 'myerr.php';
        }
        break;
      }
      default  : {break;}
    }
  }
  
  $skin_request_uri = eregi_replace("/skin/".$_GET['skin'], "", $_SERVER['REQUEST_URI']);
  if(isset($_GET['setskin'])) {
    $skin_request_uri = eregi_replace("/setskin/".$_GET['setskin'], "", $_SERVER['REQUEST_URI']);
  }
  $skin_redirect = "http://".$_SERVER['HTTP_HOST'] . $skin_request_uri;
  header("Location: $skin_redirect");
} //CHANGE SKIN IS SET
?>