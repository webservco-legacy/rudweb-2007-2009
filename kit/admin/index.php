<?php
/*
./admin/index.php
17:04 2008-04-07
*/
define("_RUDWEB_PUBFIL", TRUE);
require_once './../inc/config.inc.php';
$admin_location = _RUDWEB_SITE_URL . _RUDWEB_INDEX_PHP . "admin/admin";
//$admin_location = _RUDWEB_SITE_URL . "admin.php";
header("Location: $admin_location");
?>