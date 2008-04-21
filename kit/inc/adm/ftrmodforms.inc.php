<?php
/*
./inc/adm/ftrmodforms.inc.php
12:50 2008-04-05
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once './../../lib/404.php';}

$query_ftr = "SELECT * FROM "._RUDWEB_PRE."ws_ftr WHERE ftr_ln = '".$_SESSION[_RUDWEB_PRE.'usr_lang_index']."' AND ftr_dis = '0' ORDER BY ftr_ord ASC";
$rst_query_ftr = mysql_query($query_ftr) or require _RUDWEB_LIB_DIR . 'myerr.php';
$total_ftr = mysql_num_rows($rst_query_ftr);

$query_cnt = "SELECT cnt_id, cnt_alias, cnt_tt FROM "._RUDWEB_PRE."ws_cnt WHERE cnt_ln = '".$_SESSION[_RUDWEB_PRE.'usr_lang_index']."' AND cnt_dis = '0' ORDER BY cnt_alias ASC";
$rst_query_cnt = mysql_query($query_cnt) or require _RUDWEB_LIB_DIR . 'myerr.php';
$total_cnt = mysql_num_rows($rst_query_cnt);
$row_rst_cnt = NULL;
for ($cnti=1; $cnti<=$total_cnt; $cnti++) {
  $row_rst_cnt[$cnti] = mysql_fetch_assoc($rst_query_cnt);
}
?>
<DIV STYLE="text-align: center;">
<SCRIPT TYPE="text/javascript" LANGUAGE="JavaScript">document.write(getCalendarStyles());</SCRIPT>
<?php echo $rudweb_skin['ftr']['sep']; ?>
<FORM ENCTYPE="multipart/form-data" CLASS="ftrnewform" NAME="ftrnewform" ACTION="" METHOD="post">
  <?php echo $rudweb_skin['ftr']['fpre']; ?>
  <?php echo $rudweb_skin['ftr']['tt']['pre']; ?>
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
  <?php echo $rudweb_skin['ftr']['tt']['suf']; ?>
  <?php echo $rudweb_skin['ftr']['pic']['pre']; ?>
  <?php
  echo $rudweb_ln['adm']['new_pic'];
  echo "<INPUT CLASS=\"imgupload\" TYPE=\"file\" NAME=\"pcsftrnew\" SIZE=\"1\">";
  ?>
  <?php echo $rudweb_skin['ftr']['pic']['suf']; ?>
  <?php
  echo $rudweb_skin['ftr']['desc']['pre'];
  // SUP DESC
  echo $rudweb_ln['adm']['ftr_sup'] . "<INPUT CLASS=\"forminput\" TYPE=\"text\" NAME=\"ftr_sup\" MAXLENGTH=\"255\" VALUE=\"\">";
  echo $rudweb_skin['ftr']['desc']['suf'];
  
  echo "<BR><BR>";
  echo $rudweb_ln['adm']['ftr_valid'];
  ?>
<SCRIPT TYPE="text/javascript" LANGUAGE="JavaScript">
var calnew = new CalendarPopup("cal_divnew");
calnew.setMonthNames(<?php echo $rudweb_ln['adm']['cal_months'];?>);
calnew.setDayHeaders(<?php echo $rudweb_ln['adm']['cal_days'];?>);
calnew.setWeekStartDay(1);
calnew.setTodayText("<?php echo $rudweb_ln['adm']['cal_today'];?>");
</SCRIPT>
<INPUT CLASS="forminput" TYPE="text" NAME="ftr_sdate" ID="ftr_sdate" SIZE="10" MAXLENGTH="10" VALUE="" onClick="calnew.select(document.forms['ftrnewform'].ftr_sdate,'ftr_sdate','yyyy-MM-dd'); return false;">
&#160;-&#160;
<INPUT CLASS="forminput" TYPE="text" NAME="ftr_edate" ID="ftr_edate" SIZE="10" MAXLENGTH="10" VALUE="" onClick="calnew.select(document.forms['ftrnewform'].ftr_edate,'ftr_edate','yyyy-MM-dd'); return false;">
<?php echo $rudweb_skin['ftr']['fsuf']; ?>
<DIV ID="cal_divnew" STYLE="position:absolute;visibility:hidden;background-color:<?php echo $rudweb_skin['BgColor'];?>;color:<?php echo $rudweb_skin['FontColor'];?>;"></DIV>
  <BR><BR>
  <INPUT CLASS="formsubmit" TYPE="submit" NAME="ftrmod" VALUE="<?php echo $rudweb_ln['adm']['ftrnew'];?>">
</FORM>
<?php echo $rudweb_skin['ftr']['sep']; ?>
<?php if ($total_ftr != '0') { ?>
<FORM ENCTYPE="multipart/form-data" CLASS="ftrmodform" NAME="ftrmodform" ACTION="" METHOD="post">
<?php
  for ($ftri=1; $ftri<=$total_ftr; $ftri++) {
    $row_rst_ftr[$ftri] = mysql_fetch_assoc($rst_query_ftr);
    echo $rudweb_skin['ftr']['fpre'];
    
    echo $rudweb_skin['ftr']['tt']['pre'];
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
    echo $rudweb_skin['ftr']['tt']['suf'];
    
    echo $rudweb_skin['ftr']['pic']['pre'];
    // PIC
    $query_pic = "SELECT * FROM `"._RUDWEB_PRE."ws_pic` WHERE `pic_id` = '".$row_rst_ftr[$ftri]['pic_id']."' AND (`cnt_id` = '0' AND `pic_dis` = '0')";
    $rst_query_pic = mysql_query($query_pic) or require _RUDWEB_LIB_DIR . 'myerr.php';
    $total_pic = mysql_num_rows($rst_query_pic);
    if ($total_pic != '0') {
      $row_rst_pic = mysql_fetch_assoc($rst_query_pic);
      $pictureFile    = _RUDWEB_PIC_DIR . $row_rst_pic['pic_fn'];
      $pictureFileurl = _RUDWEB_PIC_URL . $row_rst_pic['pic_fn'];
      $pictureFileTT = $row_rst_pic['pic_tt'];
      $pic_imgsrc = "<IMG SRC=\""._RUDWEB_LIB_URL ."pic.php?imgfile=" . $pictureFile . "&amp;max_size=".$rudweb_skin['ftr']['picsize']."\" ALT=\"".$pictureFileTT."\">";
      if ($row_rst_pic['pic_tmb'] === '1') {
        echo "<A CLASS=\"default\" rel=\"lightbox[".$row_rst_pic['pic_loc']."]\" HREF=\"" . $pictureFileurl . "\" TITLE=\"".$pictureFileTT."\">";
        echo $pic_imgsrc;
        echo "</A>";
      }
      else {
        echo $pic_imgsrc;
      }
      echo $rudweb_ln['adm']['pic_del'] . "<INPUT CLASS=\"chk\" TYPE=\"checkbox\" NAME=\"delpic".$row_rst_ftr[$ftri]['ftr_id']."\">";
      echo $rudweb_ln['adm']['pic_repl'] . "<INPUT CLASS=\"imgupload\" TYPE=\"file\" NAME=\"pcsftrmod".$row_rst_ftr[$ftri]['ftr_id']."\" SIZE=\"1\">";
    }
    else {
      echo $rudweb_ln['adm']['new_pic'];
      echo "<INPUT CLASS=\"imgupload\" TYPE=\"file\" NAME=\"pcsftrnew".$row_rst_ftr[$ftri]['ftr_id']."\" SIZE=\"1\">";
    }
    // PIC
    echo $rudweb_skin['ftr']['pic']['suf'];
    
    echo $rudweb_skin['ftr']['desc']['pre'];
    // SUP DESC
    echo $rudweb_ln['adm']['ftr_sup'] . "<INPUT CLASS=\"forminput\" TYPE=\"text\" NAME=\"ftr_sup".$row_rst_ftr[$ftri]['ftr_id']."\" MAXLENGTH=\"255\" VALUE=\"".$row_rst_ftr[$ftri]['ftr_sup']."\">";
    echo $rudweb_skin['ftr']['desc']['suf'];
    
    echo "<BR><BR>";
    echo $rudweb_ln['adm']['ftr_valid'];
?>
<SCRIPT TYPE="text/javascript" LANGUAGE="JavaScript">
var cal<?php echo $row_rst_ftr[$ftri]['ftr_id'];?> = new CalendarPopup("cal_div<?php echo $row_rst_ftr[$ftri]['ftr_id'];?>");
cal<?php echo $row_rst_ftr[$ftri]['ftr_id'];?>.setMonthNames(<?php echo $rudweb_ln['adm']['cal_months'];?>);
cal<?php echo $row_rst_ftr[$ftri]['ftr_id'];?>.setDayHeaders(<?php echo $rudweb_ln['adm']['cal_days'];?>);
cal<?php echo $row_rst_ftr[$ftri]['ftr_id'];?>.setWeekStartDay(1);
cal<?php echo $row_rst_ftr[$ftri]['ftr_id'];?>.setTodayText("<?php echo $rudweb_ln['adm']['cal_today'];?>");
</SCRIPT>
<INPUT CLASS="forminput" TYPE="text" NAME="ftr_sdate<?php echo $row_rst_ftr[$ftri]['ftr_id'];?>" ID="ftr_sdate<?php echo $row_rst_ftr[$ftri]['ftr_id'];?>" SIZE="10" MAXLENGTH="10" VALUE="<?php echo $row_rst_ftr[$ftri]['ftr_sdate'];?>" onClick="cal<?php echo $row_rst_ftr[$ftri]['ftr_id'];?>.select(document.forms['ftrmodform'].ftr_sdate<?php echo $row_rst_ftr[$ftri]['ftr_id'];?>,'ftr_sdate<?php echo $row_rst_ftr[$ftri]['ftr_id'];?>','yyyy-MM-dd'); return false;">
&#160;-&#160;
<INPUT CLASS="forminput" TYPE="text" NAME="ftr_edate<?php echo $row_rst_ftr[$ftri]['ftr_id'];?>" ID="ftr_edate<?php echo $row_rst_ftr[$ftri]['ftr_id'];?>" SIZE="10" MAXLENGTH="10" VALUE="<?php echo $row_rst_ftr[$ftri]['ftr_edate'];?>" onClick="cal<?php echo $row_rst_ftr[$ftri]['ftr_id'];?>.select(document.forms['ftrmodform'].ftr_edate<?php echo $row_rst_ftr[$ftri]['ftr_id'];?>,'ftr_edate<?php echo $row_rst_ftr[$ftri]['ftr_id'];?>','yyyy-MM-dd'); return false;">
<BR><BR>
<?php echo $rudweb_ln['adm']['ftrdel'];?><INPUT CLASS="chk" TYPE="checkbox" NAME="delftr<?php echo $row_rst_ftr[$ftri]['ftr_id'];?>">
<?php
    echo $rudweb_skin['ftr']['fsuf'];
    
    if ($ftri < $total_ftr) {echo $rudweb_skin['ftr']['sep'];}
?>
<DIV ID="cal_div<?php echo $row_rst_ftr[$ftri]['ftr_id'];?>" STYLE="position:absolute;visibility:hidden;background-color:<?php echo $rudweb_skin['BgColor'];?>;color:<?php echo $rudweb_skin['FontColor'];?>;"></DIV>
<?php
  } // for
?>
  <BR><BR>
  <INPUT CLASS="formsubmit" TYPE="submit" NAME="ftrmod" VALUE="<?php echo $rudweb_ln['adm']['ftrmod'];?>">
</FORM>
<?php
} // if total != 0
?>
</DIV>
<?php
echo $rudweb_skin['ftr']['ftr'];
?>