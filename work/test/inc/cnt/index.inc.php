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
* @version    11:46 2009-02-01
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
  $cnt['skin']['content'] = 'CONTENT_REPLCEMENT_VARS';
  $cnt['skin']['footer'] = 'FOOTER_REPLACEMENT_VARS';
  */
  /*
  * If you want to override the aditional templates in the main skin
  * and still use them as subtemplates, use something like this:
  * (same sintax as in ctrl.inc)
  */
  /*
  $cnt['atpl'] = array();
  $cnt['atpl']['menu'] = array();
  $cnt['atpl']['menu']['dir'] = 'TEMPLATE_SUBDIRECTORY';
  $cnt['atpl']['menu']['tpl'] = 'TEMPLATE_FILE';
  $cnt['atpl']['menu']['vars'] = array();
  */
?>