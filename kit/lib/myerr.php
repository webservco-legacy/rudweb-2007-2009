<?php
/*
myerr.php
12:50 2008-04-05
*/
echo "<B><BR>\n";
echo "Oops!";
echo "<BR>\n";
echo $_SERVER['REQUEST_URI'];
echo "<BR>\n";
echo "<I>" .mysql_errno() . " : " . mysql_error() . "</I><BR></B>\n";
exit;
?>