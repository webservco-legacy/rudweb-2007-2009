<?php
/*
./setup/act/removef01.inc.php
14:38 2008-01-23
*/
echo "\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
echo "\n<TR><TD CLASS=\"ttt\" WIDTH=\"200\"><B>Remove Files</B></TD>";
echo "</TR></TABLE>";

if ($_SESSION['ubwset_cfg_remove_files'] == 'off') {
  echo "\n\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
  echo "\n<TR><TD CLASS=\"hdr\" WIDTH=\"200\"><B>option not selected</B></TD><TD CLASS=\"hdr\" COLSPAN=\"3\">&#160;</TD></TR>";
  echo "\n</TABLE>";
}
else {
  echo "\n\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
  echo "\n<TR CLASS=\"cnt\"><TD CLASS=\"act\">deleting all files</TD><TD CLASS=\"nam\">&#160;</TD>";
  echo "<TD CLASS=\"msg\">";
  $delete_all_files = SureRemoveDir($target, true);
  if($delete_all_files) {
      echo "ok</TD>";
      echo "<TD CLASS=\"rst_ok\">done</TD></TR>";
    }
    else {
      echo "failed</TD>";
      echo "<TD CLASS=\"rst_err\">error</TD></TR>";
    }
  echo "\n</TABLE>";
}
?>
<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="150" STYLE="text-align: right">&#160;</TD>
<TD CLASS="cnt">
  <TABLE BORDER="0" CELLPADDING="0" CELLSPACING="0"><TR>
  <TD>
  <FORM NAME="formnext" METHOD="POST" STYLE="display: inline; margin: 0px; padding: 0px;" ACTION="./setup.php?target=<?php echo $target_var;?>&amp;set=<?php echo $set;?>&amp;act=finish&amp;step=1">
  <INPUT TYPE="submit" CLASS="button" STYLE="background-color: #CCCCCC" NAME="next" VALUE="next">
  </FORM>
  </TD>
  </TR></TABLE>
</TD></TR></TABLE>
<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="150" STYLE="text-align: right">&#160;</TD>
<TD CLASS="cnt">
  <TABLE BORDER="0" CELLPADDING="0" CELLSPACING="0"><TR>
  <TD>
  <FORM NAME="verifformback" METHOD="POST" STYLE="display: inline; margin: 0px; padding: 0px;" ACTION="./setup.php?target=<?php echo $target_var;?>&amp;set=<?php echo $set;?>&amp;act=removed&amp;step=2">
  <INPUT TYPE="submit" CLASS="button" STYLE="background-color: #CCCCCC" NAME="back" VALUE="back">
  </FORM>
  </TD>
  </TR></TABLE>
</TD></TR></TABLE>

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