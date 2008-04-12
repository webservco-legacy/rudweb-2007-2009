<?php
/*
phpfta.inc.php
14:34 2008-04-07
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once './../lib/404.php';}

require_once _RUDWEB_SKIN_DIR . $_SESSION[_RUDWEB_PRE.'usr_skin_dir'] . '/footera.inc.php';

// CLOSE DATABASE CONNECTION
//dbclose(dbopen());
rudweb_dbclose($rudweb_dbtype, rudweb_dbopen($rudweb_dbtype, $rudweb_dbhost, $rudweb_dbport, $rudweb_dbuser, $rudweb_dbpass, $rudweb_dbname));


echo "\n\n</BODY>\n</HTML>";
?>