<?php
error_reporting(E_ALL);
require_once './_files/config.inc.php';
//require_once INC_DIR . 'dbopen.inc.php';

if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch($page) {
        case "index": {
            $page_title = SITE_TITLE . ' - ' . 'Index';
            $required = 'index.inc.php';
            break;
        }
        default: {
            $page_title = SITE_TITLE . ' - ' . 'Index';
            $required = 'index.inc.php';
            break;
        }
    }
} // IF ACTION 
else {
    $page_title = SITE_TITLE . ' - ' . 'Index';
    $required = 'index.inc.php';
    $v_page = 'index';
}
require_once INC_DIR . 'header.inc.php';
//  STATISTICS
//require_once INC_DIR . 'stats.inc.php';
?>
<?php require_once INC_DIR . $required; ?>
<?php 
require_once INC_DIR . 'footer.inc.php';
//require_once INC_DIR . 'dbclose.inc.php';
?>