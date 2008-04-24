<?php
/*
./inc/mod/modtagsc.inc.php
12:50 2008-04-05
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once './../lib/404.php';}

function showCntTags($rudweb_mnu_id, $rudweb_req_page, $rudweb_cnt_type, $et, $blog_content = "0") {
  global $rudweb_ln;
  global $rudweb_skin;
  
  $te = count($et);
  
  if ($te != 0) {
    echo $rudweb_skin['tagsc']['hdr'];
    echo '<B>'.$rudweb_ln['cnt']['tags'].'</B>:&#160;';
    for($i=1;$i<=$te;$i++) {
      echo $rudweb_skin['tagsc']['pre'];
      restrictedLocalLink('default', $et[$i], 'index.php/tag/'.$et[$i], $_SESSION[_RUDWEB_PRE.'usr_level'], 0, $rudweb_ln['WinStatOver'], $rudweb_ln['WinStatOut'], '_self');
      echo $rudweb_skin['tagsc']['suf'];
      if ($i != $te) {echo ', ';}
    }
    echo $rudweb_skin['tagsc']['ftr'];
  }
}
function showTagsContent($tag_name) {
  global $rudweb_dbtype;
  global $rudweb_ln;
  global $rudweb_skin;
  
  $qc = "SELECT DISTINCT r.cnt_id as cnt_id, m.mnu_id AS mnu_id, c.cnt_alias AS cnt_alias, m.mnu_typ AS mnu_typ,";
  $qc .= " c.cnt_crd AS cnt_crd, c.cnt_crt AS cnt_crt, c.cnt_cru AS cnt_cru, c.cnt_mdd AS cnt_mdd, c.cnt_mdt AS cnt_mdt, c.cnt_mdu AS cnt_mdu";
  $qc .= " FROM "._RUDWEB_PRE."ws_rel As r ";
  $qc .= " LEFT JOIN "._RUDWEB_PRE."ws_tags as t ON (r.tag_id = t.tag_id)";
  $qc .= " LEFT JOIN "._RUDWEB_PRE."ws_cnt as c ON (r.cnt_id = c.cnt_id)";
  $qc .= " LEFT JOIN "._RUDWEB_PRE."ws_mnu as m ON (c.cnt_alias = m.mnu_cnt_alias)";
  $qc .= " WHERE t.tag_name = '".$tag_name."' AND c.cnt_ln = '".$_SESSION[_RUDWEB_PRE.'usr_lang_index']."'";
  $qc .= " ORDER BY c.cnt_mdd DESC, c.cnt_mdt DESC, c.cnt_crd DESC, c.cnt_crt DESC";
  $rsc = rudweb_qres($rudweb_dbtype, $qc);
  $t_c  = rudweb_qtotal($rudweb_dbtype, $rsc);
  
  if($t_c != 0) {
    echo $rudweb_skin['blg']['hdr'];
    for($i=1;$i<=$t_c;$i++) {
      $rc = rudweb_fetch_assoc($rudweb_dbtype, $rsc);
      echo $rudweb_skin['blg']['pre'];
      showContent($rc['mnu_id'], $rc['cnt_alias'], $rc['mnu_typ'], 1);
      echo $rudweb_skin['blg']['suf'];
        
        if (_RUDWEB_CFG_BLG_POSTED === "1") {
          $qp = "SELECT usr_nick_name FROM "._RUDWEB_PRE."set_usr WHERE usr_id = '".$rc['cnt_cru']."' LIMIT 1";
          $rp = rudweb_qres($rudweb_dbtype, $qp);
          $poster_alias = rudweb_result($rudweb_dbtype, $rp, 0);
          echo $rudweb_skin['blg']['posted']['pre'];
          echo $rudweb_ln['blg']['postedby'] . $poster_alias . $rudweb_ln['blg']['on'] . MyDate($rc['cnt_crd'], 'dd/mm/yyyy') . " " . $rc['cnt_crt'];
          if ($rc['cnt_mdd'] != '0000-00-00') {
            $qm = "SELECT usr_nick_name FROM "._RUDWEB_PRE."set_usr WHERE usr_id = '".$rc['cnt_mdu']."' LIMIT 1";
            $rm = rudweb_qres($rudweb_dbtype, $qm);
            $mod_alias  = rudweb_result($rudweb_dbtype, $rm, 0);
            echo '. ';
            echo $rudweb_ln['blg']['lastmod'] . $mod_alias . $rudweb_ln['blg']['on'] . MyDate($rc['cnt_mdd'], 'dd/mm/yyyy') . " " . $rc['cnt_mdt'];
          }
          echo $rudweb_skin['blg']['posted']['suf'];
        }
    }
    echo $rudweb_skin['blg']['ftr'];
  }
}
function showAllTags() {
  global $rudweb_dbtype;
  global $rudweb_ln;
  global $rudweb_skin;
  
  // query all tags
  
  // if there are any, show them (with links!)
  if() {
    echo $rudweb_skin['tagsc']['hdr'];
    
    echo $rudweb_skin['tagsc']['ftr'];
  }
}
?>