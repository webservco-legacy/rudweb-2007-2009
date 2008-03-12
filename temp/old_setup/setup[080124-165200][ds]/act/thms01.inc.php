<?php
/*
./setup/act/thms01.inc.php
11:49 2008-01-17
*/
?>
<FORM NAME="lngform" METHOD="POST" STYLE="display: inline; margin: 0px; padding: 0px;" ACTION="./setup.php?target=<?php echo $target_var;?>&amp;set=<?php echo $set;?>&amp;act=thms&amp;step=2">
<?php
$themes = lsdir($source.'themes/');
$themest = count($themes);
if($themest == '0') {
?>
<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR CLASS="cnt">
<TD CLASS="rst_err" STYLE="border-bottom-width: 0px;"><B>NO THEMES FOUND!</B></TD></TR>
</TABLE>
<?php
}
else {
  for($tmi = 1; $tmi <= $themest; $tmi++) {
?>
<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR>
<TD CLASS="hdr"><B><?php echo $themes[$tmi];?></B></TD></TR>
</TABLE>
<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="150" STYLE="text-align: right">install theme:</TD>
<TD CLASS="cnt">
<?php
$ubwsthemechecked = '';
if($themes[$tmi] == 'ubws' && ($set == 'install' && !isset($_POST['set_cfg_tm_inst']['ubws']))) {
  $ubwsthemechecked = ' CHECKED';
}
?>
<INPUT TYPE="checkbox" CLASS="general" NAME="set_cfg_tm_inst[<?php echo $themes[$tmi];?>]"<?php echo $ubwsthemechecked;?>>
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
<?php
}
?>
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