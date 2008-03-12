<?php
/*
./setup/cfg/ses.inc.php
11:32 2008-03-12
*/

/* -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- */
// START SESSION
//session_cache_limiter('public, must-revalidate');
session_cache_limiter('nocache');
session_cache_expire(600); //minutes
ini_set("session.gc_maxlifetime","36000"); //seconds
session_start();
//setcookie("PHPSESSID",$_COOKIE['PHPSESSID'],time()+1800);

// for uninstall only
if ($set=='remove' && ($act == 'index' && $step == '1')) {
  $_SESSION['ubwset_cfg_remove_db_data']      = 'on';
  $_SESSION['ubwset_cfg_remove_db_tables']    = 'on';
  $_SESSION['ubwset_cfg_remove_user_files']   = 'off';
  $_SESSION['ubwset_cfg_remove_engine_files'] = 'on';
}
if(isset($_POST['abort']) || isset($_POST['finish'])) {
  if(isset($_SESSION['ubwset_start']) && isset($_SESSION['ubwset_pid'])) {
    unset($_SESSION['ubwset_start']);
    unset($_SESSION['ubwset_pid']);
    session_regenerate_id();
    session_destroy();
  }
  else if(!isset($_SESSION['ubwset_start'])) {
      if(isset($_SESSION['ubwset_cfg_remove_db_data']))      {unset($_SESSION['ubwset_cfg_remove_db_data']);}
      if(isset($_SESSION['ubwset_cfg_remove_db_tables']))    {unset($_SESSION['ubwset_cfg_remove_db_tables']);}
      if(isset($_SESSION['ubwset_cfg_remove_user_files']))   {unset($_SESSION['ubwset_cfg_remove_user_files']);}
      if(isset($_SESSION['ubwset_cfg_remove_engine_files'])) {unset($_SESSION['ubwset_cfg_remove_engine_files']);}
  }
  $redirect = "./setup.php";
  header("Location: $redirect");
  exit;
}
if(isset($_GET['act']) && isset($_GET['step'])) {
  if ($_GET['act']=='start' && $_GET['step']=='1') {
    if(isset($_GET['pid'])) {
      unset($_SESSION['ubwset_pid']);
      unset($_SESSION['ubwset_start']);
      session_regenerate_id();
      session_destroy();
      $pid = $_GET['pid'];
      $redirect = "./setup.php?pid=$pid&set=$set&act=index&step=$step";
      header("Location: $redirect");
      exit;
    }
  }
}
if (isset($_POST['proceed']) && !isset($_SESSION['ubwset_start'])) {
  session_regenerate_id();
  $_SESSION['ubwset_pid']               = null;
  if(isset($_GET['pid']))               {$_SESSION['ubwset_pid'] = $_GET['pid'];}
  $_SESSION['ubwset_date']              = date("Y-m-d");
  $_SESSION['ubwset_start']             = true;
  
  $_SESSION['ubwset_set_site_url1']     = null;
  $_SESSION['ubwset_set_site_url2']     = 'http://www.example.com';
  $_SESSION['ubwset_set_site_root1']    = null;
  $_SESSION['ubwset_set_site_root2']    = '/var/www/public_html';

  $_SESSION['ubwset_set_pre']           = $target_name[$_SESSION['ubwset_pid']];
  
  $_SESSION['ubwset_set_dbmy']          = null;
  $_SESSION['ubwset_set_dbtype']        = 'na';
  $_SESSION['ubwset_set_dbhost']        = 'localhost';
  $_SESSION['ubwset_set_dbport']        = '3306';
  $_SESSION['ubwset_set_dbport_my']     = '3306';
  $_SESSION['ubwset_set_dbport_pg']     = '5432';
  $_SESSION['ubwset_set_dbuser']        = 'user';
  $_SESSION['ubwset_set_dbpass']        = 'password';
  $_SESSION['ubwset_set_dbname']        = 'database';

  $_SESSION['ubwset_set_dbcfg']         = '1';
  $_SESSION['ubwset_set_dbthm']         = '0';
  
  $_SESSION['ubwset_cfg_start']         = $_SESSION['ubwset_date'];
  
  $_SESSION['ubwset_cfg_clcom']         = 'Client Company';
  $_SESSION['ubwset_cfg_clnam']         = 'Client Contact Person';
  $_SESSION['ubwset_cfg_dvcom']         = 'Developer Company';
  $_SESSION['ubwset_cfg_dvurl']         = 'http://www.example.com';
  $_SESSION['ubwset_cfg_dvnam']         = 'Developer Contact Person';
  $_SESSION['ubwset_cfg_desig']         = 'Developer Contact person';
  $_SESSION['ubwset_cfg_publ']          = 'Developer Company';
  $_SESSION['ubwset_cfg_ratng']         = 'General';
  $_SESSION['ubwset_cfg_distr']         = 'Global';
  $_SESSION['ubwset_cfg_robots']        = 'Index, Follow';
  $_SESSION['ubwset_cfg_prag']          = 'no-cache';
  $_SESSION['ubwset_cfg_exp']           = '0';
  $_SESSION['ubwset_cfg_cache']         = 'no-cache';
  
  $_SESSION['ubwset_cfg_lang']          = 'en';
  $_SESSION['ubwset_cfg_theme']         = 'ubws';
  
  $_SESSION['ubwset_cfg_cnt_en']        = 'default';
  $_SESSION['ubwset_cfg_cnt_de']        = 'default';
  $_SESSION['ubwset_cfg_cnt_es']        = 'default';
  $_SESSION['ubwset_cfg_cnt_fr']        = 'default';
  $_SESSION['ubwset_cfg_cnt_it']        = 'default';
  $_SESSION['ubwset_cfg_cnt_ro']        = 'default';
  
  $_SESSION['ubwset_cfg_cnt_shw']       = '1';
  $_SESSION['ubwset_cfg_lang_on']       = '1';
  $_SESSION['ubwset_cfg_usr_on']        = '1';
  $_SESSION['ubwset_cfg_theme_on']      = '1';
  $_SESSION['ubwset_cfg_cart_on']       = '0';
  $_SESSION['ubwset_cfg_stats_on']      = '1';
  $_SESSION['ubwset_cfg_stats_ip']      = '86.123.192.163, 80.96.77.225';
  $_SESSION['ubwset_cfg_ftr_on']        = '1';
  $_SESSION['ubwset_cfg_ftr_lmt']       = '3';
  $_SESSION['ubwset_cfg_timer']         = '1';
  $_SESSION['ubwset_cfg_debug']         = '1';
  $_SESSION['ubwset_cfg_cpy']           = '1';
  $_SESSION['ubwset_cfg_cpydev']        = '1';
  $_SESSION['ubwset_cfg_smap']          = '0';
  $_SESSION['ubwset_cfg_yah']           = '0';
  $_SESSION['ubwset_cfg_nws']           = '0';
  $_SESSION['ubwset_cfg_src']           = '0';
  
  $_SESSION['ubwset_cfg_pics_0']        = '1';
  $_SESSION['ubwset_cfg_pics_1']        = '1';
  $_SESSION['ubwset_cfg_pics_2']        = '1';
  $_SESSION['ubwset_cfg_pics_3']        = '1';
  $_SESSION['ubwset_cfg_pics_4']        = '1';
  
  $_SESSION['ubwset_cfg_cnt_posted']    = '0';
  $_SESSION['ubwset_cfg_cnt_tags']      = '0';
  $_SESSION['ubwset_cfg_cnt_cmnts']     = '0';
  $_SESSION['ubwset_cfg_cnt_lnks']      = '0';
  $_SESSION['ubwset_cfg_cnt_dlds']      = '0';
  
  $_SESSION['ubwset_cfg_blg_posted']    = '0';
  $_SESSION['ubwset_cfg_blg_tags']      = '0';
  $_SESSION['ubwset_cfg_blg_cmnts']     = '0';
  $_SESSION['ubwset_cfg_blg_lnks']      = '0';
  $_SESSION['ubwset_cfg_blg_dlds']      = '0';
  
  $_SESSION['ubwset_cfg_ln_inst']['en'] = 'on';
  $_SESSION['ubwset_cfg_ln_inst']['de'] = 'off';
  $_SESSION['ubwset_cfg_ln_inst']['es'] = 'off';
  $_SESSION['ubwset_cfg_ln_inst']['fr'] = 'off';
  $_SESSION['ubwset_cfg_ln_inst']['it'] = 'off';
  $_SESSION['ubwset_cfg_ln_inst']['ro'] = 'off';
  
  $_SESSION['ubwset_cfg_ln_cfg']['en']  = 'on';
  $_SESSION['ubwset_cfg_ln_cfg']['de']  = 'off';
  $_SESSION['ubwset_cfg_ln_cfg']['es']  = 'off';
  $_SESSION['ubwset_cfg_ln_cfg']['fr']  = 'off';
  $_SESSION['ubwset_cfg_ln_cfg']['it']  = 'off';
  $_SESSION['ubwset_cfg_ln_cfg']['ro']  = 'off';
  
  $_SESSION['ubwset_langs_wstt']['en']  = 'Website Title';
  $_SESSION['ubwset_langs_wstt']['de']  = 'Website Title';
  $_SESSION['ubwset_langs_wstt']['es']  = 'Website Title';
  $_SESSION['ubwset_langs_wstt']['fr']  = 'Website Title';
  $_SESSION['ubwset_langs_wstt']['it']  = 'Website Title';
  $_SESSION['ubwset_langs_wstt']['ro']  = 'Website Title';
  
  $_SESSION['ubwset_langs_wsds']['en']  = 'Website Description';
  $_SESSION['ubwset_langs_wsds']['de']  = 'Website Description';
  $_SESSION['ubwset_langs_wsds']['es']  = 'Website Description';
  $_SESSION['ubwset_langs_wsds']['fr']  = 'Website Description';
  $_SESSION['ubwset_langs_wsds']['it']  = 'Website Description';
  $_SESSION['ubwset_langs_wsds']['ro']  = 'Website Description';
  
  $_SESSION['ubwset_langs_wskw']['en']  = 'Website Keywords';
  $_SESSION['ubwset_langs_wskw']['de']  = 'Website Keywords';
  $_SESSION['ubwset_langs_wskw']['es']  = 'Website Keywords';
  $_SESSION['ubwset_langs_wskw']['fr']  = 'Website Keywords';
  $_SESSION['ubwset_langs_wskw']['it']  = 'Website Keywords';
  $_SESSION['ubwset_langs_wskw']['ro']  = 'Website Keywords';
  
  $_SESSION['ubwset_langs_ftt']['en']   = 'Featured';
  $_SESSION['ubwset_langs_ftt']['de']   = 'Featured';
  $_SESSION['ubwset_langs_ftt']['es']   = 'Featured';
  $_SESSION['ubwset_langs_ftt']['fr']   = 'Featured';
  $_SESSION['ubwset_langs_ftt']['it']   = 'Featured';
  $_SESSION['ubwset_langs_ftt']['ro']   = 'Featured';

  $_SESSION['ubwset_langs_fds']['en']   = 'details ...';
  $_SESSION['ubwset_langs_fds']['de']   = 'details ...';
  $_SESSION['ubwset_langs_fds']['es']   = 'details ...';
  $_SESSION['ubwset_langs_fds']['fr']   = 'details ...';
  $_SESSION['ubwset_langs_fds']['it']   = 'details ...';
  $_SESSION['ubwset_langs_fds']['ro']   = 'details ...';
  
  $_SESSION['ubwset_cfg_dbs_01']        = 'on';
  $_SESSION['ubwset_cfg_dbs_02']        = 'on';
}
if(isset($_POST['set_dbmy']))           {$_SESSION['ubwset_set_dbmy']                   = $_POST['set_dbmy'];}
if(isset($_POST['set_dbtype']))         {$_SESSION['ubwset_set_dbtype']                 = $_POST['set_dbtype'];}
if(isset($_POST['set_dbhost']))         {$_SESSION['ubwset_set_dbhost']                 = $_POST['set_dbhost'];}
if(isset($_POST['set_dbport']))         {$_SESSION['ubwset_set_dbport']                 = $_POST['set_dbport'];}
if(isset($_POST['set_dbport_my']))      {$_SESSION['ubwset_set_dbport_my']              = $_POST['set_dbport_my'];}
if(isset($_POST['set_dbport_pg']))      {$_SESSION['ubwset_set_dbport_pg']              = $_POST['set_dbport_pg'];}
if(isset($_POST['set_dbuser']))         {$_SESSION['ubwset_set_dbuser']                 = $_POST['set_dbuser'];}
if(isset($_POST['set_dbpass']))         {$_SESSION['ubwset_set_dbpass']                 = $_POST['set_dbpass'];}
if(isset($_POST['set_dbname']))         {$_SESSION['ubwset_set_dbname']                 = $_POST['set_dbname'];}

