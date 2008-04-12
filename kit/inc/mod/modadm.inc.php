<?php
/*
./inc/mod/modadm.inc.php
12:50 2008-04-05
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once './../lib/404.php';}

function genAdminMod() {
  global $rudweb_skin;
  global $rudweb_ln;
  global $rudweb_login_status;
  
  if(_RUDWEB_CFG_ADM === "1") {
    echo $rudweb_skin['usr']['hdr'];
    
    if (isset($_SESSION[_RUDWEB_PRE.'usr_logged_in'])) {
      echo $rudweb_skin['usr']['pre'];
      echo $_SESSION[_RUDWEB_PRE.'usr_alias'];
      echo $rudweb_skin['usr']['suf'];
      
      echo $rudweb_skin['usr']['sep'];
      
      echo $rudweb_skin['usr']['pre'];
      echo "[" . $_SESSION[_RUDWEB_PRE.'usr_name'] . "]";
      echo $rudweb_skin['usr']['suf'];
    
      echo $rudweb_skin['usr']['sep'];
      
      echo $rudweb_skin['usr']['pre'];
      echo $rudweb_ln['level'] . $_SESSION[_RUDWEB_PRE.'usr_level'];
      echo $rudweb_skin['usr']['suf'];
      
      echo $rudweb_skin['usr']['sep'];
    }
    else {
      echo $rudweb_skin['usr']['pre'];
      echo $rudweb_ln['lgnst'][$rudweb_login_status];
      echo $rudweb_skin['usr']['suf'];
      
      echo $rudweb_skin['usr']['sep'];
    }
    
    echo $rudweb_skin['usr']['pre'];
    if (!isset($_SESSION[_RUDWEB_PRE.'usr_logged_in'])) {
      // FORM
      echo "\n<FORM ENCTYPE=\"multipart/form-data\" NAME=\"" . _RUDWEB_PRE . "login_form\" ACTION=\"\" METHOD=\"post\" STYLE=\"display: inline; margin: 0px; padding: 0px;\">";
      echo $rudweb_skin['usr']['login']['hdr'];

      echo $rudweb_skin['usr']['login']['pre'];
      echo "\n<INPUT TYPE=\"hidden\" NAME=\"" . _RUDWEB_PRE . "token\" VALUE=\"" . $_SESSION[_RUDWEB_PRE.'token'] . "\">";
      echo "\n<INPUT TYPE=\"text\" CLASS=\"logininput\" NAME=\"" . _RUDWEB_PRE . "usr_login\" SIZE=\"10\" MAXLENGTH=\"30\" VALUE=\"user\" onFocus=\"if(this.value=='user')this.value='';\" onBlur=\"if(this.value=='')this.value='user';\">";
      echo $rudweb_skin['usr']['login']['suf'];
      
      echo $rudweb_skin['usr']['login']['sep'];
      
      echo $rudweb_skin['usr']['login']['pre'];
      echo "\n<INPUT TYPE=\"password\" CLASS=\"logininput\" NAME=\"" . _RUDWEB_PRE . "usr_pass\" SIZE=\"10\" MAXLENGTH=\"30\" VALUE=\"pass\" onFocus=\"if(this.value=='pass')this.value='';\" onBlur=\"if(this.value=='')this.value='pass';\">";
      echo $rudweb_skin['usr']['login']['suf'];

      echo $rudweb_skin['usr']['login']['sep'];
      
      echo $rudweb_skin['usr']['login']['pre'];
      echo "<IMG SRC=\""._RUDWEB_LIB_URL."picver.php\" WIDTH=\"70\" HEIGHT=\"20\" ALT=\"verif\" TITLE=\"verif\">";
      echo "=";
      echo "\n<INPUT TYPE=\"text\" CLASS=\"logininput\" NAME=\"" . _RUDWEB_PRE . "usr_verif\" SIZE=\"5\" MAXLENGTH=\"5\" VALUE=\"\">";
      echo $rudweb_skin['usr']['login']['suf'];
      
      echo $rudweb_skin['usr']['login']['sep'];
      
      echo $rudweb_skin['usr']['login']['pre'];
      echo "\n<INPUT TYPE=\"submit\" CLASS=\"loginsubmit\" NAME=\"" . _RUDWEB_PRE . "login\" VALUE=\"login\">";
      echo $rudweb_skin['usr']['login']['suf'];
      
      echo $rudweb_skin['usr']['login']['ftr'];
      echo "\n</FORM>";
    }
    else {
      // logout link
      echo $rudweb_skin['usr']['login']['hdr'];

      echo $rudweb_skin['usr']['login']['pre'];
      restrictedLocalLink('default', $rudweb_ln['logout'], 'logout.php', $_SESSION[_RUDWEB_PRE.'usr_level'], 0, $rudweb_ln['WinStatOver'], $rudweb_ln['WinStatOut'], '_self');
      echo $rudweb_skin['usr']['login']['suf'];
      
      echo $rudweb_skin['usr']['login']['ftr'];
    }
    echo $rudweb_skin['usr']['suf'];
    
    echo $rudweb_skin['usr']['ftr'];
  }
}
function adminMenu() {
  global $rudweb_skin;
  global $rudweb_ln;
  //global $rudweb_login_status;
  
  if ($_SESSION[_RUDWEB_PRE.'usr_level'] >= 3) {
    echo $rudweb_skin['adm']['mnu']['hdr'];

    echo $rudweb_skin['adm']['mnuhd']['pre'];
    restrictedLocalLink('adm-mnu', $rudweb_ln['adm']['adm'], 'admin.php', $_SESSION[_RUDWEB_PRE.'usr_level'], 0, $rudweb_ln['WinStatOver'], $rudweb_ln['WinStatOut'], '_self');
    echo $rudweb_skin['adm']['mnuhd']['suf'];

    // SEPARATOR
    
    echo $rudweb_skin['adm']['mnuhd']['pre'];
    echo '<A onClick="JavaScript: toggleLayer(\'l1ctl\')">';
    echo $rudweb_ln['catalog']['catalog'];
    echo '</A>';
    echo $rudweb_skin['adm']['mnuhd']['suf'];
    
    echo '<DIV ID="l1ctl">';
    echo $rudweb_skin['adm']['mnutt']['pre'];
    echo '<A onClick="JavaScript: toggleLayer(\'l2cat\')">';
    echo $rudweb_ln['catalog']['cattt'];
    echo '</A>';
    echo $rudweb_skin['adm']['mnutt']['suf'];
    
    echo '<DIV ID="l2cat" CLASS="hidden">';
    echo $rudweb_skin['adm']['mnu']['pre'];
    restrictedLocalLink('adm-mnu', 'Text here', 'admin.php/admin/texthere', $_SESSION[_RUDWEB_PRE.'usr_level'], 0, $rudweb_ln['WinStatOver'], $rudweb_ln['WinStatOut'], '_self');
    echo $rudweb_skin['adm']['mnu']['suf'];
    echo $rudweb_skin['adm']['mnu']['sep'];
    echo '</DIV>';
    
    echo $rudweb_skin['adm']['mnutt']['pre'];
    echo '<A onClick="JavaScript: toggleLayer(\'l2itm\')">';
    echo $rudweb_ln['catalog']['itemstt'];
    echo '</A>';
    echo $rudweb_skin['adm']['mnutt']['suf'];
    
    echo '<DIV ID="l2itm">';
    echo $rudweb_skin['adm']['mnu']['pre'];
    restrictedLocalLink('adm-mnu', $rudweb_ln['adm']['add'], 'admin.php/admin/itemadd', $_SESSION[_RUDWEB_PRE.'usr_level'], 0, $rudweb_ln['WinStatOver'], $rudweb_ln['WinStatOut'], '_self');
    echo $rudweb_skin['adm']['mnu']['suf'];
    echo $rudweb_skin['adm']['mnu']['sep'];
    
    echo '</DIV>';
    
    echo '</DIV>';
    
    echo $rudweb_skin['adm']['mnu']['ftr'];
  }
}
?>