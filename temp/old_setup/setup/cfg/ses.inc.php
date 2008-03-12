<?php
/*
./setup/cfg/ses.inc.php
11:01 2008-01-11
*/

/* -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- */
// SESSION STUFF
// START SESSION
//session_cache_limiter('public, must-revalidate');
session_cache_limiter('nocache');
session_cache_expire(600); //minutes
ini_set("session.gc_maxlifetime","36000"); //seconds
session_start();
//setcookie("PHPSESSID",$_COOKIE['PHPSESSID'],time()+1800);

$_SESSION['ubwset_set_dbmy']      = null;
$_SESSION['ubwset_set_dbtype']    = null;
$_SESSION['ubwset_set_dbhost']    = null;
$_SESSION['ubwset_set_dbport']    = null;
$_SESSION['ubwset_set_dbport_my'] = null;
$_SESSION['ubwset_set_dbport_pg'] = null;
$_SESSION['ubwset_set_dbuser']    = null;
$_SESSION['ubwset_set_dbpass']    = null;
$_SESSION['ubwset_set_dbname']    = null;


if(isset($_POST['set_dbmy']))   {$_SESSION['ubwset_set_dbmy'] = $_POST['set_dbmy'];}
if(isset($_POST['set_dbtype'])) {$_SESSION['ubwset_set_dbtype'] = $_POST['set_dbtype'];}
if(isset($_POST['set_dbhost'])) {$_SESSION['ubwset_set_dbhost'] = $_POST['set_dbhost'];}
if(isset($_POST['set_dbport'])) {$_SESSION['ubwset_set_dbport'] = $_POST['set_dbport'];}
if(isset($_POST['set_dbport_my'])) {$_SESSION['ubwset_set_dbport_my'] = $_POST['set_dbport_my'];}
if(isset($_POST['set_dbport_pg'])) {$_SESSION['ubwset_set_dbport_pg'] = $_POST['set_dbport_pg'];}
if(isset($_POST['set_dbuser'])) {$_SESSION['ubwset_set_dbuser'] = $_POST['set_dbuser'];}
if(isset($_POST['set_dbpass'])) {$_SESSION['ubwset_set_dbpass'] = $_POST['set_dbpass'];}
if(isset($_POST['set_dbname'])) {$_SESSION['ubwset_set_dbname'] = $_POST['set_dbname'];}
/*
$set_dbtype = "na";
$set_dbhost = "localhost";
$set_dbport = "3306";
$set_dbport_my = "3306";
$set_dbport_pg = "5432";
$set_dbuser = "user";
$set_dbpass = "password";
$set_dbname = "db_name";
*/
?>