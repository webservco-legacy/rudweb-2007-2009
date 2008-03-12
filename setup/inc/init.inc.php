<?php
/*
./setup/cfg/init.inc.php
15:55 2008-03-12
*/

/* -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- */

$step = null;
if(isset($_GET['step'])) {$step = $_GET['step'];}
$target_var = null;
$act = null;
if(isset($_GET['act']) && in_array($_GET['act'], $acts)) {$act = $_GET['act'];}
$set = null;
if(isset($_GET['set']) && in_array($_GET['set'], $sets)) {$set = $_GET['set'];}

$source = $source_root . 'kit/';
if(isset($_SESSION['rswebset_pid'])) {$pid = $_SESSION['rswebset_pid']; $target = $target_root . $target_vars[$pid];}
else if (isset($_GET['pid'])) {$pid = $_GET['pid']; $target = $target_root . $target_vars[$pid];}
else {$pid = '0'; $target = $target_root . $target_vars[1];}


$dfs = "0";
$dts = "0";
if(is_readable($target)) {
  $dfs = round((disk_free_space($target) / 1024) / 1024, 2);
  $dts = round((disk_total_space($target) / 1024) / 1024, 2);
}

/* -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- */

// version stuff
$ub_version = get_version($source);
$cl_version = get_version($target);
$compare_version = compare_version($ub_version, $cl_version);
$version_age = version_age($ub_version, $cl_version);
/* -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- */
?>