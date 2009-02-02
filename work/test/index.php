<?php
/**
* index
*
* <I> ./index.php</I>
* <BR>Main file that serves all requests
*
* @author     Radu Maier <radu@rudisoft.net>
* @copyright  Copyright (c) 2008, Radu Maier
* @license    http://opensource.org/licenses/gpl-3.0.html
* @version    11:35 2009-02-01
* @since      18:31 2008-12-03
* @access     public
* @package    RudWEb
* @subpackage Sandbox
* @todo       stuff
*/

/**
* Prevent unauthorized access to other files
*/
define('_RW_VALID', TRUE);

/**
* Load configuration files
*/
if(is_readable('./cfg/cfg.inc.php')) {require_once('./cfg/cfg.inc.php');} else {
  $location = $_SERVER['HTTP_HOST'] . rtrim(dirname($_SERVER['PHP_SELF']), '/\\') . '/' . 'error.php';
  header("Location: http://$location");
  exit;
}
/**
* Initialize main application core
*/
$appCore = new app_Core;
list($ext, $usr_status, $lang) = $appCore->rwInit($exts);

/**
* Controller start
*/
try
{
  if(is_readable(_APP_DIR_INC.'ctrl.inc.php')) {require_once(_APP_DIR_INC.'ctrl.inc.php');} else {trigger_error('controller missing', E_USER_ERROR);}
}
catch (Exception $e)
{
  echo $appCore->rwErr($e);
  exit;
}
/**
* Controller end
*/

/**
* Viewer start
*/
try
{
  if(is_readable(_RW_DIR_LIB.'view.inc.php')) {require_once(_RW_DIR_LIB.'view.inc.php');} else {trigger_error('viewer missing', E_USER_ERROR);}
  app_Viewer::_display($cnt['skin'], $atpl);
}
catch (Exception $e)
{
  echo $appCore->rwErr($e);
  exit;
}
/**
* Viewer end
*/
  
rw_Error_handler::restore();
?>