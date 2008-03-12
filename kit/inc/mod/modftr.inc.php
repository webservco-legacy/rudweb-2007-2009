<?php
/*
./inc/modftr.inc.php
12:30 2008-03-12
*/
if(!defined('_UBWS_PUBFIL')) {require_once './../lib/404.php';}

function showFeatured() {
  global $ubws_ln;
  global $ubws_theme;
  // FEATURED MODULE
  if (_UBWS_CFG_FTR_ON === "1") {
    echo $ubws_theme['ftr']['hdr'];
    $ftr_today = date("Y-m-d");
    $query_ftr = "SELECT * FROM "._UBWS_PRE."ws_ftr WHERE ftr_ln = '".$_SESSION[_UBWS_PRE.'usr_lang_index']."' AND (ftr_dis = '0' AND ('".$ftr_today."' BETWEEN ftr_sdate AND ftr_edate)) ORDER BY ftr_ord ASC LIMIT "._UBWS_CFG_FTR_LMT."";
    $rst_query_ftr = mysql_query($query_ftr) or require _UBWS_LIB_DIR . 'myerr.php';
    $total_ftr = mysql_num_rows($rst_query_ftr);
    if ($total_ftr != '0') {
      for ($ftri=1; $ftri<=$total_ftr; $ftri++) {
      $row_rst_ftr[$ftri] = mysql_fetch_assoc($rst_query_ftr);
      
      echo $ubws_theme['ftr']['fpre'];

      $query_ftr_cnt[$ftri] = "SELECT * FROM `"._UBWS_PRE."ws_cnt` WHERE `cnt_id` = '".$row_rst_ftr[$ftri]['cnt_id']."' AND (`cnt_dis` = '0' AND `cnt_ln` = '".$_SESSION[_UBWS_PRE.'usr_lang_index']."') LIMIT 1";
      $rst_query_ftr_cnt[$ftri] = mysql_query($query_ftr_cnt[$ftri]) or require _UBWS_LIB_DIR . 'myerr.php';
      if (mysql_num_rows($rst_query_ftr_cnt[$ftri]) != '0') {
        $row_rst_ftr_cnt[$ftri] = mysql_fetch_assoc($rst_query_ftr_cnt[$ftri]);
        
        if (strlen($row_rst_ftr_cnt[$ftri]['cnt_tt']) <= $ubws_theme['ftr']['chardesc']) {$short_title = $row_rst_ftr_cnt[$ftri]['cnt_tt'];}
        else {$short_title = str_split($row_rst_ftr_cnt[$ftri]['cnt_tt'], $ubws_theme['ftr']['chartt']); $short_title = $short_title['0'] . ' ...';}
      
        echo $ubws_theme['ftr']['tt']['pre'];
        restrictedLocalLink("ftrlink", $short_title, "index.php/content/" . $row_rst_ftr_cnt[$ftri]['cnt_alias'], $_SESSION[_UBWS_PRE.'usr_level'], $row_rst_ftr[$ftri]['ftr_lvl'], $short_title, $ubws_ln['WinStatOut'], "_self");
        echo $ubws_theme['ftr']['tt']['suf'];
        
        echo $ubws_theme['ftr']['pic']['pre'];
        $query_ftr_pic[$ftri] = "SELECT * FROM `"._UBWS_PRE."ws_pic` WHERE `pic_id` = '".$row_rst_ftr[$ftri]['pic_id']."' AND `pic_dis` = '0' LIMIT 1";
        $rst_query_ftr_pic[$ftri] = mysql_query($query_ftr_pic[$ftri]) or require _UBWS_LIB_DIR . 'myerr.php';
        if (mysql_num_rows($rst_query_ftr_pic[$ftri]) != '0') {
          $row_rst_ftr_pic[$ftri] = mysql_fetch_assoc($rst_query_ftr_pic[$ftri]);
          $ftr_pic_file[$ftri]   = _UBWS_PIC_DIR . $row_rst_ftr_pic[$ftri]['pic_fn'];
          $ftr_pic_url[$ftri]    = _UBWS_PIC_URL . $row_rst_ftr_pic[$ftri]['pic_fn'];
          $ftr_pic_tt[$ftri]     = $row_rst_ftr_pic[$ftri]['pic_tt'];
          $ftr_pic_imgsrc[$ftri] = "<IMG SRC=\""._UBWS_LIB_URL ."pic.php?imgfile=" . $ftr_pic_file[$ftri] . "&amp;max_size=".$ubws_theme['ftr']['picsize']."\" ALT=\"".$ftr_pic_tt[$ftri]."\">";
          restrictedLocalLink("ftrlink", $ftr_pic_imgsrc[$ftri], "index.php/content/" . $row_rst_ftr_cnt[$ftri]['cnt_alias'], $_SESSION[_UBWS_PRE.'usr_level'], $row_rst_ftr[$ftri]['ftr_lvl'], $short_title, $ubws_ln['WinStatOut'], "_self");
        }
        echo $ubws_theme['ftr']['pic']['suf'];
        
        if (trim($row_rst_ftr[$ftri]['ftr_sup']) == "") {$short_desc = $ubws_ln['featured']['desc'];}
        else {
          if (strlen($row_rst_ftr[$ftri]['ftr_sup']) <= $ubws_theme['ftr']['chardesc']) {$short_desc = $row_rst_ftr[$ftri]['ftr_sup'];}
          else {$short_desc = str_split($row_rst_ftr[$ftri]['ftr_sup'], $ubws_theme['ftr']['chardesc']); $short_desc = $short_desc['0'] . ' ...';}
        }

        echo $ubws_theme['ftr']['desc']['pre'];
        restrictedLocalLink("ftrlink", $short_desc, "index.php/content/" . $row_rst_ftr_cnt[$ftri]['cnt_alias'], $_SESSION[_UBWS_PRE.'usr_level'], $row_rst_ftr[$ftri]['ftr_lvl'], $short_title, $ubws_ln['WinStatOut'], "_self");
        echo $ubws_theme['ftr']['desc']['suf'];
      }
  
      echo $ubws_theme['ftr']['fsuf'];

      if ($ftri < $total_ftr) {echo $ubws_theme['ftr']['sep'];}
      }
    }        
    echo $ubws_theme['ftr']['ftr'];
  }
}
?>