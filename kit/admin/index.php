<?php
/*
./admin/index.php
13:37 2007-12-17
*/
define("_UBWS_PUBFIL", TRUE);
require_once './../inc/config.inc.php';
$admin_location = _UBWS_SITE_URL . "index.php/ubws/admin";
header("Location: $admin_location");
?>