<?php
/*
./inc/langs/en/lang.inc.php
09:26 2007-12-18
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once './../../lib/404.php';}

// WINDOW STATUS
$rudweb_ln['WinStatDef']      = _RUDWEB_WSTT;
$rudweb_ln['WinStatOver']     = _RUDWEB_WSTT;
$rudweb_ln['WinStatOut']      = _RUDWEB_WSTT;

// VISITORS STATISTICS
$rudweb_ln['total_visitors']  = "total visitors";
$rudweb_ln['visitors']        = "visitors";
$rudweb_ln['unique_visitors'] = "unique visitors";
$rudweb_ln['online_visitors'] = "visitor(s) online";
$rudweb_ln['since']           = "since";

//LOGIN STATUS & MESSAGES
$rudweb_ln['lgnst'][1] = "not submitted";
$rudweb_ln['lgnst'][2] = "empty strings";
$rudweb_ln['lgnst'][3] = "invalid login";
$rudweb_ln['lgnst'][4] = "account disabled";
$rudweb_ln['lgnst'][5] = "logged in ok";
$rudweb_ln['lgnst'][6] = "logged in";
$rudweb_ln['lgnst'][7] = "verification failed";

$rudweb_ln['level']    = "access level: ";
$rudweb_ln['logout']   = "logout";

// ERROR MESSAGES
$rudweb_ln['err']['0'] = "Oops! Page not found!";
$rudweb_ln['err']['1'] = "Sorry! You don't have permission to access this page!";

// COPYRIGHT
$rudweb_ln['cpy']['1'] = "Copyright";
$rudweb_ln['cpy']['2'] = "All rights reserved";
$rudweb_ln['cpy']['3'] = "Web presence by";

// COMMENTS
$rudweb_ln['cmnts']['comments'] = "comments";

// BLOG RELATED
$rudweb_ln['blg']['postedby'] = "Posted by ";
$rudweb_ln['blg']['on']       = " on ";

// ADMIN FORMS
$rudweb_ln['adm']['mnu_tt']       = "Menu Title:";
$rudweb_ln['adm']['mnu_trg']      = "Target:";
$rudweb_ln['adm']['new_pic']      = "New Picture:";
$rudweb_ln['adm']['new_content']  = "ADD CONTENT";
$rudweb_ln['adm']['new_link']     = "ADD LINK";
$rudweb_ln['adm']['new_page']     = "ADD PAGE";
$rudweb_ln['adm']['cnt_tt']       = "Content Title:";
$rudweb_ln['adm']['cnt_stt']      = "Content Subtitle:";
$rudweb_ln['adm']['cnt_kw']       = "Content Keywords:";
$rudweb_ln['adm']['cnt_dsc']      = "Content Description:";
$rudweb_ln['adm']['cnt_mod']      = "Modify content";
$rudweb_ln['adm']['cnt_del']      = "Delete content";
$rudweb_ln['adm']['cnt_add']      = "Add content";
$rudweb_ln['adm']['lnk_tt']       = "Link Title:";
$rudweb_ln['adm']['lnk_url']      = "Link URL:";
$rudweb_ln['adm']['lnk_trg']      = "Link Target:";
$rudweb_ln['adm']['lnk_dsc']      = "Link Description:";
$rudweb_ln['adm']['cnt_add_lnk']  = "Add link";
$rudweb_ln['adm']['pg_name']      = "Page name:";
$rudweb_ln['adm']['cnt_add_pg']   = "Add page";
$rudweb_ln['adm']['pic_del']      = "Delete picture:";
$rudweb_ln['adm']['pic_repl']     = "Replace picture:";
$rudweb_ln['adm']['ftr_sup']      = "Description:";
$rudweb_ln['adm']['ftr_valid']    = "Validity:";
$rudweb_ln['adm']['cal_months']   = "'January','February','March','April','May','June','July','August','September','October','November','December'";
$rudweb_ln['adm']['cal_days']     = "'S','M','T','W','T','F','S'";
$rudweb_ln['adm']['cal_today']    = "Today";

$rudweb_ln['adm']['ftrmodstat0']  = "Featured module is disabled.";
$rudweb_ln['adm']['ftrmodstat00'] = "Modify your config file to enable it.";
$rudweb_ln['adm']['ftrmodstat01'] = "Enable.";
$rudweb_ln['adm']['ftrmodstat1']  = "Featured module is enabled.";
$rudweb_ln['adm']['ftrmodstat11'] = "Modify your config file to disable it.";
$rudweb_ln['adm']['ftrmodstat12'] = "Modify your config file to change it.";
$rudweb_ln['adm']['ftrmodstat10'] = "Disable.";
$rudweb_ln['adm']['ftrlmttxt1']   = "Number of items to display: ";
$rudweb_ln['adm']['ftrdel']       = "Delete this one: ";


$rudweb_ln['adm']['ftrlmt']       = "Save";
$rudweb_ln['adm']['ftrmod']       = "Save Changes";
$rudweb_ln['adm']['ftrnew']       = "Add new";
?>