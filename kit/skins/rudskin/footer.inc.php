<?php
/*
./skins/rudskin/footer.inc.php
12:50 2008-04-05
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once '../../lib/404.php';}
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