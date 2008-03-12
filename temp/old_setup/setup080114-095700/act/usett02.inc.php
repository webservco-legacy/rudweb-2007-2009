<FORM NAME="usettform2" METHOD="POST" STYLE="display: inline; margin: 0px; padding: 0px;" ACTION="./setup.php?target=<?php echo $target_var;?>&amp;set=<?php echo $set;?>&amp;act=usett&amp;step=3">
<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR>
<TD CLASS="hdr"><B>Website Settings:</B></TD></TR>
</TABLE>

<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="200" STYLE="text-align: right">start date:</TD>
<TD CLASS="cnt">
<INPUT TYPE="text" CLASS="general" NAME="cfg_start" SIZE="12" MAXLENGTH="10" VALUE="<?php echo $_SESSION['ubwset_cfg_start'];?>">
</TD></TR></TABLE>

<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="200" STYLE="text-align: right">client company:</TD>
<TD CLASS="cnt">
<INPUT TYPE="text" CLASS="general" NAME="cfg_clcom" SIZE="50" MAXLENGTH="150" VALUE="<?php echo $_SESSION['ubwset_cfg_clcom'];?>">
</TD></TR></TABLE>

<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="200" STYLE="text-align: right">client contact :</TD>
<TD CLASS="cnt">
<INPUT TYPE="text" CLASS="general" NAME="cfg_clnam" SIZE="50" MAXLENGTH="150" VALUE="<?php echo $_SESSION['ubwset_cfg_clnam'];?>">
</TD></TR></TABLE>

<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="200" STYLE="text-align: right">developer company:</TD>
<TD CLASS="cnt">
<INPUT TYPE="text" CLASS="general" NAME="cfg_dvcom" SIZE="50" MAXLENGTH="150" VALUE="<?php echo $_SESSION['ubwset_cfg_dvcom'];?>">
</TD></TR></TABLE>

<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="200" STYLE="text-align: right">developer URL:</TD>
<TD CLASS="cnt">
<INPUT TYPE="text" CLASS="general" NAME="cfg_dvurl" SIZE="50" MAXLENGTH="150" VALUE="<?php echo $_SESSION['ubwset_cfg_dvurl'];?>">
</TD></TR></TABLE>

<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="200" STYLE="text-align: right">developer contact person:</TD>
<TD CLASS="cnt">
<INPUT TYPE="text" CLASS="general" NAME="cfg_dvnam" SIZE="50" MAXLENGTH="150" VALUE="<?php echo $_SESSION['ubwset_cfg_dvnam'];?>">
</TD></TR></TABLE>

<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR>
<TD CLASS="hdr"><B>Website Settings (meta):</B></TD></TR>
</TABLE>

<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="200" STYLE="text-align: right">website designer:</TD>
<TD CLASS="cnt">
<INPUT TYPE="text" CLASS="general" NAME="cfg_desig" SIZE="50" MAXLENGTH="150" VALUE="<?php echo $_SESSION['ubwset_cfg_desig'];?>">
</TD></TR></TABLE>

<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="200" STYLE="text-align: right">website publisher:</TD>
<TD CLASS="cnt">
<INPUT TYPE="text" CLASS="general" NAME="cfg_publ" SIZE="50" MAXLENGTH="150" VALUE="<?php echo $_SESSION['ubwset_cfg_publ'];?>">
</TD></TR></TABLE>

<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="200" STYLE="text-align: right">website rating:</TD>
<TD CLASS="cnt">
<SELECT CLASS="general" NAME="cfg_ratng">
  <OPTION VALUE="14 yrs" <?php if ($_SESSION['ubwset_cfg_ratng'] == "14 yrs") {echo " SELECTED";}?>>14 yrs</OPTION>
  <OPTION VALUE="General" <?php if ($_SESSION['ubwset_cfg_ratng'] == "General") {echo " SELECTED";}?>>General</OPTION>
  <OPTION VALUE="Mature" <?php if ($_SESSION['ubwset_cfg_ratng'] == "Mature") {echo " SELECTED";}?>>Mature</OPTION>
  <OPTION VALUE="Restricted" <?php if ($_SESSION['ubwset_cfg_ratng'] == "Restricted") {echo " SELECTED";}?>>Restricted</OPTION>
  <OPTION VALUE="Safe for kids" <?php if ($_SESSION['ubwset_cfg_ratng'] == "Safe for kids") {echo " SELECTED";}?>>Safe for kids</OPTION>
</SELECT>
</TD></TR></TABLE>

