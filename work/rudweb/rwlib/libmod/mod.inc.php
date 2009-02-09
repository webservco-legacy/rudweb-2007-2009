<?php
/**
* mod
*
* <I> ./rwlib/mod.inc.php</I>
* <BR>Module building classes
*
* @author     Radu Maier <radu@rudisoft.net>
* @copyright  Copyright (c) 2008, Radu Maier
* @license    http://opensource.org/licenses/gpl-3.0.html
* @version    15:44 2009-02-09
* @since      15:43 2009-02-09
* @access     public
* @package    RudWEb
* @subpackage Modules
* @todo       stuff
*/

/**
* Prevent direct file access
*/
if(!defined('_RW_VALID')) {require_once('./index.php'); exit;}

/**
* rw_iMod
*
* Methods to be implemented by all module classes
*
* @author     Radu Maier <radu@rudisoft.net>
* @package    RudWEb
* @subpackage Modules
*/
interface rw_iMod
{
  /**
  * Method for displaying information about the module
  *
  * @return mixed information about the module
  */
  function modAbout();
}
/**
* rw_Mod_global
*
* Global values and methods for all module classes
*
* @author     Radu Maier <radu@rudisoft.net>
* @package    RudWEb
* @subpackage Modules
*/
class rw_Mod_global
{
  /**
  * Set module info
  */
  public $modAbout = array();
  /**
  * Load the module
  *
  * @param array $modAbout module information
  * @return mixed result of loading
  */
  function __construct($modAbout)
  {
    $this->modAbout = $modAbout;
  }
  /**
  * Method for displaying information about the module
  *
  * @return mixed information about the module
  */
  function modAbout()
  {
    return $this->modAbout;
  }
}
?>