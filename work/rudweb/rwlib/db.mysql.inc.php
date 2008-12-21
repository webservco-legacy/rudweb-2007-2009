<?php
/**
* db.mysql
*
* <I> ./rwlib/db.mysql.inc.php</I>
* <BR>Database class for MySQL
*
* @author     Radu Maier <radu@rudisoft.net>
* @copyright  Copyright (c) 2008, Radu Maier
* @license    http://opensource.org/licenses/gpl-3.0.html
* @version    09:38 2008-12-16
* @since      19:04 2008-12-03
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
* rw_DB_mysql
*
* Database Class for MySQL
*
* @author     Radu Maier <radu@rudisoft.net>
* @package    RudWEb
* @subpackage Core
*/
class rw_DB_mysql extends rw_DB_global implements rw_iDB
{
  /**
  * Constructor
  *
  * Initializes the database connection
  *
  * @param string $dbHost Database host
  * @param string $dbPort Database port
  * @param string $dbUser Database username
  * @param string $dbPass Database password
  * @param string $dbName Database name
  * @return mixed opens the connection or returns an error
  */
  function __construct($dbHost, $dbPort, $dbUser, $dbPass, $dbName)
  {
    $link = mysql_connect($dbHost.':'.$dbPort, $dbUser, $dbPass);
    if($link)
    {
      mysql_select_db($dbName, $link);
      $this->_connection = $link;
      $this->dbQuery("SET NAMES 'utf8'", FALSE);
    }
    // else error
  }
  /**
  * Method for raw queries
  *
  * Executes a query and returns the result.
  * Counts the time the query took and increments the query counter.
  *
  * @param string $sql Query to be executed
  * @param boolean $a Whether or not to record query data. Default is TRUE
  * @return mixed query result
  */
  function dbQuery($sql, $stats=TRUE)
  {
    $s = $stats ? microtime(TRUE) : 0;
    $result = mysql_query($sql, $this->_connection);
    $e = $stats ? microtime(TRUE) : 0;
    
    if($stats) {
      $this->_queryLast = $e - $s;
      $this->_queryTime = $this->_queryLast + $this->_queryTime;
      $this->_queryCount++;
    }
    return new rw_DB_result($this, $result);
  }
  /**
  * Method for simple select queries
  * Creates sql query based on input and calls dbQuery
  * @param mixed $columns
  * @param mixed $table
  * @param mixed $condition
  * @param mixed $limit
  * @return mixed query result
  */
  function dbQuerySimpleSelect($columns, $table, $condition, $limit=NULL)
  {
    $limit = isset($limit) ? ' LIMIT '.$limit : '';
    $sql = "SELECT {$columns} FROM {$table} WHERE {$condition}{$limit}";
    return $this->dbQuery($sql);
  }
  /**
  * Escape a string for queries
  * @param string $string string to be escaped
  * @return string $string escaped string
  */
  function dbEscapeString($string)
  {
    return mysql_real_escape_string($string, $this->_connection);
  }
  /**
  * Method for closing database connection
  *
  * @return mixed result of connection closing
  */
  function dbClose()
  {
    return mysql_close($this->_connection);
  }
  /**
  * Returns an array corresponding to a fetched row.
  *
  * @param mixed $result The result of the query.
  * @return array
  */
  function dbFetchArray($result)
  {
    return mysql_fetch_array($result);
  }
  /**
  * Testing
  */
  function dbFetchResult($result, $row, $field)
  {
    return mysql_result($result, $row, $field);
  }
  /**
  * Returns the number of rows returned by a query result
  *
  * @param mixed $result The result of the query.
  * @return integer Number of rows
  */
  function dbNumRows($result)
  {
    return mysql_num_rows($result);
  }
}
?>