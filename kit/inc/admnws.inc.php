<?php
/*
./inc/admnws.inc.php
10:42 2008-05-26
*/
if($_SESSION[_RUDWEB_PRE.'usr_level'] >= 5 && $new_onoff !== "") {
  changedbcfg("NWS", $new_onoff, $action_date, $action_time);
  $redirect = _RUDWEB_SITE_URL . _RUDWEB_INDEX_PHP . 'admin/nwsmoda';
}
if(isValidInt($nws_lmt1)) {
  changedbcfg("NWS_LMT1", $nws_lmt1, $action_date, $action_time);
  $redirect = _RUDWEB_SITE_URL . _RUDWEB_INDEX_PHP . 'admin/nwsmod';
}
if(isValidInt($nws_lmt2)) {
  changedbcfg("NWS_LMT2", $nws_lmt2, $action_date, $action_time);
  $redirect = _RUDWEB_SITE_URL . _RUDWEB_INDEX_PHP . 'admin/nwsmod';
}
?>