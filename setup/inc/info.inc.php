<?php
/*
./setup/inc/info.inc.php
13:20 2008-02-26
*/
 
echo "\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
echo "\n<TR><TD CLASS=\"total\" WIDTH=\"40\"><BR><B>Project:</B><BR></TD>";
echo "\n<TD CLASS=\"total\"><BR>";
if($pid == null) {
  echo "no project selected";
}
else {
  echo "<SPAN STYLE=\"font-weight: bold; font-size: 10px;\">".$target_name[$pid]."</SPAN>";
}  
echo "<BR></TD></TR>";
echo "</TABLE>";

echo "\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";

echo "\n<TR><TD CLASS=\"cnt\" WIDTH=\"40\" STYLE=\"text-align: right\"><B>setup:</B></TD>";
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