<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="200" STYLE="text-align: right">website distribution:</TD>
<TD CLASS="cnt">
<SELECT CLASS="general" NAME="cfg_distr">
  <OPTION VALUE="Global" <?php if ($_SESSION['ubwset_cfg_distr'] == "Global") {echo " SELECTED";}?>>Global</OPTION>
  <OPTION VALUE="Local" <?php if ($_SESSION['ubwset_cfg_distr'] == "Local") {echo " SELECTED";}?>>Local</OPTION>
  <OPTION VALUE="Internal use" <?php if ($_SESSION['ubwset_cfg_distr'] == "Internal use") {echo " SELECTED";}?>>Internal use</OPTION>
</SELECT>
</TD></TR></TABLE>

<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="200" STYLE="text-align: right">website robots:</TD>
<TD CLASS="cnt">
<SELECT CLASS="general" NAME="cfg_robots">
  <OPTION VALUE="Index" <?php if ($_SESSION['ubwset_cfg_robots'] == "Index") {echo " SELECTED";}?>>Index</OPTION>
  <OPTION VALUE="Index, Follow" <?php if ($_SESSION['ubwset_cfg_robots'] == "Index, Follow") {echo " SELECTED";}?>>Index, Follow</OPTION>
  <OPTION VALUE="Index, NoFollow" <?php if ($_SESSION['ubwset_cfg_robots'] == "Index, NoFollow") {echo " SELECTED";}?>>Index, NoFollow</OPTION>
  <OPTION VALUE="NoIndex, Follow" <?php if ($_SESSION['ubwset_cfg_robots'] == "NoIndex, Follow") {echo " SELECTED";}?>>NoIndex, Follow</OPTION>
  <OPTION VALUE="NoIndex, NoFollow" <?php if ($_SESSION['ubwset_cfg_robots'] == "NoIndex, NoFollow") {echo " SELECTED";}?>>NoIndex, NoFollow</OPTION>
</SELECT>
</TD></TR></TABLE>

<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="200" STYLE="text-align: right">website pragma:</TD>
<TD CLASS="cnt">
<INPUT TYPE="text" CLASS="general" NAME="cfg_prag" SIZE="50" MAXLENGTH="150" VALUE="<?php echo $_SESSION['ubwset_cfg_prag'];?>">
</TD></TR></TABLE>

<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="200" STYLE="text-align: right">website expires:</TD>
<TD CLASS="cnt">
<INPUT TYPE="text" CLASS="general" NAME="cfg_exp" SIZE="50" MAXLENGTH="150" VALUE="<?php echo $_SESSION['ubwset_cfg_exp'];?>">
</TD></TR></TABLE>

<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="200" STYLE="text-align: right">website cache control:</TD>
<TD CLASS="cnt">
<INPUT TYPE="text" CLASS="general" NAME="cfg_cache" SIZE="50" MAXLENGTH="150" VALUE="<?php echo $_SESSION['ubwset_cfg_cache'];?>">
</TD></TR></TABLE>


<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR>
<TD CLASS="hdr"><B>Install Languages:</B></TD></TR>
</TABLE>

<?php
$langs = lsdir($source.'inc/langs/');
$langst = count($langs);
for($lni = 1; $lni <= $langst; $lni++) {
//echo $langs[$lni] . '-';
?>
<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="200" STYLE="text-align: right"><?php echo $langs[$lni];?></TD>
<TD CLASS="cnt">
<INPUT TYPE="checkbox" CLASS="general" NAME="set_cfg_ln[<?php echo $langs[$lni];?>]">
</TD></TR></TABLE>
<?php
}
?>

<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="200" STYLE="text-align: right">&#160;</TD>
<TD CLASS="cnt">
  <TABLE BORDER="0" CELLPADDING="0" CELLSPACING="0"><TR>
  <TD><INPUT TYPE="submit" CLASS="button" STYLE="background-color: #DDDDDD" NAME="next" VALUE="next"></TD>
  </TR></TABLE>
</TD></TR></TABLE>

</FORM>
<!-- -->

<!-- -->
<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="200" STYLE="text-align: right">&#160;</TD>
<TD CLASS="cnt">
  <TABLE BORDER="0" CELLPADDING="0" CELLSPACING="0"><TR>
  <TD>
  <FORM NAME="usettformback" METHOD="POST" STYLE="display: inline; margin: 0px; padding: 0px;" ACTION="./setup.php?target=<?php echo $target_var;?>&amp;set=<?php echo $set;?>&amp;act=usett&amp;step=1">
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
  <FORM NAME="usettformabort" METHOD="POST" STYLE="display: inline; margin: 0px; padding: 0px;" ACTION="./setup.php">
  <INPUT TYPE="submit" CLASS="button" STYLE="background-color: #BBBBBB" NAME="abort" VALUE="abort">
  </FORM>
  </TD>
  </TR></TABLE>
</TD></TR></TABLE>