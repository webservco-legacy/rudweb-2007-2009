<?php
/*
./inc/adm/admin.inc.php
11:09 2008-05-22
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once './../../lib/404.php';}

?>
<DIV CLASS="title">
  <?php echo $rudweb_ln['adm']['adm'];?>
</DIV>
<DIV CLASS="adm_mod">
  <?php genAdminMod();?>
</DIV>
