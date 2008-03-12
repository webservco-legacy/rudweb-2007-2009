<?php
/*
./themes/rswebdef/header.inc.php
17:53 2008-03-12
*/
if(!defined('_RSWEB_PUBFIL')) {require_once '../../lib/404.php';}
?>
<DIV ID="container">
  <DIV CLASS="header">
  <?php genUserMod();?>
  </DIV>
  <DIV CLASS="header">
  <?php genLangMod(); ?>
  </DIV>
  <DIV CLASS="header">
  <?php createMenu('mm', 0, 1); ?>
  </DIV>
  <DIV CLASS="header">
  <?php createMenu('mm', 1, 1); ?>
  </DIV>
  <DIV CLASS="header">
  <?php createMenu('mm', 2, 1); ?>
  </DIV>
  <DIV CLASS="header">
  <?php createMenu('mm', 3, 1); ?>
  </DIV>
  <DIV CLASS="header">
  <?php createMenu('mm', 4, 1); ?>
  </DIV>
  
  <DIV CLASS="header">
  <?php createMenu('adm', 0, 1); ?>
  <BR>
  <?php createMenu('adm', 1, 1); ?>
  </DIV>
  
  <DIV CLASS="header">
  <?php showProducts(); ?>
  <?php showCart(); ?>
  </DIV>
  
  <DIV ID="leftnav">
  <?php showContentPics(); ?>
  </DIV>
  
  <DIV ID="rightnav">
  <?php showFeatured(); ?>
  </DIV>
  <DIV ID="content">
  <?php showContent($rsweb_mnu_id, $rsweb_req_page, $rsweb_cnt_type); ?>
  </DIV>
  <DIV ID="footer">
    <?php genCopyright(); ?>
    <?php showStats(5, "unique"); ?>
    &#160;
    <?php showStats(5, "total"); ?>
    &#160;
    <?php showStats(5, "online"); ?>
  </DIV>
</DIV>