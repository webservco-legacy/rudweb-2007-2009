<?php
/*
./inc/ubws2.inc.php
16:50 2007-12-15
*/
if(!defined('_UBWS_PUBFIL')) {require_once './../lib/404.php';}

// MENU & PAGE STUFF
$ubws_cnt_type           = "0";
$ubws_this_content       = 'index';
$ubws_this_content_level = getCntLev($ubws_this_content);
$ubws_mnu_id             = getCntMnuId('index');
$ubws_stats_page         = 'index';
$ubws_req_page           = 'index';
$ubws_page_title         = _UBWS_WSTT . " - " . "Index";
$ubws_page_description   = _UBWS_WSDS;
$ubws_page_keywords      = _UBWS_WSKW;

// content
if (isset($_GET['content'])) {
  if(ubws_filter_input($_GET['content']) == 'default') {  
    $ubws_cnt_type = "4";
    $ubws_this_content       = ubws_filter_input($_GET['content']);
    $ubws_this_content_level = getCntLev('index');
    $ubws_mnu_id             = getCntMnuId('index');
    $ubws_stats_page         = 'index';
    $ubws_req_page           = 'index';
    if (is_file(_UBWS_UBWS_DIR . $ubws_this_content . ".inc.php")) {
      $ubws_this_content_level = getCntLev($ubws_this_content);
      $ubws_mnu_id             = getCntMnuId($ubws_this_content);
      $ubws_stats_page         = "pg-" . $ubws_this_content;
      $ubws_req_page           = $ubws_this_content;
      $ubws_page_title         = _UBWS_WSTT . " - " . $ubws_this_content;
      $ubws_page_description   = _UBWS_WSDS;
      $ubws_page_keywords      = _UBWS_WSKW;
    }
  }
  else {
    $ubws_cnt_type = "1";
    $ubws_this_content       = ubws_filter_input($_GET['content']);
    $ubws_this_content_level = getCntLev('index');
    $ubws_mnu_id             = getCntMnuId('index');
    $ubws_stats_page         = 'index';
    $ubws_req_page           = 'index';
    $cnt_cnt_query = "SELECT * FROM `"._UBWS_PRE."ws_cnt` WHERE `cnt_alias` = '".$ubws_this_content."' AND (`cnt_ln` = '".$_SESSION[_UBWS_PRE.'usr_lang_index']."' AND `cnt_lvl` <= '".$_SESSION[_UBWS_PRE.'usr_level']."') LIMIT 1";
    $rst_cnt_cnt   = mysql_query($cnt_cnt_query) or require _UBWS_LIB_DIR . 'myerr.php';
    $total_cnt_cnt = mysql_num_rows($rst_cnt_cnt);
    if ($total_cnt_cnt == "1") {
      $ubws_this_content_level = getCntLev($ubws_this_content);
      $ubws_mnu_id             = getCntMnuId($ubws_this_content);
      $ubws_stats_page         = "ct-" . $ubws_this_content;
      $ubws_req_page           = $ubws_this_content;
      $row_rst_cnt_cnt         = mysql_fetch_assoc($rst_cnt_cnt);
      $ubws_page_title         = _UBWS_WSTT . " - " . $row_rst_cnt_cnt['cnt_tt'];
      if (trim($row_rst_cnt_cnt['cnt_dsc']) === "") {$ubws_page_description   = _UBWS_WSDS;} else {$ubws_page_description   = $row_rst_cnt_cnt['cnt_dsc'];}
      if (trim($row_rst_cnt_cnt['cnt_kw']) === "") {$ubws_page_keywords      = _UBWS_WSKW;} else {$ubws_page_keywords      = $row_rst_cnt_cnt['cnt_kw'];}
    }
  }
}
// page
else if (isset($_GET['page'])) {
  $ubws_cnt_type = "3";
  $ubws_this_content       = ubws_filter_input($_GET['page']);
  $ubws_this_content_level = getCntLev('index');
  $ubws_mnu_id             = getCntMnuId('index');
  $ubws_stats_page         = 'index';
  $ubws_req_page           = 'index';
  if (is_file(_UBWS_PG_DIR . $ubws_this_content . ".inc.php")) {
    $ubws_this_content_level = getCntLev($ubws_this_content);
    $ubws_mnu_id             = getCntMnuId($ubws_this_content);
    $ubws_stats_page         = "pg-" . $ubws_this_content;
    $ubws_req_page           = $ubws_this_content;
    $ubws_page_title         = _UBWS_WSTT . " - " . $ubws_this_content;
    $ubws_page_description   = _UBWS_WSDS;
    $ubws_page_keywords      = _UBWS_WSKW;
  }
}
// ubws
else if (isset($_GET['ubws'])) {
  $ubws_cnt_type = "4";
  $ubws_this_content       = ubws_filter_input($_GET['ubws']);
  $ubws_this_content_level = getCntLev('index');
  $ubws_mnu_id             = getCntMnuId('index');
  $ubws_stats_page         = 'index';
  $ubws_req_page           = 'index';
  if (is_file(_UBWS_UBWS_DIR . $ubws_this_content . ".inc.php")) {
    $ubws_this_content_level = getCntLev($ubws_this_content);
    $ubws_mnu_id             = getCntMnuId($ubws_this_content);
    $ubws_stats_page         = "pg-" . $ubws_this_content;
    $ubws_req_page           = $ubws_this_content;
    $ubws_page_title         = _UBWS_WSTT . " - " . $ubws_this_content;
    $ubws_page_description   = _UBWS_WSDS;
    $ubws_page_keywords      = _UBWS_WSKW;
  }
}
else { // SHOW DEFAULT PAGE _UBWS_CFG_CNT
  if (_UBWS_CFG_CNT_SHW === "1") {
    if($_SESSION[_UBWS_PRE.'usr_lang_index'] == "ro") {$default_content = _UBWS_CFG_CNT_RO;}
    else if($_SESSION[_UBWS_PRE.'usr_lang_index'] == "en") {$default_content = _UBWS_CFG_CNT_EN;}
    else if($_SESSION[_UBWS_PRE.'usr_lang_index'] == "it") {$default_content = _UBWS_CFG_CNT_IT;}
    $redirect = _UBWS_SITE_URL . 'index.php/content/' . $default_content;
    header("Location: $redirect");
  }
  else { // SHOW INTRO
    $redirect = _UBWS_SITE_URL . 'intro.php';
    header("Location: $redirect");
  }
}
?>