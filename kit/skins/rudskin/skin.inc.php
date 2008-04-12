<?php
/*
./skins/rudskin/skin.inc.php
17:55 2008-04-12
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once '../../lib/404.php';}

if (_RUDWEB_DBSKIN === '1') {
  // FROM DB
}
else {
  // FROM FILE
  /* ********** ********** ********** BODY ********** ********** ********** */
  // BODY
  $rudweb_skin['BgColor']         = '#FFFFFF';
  $rudweb_skin['Color1']          = '#EEEEEE';
  $rudweb_skin['Color2']          = '#DDDDDD';
  $rudweb_skin['Color3']          = '#CCCCCC';
  $rudweb_skin['FontColor']       = '#000000';
  $rudweb_skin['FontErrColor']    = '#990000';
  $rudweb_skin['BgReqColor']      = '#990000';
  $rudweb_skin['MarginTop']       = '0';
  $rudweb_skin['MarginBottom']    = '0';
  $rudweb_skin['MarginLeft']      = '0';
  $rudweb_skin['MarginRight']     = '0';
  $rudweb_skin['TextAlign']       = 'left';
  $rudweb_skin['VerticalAlign']   = 'middle';
  $rudweb_skin['TextDecoration']  = 'none';
  $rudweb_skin['FontFamily']      = 'verdana, arial, helvetica, sans-serif';
  $rudweb_skin['FontWeight']      = 'normal';
  $rudweb_skin['FontSize']        = '11';
  $rudweb_skin['Measure']         = 'px';
  $rudweb_skin['BorderColor']     = '#333333';
  $rudweb_skin['BorderStyle']     = 'dashed';
  $rudweb_skin['BorderTop']       = '0';
  $rudweb_skin['BorderBottom']    = '0';
  $rudweb_skin['BorderLeft']      = '0';
  $rudweb_skin['BorderRight']     = '0';
  $rudweb_skin['PaddingTop']      = '0';
  $rudweb_skin['PaddingBottom']   = '0';
  $rudweb_skin['PaddingLeft']     = '0';
  $rudweb_skin['PaddingRight']    = '0';

  /* ********** ********** ********** DEFAULT LINKS ********** ********** ********** */
  // LINK
  $rudweb_skin['LnkL']['BgColor']        = $rudweb_skin['BgColor'];
  $rudweb_skin['LnkL']['FontColor']      = $rudweb_skin['FontColor'];
  $rudweb_skin['LnkL']['TextDecoration'] = 'underline';
  $rudweb_skin['LnkL']['FontFamily']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['LnkL']['FontWeight']     = $rudweb_skin['FontWeight'];
  $rudweb_skin['LnkL']['FontSize']       = $rudweb_skin['FontSize'];
  // VISITED LINK
  $rudweb_skin['LnkV']['BgColor']        = $rudweb_skin['BgColor'];
  $rudweb_skin['LnkV']['FontColor']      = $rudweb_skin['FontColor'];
  $rudweb_skin['LnkV']['TextDecoration'] = 'underline';
  $rudweb_skin['LnkV']['FontFamily']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['LnkV']['FontWeight']     = $rudweb_skin['FontWeight'];
  $rudweb_skin['LnkV']['FontSize']       = $rudweb_skin['FontSize'];
  // HOVER LINK
  $rudweb_skin['LnkH']['BgColor']        = $rudweb_skin['BgColor'];
  $rudweb_skin['LnkH']['FontColor']      = $rudweb_skin['FontColor'];
  $rudweb_skin['LnkH']['TextDecoration'] = 'none';
  $rudweb_skin['LnkH']['FontFamily']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['LnkH']['FontWeight']     = $rudweb_skin['FontWeight'];
  $rudweb_skin['LnkH']['FontSize']       = $rudweb_skin['FontSize'];

  /* ********** ********** ********** MENUS ********** ********** ********** */
  //MENU LEVEL 0
  $rudweb_skin['mnu']['mm']['hdr']['0']               = '{';
  $rudweb_skin['mnu']['mm']['pre']['0']               = '[';
  $rudweb_skin['mnu']['mm']['suf']['0']               = ']';
  $rudweb_skin['mnu']['mm']['sep']['0']               = '&#160;|&#160;';
  $rudweb_skin['mnu']['mm']['ftr']['0']               = '}';
  // MENU LINK
  $rudweb_skin['mnu']['mm']['LnkL']['BgColor']['0']        = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['mm']['LnkL']['FontColor']['0']      = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['mm']['LnkL']['TextDecoration']['0'] = 'underline';
  $rudweb_skin['mnu']['mm']['LnkL']['FontFamily']['0']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['mm']['LnkL']['FontWeight']['0']     = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['mm']['LnkL']['FontSize']['0']       = $rudweb_skin['FontSize'];
  // MENU VISITED LINK
  $rudweb_skin['mnu']['mm']['LnkV']['BgColor']['0']        = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['mm']['LnkV']['FontColor']['0']      = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['mm']['LnkV']['TextDecoration']['0'] = 'underline';
  $rudweb_skin['mnu']['mm']['LnkV']['FontFamily']['0']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['mm']['LnkV']['FontWeight']['0']     = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['mm']['LnkV']['FontSize']['0']       = $rudweb_skin['FontSize'];
  // MENU HOVER LINK
  $rudweb_skin['mnu']['mm']['LnkH']['BgColor']['0']        = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['mm']['LnkH']['FontColor']['0']      = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['mm']['LnkH']['TextDecoration']['0'] = 'none';
  $rudweb_skin['mnu']['mm']['LnkH']['FontFamily']['0']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['mm']['LnkH']['FontWeight']['0']     = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['mm']['LnkH']['FontSize']['0']       = $rudweb_skin['FontSize'];
  // MENU NO LINK
  $rudweb_skin['mnu']['mm']['Lnk']['BgColor']['0']         = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['mm']['Lnk']['FontColor']['0']       = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['mm']['Lnk']['TextDecoration']['0']  = 'none';
  $rudweb_skin['mnu']['mm']['Lnk']['FontFamily']['0']      = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['mm']['Lnk']['FontWeight']['0']      = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['mm']['Lnk']['FontSize']['0']        = $rudweb_skin['FontSize'];

  //MENU LEVEL 1
  $rudweb_skin['mnu']['mm']['hdr']['1']               = '{';
  $rudweb_skin['mnu']['mm']['pre']['1']               = '[';
  $rudweb_skin['mnu']['mm']['suf']['1']               = ']';
  $rudweb_skin['mnu']['mm']['sep']['1']               = '&#160;|&#160;';
  $rudweb_skin['mnu']['mm']['ftr']['1']               = '}';
  // MENU LINK
  $rudweb_skin['mnu']['mm']['LnkL']['BgColor']['1']        = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['mm']['LnkL']['FontColor']['1']      = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['mm']['LnkL']['TextDecoration']['1'] = 'underline';
  $rudweb_skin['mnu']['mm']['LnkL']['FontFamily']['1']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['mm']['LnkL']['FontWeight']['1']     = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['mm']['LnkL']['FontSize']['1']       = $rudweb_skin['FontSize'];
  // MENU VISITED LINK
  $rudweb_skin['mnu']['mm']['LnkV']['BgColor']['1']        = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['mm']['LnkV']['FontColor']['1']      = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['mm']['LnkV']['TextDecoration']['1'] = 'underline';
  $rudweb_skin['mnu']['mm']['LnkV']['FontFamily']['1']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['mm']['LnkV']['FontWeight']['1']     = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['mm']['LnkV']['FontSize']['1']       = $rudweb_skin['FontSize'];
  // MENU HOVER LINK
  $rudweb_skin['mnu']['mm']['LnkH']['BgColor']['1']        = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['mm']['LnkH']['FontColor']['1']      = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['mm']['LnkH']['TextDecoration']['1'] = 'none';
  $rudweb_skin['mnu']['mm']['LnkH']['FontFamily']['1']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['mm']['LnkH']['FontWeight']['1']     = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['mm']['LnkH']['FontSize']['1']       = $rudweb_skin['FontSize'];
  // MENU NO LINK
  $rudweb_skin['mnu']['mm']['Lnk']['BgColor']['1']         = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['mm']['Lnk']['FontColor']['1']       = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['mm']['Lnk']['TextDecoration']['1']  = 'none';
  $rudweb_skin['mnu']['mm']['Lnk']['FontFamily']['1']      = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['mm']['Lnk']['FontWeight']['1']      = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['mm']['Lnk']['FontSize']['1']        = $rudweb_skin['FontSize'];

  //MENU LEVEL 2
  $rudweb_skin['mnu']['mm']['hdr']['2']               = '{';
  $rudweb_skin['mnu']['mm']['pre']['2']               = '[';
  $rudweb_skin['mnu']['mm']['suf']['2']               = ']';
  $rudweb_skin['mnu']['mm']['sep']['2']               = '&#160;|&#160;';
  $rudweb_skin['mnu']['mm']['ftr']['2']               = '}';
  // MENU LINK
  $rudweb_skin['mnu']['mm']['LnkL']['BgColor']['2']        = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['mm']['LnkL']['FontColor']['2']      = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['mm']['LnkL']['TextDecoration']['2'] = 'underline';
  $rudweb_skin['mnu']['mm']['LnkL']['FontFamily']['2']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['mm']['LnkL']['FontWeight']['2']     = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['mm']['LnkL']['FontSize']['2']       = $rudweb_skin['FontSize'];
  // MENU VISITED LINK
  $rudweb_skin['mnu']['mm']['LnkV']['BgColor']['2']        = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['mm']['LnkV']['FontColor']['2']      = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['mm']['LnkV']['TextDecoration']['2'] = 'underline';
  $rudweb_skin['mnu']['mm']['LnkV']['FontFamily']['2']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['mm']['LnkV']['FontWeight']['2']     = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['mm']['LnkV']['FontSize']['2']       = $rudweb_skin['FontSize'];
  // MENU HOVER LINK
  $rudweb_skin['mnu']['mm']['LnkH']['BgColor']['2']        = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['mm']['LnkH']['FontColor']['2']      = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['mm']['LnkH']['TextDecoration']['2'] = 'none';
  $rudweb_skin['mnu']['mm']['LnkH']['FontFamily']['2']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['mm']['LnkH']['FontWeight']['2']     = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['mm']['LnkH']['FontSize']['2']       = $rudweb_skin['FontSize'];
  // MENU NO LINK
  $rudweb_skin['mnu']['mm']['Lnk']['BgColor']['2']         = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['mm']['Lnk']['FontColor']['2']       = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['mm']['Lnk']['TextDecoration']['2']  = 'none';
  $rudweb_skin['mnu']['mm']['Lnk']['FontFamily']['2']      = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['mm']['Lnk']['FontWeight']['2']      = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['mm']['Lnk']['FontSize']['2']        = $rudweb_skin['FontSize'];

  //MENU LEVEL 3
  $rudweb_skin['mnu']['mm']['hdr']['3']               = '{';
  $rudweb_skin['mnu']['mm']['pre']['3']               = '[';
  $rudweb_skin['mnu']['mm']['suf']['3']               = ']';
  $rudweb_skin['mnu']['mm']['sep']['3']               = '&#160;|&#160;';
  $rudweb_skin['mnu']['mm']['ftr']['3']               = '}';
  // MENU LINK
  $rudweb_skin['mnu']['mm']['LnkL']['BgColor']['3']        = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['mm']['LnkL']['FontColor']['3']      = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['mm']['LnkL']['TextDecoration']['3'] = 'underline';
  $rudweb_skin['mnu']['mm']['LnkL']['FontFamily']['3']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['mm']['LnkL']['FontWeight']['3']     = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['mm']['LnkL']['FontSize']['3']       = $rudweb_skin['FontSize'];
  // MENU VISITED LINK
  $rudweb_skin['mnu']['mm']['LnkV']['BgColor']['3']        = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['mm']['LnkV']['FontColor']['3']      = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['mm']['LnkV']['TextDecoration']['3'] = 'underline';
  $rudweb_skin['mnu']['mm']['LnkV']['FontFamily']['3']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['mm']['LnkV']['FontWeight']['3']     = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['mm']['LnkV']['FontSize']['3']       = $rudweb_skin['FontSize'];
  // MENU HOVER LINK
  $rudweb_skin['mnu']['mm']['LnkH']['BgColor']['3']        = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['mm']['LnkH']['FontColor']['3']      = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['mm']['LnkH']['TextDecoration']['3'] = 'none';
  $rudweb_skin['mnu']['mm']['LnkH']['FontFamily']['3']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['mm']['LnkH']['FontWeight']['3']     = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['mm']['LnkH']['FontSize']['3']       = $rudweb_skin['FontSize'];
  // MENU NO LINK
  $rudweb_skin['mnu']['mm']['Lnk']['BgColor']['3']         = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['mm']['Lnk']['FontColor']['3']       = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['mm']['Lnk']['TextDecoration']['3']  = 'none';
  $rudweb_skin['mnu']['mm']['Lnk']['FontFamily']['3']      = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['mm']['Lnk']['FontWeight']['3']      = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['mm']['Lnk']['FontSize']['3']        = $rudweb_skin['FontSize'];

  //MENU LEVEL 4
  $rudweb_skin['mnu']['mm']['hdr']['4']               = '{';
  $rudweb_skin['mnu']['mm']['pre']['4']               = '[';
  $rudweb_skin['mnu']['mm']['suf']['4']               = ']';
  $rudweb_skin['mnu']['mm']['sep']['4']               = '&#160;|&#160;';
  $rudweb_skin['mnu']['mm']['ftr']['4']               = '}';
  // MENU LINK
  $rudweb_skin['mnu']['mm']['LnkL']['BgColor']['4']        = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['mm']['LnkL']['FontColor']['4']      = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['mm']['LnkL']['TextDecoration']['4'] = 'underline';
  $rudweb_skin['mnu']['mm']['LnkL']['FontFamily']['4']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['mm']['LnkL']['FontWeight']['4']     = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['mm']['LnkL']['FontSize']['4']       = $rudweb_skin['FontSize'];
  // MENU VISITED LINK
  $rudweb_skin['mnu']['mm']['LnkV']['BgColor']['4']        = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['mm']['LnkV']['FontColor']['4']      = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['mm']['LnkV']['TextDecoration']['4'] = 'underline';
  $rudweb_skin['mnu']['mm']['LnkV']['FontFamily']['4']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['mm']['LnkV']['FontWeight']['4']     = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['mm']['LnkV']['FontSize']['4']       = $rudweb_skin['FontSize'];
  // MENU HOVER LINK
  $rudweb_skin['mnu']['mm']['LnkH']['BgColor']['4']        = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['mm']['LnkH']['FontColor']['4']      = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['mm']['LnkH']['TextDecoration']['4'] = 'none';
  $rudweb_skin['mnu']['mm']['LnkH']['FontFamily']['4']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['mm']['LnkH']['FontWeight']['4']     = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['mm']['LnkH']['FontSize']['4']       = $rudweb_skin['FontSize'];
  // MENU NO LINK
  $rudweb_skin['mnu']['mm']['Lnk']['BgColor']['4']         = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['mm']['Lnk']['FontColor']['4']       = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['mm']['Lnk']['TextDecoration']['4']  = 'none';
  $rudweb_skin['mnu']['mm']['Lnk']['FontFamily']['4']      = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['mm']['Lnk']['FontWeight']['4']      = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['mm']['Lnk']['FontSize']['4']        = $rudweb_skin['FontSize'];
  
  /* ********** ********** ********** MENUS ********** ********** ********** */
  //MENU LEVEL 0
  $rudweb_skin['mnu']['adm']['hdr']['0']               = '{';
  $rudweb_skin['mnu']['adm']['pre']['0']               = '[';
  $rudweb_skin['mnu']['adm']['suf']['0']               = ']';
  $rudweb_skin['mnu']['adm']['sep']['0']               = '&#160;|&#160;';
  $rudweb_skin['mnu']['adm']['ftr']['0']               = '}';
  // MENU LINK
  $rudweb_skin['mnu']['adm']['LnkL']['BgColor']['0']        = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['adm']['LnkL']['FontColor']['0']      = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['adm']['LnkL']['TextDecoration']['0'] = 'underline';
  $rudweb_skin['mnu']['adm']['LnkL']['FontFamily']['0']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['adm']['LnkL']['FontWeight']['0']     = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['adm']['LnkL']['FontSize']['0']       = $rudweb_skin['FontSize'];
  // MENU VISITED LINK
  $rudweb_skin['mnu']['adm']['LnkV']['BgColor']['0']        = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['adm']['LnkV']['FontColor']['0']      = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['adm']['LnkV']['TextDecoration']['0'] = 'underline';
  $rudweb_skin['mnu']['adm']['LnkV']['FontFamily']['0']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['adm']['LnkV']['FontWeight']['0']     = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['adm']['LnkV']['FontSize']['0']       = $rudweb_skin['FontSize'];
  // MENU HOVER LINK
  $rudweb_skin['mnu']['adm']['LnkH']['BgColor']['0']        = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['adm']['LnkH']['FontColor']['0']      = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['adm']['LnkH']['TextDecoration']['0'] = 'none';
  $rudweb_skin['mnu']['adm']['LnkH']['FontFamily']['0']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['adm']['LnkH']['FontWeight']['0']     = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['adm']['LnkH']['FontSize']['0']       = $rudweb_skin['FontSize'];
  // MENU NO LINK
  $rudweb_skin['mnu']['adm']['Lnk']['BgColor']['0']         = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['adm']['Lnk']['FontColor']['0']       = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['adm']['Lnk']['TextDecoration']['0']  = 'none';
  $rudweb_skin['mnu']['adm']['Lnk']['FontFamily']['0']      = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['adm']['Lnk']['FontWeight']['0']      = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['adm']['Lnk']['FontSize']['0']        = $rudweb_skin['FontSize'];

  //MENU LEVEL 1
  $rudweb_skin['mnu']['adm']['hdr']['1']               = '{';
  $rudweb_skin['mnu']['adm']['pre']['1']               = '[';
  $rudweb_skin['mnu']['adm']['suf']['1']               = ']';
  $rudweb_skin['mnu']['adm']['sep']['1']               = '&#160;|&#160;';
  $rudweb_skin['mnu']['adm']['ftr']['1']               = '}';
  // MENU LINK
  $rudweb_skin['mnu']['adm']['LnkL']['BgColor']['1']        = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['adm']['LnkL']['FontColor']['1']      = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['adm']['LnkL']['TextDecoration']['1'] = 'underline';
  $rudweb_skin['mnu']['adm']['LnkL']['FontFamily']['1']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['adm']['LnkL']['FontWeight']['1']     = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['adm']['LnkL']['FontSize']['1']       = $rudweb_skin['FontSize'];
  // MENU VISITED LINK
  $rudweb_skin['mnu']['adm']['LnkV']['BgColor']['1']        = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['adm']['LnkV']['FontColor']['1']      = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['adm']['LnkV']['TextDecoration']['1'] = 'underline';
  $rudweb_skin['mnu']['adm']['LnkV']['FontFamily']['1']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['adm']['LnkV']['FontWeight']['1']     = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['adm']['LnkV']['FontSize']['1']       = $rudweb_skin['FontSize'];
  // MENU HOVER LINK
  $rudweb_skin['mnu']['adm']['LnkH']['BgColor']['1']        = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['adm']['LnkH']['FontColor']['1']      = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['adm']['LnkH']['TextDecoration']['1'] = 'none';
  $rudweb_skin['mnu']['adm']['LnkH']['FontFamily']['1']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['adm']['LnkH']['FontWeight']['1']     = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['adm']['LnkH']['FontSize']['1']       = $rudweb_skin['FontSize'];
  // MENU NO LINK
  $rudweb_skin['mnu']['adm']['Lnk']['BgColor']['1']         = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['adm']['Lnk']['FontColor']['1']       = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['adm']['Lnk']['TextDecoration']['1']  = 'none';
  $rudweb_skin['mnu']['adm']['Lnk']['FontFamily']['1']      = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['adm']['Lnk']['FontWeight']['1']      = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['adm']['Lnk']['FontSize']['1']        = $rudweb_skin['FontSize'];

  //MENU LEVEL 2
  $rudweb_skin['mnu']['adm']['hdr']['2']               = '{';
  $rudweb_skin['mnu']['adm']['pre']['2']               = '[';
  $rudweb_skin['mnu']['adm']['suf']['2']               = ']';
  $rudweb_skin['mnu']['adm']['sep']['2']               = '&#160;|&#160;';
  $rudweb_skin['mnu']['adm']['ftr']['2']               = '}';
  // MENU LINK
  $rudweb_skin['mnu']['adm']['LnkL']['BgColor']['2']        = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['adm']['LnkL']['FontColor']['2']      = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['adm']['LnkL']['TextDecoration']['2'] = 'underline';
  $rudweb_skin['mnu']['adm']['LnkL']['FontFamily']['2']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['adm']['LnkL']['FontWeight']['2']     = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['adm']['LnkL']['FontSize']['2']       = $rudweb_skin['FontSize'];
  // MENU VISITED LINK
  $rudweb_skin['mnu']['adm']['LnkV']['BgColor']['2']        = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['adm']['LnkV']['FontColor']['2']      = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['adm']['LnkV']['TextDecoration']['2'] = 'underline';
  $rudweb_skin['mnu']['adm']['LnkV']['FontFamily']['2']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['adm']['LnkV']['FontWeight']['2']     = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['adm']['LnkV']['FontSize']['2']       = $rudweb_skin['FontSize'];
  // MENU HOVER LINK
  $rudweb_skin['mnu']['adm']['LnkH']['BgColor']['2']        = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['adm']['LnkH']['FontColor']['2']      = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['adm']['LnkH']['TextDecoration']['2'] = 'none';
  $rudweb_skin['mnu']['adm']['LnkH']['FontFamily']['2']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['adm']['LnkH']['FontWeight']['2']     = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['adm']['LnkH']['FontSize']['2']       = $rudweb_skin['FontSize'];
  // MENU NO LINK
  $rudweb_skin['mnu']['adm']['Lnk']['BgColor']['2']         = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['adm']['Lnk']['FontColor']['2']       = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['adm']['Lnk']['TextDecoration']['2']  = 'none';
  $rudweb_skin['mnu']['adm']['Lnk']['FontFamily']['2']      = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['adm']['Lnk']['FontWeight']['2']      = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['adm']['Lnk']['FontSize']['2']        = $rudweb_skin['FontSize'];

  //MENU LEVEL 3
  $rudweb_skin['mnu']['adm']['hdr']['3']               = '{';
  $rudweb_skin['mnu']['adm']['pre']['3']               = '[';
  $rudweb_skin['mnu']['adm']['suf']['3']               = ']';
  $rudweb_skin['mnu']['adm']['sep']['3']               = '&#160;|&#160;';
  $rudweb_skin['mnu']['adm']['ftr']['3']               = '}';
  // MENU LINK
  $rudweb_skin['mnu']['adm']['LnkL']['BgColor']['3']        = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['adm']['LnkL']['FontColor']['3']      = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['adm']['LnkL']['TextDecoration']['3'] = 'underline';
  $rudweb_skin['mnu']['adm']['LnkL']['FontFamily']['3']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['adm']['LnkL']['FontWeight']['3']     = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['adm']['LnkL']['FontSize']['3']       = $rudweb_skin['FontSize'];
  // MENU VISITED LINK
  $rudweb_skin['mnu']['adm']['LnkV']['BgColor']['3']        = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['adm']['LnkV']['FontColor']['3']      = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['adm']['LnkV']['TextDecoration']['3'] = 'underline';
  $rudweb_skin['mnu']['adm']['LnkV']['FontFamily']['3']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['adm']['LnkV']['FontWeight']['3']     = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['adm']['LnkV']['FontSize']['3']       = $rudweb_skin['FontSize'];
  // MENU HOVER LINK
  $rudweb_skin['mnu']['adm']['LnkH']['BgColor']['3']        = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['adm']['LnkH']['FontColor']['3']      = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['adm']['LnkH']['TextDecoration']['3'] = 'none';
  $rudweb_skin['mnu']['adm']['LnkH']['FontFamily']['3']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['adm']['LnkH']['FontWeight']['3']     = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['adm']['LnkH']['FontSize']['3']       = $rudweb_skin['FontSize'];
  // MENU NO LINK
  $rudweb_skin['mnu']['adm']['Lnk']['BgColor']['3']         = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['adm']['Lnk']['FontColor']['3']       = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['adm']['Lnk']['TextDecoration']['3']  = 'none';
  $rudweb_skin['mnu']['adm']['Lnk']['FontFamily']['3']      = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['adm']['Lnk']['FontWeight']['3']      = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['adm']['Lnk']['FontSize']['3']        = $rudweb_skin['FontSize'];

  //MENU LEVEL 4
  $rudweb_skin['mnu']['adm']['hdr']['4']               = '{';
  $rudweb_skin['mnu']['adm']['pre']['4']               = '[';
  $rudweb_skin['mnu']['adm']['suf']['4']               = ']';
  $rudweb_skin['mnu']['adm']['sep']['4']               = '&#160;|&#160;';
  $rudweb_skin['mnu']['adm']['ftr']['4']               = '}';
  // MENU LINK
  $rudweb_skin['mnu']['adm']['LnkL']['BgColor']['4']        = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['adm']['LnkL']['FontColor']['4']      = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['adm']['LnkL']['TextDecoration']['4'] = 'underline';
  $rudweb_skin['mnu']['adm']['LnkL']['FontFamily']['4']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['adm']['LnkL']['FontWeight']['4']     = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['adm']['LnkL']['FontSize']['4']       = $rudweb_skin['FontSize'];
  // MENU VISITED LINK
  $rudweb_skin['mnu']['adm']['LnkV']['BgColor']['4']        = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['adm']['LnkV']['FontColor']['4']      = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['adm']['LnkV']['TextDecoration']['4'] = 'underline';
  $rudweb_skin['mnu']['adm']['LnkV']['FontFamily']['4']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['adm']['LnkV']['FontWeight']['4']     = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['adm']['LnkV']['FontSize']['4']       = $rudweb_skin['FontSize'];
  // MENU HOVER LINK
  $rudweb_skin['mnu']['adm']['LnkH']['BgColor']['4']        = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['adm']['LnkH']['FontColor']['4']      = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['adm']['LnkH']['TextDecoration']['4'] = 'none';
  $rudweb_skin['mnu']['adm']['LnkH']['FontFamily']['4']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['adm']['LnkH']['FontWeight']['4']     = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['adm']['LnkH']['FontSize']['4']       = $rudweb_skin['FontSize'];
  // MENU NO LINK
  $rudweb_skin['mnu']['adm']['Lnk']['BgColor']['4']         = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['adm']['Lnk']['FontColor']['4']       = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['adm']['Lnk']['TextDecoration']['4']  = 'none';
  $rudweb_skin['mnu']['adm']['Lnk']['FontFamily']['4']      = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['adm']['Lnk']['FontWeight']['4']      = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['adm']['Lnk']['FontSize']['4']        = $rudweb_skin['FontSize'];

  /* ********** ********** ********** MENUS ********** ********** ********** */
  //MENU LEVEL 0
  $rudweb_skin['mnu']['oth']['hdr']['0']               = '{';
  $rudweb_skin['mnu']['oth']['pre']['0']               = '[';
  $rudweb_skin['mnu']['oth']['suf']['0']               = ']';
  $rudweb_skin['mnu']['oth']['sep']['0']               = '&#160;|&#160;';
  $rudweb_skin['mnu']['oth']['ftr']['0']               = '}';
  // MENU LINK
  $rudweb_skin['mnu']['oth']['LnkL']['BgColor']['0']        = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['oth']['LnkL']['FontColor']['0']      = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['oth']['LnkL']['TextDecoration']['0'] = 'underline';
  $rudweb_skin['mnu']['oth']['LnkL']['FontFamily']['0']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['oth']['LnkL']['FontWeight']['0']     = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['oth']['LnkL']['FontSize']['0']       = $rudweb_skin['FontSize'];
  // MENU VISITED LINK
  $rudweb_skin['mnu']['oth']['LnkV']['BgColor']['0']        = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['oth']['LnkV']['FontColor']['0']      = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['oth']['LnkV']['TextDecoration']['0'] = 'underline';
  $rudweb_skin['mnu']['oth']['LnkV']['FontFamily']['0']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['oth']['LnkV']['FontWeight']['0']     = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['oth']['LnkV']['FontSize']['0']       = $rudweb_skin['FontSize'];
  // MENU HOVER LINK
  $rudweb_skin['mnu']['oth']['LnkH']['BgColor']['0']        = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['oth']['LnkH']['FontColor']['0']      = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['oth']['LnkH']['TextDecoration']['0'] = 'none';
  $rudweb_skin['mnu']['oth']['LnkH']['FontFamily']['0']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['oth']['LnkH']['FontWeight']['0']     = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['oth']['LnkH']['FontSize']['0']       = $rudweb_skin['FontSize'];
  // MENU NO LINK
  $rudweb_skin['mnu']['oth']['Lnk']['BgColor']['0']         = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['oth']['Lnk']['FontColor']['0']       = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['oth']['Lnk']['TextDecoration']['0']  = 'none';
  $rudweb_skin['mnu']['oth']['Lnk']['FontFamily']['0']      = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['oth']['Lnk']['FontWeight']['0']      = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['oth']['Lnk']['FontSize']['0']        = $rudweb_skin['FontSize'];

  //MENU LEVEL 1
  $rudweb_skin['mnu']['oth']['hdr']['1']               = '{';
  $rudweb_skin['mnu']['oth']['pre']['1']               = '[';
  $rudweb_skin['mnu']['oth']['suf']['1']               = ']';
  $rudweb_skin['mnu']['oth']['sep']['1']               = '&#160;|&#160;';
  $rudweb_skin['mnu']['oth']['ftr']['1']               = '}';
  // MENU LINK
  $rudweb_skin['mnu']['oth']['LnkL']['BgColor']['1']        = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['oth']['LnkL']['FontColor']['1']      = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['oth']['LnkL']['TextDecoration']['1'] = 'underline';
  $rudweb_skin['mnu']['oth']['LnkL']['FontFamily']['1']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['oth']['LnkL']['FontWeight']['1']     = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['oth']['LnkL']['FontSize']['1']       = $rudweb_skin['FontSize'];
  // MENU VISITED LINK
  $rudweb_skin['mnu']['oth']['LnkV']['BgColor']['1']        = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['oth']['LnkV']['FontColor']['1']      = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['oth']['LnkV']['TextDecoration']['1'] = 'underline';
  $rudweb_skin['mnu']['oth']['LnkV']['FontFamily']['1']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['oth']['LnkV']['FontWeight']['1']     = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['oth']['LnkV']['FontSize']['1']       = $rudweb_skin['FontSize'];
  // MENU HOVER LINK
  $rudweb_skin['mnu']['oth']['LnkH']['BgColor']['1']        = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['oth']['LnkH']['FontColor']['1']      = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['oth']['LnkH']['TextDecoration']['1'] = 'none';
  $rudweb_skin['mnu']['oth']['LnkH']['FontFamily']['1']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['oth']['LnkH']['FontWeight']['1']     = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['oth']['LnkH']['FontSize']['1']       = $rudweb_skin['FontSize'];
  // MENU NO LINK
  $rudweb_skin['mnu']['oth']['Lnk']['BgColor']['1']         = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['oth']['Lnk']['FontColor']['1']       = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['oth']['Lnk']['TextDecoration']['1']  = 'none';
  $rudweb_skin['mnu']['oth']['Lnk']['FontFamily']['1']      = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['oth']['Lnk']['FontWeight']['1']      = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['oth']['Lnk']['FontSize']['1']        = $rudweb_skin['FontSize'];

  //MENU LEVEL 2
  $rudweb_skin['mnu']['oth']['hdr']['2']               = '{';
  $rudweb_skin['mnu']['oth']['pre']['2']               = '[';
  $rudweb_skin['mnu']['oth']['suf']['2']               = ']';
  $rudweb_skin['mnu']['oth']['sep']['2']               = '&#160;|&#160;';
  $rudweb_skin['mnu']['oth']['ftr']['2']               = '}';
  // MENU LINK
  $rudweb_skin['mnu']['oth']['LnkL']['BgColor']['2']        = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['oth']['LnkL']['FontColor']['2']      = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['oth']['LnkL']['TextDecoration']['2'] = 'underline';
  $rudweb_skin['mnu']['oth']['LnkL']['FontFamily']['2']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['oth']['LnkL']['FontWeight']['2']     = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['oth']['LnkL']['FontSize']['2']       = $rudweb_skin['FontSize'];
  // MENU VISITED LINK
  $rudweb_skin['mnu']['oth']['LnkV']['BgColor']['2']        = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['oth']['LnkV']['FontColor']['2']      = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['oth']['LnkV']['TextDecoration']['2'] = 'underline';
  $rudweb_skin['mnu']['oth']['LnkV']['FontFamily']['2']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['oth']['LnkV']['FontWeight']['2']     = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['oth']['LnkV']['FontSize']['2']       = $rudweb_skin['FontSize'];
  // MENU HOVER LINK
  $rudweb_skin['mnu']['oth']['LnkH']['BgColor']['2']        = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['oth']['LnkH']['FontColor']['2']      = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['oth']['LnkH']['TextDecoration']['2'] = 'none';
  $rudweb_skin['mnu']['oth']['LnkH']['FontFamily']['2']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['oth']['LnkH']['FontWeight']['2']     = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['oth']['LnkH']['FontSize']['2']       = $rudweb_skin['FontSize'];
  // MENU NO LINK
  $rudweb_skin['mnu']['oth']['Lnk']['BgColor']['2']         = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['oth']['Lnk']['FontColor']['2']       = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['oth']['Lnk']['TextDecoration']['2']  = 'none';
  $rudweb_skin['mnu']['oth']['Lnk']['FontFamily']['2']      = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['oth']['Lnk']['FontWeight']['2']      = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['oth']['Lnk']['FontSize']['2']        = $rudweb_skin['FontSize'];

  //MENU LEVEL 3
  $rudweb_skin['mnu']['oth']['hdr']['3']               = '{';
  $rudweb_skin['mnu']['oth']['pre']['3']               = '[';
  $rudweb_skin['mnu']['oth']['suf']['3']               = ']';
  $rudweb_skin['mnu']['oth']['sep']['3']               = '&#160;|&#160;';
  $rudweb_skin['mnu']['oth']['ftr']['3']               = '}';
  // MENU LINK
  $rudweb_skin['mnu']['oth']['LnkL']['BgColor']['3']        = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['oth']['LnkL']['FontColor']['3']      = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['oth']['LnkL']['TextDecoration']['3'] = 'underline';
  $rudweb_skin['mnu']['oth']['LnkL']['FontFamily']['3']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['oth']['LnkL']['FontWeight']['3']     = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['oth']['LnkL']['FontSize']['3']       = $rudweb_skin['FontSize'];
  // MENU VISITED LINK
  $rudweb_skin['mnu']['oth']['LnkV']['BgColor']['3']        = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['oth']['LnkV']['FontColor']['3']      = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['oth']['LnkV']['TextDecoration']['3'] = 'underline';
  $rudweb_skin['mnu']['oth']['LnkV']['FontFamily']['3']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['oth']['LnkV']['FontWeight']['3']     = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['oth']['LnkV']['FontSize']['3']       = $rudweb_skin['FontSize'];
  // MENU HOVER LINK
  $rudweb_skin['mnu']['oth']['LnkH']['BgColor']['3']        = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['oth']['LnkH']['FontColor']['3']      = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['oth']['LnkH']['TextDecoration']['3'] = 'none';
  $rudweb_skin['mnu']['oth']['LnkH']['FontFamily']['3']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['oth']['LnkH']['FontWeight']['3']     = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['oth']['LnkH']['FontSize']['3']       = $rudweb_skin['FontSize'];
  // MENU NO LINK
  $rudweb_skin['mnu']['oth']['Lnk']['BgColor']['3']         = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['oth']['Lnk']['FontColor']['3']       = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['oth']['Lnk']['TextDecoration']['3']  = 'none';
  $rudweb_skin['mnu']['oth']['Lnk']['FontFamily']['3']      = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['oth']['Lnk']['FontWeight']['3']      = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['oth']['Lnk']['FontSize']['3']        = $rudweb_skin['FontSize'];

  //MENU LEVEL 4
  $rudweb_skin['mnu']['oth']['hdr']['4']               = '{';
  $rudweb_skin['mnu']['oth']['pre']['4']               = '[';
  $rudweb_skin['mnu']['oth']['suf']['4']               = ']';
  $rudweb_skin['mnu']['oth']['sep']['4']               = '&#160;|&#160;';
  $rudweb_skin['mnu']['oth']['ftr']['4']               = '}';
  // MENU LINK
  $rudweb_skin['mnu']['oth']['LnkL']['BgColor']['4']        = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['oth']['LnkL']['FontColor']['4']      = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['oth']['LnkL']['TextDecoration']['4'] = 'underline';
  $rudweb_skin['mnu']['oth']['LnkL']['FontFamily']['4']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['oth']['LnkL']['FontWeight']['4']     = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['oth']['LnkL']['FontSize']['4']       = $rudweb_skin['FontSize'];
  // MENU VISITED LINK
  $rudweb_skin['mnu']['oth']['LnkV']['BgColor']['4']        = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['oth']['LnkV']['FontColor']['4']      = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['oth']['LnkV']['TextDecoration']['4'] = 'underline';
  $rudweb_skin['mnu']['oth']['LnkV']['FontFamily']['4']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['oth']['LnkV']['FontWeight']['4']     = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['oth']['LnkV']['FontSize']['4']       = $rudweb_skin['FontSize'];
  // MENU HOVER LINK
  $rudweb_skin['mnu']['oth']['LnkH']['BgColor']['4']        = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['oth']['LnkH']['FontColor']['4']      = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['oth']['LnkH']['TextDecoration']['4'] = 'none';
  $rudweb_skin['mnu']['oth']['LnkH']['FontFamily']['4']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['oth']['LnkH']['FontWeight']['4']     = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['oth']['LnkH']['FontSize']['4']       = $rudweb_skin['FontSize'];
  // MENU NO LINK
  $rudweb_skin['mnu']['oth']['Lnk']['BgColor']['4']         = $rudweb_skin['BgColor'];
  $rudweb_skin['mnu']['oth']['Lnk']['FontColor']['4']       = $rudweb_skin['FontColor'];
  $rudweb_skin['mnu']['oth']['Lnk']['TextDecoration']['4']  = 'none';
  $rudweb_skin['mnu']['oth']['Lnk']['FontFamily']['4']      = $rudweb_skin['FontFamily'];
  $rudweb_skin['mnu']['oth']['Lnk']['FontWeight']['4']      = $rudweb_skin['FontWeight'];
  $rudweb_skin['mnu']['oth']['Lnk']['FontSize']['4']        = $rudweb_skin['FontSize'];
  /* ********** ********** ********** PAGE CONTENT ********** ********** ********** */
  // PAGE CONTENT
  $rudweb_skin['cnt']['hdr']                = "\n";
  $rudweb_skin['cnt']['pre']                = "";
  $rudweb_skin['cnt']['suf']                = "";
  $rudweb_skin['cnt']['ftr']                = "\n";
 
  // CONTENT TITLE
  $rudweb_skin['cnt']['tt1']['class']       = "title";
  $rudweb_skin['cnt']['tt1']['pre']         = "\n<DIV CLASS=\"".$rudweb_skin['cnt']['tt1']['class']."\">&#160;&#160;";
  $rudweb_skin['cnt']['tt1']['suf']         = "</Div>";

  // CONTENT SUBTITLE
  $rudweb_skin['cnt']['tt2']['class']       = "subtitle";
  $rudweb_skin['cnt']['tt2']['pre']         = "\n<DIV CLASS=\"".$rudweb_skin['cnt']['tt2']['class']."\">&#160;&#160;";
  $rudweb_skin['cnt']['tt2']['suf']         = "</DIV>";

  // PAGE TEXT
  $rudweb_skin['cnt']['txt']['class']       = "text";
  $rudweb_skin['cnt']['txt']['pre']         = "\n<DIV CLASS=\"".$rudweb_skin['cnt']['txt']['class']."\">\n";
  $rudweb_skin['cnt']['txt']['suf']         = "\n</DIV>";

  /* ********** ********** ********** PAGE CONTENT PICTURES ********** ********** ********** */
  // CONTENT PICTURES - 0 - PANEL
  $rudweb_skin['cnt']['pic']['hdr']['0']            = "\n";
  $rudweb_skin['cnt']['pic']['pre']['0']            = "";
  $rudweb_skin['cnt']['pic']['sep']['0']            = "\n<BR><BR>";
  $rudweb_skin['cnt']['pic']['suf']['0']            = "";
  $rudweb_skin['cnt']['pic']['ftr']['0']            = "\n";
  $rudweb_skin['cnt']['pic']['max']['0']            = "150";

  // CONTENT PICTURES - 1 - TOP
  $rudweb_skin['cnt']['pic']['hdr']['1']            = "<BR><DIV ALIGN=\"center\">";
  $rudweb_skin['cnt']['pic']['pre']['1']            = "\n<DIV STYLE=\"float: left; clear: none; margin: 4px;\">";
  $rudweb_skin['cnt']['pic']['sep']['1']            = "";
  $rudweb_skin['cnt']['pic']['suf']['1']            = "\n</DIV>";
  $rudweb_skin['cnt']['pic']['ftr']['1']            = "</DIV><BR CLEAR=\"all\">";
  $rudweb_skin['cnt']['pic']['max']['1']            = "150";

  // CONTENT PICTURES - 2 - AFTER TITLE
  $rudweb_skin['cnt']['pic']['hdr']['2']            = "<BR><DIV ALIGN=\"center\">";
  $rudweb_skin['cnt']['pic']['pre']['2']            = "\n<DIV STYLE=\"float: left; clear: none; margin: 4px;\">";
  $rudweb_skin['cnt']['pic']['sep']['2']            = "";
  $rudweb_skin['cnt']['pic']['suf']['2']            = "\n</DIV>";
  $rudweb_skin['cnt']['pic']['ftr']['2']            = "</DIV><BR CLEAR=\"all\">";
  $rudweb_skin['cnt']['pic']['max']['2']            = "150";

  // CONTENT PICTURES - 3 - AFTER SUBTITLE
  $rudweb_skin['cnt']['pic']['hdr']['3']            = "<BR><DIV ALIGN=\"center\">";
  $rudweb_skin['cnt']['pic']['pre']['3']            = "\n<DIV STYLE=\"float: left; clear: none; margin: 4px;\">";
  $rudweb_skin['cnt']['pic']['sep']['3']            = "";
  $rudweb_skin['cnt']['pic']['suf']['3']            = "\n</DIV>";
  $rudweb_skin['cnt']['pic']['ftr']['3']            = "</DIV><BR CLEAR=\"all\">";
  $rudweb_skin['cnt']['pic']['max']['3']            = "150";

  // CONTENT PICTURES - 4 - BOTTOM
  $rudweb_skin['cnt']['pic']['hdr']['4']            = "<BR><DIV ALIGN=\"center\">";
  $rudweb_skin['cnt']['pic']['pre']['4']            = "\n<DIV STYLE=\"float: left; clear: none; margin: 4px;\">";
  $rudweb_skin['cnt']['pic']['sep']['4']            = "";
  $rudweb_skin['cnt']['pic']['suf']['4']            = "\n</DIV>";
  $rudweb_skin['cnt']['pic']['ftr']['4']            = "</DIV><BR CLEAR=\"all\">";
  $rudweb_skin['cnt']['pic']['max']['4']            = "150";

  /* ********** ********** ********** FEATURED MODULE ********** ********** ********** */
  // FEATURED MODULE
  $rudweb_skin['ftr']['hdr']                = "\n<DIV CLASS=\"".$rudweb_skin['cnt']['tt1']['class']."\">&#160;&#160;".$rudweb_ln['featured']['tt']."</DIV><BR>";
  $rudweb_skin['ftr']['ftr']                = "\n";

  $rudweb_skin['ftr']['sep']                = "\n<BR><BR>";

  $rudweb_skin['ftr']['limit']              = "3"; // how many modules to display
  $rudweb_skin['ftr']['chartt']                = "20"; // how many characters for title
  $rudweb_skin['ftr']['picsize']                = "100"; // max picture size
  $rudweb_skin['ftr']['chardesc']                = "20"; // how many characters for description

  $rudweb_skin['ftr']['fpre']               = "\n";
  $rudweb_skin['ftr']['fsuf']               = "\n";

  $rudweb_skin['ftr']['tt']['pre']             = "\n";
  $rudweb_skin['ftr']['tt']['suf']             = "\n";
  $rudweb_skin['ftr']['pic']['pre']             = "\n<BR>";
  $rudweb_skin['ftr']['pic']['suf']             = "\n<BR>";
  $rudweb_skin['ftr']['desc']['pre']             = "\n";
  $rudweb_skin['ftr']['desc']['suf']             = "\n";

  // FEATURED LINK
  $rudweb_skin['ftr']['LnkL']['BgColor']        = $rudweb_skin['BgColor'];
  $rudweb_skin['ftr']['LnkL']['FontColor']      = $rudweb_skin['FontColor'];
  $rudweb_skin['ftr']['LnkL']['TextDecoration'] = "underline";
  $rudweb_skin['ftr']['LnkL']['FontFamily']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['ftr']['LnkL']['FontWeight']     = "bold";
  $rudweb_skin['ftr']['LnkL']['FontSize']       = $rudweb_skin['FontSize'];
  // FEATURED VISITED LINK
  $rudweb_skin['ftr']['LnkV']['BgColor']        = $rudweb_skin['BgColor'];
  $rudweb_skin['ftr']['LnkV']['FontColor']      = $rudweb_skin['FontColor'];
  $rudweb_skin['ftr']['LnkV']['TextDecoration'] = "underline";
  $rudweb_skin['ftr']['LnkV']['FontFamily']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['ftr']['LnkV']['FontWeight']     = "bold";
  $rudweb_skin['ftr']['LnkV']['FontSize']       = $rudweb_skin['FontSize'];
  // FEATURED HOVER LINK
  $rudweb_skin['ftr']['LnkH']['BgColor']        = $rudweb_skin['BgColor'];
  $rudweb_skin['ftr']['LnkH']['FontColor']      = $rudweb_skin['FontColor'];
  $rudweb_skin['ftr']['LnkH']['TextDecoration'] = "none";
  $rudweb_skin['ftr']['LnkH']['FontFamily']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['ftr']['LnkH']['FontWeight']     = "bold";
  $rudweb_skin['ftr']['LnkH']['FontSize']       = $rudweb_skin['FontSize'];
  
  /* ********** ********** ********** COPYRIGHT NOTICE ********** ********** ********** */
  // COPYRIGHT NOTICE
  $rudweb_skin['cpy']['pre']            = "\n";
  $rudweb_skin['cpy']['suf']            = "\n";

  // COPYRIGHT LINK
  $rudweb_skin['cpy']['LnkL']['BgColor']        = $rudweb_skin['BgColor'];
  $rudweb_skin['cpy']['LnkL']['FontColor']      = $rudweb_skin['FontColor'];
  $rudweb_skin['cpy']['LnkL']['TextDecoration'] = "underline";
  $rudweb_skin['cpy']['LnkL']['FontFamily']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['cpy']['LnkL']['FontWeight']     = $rudweb_skin['FontWeight'];
  $rudweb_skin['cpy']['LnkL']['FontSize']       = $rudweb_skin['FontSize'];
  // COPYRIGHT VISITED LINK
  $rudweb_skin['cpy']['LnkV']['BgColor']        = $rudweb_skin['BgColor'];
  $rudweb_skin['cpy']['LnkV']['FontColor']      = $rudweb_skin['FontColor'];
  $rudweb_skin['cpy']['LnkV']['TextDecoration'] = "underline";
  $rudweb_skin['cpy']['LnkV']['FontFamily']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['cpy']['LnkV']['FontWeight']     = $rudweb_skin['FontWeight'];
  $rudweb_skin['cpy']['LnkV']['FontSize']       = $rudweb_skin['FontSize'];
  // COPYRIGHT HOVER LINK
  $rudweb_skin['cpy']['LnkH']['BgColor']        = $rudweb_skin['BgColor'];
  $rudweb_skin['cpy']['LnkH']['FontColor']      = $rudweb_skin['FontColor'];
  $rudweb_skin['cpy']['LnkH']['TextDecoration'] = "none";
  $rudweb_skin['cpy']['LnkH']['FontFamily']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['cpy']['LnkH']['FontWeight']     = $rudweb_skin['FontWeight'];
  $rudweb_skin['cpy']['LnkH']['FontSize']       = $rudweb_skin['FontSize'];
  
  /* ********** ********** ********** VISITOR STATISTICS ********** ********** ********** */
  $rudweb_skin['sts']['hdr']        = "\n<BR>";
  $rudweb_skin['sts']['ftr']        = "\n";

  $rudweb_skin['sts']['sep']         = "\n";
  $rudweb_skin['sts']['pre']         = "\n";
  $rudweb_skin['sts']['suf']         = "\n";
  
  /* ********** ********** ********** USER MODULE ********** ********** ********** */
  // USER MODULE
  $rudweb_skin['usr']['hdr'] = "\n<TABLE BORDER=\"0\" CELLPADDING=\"0\" CELLSPACING=\"0\">\n<TR>";
  $rudweb_skin['usr']['pre'] = "\n<TD CLASS=\"usr_td\">";
  $rudweb_skin['usr']['suf'] = "\n</TD>";
  $rudweb_skin['usr']['sep'] = "";
  $rudweb_skin['usr']['ftr'] = "\n</TR>\n</TABLE>";
  
  $rudweb_skin['usr']['login']['hdr'] = "\n<TABLE BORDER=\"0\" CELLPADDING=\"0\" CELLSPACING=\"0\">\n<TR>";
  $rudweb_skin['usr']['login']['pre'] = "\n<TD CLASS=\"usr_login\">";
  $rudweb_skin['usr']['login']['suf'] = "\n</TD>";
  $rudweb_skin['usr']['login']['sep'] = "";
  $rudweb_skin['usr']['login']['ftr'] = "\n</TR>\n</TABLE>";

  /* ********** ********** ********** LANGUAGE MODULE ********** ********** ********** */
  // LANGUAGE MODULE
  $rudweb_skin['lng']['hdr'] = "\n";
  $rudweb_skin['lng']['pre'] = "\n";
  $rudweb_skin['lng']['suf'] = "\n";
  $rudweb_skin['lng']['sep'] = "\n&#160;";
  $rudweb_skin['lng']['ftr'] = "\n";

  /* ********** ********** ********** BLOG MODULE ********** ********** ********** */
  $rudweb_skin['blg']['hdr'] = "\n";
  $rudweb_skin['blg']['ftr'] = "\n";
  
  $rudweb_skin['blg']['pre'] = "\n";
  $rudweb_skin['blg']['suf'] = "\n";
  $rudweb_skin['blg']['sep'] = "\n<BR>";
  
  $rudweb_skin['blg']['posted']['pre'] = "\n";
  $rudweb_skin['blg']['posted']['suf'] = "\n";
  
  /* ********** ********** ********** COMMENTS MODULE ********** ********** ********** */
  $rudweb_skin['cmnts']['hdr'] = "\n<BR>";
  $rudweb_skin['cmnts']['ftr'] = "\n";
  
  $rudweb_skin['cmnts']['pre'] = "\n";
  $rudweb_skin['cmnts']['suf'] = "\n";
  $rudweb_skin['cmnts']['sep'] = "\n<HR>";
  
  /* ********** ********** ********** SHOPPING CART MODULE ********** ********** ********** */
  $rudweb_skin['crt']['hdr'] = "\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\">\n<TR>";
  $rudweb_skin['crt']['pre'] = "\n<TD>";
  $rudweb_skin['crt']['suf'] = "\n</TD>";
  $rudweb_skin['crt']['sep'] = "";
  $rudweb_skin['crt']['ftr'] = "\n</TR>\n</TABLE>";
  /* ********** ********** ********** YAH MODULE ********** ********** ********** */
  $rudweb_skin['yah']['hdr'] = "";
  $rudweb_skin['yah']['pre'] = "";
  $rudweb_skin['yah']['suf'] = "";
  $rudweb_skin['yah']['sep'] = "&#160;/&#160;";
  $rudweb_skin['yah']['ftr'] = "";
  /* ********** ********** ********** CONTENT TAGS ********** ********** ********** */
  $rudweb_skin['tagsc']['hdr'] = "<BR>";
  $rudweb_skin['tagsc']['pre'] = "";
  $rudweb_skin['tagsc']['suf'] = "";
  $rudweb_skin['tagsc']['sep'] = "&#160;/&#160;";
  $rudweb_skin['tagsc']['ftr'] = "";
  /* ********** ********** ********** CATALOG MODULE ********** ********** ********** */
  $rudweb_skin['catalog']['hdr'] = '';
  $rudweb_skin['catalog']['ftr'] = '';
  /* ********** ********** ********** CATEGORIES ********** ********** ********** */
  $rudweb_skin['cat']['hdr'] = "<DIV STYLE=\"text-align: center;\">";
  $rudweb_skin['cat']['pre'] = "\n<DIV STYLE=\"width:48%; float: left; clear: none; margin: 4px; border: 1px solid #000000;\">";
  $rudweb_skin['cat']['suf'] = "</DIV>";
  $rudweb_skin['cat']['sep'] = "";
  $rudweb_skin['cat']['ftr'] = "</DIV><BR CLEAR=\"all\">";
  $rudweb_skin['cat']['pc']['pre'] = '<DIV STYLE="height: 160px; margin: 5px;">';
  $rudweb_skin['cat']['pc']['suf'] = '</DIV>';
  $rudweb_skin['cat']['tt']['pre'] = '<DIV STYLE="margin: 5px;">';
  $rudweb_skin['cat']['tt']['suf'] = '</DIV>';
  $rudweb_skin['cat']['dsc']['pre'] = '<DIV STYLE="margin: 5px;">';
  $rudweb_skin['cat']['dsc']['suf'] = '</DIV>';
  $rudweb_skin['cat']['pic'] = "150";
  $rudweb_skin['cat']['LnkL']['BgColor']        = $rudweb_skin['BgColor'];
  $rudweb_skin['cat']['LnkL']['FontColor']      = $rudweb_skin['FontColor'];
  $rudweb_skin['cat']['LnkL']['TextDecoration'] = "none";
  $rudweb_skin['cat']['LnkL']['FontFamily']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['cat']['LnkL']['FontWeight']     = 'bold';
  $rudweb_skin['cat']['LnkL']['FontSize']       = $rudweb_skin['FontSize']+3;
  $rudweb_skin['cat']['LnkV']['BgColor']        = $rudweb_skin['BgColor'];
  $rudweb_skin['cat']['LnkV']['FontColor']      = $rudweb_skin['FontColor'];
  $rudweb_skin['cat']['LnkV']['TextDecoration'] = "none";
  $rudweb_skin['cat']['LnkV']['FontFamily']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['cat']['LnkV']['FontWeight']     = 'bold';
  $rudweb_skin['cat']['LnkV']['FontSize']       = $rudweb_skin['FontSize']+3;
  $rudweb_skin['cat']['LnkH']['BgColor']        = $rudweb_skin['BgColor'];
  $rudweb_skin['cat']['LnkH']['FontColor']      = $rudweb_skin['FontColor'];
  $rudweb_skin['cat']['LnkH']['TextDecoration'] = "underline";
  $rudweb_skin['cat']['LnkH']['FontFamily']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['cat']['LnkH']['FontWeight']     = 'bold';
  $rudweb_skin['cat']['LnkH']['FontSize']       = $rudweb_skin['FontSize']+3;
  /* ********** ********** ********** CATALOG YOU ARE HERE ********** ********** ********** */
  $rudweb_skin['catyah']['hdr'] = '';
  $rudweb_skin['catyah']['pre'] = '';
  $rudweb_skin['catyah']['suf'] = '';
  $rudweb_skin['catyah']['sep'] = '&#160;/&#160;';
  $rudweb_skin['catyah']['ftr'] = '';
  /* ********** ********** ********** PAGINATION ********** ********** ********** */
  $rudweb_skin['pgnav']['hdr'] = '<BR><DIV STYLE="text-align: center;">';
  $rudweb_skin['pgnav']['pre'] = '';
  $rudweb_skin['pgnav']['suf'] = '';
  $rudweb_skin['pgnav']['sep'] = '&#160;';
  $rudweb_skin['pgnav']['ftr'] = '</DIV>';
  /* ********** ********** ********** PRODUCTS ********** ********** ********** */
  //product list filters - items.inc
  $rudweb_skin['prod']['flt']['hdr']        = '';
  // ??
  $rudweb_skin['prod']['com']['hdr']        = '';
  // product list - items.inc
  $rudweb_skin['prod']['lst']['hdr']        = '<BR><BR><TABLE BORDER="1" CELLPADDING="3" CELLSPACING="0">';
  $rudweb_skin['prod']['lst']['hdrhdr']     = '<TR CLASS="lst_prd_hdr">';
  $rudweb_skin['prod']['lst']['ftrhdr']     = '</TR>';
  $rudweb_skin['prod']['lst']['hdrprd']     = '<TR CLASS="lst_prd_prd">';
  $rudweb_skin['prod']['lst']['pidpre']     = '<TD>';
  $rudweb_skin['prod']['lst']['ppicsuf']    = '</TD>';
  $rudweb_skin['prod']['lst']['ppicpre']    = '<TD>';
  $rudweb_skin['prod']['lst']['pidsuf']     = '</TD>';
  $rudweb_skin['prod']['lst']['pnamepre']   = '<TD>';
  $rudweb_skin['prod']['lst']['pnamesuf']   = '</TD>';
  $rudweb_skin['prod']['lst']['prd_dscpre'] = '<TD>';
  $rudweb_skin['prod']['lst']['prd_dscsuf'] = '</TD>';
  $rudweb_skin['prod']['lst']['ppricepre']  = '<TD>';
  $rudweb_skin['prod']['lst']['ppricesuf']  = '</TD>';
  $rudweb_skin['prod']['lst']['detpre']     = '<TD>';
  $rudweb_skin['prod']['lst']['detsuf']     = '</TD>';
  $rudweb_skin['prod']['lst']['ftrprd']     = '</TR>';
  $rudweb_skin['prod']['lst']['ftr']        = '</TABLE>';
  
  $rudweb_skin['prod']['picmax']            = '100';
  $rudweb_skin['prod']['chardesc']          = '30';
  //product link
  $rudweb_skin['prod']['LnkL']['BgColor']        = $rudweb_skin['BgColor'];
  $rudweb_skin['prod']['LnkL']['FontColor']      = $rudweb_skin['FontColor'];
  $rudweb_skin['prod']['LnkL']['TextDecoration'] = 'none';
  $rudweb_skin['prod']['LnkL']['FontFamily']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['prod']['LnkL']['FontWeight']     = 'bold';
  $rudweb_skin['prod']['LnkL']['FontSize']       = $rudweb_skin['FontSize'];
  $rudweb_skin['prod']['LnkV']['BgColor']        = $rudweb_skin['BgColor'];
  $rudweb_skin['prod']['LnkV']['FontColor']      = $rudweb_skin['FontColor'];
  $rudweb_skin['prod']['LnkV']['TextDecoration'] = 'none';
  $rudweb_skin['prod']['LnkV']['FontFamily']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['prod']['LnkV']['FontWeight']     = 'bold';
  $rudweb_skin['prod']['LnkV']['FontSize']       = $rudweb_skin['FontSize'];
  $rudweb_skin['prod']['LnkH']['BgColor']        = $rudweb_skin['BgColor'];
  $rudweb_skin['prod']['LnkH']['FontColor']      = $rudweb_skin['FontColor'];
  $rudweb_skin['prod']['LnkH']['TextDecoration'] = 'underline';
  $rudweb_skin['prod']['LnkH']['FontFamily']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['prod']['LnkH']['FontWeight']     = 'bold';
  $rudweb_skin['prod']['LnkH']['FontSize']       = $rudweb_skin['FontSize'];
  // product details - item.inc
  $rudweb_skin['prod']['dt']['picmax']           = '80';
  $rudweb_skin['prod']['dt']['hdr'] = '';
  // main picture
  $rudweb_skin['prod']['dt']['pict0']['pre'] = '';
  $rudweb_skin['prod']['dt']['pict0']['suf'] = '';
  // product name
  $rudweb_skin['prod']['dt']['tt_vl']['pre'] = '';
  $rudweb_skin['prod']['dt']['tt_vl']['suf'] = '';
  // offer id
  $rudweb_skin['prod']['dt']['pid_tt']['pre'] = '';
  $rudweb_skin['prod']['dt']['pid_tt']['suf'] = '';
  $rudweb_skin['prod']['dt']['pid_vl']['pre'] = '';
  $rudweb_skin['prod']['dt']['pid_vl']['suf'] = '';
  // product description
  $rudweb_skin['prod']['dt']['dsc_tt']['pre'] = '';
  $rudweb_skin['prod']['dt']['dsc_tt']['suf'] = '';
  $rudweb_skin['prod']['dt']['dsc_vl']['pre'] = '';
  $rudweb_skin['prod']['dt']['dsc_vl']['suf'] = '';
  // all othe rdetails
  $rudweb_skin['prod']['dt']['det']['hdr'] = '';
  $rudweb_skin['prod']['dt']['det_tt']['pre'] = '';
  $rudweb_skin['prod']['dt']['det_tt']['suf'] = '';
  $rudweb_skin['prod']['dt']['det_vl']['pre'] = '';
  $rudweb_skin['prod']['dt']['det_vl']['suf'] = '';
  $rudweb_skin['prod']['dt']['det']['ftr'] = '';
  // quantity
  $rudweb_skin['prod']['dt']['qty_tt']['pre'] = '';
  $rudweb_skin['prod']['dt']['qty_tt']['pre'] = '';
  $rudweb_skin['prod']['dt']['qty_vl']['pre'] = '';
  $rudweb_skin['prod']['dt']['qty_vl']['suf'] = '';
  // price
  $rudweb_skin['prod']['dt']['prc_tt']['pre'] = '';
  $rudweb_skin['prod']['dt']['prc_tt']['suf'] = '';
  $rudweb_skin['prod']['dt']['prc_vl']['pre'] = '';
  $rudweb_skin['prod']['dt']['prc_vl']['suf'] = '';
  // product pictures
  $rudweb_skin['prod']['dt']['pic0']['hdr'] = '';
  $rudweb_skin['prod']['dt']['pic0']['pre'] = '';
  $rudweb_skin['prod']['dt']['pic0']['suf'] = '';
  $rudweb_skin['prod']['dt']['pic0']['sep'] = '';
  $rudweb_skin['prod']['dt']['pic0']['ftr'] = '';
  // product form
  $rudweb_skin['prod']['dt']['form']['pre'] = '';
  $rudweb_skin['prod']['dt']['form']['suf'] = '';
  //details footer
  $rudweb_skin['prod']['dt']['ftr'] = '';
  
  /* ********** ********** ********** ADMINISTRATION MODULE ********** ********** ********** */
  // ADMIN MODULE
  $rudweb_skin['adm']['hdr'] = '<TABLE BORDER="0" CELLPADDING="0" CELLSPACING="0"><TR>';
  $rudweb_skin['adm']['pre'] = '<TD CLASS="">';
  $rudweb_skin['adm']['suf'] = '</TD>';
  $rudweb_skin['adm']['sep'] = '';
  $rudweb_skin['adm']['ftr'] = '</TR></TABLE>';
  
  $rudweb_skin['adm']['login']['hdr'] = '<TABLE BORDER="0" CELLPADDING="0" CELLSPACING="0"><TR>';
  $rudweb_skin['adm']['login']['pre'] = '<TD CLASS="usr_login">';
  $rudweb_skin['adm']['login']['suf'] = '</TD>';
  $rudweb_skin['adm']['login']['sep'] = '';
  $rudweb_skin['adm']['login']['ftr'] = '</TR></TABLE>';
  
  $rudweb_skin['adm']['mnu']['hdr']   = '';
  $rudweb_skin['adm']['mnuhd']['pre'] = '';
  $rudweb_skin['adm']['mnuhd']['suf'] = '';
  $rudweb_skin['adm']['mnutt']['pre'] = '';
  $rudweb_skin['adm']['mnutt']['suf'] = '';
  $rudweb_skin['adm']['mnu']['pre']   = '';
  $rudweb_skin['adm']['mnu']['suf']   = '';
  $rudweb_skin['adm']['mnu']['sep']   = '';
  $rudweb_skin['adm']['mnu']['ftr']   = '';
  
  $rudweb_skin['adm']['mnu']['LnkL']['BgColor']        = $rudweb_skin['FontColor'];
  $rudweb_skin['adm']['mnu']['LnkL']['FontColor']      = $rudweb_skin['BgColor'];
  $rudweb_skin['adm']['mnu']['LnkL']['TextDecoration'] = 'none';
  $rudweb_skin['adm']['mnu']['LnkL']['FontFamily']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['adm']['mnu']['LnkL']['FontWeight']     = 'bold';
  $rudweb_skin['adm']['mnu']['LnkL']['FontSize']       = $rudweb_skin['FontSize'];
  $rudweb_skin['adm']['mnu']['LnkV']['BgColor']        = $rudweb_skin['FontColor'];
  $rudweb_skin['adm']['mnu']['LnkV']['FontColor']      = $rudweb_skin['BgColor'];
  $rudweb_skin['adm']['mnu']['LnkV']['TextDecoration'] = 'none';
  $rudweb_skin['adm']['mnu']['LnkV']['FontFamily']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['adm']['mnu']['LnkV']['FontWeight']     = 'bold';
  $rudweb_skin['adm']['mnu']['LnkV']['FontSize']       = $rudweb_skin['FontSize'];
  $rudweb_skin['adm']['mnu']['LnkH']['BgColor']        = $rudweb_skin['FontColor'];
  $rudweb_skin['adm']['mnu']['LnkH']['FontColor']      = $rudweb_skin['BgColor'];
  $rudweb_skin['adm']['mnu']['LnkH']['TextDecoration'] = 'underline';
  $rudweb_skin['adm']['mnu']['LnkH']['FontFamily']     = $rudweb_skin['FontFamily'];
  $rudweb_skin['adm']['mnu']['LnkH']['FontWeight']     = 'bold';
  $rudweb_skin['adm']['mnu']['LnkH']['FontSize']       = $rudweb_skin['FontSize'];
  $rudweb_skin['adm']['mnu']['Lnk']['BgColor']         = $rudweb_skin['FontColor'];
  $rudweb_skin['adm']['mnu']['Lnk']['FontColor']       = $rudweb_skin['Color1'];
  $rudweb_skin['adm']['mnu']['Lnk']['TextDecoration']  = 'none';
  $rudweb_skin['adm']['mnu']['Lnk']['FontFamily']      = $rudweb_skin['FontFamily'];
  $rudweb_skin['adm']['mnu']['Lnk']['FontWeight']      = 'bold';
  $rudweb_skin['adm']['mnu']['Lnk']['FontSize']        = $rudweb_skin['FontSize'];
}
?>