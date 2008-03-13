<?php
/*
./admin/index.php
13:37 2007-12-17
*/
define("_RUDWEB_PUBFIL", TRUE);
require_once './../inc/config.inc.php';
$admin_location = _RUDWEB_SITE_URL . "index.php/rudweb/admin";
header("Location: $admin_location");
?>