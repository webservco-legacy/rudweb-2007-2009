<?php
/*
./inc/mod/moduser.inc.php
19:04 2008-06-11
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once './../lib/404.php';}

if(isset($_POST['newuser'])) {
  $usr_img_verif = str_split($_SESSION[_RUDWEB_PRE.'token'], 5);
  $usr_img_verif = strtoupper(strrev($usr_img_verif['0']));
  $_SESSION[_RUDWEB_PRE.'tmpvi'] = $usr_img_verif;
  session_regenerate_id(TRUE);
  $_SESSION[_RUDWEB_PRE.'token'] = md5(uniqid(rand(), TRUE));
}

function genUserMod() {
  global $rudweb_skin;
  global $rudweb_ln;
  global $rudweb_login_status;
  
  if(_RUDWEB_CFG_USR_ON === "1") {
    echo $rudweb_skin['usr']['hdr'];
    
    if (isset($_SESSION[_RUDWEB_PRE.'usr_logged_in'])) {
      echo $rudweb_skin['usr']['pre'];
      echo '<B>'. $_SESSION[_RUDWEB_PRE.'usr_alias'] . '</B>';
      echo ' [' . $_SESSION[_RUDWEB_PRE.'usr_name'] . ']';
      echo $rudweb_skin['usr']['suf'];
    
      echo $rudweb_skin['usr']['sep'];
      
      echo $rudweb_skin['usr']['pre'];
      echo $rudweb_ln['level'] . $_SESSION[_RUDWEB_PRE.'usr_level'];
      echo $rudweb_skin['usr']['suf'];
      
      echo $rudweb_skin['usr']['sep'];
    }
    else {
      echo $rudweb_skin['usr']['pre'];
      echo '<B>' . $rudweb_ln['usr']['retuser']. ':</B> ';
      echo $rudweb_ln['lgnst'][$rudweb_login_status];
      if($rudweb_login_status == '3') {
        echo '&#160';
        restrictedLocalLink('default', $rudweb_ln['usr']['lostpass'], _RUDWEB_INDEX_PHP . 'show/lostpass', $_SESSION[_RUDWEB_PRE.'usr_level'], 0, $rudweb_ln['WinStatOver'], $rudweb_ln['WinStatOut'], '_self');
      }
      echo $rudweb_skin['usr']['suf'];
      
      echo $rudweb_skin['usr']['sep'];
    }
    
    echo $rudweb_skin['usr']['pre'];
    if (!isset($_SESSION[_RUDWEB_PRE.'usr_logged_in'])) {
      // FORM
      echo $rudweb_skin['usr']['login']['hdr'];
      echo '<FORM ENCTYPE="multipart/form-data" NAME="' . _RUDWEB_PRE . 'login_form" ACTION="" METHOD="post">';

      echo $rudweb_skin['usr']['login']['pre'];
      echo "\n<INPUT TYPE=\"hidden\" NAME=\"" . _RUDWEB_PRE . "token\" VALUE=\"" . $_SESSION[_RUDWEB_PRE.'token'] . "\">";
      echo "\n<INPUT TYPE=\"text\" CLASS=\"logininput\" NAME=\"" . _RUDWEB_PRE . "usr_login\" SIZE=\"15\" MAXLENGTH=\"30\" VALUE=\"email\" onFocus=\"if(this.value=='email')this.value='';\" onBlur=\"if(this.value=='')this.value='email';\">";
      echo $rudweb_skin['usr']['login']['suf'];
      
      echo $rudweb_skin['usr']['login']['sep'];
      
      echo $rudweb_skin['usr']['login']['pre'];
      echo "\n<INPUT TYPE=\"password\" CLASS=\"logininput\" NAME=\"" . _RUDWEB_PRE . "usr_pass\" SIZE=\"15\" MAXLENGTH=\"30\" VALUE=\"pass\" onFocus=\"if(this.value=='pass')this.value='';\" onBlur=\"if(this.value=='')this.value='pass';\">";
      echo $rudweb_skin['usr']['login']['suf'];

      echo $rudweb_skin['usr']['login']['sep'];
      
      echo $rudweb_skin['usr']['login']['pre'];
      echo "<IMG SRC=\""._RUDWEB_LIB_URL."picver.php\" WIDTH=\"70\" HEIGHT=\"20\" ALT=\"verif\" TITLE=\"verif\" ALIGN=\"middle\">";
      echo "=";
      echo "\n<INPUT TYPE=\"text\" CLASS=\"logininput\" NAME=\"" . _RUDWEB_PRE . "usr_verif\" SIZE=\"5\" MAXLENGTH=\"5\" VALUE=\"\">";
      echo $rudweb_skin['usr']['login']['suf'];
      
      echo $rudweb_skin['usr']['login']['sep'];
      
      echo $rudweb_skin['usr']['login']['pre'];
      echo "\n<INPUT TYPE=\"submit\" CLASS=\"loginsubmit\" NAME=\"" . _RUDWEB_PRE . "login\" VALUE=\"Login\">";
      echo $rudweb_skin['usr']['login']['suf'];
      
      
      echo "\n</FORM>";
      
      echo $rudweb_skin['usr']['login']['pre'];
      echo '<B>' . $rudweb_ln['usr']['newuser']. ':</B> ';
      restrictedLocalLink('default', $rudweb_ln['usr']['signup'] . '!', _RUDWEB_INDEX_PHP . 'show/newuser', $_SESSION[_RUDWEB_PRE.'usr_level'], 0, $rudweb_ln['WinStatOver'], $rudweb_ln['WinStatOut'], '_self');
      echo $rudweb_skin['usr']['login']['suf'];
      
      echo $rudweb_skin['usr']['login']['ftr'];
    }
    else {
      // logout link
      //echo $rudweb_skin['usr']['login']['hdr'];

      //echo $rudweb_skin['usr']['login']['pre'];
      restrictedLocalLink('logout', $rudweb_ln['logout'], 'logout.php', $_SESSION[_RUDWEB_PRE.'usr_level'], 0, $rudweb_ln['WinStatOver'], $rudweb_ln['WinStatOut'], '_self');
      //  echo $rudweb_skin['usr']['login']['suf'];
      
      //echo $rudweb_skin['usr']['login']['ftr'];
    }
    echo $rudweb_skin['usr']['suf'];
    
    echo $rudweb_skin['usr']['ftr'];
  }
}



?>