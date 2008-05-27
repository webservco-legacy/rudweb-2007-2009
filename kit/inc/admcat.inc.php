<?php
/*
./inc/admcat.inc.php
16:58 2008-05-27
*/
if($_SESSION[_RUDWEB_PRE.'usr_level'] >= 5 && $new_onoff !== "") {
  changedbcfg("CAT", $new_onoff, $action_date, $action_time);
  $redirect = _RUDWEB_SITE_URL . _RUDWEB_INDEX_PHP . 'admin/catmoda';
}
if(isValidInt($new_ipg)) {
  changedbcfg("CAT_IPG", $new_ipg, $action_date, $action_time);
  $redirect = _RUDWEB_SITE_URL . _RUDWEB_INDEX_PHP . 'admin/catmod/act/set';
}
if(isValidInt($new_pcs)) {
  changedbcfg("CAT_PCS", $new_pcs, $action_date, $action_time);
  $redirect = _RUDWEB_SITE_URL . _RUDWEB_INDEX_PHP . 'admin/catmod/act/set';
}
?>