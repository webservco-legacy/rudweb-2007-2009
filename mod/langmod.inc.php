<?php
/*
langmod.inc.php
17:39 13.10.2007
*/
if(!defined('_UBWS_PUBFIL')) {require_once './../lib/404.php';}

if($ubws_cfg['site']['langmod'] === 1) {
  $all_langs = lsdir(_UBWS_LANG_DIR);

  echo $mod_lang_hdr;

  for ($i=1; $i <= count($all_langs); $i++) {
    if (isset($_GET['ln'])) {$this_request_uri = eregi_replace("/ln/".$_GET['ln'], "", $_SERVER['REQUEST_URI']);}
    else {$this_request_uri = $_SERVER['REQUEST_URI'];}
  
    if (is_file(_UBWS_THEME_DIR . $_SESSION[_UBWS_PRE.'usr_theme_dir'] . "/graphics/lang/" . $all_langs[$i] . ".png")) {
      echo $mod_lang_pre;
      echo "<A HREF=\"http://".$_SERVER['HTTP_HOST'] . $this_request_uri . "/ln/" . $all_langs[$i]."\">";
      echo "<IMG SRC=\""._UBWS_THEME_URL . $_SESSION[_UBWS_PRE.'usr_theme_dir'] . "/graphics/lang/" . $all_langs[$i] . ".png" ."\" ALT=\"" . $all_langs[$i] . "\" BORDER=\"0\" />";
      echo "</A>";
      echo $mod_lang_suf;
      if ($i < count($all_langs)) {echo $mod_lang_sep;}
    } 
  }

  echo $mod_lang_ftr;
}
?>