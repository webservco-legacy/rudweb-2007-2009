<?php
/*
./inc/mod/modcon.inc.php
12:00 2008-06-06
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once './../lib/404.php';}

//function showContactForm($con_cat_id) {}

function admConCat() {
  global $rudweb_skin;
  global $rudweb_ln;
  global $rudweb_dbtype;
  
  echo $rudweb_skin['adm']['mod']['pre'];
  
  // display all
  $q = "SELECT con_cat_id, con_cat_tt, con_cat_notif3, con_cat_notif4, con_cat_notify, con_cat_send FROM "._RUDWEB_PRE."con_cat WHERE con_cat_ln = '".$_SESSION[_RUDWEB_PRE.'usr_lang_index']."' ORDER BY con_cat_tt ASC";
  $r = rudweb_qres($rudweb_dbtype, $q);
  $t = rudweb_qtotal($rudweb_dbtype, $r);
  if($t != 0) {
    echo '<FORM ENCTYPE="multipart/form-data" NAME="concatform" ACTION="" METHOD="post">';
    echo '<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0">';
    echo '<TR>';
    echo '<TD>'.$rudweb_ln['name'].'</TD>';
    echo '<TD>'.$rudweb_ln['con']['not3'].'</TD>';
    echo '<TD>'.$rudweb_ln['con']['not4'].'</TD>';
    echo '<TD>'.$rudweb_ln['con']['notE'].'</TD>';
    echo '<TD>'.$rudweb_ln['con']['sendE'].'</TD>';
    echo '<TD>'.$rudweb_ln['adm']['del'].'</TD>';
  
    echo '</TR>';
    for($i=1;$i<=$t;$i++) {
      $rw = rudweb_fetch_assoc($rudweb_dbtype, $r);
      conCatForm($rw['con_cat_id'], $rw['con_cat_tt'], $rw['con_cat_notif3'], $rw['con_cat_notif4'], $rw['con_cat_notify'], $rw['con_cat_send'], 'model');
    }
    echo '</TABLE>';
    echo '<DIV STYLE="padding: 10px 0px 10px 0px;">';
    echo '<INPUT CLASS="formsubmit" TYPE="submit" NAME="con_cat_mod" VALUE="'.$rudweb_ln['adm']['savemod'].'">';
    echo '</DIV>';
    echo '</FORM>';
  }
      
  echo '<FORM ENCTYPE="multipart/form-data" NAME="concatform" ACTION="" METHOD="post">';
  echo '<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0">';
  echo '<TR>';
  echo '<TD>'.$rudweb_ln['name'].'</TD>';
  echo '<TD>'.$rudweb_ln['con']['not3'].'</TD>';
  echo '<TD>'.$rudweb_ln['con']['not4'].'</TD>';
  echo '<TD>'.$rudweb_ln['con']['notE'].'</TD>';
  echo '<TD>'.$rudweb_ln['con']['sendE'].'</TD>';
  echo '<TD>'.$rudweb_ln['adm']['add'].'</TD>';
  echo '</TR>';
  
  conCatForm(0, '', 0, 0, '', '', 'add');
  echo '</TABLE>';
  echo '</FORM>';
  
  echo $rudweb_skin['adm']['mod']['suf'];
}

function conCatForm($con_cat_id=0, $con_cat_tt, $con_cat_notif3, $con_cat_notif4, $con_cat_notify, $con_cat_send, $submit='model') {
  global $rudweb_ln;
  
  echo '<TR>';
  
  echo '<TD>';
  echo '<INPUT TYPE="hidden" NAME="admcon" VALUE="1">';
  if ($con_cat_id != 0) {echo '<INPUT TYPE="hidden" NAME="con_cat_id['.$con_cat_id.']" VALUE="'.$con_cat_id.'">';}
  echo '<INPUT CLASS="forminput" TYPE="text" NAME="con_cat_tt['.$con_cat_id.']" SIZE="10" MAXLENGTH="150" VALUE="'.$con_cat_tt.'">';
  echo '</TD>';
  
  echo '<TD>';
  echo '<INPUT CLASS="forminput" TYPE="checkbox" NAME="con_cat_notif3['.$con_cat_id.']"';
  if ($con_cat_notif3 == 1) {echo ' CHECKED';}
  echo '>';
  echo '</TD>';
  
  echo '<TD>';
  echo '<INPUT CLASS="forminput" TYPE="checkbox" NAME="con_cat_notif4['.$con_cat_id.']"';
  if ($con_cat_notif4 == 1) {echo ' CHECKED';}
  echo '>';
  echo '</TD>';
  
  echo '<TD>';
  echo '<INPUT CLASS="forminput" TYPE="text" NAME="con_cat_notify['.$con_cat_id.']" SIZE="10" MAXLENGTH="255" VALUE="'.$con_cat_notify.'">';
  echo '</TD>';
  
  echo '<TD>';
  echo '<INPUT CLASS="forminput" TYPE="text" NAME="con_cat_send['.$con_cat_id.']" SIZE="10" MAXLENGTH="255" VALUE="'.$con_cat_send.'">';
  echo '</TD>';
  
  echo '<TD>';
  switch($submit) {
    case 'model' : {
      echo '<INPUT CLASS="forminput" TYPE="checkbox" NAME="con_cat_del['.$con_cat_id.']">';
      break;
    }
    case 'add' : {
      echo '<INPUT CLASS="formsubmit" TYPE="submit" NAME="con_cat_add" VALUE="'.$rudweb_ln['adm']['add'].'">';
      break;
    }
    default : {break;}
  }
  echo '</TD>';
  
  echo '</TR>';
}
/* **************************************************************************** DETAILS ********************************************************************** */
function adminConDet() {
  global $rudweb_skin;
  global $rudweb_ln;
  global $rudweb_dbtype;
  
  echo $rudweb_skin['cnt']['tt2']['pre'];
  echo $rudweb_ln['dets'];
  
  if(isset($_GET['cat'])) {
    $con_cat_id = rudweb_filter_input($_GET['cat']);
    $con_cat_tt = null;
    $q = "SELECT con_cat_tt FROM ". _RUDWEB_PRE. "con_cat WHERE con_cat_id = '".$con_cat_id."' LIMIT 1";
    $r = rudweb_qres($rudweb_dbtype, $q);
    $t = rudweb_qtotal($rudweb_dbtype, $r);
    if($t != 0){
      $con_cat_tt = rudweb_result($rudweb_dbtype, $r, 0);
      echo ' - ' . $con_cat_tt;
      echo $rudweb_skin['cnt']['tt2']['suf'];
      echo $rudweb_skin['cnt']['txt']['pre'];
      admConDet($con_cat_id);
    }
    else {
      echo $rudweb_skin['cnt']['tt2']['suf'];
      echo $rudweb_skin['cnt']['txt']['pre'];
      showMsg('err', $rudweb_ln['err']['3']);
    }
  }
  else {
    // show all categories
    echo $rudweb_skin['cnt']['tt2']['suf'];
    echo $rudweb_skin['cnt']['txt']['pre'];
    conCatMenu('conmod/act/det');
  }
  echo $rudweb_skin['cnt']['txt']['suf'];
}

