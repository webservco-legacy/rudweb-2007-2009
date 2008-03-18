<?php
/*
./inc/mod/modtagsc.inc.php
20:40 2008-03-17
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once './../lib/404.php';}

function showCntTags($rudweb_mnu_id, $rudweb_req_page, $rudweb_cnt_type, $blog_content = "0") {
  global $rudweb_cnt_type;
  global $rudweb_this_content_level;
  global $rudweb_mnu_id;
  global $rudweb_ln;
  global $rudweb_theme;
  
  
  $rudweb_theme['tagsc']['hdr'];
  $rudweb_theme['tagsc']['pre'];
  $rudweb_theme['tagsc']['suf'];
  $rudweb_theme['tagsc']['sep'];
  $rudweb_theme['tagsc']['ftr'];
}
?>