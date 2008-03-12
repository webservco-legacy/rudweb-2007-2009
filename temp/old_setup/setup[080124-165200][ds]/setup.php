<?php
/*
./setup/setup.php
11:15 2008-01-09
*/
error_reporting(E_ALL);

/* -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- */

// load  ubws configuration
if(is_file("./cfg/cfg_ubws.inc.php")) {require_once "./cfg/cfg_ubws.inc.php";}
else {die("could not load ubws config!");}

// load user configuration
if(is_file("./cfg/cfg_user.inc.php")) {require_once "./cfg/cfg_user.inc.php";}
else {die("could not load user config!");}

// load functions
if(is_file("./cfg/func.inc.php")) {require_once "./cfg/func.inc.php";}
else {die("could not load functions!");}

// init
if(is_file("./cfg/init.inc.php")) {require_once "./cfg/init.inc.php";}
else {die("could not initialize setup!");}

// session
if(is_file("./cfg/ses.inc.php")) {require_once "./cfg/ses.inc.php";}
else {die("could not initialize session!");}
/* -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- */

// HEADER
require_once './htm/hdr.inc.php';

require_once './inc/ubws.inc.php';
require_once './inc/ds.inc.php';

if($target_var == null && ($act == null && $set == null)) {
  require_once './inc/projects.inc.php';
}
else {
  echo "\n<TABLE BORDER=\"0\" CELLPADDING=\"0\" CELLSPACING=\"1\" BGCOLOR=\"#EEEEEE\" WIDTH=\"100%\">";
  echo "\n<TR><TD CLASS=\"cnt\" STYLE=\"width: 200px; height: 500px; vertical-align: top;\">";
  require_once './inc/info.inc.php';
  echo "<BR><BR>";
  require_once './cfg/' . 'inst.inc.php';
  echo "\n</TD><TD CLASS=\"cnt\"  STYLE=\"vertical-align: top;\">";
  require_once './act/' . $act . '.inc.php';
  echo "\n</TD></TR></TABLE>";
}

echo "<PRE>";
print_r($_GET);
echo "<BR>";
print_r($_POST);
echo "<BR>";
print_r($_SESSION);
echo "</PRE>";

// FOOTER
require_once './htm/ftr.inc.php';
?>