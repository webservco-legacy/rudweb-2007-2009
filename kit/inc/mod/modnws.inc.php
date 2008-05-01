<?php
/*
./inc/mod/modnws.inc.php
16:57 2008-04-29
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once './../lib/404.php';}

function showNewsTitles() {}
function showNewsAll($adm=0) {
  //xxx
  // list: title, description
}
function showNewsItem($nws_id=0,$adm=0) {
  global $rudweb_ln;
  global $rudweb_skin;
  global $rudweb_dbtype;
  
  if($nws_id != 0) {
    $qn = "SELECT * FROM "._RUDWEB_PRE."ws_nws WHERE nws_id = '".$nws_id."' LIMIT 1";
    $rq = rudweb_qres($rudweb_dbtype, $qn);
    $tn = rudweb_qtotal($rudweb_dbtype, $rq);
    if ($tn != 0) {
      $rn = rudweb_fetch_assoc($rudweb_dbtype, $rq);
      $nws_tt  = $rn['nws_tt'];
      $nws_dsc = $rn['nws_dsc'];
      $nws_txt = $rn['nws_txt'];
      $nws_crd = $rn['nws_crd'];
      $nws_crt = $rn['nws_crt'];
      $nws_cru = $rn['nws_cru'];
      $nws_mdd = $rn['nws_mdd'];
      $nws_mdt = $rn['nws_mdt'];
      $nws_mdu = $rn['nws_mdu'];
    }
    if($adm == 1) {
      if(isset($_POST['modnws'])) {
        if(isset($_POST['nws_tt']))  {$nws_tt = rudweb_filter_input($_POST['nws_tt']);}
        if(isset($_POST['nws_dsc'])) {$nws_dsc = rudweb_filter_input($_POST['nws_dsc']);}
        if(isset($_POST['nws_txt'])) {$nws_txt = rudweb_filter_content($_POST['nws_txt']);}
        $err = 0;
        if($nws_tt == '') {$err = 1;}
        else if($nws_dsc == '') {$err = 3;}
        else if($nws_txt == '') {$err = 4;}
        if($err == 0 ) {
          $qlk = "LOCK TABLES "._RUDWEB_PRE."ws_nws WRITE";
          mysql_query($qlk) or require _RUDWEB_LIB_DIR . 'myerr.php';
          
          $mdd  = date("Y-m-d");
          $mdt  = date("H:i:s");
          
          $qa = "UPDATE "._RUDWEB_PRE."ws_nws SET nws_tt = '".$nws_tt."', nws_dsc = '".$nws_dsc."', nws_txt = '".$nws_txt."', nws_mdd = '".$mdd."', nws_mdt = '".$mdt."', nws_mdu = '".$_SESSION[_RUDWEB_PRE.'usr_id']."' WHERE nws_id = '".$nws_id."' LIMIT 1";
          mysql_query($qa) or require _RUDWEB_LIB_DIR . 'myerr.php';
          
          $quk = "UNLOCK TABLES";
          mysql_query($quk) or require _RUDWEB_LIB_DIR . 'myerr.php';
          
          echo '<DIV CLASS="ok" STYLE="padding-top: 10px; padding-bottom: 10px;">';
          echo $rudweb_ln['adm']['itemmodok'];
          echo '</DIV>';
          echo '<DIV CLASS="ok" STYLE="padding-top: 10px; padding-bottom: 10px;">';
          restrictedLocalLink('default', $rudweb_ln['adm']['itemmod'], 'admin.php/admin/nwsmod/act/mod/nws/'.$nws_id, $_SESSION[_RUDWEB_PRE.'usr_level'], 0, $rudweb_ln['WinStatOver'], $rudweb_ln['WinStatOut'], '_self');
          echo '</DIV>';
          echo '<DIV CLASS="ok" STYLE="padding-top: 10px; padding-bottom: 10px;">';
          restrictedLocalLink('default', $rudweb_ln['adm']['itemaddnew'], 'admin.php/admin/nwsmod/act/add', $_SESSION[_RUDWEB_PRE.'usr_level'], 0, $rudweb_ln['WinStatOver'], $rudweb_ln['WinStatOut'], '_self');
          echo '</DIV>';
          echo '<DIV CLASS="ok" STYLE="padding-top: 10px; padding-bottom: 10px;">';
          restrictedLocalLink('default', $rudweb_ln['adm']['itemviewcat'], 'admin.php/admin/nwsmod/act/view', $_SESSION[_RUDWEB_PRE.'usr_level'], 0, $rudweb_ln['WinStatOver'], $rudweb_ln['WinStatOut'], '_self');
          echo '</DIV>';
        }
        else {
          // error message
          echo '<DIV CLASS="err" STYLE="padding-top: 10px; padding-bottom: 10px;">';
          echo $rudweb_ln['err']['tt'];
          echo '&#160;';
          echo $rudweb_ln['err']['add'][$err];
          echo '</DIV>';
          showNewsItemForm($nws_id,$nws_tt,$nws_dsc,$nws_txt);
        }
      }
      else if(isset($_POST['delnws'])) {
        $qlk = "LOCK TABLES "._RUDWEB_PRE."ws_nws WRITE";
        mysql_query($qlk) or require _RUDWEB_LIB_DIR . 'myerr.php';

        $qa = "DELETE FROM "._RUDWEB_PRE."ws_nws WHERE nws_id = '".$nws_id."' LIMIT 1";
        mysql_query($qa) or require _RUDWEB_LIB_DIR . 'myerr.php';

        $quk = "UNLOCK TABLES";
        mysql_query($quk) or require _RUDWEB_LIB_DIR . 'myerr.php';
        
        echo '<DIV CLASS="ok" STYLE="padding-top: 10px; padding-bottom: 10px;">';
        echo $rudweb_ln['adm']['itemdelok'];
        echo '</DIV>';
        echo '<DIV CLASS="ok" STYLE="padding-top: 10px; padding-bottom: 10px;">';
        restrictedLocalLink('default', $rudweb_ln['adm']['itemaddnew'], 'admin.php/admin/nwsmod/act/add', $_SESSION[_RUDWEB_PRE.'usr_level'], 0, $rudweb_ln['WinStatOver'], $rudweb_ln['WinStatOut'], '_self');
        echo '</DIV>';
        echo '<DIV CLASS="ok" STYLE="padding-top: 10px; padding-bottom: 10px;">';
        restrictedLocalLink('default', $rudweb_ln['adm']['itemviewcat'], 'admin.php/admin/nwsmod/act/view', $_SESSION[_RUDWEB_PRE.'usr_level'], 0, $rudweb_ln['WinStatOver'], $rudweb_ln['WinStatOut'], '_self');
        echo '</DIV>';
      }
      else {
        showNewsItemForm($nws_id,$nws_tt,$nws_dsc,$nws_txt);
      }
    }
    else {
      echo $rudweb_skin['nws']['itm']['hdr'];
      echo $rudweb_skin['nws']['itm']['ttpre'];
      echo $nws_tt;
      echo $rudweb_skin['nws']['itm']['ttsuf'];
      echo $rudweb_skin['nws']['itm']['dscpre'];
      echo $nws_dsc;
      echo $rudweb_skin['nws']['itm']['dscsuf'];
      echo $rudweb_skin['nws']['itm']['txtpre'];
      echo $nws_txt;
      echo $rudweb_skin['nws']['itm']['txtsuf'];
      echo $rudweb_skin['nws']['itm']['dtpre'];
      echo MyDate($nws_crd, 'dd/mm/yyyy') . '&#160;' . $nws_crt;
      echo $rudweb_skin['nws']['itm']['dtsuf'];
      echo $rudweb_skin['nws']['itm']['ftr'];
    }
  }
}
function addNewsItem() {
  global $rudweb_ln;
  global $rudweb_skin;
  global $rudweb_dbtype;
  
  $nws_id=0;$nws_tt='';$nws_dsc='';$nws_txt='';
  if(isset($_POST['addnws'])) {
    if(isset($_POST['nws_tt']))  {$nws_tt = rudweb_filter_input($_POST['nws_tt']);}
    if(isset($_POST['nws_dsc'])) {$nws_dsc = rudweb_filter_input($_POST['nws_dsc']);}
    if(isset($_POST['nws_txt'])) {$nws_txt = rudweb_filter_content($_POST['nws_txt']);}
    $err = 0;
    if($nws_tt == '') {$err = 1;}
    else if($nws_dsc == '') {$err = 3;}
    else if($nws_txt == '') {$err = 4;}
    if($err == 0 ) {
      $qlk = "LOCK TABLES "._RUDWEB_PRE."ws_nws WRITE";
      mysql_query($qlk) or require _RUDWEB_LIB_DIR . 'myerr.php';
      
      $qi = "SELECT MAX(nws_id) FROM "._RUDWEB_PRE."ws_nws";
      $ri = rudweb_qres($rudweb_dbtype, $qi);
      $nws_id = rudweb_result($rudweb_dbtype, $ri, 0) + 1;
      $crd  = date("Y-m-d");
      $crt  = date("H:i:s");
      
      $qa = "INSERT INTO "._RUDWEB_PRE."ws_nws (nws_id, nws_ln, nws_tt, nws_dsc, nws_txt, nws_crd, nws_crt, nws_cru, nws_mdd, nws_mdt, nws_mdu) VALUES ('".$nws_id."', '".$_SESSION[_RUDWEB_PRE.'usr_lang_index']."', '".$nws_tt."', '".$nws_dsc."', '".$nws_txt."', '".$crd."', '".$crt."', '".$_SESSION[_RUDWEB_PRE.'usr_id']."', '0000-00-00', '00:00:00', '0')";
      mysql_query($qa) or require _RUDWEB_LIB_DIR . 'myerr.php';
      
      $quk = "UNLOCK TABLES";
      mysql_query($quk) or require _RUDWEB_LIB_DIR . 'myerr.php';
      
      echo '<DIV CLASS="ok" STYLE="padding-top: 10px; padding-bottom: 10px;">';
      echo $rudweb_ln['adm']['itemaddok'];
      echo '</DIV>';
      echo '<DIV CLASS="ok" STYLE="padding-top: 10px; padding-bottom: 10px;">';
      restrictedLocalLink('default', $rudweb_ln['adm']['itemmod'], 'admin.php/admin/nwsmod/act/mod/nws/'.$nws_id, $_SESSION[_RUDWEB_PRE.'usr_level'], 0, $rudweb_ln['WinStatOver'], $rudweb_ln['WinStatOut'], '_self');
      echo '</DIV>';
      echo '<DIV CLASS="ok" STYLE="padding-top: 10px; padding-bottom: 10px;">';
      restrictedLocalLink('default', $rudweb_ln['adm']['itemaddnew'], 'admin.php/admin/nwsmod/act/add', $_SESSION[_RUDWEB_PRE.'usr_level'], 0, $rudweb_ln['WinStatOver'], $rudweb_ln['WinStatOut'], '_self');
      echo '</DIV>';
      echo '<DIV CLASS="ok" STYLE="padding-top: 10px; padding-bottom: 10px;">';
      restrictedLocalLink('default', $rudweb_ln['adm']['itemviewcat'], 'admin.php/admin/nwsmod/act/view', $_SESSION[_RUDWEB_PRE.'usr_level'], 0, $rudweb_ln['WinStatOver'], $rudweb_ln['WinStatOut'], '_self');
      echo '</DIV>';
    }
    else {
      // error message
      echo '<DIV CLASS="err" STYLE="padding-top: 10px; padding-bottom: 10px;">';
      echo $rudweb_ln['err']['tt'];
      echo '&#160;';
      echo $rudweb_ln['err']['add'][$err];
      echo '</DIV>';
      showNewsItemForm(0,$nws_tt,$nws_dsc,$nws_txt);
    }
  }
  else {
    showNewsItemForm(0,$nws_tt,$nws_dsc,$nws_txt);
  }
}
function showNewsItemForm($nws_id=0,$nws_tt='',$nws_dsc='',$nws_txt='') {
  global $rudweb_ln;
  global $rudweb_skin;
  echo $rudweb_skin['nws']['itm']['hdr'];
  echo '<FORM ENCTYPE="multipart/form-data" NAME="nwsform" ACTION="" METHOD="post">';
  echo $rudweb_skin['nws']['itm']['ttpre'];
  echo '<INPUT TYPE="hidden" NAME="nws_id" VALUE="'.$nws_id.'">';
  echo $rudweb_ln['adm']['tt'] . ':&#160;<BR>';
  echo '<INPUT CLASS="forminput" TYPE="text" NAME="nws_tt" MAXLENGTH="150" VALUE="'.$nws_tt.'">';
  echo $rudweb_skin['nws']['itm']['ttsuf'];
  echo $rudweb_skin['nws']['itm']['dscpre'];
  echo $rudweb_ln['adm']['dsc'] . ':&#160;<BR>';
  echo '<TEXTAREA CLASS="forminput" NAME="nws_dsc" COLS="50" ROWS="3" onKeyDown="limitText(this.form.nws_dsc,this.form.nws_dsc_cnt,255);" onKeyUp="limitText(this.form.nws_dsc,this.form.nws_dsc_cnt,255);" onChange="limitText(this.form.nws_dsc,this.form.nws_dsc_cnt,255);">';
  echo $nws_dsc;
  echo '</TEXTAREA>';
  echo '&#160;';
  echo '<INPUT CLASS="forminput" TYPE="text" NAME="nws_dsc_cnt" SIZE="3" MAXLENGTH="3" VALUE="255">';
  echo '&#160;' . $rudweb_ln['adm']['chl'];
  echo $rudweb_skin['nws']['itm']['dscsuf'];
  echo $rudweb_skin['nws']['itm']['txtpre'];
  echo $rudweb_ln['adm']['txt'] . ':&#160;<BR>';
  $oFCKeditor                                     = new FCKeditor('nws_txt');
  $oFCKeditor->BasePath                           = _RUDWEB_LIB_URL .'editor/';
  $oFCKeditor->Config['CustomConfigurationsPath'] = _RUDWEB_JS_URL . 'editor.js';
  $oFCKeditor->ToolbarSet                         = "rudweb";
  $oFCKeditor->Config['SkinPath']                 = _RUDWEB_LIB_URL . 'editor/editor/skins/rudweb/';
  $oFCKeditor->Config['EditorAreaCSS']            = _RUDWEB_SKIN_URL . $_SESSION[_RUDWEB_PRE.'usr_skin_dir'] . '/styles/editor.css';
  $oFCKeditor->Height                             = 500;
  $oFCKeditor->Value                              = $nws_txt;
  $oFCKeditor->Config['AutoDetectLanguage'] 	    = false;
  $oFCKeditor->Config['DefaultLanguage']          = $_SESSION[_RUDWEB_PRE.'usr_lang_index'];
  $oFCKeditor->Create();
  echo $rudweb_skin['nws']['itm']['txtsuf'];
  echo '<DIV><BR>';
  if($nws_id != 0) {
    echo '<INPUT CLASS="formsubmit" TYPE="submit" NAME="modnws" VALUE="'.$rudweb_ln['adm']['mod'].'">';
    echo '&#160;';
    echo '<INPUT CLASS="formsubmit" TYPE="submit" NAME="delnws" VALUE="'.$rudweb_ln['adm']['del'].'">';
  }
  else {
    echo '<INPUT CLASS="formsubmit" TYPE="submit" NAME="addnws" VALUE="' .$rudweb_ln['adm']['add'].'">';
  }
  echo '</DIV>';
  echo '</FORM>';
  echo $rudweb_skin['nws']['itm']['ftr'];
}

?>