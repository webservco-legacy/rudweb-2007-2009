<?php
/*
./inc/admin.inc.php
16:23 2008-04-21
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once './../lib/404.php';}

//if(isset($_POST['cntaddcnt']) || (isset($_POST['cntdelcnt']) || (isset($_POST['cntmodcnt']) || (isset($_POST['cntaddlnk']) || isset($_POST['cntaddpg']))))) {
$allowed_file_types = array("image/jpeg", "image/pjpeg", "image/png", "image/x-png", "image/gif");
if(isset($_POST['mnu_tt'])) { // add, delete, modify content
  // menu
  $mnu_id        = "";
  //$mnu_ln        = "";
  $mnu_cat       = "";
  $mnu_lev       = "";
  $mnu_par       = "";
  $mnu_ord       = "";
  $mnu_tt        = "";
  $mnu_typ       = "";
  $mnu_cnt_alias = "";
  $mnu_trg       = "";
  //$mnu_crd       = "";
  //$mnu_crt       = "";
  //$mnu_cru       = "";
  //$mnu_mdd       = "";
  //$mnu_mdt       = "";
  //$mnu_mdu       = "";
  //$mnu_dis       = "";
  //$mnu_lvl       = "";

  // content
  $cnt_id        = "";
  //$cnt_ln        = "";
  $cnt_alias     = "";
  $cnt_tt        = "";
  $cnt_kw        = "";
  $cnt_dsc       = "";
  $cnt_stt       = "";
  $cnt_txt       = "";
  //$cnt_crd       = "";
  //$cnt_crt       = "";
  //$cnt_cru       = "";
  //$cnt_mdd       = "";
  //$cnt_mdt       = "";
  //$cnt_mdu       = "";
  //$cnt_dis       = "";
  //$cnt_lvl       = "";
  
  $lnk_id        = "";
  //$lnk_ln        = "";
  $lnk_alias     = "";
  $lnk_cat       = "";
  $lnk_tt        = "";
  $lnk_url       = "";
  $lnk_trg       = "";
  $lnk_dsc       = "";
  //$lnk_crd       = "";
  //$lnk_crt       = "";
  //$lnk_cru       = "";
  //$lnk_mdd       = "";
  //$lnk_mdt       = "";
  //$lnk_mdu       = "";
  //$lnk_dis       = "";
  //$lnk_lvl       = "";
  
  $page_tt = "";
  
  if(isset($_POST['mnu_id'])) {$mnu_id    = rudweb_filter_input($_POST['mnu_id']); /* mod del */}

  if(isset($_POST['mnu_cat']))       {$mnu_cat       = rudweb_filter_input($_POST['mnu_cat']); /* add */}
  if(isset($_POST['mnu_lev']))       {$mnu_lev       = rudweb_filter_input($_POST['mnu_lev']); /* add */}
  if(isset($_POST['mnu_par']))       {$mnu_par       = rudweb_filter_input($_POST['mnu_par']); /* add */}
  if(isset($_POST['mnu_ord']))       {$mnu_ord       = rudweb_filter_input($_POST['mnu_ord']); /* mod */}
  if(isset($_POST['mnu_tt']))        {$mnu_tt        = rudweb_filter_input($_POST['mnu_tt']); /* add mod */}
  if(isset($_POST['cnt_tt']) && (isset($_POST['cntaddcnt']) || (isset($_POST['cntmodcnt']) || isset($_POST['cntdelcnt'])))) {
    $mnu_cnt_alias = rudweb_format_cnt_alias($_POST['cnt_tt']); /* add */
    $cnt_alias     = rudweb_format_cnt_alias($_POST['cnt_tt']); /* mod del */
    $cnt_tt        = rudweb_filter_input($_POST['cnt_tt']); /* mod del */
  }
  if(isset($_POST['lnk_tt']) && (isset($_POST['cntaddlnk']) || (isset($_POST['cntmodlnk']) || isset($_POST['cntdellnk'])))) {
    $mnu_cnt_alias = rudweb_format_cnt_alias($_POST['lnk_tt']); /* add */
    $lnk_alias     = rudweb_format_cnt_alias($_POST['lnk_tt']); /* mod del */
    $lnk_tt        = rudweb_filter_input($_POST['lnk_tt']); /* mod del */
  }
  if(isset($_POST['page_tt']) && (isset($_POST['cntaddpg']) || (isset($_POST['cntmodpg']) || isset($_POST['cntdelpg'])))) {
    $mnu_cnt_alias = rudweb_format_cnt_alias($_POST['page_tt']); /* add */
    //$page_alias    = rudweb_format_cnt_alias($_POST['page_tt']); /* mod del */
    $page_tt       = rudweb_filter_input($_POST['page_tt']); /* mod del */
  }
  if(isset($_POST['mnu_trg']))       {$mnu_trg       = rudweb_filter_input($_POST['mnu_trg']); /* add mod */}
  
  if(isset($_POST['cnt_id']))        {$cnt_id        = rudweb_filter_input($_POST['cnt_id']); /* mod del */}
  if(isset($_POST['cnt_kw']))        {$cnt_kw        = rudweb_filter_input($_POST['cnt_kw']); /* add */}
  if(isset($_POST['cnt_dsc']))       {$cnt_dsc       = rudweb_filter_input($_POST['cnt_dsc']); /* add */}
  if(isset($_POST['cnt_stt']))       {$cnt_stt       = rudweb_filter_input($_POST['cnt_stt']); /* add mod */}
  if(isset($_POST['cnt_txt']))       {$cnt_txt       = rudweb_filter_content($_POST['cnt_txt']); /* add mod */}

  if(isset($_POST['lnk_id']))        {$lnk_id        = rudweb_filter_input($_POST['lnk_id']); /* mod del */}
  
  if(isset($_POST['lnk_cat']))        {$lnk_cat      = rudweb_filter_input($_POST['lnk_cat']); /* add  */}
  // SECURITY ISSUE !!!
  if(isset($_POST['lnk_url']))        {$lnk_url      = rudweb_filter_input($_POST['lnk_url']); /* add mod  */}
  if(isset($_POST['lnk_trg']))        {$lnk_trg      = rudweb_filter_input($_POST['lnk_trg']); /* add mod */}
  if(isset($_POST['lnk_dsc']))        {$lnk_dsc      = rudweb_filter_input($_POST['lnk_dsc']); /* add mod */}
  // not ok, use elsewhere
  $action_date  = date("Y-m-d"); /* mod del */
  $action_time  = date("H:i:s"); /* mod del */
  
  if($mnu_tt != "" && ($cnt_tt != "" || ($lnk_tt != "" || $page_tt != ""))) {
    require_once _RUDWEB_INC_DIR . 'admcnt.inc.php';
    header("Location: $redirect");
  }
}
if (isset($_POST['ftrmod'])) { // enable, disable featured module
  
  $new_onoff = "";
  $ftr_lmt   = "";
  
  // not ok, use elsewhere
  $action_date  = date("Y-m-d"); /* mod del */
  $action_time  = date("H:i:s"); /* mod del */
  
  if(isset($_POST['ftronoff'])) {$new_onoff = rudweb_filter_input($_POST['ftronoff']);}
  if(isset($_POST['ftr_lmt']))  {$ftr_lmt = rudweb_filter_input($_POST['ftr_lmt']);}
  require_once _RUDWEB_INC_DIR . 'admftr.inc.php';
  header("Location: $redirect");
}
if (isset($_POST['cspmod'])) { // enable, disable offers module
  
  $new_onoff = "";
  $csp_lmt   = "";
  
  // not ok, use elsewhere
  $action_date  = date("Y-m-d"); /* mod del */
  $action_time  = date("H:i:s"); /* mod del */
  
  if(isset($_POST['csponoff'])) {$new_onoff = rudweb_filter_input($_POST['csponoff']);}
  if(isset($_POST['csp_lmt']))  {$csp_lmt = rudweb_filter_input($_POST['csp_lmt']);}
  require_once _RUDWEB_INC_DIR . 'admcsp.inc.php';
  header("Location: $redirect");
}
if (isset($_POST['itemadd'])) {
  $action_date  = date("Y-m-d");
  $action_time  = date("H:i:s");
}
?>