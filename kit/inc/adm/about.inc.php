<?php
/*
./inc/adm/about.inc.php
12:02 2008-05-26
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once './../../lib/404.php';}
if($_SESSION[_RUDWEB_PRE.'usr_level'] >= 0) {
  echo $rudweb_skin['cnt']['tt1']['pre'];
  echo _RUDWEB_WSTT. ' - ' . $rudweb_ln['about'];
  echo $rudweb_skin['cnt']['tt1']['suf'];
  
  echo $rudweb_skin['cnt']['txt']['pre'];
?>
<?php
function about_li($name, $value) {
  echo '';
}
?>
<UL>
  <LI>Site
    <UL>
      <LI>Title:</LI>
      <LI>Description:</LI>
      <LI><DIV STYLE="width: 100px; background-color: #ffff11; float: left; clear: none; text-align: right;">Start Date:&#160;</DIV><DIV STYLE="background-color: #cccccc">2008-05-26</DIV></LI>
      <LI>URL:</LI>
    </UL>
  </LI>
  
  <LI>Client
    <UL>
      <LI>Company:</LI>
      <LI>Contact Person:</LI>
    </UL>
  </LI>
  
  <LI>Developer
    <UL>
      <LI>Company:</LI>
      <LI>Contact Person:</LI>
      <LI>Website:</LI>
    </UL>
  </LI>
  
    <LI>Engine
    <UL>
      <LI>Name:</LI>
      <LI>Version:</LI>
      <LI>Author:</LI>
      <LI>Website:</LI>
    </UL>
  </LI>
  
  <LI>Skin
    <UL>
      <LI>Name:</LI>
      <LI>Description:</LI>
      <LI>Version:</LI>
      <LI>Author:</LI>
    </UL>
  </LI>
  
  <LI>Language
    <UL>
      <LI>Local name:</LI>
      <LI>Translator:</LI>
      <LI>Charset:</LI>
    </UL>
  </LI>
  
</UL>
<?php  
  
  echo $rudweb_skin['cnt']['txt']['suf'];
} // if user has the rights
else {
  echo "<DIV CLASS=\"err\">" . $rudweb_ln['err']['1'] . "</DIV>";
} // else if user has no rights
?>