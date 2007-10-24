<?php
/*
header.inc.php
16:47 21.10.2007
*/
if(!defined('_UBWS_PUBFIL')) {require_once '../../lib/404.php';}
?>
<?php require_once _UBWS_MOD_DIR . 'usermod.inc.php'; ?>
<?php require_once _UBWS_MOD_DIR . 'langmod.inc.php'; ?>
<?php createMenu('mm', 0); ?>
<HR>
<?php createMenu('mm', 1); ?>
<HR>
<?php createMenu('mm', 2); ?>
<HR>
<?php createMenu('mm', 3); ?>
<HR>
<?php createMenu('mm', 4); ?>
<HR>
<?php showContent(); ?>
<TABLE BORDER="1" WIDTH="200">
<TR><TD>
featured
</TD></TR>
</TABLE>
<BR CLEAR="both">