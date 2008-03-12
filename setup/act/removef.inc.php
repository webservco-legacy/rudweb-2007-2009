<?php
/*
./setup/act/removef.inc.php
14:38 2008-01-23
*/
echo "\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
echo "\n<TR><TD CLASS=\"total\" WIDTH=\"200\"><BR><B>Remove Engine Files:</B><BR></TD>";
echo "</TR></TABLE>";

if ($_SESSION['rswebset_cfg_remove_engine_files'] == 'off') {
  echo "\n\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
  echo "\n<TR><TD CLASS=\"hdr\" WIDTH=\"200\"><B>option not selected</B></TD><TD CLASS=\"hdr\" COLSPAN=\"3\">&#160;</TD></TR>";
  echo "\n</TABLE>";
}
else {

  require_once "./act/removef0".$step."a.inc.php";
  echo "\n\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
  require_once "./act/removefact.inc.php";
  require_once "./act/removef0".$step."b.inc.php";
  echo "\n</TABLE>";
}
?>