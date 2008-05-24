<?php
/*
./skins/rudskin/layout.inc.php
09:34 2008-04-21
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once '../../lib/404.php';}
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
  <?php youAreHere(); ?>
  <?php showContent($rudweb_mnu_id, $rudweb_req_page, $rudweb_cnt_type); ?>
  </DIV>
  
  <DIV CLASS="header">
  <?php adminMenu(); ?>
  <?php //createMenu('adm', 0, 1); ?>
  <BR>
  <?php //createMenu('adm', 1, 1); ?>
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
<?php
// DEBUG
debugOutput("SESSION");
debugOutput("REQUEST");
debugOutput("GET");
debugOutput("POST");
debugOutput("FILES");
//debugOutput("SERVER");
//debugOutput("CONSTANTS");
//debugOutput("PHPINI");
?>
<?php pageLoadTime(); ?>
<?php //showLatestNews(); ?>
<?php //showAllTags(); ?>