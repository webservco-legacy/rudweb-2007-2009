<?php
/*
./inc/admnws.inc.php
16:49 2008-04-29
*/
if($new_onoff !== "") {
  changedbcfg("NWS", $new_onoff, $action_date, $action_time);
  $redirect = _RUDWEB_SITE_URL . 'admin.php/admin/nwsmod';
}
?>