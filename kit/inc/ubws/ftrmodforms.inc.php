<?php
/*
./inc/ubws/ftrmodforms.inc.php
15:53 2007-12-12
*/
if(!defined('_UBWS_PUBFIL')) {require_once './../../lib/404.php';}

$query_ftr = "SELECT * FROM "._UBWS_PRE."ws_ftr WHERE ftr_ln = '".$_SESSION[_UBWS_PRE.'usr_lang_index']."' AND ftr_dis = '0' ORDER BY ftr_id ASC";
$rst_query_ftr = mysql_query($query_ftr) or require _UBWS_LIB_DIR . 'myerr.php';
$total_ftr = mysql_num_rows($rst_query_ftr);

$query_cnt = "SELECT cnt_id, cnt_alias, cnt_tt FROM "._UBWS_PRE."ws_cnt WHERE cnt_ln = '".$_SESSION[_UBWS_PRE.'usr_lang_index']."' AND cnt_dis = '0' ORDER BY cnt_alias ASC";
$rst_query_cnt = mysql_query($query_cnt) or require _UBWS_LIB_DIR . 'myerr.php';
$total_cnt = mysql_num_rows($rst_query_cnt);
$row_rst_cnt = NULL;
for ($cnti=1; $cnti<=$total_cnt; $cnti++) {
  $row_rst_cnt[$cnti] = mysql_fetch_assoc($rst_query_cnt);
}
?>
<DIV STYLE="text-align: center;">
<SCRIPT TYPE="text/javascript" LANGUAGE="JavaScript">document.write(getCalendarStyles());</SCRIPT>
<?php echo $ubws_theme['ftr']['sep']; ?>
<FORM ENCTYPE="multipart/form-data" CLASS="ftrnewform" NAME="ftrnewform" ACTION="" METHOD="post">
  <?php echo $ubws_theme['ftr']['fpre']; ?>
  <?php echo $ubws_theme['ftr']['tt']['pre']; ?>
  <INPUT TYPE="hidden" NAME="ftr_new" VALUE="1">
  <SELECT CLASS="forminput" NAME="cnt_id">
<?php
    for ($xcntid=1; $xcntid<=count($row_rst_cnt); $xcntid++) {
?>    
      <OPTION VALUE="<?php echo $row_rst_cnt[$xcntid]['cnt_id'];?>"><?php echo $row_rst_cnt[$xcntid]['cnt_alias'];?></OPTION>
<?php
    }
?>
  </SELECT>
  <BR>
  <?php echo $ubws_theme['ftr']['tt']['suf']; ?>
  <?php echo $ubws_theme['ftr']['pic']['pre']; ?>
  <?php
  echo $ubws_ln['adm']['new_pic'];
  echo "<INPUT CLASS=\"imgupload\" TYPE=\"file\" NAME=\"pcsftrnew\" SIZE=\"1\">";
  ?>
  <?php echo $ubws_theme['ftr']['pic']['suf']; ?>
  <?php
  echo $ubws_theme['ftr']['desc']['pre'];
  // SUP DESC
  echo $ubws_ln['adm']['ftr_sup'] . "<INPUT CLASS=\"forminput\" TYPE=\"text\" NAME=\"ftr_sup\" MAXLENGTH=\"255\" VALUE=\"\">";
  echo $ubws_theme['ftr']['desc']['suf'];
  
  echo "<BR><BR>";
  echo $ubws_ln['adm']['ftr_valid'];
  ?>
<SCRIPT TYPE="text/javascript" LANGUAGE="JavaScript">
var calnew = new CalendarPopup("cal_divnew");
calnew.setMonthNames(<?php echo $ubws_ln['adm']['cal_months'];?>);
calnew.setDayHeaders(<?php echo $ubws_ln['adm']['cal_days'];?>);
calnew.setWeekStartDay(1);
calnew.setTodayText("<?php echo $ubws_ln['adm']['cal_today'];?>");
</SCRIPT>
<INPUT CLASS="forminput" TYPE="text" NAME="ftr_sdate" ID="ftr_sdate" SIZE="10" MAXLENGTH="10" VALUE="" onClick="calnew.select(document.forms['ftrnewform'].ftr_sdate,'ftr_sdate','yyyy-MM-dd'); return false;">
&#160;-&#160;
<INPUT CLASS="forminput" TYPE="text" NAME="ftr_edate" ID="ftr_edate" SIZE="10" MAXLENGTH="10" VALUE="" onClick="calnew.select(document.forms['ftrnewform'].ftr_edate,'ftr_edate','yyyy-MM-dd'); return false;">
<?php echo $ubws_theme['ftr']['fsuf']; ?>
<DIV ID="cal_divnew" STYLE="position:absolute;visibility:hidden;background-color:<?php echo $ubws_theme['BgColor'];?>;color:<?php echo $ubws_theme['FontColor'];?>;"></DIV>
  <BR><BR>
  <INPUT CLASS="formsubmit" TYPE="submit" NAME="ftrmod" VALUE="<?php echo $ubws_ln['adm']['ftrnew'];?>">