function conCatMenu($link) {
  global $rudweb_dbtype;
  global $rudweb_ln;
  
  $q = "SELECT con_cat_id, con_cat_tt FROM ". _RUDWEB_PRE. "con_cat WHERE con_cat_ln = '".$_SESSION[_RUDWEB_PRE.'usr_lang_index']."' ORDER BY con_cat_tt ASC";
  $r = rudweb_qres($rudweb_dbtype, $q);
  $t = rudweb_qtotal($rudweb_dbtype, $r);
  
  if($t != 0) {
    echo '<UL STYLE="list-style-type: none; padding-left: 1.5em; text-indent: -1.5em;">';
    for ($i=0;$i<$t;$i++) {
      $rw = rudweb_fetch_assoc($rudweb_dbtype, $r);
      echo '<LI>';
      echo '&#187;';
      echo '&#160;';
      restrictedLocalLink('default', $rw['con_cat_tt'], _RUDWEB_INDEX_PHP . 'admin/'.$link.'/cat/'.$rw['con_cat_id'], $_SESSION[_RUDWEB_PRE.'usr_level'], 0, $rudweb_ln['WinStatOver'], $rudweb_ln['WinStatOut'], '_self');
      echo '</LI>';
    }
    echo '</UL>';
  }
  else {showMsg('err', $rudweb_ln['adm']['noitems']);}
}

