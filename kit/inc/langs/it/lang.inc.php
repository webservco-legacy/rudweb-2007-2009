<?php
/*
./inc/langs/it/lang.inc.php
13:56 2007-12-28
*/
if(!defined('_RSWEB_PUBFIL')) {require_once './../../lib/404.php';}

// WINDOW STATUS
$rsweb_ln['WinStatDef']      = _RSWEB_WSTT;
$rsweb_ln['WinStatOver']     = _RSWEB_WSTT;
$rsweb_ln['WinStatOut']      = _RSWEB_WSTT;

// VISITORS STATISTICS
$rsweb_ln['total_visitors']  = "total visitors";
$rsweb_ln['visitors']        = "visitors";
$rsweb_ln['unique_visitors'] = "unique visitors";
$rsweb_ln['online_visitors'] = "visitor(s) online";
$rsweb_ln['since']           = "since";

//LOGIN STATUS & MESSAGES
$rsweb_ln['lgnst'][1] = "not submitted";
$rsweb_ln['lgnst'][2] = "empty strings";
$rsweb_ln['lgnst'][3] = "invalid login";
$rsweb_ln['lgnst'][4] = "account disabled";
$rsweb_ln['lgnst'][5] = "logged in ok";
$rsweb_ln['lgnst'][6] = "logged in";
$rsweb_ln['lgnst'][7] = "verification failed";

$rsweb_ln['level']    = "access level: ";
$rsweb_ln['logout']   = "logout";

// ERROR MESSAGES
$rsweb_ln['err']['0'] = "Oops! Page not found!";
$rsweb_ln['err']['1'] = "Sorry! You don't have permission to access this page!";

// COPYRIGHT
$rsweb_ln['cpy']['1'] = "Copyright";
$rsweb_ln['cpy']['2'] = "All rights reserved";
$rsweb_ln['cpy']['3'] = "Web presence by";

// COMMENTS
$rsweb_ln['cmnts']['comments'] = "comments";

// BLOG RELATED
$rsweb_ln['blg']['postedby'] = "Posted by ";
$rsweb_ln['blg']['on']       = " on ";

// ADMIN FORMS
$rsweb_ln['adm']['mnu_tt']       = "Menu Title:";
$rsweb_ln['adm']['mnu_trg']      = "Target:";
$rsweb_ln['adm']['new_pic']      = "New Picture:";
$rsweb_ln['adm']['new_content']  = "ADD CONTENT";
$rsweb_ln['adm']['new_link']     = "ADD LINK";
$rsweb_ln['adm']['new_page']     = "ADD PAGE";
$rsweb_ln['adm']['cnt_tt']       = "Content Title:";
$rsweb_ln['adm']['cnt_stt']      = "Content Subtitle:";
$rsweb_ln['adm']['cnt_kw']       = "Content Keywords:";
$rsweb_ln['adm']['cnt_dsc']      = "Content Description:";
$rsweb_ln['adm']['cnt_mod']      = "Modify content";
$rsweb_ln['adm']['cnt_del']      = "Delete content";
$rsweb_ln['adm']['cnt_add']      = "Add content";
$rsweb_ln['adm']['lnk_tt']       = "Link Title:";
$rsweb_ln['adm']['lnk_url']      = "Link URL:";
$rsweb_ln['adm']['lnk_trg']      = "Link Target:";
$rsweb_ln['adm']['lnk_dsc']      = "Link Description:";
$rsweb_ln['adm']['cnt_add_lnk']  = "Add link";
$rsweb_ln['adm']['pg_name']      = "Page name:";
$rsweb_ln['adm']['cnt_add_pg']   = "Add page";
$rsweb_ln['adm']['pic_del']      = "Delete picture:";
$rsweb_ln['adm']['pic_repl']     = "Replace picture:";
$rsweb_ln['adm']['ftr_sup']      = "Description:";
$rsweb_ln['adm']['ftr_valid']    = "Validity:";
$rsweb_ln['adm']['cal_months']   = "'January','February','March','April','May','June','July','August','September','October','November','December'";
$rsweb_ln['adm']['cal_days']     = "'S','M','T','W','T','F','S'";
$rsweb_ln['adm']['cal_today']    = "Today";

$rsweb_ln['adm']['ftrmodstat0']  = "Featured module is disabled.";
$rsweb_ln['adm']['ftrmodstat00'] = "Modify your config file to enable it.";
$rsweb_ln['adm']['ftrmodstat01'] = "Enable.";
$rsweb_ln['adm']['ftrmodstat1']  = "Featured module is enabled.";
$rsweb_ln['adm']['ftrmodstat11'] = "Modify your config file to disable it.";
$rsweb_ln['adm']['ftrmodstat12'] = "Modify your config file to change it.";
$rsweb_ln['adm']['ftrmodstat10'] = "Disable.";
$rsweb_ln['adm']['ftrlmttxt1']   = "Number of items to display: ";
$rsweb_ln['adm']['ftrdel']       = "Delete this one: ";


$rsweb_ln['adm']['ftrlmt']       = "Save";
$rsweb_ln['adm']['ftrmod']       = "Save Changes";
$rsweb_ln['adm']['ftrnew']       = "Add new";
?>