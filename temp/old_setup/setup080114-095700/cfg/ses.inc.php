<?php
/*
./setup/cfg/ses.inc.php
12:19 2008-01-11
*/

/* -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- */
// START SESSION
//session_cache_limiter('public, must-revalidate');
session_cache_limiter('nocache');
session_cache_expire(600); //minutes
ini_set("session.gc_maxlifetime","36000"); //seconds
session_start();
//setcookie("PHPSESSID",$_COOKIE['PHPSESSID'],time()+1800);

if(isset($_POST['abort']) && isset($_SESSION['ubwset_start'])) {
  unset($_SESSION['ubwset_start']);
  session_regenerate_id();
}
if (!isset($_SESSION['ubwset_start'])) {
  session_regenerate_id();
  $_SESSION['ubwset_date'] = date("Y-m-d");
  $_SESSION['ubwset_start'] = true;
  
  $_SESSION['ubwset_set_site_url1']  = null;
  $_SESSION['ubwset_set_site_url2']  = 'http://www.example.com';
  $_SESSION['ubwset_set_site_root1'] = null;
  $_SESSION['ubwset_set_site_root2'] = '/var/www/public_html';

  $_SESSION['ubwset_set_pre'] = null;
  
  $_SESSION['ubwset_set_dbmy']      = null;
  $_SESSION['ubwset_set_dbtype']    = 'na';
  $_SESSION['ubwset_set_dbhost']    = 'localhost';
  $_SESSION['ubwset_set_dbport']    = '3306';
  $_SESSION['ubwset_set_dbport_my'] = '3306';
  $_SESSION['ubwset_set_dbport_pg'] = '5432';
  $_SESSION['ubwset_set_dbuser']    = 'user';
  $_SESSION['ubwset_set_dbpass']    = 'password';
  $_SESSION['ubwset_set_dbname']    = 'database';

  $_SESSION['ubwset_set_dbcfg'] = '1';
  $_SESSION['ubwset_set_dbthm'] = '0';
  
  $_SESSION['ubwset_cfg_start'] = $_SESSION['ubwset_date'];
  
  $_SESSION['ubwset_cfg_clcom'] = null;
  $_SESSION['ubwset_cfg_clnam'] = null;
  $_SESSION['ubwset_cfg_dvcom'] = null;
  $_SESSION['ubwset_cfg_dvurl'] = 'http://';
  $_SESSION['ubwset_cfg_dvnam'] = null;
  $_SESSION['ubwset_cfg_desig'] = null;
  $_SESSION['ubwset_cfg_publ'] = null;
  $_SESSION['ubwset_cfg_ratng'] = 'General';
  $_SESSION['ubwset_cfg_distr'] = 'Global';
  $_SESSION['ubwset_cfg_robots'] = 'Index, Follow';
  $_SESSION['ubwset_cfg_prag'] = 'no-cache';
  $_SESSION['ubwset_cfg_exp'] = '0';
  $_SESSION['ubwset_cfg_cache'] = 'no-cache';
}
if(isset($_POST['set_dbmy']))       {$_SESSION['ubwset_set_dbmy'] = $_POST['set_dbmy'];}
if(isset($_POST['set_dbtype']))     {$_SESSION['ubwset_set_dbtype'] = $_POST['set_dbtype'];}
if(isset($_POST['set_dbhost']))     {$_SESSION['ubwset_set_dbhost'] = $_POST['set_dbhost'];}
if(isset($_POST['set_dbport']))     {$_SESSION['ubwset_set_dbport'] = $_POST['set_dbport'];}
if(isset($_POST['set_dbport_my']))  {$_SESSION['ubwset_set_dbport_my'] = $_POST['set_dbport_my'];}
if(isset($_POST['set_dbport_pg']))  {$_SESSION['ubwset_set_dbport_pg'] = $_POST['set_dbport_pg'];}
if(isset($_POST['set_dbuser']))     {$_SESSION['ubwset_set_dbuser'] = $_POST['set_dbuser'];}
if(isset($_POST['set_dbpass']))     {$_SESSION['ubwset_set_dbpass'] = $_POST['set_dbpass'];}
if(isset($_POST['set_dbname']))     {$_SESSION['ubwset_set_dbname'] = $_POST['set_dbname'];}

