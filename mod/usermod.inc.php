<?php
/*
usermod.inc.php
17:32 27.10.2007
*/
if(!defined('_UBWS_PUBFIL')) {require_once './../lib/404.php';}

if($ubws_cfg['site']['usermod'] === 1) {
  echo $mod_user_hdr;

  echo $mod_user_pre;
  echo $_SESSION[_UBWS_PRE.'usr_name'];
  echo $mod_user_suf;

  echo $mod_user_sep;

  echo $mod_user_pre;
  echo $_SESSION[_UBWS_PRE.'usr_alias'];
  echo $mod_user_suf;

  echo $mod_user_sep;

  echo $mod_user_pre;
  echo $_SESSION[_UBWS_PRE.'usr_level'];
  echo $mod_user_suf;

  echo $mod_user_sep;

  echo $mod_user_pre;
  echo $ubws_lnLgStat[$ubws_login_status];
  echo $mod_user_suf;

  echo $mod_user_sep;

  echo $mod_user_pre;
  if (!isset($_SESSION[_UBWS_PRE.'usr_logged_in'])) {
    echo "\n<FORM ENCTYPE=\"multipart/form-data\" CLASS=\"login_form\" NAME=\"" . _UBWS_PRE . "login_form\" ID=\"" . _UBWS_PRE . "login_form\" ACTION=\"\" METHOD=\"post\">";
    echo "\n<INPUT TYPE=\"hidden\" NAME=\"" . _UBWS_PRE . "token\" ID=\"" . _UBWS_PRE . "token\" VALUE=\"" . $_SESSION[_UBWS_PRE.'token'] . "\">";
    echo "\n<INPUT TYPE=\"text\" CLASS=\"login_box\" NAME=\"" . _UBWS_PRE . "usr_login\" ID=\"" . _UBWS_PRE . "usr_login\" SIZE=\"10\" MAXLENGTH=\"20\" VALUE=\"user\" onFocus=\"if(this.value=='user')this.value='';\" onBlur=\"if(this.value=='')this.value='user';\">";
    echo "\n<INPUT TYPE=\"password\" CLASS=\"login_box\" NAME=\"" . _UBWS_PRE . "usr_pass\" ID=\"" . _UBWS_PRE. "usr_pass\" SIZE=\"10\" MAXLENGTH=\"20\" VALUE=\"pass\" onFocus=\"if(this.value=='pass')this.value='';\" onBlur=\"if(this.value=='')this.value='pass';\">";
    echo "\n<INPUT TYPE=\"submit\" CLASS=\"login_button\" NAME=\"" . _UBWS_PRE . "login\" ID=\"" . _UBWS_PRE . "login\" VALUE=\"login\">";
    echo "\n</FORM>";
  }
  else {
    echo "<A CLASS=\"logout\" HREF=\"" . _UBWS_SITE_URL . "logout.php\">" . $ubws_lnLgLogoutLnk . "</A>";
  }
  echo $mod_user_suf;

  echo $mod_user_ftr;
}
?>