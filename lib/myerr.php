<?php
/*
myerr.php
17:39 29.09.2007
*/
echo "<B><BR>\n";
echo "Oups!";
echo "<BR>\n";
echo $_SERVER['REQUEST_URI'];
echo "<BR>\n";
echo "<I>" .mysql_errno() . " : " . mysql_error() . "</I><BR></B>\n";
exit;
?>