if(isset($_POST['set_site_url1']))      {$_SESSION['ubwset_set_site_url1']              = $_POST['set_site_url1'];}
if(isset($_POST['set_site_url2']))      {$_SESSION['ubwset_set_site_url2']              = $_POST['set_site_url2'];}
if(isset($_POST['set_site_root1']))     {$_SESSION['ubwset_set_site_root1']             = $_POST['set_site_root1'];}
if(isset($_POST['set_site_root2']))     {$_SESSION['ubwset_set_site_root2']             = $_POST['set_site_root2'];}
if(isset($_POST['set_dbcfg']))          {$_SESSION['ubwset_set_dbcfg']                  = $_POST['set_dbcfg'];}
if(isset($_POST['set_dbthm']))          {$_SESSION['ubwset_set_dbthm']                  = $_POST['set_dbthm'];}
if(isset($_POST['set_pre']))            {$_SESSION['ubwset_set_pre']                    = $_POST['set_pre'];}

if(isset($_POST['cfg_start']))          {$_SESSION['ubwset_cfg_start']                  = $_POST['cfg_start'];}
if(isset($_POST['cfg_clcom']))          {$_SESSION['ubwset_cfg_clcom']                  = $_POST['cfg_clcom'];}
if(isset($_POST['cfg_clnam']))          {$_SESSION['ubwset_cfg_clnam']                  = $_POST['cfg_clnam'];}
if(isset($_POST['cfg_dvcom']))          {$_SESSION['ubwset_cfg_dvcom']                  = $_POST['cfg_dvcom'];}
if(isset($_POST['cfg_dvurl']))          {$_SESSION['ubwset_cfg_dvurl']                  = $_POST['cfg_dvurl'];}
if(isset($_POST['cfg_dvnam']))          {$_SESSION['ubwset_cfg_dvnam']                  = $_POST['cfg_dvnam'];}
if(isset($_POST['cfg_desig']))          {$_SESSION['ubwset_cfg_desig']                  = $_POST['cfg_desig'];}
if(isset($_POST['cfg_publ']))           {$_SESSION['ubwset_cfg_publ']                   = $_POST['cfg_publ'];}
if(isset($_POST['cfg_ratng']))          {$_SESSION['ubwset_cfg_ratng']                  = $_POST['cfg_ratng'];}
if(isset($_POST['cfg_distr']))          {$_SESSION['ubwset_cfg_distr']                  = $_POST['cfg_distr'];}
if(isset($_POST['cfg_robots']))         {$_SESSION['ubwset_cfg_robots']                 = $_POST['cfg_robots'];}
if(isset($_POST['cfg_prag']))           {$_SESSION['ubwset_cfg_prag']                   = $_POST['cfg_prag'];}
if(isset($_POST['cfg_exp']))            {$_SESSION['ubwset_cfg_exp']                    = $_POST['cfg_exp'];}
if(isset($_POST['cfg_cache']))          {$_SESSION['ubwset_cfg_cache']                  = $_POST['cfg_cache'];}

