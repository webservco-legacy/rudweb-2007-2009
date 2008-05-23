<?php
/*
./logout.php
12:50 2008-04-05
*/
error_reporting(E_ALL);

define("_RUDWEB_PUBFIL", TRUE);

require_once './inc/config.inc.php';
require_once './inc/rudwebc.inc.php';
require_once _RUDWEB_INC_DIR . 'rudwebf.inc.php';

// START SESSION
//session_cache_limiter ('public, must-revalidate');
session_cache_limiter('nocache');
session_cache_expire(600); //minutes
ini_set("session.gc_maxlifetime","36000"); //seconds
session_start();
//if (isset($_SESSION[_RUDWEB_PRE.'usr_logged_in'])) {
    $_SESSION = array();
    /* // cookie removal code by  powerlord at spamless dot vgmusic dot com */
    //powerlord at spamless dot vgmusic dot com (19-Nov-2002 07:41)
    //This code might be a bit better for expiring session cookies, in case your domain, path, and/or secure session cookie settings are changed.
    $CookieInfo = session_get_cookie_params();
    if ( (empty($CookieInfo['domain'])) && (empty($CookieInfo['secure'])) ) {
        setcookie(session_name(), '', time()-3600, $CookieInfo['path']);
    }
    elseif (empty($CookieInfo['secure'])) {
        setcookie(session_name(), '', time()-3600, $CookieInfo['path'], $CookieInfo['domain']);
    }
    else {
        setcookie(session_name(), '', time()-3600, $CookieInfo['path'], $CookieInfo['domain'], $CookieInfo['secure']);
    }
    unset($_COOKIE[session_name()]);
    /* // cookie removal code by  powerlord at spamless dot vgmusic dot com */

    session_destroy();
    $redirect = _RUDWEB_SITE_URL;
    header("Location: $redirect");
    exit;
//}
//else {
    //session_destroy();
    //$site_root = _RUDWEB_SITE_URL . _RUDWEB_INDEX_PHP;
    //header("Location: $site_root");
    //exit;
//}   
?>