function admConDet($con_cat_id) {
  global $rudweb_skin;
  global $rudweb_ln;
  global $rudweb_dbtype;
  
  echo $rudweb_skin['adm']['mod']['pre'];
  
  // display all
  $q = "SELECT con_det_id, con_det_typ, con_det_tt, con_det_ord, con_det_req FROM "._RUDWEB_PRE."con_det WHERE con_cat_id = '".$con_cat_id."' ORDER BY con_det_ord ASC";
  $r = rudweb_qres($rudweb_dbtype, $q);
  $t = rudweb_qtotal($rudweb_dbtype, $r);
  if($t != 0) {
    echo '<FORM ENCTYPE="multipart/form-data" NAME="condetform" ACTION="" METHOD="post">';
    echo '<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0">';
    echo '<TR>';
    echo '<TD>'.$rudweb_ln['type'].'</TD>';
    echo '<TD>'.$rudweb_ln['name'].'</TD>';
    echo '<TD>'.$rudweb_ln['order'].'</TD>';
    echo '<TD>'.$rudweb_ln['req'].'</TD>';
    echo '<TD>'.$rudweb_ln['adm']['del'].'</TD>';
    echo '</TR>';
    for($i=1;$i<=$t;$i++) {
      $rw = rudweb_fetch_assoc($rudweb_dbtype, $r);
      conDetForm($rw['con_det_id'], $con_cat_id, $rw['con_det_typ'], $rw['con_det_tt'], $rw['con_det_ord'], $rw['con_det_req'], 'model');
    }
    echo '</TABLE>';
    echo '<DIV STYLE="padding: 10px 0px 10px 0px;">';
    echo '<INPUT CLASS="formsubmit" TYPE="submit" NAME="con_det_mod" VALUE="'.$rudweb_ln['adm']['savemod'].'">';
    echo '</DIV>';
    echo '</FORM>';
  }
      
  echo '<FORM ENCTYPE="multipart/form-data" NAME="condetform" ACTION="" METHOD="post">';
  echo '<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0">';
  echo '<TR>';
  echo '<TD>'.$rudweb_ln['type'].'</TD>';
  echo '<TD>'.$rudweb_ln['name'].'</TD>';
  echo '<TD>'.$rudweb_ln['order'].'</TD>';
  echo '<TD>'.$rudweb_ln['req'].'</TD>';
  echo '<TD>'.$rudweb_ln['adm']['add'].'</TD>';
  echo '</TR>';
  
  conDetForm(0, $con_cat_id, 0, '', 0, 0, 'add');
  echo '</TABLE>';
  echo '</FORM>';
  
  echo $rudweb_skin['adm']['mod']['suf'];
}
function conDetForm($con_det_id=0, $con_cat_id, $con_det_typ, $con_det_tt, $con_det_ord, $con_det_req, $submit='model') {
  global $rudweb_ln;
  
  echo '<TR>';
  
  echo '<TD>';
  $seldis = '';
  if($submit == 'model') {$seldis = ' DISABLED';}
  echo '<SELECT CLASS="forminput" NAME="con_det_typ['.$con_det_id.']"'.$seldis.'>';
  echo '<OPTION VALUE="0"';
  if ($con_det_typ == 0) {echo ' SELECTED';}
  echo '>'.$rudweb_ln['text'].'</OPTION>';
  echo '<OPTION VALUE="1"';
  if ($con_det_typ == 1) {echo ' SELECTED';}
  echo '>'.$rudweb_ln['select'].'</OPTION>';
  echo '</SELECT>';
  echo '</TD>';
  
  echo '<TD>';
  echo '<INPUT TYPE="hidden" NAME="admcon" VALUE="1">';
  echo '<INPUT TYPE="hidden" NAME="con_cat_id['.$con_det_id.']" VALUE="'.$con_cat_id.'">';
  if ($con_det_id != 0) {echo '<INPUT TYPE="hidden" NAME="con_det_id['.$con_det_id.']" VALUE="'.$con_det_id.'">';}
  echo '<INPUT CLASS="forminput" TYPE="text" NAME="con_det_tt['.$con_det_id.']" SIZE="10" MAXLENGTH="150" VALUE="'.$con_det_tt.'">';
  echo '</TD>';
  
  echo '<TD>';
  echo '<INPUT CLASS="forminput" TYPE="text" NAME="con_det_ord['.$con_det_id.']" SIZE="2" MAXLENGTH="2" VALUE="'.$con_det_ord.'">';
  echo '</TD>';
  
  echo '<TD>';
  echo '<INPUT CLASS="forminput" TYPE="checkbox" NAME="con_det_req['.$con_det_id.']"';
  if ($con_det_req == 1) {echo ' CHECKED';}
  echo '>';
  echo '</TD>';
  
  echo '<TD>';
  switch($submit) {
    case 'model' : {
      echo '<INPUT CLASS="forminput" TYPE="checkbox" NAME="con_det_del['.$con_det_id.']">';
      break;
    }
    case 'add' : {
      echo '<INPUT CLASS="formsubmit" TYPE="submit" NAME="con_det_add" VALUE="'.$rudweb_ln['adm']['add'].'">';
      break;
    }
    default : {break;}
  }
  echo '</TD>';
  
  echo '</TR>';
}
/* **************************************************************************** OPTIONS ********************************************************************** */
function adminConOpt() {
  global $rudweb_skin;
  global $rudweb_ln;
  global $rudweb_dbtype;
  
  echo $rudweb_skin['cnt']['tt2']['pre'];
  echo $rudweb_ln['opts'];
  
  if(isset($_GET['det'])) {
    $con_det_id = rudweb_filter_input($_GET['det']);
    $con_det_tt = null;
    $q = "SELECT con_det_tt FROM ". _RUDWEB_PRE. "con_det WHERE con_det_id = '".$con_det_id."' LIMIT 1";
    $r = rudweb_qres($rudweb_dbtype, $q);
    $t = rudweb_qtotal($rudweb_dbtype, $r);
    if($t != 0){
      $con_det_tt = rudweb_result($rudweb_dbtype, $r, 0);
      echo ' - ' . $con_det_tt;
      echo $rudweb_skin['cnt']['tt2']['suf'];
      echo $rudweb_skin['cnt']['txt']['pre'];
      admConOpt($con_det_id);
    }
    else {
      echo $rudweb_skin['cnt']['tt2']['suf'];
      echo $rudweb_skin['cnt']['txt']['pre'];
      showMsg('err', $rudweb_ln['err']['3']);
    }
  }
  else {
    // show all categories
    echo $rudweb_skin['cnt']['tt2']['suf'];
    echo $rudweb_skin['cnt']['txt']['pre'];
    conDetMenu('conmod/act/opt');
  }
  echo $rudweb_skin['cnt']['txt']['suf'];
}
function conDetMenu($link) {
  global $rudweb_dbtype;
  global $rudweb_ln;
  
  $q = "SELECT B.con_cat_tt, A.con_det_id, A.con_det_tt FROM ". _RUDWEB_PRE. "con_det AS A left join ". _RUDWEB_PRE. "con_cat as B on (A.con_cat_id = B.con_cat_id) WHERE A.con_det_typ = '1' ORDER BY A.con_cat_id ASC, A.con_det_ord ASC";
  $r = rudweb_qres($rudweb_dbtype, $q);
  $t = rudweb_qtotal($rudweb_dbtype, $r);
  
  if($t != 0) {
    echo '<UL STYLE="list-style-type: none; padding-left: 1.5em; text-indent: -1.5em;">';
    for ($i=0;$i<$t;$i++) {
      $rw = rudweb_fetch_assoc($rudweb_dbtype, $r);
      echo '<LI>';
      echo '&#187;';
      echo '&#160;';
      echo $rw['con_cat_tt'];
      echo '&#160;';
      echo '&#187;';
      echo '&#160;';
      restrictedLocalLink('default', $rw['con_det_tt'], _RUDWEB_INDEX_PHP . 'admin/'.$link.'/det/'.$rw['con_det_id'], $_SESSION[_RUDWEB_PRE.'usr_level'], 0, $rudweb_ln['WinStatOver'], $rudweb_ln['WinStatOut'], '_self');
      echo '</LI>';
    }
    echo '</UL>';
  }
  else {showMsg('err', $rudweb_ln['adm']['noitems']);}
}
function admConOpt($con_det_id) {
  global $rudweb_skin;
  global $rudweb_ln;
  global $rudweb_dbtype;
  
  echo $rudweb_skin['adm']['mod']['pre'];
  
  // display all
  $q = "SELECT con_opt_id, con_opt_tt, con_opt_ord FROM "._RUDWEB_PRE."con_opt WHERE con_det_id = '".$con_det_id."' ORDER BY con_opt_ord ASC";
  $r = rudweb_qres($rudweb_dbtype, $q);
  $t = rudweb_qtotal($rudweb_dbtype, $r);
  if($t != 0) {
    echo '<FORM ENCTYPE="multipart/form-data" NAME="conoptform" ACTION="" METHOD="post">';
    echo '<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0">';
    echo '<TR>';
    echo '<TD>'.$rudweb_ln['name'].'</TD>';
    echo '<TD>'.$rudweb_ln['order'].'</TD>';
    echo '<TD>'.$rudweb_ln['adm']['del'].'</TD>';
    echo '</TR>';
    for($i=1;$i<=$t;$i++) {
      $rw = rudweb_fetch_assoc($rudweb_dbtype, $r);
      conOptForm($rw['con_opt_id'], $con_det_id, $rw['con_opt_tt'], $rw['con_opt_ord'], 'model');
    }
    echo '</TABLE>';
    echo '<DIV STYLE="padding: 10px 0px 10px 0px;">';
    echo '<INPUT CLASS="formsubmit" TYPE="submit" NAME="con_opt_mod" VALUE="'.$rudweb_ln['adm']['savemod'].'">';
    echo '</DIV>';
    echo '</FORM>';
  }
      
  echo '<FORM ENCTYPE="multipart/form-data" NAME="conoptform" ACTION="" METHOD="post">';
  echo '<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0">';
  echo '<TR>';
  echo '<TD>'.$rudweb_ln['name'].'</TD>';
  echo '<TD>'.$rudweb_ln['order'].'</TD>';
  echo '<TD>'.$rudweb_ln['adm']['add'].'</TD>';
  echo '</TR>';
  
  conOptForm(0, $con_det_id, '', 0, 'add');
  echo '</TABLE>';
  echo '</FORM>';
  
  echo $rudweb_skin['adm']['mod']['suf'];
}
function conOptForm($con_opt_id=0, $con_det_id, $con_opt_tt, $con_opt_ord, $submit='model') {
  global $rudweb_ln;
  
  echo '<TR>';
  
  echo '<TD>';
  echo '<INPUT TYPE="hidden" NAME="admcon" VALUE="1">';
  echo '<INPUT TYPE="hidden" NAME="con_det_id['.$con_opt_id.']" VALUE="'.$con_det_id.'">';
  if ($con_opt_id != 0) {echo '<INPUT TYPE="hidden" NAME="con_opt_id['.$con_opt_id.']" VALUE="'.$con_opt_id.'">';}
  echo '<INPUT CLASS="forminput" TYPE="text" NAME="con_opt_tt['.$con_opt_id.']" SIZE="10" MAXLENGTH="150" VALUE="'.$con_opt_tt.'">';
  echo '</TD>';
  
  echo '<TD>';
  echo '<INPUT CLASS="forminput" TYPE="text" NAME="con_opt_ord['.$con_opt_id.']" SIZE="2" MAXLENGTH="2" VALUE="'.$con_opt_ord.'">';
  echo '</TD>';
  
  echo '<TD>';
  switch($submit) {
    case 'model' : {
      echo '<INPUT CLASS="forminput" TYPE="checkbox" NAME="con_opt_del['.$con_opt_id.']">';
      break;
    }
    case 'add' : {
      echo '<INPUT CLASS="formsubmit" TYPE="submit" NAME="con_opt_add" VALUE="'.$rudweb_ln['adm']['add'].'">';
      break;
    }
    default : {break;}
  }
  echo '</TD>';
  
  echo '</TR>';
}
?>