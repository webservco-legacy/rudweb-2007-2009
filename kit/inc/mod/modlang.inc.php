<?php
/*
./inc/modlang.inc.php
13:29 2008-03-12
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once './../lib/404.php';}

if (isset($_GET['ln']) && (!isset($_POST[_RUDWEB_PRE.'usr_login']) && _RUDWEB_CFG_LANG_ON === "1")) {
  $rudweb_new_lang = rudweb_filter_input($_GET['ln']);
  if (is_file(_RUDWEB_LANG_DIR . $rudweb_new_lang . "/" . "lang.info.php")) {
    $_SESSION[_RUDWEB_PRE.'usr_lang_index'] = $rudweb_new_lang;
    $lang_request_uri = eregi_replace("/ln/".$_GET['ln'], "", $_SERVER['REQUEST_URI']);
    $lang_redirect = "http://".$_SERVER['HTTP_HOST'] . $lang_request_uri;
    header("Location: $lang_redirect");
  }
  if (isset($_GET['setln']) && ($_GET['setln'] === "1" && _RUDWEB_CFG_USR_ON === "1")) {
    if (isset($_SESSION[_RUDWEB_PRE.'usr_id']) && $_SESSION[_RUDWEB_PRE.'usr_id'] != "0") {
      $query_ln = "UPDATE `"._RUDWEB_PRE."set_usr` SET `usr_lang_index` = '" . $rudweb_new_lang . "' WHERE `usr_id` = '" . $_SESSION[_RUDWEB_PRE.'usr_id'] . "' LIMIT 1";
      mysql_query($query_ln) or require _RUDWEB_LIB_DIR . 'myerr.php';
    }
  }
} //CHANGE LANGUAGE IS SET

function genLangMod() {
  global $rudweb_theme;
  if(_RUDWEB_CFG_LANG_ON === "1") {
    $all_langs = lsdir(_RUDWEB_LANG_DIR);
    echo $rudweb_theme['lng']['hdr'];
    for ($i=1; $i <= count($all_langs); $i++) {
      if (isset($_GET['ln'])) {$this_request_uri = eregi_replace("/ln/".$_GET['ln'], "", $_SERVER['REQUEST_URI']);}
      else {$this_request_uri = $_SERVER['REQUEST_URI'];}
      if (is_file(_RUDWEB_THEME_DIR . $_SESSION[_RUDWEB_PRE.'usr_theme_dir'] . "/graphics/lang/" . $all_langs[$i] . ".png")) {
        echo $rudweb_theme['lng']['pre'];
        
        if($all_langs[$i] == "ro") {$lng_default_content = _RUDWEB_CFG_CNT_RO;}
        else if($all_langs[$i] == "en") {$lng_default_content = _RUDWEB_CFG_CNT_EN;}
        else if($all_langs[$i] == "it") {$lng_default_content = _RUDWEB_CFG_CNT_IT;}
        
        //echo "<A HREF=\"http://".$_SERVER['HTTP_HOST'] . $this_request_uri . "/ln/" . $all_langs[$i]."\">";
        echo "<A HREF=\"". _RUDWEB_SITE_URL . "index.php/content/" . $lng_default_content . "/ln/" . $all_langs[$i]."\">";
        echo "<IMG SRC=\""._RUDWEB_THEME_URL . $_SESSION[_RUDWEB_PRE.'usr_theme_dir'] . "/graphics/lang/" . $all_langs[$i] . ".png" ."\" ALT=\"" . $all_langs[$i] . "\" BORDER=\"0\">";
        echo "</A>";

        echo $rudweb_theme['lng']['suf'];

        if ($i < count($all_langs)) {echo $rudweb_theme['lng']['sep'];}
      } 
    }
    echo $rudweb_theme['lng']['ftr'];
  }
}
?>