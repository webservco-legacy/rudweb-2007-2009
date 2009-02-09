<?php
/**
* index
*
* <I> ./inc/cnt/index.inc.php</I>
* <BR>Controller for content
*
* @author     Radu Maier <radu@rudisoft.net>
* @copyright  Copyright (c) 2008, Radu Maier
* @license    http://opensource.org/licenses/gpl-3.0.html
* @version    15:38 2009-02-09
* @since      16:42 2009-01-12
* @access     public
* @package    RudWEb
* @subpackage Sandbox
* @todo       stuff
*/

/**
* Prevent direct file access
*/
if(!defined('_RW_VALID')) {require_once('./index.php'); exit;}
  /*
  * Main layout template file
  */
  $cnt['skin']['tpl'] = 'layout';
  /*
  * Main layout page title
  */
  $cnt['skin']['title'] = '';
  /*
  * Current content template file
  */
  $cnt['cnt']['tpl'] = 'blank';
  /*
  * Current content
  */
  $cnt['cnt']['content'] = array();
  /*
  * This overrides the aditional templates in the main skin.
  * Use it in order not to display something on a certain page.
  * Please note that these will not act as sub-templates anymore,
  * but as variables to the main template.
  */
  /*
  $cnt['skin']['menu'] = 'MENU_REPLACEMENT_VARS';
  $cnt['skin']['content'] = 'CONTENT_REPLACEMENT_VARS';
  $cnt['skin']['footer'] = 'FOOTER_REPLACEMENT_VARS';
  */
  /*
  * If you want to override the aditional templates in the main skin
  * and still use them as subtemplates, use something like this:
  * (same sintax as in ctrl.inc)
  */
  /*
  $cnt['atpl']['menu'] = array();
  $cnt['atpl']['menu']['dir'] = '';
  $cnt['atpl']['menu']['tpl'] = 'menu';
  $cnt['atpl']['menu']['vars'] = array();

  $cnt['atpl']['content'] = array();
  
  $cnt['atpl']['content'][0] = array();
  $cnt['atpl']['content'][0]['dir'] = 'content/';
  $cnt['atpl']['content'][0]['tpl'] = $cnt['cnt']['tpl'];
  $cnt['atpl']['content'][0]['vars']['cnt'] = $cnt['cnt']['content'];
  $cnt['atpl']['content'][0]['vars']['lang'] = $lang;
  $cnt['atpl']['content'][0]['vars']['usr_status'] = $usr_status;
  
  $cnt['atpl']['content'][1] = array();
  $cnt['atpl']['content'][1]['dir'] = 'content/';
  $cnt['atpl']['content'][1]['tpl'] = 'contact';
  $cnt['atpl']['content'][1]['vars']['cnt'] = $cnt['cnt']['content'];
  $cnt['atpl']['content'][1]['vars']['lang'] = $lang;
  $cnt['atpl']['content'][1]['vars']['usr_status'] = $usr_status;
  $cnt['atpl']['content'][1]['vars']['stuff1'] = 'stuff for the second subtemplate';

  $cnt['atpl']['footer'] = array();
  $cnt['atpl']['footer']['dir'] = '';
  $cnt['atpl']['footer']['tpl'] = 'footer';
  $cnt['atpl']['footer']['vars'] = array();
  */
?>