<?php
/*
./setup/cfg/inst.inc.php
10:03 2008-01-14
*/
echo "<DIV CLASS=\"hdr\" STYLE=\"padding-top: 3px; padding-bottom: 3px; padding-left: 5px; padding-right: 3px;\"><B>";
echo "<A HREF=\"./setup.php?target=".$target_var."&amp;set=".$set."&amp;act=index&amp;step=1\" TARGET=\"_self\">Start</A>";
echo "</B></DIV>";
echo "<DIV CLASS=\"cnt\" STYLE=\"padding-top: 3px; padding-bottom: 3px; padding-left: 15px; padding-right: 3px;\"><B>";
echo "<SPAN CLASS=\"cnt\" STYLE=\"color: ";
if($act == 'index' && $step == '1') {echo "#aaaaaa";} else {echo "#333333";}
echo "\">Index</SPAN>";
echo "</B></DIV>";
echo "<DIV CLASS=\"hdr\" STYLE=\"padding-top: 3px; padding-bottom: 3px; padding-left: 5px; padding-right: 3px;\"><B>";
echo "<A HREF=\"./setup.php?target=".$target_var."&amp;set=".$set."&amp;act=verif&amp;step=1\" TARGET=\"_self\">Check Requirements</A>";
echo "</B></DIV>";
echo "<DIV CLASS=\"cnt\" STYLE=\"padding-top: 3px; padding-bottom: 3px; padding-left: 15px; padding-right: 3px;\"><B>";
echo "<SPAN CLASS=\"cnt\" STYLE=\"color: ";
if($act == 'verif' && $step == '1') {echo "#aaaaaa";} else {echo "#333333";}
echo "\">Database Settings</SPAN>";
echo "</B></DIV>";
echo "<DIV CLASS=\"cnt\" STYLE=\"padding-top: 3px; padding-bottom: 3px; padding-left: 15px; padding-right: 3px;\"><B>";
echo "<SPAN CLASS=\"cnt\" STYLE=\"color: ";
if($act == 'verif' && $step == '2') {echo "#aaaaaa";} else {echo "#333333";}
echo "\">Checking Requirements</SPAN>";
echo "</B></DIV>";
if($set == 'install' || $set == 'upgrade') {
echo "<DIV CLASS=\"hdr\" STYLE=\"padding-top: 3px; padding-bottom: 3px; padding-left: 5px; padding-right: 3px;\"><B>";
echo "<A HREF=\"./setup.php?target=".$target_var."&amp;set=".$set."&amp;act=engn&amp;step=1\" TARGET=\"_self\">Install Engine</A>";
echo "</B></DIV>";
echo "<DIV CLASS=\"cnt\" STYLE=\"padding-top: 3px; padding-bottom: 3px; padding-left: 15px; padding-right: 3px;\"><B>";
echo "<SPAN CLASS=\"cnt\" STYLE=\"color: ";
if($act == 'engn' && $step == '1') {echo "#aaaaaa";} else {echo "#333333";}
echo "\">Root</SPAN>";
echo "</B></DIV>";
echo "<DIV CLASS=\"cnt\" STYLE=\"padding-top: 3px; padding-bottom: 3px; padding-left: 15px; padding-right: 3px;\"><B>";
echo "<SPAN CLASS=\"cnt\" STYLE=\"color: ";
if($act == 'engn' && $step == '2') {echo "#aaaaaa";} else {echo "#333333";}
echo "\">Admin</SPAN>";
echo "</B></DIV>";
echo "<DIV CLASS=\"cnt\" STYLE=\"padding-top: 3px; padding-bottom: 3px; padding-left: 15px; padding-right: 3px;\"><B>";
echo "<SPAN CLASS=\"cnt\" STYLE=\"color: ";
if($act == 'engn' && $step == '3') {echo "#aaaaaa";} else {echo "#333333";}
echo "\">Includes</SPAN>";
echo "</B></DIV>";
echo "<DIV CLASS=\"cnt\" STYLE=\"padding-top: 3px; padding-bottom: 3px; padding-left: 15px; padding-right: 3px;\"><B>";
echo "<SPAN CLASS=\"cnt\" STYLE=\"color: ";
if($act == 'engn' && $step == '4') {echo "#aaaaaa";} else {echo "#333333";}
echo "\">Libraries</SPAN>";
echo "</B></DIV>";
echo "<DIV CLASS=\"cnt\" STYLE=\"padding-top: 3px; padding-bottom: 3px; padding-left: 15px; padding-right: 3px;\"><B>";
echo "<SPAN CLASS=\"cnt\" STYLE=\"color: ";
if($act == 'engn' && $step == '5') {echo "#aaaaaa";} else {echo "#333333";}
echo "\">Languages</SPAN>";
echo "</B></DIV>";
echo "<DIV CLASS=\"cnt\" STYLE=\"padding-top: 3px; padding-bottom: 3px; padding-left: 15px; padding-right: 3px;\"><B>";
echo "<SPAN CLASS=\"cnt\" STYLE=\"color: ";
if($act == 'engn' && $step == '6') {echo "#aaaaaa";} else {echo "#333333";}
echo "\">Themes</SPAN>";
echo "</B></DIV>";
echo "<DIV CLASS=\"cnt\" STYLE=\"padding-top: 3px; padding-bottom: 3px; padding-left: 15px; padding-right: 3px;\"><B>";
echo "<SPAN CLASS=\"cnt\" STYLE=\"color: ";
if($act == 'engn' && $step == '7') {echo "#aaaaaa";} else {echo "#333333";}
echo "\">Vars</SPAN>";
echo "</B></DIV>";

echo "<DIV CLASS=\"hdr\" STYLE=\"padding-top: 3px; padding-bottom: 3px; padding-left: 5px; padding-right: 3px;\"><B>";
echo "<A HREF=\"./setup.php?target=".$target_var."&amp;set=".$set."&amp;act=lngs&amp;step=1\" TARGET=\"_self\">Install Languages</A>";
echo "</B></DIV>";
echo "<DIV CLASS=\"cnt\" STYLE=\"padding-top: 3px; padding-bottom: 3px; padding-left: 15px; padding-right: 3px;\"><B>";
echo "<SPAN CLASS=\"cnt\" STYLE=\"color: ";
if($act == 'lngs' && $step == '1') {echo "#aaaaaa";} else {echo "#333333";}
echo "\">Select Languages</SPAN>";
echo "</B></DIV>";
echo "<DIV CLASS=\"cnt\" STYLE=\"padding-top: 3px; padding-bottom: 3px; padding-left: 15px; padding-right: 3px;\"><B>";
echo "<SPAN CLASS=\"cnt\" STYLE=\"color: ";
if($act == 'lngs' && $step == '2') {echo "#aaaaaa";} else {echo "#333333";}
echo "\">Install Languages</SPAN>";
echo "</B></DIV>";

echo "<DIV CLASS=\"hdr\" STYLE=\"padding-top: 3px; padding-bottom: 3px; padding-left: 5px; padding-right: 3px;\"><B>";
echo "<A HREF=\"./setup.php?target=".$target_var."&amp;set=".$set."&amp;act=thms&amp;step=1\" TARGET=\"_self\">Install Themes</A>";
echo "</B></DIV>";
echo "<DIV CLASS=\"cnt\" STYLE=\"padding-top: 3px; padding-bottom: 3px; padding-left: 15px; padding-right: 3px;\"><B>";
echo "<SPAN CLASS=\"cnt\" STYLE=\"color: ";
if($act == 'thms' && $step == '1') {echo "#aaaaaa";} else {echo "#333333";}
echo "\">Select Themes</SPAN>";
echo "</B></DIV>";
echo "<DIV CLASS=\"cnt\" STYLE=\"padding-top: 3px; padding-bottom: 3px; padding-left: 15px; padding-right: 3px;\"><B>";
echo "<SPAN CLASS=\"cnt\" STYLE=\"color: ";
if($act == 'thms' && $step == '2') {echo "#aaaaaa";} else {echo "#333333";}
echo "\">Install Themes</SPAN>";
echo "</B></DIV>";

echo "<DIV CLASS=\"hdr\" STYLE=\"padding-top: 3px; padding-bottom: 3px; padding-left: 5px; padding-right: 3px;\"><B>";
echo "<A HREF=\"./setup.php?target=".$target_var."&amp;set=".$set."&amp;act=usett&amp;step=1\" TARGET=\"_self\">Gather Settings</A>";
echo "</B></DIV>";
echo "<DIV CLASS=\"cnt\" STYLE=\"padding-top: 3px; padding-bottom: 3px; padding-left: 15px; padding-right: 3px;\"><B>";
echo "<SPAN CLASS=\"cnt\" STYLE=\"color: ";
if($act == 'usett' && $step == '1') {echo "#aaaaaa";} else {echo "#333333";}
echo "\">Engine Configuration</SPAN>";
echo "</B></DIV>";
echo "<DIV CLASS=\"cnt\" STYLE=\"padding-top: 3px; padding-bottom: 3px; padding-left: 15px; padding-right: 3px;\"><B>";
echo "<SPAN CLASS=\"cnt\" STYLE=\"color: ";
if($act == 'usett' && $step == '2') {echo "#aaaaaa";} else {echo "#333333";}
echo "\">Site Configuration</SPAN>";
echo "</B></DIV>";

echo "<DIV CLASS=\"hdr\" STYLE=\"padding-top: 3px; padding-bottom: 3px; padding-left: 5px; padding-right: 3px;\"><B>";
echo "<A HREF=\"./setup.php?target=".$target_var."&amp;set=".$set."&amp;act=cfgs&amp;step=1\" TARGET=\"_self\">Install Settings</A>";
echo "</B></DIV>";
echo "<DIV CLASS=\"cnt\" STYLE=\"padding-top: 3px; padding-bottom: 3px; padding-left: 15px; padding-right: 3px;\"><B>";
echo "<SPAN CLASS=\"cnt\" STYLE=\"color: ";
if($act == 'cfgs' && $step == '1') {echo "#aaaaaa";} else {echo "#333333";}
echo "\">Engine Configuration</SPAN>";
echo "</B></DIV>";
echo "<DIV CLASS=\"cnt\" STYLE=\"padding-top: 3px; padding-bottom: 3px; padding-left: 15px; padding-right: 3px;\"><B>";
echo "<SPAN CLASS=\"cnt\" STYLE=\"color: ";
if($act == 'cfgs' && $step == '2') {echo "#aaaaaa";} else {echo "#333333";}
echo "\">Site Configuration</SPAN>";
echo "</B></DIV>";

echo "<DIV CLASS=\"hdr\" STYLE=\"padding-top: 3px; padding-bottom: 3px; padding-left: 5px; padding-right: 3px;\"><B>";
echo "<A HREF=\"./setup.php?target=".$target_var."&amp;set=".$set."&amp;act=dbs&amp;step=1\" TARGET=\"_self\">Setup Database</A>";
echo "</B></DIV>";
echo "<DIV CLASS=\"cnt\" STYLE=\"padding-top: 3px; padding-bottom: 3px; padding-left: 15px; padding-right: 3px;\"><B>";
echo "<SPAN CLASS=\"cnt\" STYLE=\"color: ";
if($act == 'dbs' && $step == '1') {echo "#aaaaaa";} else {echo "#333333";}
echo "\">Database Options</SPAN>";
echo "</B></DIV>";
echo "<DIV CLASS=\"cnt\" STYLE=\"padding-top: 3px; padding-bottom: 3px; padding-left: 15px; padding-right: 3px;\"><B>";
echo "<SPAN CLASS=\"cnt\" STYLE=\"color: ";
if($act == 'dbs' && $step == '2') {echo "#aaaaaa";} else {echo "#333333";}
echo "\">Create Tables</SPAN>";
echo "</B></DIV>";
echo "<DIV CLASS=\"cnt\" STYLE=\"padding-top: 3px; padding-bottom: 3px; padding-left: 15px; padding-right: 3px;\"><B>";
echo "<SPAN CLASS=\"cnt\" STYLE=\"color: ";
if($act == 'dbs' && $step == '3') {echo "#aaaaaa";} else {echo "#333333";}
echo "\">Insert Default Data</SPAN>";
echo "</B></DIV>";
echo "<DIV CLASS=\"cnt\" STYLE=\"padding-top: 3px; padding-bottom: 3px; padding-left: 15px; padding-right: 3px;\"><B>";
echo "<SPAN CLASS=\"cnt\" STYLE=\"color: ";
if($act == 'dbs' && $step == '4') {echo "#aaaaaa";} else {echo "#333333";}
echo "\">Insert Example Data</SPAN>";
echo "</B></DIV>";
}
else if ($set == 'remove') {
  echo "<DIV CLASS=\"hdr\" STYLE=\"padding-top: 3px; padding-bottom: 3px; padding-left: 5px; padding-right: 3px;\"><B>";
  echo "<A HREF=\"./setup.php?target=".$target_var."&amp;set=".$set."&amp;act=removed&amp;step=1\" TARGET=\"_self\">Remove Data</A>";
  echo "</B></DIV>";
  echo "<DIV CLASS=\"cnt\" STYLE=\"padding-top: 3px; padding-bottom: 3px; padding-left: 15px; padding-right: 3px;\"><B>";
  echo "<SPAN CLASS=\"cnt\" STYLE=\"color: ";
  if($act == 'removed' && $step == '1') {echo "#aaaaaa";} else {echo "#333333";}
  echo "\">Remove Database Data</SPAN>";
  echo "</B></DIV>";
  echo "<DIV CLASS=\"cnt\" STYLE=\"padding-top: 3px; padding-bottom: 3px; padding-left: 15px; padding-right: 3px;\"><B>";
  echo "<SPAN CLASS=\"cnt\" STYLE=\"color: ";
  if($act == 'removed' && $step == '2') {echo "#aaaaaa";} else {echo "#333333";}
  echo "\">Remove Database Tables</SPAN>";
  echo "</B></DIV>";
  echo "<DIV CLASS=\"hdr\" STYLE=\"padding-top: 3px; padding-bottom: 3px; padding-left: 5px; padding-right: 3px;\"><B>";
  echo "<A HREF=\"./setup.php?target=".$target_var."&amp;set=".$set."&amp;act=removef&amp;step=1\" TARGET=\"_self\">Remove Files</A>";
  echo "</B></DIV>";
  echo "<DIV CLASS=\"cnt\" STYLE=\"padding-top: 3px; padding-bottom: 3px; padding-left: 15px; padding-right: 3px;\"><B>";
  echo "<SPAN CLASS=\"cnt\" STYLE=\"color: ";
  if($act == 'removef' && $step == '1') {echo "#aaaaaa";} else {echo "#333333";}
  echo "\">Remove Files</SPAN>";
  echo "</B></DIV>";
}
echo "<DIV CLASS=\"hdr\" STYLE=\"padding-top: 3px; padding-bottom: 3px; padding-left: 5px; padding-right: 3px;\"><B>";
echo "<A HREF=\"./setup.php?target=".$target_var."&amp;set=".$set."&amp;act=finish&amp;step=1\" TARGET=\"_self\">Finish</A>";
echo "</B></DIV>";
echo "<DIV CLASS=\"cnt\" STYLE=\"padding-top: 3px; padding-bottom: 3px; padding-left: 15px; padding-right: 3px;\"><B>";
echo "<SPAN CLASS=\"cnt\" STYLE=\"color: ";
if($act == 'finish' && $step == '1') {echo "#aaaaaa";} else {echo "#333333";}
echo "\">Finish</SPAN>";
echo "</B></DIV>";
?>