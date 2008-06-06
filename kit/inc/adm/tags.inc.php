<?php
/*
./inc/adm/tags.inc.php
15:04 2008-06-03
*/

if(!defined('_RUDWEB_PUBFIL')) {require_once './../../lib/404.php';}
?>
<?php
if(isset($_GET['tag'])) {
  $tag_name = rudweb_filter_input($_GET['tag']);
  showTagsContent($tag_name);
}
else {
  echo "<DIV CLASS=\"err\">" . $rudweb_ln['err']['1'] . "</DIV>";
} // else if user has no rights
?>