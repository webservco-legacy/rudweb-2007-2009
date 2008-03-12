<?php
/*
./inc/act/usett01.inc.php
13:20 2008-02-26
*/
if($_SESSION['ubwset_set_site_url1'] == '') {$_SESSION['ubwset_set_site_url1'] = $target_url[$_SESSION['ubwset_pid']];}
if($_SESSION['ubwset_set_site_root1'] == '') {$_SESSION['ubwset_set_site_root1'] = $target_root.$target_vars[$_SESSION['ubwset_pid']];}
if($_SESSION['ubwset_set_pre'] == '') {$_SESSION['ubwset_set_pre'] = $target_name[$_SESSION['ubwset_pid']];}
?>
<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="total" WIDTH="200"><BR><B>Engine Configuration:</B><BR></TD>
</TR></TABLE>

<FORM NAME="usettform1" METHOD="POST" STYLE="display: inline; margin: 0px; padding: 0px;" ACTION="./setup.php?pid=<?php echo $pid;?>&amp;set=<?php echo $set;?>&amp;act=usett&amp;step=2">

<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR>
<TD CLASS="hdr"><B>Database:</B></TD></TR>
</TABLE>

<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="200" STYLE="text-align: right">database type:</TD>
<TD CLASS="cnt">
<INPUT TYPE="hidden" NAME="set_dtype" VALUE="<?php echo $_SESSION['ubwset_set_dbtype'];?>">
<INPUT TYPE="hidden" NAME="set_dbmy" VALUE="<?php echo $_SESSION['ubwset_set_dbmy'];?>">
<SELECT CLASS="general" NAME="dump" DISABLED>
  <OPTION VALUE="my" <?php if ($_SESSION['ubwset_set_dbtype'] == "my") {echo " SELECTED";}?>>MySQL</OPTION>
  <OPTION VALUE="pg" <?php if ($_SESSION['ubwset_set_dbtype'] == "pg") {echo " SELECTED";}?>>PostgreSQL</OPTION>
</SELECT>

</TD></TR>

<TR><TD CLASS="cnt" WIDTH="200" STYLE="text-align: right">host:</TD>
<TD CLASS="cnt">
<INPUT TYPE="text" CLASS="general" NAME="set_dbhost" SIZE="10" MAXLENGTH="20" VALUE="<?php echo $_SESSION['ubwset_set_dbhost'];?>" READONLY>
</TD></TR>

<TR><TD CLASS="cnt" WIDTH="200" STYLE="text-align: right">port:</TD>
<TD CLASS="cnt">
<INPUT TYPE="text" CLASS="general" NAME="set_dbport" SIZE="10" MAXLENGTH="20" VALUE="<?php echo $_SESSION['ubwset_set_dbport'];?>" READONLY>
</TD></TR>

<TR><TD CLASS="cnt" WIDTH="200" STYLE="text-align: right">user:</TD>
<TD CLASS="cnt">
<INPUT TYPE="text" CLASS="general" NAME="set_dbuser" SIZE="10" MAXLENGTH="20" VALUE="<?php echo $_SESSION['ubwset_set_dbuser'];?>" READONLY>
</TD></TR>

<TR><TD CLASS="cnt" WIDTH="200" STYLE="text-align: right">pasword:</TD>
<TD CLASS="cnt">
<INPUT TYPE="text" CLASS="general" NAME="set_dbpass" SIZE="10" MAXLENGTH="20" VALUE="<?php echo $_SESSION['ubwset_set_dbpass'];?>" READONLY>
</TD></TR>

<TR><TD CLASS="cnt" WIDTH="200" STYLE="text-align: right">database name:</TD>
<TD CLASS="cnt">
<INPUT TYPE="text" CLASS="general" NAME="set_dbname" SIZE="10" MAXLENGTH="20" VALUE="<?php echo $_SESSION['ubwset_set_dbname'];?>" READONLY>
</TD></TR>
</TABLE>

<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="hdr"><B>Website:</B></TD></TR>
</TABLE>

