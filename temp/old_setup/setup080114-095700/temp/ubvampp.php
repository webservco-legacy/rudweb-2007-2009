<?php
/*
Project     : Ub VAMPP - Version Apache MySQL PHP Platform
Purpose     : Display Apache, MySQL, and PHP version and Server Platform
File name   : ubvampp.php
Version     : 1.0.061029
Author(s)   : Radu Maier
Copyright   : Copyright (C) 2006 Radu Maier oimoroiATgmailDOTcom
License     : GNU/GPL
Website     : http://underbeat.evonet.ro

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; version 2 of the License.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public  License for more details.

You should have received a copy of the GNU General Public License
along with this program from the site that you downloaded it
from; if not. write to the Free Software Foundation, Inc., 59 Temple
Place, Suite 330, Boston, MA 02111-1307 USA
*/

//   Apache Version
if (preg_match("/Apache\/[0-9.+]{1,10}/", $_SERVER['SERVER_SOFTWARE'], $apache_raw)) {
    $apache_split = explode('/', $apache_raw[0]);
    $ApacheVersion = $apache_split[1];
}
else {
    $ApacheVersion = '0.0.0';
}
//   //Apache Version

//   MySQL Version 
// open db connection
include './include/dbopen.inc.php';

$query_MySQLVersion = "SELECT VERSION()";
$rst_MySQLVersion = mysql_query($query_MySQLVersion) or die('Oups!<br>' . mysql_error());
$row_MySQLVersion = mysql_fetch_assoc($rst_MySQLVersion);
$MySQLVersion = $row_MySQLVersion['VERSION()'];

mysql_free_result($rst_MySQLVersion);
// close db connection
include './include/dbclose.inc.php';
//   //MySQL Version 

//   PHP Version 
$PHPVersion = PHP_VERSION;
//   //PHP Version 

//   Server Platform 
if (preg_match("/(Win32)/", $_SERVER['SERVER_SOFTWARE'], $server_raw)) {
    $ServerPlatform = 'Windows';
}
else if (preg_match("/(Unix)/", $_SERVER['SERVER_SOFTWARE'], $server_raw)) {
    $ServerPlatform = 'Unix/Linux';
}
else { 
    $ServerPlatform = 'Unknown';
}
//   //Server Platform 

/*
//DEBUG
echo 'Apache: ' . $ApacheVersion . '<BR>';
echo 'MySQL: ' . $MySQLVersion . '<BR>';
echo 'PHP: ' . $PHPVersion . '<BR>';
echo 'Platform: ' . $ServerPlatform . '<BR>';
*/
?>