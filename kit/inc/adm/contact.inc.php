<?php
/**
* Show contact form
*
* <I>./inc/adm/contact.inc.php</I>
* <BR>Shows a contact form
* 
* @author Radu Maier <rudisoft@rudisoft.net>
* @copyright Copyright (c) 2007-2008, Radu Maier
* @license http://opensource.org/licenses/gpl-2.0.php
* @version 14:28 2008-06-27
* @access public
* @package RudWEb
* @subpackage Modules
* @since 17:58 2008-05-31
* @todo Stuff
*/

/**
* Authorized access only
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once './../../lib/404.php';}

if (isset($_GET['form']) && isValidInt(rudweb_filter_input($_GET['form']))) {
  $con_cat_id = rudweb_filter_input($_GET['form']);
  
  $con_cat_tt = '';
  $query_cat  = "SELECT con_cat_tt FROM ". _RUDWEB_PRE. "con_cat WHERE con_cat_id = '".$con_cat_id."' LIMIT 1";
  $result_cat = rudweb_qres($rudweb_dbtype, $query_cat);
  $cat_row    = rudweb_fetch_assoc($rudweb_dbtype, $result_cat);
  $con_cat_tt = $cat_row['con_cat_tt'];
  
  echo $rudweb_skin['cnt']['tt1']['pre'];
  echo $rudweb_ln['con']['tt'] . ' - ' . $con_cat_tt;
  echo $rudweb_skin['cnt']['tt1']['suf'];
  
  echo $rudweb_skin['cnt']['txt']['pre'];
  showContactForm($con_cat_id);
  echo $rudweb_skin['cnt']['txt']['suf'];
}
else {
  echo $rudweb_skin['cnt']['tt1']['pre'];
  echo $rudweb_ln['con']['tt'];
  echo $rudweb_skin['cnt']['tt1']['suf'];
  
  echo $rudweb_skin['cnt']['txt']['pre'];
  showContactForm(0);
  echo $rudweb_skin['cnt']['txt']['suf'];
}
?>