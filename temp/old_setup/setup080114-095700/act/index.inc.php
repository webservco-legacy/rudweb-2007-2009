<?php
/*
./setup/act/index.inc.php
10:44 2008-01-10
*/
?>
<SCRIPT TYPE="text/javascript" LANGUAGE="JavaScript">
function dbPort() {
  var element_from = document.forms['dbform'].set_dbtype;
  var element_to = document.forms['dbform'].set_dbport;
  var new_value;
  if (element_from.value == 'my') {
    new_value = '<?php echo $_SESSION['ubwset_set_dbport_my'];?>';
  }
  else if (element_from.value == 'pg') {
    new_value = '<?php echo $_SESSION['ubwset_set_dbport_pg'];?>';
  }
  else {
    new_value = <?php echo $_SESSION['ubwset_set_dbport'];?>;
  }
  element_to.value = new_value;
}
function dbPortDef(dbtype) {
  var element_from = document.forms['dbform'].set_dbtype;
  var element_to = document.forms['dbform'].set_dbport;
  var new_value;
  if (dbtype == 'my') {
    new_value = '<?php echo $_SESSION['ubwset_set_dbport_my'];?>';
  }
  else if (dbtype == 'pg') {
    new_value = '<?php echo $_SESSION['ubwset_set_dbport_pg'];?>';
  }
  element_to.value = new_value;
}
function copyvalue(element_from,element_to) {
  element_to.value = element_from.value;
}
</SCRIPT>
<?php
echo "\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
echo "\n<TR><TD CLASS=\"total\" WIDTH=\"200\"><BR><B>Pre-Installation Configuration:</B><BR></TD>";
echo "</TR></TABLE>";

echo "\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
echo "\n<TR><TD CLASS=\"hdr\"><B>Database Settings</B></TD></TR>";
echo "\n</TABLE>";
?>
<FORM NAME="dbform" METHOD="POST" STYLE="display: inline; margin: 0px; padding: 0px;" ACTION="./setup.php?target=<?php echo $target_var;?>&amp;set=<?php echo $set;?>&amp;act=verif&amp;step=1">
<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="100" STYLE="text-align: right">database type:</TD>
<TD CLASS="cnt">
<SELECT CLASS="general" NAME="set_dbtype" onChange="dbPort();">
  <OPTION VALUE="my" <?php // firefox only -> ?>onMouseOver="dbPortDef('my');"<?php if ($_SESSION['ubwset_set_dbtype'] == "my") {echo " SELECTED";}?>>MySQL</OPTION>
  <OPTION VALUE="pg" <?php // firefox only -> ?>onMouseOver="dbPortDef('pg');"<?php if ($_SESSION['ubwset_set_dbtype'] == "pg") {echo " SELECTED";}?>>PostgreSQL</OPTION>
</SELECT>
</TD></TR>

<TR><TD CLASS="cnt" WIDTH="100" STYLE="text-align: right">host:</TD>
<TD CLASS="cnt">
<INPUT TYPE="text" CLASS="general" NAME="set_dbhost" SIZE="10" MAXLENGTH="20" VALUE="<?php echo $_SESSION['ubwset_set_dbhost'];?>">
</TD></TR>

<TR><TD CLASS="cnt" WIDTH="100" STYLE="text-align: right">port:</TD>
<TD CLASS="cnt">
<INPUT TYPE="text" CLASS="general" NAME="set_dbport" SIZE="10" MAXLENGTH="20" VALUE="<?php echo $_SESSION['ubwset_set_dbport'];?>">
</TD></TR>

<TR><TD CLASS="cnt" WIDTH="100" STYLE="text-align: right">user:</TD>
<TD CLASS="cnt">
<INPUT TYPE="text" CLASS="general" NAME="set_dbuser" SIZE="10" MAXLENGTH="20" VALUE="<?php echo $_SESSION['ubwset_set_dbuser'];?>">
</TD></TR>

<TR><TD CLASS="cnt" WIDTH="100" STYLE="text-align: right">pasword:</TD>
<TD CLASS="cnt">
<INPUT TYPE="text" CLASS="general" NAME="set_dbpass" SIZE="10" MAXLENGTH="20" VALUE="<?php echo $_SESSION['ubwset_set_dbpass'];?>">
</TD></TR>

<TR><TD CLASS="cnt" WIDTH="100" STYLE="text-align: right">database name:</TD>
<TD CLASS="cnt">
<INPUT TYPE="text" CLASS="general" NAME="set_dbname" SIZE="10" MAXLENGTH="20" VALUE="<?php echo $_SESSION['ubwset_set_dbname'];?>">
</TD></TR>

<TR><TD CLASS="cnt" WIDTH="100" STYLE="text-align: right">&#160;</TD>
<TD CLASS="cnt">
<TABLE BORDER="0" CELLPADDING="0" CELLSPACING="0"><TR>
<TD><INPUT TYPE="submit" CLASS="button" STYLE="background-color: #DDDDDD" NAME="next" VALUE="next"></TD>
</TR></TABLE>
</TD></TR></TABLE>
</FORM>

<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="100" STYLE="text-align: right">&#160;</TD>
<TD CLASS="cnt">
<TABLE BORDER="0" CELLPADDING="0" CELLSPACING="0"><TR>
<TD>
<FORM NAME="verifformabort" METHOD="POST" STYLE="display: inline; margin: 0px; padding: 0px;" ACTION="./setup.php">
<INPUT TYPE="submit" CLASS="button" STYLE="background-color: #BBBBBB" NAME="abort" VALUE="abort">
</FORM>
</TD>
</TR></TABLE>
</TD></TR></TABLE>