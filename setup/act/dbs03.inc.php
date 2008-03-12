<?php
/*
./setup/act/dbs03.inc.php
13:23 2008-01-21
*/
echo "\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
echo "\n<TR><TD CLASS=\"ttt\" WIDTH=\"200\"><B>Insert Default Data</B></TD>";
echo "</TR></TABLE>";

$dbs_err = '0';

if($_SESSION['ubwset_cfg_dbs_01'] == 'off') {
  echo "\n\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
  echo "\n<TR><TD CLASS=\"hdr\" WIDTH=\"200\"><B>option not selected</B></TD><TD CLASS=\"hdr\" COLSPAN=\"3\">&#160;</TD></TR>";
  echo "\n</TABLE>";
}
else {
$now_date_dbd = date("Y-m-d");
$now_time_dbd = date("H:i:s");
$sql_s = generate_dbd_str($eol);
$sql_s = eregi_replace("ubws_", $_SESSION['ubwset_set_pre']."_", $sql_s);
if($_SESSION['ubwset_set_dbmy'] <= '40') {$myisam_str = 'TYPE=MyISAM';}
else {$myisam_str = 'ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci';}
$sql_s = eregi_replace('VAL_CRD', $now_date_dbd, $sql_s);
$sql_s = eregi_replace('VAL_CRT', $now_time_dbd, $sql_s);
$sql_s = split_sql($sql_s, $sql_delimiter);
$sql_t = count($sql_s);

echo "\n\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
echo "\n<TR><TD CLASS=\"hdr\" WIDTH=\"200\"><B>$sql_t queries</B></TD><TD CLASS=\"hdr\" COLSPAN=\"3\">&#160;</TD></TR>";
ubws_dbopen($_SESSION['ubwset_set_dbtype'], $_SESSION['ubwset_set_dbhost'], $_SESSION['ubwset_set_dbport'], $_SESSION['ubwset_set_dbuser'], $_SESSION['ubwset_set_dbpass'], $_SESSION['ubwset_set_dbname']);
for($di = 0; $di < $sql_t; $di++) {
  $dii = $di+1;
  echo "\n<TR CLASS=\"cnt\"><TD CLASS=\"act\">executing query</TD><TD CLASS=\"nam\">$dii</TD>";
  $query[$di]        = $sql_s[$di];
  echo "<TD CLASS=\"msg\">";
  $result[$di]       = ubws_qres($_SESSION['ubwset_set_dbtype'], $query[$di]);
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
ubws_dbclose($_SESSION['ubwset_set_dbtype'], ubws_dbopen($_SESSION['ubwset_set_dbtype'], $_SESSION['ubwset_set_dbhost'], $_SESSION['ubwset_set_dbport'], $_SESSION['ubwset_set_dbuser'], $_SESSION['ubwset_set_dbpass'], $_SESSION['ubwset_set_dbname']));
echo "\n</TABLE>";
?>
<?php
}
if ($dbs_err == '0') {
?>
<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="150" STYLE="text-align: right">&#160;</TD>
<TD CLASS="cnt">
  <TABLE BORDER="0" CELLPADDING="0" CELLSPACING="0"><TR>
  <TD>
  <FORM NAME="formnext" METHOD="POST" STYLE="display: inline; margin: 0px; padding: 0px;" ACTION="./setup.php?pid=<?php echo $pid;?>&amp;set=<?php echo $set;?>&amp;act=dbs&amp;step=4">
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
  <FORM NAME="verifformback" METHOD="POST" STYLE="display: inline; margin: 0px; padding: 0px;" ACTION="./setup.php?pid=<?php echo $pid;?>&amp;set=<?php echo $set;?>&amp;act=dbs&amp;step=2">
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