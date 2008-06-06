<?php
/*
./rudweb.php
14:00 2008-06-05
*/
error_reporting(E_ALL);
define("_RUDWEB_PUBFIL", TRUE);

require_once './inc/config.inc.php';
require_once './inc/rudwebc.inc.php';
require_once './inc/rudwebf.inc.php';

rudweb_dbopen($rudweb_dbtype, $rudweb_dbhost, $rudweb_dbport, $rudweb_dbuser, $rudweb_dbpass, $rudweb_dbname);

if(_RUDWEB_DBCFG === "1") {
  // query
  $query_cfg = "SELECT * FROM "._RUDWEB_PRE."set_cfg";
  $rst_query_cfg = mysql_query($query_cfg) or require _RUDWEB_SITE_DIR . 'lib/myerr.php';
  $total_cfg = mysql_num_rows($rst_query_cfg);
  for ($cfg=1; $cfg<=$total_cfg; $cfg++) {
    $row_rst_cfg = mysql_fetch_assoc($rst_query_cfg);
    $row_rst_cfg['set_val'] = strval($row_rst_cfg['set_val']);
    define("_RUDWEB_CFG_".$row_rst_cfg['set_set'], $row_rst_cfg['set_val']);
  }
  define("_RUDWEB_CFG_COPY", "&copy; " . substr(_RUDWEB_CFG_START, 0, 4) . " " . _RUDWEB_CFG_CLCOM);
}
else {require_once _RUDWEB_INC_DIR . 'rudwebcfg.inc.php';}

session_cache_limiter('public, must-revalidate');
//session_cache_limiter('nocache');
session_cache_expire(600); //minutes
ini_set("session.gc_maxlifetime","36000"); //seconds
//setcookie("PHPSESSID",$_COOKIE['PHPSESSID'],time()+1800);
session_start();
header("ETag: PUB" . time());
header("Last-Modified: " . gmdate("D, d M Y H:i:s", time()-10) . " GMT");
header("Expires: " . gmdate("D, d M Y H:i:s", time() + 5) . " GMT");
header("Pragma: no-cache");
header("Cache-Control: max-age=1, s-maxage=1, no-cache, must-revalidate");

//require_once './../inc/rudweb1.inc.php';
//require_once './../inc/rudweb2.inc.php';


require_once _RUDWEB_LANG_DIR . _RUDWEB_CFG_LANG .'/langcfg.inc.php';
require_once _RUDWEB_LANG_DIR . _RUDWEB_CFG_LANG .'/lang.info.php';
require_once  _RUDWEB_SKIN_DIR . _RUDWEB_CFG_SKIN .'/skin.info.php';



