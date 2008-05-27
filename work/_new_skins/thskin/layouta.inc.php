<?php
/*
./skins/thskin/layouta.inc.php
13:28 2008-05-18
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once '../../lib/404.php';}
?>
<DIV CLASS="layout">
  <!-- HEADER START -->
  <DIV CLASS="container">
    <DIV CLASS="h1">
      &#160;
    </DIV>
    <DIV CLASS="h2">
      &#160;
    </DIV>
  </DIV>
  
  <DIV CLASS="container">  
    <DIV CLASS="h3-1">
      <DIV CLASS="logo">Thomas</DIV>
    </DIV>
    <DIV CLASS="h3-3">
        <?php createMenu('mm', 0, 1); ?>
    </DIV>
    <DIV CLASS="h3-2">
      &#160;
    </DIV>
  </DIV>
  
  <DIV CLASS="container">
    <DIV CLASS="h4">
      <?php createMenu('mm', 1, 1); ?>
    </DIV>
  </DIV>
  
  <DIV CLASS="container" STYLE="padding-bottom: 40px;">
    <DIV CLASS="cleft">
      <?php genUserMod();?>
      <?php adminMenu(); ?>
    </DIV>
    <DIV CLASS="cnt">
      <?php showContent($rudweb_mnu_id, $rudweb_req_page, $rudweb_cnt_type); ?>
    </DIV>
    
  </DIV>

  <DIV CLASS="footer">
      <?php genCopyright(); ?>
  </DIV>
  
</DIV>
