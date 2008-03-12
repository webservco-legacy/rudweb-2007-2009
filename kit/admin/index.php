<?php
/*
./admin/index.php
13:37 2007-12-17
*/
define("_RSWEB_PUBFIL", TRUE);
require_once './../inc/config.inc.php';
$admin_location = _RSWEB_SITE_URL . "index.php/rsweb/admin";
header("Location: $admin_location");
?>