if(isset($_POST['cfg_lang']))           {$_SESSION['ubwset_cfg_lang']                   = $_POST['cfg_lang'];}
if(isset($_POST['cfg_theme']))          {$_SESSION['ubwset_cfg_theme']                  = $_POST['cfg_theme'];}

if(isset($_POST['cfg_cnt_en']))         {$_SESSION['ubwset_cfg_cnt_en']                 = $_POST['cfg_cnt_en'];}
if(isset($_POST['cfg_cnt_de']))         {$_SESSION['ubwset_cfg_cnt_de']                 = $_POST['cfg_cnt_de'];}
if(isset($_POST['cfg_cnt_es']))         {$_SESSION['ubwset_cfg_cnt_es']                 = $_POST['cfg_cnt_es'];}
if(isset($_POST['cfg_cnt_fr']))         {$_SESSION['ubwset_cfg_cnt_fr']                 = $_POST['cfg_cnt_fr'];}
if(isset($_POST['cfg_cnt_it']))         {$_SESSION['ubwset_cfg_cnt_it']                 = $_POST['cfg_cnt_it'];}
if(isset($_POST['cfg_cnt_ro']))         {$_SESSION['ubwset_cfg_cnt_ro']                 = $_POST['cfg_cnt_ro'];}
if(isset($_POST['cfg_cnt_shw']))        {$_SESSION['ubwset_cfg_cnt_shw']                = $_POST['cfg_cnt_shw'];}

