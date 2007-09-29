<?php
/*
debug.php
15:28 29.09.2007
*/
//session_start();
echo "\n<PRE>";
// SESSION
echo "\n<HR><B>SESSION</B>:<BR>\n";
print_r($_SESSION);
// REQUEST
echo "\n<HR><B>REQUEST</B>:<BR>\n";
print_r($_REQUEST);
// GET
echo "\n<HR><B>GET</B>:<BR>\n";
print_r($_GET);
// POST
echo "\n<HR><B>POST</B>:<BR>\n";
print_r($_POST);
// FILES
//echo "\n<HR><B>FILES</B>:<BR>\n";
//print_r($_FILES);
// SERVER
//echo "\n<HR><B>SERVER</B>:<BR>\n";
//print_r($_SERVER);
// CONSTANTS
//echo "\n<HR><B>CONSTANTS</B>:<BR>\n";
//print_r(get_defined_constants(true));
// PHP CONFIGURATION
//echo "\n<HR><B>PHP CONFIGURATION</B>:<BR>\n";
//print_r(ini_get_all());
echo "</PRE>\n";
?>