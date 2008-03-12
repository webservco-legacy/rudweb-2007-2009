<?php
/*
phpftp.inc.php
15:30 29.11.2007
*/
if(!defined('_RSWEB_PUBFIL')) {require_once './../lib/404.php';}

require_once _RSWEB_THEME_DIR . $_SESSION[_RSWEB_PRE.'usr_theme_dir'] . '/footer.print.inc.php';

// CLOSE DATABASE CONNECTION
dbclose(dbopen());

echo "\n\n</BODY>\n</HTML>";
?>