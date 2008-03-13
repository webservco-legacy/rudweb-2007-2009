<?php
/*
./setup/inc/rudweb.inc.php
15:49 2008-03-12
*/
echo "\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
echo "\n<TR><TD CLASS=\"hdr\" WIDTH=\"150\" STYLE=\"font-size: 11px; font-weight: bold\"><A CLASS=\"rudweb\" HREF=\"./setup.php\">"._RUDWEB_NAME." setup</A></TD><TD CLASS=\"hdr\">&#160;</TD><TD CLASS=\"hdr\">&#160;</TD></TR>";
echo "\n<TR><TD CLASS=\"hdr\" WIDTH=\"150\"STYLE=\"font-size: 10px; font-weight: bold\">version ".$ub_version['1'].".".$ub_version['2']." build ".$ub_version['4']."</TD><TD CLASS=\"hdr\" STYLE=\"font-size: 10px\">(released ".show_version_age($version_age[0]).")</TD><TD CLASS=\"hdr\">&#160;</TD></TR>";
echo "\n</TABLE>";
?>
