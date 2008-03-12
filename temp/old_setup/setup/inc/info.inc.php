<?php
/*
./setup/inc/info.inc.php
11:40 2008-01-09
*/
echo "\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
echo "\n<TR><TD CLASS=\"total\" WIDTH=\"40\"><BR><B>Project:</B><BR></TD>";
echo "\n<TD CLASS=\"total\"><BR>";
if($target_var == null) {
  echo "no project selected";
}
else {
  echo "<SPAN STYLE=\"font-weight: bold; font-size: 10px;\">".$target_name."</SPAN>";
}  
echo "<BR></TD></TR>";
echo "</TABLE>";
echo "\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
echo "\n<TR><TD CLASS=\"cnt\" WIDTH=\"40\" STYLE=\"text-align: right\"><B>engine:</B></TD>";
echo "\n<TD CLASS=\"cnt\">";
if($cl_version['0'] == '0.0.000000') {
  echo " not installed";
}
else {
  echo $cl_version['1'] . " build ".$cl_version['3']." (".$version_age[2]." days old, released " . show_version_age($version_age[1]) . ")";
}
echo "</TD></TR>";

echo "\n<TR><TD CLASS=\"cnt\" STYLE=\"text-align: right\"><B>status:</B></TD>";
echo "\n<TD CLASS=\"cnt\">";
echo "<I>".show_compare_version($compare_version)."</I>";
echo "</TD></TR>";

echo "\n<TR><TD CLASS=\"cnt\" STYLE=\"text-align: right\"><B>setup:</B></TD>";
echo "\n<TD CLASS=\"cnt\">";
echo $set;
echo "</TD></TR>";

echo "\n<TR><TD CLASS=\"cnt\" STYLE=\"text-align: right\"><B>action:</B></TD>";
echo "\n<TD CLASS=\"cnt\">";
echo $act;
echo "</TD></TR>";

echo "\n<TR><TD CLASS=\"cnt\" STYLE=\"text-align: right\"><B>step:</B></TD>";
echo "\n<TD CLASS=\"cnt\">";
echo $step;
echo "</TD></TR>";

echo "\n</TABLE>";
?>
