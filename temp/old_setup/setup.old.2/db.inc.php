<?php
/*
./setup/db.inc.php
inspired by the phpbb code
start: 16:01 2008-01-07
16:54 2008-01-07
*/
function split_sql($sql, $delimiter) {
  // trim
  $sql = trim($sql);
	// remove # comments
  $sql = preg_replace('/\n{2,}/', "\n", preg_replace('/^#.*$/m', "\n", $sql));
  // remove -- comments
	$sql = preg_replace('/\n{2,}/', "\n", preg_replace('/^--.*$/m', "\n", $sql));
  // remove \r
  $sql = eregi_replace("\r", "", $sql);
  // split
  $sql = preg_split('/' . preg_quote($delimiter, '/') . '$/m', $sql);
  // trim pieces
  $sql = array_map('trim', $sql);
  // delete last one if empty
  $last_one = end($sql);
  if(empty($last_one)) {unset($sql[key($sql)]);}
  // return
  return $sql;
}

$ubws_pre = "afm";
$delimiter = ";";
$sql_s_file = "./sql_s.sql";
$sql_s = file_get_contents($sql_s_file);
$sql_s = eregi_replace("ubws", $ubws_pre, $sql_s);
//$sql_s = preg_replace('#ubws#i', $ubws_pre, $sql_s);
$sql_s = split_sql($sql_s, $delimiter);


echo "<PRE>";
print_r($sql_s);
echo "</PRE>";
?>