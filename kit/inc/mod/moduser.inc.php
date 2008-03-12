<?php
/*
./inc/moduser.inc.php
13:30 2008-03-12
*/
if(!defined('_RSWEB_PUBFIL')) {require_once './../lib/404.php';}

function genUserMod() {
  global $rsweb_theme;
  global $rsweb_ln;
  global $rsweb_login_status;
  
  if(_RSWEB_CFG_USR_ON === "1") {
    echo $rsweb_theme['usr']['hdr'];
    
    if (isset($_SESSION[_RSWEB_PRE.'usr_logged_in'])) {
      echo $rsweb_theme['usr']['pre'];
      echo $_SESSION[_RSWEB_PRE.'usr_alias'];
      echo $rsweb_theme['usr']['suf'];
      
      echo $rsweb_theme['usr']['sep'];
      
      echo $rsweb_theme['usr']['pre'];
      echo "[" . $_SESSION[_RSWEB_PRE.'usr_name'] . "]";
      echo $rsweb_theme['usr']['suf'];
    
      echo $rsweb_theme['usr']['sep'];
      
      echo $rsweb_theme['usr']['pre'];
      echo $rsweb_ln['level'] . $_SESSION[_RSWEB_PRE.'usr_level'];
      echo $rsweb_theme['usr']['suf'];
      
      echo $rsweb_theme['usr']['sep'];
    }
    else {
      echo $rsweb_theme['usr']['pre'];
      echo $rsweb_ln['lgnst'][$rsweb_login_status];
      echo $rsweb_theme['usr']['suf'];
      
      echo $rsweb_theme['usr']['sep'];
    }
    
    echo $rsweb_theme['usr']['pre'];
    if (!isset($_SESSION[_RSWEB_PRE.'usr_logged_in'])) {
      // FORM
      echo "\n<FORM ENCTYPE=\"multipart/form-data\" NAME=\"" . _RSWEB_PRE . "login_form\" ACTION=\"\" METHOD=\"post\" STYLE=\"display: inline; margin: 0px; padding: 0px;\">";
      echo $rsweb_theme['usr']['login']['hdr'];

      echo $rsweb_theme['usr']['login']['pre'];
      echo "\n<INPUT TYPE=\"hidden\" NAME=\"" . _RSWEB_PRE . "token\" VALUE=\"" . $_SESSION[_RSWEB_PRE.'token'] . "\">";
      echo "\n<INPUT TYPE=\"text\" CLASS=\"logininput\" NAME=\"" . _RSWEB_PRE . "usr_login\" SIZE=\"10\" MAXLENGTH=\"20\" VALUE=\"user\" onFocus=\"if(this.value=='user')this.value='';\" onBlur=\"if(this.value=='')this.value='user';\">";
      echo $rsweb_theme['usr']['login']['suf'];
      
      echo $rsweb_theme['usr']['login']['sep'];
      
      echo $rsweb_theme['usr']['login']['pre'];
      echo "\n<INPUT TYPE=\"password\" CLASS=\"logininput\" NAME=\"" . _RSWEB_PRE . "usr_pass\" SIZE=\"10\" MAXLENGTH=\"20\" VALUE=\"pass\" onFocus=\"if(this.value=='pass')this.value='';\" onBlur=\"if(this.value=='')this.value='pass';\">";
      echo $rsweb_theme['usr']['login']['suf'];

      echo $rsweb_theme['usr']['login']['sep'];
      
      echo $rsweb_theme['usr']['login']['pre'];
      echo "<IMG SRC=\""._RSWEB_LIB_URL."picver.php\" WIDTH=\"70\" HEIGHT=\"20\" ALT=\"verif\" TITLE=\"verif\">";
      echo "=";
      echo "\n<INPUT TYPE=\"text\" CLASS=\"logininput\" NAME=\"" . _RSWEB_PRE . "usr_verif\" SIZE=\"5\" MAXLENGTH=\"5\" VALUE=\"\">";
      echo $rsweb_theme['usr']['login']['suf'];
      
      echo $rsweb_theme['usr']['login']['sep'];
      
      echo $rsweb_theme['usr']['login']['pre'];
      echo "\n<INPUT TYPE=\"submit\" CLASS=\"loginsubmit\" NAME=\"" . _RSWEB_PRE . "login\" VALUE=\"login\">";
      echo $rsweb_theme['usr']['login']['suf'];
      
      echo $rsweb_theme['usr']['login']['ftr'];
      echo "\n</FORM>";
    }
    else {
      // logout link
      echo $rsweb_theme['usr']['login']['hdr'];

      echo $rsweb_theme['usr']['login']['pre'];
      echo "<A CLASS=\"default\" HREF=\"" . _RSWEB_SITE_URL . "logout.php\">" . $rsweb_ln['logout'] . "</A>";
      echo $rsweb_theme['usr']['login']['suf'];
      
      echo $rsweb_theme['usr']['login']['ftr'];
    }
    echo $rsweb_theme['usr']['suf'];
    
    echo $rsweb_theme['usr']['ftr'];
  }
}
?>