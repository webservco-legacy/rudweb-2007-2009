<?php
/**
* short description
*
* <I> long description</I>
* <BR>long description more
* <BR>second line
* <BR>third line
* @author Radu Maier <rudisoft@rudisoft.net>
* @copyright Copyright (c) 2007-2008, Radu Maier
* @license http://opensource.org/licenses/gpl-2.0.php
* @version 11:16 2008-05-28
* @since 11:15 2008-05-28
* @access public
* @package RudWEb
* @subpackage Other
* @todo todo stuff
* extra {@tutorial tutorials/testpackage/testpackage.pkg}
* @example example1.phps
*/

error_reporting(E_ALL);

/**
* function description
* @since Version 0.4.0
* @todo extend this function to actually do something
*/
function myfunction() {echo 'Hello world';}

/**#@+
 * Template start
 *

 * @var string
  */

/**
* string1 description
* @name $string1
* @global string $string1
*/
$string1 = 'hello world 1';

/**
* string2 description
* @name $string2
* @global string $string2
*/
$string2 = 'hello world 1';

/**#@-*/

/**
* function that uses $string1
*
* @name usevars
* @global string used to give it back
* @param string $string2
* @return string just give me back my string!
* @see mysql_query()|myfunction()
*/
function usevars($string2) {
  global $string1;
  return $string1 . $string2;
}

/**
* just some string
* @var string
* @name $mynewstring
* @global string $mynewstring
*/
$mynewstring = 'my new string';
?>