if(isset($_POST['cfg_lang_on']))        {$_SESSION['ubwset_cfg_lang_on']                = $_POST['cfg_lang_on'];}
if(isset($_POST['cfg_usr_on']))         {$_SESSION['ubwset_cfg_usr_on']                 = $_POST['cfg_usr_on'];}
if(isset($_POST['cfg_theme_on']))       {$_SESSION['ubwset_cfg_theme_on']               = $_POST['cfg_theme_on'];}
if(isset($_POST['cfg_cart_on']))        {$_SESSION['ubwset_cfg_cart_on']                = $_POST['cfg_cart_on'];}
if(isset($_POST['cfg_stats_on']))       {$_SESSION['ubwset_cfg_stats_on']               = $_POST['cfg_stats_on'];}
if(isset($_POST['cfg_stats_ip']))       {$_SESSION['ubwset_cfg_stats_ip']               = $_POST['cfg_stats_ip'];}
if(isset($_POST['cfg_ftr_on']))         {$_SESSION['ubwset_cfg_ftr_on']                 = $_POST['cfg_ftr_on'];}
if(isset($_POST['cfg_ftr_lmt']))        {$_SESSION['ubwset_cfg_ftr_lmt']                = $_POST['cfg_ftr_lmt'];}
if(isset($_POST['cfg_timer']))          {$_SESSION['ubwset_cfg_timer']                  = $_POST['cfg_timer'];}
if(isset($_POST['cfg_debug']))          {$_SESSION['ubwset_cfg_debug']                  = $_POST['cfg_debug'];}
if(isset($_POST['cfg_cpy']))            {$_SESSION['ubwset_cfg_cpy']                    = $_POST['cfg_cpy'];}
if(isset($_POST['cfg_cpydev']))         {$_SESSION['ubwset_cfg_cpydev']                 = $_POST['cfg_cpydev'];}
if(isset($_POST['cfg_smap']))           {$_SESSION['ubwset_cfg_smap']                   = $_POST['cfg_smap'];}
if(isset($_POST['cfg_yah']))            {$_SESSION['ubwset_cfg_yah']                    = $_POST['cfg_yah'];}
if(isset($_POST['cfg_nws']))            {$_SESSION['ubwset_cfg_nws']                    = $_POST['cfg_nws'];}
if(isset($_POST['cfg_src']))            {$_SESSION['ubwset_cfg_src']                    = $_POST['cfg_src'];}

