<?php
/*
./themes/rswebdef/theme.inc.php
17:56 2008-03-12
*/
if(!defined('_RSWEB_PUBFIL')) {require_once '../../lib/404.php';}

if (_RSWEB_DBTHM === "1") {
  // FROM DB
}
else {
  // FROM FILE
  /* ********** ********** ********** BODY ********** ********** ********** */
  // BODY
  $rsweb_theme['BgColor']         = "#FFFFFF";
  $rsweb_theme['FontColor']       = "#000000";
  $rsweb_theme['FontErrColor']    = "#990000";
  $rsweb_theme['MarginTop']       = "0";
  $rsweb_theme['MarginBottom']    = "0";
  $rsweb_theme['MarginLeft']      = "0";
  $rsweb_theme['MarginRight']     = "0";
  $rsweb_theme['TextAlign']       = "left";
  $rsweb_theme['VerticalAlign']   = "middle";
  $rsweb_theme['TextDecoration']  = "none";
  $rsweb_theme['FontFamily']      = "verdana, arial, helvetica, sans-serif";
  $rsweb_theme['FontWeight']      = "normal";
  $rsweb_theme['FontSize']        = "11";
  $rsweb_theme['Measure']         = "px";
  $rsweb_theme['BorderColor']     = "#333333";
  $rsweb_theme['BorderStyle']     = "dashed";
  $rsweb_theme['BorderTop']       = "0";
  $rsweb_theme['BorderBottom']    = "0";
  $rsweb_theme['BorderLeft']      = "0";
  $rsweb_theme['BorderRight']     = "0";
  $rsweb_theme['PaddingTop']      = "0";
  $rsweb_theme['PaddingBottom']   = "0";
  $rsweb_theme['PaddingLeft']     = "0";
  $rsweb_theme['PaddingRight']    = "0";

  /* ********** ********** ********** DEFAULT LINKS ********** ********** ********** */
  // LINK
  $rsweb_theme['LnkL']['BgColor']        = $rsweb_theme['BgColor'];
  $rsweb_theme['LnkL']['FontColor']      = $rsweb_theme['FontColor'];
  $rsweb_theme['LnkL']['TextDecoration'] = 'underline';
  $rsweb_theme['LnkL']['FontFamily']     = $rsweb_theme['FontFamily'];
  $rsweb_theme['LnkL']['FontWeight']     = $rsweb_theme['FontWeight'];
  $rsweb_theme['LnkL']['FontSize']       = $rsweb_theme['FontSize'];
  // VISITED LINK
  $rsweb_theme['LnkV']['BgColor']        = $rsweb_theme['BgColor'];
  $rsweb_theme['LnkV']['FontColor']      = $rsweb_theme['FontColor'];
  $rsweb_theme['LnkV']['TextDecoration'] = 'underline';
  $rsweb_theme['LnkV']['FontFamily']     = $rsweb_theme['FontFamily'];
  $rsweb_theme['LnkV']['FontWeight']     = $rsweb_theme['FontWeight'];
  $rsweb_theme['LnkV']['FontSize']       = $rsweb_theme['FontSize'];
  // HOVER LINK
  $rsweb_theme['LnkH']['BgColor']        = $rsweb_theme['BgColor'];
  $rsweb_theme['LnkH']['FontColor']      = $rsweb_theme['FontColor'];
  $rsweb_theme['LnkH']['TextDecoration'] = 'none';
  $rsweb_theme['LnkH']['FontFamily']     = $rsweb_theme['FontFamily'];
  $rsweb_theme['LnkH']['FontWeight']     = $rsweb_theme['FontWeight'];
  $rsweb_theme['LnkH']['FontSize']       = $rsweb_theme['FontSize'];

  /* ********** ********** ********** MENUS ********** ********** ********** */
  //MENU LEVEL 0
  $rsweb_theme['mnu']['mm']['hdr']['0']               = "{";
  $rsweb_theme['mnu']['mm']['pre']['0']               = "[";
  $rsweb_theme['mnu']['mm']['suf']['0']               = "]";
  $rsweb_theme['mnu']['mm']['sep']['0']               = "&#160;|&#160;";
  $rsweb_theme['mnu']['mm']['ftr']['0']               = "}";
  // MENU LINK
  $rsweb_theme['mnu']['mm']['LnkL']['BgColor']['0']        = $rsweb_theme['BgColor'];
  $rsweb_theme['mnu']['mm']['LnkL']['FontColor']['0']      = $rsweb_theme['FontColor'];
  $rsweb_theme['mnu']['mm']['LnkL']['TextDecoration']['0'] = "underline";
  $rsweb_theme['mnu']['mm']['LnkL']['FontFamily']['0']     = $rsweb_theme['FontFamily'];
  $rsweb_theme['mnu']['mm']['LnkL']['FontWeight']['0']     = $rsweb_theme['FontWeight'];
  $rsweb_theme['mnu']['mm']['LnkL']['FontSize']['0']       = $rsweb_theme['FontSize'];
  // MENU VISITED LINK
  $rsweb_theme['mnu']['mm']['LnkV']['BgColor']['0']        = $rsweb_theme['BgColor'];
  $rsweb_theme['mnu']['mm']['LnkV']['FontColor']['0']      = $rsweb_theme['FontColor'];
  $rsweb_theme['mnu']['mm']['LnkV']['TextDecoration']['0'] = "underline";
  $rsweb_theme['mnu']['mm']['LnkV']['FontFamily']['0']     = $rsweb_theme['FontFamily'];
  $rsweb_theme['mnu']['mm']['LnkV']['FontWeight']['0']     = $rsweb_theme['FontWeight'];
  $rsweb_theme['mnu']['mm']['LnkV']['FontSize']['0']       = $rsweb_theme['FontSize'];
  // MENU HOVER LINK
  $rsweb_theme['mnu']['mm']['LnkH']['BgColor']['0']        = $rsweb_theme['BgColor'];
  $rsweb_theme['mnu']['mm']['LnkH']['FontColor']['0']      = $rsweb_theme['FontColor'];
  $rsweb_theme['mnu']['mm']['LnkH']['TextDecoration']['0'] = "none";
  $rsweb_theme['mnu']['mm']['LnkH']['FontFamily']['0']     = $rsweb_theme['FontFamily'];
  $rsweb_theme['mnu']['mm']['LnkH']['FontWeight']['0']     = $rsweb_theme['FontWeight'];
  $rsweb_theme['mnu']['mm']['LnkH']['FontSize']['0']       = $rsweb_theme['FontSize'];

  //MENU LEVEL 1
  $rsweb_theme['mnu']['mm']['hdr']['1']               = "{";
  $rsweb_theme['mnu']['mm']['pre']['1']               = "[";
  $rsweb_theme['mnu']['mm']['suf']['1']               = "]";
  $rsweb_theme['mnu']['mm']['sep']['1']               = "&#160;|&#160;";
  $rsweb_theme['mnu']['mm']['ftr']['1']               = "}";
  // MENU LINK
  $rsweb_theme['mnu']['mm']['LnkL']['BgColor']['1']        = $rsweb_theme['BgColor'];
  $rsweb_theme['mnu']['mm']['LnkL']['FontColor']['1']      = $rsweb_theme['FontColor'];
  $rsweb_theme['mnu']['mm']['LnkL']['TextDecoration']['1'] = "underline";
  $rsweb_theme['mnu']['mm']['LnkL']['FontFamily']['1']     = $rsweb_theme['FontFamily'];
  $rsweb_theme['mnu']['mm']['LnkL']['FontWeight']['1']     = $rsweb_theme['FontWeight'];
  $rsweb_theme['mnu']['mm']['LnkL']['FontSize']['1']       = $rsweb_theme['FontSize'];
  // MENU VISITED LINK
  $rsweb_theme['mnu']['mm']['LnkV']['BgColor']['1']        = $rsweb_theme['BgColor'];
  $rsweb_theme['mnu']['mm']['LnkV']['FontColor']['1']      = $rsweb_theme['FontColor'];
  $rsweb_theme['mnu']['mm']['LnkV']['TextDecoration']['1'] = "underline";
  $rsweb_theme['mnu']['mm']['LnkV']['FontFamily']['1']     = $rsweb_theme['FontFamily'];
  $rsweb_theme['mnu']['mm']['LnkV']['FontWeight']['1']     = $rsweb_theme['FontWeight'];
  $rsweb_theme['mnu']['mm']['LnkV']['FontSize']['1']       = $rsweb_theme['FontSize'];
  // MENU HOVER LINK
  $rsweb_theme['mnu']['mm']['LnkH']['BgColor']['1']        = $rsweb_theme['BgColor'];
  $rsweb_theme['mnu']['mm']['LnkH']['FontColor']['1']      = $rsweb_theme['FontColor'];
  $rsweb_theme['mnu']['mm']['LnkH']['TextDecoration']['1'] = "none";
  $rsweb_theme['mnu']['mm']['LnkH']['FontFamily']['1']     = $rsweb_theme['FontFamily'];
  $rsweb_theme['mnu']['mm']['LnkH']['FontWeight']['1']     = $rsweb_theme['FontWeight'];
  $rsweb_theme['mnu']['mm']['LnkH']['FontSize']['1']       = $rsweb_theme['FontSize'];

  //MENU LEVEL 2
  $rsweb_theme['mnu']['mm']['hdr']['2']               = "{";
  $rsweb_theme['mnu']['mm']['pre']['2']               = "[";
  $rsweb_theme['mnu']['mm']['suf']['2']               = "]";
  $rsweb_theme['mnu']['mm']['sep']['2']               = "&#160;|&#160;";
  $rsweb_theme['mnu']['mm']['ftr']['2']               = "}";
  // MENU LINK
  $rsweb_theme['mnu']['mm']['LnkL']['BgColor']['2']        = $rsweb_theme['BgColor'];
  $rsweb_theme['mnu']['mm']['LnkL']['FontColor']['2']      = $rsweb_theme['FontColor'];
  $rsweb_theme['mnu']['mm']['LnkL']['TextDecoration']['2'] = "underline";
  $rsweb_theme['mnu']['mm']['LnkL']['FontFamily']['2']     = $rsweb_theme['FontFamily'];
  $rsweb_theme['mnu']['mm']['LnkL']['FontWeight']['2']     = $rsweb_theme['FontWeight'];
  $rsweb_theme['mnu']['mm']['LnkL']['FontSize']['2']       = $rsweb_theme['FontSize'];
  // MENU VISITED LINK
  $rsweb_theme['mnu']['mm']['LnkV']['BgColor']['2']        = $rsweb_theme['BgColor'];
  $rsweb_theme['mnu']['mm']['LnkV']['FontColor']['2']      = $rsweb_theme['FontColor'];
  $rsweb_theme['mnu']['mm']['LnkV']['TextDecoration']['2'] = "underline";
  $rsweb_theme['mnu']['mm']['LnkV']['FontFamily']['2']     = $rsweb_theme['FontFamily'];
  $rsweb_theme['mnu']['mm']['LnkV']['FontWeight']['2']     = $rsweb_theme['FontWeight'];
  $rsweb_theme['mnu']['mm']['LnkV']['FontSize']['2']       = $rsweb_theme['FontSize'];
  // MENU HOVER LINK
  $rsweb_theme['mnu']['mm']['LnkH']['BgColor']['2']        = $rsweb_theme['BgColor'];
  $rsweb_theme['mnu']['mm']['LnkH']['FontColor']['2']      = $rsweb_theme['FontColor'];
  $rsweb_theme['mnu']['mm']['LnkH']['TextDecoration']['2'] = "none";
  $rsweb_theme['mnu']['mm']['LnkH']['FontFamily']['2']     = $rsweb_theme['FontFamily'];
  $rsweb_theme['mnu']['mm']['LnkH']['FontWeight']['2']     = $rsweb_theme['FontWeight'];
  $rsweb_theme['mnu']['mm']['LnkH']['FontSize']['2']       = $rsweb_theme['FontSize'];

  //MENU LEVEL 3
  $rsweb_theme['mnu']['mm']['hdr']['3']               = "{";
  $rsweb_theme['mnu']['mm']['pre']['3']               = "[";
  $rsweb_theme['mnu']['mm']['suf']['3']               = "]";
  $rsweb_theme['mnu']['mm']['sep']['3']               = "&#160;|&#160;";
  $rsweb_theme['mnu']['mm']['ftr']['3']               = "}";
  // MENU LINK
  $rsweb_theme['mnu']['mm']['LnkL']['BgColor']['3']        = $rsweb_theme['BgColor'];
  $rsweb_theme['mnu']['mm']['LnkL']['FontColor']['3']      = $rsweb_theme['FontColor'];
  $rsweb_theme['mnu']['mm']['LnkL']['TextDecoration']['3'] = "underline";
  $rsweb_theme['mnu']['mm']['LnkL']['FontFamily']['3']     = $rsweb_theme['FontFamily'];
  $rsweb_theme['mnu']['mm']['LnkL']['FontWeight']['3']     = $rsweb_theme['FontWeight'];
  $rsweb_theme['mnu']['mm']['LnkL']['FontSize']['3']       = $rsweb_theme['FontSize'];
  // MENU VISITED LINK
  $rsweb_theme['mnu']['mm']['LnkV']['BgColor']['3']        = $rsweb_theme['BgColor'];
  $rsweb_theme['mnu']['mm']['LnkV']['FontColor']['3']      = $rsweb_theme['FontColor'];
  $rsweb_theme['mnu']['mm']['LnkV']['TextDecoration']['3'] = "underline";
  $rsweb_theme['mnu']['mm']['LnkV']['FontFamily']['3']     = $rsweb_theme['FontFamily'];
  $rsweb_theme['mnu']['mm']['LnkV']['FontWeight']['3']     = $rsweb_theme['FontWeight'];
  $rsweb_theme['mnu']['mm']['LnkV']['FontSize']['3']       = $rsweb_theme['FontSize'];
  // MENU HOVER LINK
  $rsweb_theme['mnu']['mm']['LnkH']['BgColor']['3']        = $rsweb_theme['BgColor'];
  $rsweb_theme['mnu']['mm']['LnkH']['FontColor']['3']      = $rsweb_theme['FontColor'];
  $rsweb_theme['mnu']['mm']['LnkH']['TextDecoration']['3'] = "none";
  $rsweb_theme['mnu']['mm']['LnkH']['FontFamily']['3']     = $rsweb_theme['FontFamily'];
  $rsweb_theme['mnu']['mm']['LnkH']['FontWeight']['3']     = $rsweb_theme['FontWeight'];
  $rsweb_theme['mnu']['mm']['LnkH']['FontSize']['3']       = $rsweb_theme['FontSize'];

  //MENU LEVEL 4
  $rsweb_theme['mnu']['mm']['hdr']['4']               = "{";
  $rsweb_theme['mnu']['mm']['pre']['4']               = "[";
  $rsweb_theme['mnu']['mm']['suf']['4']               = "]";
  $rsweb_theme['mnu']['mm']['sep']['4']               = "&#160;|&#160;";
  $rsweb_theme['mnu']['mm']['ftr']['4']               = "}";
  // MENU LINK
  $rsweb_theme['mnu']['mm']['LnkL']['BgColor']['4']        = $rsweb_theme['BgColor'];
  $rsweb_theme['mnu']['mm']['LnkL']['FontColor']['4']      = $rsweb_theme['FontColor'];
  $rsweb_theme['mnu']['mm']['LnkL']['TextDecoration']['4'] = "underline";
  $rsweb_theme['mnu']['mm']['LnkL']['FontFamily']['4']     = $rsweb_theme['FontFamily'];
  $rsweb_theme['mnu']['mm']['LnkL']['FontWeight']['4']     = $rsweb_theme['FontWeight'];
  $rsweb_theme['mnu']['mm']['LnkL']['FontSize']['4']       = $rsweb_theme['FontSize'];
  // MENU VISITED LINK
  $rsweb_theme['mnu']['mm']['LnkV']['BgColor']['4']        = $rsweb_theme['BgColor'];
  $rsweb_theme['mnu']['mm']['LnkV']['FontColor']['4']      = $rsweb_theme['FontColor'];
  $rsweb_theme['mnu']['mm']['LnkV']['TextDecoration']['4'] = "underline";
  $rsweb_theme['mnu']['mm']['LnkV']['FontFamily']['4']     = $rsweb_theme['FontFamily'];
  $rsweb_theme['mnu']['mm']['LnkV']['FontWeight']['4']     = $rsweb_theme['FontWeight'];
  $rsweb_theme['mnu']['mm']['LnkV']['FontSize']['4']       = $rsweb_theme['FontSize'];
  // MENU HOVER LINK
  $rsweb_theme['mnu']['mm']['LnkH']['BgColor']['4']        = $rsweb_theme['BgColor'];
  $rsweb_theme['mnu']['mm']['LnkH']['FontColor']['4']      = $rsweb_theme['FontColor'];
  $rsweb_theme['mnu']['mm']['LnkH']['TextDecoration']['4'] = "none";
  $rsweb_theme['mnu']['mm']['LnkH']['FontFamily']['4']     = $rsweb_theme['FontFamily'];
  $rsweb_theme['mnu']['mm']['LnkH']['FontWeight']['4']     = $rsweb_theme['FontWeight'];
  $rsweb_theme['mnu']['mm']['LnkH']['FontSize']['4']       = $rsweb_theme['FontSize'];
  
  /* ********** ********** ********** MENUS ********** ********** ********** */
  //MENU LEVEL 0
  $rsweb_theme['mnu']['adm']['hdr']['0']               = "{";
  $rsweb_theme['mnu']['adm']['pre']['0']               = "[";
  $rsweb_theme['mnu']['adm']['suf']['0']               = "]";
  $rsweb_theme['mnu']['adm']['sep']['0']               = "&#160;|&#160;";
  $rsweb_theme['mnu']['adm']['ftr']['0']               = "}";
  // MENU LINK
  $rsweb_theme['mnu']['adm']['LnkL']['BgColor']['0']        = $rsweb_theme['BgColor'];
  $rsweb_theme['mnu']['adm']['LnkL']['FontColor']['0']      = $rsweb_theme['FontColor'];
  $rsweb_theme['mnu']['adm']['LnkL']['TextDecoration']['0'] = "underline";
  $rsweb_theme['mnu']['adm']['LnkL']['FontFamily']['0']     = $rsweb_theme['FontFamily'];
  $rsweb_theme['mnu']['adm']['LnkL']['FontWeight']['0']     = $rsweb_theme['FontWeight'];
  $rsweb_theme['mnu']['adm']['LnkL']['FontSize']['0']       = $rsweb_theme['FontSize'];
  // MENU VISITED LINK
  $rsweb_theme['mnu']['adm']['LnkV']['BgColor']['0']        = $rsweb_theme['BgColor'];
  $rsweb_theme['mnu']['adm']['LnkV']['FontColor']['0']      = $rsweb_theme['FontColor'];
  $rsweb_theme['mnu']['adm']['LnkV']['TextDecoration']['0'] = "underline";
  $rsweb_theme['mnu']['adm']['LnkV']['FontFamily']['0']     = $rsweb_theme['FontFamily'];
  $rsweb_theme['mnu']['adm']['LnkV']['FontWeight']['0']     = $rsweb_theme['FontWeight'];
  $rsweb_theme['mnu']['adm']['LnkV']['FontSize']['0']       = $rsweb_theme['FontSize'];
  // MENU HOVER LINK
  $rsweb_theme['mnu']['adm']['LnkH']['BgColor']['0']        = $rsweb_theme['BgColor'];
  $rsweb_theme['mnu']['adm']['LnkH']['FontColor']['0']      = $rsweb_theme['FontColor'];
  $rsweb_theme['mnu']['adm']['LnkH']['TextDecoration']['0'] = "none";
  $rsweb_theme['mnu']['adm']['LnkH']['FontFamily']['0']     = $rsweb_theme['FontFamily'];
  $rsweb_theme['mnu']['adm']['LnkH']['FontWeight']['0']     = $rsweb_theme['FontWeight'];
  $rsweb_theme['mnu']['adm']['LnkH']['FontSize']['0']       = $rsweb_theme['FontSize'];

  //MENU LEVEL 1
  $rsweb_theme['mnu']['adm']['hdr']['1']               = "{";
  $rsweb_theme['mnu']['adm']['pre']['1']               = "[";
  $rsweb_theme['mnu']['adm']['suf']['1']               = "]";
  $rsweb_theme['mnu']['adm']['sep']['1']               = "&#160;|&#160;";
  $rsweb_theme['mnu']['adm']['ftr']['1']               = "}";
  // MENU LINK
  $rsweb_theme['mnu']['adm']['LnkL']['BgColor']['1']        = $rsweb_theme['BgColor'];
  $rsweb_theme['mnu']['adm']['LnkL']['FontColor']['1']      = $rsweb_theme['FontColor'];
  $rsweb_theme['mnu']['adm']['LnkL']['TextDecoration']['1'] = "underline";
  $rsweb_theme['mnu']['adm']['LnkL']['FontFamily']['1']     = $rsweb_theme['FontFamily'];
  $rsweb_theme['mnu']['adm']['LnkL']['FontWeight']['1']     = $rsweb_theme['FontWeight'];
  $rsweb_theme['mnu']['adm']['LnkL']['FontSize']['1']       = $rsweb_theme['FontSize'];
  // MENU VISITED LINK
  $rsweb_theme['mnu']['adm']['LnkV']['BgColor']['1']        = $rsweb_theme['BgColor'];
  $rsweb_theme['mnu']['adm']['LnkV']['FontColor']['1']      = $rsweb_theme['FontColor'];
  $rsweb_theme['mnu']['adm']['LnkV']['TextDecoration']['1'] = "underline";
  $rsweb_theme['mnu']['adm']['LnkV']['FontFamily']['1']     = $rsweb_theme['FontFamily'];
  $rsweb_theme['mnu']['adm']['LnkV']['FontWeight']['1']     = $rsweb_theme['FontWeight'];
  $rsweb_theme['mnu']['adm']['LnkV']['FontSize']['1']       = $rsweb_theme['FontSize'];
  // MENU HOVER LINK
  $rsweb_theme['mnu']['adm']['LnkH']['BgColor']['1']        = $rsweb_theme['BgColor'];
  $rsweb_theme['mnu']['adm']['LnkH']['FontColor']['1']      = $rsweb_theme['FontColor'];
  $rsweb_theme['mnu']['adm']['LnkH']['TextDecoration']['1'] = "none";
  $rsweb_theme['mnu']['adm']['LnkH']['FontFamily']['1']     = $rsweb_theme['FontFamily'];
  $rsweb_theme['mnu']['adm']['LnkH']['FontWeight']['1']     = $rsweb_theme['FontWeight'];
  $rsweb_theme['mnu']['adm']['LnkH']['FontSize']['1']       = $rsweb_theme['FontSize'];

  //MENU LEVEL 2
  $rsweb_theme['mnu']['adm']['hdr']['2']               = "{";
  $rsweb_theme['mnu']['adm']['pre']['2']               = "[";
  $rsweb_theme['mnu']['adm']['suf']['2']               = "]";
  $rsweb_theme['mnu']['adm']['sep']['2']               = "&#160;|&#160;";
  $rsweb_theme['mnu']['adm']['ftr']['2']               = "}";
  // MENU LINK
  $rsweb_theme['mnu']['adm']['LnkL']['BgColor']['2']        = $rsweb_theme['BgColor'];
  $rsweb_theme['mnu']['adm']['LnkL']['FontColor']['2']      = $rsweb_theme['FontColor'];
  $rsweb_theme['mnu']['adm']['LnkL']['TextDecoration']['2'] = "underline";
  $rsweb_theme['mnu']['adm']['LnkL']['FontFamily']['2']     = $rsweb_theme['FontFamily'];
  $rsweb_theme['mnu']['adm']['LnkL']['FontWeight']['2']     = $rsweb_theme['FontWeight'];
  $rsweb_theme['mnu']['adm']['LnkL']['FontSize']['2']       = $rsweb_theme['FontSize'];
  // MENU VISITED LINK
  $rsweb_theme['mnu']['adm']['LnkV']['BgColor']['2']        = $rsweb_theme['BgColor'];
  $rsweb_theme['mnu']['adm']['LnkV']['FontColor']['2']      = $rsweb_theme['FontColor'];
  $rsweb_theme['mnu']['adm']['LnkV']['TextDecoration']['2'] = "underline";
  $rsweb_theme['mnu']['adm']['LnkV']['FontFamily']['2']     = $rsweb_theme['FontFamily'];
  $rsweb_theme['mnu']['adm']['LnkV']['FontWeight']['2']     = $rsweb_theme['FontWeight'];
  $rsweb_theme['mnu']['adm']['LnkV']['FontSize']['2']       = $rsweb_theme['FontSize'];
  // MENU HOVER LINK
  $rsweb_theme['mnu']['adm']['LnkH']['BgColor']['2']        = $rsweb_theme['BgColor'];
  $rsweb_theme['mnu']['adm']['LnkH']['FontColor']['2']      = $rsweb_theme['FontColor'];
  $rsweb_theme['mnu']['adm']['LnkH']['TextDecoration']['2'] = "none";
  $rsweb_theme['mnu']['adm']['LnkH']['FontFamily']['2']     = $rsweb_theme['FontFamily'];
  $rsweb_theme['mnu']['adm']['LnkH']['FontWeight']['2']     = $rsweb_theme['FontWeight'];
  $rsweb_theme['mnu']['adm']['LnkH']['FontSize']['2']       = $rsweb_theme['FontSize'];

  //MENU LEVEL 3
  $rsweb_theme['mnu']['adm']['hdr']['3']               = "{";
  $rsweb_theme['mnu']['adm']['pre']['3']               = "[";
  $rsweb_theme['mnu']['adm']['suf']['3']               = "]";
  $rsweb_theme['mnu']['adm']['sep']['3']               = "&#160;|&#160;";
  $rsweb_theme['mnu']['adm']['ftr']['3']               = "}";
  // MENU LINK
  $rsweb_theme['mnu']['adm']['LnkL']['BgColor']['3']        = $rsweb_theme['BgColor'];
  $rsweb_theme['mnu']['adm']['LnkL']['FontColor']['3']      = $rsweb_theme['FontColor'];
  $rsweb_theme['mnu']['adm']['LnkL']['TextDecoration']['3'] = "underline";
  $rsweb_theme['mnu']['adm']['LnkL']['FontFamily']['3']     = $rsweb_theme['FontFamily'];
  $rsweb_theme['mnu']['adm']['LnkL']['FontWeight']['3']     = $rsweb_theme['FontWeight'];
  $rsweb_theme['mnu']['adm']['LnkL']['FontSize']['3']       = $rsweb_theme['FontSize'];
  // MENU VISITED LINK
  $rsweb_theme['mnu']['adm']['LnkV']['BgColor']['3']        = $rsweb_theme['BgColor'];
  $rsweb_theme['mnu']['adm']['LnkV']['FontColor']['3']      = $rsweb_theme['FontColor'];
  $rsweb_theme['mnu']['adm']['LnkV']['TextDecoration']['3'] = "underline";
  $rsweb_theme['mnu']['adm']['LnkV']['FontFamily']['3']     = $rsweb_theme['FontFamily'];
  $rsweb_theme['mnu']['adm']['LnkV']['FontWeight']['3']     = $rsweb_theme['FontWeight'];
  $rsweb_theme['mnu']['adm']['LnkV']['FontSize']['3']       = $rsweb_theme['FontSize'];
  // MENU HOVER LINK
  $rsweb_theme['mnu']['adm']['LnkH']['BgColor']['3']        = $rsweb_theme['BgColor'];
  $rsweb_theme['mnu']['adm']['LnkH']['FontColor']['3']      = $rsweb_theme['FontColor'];
  $rsweb_theme['mnu']['adm']['LnkH']['TextDecoration']['3'] = "none";
  $rsweb_theme['mnu']['adm']['LnkH']['FontFamily']['3']     = $rsweb_theme['FontFamily'];
  $rsweb_theme['mnu']['adm']['LnkH']['FontWeight']['3']     = $rsweb_theme['FontWeight'];
  $rsweb_theme['mnu']['adm']['LnkH']['FontSize']['3']       = $rsweb_theme['FontSize'];

  //MENU LEVEL 4
  $rsweb_theme['mnu']['adm']['hdr']['4']               = "{";
  $rsweb_theme['mnu']['adm']['pre']['4']               = "[";
  $rsweb_theme['mnu']['adm']['suf']['4']               = "]";
  $rsweb_theme['mnu']['adm']['sep']['4']               = "&#160;|&#160;";
  $rsweb_theme['mnu']['adm']['ftr']['4']               = "}";
  // MENU LINK
  $rsweb_theme['mnu']['adm']['LnkL']['BgColor']['4']        = $rsweb_theme['BgColor'];
  $rsweb_theme['mnu']['adm']['LnkL']['FontColor']['4']      = $rsweb_theme['FontColor'];
  $rsweb_theme['mnu']['adm']['LnkL']['TextDecoration']['4'] = "underline";
  $rsweb_theme['mnu']['adm']['LnkL']['FontFamily']['4']     = $rsweb_theme['FontFamily'];
  $rsweb_theme['mnu']['adm']['LnkL']['FontWeight']['4']     = $rsweb_theme['FontWeight'];
  $rsweb_theme['mnu']['adm']['LnkL']['FontSize']['4']       = $rsweb_theme['FontSize'];
  // MENU VISITED LINK
  $rsweb_theme['mnu']['adm']['LnkV']['BgColor']['4']        = $rsweb_theme['BgColor'];
  $rsweb_theme['mnu']['adm']['LnkV']['FontColor']['4']      = $rsweb_theme['FontColor'];
  $rsweb_theme['mnu']['adm']['LnkV']['TextDecoration']['4'] = "underline";
  $rsweb_theme['mnu']['adm']['LnkV']['FontFamily']['4']     = $rsweb_theme['FontFamily'];
  $rsweb_theme['mnu']['adm']['LnkV']['FontWeight']['4']     = $rsweb_theme['FontWeight'];
  $rsweb_theme['mnu']['adm']['LnkV']['FontSize']['4']       = $rsweb_theme['FontSize'];
  // MENU HOVER LINK
  $rsweb_theme['mnu']['adm']['LnkH']['BgColor']['4']        = $rsweb_theme['BgColor'];
  $rsweb_theme['mnu']['adm']['LnkH']['FontColor']['4']      = $rsweb_theme['FontColor'];
  $rsweb_theme['mnu']['adm']['LnkH']['TextDecoration']['4'] = "none";
  $rsweb_theme['mnu']['adm']['LnkH']['FontFamily']['4']     = $rsweb_theme['FontFamily'];
  $rsweb_theme['mnu']['adm']['LnkH']['FontWeight']['4']     = $rsweb_theme['FontWeight'];
  $rsweb_theme['mnu']['adm']['LnkH']['FontSize']['4']       = $rsweb_theme['FontSize'];

  /* ********** ********** ********** MENUS ********** ********** ********** */
  //MENU LEVEL 0
  $rsweb_theme['mnu']['oth']['hdr']['0']               = "{";
  $rsweb_theme['mnu']['oth']['pre']['0']               = "[";
  $rsweb_theme['mnu']['oth']['suf']['0']               = "]";
  $rsweb_theme['mnu']['oth']['sep']['0']               = "&#160;|&#160;";
  $rsweb_theme['mnu']['oth']['ftr']['0']               = "}";
  // MENU LINK
  $rsweb_theme['mnu']['oth']['LnkL']['BgColor']['0']        = $rsweb_theme['BgColor'];
  $rsweb_theme['mnu']['oth']['LnkL']['FontColor']['0']      = $rsweb_theme['FontColor'];
  $rsweb_theme['mnu']['oth']['LnkL']['TextDecoration']['0'] = "underline";
  $rsweb_theme['mnu']['oth']['LnkL']['FontFamily']['0']     = $rsweb_theme['FontFamily'];
  $rsweb_theme['mnu']['oth']['LnkL']['FontWeight']['0']     = $rsweb_theme['FontWeight'];
  $rsweb_theme['mnu']['oth']['LnkL']['FontSize']['0']       = $rsweb_theme['FontSize'];
  // MENU VISITED LINK
  $rsweb_theme['mnu']['oth']['LnkV']['BgColor']['0']        = $rsweb_theme['BgColor'];
  $rsweb_theme['mnu']['oth']['LnkV']['FontColor']['0']      = $rsweb_theme['FontColor'];
  $rsweb_theme['mnu']['oth']['LnkV']['TextDecoration']['0'] = "underline";
  $rsweb_theme['mnu']['oth']['LnkV']['FontFamily']['0']     = $rsweb_theme['FontFamily'];
  $rsweb_theme['mnu']['oth']['LnkV']['FontWeight']['0']     = $rsweb_theme['FontWeight'];
  $rsweb_theme['mnu']['oth']['LnkV']['FontSize']['0']       = $rsweb_theme['FontSize'];
  // MENU HOVER LINK
  $rsweb_theme['mnu']['oth']['LnkH']['BgColor']['0']        = $rsweb_theme['BgColor'];
  $rsweb_theme['mnu']['oth']['LnkH']['FontColor']['0']      = $rsweb_theme['FontColor'];
  $rsweb_theme['mnu']['oth']['LnkH']['TextDecoration']['0'] = "none";
  $rsweb_theme['mnu']['oth']['LnkH']['FontFamily']['0']     = $rsweb_theme['FontFamily'];
  $rsweb_theme['mnu']['oth']['LnkH']['FontWeight']['0']     = $rsweb_theme['FontWeight'];
  $rsweb_theme['mnu']['oth']['LnkH']['FontSize']['0']       = $rsweb_theme['FontSize'];

  //MENU LEVEL 1
  $rsweb_theme['mnu']['oth']['hdr']['1']               = "{";
  $rsweb_theme['mnu']['oth']['pre']['1']               = "[";
  $rsweb_theme['mnu']['oth']['suf']['1']               = "]";
  $rsweb_theme['mnu']['oth']['sep']['1']               = "&#160;|&#160;";
  $rsweb_theme['mnu']['oth']['ftr']['1']               = "}";
  // MENU LINK
  $rsweb_theme['mnu']['oth']['LnkL']['BgColor']['1']        = $rsweb_theme['BgColor'];
  $rsweb_theme['mnu']['oth']['LnkL']['FontColor']['1']      = $rsweb_theme['FontColor'];
  $rsweb_theme['mnu']['oth']['LnkL']['TextDecoration']['1'] = "underline";
  $rsweb_theme['mnu']['oth']['LnkL']['FontFamily']['1']     = $rsweb_theme['FontFamily'];
  $rsweb_theme['mnu']['oth']['LnkL']['FontWeight']['1']     = $rsweb_theme['FontWeight'];
  $rsweb_theme['mnu']['oth']['LnkL']['FontSize']['1']       = $rsweb_theme['FontSize'];
  // MENU VISITED LINK
  $rsweb_theme['mnu']['oth']['LnkV']['BgColor']['1']        = $rsweb_theme['BgColor'];
  $rsweb_theme['mnu']['oth']['LnkV']['FontColor']['1']      = $rsweb_theme['FontColor'];
  $rsweb_theme['mnu']['oth']['LnkV']['TextDecoration']['1'] = "underline";
  $rsweb_theme['mnu']['oth']['LnkV']['FontFamily']['1']     = $rsweb_theme['FontFamily'];
  $rsweb_theme['mnu']['oth']['LnkV']['FontWeight']['1']     = $rsweb_theme['FontWeight'];
  $rsweb_theme['mnu']['oth']['LnkV']['FontSize']['1']       = $rsweb_theme['FontSize'];
  // MENU HOVER LINK
  $rsweb_theme['mnu']['oth']['LnkH']['BgColor']['1']        = $rsweb_theme['BgColor'];
  $rsweb_theme['mnu']['oth']['LnkH']['FontColor']['1']      = $rsweb_theme['FontColor'];
  $rsweb_theme['mnu']['oth']['LnkH']['TextDecoration']['1'] = "none";
  $rsweb_theme['mnu']['oth']['LnkH']['FontFamily']['1']     = $rsweb_theme['FontFamily'];
  $rsweb_theme['mnu']['oth']['LnkH']['FontWeight']['1']     = $rsweb_theme['FontWeight'];
  $rsweb_theme['mnu']['oth']['LnkH']['FontSize']['1']       = $rsweb_theme['FontSize'];

  //MENU LEVEL 2
  $rsweb_theme['mnu']['oth']['hdr']['2']               = "{";
  $rsweb_theme['mnu']['oth']['pre']['2']               = "[";
  $rsweb_theme['mnu']['oth']['suf']['2']               = "]";
  $rsweb_theme['mnu']['oth']['sep']['2']               = "&#160;|&#160;";
  $rsweb_theme['mnu']['oth']['ftr']['2']               = "}";
  // MENU LINK
  $rsweb_theme['mnu']['oth']['LnkL']['BgColor']['2']        = $rsweb_theme['BgColor'];
  $rsweb_theme['mnu']['oth']['LnkL']['FontColor']['2']      = $rsweb_theme['FontColor'];
  $rsweb_theme['mnu']['oth']['LnkL']['TextDecoration']['2'] = "underline";
  $rsweb_theme['mnu']['oth']['LnkL']['FontFamily']['2']     = $rsweb_theme['FontFamily'];
  $rsweb_theme['mnu']['oth']['LnkL']['FontWeight']['2']     = $rsweb_theme['FontWeight'];
  $rsweb_theme['mnu']['oth']['LnkL']['FontSize']['2']       = $rsweb_theme['FontSize'];
  // MENU VISITED LINK
  $rsweb_theme['mnu']['oth']['LnkV']['BgColor']['2']        = $rsweb_theme['BgColor'];
  $rsweb_theme['mnu']['oth']['LnkV']['FontColor']['2']      = $rsweb_theme['FontColor'];
  $rsweb_theme['mnu']['oth']['LnkV']['TextDecoration']['2'] = "underline";
  $rsweb_theme['mnu']['oth']['LnkV']['FontFamily']['2']     = $rsweb_theme['FontFamily'];
  $rsweb_theme['mnu']['oth']['LnkV']['FontWeight']['2']     = $rsweb_theme['FontWeight'];
  $rsweb_theme['mnu']['oth']['LnkV']['FontSize']['2']       = $rsweb_theme['FontSize'];
  // MENU HOVER LINK
  $rsweb_theme['mnu']['oth']['LnkH']['BgColor']['2']        = $rsweb_theme['BgColor'];
  $rsweb_theme['mnu']['oth']['LnkH']['FontColor']['2']      = $rsweb_theme['FontColor'];
  $rsweb_theme['mnu']['oth']['LnkH']['TextDecoration']['2'] = "none";
  $rsweb_theme['mnu']['oth']['LnkH']['FontFamily']['2']     = $rsweb_theme['FontFamily'];
  $rsweb_theme['mnu']['oth']['LnkH']['FontWeight']['2']     = $rsweb_theme['FontWeight'];
  $rsweb_theme['mnu']['oth']['LnkH']['FontSize']['2']       = $rsweb_theme['FontSize'];

  //MENU LEVEL 3
  $rsweb_theme['mnu']['oth']['hdr']['3']               = "{";
  $rsweb_theme['mnu']['oth']['pre']['3']               = "[";
  $rsweb_theme['mnu']['oth']['suf']['3']               = "]";
  $rsweb_theme['mnu']['oth']['sep']['3']               = "&#160;|&#160;";
  $rsweb_theme['mnu']['oth']['ftr']['3']               = "}";
  // MENU LINK
  $rsweb_theme['mnu']['oth']['LnkL']['BgColor']['3']        = $rsweb_theme['BgColor'];
  $rsweb_theme['mnu']['oth']['LnkL']['FontColor']['3']      = $rsweb_theme['FontColor'];
  $rsweb_theme['mnu']['oth']['LnkL']['TextDecoration']['3'] = "underline";
  $rsweb_theme['mnu']['oth']['LnkL']['FontFamily']['3']     = $rsweb_theme['FontFamily'];
  $rsweb_theme['mnu']['oth']['LnkL']['FontWeight']['3']     = $rsweb_theme['FontWeight'];
  $rsweb_theme['mnu']['oth']['LnkL']['FontSize']['3']       = $rsweb_theme['FontSize'];
  // MENU VISITED LINK
  $rsweb_theme['mnu']['oth']['LnkV']['BgColor']['3']        = $rsweb_theme['BgColor'];
  $rsweb_theme['mnu']['oth']['LnkV']['FontColor']['3']      = $rsweb_theme['FontColor'];
  $rsweb_theme['mnu']['oth']['LnkV']['TextDecoration']['3'] = "underline";
  $rsweb_theme['mnu']['oth']['LnkV']['FontFamily']['3']     = $rsweb_theme['FontFamily'];
  $rsweb_theme['mnu']['oth']['LnkV']['FontWeight']['3']     = $rsweb_theme['FontWeight'];
  $rsweb_theme['mnu']['oth']['LnkV']['FontSize']['3']       = $rsweb_theme['FontSize'];
  // MENU HOVER LINK
  $rsweb_theme['mnu']['oth']['LnkH']['BgColor']['3']        = $rsweb_theme['BgColor'];
  $rsweb_theme['mnu']['oth']['LnkH']['FontColor']['3']      = $rsweb_theme['FontColor'];
  $rsweb_theme['mnu']['oth']['LnkH']['TextDecoration']['3'] = "none";
  $rsweb_theme['mnu']['oth']['LnkH']['FontFamily']['3']     = $rsweb_theme['FontFamily'];
  $rsweb_theme['mnu']['oth']['LnkH']['FontWeight']['3']     = $rsweb_theme['FontWeight'];
  $rsweb_theme['mnu']['oth']['LnkH']['FontSize']['3']       = $rsweb_theme['FontSize'];

  //MENU LEVEL 4
  $rsweb_theme['mnu']['oth']['hdr']['4']               = "{";
  $rsweb_theme['mnu']['oth']['pre']['4']               = "[";
  $rsweb_theme['mnu']['oth']['suf']['4']               = "]";
  $rsweb_theme['mnu']['oth']['sep']['4']               = "&#160;|&#160;";
  $rsweb_theme['mnu']['oth']['ftr']['4']               = "}";
  // MENU LINK
  $rsweb_theme['mnu']['oth']['LnkL']['BgColor']['4']        = $rsweb_theme['BgColor'];
  $rsweb_theme['mnu']['oth']['LnkL']['FontColor']['4']      = $rsweb_theme['FontColor'];
  $rsweb_theme['mnu']['oth']['LnkL']['TextDecoration']['4'] = "underline";
  $rsweb_theme['mnu']['oth']['LnkL']['FontFamily']['4']     = $rsweb_theme['FontFamily'];
  $rsweb_theme['mnu']['oth']['LnkL']['FontWeight']['4']     = $rsweb_theme['FontWeight'];
  $rsweb_theme['mnu']['oth']['LnkL']['FontSize']['4']       = $rsweb_theme['FontSize'];
  // MENU VISITED LINK
  $rsweb_theme['mnu']['oth']['LnkV']['BgColor']['4']        = $rsweb_theme['BgColor'];
  $rsweb_theme['mnu']['oth']['LnkV']['FontColor']['4']      = $rsweb_theme['FontColor'];
  $rsweb_theme['mnu']['oth']['LnkV']['TextDecoration']['4'] = "underline";
  $rsweb_theme['mnu']['oth']['LnkV']['FontFamily']['4']     = $rsweb_theme['FontFamily'];
  $rsweb_theme['mnu']['oth']['LnkV']['FontWeight']['4']     = $rsweb_theme['FontWeight'];
  $rsweb_theme['mnu']['oth']['LnkV']['FontSize']['4']       = $rsweb_theme['FontSize'];
  // MENU HOVER LINK
  $rsweb_theme['mnu']['oth']['LnkH']['BgColor']['4']        = $rsweb_theme['BgColor'];
  $rsweb_theme['mnu']['oth']['LnkH']['FontColor']['4']      = $rsweb_theme['FontColor'];
  $rsweb_theme['mnu']['oth']['LnkH']['TextDecoration']['4'] = "none";
  $rsweb_theme['mnu']['oth']['LnkH']['FontFamily']['4']     = $rsweb_theme['FontFamily'];
  $rsweb_theme['mnu']['oth']['LnkH']['FontWeight']['4']     = $rsweb_theme['FontWeight'];
  $rsweb_theme['mnu']['oth']['LnkH']['FontSize']['4']       = $rsweb_theme['FontSize'];
  /* ********** ********** ********** PAGE CONTENT ********** ********** ********** */
  // PAGE CONTENT
  $rsweb_theme['cnt']['hdr']                = "\n";
  $rsweb_theme['cnt']['pre']                = "";
  $rsweb_theme['cnt']['suf']                = "";
  $rsweb_theme['cnt']['ftr']                = "\n";
 
  // CONTENT TITLE
  $rsweb_theme['cnt']['tt1']['class']       = "title";
  $rsweb_theme['cnt']['tt1']['pre']         = "\n<DIV CLASS=\"".$rsweb_theme['cnt']['tt1']['class']."\">&#160;&#160;";
  $rsweb_theme['cnt']['tt1']['suf']         = "</Div>";

  // CONTENT SUBTITLE
  $rsweb_theme['cnt']['tt2']['class']       = "subtitle";
  $rsweb_theme['cnt']['tt2']['pre']         = "\n<DIV CLASS=\"".$rsweb_theme['cnt']['tt2']['class']."\">&#160;&#160;";
  $rsweb_theme['cnt']['tt2']['suf']         = "</DIV>";

  // PAGE TEXT
  $rsweb_theme['cnt']['txt']['class']       = "text";
  $rsweb_theme['cnt']['txt']['pre']         = "\n<DIV CLASS=\"".$rsweb_theme['cnt']['txt']['class']."\">\n";
  $rsweb_theme['cnt']['txt']['suf']         = "\n</DIV>";

  /* ********** ********** ********** PAGE CONTENT PICTURES ********** ********** ********** */
  // CONTENT PICTURES - 0 - PANEL
  $rsweb_theme['cnt']['pic']['hdr']['0']            = "\n";
  $rsweb_theme['cnt']['pic']['pre']['0']            = "";
  $rsweb_theme['cnt']['pic']['sep']['0']            = "\n<BR><BR>";
  $rsweb_theme['cnt']['pic']['suf']['0']            = "";
  $rsweb_theme['cnt']['pic']['ftr']['0']            = "\n";
  $rsweb_theme['cnt']['pic']['max']['0']            = "150";

  // CONTENT PICTURES - 1 - TOP
  $rsweb_theme['cnt']['pic']['hdr']['1']            = "<BR><DIV ALIGN=\"center\">";
  $rsweb_theme['cnt']['pic']['pre']['1']            = "\n<DIV STYLE=\"float: left; clear: none; margin: 4px;\">";
  $rsweb_theme['cnt']['pic']['sep']['1']            = "";
  $rsweb_theme['cnt']['pic']['suf']['1']            = "\n</DIV>";
  $rsweb_theme['cnt']['pic']['ftr']['1']            = "</DIV><BR CLEAR=\"all\">";
  $rsweb_theme['cnt']['pic']['max']['1']            = "150";

  // CONTENT PICTURES - 2 - AFTER TITLE
  $rsweb_theme['cnt']['pic']['hdr']['2']            = "<BR><DIV ALIGN=\"center\">";
  $rsweb_theme['cnt']['pic']['pre']['2']            = "\n<DIV STYLE=\"float: left; clear: none; margin: 4px;\">";
  $rsweb_theme['cnt']['pic']['sep']['2']            = "";
  $rsweb_theme['cnt']['pic']['suf']['2']            = "\n</DIV>";
  $rsweb_theme['cnt']['pic']['ftr']['2']            = "</DIV><BR CLEAR=\"all\">";
  $rsweb_theme['cnt']['pic']['max']['2']            = "150";

  // CONTENT PICTURES - 3 - AFTER SUBTITLE
  $rsweb_theme['cnt']['pic']['hdr']['3']            = "<BR><DIV ALIGN=\"center\">";
  $rsweb_theme['cnt']['pic']['pre']['3']            = "\n<DIV STYLE=\"float: left; clear: none; margin: 4px;\">";
  $rsweb_theme['cnt']['pic']['sep']['3']            = "";
  $rsweb_theme['cnt']['pic']['suf']['3']            = "\n</DIV>";
  $rsweb_theme['cnt']['pic']['ftr']['3']            = "</DIV><BR CLEAR=\"all\">";
  $rsweb_theme['cnt']['pic']['max']['3']            = "150";

  // CONTENT PICTURES - 4 - BOTTOM
  $rsweb_theme['cnt']['pic']['hdr']['4']            = "<BR><DIV ALIGN=\"center\">";
  $rsweb_theme['cnt']['pic']['pre']['4']            = "\n<DIV STYLE=\"float: left; clear: none; margin: 4px;\">";
  $rsweb_theme['cnt']['pic']['sep']['4']            = "";
  $rsweb_theme['cnt']['pic']['suf']['4']            = "\n</DIV>";
  $rsweb_theme['cnt']['pic']['ftr']['4']            = "</DIV><BR CLEAR=\"all\">";
  $rsweb_theme['cnt']['pic']['max']['4']            = "150";

  /* ********** ********** ********** FEATURED MODULE ********** ********** ********** */
  // FEATURED MODULE
  $rsweb_theme['ftr']['hdr']                = "\n<DIV CLASS=\"".$rsweb_theme['cnt']['tt1']['class']."\">&#160;&#160;".$rsweb_ln['featured']['tt']."</DIV><BR>";
  $rsweb_theme['ftr']['ftr']                = "\n";

  $rsweb_theme['ftr']['sep']                = "\n<BR><BR>";

  $rsweb_theme['ftr']['limit']              = "3"; // how many modules to display
  $rsweb_theme['ftr']['chartt']                = "20"; // how many characters for title
  $rsweb_theme['ftr']['picsize']                = "100"; // max picture size
  $rsweb_theme['ftr']['chardesc']                = "20"; // how many characters for description

  $rsweb_theme['ftr']['fpre']               = "\n";
  $rsweb_theme['ftr']['fsuf']               = "\n";

  $rsweb_theme['ftr']['tt']['pre']             = "\n";
  $rsweb_theme['ftr']['tt']['suf']             = "\n";
  $rsweb_theme['ftr']['pic']['pre']             = "\n<BR>";
  $rsweb_theme['ftr']['pic']['suf']             = "\n<BR>";
  $rsweb_theme['ftr']['desc']['pre']             = "\n";
  $rsweb_theme['ftr']['desc']['suf']             = "\n";

  // FEATURED LINK
  $rsweb_theme['ftr']['LnkL']['BgColor']        = $rsweb_theme['BgColor'];
  $rsweb_theme['ftr']['LnkL']['FontColor']      = $rsweb_theme['FontColor'];
  $rsweb_theme['ftr']['LnkL']['TextDecoration'] = "underline";
  $rsweb_theme['ftr']['LnkL']['FontFamily']     = $rsweb_theme['FontFamily'];
  $rsweb_theme['ftr']['LnkL']['FontWeight']     = "bold";
  $rsweb_theme['ftr']['LnkL']['FontSize']       = $rsweb_theme['FontSize'];
  // FEATURED VISITED LINK
  $rsweb_theme['ftr']['LnkV']['BgColor']        = $rsweb_theme['BgColor'];
  $rsweb_theme['ftr']['LnkV']['FontColor']      = $rsweb_theme['FontColor'];
  $rsweb_theme['ftr']['LnkV']['TextDecoration'] = "underline";
  $rsweb_theme['ftr']['LnkV']['FontFamily']     = $rsweb_theme['FontFamily'];
  $rsweb_theme['ftr']['LnkV']['FontWeight']     = "bold";
  $rsweb_theme['ftr']['LnkV']['FontSize']       = $rsweb_theme['FontSize'];
  // FEATURED HOVER LINK
  $rsweb_theme['ftr']['LnkH']['BgColor']        = $rsweb_theme['BgColor'];
  $rsweb_theme['ftr']['LnkH']['FontColor']      = $rsweb_theme['FontColor'];
  $rsweb_theme['ftr']['LnkH']['TextDecoration'] = "none";
  $rsweb_theme['ftr']['LnkH']['FontFamily']     = $rsweb_theme['FontFamily'];
  $rsweb_theme['ftr']['LnkH']['FontWeight']     = "bold";
  $rsweb_theme['ftr']['LnkH']['FontSize']       = $rsweb_theme['FontSize'];
  
  /* ********** ********** ********** COPYRIGHT NOTICE ********** ********** ********** */
  // COPYRIGHT NOTICE
  $rsweb_theme['cpy']['pre']            = "\n";
  $rsweb_theme['cpy']['suf']            = "\n";

  // COPYRIGHT LINK
  $rsweb_theme['cpy']['LnkL']['BgColor']        = $rsweb_theme['BgColor'];
  $rsweb_theme['cpy']['LnkL']['FontColor']      = $rsweb_theme['FontColor'];
  $rsweb_theme['cpy']['LnkL']['TextDecoration'] = "underline";
  $rsweb_theme['cpy']['LnkL']['FontFamily']     = $rsweb_theme['FontFamily'];
  $rsweb_theme['cpy']['LnkL']['FontWeight']     = $rsweb_theme['FontWeight'];
  $rsweb_theme['cpy']['LnkL']['FontSize']       = $rsweb_theme['FontSize'];
  // COPYRIGHT VISITED LINK
  $rsweb_theme['cpy']['LnkV']['BgColor']        = $rsweb_theme['BgColor'];
  $rsweb_theme['cpy']['LnkV']['FontColor']      = $rsweb_theme['FontColor'];
  $rsweb_theme['cpy']['LnkV']['TextDecoration'] = "underline";
  $rsweb_theme['cpy']['LnkV']['FontFamily']     = $rsweb_theme['FontFamily'];
  $rsweb_theme['cpy']['LnkV']['FontWeight']     = $rsweb_theme['FontWeight'];
  $rsweb_theme['cpy']['LnkV']['FontSize']       = $rsweb_theme['FontSize'];
  // COPYRIGHT HOVER LINK
  $rsweb_theme['cpy']['LnkH']['BgColor']        = $rsweb_theme['BgColor'];
  $rsweb_theme['cpy']['LnkH']['FontColor']      = $rsweb_theme['FontColor'];
  $rsweb_theme['cpy']['LnkH']['TextDecoration'] = "none";
  $rsweb_theme['cpy']['LnkH']['FontFamily']     = $rsweb_theme['FontFamily'];
  $rsweb_theme['cpy']['LnkH']['FontWeight']     = $rsweb_theme['FontWeight'];
  $rsweb_theme['cpy']['LnkH']['FontSize']       = $rsweb_theme['FontSize'];
  
  /* ********** ********** ********** VISITOR STATISTICS ********** ********** ********** */
  $rsweb_theme['sts']['hdr']        = "\n<BR>";
  $rsweb_theme['sts']['ftr']        = "\n";

  $rsweb_theme['sts']['sep']         = "\n";
  $rsweb_theme['sts']['pre']         = "\n";
  $rsweb_theme['sts']['suf']         = "\n";
  
  /* ********** ********** ********** USER MODULE ********** ********** ********** */
  // USER MODULE
  $rsweb_theme['usr']['hdr'] = "\n<TABLE BORDER=\"0\" CELLPADDING=\"0\" CELLSPACING=\"0\">\n<TR>";
  $rsweb_theme['usr']['pre'] = "\n<TD CLASS=\"usr_td\">";
  $rsweb_theme['usr']['suf'] = "\n</TD>";
  $rsweb_theme['usr']['sep'] = "";
  $rsweb_theme['usr']['ftr'] = "\n</TR>\n</TABLE>";
  
  $rsweb_theme['usr']['login']['hdr'] = "\n<TABLE BORDER=\"0\" CELLPADDING=\"0\" CELLSPACING=\"0\">\n<TR>";
  $rsweb_theme['usr']['login']['pre'] = "\n<TD CLASS=\"usr_login\">";
  $rsweb_theme['usr']['login']['suf'] = "\n</TD>";
  $rsweb_theme['usr']['login']['sep'] = "";
  $rsweb_theme['usr']['login']['ftr'] = "\n</TR>\n</TABLE>";

  /* ********** ********** ********** LANGUAGE MODULE ********** ********** ********** */
  // LANGUAGE MODULE
  $rsweb_theme['lng']['hdr'] = "\n";
  $rsweb_theme['lng']['pre'] = "\n";
  $rsweb_theme['lng']['suf'] = "\n";
  $rsweb_theme['lng']['sep'] = "\n&#160;";
  $rsweb_theme['lng']['ftr'] = "\n";

  /* ********** ********** ********** BLOG MODULE ********** ********** ********** */
  $rsweb_theme['blg']['hdr'] = "\n";
  $rsweb_theme['blg']['ftr'] = "\n";
  
  $rsweb_theme['blg']['pre'] = "\n";
  $rsweb_theme['blg']['suf'] = "\n";
  $rsweb_theme['blg']['sep'] = "\n<BR>";
  
  $rsweb_theme['blg']['posted']['pre'] = "\n";
  $rsweb_theme['blg']['posted']['suf'] = "\n";
  
  /* ********** ********** ********** COMMENTS MODULE ********** ********** ********** */
  $rsweb_theme['cmnts']['hdr'] = "\n<BR>";
  $rsweb_theme['cmnts']['ftr'] = "\n";
  
  $rsweb_theme['cmnts']['pre'] = "\n";
  $rsweb_theme['cmnts']['suf'] = "\n";
  $rsweb_theme['cmnts']['sep'] = "\n<HR>";
  
  /* ********** ********** ********** SHOPPING CART MODULE ********** ********** ********** */
  $rsweb_theme['crt']['hdr'] = "\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\">\n<TR>";
  $rsweb_theme['crt']['pre'] = "\n<TD>";
  $rsweb_theme['crt']['suf'] = "\n</TD>";
  $rsweb_theme['crt']['sep'] = "";
  $rsweb_theme['crt']['ftr'] = "\n</TR>\n</TABLE>";
}
?>