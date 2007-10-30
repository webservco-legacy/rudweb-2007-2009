<?php
/*
theme.inc.php
13:33 28.10.2007
*/
if(!defined('_UBWS_PUBFIL')) {require_once '../../lib/404.php';}

/* ********** ********** ********** BODY ********** ********** ********** */
// BODY
$ubws_theme_BgColor         = "#FFFFFF";
$ubws_theme_FontColor       = "#000000";
$ubws_theme_MarginTop       = "5";
$ubws_theme_MarginBottom    = "5";
$ubws_theme_MarginLeft      = "5";
$ubws_theme_MarginRight     = "5";
$ubws_theme_TextAlign       = "left";
$ubws_theme_TextDecoration  = "none";
$ubws_theme_FontFamily      = "verdana, arial, helvetica, sans-serif";
$ubws_theme_FontWeight      = "normal";
$ubws_theme_FontSize        = "12";
$ubws_theme_Measure         = "px";
$ubws_theme_BorderColor     = "#000000";
$ubws_theme_BorderStyle     = "dashed";
$ubws_theme_BorderTop       = "0";
$ubws_theme_BorderBottom    = "0";
$ubws_theme_BorderLeft      = "0";
$ubws_theme_BorderRight     = "0";
$ubws_theme_PaddingTop      = "0";
$ubws_theme_PaddingBottom   = "0";
$ubws_theme_PaddingLeft     = "0";
$ubws_theme_PaddingRight    = "0";

/* ********** ********** ********** DEFAULT LINKS ********** ********** ********** */
// LINK
$ubws_theme_LnkLBgColor        = "#FFFFFF";
$ubws_theme_LnkLFontColor      = "#000000";
$ubws_theme_LnkLTextDecoration = "underline";
$ubws_theme_LnkLFontFamily     = "verdana, arial, helvetica, sans-serif";
$ubws_theme_LnkLFontWeight     = "normal";
$ubws_theme_LnkLFontSize       = "12";
// VISITED LINK
$ubws_theme_LnkVBgColor        = "#FFFFFF";
$ubws_theme_LnkVFontColor      = "#000000";
$ubws_theme_LnkVTextDecoration = "line-through";
$ubws_theme_LnkVFontFamily     = "verdana, arial, helvetica, sans-serif";
$ubws_theme_LnkVFontWeight     = "normal";
$ubws_theme_LnkVFontSize       = "12";
// HOVER LINK
$ubws_theme_LnkHBgColor        = "#FFFFFF";
$ubws_theme_LnkHFontColor      = "#000000";
$ubws_theme_LnkHTextDecoration = "none";
$ubws_theme_LnkHFontFamily     = "verdana, arial, helvetica, sans-serif";
$ubws_theme_LnkHFontWeight     = "normal";
$ubws_theme_LnkHFontSize       = "12";

/* ********** ********** ********** MENUS ********** ********** ********** */
//MENU LEVEL 0
$ubws_theme_mnu_hdr['0']               = "{";
$ubws_theme_mnu_pre['0']               = "[";
$ubws_theme_mnu_suf['0']               = "]";
$ubws_theme_mnu_sep['0']               = "|";
$ubws_theme_mnu_ftr['0']               = "}";
// MENU LINK
$ubws_theme_mnuLnkLBgColor['0']        = "#FFFFFF";
$ubws_theme_mnuLnkLFontColor['0']      = "#000000";
$ubws_theme_mnuLnkLTextDecoration['0'] = "underline";
$ubws_theme_mnuLnkLFontFamily['0']     = "verdana, arial, helvetica, sans-serif";
$ubws_theme_mnuLnkLFontWeight['0']     = "normal";
$ubws_theme_mnuLnkLFontSize['0']       = "12";
// MENU VISITED LINK
$ubws_theme_mnuLnkVBgColor['0']        = "#FFFFFF";
$ubws_theme_mnuLnkVFontColor['0']      = "#000000";
$ubws_theme_mnuLnkVTextDecoration['0'] = "underline";
$ubws_theme_mnuLnkVFontFamily['0']     = "verdana, arial, helvetica, sans-serif";
$ubws_theme_mnuLnkVFontWeight['0']     = "normal";
$ubws_theme_mnuLnkVFontSize['0']       = "12";
// MENU HOVER LINK
$ubws_theme_mnuLnkHBgColor['0']        = "#FFFFFF";
$ubws_theme_mnuLnkHFontColor['0']      = "#000000";
$ubws_theme_mnuLnkHTextDecoration['0'] = "none";
$ubws_theme_mnuLnkHFontFamily['0']     = "verdana, arial, helvetica, sans-serif";
$ubws_theme_mnuLnkHFontWeight['0']     = "normal";
$ubws_theme_mnuLnkHFontSize['0']       = "12";

