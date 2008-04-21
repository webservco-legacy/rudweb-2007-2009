<?php
/*
./intro.php
09:27 2008-04-21
*/
define("_RUDWEB_PUBFIL", TRUE);
require_once './inc/config.inc.php';
require_once './inc/rudwebc.inc.php';
require_once _RUDWEB_INC_DIR . 'rudweb1.inc.php';
//require_once _RUDWEB_INC_DIR . 'rudweb2.inc.php';

$rudweb_cnt_type           = "0";  // NOT REALLY NEEDED
$rudweb_this_content       = 'intro';  // NOT REALLY NEEDED   index
$rudweb_this_content_level = getCntLev($rudweb_this_content);  // NOT REALLY NEEDED
$rudweb_mnu_id             = getCntMnuId('index');  // NOT REALLY NEEDED
$rudweb_mnu_id             = "0";  // only for travel-agency
$rudweb_stats_page         = 'intro';
$rudweb_req_page           = 'intro'; // NOT REALLY NEEDED
$rudweb_page_title         = _RUDWEB_WSTT . " - " . "Index";
$rudweb_page_description   = _RUDWEB_WSDS;
$rudweb_page_keywords      = _RUDWEB_WSKW;

require_once _RUDWEB_INC_DIR . 'rudweb3.inc.php';
require_once _RUDWEB_INC_DIR . 'phphdi.inc.php';
?>