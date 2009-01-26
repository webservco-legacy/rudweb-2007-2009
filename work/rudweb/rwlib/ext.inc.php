<?php
/**
* ext
*
* <I> ./rwlib/ext.inc.php</I>
* <BR>Extention building classes
*
* @author     Radu Maier <radu@rudisoft.net>
* @copyright  Copyright (c) 2008, Radu Maier
* @license    http://opensource.org/licenses/gpl-3.0.html
* @version    17:04 2009-01-08
* @since      14:11 2009-01-06
* @access     public
* @package    RudWEb
* @subpackage Extensions
* @todo       stuff
*/

/**
* Prevent direct file access
*/
if(!defined('_RW_VALID')) {require_once('./index.php'); exit;}

/**
* rw_iExt
*
* Methods to be implemented by all extension classes
*
* @author     Radu Maier <radu@rudisoft.net>
* @package    RudWEb
* @subpackage Extensions
*/
interface rw_iExt
{
  /**
  * Method for displaying information about the extension
  *
  * @return mixed information about the extension
  */
  function extAbout();
}
/**
* rw_Ext_global
*
* Global values and methods for all extension classes
*
* @author     Radu Maier <radu@rudisoft.net>
* @package    RudWEb
* @subpackage Core
*/
class rw_Ext_global
{
  public $extAbout = array();
  /**
  * Load the extension and set it to global or local
  *
  * @param bool $global whether the extension is loaded globally
  * @return mixed result of loading
  */
  function __construct($extAbout)
  {
    $this->extAbout = $extAbout;
  }
  /**
  * Method for displaying information about the extension
  *
  * @return mixed information about the extension
  */
  function extAbout()
  {
    return $this->extAbout;
  }
}
?>