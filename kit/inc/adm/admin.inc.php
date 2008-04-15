<?php
/*
./inc/adm/admin.inc.php
10:30 2008-04-14
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once './../../lib/404.php';}

?>
      <DIV CLASS="title">
      <?php echo $rudweb_ln['adm']['adm'];?>
      </DIV>
      <BR>
      <TABLE BORDER="0" CELLPADDING="0" CELLSPACING="0" ALIGN="center">
      <TR>
        <TD STYLE="background-color: <?php echo $rudweb_skin['BgColor']; ?>; text-align: center; margin: 20px; padding: 20px;">
          <?php genAdminMod();?>
        </TD>
      </TR>
      </TABLE>