if(isset($_POST['cfg_ftr_pics_0']))     {$_SESSION['ubwset_cfg_pics_0']                 = $_POST['cfg_pics_0'];}
if(isset($_POST['cfg_ftr_pics_1']))     {$_SESSION['ubwset_cfg_pics_1']                 = $_POST['cfg_pics_1'];}
if(isset($_POST['cfg_ftr_pics_2']))     {$_SESSION['ubwset_cfg_pics_2']                 = $_POST['cfg_pics_2'];}
if(isset($_POST['cfg_ftr_pics_3']))     {$_SESSION['ubwset_cfg_pics_3']                 = $_POST['cfg_pics_3'];}
if(isset($_POST['cfg_ftr_pics_4']))     {$_SESSION['ubwset_cfg_pics_4']                 = $_POST['cfg_pics_4'];}

if(isset($_POST['cfg_cnt_posted']))     {$_SESSION['ubwset_cfg_cnt_posted']             = $_POST['cfg_cnt_posted'];}
if(isset($_POST['cfg_cnt_tags']))       {$_SESSION['ubwset_cfg_cnt_tags']               = $_POST['cfg_cnt_tags'];}
if(isset($_POST['cfg_cnt_cmnts']))      {$_SESSION['ubwset_cfg_cnt_cmnts']              = $_POST['cfg_cnt_cmnts'];}
if(isset($_POST['cfg_cnt_lnks']))       {$_SESSION['ubwset_cfg_cnt_lnks']               = $_POST['cfg_cnt_lnks'];}
if(isset($_POST['cfg_cnt_dlds']))       {$_SESSION['ubwset_cfg_cnt_dlds']               = $_POST['cfg_cnt_dlds'];}
  
