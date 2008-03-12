<?php
/*
./inc/phpfti.inc.php
16:36 2007-12-15
*/
if(!defined('_RSWEB_PUBFIL')) {require_once './../lib/404.php';}

require_once _RSWEB_THEME_DIR . $_SESSION[_RSWEB_PRE.'usr_theme_dir'] . '/footeri.inc.php';

// CLOSE DATABASE CONNECTION
dbclose(dbopen());

echo "\n\n</BODY>\n</HTML>";
?>