<?php
/**
* skin.rudweb
*
* <I> ./rwlib/skin.rudweb.inc.php</I>
* <BR>Skin class for rudweb
*
* @author     Radu Maier <radu@rudisoft.net>
* @copyright  Copyright (c) 2008, Radu Maier
* @license    http://opensource.org/licenses/gpl-3.0.html
* @version    12:18 2009-02-01
* @since      19:28 2008-12-09
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
* rw_Skin_rudweb
*
* Skin Class for Rudweb
*
* @author     Radu Maier <radu@rudisoft.net>
* @package    RudWEb
* @subpackage Core
*/
class rw_Skin_rudweb implements rw_iSkin
{
  /**
  * Skin directory
  *
  * @var string $skindir Skin directory
  */
  public $skindir;
  /**
  * Skin variables
  *
  * @var mixed $skinvars Skin variables
  */
  public $skinvars;
  /**
  * Constructor
  *
  * @param string $skindir Skin directory
  * @return mixed
  */
  public function __construct($skindir = null)
  {
    $this->skindir = $skindir;
    $this->skinvars = array();
  }
  /**
  * Sets the skin dir
  */
  public function skindir($skindir)
  {
    $this->skindir = $skindir;
  }
  /**
  * Sets a skin variable
  *
  * @param sting $name Variable name
  * @param mixed $value Variable value
  * @return mixed
  */
  public function set($name, $value)
  {
    $this->skinvars[$name] = $value;
  }
  /**
  * Parses the skin file
  *
  * @param string $skinfile Skin file
  * @return mixed
  */
  public function parse($skinfile, $display=FALSE)
  {
    extract($this->skinvars);
    ob_start();
    include ($this->skindir . '/' . $skinfile);
    $out = ob_get_contents();
    ob_end_clean();
    
    if($display)
    {
      echo $out;
      return true;
    }
    else
    {
      return $out;
    }
  }
  /**
  * Displays results
  */
  public function view($skinfile)
  {
    $this->parse($skinfile, TRUE);
  }
}
?>