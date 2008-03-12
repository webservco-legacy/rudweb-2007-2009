<?php
/*
./setup/act/dbs02.inc.php
10:32 2008-01-21
*/
echo "\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
echo "\n<TR><TD CLASS=\"ttt\" WIDTH=\"200\"><B>Create Tables</B></TD>";
echo "</TR></TABLE>";
?>
<?php
$sql_s_file = $source_root . 'setup/cfg/' . $sql_file_name;
$sql_s = file_get_contents($sql_s_file);
$sql_s = eregi_replace("rsweb_", $_SESSION['rswebset_set_pre']."_", $sql_s);
if($_SESSION['rswebset_set_dbmy'] <= '40') {$myisam_str = 'TYPE=MyISAM';}
else {$myisam_str = 'ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci';}
$sql_s = eregi_replace("myisam_str", $myisam_str, $sql_s);
$sql_s = split_sql($sql_s, $sql_delimiter);
$sql_t = count($sql_s);
$tables_t = round($sql_t / 2);

$dbs_err = '0';

echo "\n\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
echo "\n<TR><TD CLASS=\"hdr\" WIDTH=\"200\"><B>$tables_t tables, $sql_t queries</B></TD><TD CLASS=\"hdr\" COLSPAN=\"3\">&#160;</TD></TR>";
rsweb_dbopen($_SESSION['rswebset_set_dbtype'], $_SESSION['rswebset_set_dbhost'], $_SESSION['rswebset_set_dbport'], $_SESSION['rswebset_set_dbuser'], $_SESSION['rswebset_set_dbpass'], $_SESSION['rswebset_set_dbname']);
for($di = 0; $di < $sql_t; $di++) {
  $dii = $di+1;
  echo "\n<TR CLASS=\"cnt\"><TD CLASS=\"act\">executing query</TD><TD CLASS=\"nam\">$dii</TD>";
  $query[$di]        = $sql_s[$di];
  echo "<TD CLASS=\"msg\">";
  $result[$di]       = rsweb_qres($_SESSION['rswebset_set_dbtype'], $query[$di]);
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
rsweb_dbclose($_SESSION['rswebset_set_dbtype'], rsweb_dbopen($_SESSION['rswebset_set_dbtype'], $_SESSION['rswebset_set_dbhost'], $_SESSION['rswebset_set_dbport'], $_SESSION['rswebset_set_dbuser'], $_SESSION['rswebset_set_dbpass'], $_SESSION['rswebset_set_dbname']));
echo "\n</TABLE>";
?>
<?php
if ($dbs_err == '0') {
?>
<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="150" STYLE="text-align: right">&#160;</TD>
<TD CLASS="cnt">
  <TABLE BORDER="0" CELLPADDING="0" CELLSPACING="0"><TR>
  <TD>
  <FORM NAME="formnext" METHOD="POST" STYLE="display: inline; margin: 0px; padding: 0px;" ACTION="./setup.php?pid=<?php echo $pid;?>&amp;set=<?php echo $set;?>&amp;act=dbs&amp;step=3">
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
  <FORM NAME="verifformback" METHOD="POST" STYLE="display: inline; margin: 0px; padding: 0px;" ACTION="./setup.php?pid=<?php echo $pid;?>&amp;set=<?php echo $set;?>&amp;act=dbs&amp;step=1">
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