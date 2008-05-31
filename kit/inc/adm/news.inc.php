<?php
/**
* Show site news
*
* <I>./inc/adm/news.inc.php</I>
* <BR>Shows all site news
* 
* @author Radu Maier <rudisoft@rudisoft.net>
* @copyright Copyright (c) 2007-2008, Radu Maier
* @license http://opensource.org/licenses/gpl-2.0.php
* @version 16:28 2008-04-29
* @access public
* @package RudWEb
* @subpackage Modules
* @since 16:28 2008-04-29
*/

/**
* Authorized access only
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once './../../lib/404.php';}

  echo $rudweb_skin['cnt']['tt1']['pre'];
  echo $rudweb_ln['nws']['tt'];
  echo $rudweb_skin['cnt']['tt1']['suf'];
  
  echo $rudweb_skin['cnt']['txt']['pre'];
  if(!isset($_GET['nws'])) {
    showNewsAll();
  }
  else if(isset($_GET['nws'])) {
    $nws_id = rudweb_filter_input($_GET['nws']);
    if(isValidInt($nws_id)) {
      showNewsItem($nws_id,0);
    }
    else {
      showNewsAll();
    }
  }
  echo $rudweb_skin['cnt']['txt']['suf'];
?>