//MENU LEVEL 1
$ubws_theme_mnu_hdr['1']               = "{";
$ubws_theme_mnu_pre['1']               = "[";
$ubws_theme_mnu_suf['1']               = "]";
$ubws_theme_mnu_sep['1']               = "|";
$ubws_theme_mnu_ftr['1']               = "}";
// MENU LINK
$ubws_theme_mnuLnkLBgColor['1']        = "#FFFFFF";
$ubws_theme_mnuLnkLFontColor['1']      = "#000000";
$ubws_theme_mnuLnkLTextDecoration['1'] = "underline";
$ubws_theme_mnuLnkLFontFamily['1']     = "verdana, arial, helvetica, sans-serif";
$ubws_theme_mnuLnkLFontWeight['1']     = "normal";
$ubws_theme_mnuLnkLFontSize['1']       = "12";
// MENU VISITED LINK
$ubws_theme_mnuLnkVBgColor['1']        = "#FFFFFF";
$ubws_theme_mnuLnkVFontColor['1']      = "#000000";
$ubws_theme_mnuLnkVTextDecoration['1'] = "underline";
$ubws_theme_mnuLnkVFontFamily['1']     = "verdana, arial, helvetica, sans-serif";
$ubws_theme_mnuLnkVFontWeight['1']     = "normal";
$ubws_theme_mnuLnkVFontSize['1']       = "12";
// MENU HOVER LINK
$ubws_theme_mnuLnkHBgColor['1']        = "#FFFFFF";
$ubws_theme_mnuLnkHFontColor['1']      = "#000000";
$ubws_theme_mnuLnkHTextDecoration['1'] = "none";
$ubws_theme_mnuLnkHFontFamily['1']     = "verdana, arial, helvetica, sans-serif";
$ubws_theme_mnuLnkHFontWeight['1']     = "normal";
$ubws_theme_mnuLnkHFontSize['1']       = "12";

//MENU LEVEL 2
$ubws_theme_mnu_hdr['2']               = "{";
$ubws_theme_mnu_pre['2']               = "[";
$ubws_theme_mnu_suf['2']               = "]";
$ubws_theme_mnu_sep['2']               = "|";
$ubws_theme_mnu_ftr['2']               = "}";
// MENU LINK
$ubws_theme_mnuLnkLBgColor['2']        = "#FFFFFF";
$ubws_theme_mnuLnkLFontColor['2']      = "#000000";
$ubws_theme_mnuLnkLTextDecoration['2'] = "underline";
$ubws_theme_mnuLnkLFontFamily['2']     = "verdana, arial, helvetica, sans-serif";
$ubws_theme_mnuLnkLFontWeight['2']     = "normal";
$ubws_theme_mnuLnkLFontSize['2']       = "12";
// MENU VISITED LINK
$ubws_theme_mnuLnkVBgColor['2']        = "#FFFFFF";
$ubws_theme_mnuLnkVFontColor['2']      = "#000000";
$ubws_theme_mnuLnkVTextDecoration['2'] = "underline";
$ubws_theme_mnuLnkVFontFamily['2']     = "verdana, arial, helvetica, sans-serif";
$ubws_theme_mnuLnkVFontWeight['2']     = "normal";
$ubws_theme_mnuLnkVFontSize['2']       = "12";
// MENU HOVER LINK
$ubws_theme_mnuLnkHBgColor['2']        = "#FFFFFF";
$ubws_theme_mnuLnkHFontColor['2']      = "#000000";
$ubws_theme_mnuLnkHTextDecoration['2'] = "none";
$ubws_theme_mnuLnkHFontFamily['2']     = "verdana, arial, helvetica, sans-serif";
$ubws_theme_mnuLnkHFontWeight['2']     = "normal";
$ubws_theme_mnuLnkHFontSize['2']       = "12";

//MENU LEVEL 3
$ubws_theme_mnu_hdr['3']               = "{";
$ubws_theme_mnu_pre['3']               = "[";
$ubws_theme_mnu_suf['3']               = "]";
$ubws_theme_mnu_sep['3']               = "|";
$ubws_theme_mnu_ftr['3']               = "}";
// MENU LINK
$ubws_theme_mnuLnkLBgColor['3']        = "#FFFFFF";
$ubws_theme_mnuLnkLFontColor['3']      = "#000000";
$ubws_theme_mnuLnkLTextDecoration['3'] = "underline";
$ubws_theme_mnuLnkLFontFamily['3']     = "verdana, arial, helvetica, sans-serif";
$ubws_theme_mnuLnkLFontWeight['3']     = "normal";
$ubws_theme_mnuLnkLFontSize['3']       = "12";
// MENU VISITED LINK
$ubws_theme_mnuLnkVBgColor['3']        = "#FFFFFF";
$ubws_theme_mnuLnkVFontColor['3']      = "#000000";
$ubws_theme_mnuLnkVTextDecoration['3'] = "underline";
$ubws_theme_mnuLnkVFontFamily['3']     = "verdana, arial, helvetica, sans-serif";
$ubws_theme_mnuLnkVFontWeight['3']     = "normal";
$ubws_theme_mnuLnkVFontSize['3']       = "12";
// MENU HOVER LINK
$ubws_theme_mnuLnkHBgColor['3']        = "#FFFFFF";
$ubws_theme_mnuLnkHFontColor['3']      = "#000000";
$ubws_theme_mnuLnkHTextDecoration['3'] = "none";
$ubws_theme_mnuLnkHFontFamily['3']     = "verdana, arial, helvetica, sans-serif";
$ubws_theme_mnuLnkHFontWeight['3']     = "normal";
$ubws_theme_mnuLnkHFontSize['3']       = "12";