if(isset($_POST['set_site_url1']))  {$_SESSION['ubwset_set_site_url1'] = $_POST['set_site_url1'];}
if(isset($_POST['set_site_url2']))  {$_SESSION['ubwset_set_site_url2'] = $_POST['set_site_url2'];}
if(isset($_POST['set_site_root1'])) {$_SESSION['ubwset_set_site_root1'] = $_POST['set_site_root1'];}
if(isset($_POST['set_site_root2'])) {$_SESSION['ubwset_set_site_root2'] = $_POST['set_site_root2'];}
if(isset($_POST['set_dbcfg']))      {$_SESSION['ubwset_set_dbcfg'] = $_POST['set_dbcfg'];}
if(isset($_POST['set_dbthm']))      {$_SESSION['ubwset_set_dbthm'] = $_POST['set_dbthm'];}
if(isset($_POST['set_pre']))        {$_SESSION['ubwset_set_pre'] = $_POST['set_pre'];}

if(isset($_POST['cfg_start']))      {$_SESSION['ubwset_cfg_start'] = $_POST['cfg_start'];}
if(isset($_POST['cfg_clcom']))      {$_SESSION['ubwset_cfg_clcom'] = $_POST['cfg_clcom'];}
if(isset($_POST['cfg_clnam']))      {$_SESSION['ubwset_cfg_clnam'] = $_POST['cfg_clnam'];}
if(isset($_POST['cfg_dvcom']))      {$_SESSION['ubwset_cfg_dvcom'] = $_POST['cfg_dvcom'];}
if(isset($_POST['cfg_dvurl']))      {$_SESSION['ubwset_cfg_dvurl'] = $_POST['cfg_dvurl'];}
if(isset($_POST['cfg_dvnam']))      {$_SESSION['ubwset_cfg_dvnam'] = $_POST['cfg_dvnam'];}
if(isset($_POST['cfg_desig']))      {$_SESSION['ubwset_cfg_desig'] = $_POST['cfg_desig'];}
if(isset($_POST['cfg_publ']))       {$_SESSION['ubwset_cfg_publ'] = $_POST['cfg_publ'];}
if(isset($_POST['cfg_ratng']))      {$_SESSION['ubwset_cfg_ratng'] = $_POST['cfg_ratng'];}
if(isset($_POST['cfg_distr']))      {$_SESSION['ubwset_cfg_distr'] = $_POST['cfg_distr'];}
if(isset($_POST['cfg_robots']))     {$_SESSION['ubwset_cfg_robots'] = $_POST['cfg_robots'];}
if(isset($_POST['cfg_prag']))       {$_SESSION['ubwset_cfg_prag'] = $_POST['cfg_prag'];}
if(isset($_POST['cfg_exp']))        {$_SESSION['ubwset_cfg_exp'] = $_POST['cfg_exp'];}
if(isset($_POST['cfg_cache']))      {$_SESSION['ubwset_cfg_cache'] = $_POST['cfg_cache'];}


/*
  $_SESSION['ubwset_set_dbmy']      = null;
  $_SESSION['ubwset_set_dbtype']    = 'na';
  $_SESSION['ubwset_set_dbhost']    = 'localhost';
  $_SESSION['ubwset_set_dbport']    = '3306';
  $_SESSION['ubwset_set_dbport_my'] = '3306';
  $_SESSION['ubwset_set_dbport_pg'] = '5432';
  $_SESSION['ubwset_set_dbuser']    = 'user';
  $_SESSION['ubwset_set_dbpass']    = 'password';
  $_SESSION['ubwset_set_dbname']    = 'database';

  $_SESSION['ubwset_set_site_url1']    = $target_url.$target_var;
  $_SESSION['ubwset_set_site_url2']    = 'http://www.example.com';
  $_SESSION['ubwset_set_site_root1']    = $target_root.$target_var;
  $_SESSION['ubwset_set_site_root2']    = '/var/www/public_html';

  $_SESSION['ubwset_set_dbcfg'] = '1';
  $_SESSION['ubwset_set_dbthm'] = '0';

  $_SESSION['ubwset_set_pre'] = $target_name;
  */
?>