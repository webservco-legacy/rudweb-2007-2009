<?php
/*
./inc/adm/tags.inc.php
16:18 2008-04-29
*/

if(!defined('_RUDWEB_PUBFIL')) {require_once './../../lib/404.php';}
?>
<?php
if(isset($_GET['tag'])) {
  showTagsContent($rudweb_this_content);
}
else {
  echo "<DIV CLASS=\"err\">" . $rudweb_ln['err']['1'] . "</DIV>";
} // else if user has no rights
?>