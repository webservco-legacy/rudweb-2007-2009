<?php
/**
* skin.smarty
*
* <I> ./rwlib/skin.smarty.inc.php</I>
* <BR>Skin class for smarty
*
* @author     Radu Maier <radu@rudisoft.net>
* @copyright  Copyright (c) 2008, Radu Maier
* @license    http://opensource.org/licenses/gpl-3.0.html
* @version    12:19 2009-02-01
* @since      16:25 2008-12-09
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
* rw_Skin_smarty
*
* Skin Class for Smarty
*
* @author     Radu Maier <radu@rudisoft.net>
* @package    RudWEb
* @subpackage Core
*/
class rw_Skin_smarty extends Smarty implements rw_iSkin
{
  /**
  * Constructor
  */
  function __construct()
  {
    parent::__construct();
  }
  /**
  * Sets the skin directory
  */
  public function skindir($skindir)
  {
    $this->template_dir = $skindir;
    $this->compile_dir = _APP_DIR_TMP;
    $this->cache_dir = _APP_DIR_TMP;
    $this->config_dir = _APP_DIR_TMP;
  }
  /**
  * Method for setting variables
  *
  */
  function set($name, $value)
  {
    return $this->assign($name, $value);
  }
  /**
  * Method for parsing template
  *
  */
  function parse($template)
  {
    return $this->fetch($template);
  }
  /**
  * Method for displaying results
  *
  */
  function view($template)
  {
    return $this->display($template);
  }
}
?>