<?php
/*
phpft.inc.php
15:35 27.10.2007
*/
if(!defined('_UBWS_PUBFIL')) {require_once './../lib/404.php';}

require_once _UBWS_THEME_DIR . $_SESSION[_UBWS_PRE.'usr_theme_dir'] . '/footer.inc.php';

// OPEN DATABASE CONNECTION
dbclose(dbopen());

echo "\n\n</BODY>\n</HTML>";
?>