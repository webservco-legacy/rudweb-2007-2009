<?php
/*
./setup/act/skins01.inc.php
12:50 2008-04-05
*/
?>
<FORM NAME="skinform" METHOD="POST" STYLE="display: inline; margin: 0px; padding: 0px;" ACTION="./setup.php?pid=<?php echo $pid;?>&amp;set=<?php echo $set;?>&amp;act=skins&amp;step=2">
<?php
$skins = lsdir($source.'skins/');
$skinst = count($skins);
if($skinst == '0') {
?>
<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR CLASS="cnt">
<TD CLASS="rst_err" STYLE="border-bottom-width: 0px;"><B>NO SKINS FOUND!</B></TD></TR>
</TABLE>
<?php
}
else {
  for($tmi = 1; $tmi <= $skinst; $tmi++) {
?>
<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR>
<TD CLASS="hdr"><B><?php echo $skins[$tmi];?></B></TD></TR>
</TABLE>
<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="150" STYLE="text-align: right">install skin:</TD>
<TD CLASS="cnt">
<?php
$rudwebskinchecked = '';
if($skins[$tmi] == 'rudskin' && ($set == 'install' && !isset($_POST['set_cfg_sk_inst']['rudskin']))) {
  $rudwebskinchecked = ' CHECKED';
}
?>
<INPUT TYPE="checkbox" CLASS="general" NAME="set_cfg_sk_inst[<?php echo $skins[$tmi];?>]"<?php echo $rudwebskinchecked;?>>
</TD></TR></TABLE>
<?php
  }
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