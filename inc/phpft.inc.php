<?php
/*
phpft.inc.php
09:14 21.10.2007
*/
if(!defined('_UBWS_PUBFIL')) {require_once './../lib/404.php';}

require_once _UBWS_THEME_DIR . $_SESSION[_UBWS_PRE.'usr_theme_dir'] . '/footer.inc.php';
require_once _UBWS_INC_DIR . 'dbclose.inc.php';
echo "<HR>Parse time: " . endTimer();
echo "\n\n</BODY>\n</HTML>";
?>