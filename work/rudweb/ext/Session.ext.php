<?php
/**
* Session
*
* <I> ./ext/Session.ext.php</I>
* <BR>Provide session functionality.
* <BR>Requires: _APP_CFG_SESSIONS
*
* @author     Radu Maier <radu@rudisoft.net>
* @copyright  Copyright (c) 2008, Radu Maier
* @license    http://opensource.org/licenses/gpl-3.0.html
* @version    09:47 2009-02-01
* @since      09:47 2009-02-01
* @access     public
* @package    RudWEb
* @subpackage Extensions
* @todo       stuff
*/

/**
* Prevent direct file access
*/
if(!defined('_RW_VALID')) {require_once('./index.php'); exit;}

class rw_Ext_Session extends rw_Ext_global implements rw_iExt
{
  /**
  * Constructor
  * Set extension information and call parent constructor
  *
  */
  function __construct()
  {
    /**
    * Extension info
    */
    $about['name'] = 'Session';
    $about['desc'] = 'Provide session functionality.';
    $about['ver']  = '09:48 2009-02-01';
    $about['auth'] = 'Radu Maier';
    $about['web']  = 'http://www.rudisoft.net';
    $about['mail'] = 'rudisoft@rudisoft.net';
    $about['deps'] = array();
    parent::__construct($about);
  }
  /**
  * Start session
  *
  * @param array $ext loaded extensions
  * @return $usr_status user status
  */
  public function rwSession($ext)
  {
    /**
    * Headers and stuff
    */
    session_cache_limiter('public, must-revalidate');
    session_cache_expire(600); //minutes (10hrs)
    ini_set("session.gc_maxlifetime","36000"); //seconds (1 hours)
    session_start();
    header("ETag: PUB" . time());
    header("Last-Modified: " . gmdate("D, d M Y H:i:s", time()-10) . " GMT");
    header("Expires: " . gmdate("D, d M Y H:i:s", time() + 5) . " GMT");
    header("Pragma: no-cache");
    header("Cache-Control: max-age=1, s-maxage=1, no-cache, must-revalidate");
    /**
    * First load of the page?
    */
    if(!isset($_SESSION[_APP_PRE.'_token']))
    {
      /**
      * Unique token for security
      */
      $_SESSION[_APP_PRE.'_token'] = md5(uniqid(rand(), TRUE));
      /**
      * Visit date
      */
      $_SESSION[_APP_PRE.'_vdate'] = date("Y-m-d");
      /**
      * Visit time
      */
      $_SESSION[_APP_PRE.'_vtime'] = date("H:i:s");
      /**
      * User id
      */
      $_SESSION[_APP_PRE.'_usr_id'] = 0;
      /**
      * User level
      */
      $_SESSION[_APP_PRE.'_usr_lvl'] = 0;
      /**
      * User alias
      */
      $_SESSION[_APP_PRE.'_usr_alias'] = 'Guest';
      /**
      * User full name
      */
      $_SESSION[_APP_PRE.'_usr_name'] = 'Anonymous';
      /**
      * Default language
      */
      $_SESSION[_APP_PRE.'_usr_lang'] = _APP_LANG;
      /**
      * Default skin
      */
      $_SESSION[_APP_PRE.'_skin_dir'] = _APP_DIR_SKINS._APP_SKIN;
      $_SESSION[_APP_PRE.'_skin_url'] = _APP_WWW.'skins/'._APP_SKIN.'/';
      /**
      * Default user status - not logged in
      */
      $usr_status = 1;
    }
    else
    {
      /**
      * If user is not logged in include login functionality
      */
      if(!isset($_SESSION[_APP_PRE.'_auth']))
      {
        /**
        * user status based on login result
        */
        if(_APP_CFG_USERS)
        {
          $core = new rw_Core;
          $users = $core->rwActivateExt($ext, 'Users');
          $usr_status = $users->rwLoginUser();
        }
        else
        {
          $usr_status = 1;
        }
      }
      else if(isset($_SESSION[_APP_PRE.'_auth']) && $_SESSION[_APP_PRE.'_auth'] == 'ok')
      {
        /**
        * User status - logged in
        */
        $usr_status = 6;
      }
    }
    return $usr_status;
  }
}
?>