<?php
/*
functions.inc.php
13:47 29.09.2007
*/

if(!defined('_UBWS_PUBFIL')) {require_once './../lib/404.php';}

/* ********** ********** ********** FILTER INPUT ********** ********** ********** */
function ubws_filter_input($string) {
  // strip whitespaces
  $parsed_string = trim($string);
  // convert special chars
  $parsed_string = htmlentities($parsed_string, ENT_NOQUOTES, 'UTF-8');
  //$parsed_string = htmlentities($parsed_string, ENT_QUOTES, 'UTF-8');
  $parsed_string = eregi_replace('&amp;','&',$parsed_string);
  $parsed_string = eregi_replace('&copy;','&#169;',$parsed_string);
  $parsed_string = eregi_replace('&deg;','&#176;',$parsed_string);
  $parsed_string = ereg_replace('&acirc;','&#226;',$parsed_string);
  $parsed_string = ereg_replace('&Acirc;','&#194;',$parsed_string);
  $parsed_string = ereg_replace('&icirc;','&#238;',$parsed_string);
  $parsed_string = ereg_replace('&Icirc;','&#206;',$parsed_string);
  // block tags
  $parsed_string = eregi_replace('&lt;','&#60;',$parsed_string);
  $parsed_string = eregi_replace('&gt;','&#62;',$parsed_string);
  // convert problem chars
  $parsed_string = eregi_replace('`','&#96;',$parsed_string);
  $parsed_string = eregi_replace("'",'&#39;',$parsed_string);
  $parsed_string = eregi_replace('"','&#34;',$parsed_string);
  //$parsed_string = eregi_replace('/','&#47;',$parsed_string);  /* raw_date bug */
  // word boundary
  $parsed_string = eregi_replace('\\\b','&#92;b',$parsed_string);
  //newline
  $parsed_string = eregi_replace('\\\n','&#92;n',$parsed_string);
  // carriage return
  $parsed_string = eregi_replace('\\\r','&#92;r',$parsed_string);
  // tab
  $parsed_string = eregi_replace('\\\t','&#92;t',$parsed_string);
  return $parsed_string;
}
/* ********** ********** ********** //FILTER INPUT ********** ********** ********** */
/* ********** ********** ********** PAGE PARSE TIME ********** ********** ********** */
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
/* ********** ********** ********** //PAGE PARSE TIME ********** ********** ********** */
/* ********** ********** ********** SEARCH ENGINE FRIENDLY URLS ********** ********** ********** */
// SEARCH ENGINE FRIENDLY URLS
/*
inspired by code created by 
ReDuX (http://www.daniweb.com/code/snippet74.html)
and
DD32 (http://www.php.net/manual/en/language.variables.predefined.php#63312)
*/
function seo_urls() {
  if (isset($_SERVER['PATH_INFO'])) {
    $raw_data = explode('/', $_SERVER['PATH_INFO']);
    unset($raw_data[0]);
    for($i=1;$i<=count($raw_data);$i+=2) {
      $_GET[$raw_data[$i]] = $raw_data[$i+1];
    }
  }
}
/* ********** ********** ********** //SEARCH ENGINE FRIENDLY URLS ********** ********** ********** */

?>