//MENU LEVEL 4
$ubws_theme_mnu_hdr['4']               = "{";
$ubws_theme_mnu_pre['4']               = "[";
$ubws_theme_mnu_suf['4']               = "]";
$ubws_theme_mnu_sep['4']               = "|";
$ubws_theme_mnu_ftr['4']               = "}";
// MENU LINK
$ubws_theme_mnuLnkLBgColor['4']        = "#FFFFFF";
$ubws_theme_mnuLnkLFontColor['4']      = "#000000";
$ubws_theme_mnuLnkLTextDecoration['4'] = "underline";
$ubws_theme_mnuLnkLFontFamily['4']     = "verdana, arial, helvetica, sans-serif";
$ubws_theme_mnuLnkLFontWeight['4']     = "normal";
$ubws_theme_mnuLnkLFontSize['4']       = "12";
// MENU VISITED LINK
$ubws_theme_mnuLnkVBgColor['4']        = "#FFFFFF";
$ubws_theme_mnuLnkVFontColor['4']      = "#000000";
$ubws_theme_mnuLnkVTextDecoration['4'] = "underline";
$ubws_theme_mnuLnkVFontFamily['4']     = "verdana, arial, helvetica, sans-serif";
$ubws_theme_mnuLnkVFontWeight['4']     = "normal";
$ubws_theme_mnuLnkVFontSize['4']       = "12";
// MENU HOVER LINK
$ubws_theme_mnuLnkHBgColor['4']        = "#FFFFFF";
$ubws_theme_mnuLnkHFontColor['4']      = "#000000";
$ubws_theme_mnuLnkHTextDecoration['4'] = "none";
$ubws_theme_mnuLnkHFontFamily['4']     = "verdana, arial, helvetica, sans-serif";
$ubws_theme_mnuLnkHFontWeight['4']     = "normal";
$ubws_theme_mnuLnkHFontSize['4']       = "12";

/* ********** ********** ********** PAGE CONTENT ********** ********** ********** */
// PAGE CONTENT
$ubws_theme_cntType               = "DIV";

$ubws_theme_cntHdr                = "";
$ubws_theme_cntPre                = "\n<".$ubws_theme_cntType." CLASS=\"main_content\">";
$ubws_theme_cntSuf                = "</".$ubws_theme_cntType.">\n";
$ubws_theme_cntFtr                = "";

$ubws_theme_cntTxtPre             = "\n<BLOCKQUOTE>";
$ubws_theme_cntTxtSuf             = "\n</BLOCKQUOTE>";

$ubws_theme_cntWidth              = "450";
$ubws_theme_cntHeight             = "500";
$ubws_theme_cntDisplay            = "inline";
$ubws_theme_cntFloat              = "left";
$ubws_theme_cntClear              = "none";
$ubws_theme_cntBgColor            = "#FFFFcc";
$ubws_theme_cntFontColor          = "#000000";
$ubws_theme_cntMarginTop          = "0";
$ubws_theme_cntMarginBottom       = "0";
$ubws_theme_cntMarginLeft         = "0";
$ubws_theme_cntMarginRight        = "0";
$ubws_theme_cntTextAlign          = "left";
$ubws_theme_cntTextDecoration     = "none";
$ubws_theme_cntFontFamily         = "verdana, arial, helvetica, sans-serif";
$ubws_theme_cntFontWeight         = "normal";
$ubws_theme_cntFontSize           = "12";
$ubws_theme_cntMeasure            = "px";
$ubws_theme_cntBorderColor        = "#000000";
$ubws_theme_cntBorderStyle        = "dashed";
$ubws_theme_cntBorderTop          = "0";
$ubws_theme_cntBorderBottom       = "0";
$ubws_theme_cntBorderLeft         = "0";
$ubws_theme_cntBorderRight        = "0";
$ubws_theme_cntPaddingTop         = "0";
$ubws_theme_cntPaddingBottom      = "0";
$ubws_theme_cntPaddingLeft        = "0";
$ubws_theme_cntPaddingRight       = "0";

