<?php
/*
./inc/adm/cspmodforms.inc.php
10:04 2008-05-02
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once './../../lib/404.php';}

$q_csp = "SELECT * FROM "._RUDWEB_PRE."cat_csp WHERE csp_ln = '".$_SESSION[_RUDWEB_PRE.'usr_lang_index']."' ORDER BY csp_ord ASC";
$r_csp = rudweb_qres($rudweb_dbtype, $q_csp);
$t_csp = rudweb_qtotal($rudweb_dbtype, $r_csp);

$q_prd = "SELECT prd_id, prd_tt FROM "._RUDWEB_PRE."cat_prd WHERE prd_ln = '".$_SESSION[_RUDWEB_PRE.'usr_lang_index']."' ORDER BY prd_tt ASC";
$r_prd = rudweb_qres($rudweb_dbtype, $q_prd);
$t_prd = rudweb_qtotal($rudweb_dbtype, $r_prd);

$row_prd = NULL;
for ($prdi=1; $prdi<=$t_prd; $prdi++) {
  $row_prd[$prdi] = mysql_fetch_assoc($r_prd);
}
?>
<?php if ($t_csp != 0) { ?>
<?php echo $rudweb_skin['adm']['mod']['pre']; ?>
<SCRIPT TYPE="text/javascript" LANGUAGE="JavaScript">document.write(getCalendarStyles());</SCRIPT>
<FORM ENCTYPE="multipart/form-data" CLASS="cspmodform" NAME="cspmodform" ACTION="" METHOD="post">
<?php
  for ($cspi=1; $cspi<=$t_csp; $cspi++) {
    $row_csp[$cspi] = mysql_fetch_assoc($r_csp);
?>
    <?php echo $rudweb_skin['adm']['mod']['pre']; ?>
    <INPUT TYPE="hidden" NAME="csp_id[<?php echo $row_csp[$cspi]['csp_id'];?>]" VALUE="<?php echo $row_csp[$cspi]['csp_id'];?>">
    <SELECT CLASS="forminput" NAME="prd_id<?php echo $row_csp[$cspi]['csp_id'];?>">
<?php
    for ($prdid=1; $prdid<=count($row_prd); $prdid++) {
?>    
      <OPTION VALUE="<?php echo $row_prd[$prdid]['prd_id'];?>"<?php if($row_prd[$prdid]['prd_id'] == $row_csp[$cspi]['prd_id']) {echo " SELECTED";}?>><?php echo $row_prd[$prdid]['prd_tt'];?></OPTION>
<?php
    }
?>
  </SELECT>
  &#160;
  <INPUT CLASS="forminput" TYPE="text" SIZE="1" MAXLENGTH="1" NAME="csp_ord<?php echo $row_csp[$cspi]['csp_id'];?>" VALUE="<?php echo $row_csp[$cspi]['csp_ord'];?>">
  <BR>
<?php echo $rudweb_ln['adm']['ftr_valid']; ?>
<SCRIPT TYPE="text/javascript" LANGUAGE="JavaScript">
var cal<?php echo $row_csp[$cspi]['csp_id'];?> = new CalendarPopup("cal_div<?php echo $row_csp[$cspi]['csp_id'];?>");
cal<?php echo $row_csp[$cspi]['csp_id'];?>.setMonthNames(<?php echo $rudweb_ln['adm']['cal_months'];?>);
cal<?php echo $row_csp[$cspi]['csp_id'];?>.setDayHeaders(<?php echo $rudweb_ln['adm']['cal_days'];?>);
cal<?php echo $row_csp[$cspi]['csp_id'];?>.setWeekStartDay(1);
cal<?php echo $row_csp[$cspi]['csp_id'];?>.setTodayText("<?php echo $rudweb_ln['adm']['cal_today'];?>");
</SCRIPT>
<INPUT CLASS="forminput" TYPE="text" NAME="csp_sdate<?php echo $row_csp[$cspi]['csp_id'];?>" ID="csp_sdate<?php echo $row_csp[$cspi]['csp_id'];?>" SIZE="10" MAXLENGTH="10" VALUE="<?php echo $row_csp[$cspi]['csp_sdate'];?>" onClick="cal<?php echo $row_csp[$cspi]['csp_id'];?>.select(document.forms['cspmodform'].csp_sdate<?php echo $row_csp[$cspi]['csp_id'];?>,'csp_sdate<?php echo $row_csp[$cspi]['csp_id'];?>','yyyy-MM-dd'); return false;">
&#160;-&#160;
<INPUT CLASS="forminput" TYPE="text" NAME="csp_edate<?php echo $row_csp[$cspi]['csp_id'];?>" ID="csp_edate<?php echo $row_csp[$cspi]['csp_id'];?>" SIZE="10" MAXLENGTH="10" VALUE="<?php echo $row_csp[$cspi]['csp_edate'];?>" onClick="cal<?php echo $row_csp[$cspi]['csp_id'];?>.select(document.forms['cspmodform'].csp_edate<?php echo $row_csp[$cspi]['csp_id'];?>,'csp_edate<?php echo $row_csp[$cspi]['csp_id'];?>','yyyy-MM-dd'); return false;">
<BR><BR>
<?php echo $rudweb_ln['csp']['delone'];?><INPUT CLASS="chk" TYPE="checkbox" NAME="delcsp<?php echo $row_csp[$cspi]['csp_id'];?>">
<?php
    if ($cspi < $t_csp) {echo '<BR><BR>';}
?>
<DIV ID="cal_div<?php echo $row_csp[$cspi]['csp_id'];?>" STYLE="position:absolute;visibility:hidden;background-color:<?php echo $rudweb_skin['BgColor'];?>;color:<?php echo $rudweb_skin['FontColor'];?>;"></DIV>
<?php echo $rudweb_skin['adm']['mod']['suf']; ?>
<?php
  } // for
?>
  <INPUT CLASS="formsubmit" TYPE="submit" NAME="cspmod" VALUE="<?php echo $rudweb_ln['adm']['mod'];?>">
</FORM>
<?php echo $rudweb_skin['adm']['mod']['suf']; ?>
<?php
} // if total != 0
?>