<?php
/*
./setup/act/engn.inc.php
15:04 2008-01-14
*/
echo "\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
echo "\n<TR><TD CLASS=\"total\" WIDTH=\"200\"><BR><B>Install Engine:</B><BR></TD>";
echo "</TR></TABLE>";

require_once "./act/engn0".$step."a.inc.php";
echo "\n\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
require_once "./act/engnact.inc.php";
require_once "./act/engn0".$step."b.inc.php";
echo "\n</TABLE>";
?>