// CONTENT TITLE
$ubws_theme_H1FontColor       = "#000000";
$ubws_theme_H1TextDecoration  = "none";
$ubws_theme_H1FontFamily      = "verdana, arial, helvetica, sans-serif";
$ubws_theme_H1FontWeight      = "bold";
$ubws_theme_H1FontSize        = "18";

// CONTENT SUBTITLE
$ubws_theme_H2FontColor       = "#000000";
$ubws_theme_H2TextDecoration  = "none";
$ubws_theme_H2FontFamily      = "verdana, arial, helvetica, sans-serif";
$ubws_theme_H2FontWeight      = "normal";
$ubws_theme_H2FontSize        = "16";

// CONTENT LINK
$ubws_theme_cntLnkLBgColor        = "#FFFFFF";
$ubws_theme_cntLnkLFontColor      = "#000000";
$ubws_theme_cntLnkLTextDecoration = "underline";
$ubws_theme_cntLnkLFontFamily     = "verdana, arial, helvetica, sans-serif";
$ubws_theme_cntLnkLFontWeight     = "normal";
$ubws_theme_cntLnkLFontSize       = "12";
// CONTENT VISITED LINK
$ubws_theme_cntLnkVBgColor        = "#FFFFFF";
$ubws_theme_cntLnkVFontColor      = "#000000";
$ubws_theme_cntLnkVTextDecoration = "underline";
$ubws_theme_cntLnkVFontFamily     = "verdana, arial, helvetica, sans-serif";
$ubws_theme_cntLnkVFontWeight     = "normal";
$ubws_theme_cntLnkVFontSize       = "12";
// CONTENT HOVER LINK
$ubws_theme_cntLnkHBgColor        = "#FFFFFF";
$ubws_theme_cntLnkHFontColor      = "#000000";
$ubws_theme_cntLnkHTextDecoration = "none";
$ubws_theme_cntLnkHFontFamily     = "verdana, arial, helvetica, sans-serif";
$ubws_theme_cntLnkHFontWeight     = "normal";
$ubws_theme_cntLnkHFontSize       = "12";

/* ********** ********** ********** PAGE CONTENT PICTURES ********** ********** ********** */
// CONTENT PICTURES - 0 - PANEL
$ubws_theme_cntPicType['0']           = "DIV";

$ubws_theme_cntPicHdr['0']            = "\n<".$ubws_theme_cntPicType['0']." CLASS=\"pic0\">\n";
$ubws_theme_cntPicPre['0']            = "";
$ubws_theme_cntPicSep['0']            = "\n<BR><BR>";
$ubws_theme_cntPicSuf['0']            = "";
$ubws_theme_cntPicFtr['0']            = "\n</" . $ubws_theme_cntPicType['0'] . ">\n";

$ubws_theme_cntPicWidth['0']          = "110";
$ubws_theme_cntPicMax['0']            = "100"; /* maximum image size --- make sure it's smaller than  $ubws_theme_cntPicWidth */
$ubws_theme_cntPicHeight['0']         = "500";
$ubws_theme_cntPicDisplay['0']        = "block";
$ubws_theme_cntPicFloat['0']          = "left";
$ubws_theme_cntPicClear['0']          = "none";
$ubws_theme_cntPicBgColor['0']        = "#FFFFDD";
$ubws_theme_cntPicFontColor['0']      = "#000000";
$ubws_theme_cntPicMarginTop['0']      = "0";
$ubws_theme_cntPicMarginBottom['0']   = "0";
$ubws_theme_cntPicMarginLeft['0']     = "0";
$ubws_theme_cntPicMarginRight['0']    = "0";
$ubws_theme_cntPicTextAlign['0']      = "center";
$ubws_theme_cntPicTextDecoration['0'] = "none";
$ubws_theme_cntPicFontFamily['0']     = "verdana, arial, helvetica, sans-serif";
$ubws_theme_cntPicFontWeight['0']     = "normal";
$ubws_theme_cntPicFontSize['0']       = "12";
$ubws_theme_cntPicMeasure['0']        = "px";
$ubws_theme_cntPicBorderColor['0']    = "#000000";
$ubws_theme_cntPicBorderStyle['0']    = "dashed";
$ubws_theme_cntPicBorderTop['0']      = "0";
$ubws_theme_cntPicBorderBottom['0']   = "0";
$ubws_theme_cntPicBorderLeft['0']     = "0";
$ubws_theme_cntPicBorderRight['0']    = "0";
$ubws_theme_cntPicPaddingTop['0']     = "0";
$ubws_theme_cntPicPaddingBottom['0']  = "0";
$ubws_theme_cntPicPaddingLeft['0']    = "0";
$ubws_theme_cntPicPaddingRight['0']   = "0";

// CONTENT PICTURES - 1 - TOP
$ubws_theme_cntPicType['1']           = "DIV";

$ubws_theme_cntPicHdr['1']            = "\n";
$ubws_theme_cntPicPre['1']            = "";
$ubws_theme_cntPicSep['1']            = "&#160;";
$ubws_theme_cntPicSuf['1']            = "";
$ubws_theme_cntPicFtr['1']            = "\n";

