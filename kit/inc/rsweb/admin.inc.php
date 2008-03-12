<?php
/*
./inc/rsweb/admin.inc.php
19:38 2007-12-14
*/
if(!defined('_RSWEB_PUBFIL')) {require_once './../../lib/404.php';}

?>
<BR>
<TABLE BORDER="0" CELLPADDING="0" CELLSPACING="0" ALIGN="center">
<TR>
  <TD STYLE="background-color: <?php echo $rsweb_theme['BgColor']; ?>; text-align: center; margin: 20px; padding: 20px;">
    <?php genUserMod();?>
  </TD>
</TR>
</TABLE>