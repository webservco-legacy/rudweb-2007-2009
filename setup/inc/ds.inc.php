<?php
/*
./setup/inc/ds.inc.php
12:50 2008-04-05
*/
echo "\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
if($dfs == "0" && $dts == "0") {
  echo  "\n<TR><TD CLASS=\"total\">\ntarget doesn't exist!";
}
else {
  echo  "\n<TR><TD CLASS=\"total\">" . $dfs . " / " . $dts . " MB available space</TD></TR>";
}
echo "\n</TABLE>";
?>
