<?php
/**
* rw
*
* <I> ./rwlib/rw.inc.php</I>
* <BR>Main class
*
* @author     Radu Maier <radu@rudisoft.net>
* @copyright  Copyright (c) 2008, Radu Maier
* @license    http://opensource.org/licenses/gpl-3.0.html
* @version    15:43 2009-01-12
* @since      10:29 2008-12-11
* @access     public
* @package    RudWEb
* @subpackage Core
* @todo       stuff
*/

/**
* Prevent direct file access
*/
if(!defined('_RW_VALID')) {require_once('./index.php'); exit;}

/**
* rw_Core
*
* Basic engine functions
*
* @author     Radu Maier <radu@rudisoft.net>
* @package    RudWEb
* @subpackage Core
*/
class rw_Core
{
  public function rwInit($exts)
  {
    /**
    * Error reporting
    */
    _APP_CFG_ERRORS ? error_reporting(E_ALL | E_STRICT) : error_reporting(0);
    /**
    * Load error handler
    */
    require_once(_RW_DIR_LIB.'err.inc.php');
    /**
    * Initialize custom error handler
    */
    rw_Error_handler::init();
    /**
    * Default timezone
    */
    date_default_timezone_set(_APP_TIMEZONE);
    /**
    * Initialize session and user login
    */
    try
    {
      /**
      * Load extensions
      */
      $ext = $this->rwLoadExt($exts);
      
      /**
      * Load database file
      */
      if(_APP_CFG_DATABASE)
      {
        require_once(_RW_DIR_LIB.'db.inc.php');
      }
      /**
      * SEO URLS
      */
      $SeoURLs = $this->rwActivateExt($ext, 'SeoURLs');
      $SeoURLs->extDo();
    
      $usr_status = _APP_CFG_SESSIONS ? $this->rwSession() : 1;
    }
    catch (Exception $e)
    {
      echo $this->rwErr($e);
      exit;
    }
    /**
    * Load language file
    */
    $ln = _APP_CFG_SESSIONS ? $_SESSION[_APP_PRE.'_usr_lang'] : _APP_LANG;
    require_once(_RW_DIR_LANG.$ln.'/lang.inc.php');
    require_once(_APP_DIR_LANG.$ln.'/lang.inc.php');
    
    return array($ext, $usr_status, $lang);
  }
  /**
  * Main error display
  */
  public function rwErr($e)
  {
    $err = _APP_CFG_ERRORS ? $this->rwErrDev($e) : $this->rwErrUsr($e);
    return $err;
  }
  /**
  * Developer error display
  */
  public function rwErrDev($e)
  {
    $err  = '<b>msg:</b> ' .  $e->getMessage() . '<br />';
    $err .= '<b>code:</b> ' . $e->getCode() . '<br />';
    $err .= '<b>file:</b> ' . $e->getFile() . '<br />';
    $err .= '<b>line:</b> ' . $e->getLine() . '<br />';
    return $err;
  }
  /**
  * User error display
  */
  public function rwErrUsr($e)
  {
    $err = 'Oops!';
    return $err;
  }
  /**
  * New database type switcher
  *
  * Requires: DATABASE
  */
  public function rwDbConnect()
  {
    /**
    * Allowed database types
    */
    if(in_array(_APP_DB_TYPE, array('mysql', 'postgresql')))
    {
      /**
      * Required database class name
      */
      $dbClass = 'rw_DB_'._APP_DB_TYPE;
      /**
      * Include database class
      */
      require_once(_RW_DIR_LIB.'db.'._APP_DB_TYPE.'.inc.php');
      return new $dbClass(_APP_DB_HOST, _APP_DB_PORT, _APP_DB_USER, _APP_DB_PASS, _APP_DB_NAME);
    }
  }
  /**
  * Start session
  *
  * Requires: SESSIONS
  */
  public function rwSession()
  {
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
        $usr_status = _APP_CFG_USERS ? $this->rwLoginUser() : 1;
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
  /**
  * Login functionality
  *
  * Requires: USERS, DATABASE, SESSIONS
  */
  public function rwLoginUser()
  {
    if((isset($_POST[_APP_PRE.'_login']) && isset($_POST[_APP_PRE.'_pass'])) && isset($_POST[_APP_PRE.'_captcha']))
    {
      if(isset($_SESSION[_APP_PRE.'_token']) && isset($_POST[_APP_PRE.'_token']))
      {
        if($_POST[_APP_PRE.'_token'] === $_SESSION[_APP_PRE.'_token'])
        {
          if(_APP_CFG_DATABASE && _APP_CFG_SESSIONS)
          {
            $udb = $this->rwDbConnect();
          }
          else
          {
            trigger_error('User functionality requires session and database functionality. Please check your configuration file!', E_USER_ERROR);
          }
          $login = $this->rwFilterInput($_POST[_APP_PRE.'_login'],$udb);
          $pass = md5($_POST[_APP_PRE.'_pass']);
          $captcha = strtoupper($this->rwFilterInput($_POST[_APP_PRE.'_captcha'],$udb));
          if(($login != '' && $pass != '') && $captcha != '')
          {
            $verif = str_split($_SESSION[_APP_PRE.'_token'], 5);
            $verif = strtoupper(strrev($verif[0]));
            if($captcha == $verif)
            {
              $r = $udb->dbQuerySimpleSelect('*', _APP_PRE.'_set_usr', "usr_mail = '{$login}' AND usr_pass = '{$pass}'", '1');
              $t = $r->dbNumRows();
              if($t == 1)
              {
                /**
                * We have a match, log in the user
                */
                $rw = $r->dbFetchArray();
                if($rw['usr_status'] == 0)
                {
                  /**
                  * Account is suspended
                  */
                  return 4;
                }
                else
                {
                  /**
                  * Keep existing data but get a new session id
                  */
                  session_regenerate_id(TRUE);
                  /**
                  * Issue authorization
                  */
                  $_SESSION[_APP_PRE.'_auth'] = 'ok';
                  /**
                  * Unique security token
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
                  $_SESSION[_APP_PRE.'_usr_id'] = $rw['usr_id'];
                  /**
                  * User level
                  */
                  $_SESSION[_APP_PRE.'_usr_lvl'] = $rw['usr_level'];
                  /**
                  * User alias
                  */
                  $_SESSION[_APP_PRE.'_usr_alias'] = $rw['usr_name'];
                  /**
                  * User full name
                  */
                  $_SESSION[_APP_PRE.'_usr_name'] = $rw['usr_fname'] . ' ' . $rw['usr_lname'];
                  /**
                  * Default language
                  */
                  $_SESSION[_APP_PRE.'_usr_lang'] = $rw['usr_lang'];
                  /**
                  * Default skin
                  */
                  $_SESSION[_APP_PRE.'_skin_dir'] = _APP_DIR_SKINS.$rw['usr_skin'];
                  $_SESSION[_APP_PRE.'_skin_url'] = _APP_WWW.'skins/'.$rw['usr_skin'].'/';
                  /**
                  * Get previous login data
                  */
                  $rL = $udb->dbQuerySimpleSelect('log_date, log_time', _APP_PRE.'_var_log', "log_id = (SELECT MAX(log_id) FROM "._APP_PRE."_var_log WHERE usr_id = '{$_SESSION[_APP_PRE.'_usr_id']}')");
                  $tL = $rL->dbNumRows();
                  if($tL == 1)
                  {
                    $rwL = $rL->dbFetchArray();
                    /**
                    * Last login date
                    */
                    $_SESSION[_APP_PRE.'_ldate'] = $rwL['log_date'];
                    /**
                    * Last login time
                    */
                    $_SESSION[_APP_PRE.'_ltime'] = $rwL['log_time'];
                  }
                  else
                  {
                    /**
                    * Last login date (this is the first login)
                    */
                    $_SESSION[_APP_PRE.'_ldate'] = '0000-00-00';
                    /**
                    * Last login time
                    */
                    $_SESSION[_APP_PRE.'_ltime'] = '0000-00-00';
                  }
                  /**
                  * Count total logins
                  */
                  $rT = $udb->dbQuerySimpleSelect('COUNT(log_id)', _APP_PRE.'_var_log', "usr_id = '{$_SESSION[_APP_PRE.'_usr_id']}'");
                  $_SESSION[_APP_PRE.'_ltotal'] = $rT->dbFetchResult() + 1;
                  /**
                  * Record current login
                  */
                  $udb->dbQuery("INSERT INTO "._APP_PRE."_var_log (usr_id, log_date, log_time) VALUES('{$_SESSION[_APP_PRE.'_usr_id']}', '{$_SESSION[_APP_PRE.'_vdate']}', '{$_SESSION[_APP_PRE.'_vtime']}')");
                  /**
                  * Close database connection
                  */
                  $udb->dbClose();
                  /**
                  * Redirect to the same page we came from to avoid double submit
                  */
                  if(isset($_SERVER['HTTP_HOST']) && $_SERVER['HTTP_HOST'] != '')
                  {
                    $redirect = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                  }
                  else if(isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] != '')
                  {
                    $redirect = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
                  }
                  else
                  {
                    $redirect = _APP_URL;
                  }
                  header("Location: ".$redirect);
                  exit;
                }
              }
              else
              {
                /**
                * Invalid login
                */
                session_regenerate_id(TRUE);
                $_SESSION[_APP_PRE.'_token'] = md5(uniqid(rand(), TRUE));
                return 3;
              }
            }
            else
            {
              /**
              * Invalid security code
              */
              session_regenerate_id(TRUE);
              $_SESSION[_APP_PRE.'_token'] = md5(uniqid(rand(), TRUE));
              return 7;
            }
          }
          else
          {
            /**
            * Empty fields
            */
            session_regenerate_id(TRUE);
            $_SESSION[_APP_PRE.'_token'] = md5(uniqid(rand(), TRUE));
            return 2;
          }
        }
        else
        {
          /**
          * Multiple submits ???
          */
          session_regenerate_id(TRUE);
          $_SESSION[_APP_PRE.'_token'] = md5(uniqid(rand(), TRUE));
          return 8;
        }
      }
      else
      {
        /**
        * Hacker attack
        */
        session_regenerate_id(TRUE);
        $_SESSION[_APP_PRE.'_token'] = md5(uniqid(rand(), TRUE));
        return 9;
      }
    }
    else
    {
      /**
      * Not submitted
      */
      return 1;
    }
  }
  /**
  * Logout functionality
  *
  * Requires: USERS, SESSIONS
  */
  public function rwLogoutUser()
  {
    if(_APP_CFG_SESSIONS === TRUE)
    {
      $_SESSION = array();
      session_destroy();
      /**
      * Cookie removal code from php manual user commentss
      */
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
    }
    header("Location: "._APP_WWW);
    exit;
  }
  /**
  * Filter user input
  */
  public function rwFilterInput($input,$sql=NULL,$blockTags=TRUE)
  {
    if(get_magic_quotes_gpc()) {$input = stripslashes($input);}
    /**
    * Unwanted chars
    */
    $unwanted = array('\\', '');
    $input = str_replace($unwanted, ' ', $input);
    /**
    * Block tags
    */
    if($blockTags === TRUE)
    {
      $input = str_replace('&lt;', '&#60;', $input);
      $input = str_replace('&gt;', '&#62;', $input);
      $input = str_replace('<', '&#60;', $input);
      $input = str_replace('>', '&#62;', $input);
    }
    if($sql)
    {
      $input = $sql->dbEscapeString($input);
    }
    else
    {
      /**
      * The string will not be used in a query so we just strip any nasty characters
      */
      $bad = array();
      $bad[] = '`';
      $bad[] = "'";
      $bad[] = '"';
      $bad[] = '\\\b';
      $bad[] = '\\\n';
      $bad[] = '\\\r';
      $bad[] = '\\\t';
      $bad[] = '\?';
      $bad[] = '!';
      $bad[] = '\~';
      $bad[] = '\@';
      $bad[] = '\#';
      $bad[] = '\$';
      $bad[] = '\%';
      $bad[] = '\^';
      $bad[] = '\&';
      $bad[] = '\*';
      $bad[] = '\(';
      $bad[] = '\)';
      $bad[] = '\-';
      $bad[] = '\+';
      $bad[] = '\=';
      $bad[] = '\{';
      $bad[] = '\[';
      $bad[] = '\}';
      $bad[] = '\]';
      $bad[] = '\:';
      $bad[] = '\;';
      $bad[] = '\,';
      $bad[] = '\.';
      $bad[] = '\|';
      $input = str_replace($bad, '', $input);
    }
    return trim($input);
  }
  /**
  * Check for a valid email address
  */
  public function rwCheckEmail($email)
  {
    return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i", $email));
  }
  /**
  * Load extensions.
  *
  * @return mixed loaded extensions
  */
  public function rwLoadExt($exts)
  {
    require_once(_RW_DIR_LIB.'ext.inc.php');
    $texts = count($exts);
    for($i=0;$i<$texts;$i++)
    {
      $extName = trim($exts[$i]);
      $extClass = 'rw_Ext_'.$extName;
      if(is_file(_APP_EXT_LOCAL_DIR.$extName.'.ext.php'))
      {
        require_once(_APP_EXT_LOCAL_DIR.$extName.'.ext.php');
        $ext[$extName]['global'] = 0;
      }
      else if(is_file(_APP_EXT_GLOBAL_DIR.$extName.'.ext.php'))
      {
        require_once(_APP_EXT_GLOBAL_DIR.$extName.'.ext.php');
        $ext[$extName]['global'] = 1;
      }
      else
      {
        trigger_error('Extension '.$extName . ' is missing.', E_USER_ERROR);
      }
    }
    return $ext;
  }
  /**
  * Activate extension
  *
  * @return mixed result
  */
  public function rwActivateExt($extList, $extName)
  {
    if(is_array($extList[$extName]))
    {
      $class = 'rw_Ext_'.$extName;
      return new $class();
    }
    else
    {
      trigger_error('Extension '.$extName.' is not loaded.', E_USER_ERROR);
    }
  }
}
?>