if(!isset($_GET['version'])) {
  header("Content-type: image/png");
  header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
  header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); // Date in the past
  $img = imagecreatetruecolor(450, 390);

  $bgc = imagecolorallocate($img, hexdec('0xDD'), hexdec('0xDD'), hexdec('0xDD'));
  $fgc = imagecolorallocate($img, hexdec('0x00'), hexdec('0x00'), hexdec('0x00'));
  $fgc2 = imagecolorallocate($img, hexdec('0xFF'), hexdec('0xFF'), hexdec('0xFF'));

  $font = _RUDWEB_TTF_DIR . "Dustismo.ttf";


  imagefill($img, 0, 0, $bgc);

  //imagefilledrectangle ( resource image, int x1, int y1, int x2, int y2, int color )
  imagefilledrectangle($img, 170, 0, 450, 390, hexdec('0xCCCCCC'));
  
  //                                img        sz               ang       x          y      color           font                 text
  imagettftext($img, 126, -38, -10, 74, hexdec('0xEEEEEE'), $font, 'RudWEb');

  imagettftext($img, 11, 0, 88,  18, $fgc, $font, 'Website Title');
  imagettftext($img, 11, 0, 175,  18, $fgc, $font, _RUDWEB_WSTT);
  imagettftext($img, 11, 0, 52,  36, $fgc, $font, 'Website Start Date');
  imagettftext($img, 11, 0, 175,  36, $fgc, $font, _RUDWEB_CFG_START);
  imagettftext($img, 11, 0, 93,  54, $fgc, $font, 'Website URL');
  imagettftext($img, 11, 0, 175,  54, $fgc, $font, _RUDWEB_SITE_URL);
  
  imagettftext($img, 11, 0, 72,  80, $fgc, $font, 'Client Company');
  imagettftext($img, 11, 0, 175,  80, $fgc, $font, _RUDWEB_CFG_CLCOM);
  imagettftext($img, 11, 0, 34,  98, $fgc, $font, 'Client Contact Person');
  imagettftext($img, 11, 0, 175,  98, $fgc, $font, _RUDWEB_CFG_CLNAM);
  
  imagettftext($img, 11, 0, 42, 124, $fgc, $font, 'Developer Company');
  imagettftext($img, 11, 0, 175, 124, $fgc, $font, _RUDWEB_CFG_DVCOM);
  imagettftext($img, 11, 0, 4, 142, $fgc, $font, 'Developer Contact Person');
  imagettftext($img, 11, 0, 175, 142, $fgc, $font, _RUDWEB_CFG_DVNAM);
  imagettftext($img, 11, 0, 52, 160, $fgc, $font, 'Developer Website');
  imagettftext($img, 11, 0, 175, 160, $fgc, $font, _RUDWEB_CFG_DVURL);
  
  imagettftext($img, 11, 0, 92, 186, $fgc, $font, 'Powered By');
  imagettftext($img, 11, 0, 175, 186, $fgc, $font, 'RudWEb');
  imagettftext($img, 11, 0, 73, 204, $fgc, $font, 'Engine Version');
  imagettftext($img, 11, 0, 175, 204, $fgc, $font, _RUDWEB_SITE_VERSION);
  imagettftext($img, 11, 0, 82, 222, $fgc, $font, 'Engine Author');
  imagettftext($img, 11, 0, 175, 222, $fgc, $font, _RUDWEB_SITE_AUTH);
  imagettftext($img, 11, 0, 73, 240, $fgc, $font, 'Engine Website');
  imagettftext($img, 11, 0, 175, 240, $fgc, $font, 'http://www.rudisoft.net');
  
  imagettftext($img, 11, 0, 104, 266, $fgc, $font, 'Skin Name');
  imagettftext($img, 11, 0, 175, 266, $fgc, $font, $rudweb_skin_name);
  imagettftext($img, 11, 0, 90, 284, $fgc, $font, 'Skin Version');
  imagettftext($img, 11, 0, 175, 284, $fgc, $font, $rudweb_skin_version);
  imagettftext($img, 11, 0, 98, 302, $fgc, $font, 'Skin Author');
  imagettftext($img, 11, 0, 175, 302, $fgc, $font, $rudweb_skin_author);
  imagettftext($img, 11, 0, 90, 320, $fgc, $font, 'Skin Website');
  imagettftext($img, 11, 0, 175, 320, $fgc, $font, $rudweb_skin_website);
  
  imagettftext($img, 11, 0, 30, 346, $fgc, $font, 'Language Local Name');
  imagettftext($img, 11, 0, 175, 346, $fgc, $font, $rudweb_lang_local_name);
  imagettftext($img, 11, 0, 36, 364, $fgc, $font, 'Language Translator');
  imagettftext($img, 11, 0, 175, 364, $fgc, $font, $rudweb_lang_translator);
  imagettftext($img, 11, 0, 52, 382, $fgc, $font, 'Language Charset');
  imagettftext($img, 11, 0, 175, 382, $fgc, $font, $rudweb_lang_charset);

  imagepng($img); 
  imagedestroy($img);
}
else {
  require_once _RUDWEB_LIB_DIR . '404.php';
}
?>