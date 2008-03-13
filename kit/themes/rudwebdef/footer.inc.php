<?php
/*
./themes/rudwebdef/footer.inc.php
17:52 2008-03-12
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