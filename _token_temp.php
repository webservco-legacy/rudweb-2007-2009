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