if(isset($_POST['cfg_blg_posted']))     {$_SESSION['ubwset_cfg_blg_posted']             = $_POST['cfg_blg_posted'];}
if(isset($_POST['cfg_blg_tags']))       {$_SESSION['ubwset_cfg_blg_tags']               = $_POST['cfg_blg_tags'];}
if(isset($_POST['cfg_blg_cmnts']))      {$_SESSION['ubwset_cfg_blg_cmnts']              = $_POST['cfg_blg_cmnts'];}
if(isset($_POST['cfg_blg_lnks']))       {$_SESSION['ubwset_cfg_blg_lnks']               = $_POST['cfg_blg_lnks'];}
if(isset($_POST['cfg_blg_dlds']))       {$_SESSION['ubwset_cfg_blg_dlds']               = $_POST['cfg_blg_dlds'];}





if(isset($_POST['set_cfg_ln_inst']['en']))                                              {$_SESSION['ubwset_cfg_ln_inst']['en'] = $_POST['set_cfg_ln_inst']['en'];}
else if(!isset($_POST['set_cfg_ln_inst']['en']) && isset($_POST['langs_wstt']['en']))   {$_SESSION['ubwset_cfg_ln_inst']['en'] = 'off';}
if(isset($_POST['set_cfg_ln_inst']['de']))                                              {$_SESSION['ubwset_cfg_ln_inst']['de'] = $_POST['set_cfg_ln_inst']['de'];}
else if(!isset($_POST['set_cfg_ln_inst']['de']) && isset($_POST['langs_wstt']['de']))   {$_SESSION['ubwset_cfg_ln_inst']['de'] = 'off';}
if(isset($_POST['set_cfg_ln_inst']['es']))                                              {$_SESSION['ubwset_cfg_ln_inst']['es'] = $_POST['set_cfg_ln_inst']['es'];}
else if(!isset($_POST['set_cfg_ln_inst']['es']) && isset($_POST['langs_wstt']['es']))   {$_SESSION['ubwset_cfg_ln_inst']['es'] = 'off';}
if(isset($_POST['set_cfg_ln_inst']['fr']))                                              {$_SESSION['ubwset_cfg_ln_inst']['fr'] = $_POST['set_cfg_ln_inst']['fr'];}
else if(!isset($_POST['set_cfg_ln_inst']['fr']) && isset($_POST['langs_wstt']['fr']))   {$_SESSION['ubwset_cfg_ln_inst']['fr'] = 'off';}
if(isset($_POST['set_cfg_ln_inst']['it']))                                              {$_SESSION['ubwset_cfg_ln_inst']['it'] = $_POST['set_cfg_ln_inst']['it'];}
else if(!isset($_POST['set_cfg_ln_inst']['it']) && isset($_POST['langs_wstt']['it']))   {$_SESSION['ubwset_cfg_ln_inst']['it'] = 'off';}
if(isset($_POST['set_cfg_ln_inst']['ro']))                                              {$_SESSION['ubwset_cfg_ln_inst']['ro'] = $_POST['set_cfg_ln_inst']['ro'];}
else if(!isset($_POST['set_cfg_ln_inst']['ro']) && isset($_POST['langs_wstt']['ro']))   {$_SESSION['ubwset_cfg_ln_inst']['ro'] = 'off';}

