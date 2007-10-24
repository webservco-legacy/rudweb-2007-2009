<?php
/*
index.php
16:47 21.10.2007
*/
define("_UBWS_PUBFIL", TRUE);
require_once './inc/config.inc.php';
require_once './inc/ubwsc.inc.php';
require_once _UBWS_INC_DIR . 'ubws.inc.php';
require_once _UBWS_INC_DIR . 'phphd.inc.php';
?>
<!-- DB CONTENT -->
<?php //restrictedLocalLink("default", "Link Title", "index.php", $_SESSION[_UBWS_PRE.'usr_level'], 0, $ubws_lnWinStatOver, $ubws_lnWinStatOut, "_self"); ?>
<BR>
<!-- //DB CONTENT -->
<?php
require_once _UBWS_INC_DIR . 'phpft.inc.php';
?>