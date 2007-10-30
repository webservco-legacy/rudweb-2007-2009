<?php
/*
footer.inc.php
13:14 28.10.2007
*/
if(!defined('_UBWS_PUBFIL')) {require_once '../../lib/404.php';}
?>
<TABLE BORDER="0" CELLSPACING="0" CELLPADDING="0">
<TR>
  <TD><?php genCopyright(); ?></TD>
</TR>
</TABLE>
<?php
// DEBUG
debugOutput("SESSION");
debugOutput("REQUEST");
debugOutput("GET");
debugOutput("POST");
//debugOutput("FILES");
//debugOutput("SERVER");
//debugOutput("CONSTANTS");
//debugOutput("PHPINI");
?>
<?php pageLoadTime(); ?>