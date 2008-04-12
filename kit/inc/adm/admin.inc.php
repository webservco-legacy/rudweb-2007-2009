<?php
/*
./inc/adm/admin.inc.php
17:04 2008-04-07
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once './../../lib/404.php';}

?>
<BR>
<TABLE BORDER="0" CELLPADDING="0" CELLSPACING="0" ALIGN="center">
<TR>
  <TD STYLE="background-color: <?php echo $rudweb_skin['BgColor']; ?>; text-align: center; margin: 20px; padding: 20px;">
    <?php genAdminMod();?>
  </TD>
</TR>
</TABLE>