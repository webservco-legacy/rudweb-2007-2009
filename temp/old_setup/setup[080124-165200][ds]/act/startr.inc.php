<?php
/*
./setup/act/startr.inc.php
16:32 2008-01-23
*/
echo "\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
echo "\n<TR><TD CLASS=\"ttt\" WIDTH=\"200\"><B>Index</B></TD>";
echo "</TR></TABLE>";

$version_check_error = '0';
$version_compare_error = '0';
$target_dir_error = '0';

echo "\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
echo "\n<TR><TD CLASS=\"cnt\" WIDTH=\"110\" STYLE=\"text-align: right\"><B>engine:</B></TD>";
echo "\n<TD CLASS=\"cnt\">";
if($cl_version['0'] == '0.0.000000') {
  echo " not installed";
  $version_check_error = '1';
}
else {
  echo $cl_version['1'] . " build ".$cl_version['3']." (".$version_age[2]." days old, released " . show_version_age($version_age[1]) . ")";
}
echo "</TD></TR>";

echo "\n<TR><TD CLASS=\"cnt\" STYLE=\"text-align: right\"><B>status:</B></TD>";
echo "\n<TD CLASS=\"cnt\">";
echo "<I>".show_compare_version($compare_version)."</I>";
echo "</TD></TR>";
if($compare_version == '0') {$version_compare_error = '1';}

echo "\n<TR><TD CLASS=\"cnt\" STYLE=\"text-align: right\"><B>setup:</B></TD>";
echo "\n<TD CLASS=\"cnt\">";
echo $set;
echo "</TD></TR>";

echo "\n<TR><TD CLASS=\"cnt\" STYLE=\"text-align: right\"><B>target:</B></TD>";
echo "\n<TD CLASS=\"cnt\">";
if (!is_dir($target)) {
  echo "<SPAN CLASS=\"rst_err\" STYLE=\"border-bottom-width: 0px;\">not found</SPAN>";
  $target_dir_error = '1';
} 
else {echo "<SPAN CLASS=\"rst_ok\" STYLE=\"border-bottom-width: 0px;\">exists</SPAN>";}
echo "</TD></TR>";

echo "</TABLE>";
?>
<?php 
$db_settings = get_dbsettings($target_root . $target_var);
?>
<FORM NAME="removeformproceed" METHOD="POST" STYLE="display: inline; margin: 0px; padding: 0px;" ACTION="./setup.php?target=<?php echo $target_var;?>&amp;set=<?php echo $set;?>&amp;act=verif&amp;step=1">

<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<?php if($set == 'remove' && ($version_check_error == '0' && ($version_compare_error == '0' && ($target_dir_error == '0' && is_array($db_settings))))) { ?>
<TR><TD CLASS="cnt" WIDTH="110" STYLE="text-align: right;"><B>&#160;</B></TD>
<TD CLASS="cnt">
<INPUT TYPE="hidden" NAME="set_dbtype" VALUE="<?php echo $db_settings['dbtype'];?>">
<INPUT TYPE="hidden" NAME="set_dbport" VALUE="<?php echo $db_settings['dbport'];?>">
<INPUT TYPE="hidden" NAME="set_dbhost" VALUE="<?php echo $db_settings['dbhost'];?>">
<INPUT TYPE="hidden" NAME="set_dbuser" VALUE="<?php echo $db_settings['dbuser'];?>">
<INPUT TYPE="hidden" NAME="set_dbpass" VALUE="<?php echo $db_settings['dbpass'];?>">
<INPUT TYPE="hidden" NAME="set_dbname" VALUE="<?php echo $db_settings['dbname'];?>">
<INPUT TYPE="hidden" NAME="set_pre" VALUE="<?php echo $db_settings['ubwspre'];?>">
</TD></TR>

<TR><TD CLASS="cnt" WIDTH="110" STYLE="text-align: right;">
<INPUT CLASS="general" TYPE="checkbox" NAME="remove_db_data"<?php if(isset($_SESSION['ubwset_cfg_remove_db_data']) && $_SESSION['ubwset_cfg_remove_db_data'] == 'on') {echo ' CHECKED';}?>>
</TD>
<TD CLASS="cnt">
Remove Database Data
</TD></TR>

<TR><TD CLASS="cnt" WIDTH="110" STYLE="text-align: right;">
<INPUT CLASS="general" TYPE="checkbox" NAME="remove_db_tables"<?php if(isset($_SESSION['ubwset_cfg_remove_db_tables']) && $_SESSION['ubwset_cfg_remove_db_tables'] == 'on') {echo ' CHECKED';}?>>
</TD>
<TD CLASS="cnt">
Remove Database Tables
</TD></TR>

<TR><TD CLASS="cnt" WIDTH="110" STYLE="text-align: right;">
<INPUT CLASS="general" TYPE="checkbox" NAME="remove_files"<?php if(isset($_SESSION['ubwset_cfg_remove_files']) && $_SESSION['ubwset_cfg_remove_files'] == 'on') {echo ' CHECKED';}?>>
</TD>
<TD CLASS="cnt">
Remove Files
</TD></TR>

<TR><TD CLASS="cnt" WIDTH="110" STYLE="text-align: right;"><B>&#160;</B></TD>
<TD CLASS="cnt">
  <BR>
  <TABLE BORDER="0" CELLPADDING="0" CELLSPACING="0"><TR>
  <TD>
  <INPUT TYPE="submit" CLASS="button" STYLE="background-color: #CCCCCC" NAME="proceed" VALUE="proceed">
  </TD>
  </TR></TABLE>
</TD></TR>
<?php } ?>
</TABLE>
</FORM>

<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="110" STYLE="text-align: right">&#160;</TD>
<TD CLASS="cnt">
  <TABLE BORDER="0" CELLPADDING="0" CELLSPACING="0"><TR>
  <TD>
  <FORM NAME="verifformabort" METHOD="POST" STYLE="display: inline; margin: 0px; padding: 0px;" ACTION="./setup.php">
  <INPUT TYPE="submit" CLASS="button" STYLE="background-color: #BBBBBB" NAME="abort" VALUE="abort">
  </FORM>
  </TD>
  </TR></TABLE>
</TD></TR></TABLE>