<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="200" STYLE="text-align: right">local URL:</TD>
<TD CLASS="cnt">
<INPUT TYPE="text" CLASS="general" NAME="set_site_url1" SIZE="50" MAXLENGTH="150" VALUE="<?php echo $_SESSION['ubwset_set_site_url1'];?>" READONLY>
</TD></TR>
<TR><TD CLASS="cnt" WIDTH="200" STYLE="text-align: right">server URL:</TD>
<TD CLASS="cnt">
<INPUT TYPE="text" CLASS="general" NAME="set_site_url2" SIZE="50" MAXLENGTH="150" VALUE="<?php echo $_SESSION['ubwset_set_site_url2'];?>">
</TD></TR>
<TR><TD CLASS="cnt" WIDTH="200" STYLE="text-align: right">local doc root:</TD>
<TD CLASS="cnt">
<INPUT TYPE="text" CLASS="general" NAME="set_site_root1" SIZE="50" MAXLENGTH="150" VALUE="<?php echo $_SESSION['ubwset_set_site_root1'];?>" READONLY>
</TD></TR>
<TR><TD CLASS="cnt" WIDTH="200" STYLE="text-align: right">server doc root:</TD>
<TD CLASS="cnt">
<INPUT TYPE="text" CLASS="general" NAME="set_site_root2" SIZE="50" MAXLENGTH="150" VALUE="<?php echo $_SESSION['ubwset_set_site_root2'];?>">
</TD></TR>
</TABLE>

<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="hdr"><B>Configuration:</B></TD></TR>
</TABLE>
<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="200" STYLE="text-align: right">site settings:</TD>
<TD CLASS="cnt">
<SELECT CLASS="general" NAME="set_dbcfg">
  <OPTION VALUE="0" <?php if ($_SESSION['ubwset_set_dbcfg'] == "0") {echo " SELECTED";}?>>file</OPTION>
  <OPTION VALUE="1" <?php if ($_SESSION['ubwset_set_dbcfg'] == "1") {echo " SELECTED";}?>>database</OPTION>
</SELECT>
</TD></TR>
<TR><TD CLASS="cnt" WIDTH="200" STYLE="text-align: right">theme settings:</TD>
<TD CLASS="cnt">
<SELECT CLASS="general" NAME="set_dbthm">
  <OPTION VALUE="0" <?php if ($_SESSION['ubwset_set_dbthm'] == "0") {echo " SELECTED";}?>>file</OPTION>
  <OPTION VALUE="1" <?php if ($_SESSION['ubwset_set_dbthm'] == "1") {echo " SELECTED";}?>>database</OPTION>
</SELECT>
</TD></TR>
<TR><TD CLASS="cnt" WIDTH="200" STYLE="text-align: right">global prefix:</TD>
<TD CLASS="cnt">
<INPUT TYPE="text" CLASS="general" NAME="set_pre" SIZE="15" MAXLENGTH="15" VALUE="<?php echo $_SESSION['ubwset_set_pre'];?>">
&#160;(<I>"_" added automatically</I>)
</TD></TR>
</TABLE>

<?php if($usett_err == '0') { ?>
<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="200" STYLE="text-align: right">&#160;</TD>
<TD CLASS="cnt">
  <TABLE BORDER="0" CELLPADDING="0" CELLSPACING="0"><TR>
  <TD><INPUT TYPE="submit" CLASS="button" STYLE="background-color: #DDDDDD" NAME="next" VALUE="next"></TD>
  </TR></TABLE>
</TD></TR></TABLE>
<?php } ?>

</FORM>

<!--
<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="200" STYLE="text-align: right">&#160;</TD>
<TD CLASS="cnt">
  <TABLE BORDER="0" CELLPADDING="0" CELLSPACING="0"><TR>
  <TD>
  <FORM NAME="verifformback" METHOD="POST" STYLE="display: inline; margin: 0px; padding: 0px;" ACTION="./setup.php?pid=<?php echo $pid;?>&amp;set=<?php echo $set;?>&amp;act=thms&amp;step=2">
  <INPUT TYPE="submit" CLASS="button" STYLE="background-color: #CCCCCC" NAME="back" VALUE="back">
  </FORM>
  </TD>
  </TR></TABLE>
</TD></TR></TABLE>
-->

<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="200" STYLE="text-align: right">&#160;</TD>
<TD CLASS="cnt">
  <TABLE BORDER="0" CELLPADDING="0" CELLSPACING="0"><TR>
  <TD>
  <FORM NAME="verifformabort" METHOD="POST" STYLE="display: inline; margin: 0px; padding: 0px;" ACTION="./setup.php">
  <INPUT TYPE="submit" CLASS="button" STYLE="background-color: #BBBBBB" NAME="abort" VALUE="abort">
  </FORM>
  </TD>
  </TR></TABLE>
</TD></TR></TABLE>