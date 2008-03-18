<?php
/*
./inc/mod/moduser.inc.php
13:30 2008-03-12
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once './../lib/404.php';}

function genUserMod() {
  global $rudweb_theme;
  global $rudweb_ln;
  global $rudweb_login_status;
  
  if(_RUDWEB_CFG_USR_ON === "1") {
    echo $rudweb_theme['usr']['hdr'];
    
    if (isset($_SESSION[_RUDWEB_PRE.'usr_logged_in'])) {
      echo $rudweb_theme['usr']['pre'];
      echo $_SESSION[_RUDWEB_PRE.'usr_alias'];
      echo $rudweb_theme['usr']['suf'];
      
      echo $rudweb_theme['usr']['sep'];
      
      echo $rudweb_theme['usr']['pre'];
      echo "[" . $_SESSION[_RUDWEB_PRE.'usr_name'] . "]";
      echo $rudweb_theme['usr']['suf'];
    
      echo $rudweb_theme['usr']['sep'];
      
      echo $rudweb_theme['usr']['pre'];
      echo $rudweb_ln['level'] . $_SESSION[_RUDWEB_PRE.'usr_level'];
      echo $rudweb_theme['usr']['suf'];
      
      echo $rudweb_theme['usr']['sep'];
    }
    else {
      echo $rudweb_theme['usr']['pre'];
      echo $rudweb_ln['lgnst'][$rudweb_login_status];
      echo $rudweb_theme['usr']['suf'];
      
      echo $rudweb_theme['usr']['sep'];
    }
    
    echo $rudweb_theme['usr']['pre'];
    if (!isset($_SESSION[_RUDWEB_PRE.'usr_logged_in'])) {
      // FORM
      echo "\n<FORM ENCTYPE=\"multipart/form-data\" NAME=\"" . _RUDWEB_PRE . "login_form\" ACTION=\"\" METHOD=\"post\" STYLE=\"display: inline; margin: 0px; padding: 0px;\">";
      echo $rudweb_theme['usr']['login']['hdr'];

      echo $rudweb_theme['usr']['login']['pre'];
      echo "\n<INPUT TYPE=\"hidden\" NAME=\"" . _RUDWEB_PRE . "token\" VALUE=\"" . $_SESSION[_RUDWEB_PRE.'token'] . "\">";
      echo "\n<INPUT TYPE=\"text\" CLASS=\"logininput\" NAME=\"" . _RUDWEB_PRE . "usr_login\" SIZE=\"10\" MAXLENGTH=\"20\" VALUE=\"user\" onFocus=\"if(this.value=='user')this.value='';\" onBlur=\"if(this.value=='')this.value='user';\">";
      echo $rudweb_theme['usr']['login']['suf'];
      
      echo $rudweb_theme['usr']['login']['sep'];
      
      echo $rudweb_theme['usr']['login']['pre'];
      echo "\n<INPUT TYPE=\"password\" CLASS=\"logininput\" NAME=\"" . _RUDWEB_PRE . "usr_pass\" SIZE=\"10\" MAXLENGTH=\"20\" VALUE=\"pass\" onFocus=\"if(this.value=='pass')this.value='';\" onBlur=\"if(this.value=='')this.value='pass';\">";
      echo $rudweb_theme['usr']['login']['suf'];

      echo $rudweb_theme['usr']['login']['sep'];
      
      echo $rudweb_theme['usr']['login']['pre'];
      echo "<IMG SRC=\""._RUDWEB_LIB_URL."picver.php\" WIDTH=\"70\" HEIGHT=\"20\" ALT=\"verif\" TITLE=\"verif\">";
      echo "=";
      echo "\n<INPUT TYPE=\"text\" CLASS=\"logininput\" NAME=\"" . _RUDWEB_PRE . "usr_verif\" SIZE=\"5\" MAXLENGTH=\"5\" VALUE=\"\">";
      echo $rudweb_theme['usr']['login']['suf'];
      
      echo $rudweb_theme['usr']['login']['sep'];
      
      echo $rudweb_theme['usr']['login']['pre'];
      echo "\n<INPUT TYPE=\"submit\" CLASS=\"loginsubmit\" NAME=\"" . _RUDWEB_PRE . "login\" VALUE=\"login\">";
      echo $rudweb_theme['usr']['login']['suf'];
      
      echo $rudweb_theme['usr']['login']['ftr'];
      echo "\n</FORM>";
    }
    else {
      // logout link
      echo $rudweb_theme['usr']['login']['hdr'];

      echo $rudweb_theme['usr']['login']['pre'];
      echo "<A CLASS=\"default\" HREF=\"" . _RUDWEB_SITE_URL . "logout.php\">" . $rudweb_ln['logout'] . "</A>";
      echo $rudweb_theme['usr']['login']['suf'];
      
      echo $rudweb_theme['usr']['login']['ftr'];
    }
    echo $rudweb_theme['usr']['suf'];
    
    echo $rudweb_theme['usr']['ftr'];
  }
}
?>