<?php
/**
* test
*
* <I> ./inc/cnt/test.inc.php</I>
* <BR>Controller for "test" content
*
* @author     Radu Maier <radu@rudisoft.net>
* @copyright  Copyright (c) 2008, Radu Maier
* @license    http://opensource.org/licenses/gpl-3.0.html
* @version    16:43 2009-01-12
* @since      16:43 2009-01-12
* @access     public
* @package    RudWEb
* @subpackage Sandbox
* @todo       stuff
*/

/**
* Prevent direct file access
*/
if(!defined('_RW_VALID')) {require_once('./index.php'); exit;}

  $cnt['tpl'] = 'test';
  $cnt['tt'] = $lang['TEST'];
  $cnt['content'] = array();
  
  if(_APP_CFG_DATABASE)
  {
    // query
    $rs = $db->dbQuery("SELECT cod, descriere FROM tmp_asesoft_prod WHERE producator = 'TOSHIBA'");
    // results
    $t = $rs->dbNumRows();
    if($t>=0)
    {
      for($i=0;$i<$t;$i++)
      {
        $r[$i] = $rs->dbFetchArray();
      }
    }
    $cnt['content']['queries'] = $db->dbQueryCount();
    $cnt['content']['ttime'] = $db->dbQueryTime();
    $cnt['content']['ltime'] = $db->dbQueryLast();
  }
?>