<?php
/*
./inc/moduser.inc.php
13:30 2008-03-12
*/
if(!defined('_UBWS_PUBFIL')) {require_once './../lib/404.php';}

function genUserMod() {
  global $ubws_theme;
  global $ubws_ln;
  global $ubws_login_status;
  
  if(_UBWS_CFG_USR_ON === "1") {
    echo $ubws_theme['usr']['hdr'];
    
    if (isset($_SESSION[_UBWS_PRE.'usr_logged_in'])) {
      echo $ubws_theme['usr']['pre'];
      echo $_SESSION[_UBWS_PRE.'usr_alias'];
      echo $ubws_theme['usr']['suf'];
      
      echo $ubws_theme['usr']['sep'];
      
      echo $ubws_theme['usr']['pre'];
      echo "[" . $_SESSION[_UBWS_PRE.'usr_name'] . "]";
      echo $ubws_theme['usr']['suf'];
    
      echo $ubws_theme['usr']['sep'];
      
      echo $ubws_theme['usr']['pre'];
      echo $ubws_ln['level'] . $_SESSION[_UBWS_PRE.'usr_level'];
      echo $ubws_theme['usr']['suf'];
      
      echo $ubws_theme['usr']['sep'];
    }
    else {
      echo $ubws_theme['usr']['pre'];
      echo $ubws_ln['lgnst'][$ubws_login_status];
      echo $ubws_theme['usr']['suf'];
      
      echo $ubws_theme['usr']['sep'];
    }
    
    echo $ubws_theme['usr']['pre'];
    if (!isset($_SESSION[_UBWS_PRE.'usr_logged_in'])) {
      // FORM
      echo "\n<FORM ENCTYPE=\"multipart/form-data\" NAME=\"" . _UBWS_PRE . "login_form\" ACTION=\"\" METHOD=\"post\" STYLE=\"display: inline; margin: 0px; padding: 0px;\">";
      echo $ubws_theme['usr']['login']['hdr'];

      echo $ubws_theme['usr']['login']['pre'];
      echo "\n<INPUT TYPE=\"hidden\" NAME=\"" . _UBWS_PRE . "token\" VALUE=\"" . $_SESSION[_UBWS_PRE.'token'] . "\">";
      echo "\n<INPUT TYPE=\"text\" CLASS=\"logininput\" NAME=\"" . _UBWS_PRE . "usr_login\" SIZE=\"10\" MAXLENGTH=\"20\" VALUE=\"user\" onFocus=\"if(this.value=='user')this.value='';\" onBlur=\"if(this.value=='')this.value='user';\">";
      echo $ubws_theme['usr']['login']['suf'];
      
      echo $ubws_theme['usr']['login']['sep'];
      
      echo $ubws_theme['usr']['login']['pre'];
      echo "\n<INPUT TYPE=\"password\" CLASS=\"logininput\" NAME=\"" . _UBWS_PRE . "usr_pass\" SIZE=\"10\" MAXLENGTH=\"20\" VALUE=\"pass\" onFocus=\"if(this.value=='pass')this.value='';\" onBlur=\"if(this.value=='')this.value='pass';\">";
      echo $ubws_theme['usr']['login']['suf'];

      echo $ubws_theme['usr']['login']['sep'];
      
      echo $ubws_theme['usr']['login']['pre'];
      echo "<IMG SRC=\""._UBWS_LIB_URL."picver.php\" WIDTH=\"70\" HEIGHT=\"20\" ALT=\"verif\" TITLE=\"verif\">";
      echo "=";
      echo "\n<INPUT TYPE=\"text\" CLASS=\"logininput\" NAME=\"" . _UBWS_PRE . "usr_verif\" SIZE=\"5\" MAXLENGTH=\"5\" VALUE=\"\">";
      echo $ubws_theme['usr']['login']['suf'];
      
      echo $ubws_theme['usr']['login']['sep'];
      
      echo $ubws_theme['usr']['login']['pre'];
      echo "\n<INPUT TYPE=\"submit\" CLASS=\"loginsubmit\" NAME=\"" . _UBWS_PRE . "login\" VALUE=\"login\">";
      echo $ubws_theme['usr']['login']['suf'];
      
      echo $ubws_theme['usr']['login']['ftr'];
      echo "\n</FORM>";
    }
    else {
      // logout link
      echo $ubws_theme['usr']['login']['hdr'];

      echo $ubws_theme['usr']['login']['pre'];
      echo "<A CLASS=\"default\" HREF=\"" . _UBWS_SITE_URL . "logout.php\">" . $ubws_ln['logout'] . "</A>";
      echo $ubws_theme['usr']['login']['suf'];
      
      echo $ubws_theme['usr']['login']['ftr'];
    }
    echo $ubws_theme['usr']['suf'];
    
    echo $ubws_theme['usr']['ftr'];
  }
}
?>