</FORM>
<?php echo $ubws_theme['ftr']['sep']; ?>
<?php if ($total_ftr != '0') { ?>
<FORM ENCTYPE="multipart/form-data" CLASS="ftrmodform" NAME="ftrmodform" ACTION="" METHOD="post">
<?php
  for ($ftri=1; $ftri<=$total_ftr; $ftri++) {
    $row_rst_ftr[$ftri] = mysql_fetch_assoc($rst_query_ftr);
    echo $ubws_theme['ftr']['fpre'];
    
    echo $ubws_theme['ftr']['tt']['pre'];
?>
    <INPUT TYPE="hidden" NAME="ftr_id[<?php echo $row_rst_ftr[$ftri]['ftr_id'];?>]" VALUE="<?php echo $row_rst_ftr[$ftri]['ftr_id'];?>">
    <SELECT CLASS="forminput" NAME="cnt_id<?php echo $row_rst_ftr[$ftri]['ftr_id'];?>">
<?php
    for ($cntid=1; $cntid<=count($row_rst_cnt); $cntid++) {
?>    
      <OPTION VALUE="<?php echo $row_rst_cnt[$cntid]['cnt_id'];?>"<?php if($row_rst_cnt[$cntid]['cnt_id'] == $row_rst_ftr[$ftri]['cnt_id']) {echo " SELECTED";}?>><?php echo $row_rst_cnt[$cntid]['cnt_alias'];?></OPTION>
<?php
    }
?>
  </SELECT>
  &#160;
  <INPUT CLASS="forminput" TYPE="text" SIZE="1" MAXLENGTH="1" NAME="ftr_ord<?php echo $row_rst_ftr[$ftri]['ftr_id'];?>" VALUE="<?php echo $row_rst_ftr[$ftri]['ftr_ord'];?>">
  <BR>
<?php
    echo $ubws_theme['ftr']['tt']['suf'];
    
    echo $ubws_theme['ftr']['pic']['pre'];
    // PIC
    $query_pic = "SELECT * FROM `"._UBWS_PRE."ws_pic` WHERE `pic_id` = '".$row_rst_ftr[$ftri]['pic_id']."' AND (`cnt_id` = '0' AND `pic_dis` = '0')";
    $rst_query_pic = mysql_query($query_pic) or require _UBWS_LIB_DIR . 'myerr.php';
    $total_pic = mysql_num_rows($rst_query_pic);
    if ($total_pic != '0') {
      $row_rst_pic = mysql_fetch_assoc($rst_query_pic);
      $pictureFile    = _UBWS_PIC_DIR . $row_rst_pic['pic_fn'];
      $pictureFileurl = _UBWS_PIC_URL . $row_rst_pic['pic_fn'];
      $pictureFileTT = $row_rst_pic['pic_tt'];
      $pic_imgsrc = "<IMG SRC=\""._UBWS_LIB_URL ."pic.php?imgfile=" . $pictureFile . "&amp;max_size=".$ubws_theme['ftr']['picsize']."\" ALT=\"".$pictureFileTT."\">";
      if ($row_rst_pic['pic_tmb'] === '1') {
        echo "<A CLASS=\"default\" rel=\"lightbox[".$row_rst_pic['pic_loc']."]\" HREF=\"" . $pictureFileurl . "\" TITLE=\"".$pictureFileTT."\">";
        echo $pic_imgsrc;
        echo "</A>";
      }
      else {
        echo $pic_imgsrc;
      }
      echo $ubws_ln['adm']['pic_del'] . "<INPUT CLASS=\"chk\" TYPE=\"checkbox\" NAME=\"delpic".$row_rst_ftr[$ftri]['ftr_id']."\">";
      echo $ubws_ln['adm']['pic_repl'] . "<INPUT CLASS=\"imgupload\" TYPE=\"file\" NAME=\"pcsftrmod".$row_rst_ftr[$ftri]['ftr_id']."\" SIZE=\"1\">";
    }
    else {
      echo $ubws_ln['adm']['new_pic'];
      echo "<INPUT CLASS=\"imgupload\" TYPE=\"file\" NAME=\"pcsftrnew".$row_rst_ftr[$ftri]['ftr_id']."\" SIZE=\"1\">";
    }
    // PIC
    echo $ubws_theme['ftr']['pic']['suf'];
    
    echo $ubws_theme['ftr']['desc']['pre'];
    // SUP DESC
    echo $ubws_ln['adm']['ftr_sup'] . "<INPUT CLASS=\"forminput\" TYPE=\"text\" NAME=\"ftr_sup".$row_rst_ftr[$ftri]['ftr_id']."\" MAXLENGTH=\"255\" VALUE=\"".$row_rst_ftr[$ftri]['ftr_sup']."\">";
    echo $ubws_theme['ftr']['desc']['suf'];
    
    echo "<BR><BR>";
    echo $ubws_ln['adm']['ftr_valid'];
?>
<SCRIPT TYPE="text/javascript" LANGUAGE="JavaScript">
var cal<?php echo $row_rst_ftr[$ftri]['ftr_id'];?> = new CalendarPopup("cal_div<?php echo $row_rst_ftr[$ftri]['ftr_id'];?>");
cal<?php echo $row_rst_ftr[$ftri]['ftr_id'];?>.setMonthNames(<?php echo $ubws_ln['adm']['cal_months'];?>);
cal<?php echo $row_rst_ftr[$ftri]['ftr_id'];?>.setDayHeaders(<?php echo $ubws_ln['adm']['cal_days'];?>);
cal<?php echo $row_rst_ftr[$ftri]['ftr_id'];?>.setWeekStartDay(1);
cal<?php echo $row_rst_ftr[$ftri]['ftr_id'];?>.setTodayText("<?php echo $ubws_ln['adm']['cal_today'];?>");
</SCRIPT>
<INPUT CLASS="forminput" TYPE="text" NAME="ftr_sdate<?php echo $row_rst_ftr[$ftri]['ftr_id'];?>" ID="ftr_sdate<?php echo $row_rst_ftr[$ftri]['ftr_id'];?>" SIZE="10" MAXLENGTH="10" VALUE="<?php echo $row_rst_ftr[$ftri]['ftr_sdate'];?>" onClick="cal<?php echo $row_rst_ftr[$ftri]['ftr_id'];?>.select(document.forms['ftrmodform'].ftr_sdate<?php echo $row_rst_ftr[$ftri]['ftr_id'];?>,'ftr_sdate<?php echo $row_rst_ftr[$ftri]['ftr_id'];?>','yyyy-MM-dd'); return false;">
&#160;-&#160;
<INPUT CLASS="forminput" TYPE="text" NAME="ftr_edate<?php echo $row_rst_ftr[$ftri]['ftr_id'];?>" ID="ftr_edate<?php echo $row_rst_ftr[$ftri]['ftr_id'];?>" SIZE="10" MAXLENGTH="10" VALUE="<?php echo $row_rst_ftr[$ftri]['ftr_edate'];?>" onClick="cal<?php echo $row_rst_ftr[$ftri]['ftr_id'];?>.select(document.forms['ftrmodform'].ftr_edate<?php echo $row_rst_ftr[$ftri]['ftr_id'];?>,'ftr_edate<?php echo $row_rst_ftr[$ftri]['ftr_id'];?>','yyyy-MM-dd'); return false;">
<BR><BR>
<?php echo $ubws_ln['adm']['ftrdel'];?><INPUT CLASS="chk" TYPE="checkbox" NAME="delftr<?php echo $row_rst_ftr[$ftri]['ftr_id'];?>">
<?php
    echo $ubws_theme['ftr']['fsuf'];
    
    if ($ftri < $total_ftr) {echo $ubws_theme['ftr']['sep'];}
?>
<DIV ID="cal_div<?php echo $row_rst_ftr[$ftri]['ftr_id'];?>" STYLE="position:absolute;visibility:hidden;background-color:<?php echo $ubws_theme['BgColor'];?>;color:<?php echo $ubws_theme['FontColor'];?>;"></DIV>
<?php
  } // for
?>
  <BR><BR>
  <INPUT CLASS="formsubmit" TYPE="submit" NAME="ftrmod" VALUE="<?php echo $ubws_ln['adm']['ftrmod'];?>">
</FORM>
<?php
} // if total != 0
?>
</DIV>
<?php
echo $ubws_theme['ftr']['ftr'];
?>