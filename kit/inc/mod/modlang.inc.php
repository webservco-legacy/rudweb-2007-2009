<?php
/*
./inc/modlang.inc.php
13:29 2008-03-12
*/
if(!defined('_RSWEB_PUBFIL')) {require_once './../lib/404.php';}

if (isset($_GET['ln']) && (!isset($_POST[_RSWEB_PRE.'usr_login']) && _RSWEB_CFG_LANG_ON === "1")) {
  $rsweb_new_lang = rsweb_filter_input($_GET['ln']);
  if (is_file(_RSWEB_LANG_DIR . $rsweb_new_lang . "/" . "lang.info.php")) {
    $_SESSION[_RSWEB_PRE.'usr_lang_index'] = $rsweb_new_lang;
    $lang_request_uri = eregi_replace("/ln/".$_GET['ln'], "", $_SERVER['REQUEST_URI']);
    $lang_redirect = "http://".$_SERVER['HTTP_HOST'] . $lang_request_uri;
    header("Location: $lang_redirect");
  }
  if (isset($_GET['setln']) && ($_GET['setln'] === "1" && _RSWEB_CFG_USR_ON === "1")) {
    if (isset($_SESSION[_RSWEB_PRE.'usr_id']) && $_SESSION[_RSWEB_PRE.'usr_id'] != "0") {
      $query_ln = "UPDATE `"._RSWEB_PRE."set_usr` SET `usr_lang_index` = '" . $rsweb_new_lang . "' WHERE `usr_id` = '" . $_SESSION[_RSWEB_PRE.'usr_id'] . "' LIMIT 1";
      mysql_query($query_ln) or require _RSWEB_LIB_DIR . 'myerr.php';
    }
  }
} //CHANGE LANGUAGE IS SET

function genLangMod() {
  global $rsweb_theme;
  if(_RSWEB_CFG_LANG_ON === "1") {
    $all_langs = lsdir(_RSWEB_LANG_DIR);
    echo $rsweb_theme['lng']['hdr'];
    for ($i=1; $i <= count($all_langs); $i++) {
      if (isset($_GET['ln'])) {$this_request_uri = eregi_replace("/ln/".$_GET['ln'], "", $_SERVER['REQUEST_URI']);}
      else {$this_request_uri = $_SERVER['REQUEST_URI'];}
      if (is_file(_RSWEB_THEME_DIR . $_SESSION[_RSWEB_PRE.'usr_theme_dir'] . "/graphics/lang/" . $all_langs[$i] . ".png")) {
        echo $rsweb_theme['lng']['pre'];
        
        if($all_langs[$i] == "ro") {$lng_default_content = _RSWEB_CFG_CNT_RO;}
        else if($all_langs[$i] == "en") {$lng_default_content = _RSWEB_CFG_CNT_EN;}
        else if($all_langs[$i] == "it") {$lng_default_content = _RSWEB_CFG_CNT_IT;}
        
        //echo "<A HREF=\"http://".$_SERVER['HTTP_HOST'] . $this_request_uri . "/ln/" . $all_langs[$i]."\">";
        echo "<A HREF=\"". _RSWEB_SITE_URL . "index.php/content/" . $lng_default_content . "/ln/" . $all_langs[$i]."\">";
        echo "<IMG SRC=\""._RSWEB_THEME_URL . $_SESSION[_RSWEB_PRE.'usr_theme_dir'] . "/graphics/lang/" . $all_langs[$i] . ".png" ."\" ALT=\"" . $all_langs[$i] . "\" BORDER=\"0\">";
        echo "</A>";

        echo $rsweb_theme['lng']['suf'];

        if ($i < count($all_langs)) {echo $rsweb_theme['lng']['sep'];}
      } 
    }
    echo $rsweb_theme['lng']['ftr'];
  }
}
?>