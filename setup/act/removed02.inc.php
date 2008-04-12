<?php
/*
./setup/act/removed02.inc.php
12:50 2008-04-05
*/
echo "\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
echo "\n<TR><TD CLASS=\"ttt\" WIDTH=\"200\"><B>Remove Database Tables</B></TD>";
echo "</TR></TABLE>";

if ($_SESSION['rudwebset_cfg_remove_db_tables'] == 'off') {
  echo "\n\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
  echo "\n<TR><TD CLASS=\"hdr\" WIDTH=\"200\"><B>option not selected</B></TD><TD CLASS=\"hdr\" COLSPAN=\"3\">&#160;</TD></TR>";
  echo "\n</TABLE>";
}
else {
  $sql_s = generate_removed02($eol);
  $sql_s = eregi_replace("rudweb_", $_SESSION['rudwebset_set_pre']."_", $sql_s);
  $sql_s = split_sql($sql_s, $sql_delimiter);
  $sql_t = count($sql_s);
  
  echo "\n\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
  echo "\n<TR><TD CLASS=\"hdr\" WIDTH=\"200\"><B>$sql_t queries</B></TD><TD CLASS=\"hdr\" COLSPAN=\"3\">&#160;</TD></TR>";
  rudweb_dbopen($_SESSION['rudwebset_set_dbtype'], $_SESSION['rudwebset_set_dbhost'], $_SESSION['rudwebset_set_dbport'], $_SESSION['rudwebset_set_dbuser'], $_SESSION['rudwebset_set_dbpass'], $_SESSION['rudwebset_set_dbname']);
  $dbs_err = '0';
  for($di = 0; $di < $sql_t; $di++) {
    $dii = $di+1;
    echo "\n<TR CLASS=\"cnt\"><TD CLASS=\"act\">executing query</TD><TD CLASS=\"nam\">$dii</TD>";
    $query[$di]        = $sql_s[$di];
    echo "<TD CLASS=\"msg\">";
    $result[$di]       = rudweb_qres($_SESSION['rudwebset_set_dbtype'], $query[$di]);
    if($result[$di] === TRUE) {
      echo "ok</TD>";
      echo "<TD CLASS=\"rst_ok\">done</TD></TR>";
    }
    else {
      echo "$result[$di]</TD>";
      echo "<TD CLASS=\"rst_err\">error</TD></TR>";
      $dbs_err = '1';
    }
  
  }
  rudweb_dbclose($_SESSION['rudwebset_set_dbtype'], rudweb_dbopen($_SESSION['rudwebset_set_dbtype'], $_SESSION['rudwebset_set_dbhost'], $_SESSION['rudwebset_set_dbport'], $_SESSION['rudwebset_set_dbuser'], $_SESSION['rudwebset_set_dbpass'], $_SESSION['rudwebset_set_dbname']));
  echo "\n</TABLE>";
}
if ($dbs_err == '0') {
?>
<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="150" STYLE="text-align: right">&#160;</TD>
<TD CLASS="cnt">
  <TABLE BORDER="0" CELLPADDING="0" CELLSPACING="0"><TR>
  <TD>
  <FORM NAME="formnext" METHOD="POST" STYLE="display: inline; margin: 0px; padding: 0px;" ACTION="./setup.php?pid=<?php echo $pid;?>&amp;set=<?php echo $set;?>&amp;act=removefu&amp;step=1">
  <INPUT TYPE="submit" CLASS="button" STYLE="background-color: #CCCCCC" NAME="next" VALUE="next">
  </FORM>
  </TD>
  </TR></TABLE>
</TD></TR></TABLE>
<?php } ?>
<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="150" STYLE="text-align: right">&#160;</TD>
<TD CLASS="cnt">
  <TABLE BORDER="0" CELLPADDING="0" CELLSPACING="0"><TR>
  <TD>
  <FORM NAME="verifformback" METHOD="POST" STYLE="display: inline; margin: 0px; padding: 0px;" ACTION="./setup.php?pid=<?php echo $pid;?>&amp;set=<?php echo $set;?>&amp;act=removed&amp;step=1">
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