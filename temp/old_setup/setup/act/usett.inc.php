<?php
/*
./setup/act/verif.inc.php
16:56 2008-01-09
*/
$set_dbtype = null;
$set_dbmy   = null;
$set_dbhost = null;
$set_dbport = null;
$set_dbuser = null;
$set_dbpass = null;
$set_dbname = null;

$set_site_url1  = $target_url.$target_var;
$set_site_root1 = $target_root.$target_var;
$set_site_url2  = "http://www.example.com/";
$set_site_root2 = "/var/www/public_html/";

$set_dbcfg = '1';
$set_dbthm = '0';

$set_pre = $target_name;

$usett_err = '0';

if(isset($_POST['set_dbtype'])) {$set_dbtype = $_POST['set_dbtype'];}
if(isset($_POST['set_dbmy']))   {$set_dbmy   = $_POST['set_dbmy'];}
if(isset($_POST['set_dbhost'])) {$set_dbhost = $_POST['set_dbhost'];}
if(isset($_POST['set_dbport'])) {$set_dbport = $_POST['set_dbport'];}
if(isset($_POST['set_dbuser'])) {$set_dbuser = $_POST['set_dbuser'];}
if(isset($_POST['set_dbpass'])) {$set_dbpass = $_POST['set_dbpass'];}
if(isset($_POST['set_dbname'])) {$set_dbname = $_POST['set_dbname'];}

if(isset($_POST['set_site_url1'])) {$set_site_url1 = $_POST['set_site_url1'];}
if(isset($_POST['set_site_url2'])) {$set_site_url2 = $_POST['set_site_url2'];}
if(isset($_POST['set_site_root1'])) {$set_site_root1 = $_POST['set_site_root1'];}
if(isset($_POST['set_site_root2'])) {$set_site_root2 = $_POST['set_site_root2'];}

if(isset($_POST['set_dbcfg'])) {$set_dbcfg = $_POST['set_dbcfg'];}
if(isset($_POST['set_dbthm'])) {$set_dbthm = $_POST['set_dbthm'];}

if(isset($_POST['set_pre'])) {$set_pre = $_POST['set_pre'];}

echo "\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
echo "\n<TR><TD CLASS=\"total\" WIDTH=\"40\"><BR><B>Gathering Settings:</B><BR></TD>";
echo "</TR></TABLE>";

