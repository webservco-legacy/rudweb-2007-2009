<?php
/*
./skins/icskin/layouta.inc.php
16:33 2008-05-16
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once '../../lib/404.php';}
?>
<?php
/*
./skins/icskin/layout.inc.php
16:32 2008-05-16
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once '../../lib/404.php';}
?>
<DIV CLASS="layout">
  <!-- HEADER START -->
  <DIV CLASS="container">
    <DIV CLASS="h1">
    &#160;
    </DIV>
  </DIV>
  <DIV CLASS="container">
    <DIV CLASS="h2-1">
    <A HREF="#">
    <IMG SRC="<?php echo _RUDWEB_SKIN_URL . $_SESSION[_RUDWEB_PRE.'usr_skin_dir']?>/graphics/logo.gif" WIDTH="250" HEIGHT="80" ALT="<?php echo _RUDWEB_WSTT;?>" TITLE="<?php echo _RUDWEB_WSTT;?>">
    </A>
    </DIV>
    <DIV CLASS="h2-2">
      <DIV CLASS="lang1">
        <?php genUserMod();?>
      </DIV>
      <DIV CLASS="lang2">
      <?php genLangMod(); ?>
      </DIV>
    </DIV>
  </DIV>
  
  <DIV CLASS="container">
    <DIV CLASS="h3">
    &#160;
    </DIV>
  </DIV>
  <!-- HEADER END -->
  
  <!-- CONTENT START -->
  <DIV CLASS="container">
    <DIV CLASS="c1">
      <DIV CLASS="feat">
      <?php adminMenu(); ?>
      </DIV>
      <DIV CLASS="m1">
        <?php createMenu('mm', 0, 1); ?>
        <?php createMenu('mm', 1, 1); ?>
      </DIV>
      <DIV CLASS="cntop">
        &#160;
      </DIV>
      <DIV CLASS="cnt">
      <DIV CLASS="title">
        <?php echo $rudweb_ln['adm']['adm'];?>
      </DIV>
      <?php showContent($rudweb_mnu_id, $rudweb_req_page, $rudweb_cnt_type); ?>
      </DIV>
    </DIV>
  </DIV>
  <!-- CONTENT END -->

  <!-- FOOTER START -->
  <DIV CLASS="container">
    <DIV CLASS="cbottom">      
        &#160;
    </DIV>
  </DIV>

  <DIV CLASS="container">
    <DIV CLASS="ftr">      
        <?php genCopyright(); ?>
    </DIV>
  </DIV>  
  <!-- FOOTER END -->

</DIV>