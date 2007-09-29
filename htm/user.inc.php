<?php
/*
user.inc.php
18:45 29.09.2007
*/

if(!defined('_UBWS_PUBFIL')) {require_once './../lib/404.php';}
?>
name: <?php echo $_SESSION[_UBWS_PRE.'usr_name']; ?>
<BR>
alias: <?php echo $_SESSION[_UBWS_PRE.'usr_alias']; ?>
<BR>
level: <?php echo $_SESSION[_UBWS_PRE.'usr_level']; ?>
<BR>
login_status: <?php echo $ubws_login_status; ?>
<?php if (!isset($_SESSION[_UBWS_PRE.'usr_logged_in'])) { ?>
<FORM ENCTYPE="multipart/form-data" CLASS="login_form" NAME="<?php echo _UBWS_PRE;?>login_form" ID="<?php echo _UBWS_PRE;?>login_form" ACTION="" METHOD="post">
<INPUT TYPE="hidden" NAME="<?php echo _UBWS_PRE;?>token" ID="<?php echo _UBWS_PRE;?>token" VALUE="<?php echo $ubws_token;?>" />
<INPUT TYPE="text" CLASS="login_box" NAME="<?php echo _UBWS_PRE;?>usr_login" ID="<?php echo _UBWS_PRE;?>usr_login" SIZE="10" MAXLENGTH="20" VALUE="user" onFocus="if(this.value=='user')this.value='';" onBlur="if(this.value=='')this.value='user';" />
<INPUT TYPE="password" CLASS="login_box" NAME="<?php echo _UBWS_PRE;?>usr_pass" ID="<?php echo _UBWS_PRE;?>usr_pass" SIZE="10" MAXLENGTH="20" VALUE="pass" onFocus="if(this.value=='pass')this.value='';" onBlur="if(this.value=='')this.value='pass';" />
<INPUT TYPE="submit" CLASS="login_button" NAME="<?php echo _UBWS_PRE;?>login" ID="<?php echo _UBWS_PRE;?>login" VALUE="login">
</FORM>
<?php } 
else { ?>
<A CLASS="logout" HREF="<?php echo _UBWS_SITE_URL; ?>logout.php">logout</A>
<?php } ?>
