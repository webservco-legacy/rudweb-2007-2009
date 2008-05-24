<?php
/*
./inc/admcat.inc.php
10:44 2008-05-02
*/
if(isValidInt($new_ipg)) {
  changedbcfg("CAT_IPG", $new_ipg, $action_date, $action_time);
  $redirect = _RUDWEB_SITE_URL . _RUDWEB_INDEX_PHP . 'admin/catmod/act/ipg';
}
?>