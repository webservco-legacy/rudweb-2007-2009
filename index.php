<?php
/*
index.php
13:44 29.09.2007
*/

define('_UBWS_PUBFIL', TRUE);
require_once './inc/config.inc.php';
require_once _UBWS_INC_DIR . 'ubws.inc.php';

require_once _UBWS_INC_DIR . 'phphd.inc.php';
?>
<!-- ACTUAL CONTENT -->
<?php require_once _UBWS_HTM_DIR . 'user.inc.php'; ?>
<?php require_once _UBWS_LIB_DIR . 'debug.php'; ?>
<!-- //ACTUAL CONTENT -->
<?php
require_once _UBWS_INC_DIR . 'phpft.inc.php';
?>