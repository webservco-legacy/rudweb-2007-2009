<?php
/**
* ctrl
*
* <I> ./inc/ctrl.inc.php</I>
* <BR>Application controller
*
* @author     Radu Maier <radu@rudisoft.net>
* @copyright  Copyright (c) 2008, Radu Maier
* @license    http://opensource.org/licenses/gpl-3.0.html
* @version    15:38 2009-02-09
* @since      20:28 2009-01-22
* @access     public
* @package    RudWEb
* @subpackage Core
* @todo       stuff
*/

/**
* Prevent direct file access
*/
if(!defined('_RW_VALID')) {require_once('./index.php'); exit;}

if(_APP_CFG_DATABASE)
{
  $db = $appCore->rwDbConnect();
  $cnt = $appCore->appProcess($lang, $db);
  $db->dbClose();
}
else
{
  $cnt = $appCore->appProcess($lang);
}
  
/**
* Thumbnails
*
* MEDIACONTENT ONLY.
* Should be in each individual page
* and returned by appProcess,
* (used in conjunction with template override)
* but placed here to use global
*/
$thumb = $appCore->rwActivateExt($ext, 'Thumb');
$thumb->set_cacheDir(_APP_DIR_TMP);
$thumb->set_maxSize(120);
$thumb->set_thumbFormat(1); //png = 0, jpeg = 1, gif = 2
$thumbs['nota_de_plata'] = $thumb->thumb(_APP_DIR_VAR.'flash/nota_de_plata.jpg');
$thumbs['iaht_club_1']   = $thumb->thumb(_APP_DIR_VAR.'flash/iaht_club_1.jpg');
$thumbs['iaht_club_2']   = $thumb->thumb(_APP_DIR_VAR.'flash/iaht_club_2.jpg');
$thumbs['iaht_club_3']   = $thumb->thumb(_APP_DIR_VAR.'flash/iaht_club_3.jpg');
$thumbs['iaht_club_4']   = $thumb->thumb(_APP_DIR_VAR.'flash/iaht_club_4.jpg');
$thumbs['iaht_club_5']   = $thumb->thumb(_APP_DIR_VAR.'flash/iaht_club_5.jpg');

/**
* Aditional templates
*/
$atpl = array();
  
$atpl['menu'] = array();
$atpl['menu']['dir'] = '';
$atpl['menu']['tpl'] = 'menu';
$atpl['menu']['vars'] = array();

$atpl['content'] = array();
$atpl['content'][0] = array();
$atpl['content'][0]['dir'] = 'content/';
$atpl['content'][0]['tpl'] = $cnt['cnt']['tpl'];
$atpl['content'][0]['vars']['cnt'] = $cnt['cnt']['content'];
$atpl['content'][0]['vars']['lang'] = $lang;
$atpl['content'][0]['vars']['usr_status'] = $usr_status;
  
$atpl['footer'] = array();
$atpl['footer']['dir'] = '';
$atpl['footer']['tpl'] = 'footer';
$atpl['footer']['vars'] = array();
$atpl['footer']['vars']['thumbs'] = $thumbs;

if(array_key_exists('atpl', $cnt))
{
  $a_tpl = array('menu', 'content', 'footer');
  foreach($a_tpl as $name=>$value)
  {
    if(array_key_exists($value, $cnt['atpl']))
    {
      $atpl[$value] = array();
      $atpl[$value] = $cnt['atpl'][$value];
    }
  }
}
?>