switch($step) {
  case "1" : {
?>

<FORM NAME="usettform" METHOD="POST" STYLE="display: inline; margin: 0px; padding: 0px;" ACTION="./setup.php?target=<?php echo $target_var;?>&amp;set=<?php echo $set;?>&amp;act=usett&amp;step=2">

<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR>
<TD CLASS="hdr"><B>Database:</B></TD></TR>
</TABLE>

<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="200" STYLE="text-align: right">database type:</TD>
<TD CLASS="cnt">
<INPUT TYPE="hidden" NAME="set_dtype" VALUE="<?php echo $set_dbtype;?>">
<INPUT TYPE="hidden" NAME="set_dbmy" VALUE="<?php echo $set_dbmy;?>">
<SELECT CLASS="general" NAME="dump" DISABLED>
  <OPTION VALUE="my" <?php if ($set_dbtype == "my") {echo " SELECTED";}?>>MySQL</OPTION>
  <OPTION VALUE="pg" <?php if ($set_dbtype == "pg") {echo " SELECTED";}?>>PostgreSQL</OPTION>
</SELECT>

</TD></TR>

<TR><TD CLASS="cnt" WIDTH="200" STYLE="text-align: right">host:</TD>
<TD CLASS="cnt">
<INPUT TYPE="text" CLASS="general" NAME="set_dbhost" SIZE="10" MAXLENGTH="20" VALUE="<?php echo $set_dbhost;?>" READONLY>
</TD></TR>

<TR><TD CLASS="cnt" WIDTH="200" STYLE="text-align: right">port:</TD>
<TD CLASS="cnt">
<INPUT TYPE="text" CLASS="general" NAME="set_dbport" SIZE="10" MAXLENGTH="20" VALUE="<?php echo $set_dbport;?>" READONLY>
</TD></TR>

<TR><TD CLASS="cnt" WIDTH="200" STYLE="text-align: right">user:</TD>
<TD CLASS="cnt">
<INPUT TYPE="text" CLASS="general" NAME="set_dbuser" SIZE="10" MAXLENGTH="20" VALUE="<?php echo $set_dbuser;?>" READONLY>
</TD></TR>

<TR><TD CLASS="cnt" WIDTH="200" STYLE="text-align: right">pasword:</TD>
<TD CLASS="cnt">
<INPUT TYPE="text" CLASS="general" NAME="set_dbpass" SIZE="10" MAXLENGTH="20" VALUE="<?php echo $set_dbpass;?>" READONLY>
</TD></TR>

<TR><TD CLASS="cnt" WIDTH="200" STYLE="text-align: right">database name:</TD>
<TD CLASS="cnt">
<INPUT TYPE="text" CLASS="general" NAME="set_dbname" SIZE="10" MAXLENGTH="20" VALUE="<?php echo $set_dbname;?>" READONLY>
</TD></TR>
</TABLE>

<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="hdr"><B>Website:</B></TD></TR>
</TABLE>

<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="200" STYLE="text-align: right">local URL:</TD>
<TD CLASS="cnt">
<INPUT TYPE="text" CLASS="general" NAME="set_site_url1" SIZE="50" MAXLENGTH="150" VALUE="<?php echo $set_site_url1;?>" READONLY>
</TD></TR>
<TR><TD CLASS="cnt" WIDTH="200" STYLE="text-align: right">server URL:</TD>
<TD CLASS="cnt">
<INPUT TYPE="text" CLASS="general" NAME="set_site_url2" SIZE="50" MAXLENGTH="150" VALUE="<?php echo $set_site_url2;?>">
</TD></TR>
<TR><TD CLASS="cnt" WIDTH="200" STYLE="text-align: right">local doc root:</TD>
<TD CLASS="cnt">
<INPUT TYPE="text" CLASS="general" NAME="set_site_root1" SIZE="50" MAXLENGTH="150" VALUE="<?php echo $set_site_root1;?>" READONLY>
</TD></TR>
<TR><TD CLASS="cnt" WIDTH="200" STYLE="text-align: right">server doc root:</TD>
<TD CLASS="cnt">
<INPUT TYPE="text" CLASS="general" NAME="set_site_root2" SIZE="50" MAXLENGTH="150" VALUE="<?php echo $set_site_root2;?>">
</TD></TR>
</TABLE>

<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="hdr"><B>Configuration:</B></TD></TR>
</TABLE>
<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="200" STYLE="text-align: right">site settings:</TD>
<TD CLASS="cnt">
<SELECT CLASS="general" NAME="set_dbcfg">
  <OPTION VALUE="my" <?php if ($set_dbcfg == "0") {echo " SELECTED";}?>>file</OPTION>
  <OPTION VALUE="pg" <?php if ($set_dbcfg == "1") {echo " SELECTED";}?>>database</OPTION>
</SELECT>
</TD></TR>
<TR><TD CLASS="cnt" WIDTH="200" STYLE="text-align: right">theme settings:</TD>
<TD CLASS="cnt">
<SELECT CLASS="general" NAME="set_dbthm">
  <OPTION VALUE="my" <?php if ($set_dbthm == "0") {echo " SELECTED";}?>>file</OPTION>
  <OPTION VALUE="pg" <?php if ($set_dbthm == "1") {echo " SELECTED";}?>>database</OPTION>
</SELECT>
</TD></TR>
<TR><TD CLASS="cnt" WIDTH="200" STYLE="text-align: right">global prefix:</TD>
<TD CLASS="cnt">
<INPUT TYPE="text" CLASS="general" NAME="set_pre" SIZE="15" MAXLENGTH="15" VALUE="<?php echo $set_pre;?>">
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

<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="200" STYLE="text-align: right">&#160;</TD>
<TD CLASS="cnt">
  <TABLE BORDER="0" CELLPADDING="0" CELLSPACING="0"><TR>
  <TD>
  <FORM NAME="verifformback" METHOD="POST" STYLE="display: inline; margin: 0px; padding: 0px;" ACTION="./setup.php?target=<?php echo $target_var;?>&amp;set=<?php echo $set;?>&amp;act=verif&amp;step=1">
  <INPUT TYPE="hidden" NAME="set_dbtype" VALUE="<?php echo $set_dbtype;?>">
  <INPUT TYPE="hidden" NAME="set_dbmy" VALUE="<?php echo $set_dbmy;?>">
  <INPUT TYPE="hidden" NAME="set_dbhost" VALUE="<?php echo $set_dbhost;?>">
  <INPUT TYPE="hidden" NAME="set_dbport" VALUE="<?php echo $set_dbport;?>">
  <INPUT TYPE="hidden" NAME="set_dbuser" VALUE="<?php echo $set_dbuser;?>">
  <INPUT TYPE="hidden" NAME="set_dbpass" VALUE="<?php echo $set_dbpass;?>">
  <INPUT TYPE="hidden" NAME="set_dbname" VALUE="<?php echo $set_dbname;?>">
  <INPUT TYPE="submit" CLASS="button" STYLE="background-color: #CCCCCC" NAME="back" VALUE="back">
  </FORM>
  </TD>
  </TR></TABLE>
</TD></TR></TABLE>

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
<?php  
  break;
  }
  case "2" : {
?>
<?php
  break;
  }
  default : {break;}
}
?>