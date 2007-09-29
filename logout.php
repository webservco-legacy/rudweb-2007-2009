<?php
/*
logout.php
19:20 29.09.2007
*/
error_reporting(E_ALL);

define('_UBWS_PUBFIL', TRUE);

require_once './inc/config.inc.php';
require_once _UBWS_INC_DIR . 'functions.inc.php';

session_start();
if (isset($_SESSION[_UBWS_PRE.'usr_logged_in'])) {
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
    //$site_root = _UBWS_SITE_URL . 'index.php?page=iesire';
    $site_root = _UBWS_SITE_URL . 'index.php';
    header("Location: $site_root");
    exit;
}
else {
    session_destroy();
    $site_root = SITE_ROOT . 'index.php';
    header("Location: $site_root");
    exit;
}   
?>