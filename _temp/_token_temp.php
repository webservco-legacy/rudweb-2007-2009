 <?php
session_start();
$token = md5(uniqid(rand(), TRUE));
$_SESSION['token'] = $token;
$_SESSION['token_time'] = time();
?>
<input type="hidden" name="token" value="<?php echo $token; ?>" />
<!-- ######################################################################################## -->
<?php
if (isset($_SESSION['token']) && $_POST['token'] == $_SESSION['token'])
{
/* Valid Token */
}
?>
<!-- ######################################################################################## -->
<?php
$token_age = time() - $_SESSION['token_time'];

if ($token_age <= 300)
{
/* Less than five minutes has passed. */
}
?>
<!-- ######################################################################################## -->
<?php
if (isset($_SERVER['REQUEST_URI']) && (isset($_SERVER['PHP_SELF']) && $_SERVER['REQUEST_URI'] != $_SERVER['PHP_SELF'])) {
    if (isset($_SESSION[_UBWS_PRE.'token']) && isset($_POST[_UBWS_PRE.'token'])) {
      if ($_POST[_UBWS_PRE.'token'] != $_SESSION[_UBWS_PRE.'token']) {
        $ubws_login_status = 'token_error';
      }
    } // no token match
  }
?>