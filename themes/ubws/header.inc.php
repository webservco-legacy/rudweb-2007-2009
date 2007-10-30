<?php
/*
header.inc.php
13:20 28.10.2007
*/
if(!defined('_UBWS_PUBFIL')) {require_once '../../lib/404.php';}
?>
<?php require_once _UBWS_MOD_DIR . 'usermod.inc.php'; ?>
<?php require_once _UBWS_MOD_DIR . 'langmod.inc.php'; ?>
<?php createMenu('mm', 0); ?>
<BR>
<?php createMenu('mm', 1); ?>
<BR>
<?php createMenu('mm', 2); ?>
<BR>
<?php createMenu('mm', 3); ?>
<BR>
<?php createMenu('mm', 4); ?>
<BR>
<TABLE BORDER="0" CELLSPACING="0" CELLPADDING="0">
<TR>
  <TD STYLE="vertical-align: top;"><?php showContentPics(); ?></TD>
  <TD STYLE="vertical-align: top;"><?php showContent(); ?></TD>
  <TD STYLE="vertical-align: top;"><?php showFeatured(); ?></TD>
</TR>
</TABLE>

