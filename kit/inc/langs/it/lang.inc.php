<?php
/*
./inc/langs/it/lang.inc.php
18:38 2008-04-12
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
$rudweb_ln['err']['tt']           = 'OOPS!';
$rudweb_ln['err']['0']            = "Oops! Page not found!";
$rudweb_ln['err']['1']            = "Sorry! You don't have permission to access this page!";
$rudweb_ln['err']['itemadd']['1'] = 'Field ' .$rudweb_ln['prod']['pname'] . ' is blank!';
$rudweb_ln['err']['itemadd']['2'] = 'Please select an item from the list!';
$rudweb_ln['err']['itemadd']['3'] = 'Please fill out empty fields!';

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
$rudweb_ln['adm']['nopic']        = "NO PICTURE"; // NO SPECIAL CHARS HERE !
$rudweb_ln['adm']['new_pic']      = "New Picture:";
$rudweb_ln['adm']['pic_tmb']      = "thumbnail";
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

//USER MODULE
$rudweb_ln['usr']['alreadyreg']    = 'What? One Account is not enough for you?';
$rudweb_ln['usr']['retuser']       = "Returning User";
$rudweb_ln['usr']['newuser']       = "New User";
$rudweb_ln['usr']['signup']        = "Sign Up";

$rudweb_ln['usr']['newuserreg']    = "New User Registration";
$rudweb_ln['usr']['usrfirstname']  = "First Name";
$rudweb_ln['usr']['usrmiddlename'] = "Middle Name";
$rudweb_ln['usr']['usrlastname']   = "Last Name";
$rudweb_ln['usr']['usrphone']      = "Phone Number";
$rudweb_ln['usr']['usraddress']    = "Postal Address";
$rudweb_ln['usr']['usrcountry']    = "Country";
$rudweb_ln['usr']['usremail1']     = "E-Mail Address";
$rudweb_ln['usr']['usremail2']     = "E-Mail Address again";
$rudweb_ln['usr']['usrpass1']      = "Desired Password";
$rudweb_ln['usr']['usrpass2']      = "Desired Password again";
$rudweb_ln['usr']['usrprefln']     = "Preffered Website Language";
$rudweb_ln['usr']['usrsubscribe1'] = "Subscribe";
$rudweb_ln['usr']['usrsubscribe2'] = "I would like to subscribe";
$rudweb_ln['usr']['usragree1']     = "Agree";
$rudweb_ln['usr']['usragree2']     = "I agree to the";
$rudweb_ln['usr']['usragree3']     = "terms and conditions";
$rudweb_ln['usr']['usragree4']     = "of the website";
$rudweb_ln['usr']['usrverif']      = "Verification";
$rudweb_ln['usr']['regerr1']       = "First Name field is blank!";
$rudweb_ln['usr']['regerr2']       = "Last Name field is blank!";
$rudweb_ln['usr']['regerr3']       = "Country field is blank!";
$rudweb_ln['usr']['regerr4']       = "Email field is blank!";
$rudweb_ln['usr']['regerr5']       = "Email address is not valid!";
$rudweb_ln['usr']['regerr6']       = "Email addresses do not match!";
$rudweb_ln['usr']['regerr7']       = "Password field is empty!";
$rudweb_ln['usr']['regerr8']       = "Password is to short!";
$rudweb_ln['usr']['regerr9']       = "Passwords do not match!";
$rudweb_ln['usr']['regerr10']      = "You have to agree!";
$rudweb_ln['usr']['regerr11']      = "Image verification failed!";
$rudweb_ln['usr']['regerr12']      = "Email address is already in our database!";
$rudweb_ln['usr']['regerr13']      = "You have already applied for an account! Please check your email for details how to activate it!";
$rudweb_ln['usr']['regerr14']      = "You have already applied for an account but we weren't unable to send you the activation email!";

$rudweb_ln['usr']['accact']        = "New Account Activation";
$rudweb_ln['usr']['aaerror1']      = "Invalid authorization code.";
$rudweb_ln['usr']['aaerror2']      = "Perhaps the account is already activated?";

$rudweb_ln['usr']['lostpass']      = "Lost Password?";
$rudweb_ln['usr']['lostpsubmit']   = "Next";
$rudweb_ln['usr']['lpaerror1']     = "Invalid authorization code.";
$rudweb_ln['usr']['lpaerror2']     = "Perhaps it has expired?";

// CATALOG
$rudweb_ln['cat']['noitems']       = 'No Items';
$rudweb_ln['cat']['quantity']      = 'Quantity';

// PAGINATION
$rudweb_ln['pgnav']['first']       = '&#60;&#60;';
$rudweb_ln['pgnav']['prev']        = '&#60;';
$rudweb_ln['pgnav']['next']        = '&#62;';
$rudweb_ln['pgnav']['last']        = '&#62;&#62;';
$rudweb_ln['pgnav']['page']        = 'page ';
$rudweb_ln['pgnav']['of']          = ' of ';

//ADMINISTRATION
$rudweb_ln['adm']['adm']           = 'Administration';
$rudweb_ln['adm']['add']           = 'Add';
$rudweb_ln['adm']['mod']           = 'Modify';
$rudweb_ln['adm']['del']           = 'Delete';
$rudweb_ln['adm']['sel']           = 'Select';
$rudweb_ln['adm']['chl']           = 'characters left';
$rudweb_ln['adm']['viewrights']    = 'Viewing rights level';
$rudweb_ln['adm']['level']         = 'Level';
$rudweb_ln['adm']['lvl'][0]        = 'Visitors';
$rudweb_ln['adm']['lvl'][1]        = 'Users';
$rudweb_ln['adm']['lvl'][2]        = 'VIP Users';
$rudweb_ln['adm']['lvl'][3]        = 'Administrators';
$rudweb_ln['adm']['lvl'][4]        = 'Owner';
$rudweb_ln['adm']['lvl'][5]        = 'Root';
?>