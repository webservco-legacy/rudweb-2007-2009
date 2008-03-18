<?php
/*
phpft.inc.php
16:42 2008-03-18
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once './../lib/404.php';}

require_once _RUDWEB_THEME_DIR . $_SESSION[_RUDWEB_PRE.'usr_theme_dir'] . '/footer.inc.php';

// CLOSE DATABASE CONNECTION
//dbclose(dbopen());
rudweb_dbclose($rudweb_dbtype, rudweb_dbopen($rudweb_dbtype, $rudweb_dbhost, $rudweb_dbport, $rudweb_dbuser, $rudweb_dbpass, $rudweb_dbname));


echo "\n\n</BODY>\n</HTML>";
?>