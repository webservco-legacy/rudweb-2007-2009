<?php
/*
./inc/adm/about.inc.php
11:23 2008-06-27
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once './../../lib/404.php';}
if($_SESSION[_RUDWEB_PRE.'usr_level'] >= 0) {
  echo $rudweb_skin['cnt']['tt1']['pre'];
  echo _RUDWEB_WSTT. ' - ' . $rudweb_ln['about'];
  echo $rudweb_skin['cnt']['tt1']['suf'];
  
  echo $rudweb_skin['cnt']['txt']['pre'];
?>
<A CLASS="default" REL="lightbox" HREF="<?php echo _RUDWEB_SITE_URL?>rudweb.php" TITLE="<?php echo $rudweb_ln['about']; ?>">
<IMG SRC="<?php echo _RUDWEB_SITE_URL?>rudweb.php" WIDTH="390" HEIGHT="390" TITLE="<?php echo $rudweb_ln['about']; ?>" ALT="<?php echo $rudweb_ln['about']; ?>">
</A>
<?php  
  
  echo $rudweb_skin['cnt']['txt']['suf'];
} // if user has the rights
else {
  echo "<DIV CLASS=\"err\">" . $rudweb_ln['err']['1'] . "</DIV>";
} // else if user has no rights
?>