if(isset($_POST['set_cfg_ln_cfg']['en']))                                               {$_SESSION['ubwset_cfg_ln_cfg']['en'] = $_POST['set_cfg_ln_cfg']['en'];}
else if(!isset($_POST['set_cfg_ln_cfg']['en']) && isset($_POST['langs_wstt']['en']))    {$_SESSION['ubwset_cfg_ln_cfg']['en'] = 'off';}
if(isset($_POST['set_cfg_ln_cfg']['de']))                                               {$_SESSION['ubwset_cfg_ln_cfg']['de'] = $_POST['set_cfg_ln_cfg']['de'];}
else if(!isset($_POST['set_cfg_ln_cfg']['de']) && isset($_POST['langs_wstt']['de']))    {$_SESSION['ubwset_cfg_ln_cfg']['de'] = 'off';}
if(isset($_POST['set_cfg_ln_cfg']['es']))                                               {$_SESSION['ubwset_cfg_ln_cfg']['es'] = $_POST['set_cfg_ln_cfg']['es'];}
else if(!isset($_POST['set_cfg_ln_cfg']['es']) && isset($_POST['langs_wstt']['es']))    {$_SESSION['ubwset_cfg_ln_cfg']['es'] = 'off';}
if(isset($_POST['set_cfg_ln_cfg']['fr']))                                               {$_SESSION['ubwset_cfg_ln_cfg']['fr'] = $_POST['set_cfg_ln_cfg']['fr'];}
else if(!isset($_POST['set_cfg_ln_cfg']['fr']) && isset($_POST['langs_wstt']['fr']))    {$_SESSION['ubwset_cfg_ln_cfg']['fr'] = 'off';}
if(isset($_POST['set_cfg_ln_cfg']['it']))                                               {$_SESSION['ubwset_cfg_ln_cfg']['it'] = $_POST['set_cfg_ln_cfg']['it'];}
else if(!isset($_POST['set_cfg_ln_cfg']['it']) && isset($_POST['langs_wstt']['it']))    {$_SESSION['ubwset_cfg_ln_cfg']['it'] = 'off';}
if(isset($_POST['set_cfg_ln_cfg']['ro']))                                               {$_SESSION['ubwset_cfg_ln_cfg']['ro'] = $_POST['set_cfg_ln_cfg']['ro'];}
else if(!isset($_POST['set_cfg_ln_cfg']['ro']) && isset($_POST['langs_wstt']['ro']))    {$_SESSION['ubwset_cfg_ln_cfg']['ro'] = 'off';}

if(isset($_POST['langs_wstt']['en'])) {$_SESSION['ubwset_langs_wstt']['en']             = $_POST['langs_wstt']['en'];}
if(isset($_POST['langs_wstt']['de'])) {$_SESSION['ubwset_langs_wstt']['de']             = $_POST['langs_wstt']['de'];}
if(isset($_POST['langs_wstt']['es'])) {$_SESSION['ubwset_langs_wstt']['es']             = $_POST['langs_wstt']['es'];}
if(isset($_POST['langs_wstt']['fr'])) {$_SESSION['ubwset_langs_wstt']['fr']             = $_POST['langs_wstt']['fr'];}
if(isset($_POST['langs_wstt']['it'])) {$_SESSION['ubwset_langs_wstt']['it']             = $_POST['langs_wstt']['it'];}
if(isset($_POST['langs_wstt']['ro'])) {$_SESSION['ubwset_langs_wstt']['ro']             = $_POST['langs_wstt']['ro'];}

if(isset($_POST['langs_wsds']['en'])) {$_SESSION['ubwset_langs_wsds']['en']             = $_POST['langs_wsds']['en'];}
if(isset($_POST['langs_wsds']['de'])) {$_SESSION['ubwset_langs_wsds']['de']             = $_POST['langs_wsds']['de'];}
if(isset($_POST['langs_wsds']['es'])) {$_SESSION['ubwset_langs_wsds']['es']             = $_POST['langs_wsds']['es'];}
if(isset($_POST['langs_wsds']['fr'])) {$_SESSION['ubwset_langs_wsds']['fr']             = $_POST['langs_wsds']['fr'];}
if(isset($_POST['langs_wsds']['it'])) {$_SESSION['ubwset_langs_wsds']['it']             = $_POST['langs_wsds']['it'];}
if(isset($_POST['langs_wsds']['ro'])) {$_SESSION['ubwset_langs_wsds']['ro']             = $_POST['langs_wsds']['ro'];}

if(isset($_POST['langs_wskw']['en'])) {$_SESSION['ubwset_langs_wskw']['en']             = $_POST['langs_wskw']['en'];}
if(isset($_POST['langs_wskw']['de'])) {$_SESSION['ubwset_langs_wskw']['de']             = $_POST['langs_wskw']['de'];}
if(isset($_POST['langs_wskw']['es'])) {$_SESSION['ubwset_langs_wskw']['es']             = $_POST['langs_wskw']['es'];}
if(isset($_POST['langs_wskw']['fr'])) {$_SESSION['ubwset_langs_wskw']['fr']             = $_POST['langs_wskw']['fr'];}
if(isset($_POST['langs_wskw']['it'])) {$_SESSION['ubwset_langs_wskw']['it']             = $_POST['langs_wskw']['it'];}
if(isset($_POST['langs_wskw']['ro'])) {$_SESSION['ubwset_langs_wskw']['ro']             = $_POST['langs_wskw']['ro'];}
  