$ubws_theme_cntPicWidth['1']          = "150";
$ubws_theme_cntPicMax['1']            = "80"; /* maximum image size --- make sure it's smaller than  $ubws_theme_cntPicWidth */
$ubws_theme_cntPicHeight['1']         = "500";
$ubws_theme_cntPicDisplay['1']        = "block";
$ubws_theme_cntPicFloat['1']          = "left";
$ubws_theme_cntPicClear['1']          = "none";
$ubws_theme_cntPicBgColor['1']        = "#FFFFDD";
$ubws_theme_cntPicFontColor['1']      = "#000000";
$ubws_theme_cntPicMarginTop['1']      = "0";
$ubws_theme_cntPicMarginBottom['1']   = "0";
$ubws_theme_cntPicMarginLeft['1']     = "0";
$ubws_theme_cntPicMarginRight['1']    = "0";
$ubws_theme_cntPicTextAlign['1']      = "left";
$ubws_theme_cntPicTextDecoration['1'] = "none";
$ubws_theme_cntPicFontFamily['1']     = "verdana, arial, helvetica, sans-serif";
$ubws_theme_cntPicFontWeight['1']     = "normal";
$ubws_theme_cntPicFontSize['1']       = "12";
$ubws_theme_cntPicMeasure['1']        = "px";
$ubws_theme_cntPicBorderColor['1']    = "#000000";
$ubws_theme_cntPicBorderStyle['1']    = "dashed";
$ubws_theme_cntPicBorderTop['1']      = "0";
$ubws_theme_cntPicBorderBottom['1']   = "0";
$ubws_theme_cntPicBorderLeft['1']     = "0";
$ubws_theme_cntPicBorderRight['1']    = "0";
$ubws_theme_cntPicPaddingTop['1']     = "0";
$ubws_theme_cntPicPaddingBottom['1']  = "0";
$ubws_theme_cntPicPaddingLeft['1']    = "0";
$ubws_theme_cntPicPaddingRight['1']   = "0";

// CONTENT PICTURES - 2 - AFTER TITLE
$ubws_theme_cntPicType['2']           = "DIV";

$ubws_theme_cntPicHdr['2']            = "\n<BR>";
$ubws_theme_cntPicPre['2']            = "";
$ubws_theme_cntPicSep['2']            = "&#160;";
$ubws_theme_cntPicSuf['2']            = "";
$ubws_theme_cntPicFtr['2']            = "\n<BR>";

$ubws_theme_cntPicWidth['2']          = "150";
$ubws_theme_cntPicMax['2']            = "80"; /* maximum image size --- make sure it's smaller than  $ubws_theme_cntPicWidth */
$ubws_theme_cntPicHeight['2']         = "500";
$ubws_theme_cntPicDisplay['2']        = "block";
$ubws_theme_cntPicFloat['2']          = "left";
$ubws_theme_cntPicClear['2']          = "none";
$ubws_theme_cntPicBgColor['2']        = "#FFFFDD";
$ubws_theme_cntPicFontColor['2']      = "#000000";
$ubws_theme_cntPicMarginTop['2']      = "0";
$ubws_theme_cntPicMarginBottom['2']   = "0";
$ubws_theme_cntPicMarginLeft['2']     = "0";
$ubws_theme_cntPicMarginRight['2']    = "0";
$ubws_theme_cntPicTextAlign['2']      = "left";
$ubws_theme_cntPicTextDecoration['2'] = "none";
$ubws_theme_cntPicFontFamily['2']     = "verdana, arial, helvetica, sans-serif";
$ubws_theme_cntPicFontWeight['2']     = "normal";
$ubws_theme_cntPicFontSize['2']       = "12";
$ubws_theme_cntPicMeasure['2']        = "px";
$ubws_theme_cntPicBorderColor['2']    = "#000000";
$ubws_theme_cntPicBorderStyle['2']    = "dashed";
$ubws_theme_cntPicBorderTop['2']      = "0";
$ubws_theme_cntPicBorderBottom['2']   = "0";
$ubws_theme_cntPicBorderLeft['2']     = "0";
$ubws_theme_cntPicBorderRight['2']    = "0";
$ubws_theme_cntPicPaddingTop['2']     = "0";
$ubws_theme_cntPicPaddingBottom['2']  = "0";
$ubws_theme_cntPicPaddingLeft['2']    = "0";
$ubws_theme_cntPicPaddingRight['2']   = "0";

// CONTENT PICTURES - 3 - AFTER SUBTITLE
$ubws_theme_cntPicType['3']           = "DIV";

$ubws_theme_cntPicHdr['3']            = "\n<BR>";
$ubws_theme_cntPicPre['3']            = "";
$ubws_theme_cntPicSep['3']            = "&#160;";
$ubws_theme_cntPicSuf['3']            = "";
$ubws_theme_cntPicFtr['3']            = "\n<BR>";

