<?php
/*
./inc/login.inc.php
13:16 2008-03-11
*/
if(!defined('_RSWEB_PUBFIL')) {require_once './../lib/404.php';}

if (isset($_SESSION[_RSWEB_PRE.'token']) && (isset($_POST[_RSWEB_PRE.'token']) && ($_POST[_RSWEB_PRE.'token'] === $_SESSION[_RSWEB_PRE.'token'] && (isset($_POST[_RSWEB_PRE.'usr_login']) && (isset($_POST[_RSWEB_PRE.'usr_pass'])))))) {
//if (isset($_POST[_RSWEB_PRE.'usr_login']) && isset($_POST[_RSWEB_PRE.'usr_pass'])) {
  if (rsweb_filter_input($_POST[_RSWEB_PRE.'usr_login']) != '' && rsweb_filter_input($_POST[_RSWEB_PRE.'usr_pass']) != '') {
  $rsweb_usr_login = rsweb_filter_input($_POST[_RSWEB_PRE.'usr_login']);
  $rsweb_usr_pass  = rsweb_filter_input($_POST[_RSWEB_PRE.'usr_pass']);
  $rsweb_usr_verif = strtoupper(rsweb_filter_input($_POST[_RSWEB_PRE.'usr_verif']));
  $verif2 = str_split($_SESSION[_RSWEB_PRE.'token'], 5);
  $verif2 = strtoupper(strrev($verif2['0']));
  if($rsweb_usr_verif == $verif2) {
    $rsweb_query_verif = "SELECT * FROM `"._RSWEB_PRE."set_usr` WHERE `usr_login` = '".$rsweb_usr_login."' AND `usr_pass` = '".$rsweb_usr_pass."' LIMIT 1";
    $rst_verif   = mysql_query($rsweb_query_verif) or require _RSWEB_LIB_DIR . 'myerr.php';
  
    if (mysql_num_rows($rst_verif) == "1") {
      $row_rst_verif = mysql_fetch_assoc($rst_verif);
    
      if ($row_rst_verif['usr_status'] == '0') {
        $rsweb_login_status = 4;
      } // suspended account
    
      else {
        // log in user
        session_regenerate_id(TRUE);
        //setcookie(session_name(), '', time() + 3600 * 24 * 30, "/", "", 0);
        $_SESSION[_RSWEB_PRE.'usr_logged_in']  = true;
        // user data
        $_SESSION[_RSWEB_PRE.'token'] = md5(uniqid(rand(), TRUE));
        $_SESSION[_RSWEB_PRE.'visit_date'] = date("Y-m-d");
        $_SESSION[_RSWEB_PRE.'visit_time'] = date("H:i:s");
      
        $_SESSION[_RSWEB_PRE.'usr_id']    = $row_rst_verif['usr_id'];
        $_SESSION[_RSWEB_PRE.'usr_level'] = $row_rst_verif['usr_level'];
        $_SESSION[_RSWEB_PRE.'usr_alias'] = $row_rst_verif['usr_nick_name'];
        $_SESSION[_RSWEB_PRE.'usr_name']  = $row_rst_verif['usr_first_name'] . '&#160;' . $row_rst_verif['usr_last_name'];
        // language
        $_SESSION[_RSWEB_PRE.'usr_lang_index'] = $row_rst_verif['usr_lang_index'];
        // theme
        $_SESSION[_RSWEB_PRE.'usr_theme_dir'] = $row_rst_verif['usr_theme'];
        // get data about previous logins
        $query_last_login_id = "SELECT MAX(login_id) FROM `"._RSWEB_PRE."var_logins` WHERE `usr_id` = '".$_SESSION[_RSWEB_PRE.'usr_id']."' LIMIT 1";
        $rst_last_login_id   = mysql_query($query_last_login_id) or require _RSWEB_LIB_DIR . 'myerr.php';
        $rsweb_last_login_id  = mysql_result($rst_last_login_id, 0);
        // get previous login data
        $query_last_login = "SELECT `login_date`, `login_time` FROM `"._RSWEB_PRE."var_logins` WHERE `login_id` = '".$rsweb_last_login_id."' LIMIT 1";
        $rst_last_login   = mysql_query($query_last_login) or require _RSWEB_LIB_DIR . 'myerr.php';
        if (mysql_num_rows($rst_last_login) == "1") {
          $row_last_login                            = mysql_fetch_assoc($rst_last_login);
          $_SESSION[_RSWEB_PRE.'usr_last_login_date'] = $row_last_login['login_date'];
          $_SESSION[_RSWEB_PRE.'usr_last_login_time'] = $row_last_login['login_time'];
        } // not first login
        else {
          $_SESSION[_RSWEB_PRE.'usr_last_login_date'] = '0000-00-00';
          $_SESSION[_RSWEB_PRE.'usr_last_login_time'] = '00:00:00';
        } // first login
        // count logins
        $query_total_logins            = "SELECT COUNT(`login_id`) FROM `"._RSWEB_PRE."var_logins` WHERE `usr_id` = '".$_SESSION[_RSWEB_PRE.'usr_id']."'";
        $rst_total_logins              = mysql_query($query_total_logins) or require _RSWEB_LIB_DIR . 'myerr.php';
        $_SESSION[_RSWEB_PRE.'usr_total_logins'] = (mysql_result($rst_total_logins, 0)) + 1;
        //insert new login info
        $query_lock = "LOCK TABLES `"._RSWEB_PRE."var_logins` WRITE";
        mysql_query($query_lock) or require _RSWEB_LIB_DIR . 'myerr.php';
      
        $query_rstId  = "SELECT MAX(login_id) FROM `"._RSWEB_PRE."var_logins`";
        $rstId        = mysql_query($query_rstId) or require _RSWEB_LIB_DIR . 'myerr.php';
        $new_login_id = (mysql_result($rstId, 0)) + 1;
      
        $query_new_login = "INSERT INTO `"._RSWEB_PRE."var_logins` (login_id, usr_id, login_date, login_time) VALUES ('".$new_login_id."', '".$_SESSION[_RSWEB_PRE.'usr_id']."', '".$_SESSION[_RSWEB_PRE.'visit_date']."', '".$_SESSION[_RSWEB_PRE.'visit_time']."')";
        mysql_query($query_new_login) or require _RSWEB_LIB_DIR . 'myerr.php';
      
        $query_unlock = "UNLOCK TABLES";
        mysql_query($query_unlock) or require _RSWEB_LIB_DIR . 'myerr.php';
      
        //set login status
        $rsweb_login_status = 5;
        //$redirect = _RSWEB_SITE_URL . "index.php";
        //header("Location: $redirect");
      } // legitimate user
    } // if match
    else { 
      session_regenerate_id(TRUE);
      $_SESSION[_RSWEB_PRE.'token'] = md5(uniqid(rand(), TRUE));
      $rsweb_login_status = 3;
    } // if no match
  } // xxx
  else {
    session_regenerate_id(TRUE);
    $_SESSION[_RSWEB_PRE.'token'] = md5(uniqid(rand(), TRUE));
    $rsweb_login_status = 7;
  }
  } // if usr & pass not empty
  else {
    session_regenerate_id(TRUE);
    $_SESSION[_RSWEB_PRE.'token'] = md5(uniqid(rand(), TRUE));
    $rsweb_login_status = 2;
  } // usr & pass empty
} // if post login
else {
  $rsweb_login_status = 1;
} //if login NOT submitted
?>