if(isset($_POST['langs_ftt']['en']))  {$_SESSION['ubwset_langs_ftt']['en']              = $_POST['langs_ftt']['en'];}
if(isset($_POST['langs_ftt']['de']))  {$_SESSION['ubwset_langs_ftt']['de']              = $_POST['langs_ftt']['de'];}
if(isset($_POST['langs_ftt']['es']))  {$_SESSION['ubwset_langs_ftt']['es']              = $_POST['langs_ftt']['es'];}
if(isset($_POST['langs_ftt']['fr']))  {$_SESSION['ubwset_langs_ftt']['fr']              = $_POST['langs_ftt']['fr'];}
if(isset($_POST['langs_ftt']['it']))  {$_SESSION['ubwset_langs_ftt']['it']              = $_POST['langs_ftt']['it'];}
if(isset($_POST['langs_ftt']['ro']))  {$_SESSION['ubwset_langs_ftt']['ro']              = $_POST['langs_ftt']['ro'];}

if(isset($_POST['langs_fds']['en']))  {$_SESSION['ubwset_langs_fds']['en']              = $_POST['langs_fds']['en'];}
if(isset($_POST['langs_fds']['de']))  {$_SESSION['ubwset_langs_fds']['de']              = $_POST['langs_fds']['de'];}
if(isset($_POST['langs_fds']['es']))  {$_SESSION['ubwset_langs_fds']['es']              = $_POST['langs_fds']['es'];}
if(isset($_POST['langs_fds']['fr']))  {$_SESSION['ubwset_langs_fds']['fr']              = $_POST['langs_fds']['fr'];}
if(isset($_POST['langs_fds']['it']))  {$_SESSION['ubwset_langs_fds']['it']              = $_POST['langs_fds']['it'];}
if(isset($_POST['langs_fds']['ro']))  {$_SESSION['ubwset_langs_fds']['ro']              = $_POST['langs_fds']['ro'];}

if(isset($_POST['set_cfg_dbs_01']))                                                     {$_SESSION['ubwset_cfg_dbs_01'] = $_POST['set_cfg_dbs_01'];}
else if(!isset($_POST['set_cfg_dbs_01']) && isset($_POST['cfg_dbs_00']))                {$_SESSION['ubwset_cfg_dbs_01'] = 'off';}
if(isset($_POST['set_cfg_dbs_02']))                                                     {$_SESSION['ubwset_cfg_dbs_02'] = $_POST['set_cfg_dbs_02'];}
else if(!isset($_POST['set_cfg_dbs_02']) && isset($_POST['cfg_dbs_00']))                {$_SESSION['ubwset_cfg_dbs_02'] = 'off';}

if(isset($_POST['remove_db_data']))                                                     {$_SESSION['ubwset_cfg_remove_db_data'] = $_POST['remove_db_data'];}
else if(!isset($_POST['remove_db_data']) && isset($_POST['proceed']))                   {$_SESSION['ubwset_cfg_remove_db_data'] = 'off';}

if(isset($_POST['remove_db_tables']))                                                   {$_SESSION['ubwset_cfg_remove_db_tables'] = $_POST['remove_db_tables'];}
else if(!isset($_POST['remove_db_tables']) && isset($_POST['proceed']))                 {$_SESSION['ubwset_cfg_remove_db_tables'] = 'off';}

if(isset($_POST['remove_user_files']))                                                  {$_SESSION['ubwset_cfg_remove_user_files'] = $_POST['remove_user_files'];}
else if(!isset($_POST['remove_user_files']) && isset($_POST['proceed']))                {$_SESSION['ubwset_cfg_remove_user_files'] = 'off';}

if(isset($_POST['remove_engine_files']))                                                {$_SESSION['ubwset_cfg_remove_engine_files'] = $_POST['remove_engine_files'];}
else if(!isset($_POST['remove_engine_files']) && isset($_POST['proceed']))              {$_SESSION['ubwset_cfg_remove_engine_files'] = 'off';}
?>