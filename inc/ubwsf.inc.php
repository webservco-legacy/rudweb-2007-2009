<?php
/*
ubwsf.inc.php
17:03 24.10.2007
*/
if(!defined('_UBWS_PUBFIL')) {require_once './../lib/404.php';}

/* ********** ********** ********** GENERATE HTML HEADER CONTENT ********** ********** ********** */
function genHtmlHeader() {
  global $ubws_page_title;
  global $ubws_page_description;
  global $ubws_page_keywords;
  echo "\n<META HTTP-EQUIV=\"Content-Type\" CONTENT=\"text/html; charset=" . $_SESSION['ubws_usr_lang_charset'] . "\">";
  echo "\n<LINK REL=\"icon\" TYPE=\"image/ico\" HREF=\"" . _UBWS_SITE_URL . "favicon.ico\">";
  echo "\n<LINK REL=\"shortcut icon\" TYPE=\"image/ico\" HREF=\"" . _UBWS_SITE_URL . "favicon.ico\">";
  echo "\n<TITLE>" . $ubws_page_title . "</TITLE>";
  echo "\n<META NAME=\"title\" CONTENT=\"" . $ubws_page_title . "\">";
  echo "\n<META NAME=\"subject\" CONTENT=\"" . $ubws_page_title . "\">";
  echo "\n<META NAME=\"description\" CONTENT=\"" . $ubws_page_description . "\">";
  echo "\n<META NAME=\"keywords\" CONTENT=\"" . $ubws_page_keywords . "\">";
  echo "\n<META NAME=\"copyright\" CONTENT=\"" . _UBWS_SITE_COPY . "\">";
  echo "\n<META NAME=\"publisher\" CONTENT=\"" . _UBWS_SITE_PUBL . "\">";
  echo "\n<META NAME=\"author\" CONTENT=\"" . _UBWS_SITE_AUTH . "\">";
  echo "\n<META NAME=\"designer\" CONTENT=\"" . _UBWS_SITE_DESIG . "\">";
  echo "\n<META NAME=\"rating\" CONTENT=\"" . _UBWS_SITE_RATNG . "\">";
  echo "\n<META NAME=\"distribution\" CONTENT=\"" . _UBWS_SITE_DISTR . "\">";
  echo "\n<META NAME=\"robots\" CONTENT=\"" . _UBWS_SITE_ROBOTS . "\">";
  // comment following 3 lines if working with php sessions
  //echo "\n<META NAME=\"pragma\" CONTENT=\"" . _UBWS_SITE_PRAG . "\">";
  //echo "\n<META NAME=\"expires\" CONTENT=\"" . _UBWS_SITE_EXP . "\">";
  //echo "\n<META NAME=\"cache-control\" CONTENT=\"" . _UBWS_SITE_CACHE . "\">";
  echo "\n<META HTTP-EQUIV=\"Content-Style-Type\" CONTENT=\"text/css\">";
}
/* ********** ********** ********** //GENERATE HTML HEADER CONTENT ********** ********** ********** */
/* ********** ********** ********** FILTER INPUT ********** ********** ********** */
function ubws_filter_input($string) {
  // strip whitespaces
  $parsed_string = trim($string);
  // convert special chars
  $parsed_string = htmlentities($parsed_string, ENT_NOQUOTES, $_SESSION['ubws_usr_lang_charset']);
  $parsed_string = eregi_replace('&amp;','&',$parsed_string);
  $parsed_string = eregi_replace('&copy;','&#169;',$parsed_string);
  $parsed_string = eregi_replace('&deg;','&#176;',$parsed_string);
  $parsed_string = ereg_replace('&acirc;','&#226;',$parsed_string);
  $parsed_string = ereg_replace('&Acirc;','&#194;',$parsed_string);
  $parsed_string = ereg_replace('&icirc;','&#238;',$parsed_string);
  $parsed_string = ereg_replace('&Icirc;','&#206;',$parsed_string);
  // block tags
  $parsed_string = eregi_replace('&lt;','&#60;',$parsed_string);
  $parsed_string = eregi_replace('&gt;','&#62;',$parsed_string);
  // convert problem chars
  $parsed_string = eregi_replace('`','&#96;',$parsed_string);
  $parsed_string = eregi_replace("'",'&#39;',$parsed_string);
  $parsed_string = eregi_replace('"','&#34;',$parsed_string);
  //$parsed_string = eregi_replace('/','&#47;',$parsed_string);  /* raw_date bug */
  // word boundary
  $parsed_string = eregi_replace('\\\b','&#92;b',$parsed_string);
  //newline
  $parsed_string = eregi_replace('\\\n','&#92;n',$parsed_string);
  // carriage return
  $parsed_string = eregi_replace('\\\r','&#92;r',$parsed_string);
  // tab
  $parsed_string = eregi_replace('\\\t','&#92;t',$parsed_string);
  return $parsed_string;
}
/* ********** ********** ********** //FILTER INPUT ********** ********** ********** */
/* ********** ********** ********** PAGE PARSE TIME ********** ********** ********** */
/*
originally by ReDuX (http://www.daniweb.com/code/snippet70.html)
*/
// timer start function
function startTimer() {
  global $starttime;
  $mtime = microtime();
  $mtime = explode(' ', $mtime);
  $mtime = $mtime[1] + $mtime[0];
  $starttime = $mtime;
}
// timer end function
function endTimer() {
  global $starttime;
  $mtime = microtime();
  $mtime = explode(' ', $mtime);
  $mtime = $mtime[1] + $mtime[0];
  $endtime = $mtime;
  $totaltime = round(($endtime - $starttime), 5);
  return $totaltime;
}
/* ********** ********** ********** //PAGE PARSE TIME ********** ********** ********** */
/* ********** ********** ********** SEARCH ENGINE FRIENDLY URLS ********** ********** ********** */
// SEARCH ENGINE FRIENDLY URLS
/*
inspired by code created by 
ReDuX (http://www.daniweb.com/code/snippet74.html)
and
DD32 (http://www.php.net/manual/en/language.variables.predefined.php#63312)
*/
function seo_urls() {
  if (isset($_SERVER['PATH_INFO'])) {
    $raw_data = explode('/', $_SERVER['PATH_INFO']);
    unset($raw_data[0]);
    for($i=1;$i<=count($raw_data);$i+=2) {
      $_GET[$raw_data[$i]] = $raw_data[$i+1];
    }
  }
}
/* ********** ********** ********** //SEARCH ENGINE FRIENDLY URLS ********** ********** ********** */
/* ********** ********** ********** //LIST SUBDIRECTORIES ********** ********** ********** */
function lsdir($dir) {
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
/* ********** ********** ********** //LIST SUBDIRECTORIES ********** ********** ********** */
/* ********** ********** ********** GENERATE RESTRICTED LINKS ********** ********** ********** */
function restrictedLocalLink($link_class, $link_title, $link_url, $current_usr_level, $required_usr_level, $mouseover_status, $mouseout_status, $link_target) {
  if ($current_usr_level >= $required_usr_level) {
    echo "<A CLASS=\"" . $link_class . "\" HREF=\"" . _UBWS_SITE_URL . $link_url . "\" onMouseOver=\"JavaScript:window.status='" . $mouseover_status . "'; return true;\" onMouseOut=\"JavaScript:window.status='" . $mouseout_status . "'; return true;\" onClick=\"JavaScript:window.status='" . $mouseout_status . "'; return true;\" TARGET=\"" . $link_target . "\">" . $link_title . "</A>";
  }
  else {
    echo "<SPAN CLASS=\"link_default\">" . $link_title . "</SPAN>";
  }
}
function restrictedExtLink($link_class, $link_title, $link_url, $current_usr_level, $required_usr_level, $mouseover_status, $mouseout_status, $link_target) {
  if ($current_usr_level >= $required_usr_level) {
    echo "<A CLASS=\"" . $link_class . "\" HREF=\"" .  _UBWS_SITE_URL . "redirect.php?url=" . urlencode($link_url) . "\" onMouseOver=\"JavaScript:window.status='" . $mouseover_status . "'; return true;\" onMouseOut=\"JavaScript:window.status='" . $mouseout_status . "'; return true;\" onClick=\"JavaScript:window.status='" . $mouseout_status . "'; return true;\" TARGET=\"" . $link_target . "\">" . $link_title . "</A>";
  }
  else {
    echo "<SPAN CLASS=\"link_default\">" . $link_title . "</SPAN>";
  }
}
function restrictedJsLink($link_class, $link_title, $link_script, $current_usr_level, $required_usr_level, $mouseover_status, $mouseout_status) {
  if ($current_usr_level >= $required_usr_level) {
    echo "<A CLASS=\"" . $link_class . "\" HREF=\"JavaScript:void(0);\" onClick=\"" . $link_script . "\" onMouseOver=\"JavaScript:window.status='" . $mouseover_status . "'; return true;\" onMouseOut=\"JavaScript:window.status='" . $mouseout_status . "'; return true;\" onClick=\"JavaScript:window.status='" . $mouseout_status . "'; return true;\">" . $link_title . "</A>";
  }
  else {
    echo "<SPAN CLASS=\"link_default\">" . $link_title . "</SPAN>";
  }
}
/* ********** ********** ********** //GENERATE RESTRICTED LINKS ********** ********** ********** */
/* ********** ********** ********** CREATE MENU ********** ********** ********** */
function createMenu($mnu_cat, $mnu_lev) {
  global $ubws_mnu_id;
  global $ubws_lnWinStatOver;
  global $ubws_lnWinStatOut;
  global $ubws_theme_mnu_hdr;
  global $ubws_theme_mnu_pre;
  global $ubws_theme_mnu_suf;
  global $ubws_theme_mnu_sep;
  global $ubws_theme_mnu_ftr;
  global $ubws_this_content_level;
  // this is where the magic gets done :-)
  if ($ubws_this_content_level === '0') {
    if ($mnu_lev == '0')      {$this_mnu_par = '0';}
    else if ($mnu_lev == '1') {$this_mnu_par = $ubws_mnu_id;}
    else if ($mnu_lev == '2') {$this_mnu_par = $ubws_mnu_id;}
    else if ($mnu_lev == '3') {$this_mnu_par = $ubws_mnu_id;}
    else if ($mnu_lev == '4') {$this_mnu_par = $ubws_mnu_id;}
  }
  else if ($ubws_this_content_level === '1') {
    if ($mnu_lev == '0')      {$this_mnu_par = '0';}
    else if ($mnu_lev == '1') {$this_mnu_par = getCntParId($ubws_mnu_id);}
    else if ($mnu_lev == '2') {$this_mnu_par = $ubws_mnu_id;}
    else if ($mnu_lev == '3') {$this_mnu_par = $ubws_mnu_id;}
    else if ($mnu_lev == '4') {$this_mnu_par = $ubws_mnu_id;}
  }
  else if ($ubws_this_content_level === '2') {
    if ($mnu_lev == '0')      {$this_mnu_par = '0';}
    else if ($mnu_lev == '1') {$this_mnu_par = getCntParId(getCntParId($ubws_mnu_id));}
    else if ($mnu_lev == '2') {$this_mnu_par = getCntParId($ubws_mnu_id);}
    else if ($mnu_lev == '3') {$this_mnu_par = $ubws_mnu_id;}
    else if ($mnu_lev == '4') {$this_mnu_par = $ubws_mnu_id;}
  }
  else if ($ubws_this_content_level === '3') {
    if ($mnu_lev == '0')      {$this_mnu_par = '0';}
    else if ($mnu_lev == '1') {$this_mnu_par = getCntParId(getCntParId(getCntParId($ubws_mnu_id)));}
    else if ($mnu_lev == '2') {$this_mnu_par = getCntParId(getCntParId($ubws_mnu_id));}
    else if ($mnu_lev == '3') {$this_mnu_par = getCntParId($ubws_mnu_id);}
    else if ($mnu_lev == '4') {$this_mnu_par = $ubws_mnu_id;}
  }
  else if ($ubws_this_content_level === '4') {
    if ($mnu_lev == '0')      {$this_mnu_par = '0';}
    else if ($mnu_lev == '1') {$this_mnu_par = getCntParId(getCntParId(getCntParId(getCntParId($ubws_mnu_id))));}
    else if ($mnu_lev == '2') {$this_mnu_par = getCntParId(getCntParId(getCntParId($ubws_mnu_id)));}
    else if ($mnu_lev == '3') {$this_mnu_par = getCntParId(getCntParId($ubws_mnu_id));}
    else if ($mnu_lev == '4') {$this_mnu_par = getCntParId($ubws_mnu_id);}
  }
  $menu_query = "SELECT * FROM `"._UBWS_PRE."ws_mnu` WHERE `mnu_dis` = '0' AND (`mnu_lvl` <= '".$_SESSION[_UBWS_PRE.'usr_level']."' AND (`mnu_ln` = '".$_SESSION[_UBWS_PRE.'usr_lang_index']."' AND (`mnu_cat` = '".$mnu_cat."' AND (`mnu_par` = '".$this_mnu_par."' AND `mnu_lev` = '".$mnu_lev."')))) ORDER BY `mnu_ord` ASC";
  $rst_menu = mysql_query($menu_query) or require _UBWS_LIB_DIR . 'myerr.php';
  $total_menu = mysql_num_rows($rst_menu);
  echo $ubws_theme_mnu_hdr[$mnu_lev];
  for ($cmni=1; $cmni<=$total_menu; $cmni++) {
    $row_rst_menu = mysql_fetch_assoc($rst_menu);
    echo $ubws_theme_mnu_pre[$mnu_lev];
    if ($row_rst_menu['mnu_id'] === $ubws_mnu_id) {
      echo "<SPAN CLASS=\"mnu_lnk_".$mnu_lev."\">" . $row_rst_menu['mnu_tt'] . "</SPAN>";
    } // current page, do not make link
    else {
      if ($row_rst_menu['mnu_typ'] === '1') {
        if ($row_rst_menu['mnu_cnt_alias'] === 'index') {
          restrictedLocalLink('mnu_'.$mnu_lev, $row_rst_menu['mnu_tt'], 'index.php', $_SESSION[_UBWS_PRE.'usr_level'], $row_rst_menu['mnu_lvl'], $ubws_lnWinStatOver, $ubws_lnWinStatOut, $row_rst_menu['mnu_trg']);
        }
        else {
          restrictedLocalLink('mnu_'.$mnu_lev, $row_rst_menu['mnu_tt'], 'index.php/content/'.$row_rst_menu['mnu_cnt_alias'], $_SESSION[_UBWS_PRE.'usr_level'], $row_rst_menu['mnu_lvl'], $ubws_lnWinStatOver, $ubws_lnWinStatOut, $row_rst_menu['mnu_trg']);
        }
      } // 1 - content link
      else if ($row_rst_menu['mnu_typ'] === '2') {
        $mnu_lnk_query = "SELECT * FROM `"._UBWS_PRE."ws_lnk` WHERE `lnk_alias` = '".$row_rst_menu['mnu_cnt_alias']."' AND (`lnk_ln` = '".$_SESSION[_UBWS_PRE.'usr_lang_index']."' AND `lnk_lvl` <= '".$_SESSION[_UBWS_PRE.'usr_level']."') LIMIT 1";
        $rst_mnu_lnk = mysql_query($mnu_lnk_query) or require _UBWS_LIB_DIR . 'myerr.php';
        $total_mnu_lnk = mysql_num_rows($rst_mnu_lnk);
        if ($total_mnu_lnk != '1') {
          $lnk_tt = 'n/a';
          $lnk_url = '';
          echo "<SPAN CLASS=\"link_default\">" . $row_rst_menu['mnu_tt'] . "</SPAN>";
        }
        else {
          $row_rst_mnu_lnk = mysql_fetch_assoc($rst_mnu_lnk);
          $lnk_tt = $row_rst_mnu_lnk['lnk_url'];
          $lnk_url = $row_rst_mnu_lnk['lnk_url'];
          restrictedExtLink('mnu_'.$mnu_lev, $row_rst_menu['mnu_tt'], $lnk_url, $_SESSION[_UBWS_PRE.'usr_level'], $row_rst_menu['mnu_lvl'], $ubws_lnWinStatOver, $ubws_lnWinStatOut, $row_rst_menu['mnu_trg']);
        }
      } // 2 - external link
      else if ($row_rst_menu['mnu_typ'] === '3') {
        restrictedLocalLink('mnu_'.$mnu_lev, $row_rst_menu['mnu_tt'], 'index.php/page/'.$row_rst_menu['mnu_cnt_alias'], $_SESSION[_UBWS_PRE.'usr_level'], $row_rst_menu['mnu_lvl'], $ubws_lnWinStatOver, $ubws_lnWinStatOut, $row_rst_menu['mnu_trg']);
      } // 3 - page link
    } // not current page, make link
    echo $ubws_theme_mnu_suf[$mnu_lev];
    if ($cmni < $total_menu) {echo $ubws_theme_mnu_sep[$mnu_lev];}
  }
  echo $ubws_theme_mnu_ftr[$mnu_lev];
}
function getCntMnuId($cnt_alias) {
  //$query = "SELECT `cnt_mn` FROM `"._UBWS_PRE."ws_cnt` WHERE `cnt_alias` = '".$cnt_alias."' LIMIT 1";
  if (isset($_GET['content']))   {$ubws_mnu_typ = '1';}
  else if (isset($_GET['page'])) {$ubws_mnu_typ = '3';}
  else {$ubws_mnu_typ = '1';} // 2 is external link, no need for that
  $query = "SELECT `mnu_id` FROM `"._UBWS_PRE."ws_mnu` WHERE `mnu_cnt_alias` = '".$cnt_alias."' AND (`mnu_ln` = '".$_SESSION[_UBWS_PRE.'usr_lang_index']."' AND `mnu_typ` = '".$ubws_mnu_typ."') ORDER BY `mnu_cat` ASC, `mnu_lev` DESC, `mnu_id` DESC LIMIT 1";
  $rst_query = mysql_query($query) or require _UBWS_LIB_DIR . 'myerr.php';
  if (mysql_num_rows($rst_query) != '0') {$cnt_mn_id = mysql_result($rst_query, 0);}
  else {$cnt_mn_id = '0';}
  return $cnt_mn_id;
}
function getCntParId($mnu_id) {
  $query = "SELECT `mnu_par` FROM `"._UBWS_PRE."ws_mnu` WHERE `mnu_id` = '".$mnu_id."' AND `mnu_ln` = '".$_SESSION[_UBWS_PRE.'usr_lang_index']."' LIMIT 1";
  $rst_query = mysql_query($query) or require _UBWS_LIB_DIR . 'myerr.php';
  if (mysql_num_rows($rst_query) != '0') {$cnt_mn_id = mysql_result($rst_query, 0);}
  else {$cnt_mn_id = '0';}
  return $cnt_mn_id;
}
function getCntLev($cnt_alias) {
  $query = "SELECT `mnu_lev` FROM `"._UBWS_PRE."ws_mnu` WHERE `mnu_cnt_alias` = '".$cnt_alias."' AND `mnu_ln` = '".$_SESSION[_UBWS_PRE.'usr_lang_index']."' ORDER BY `mnu_cat` ASC, `mnu_lev` DESC, `mnu_id` DESC LIMIT 1";
  $rst_query = mysql_query($query) or require _UBWS_LIB_DIR . 'myerr.php';
  if (mysql_num_rows($rst_query) != '0') {$cnt_mn_id = mysql_result($rst_query, 0);}
  else {$cnt_mn_id = '0';}
  return $cnt_mn_id;
}
/* ********** ********** ********** //CREATE MENU ********** ********** ********** */
/* ********** ********** ********** SHOW PAGE CONTENT ********** ********** ********** */
function showContent() {
  global $ubws_req_page;
  global $ubws_theme_cntType;
  global $ubws_theme_cntHdr;
  global $ubws_theme_cntPre;
  global $ubws_theme_cntSuf;
  global $ubws_theme_cntFtr;
  global $ubws_theme_cntTxtPre;
  global $ubws_theme_cntTxtSuf;
  global $ubws_theme_cntPicType;
  global $ubws_theme_cntPicHdr;
  global $ubws_theme_cntPicPre;
  global $ubws_theme_cntPicSuf;
  global $ubws_theme_cntPicSep;
  global $ubws_theme_cntPicFtr;
  global $ubws_theme_cntPicMax;
  if (isset($_GET['content'])) {
    $query_content = "SELECT * FROM `"._UBWS_PRE."ws_cnt` WHERE `cnt_alias` = '".$ubws_req_page."' AND `cnt_ln` = '".$_SESSION[_UBWS_PRE.'usr_lang_index']."' LIMIT 1";
    $rst_query_content = mysql_query($query_content) or require _UBWS_LIB_DIR . 'myerr.php';
    if (mysql_num_rows($rst_query_content) != '0') {
      $row_rst_content = mysql_fetch_assoc($rst_query_content);
      $this_content_id = $row_rst_content['cnt_id'];
      
      // PICTURES 0
      echo $ubws_theme_cntPicHdr['0'];
      $query_pic0 = "SELECT * FROM `"._UBWS_PRE."ws_pic` WHERE `cnt_id` = '".$this_content_id."' AND `pic_loc` = '0' ORDER BY `pic_ord` ASC";
      $rst_query_pic0 = mysql_query($query_pic0) or require _UBWS_LIB_DIR . 'myerr.php';
      $total_pic0 = mysql_num_rows($rst_query_pic0);
      if ($total_pic0 != '0') {
        for ($pic0i=1; $pic0i<=$total_pic0; $pic0i++) {
          $row_rst_pic0 = mysql_fetch_assoc($rst_query_pic0);
          $pictureFile0[$pic0i]    = _UBWS_PIC_DIR . $row_rst_pic0['pic_fn'] . "." . $row_rst_pic0['pic_ft'];
          $pictureFile0url[$pic0i] = _UBWS_PIC_URL . $row_rst_pic0['pic_fn'] . "." . $row_rst_pic0['pic_ft'];
          //$fileSize0[$pic0i] = round(filesize($pictureFile0[$pic0i]) / 1024,2);
          //list($pic0_width[$pic0i], $pic0_height[$pic0i], $pic0_type[$pic0i], $pic0_attr[$pic0i]) = getimagesize($pictureFile0[$pic0i]);
          $pic0_imgsrc[$pic0i] = "<IMG SRC=\""._UBWS_LIB_URL ."pic.php?imgfile=" . $pictureFile0[$pic0i] . "&amp;max_size=".$ubws_theme_cntPicMax['0']."\" />";
          echo $ubws_theme_cntPicPre['0'];
          if ($row_rst_pic0['pic_tmb'] === '1') {
            echo "<A CLASS=\"default\" HREF=\"" . $pictureFile0url[$pic0i] . "\" TARGET=\"_blank\">";
            echo $pic0_imgsrc[$pic0i];
            echo "</A>";
          }
          else {
            echo $pic0_imgsrc[$pic0i];
          }
          echo $ubws_theme_cntPicSuf['0'];
          echo $ubws_theme_cntPicSep['0'];
        }
      }
      echo $ubws_theme_cntPicFtr['0'];
      
      // CONTENT
      echo $ubws_theme_cntHdr;
      echo $ubws_theme_cntPre;
      
      // PICTURES 1
      $query_pic1 = "SELECT * FROM `"._UBWS_PRE."ws_pic` WHERE `cnt_id` = '".$this_content_id."' AND `pic_loc` = '1' ORDER BY `pic_ord` ASC";
      $rst_query_pic1 = mysql_query($query_pic1) or require _UBWS_LIB_DIR . 'myerr.php';
      $total_pic1 = mysql_num_rows($rst_query_pic1);
      if ($total_pic1 != '0') {
        echo $ubws_theme_cntPicHdr['1'];
        for ($pic1i=1; $pic1i<=$total_pic1; $pic1i++) {
          $row_rst_pic1 = mysql_fetch_assoc($rst_query_pic1);
          $pictureFile1[$pic1i]    = _UBWS_PIC_DIR . $row_rst_pic1['pic_fn'] . "." . $row_rst_pic1['pic_ft'];
          $pictureFile1url[$pic1i] = _UBWS_PIC_URL . $row_rst_pic1['pic_fn'] . "." . $row_rst_pic1['pic_ft'];
          //$fileSize1[$pic1i] = round(filesize($pictureFile1[$pic1i]) / 1024,2);
          //list($pic1_width[$pic1i], $pic1_height[$pic1i], $pic1_type[$pic1i], $pic1_attr[$pic1i]) = getimagesize($pictureFile1[$pic1i]);
          $pic1_imgsrc[$pic1i] = "<IMG SRC=\""._UBWS_LIB_URL ."pic.php?imgfile=" . $pictureFile1[$pic1i] . "&amp;max_size=".$ubws_theme_cntPicMax['1']."\" />";
          echo $ubws_theme_cntPicPre['1'];
          if ($row_rst_pic1['pic_tmb'] === '1') {
            echo "<A CLASS=\"default\" HREF=\"" . $pictureFile1url[$pic1i] . "\" TARGET=\"_blank\">";
            echo $pic1_imgsrc[$pic1i];
            echo "</A>";
          }
          else {
            echo $pic1_imgsrc[$pic1i];
          }
          echo $ubws_theme_cntPicSuf['1'];
          echo $ubws_theme_cntPicSep['1'];
        }
        echo $ubws_theme_cntPicFtr['1'];
      }
      
      // TITLE
      echo "\n<H1>" . $row_rst_content['cnt_tt'] . "</H1>";
      
      // PICTURES 2
      $query_pic2 = "SELECT * FROM `"._UBWS_PRE."ws_pic` WHERE `cnt_id` = '".$this_content_id."' AND `pic_loc` = '2' ORDER BY `pic_ord` ASC";
      $rst_query_pic2 = mysql_query($query_pic2) or require _UBWS_LIB_DIR . 'myerr.php';
      $total_pic2 = mysql_num_rows($rst_query_pic2);
      if ($total_pic2 != '0') {
        echo $ubws_theme_cntPicHdr['2'];
        for ($pic2i=1; $pic2i<=$total_pic2; $pic2i++) {
          $row_rst_pic2 = mysql_fetch_assoc($rst_query_pic2);
          $pictureFile2[$pic2i]    = _UBWS_PIC_DIR . $row_rst_pic2['pic_fn'] . "." . $row_rst_pic2['pic_ft'];
          $pictureFile2url[$pic2i] = _UBWS_PIC_URL . $row_rst_pic2['pic_fn'] . "." . $row_rst_pic2['pic_ft'];
          //$fileSize2[$pic2i] = round(filesize($pictureFile2[$pic2i]) / 1024,2);
          //list($pic2_width[$pic2i], $pic2_height[$pic2i], $pic2_type[$pic2i], $pic2_attr[$pic2i]) = getimagesize($pictureFile2[$pic2i]);
          $pic2_imgsrc[$pic2i] = "<IMG SRC=\""._UBWS_LIB_URL ."pic.php?imgfile=" . $pictureFile2[$pic2i] . "&amp;max_size=".$ubws_theme_cntPicMax['2']."\" />";
          echo $ubws_theme_cntPicPre['2'];
          if ($row_rst_pic2['pic_tmb'] === '2') {
            echo "<A CLASS=\"default\" HREF=\"" . $pictureFile2url[$pic2i] . "\" TARGET=\"_blank\">";
            echo $pic2_imgsrc[$pic2i];
            echo "</A>";
          }
          else {
            echo $pic2_imgsrc[$pic2i];
          }
          echo $ubws_theme_cntPicSuf['2'];
          echo $ubws_theme_cntPicSep['2'];
        }
        echo $ubws_theme_cntPicFtr['2'];
      }
      
      // SUBTITLE
      if (trim($row_rst_content['cnt_stt']) !== '') {echo "\n<H2>" . $row_rst_content['cnt_stt'] . "</H2>";}
      
      // PICTURES 3
      $query_pic3 = "SELECT * FROM `"._UBWS_PRE."ws_pic` WHERE `cnt_id` = '".$this_content_id."' AND `pic_loc` = '3' ORDER BY `pic_ord` ASC";
      $rst_query_pic3 = mysql_query($query_pic3) or require _UBWS_LIB_DIR . 'myerr.php';
      $total_pic3 = mysql_num_rows($rst_query_pic3);
      if ($total_pic3 != '0') {
        echo $ubws_theme_cntPicHdr['3'];
        for ($pic3i=1; $pic3i<=$total_pic3; $pic3i++) {
          $row_rst_pic3 = mysql_fetch_assoc($rst_query_pic3);
          $pictureFile3[$pic3i]    = _UBWS_PIC_DIR . $row_rst_pic3['pic_fn'] . "." . $row_rst_pic3['pic_ft'];
          $pictureFile3url[$pic3i] = _UBWS_PIC_URL . $row_rst_pic3['pic_fn'] . "." . $row_rst_pic3['pic_ft'];
          //$fileSize3[$pic3i] = round(filesize($pictureFile3[$pic3i]) / 1024,2);
          //list($pic3_width[$pic3i], $pic3_height[$pic3i], $pic3_type[$pic3i], $pic3_attr[$pic3i]) = getimagesize($pictureFile3[$pic3i]);
          $pic3_imgsrc[$pic3i] = "<IMG SRC=\""._UBWS_LIB_URL ."pic.php?imgfile=" . $pictureFile3[$pic3i] . "&amp;max_size=".$ubws_theme_cntPicMax['3']."\" />";
          echo $ubws_theme_cntPicPre['3'];
          if ($row_rst_pic3['pic_tmb'] === '3') {
            echo "<A CLASS=\"default\" HREF=\"" . $pictureFile3url[$pic3i] . "\" TARGET=\"_blank\">";
            echo $pic3_imgsrc[$pic3i];
            echo "</A>";
          }
          else {
            echo $pic3_imgsrc[$pic3i];
          }
          echo $ubws_theme_cntPicSuf['3'];
          echo $ubws_theme_cntPicSep['3'];
        }
        echo $ubws_theme_cntPicFtr['3'];
      }
      
      // CONTENT TEXT
      echo $ubws_theme_cntTxtPre;
      echo "\n" . $row_rst_content['cnt_txt'];
      echo $ubws_theme_cntTxtSuf;
      
      // PICTURES 4
      $query_pic4 = "SELECT * FROM `"._UBWS_PRE."ws_pic` WHERE `cnt_id` = '".$this_content_id."' AND `pic_loc` = '4' ORDER BY `pic_ord` ASC";
      $rst_query_pic4 = mysql_query($query_pic4) or require _UBWS_LIB_DIR . 'myerr.php';
      $total_pic4 = mysql_num_rows($rst_query_pic4);
      if ($total_pic4 != '0') {
        echo $ubws_theme_cntPicHdr['4'];
        for ($pic4i=1; $pic4i<=$total_pic4; $pic4i++) {
          $row_rst_pic4 = mysql_fetch_assoc($rst_query_pic4);
          $pictureFile4[$pic4i]    = _UBWS_PIC_DIR . $row_rst_pic4['pic_fn'] . "." . $row_rst_pic4['pic_ft'];
          $pictureFile4url[$pic4i] = _UBWS_PIC_URL . $row_rst_pic4['pic_fn'] . "." . $row_rst_pic4['pic_ft'];
          //$fileSize4[$pic4i] = round(filesize($pictureFile4[$pic4i]) / 1024,2);
          //list($pic4_width[$pic4i], $pic4_height[$pic4i], $pic4_type[$pic4i], $pic4_attr[$pic4i]) = getimagesize($pictureFile4[$pic4i]);
          $pic4_imgsrc[$pic4i] = "<IMG SRC=\""._UBWS_LIB_URL ."pic.php?imgfile=" . $pictureFile4[$pic4i] . "&amp;max_size=".$ubws_theme_cntPicMax['4']."\" />";
          echo $ubws_theme_cntPicPre['4'];
          if ($row_rst_pic4['pic_tmb'] === '4') {
            echo "<A CLASS=\"default\" HREF=\"" . $pictureFile4url[$pic4i] . "\" TARGET=\"_blank\">";
            echo $pic4_imgsrc[$pic4i];
            echo "</A>";
          }
          else {
            echo $pic4_imgsrc[$pic4i];
          }
          echo $ubws_theme_cntPicSuf['4'];
          echo $ubws_theme_cntPicSep['4'];
        }
        echo $ubws_theme_cntPicFtr['4'];
      }
      
      // TAGS
      // XXX
      
      // COMMENTS
      // XXX
      
      echo $ubws_theme_cntSuf;
      echo $ubws_theme_cntFtr;
    }
    else {
      echo $ubws_theme_cntPicHdr;
      echo $ubws_theme_cntPicPre;
      echo "no c+p";
      echo $ubws_theme_cntPicSuf;
      echo $ubws_theme_cntPicFtr;
      
      echo $ubws_theme_cntHdr;
      echo $ubws_theme_cntPre;
      echo "oops";
      echo $ubws_theme_cntSuf;
      echo $ubws_theme_cntFtr;
    }
  }    
  else if (isset($_GET['page'])) {
    if (is_file(_UBWS_PG_DIR . $ubws_req_page . ".inc.php")) {
      echo $ubws_theme_cntHdr;
      echo $ubws_theme_cntPre;
      require_once _UBWS_PG_DIR . $ubws_req_page . ".inc.php";
      echo $ubws_theme_cntSuf;
      echo $ubws_theme_cntFtr;
    }
  }
}
/* ********** ********** ********** //SHOW PAGE CONTENT ********** ********** ********** */
?>