<?php
/*
./setup/cfg/init.inc.php
12:00 2008-01-09
*/

/* -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- */

for($count_tv=1; $count_tv<=count($target_vars); $count_tv++){
  $raw_target_vars = explode('/', $target_vars[$count_tv]);
  $target_vars_i = (count($raw_target_vars)) - 2;
  $target_vars_tt[$count_tv] = $raw_target_vars[$target_vars_i];
}

/* -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- */

//$steps = "6";
$step = null;
if(isset($_GET['step'])) {$step = $_GET['step'];}
$target_var = null;
if(isset($_GET['target']) && in_array($_GET['target'] , $target_vars)) {$target_var = $_GET['target'];}
$act = null;
if(isset($_GET['act']) && in_array($_GET['act'], $acts)) {$act = $_GET['act'];}
$set = null;
if(isset($_GET['set']) && in_array($_GET['set'], $sets)) {$set = $_GET['set'];}

$source = $source_root . 'kit/';
$target = $target_root . $target_var;

$dfs = "0";
$dts = "0";
if(is_readable($target)) {
  $dfs = round((disk_free_space($target) / 1024) / 1024, 2);
  $dts = round((disk_total_space($target) / 1024) / 1024, 2);
}

//if(!isset($_GET['act']) && ($dfs == "0" && $dts == "0")) {$act = "install";}

$raw_source = explode('/', $source);
$sourcei = (count($raw_source)) - 2;
$source_name = $raw_source[$sourcei];

$raw_target = explode('/', $target);
$targeti = (count($raw_target)) - 2;
$target_name = $raw_target[$targeti];

/* -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- */

// version stuff
$ub_version = get_version($source);
$cl_version = get_version($target);
$compare_version = compare_version($ub_version, $cl_version);
$version_age = version_age($ub_version, $cl_version);

/* -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- */
?>