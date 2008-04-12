<?php
/*
./catalog/index.php
09:40 2008-04-09
*/
define("_RUDWEB_PUBFIL", TRUE);
require_once './../inc/config.inc.php';
$cat_location = _RUDWEB_SITE_URL . "index.php/catalog/main";
header("Location: $cat_location");
?>