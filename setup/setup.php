<?php
/*
./setup/setup.php
13:20 2008-02-26
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
if(is_file("./inc/func.inc.php")) {require_once "./inc/func.inc.php";}
else {die("could not load functions!");}

// init
if(is_file("./inc/init.inc.php")) {require_once "./inc/init.inc.php";}
else {die("could not initialize setup!");}

// session
if(is_file("./inc/ses.inc.php")) {require_once "./inc/ses.inc.php";}
else {die("could not initialize session!");}

/* -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- */

// HEADER
require_once './htm/hdr.inc.php';

require_once './inc/ubws.inc.php';
require_once './inc/ds.inc.php';

if(!isset($_SESSION['ubwset_pid']) && ($act == null && $set == null)) {
  require_once './inc/projects.inc.php';
}
else {
  echo "\n<TABLE BORDER=\"0\" CELLPADDING=\"0\" CELLSPACING=\"1\" BGCOLOR=\"#EEEEEE\" WIDTH=\"100%\">";
  echo "\n<TR><TD CLASS=\"cnt\" STYLE=\"width: 200px; height: 500px; vertical-align: top;\">";
  require_once './inc/info.inc.php';
  echo "<BR><BR>";
  require_once './inc/' . 'inst.inc.php';
  echo "\n</TD><TD CLASS=\"cnt\"  STYLE=\"vertical-align: top;\">";
  require_once './act/' . $act . '.inc.php';
  echo "\n</TD></TR></TABLE>";
}

// FOOTER
require_once './htm/ftr.inc.php';
?>