<?php
/*
myerr.php
15:01 13.10.2007
*/
echo "<B><BR>\n";
echo "Oops!";
echo "<BR>\n";
echo $_SERVER['REQUEST_URI'];
echo "<BR>\n";
echo "<I>" .mysql_errno() . " : " . mysql_error() . "</I><BR></B>\n";
exit;
?>