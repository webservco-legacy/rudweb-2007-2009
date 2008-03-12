<?php
/*
./install/setup.php
16:36 2007-12-28
*/
error_reporting(E_ALL);

if(is_file("./cfg.inc.php")) {require_once "./cfg.inc.php";}
else {die("no target specified!");}

for($count_tv=1; $count_tv<=count($target_vars); $count_tv++){
  $raw_target_vars = explode('/', $target_vars[$count_tv]);
  $target_vars_i = (count($raw_target_vars)) - 2;
  $target_vars_tt[$count_tv] = $raw_target_vars[$target_vars_i];
}

$target_var = $target_vars[1];
$step = "0";
$steps = "6";
$action = "update";
if(isset($_GET['target']) && in_array($_GET['target'] , $target_vars)) {$target_var = $_GET['target'];}
if(isset($_GET['step'])) {$step = $_GET['step'];}
if(isset($_GET['action'])) {$action = $_GET['action'];}

$source = $source_root;
$target = $target_root . $target_var;

$dfs = "0";
$dts = "0";
if(is_readable($target)) {
  $dfs = round((disk_free_space($target) / 1024) / 1024, 2);
  $dts = round((disk_total_space($target) / 1024) / 1024, 2);
}

if(!isset($_GET['action']) && ($dfs == "0" && $dts == "0")) {$action = "install";}

$raw_source = explode('/', $source);
$sourcei = (count($raw_source)) - 2;
$source_name = $raw_source[$sourcei];

