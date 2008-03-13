<?php
/*
./inc/modtimer.inc.php
12:03 2008-03-12
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once './../lib/404.php';}

/*
originally by ReDuX (http://www.daniweb.com/code/snippet70.html)
*/
// timer start function
function startTimer() {
  global $starttime;
  $mtime = microtime();
  $mtime = explode(' ', $mtime);
  $mtime = $mtime[1] + $mtime[0];
  $starttime = $mtime;
}
// timer end function
function endTimer() {
  global $starttime;
  $mtime = microtime();
  $mtime = explode(' ', $mtime);
  $mtime = $mtime[1] + $mtime[0];
  $endtime = $mtime;
  $totaltime = round(($endtime - $starttime), 5);
  return $totaltime;
}
function pageLoadTime() {
  if (_RUDWEB_CFG_TIMER === "1") {
    echo "<HR><DIV ALIGN=\"center\">Parse time: " . endTimer() . "</DIV>";
  }
}
?>