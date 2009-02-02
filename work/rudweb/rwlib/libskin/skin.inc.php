<?php
/**
* skin
*
* <I> ./rwlib/skin.inc.php</I>
* <BR>Skin classes
*
* @author     Radu Maier <radu@rudisoft.net>
* @copyright  Copyright (c) 2008, Radu Maier
* @license    http://opensource.org/licenses/gpl-3.0.html
* @version    12:18 2009-02-01
* @since      16:08 2008-12-09
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
* rw_iSkin
*
* Methods to be implemented by all skin classes
*
* @author     Radu Maier <radu@rudisoft.net>
* @package    RudWEb
* @subpackage Core
*/
interface rw_iSkin
{
  /**
  * Constructor interface
  */
  function __construct();
  /**
  * Sets skin variables
  *
  * @param mixed $name Variable name
  * @param mixed $value Variable value
  * @return mixed Result
  */
  function set($name, $value);
  /**
  * Parses template file
  *
  * @param mixed $template Template file to be parsed
  * @return mixed Result
  */
  function parse($template);
  /**
  * Displays template file
  *
  * @param mixed $template Template file to be displayed
  * @return mixed Result
  */
  function view($template);
}
/**
* rw_Skin
*
* Template engine switcher
*
* @author     Radu Maier <radu@rudisoft.net>
* @package    RudWEb
* @subpackage Core
*/
class rw_Skin
{
  /**
  * Connect and open database
  *
  * This is where the acutal connection is initiated
  *
  * @param string $dbType Database type
  * @param string $dbHost Database host
  * @param string $dbPort Database port
  * @param string $dbUser Database username
  * @param string $dbPass Database password
  * @param string $dbName Database name
  * @return mixed opens the connection or returns an error
  */
  static function _load($tplEngine = null)
  {
    /**
    * Allowed template engine types
    */
    $tplEngines = array('Smarty');
    if(in_array($tplEngine, $tplEngines))
    {
      /**
      * Required skin class name
      */
      $skinClass = 'rw_Skin_'.$tplEngine;
      /**
      * Include skin class
      */
      if(is_file(_APP_DIR.'3rdparty/'.$tplEngine.'/'.$tplEngine.'.class.php'))
      {
        require_once(_APP_DIR.'3rdparty/'.$tplEngine.'/'.$tplEngine.'.class.php');
      }
      else if(is_file(_RW_DIR.'3rdparty/'.$tplEngine.'/'.$tplEngine.'.class.php'))
      {
        require_once(_RW_DIR.'3rdparty/'.$tplEngine.'/'.$tplEngine.'.class.php');
      }
      else
      {
        trigger_error('Template engine '.$tplEngine . ' is missing.', E_USER_ERROR);
      }
      
      require_once(_RW_DIR_LIB_SKIN.'skin.'.$tplEngine.'.inc.php');
    }
    else {
      /**
      * Default template engine
      */
      $skinClass = 'rw_Skin_rudweb';
      /**
      * Include skin class
      */
      require_once(_RW_DIR_LIB_SKIN.'skin.rudweb.inc.php');
    }
    /**
    * Include skin class
    */
    return new $skinClass();
  }
}
?>