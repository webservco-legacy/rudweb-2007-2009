<?php
/*
./setup/act/index.inc.php
10:44 2008-01-10
*/

$set_dbtype = "na";
$set_dbhost = "localhost";
$set_dbport = "3306";
$set_dbport_my = "3306";
$set_dbport_pg = "5432";
$set_dbuser = "user";
$set_dbpass = "password";
$set_dbname = "db_name";

if(isset($_POST['next']) || isset($_POST['back'])) {
if(isset($_POST['set_dbtype'])) {$set_dbtype = $_POST['set_dbtype'];}
if(isset($_POST['set_dbmy']))   {$set_dbmy = $_POST['set_dbmy'];}
if(isset($_POST['set_dbhost'])) {$set_dbhost = $_POST['set_dbhost'];}
if(isset($_POST['set_dbport'])) {$set_dbport = $_POST['set_dbport'];}
if(isset($_POST['set_dbuser'])) {$set_dbuser = $_POST['set_dbuser'];}
if(isset($_POST['set_dbpass'])) {$set_dbpass = $_POST['set_dbpass'];}
if(isset($_POST['set_dbname'])) {$set_dbname = $_POST['set_dbname'];}
}
//$dbname = "Not Defined";

?>
<SCRIPT TYPE="text/javascript" LANGUAGE="JavaScript">
function dbPort() {
  var element_from = document.forms['dbform'].set_dbtype;
  var element_to = document.forms['dbform'].set_dbport;
  var new_value;
  if (element_from.value == 'my') {
    new_value = '<?php echo $set_dbport_my;?>';
  }
  else if (element_from.value == 'pg') {
    new_value = '<?php echo $set_dbport_pg;?>';
  }
  else {
    new_value = <?php echo $set_dbport;?>;
  }
  element_to.value = new_value;
}
function dbPortDef(dbtype) {
  var element_from = document.forms['dbform'].set_dbtype;
  var element_to = document.forms['dbform'].set_dbport;
  var new_value;
  if (dbtype == 'my') {
    new_value = '<?php echo $set_dbport_my;?>';
  }
  else if (dbtype == 'pg') {
    new_value = '<?php echo $set_dbport_pg;?>';
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
  <OPTION VALUE="my" <?php // firefox only -> ?>onMouseOver="dbPortDef('my');"<?php if ($set_dbtype == "my") {echo " SELECTED";}?>>MySQL</OPTION>
  <OPTION VALUE="pg" <?php // firefox only -> ?>onMouseOver="dbPortDef('pg');"<?php if ($set_dbtype == "pg") {echo " SELECTED";}?>>PostgreSQL</OPTION>
</SELECT>
</TD></TR>

<TR><TD CLASS="cnt" WIDTH="100" STYLE="text-align: right">host:</TD>
<TD CLASS="cnt">
<INPUT TYPE="text" CLASS="general" NAME="set_dbhost" SIZE="10" MAXLENGTH="20" VALUE="<?php echo $set_dbhost;?>">
</TD></TR>

<TR><TD CLASS="cnt" WIDTH="100" STYLE="text-align: right">port:</TD>
<TD CLASS="cnt">
<INPUT TYPE="text" CLASS="general" NAME="set_dbport" SIZE="10" MAXLENGTH="20" VALUE="<?php echo $set_dbport;?>">
</TD></TR>

<TR><TD CLASS="cnt" WIDTH="100" STYLE="text-align: right">user:</TD>
<TD CLASS="cnt">
<INPUT TYPE="text" CLASS="general" NAME="set_dbuser" SIZE="10" MAXLENGTH="20" VALUE="<?php echo $set_dbuser;?>">
</TD></TR>

<TR><TD CLASS="cnt" WIDTH="100" STYLE="text-align: right">pasword:</TD>
<TD CLASS="cnt">
<INPUT TYPE="text" CLASS="general" NAME="set_dbpass" SIZE="10" MAXLENGTH="20" VALUE="<?php echo $set_dbpass;?>">
</TD></TR>

<TR><TD CLASS="cnt" WIDTH="100" STYLE="text-align: right">database name:</TD>
<TD CLASS="cnt">
<INPUT TYPE="text" CLASS="general" NAME="set_dbname" SIZE="10" MAXLENGTH="20" VALUE="<?php echo $set_dbname;?>">
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
<FORM NAME="verifformback" METHOD="POST" STYLE="display: inline; margin: 0px; padding: 0px;" ACTION="./setup.php">
<INPUT TYPE="submit" CLASS="button" STYLE="background-color: #CCCCCC" NAME="back" VALUE="back">
</FORM>
</TD>
</TR></TABLE>
</TD></TR></TABLE>

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