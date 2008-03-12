<?php
/*
intro.php
16:09 2008-03-12
*/
define("_RSWEB_PUBFIL", TRUE);
require_once './inc/config.inc.php';
require_once './inc/rswebc.inc.php';
require_once _RSWEB_INC_DIR . 'rsweb1.inc.php';
//require_once _RSWEB_INC_DIR . 'rsweb2.inc.php';

//$rsweb_cnt_type           = "0";  // NOT REALLY NEEDED
//$rsweb_this_content       = 'intro';  // NOT REALLY NEEDED
//$rsweb_this_content_level = getCntLev($rsweb_this_content);  // NOT REALLY NEEDED
//$rsweb_mnu_id             = getCntMnuId('index');  // NOT REALLY NEEDED
$rsweb_mnu_id             = "0";  // only for travel-agency
$rsweb_stats_page         = 'intro';
//$rsweb_req_page           = 'intro'; // NOT REALLY NEEDED
$rsweb_page_title         = _RSWEB_WSTT . " - " . "Index";
$rsweb_page_description   = _RSWEB_WSDS;
$rsweb_page_keywords      = _RSWEB_WSKW;

require_once _RSWEB_INC_DIR . 'rsweb3.inc.php';
require_once _RSWEB_INC_DIR . 'phphdi.inc.php';
?>
<!--INDEX.PHP-->
<?php
require_once _RSWEB_INC_DIR . 'phpfti.inc.php';
?>