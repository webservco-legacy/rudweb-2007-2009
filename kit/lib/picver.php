<?php
/*
./lib/picver.php
11:27 2008-06-27
*/
error_reporting(E_ALL);
define("_RUDWEB_PUBFIL", TRUE);
require_once './../inc/config.inc.php';
require_once './../inc/rudwebc.inc.php';
require_once './../inc/rudwebf.inc.php';

// START SESSION
//session_cache_limiter ('public, must-revalidate');
session_cache_limiter('nocache');
session_cache_expire(600); //minutes
ini_set("session.gc_maxlifetime","36000"); //seconds
session_start();

if(isset($_SESSION[_RUDWEB_PRE.'token'])) {
  $br  = hexdec('0x' . substr($_SESSION[_RUDWEB_PRE.'usr_skin_bg'], 1, 2));
  $bg  = hexdec('0x' . substr($_SESSION[_RUDWEB_PRE.'usr_skin_bg'], 3, 2));
  $bb  = hexdec('0x' . substr($_SESSION[_RUDWEB_PRE.'usr_skin_bg'], 5, 2));

  $fr  = hexdec("0x" . substr($_SESSION[_RUDWEB_PRE.'usr_skin_fg'], 1, 2));
  $fg  = hexdec("0x" . substr($_SESSION[_RUDWEB_PRE.'usr_skin_fg'], 3, 2));
  $fb  = hexdec("0x" . substr($_SESSION[_RUDWEB_PRE.'usr_skin_fg'], 5, 2));

  $verif = str_split(strtoupper($_SESSION[_RUDWEB_PRE.'token']), 1);

  header("Content-type: image/png");
  header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
  header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); // Date in the past
  $img = imagecreatetruecolor(70, 20);

  $bgc = imagecolorallocate($img, $br, $bg, $bb);
  $fgc = imagecolorallocate($img, $fr, $fg, $fb);

  $font = _RUDWEB_TTF_DIR . "VeraMono.ttf";

  imagefill($img, 0, 0, $bgc);

  //                                img        sz  ang          x          y      color           font                 text
  imagettftext($img, 15, 10, 3, 18, $fgc, $font, $verif['4']);
  imagettftext($img, 12, -30, 15, 15, $fgc, $font, $verif['3']);
  imagettftext($img, 15, 10, 28, 18, $fgc, $font, $verif['2']);
  imagettftext($img, 15, -10, 40, 16, $fgc, $font, $verif['1']);
  imagettftext($img, 15, 10, 58, 18, $fgc, $font, $verif['0']);

  imagepng($img); 
  imagedestroy($img);
}
else {
  require_once _RUDWEB_LIB_DIR . '404.php';
}
?>