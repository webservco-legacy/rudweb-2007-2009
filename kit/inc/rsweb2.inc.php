<?php
/*
./inc/rsweb2.inc.php
16:50 2007-12-15
*/
if(!defined('_RSWEB_PUBFIL')) {require_once './../lib/404.php';}

// MENU & PAGE STUFF
$rsweb_cnt_type           = "0";
$rsweb_this_content       = 'index';
$rsweb_this_content_level = getCntLev($rsweb_this_content);
$rsweb_mnu_id             = getCntMnuId('index');
$rsweb_stats_page         = 'index';
$rsweb_req_page           = 'index';
$rsweb_page_title         = _RSWEB_WSTT . " - " . "Index";
$rsweb_page_description   = _RSWEB_WSDS;
$rsweb_page_keywords      = _RSWEB_WSKW;

// content
if (isset($_GET['content'])) {
  if(rsweb_filter_input($_GET['content']) == 'default') {  
    $rsweb_cnt_type = "4";
    $rsweb_this_content       = rsweb_filter_input($_GET['content']);
    $rsweb_this_content_level = getCntLev('index');
    $rsweb_mnu_id             = getCntMnuId('index');
    $rsweb_stats_page         = 'index';
    $rsweb_req_page           = 'index';
    if (is_file(_RSWEB_RSWEB_DIR . $rsweb_this_content . ".inc.php")) {
      $rsweb_this_content_level = getCntLev($rsweb_this_content);
      $rsweb_mnu_id             = getCntMnuId($rsweb_this_content);
      $rsweb_stats_page         = "pg-" . $rsweb_this_content;
      $rsweb_req_page           = $rsweb_this_content;
      $rsweb_page_title         = _RSWEB_WSTT . " - " . $rsweb_this_content;
      $rsweb_page_description   = _RSWEB_WSDS;
      $rsweb_page_keywords      = _RSWEB_WSKW;
    }
  }
  else {
    $rsweb_cnt_type = "1";
    $rsweb_this_content       = rsweb_filter_input($_GET['content']);
    $rsweb_this_content_level = getCntLev('index');
    $rsweb_mnu_id             = getCntMnuId('index');
    $rsweb_stats_page         = 'index';
    $rsweb_req_page           = 'index';
    $cnt_cnt_query = "SELECT * FROM `"._RSWEB_PRE."ws_cnt` WHERE `cnt_alias` = '".$rsweb_this_content."' AND (`cnt_ln` = '".$_SESSION[_RSWEB_PRE.'usr_lang_index']."' AND `cnt_lvl` <= '".$_SESSION[_RSWEB_PRE.'usr_level']."') LIMIT 1";
    $rst_cnt_cnt   = mysql_query($cnt_cnt_query) or require _RSWEB_LIB_DIR . 'myerr.php';
    $total_cnt_cnt = mysql_num_rows($rst_cnt_cnt);
    if ($total_cnt_cnt == "1") {
      $rsweb_this_content_level = getCntLev($rsweb_this_content);
      $rsweb_mnu_id             = getCntMnuId($rsweb_this_content);
      $rsweb_stats_page         = "ct-" . $rsweb_this_content;
      $rsweb_req_page           = $rsweb_this_content;
      $row_rst_cnt_cnt         = mysql_fetch_assoc($rst_cnt_cnt);
      $rsweb_page_title         = _RSWEB_WSTT . " - " . $row_rst_cnt_cnt['cnt_tt'];
      if (trim($row_rst_cnt_cnt['cnt_dsc']) === "") {$rsweb_page_description   = _RSWEB_WSDS;} else {$rsweb_page_description   = $row_rst_cnt_cnt['cnt_dsc'];}
      if (trim($row_rst_cnt_cnt['cnt_kw']) === "") {$rsweb_page_keywords      = _RSWEB_WSKW;} else {$rsweb_page_keywords      = $row_rst_cnt_cnt['cnt_kw'];}
    }
  }
}
// page
else if (isset($_GET['page'])) {
  $rsweb_cnt_type = "3";
  $rsweb_this_content       = rsweb_filter_input($_GET['page']);
  $rsweb_this_content_level = getCntLev('index');
  $rsweb_mnu_id             = getCntMnuId('index');
  $rsweb_stats_page         = 'index';
  $rsweb_req_page           = 'index';
  if (is_file(_RSWEB_PG_DIR . $rsweb_this_content . ".inc.php")) {
    $rsweb_this_content_level = getCntLev($rsweb_this_content);
    $rsweb_mnu_id             = getCntMnuId($rsweb_this_content);
    $rsweb_stats_page         = "pg-" . $rsweb_this_content;
    $rsweb_req_page           = $rsweb_this_content;
    $rsweb_page_title         = _RSWEB_WSTT . " - " . $rsweb_this_content;
    $rsweb_page_description   = _RSWEB_WSDS;
    $rsweb_page_keywords      = _RSWEB_WSKW;
  }
}
// rsweb
else if (isset($_GET['rsweb'])) {
  $rsweb_cnt_type = "4";
  $rsweb_this_content       = rsweb_filter_input($_GET['rsweb']);
  $rsweb_this_content_level = getCntLev('index');
  $rsweb_mnu_id             = getCntMnuId('index');
  $rsweb_stats_page         = 'index';
  $rsweb_req_page           = 'index';
  if (is_file(_RSWEB_RSWEB_DIR . $rsweb_this_content . ".inc.php")) {
    $rsweb_this_content_level = getCntLev($rsweb_this_content);
    $rsweb_mnu_id             = getCntMnuId($rsweb_this_content);
    $rsweb_stats_page         = "pg-" . $rsweb_this_content;
    $rsweb_req_page           = $rsweb_this_content;
    $rsweb_page_title         = _RSWEB_WSTT . " - " . $rsweb_this_content;
    $rsweb_page_description   = _RSWEB_WSDS;
    $rsweb_page_keywords      = _RSWEB_WSKW;
  }
}
else { // SHOW DEFAULT PAGE _RSWEB_CFG_CNT
  if (_RSWEB_CFG_CNT_SHW === "1") {
    if($_SESSION[_RSWEB_PRE.'usr_lang_index'] == "ro") {$default_content = _RSWEB_CFG_CNT_RO;}
    else if($_SESSION[_RSWEB_PRE.'usr_lang_index'] == "en") {$default_content = _RSWEB_CFG_CNT_EN;}
    else if($_SESSION[_RSWEB_PRE.'usr_lang_index'] == "it") {$default_content = _RSWEB_CFG_CNT_IT;}
    $redirect = _RSWEB_SITE_URL . 'index.php/content/' . $default_content;
    header("Location: $redirect");
  }
  else { // SHOW INTRO
    $redirect = _RSWEB_SITE_URL . 'intro.php';
    header("Location: $redirect");
  }
}
?>