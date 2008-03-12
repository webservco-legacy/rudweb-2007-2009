<?php
/*
./themes/ubws/theme.inc.php
14:51 2008-03-12
*/
if(!defined('_UBWS_PUBFIL')) {require_once '../../lib/404.php';}

if (_UBWS_DBTHM === "1") {
  // FROM DB
}
else {
  // FROM FILE
  /* ********** ********** ********** BODY ********** ********** ********** */
  // BODY
  $ubws_theme['BgColor']         = "#EEEEEE";
  $ubws_theme['FontColor']       = "#333333";
  $ubws_theme['FontErrColor']    = "#990000";
  $ubws_theme['MarginTop']       = "0";
  $ubws_theme['MarginBottom']    = "0";
  $ubws_theme['MarginLeft']      = "0";
  $ubws_theme['MarginRight']     = "0";
  $ubws_theme['TextAlign']       = "left";
  $ubws_theme['VerticalAlign']   = "middle";
  $ubws_theme['TextDecoration']  = "none";
  $ubws_theme['FontFamily']      = "verdana, arial, helvetica, sans-serif";
  $ubws_theme['FontWeight']      = "normal";
  $ubws_theme['FontSize']        = "11";
  $ubws_theme['Measure']         = "px";
  $ubws_theme['BorderColor']     = "#333333";
  $ubws_theme['BorderStyle']     = "dashed";
  $ubws_theme['BorderTop']       = "0";
  $ubws_theme['BorderBottom']    = "0";
  $ubws_theme['BorderLeft']      = "0";
  $ubws_theme['BorderRight']     = "0";
  $ubws_theme['PaddingTop']      = "0";
  $ubws_theme['PaddingBottom']   = "0";
  $ubws_theme['PaddingLeft']     = "0";
  $ubws_theme['PaddingRight']    = "0";

  /* ********** ********** ********** DEFAULT LINKS ********** ********** ********** */
  // LINK
  $ubws_theme['LnkL']['BgColor']        = $ubws_theme['BgColor'];
  $ubws_theme['LnkL']['FontColor']      = $ubws_theme['FontColor'];
  $ubws_theme['LnkL']['TextDecoration'] = 'underline';
  $ubws_theme['LnkL']['FontFamily']     = $ubws_theme['FontFamily'];
  $ubws_theme['LnkL']['FontWeight']     = $ubws_theme['FontWeight'];
  $ubws_theme['LnkL']['FontSize']       = $ubws_theme['FontSize'];
  // VISITED LINK
  $ubws_theme['LnkV']['BgColor']        = $ubws_theme['BgColor'];
  $ubws_theme['LnkV']['FontColor']      = $ubws_theme['FontColor'];
  $ubws_theme['LnkV']['TextDecoration'] = 'underline';
  $ubws_theme['LnkV']['FontFamily']     = $ubws_theme['FontFamily'];
  $ubws_theme['LnkV']['FontWeight']     = $ubws_theme['FontWeight'];
  $ubws_theme['LnkV']['FontSize']       = $ubws_theme['FontSize'];
  // HOVER LINK
  $ubws_theme['LnkH']['BgColor']        = $ubws_theme['BgColor'];
  $ubws_theme['LnkH']['FontColor']      = $ubws_theme['FontColor'];
  $ubws_theme['LnkH']['TextDecoration'] = 'none';
  $ubws_theme['LnkH']['FontFamily']     = $ubws_theme['FontFamily'];
  $ubws_theme['LnkH']['FontWeight']     = $ubws_theme['FontWeight'];
  $ubws_theme['LnkH']['FontSize']       = $ubws_theme['FontSize'];

  /* ********** ********** ********** MENUS ********** ********** ********** */
  //MENU LEVEL 0
  $ubws_theme['mnu']['mm']['hdr']['0']               = "{";
  $ubws_theme['mnu']['mm']['pre']['0']               = "[";
  $ubws_theme['mnu']['mm']['suf']['0']               = "]";
  $ubws_theme['mnu']['mm']['sep']['0']               = "&#160;|&#160;";
  $ubws_theme['mnu']['mm']['ftr']['0']               = "}";
  // MENU LINK
  $ubws_theme['mnu']['mm']['LnkL']['BgColor']['0']        = $ubws_theme['BgColor'];
  $ubws_theme['mnu']['mm']['LnkL']['FontColor']['0']      = $ubws_theme['FontColor'];
  $ubws_theme['mnu']['mm']['LnkL']['TextDecoration']['0'] = "underline";
  $ubws_theme['mnu']['mm']['LnkL']['FontFamily']['0']     = $ubws_theme['FontFamily'];
  $ubws_theme['mnu']['mm']['LnkL']['FontWeight']['0']     = $ubws_theme['FontWeight'];
  $ubws_theme['mnu']['mm']['LnkL']['FontSize']['0']       = $ubws_theme['FontSize'];
  // MENU VISITED LINK
  $ubws_theme['mnu']['mm']['LnkV']['BgColor']['0']        = $ubws_theme['BgColor'];
  $ubws_theme['mnu']['mm']['LnkV']['FontColor']['0']      = $ubws_theme['FontColor'];
  $ubws_theme['mnu']['mm']['LnkV']['TextDecoration']['0'] = "underline";
  $ubws_theme['mnu']['mm']['LnkV']['FontFamily']['0']     = $ubws_theme['FontFamily'];
  $ubws_theme['mnu']['mm']['LnkV']['FontWeight']['0']     = $ubws_theme['FontWeight'];
  $ubws_theme['mnu']['mm']['LnkV']['FontSize']['0']       = $ubws_theme['FontSize'];
  // MENU HOVER LINK
  $ubws_theme['mnu']['mm']['LnkH']['BgColor']['0']        = $ubws_theme['BgColor'];
  $ubws_theme['mnu']['mm']['LnkH']['FontColor']['0']      = $ubws_theme['FontColor'];
  $ubws_theme['mnu']['mm']['LnkH']['TextDecoration']['0'] = "none";
  $ubws_theme['mnu']['mm']['LnkH']['FontFamily']['0']     = $ubws_theme['FontFamily'];
  $ubws_theme['mnu']['mm']['LnkH']['FontWeight']['0']     = $ubws_theme['FontWeight'];
  $ubws_theme['mnu']['mm']['LnkH']['FontSize']['0']       = $ubws_theme['FontSize'];

  //MENU LEVEL 1
  $ubws_theme['mnu']['mm']['hdr']['1']               = "{";
  $ubws_theme['mnu']['mm']['pre']['1']               = "[";
  $ubws_theme['mnu']['mm']['suf']['1']               = "]";
  $ubws_theme['mnu']['mm']['sep']['1']               = "&#160;|&#160;";
  $ubws_theme['mnu']['mm']['ftr']['1']               = "}";
  // MENU LINK
  $ubws_theme['mnu']['mm']['LnkL']['BgColor']['1']        = $ubws_theme['BgColor'];
  $ubws_theme['mnu']['mm']['LnkL']['FontColor']['1']      = $ubws_theme['FontColor'];
  $ubws_theme['mnu']['mm']['LnkL']['TextDecoration']['1'] = "underline";
  $ubws_theme['mnu']['mm']['LnkL']['FontFamily']['1']     = $ubws_theme['FontFamily'];
  $ubws_theme['mnu']['mm']['LnkL']['FontWeight']['1']     = $ubws_theme['FontWeight'];
  $ubws_theme['mnu']['mm']['LnkL']['FontSize']['1']       = $ubws_theme['FontSize'];
  // MENU VISITED LINK
  $ubws_theme['mnu']['mm']['LnkV']['BgColor']['1']        = $ubws_theme['BgColor'];
  $ubws_theme['mnu']['mm']['LnkV']['FontColor']['1']      = $ubws_theme['FontColor'];
  $ubws_theme['mnu']['mm']['LnkV']['TextDecoration']['1'] = "underline";
  $ubws_theme['mnu']['mm']['LnkV']['FontFamily']['1']     = $ubws_theme['FontFamily'];
  $ubws_theme['mnu']['mm']['LnkV']['FontWeight']['1']     = $ubws_theme['FontWeight'];
  $ubws_theme['mnu']['mm']['LnkV']['FontSize']['1']       = $ubws_theme['FontSize'];
  // MENU HOVER LINK
  $ubws_theme['mnu']['mm']['LnkH']['BgColor']['1']        = $ubws_theme['BgColor'];
  $ubws_theme['mnu']['mm']['LnkH']['FontColor']['1']      = $ubws_theme['FontColor'];
  $ubws_theme['mnu']['mm']['LnkH']['TextDecoration']['1'] = "none";
  $ubws_theme['mnu']['mm']['LnkH']['FontFamily']['1']     = $ubws_theme['FontFamily'];
  $ubws_theme['mnu']['mm']['LnkH']['FontWeight']['1']     = $ubws_theme['FontWeight'];
  $ubws_theme['mnu']['mm']['LnkH']['FontSize']['1']       = $ubws_theme['FontSize'];

  //MENU LEVEL 2
  $ubws_theme['mnu']['mm']['hdr']['2']               = "{";
  $ubws_theme['mnu']['mm']['pre']['2']               = "[";
  $ubws_theme['mnu']['mm']['suf']['2']               = "]";
  $ubws_theme['mnu']['mm']['sep']['2']               = "&#160;|&#160;";
  $ubws_theme['mnu']['mm']['ftr']['2']               = "}";
  // MENU LINK
  $ubws_theme['mnu']['mm']['LnkL']['BgColor']['2']        = $ubws_theme['BgColor'];
  $ubws_theme['mnu']['mm']['LnkL']['FontColor']['2']      = $ubws_theme['FontColor'];
  $ubws_theme['mnu']['mm']['LnkL']['TextDecoration']['2'] = "underline";
  $ubws_theme['mnu']['mm']['LnkL']['FontFamily']['2']     = $ubws_theme['FontFamily'];
  $ubws_theme['mnu']['mm']['LnkL']['FontWeight']['2']     = $ubws_theme['FontWeight'];
  $ubws_theme['mnu']['mm']['LnkL']['FontSize']['2']       = $ubws_theme['FontSize'];
  // MENU VISITED LINK
  $ubws_theme['mnu']['mm']['LnkV']['BgColor']['2']        = $ubws_theme['BgColor'];
  $ubws_theme['mnu']['mm']['LnkV']['FontColor']['2']      = $ubws_theme['FontColor'];
  $ubws_theme['mnu']['mm']['LnkV']['TextDecoration']['2'] = "underline";
  $ubws_theme['mnu']['mm']['LnkV']['FontFamily']['2']     = $ubws_theme['FontFamily'];
  $ubws_theme['mnu']['mm']['LnkV']['FontWeight']['2']     = $ubws_theme['FontWeight'];
  $ubws_theme['mnu']['mm']['LnkV']['FontSize']['2']       = $ubws_theme['FontSize'];
  // MENU HOVER LINK
  $ubws_theme['mnu']['mm']['LnkH']['BgColor']['2']        = $ubws_theme['BgColor'];
  $ubws_theme['mnu']['mm']['LnkH']['FontColor']['2']      = $ubws_theme['FontColor'];
  $ubws_theme['mnu']['mm']['LnkH']['TextDecoration']['2'] = "none";
  $ubws_theme['mnu']['mm']['LnkH']['FontFamily']['2']     = $ubws_theme['FontFamily'];
  $ubws_theme['mnu']['mm']['LnkH']['FontWeight']['2']     = $ubws_theme['FontWeight'];
  $ubws_theme['mnu']['mm']['LnkH']['FontSize']['2']       = $ubws_theme['FontSize'];

  //MENU LEVEL 3
  $ubws_theme['mnu']['mm']['hdr']['3']               = "{";
  $ubws_theme['mnu']['mm']['pre']['3']               = "[";
  $ubws_theme['mnu']['mm']['suf']['3']               = "]";
  $ubws_theme['mnu']['mm']['sep']['3']               = "&#160;|&#160;";
  $ubws_theme['mnu']['mm']['ftr']['3']               = "}";
  // MENU LINK
  $ubws_theme['mnu']['mm']['LnkL']['BgColor']['3']        = $ubws_theme['BgColor'];
  $ubws_theme['mnu']['mm']['LnkL']['FontColor']['3']      = $ubws_theme['FontColor'];
  $ubws_theme['mnu']['mm']['LnkL']['TextDecoration']['3'] = "underline";
  $ubws_theme['mnu']['mm']['LnkL']['FontFamily']['3']     = $ubws_theme['FontFamily'];
  $ubws_theme['mnu']['mm']['LnkL']['FontWeight']['3']     = $ubws_theme['FontWeight'];
  $ubws_theme['mnu']['mm']['LnkL']['FontSize']['3']       = $ubws_theme['FontSize'];
  // MENU VISITED LINK
  $ubws_theme['mnu']['mm']['LnkV']['BgColor']['3']        = $ubws_theme['BgColor'];
  $ubws_theme['mnu']['mm']['LnkV']['FontColor']['3']      = $ubws_theme['FontColor'];
  $ubws_theme['mnu']['mm']['LnkV']['TextDecoration']['3'] = "underline";
  $ubws_theme['mnu']['mm']['LnkV']['FontFamily']['3']     = $ubws_theme['FontFamily'];
  $ubws_theme['mnu']['mm']['LnkV']['FontWeight']['3']     = $ubws_theme['FontWeight'];
  $ubws_theme['mnu']['mm']['LnkV']['FontSize']['3']       = $ubws_theme['FontSize'];
  // MENU HOVER LINK
  $ubws_theme['mnu']['mm']['LnkH']['BgColor']['3']        = $ubws_theme['BgColor'];
  $ubws_theme['mnu']['mm']['LnkH']['FontColor']['3']      = $ubws_theme['FontColor'];
  $ubws_theme['mnu']['mm']['LnkH']['TextDecoration']['3'] = "none";
  $ubws_theme['mnu']['mm']['LnkH']['FontFamily']['3']     = $ubws_theme['FontFamily'];
  $ubws_theme['mnu']['mm']['LnkH']['FontWeight']['3']     = $ubws_theme['FontWeight'];
  $ubws_theme['mnu']['mm']['LnkH']['FontSize']['3']       = $ubws_theme['FontSize'];

  //MENU LEVEL 4
  $ubws_theme['mnu']['mm']['hdr']['4']               = "{";
  $ubws_theme['mnu']['mm']['pre']['4']               = "[";
  $ubws_theme['mnu']['mm']['suf']['4']               = "]";
  $ubws_theme['mnu']['mm']['sep']['4']               = "&#160;|&#160;";
  $ubws_theme['mnu']['mm']['ftr']['4']               = "}";
  // MENU LINK
  $ubws_theme['mnu']['mm']['LnkL']['BgColor']['4']        = $ubws_theme['BgColor'];
  $ubws_theme['mnu']['mm']['LnkL']['FontColor']['4']      = $ubws_theme['FontColor'];
  $ubws_theme['mnu']['mm']['LnkL']['TextDecoration']['4'] = "underline";
  $ubws_theme['mnu']['mm']['LnkL']['FontFamily']['4']     = $ubws_theme['FontFamily'];
  $ubws_theme['mnu']['mm']['LnkL']['FontWeight']['4']     = $ubws_theme['FontWeight'];
  $ubws_theme['mnu']['mm']['LnkL']['FontSize']['4']       = $ubws_theme['FontSize'];
  // MENU VISITED LINK
  $ubws_theme['mnu']['mm']['LnkV']['BgColor']['4']        = $ubws_theme['BgColor'];
  $ubws_theme['mnu']['mm']['LnkV']['FontColor']['4']      = $ubws_theme['FontColor'];
  $ubws_theme['mnu']['mm']['LnkV']['TextDecoration']['4'] = "underline";
  $ubws_theme['mnu']['mm']['LnkV']['FontFamily']['4']     = $ubws_theme['FontFamily'];
  $ubws_theme['mnu']['mm']['LnkV']['FontWeight']['4']     = $ubws_theme['FontWeight'];
  $ubws_theme['mnu']['mm']['LnkV']['FontSize']['4']       = $ubws_theme['FontSize'];
  // MENU HOVER LINK
  $ubws_theme['mnu']['mm']['LnkH']['BgColor']['4']        = $ubws_theme['BgColor'];
  $ubws_theme['mnu']['mm']['LnkH']['FontColor']['4']      = $ubws_theme['FontColor'];
  $ubws_theme['mnu']['mm']['LnkH']['TextDecoration']['4'] = "none";
  $ubws_theme['mnu']['mm']['LnkH']['FontFamily']['4']     = $ubws_theme['FontFamily'];
  $ubws_theme['mnu']['mm']['LnkH']['FontWeight']['4']     = $ubws_theme['FontWeight'];
  $ubws_theme['mnu']['mm']['LnkH']['FontSize']['4']       = $ubws_theme['FontSize'];
  
  /* ********** ********** ********** MENUS ********** ********** ********** */
  //MENU LEVEL 0
  $ubws_theme['mnu']['adm']['hdr']['0']               = "{";
  $ubws_theme['mnu']['adm']['pre']['0']               = "[";
  $ubws_theme['mnu']['adm']['suf']['0']               = "]";
  $ubws_theme['mnu']['adm']['sep']['0']               = "&#160;|&#160;";
  $ubws_theme['mnu']['adm']['ftr']['0']               = "}";
  // MENU LINK
  $ubws_theme['mnu']['adm']['LnkL']['BgColor']['0']        = $ubws_theme['BgColor'];
  $ubws_theme['mnu']['adm']['LnkL']['FontColor']['0']      = $ubws_theme['FontColor'];
  $ubws_theme['mnu']['adm']['LnkL']['TextDecoration']['0'] = "underline";
  $ubws_theme['mnu']['adm']['LnkL']['FontFamily']['0']     = $ubws_theme['FontFamily'];
  $ubws_theme['mnu']['adm']['LnkL']['FontWeight']['0']     = $ubws_theme['FontWeight'];
  $ubws_theme['mnu']['adm']['LnkL']['FontSize']['0']       = $ubws_theme['FontSize'];
  // MENU VISITED LINK
  $ubws_theme['mnu']['adm']['LnkV']['BgColor']['0']        = $ubws_theme['BgColor'];
  $ubws_theme['mnu']['adm']['LnkV']['FontColor']['0']      = $ubws_theme['FontColor'];
  $ubws_theme['mnu']['adm']['LnkV']['TextDecoration']['0'] = "underline";
  $ubws_theme['mnu']['adm']['LnkV']['FontFamily']['0']     = $ubws_theme['FontFamily'];
  $ubws_theme['mnu']['adm']['LnkV']['FontWeight']['0']     = $ubws_theme['FontWeight'];
  $ubws_theme['mnu']['adm']['LnkV']['FontSize']['0']       = $ubws_theme['FontSize'];
  // MENU HOVER LINK
  $ubws_theme['mnu']['adm']['LnkH']['BgColor']['0']        = $ubws_theme['BgColor'];
  $ubws_theme['mnu']['adm']['LnkH']['FontColor']['0']      = $ubws_theme['FontColor'];
  $ubws_theme['mnu']['adm']['LnkH']['TextDecoration']['0'] = "none";
  $ubws_theme['mnu']['adm']['LnkH']['FontFamily']['0']     = $ubws_theme['FontFamily'];
  $ubws_theme['mnu']['adm']['LnkH']['FontWeight']['0']     = $ubws_theme['FontWeight'];
  $ubws_theme['mnu']['adm']['LnkH']['FontSize']['0']       = $ubws_theme['FontSize'];

  //MENU LEVEL 1
  $ubws_theme['mnu']['adm']['hdr']['1']               = "{";
  $ubws_theme['mnu']['adm']['pre']['1']               = "[";
  $ubws_theme['mnu']['adm']['suf']['1']               = "]";
  $ubws_theme['mnu']['adm']['sep']['1']               = "&#160;|&#160;";
  $ubws_theme['mnu']['adm']['ftr']['1']               = "}";
  // MENU LINK
  $ubws_theme['mnu']['adm']['LnkL']['BgColor']['1']        = $ubws_theme['BgColor'];
  $ubws_theme['mnu']['adm']['LnkL']['FontColor']['1']      = $ubws_theme['FontColor'];
  $ubws_theme['mnu']['adm']['LnkL']['TextDecoration']['1'] = "underline";
  $ubws_theme['mnu']['adm']['LnkL']['FontFamily']['1']     = $ubws_theme['FontFamily'];
  $ubws_theme['mnu']['adm']['LnkL']['FontWeight']['1']     = $ubws_theme['FontWeight'];
  $ubws_theme['mnu']['adm']['LnkL']['FontSize']['1']       = $ubws_theme['FontSize'];
  // MENU VISITED LINK
  $ubws_theme['mnu']['adm']['LnkV']['BgColor']['1']        = $ubws_theme['BgColor'];
  $ubws_theme['mnu']['adm']['LnkV']['FontColor']['1']      = $ubws_theme['FontColor'];
  $ubws_theme['mnu']['adm']['LnkV']['TextDecoration']['1'] = "underline";
  $ubws_theme['mnu']['adm']['LnkV']['FontFamily']['1']     = $ubws_theme['FontFamily'];
  $ubws_theme['mnu']['adm']['LnkV']['FontWeight']['1']     = $ubws_theme['FontWeight'];
  $ubws_theme['mnu']['adm']['LnkV']['FontSize']['1']       = $ubws_theme['FontSize'];
  // MENU HOVER LINK
  $ubws_theme['mnu']['adm']['LnkH']['BgColor']['1']        = $ubws_theme['BgColor'];
  $ubws_theme['mnu']['adm']['LnkH']['FontColor']['1']      = $ubws_theme['FontColor'];
  $ubws_theme['mnu']['adm']['LnkH']['TextDecoration']['1'] = "none";
  $ubws_theme['mnu']['adm']['LnkH']['FontFamily']['1']     = $ubws_theme['FontFamily'];
  $ubws_theme['mnu']['adm']['LnkH']['FontWeight']['1']     = $ubws_theme['FontWeight'];
  $ubws_theme['mnu']['adm']['LnkH']['FontSize']['1']       = $ubws_theme['FontSize'];

  //MENU LEVEL 2
  $ubws_theme['mnu']['adm']['hdr']['2']               = "{";
  $ubws_theme['mnu']['adm']['pre']['2']               = "[";
  $ubws_theme['mnu']['adm']['suf']['2']               = "]";
  $ubws_theme['mnu']['adm']['sep']['2']               = "&#160;|&#160;";
  $ubws_theme['mnu']['adm']['ftr']['2']               = "}";
  // MENU LINK
  $ubws_theme['mnu']['adm']['LnkL']['BgColor']['2']        = $ubws_theme['BgColor'];
  $ubws_theme['mnu']['adm']['LnkL']['FontColor']['2']      = $ubws_theme['FontColor'];
  $ubws_theme['mnu']['adm']['LnkL']['TextDecoration']['2'] = "underline";
  $ubws_theme['mnu']['adm']['LnkL']['FontFamily']['2']     = $ubws_theme['FontFamily'];
  $ubws_theme['mnu']['adm']['LnkL']['FontWeight']['2']     = $ubws_theme['FontWeight'];
  $ubws_theme['mnu']['adm']['LnkL']['FontSize']['2']       = $ubws_theme['FontSize'];
  // MENU VISITED LINK
  $ubws_theme['mnu']['adm']['LnkV']['BgColor']['2']        = $ubws_theme['BgColor'];
  $ubws_theme['mnu']['adm']['LnkV']['FontColor']['2']      = $ubws_theme['FontColor'];
  $ubws_theme['mnu']['adm']['LnkV']['TextDecoration']['2'] = "underline";
  $ubws_theme['mnu']['adm']['LnkV']['FontFamily']['2']     = $ubws_theme['FontFamily'];
  $ubws_theme['mnu']['adm']['LnkV']['FontWeight']['2']     = $ubws_theme['FontWeight'];
  $ubws_theme['mnu']['adm']['LnkV']['FontSize']['2']       = $ubws_theme['FontSize'];
  // MENU HOVER LINK
  $ubws_theme['mnu']['adm']['LnkH']['BgColor']['2']        = $ubws_theme['BgColor'];
  $ubws_theme['mnu']['adm']['LnkH']['FontColor']['2']      = $ubws_theme['FontColor'];
  $ubws_theme['mnu']['adm']['LnkH']['TextDecoration']['2'] = "none";
  $ubws_theme['mnu']['adm']['LnkH']['FontFamily']['2']     = $ubws_theme['FontFamily'];
  $ubws_theme['mnu']['adm']['LnkH']['FontWeight']['2']     = $ubws_theme['FontWeight'];
  $ubws_theme['mnu']['adm']['LnkH']['FontSize']['2']       = $ubws_theme['FontSize'];

  //MENU LEVEL 3
  $ubws_theme['mnu']['adm']['hdr']['3']               = "{";
  $ubws_theme['mnu']['adm']['pre']['3']               = "[";
  $ubws_theme['mnu']['adm']['suf']['3']               = "]";
  $ubws_theme['mnu']['adm']['sep']['3']               = "&#160;|&#160;";
  $ubws_theme['mnu']['adm']['ftr']['3']               = "}";
  // MENU LINK
  $ubws_theme['mnu']['adm']['LnkL']['BgColor']['3']        = $ubws_theme['BgColor'];
  $ubws_theme['mnu']['adm']['LnkL']['FontColor']['3']      = $ubws_theme['FontColor'];
  $ubws_theme['mnu']['adm']['LnkL']['TextDecoration']['3'] = "underline";
  $ubws_theme['mnu']['adm']['LnkL']['FontFamily']['3']     = $ubws_theme['FontFamily'];
  $ubws_theme['mnu']['adm']['LnkL']['FontWeight']['3']     = $ubws_theme['FontWeight'];
  $ubws_theme['mnu']['adm']['LnkL']['FontSize']['3']       = $ubws_theme['FontSize'];
  // MENU VISITED LINK
  $ubws_theme['mnu']['adm']['LnkV']['BgColor']['3']        = $ubws_theme['BgColor'];
  $ubws_theme['mnu']['adm']['LnkV']['FontColor']['3']      = $ubws_theme['FontColor'];
  $ubws_theme['mnu']['adm']['LnkV']['TextDecoration']['3'] = "underline";
  $ubws_theme['mnu']['adm']['LnkV']['FontFamily']['3']     = $ubws_theme['FontFamily'];
  $ubws_theme['mnu']['adm']['LnkV']['FontWeight']['3']     = $ubws_theme['FontWeight'];
  $ubws_theme['mnu']['adm']['LnkV']['FontSize']['3']       = $ubws_theme['FontSize'];
  // MENU HOVER LINK
  $ubws_theme['mnu']['adm']['LnkH']['BgColor']['3']        = $ubws_theme['BgColor'];
  $ubws_theme['mnu']['adm']['LnkH']['FontColor']['3']      = $ubws_theme['FontColor'];
  $ubws_theme['mnu']['adm']['LnkH']['TextDecoration']['3'] = "none";
  $ubws_theme['mnu']['adm']['LnkH']['FontFamily']['3']     = $ubws_theme['FontFamily'];
  $ubws_theme['mnu']['adm']['LnkH']['FontWeight']['3']     = $ubws_theme['FontWeight'];
  $ubws_theme['mnu']['adm']['LnkH']['FontSize']['3']       = $ubws_theme['FontSize'];

  //MENU LEVEL 4
  $ubws_theme['mnu']['adm']['hdr']['4']               = "{";
  $ubws_theme['mnu']['adm']['pre']['4']               = "[";
  $ubws_theme['mnu']['adm']['suf']['4']               = "]";
  $ubws_theme['mnu']['adm']['sep']['4']               = "&#160;|&#160;";
  $ubws_theme['mnu']['adm']['ftr']['4']               = "}";
  // MENU LINK
  $ubws_theme['mnu']['adm']['LnkL']['BgColor']['4']        = $ubws_theme['BgColor'];
  $ubws_theme['mnu']['adm']['LnkL']['FontColor']['4']      = $ubws_theme['FontColor'];
  $ubws_theme['mnu']['adm']['LnkL']['TextDecoration']['4'] = "underline";
  $ubws_theme['mnu']['adm']['LnkL']['FontFamily']['4']     = $ubws_theme['FontFamily'];
  $ubws_theme['mnu']['adm']['LnkL']['FontWeight']['4']     = $ubws_theme['FontWeight'];
  $ubws_theme['mnu']['adm']['LnkL']['FontSize']['4']       = $ubws_theme['FontSize'];
  // MENU VISITED LINK
  $ubws_theme['mnu']['adm']['LnkV']['BgColor']['4']        = $ubws_theme['BgColor'];
  $ubws_theme['mnu']['adm']['LnkV']['FontColor']['4']      = $ubws_theme['FontColor'];
  $ubws_theme['mnu']['adm']['LnkV']['TextDecoration']['4'] = "underline";
  $ubws_theme['mnu']['adm']['LnkV']['FontFamily']['4']     = $ubws_theme['FontFamily'];
  $ubws_theme['mnu']['adm']['LnkV']['FontWeight']['4']     = $ubws_theme['FontWeight'];
  $ubws_theme['mnu']['adm']['LnkV']['FontSize']['4']       = $ubws_theme['FontSize'];
  // MENU HOVER LINK
  $ubws_theme['mnu']['adm']['LnkH']['BgColor']['4']        = $ubws_theme['BgColor'];
  $ubws_theme['mnu']['adm']['LnkH']['FontColor']['4']      = $ubws_theme['FontColor'];
  $ubws_theme['mnu']['adm']['LnkH']['TextDecoration']['4'] = "none";
  $ubws_theme['mnu']['adm']['LnkH']['FontFamily']['4']     = $ubws_theme['FontFamily'];
  $ubws_theme['mnu']['adm']['LnkH']['FontWeight']['4']     = $ubws_theme['FontWeight'];
  $ubws_theme['mnu']['adm']['LnkH']['FontSize']['4']       = $ubws_theme['FontSize'];

  /* ********** ********** ********** MENUS ********** ********** ********** */
  //MENU LEVEL 0
  $ubws_theme['mnu']['oth']['hdr']['0']               = "{";
  $ubws_theme['mnu']['oth']['pre']['0']               = "[";
  $ubws_theme['mnu']['oth']['suf']['0']               = "]";
  $ubws_theme['mnu']['oth']['sep']['0']               = "&#160;|&#160;";
  $ubws_theme['mnu']['oth']['ftr']['0']               = "}";
  // MENU LINK
  $ubws_theme['mnu']['oth']['LnkL']['BgColor']['0']        = $ubws_theme['BgColor'];
  $ubws_theme['mnu']['oth']['LnkL']['FontColor']['0']      = $ubws_theme['FontColor'];
  $ubws_theme['mnu']['oth']['LnkL']['TextDecoration']['0'] = "underline";
  $ubws_theme['mnu']['oth']['LnkL']['FontFamily']['0']     = $ubws_theme['FontFamily'];
  $ubws_theme['mnu']['oth']['LnkL']['FontWeight']['0']     = $ubws_theme['FontWeight'];
  $ubws_theme['mnu']['oth']['LnkL']['FontSize']['0']       = $ubws_theme['FontSize'];
  // MENU VISITED LINK
  $ubws_theme['mnu']['oth']['LnkV']['BgColor']['0']        = $ubws_theme['BgColor'];
  $ubws_theme['mnu']['oth']['LnkV']['FontColor']['0']      = $ubws_theme['FontColor'];
  $ubws_theme['mnu']['oth']['LnkV']['TextDecoration']['0'] = "underline";
  $ubws_theme['mnu']['oth']['LnkV']['FontFamily']['0']     = $ubws_theme['FontFamily'];
  $ubws_theme['mnu']['oth']['LnkV']['FontWeight']['0']     = $ubws_theme['FontWeight'];
  $ubws_theme['mnu']['oth']['LnkV']['FontSize']['0']       = $ubws_theme['FontSize'];
  // MENU HOVER LINK
  $ubws_theme['mnu']['oth']['LnkH']['BgColor']['0']        = $ubws_theme['BgColor'];
  $ubws_theme['mnu']['oth']['LnkH']['FontColor']['0']      = $ubws_theme['FontColor'];
  $ubws_theme['mnu']['oth']['LnkH']['TextDecoration']['0'] = "none";
  $ubws_theme['mnu']['oth']['LnkH']['FontFamily']['0']     = $ubws_theme['FontFamily'];
  $ubws_theme['mnu']['oth']['LnkH']['FontWeight']['0']     = $ubws_theme['FontWeight'];
  $ubws_theme['mnu']['oth']['LnkH']['FontSize']['0']       = $ubws_theme['FontSize'];

  //MENU LEVEL 1
  $ubws_theme['mnu']['oth']['hdr']['1']               = "{";
  $ubws_theme['mnu']['oth']['pre']['1']               = "[";
  $ubws_theme['mnu']['oth']['suf']['1']               = "]";
  $ubws_theme['mnu']['oth']['sep']['1']               = "&#160;|&#160;";
  $ubws_theme['mnu']['oth']['ftr']['1']               = "}";
  // MENU LINK
  $ubws_theme['mnu']['oth']['LnkL']['BgColor']['1']        = $ubws_theme['BgColor'];
  $ubws_theme['mnu']['oth']['LnkL']['FontColor']['1']      = $ubws_theme['FontColor'];
  $ubws_theme['mnu']['oth']['LnkL']['TextDecoration']['1'] = "underline";
  $ubws_theme['mnu']['oth']['LnkL']['FontFamily']['1']     = $ubws_theme['FontFamily'];
  $ubws_theme['mnu']['oth']['LnkL']['FontWeight']['1']     = $ubws_theme['FontWeight'];
  $ubws_theme['mnu']['oth']['LnkL']['FontSize']['1']       = $ubws_theme['FontSize'];
  // MENU VISITED LINK
  $ubws_theme['mnu']['oth']['LnkV']['BgColor']['1']        = $ubws_theme['BgColor'];
  $ubws_theme['mnu']['oth']['LnkV']['FontColor']['1']      = $ubws_theme['FontColor'];
  $ubws_theme['mnu']['oth']['LnkV']['TextDecoration']['1'] = "underline";
  $ubws_theme['mnu']['oth']['LnkV']['FontFamily']['1']     = $ubws_theme['FontFamily'];
  $ubws_theme['mnu']['oth']['LnkV']['FontWeight']['1']     = $ubws_theme['FontWeight'];
  $ubws_theme['mnu']['oth']['LnkV']['FontSize']['1']       = $ubws_theme['FontSize'];
  // MENU HOVER LINK
  $ubws_theme['mnu']['oth']['LnkH']['BgColor']['1']        = $ubws_theme['BgColor'];
  $ubws_theme['mnu']['oth']['LnkH']['FontColor']['1']      = $ubws_theme['FontColor'];
  $ubws_theme['mnu']['oth']['LnkH']['TextDecoration']['1'] = "none";
  $ubws_theme['mnu']['oth']['LnkH']['FontFamily']['1']     = $ubws_theme['FontFamily'];
  $ubws_theme['mnu']['oth']['LnkH']['FontWeight']['1']     = $ubws_theme['FontWeight'];
  $ubws_theme['mnu']['oth']['LnkH']['FontSize']['1']       = $ubws_theme['FontSize'];

  //MENU LEVEL 2
  $ubws_theme['mnu']['oth']['hdr']['2']               = "{";
  $ubws_theme['mnu']['oth']['pre']['2']               = "[";
  $ubws_theme['mnu']['oth']['suf']['2']               = "]";
  $ubws_theme['mnu']['oth']['sep']['2']               = "&#160;|&#160;";
  $ubws_theme['mnu']['oth']['ftr']['2']               = "}";
  // MENU LINK
  $ubws_theme['mnu']['oth']['LnkL']['BgColor']['2']        = $ubws_theme['BgColor'];
  $ubws_theme['mnu']['oth']['LnkL']['FontColor']['2']      = $ubws_theme['FontColor'];
  $ubws_theme['mnu']['oth']['LnkL']['TextDecoration']['2'] = "underline";
  $ubws_theme['mnu']['oth']['LnkL']['FontFamily']['2']     = $ubws_theme['FontFamily'];
  $ubws_theme['mnu']['oth']['LnkL']['FontWeight']['2']     = $ubws_theme['FontWeight'];
  $ubws_theme['mnu']['oth']['LnkL']['FontSize']['2']       = $ubws_theme['FontSize'];
  // MENU VISITED LINK
  $ubws_theme['mnu']['oth']['LnkV']['BgColor']['2']        = $ubws_theme['BgColor'];
  $ubws_theme['mnu']['oth']['LnkV']['FontColor']['2']      = $ubws_theme['FontColor'];
  $ubws_theme['mnu']['oth']['LnkV']['TextDecoration']['2'] = "underline";
  $ubws_theme['mnu']['oth']['LnkV']['FontFamily']['2']     = $ubws_theme['FontFamily'];
  $ubws_theme['mnu']['oth']['LnkV']['FontWeight']['2']     = $ubws_theme['FontWeight'];
  $ubws_theme['mnu']['oth']['LnkV']['FontSize']['2']       = $ubws_theme['FontSize'];
  // MENU HOVER LINK
  $ubws_theme['mnu']['oth']['LnkH']['BgColor']['2']        = $ubws_theme['BgColor'];
  $ubws_theme['mnu']['oth']['LnkH']['FontColor']['2']      = $ubws_theme['FontColor'];
  $ubws_theme['mnu']['oth']['LnkH']['TextDecoration']['2'] = "none";
  $ubws_theme['mnu']['oth']['LnkH']['FontFamily']['2']     = $ubws_theme['FontFamily'];
  $ubws_theme['mnu']['oth']['LnkH']['FontWeight']['2']     = $ubws_theme['FontWeight'];
  $ubws_theme['mnu']['oth']['LnkH']['FontSize']['2']       = $ubws_theme['FontSize'];

  //MENU LEVEL 3
  $ubws_theme['mnu']['oth']['hdr']['3']               = "{";
  $ubws_theme['mnu']['oth']['pre']['3']               = "[";
  $ubws_theme['mnu']['oth']['suf']['3']               = "]";
  $ubws_theme['mnu']['oth']['sep']['3']               = "&#160;|&#160;";
  $ubws_theme['mnu']['oth']['ftr']['3']               = "}";
  // MENU LINK
  $ubws_theme['mnu']['oth']['LnkL']['BgColor']['3']        = $ubws_theme['BgColor'];
  $ubws_theme['mnu']['oth']['LnkL']['FontColor']['3']      = $ubws_theme['FontColor'];
  $ubws_theme['mnu']['oth']['LnkL']['TextDecoration']['3'] = "underline";
  $ubws_theme['mnu']['oth']['LnkL']['FontFamily']['3']     = $ubws_theme['FontFamily'];
  $ubws_theme['mnu']['oth']['LnkL']['FontWeight']['3']     = $ubws_theme['FontWeight'];
  $ubws_theme['mnu']['oth']['LnkL']['FontSize']['3']       = $ubws_theme['FontSize'];
  // MENU VISITED LINK
  $ubws_theme['mnu']['oth']['LnkV']['BgColor']['3']        = $ubws_theme['BgColor'];
  $ubws_theme['mnu']['oth']['LnkV']['FontColor']['3']      = $ubws_theme['FontColor'];
  $ubws_theme['mnu']['oth']['LnkV']['TextDecoration']['3'] = "underline";
  $ubws_theme['mnu']['oth']['LnkV']['FontFamily']['3']     = $ubws_theme['FontFamily'];
  $ubws_theme['mnu']['oth']['LnkV']['FontWeight']['3']     = $ubws_theme['FontWeight'];
  $ubws_theme['mnu']['oth']['LnkV']['FontSize']['3']       = $ubws_theme['FontSize'];
  // MENU HOVER LINK
  $ubws_theme['mnu']['oth']['LnkH']['BgColor']['3']        = $ubws_theme['BgColor'];
  $ubws_theme['mnu']['oth']['LnkH']['FontColor']['3']      = $ubws_theme['FontColor'];
  $ubws_theme['mnu']['oth']['LnkH']['TextDecoration']['3'] = "none";
  $ubws_theme['mnu']['oth']['LnkH']['FontFamily']['3']     = $ubws_theme['FontFamily'];
  $ubws_theme['mnu']['oth']['LnkH']['FontWeight']['3']     = $ubws_theme['FontWeight'];
  $ubws_theme['mnu']['oth']['LnkH']['FontSize']['3']       = $ubws_theme['FontSize'];

  //MENU LEVEL 4
  $ubws_theme['mnu']['oth']['hdr']['4']               = "{";
  $ubws_theme['mnu']['oth']['pre']['4']               = "[";
  $ubws_theme['mnu']['oth']['suf']['4']               = "]";
  $ubws_theme['mnu']['oth']['sep']['4']               = "&#160;|&#160;";
  $ubws_theme['mnu']['oth']['ftr']['4']               = "}";
  // MENU LINK
  $ubws_theme['mnu']['oth']['LnkL']['BgColor']['4']        = $ubws_theme['BgColor'];
  $ubws_theme['mnu']['oth']['LnkL']['FontColor']['4']      = $ubws_theme['FontColor'];
  $ubws_theme['mnu']['oth']['LnkL']['TextDecoration']['4'] = "underline";
  $ubws_theme['mnu']['oth']['LnkL']['FontFamily']['4']     = $ubws_theme['FontFamily'];
  $ubws_theme['mnu']['oth']['LnkL']['FontWeight']['4']     = $ubws_theme['FontWeight'];
  $ubws_theme['mnu']['oth']['LnkL']['FontSize']['4']       = $ubws_theme['FontSize'];
  // MENU VISITED LINK
  $ubws_theme['mnu']['oth']['LnkV']['BgColor']['4']        = $ubws_theme['BgColor'];
  $ubws_theme['mnu']['oth']['LnkV']['FontColor']['4']      = $ubws_theme['FontColor'];
  $ubws_theme['mnu']['oth']['LnkV']['TextDecoration']['4'] = "underline";
  $ubws_theme['mnu']['oth']['LnkV']['FontFamily']['4']     = $ubws_theme['FontFamily'];
  $ubws_theme['mnu']['oth']['LnkV']['FontWeight']['4']     = $ubws_theme['FontWeight'];
  $ubws_theme['mnu']['oth']['LnkV']['FontSize']['4']       = $ubws_theme['FontSize'];
  // MENU HOVER LINK
  $ubws_theme['mnu']['oth']['LnkH']['BgColor']['4']        = $ubws_theme['BgColor'];
  $ubws_theme['mnu']['oth']['LnkH']['FontColor']['4']      = $ubws_theme['FontColor'];
  $ubws_theme['mnu']['oth']['LnkH']['TextDecoration']['4'] = "none";
  $ubws_theme['mnu']['oth']['LnkH']['FontFamily']['4']     = $ubws_theme['FontFamily'];
  $ubws_theme['mnu']['oth']['LnkH']['FontWeight']['4']     = $ubws_theme['FontWeight'];
  $ubws_theme['mnu']['oth']['LnkH']['FontSize']['4']       = $ubws_theme['FontSize'];
  /* ********** ********** ********** PAGE CONTENT ********** ********** ********** */
  // PAGE CONTENT
  $ubws_theme['cnt']['hdr']                = "\n";
  $ubws_theme['cnt']['pre']                = "";
  $ubws_theme['cnt']['suf']                = "";
  $ubws_theme['cnt']['ftr']                = "\n";
 
  // CONTENT TITLE
  $ubws_theme['cnt']['tt1']['class']       = "title";
  $ubws_theme['cnt']['tt1']['pre']         = "\n<DIV CLASS=\"".$ubws_theme['cnt']['tt1']['class']."\">&#160;&#160;";
  $ubws_theme['cnt']['tt1']['suf']         = "</Div>";

  // CONTENT SUBTITLE
  $ubws_theme['cnt']['tt2']['class']       = "subtitle";
  $ubws_theme['cnt']['tt2']['pre']         = "\n<DIV CLASS=\"".$ubws_theme['cnt']['tt2']['class']."\">&#160;&#160;";
  $ubws_theme['cnt']['tt2']['suf']         = "</DIV>";

  // PAGE TEXT
  $ubws_theme['cnt']['txt']['class']       = "text";
  $ubws_theme['cnt']['txt']['pre']         = "\n<DIV CLASS=\"".$ubws_theme['cnt']['txt']['class']."\">\n";
  $ubws_theme['cnt']['txt']['suf']         = "\n</DIV>";

  /* ********** ********** ********** PAGE CONTENT PICTURES ********** ********** ********** */
  // CONTENT PICTURES - 0 - PANEL
  $ubws_theme['cnt']['pic']['hdr']['0']            = "\n";
  $ubws_theme['cnt']['pic']['pre']['0']            = "";
  $ubws_theme['cnt']['pic']['sep']['0']            = "\n<BR><BR>";
  $ubws_theme['cnt']['pic']['suf']['0']            = "";
  $ubws_theme['cnt']['pic']['ftr']['0']            = "\n";
  $ubws_theme['cnt']['pic']['max']['0']            = "150";

  // CONTENT PICTURES - 1 - TOP
  $ubws_theme['cnt']['pic']['hdr']['1']            = "<BR><DIV ALIGN=\"center\">";
  $ubws_theme['cnt']['pic']['pre']['1']            = "\n<DIV STYLE=\"float: left; clear: none; margin: 4px;\">";
  $ubws_theme['cnt']['pic']['sep']['1']            = "";
  $ubws_theme['cnt']['pic']['suf']['1']            = "\n</DIV>";
  $ubws_theme['cnt']['pic']['ftr']['1']            = "</DIV><BR CLEAR=\"all\">";
  $ubws_theme['cnt']['pic']['max']['1']            = "150";

  // CONTENT PICTURES - 2 - AFTER TITLE
  $ubws_theme['cnt']['pic']['hdr']['2']            = "<BR><DIV ALIGN=\"center\">";
  $ubws_theme['cnt']['pic']['pre']['2']            = "\n<DIV STYLE=\"float: left; clear: none; margin: 4px;\">";
  $ubws_theme['cnt']['pic']['sep']['2']            = "";
  $ubws_theme['cnt']['pic']['suf']['2']            = "\n</DIV>";
  $ubws_theme['cnt']['pic']['ftr']['2']            = "</DIV><BR CLEAR=\"all\">";
  $ubws_theme['cnt']['pic']['max']['2']            = "150";

  // CONTENT PICTURES - 3 - AFTER SUBTITLE
  $ubws_theme['cnt']['pic']['hdr']['3']            = "<BR><DIV ALIGN=\"center\">";
  $ubws_theme['cnt']['pic']['pre']['3']            = "\n<DIV STYLE=\"float: left; clear: none; margin: 4px;\">";
  $ubws_theme['cnt']['pic']['sep']['3']            = "";
  $ubws_theme['cnt']['pic']['suf']['3']            = "\n</DIV>";
  $ubws_theme['cnt']['pic']['ftr']['3']            = "</DIV><BR CLEAR=\"all\">";
  $ubws_theme['cnt']['pic']['max']['3']            = "150";

  // CONTENT PICTURES - 4 - BOTTOM
  $ubws_theme['cnt']['pic']['hdr']['4']            = "<BR><DIV ALIGN=\"center\">";
  $ubws_theme['cnt']['pic']['pre']['4']            = "\n<DIV STYLE=\"float: left; clear: none; margin: 4px;\">";
  $ubws_theme['cnt']['pic']['sep']['4']            = "";
  $ubws_theme['cnt']['pic']['suf']['4']            = "\n</DIV>";
  $ubws_theme['cnt']['pic']['ftr']['4']            = "</DIV><BR CLEAR=\"all\">";
  $ubws_theme['cnt']['pic']['max']['4']            = "150";

  /* ********** ********** ********** FEATURED MODULE ********** ********** ********** */
  // FEATURED MODULE
  $ubws_theme['ftr']['hdr']                = "\n<DIV CLASS=\"".$ubws_theme['cnt']['tt1']['class']."\">&#160;&#160;".$ubws_ln['featured']['tt']."</DIV><BR>";
  $ubws_theme['ftr']['ftr']                = "\n";

  $ubws_theme['ftr']['sep']                = "\n<BR><BR>";

  $ubws_theme['ftr']['limit']              = "3"; // how many modules to display
  $ubws_theme['ftr']['chartt']                = "20"; // how many characters for title
  $ubws_theme['ftr']['picsize']                = "100"; // max picture size
  $ubws_theme['ftr']['chardesc']                = "20"; // how many characters for description

  $ubws_theme['ftr']['fpre']               = "\n";
  $ubws_theme['ftr']['fsuf']               = "\n";

  $ubws_theme['ftr']['tt']['pre']             = "\n";
  $ubws_theme['ftr']['tt']['suf']             = "\n";
  $ubws_theme['ftr']['pic']['pre']             = "\n<BR>";
  $ubws_theme['ftr']['pic']['suf']             = "\n<BR>";
  $ubws_theme['ftr']['desc']['pre']             = "\n";
  $ubws_theme['ftr']['desc']['suf']             = "\n";

  // FEATURED LINK
  $ubws_theme['ftr']['LnkL']['BgColor']        = $ubws_theme['BgColor'];
  $ubws_theme['ftr']['LnkL']['FontColor']      = $ubws_theme['FontColor'];
  $ubws_theme['ftr']['LnkL']['TextDecoration'] = "underline";
  $ubws_theme['ftr']['LnkL']['FontFamily']     = $ubws_theme['FontFamily'];
  $ubws_theme['ftr']['LnkL']['FontWeight']     = "bold";
  $ubws_theme['ftr']['LnkL']['FontSize']       = $ubws_theme['FontSize'];
  // FEATURED VISITED LINK
  $ubws_theme['ftr']['LnkV']['BgColor']        = $ubws_theme['BgColor'];
  $ubws_theme['ftr']['LnkV']['FontColor']      = $ubws_theme['FontColor'];
  $ubws_theme['ftr']['LnkV']['TextDecoration'] = "underline";
  $ubws_theme['ftr']['LnkV']['FontFamily']     = $ubws_theme['FontFamily'];
  $ubws_theme['ftr']['LnkV']['FontWeight']     = "bold";
  $ubws_theme['ftr']['LnkV']['FontSize']       = $ubws_theme['FontSize'];
  // FEATURED HOVER LINK
  $ubws_theme['ftr']['LnkH']['BgColor']        = $ubws_theme['BgColor'];
  $ubws_theme['ftr']['LnkH']['FontColor']      = $ubws_theme['FontColor'];
  $ubws_theme['ftr']['LnkH']['TextDecoration'] = "none";
  $ubws_theme['ftr']['LnkH']['FontFamily']     = $ubws_theme['FontFamily'];
  $ubws_theme['ftr']['LnkH']['FontWeight']     = "bold";
  $ubws_theme['ftr']['LnkH']['FontSize']       = $ubws_theme['FontSize'];
  
  /* ********** ********** ********** COPYRIGHT NOTICE ********** ********** ********** */
  // COPYRIGHT NOTICE
  $ubws_theme['cpy']['pre']            = "\n";
  $ubws_theme['cpy']['suf']            = "\n";

  // COPYRIGHT LINK
  $ubws_theme['cpy']['LnkL']['BgColor']        = $ubws_theme['BgColor'];
  $ubws_theme['cpy']['LnkL']['FontColor']      = $ubws_theme['FontColor'];
  $ubws_theme['cpy']['LnkL']['TextDecoration'] = "underline";
  $ubws_theme['cpy']['LnkL']['FontFamily']     = $ubws_theme['FontFamily'];
  $ubws_theme['cpy']['LnkL']['FontWeight']     = $ubws_theme['FontWeight'];
  $ubws_theme['cpy']['LnkL']['FontSize']       = $ubws_theme['FontSize'];
  // COPYRIGHT VISITED LINK
  $ubws_theme['cpy']['LnkV']['BgColor']        = $ubws_theme['BgColor'];
  $ubws_theme['cpy']['LnkV']['FontColor']      = $ubws_theme['FontColor'];
  $ubws_theme['cpy']['LnkV']['TextDecoration'] = "underline";
  $ubws_theme['cpy']['LnkV']['FontFamily']     = $ubws_theme['FontFamily'];
  $ubws_theme['cpy']['LnkV']['FontWeight']     = $ubws_theme['FontWeight'];
  $ubws_theme['cpy']['LnkV']['FontSize']       = $ubws_theme['FontSize'];
  // COPYRIGHT HOVER LINK
  $ubws_theme['cpy']['LnkH']['BgColor']        = $ubws_theme['BgColor'];
  $ubws_theme['cpy']['LnkH']['FontColor']      = $ubws_theme['FontColor'];
  $ubws_theme['cpy']['LnkH']['TextDecoration'] = "none";
  $ubws_theme['cpy']['LnkH']['FontFamily']     = $ubws_theme['FontFamily'];
  $ubws_theme['cpy']['LnkH']['FontWeight']     = $ubws_theme['FontWeight'];
  $ubws_theme['cpy']['LnkH']['FontSize']       = $ubws_theme['FontSize'];
  
  /* ********** ********** ********** VISITOR STATISTICS ********** ********** ********** */
  $ubws_theme['sts']['hdr']        = "\n<BR>";
  $ubws_theme['sts']['ftr']        = "\n";

  $ubws_theme['sts']['sep']         = "\n";
  $ubws_theme['sts']['pre']         = "\n";
  $ubws_theme['sts']['suf']         = "\n";
  
  /* ********** ********** ********** USER MODULE ********** ********** ********** */
  // USER MODULE
  $ubws_theme['usr']['hdr'] = "\n<TABLE BORDER=\"0\" CELLPADDING=\"0\" CELLSPACING=\"0\">\n<TR>";
  $ubws_theme['usr']['pre'] = "\n<TD CLASS=\"usr_td\">";
  $ubws_theme['usr']['suf'] = "\n</TD>";
  $ubws_theme['usr']['sep'] = "";
  $ubws_theme['usr']['ftr'] = "\n</TR>\n</TABLE>";
  
  $ubws_theme['usr']['login']['hdr'] = "\n<TABLE BORDER=\"0\" CELLPADDING=\"0\" CELLSPACING=\"0\">\n<TR>";
  $ubws_theme['usr']['login']['pre'] = "\n<TD CLASS=\"usr_login\">";
  $ubws_theme['usr']['login']['suf'] = "\n</TD>";
  $ubws_theme['usr']['login']['sep'] = "";
  $ubws_theme['usr']['login']['ftr'] = "\n</TR>\n</TABLE>";

  /* ********** ********** ********** LANGUAGE MODULE ********** ********** ********** */
  // LANGUAGE MODULE
  $ubws_theme['lng']['hdr'] = "\n";
  $ubws_theme['lng']['pre'] = "\n";
  $ubws_theme['lng']['suf'] = "\n";
  $ubws_theme['lng']['sep'] = "\n&#160;";
  $ubws_theme['lng']['ftr'] = "\n";

  /* ********** ********** ********** BLOG MODULE ********** ********** ********** */
  $ubws_theme['blg']['hdr'] = "\n";
  $ubws_theme['blg']['ftr'] = "\n";
  
  $ubws_theme['blg']['pre'] = "\n";
  $ubws_theme['blg']['suf'] = "\n";
  $ubws_theme['blg']['sep'] = "\n<BR>";
  
  $ubws_theme['blg']['posted']['pre'] = "\n";
  $ubws_theme['blg']['posted']['suf'] = "\n";
  
  /* ********** ********** ********** COMMENTS MODULE ********** ********** ********** */
  $ubws_theme['cmnts']['hdr'] = "\n<BR>";
  $ubws_theme['cmnts']['ftr'] = "\n";
  
  $ubws_theme['cmnts']['pre'] = "\n";
  $ubws_theme['cmnts']['suf'] = "\n";
  $ubws_theme['cmnts']['sep'] = "\n<HR>";
  
  /* ********** ********** ********** SHOPPING CART MODULE ********** ********** ********** */
  $ubws_theme['crt']['hdr'] = "\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\">\n<TR>";
  $ubws_theme['crt']['pre'] = "\n<TD>";
  $ubws_theme['crt']['suf'] = "\n</TD>";
  $ubws_theme['crt']['sep'] = "";
  $ubws_theme['crt']['ftr'] = "\n</TR>\n</TABLE>";
}
?>