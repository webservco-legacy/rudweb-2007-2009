<?php
/*
lang.inc.php
14:38 29.09.2007
*/
if(!defined('_UBWS_PUBFIL')) {require_once '../../lib/404.php';}

// WINDOW STATUS
$ubws_lnWinStatDef  = _UBWS_WSTT;
$ubws_lnWinStatOver = _UBWS_WSTT;
$ubws_lnWinStatOut  = _UBWS_WSTT;

//LOGIN STATUS & MESSAGES
$ubws_lnLgStat[1] = "not submitted";
$ubws_lnLgStat[2] = "empty strings";
$ubws_lnLgStat[3] = "invalid username password";
$ubws_lnLgStat[4] = "account disabled";
$ubws_lnLgStat[5] = "logged in ok";
$ubws_lnLgStat[6] = "already logged in";

$ubws_lnLgLogoutLnk = "logout";

// MODULES
$ubws_lnLangMod = "language";
$ubws_lnUserMod = "user";
$ubws_lnDisMod1 = "The ";
$ubws_lnDisMod2 = " module is disabled!";
?>