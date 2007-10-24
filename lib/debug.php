<?php
/*
debug.php
16:31 21.10.2007
*/
echo "\n<PRE>";
/* ********** ********** ********** SESSION ********** ********** ********** */
echo "\n<HR WIDTH=\"50%\" ALIGN=\"left\"><B>SESSION</B>:<BR>\n";
print_r($_SESSION);
/* ********** ********** ********** REQUEST ********** ********** ********** */
echo "\n<HR WIDTH=\"50%\" ALIGN=\"left\"><B>REQUEST</B>:<BR>\n";
print_r($_REQUEST);
/* ********** ********** ********** GET ********** ********** ********** */
echo "\n<HR WIDTH=\"50%\" ALIGN=\"left\"><B>GET</B>:<BR>\n";
print_r($_GET);
/* ********** ********** ********** POST ********** ********** ********** */
echo "\n<HR WIDTH=\"50%\" ALIGN=\"left\"><B>POST</B>:<BR>\n";
print_r($_POST);
/* ********** ********** ********** FILES ********** ********** ********** */
//echo "\n<HR WIDTH=\"50%\" ALIGN=\"left\"><B>FILES</B>:<BR>\n";
//print_r($_FILES);
/* ********** ********** ********** SERVER ********** ********** ********** */
//echo "\n<HR WIDTH=\"50%\" ALIGN=\"left\"><B>SERVER</B>:<BR>\n";
//print_r($_SERVER);
/* ********** ********** ********** CONSTANTS ********** ********** ********** */
//echo "\n<HR WIDTH=\"50%\" ALIGN=\"left\"><B>CONSTANTS</B>:<BR>\n";
//print_r(get_defined_constants(true));
/* ********** ********** ********** PHP CONFIGURATION ********** ********** ********** */
//echo "\n<HR WIDTH=\"50%\" ALIGN=\"left\"><B>PHP CONFIGURATION</B>:<BR>\n";
//print_r(ini_get_all());
echo "</PRE>\n";
?>