<?php
/*
./themes/rudwebdef/theme.inc.php
17:56 2008-03-12
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once '../../lib/404.php';}

if (_RUDWEB_DBTHM === "1") {
  // FROM DB
}
else {
  // FROM FILE
  /* ********** ********** ********** BODY ********** ********** ********** */
  // BODY
  $rudweb_theme['BgColor']         = "#FFFFFF";
  $rudweb_theme['FontColor']       = "#000000";
  $rudweb_theme['FontErrColor']    = "#990000";
  $rudweb_theme['MarginTop']       = "0";
  $rudweb_theme['MarginBottom']    = "0";
  $rudweb_theme['MarginLeft']      = "0";
  $rudweb_theme['MarginRight']     = "0";
  $rudweb_theme['TextAlign']       = "left";
  $rudweb_theme['VerticalAlign']   = "middle";
  $rudweb_theme['TextDecoration']  = "none";
  $rudweb_theme['FontFamily']      = "verdana, arial, helvetica, sans-serif";
  $rudweb_theme['FontWeight']      = "normal";
  $rudweb_theme['FontSize']        = "11";
  $rudweb_theme['Measure']         = "px";
  $rudweb_theme['BorderColor']     = "#333333";
  $rudweb_theme['BorderStyle']     = "dashed";
  $rudweb_theme['BorderTop']       = "0";
  $rudweb_theme['BorderBottom']    = "0";
  $rudweb_theme['BorderLeft']      = "0";
  $rudweb_theme['BorderRight']     = "0";
  $rudweb_theme['PaddingTop']      = "0";
  $rudweb_theme['PaddingBottom']   = "0";
  $rudweb_theme['PaddingLeft']     = "0";
  $rudweb_theme['PaddingRight']    = "0";

  /* ********** ********** ********** DEFAULT LINKS ********** ********** ********** */
  // LINK
  $rudweb_theme['LnkL']['BgColor']        = $rudweb_theme['BgColor'];
  $rudweb_theme['LnkL']['FontColor']      = $rudweb_theme['FontColor'];
  $rudweb_theme['LnkL']['TextDecoration'] = 'underline';
  $rudweb_theme['LnkL']['FontFamily']     = $rudweb_theme['FontFamily'];
  $rudweb_theme['LnkL']['FontWeight']     = $rudweb_theme['FontWeight'];
  $rudweb_theme['LnkL']['FontSize']       = $rudweb_theme['FontSize'];
  // VISITED LINK
  $rudweb_theme['LnkV']['BgColor']        = $rudweb_theme['BgColor'];
  $rudweb_theme['LnkV']['FontColor']      = $rudweb_theme['FontColor'];
  $rudweb_theme['LnkV']['TextDecoration'] = 'underline';
  $rudweb_theme['LnkV']['FontFamily']     = $rudweb_theme['FontFamily'];
  $rudweb_theme['LnkV']['FontWeight']     = $rudweb_theme['FontWeight'];
  $rudweb_theme['LnkV']['FontSize']       = $rudweb_theme['FontSize'];
  // HOVER LINK
  $rudweb_theme['LnkH']['BgColor']        = $rudweb_theme['BgColor'];
  $rudweb_theme['LnkH']['FontColor']      = $rudweb_theme['FontColor'];
  $rudweb_theme['LnkH']['TextDecoration'] = 'none';
  $rudweb_theme['LnkH']['FontFamily']     = $rudweb_theme['FontFamily'];
  $rudweb_theme['LnkH']['FontWeight']     = $rudweb_theme['FontWeight'];
  $rudweb_theme['LnkH']['FontSize']       = $rudweb_theme['FontSize'];

  /* ********** ********** ********** MENUS ********** ********** ********** */
  //MENU LEVEL 0
  $rudweb_theme['mnu']['mm']['hdr']['0']               = "{";
  $rudweb_theme['mnu']['mm']['pre']['0']               = "[";
  $rudweb_theme['mnu']['mm']['suf']['0']               = "]";
  $rudweb_theme['mnu']['mm']['sep']['0']               = "&#160;|&#160;";
  $rudweb_theme['mnu']['mm']['ftr']['0']               = "}";
  // MENU LINK
  $rudweb_theme['mnu']['mm']['LnkL']['BgColor']['0']        = $rudweb_theme['BgColor'];
  $rudweb_theme['mnu']['mm']['LnkL']['FontColor']['0']      = $rudweb_theme['FontColor'];
  $rudweb_theme['mnu']['mm']['LnkL']['TextDecoration']['0'] = "underline";
  $rudweb_theme['mnu']['mm']['LnkL']['FontFamily']['0']     = $rudweb_theme['FontFamily'];
  $rudweb_theme['mnu']['mm']['LnkL']['FontWeight']['0']     = $rudweb_theme['FontWeight'];
  $rudweb_theme['mnu']['mm']['LnkL']['FontSize']['0']       = $rudweb_theme['FontSize'];
  // MENU VISITED LINK
  $rudweb_theme['mnu']['mm']['LnkV']['BgColor']['0']        = $rudweb_theme['BgColor'];
  $rudweb_theme['mnu']['mm']['LnkV']['FontColor']['0']      = $rudweb_theme['FontColor'];
  $rudweb_theme['mnu']['mm']['LnkV']['TextDecoration']['0'] = "underline";
  $rudweb_theme['mnu']['mm']['LnkV']['FontFamily']['0']     = $rudweb_theme['FontFamily'];
  $rudweb_theme['mnu']['mm']['LnkV']['FontWeight']['0']     = $rudweb_theme['FontWeight'];
  $rudweb_theme['mnu']['mm']['LnkV']['FontSize']['0']       = $rudweb_theme['FontSize'];
  // MENU HOVER LINK
  $rudweb_theme['mnu']['mm']['LnkH']['BgColor']['0']        = $rudweb_theme['BgColor'];
  $rudweb_theme['mnu']['mm']['LnkH']['FontColor']['0']      = $rudweb_theme['FontColor'];
  $rudweb_theme['mnu']['mm']['LnkH']['TextDecoration']['0'] = "none";
  $rudweb_theme['mnu']['mm']['LnkH']['FontFamily']['0']     = $rudweb_theme['FontFamily'];
  $rudweb_theme['mnu']['mm']['LnkH']['FontWeight']['0']     = $rudweb_theme['FontWeight'];
  $rudweb_theme['mnu']['mm']['LnkH']['FontSize']['0']       = $rudweb_theme['FontSize'];

  //MENU LEVEL 1
  $rudweb_theme['mnu']['mm']['hdr']['1']               = "{";
  $rudweb_theme['mnu']['mm']['pre']['1']               = "[";
  $rudweb_theme['mnu']['mm']['suf']['1']               = "]";
  $rudweb_theme['mnu']['mm']['sep']['1']               = "&#160;|&#160;";
  $rudweb_theme['mnu']['mm']['ftr']['1']               = "}";
  // MENU LINK
  $rudweb_theme['mnu']['mm']['LnkL']['BgColor']['1']        = $rudweb_theme['BgColor'];
  $rudweb_theme['mnu']['mm']['LnkL']['FontColor']['1']      = $rudweb_theme['FontColor'];
  $rudweb_theme['mnu']['mm']['LnkL']['TextDecoration']['1'] = "underline";
  $rudweb_theme['mnu']['mm']['LnkL']['FontFamily']['1']     = $rudweb_theme['FontFamily'];
  $rudweb_theme['mnu']['mm']['LnkL']['FontWeight']['1']     = $rudweb_theme['FontWeight'];
  $rudweb_theme['mnu']['mm']['LnkL']['FontSize']['1']       = $rudweb_theme['FontSize'];
  // MENU VISITED LINK
  $rudweb_theme['mnu']['mm']['LnkV']['BgColor']['1']        = $rudweb_theme['BgColor'];
  $rudweb_theme['mnu']['mm']['LnkV']['FontColor']['1']      = $rudweb_theme['FontColor'];
  $rudweb_theme['mnu']['mm']['LnkV']['TextDecoration']['1'] = "underline";
  $rudweb_theme['mnu']['mm']['LnkV']['FontFamily']['1']     = $rudweb_theme['FontFamily'];
  $rudweb_theme['mnu']['mm']['LnkV']['FontWeight']['1']     = $rudweb_theme['FontWeight'];
  $rudweb_theme['mnu']['mm']['LnkV']['FontSize']['1']       = $rudweb_theme['FontSize'];
  // MENU HOVER LINK
  $rudweb_theme['mnu']['mm']['LnkH']['BgColor']['1']        = $rudweb_theme['BgColor'];
  $rudweb_theme['mnu']['mm']['LnkH']['FontColor']['1']      = $rudweb_theme['FontColor'];
  $rudweb_theme['mnu']['mm']['LnkH']['TextDecoration']['1'] = "none";
  $rudweb_theme['mnu']['mm']['LnkH']['FontFamily']['1']     = $rudweb_theme['FontFamily'];
  $rudweb_theme['mnu']['mm']['LnkH']['FontWeight']['1']     = $rudweb_theme['FontWeight'];
  $rudweb_theme['mnu']['mm']['LnkH']['FontSize']['1']       = $rudweb_theme['FontSize'];

  //MENU LEVEL 2
  $rudweb_theme['mnu']['mm']['hdr']['2']               = "{";
  $rudweb_theme['mnu']['mm']['pre']['2']               = "[";
  $rudweb_theme['mnu']['mm']['suf']['2']               = "]";
  $rudweb_theme['mnu']['mm']['sep']['2']               = "&#160;|&#160;";
  $rudweb_theme['mnu']['mm']['ftr']['2']               = "}";
  // MENU LINK
  $rudweb_theme['mnu']['mm']['LnkL']['BgColor']['2']        = $rudweb_theme['BgColor'];
  $rudweb_theme['mnu']['mm']['LnkL']['FontColor']['2']      = $rudweb_theme['FontColor'];
  $rudweb_theme['mnu']['mm']['LnkL']['TextDecoration']['2'] = "underline";
  $rudweb_theme['mnu']['mm']['LnkL']['FontFamily']['2']     = $rudweb_theme['FontFamily'];
  $rudweb_theme['mnu']['mm']['LnkL']['FontWeight']['2']     = $rudweb_theme['FontWeight'];
  $rudweb_theme['mnu']['mm']['LnkL']['FontSize']['2']       = $rudweb_theme['FontSize'];
  // MENU VISITED LINK
  $rudweb_theme['mnu']['mm']['LnkV']['BgColor']['2']        = $rudweb_theme['BgColor'];
  $rudweb_theme['mnu']['mm']['LnkV']['FontColor']['2']      = $rudweb_theme['FontColor'];
  $rudweb_theme['mnu']['mm']['LnkV']['TextDecoration']['2'] = "underline";
  $rudweb_theme['mnu']['mm']['LnkV']['FontFamily']['2']     = $rudweb_theme['FontFamily'];
  $rudweb_theme['mnu']['mm']['LnkV']['FontWeight']['2']     = $rudweb_theme['FontWeight'];
  $rudweb_theme['mnu']['mm']['LnkV']['FontSize']['2']       = $rudweb_theme['FontSize'];
  // MENU HOVER LINK
  $rudweb_theme['mnu']['mm']['LnkH']['BgColor']['2']        = $rudweb_theme['BgColor'];
  $rudweb_theme['mnu']['mm']['LnkH']['FontColor']['2']      = $rudweb_theme['FontColor'];
  $rudweb_theme['mnu']['mm']['LnkH']['TextDecoration']['2'] = "none";
  $rudweb_theme['mnu']['mm']['LnkH']['FontFamily']['2']     = $rudweb_theme['FontFamily'];
  $rudweb_theme['mnu']['mm']['LnkH']['FontWeight']['2']     = $rudweb_theme['FontWeight'];
  $rudweb_theme['mnu']['mm']['LnkH']['FontSize']['2']       = $rudweb_theme['FontSize'];

  //MENU LEVEL 3
  $rudweb_theme['mnu']['mm']['hdr']['3']               = "{";
  $rudweb_theme['mnu']['mm']['pre']['3']               = "[";
  $rudweb_theme['mnu']['mm']['suf']['3']               = "]";
  $rudweb_theme['mnu']['mm']['sep']['3']               = "&#160;|&#160;";
  $rudweb_theme['mnu']['mm']['ftr']['3']               = "}";
  // MENU LINK
  $rudweb_theme['mnu']['mm']['LnkL']['BgColor']['3']        = $rudweb_theme['BgColor'];
  $rudweb_theme['mnu']['mm']['LnkL']['FontColor']['3']      = $rudweb_theme['FontColor'];
  $rudweb_theme['mnu']['mm']['LnkL']['TextDecoration']['3'] = "underline";
  $rudweb_theme['mnu']['mm']['LnkL']['FontFamily']['3']     = $rudweb_theme['FontFamily'];
  $rudweb_theme['mnu']['mm']['LnkL']['FontWeight']['3']     = $rudweb_theme['FontWeight'];
  $rudweb_theme['mnu']['mm']['LnkL']['FontSize']['3']       = $rudweb_theme['FontSize'];
  // MENU VISITED LINK
  $rudweb_theme['mnu']['mm']['LnkV']['BgColor']['3']        = $rudweb_theme['BgColor'];
  $rudweb_theme['mnu']['mm']['LnkV']['FontColor']['3']      = $rudweb_theme['FontColor'];
  $rudweb_theme['mnu']['mm']['LnkV']['TextDecoration']['3'] = "underline";
  $rudweb_theme['mnu']['mm']['LnkV']['FontFamily']['3']     = $rudweb_theme['FontFamily'];
  $rudweb_theme['mnu']['mm']['LnkV']['FontWeight']['3']     = $rudweb_theme['FontWeight'];
  $rudweb_theme['mnu']['mm']['LnkV']['FontSize']['3']       = $rudweb_theme['FontSize'];
  // MENU HOVER LINK
  $rudweb_theme['mnu']['mm']['LnkH']['BgColor']['3']        = $rudweb_theme['BgColor'];
  $rudweb_theme['mnu']['mm']['LnkH']['FontColor']['3']      = $rudweb_theme['FontColor'];
  $rudweb_theme['mnu']['mm']['LnkH']['TextDecoration']['3'] = "none";
  $rudweb_theme['mnu']['mm']['LnkH']['FontFamily']['3']     = $rudweb_theme['FontFamily'];
  $rudweb_theme['mnu']['mm']['LnkH']['FontWeight']['3']     = $rudweb_theme['FontWeight'];
  $rudweb_theme['mnu']['mm']['LnkH']['FontSize']['3']       = $rudweb_theme['FontSize'];

  //MENU LEVEL 4
  $rudweb_theme['mnu']['mm']['hdr']['4']               = "{";
  $rudweb_theme['mnu']['mm']['pre']['4']               = "[";
  $rudweb_theme['mnu']['mm']['suf']['4']               = "]";
  $rudweb_theme['mnu']['mm']['sep']['4']               = "&#160;|&#160;";
  $rudweb_theme['mnu']['mm']['ftr']['4']               = "}";
  // MENU LINK
  $rudweb_theme['mnu']['mm']['LnkL']['BgColor']['4']        = $rudweb_theme['BgColor'];
  $rudweb_theme['mnu']['mm']['LnkL']['FontColor']['4']      = $rudweb_theme['FontColor'];
  $rudweb_theme['mnu']['mm']['LnkL']['TextDecoration']['4'] = "underline";
  $rudweb_theme['mnu']['mm']['LnkL']['FontFamily']['4']     = $rudweb_theme['FontFamily'];
  $rudweb_theme['mnu']['mm']['LnkL']['FontWeight']['4']     = $rudweb_theme['FontWeight'];
  $rudweb_theme['mnu']['mm']['LnkL']['FontSize']['4']       = $rudweb_theme['FontSize'];
  // MENU VISITED LINK
  $rudweb_theme['mnu']['mm']['LnkV']['BgColor']['4']        = $rudweb_theme['BgColor'];
  $rudweb_theme['mnu']['mm']['LnkV']['FontColor']['4']      = $rudweb_theme['FontColor'];
  $rudweb_theme['mnu']['mm']['LnkV']['TextDecoration']['4'] = "underline";
  $rudweb_theme['mnu']['mm']['LnkV']['FontFamily']['4']     = $rudweb_theme['FontFamily'];
  $rudweb_theme['mnu']['mm']['LnkV']['FontWeight']['4']     = $rudweb_theme['FontWeight'];
  $rudweb_theme['mnu']['mm']['LnkV']['FontSize']['4']       = $rudweb_theme['FontSize'];
  // MENU HOVER LINK
  $rudweb_theme['mnu']['mm']['LnkH']['BgColor']['4']        = $rudweb_theme['BgColor'];
  $rudweb_theme['mnu']['mm']['LnkH']['FontColor']['4']      = $rudweb_theme['FontColor'];
  $rudweb_theme['mnu']['mm']['LnkH']['TextDecoration']['4'] = "none";
  $rudweb_theme['mnu']['mm']['LnkH']['FontFamily']['4']     = $rudweb_theme['FontFamily'];
  $rudweb_theme['mnu']['mm']['LnkH']['FontWeight']['4']     = $rudweb_theme['FontWeight'];
  $rudweb_theme['mnu']['mm']['LnkH']['FontSize']['4']       = $rudweb_theme['FontSize'];
  
  /* ********** ********** ********** MENUS ********** ********** ********** */
  //MENU LEVEL 0
  $rudweb_theme['mnu']['adm']['hdr']['0']               = "{";
  $rudweb_theme['mnu']['adm']['pre']['0']               = "[";
  $rudweb_theme['mnu']['adm']['suf']['0']               = "]";
  $rudweb_theme['mnu']['adm']['sep']['0']               = "&#160;|&#160;";
  $rudweb_theme['mnu']['adm']['ftr']['0']               = "}";
  // MENU LINK
  $rudweb_theme['mnu']['adm']['LnkL']['BgColor']['0']        = $rudweb_theme['BgColor'];
  $rudweb_theme['mnu']['adm']['LnkL']['FontColor']['0']      = $rudweb_theme['FontColor'];
  $rudweb_theme['mnu']['adm']['LnkL']['TextDecoration']['0'] = "underline";
  $rudweb_theme['mnu']['adm']['LnkL']['FontFamily']['0']     = $rudweb_theme['FontFamily'];
  $rudweb_theme['mnu']['adm']['LnkL']['FontWeight']['0']     = $rudweb_theme['FontWeight'];
  $rudweb_theme['mnu']['adm']['LnkL']['FontSize']['0']       = $rudweb_theme['FontSize'];
  // MENU VISITED LINK
  $rudweb_theme['mnu']['adm']['LnkV']['BgColor']['0']        = $rudweb_theme['BgColor'];
  $rudweb_theme['mnu']['adm']['LnkV']['FontColor']['0']      = $rudweb_theme['FontColor'];
  $rudweb_theme['mnu']['adm']['LnkV']['TextDecoration']['0'] = "underline";
  $rudweb_theme['mnu']['adm']['LnkV']['FontFamily']['0']     = $rudweb_theme['FontFamily'];
  $rudweb_theme['mnu']['adm']['LnkV']['FontWeight']['0']     = $rudweb_theme['FontWeight'];
  $rudweb_theme['mnu']['adm']['LnkV']['FontSize']['0']       = $rudweb_theme['FontSize'];
  // MENU HOVER LINK
  $rudweb_theme['mnu']['adm']['LnkH']['BgColor']['0']        = $rudweb_theme['BgColor'];
  $rudweb_theme['mnu']['adm']['LnkH']['FontColor']['0']      = $rudweb_theme['FontColor'];
  $rudweb_theme['mnu']['adm']['LnkH']['TextDecoration']['0'] = "none";
  $rudweb_theme['mnu']['adm']['LnkH']['FontFamily']['0']     = $rudweb_theme['FontFamily'];
  $rudweb_theme['mnu']['adm']['LnkH']['FontWeight']['0']     = $rudweb_theme['FontWeight'];
  $rudweb_theme['mnu']['adm']['LnkH']['FontSize']['0']       = $rudweb_theme['FontSize'];

  //MENU LEVEL 1
  $rudweb_theme['mnu']['adm']['hdr']['1']               = "{";
  $rudweb_theme['mnu']['adm']['pre']['1']               = "[";
  $rudweb_theme['mnu']['adm']['suf']['1']               = "]";
  $rudweb_theme['mnu']['adm']['sep']['1']               = "&#160;|&#160;";
  $rudweb_theme['mnu']['adm']['ftr']['1']               = "}";
  // MENU LINK
  $rudweb_theme['mnu']['adm']['LnkL']['BgColor']['1']        = $rudweb_theme['BgColor'];
  $rudweb_theme['mnu']['adm']['LnkL']['FontColor']['1']      = $rudweb_theme['FontColor'];
  $rudweb_theme['mnu']['adm']['LnkL']['TextDecoration']['1'] = "underline";
  $rudweb_theme['mnu']['adm']['LnkL']['FontFamily']['1']     = $rudweb_theme['FontFamily'];
  $rudweb_theme['mnu']['adm']['LnkL']['FontWeight']['1']     = $rudweb_theme['FontWeight'];
  $rudweb_theme['mnu']['adm']['LnkL']['FontSize']['1']       = $rudweb_theme['FontSize'];
  // MENU VISITED LINK
  $rudweb_theme['mnu']['adm']['LnkV']['BgColor']['1']        = $rudweb_theme['BgColor'];
  $rudweb_theme['mnu']['adm']['LnkV']['FontColor']['1']      = $rudweb_theme['FontColor'];
  $rudweb_theme['mnu']['adm']['LnkV']['TextDecoration']['1'] = "underline";
  $rudweb_theme['mnu']['adm']['LnkV']['FontFamily']['1']     = $rudweb_theme['FontFamily'];
  $rudweb_theme['mnu']['adm']['LnkV']['FontWeight']['1']     = $rudweb_theme['FontWeight'];
  $rudweb_theme['mnu']['adm']['LnkV']['FontSize']['1']       = $rudweb_theme['FontSize'];
  // MENU HOVER LINK
  $rudweb_theme['mnu']['adm']['LnkH']['BgColor']['1']        = $rudweb_theme['BgColor'];
  $rudweb_theme['mnu']['adm']['LnkH']['FontColor']['1']      = $rudweb_theme['FontColor'];
  $rudweb_theme['mnu']['adm']['LnkH']['TextDecoration']['1'] = "none";
  $rudweb_theme['mnu']['adm']['LnkH']['FontFamily']['1']     = $rudweb_theme['FontFamily'];
  $rudweb_theme['mnu']['adm']['LnkH']['FontWeight']['1']     = $rudweb_theme['FontWeight'];
  $rudweb_theme['mnu']['adm']['LnkH']['FontSize']['1']       = $rudweb_theme['FontSize'];

  //MENU LEVEL 2
  $rudweb_theme['mnu']['adm']['hdr']['2']               = "{";
  $rudweb_theme['mnu']['adm']['pre']['2']               = "[";
  $rudweb_theme['mnu']['adm']['suf']['2']               = "]";
  $rudweb_theme['mnu']['adm']['sep']['2']               = "&#160;|&#160;";
  $rudweb_theme['mnu']['adm']['ftr']['2']               = "}";
  // MENU LINK
  $rudweb_theme['mnu']['adm']['LnkL']['BgColor']['2']        = $rudweb_theme['BgColor'];
  $rudweb_theme['mnu']['adm']['LnkL']['FontColor']['2']      = $rudweb_theme['FontColor'];
  $rudweb_theme['mnu']['adm']['LnkL']['TextDecoration']['2'] = "underline";
  $rudweb_theme['mnu']['adm']['LnkL']['FontFamily']['2']     = $rudweb_theme['FontFamily'];
  $rudweb_theme['mnu']['adm']['LnkL']['FontWeight']['2']     = $rudweb_theme['FontWeight'];
  $rudweb_theme['mnu']['adm']['LnkL']['FontSize']['2']       = $rudweb_theme['FontSize'];
  // MENU VISITED LINK
  $rudweb_theme['mnu']['adm']['LnkV']['BgColor']['2']        = $rudweb_theme['BgColor'];
  $rudweb_theme['mnu']['adm']['LnkV']['FontColor']['2']      = $rudweb_theme['FontColor'];
  $rudweb_theme['mnu']['adm']['LnkV']['TextDecoration']['2'] = "underline";
  $rudweb_theme['mnu']['adm']['LnkV']['FontFamily']['2']     = $rudweb_theme['FontFamily'];
  $rudweb_theme['mnu']['adm']['LnkV']['FontWeight']['2']     = $rudweb_theme['FontWeight'];
  $rudweb_theme['mnu']['adm']['LnkV']['FontSize']['2']       = $rudweb_theme['FontSize'];
  // MENU HOVER LINK
  $rudweb_theme['mnu']['adm']['LnkH']['BgColor']['2']        = $rudweb_theme['BgColor'];
  $rudweb_theme['mnu']['adm']['LnkH']['FontColor']['2']      = $rudweb_theme['FontColor'];
  $rudweb_theme['mnu']['adm']['LnkH']['TextDecoration']['2'] = "none";
  $rudweb_theme['mnu']['adm']['LnkH']['FontFamily']['2']     = $rudweb_theme['FontFamily'];
  $rudweb_theme['mnu']['adm']['LnkH']['FontWeight']['2']     = $rudweb_theme['FontWeight'];
  $rudweb_theme['mnu']['adm']['LnkH']['FontSize']['2']       = $rudweb_theme['FontSize'];

  //MENU LEVEL 3
  $rudweb_theme['mnu']['adm']['hdr']['3']               = "{";
  $rudweb_theme['mnu']['adm']['pre']['3']               = "[";
  $rudweb_theme['mnu']['adm']['suf']['3']               = "]";
  $rudweb_theme['mnu']['adm']['sep']['3']               = "&#160;|&#160;";
  $rudweb_theme['mnu']['adm']['ftr']['3']               = "}";
  // MENU LINK
  $rudweb_theme['mnu']['adm']['LnkL']['BgColor']['3']        = $rudweb_theme['BgColor'];
  $rudweb_theme['mnu']['adm']['LnkL']['FontColor']['3']      = $rudweb_theme['FontColor'];
  $rudweb_theme['mnu']['adm']['LnkL']['TextDecoration']['3'] = "underline";
  $rudweb_theme['mnu']['adm']['LnkL']['FontFamily']['3']     = $rudweb_theme['FontFamily'];
  $rudweb_theme['mnu']['adm']['LnkL']['FontWeight']['3']     = $rudweb_theme['FontWeight'];
  $rudweb_theme['mnu']['adm']['LnkL']['FontSize']['3']       = $rudweb_theme['FontSize'];
  // MENU VISITED LINK
  $rudweb_theme['mnu']['adm']['LnkV']['BgColor']['3']        = $rudweb_theme['BgColor'];
  $rudweb_theme['mnu']['adm']['LnkV']['FontColor']['3']      = $rudweb_theme['FontColor'];
  $rudweb_theme['mnu']['adm']['LnkV']['TextDecoration']['3'] = "underline";
  $rudweb_theme['mnu']['adm']['LnkV']['FontFamily']['3']     = $rudweb_theme['FontFamily'];
  $rudweb_theme['mnu']['adm']['LnkV']['FontWeight']['3']     = $rudweb_theme['FontWeight'];
  $rudweb_theme['mnu']['adm']['LnkV']['FontSize']['3']       = $rudweb_theme['FontSize'];
  // MENU HOVER LINK
  $rudweb_theme['mnu']['adm']['LnkH']['BgColor']['3']        = $rudweb_theme['BgColor'];
  $rudweb_theme['mnu']['adm']['LnkH']['FontColor']['3']      = $rudweb_theme['FontColor'];
  $rudweb_theme['mnu']['adm']['LnkH']['TextDecoration']['3'] = "none";
  $rudweb_theme['mnu']['adm']['LnkH']['FontFamily']['3']     = $rudweb_theme['FontFamily'];
  $rudweb_theme['mnu']['adm']['LnkH']['FontWeight']['3']     = $rudweb_theme['FontWeight'];
  $rudweb_theme['mnu']['adm']['LnkH']['FontSize']['3']       = $rudweb_theme['FontSize'];

  //MENU LEVEL 4
  $rudweb_theme['mnu']['adm']['hdr']['4']               = "{";
  $rudweb_theme['mnu']['adm']['pre']['4']               = "[";
  $rudweb_theme['mnu']['adm']['suf']['4']               = "]";
  $rudweb_theme['mnu']['adm']['sep']['4']               = "&#160;|&#160;";
  $rudweb_theme['mnu']['adm']['ftr']['4']               = "}";
  // MENU LINK
  $rudweb_theme['mnu']['adm']['LnkL']['BgColor']['4']        = $rudweb_theme['BgColor'];
  $rudweb_theme['mnu']['adm']['LnkL']['FontColor']['4']      = $rudweb_theme['FontColor'];
  $rudweb_theme['mnu']['adm']['LnkL']['TextDecoration']['4'] = "underline";
  $rudweb_theme['mnu']['adm']['LnkL']['FontFamily']['4']     = $rudweb_theme['FontFamily'];
  $rudweb_theme['mnu']['adm']['LnkL']['FontWeight']['4']     = $rudweb_theme['FontWeight'];
  $rudweb_theme['mnu']['adm']['LnkL']['FontSize']['4']       = $rudweb_theme['FontSize'];
  // MENU VISITED LINK
  $rudweb_theme['mnu']['adm']['LnkV']['BgColor']['4']        = $rudweb_theme['BgColor'];
  $rudweb_theme['mnu']['adm']['LnkV']['FontColor']['4']      = $rudweb_theme['FontColor'];
  $rudweb_theme['mnu']['adm']['LnkV']['TextDecoration']['4'] = "underline";
  $rudweb_theme['mnu']['adm']['LnkV']['FontFamily']['4']     = $rudweb_theme['FontFamily'];
  $rudweb_theme['mnu']['adm']['LnkV']['FontWeight']['4']     = $rudweb_theme['FontWeight'];
  $rudweb_theme['mnu']['adm']['LnkV']['FontSize']['4']       = $rudweb_theme['FontSize'];
  // MENU HOVER LINK
  $rudweb_theme['mnu']['adm']['LnkH']['BgColor']['4']        = $rudweb_theme['BgColor'];
  $rudweb_theme['mnu']['adm']['LnkH']['FontColor']['4']      = $rudweb_theme['FontColor'];
  $rudweb_theme['mnu']['adm']['LnkH']['TextDecoration']['4'] = "none";
  $rudweb_theme['mnu']['adm']['LnkH']['FontFamily']['4']     = $rudweb_theme['FontFamily'];
  $rudweb_theme['mnu']['adm']['LnkH']['FontWeight']['4']     = $rudweb_theme['FontWeight'];
  $rudweb_theme['mnu']['adm']['LnkH']['FontSize']['4']       = $rudweb_theme['FontSize'];

  /* ********** ********** ********** MENUS ********** ********** ********** */
  //MENU LEVEL 0
  $rudweb_theme['mnu']['oth']['hdr']['0']               = "{";
  $rudweb_theme['mnu']['oth']['pre']['0']               = "[";
  $rudweb_theme['mnu']['oth']['suf']['0']               = "]";
  $rudweb_theme['mnu']['oth']['sep']['0']               = "&#160;|&#160;";
  $rudweb_theme['mnu']['oth']['ftr']['0']               = "}";
  // MENU LINK
  $rudweb_theme['mnu']['oth']['LnkL']['BgColor']['0']        = $rudweb_theme['BgColor'];
  $rudweb_theme['mnu']['oth']['LnkL']['FontColor']['0']      = $rudweb_theme['FontColor'];
  $rudweb_theme['mnu']['oth']['LnkL']['TextDecoration']['0'] = "underline";
  $rudweb_theme['mnu']['oth']['LnkL']['FontFamily']['0']     = $rudweb_theme['FontFamily'];
  $rudweb_theme['mnu']['oth']['LnkL']['FontWeight']['0']     = $rudweb_theme['FontWeight'];
  $rudweb_theme['mnu']['oth']['LnkL']['FontSize']['0']       = $rudweb_theme['FontSize'];
  // MENU VISITED LINK
  $rudweb_theme['mnu']['oth']['LnkV']['BgColor']['0']        = $rudweb_theme['BgColor'];
  $rudweb_theme['mnu']['oth']['LnkV']['FontColor']['0']      = $rudweb_theme['FontColor'];
  $rudweb_theme['mnu']['oth']['LnkV']['TextDecoration']['0'] = "underline";
  $rudweb_theme['mnu']['oth']['LnkV']['FontFamily']['0']     = $rudweb_theme['FontFamily'];
  $rudweb_theme['mnu']['oth']['LnkV']['FontWeight']['0']     = $rudweb_theme['FontWeight'];
  $rudweb_theme['mnu']['oth']['LnkV']['FontSize']['0']       = $rudweb_theme['FontSize'];
  // MENU HOVER LINK
  $rudweb_theme['mnu']['oth']['LnkH']['BgColor']['0']        = $rudweb_theme['BgColor'];
  $rudweb_theme['mnu']['oth']['LnkH']['FontColor']['0']      = $rudweb_theme['FontColor'];
  $rudweb_theme['mnu']['oth']['LnkH']['TextDecoration']['0'] = "none";
  $rudweb_theme['mnu']['oth']['LnkH']['FontFamily']['0']     = $rudweb_theme['FontFamily'];
  $rudweb_theme['mnu']['oth']['LnkH']['FontWeight']['0']     = $rudweb_theme['FontWeight'];
  $rudweb_theme['mnu']['oth']['LnkH']['FontSize']['0']       = $rudweb_theme['FontSize'];

  //MENU LEVEL 1
  $rudweb_theme['mnu']['oth']['hdr']['1']               = "{";
  $rudweb_theme['mnu']['oth']['pre']['1']               = "[";
  $rudweb_theme['mnu']['oth']['suf']['1']               = "]";
  $rudweb_theme['mnu']['oth']['sep']['1']               = "&#160;|&#160;";
  $rudweb_theme['mnu']['oth']['ftr']['1']               = "}";
  // MENU LINK
  $rudweb_theme['mnu']['oth']['LnkL']['BgColor']['1']        = $rudweb_theme['BgColor'];
  $rudweb_theme['mnu']['oth']['LnkL']['FontColor']['1']      = $rudweb_theme['FontColor'];
  $rudweb_theme['mnu']['oth']['LnkL']['TextDecoration']['1'] = "underline";
  $rudweb_theme['mnu']['oth']['LnkL']['FontFamily']['1']     = $rudweb_theme['FontFamily'];
  $rudweb_theme['mnu']['oth']['LnkL']['FontWeight']['1']     = $rudweb_theme['FontWeight'];
  $rudweb_theme['mnu']['oth']['LnkL']['FontSize']['1']       = $rudweb_theme['FontSize'];
  // MENU VISITED LINK
  $rudweb_theme['mnu']['oth']['LnkV']['BgColor']['1']        = $rudweb_theme['BgColor'];
  $rudweb_theme['mnu']['oth']['LnkV']['FontColor']['1']      = $rudweb_theme['FontColor'];
  $rudweb_theme['mnu']['oth']['LnkV']['TextDecoration']['1'] = "underline";
  $rudweb_theme['mnu']['oth']['LnkV']['FontFamily']['1']     = $rudweb_theme['FontFamily'];
  $rudweb_theme['mnu']['oth']['LnkV']['FontWeight']['1']     = $rudweb_theme['FontWeight'];
  $rudweb_theme['mnu']['oth']['LnkV']['FontSize']['1']       = $rudweb_theme['FontSize'];
  // MENU HOVER LINK
  $rudweb_theme['mnu']['oth']['LnkH']['BgColor']['1']        = $rudweb_theme['BgColor'];
  $rudweb_theme['mnu']['oth']['LnkH']['FontColor']['1']      = $rudweb_theme['FontColor'];
  $rudweb_theme['mnu']['oth']['LnkH']['TextDecoration']['1'] = "none";
  $rudweb_theme['mnu']['oth']['LnkH']['FontFamily']['1']     = $rudweb_theme['FontFamily'];
  $rudweb_theme['mnu']['oth']['LnkH']['FontWeight']['1']     = $rudweb_theme['FontWeight'];
  $rudweb_theme['mnu']['oth']['LnkH']['FontSize']['1']       = $rudweb_theme['FontSize'];

  //MENU LEVEL 2
  $rudweb_theme['mnu']['oth']['hdr']['2']               = "{";
  $rudweb_theme['mnu']['oth']['pre']['2']               = "[";
  $rudweb_theme['mnu']['oth']['suf']['2']               = "]";
  $rudweb_theme['mnu']['oth']['sep']['2']               = "&#160;|&#160;";
  $rudweb_theme['mnu']['oth']['ftr']['2']               = "}";
  // MENU LINK
  $rudweb_theme['mnu']['oth']['LnkL']['BgColor']['2']        = $rudweb_theme['BgColor'];
  $rudweb_theme['mnu']['oth']['LnkL']['FontColor']['2']      = $rudweb_theme['FontColor'];
  $rudweb_theme['mnu']['oth']['LnkL']['TextDecoration']['2'] = "underline";
  $rudweb_theme['mnu']['oth']['LnkL']['FontFamily']['2']     = $rudweb_theme['FontFamily'];
  $rudweb_theme['mnu']['oth']['LnkL']['FontWeight']['2']     = $rudweb_theme['FontWeight'];
  $rudweb_theme['mnu']['oth']['LnkL']['FontSize']['2']       = $rudweb_theme['FontSize'];
  // MENU VISITED LINK
  $rudweb_theme['mnu']['oth']['LnkV']['BgColor']['2']        = $rudweb_theme['BgColor'];
  $rudweb_theme['mnu']['oth']['LnkV']['FontColor']['2']      = $rudweb_theme['FontColor'];
  $rudweb_theme['mnu']['oth']['LnkV']['TextDecoration']['2'] = "underline";
  $rudweb_theme['mnu']['oth']['LnkV']['FontFamily']['2']     = $rudweb_theme['FontFamily'];
  $rudweb_theme['mnu']['oth']['LnkV']['FontWeight']['2']     = $rudweb_theme['FontWeight'];
  $rudweb_theme['mnu']['oth']['LnkV']['FontSize']['2']       = $rudweb_theme['FontSize'];
  // MENU HOVER LINK
  $rudweb_theme['mnu']['oth']['LnkH']['BgColor']['2']        = $rudweb_theme['BgColor'];
  $rudweb_theme['mnu']['oth']['LnkH']['FontColor']['2']      = $rudweb_theme['FontColor'];
  $rudweb_theme['mnu']['oth']['LnkH']['TextDecoration']['2'] = "none";
  $rudweb_theme['mnu']['oth']['LnkH']['FontFamily']['2']     = $rudweb_theme['FontFamily'];
  $rudweb_theme['mnu']['oth']['LnkH']['FontWeight']['2']     = $rudweb_theme['FontWeight'];
  $rudweb_theme['mnu']['oth']['LnkH']['FontSize']['2']       = $rudweb_theme['FontSize'];

  //MENU LEVEL 3
  $rudweb_theme['mnu']['oth']['hdr']['3']               = "{";
  $rudweb_theme['mnu']['oth']['pre']['3']               = "[";
  $rudweb_theme['mnu']['oth']['suf']['3']               = "]";
  $rudweb_theme['mnu']['oth']['sep']['3']               = "&#160;|&#160;";
  $rudweb_theme['mnu']['oth']['ftr']['3']               = "}";
  // MENU LINK
  $rudweb_theme['mnu']['oth']['LnkL']['BgColor']['3']        = $rudweb_theme['BgColor'];
  $rudweb_theme['mnu']['oth']['LnkL']['FontColor']['3']      = $rudweb_theme['FontColor'];
  $rudweb_theme['mnu']['oth']['LnkL']['TextDecoration']['3'] = "underline";
  $rudweb_theme['mnu']['oth']['LnkL']['FontFamily']['3']     = $rudweb_theme['FontFamily'];
  $rudweb_theme['mnu']['oth']['LnkL']['FontWeight']['3']     = $rudweb_theme['FontWeight'];
  $rudweb_theme['mnu']['oth']['LnkL']['FontSize']['3']       = $rudweb_theme['FontSize'];
  // MENU VISITED LINK
  $rudweb_theme['mnu']['oth']['LnkV']['BgColor']['3']        = $rudweb_theme['BgColor'];
  $rudweb_theme['mnu']['oth']['LnkV']['FontColor']['3']      = $rudweb_theme['FontColor'];
  $rudweb_theme['mnu']['oth']['LnkV']['TextDecoration']['3'] = "underline";
  $rudweb_theme['mnu']['oth']['LnkV']['FontFamily']['3']     = $rudweb_theme['FontFamily'];
  $rudweb_theme['mnu']['oth']['LnkV']['FontWeight']['3']     = $rudweb_theme['FontWeight'];
  $rudweb_theme['mnu']['oth']['LnkV']['FontSize']['3']       = $rudweb_theme['FontSize'];
  // MENU HOVER LINK
  $rudweb_theme['mnu']['oth']['LnkH']['BgColor']['3']        = $rudweb_theme['BgColor'];
  $rudweb_theme['mnu']['oth']['LnkH']['FontColor']['3']      = $rudweb_theme['FontColor'];
  $rudweb_theme['mnu']['oth']['LnkH']['TextDecoration']['3'] = "none";
  $rudweb_theme['mnu']['oth']['LnkH']['FontFamily']['3']     = $rudweb_theme['FontFamily'];
  $rudweb_theme['mnu']['oth']['LnkH']['FontWeight']['3']     = $rudweb_theme['FontWeight'];
  $rudweb_theme['mnu']['oth']['LnkH']['FontSize']['3']       = $rudweb_theme['FontSize'];

  //MENU LEVEL 4
  $rudweb_theme['mnu']['oth']['hdr']['4']               = "{";
  $rudweb_theme['mnu']['oth']['pre']['4']               = "[";
  $rudweb_theme['mnu']['oth']['suf']['4']               = "]";
  $rudweb_theme['mnu']['oth']['sep']['4']               = "&#160;|&#160;";
  $rudweb_theme['mnu']['oth']['ftr']['4']               = "}";
  // MENU LINK
  $rudweb_theme['mnu']['oth']['LnkL']['BgColor']['4']        = $rudweb_theme['BgColor'];
  $rudweb_theme['mnu']['oth']['LnkL']['FontColor']['4']      = $rudweb_theme['FontColor'];
  $rudweb_theme['mnu']['oth']['LnkL']['TextDecoration']['4'] = "underline";
  $rudweb_theme['mnu']['oth']['LnkL']['FontFamily']['4']     = $rudweb_theme['FontFamily'];
  $rudweb_theme['mnu']['oth']['LnkL']['FontWeight']['4']     = $rudweb_theme['FontWeight'];
  $rudweb_theme['mnu']['oth']['LnkL']['FontSize']['4']       = $rudweb_theme['FontSize'];
  // MENU VISITED LINK
  $rudweb_theme['mnu']['oth']['LnkV']['BgColor']['4']        = $rudweb_theme['BgColor'];
  $rudweb_theme['mnu']['oth']['LnkV']['FontColor']['4']      = $rudweb_theme['FontColor'];
  $rudweb_theme['mnu']['oth']['LnkV']['TextDecoration']['4'] = "underline";
  $rudweb_theme['mnu']['oth']['LnkV']['FontFamily']['4']     = $rudweb_theme['FontFamily'];
  $rudweb_theme['mnu']['oth']['LnkV']['FontWeight']['4']     = $rudweb_theme['FontWeight'];
  $rudweb_theme['mnu']['oth']['LnkV']['FontSize']['4']       = $rudweb_theme['FontSize'];
  // MENU HOVER LINK
  $rudweb_theme['mnu']['oth']['LnkH']['BgColor']['4']        = $rudweb_theme['BgColor'];
  $rudweb_theme['mnu']['oth']['LnkH']['FontColor']['4']      = $rudweb_theme['FontColor'];
  $rudweb_theme['mnu']['oth']['LnkH']['TextDecoration']['4'] = "none";
  $rudweb_theme['mnu']['oth']['LnkH']['FontFamily']['4']     = $rudweb_theme['FontFamily'];
  $rudweb_theme['mnu']['oth']['LnkH']['FontWeight']['4']     = $rudweb_theme['FontWeight'];
  $rudweb_theme['mnu']['oth']['LnkH']['FontSize']['4']       = $rudweb_theme['FontSize'];
  /* ********** ********** ********** PAGE CONTENT ********** ********** ********** */
  // PAGE CONTENT
  $rudweb_theme['cnt']['hdr']                = "\n";
  $rudweb_theme['cnt']['pre']                = "";
  $rudweb_theme['cnt']['suf']                = "";
  $rudweb_theme['cnt']['ftr']                = "\n";
 
  // CONTENT TITLE
  $rudweb_theme['cnt']['tt1']['class']       = "title";
  $rudweb_theme['cnt']['tt1']['pre']         = "\n<DIV CLASS=\"".$rudweb_theme['cnt']['tt1']['class']."\">&#160;&#160;";
  $rudweb_theme['cnt']['tt1']['suf']         = "</Div>";

  // CONTENT SUBTITLE
  $rudweb_theme['cnt']['tt2']['class']       = "subtitle";
  $rudweb_theme['cnt']['tt2']['pre']         = "\n<DIV CLASS=\"".$rudweb_theme['cnt']['tt2']['class']."\">&#160;&#160;";
  $rudweb_theme['cnt']['tt2']['suf']         = "</DIV>";

  // PAGE TEXT
  $rudweb_theme['cnt']['txt']['class']       = "text";
  $rudweb_theme['cnt']['txt']['pre']         = "\n<DIV CLASS=\"".$rudweb_theme['cnt']['txt']['class']."\">\n";
  $rudweb_theme['cnt']['txt']['suf']         = "\n</DIV>";

  /* ********** ********** ********** PAGE CONTENT PICTURES ********** ********** ********** */
  // CONTENT PICTURES - 0 - PANEL
  $rudweb_theme['cnt']['pic']['hdr']['0']            = "\n";
  $rudweb_theme['cnt']['pic']['pre']['0']            = "";
  $rudweb_theme['cnt']['pic']['sep']['0']            = "\n<BR><BR>";
  $rudweb_theme['cnt']['pic']['suf']['0']            = "";
  $rudweb_theme['cnt']['pic']['ftr']['0']            = "\n";
  $rudweb_theme['cnt']['pic']['max']['0']            = "150";

  // CONTENT PICTURES - 1 - TOP
  $rudweb_theme['cnt']['pic']['hdr']['1']            = "<BR><DIV ALIGN=\"center\">";
  $rudweb_theme['cnt']['pic']['pre']['1']            = "\n<DIV STYLE=\"float: left; clear: none; margin: 4px;\">";
  $rudweb_theme['cnt']['pic']['sep']['1']            = "";
  $rudweb_theme['cnt']['pic']['suf']['1']            = "\n</DIV>";
  $rudweb_theme['cnt']['pic']['ftr']['1']            = "</DIV><BR CLEAR=\"all\">";
  $rudweb_theme['cnt']['pic']['max']['1']            = "150";

  // CONTENT PICTURES - 2 - AFTER TITLE
  $rudweb_theme['cnt']['pic']['hdr']['2']            = "<BR><DIV ALIGN=\"center\">";
  $rudweb_theme['cnt']['pic']['pre']['2']            = "\n<DIV STYLE=\"float: left; clear: none; margin: 4px;\">";
  $rudweb_theme['cnt']['pic']['sep']['2']            = "";
  $rudweb_theme['cnt']['pic']['suf']['2']            = "\n</DIV>";
  $rudweb_theme['cnt']['pic']['ftr']['2']            = "</DIV><BR CLEAR=\"all\">";
  $rudweb_theme['cnt']['pic']['max']['2']            = "150";

  // CONTENT PICTURES - 3 - AFTER SUBTITLE
  $rudweb_theme['cnt']['pic']['hdr']['3']            = "<BR><DIV ALIGN=\"center\">";
  $rudweb_theme['cnt']['pic']['pre']['3']            = "\n<DIV STYLE=\"float: left; clear: none; margin: 4px;\">";
  $rudweb_theme['cnt']['pic']['sep']['3']            = "";
  $rudweb_theme['cnt']['pic']['suf']['3']            = "\n</DIV>";
  $rudweb_theme['cnt']['pic']['ftr']['3']            = "</DIV><BR CLEAR=\"all\">";
  $rudweb_theme['cnt']['pic']['max']['3']            = "150";

  // CONTENT PICTURES - 4 - BOTTOM
  $rudweb_theme['cnt']['pic']['hdr']['4']            = "<BR><DIV ALIGN=\"center\">";
  $rudweb_theme['cnt']['pic']['pre']['4']            = "\n<DIV STYLE=\"float: left; clear: none; margin: 4px;\">";
  $rudweb_theme['cnt']['pic']['sep']['4']            = "";
  $rudweb_theme['cnt']['pic']['suf']['4']            = "\n</DIV>";
  $rudweb_theme['cnt']['pic']['ftr']['4']            = "</DIV><BR CLEAR=\"all\">";
  $rudweb_theme['cnt']['pic']['max']['4']            = "150";

  /* ********** ********** ********** FEATURED MODULE ********** ********** ********** */
  // FEATURED MODULE
  $rudweb_theme['ftr']['hdr']                = "\n<DIV CLASS=\"".$rudweb_theme['cnt']['tt1']['class']."\">&#160;&#160;".$rudweb_ln['featured']['tt']."</DIV><BR>";
  $rudweb_theme['ftr']['ftr']                = "\n";

  $rudweb_theme['ftr']['sep']                = "\n<BR><BR>";

  $rudweb_theme['ftr']['limit']              = "3"; // how many modules to display
  $rudweb_theme['ftr']['chartt']                = "20"; // how many characters for title
  $rudweb_theme['ftr']['picsize']                = "100"; // max picture size
  $rudweb_theme['ftr']['chardesc']                = "20"; // how many characters for description

  $rudweb_theme['ftr']['fpre']               = "\n";
  $rudweb_theme['ftr']['fsuf']               = "\n";

  $rudweb_theme['ftr']['tt']['pre']             = "\n";
  $rudweb_theme['ftr']['tt']['suf']             = "\n";
  $rudweb_theme['ftr']['pic']['pre']             = "\n<BR>";
  $rudweb_theme['ftr']['pic']['suf']             = "\n<BR>";
  $rudweb_theme['ftr']['desc']['pre']             = "\n";
  $rudweb_theme['ftr']['desc']['suf']             = "\n";

  // FEATURED LINK
  $rudweb_theme['ftr']['LnkL']['BgColor']        = $rudweb_theme['BgColor'];
  $rudweb_theme['ftr']['LnkL']['FontColor']      = $rudweb_theme['FontColor'];
  $rudweb_theme['ftr']['LnkL']['TextDecoration'] = "underline";
  $rudweb_theme['ftr']['LnkL']['FontFamily']     = $rudweb_theme['FontFamily'];
  $rudweb_theme['ftr']['LnkL']['FontWeight']     = "bold";
  $rudweb_theme['ftr']['LnkL']['FontSize']       = $rudweb_theme['FontSize'];
  // FEATURED VISITED LINK
  $rudweb_theme['ftr']['LnkV']['BgColor']        = $rudweb_theme['BgColor'];
  $rudweb_theme['ftr']['LnkV']['FontColor']      = $rudweb_theme['FontColor'];
  $rudweb_theme['ftr']['LnkV']['TextDecoration'] = "underline";
  $rudweb_theme['ftr']['LnkV']['FontFamily']     = $rudweb_theme['FontFamily'];
  $rudweb_theme['ftr']['LnkV']['FontWeight']     = "bold";
  $rudweb_theme['ftr']['LnkV']['FontSize']       = $rudweb_theme['FontSize'];
  // FEATURED HOVER LINK
  $rudweb_theme['ftr']['LnkH']['BgColor']        = $rudweb_theme['BgColor'];
  $rudweb_theme['ftr']['LnkH']['FontColor']      = $rudweb_theme['FontColor'];
  $rudweb_theme['ftr']['LnkH']['TextDecoration'] = "none";
  $rudweb_theme['ftr']['LnkH']['FontFamily']     = $rudweb_theme['FontFamily'];
  $rudweb_theme['ftr']['LnkH']['FontWeight']     = "bold";
  $rudweb_theme['ftr']['LnkH']['FontSize']       = $rudweb_theme['FontSize'];
  
  /* ********** ********** ********** COPYRIGHT NOTICE ********** ********** ********** */
  // COPYRIGHT NOTICE
  $rudweb_theme['cpy']['pre']            = "\n";
  $rudweb_theme['cpy']['suf']            = "\n";

  // COPYRIGHT LINK
  $rudweb_theme['cpy']['LnkL']['BgColor']        = $rudweb_theme['BgColor'];
  $rudweb_theme['cpy']['LnkL']['FontColor']      = $rudweb_theme['FontColor'];
  $rudweb_theme['cpy']['LnkL']['TextDecoration'] = "underline";
  $rudweb_theme['cpy']['LnkL']['FontFamily']     = $rudweb_theme['FontFamily'];
  $rudweb_theme['cpy']['LnkL']['FontWeight']     = $rudweb_theme['FontWeight'];
  $rudweb_theme['cpy']['LnkL']['FontSize']       = $rudweb_theme['FontSize'];
  // COPYRIGHT VISITED LINK
  $rudweb_theme['cpy']['LnkV']['BgColor']        = $rudweb_theme['BgColor'];
  $rudweb_theme['cpy']['LnkV']['FontColor']      = $rudweb_theme['FontColor'];
  $rudweb_theme['cpy']['LnkV']['TextDecoration'] = "underline";
  $rudweb_theme['cpy']['LnkV']['FontFamily']     = $rudweb_theme['FontFamily'];
  $rudweb_theme['cpy']['LnkV']['FontWeight']     = $rudweb_theme['FontWeight'];
  $rudweb_theme['cpy']['LnkV']['FontSize']       = $rudweb_theme['FontSize'];
  // COPYRIGHT HOVER LINK
  $rudweb_theme['cpy']['LnkH']['BgColor']        = $rudweb_theme['BgColor'];
  $rudweb_theme['cpy']['LnkH']['FontColor']      = $rudweb_theme['FontColor'];
  $rudweb_theme['cpy']['LnkH']['TextDecoration'] = "none";
  $rudweb_theme['cpy']['LnkH']['FontFamily']     = $rudweb_theme['FontFamily'];
  $rudweb_theme['cpy']['LnkH']['FontWeight']     = $rudweb_theme['FontWeight'];
  $rudweb_theme['cpy']['LnkH']['FontSize']       = $rudweb_theme['FontSize'];
  
  /* ********** ********** ********** VISITOR STATISTICS ********** ********** ********** */
  $rudweb_theme['sts']['hdr']        = "\n<BR>";
  $rudweb_theme['sts']['ftr']        = "\n";

  $rudweb_theme['sts']['sep']         = "\n";
  $rudweb_theme['sts']['pre']         = "\n";
  $rudweb_theme['sts']['suf']         = "\n";
  
  /* ********** ********** ********** USER MODULE ********** ********** ********** */
  // USER MODULE
  $rudweb_theme['usr']['hdr'] = "\n<TABLE BORDER=\"0\" CELLPADDING=\"0\" CELLSPACING=\"0\">\n<TR>";
  $rudweb_theme['usr']['pre'] = "\n<TD CLASS=\"usr_td\">";
  $rudweb_theme['usr']['suf'] = "\n</TD>";
  $rudweb_theme['usr']['sep'] = "";
  $rudweb_theme['usr']['ftr'] = "\n</TR>\n</TABLE>";
  
  $rudweb_theme['usr']['login']['hdr'] = "\n<TABLE BORDER=\"0\" CELLPADDING=\"0\" CELLSPACING=\"0\">\n<TR>";
  $rudweb_theme['usr']['login']['pre'] = "\n<TD CLASS=\"usr_login\">";
  $rudweb_theme['usr']['login']['suf'] = "\n</TD>";
  $rudweb_theme['usr']['login']['sep'] = "";
  $rudweb_theme['usr']['login']['ftr'] = "\n</TR>\n</TABLE>";

  /* ********** ********** ********** LANGUAGE MODULE ********** ********** ********** */
  // LANGUAGE MODULE
  $rudweb_theme['lng']['hdr'] = "\n";
  $rudweb_theme['lng']['pre'] = "\n";
  $rudweb_theme['lng']['suf'] = "\n";
  $rudweb_theme['lng']['sep'] = "\n&#160;";
  $rudweb_theme['lng']['ftr'] = "\n";

  /* ********** ********** ********** BLOG MODULE ********** ********** ********** */
  $rudweb_theme['blg']['hdr'] = "\n";
  $rudweb_theme['blg']['ftr'] = "\n";
  
  $rudweb_theme['blg']['pre'] = "\n";
  $rudweb_theme['blg']['suf'] = "\n";
  $rudweb_theme['blg']['sep'] = "\n<BR>";
  
  $rudweb_theme['blg']['posted']['pre'] = "\n";
  $rudweb_theme['blg']['posted']['suf'] = "\n";
  
  /* ********** ********** ********** COMMENTS MODULE ********** ********** ********** */
  $rudweb_theme['cmnts']['hdr'] = "\n<BR>";
  $rudweb_theme['cmnts']['ftr'] = "\n";
  
  $rudweb_theme['cmnts']['pre'] = "\n";
  $rudweb_theme['cmnts']['suf'] = "\n";
  $rudweb_theme['cmnts']['sep'] = "\n<HR>";
  
  /* ********** ********** ********** SHOPPING CART MODULE ********** ********** ********** */
  $rudweb_theme['crt']['hdr'] = "\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\">\n<TR>";
  $rudweb_theme['crt']['pre'] = "\n<TD>";
  $rudweb_theme['crt']['suf'] = "\n</TD>";
  $rudweb_theme['crt']['sep'] = "";
  $rudweb_theme['crt']['ftr'] = "\n</TR>\n</TABLE>";
}
?>