$cnt['skin'] - main template vars (tpl, title)
$cnt['atpl'] - aditional templates (subtemplates)

<?php
/**
* inc/cnt/PAGE.inc.php
*/
$cnt['skin']['tpl']   = 'layout'; /* main template file */
$cnt['skin']['title'] = 'Title'; /* main page title */
$cnt['cnt']['tpl']    = 'blank'; /* current content template file */
$cnt['cnt']['content'] = array(); /* current content */
/* override aditional templates in controller to simple stuff */
$cnt['skin']['menu'] = 'MENU_REPLACEMENT_VARS';
$cnt['skin']['content'] = 'CONTENT_REPLCEMENT_VARS';
$cnt['skin']['footer'] = 'FOOTER_REPLACEMENT_VARS';
/* override aditional templates in controller as subtemplates */
$cnt['atpl'] = array(); /* override all */
$cnt['atpl']['menu'] = array(); /* declare 'menu' subtemplate - this has to be in tpl file */
$cnt['atpl']['menu']['dir'] = 'TEMPLATE_SUBDIRECTORY'; /* template subdirectory */
$cnt['atpl']['menu']['tpl'] = 'TEMPLATE_FILE'; /* template file */
$cnt['atpl']['menu']['vars'] = array(); /* template vars */
/* DUMP */
$cnt['atpl'][1] = array();
$cnt['atpl'][2] = array();
$cnt['atpl'][3] = array();
?>

<?php
/**
* inc/ctrl.inc.php
*/
/* MENU */
$atpl['menu'] = array();
$atpl['menu']['dir'] = '';
$atpl['menu']['tpl'] = 'menu';
$atpl['menu']['vars'] = array();
/* MAIN CONTENT */
$atpl['content'] = array(); /* declare content */
$atpl['content']['dir'] = 'content/'; /* template subdir */
$atpl['content']['tpl'] = $cnt['cnt']['tpl']; /* template file */
$atpl['content']['vars']['cnt'] = $cnt['cnt']['content']; /* template content */ /* ?? */
$atpl['content']['vars']['lang'] = $lang; /* language */
$atpl['content']['vars']['usr_status'] = $usr_status; /*user status*/
/* FOOTER */
$atpl['footer'] = array();
$atpl['footer']['dir'] = '';
$atpl['footer']['tpl'] = 'footer';
$atpl['footer']['vars'] = array();
$atpl['footer']['vars']['thumbs'] = array();
?>