$ubws_theme_cntPicWidth['3']          = "150";
$ubws_theme_cntPicMax['3']            = "80"; /* maximum image size --- make sure it's smaller than  $ubws_theme_cntPicWidth */
$ubws_theme_cntPicHeight['3']         = "500";
$ubws_theme_cntPicDisplay['3']        = "block";
$ubws_theme_cntPicFloat['3']          = "left";
$ubws_theme_cntPicClear['3']          = "none";
$ubws_theme_cntPicBgColor['3']        = "#FFFFDD";
$ubws_theme_cntPicFontColor['3']      = "#000000";
$ubws_theme_cntPicMarginTop['3']      = "0";
$ubws_theme_cntPicMarginBottom['3']   = "0";
$ubws_theme_cntPicMarginLeft['3']     = "0";
$ubws_theme_cntPicMarginRight['3']    = "0";
$ubws_theme_cntPicTextAlign['3']      = "left";
$ubws_theme_cntPicTextDecoration['3'] = "none";
$ubws_theme_cntPicFontFamily['3']     = "verdana, arial, helvetica, sans-serif";
$ubws_theme_cntPicFontWeight['3']     = "normal";
$ubws_theme_cntPicFontSize['3']       = "12";
$ubws_theme_cntPicMeasure['3']        = "px";
$ubws_theme_cntPicBorderColor['3']    = "#000000";
$ubws_theme_cntPicBorderStyle['3']    = "dashed";
$ubws_theme_cntPicBorderTop['3']      = "0";
$ubws_theme_cntPicBorderBottom['3']   = "0";
$ubws_theme_cntPicBorderLeft['3']     = "0";
$ubws_theme_cntPicBorderRight['3']    = "0";
$ubws_theme_cntPicPaddingTop['3']     = "0";
$ubws_theme_cntPicPaddingBottom['3']  = "0";
$ubws_theme_cntPicPaddingLeft['3']    = "0";
$ubws_theme_cntPicPaddingRight['3']   = "0";

// CONTENT PICTURES - 4 - BOTTOM
$ubws_theme_cntPicType['4']           = "DIV";

$ubws_theme_cntPicHdr['4']            = "\n<BR>";
$ubws_theme_cntPicPre['4']            = "";
$ubws_theme_cntPicSep['4']            = "&#160;";
$ubws_theme_cntPicSuf['4']            = "";
$ubws_theme_cntPicFtr['4']            = "\n<BR>";

$ubws_theme_cntPicWidth['4']          = "150";
$ubws_theme_cntPicMax['4']            = "80"; /* maximum image size --- make sure it's smaller than  $ubws_theme_cntPicWidth */
$ubws_theme_cntPicHeight['4']         = "500";
$ubws_theme_cntPicDisplay['4']        = "block";
$ubws_theme_cntPicFloat['4']          = "left";
$ubws_theme_cntPicClear['4']          = "none";
$ubws_theme_cntPicBgColor['4']        = "#FFFFDD";
$ubws_theme_cntPicFontColor['4']      = "#000000";
$ubws_theme_cntPicMarginTop['4']      = "0";
$ubws_theme_cntPicMarginBottom['4']   = "0";
$ubws_theme_cntPicMarginLeft['4']     = "0";
$ubws_theme_cntPicMarginRight['4']    = "0";
$ubws_theme_cntPicTextAlign['4']      = "left";
$ubws_theme_cntPicTextDecoration['4'] = "none";
$ubws_theme_cntPicFontFamily['4']     = "verdana, arial, helvetica, sans-serif";
$ubws_theme_cntPicFontWeight['4']     = "normal";
$ubws_theme_cntPicFontSize['4']       = "12";
$ubws_theme_cntPicMeasure['4']        = "px";
$ubws_theme_cntPicBorderColor['4']    = "#000000";
$ubws_theme_cntPicBorderStyle['4']    = "dashed";
$ubws_theme_cntPicBorderTop['4']      = "0";
$ubws_theme_cntPicBorderBottom['4']   = "0";
$ubws_theme_cntPicBorderLeft['4']     = "0";
$ubws_theme_cntPicBorderRight['4']    = "0";
$ubws_theme_cntPicPaddingTop['4']     = "0";
$ubws_theme_cntPicPaddingBottom['4']  = "0";
$ubws_theme_cntPicPaddingLeft['4']    = "0";
$ubws_theme_cntPicPaddingRight['4']   = "0";

/* ********** ********** ********** COPYRIGHT NOTICE ********** ********** ********** */
// COPYRIGHT NOTICE
$ubws_theme_cpyType           = "DIV";

$ubws_theme_cpyPre            = "\n<".$ubws_theme_cpyType." CLASS=\"copyright\">";
$ubws_theme_cpySuf            = "\n</".$ubws_theme_cpyType.">";

