<?php
/*
./inc/mod/modtagsc.inc.php
12:50 2008-04-05
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once './../lib/404.php';}

function showCntTags($rudweb_mnu_id, $rudweb_req_page, $rudweb_cnt_type, $blog_content = "0") {
  global $rudweb_cnt_type;
  global $rudweb_this_content_level;
  global $rudweb_mnu_id;
  global $rudweb_ln;
  global $rudweb_skin;
  
  
  $rudweb_skin['tagsc']['hdr'];
  $rudweb_skin['tagsc']['pre'];
  $rudweb_skin['tagsc']['suf'];
  $rudweb_skin['tagsc']['sep'];
  $rudweb_skin['tagsc']['ftr'];
}
?>