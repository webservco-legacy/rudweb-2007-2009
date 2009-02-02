<?php
/**
* db
*
* <I> ./rwlib/err.inc.php</I>
* <BR>Error handling classes
*
* @author     Radu Maier <radu@rudisoft.net>
* @copyright  Copyright (c) 2008, Radu Maier
* @license    http://opensource.org/licenses/gpl-3.0.html
* @version    16:57 2009-01-05
* @since      10:58 2008-12-08
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
* rw_Error
*
* Behaves like classic php errors.
*
* @author     Radu Maier <radu@rudisoft.net>
* @package    RudWEb
* @subpackage Core
*/
class rw_Error extends Exception
{
  /**
  * Error context
  *
  * @var mixed $_context error context
  */
  private $_context;
  /**
  * Constructor
  *
  * @param mixed $message message
  * @param mixed $code code
  * @param mixed $file file
  * @param mixed $line line
  * @param mixed $context context
  * @return mixed
  */
  public function __construct($message, $code, $file, $line, $context = null)
  {
    parent::__construct($message, $code);
    $this->file = $file;
    $this->line = $line;
    $this->_context = $context;
  }
}
/**
* rw_Error_handler
*
* Custom error handling class.
*
* @author     Radu Maier <radu@rudisoft.net>
* @package    RudWEb
* @subpackage Core
*/
abstract class rw_Error_handler
{
  /**
  * Sets itself as error handler
  */
  public static function init()
  {
    set_error_handler(array('rw_Error_handler','handleError'));
    //set_exception_handler(array('rw_Error_handler','handleError'));
  }
  /**
  * Restores error handler
  */
  public static function restore()
  {
    restore_error_handler();
    //restore_exception_handler();
  }
  /**
  * Handles errors
  *
  * @param mixed $code code
  * @param mixed $message message
  * @param mixed $file file
  * @param mixed $line line
  * @param mixed $context context
  * @return mixed
  */
  public static function handleError($code, $message, $file, $line, $context)
  {
    if(error_reporting() == 0)
    {
      /**
      * 16:57 2009-01-05 If the suppression flag is used do nothing
      */
      return NULL;
    }
    else {
      /**
      * Handle the error
      */
      throw new rw_Error($message, $code, $file, $line, $context);
    }
  }
}
?>