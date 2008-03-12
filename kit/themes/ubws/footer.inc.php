<?php
/*
./themes/ubws/footer.inc.php
09:53 2008-01-21
*/
if(!defined('_UBWS_PUBFIL')) {require_once '../../lib/404.php';}
?>
<?php
// DEBUG
debugOutput("SESSION");
debugOutput("REQUEST");
debugOutput("GET");
debugOutput("POST");
debugOutput("FILES");
//debugOutput("SERVER");
//debugOutput("CONSTANTS");
//debugOutput("PHPINI");
?>
<?php pageLoadTime(); ?>