$ubws_theme_cpyWidth          = "760";
$ubws_theme_cpyHeight         = "20";
$ubws_theme_cpyDisplay        = "inline";
$ubws_theme_cpyFloat          = "left";
$ubws_theme_cpyClear          = "both";
$ubws_theme_cpyBgColor        = "#CCFFFF";
$ubws_theme_cpyFontColor      = "#000000";
$ubws_theme_cpyMarginTop      = "0";
$ubws_theme_cpyMarginBottom   = "0";
$ubws_theme_cpyMarginLeft     = "0";
$ubws_theme_cpyMarginRight    = "0";
$ubws_theme_cpyTextAlign      = "left";
$ubws_theme_cpyTextDecoration = "none";
$ubws_theme_cpyFontFamily     = "verdana, arial, helvetica, sans-serif";
$ubws_theme_cpyFontWeight     = "normal";
$ubws_theme_cpyFontSize       = "10";
$ubws_theme_cpyMeasure        = "px";
$ubws_theme_cpyBorderColor    = "#000000";
$ubws_theme_cpyBorderStyle    = "dashed";
$ubws_theme_cpyBorderTop      = "0";
$ubws_theme_cpyBorderBottom   = "0";
$ubws_theme_cpyBorderLeft     = "0";
$ubws_theme_cpyBorderRight    = "0";
$ubws_theme_cpyPaddingTop     = "0";
$ubws_theme_cpyPaddingBottom  = "0";
$ubws_theme_cpyPaddingLeft    = "0";
$ubws_theme_cpyPaddingRight   = "0";

// COPYRIGHT LINK
$ubws_theme_cpyLnkLBgColor        = "#FFFFFF";
$ubws_theme_cpyLnkLFontColor      = "#000000";
$ubws_theme_cpyLnkLTextDecoration = "underline";
$ubws_theme_cpyLnkLFontFamily     = "verdana, arial, helvetica, sans-serif";
$ubws_theme_cpyLnkLFontWeight     = "normal";
$ubws_theme_cpyLnkLFontSize       = "10";
// COPYRIGHT VISITED LINK
$ubws_theme_cpyLnkVBgColor        = "#FFFFFF";
$ubws_theme_cpyLnkVFontColor      = "#000000";
$ubws_theme_cpyLnkVTextDecoration = "underline";
$ubws_theme_cpyLnkVFontFamily     = "verdana, arial, helvetica, sans-serif";
$ubws_theme_cpyLnkVFontWeight     = "normal";
$ubws_theme_cpyLnkVFontSize       = "10";
// COPYRIGHT HOVER LINK
$ubws_theme_cpyLnkHBgColor        = "#FFFFFF";
$ubws_theme_cpyLnkHFontColor      = "#000000";
$ubws_theme_cpyLnkHTextDecoration = "none";
$ubws_theme_cpyLnkHFontFamily     = "verdana, arial, helvetica, sans-serif";
$ubws_theme_cpyLnkHFontWeight     = "normal";
$ubws_theme_cpyLnkHFontSize       = "10";

/* ********** ********** ********** USER MODULE ********** ********** ********** */
// USER MODULE
$mod_user_hdr = "\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\">\n<TR>";
$mod_user_pre = "\n<TD>";
$mod_user_suf = "</TD>";
$mod_user_sep = "";
$mod_user_ftr = "\n</TR>\n</TABLE>";

/* ********** ********** ********** LANGUAGE MODULE ********** ********** ********** */
// LANGUAGE MODULE
$mod_lang_hdr = "\n<HR>";
$mod_lang_pre = "&#160;";
$mod_lang_suf = "&#160;";
$mod_lang_sep = "";
$mod_lang_ftr = "\n<HR>";

/* ********** ********** ********** FEATURED MODULE ********** ********** ********** */
// FEATURED MODULE
$ubws_theme_ftrType               = "DIV";

$ubws_theme_ftrHdr                = "\n<".$ubws_theme_ftrType." CLASS=\"featured\">";
$ubws_theme_ftrFtr                = "</".$ubws_theme_ftrType.">\n<BR CLEAR=\"all\">";

$ubws_theme_ftrSep                = "\n<BR>";

$ubws_theme_ftrLimit              = "3"; // how many modules to display
$ubws_theme_ftrTtl                = "30"; // how many characters for title
$ubws_theme_ftrPic                = "100"; // max picture size
$ubws_theme_ftrSup                = "30"; // how many characters for description

