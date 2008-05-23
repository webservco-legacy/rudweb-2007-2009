<?php
/*
./catalog/index.php
09:40 2008-04-09
*/
define("_RUDWEB_PUBFIL", TRUE);
require_once './../inc/config.inc.php';
$cat_location = _RUDWEB_SITE_URL . _RUDWEB_INDEX_PHP . "catalog/main";
header("Location: $cat_location");
?>