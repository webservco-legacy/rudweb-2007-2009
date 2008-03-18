<?php
/*
./inc/rudweb/newuser.inc.php
11:43 2008-03-18
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once './../../lib/404.php';}

?>
<DIV CLASS="title">
<?php echo $rudweb_ln['usr']['newuserreg'];?>
</DIV>
<?php
$usr_first_name  = '';
$usr_middle_name = '';
$usr_last_name   = '';

$usr_phone       = '';
$usr_address     = '';
$usr_country     = '';

$usr_email1      = '';
$usr_email2      = '';

$usr_pass1       = '';
$usr_pass2       = '';

$usr_lang_index  = $_SESSION[_RUDWEB_PRE.'usr_lang_index'];

$usr_subscribe   = '1';
$usr_agree       = '0';

$usr_verif       = '';

$err_msg         = '';

if(isset($_POST['newuser'])) {
  $usr_first_name  = rudweb_filter_input($_POST['usr_first_name']);
  $usr_middle_name = rudweb_filter_input($_POST['usr_middle_name']);
  $usr_last_name   = rudweb_filter_input($_POST['usr_last_name']);

  $usr_phone       = rudweb_filter_input($_POST['usr_phone']);
  $usr_address     = rudweb_filter_input($_POST['usr_address']);
  $usr_country     = rudweb_filter_input($_POST['usr_country']);

  $usr_email1      = rudweb_filter_input($_POST['usr_email1']);
  $usr_email2      = rudweb_filter_input($_POST['usr_email2']);

  $usr_pass1       = rudweb_filter_input($_POST['usr_pass1']);
  $usr_pass2       = rudweb_filter_input($_POST['usr_pass2']);

  $usr_lang_index  = rudweb_filter_input($_POST['usr_lang_index']);

  if(isset($_POST['usr_subscribe'])) {$usr_subscribe = '1';}
  else {$usr_subscribe   = '0';}
  if(isset($_POST['usr_agree']))     {$usr_agree     = '1';}
  else {$usr_agree   = '0';}
  
  $usr_verif       = strtoupper(rudweb_filter_input($_POST['usr_verif']));
  if(isset($_SESSION[_RUDWEB_PRE.'tmpvi'])) {$usr_img_verif = $_SESSION[_RUDWEB_PRE.'tmpvi']; unset($_SESSION[_RUDWEB_PRE.'tmpvi']);}
  $err = "0";
  
  $query_verif_email = 'SELECT usr_id FROM '. _RUDWEB_PRE. 'set_usr WHERE usr_mail = \''.$usr_email1.'\' LIMIT 1';
  $result = rudweb_qres($rudweb_dbtype, $query_verif_email);
  $total_verif_email = rudweb_qtotal($rudweb_dbtype, $result);
    
  if ($usr_first_name == '')                       {$err = '1'; $err_msg = $rudweb_ln['usr']['regerr1'];}
  else if ($usr_last_name == '')                   {$err = '1'; $err_msg = $rudweb_ln['usr']['regerr2'];}
  else if ($usr_country == '')                     {$err = '1'; $err_msg = $rudweb_ln['usr']['regerr3'];}
  else if ($usr_email1 == '' || $usr_email2 == '') {$err = '1'; $err_msg = $rudweb_ln['usr']['regerr4'];}
  else if (!isEmail($usr_email1))                  {$err = '1'; $err_msg = $rudweb_ln['usr']['regerr5'];}
  else if ($usr_email1 !== $usr_email2)            {$err = '1'; $err_msg = $rudweb_ln['usr']['regerr6'];}
  else if ($total_verif_email > '0')             {$err = '1'; $err_msg = $rudweb_ln['usr']['regerr12'];} // user already exists
  else if ($usr_pass1 == '' || $usr_pass2 == '')   {$err = '1'; $err_msg = $rudweb_ln['usr']['regerr7'];}
  else if (strlen($usr_pass1) < 6)                 {$err = '1'; $err_msg = $rudweb_ln['usr']['regerr8'];}
  else if ($usr_pass1 !== $usr_pass2)              {$err = '1'; $err_msg = $rudweb_ln['usr']['regerr9'];}
  else if ($usr_agree !== '1')                     {$err = '1'; $err_msg = $rudweb_ln['usr']['regerr10'];}
  else if ($usr_verif != $usr_img_verif)           {$err = '1'; $err_msg = $rudweb_ln['usr']['regerr11'];$usr_verif = '';}
  
  if($err == '0') { // do the thing
    echo 'do the thing';
  }
  else if ($err == '1') {
    // show what is wrong
    //session_regenerate_id(TRUE);
    //$_SESSION[_RUDWEB_PRE.'token'] = md5(uniqid(rand(), TRUE));
    require_once _RUDWEB_RUDWEB_DIR . 'newuserform.inc.php';
  }
}
else {
  require_once _RUDWEB_RUDWEB_DIR . 'newuserform.inc.php';
}
?>