$raw_target = explode('/', $target);
$targeti = (count($raw_target)) - 2;
$target_name = $raw_target[$targeti];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<HTML>
<HEAD>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
<META HTTP-EQUIV="content-language" CONTENT="en">
<TITLE>ubwinstall</TITLE>
<META NAME="distribution" CONTENT="Local">
<META NAME="robots" CONTENT="NOINDEX, NOFOLLOW">
<META HTTP-EQUIV="Content-Style-Type" CONTENT="text/css">
<STYLE type="text/css">
.total {background-color: #EEEEEE;}
.hdr {background-color: #BBBBBB;}
.cnt {background-color: #DDDDDD;}
.general {color: #333333; text-align: left; text-decoration: none; font-family: verdana, arial, helvetica, sans-serif; font-weight: normal; font-size: 10px;}
.act {color: #000000; text-align: right; text-decoration: none; font-family: verdana, arial, helvetica, sans-serif; font-weight: normal; font-size: 10px; border-style: dotted; border-color: #000000; border-top-width: 0px; border-bottom-width: 1px; border-left-width: 0px; border-right-width: 0px;}
.nam {color: #000000; text-align: left; text-decoration: none; font-family: verdana, arial, helvetica, sans-serif; font-weight: bold; font-size: 10px; border-style: dotted; border-color: #000000; border-top-width: 0px; border-bottom-width: 1px; border-left-width: 0px; border-right-width: 0px;}
.msg {color: #000000; text-align: center; text-decoration: none; font-family: verdana, arial, helvetica, sans-serif; font-style: italic; font-size: 10px; border-style: dotted; border-color: #000000; border-top-width: 0px; border-bottom-width: 1px; border-left-width: 0px; border-right-width: 0px;}
.rst {color: #AAAAAA; text-align: left; text-decoration: none; font-family: verdana, arial, helvetica, sans-serif; font-weight: bold; font-size: 10px; border-style: dotted; border-color: #000000; border-top-width: 0px; border-bottom-width: 1px; border-left-width: 0px; border-right-width: 0px;}
.rst_ok {color: #009900; text-align: left; text-decoration: none; font-family: verdana, arial, helvetica, sans-serif; font-weight: bold; font-size: 10px; border-style: dotted; border-color: #000000; border-top-width: 0px; border-bottom-width: 1px; border-left-width: 0px; border-right-width: 0px;}
.rst_err { color: #990000; text-align: left; text-decoration: none; font-family: verdana, arial, helvetica, sans-serif; font-weight: bold; font-size: 10px; border-style: dotted; border-color: #000000; border-top-width: 0px; border-bottom-width: 1px; border-left-width: 0px; border-right-width: 0px;}
</STYLE>
</HEAD>
<BODY CLASS="general">
<?php
echo "\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
if($dfs == "0" && $dts == "0") {
  echo  "\n<TR><TD CLASS=\"total\">\ntarget doesn't exist. <A CLASS=\"general\" HREF=\"./setup.php?step=".$step."&amp;action=install&amp;target=".$target_var."\">install</A> is recommended.\n</TD></TR>";
}
else {
  echo  "\n<TR><TD CLASS=\"total\">" . $dfs . " / " . $dts . " MB available space</TD></TR>";
}
echo "\n</TABLE>";

if ( $step== "0") {
  echo "\n\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
  echo  "\n<TR><TD CLASS=\"total\">";
  echo "\n<A CLASS=\"general\" HREF=\"./setup.php\">install</A>";
  echo "\n</TD></TR>";
  echo "\n</TABLE>";
  
  echo "\n\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
  echo "\n<TR><TD CLASS=\"total\">";
  echo "\nsource: <B>" . $source_name . "</B>";
  echo "\n</TD></TR>";
  echo "\n<TR><TD CLASS=\"total\">";
  echo "\ntarget: <B>" . $target_name . "</B>";
  for($target_tt_i=1; $target_tt_i<=count($target_vars_tt); $target_tt_i++) {
    if($target_vars_tt[$target_tt_i] != $target_name) {
      echo "\n&#160;&#160;[<A CLASS=\"general\" HREF=\"./setup.php?target=".$target_vars[$target_tt_i]."\">".$target_vars_tt[$target_tt_i]."</A>]";
    }
  }
  echo "\n</TD></TR>";
  echo  "\n<TR><TD CLASS=\"total\">";
  echo "\naction: ";
  if ($action == "install") {
    echo "<B>install</B>";
    echo "&#160;&#160;[<A CLASS=\"general\" HREF=\"./setup.php?step=".$step."&amp;action=update&amp;target=".$target_var."\">update</A>]";
  }
  else if ($action == "update") {
    echo "<B>update</B>";
    echo "&#160;&#160;[<A CLASS=\"general\" HREF=\"./setup.php?step=".$step."&amp;action=install&amp;target=".$target_var."\">install</A>]";
  }
  echo "\n</TD></TR>";
  echo "\n</TABLE>";

  echo "\n\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
  echo "\n<TR><TD CLASS=\"total\" WIDTH=\"10\">1</TD><TD CLASS=\"total\">";
  echo "\n<A CLASS=\"general\" HREF=\"./setup.php?step=1&amp;action=".$action."&amp;target=".$target_var."\">./</A>";
  echo "\n</TD></TR>";
  echo "\n<TR><TD CLASS=\"total\">2</TD><TD CLASS=\"total\">";
  echo "\n<A CLASS=\"general\" HREF=\"./setup.php?step=2&amp;action=".$action."&amp;target=".$target_var."\">./admin/</A>";
  echo "\n</TD></TR>";
  echo "\n<TR><TD CLASS=\"total\">3</TD><TD CLASS=\"total\">";
  echo "\n<A CLASS=\"general\" HREF=\"./setup.php?step=3&amp;action=".$action."&amp;target=".$target_var."\">./inc/</A>";
  echo "\n</TD></TR>";
  echo "\n<TR><TD CLASS=\"total\">4</TD><TD CLASS=\"total\">";
  echo "\n<A CLASS=\"general\" HREF=\"./setup.php?step=4&amp;action=".$action."&amp;target=".$target_var."\">./lib/</A>";
  echo "\n</TD></TR>";
  echo "\n<TR><TD CLASS=\"total\">5</TD><TD CLASS=\"total\">";
  echo "\n<A CLASS=\"general\" HREF=\"./setup.php?step=5&amp;action=".$action."&amp;target=".$target_var."\">./themes/</A>";
  echo "\n</TD></TR>";
  echo "\n<TR><TD CLASS=\"total\">6</TD><TD CLASS=\"total\">";
  echo "\n<A CLASS=\"general\" HREF=\"./setup.php?step=6&amp;action=".$action."&amp;target=".$target_var."\">./var/</A>";
  echo "\n</TD></TR>";
  echo "\n</TABLE>";
 
  echo "\n\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
  echo "\n<TR><TD CLASS=\"total\">";
  echo "\n<A CLASS=\"general\" HREF=\"./setup.php?step=1&amp;action=".$action."&amp;target=".$target_var."\">proceed</A>";
  echo "\n</TD></TR></TABLE>";
}
else if ($step == "done") {
  echo "\n\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
  echo "\n<TR><TD CLASS=\"total\">";
  echo "\n<A CLASS=\"general\" HREF=\"./setup.php?target=".$target_var."\">install</A>";
  echo "\n</TD></TR>";
  echo "\n<TR><TD CLASS=\"total\">";
  echo "\ntarget: <B>" . $target_name . "</B>";
  echo "\n<BR><BR>";
  echo "\n<B>" . $action . "</B> complete!";
  echo "\n</TD></TR></TABLE>";
}
else {
  $next_step = $step + 1;
  require_once "./str.".$step.".inc.php";
  echo "\n\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
  require_once "./act.inc.php";
  echo "\n</TABLE>";
  echo "\n\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
  echo "\n<TR><TD CLASS=\"total\">";
  if($step == $steps) {
    echo "\n<A CLASS=\"general\" HREF=\"./setup.php?step=done&amp;action=".$action."&amp;target=".$target_var."\">done</A>";
  }
  else {
    echo "\n<A CLASS=\"general\" HREF=\"./setup.php?step=0&amp;action=".$action."&amp;target=".$target_var."\">abort</A>";
    echo "\n&#160;&#160;&#160;";
    echo "\n<A CLASS=\"general\" HREF=\"./setup.php?step=".$next_step."&amp;action=".$action."&amp;target=".$target_var."\">next</A>";
  }
  echo "\n</TD></TR></TABLE>\n\n";
}
clearstatcache();
?>
</BODY>
</HTML>