<?php
/*
./setup/cfg/func.inc.php
11:18 2008-01-09
*/
function generate_config_str($eol, $now) {
  $c  = '<?php'.$eol.'/*'.$eol.'./inc/config.inc.php'.$eol.$now.$eol.'*/'.$eol;
  $c .= $eol . 'if(!defined(\'_UBWS_PUBFIL\')) {require_once \'./../lib/404.php\';}';
  $c .= $eol . '';
  //$c .= $eol . '// DATABASE CONNECTION SETTINGS';
  $c .= $eol . '$ubws_dbhost = \'localhost\';';
  $c .= $eol . '$ubws_dbuser = \'ubws\';';
  $c .= $eol . '$ubws_dbpass = \'ubws\';';
  $c .= $eol . '$ubws_dbname = \'ubws\';';
  //$c .= $eol . '// WEBSITE URL';
  $c .= $eol . 'define(\'_UBWS_SITE_URL\',\'http://80.96.77.225:1980/work/ub/ubws/\');';
  $c .= $eol . '//define(\'_UBWS_SITE_URL\',\'http://www.server.com/\');';
  //$c .= $eol . '// WEBSITE DIRECTORY';
  $c .= $eol . 'define(\'_UBWS_SITE_DIR\',\'d:/home/devel/server/htdocs/work/ub/ubws/\');';
  $c .= $eol . '//define(\'_UBWS_SITE_DIR\',\'/home/www/public_html/\');';
  //$c .= $eol . '// TAKE SITE SETTINGS FROM DB (1) OR FROM FILE (0)';
  $c .= $eol . 'define(\'_UBWS_DBCFG\', \'1\');';
  //$c .= $eol . '// TAKE THEME SETTINGS FROM DB(1) OR FROM FILE (0)';
  $c .= $eol . 'define(\'_UBWS_DBTHM\', \'0\');';
  //$c .= $eol . '// GLOBAL PREFIX, INCLUDING DATABASE TABLES PREFIX';
  $c .= $eol . 'define(\'_UBWS_PRE\', \'ubws_\');';
  $c .= $eol . '?>';
  return $c;
}
function check_cfg_file($path, $file) {
  $err = 0;
  if(!is_dir($path)) {$err = 1;} /* directory doesn't exist */
  else if(!is_writable($path)) {$err = 2;} /* directory isn't writable */
  else if(file_exists($path.$file)) {$err = 3;} /* file already exists */
  else if(file_exists($path.$file) && !is_writable($path.$file)) {$err = 4;} /* file exists but writing is not possible */
  return $err;
}
function write_config_str($str, $file) {
  $f = fopen($file, 'wb');
  if($f !== false) {
    $w = fwrite($f, $str);
    if ($w === false) {echo "write failed";}
    else echo "write ok";
    fclose($f);
  }
  else {
    echo "write failed";
  }
}
function get_version($location) {
  if(is_readable($location.'inc/ubwsc.inc.php')) {
    $version_raw = file($location.'inc/ubwsc.inc.php');
    $version_full = eregi_replace('define\("_UBWS_SITE_VERSION", "', '', $version_raw['8']);
    $version['0']  = eregi_replace('"\);', '', $version_full);
  }
  else {
    $version['0'] = '0.0.000000';
  }
  $version['1'] = substr($version['0'], 0, 3);
  $version['2'] = '20' . substr($version['0'], 4, 2) . '-' .substr($version['0'], 6, 2) . '-' . substr($version['0'], 8, 2);
  $version['3'] = substr($version['0'], 4, 6);
  return $version;
}
function compare_version($version_ub, $version_cl) {
  $compare = null;
  if($version_cl['0'] == '0.0.000000') {$compare = 0;} // TARGET DOESN'T EXIST
  else if($version_ub['0'] == $version_cl['0']) {$compare = 1;} // IDENTICAL
  else if($version_ub['0'] != $version_cl['0']) {
    $compare = 2; // DIFFERENT
    if($version_ub['1'] == $version_cl['1']) {
      $compare = 3; // SAME VERSION DIFFERENT BUILD
      if($version_ub['2'] > $version_cl['2']) {
        $compare = 4; // NEWER BUILD AVAILABLE
      }
      else if($version_ub['2'] < $version_cl['2']) {
        $compare = 5; // YOUR BUILD IS NEWER THAN OURS :-)
      }
    }
    else if($version_ub['1'] > $version_cl['1']) {
      $compare = 6; // NEWER VERSION AVAILABLE
    }
    else if($version_ub['1'] < $version_cl['1']) {
      $compare = 7; // YOU HAVE A NEWER VERSION THAN US :-)
    }
  }
  return $compare;
}
function version_age($version_ub, $version_cl) {
  //date_default_timezone_set('Europe/Helsinki');
  $today = mktime(0,0,0,date("m"),date("d"),date("Y"));
  
  $version_ub_a = explode('-',$version_ub[2]);
  $version_ub_sec = mktime(0,0,0,$version_ub_a[1],$version_ub_a[2],$version_ub_a[0]);
  $diff[0] = (($today - $version_ub_sec) / 3600) / 24;
  if($version_cl['3'] == '000000') {$version_cl_sec = '0';$diff[1] = 'n/a';$diff[2] = 'n/a';}
  else {
    $version_cl_a = explode('-',$version_cl[2]);
    $version_cl_sec = mktime(0,0,0,$version_cl_a[1],$version_cl_a[2],$version_cl_a[0]);
    $diff[1] = (($today - $version_cl_sec) / 3600) / 24;
    $diff[2] = (($version_ub_sec - $version_cl_sec) / 3600) / 24;
  }
  return $diff;
}
function show_version_age($version_age) {
  $version_msg = 'n/a';
  if($version_age < '0' || $version_age == 'n/a') {$version_msg = 'n/a';}
  else if($version_age >= '0') {
    if     ($version_age == '0') {$version_msg = 'today';}
    else if($version_age == '1') {$version_msg = 'yesterday';}
    else                         {$version_msg = $version_age . ' days ago';}
  }
  return $version_msg;
}
function show_compare_version($compare_version) {
  switch($compare_version){
    case '0' : {$compare_msg = 'File not found.'; break;}
    case '1' : {$compare_msg = 'You already have the latest version!'; break;}
    case '2' : {$compare_msg = 'You have a different version.'; break;}
    case '3' : {$compare_msg = 'You have the latest version but a different build'; break;}
    case '4' : {$compare_msg = 'You have the latest version, but a new build is available!'; break;}
    case '5' : {$compare_msg = 'You have the latest version, but your build is newer.'; break;}
    case '6' : {$compare_msg = 'A new version is available'; break;}
    case '7' : {$compare_msg = 'Your version is newer!?!'; break;}
    default  : {break;}
  }
  return $compare_msg;
}
function check_gd() {
  if(function_exists('gd_info')) {
    $raw_gd_info = gd_info();
    $gd_check[0] = ereg_replace('[[:alpha:][:space:]()]+', '', $raw_gd_info['GD Version']);
    $gd_check[1] = $raw_gd_info['FreeType Support'];
  }
  else {
    $gd_check[0] = '0';
    $gd_check[1] = '0';
  }
  return $gd_check;
}

