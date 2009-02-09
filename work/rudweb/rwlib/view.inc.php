<?php
/**
* view
*
* <I> ./rwlib/view.inc.php</I>
* <BR>core application viewer
*
* @author     Radu Maier <radu@rudisoft.net>
* @copyright  Copyright (c) 2008, Radu Maier
* @license    http://opensource.org/licenses/gpl-3.0.html
* @version    13:40 2009-02-09
* @since      20:07 2009-01-22
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
* app_Viewer
*
* Displays content
*
* @author     Radu Maier <radu@rudisoft.net>
* @package    RudWEb
* @subpackage Core
*/
class app_Viewer
{
  static function _display($vars, $atpl=array())
  {
    if(is_readable(_RW_DIR_LIB_SKIN.'skin.inc.php')) {require_once(_RW_DIR_LIB_SKIN.'skin.inc.php');} else {require_once('./index.php'); exit;}
    $skinObj = rw_Skin::_load(_APP_TPL);
    $skin_dir = _APP_CFG_SESSIONS ? $_SESSION[_APP_PRE.'_skin_dir'] : _APP_DIR_SKINS._APP_SKIN;
    $skinObj->skindir($skin_dir);
    
    $totalAtpl = count($atpl);
    if($totalAtpl > 0)
    {
      $atplObj = rw_Skin::_load(_APP_TPL);
      $atplObj->skindir($skin_dir);
      foreach($atpl as $atplTitle=>$atplVars)
      {
        if(array_key_exists(0, $atplVars))
        {
          $tc = count($atplVars);
          $mainContent = '';
          for($i=0;$i<$tc;$i++)
          {
            $totalAtplVars = count($atplVars[$i]['vars']);
            if($totalAtplVars > 0)
            {
              foreach($atplVars[$i]['vars'] as $name=>$value)
              {
                $atplObj->set($name, $value);
              }
            }
            $mainContent .= $atplObj->parse($atplVars[$i]['dir'].$atplVars[$i]['tpl'].'.tpl');
            $skinObj->set($atplTitle, $mainContent);
          }
        }
        else
        {
          $totalAtplVars = count($atplVars['vars']);
          if($totalAtplVars > 0)
          {
            foreach($atplVars['vars'] as $name=>$value)
            {
              $atplObj->set($name, $value);
            }
          }
          $skinObj->set($atplTitle, $atplObj->parse($atplVars['dir'].$atplVars['tpl'].'.tpl'));
        }
      }
    }
    $varsNew = array_diff_key($vars, array('tpl'=>''));
    $totalVars = count($varsNew);
    if($totalVars > 0)
    {
      foreach($varsNew as $name=>$value)
      {
        $skinObj->set($name, $value);
      }
    }
    return $skinObj->view($vars['tpl'].'.tpl');
  }
}
?>