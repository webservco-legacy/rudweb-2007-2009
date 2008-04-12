<?php
/*
./inc/mod/modcat.inc.php
19:03 2008-04-12
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once './../lib/404.php';}

function catYah($cat=0,$item=0) {
  global $rudweb_req_page;
  global $rudweb_ln;
  global $rudweb_skin;
  global $rudweb_dbtype;
  
  echo $rudweb_skin['catyah']['hdr'];
  
  echo $rudweb_skin['catyah']['pre'];
  restrictedLocalLink('default', $rudweb_ln['catalog']['catalog'], 'index.php/catalog/main', $_SESSION[_RUDWEB_PRE.'usr_level'], 0, $rudweb_ln['WinStatOver'], $rudweb_ln['WinStatOut'], '_self');
  echo $rudweb_skin['catyah']['suf'];
  
  
  switch($rudweb_req_page) {
    case "items" : {
      $query_cat  = "SELECT cat_tt, cat_lev FROM ". _RUDWEB_PRE. "cat_cat WHERE cat_id = '".$cat."' LIMIT 1";
      $result_cat = rudweb_qres($rudweb_dbtype, $query_cat);
      $cat_row = rudweb_fetch_assoc($rudweb_dbtype, $result_cat);
      $cat_tt  = $cat_row['cat_tt'];
      $cat_lev = $cat_row['cat_lev'];
      
      $qf1 = "";
      $qf2 = "";
      
      for($i=$cat_lev;$i>0;$i--) {
        $i1 = $i - 1;
        $qf1 .= " ,lev".$i1.".cat_id AS cat_id".$i1."";
        $qf1 .= " ,lev".$i1.".cat_tt AS cat_tt".$i1."";
        $qf2 .= " left join ". _RUDWEB_PRE. "cat_cat as lev".$i1." on (lev".$i.".cat_par = lev".$i1.".cat_id)";
      }
      $query_cats = "SELECT lev".$cat_lev.".cat_id" . $qf1 . " FROM ". _RUDWEB_PRE. "cat_cat AS lev".$cat_lev."" . $qf2 . " WHERE lev".$cat_lev.".cat_id = '".$cat."'";
      $result_cats = rudweb_qres($rudweb_dbtype, $query_cats);
      $cats_row = rudweb_fetch_assoc($rudweb_dbtype, $result_cats);
      
      for($j=0;$j<$cat_lev;$j++) {
        echo $rudweb_skin['catyah']['sep'];
        echo $rudweb_skin['catyah']['pre'];
        restrictedLocalLink('default', $cats_row['cat_tt'.$j.''], 'index.php/catalog/items/cat/'.$cats_row['cat_id'.$j.''], $_SESSION[_RUDWEB_PRE.'usr_level'], 0, $rudweb_ln['WinStatOver'], $rudweb_ln['WinStatOut'], '_self');
        echo $rudweb_skin['catyah']['suf'];
      }
      echo $rudweb_skin['catyah']['sep'];
      echo $rudweb_skin['catyah']['pre'];
      echo $cat_tt;
      echo $rudweb_skin['catyah']['suf'];
      break;
    }
    case "item" : {
      $query_cat  = "SELECT DISTINCT P.prd_tt, B.cat_id, B.cat_tt, B.cat_lev FROM ". _RUDWEB_PRE. "cat_prd AS P left join ". _RUDWEB_PRE. "cat_cat as B on (B.cat_id = P.cat_id) WHERE P.prd_id = '".$item."' LIMIT 1;";
      $result_cat = rudweb_qres($rudweb_dbtype, $query_cat);
      $cat_row = rudweb_fetch_assoc($rudweb_dbtype, $result_cat);
      $prd_tt  = $cat_row['prd_tt'];
      $cat_id  = $cat_row['cat_id'];
      $cat_tt  = $cat_row['cat_tt'];
      $cat_lev = $cat_row['cat_lev'];
      
      $qf1 = "";
      $qf2 = "";
      
      for($i=$cat_lev;$i>0;$i--) {
        $i1 = $i - 1;
        $qf1 .= " ,lev".$i1.".cat_id AS cat_id".$i1."";
        $qf1 .= " ,lev".$i1.".cat_tt AS cat_tt".$i1."";
        $qf2 .= " left join ". _RUDWEB_PRE. "cat_cat as lev".$i1." on (lev".$i.".cat_par = lev".$i1.".cat_id)";
      }
      $query_cats = "SELECT lev".$cat_lev.".cat_id" . $qf1 . " FROM ". _RUDWEB_PRE. "cat_cat AS lev".$cat_lev."" . $qf2 . " WHERE lev".$cat_lev.".cat_id = '".$cat_id."'";
      $result_cats = rudweb_qres($rudweb_dbtype, $query_cats);
      $cats_row = rudweb_fetch_assoc($rudweb_dbtype, $result_cats);

      for($j=0;$j<$cat_lev;$j++) {
        echo $rudweb_skin['catyah']['sep'];
        echo $rudweb_skin['catyah']['pre'];
        restrictedLocalLink('default', $cats_row['cat_tt'.$j.''], 'index.php/catalog/items/cat/'.$cats_row['cat_id'.$j.''], $_SESSION[_RUDWEB_PRE.'usr_level'], 0, $rudweb_ln['WinStatOver'], $rudweb_ln['WinStatOut'], '_self');
        echo $rudweb_skin['catyah']['suf'];
      }
      echo $rudweb_skin['catyah']['sep'];
      echo $rudweb_skin['catyah']['pre'];
      restrictedLocalLink('default', $cat_tt, 'index.php/catalog/items/cat/'.$cat_id, $_SESSION[_RUDWEB_PRE.'usr_level'], 0, $rudweb_ln['WinStatOver'], $rudweb_ln['WinStatOut'], '_self');
      echo $rudweb_skin['catyah']['suf'];
      
      echo $rudweb_skin['catyah']['sep'];
      echo $rudweb_skin['catyah']['pre'];
      echo $prd_tt;
      echo $rudweb_skin['catyah']['suf'];
      
      break;
    }
    default : {break;}
  }
 
  echo $rudweb_skin['catyah']['ftr'];
  
}
/* ********** ********** ********** CATALOG PAGINATION  ********** ********** ********** */
function catalogPageNavigation($totalitems,$itemspg,$pg,$urlsofar) {
  global $rudweb_ln;
  global $rudweb_skin;
  
  $maxpage = ceil($totalitems/$itemspg);
  
  // FIRST+PREVIOUS
  $prevpage = $pg - 1;
  $first = $rudweb_ln['pgnav']['first'];
  $prev = $rudweb_ln['pgnav']['prev'];
  if ($pg > 1) {
    $first = '<A CLASS="default" HREF="'.$urlsofar.'/pg/1/itemspg/'.$itemspg.'">'.$first.'</A>';
    $prev  = '<A CLASS="default" HREF="'.$urlsofar.'/pg/'.$prevpage.'/itemspg/'.$itemspg.'">'.$prev.'</A>';;
  }
  //NEXT+LAST
  $nextpage = $pg + 1;
  $next = $rudweb_ln['pgnav']['next'];
  $last = $rudweb_ln['pgnav']['last'];
  if ($pg < $maxpage) {
    $next = '<A CLASS="default" HREF="'.$urlsofar.'/pg/'.$nextpage.'/itemspg/'.$itemspg.'">'.$next.'</A>';
    $last = '<A CLASS="default" HREF="'.$urlsofar.'/pg/'.$maxpage.'/itemspg/'.$itemspg.'">'.$last.'</A>';
  }

  echo $rudweb_skin['pgnav']['hdr'];
  
  echo $rudweb_skin['pgnav']['pre'];
  echo $first;
  echo $rudweb_skin['pgnav']['suf'];
  echo $rudweb_skin['pgnav']['sep'];
  
  echo $rudweb_skin['pgnav']['pre'];
  echo $prev;
  echo $rudweb_skin['pgnav']['suf'];
  echo $rudweb_skin['pgnav']['sep'];
  
  echo $rudweb_skin['pgnav']['pre'];
  echo $rudweb_ln['pgnav']['page'] . $pg . $rudweb_ln['pgnav']['of'] . $maxpage;
  echo $rudweb_skin['pgnav']['suf'];
  echo $rudweb_skin['pgnav']['sep'];
  
  echo $rudweb_skin['pgnav']['pre'];
  echo $next;
  echo $rudweb_skin['pgnav']['suf'];
  echo $rudweb_skin['pgnav']['sep'];
  
  echo $rudweb_skin['pgnav']['pre'];
  echo $last;
  echo $rudweb_skin['pgnav']['suf'];
  
  echo $rudweb_skin['pgnav']['ftr'];
}
/* ********** ********** ********** //CATALOG PAGINATION  ********** ********** ********** */
/* ********** ********** ********** CATALOG CATEGORIES MENU WITH CUSTOM LINKS  ********** ********** ********** */
function catalogSubcatsMenu($parent, $rep, $link) {
  global $rudweb_dbtype;
  global $rudweb_ln;
  
  $q = "SELECT cat_id, cat_tt FROM ". _RUDWEB_PRE. "cat_cat WHERE cat_par = '".$parent."' ORDER BY cat_ord";
  $r = rudweb_qres($rudweb_dbtype, $q);
  $t = rudweb_qtotal($rudweb_dbtype, $r);
  
  if ($t != 0) {
    echo '<UL STYLE="list-style-type: none; padding-left: 1.5em; text-indent: -1.5em;">';
    for($i=0;$i<$t;$i++) {
      $rw = rudweb_fetch_assoc($rudweb_dbtype, $r);
      echo '<LI>';
      echo '&#187;';
      echo '&#160;';
      restrictedLocalLink('default', $rw['cat_tt'], 'admin.php/admin/'.$link.'/cat/'.$rw['cat_id'], $_SESSION[_RUDWEB_PRE.'usr_level'], 0, $rudweb_ln['WinStatOver'], $rudweb_ln['WinStatOut'], '_self');
      catalogSubcatsMenu($rw['cat_id'], $rep+1, $link);
      echo '</LI>';
    }
    echo '</UL>';
  }
}

