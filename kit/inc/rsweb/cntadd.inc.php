<?php
/*
./inc/rsweb/cntadd.inc.php
14:49 2008-03-11
*/
if(!defined('_RSWEB_PUBFIL')) {require_once './../../lib/404.php';}
if($_SESSION[_RSWEB_PRE.'usr_level'] >= 3 && (isset($_GET['mc']) && (isset($_GET['ml']) && isset($_GET['mp'])))) {

// menu
//$mnu_id        = ""; // QRY
//$mnu_ln        = ""; // SES
$mnu_cat       = $_GET['mc']; // GET +++
$mnu_lev       = $_GET['ml']; // GET +++
$mnu_par       = $_GET['mp']; // GET +++
//$mnu_ord       = ""; // QRY
$mnu_tt        = ""; // POST +++
//$mnu_typ       = ""; // POST HD +++
//$mnu_cnt_alias = ""; // POST (cnt_tt)
$mnu_trg       = "_self"; // POST +++
//$mnu_crd       = ""; // PHP
//$mnu_crt       = ""; // PHP
//$mnu_cru       = ""; // SES
//$mnu_mdd       = ""; // // 0000-00-00
//$mnu_mdt       = ""; // // 00:00:00
//$mnu_mdu       = ""; // // 0
//$mnu_dis       = ""; // // 0
//$mnu_lvl       = ""; // // 0

// content
//$cnt_id        = ""; // QRY
//$cnt_ln        = ""; // SES
//$cnt_alias     = ""; // POST (cnt_tt)
$cnt_tt        = ""; // POST
$cnt_kw        = ""; // POST
$cnt_dsc       = ""; // POST
$cnt_stt       = ""; // POST
$cnt_txt       = ""; // POST
//$cnt_crd       = ""; // PHP
//$cnt_crt       = ""; // PHP
//$cnt_cru       = ""; // SES
//$cnt_mdd       = ""; // // 0000-00-00
//$cnt_mdt       = ""; // // 00:00:00
//$cnt_mdu       = ""; // // 0
//$cnt_dis       = ""; // // 0
//$cnt_lvl       = ""; // // 0

// link
$lnk_id        = "";
$lnk_ln        = "";
$lnk_alias     = "";
$lnk_cat       = "";
$lnk_tt        = "";
$lnk_url       = "http://";
$lnk_trg       = "_blank";
$lnk_dsc       = "";
$lnk_crd       = "";
$lnk_crt       = "";
$lnk_cru       = "";
$lnk_mdd       = "";
$lnk_mdt       = "";
$lnk_mdu       = "";
$lnk_dis       = "";
$lnk_lvl       = "";
?>
<?php
echo $rsweb_theme['cnt']['hdr'];
echo $rsweb_theme['cnt']['pre'];
?>
<FORM ENCTYPE="multipart/form-data" CLASS="contaddform" NAME="contaddform" ACTION="" METHOD="post">
<DIV STYLE="text-align:center">
<BR>
<INPUT TYPE="hidden" NAME="mnu_cat" VALUE="<?php echo $mnu_cat;?>">
<INPUT TYPE="hidden" NAME="mnu_lev" VALUE="<?php echo $mnu_lev;?>">
<INPUT TYPE="hidden" NAME="mnu_par" VALUE="<?php echo $mnu_par;?>">
<?php echo $rsweb_ln['adm']['mnu_tt'];?>
<?php $dostuff = "JavaScript:copyvalue(document.forms['contaddform'].mnu_tt, document.forms['contaddform'].cnt_tt);JavaScript:copyvalue(document.forms['contaddform'].mnu_tt, document.forms['contaddform'].lnk_tt);"; ?>
<INPUT CLASS="forminput" TYPE="text" NAME="mnu_tt" MAXLENGTH="150" VALUE="<?php echo $mnu_tt;?>" onKeyDown="<?php echo $dostuff; ?>" onKeyUp="<?php echo $dostuff; ?>" onChange="<?php echo $dostuff; ?>">
<?php echo $rsweb_ln['adm']['mnu_trg'];?>
<INPUT CLASS="forminput" TYPE="text" NAME="mnu_trg" MAXLENGTH="8" VALUE="<?php echo $mnu_trg;?>">
</DIV>
<BR>
<DIV ID="cntaddcntoff" CLASS="hidden">
<DIV STYLE="margin-left: 20px;">
<?php restrictedJsLink("default", "[+]".$rsweb_ln['adm']['new_content'], "JavaScript:toggleLayer('cntaddcnton');toggleLayer('cntaddcntoff');", $_SESSION[_RSWEB_PRE.'usr_level'], 3, $rsweb_ln['WinStatOver'], $rsweb_ln['WinStatOut']); ?>
</DIV>
</DIV>
<DIV ID="cntaddcnton">
<DIV STYLE="margin-left: 20px;">
<?php restrictedJsLink("default", "[-]".$rsweb_ln['adm']['new_content'], "JavaScript:toggleLayer('cntaddcntoff');toggleLayer('cntaddcnton');", $_SESSION[_RSWEB_PRE.'usr_level'], 3, $rsweb_ln['WinStatOver'], $rsweb_ln['WinStatOut']); ?>
</DIV>
<BR>
<!-- pics 1 -->
<?php
if (_RSWEB_CFG_PICS_1 === "1") {
  // NEW PIC
  echo $rsweb_theme['cnt']['pic']['hdr']['1'];
  echo $rsweb_theme['cnt']['pic']['pre']['1'];
  echo $rsweb_ln['adm']['new_pic'];
  echo "<INPUT CLASS=\"imgupload\" TYPE=\"file\" NAME=\"pcscntnew[1]\" SIZE=\"1\">";
  echo $rsweb_theme['cnt']['pic']['suf']['1'];
  echo $rsweb_theme['cnt']['pic']['ftr']['1'];
}
?>
<?php echo $rsweb_theme['cnt']['tt1']['pre'];?>
<INPUT CLASS="titleadm" TYPE="text" NAME="cnt_tt" MAXLENGTH="150" VALUE="<?php echo $cnt_tt;?>">
<?php echo $rsweb_theme['cnt']['tt1']['suf'];?>
<BR>
<!-- keywords /  description -->
<DIV STYLE="text-align:center">
<?php echo $rsweb_ln['adm']['cnt_kw'];?>
<INPUT CLASS="forminput" TYPE="text" NAME="cnt_kw" MAXLENGTH="255" VALUE="<?php echo $cnt_kw;?>">
<?php echo $rsweb_ln['adm']['cnt_dsc'];?>
<INPUT CLASS="forminput" TYPE="text" NAME="cnt_dsc" MAXLENGTH="255" VALUE="<?php echo $cnt_dsc;?>">
</DIV>
<BR>
<!-- pics 2 -->
<?php
if (_RSWEB_CFG_PICS_2 === "1") {
  // NEW PIC
  echo $rsweb_theme['cnt']['pic']['hdr']['2'];
  echo $rsweb_theme['cnt']['pic']['pre']['2'];
  echo $rsweb_ln['adm']['new_pic'];
  echo "<INPUT CLASS=\"imgupload\" TYPE=\"file\" NAME=\"pcscntnew[2]\" SIZE=\"1\">";
  echo $rsweb_theme['cnt']['pic']['suf']['2'];
  echo $rsweb_theme['cnt']['pic']['ftr']['2'];
}
?>
<?php echo $rsweb_theme['cnt']['tt2']['pre'];?>
<?php echo $rsweb_ln['adm']['cnt_stt'];?>
<INPUT CLASS="subtitleadm" TYPE="text" NAME="cnt_stt" MAXLENGTH="60" VALUE="<?php echo $cnt_stt;?>">
<?php echo $rsweb_theme['cnt']['tt2']['suf'];?>
<BR>
<!-- pics 3 -->
<?php
if (_RSWEB_CFG_PICS_3 === "1") {
  // NEW PIC
  echo $rsweb_theme['cnt']['pic']['hdr']['3'];
  echo $rsweb_theme['cnt']['pic']['pre']['3'];
  echo $rsweb_ln['adm']['new_pic'];
  echo "<INPUT CLASS=\"imgupload\" TYPE=\"file\" NAME=\"pcscntnew[3]\" SIZE=\"1\">";
  echo $rsweb_theme['cnt']['pic']['suf']['3'];
  echo $rsweb_theme['cnt']['pic']['ftr']['3'];
}
?>
<?php echo $rsweb_theme['cnt']['txt']['pre'];?>
<?php
$oFCKeditor                                     = new FCKeditor('cnt_txt');
$oFCKeditor->BasePath                           = _RSWEB_LIB_URL .'editor/';
$oFCKeditor->Config['CustomConfigurationsPath'] = _RSWEB_JS_URL . 'editor.js';
$oFCKeditor->ToolbarSet                         = "rsweb";
$oFCKeditor->Config['SkinPath']                 = _RSWEB_LIB_URL . 'editor/editor/skins/rsweb/';
$oFCKeditor->Config['EditorAreaCSS']            = _RSWEB_THEME_URL . $_SESSION[_RSWEB_PRE.'usr_theme_dir'] . '/styles/editor.css';
$oFCKeditor->Height                             = 500;
$oFCKeditor->Value                              = $cnt_txt;
$oFCKeditor->Config['AutoDetectLanguage'] 	    = false;
$oFCKeditor->Config['DefaultLanguage']          = $_SESSION[_RSWEB_PRE.'usr_lang_index'];
$oFCKeditor->Create();
?>
<?php echo $rsweb_theme['cnt']['txt']['suf'];?>
<!-- pics 4 -->
<?php
if (_RSWEB_CFG_PICS_4 === "1") {
  // NEW PIC
  echo $rsweb_theme['cnt']['pic']['hdr']['4'];
  echo $rsweb_theme['cnt']['pic']['pre']['4'];
  echo $rsweb_ln['adm']['new_pic'];
  echo "<INPUT CLASS=\"imgupload\" TYPE=\"file\" NAME=\"pcscntnew[4]\" SIZE=\"1\">";
  echo $rsweb_theme['cnt']['pic']['suf']['4'];
  echo $rsweb_theme['cnt']['pic']['ftr']['4'];
}
?>
  <DIV STYLE="text-align: center">
  <BR>
  <INPUT CLASS="formsubmit" TYPE="submit" NAME="cntaddcnt" VALUE="<?php echo $rsweb_ln['adm']['cnt_add'];?>">
  </DIV>
</DIV>

<DIV ID="cntaddlnkoff">
<DIV STYLE="margin-left: 20px;">
<?php restrictedJsLink("default", "[+]".$rsweb_ln['adm']['new_link'], "JavaScript:toggleLayer('cntaddlnkon');toggleLayer('cntaddlnkoff');", $_SESSION[_RSWEB_PRE.'usr_level'], 3, $rsweb_ln['WinStatOver'], $rsweb_ln['WinStatOut']); ?>
</DIV>
</DIV>
<DIV ID="cntaddlnkon" CLASS="hidden">
<DIV STYLE="margin-left: 20px;">
<?php restrictedJsLink("default", "[-]".$rsweb_ln['adm']['new_link'], "JavaScript:toggleLayer('cntaddlnkoff');toggleLayer('cntaddlnkon');", $_SESSION[_RSWEB_PRE.'usr_level'], 3, $rsweb_ln['WinStatOver'], $rsweb_ln['WinStatOut']); ?>
<BR>
<?php echo $rsweb_ln['adm']['lnk_tt']; ?>
<INPUT TYPE="hidden" NAME="lnk_cat" VALUE="1">
<INPUT CLASS="forminput" TYPE="text" NAME="lnk_tt" MAXLENGTH="150" VALUE="<?php echo $lnk_tt;?>">
<BR><BR>
<?php echo $rsweb_ln['adm']['lnk_url']; ?>
<INPUT CLASS="forminput" TYPE="text" NAME="lnk_url" MAXLENGTH="150" VALUE="<?php echo $lnk_url;?>">
<BR><BR>
<?php echo $rsweb_ln['adm']['lnk_trg']; ?>
<INPUT CLASS="forminput" TYPE="text" NAME="lnk_trg" MAXLENGTH="8" VALUE="<?php echo $lnk_trg;?>">
<BR><BR>
<?php echo $rsweb_ln['adm']['lnk_dsc']; ?>
<INPUT CLASS="forminput" TYPE="text" NAME="lnk_dsc" MAXLENGTH="255" VALUE="<?php echo $lnk_dsc;?>">

  <DIV STYLE="text-align: center">
  <BR>
  <INPUT CLASS="formsubmit" TYPE="submit" NAME="cntaddlnk" VALUE="<?php echo $rsweb_ln['adm']['cnt_add_lnk'];?>">
  </DIV>
</DIV>
</DIV>

<DIV ID="cntaddpgoff">
<DIV STYLE="margin-left: 20px;">
<?php restrictedJsLink("default", "[+]".$rsweb_ln['adm']['new_page'], "JavaScript:toggleLayer('cntaddpgon');toggleLayer('cntaddpgoff');", $_SESSION[_RSWEB_PRE.'usr_level'], 3, $rsweb_ln['WinStatOver'], $rsweb_ln['WinStatOut']); ?>
</DIV>
</DIV>
<DIV ID="cntaddpgon" CLASS="hidden">
<DIV STYLE="margin-left: 20px;">
<?php restrictedJsLink("default", "[-]".$rsweb_ln['adm']['new_page'], "JavaScript:toggleLayer('cntaddpgoff');toggleLayer('cntaddpgon');", $_SESSION[_RSWEB_PRE.'usr_level'], 3, $rsweb_ln['WinStatOver'], $rsweb_ln['WinStatOut']); ?>
<BR>
<?php echo $rsweb_ln['adm']['pg_name']; ?>
<?php
$page_list = lsfiles(_RSWEB_PG_DIR, ".inc.php");
if(is_array($page_list)) {
  echo "<SELECT CLASS=\"forminput\" NAME=\"page_tt\">";
  for ($page_i=1; $page_i<=count($page_list); $page_i++) {
    echo "<OPTION VALUE=\"".$page_list[$page_i]."\">".$page_list[$page_i]."</OPTION>";
  }
  echo "</SELECT>";
}
?>
  <DIV STYLE="text-align: center">
  <BR>
  <INPUT CLASS="formsubmit" TYPE="submit" NAME="cntaddpg" VALUE="<?php echo $rsweb_ln['adm']['cnt_add_pg'];?>">
  </DIV>
</DIV>
</DIV>
</FORM>
<?php
echo $rsweb_theme['cnt']['suf'];
echo $rsweb_theme['cnt']['ftr'];
?>
<?php
} // if user has the rights
else {
  echo "<DIV CLASS=\"err\">" . $rsweb_ln['err']['1'] . "</DIV>";
} // else if user has no rights
?>