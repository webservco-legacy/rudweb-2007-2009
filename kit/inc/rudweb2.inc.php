<?php
/*
./inc/rudweb2.inc.php
16:50 2007-12-15
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once './../lib/404.php';}

// MENU & PAGE STUFF
$rudweb_cnt_type           = "0";
$rudweb_this_content       = 'index';
$rudweb_this_content_level = getCntLev($rudweb_this_content);
$rudweb_mnu_id             = getCntMnuId('index');
$rudweb_stats_page         = 'index';
$rudweb_req_page           = 'index';
$rudweb_page_title         = _RUDWEB_WSTT . " - " . "Index";
$rudweb_page_description   = _RUDWEB_WSDS;
$rudweb_page_keywords      = _RUDWEB_WSKW;

// content
if (isset($_GET['content'])) {
  if(rudweb_filter_input($_GET['content']) == 'default') {  
    $rudweb_cnt_type = "4";
    $rudweb_this_content       = rudweb_filter_input($_GET['content']);
    $rudweb_this_content_level = getCntLev('index');
    $rudweb_mnu_id             = getCntMnuId('index');
    $rudweb_stats_page         = 'index';
    $rudweb_req_page           = 'index';
    if (is_file(_RUDWEB_RUDWEB_DIR . $rudweb_this_content . ".inc.php")) {
      $rudweb_this_content_level = getCntLev($rudweb_this_content);
      $rudweb_mnu_id             = getCntMnuId($rudweb_this_content);
      $rudweb_stats_page         = "pg-" . $rudweb_this_content;
      $rudweb_req_page           = $rudweb_this_content;
      $rudweb_page_title         = _RUDWEB_WSTT . " - " . $rudweb_this_content;
      $rudweb_page_description   = _RUDWEB_WSDS;
      $rudweb_page_keywords      = _RUDWEB_WSKW;
    }
  }
  else {
    $rudweb_cnt_type = "1";
    $rudweb_this_content       = rudweb_filter_input($_GET['content']);
    $rudweb_this_content_level = getCntLev('index');
    $rudweb_mnu_id             = getCntMnuId('index');
    $rudweb_stats_page         = 'index';
    $rudweb_req_page           = 'index';
    $cnt_cnt_query = "SELECT * FROM `"._RUDWEB_PRE."ws_cnt` WHERE `cnt_alias` = '".$rudweb_this_content."' AND (`cnt_ln` = '".$_SESSION[_RUDWEB_PRE.'usr_lang_index']."' AND `cnt_lvl` <= '".$_SESSION[_RUDWEB_PRE.'usr_level']."') LIMIT 1";
    $rst_cnt_cnt   = mysql_query($cnt_cnt_query) or require _RUDWEB_LIB_DIR . 'myerr.php';
    $total_cnt_cnt = mysql_num_rows($rst_cnt_cnt);
    if ($total_cnt_cnt == "1") {
      $rudweb_this_content_level = getCntLev($rudweb_this_content);
      $rudweb_mnu_id             = getCntMnuId($rudweb_this_content);
      $rudweb_stats_page         = "ct-" . $rudweb_this_content;
      $rudweb_req_page           = $rudweb_this_content;
      $row_rst_cnt_cnt         = mysql_fetch_assoc($rst_cnt_cnt);
      $rudweb_page_title         = _RUDWEB_WSTT . " - " . $row_rst_cnt_cnt['cnt_tt'];
      if (trim($row_rst_cnt_cnt['cnt_dsc']) === "") {$rudweb_page_description   = _RUDWEB_WSDS;} else {$rudweb_page_description   = $row_rst_cnt_cnt['cnt_dsc'];}
      if (trim($row_rst_cnt_cnt['cnt_kw']) === "") {$rudweb_page_keywords      = _RUDWEB_WSKW;} else {$rudweb_page_keywords      = $row_rst_cnt_cnt['cnt_kw'];}
    }
  }
}
// page
else if (isset($_GET['page'])) {
  $rudweb_cnt_type = "3";
  $rudweb_this_content       = rudweb_filter_input($_GET['page']);
  $rudweb_this_content_level = getCntLev('index');
  $rudweb_mnu_id             = getCntMnuId('index');
  $rudweb_stats_page         = 'index';
  $rudweb_req_page           = 'index';
  if (is_file(_RUDWEB_PG_DIR . $rudweb_this_content . ".inc.php")) {
    $rudweb_this_content_level = getCntLev($rudweb_this_content);
    $rudweb_mnu_id             = getCntMnuId($rudweb_this_content);
    $rudweb_stats_page         = "pg-" . $rudweb_this_content;
    $rudweb_req_page           = $rudweb_this_content;
    $rudweb_page_title         = _RUDWEB_WSTT . " - " . $rudweb_this_content;
    $rudweb_page_description   = _RUDWEB_WSDS;
    $rudweb_page_keywords      = _RUDWEB_WSKW;
  }
}
// rudweb
else if (isset($_GET['rudweb'])) {
  $rudweb_cnt_type = "4";
  $rudweb_this_content       = rudweb_filter_input($_GET['rudweb']);
  $rudweb_this_content_level = getCntLev('index');
  $rudweb_mnu_id             = getCntMnuId('index');
  $rudweb_stats_page         = 'index';
  $rudweb_req_page           = 'index';
  if (is_file(_RUDWEB_RUDWEB_DIR . $rudweb_this_content . ".inc.php")) {
    $rudweb_this_content_level = getCntLev($rudweb_this_content);
    $rudweb_mnu_id             = getCntMnuId($rudweb_this_content);
    $rudweb_stats_page         = "pg-" . $rudweb_this_content;
    $rudweb_req_page           = $rudweb_this_content;
    $rudweb_page_title         = _RUDWEB_WSTT . " - " . $rudweb_this_content;
    $rudweb_page_description   = _RUDWEB_WSDS;
    $rudweb_page_keywords      = _RUDWEB_WSKW;
  }
}
else { // SHOW DEFAULT PAGE _RUDWEB_CFG_CNT
  if (_RUDWEB_CFG_CNT_SHW === "1") {
    if($_SESSION[_RUDWEB_PRE.'usr_lang_index'] == "ro") {$default_content = _RUDWEB_CFG_CNT_RO;}
    else if($_SESSION[_RUDWEB_PRE.'usr_lang_index'] == "en") {$default_content = _RUDWEB_CFG_CNT_EN;}
    else if($_SESSION[_RUDWEB_PRE.'usr_lang_index'] == "it") {$default_content = _RUDWEB_CFG_CNT_IT;}
    $redirect = _RUDWEB_SITE_URL . 'index.php/content/' . $default_content;
    header("Location: $redirect");
  }
  else { // SHOW INTRO
    $redirect = _RUDWEB_SITE_URL . 'intro.php';
    header("Location: $redirect");
  }
}
?>