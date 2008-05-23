<?php
/*
./inc/adm/cspmodforms.inc.php
16:24 2008-04-21
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once './../../lib/404.php';}

if(_RUDWEB_CFG_CNT_TAGS == 1) {
  $q_tg = "SELECT tag_id, tag_name AS tag FROM "._RUDWEB_PRE."ws_tags ORDER BY tag_name ASC";
  $r_tg = rudweb_qres($rudweb_dbtype, $q_tg);
  $t_tg = rudweb_qtotal($rudweb_dbtype, $r_tg);

  if($t_tg != 0) {
  ?>
  <?php echo $rudweb_skin['adm']['mod']['pre']; ?>
  <FORM ENCTYPE="multipart/form-data" NAME="tagsform" ACTION="" METHOD="post">
  <TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" ALIGN="center">
  <?php
    for ($tgi=1; $tgi<=$t_tg; $tgi++) {
      $rt = mysql_fetch_assoc($r_tg);
      $qc       = "SELECT COUNT(cnt_id) FROM "._RUDWEB_PRE."ws_rel WHERE tag_id = '".$rt['tag_id']."' LIMIT 1";
      $rc       = rudweb_qres($rudweb_dbtype, $qc);
      $tc[$tgi] = rudweb_result($rudweb_dbtype, $rc, 0);
      // query content ids for each tag
  ?>
  <TR>
    <TD>
      <?php restrictedLocalLink('default', $rt['tag']. ' (' . $tc[$tgi] . ')', _RUDWEB_INDEX_PHP . 'tag/'.$rt['tag'], $_SESSION[_RUDWEB_PRE.'usr_level'], 0, $rudweb_ln['WinStatOver'], $rudweb_ln['WinStatOut'], '_self'); ?>
    </TD>
    <TD>
      <?php if ($tc[$tgi] == 0) {
      echo '<INPUT CLASS="chk" TYPE="checkbox" NAME="tag_id['.$rt['tag_id'].']">'; } ?>
    </TD>
  </TR>
  <?php
    }
  ?>
  </TABLE>
  <BR><BR>
  <INPUT CLASS="formsubmit" TYPE="submit" NAME="tagmod" VALUE="<?php echo $rudweb_ln['csp']['deltags'];?>">
  </FORM>
  <FORM ENCTYPE="multipart/form-data" NAME="utagsform" ACTION="" METHOD="post">
  <INPUT TYPE="hidden" NAME="delutags" VALUE="1">
  <INPUT CLASS="formsubmit" TYPE="submit" NAME="tagmod" VALUE="<?php echo $rudweb_ln['csp']['delutags'];?>">
  </FORM>
  <?php echo $rudweb_skin['adm']['mod']['suf']; ?>
  <?php  
  }
}
?>