$ubws_theme_ftrWidth              = "200";
$ubws_theme_ftrHeight             = "500";
$ubws_theme_ftrDisplay            = "inline";
$ubws_theme_ftrFloat              = "none";
$ubws_theme_ftrClear              = "none";
$ubws_theme_ftrBgColor            = "#ccffcc";
$ubws_theme_ftrFontColor          = "#000000";
$ubws_theme_ftrMarginTop          = "0";
$ubws_theme_ftrMarginBottom       = "0";
$ubws_theme_ftrMarginLeft         = "0";
$ubws_theme_ftrMarginRight        = "0";
$ubws_theme_ftrTextAlign          = "center";
$ubws_theme_ftrTextDecoration     = "none";
$ubws_theme_ftrFontFamily         = "verdana, arial, helvetica, sans-serif";
$ubws_theme_ftrFontWeight         = "normal";
$ubws_theme_ftrFontSize           = "12";
$ubws_theme_ftrMeasure            = "px";
$ubws_theme_ftrBorderColor        = "#000000";
$ubws_theme_ftrBorderStyle        = "dashed";
$ubws_theme_ftrBorderTop          = "0";
$ubws_theme_ftrBorderBottom       = "0";
$ubws_theme_ftrBorderLeft         = "0";
$ubws_theme_ftrBorderRight        = "0";
$ubws_theme_ftrPaddingTop         = "0";
$ubws_theme_ftrPaddingBottom      = "0";
$ubws_theme_ftrPaddingLeft        = "0";
$ubws_theme_ftrPaddingRight       = "0";

$ubws_theme_ftrFType              = "DIV";

$ubws_theme_ftrFPre               = "\n<".$ubws_theme_ftrFType." CLASS=\"featuredf\">";
$ubws_theme_ftrFSuf               = "</".$ubws_theme_ftrFType.">\n";

$ubws_theme_ftrFTTPre             = "<DIV>";
$ubws_theme_ftrFTTSuf             = "</DIV>";
$ubws_theme_ftrFPCPre             = "<DIV>";
$ubws_theme_ftrFPCSuf             = "</DIV>";
$ubws_theme_ftrFDSPre             = "<DIV>";
$ubws_theme_ftrFDSSuf             = "</DIV>";

$ubws_theme_ftrFWidth             = "200";
$ubws_theme_ftrFHeight            = "200";
$ubws_theme_ftrFFloat             = "none";
$ubws_theme_ftrFClear             = "none";
$ubws_theme_ftrFBgColor           = "#ccddcc";
$ubws_theme_ftrFFontColor         = "#000000";
$ubws_theme_ftrFMarginTop         = "0";
$ubws_theme_ftrFMarginBottom      = "0";
$ubws_theme_ftrFMarginLeft        = "0";
$ubws_theme_ftrFMarginRight       = "0";
$ubws_theme_ftrFTextAlign         = "center";
$ubws_theme_ftrFTextDecoration    = "none";
$ubws_theme_ftrFFontFamily        = "verdana, arial, helvetica, sans-serif";
$ubws_theme_ftrFFontWeight        = "normal";
$ubws_theme_ftrFFontSize          = "10";
$ubws_theme_ftrFMeasure           = "px";
$ubws_theme_ftrFBorderColor       = "#000000";
$ubws_theme_ftrFBorderStyle       = "dashed";
$ubws_theme_ftrFBorderTop         = "0";
$ubws_theme_ftrFBorderBottom      = "0";
$ubws_theme_ftrFBorderLeft        = "0";
$ubws_theme_ftrFBorderRight       = "0";
$ubws_theme_ftrFPaddingTop        = "0";
$ubws_theme_ftrFPaddingBottom     = "0";
$ubws_theme_ftrFPaddingLeft       = "0";
$ubws_theme_ftrFPaddingRight      = "0";

// FEATURED LINK
$ubws_theme_ftrLnkLBgColor        = "#ccddcc";
$ubws_theme_ftrLnkLFontColor      = "#000000";
$ubws_theme_ftrLnkLTextDecoration = "underline";
$ubws_theme_ftrLnkLFontFamily     = "verdana, arial, helvetica, sans-serif";
$ubws_theme_ftrLnkLFontWeight     = "bold";
$ubws_theme_ftrLnkLFontSize       = "10";
// FEATURED VISITED LINK
$ubws_theme_ftrLnkVBgColor        = "#ccddcc";
$ubws_theme_ftrLnkVFontColor      = "#000000";
$ubws_theme_ftrLnkVTextDecoration = "underline";
$ubws_theme_ftrLnkVFontFamily     = "verdana, arial, helvetica, sans-serif";
$ubws_theme_ftrLnkVFontWeight     = "bold";
$ubws_theme_ftrLnkVFontSize       = "10";
// FEATURED HOVER LINK
$ubws_theme_ftrLnkHBgColor        = "#ccddcc";
$ubws_theme_ftrLnkHFontColor      = "#000000";
$ubws_theme_ftrLnkHTextDecoration = "none";
$ubws_theme_ftrLnkHFontFamily     = "verdana, arial, helvetica, sans-serif";
$ubws_theme_ftrLnkHFontWeight     = "bold";
$ubws_theme_ftrLnkHFontSize       = "10";
?>