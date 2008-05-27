<?php
/*
./inc/admtag.inc.php
10:43 2008-05-26
*/
if($_SESSION[_RUDWEB_PRE.'usr_level'] >= 5 && $new_onoff !== "") {
  changedbcfg("CNT_TAGS", $new_onoff, $action_date, $action_time);
  $redirect = _RUDWEB_SITE_URL . _RUDWEB_INDEX_PHP . 'admin/tagmoda';
}
if(isset($_POST['tag_id'])) {
  $query_lock = "LOCK TABLES "._RUDWEB_PRE."ws_tags WRITE";
  mysql_query($query_lock) or require _RUDWEB_LIB_DIR . 'myerr.php';
  foreach ($_POST['tag_id'] as $tag_id => $dump) {
    $dtq = "DELETE FROM "._RUDWEB_PRE."ws_tags WHERE tag_id = '".$tag_id."' LIMIT 1";
    mysql_query($dtq) or require _RUDWEB_LIB_DIR . 'myerr.php';
  }
  $query_unlock = "UNLOCK TABLES";
  mysql_query($query_unlock) or require _RUDWEB_LIB_DIR . 'myerr.php';
  $redirect = _RUDWEB_SITE_URL . _RUDWEB_INDEX_PHP . 'admin/tagmod/act/adm';
}
else if(isset($_POST['delutags'])) {
  $query_lock = "LOCK TABLES "._RUDWEB_PRE."ws_tags WRITE, "._RUDWEB_PRE."ws_rel WRITE";
  mysql_query($query_lock) or require _RUDWEB_LIB_DIR . 'myerr.php';
  
  $dtq = "DELETE FROM "._RUDWEB_PRE."ws_tags WHERE tag_id NOT IN (SELECT tag_id AS tid FROM "._RUDWEB_PRE."ws_rel)";
  mysql_query($dtq) or require _RUDWEB_LIB_DIR . 'myerr.php';
    
  $query_unlock = "UNLOCK TABLES";
  mysql_query($query_unlock) or require _RUDWEB_LIB_DIR . 'myerr.php';
  $redirect = _RUDWEB_SITE_URL . _RUDWEB_INDEX_PHP . 'admin/tagmod/act/adm';
}
?>