/* ********** ********** ********** ********** ********** ********** ********** ********** ********** ********** */
// DATABASE FUNCTIONS
function ubws_dbopen($db_type, $ubws_dbhost, $ubws_dbport, $ubws_dbuser, $ubws_dbpass, $ubws_dbname) {
  switch($db_type) {
    case "my": {
      $ubws_dbconn = mysql_connect($ubws_dbhost . ":" . $ubws_dbport , $ubws_dbuser, $ubws_dbpass) or die ("<B>Oups! [" . mysql_errno() . "]: " .mysql_error() . "</B>");
      mysql_select_db($ubws_dbname) or die ("<B>Oups! [" . mysql_errno() . "]: " .mysql_error() . "</B>");
      break;
    }
    case "pg": {
      $ubws_dbconn = pg_connect("host=" . $ubws_dbhost . " port=".$ubws_dbport." dbname=".$ubws_dbname." user=".$ubws_dbuser." password=".$ubws_dbpass."") or die("Oops! Could not connect" . pg_connection_status($ubws_dbconn));
      break;
    }
    default  : {$ubws_conn = NULL; break;}
  }
  return $ubws_dbconn;
}
function ubws_dbclose($db_type, $ubws_dbconn) {
  switch($db_type) {
    case "my": {mysql_close($ubws_dbconn); break;}
    case "pg": {pg_close($ubws_dbconn); break;}
    default  : {break;}
  }
}
function ubws_qres($db_type, $query) {
  switch($db_type) {
    case "my": {$result = mysql_query($query) or die("Oops! Query Failed. " . mysql_errno() . " : " . mysql_error()); break;}
    case "pg": {$result = pg_query($query) or die("Oops! Query Failed. " . pg_last_error()); break;}
    default  : {$result = NULL; break;}
  }
  return $result;
}
function ubws_qtotal($db_type, $result) {
  switch($db_type) {
    case "my": {$total = mysql_num_rows($result); break;}
    case "pg": {$total = pg_num_rows($result); break;}
    default  : {$total = NULL; break;}
  }
  return $total;
}
function ubws_fetch_assoc($db_type, $result) {
  switch($db_type) {
    case "my": {$row = mysql_fetch_assoc($result); break;}
    case "pg": {$row = pg_fetch_assoc($result); break;}
    default  : {$row = NULL; break;}
  }
  return $row;
}
function ubws_affected($db_type, $result) {
  switch($db_type) {
    case "my": {$affected = mysql_affected_rows(); break;}
    case "pg": {$affected = pg_affected_rows($result); break;}
    default  : {$affected = NULL; break;}
  }
  return $affected;
}
/* ********** ********** ********** ********** ********** ********** ********** ********** ********** ********** */
//rchillet at hotmail dot com (28-Apr-2006 09:45)

//improvement the function of heavyraptor with int offset parametre. 
if (!function_exists("stripos")) {
 function stripos($str,$needle,$offset=0)
 {
  return strpos(strtolower($str),strtolower($needle),$offset);
 }
}

?>