function catalogCategoriesMenu($link) {
  global $rudweb_dbtype;
  global $rudweb_ln;
  
  $qlev    = "SELECT MAX(cat_lev) FROM ". _RUDWEB_PRE. "cat_cat";
  $resqlev = rudweb_qres($rudweb_dbtype, $qlev);
  $max_lev = rudweb_result($rudweb_dbtype, $resqlev, 0);
  
  $q0 = "SELECT cat_id, cat_tt FROM ". _RUDWEB_PRE. "cat_cat WHERE cat_par = '0' ORDER BY cat_ord";
  $r0 = rudweb_qres($rudweb_dbtype, $q0);
  $t0 = rudweb_qtotal($rudweb_dbtype, $r0);
  
  if($t0 != 0) {
    echo '<UL STYLE="list-style-type: none; padding-left: 1.5em; text-indent: -1.5em;">';
    for ($i=0;$i<$t0;$i++) {
      $rw0 = rudweb_fetch_assoc($rudweb_dbtype, $r0);
      echo '<LI>';
      echo '&#187;';
      echo '&#160;';
      restrictedLocalLink('default', $rw0['cat_tt'], 'admin.php/admin/'.$link.'/cat/'.$rw0['cat_id'], $_SESSION[_RUDWEB_PRE.'usr_level'], 0, $rudweb_ln['WinStatOver'], $rudweb_ln['WinStatOut'], '_self');
      catalogSubcatsMenu($rw0['cat_id'], 1, $link);
      echo '</LI>';
    }
    echo '</UL>';
  }
}
/* ********** ********** ********** //CATALOG CATEGORIES MENU WITH CUSTOM LINKS  ********** ********** ********** */
?>