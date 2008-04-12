<?php
/*
404.php
12:49 2008-04-05
*/
header('HTTP/1.1 404 Not Found');
echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">";
echo "\n<HTML><HEAD>\n<TITLE>404 Not Found</TITLE>\n</HEAD>";
echo "<BODY>\n<H1>404 Not Found</H1>\n";
echo "The requested URL " . $_SERVER['REQUEST_URI'] . " was not found on this server.\n";
echo "<HR>\n"; 
//echo $_SERVER['SERVER_SIGNATURE'];
echo "</BODY></HTML>\n";
exit;
?>