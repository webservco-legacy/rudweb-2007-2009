<?php
/*
./setup/act/removefu.inc.php
09:23 2008-01-25
*/
echo "\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
echo "\n<TR><TD CLASS=\"total\" WIDTH=\"200\"><BR><B>Remove User Files:</B><BR></TD>";
echo "</TR></TABLE>";

if ($_SESSION['rswebset_cfg_remove_user_files'] == 'off') {
  echo "\n\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
  echo "\n<TR><TD CLASS=\"hdr\" WIDTH=\"200\"><B>option not selected</B></TD><TD CLASS=\"hdr\" COLSPAN=\"3\">&#160;</TD></TR>";
  echo "\n</TABLE>";
}
else {

  require_once "./act/removefu0".$step.".inc.php";
}
?>