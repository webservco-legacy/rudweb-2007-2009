<?php
/*
intro.php
16:30 2007-12-15
*/
define("_UBWS_PUBFIL", TRUE);
require_once './inc/config.inc.php';
require_once './inc/ubwsc.inc.php';
require_once _UBWS_INC_DIR . 'ubws1.inc.php';
//require_once _UBWS_INC_DIR . 'ubws2.inc.php';

//$ubws_cnt_type           = "0";  // NOT REALLY NEEDED
//$ubws_this_content       = 'intro';  // NOT REALLY NEEDED
//$ubws_this_content_level = getCntLev($ubws_this_content);  // NOT REALLY NEEDED
//$ubws_mnu_id             = getCntMnuId('index');  // NOT REALLY NEEDED
$ubws_mnu_id             = "0";  // only for travel-agency
$ubws_stats_page         = 'intro';
//$ubws_req_page           = 'intro'; // NOT REALLY NEEDED
$ubws_page_title         = _UBWS_WSTT . " - " . "Index";
$ubws_page_description   = _UBWS_WSDS;
$ubws_page_keywords      = _UBWS_WSKW;

require_once _UBWS_INC_DIR . 'ubws3.inc.php';
require_once _UBWS_INC_DIR . 'phphdi.inc.php';
?>
<!--INDEX.PHP-->
<?php
require_once _UBWS_INC_DIR . 'phpfti.inc.php';
?>