<?php
/*
./setup/act/lngs01.inc.php
16:52 2008-01-14
*/
?>
<FORM NAME="lngform" METHOD="POST" STYLE="display: inline; margin: 0px; padding: 0px;" ACTION="./setup.php?pid=<?php echo $pid;?>&amp;set=<?php echo $set;?>&amp;act=lngs&amp;step=2">
<?php
$langs = lsdir($source.'inc/langs/');
$langst = count($langs);
for($lni = 1; $lni <= $langst; $lni++) {
if($set == 'upgrade') {
$_SESSION['ubwset_cfg_ln_inst'][$langs[$lni]] = 'off';
$_SESSION['ubwset_cfg_ln_cfg'][$langs[$lni]] = 'off';
}
?>
<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR>
<TD CLASS="hdr"><B><?php echo $langs[$lni];?></B></TD></TR>
</TABLE>
<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="150" STYLE="text-align: right">install language:</TD>
<TD CLASS="cnt">
<INPUT TYPE="checkbox" CLASS="general" NAME="set_cfg_ln_inst[<?php echo $langs[$lni];?>]"<?php if($_SESSION['ubwset_cfg_ln_inst'][$langs[$lni]] == 'on') {echo ' CHECKED';}?>>
</TD></TR></TABLE>
<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="150" STYLE="text-align: right">install config:</TD>
<TD CLASS="cnt">
<INPUT TYPE="checkbox" CLASS="general" NAME="set_cfg_ln_cfg[<?php echo $langs[$lni];?>]"<?php if($_SESSION['ubwset_cfg_ln_cfg'][$langs[$lni]] == 'on') {echo ' CHECKED';}?>>
</TD></TR></TABLE>
<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="150" STYLE="text-align: right">website title:</TD>
<TD CLASS="cnt">
<INPUT TYPE="text" CLASS="general" NAME="langs_wstt[<?php echo $langs[$lni];?>]" SIZE="50" MAXLENGTH="255" VALUE="<?php echo $_SESSION['ubwset_langs_wstt'][$langs[$lni]];?>">
</TD></TR></TABLE>
<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="150" STYLE="text-align: right">website description:</TD>
<TD CLASS="cnt">
<INPUT TYPE="text" CLASS="general" NAME="langs_wsds[<?php echo $langs[$lni];?>]" SIZE="50" MAXLENGTH="255" VALUE="<?php echo $_SESSION['ubwset_langs_wsds'][$langs[$lni]];?>">
</TD></TR></TABLE>
<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="150" STYLE="text-align: right">website keywords:</TD>
<TD CLASS="cnt">
<INPUT TYPE="text" CLASS="general" NAME="langs_wskw[<?php echo $langs[$lni];?>]" SIZE="50" MAXLENGTH="255" VALUE="<?php echo $_SESSION['ubwset_langs_wskw'][$langs[$lni]];?>">
</TD></TR></TABLE>
<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="150" STYLE="text-align: right">featured content title:</TD>
<TD CLASS="cnt">
<INPUT TYPE="text" CLASS="general" NAME="langs_ftt[<?php echo $langs[$lni];?>]" SIZE="50" MAXLENGTH="255" VALUE="<?php echo $_SESSION['ubwset_langs_ftt'][$langs[$lni]];?>">
</TD></TR></TABLE>
<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="150" STYLE="text-align: right">featured content details:</TD>
<TD CLASS="cnt">
<INPUT TYPE="text" CLASS="general" NAME="langs_fds[<?php echo $langs[$lni];?>]" SIZE="50" MAXLENGTH="255" VALUE="<?php echo $_SESSION['ubwset_langs_fds'][$langs[$lni]];?>">
</TD></TR></TABLE>
<?php
}
?>
<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="150" STYLE="text-align: right">&#160;</TD>
<TD CLASS="cnt">
  <TABLE BORDER="0" CELLPADDING="0" CELLSPACING="0"><TR>
  <TD><INPUT TYPE="submit" CLASS="button" STYLE="background-color: #DDDDDD" NAME="next" VALUE="next"></TD>
  </TR></TABLE>
</TD></TR></TABLE>
</FORM>

<!--
<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="150" STYLE="text-align: right;"><B>&#160;</B></TD>
<TD CLASS="cnt">
  <TABLE BORDER="0" CELLPADDING="0" CELLSPACING="0"><TR>
  <TD>
  <FORM NAME="verifformback" METHOD="POST" STYLE="display: inline; margin: 0px; padding: 0px;" ACTION="./setup.php?pid=<?php echo $pid;?>&amp;set=<?php echo $set;?>&amp;act=engn&amp;step=7">
  <INPUT TYPE="submit" CLASS="button" STYLE="background-color: #CCCCCC" NAME="back" VALUE="back">
  </FORM>
  </TD>
  </TR></TABLE>
</TD></TR></TABLE>
-->

<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="150" STYLE="text-align: right">&#160;</TD>
<TD CLASS="cnt">
  <TABLE BORDER="0" CELLPADDING="0" CELLSPACING="0"><TR>
  <TD>
  <FORM NAME="verifformabort" METHOD="POST" STYLE="display: inline; margin: 0px; padding: 0px;" ACTION="./setup.php">
  <INPUT TYPE="submit" CLASS="button" STYLE="background-color: #BBBBBB" NAME="abort" VALUE="abort">
  </FORM>
  </TD>
  </TR></TABLE>
</TD></TR></TABLE>