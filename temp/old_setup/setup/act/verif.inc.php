<?php
/*
./setup/act/verif.inc.php
16:56 2008-01-09
*/
$php_version = phpversion();
$php_short_open_tag   = (int) ini_get('short_open_tag');
$php_safe_mode        = (int) ini_get('safe_mode');
$php_register_globals = (int) ini_get('register_globals');
$php_magic_quotes_gpg = (int) ini_get('magic_quotes_gpg');
$php_file_uploads     = (int) ini_get('file_uploads');
$php_allow_url_fopen  = (int) ini_get('allow_url_fopen');
$gd_check = check_gd();

$php_err = '0';

$db_err = '1';
$set_dbmy   = null;
$set_dbtype = null;
$set_dbhost = null;
$set_dbport = null;
$set_dbuser = null;
$set_dbpass = null;
$set_dbname = null;

if(isset($_POST['next']) || isset($_POST['back'])) {
$db_err = '0';
if(isset($_POST['set_dbtype'])) {$set_dbtype = $_POST['set_dbtype'];}
//if(isset($_POST['set_dbmy']))   {$set_dbmy = $_POST['set_dbmy'];}
if(isset($_POST['set_dbhost'])) {$set_dbhost = $_POST['set_dbhost'];}
if(isset($_POST['set_dbport'])) {$set_dbport = $_POST['set_dbport'];}
if(isset($_POST['set_dbuser'])) {$set_dbuser = $_POST['set_dbuser'];}
if(isset($_POST['set_dbpass'])) {$set_dbpass = $_POST['set_dbpass'];}
if(isset($_POST['set_dbname'])) {$set_dbname = $_POST['set_dbname'];}
}
echo "\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
echo "\n<TR><TD CLASS=\"total\" WIDTH=\"40\"><BR><B>Pre-Installation Checking:</B><BR></TD>";
echo "</TR></TABLE>";

echo "\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
echo "\n<TR><TD CLASS=\"hdr\"><B>Apache</B></TD></TR>";
echo "\n</TABLE>";

echo "\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
echo "\n<TR><TD CLASS=\"cnt\" WIDTH=\"110\" STYLE=\"text-align: right\">version:</TD>";
echo "\n<TD CLASS=\"cnt\">";

$srv_err = '0';

if (preg_match("/Apache\/[0-9.+]{1,10}/", $_SERVER['SERVER_SOFTWARE'], $apache_raw)) {
    $apache_split = explode('/', $apache_raw[0]);
    $ApacheVersion = $apache_split[1];
    echo "<SPAN CLASS=\"rst_ok\" STYLE=\"border-bottom-width: 0px;\">".$ApacheVersion."</SPAN>";
}
else {
    echo "<SPAN CLASS=\"rst_err\" STYLE=\"border-bottom-width: 0px;\">n/a</SPAN>";
    $srv_err = '1';
}
echo "</TD></TR>";
echo "\n</TABLE>";

echo "\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
echo "\n<TR><TD CLASS=\"cnt\" WIDTH=\"110\"  STYLE=\"text-align: right\"><B>Apache:</B></TD>";
echo "<TD CLASS=\"cnt\">"; 
if ($srv_err == '0') {echo "<SPAN CLASS=\"rst_ok\" STYLE=\"border-bottom-width: 0px;\">passed!</SPAN>";}
else {echo "<SPAN CLASS=\"rst_err\" STYLE=\"border-bottom-width: 0px;\">failed!</SPAN>";}
echo "</TD>";
echo "</TR>";
echo "\n</TABLE>";

echo "\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
echo "\n<TR><TD CLASS=\"hdr\"><B>PHP</B></TD></TR>";
echo "\n</TABLE>";

echo "\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
echo "\n<TR><TD CLASS=\"cnt\" WIDTH=\"110\" STYLE=\"text-align: right\">version:</TD>";
echo "\n<TD CLASS=\"cnt\">";
if(version_compare($php_version, _UBWS_PHP_VER, '<')) {
  echo "<SPAN CLASS=\"rst_err\" STYLE=\"border-bottom-width: 0px;\">".$php_version."</SPAN>";
  $php_err = '1';
}
else {echo "<SPAN CLASS=\"rst_ok\" STYLE=\"border-bottom-width: 0px;\">".$php_version."</SPAN>";}
echo "</TD></TR>";
echo "\n<TR><TD CLASS=\"cnt\" WIDTH=\"110\" STYLE=\"text-align: right\">short_open_tag:</TD>";
echo "\n<TD CLASS=\"cnt\">";
if($php_short_open_tag == 1) {
  echo "<SPAN CLASS=\"rst\" STYLE=\"border-bottom-width: 0px;\">On</SPAN>";
  //$php_err = '1';
}
else {echo "<SPAN CLASS=\"rst_ok\" STYLE=\"border-bottom-width: 0px;\">Off</SPAN>";}
echo "</TD></TR>";
echo "\n<TR><TD CLASS=\"cnt\" WIDTH=\"110\" STYLE=\"text-align: right\">safe_mode:</TD>";
echo "\n<TD CLASS=\"cnt\">";
if($php_safe_mode == 0) {
  echo "<SPAN CLASS=\"rst\" STYLE=\"border-bottom-width: 0px;\">Off</SPAN>";
  //$php_err = '1';
}
else {echo "<SPAN CLASS=\"rst_ok\" STYLE=\"border-bottom-width: 0px;\">On</SPAN>";}
echo "</TD></TR>";
echo "\n<TR><TD CLASS=\"cnt\" WIDTH=\"110\" STYLE=\"text-align: right\">register_globals:</TD>";
echo "\n<TD CLASS=\"cnt\">";
if($php_register_globals == 1) {
  echo "<SPAN CLASS=\"rst_err\" STYLE=\"border-bottom-width: 0px;\">On</SPAN>";
  $php_err = '1';
}
else {echo "<SPAN CLASS=\"rst_ok\" STYLE=\"border-bottom-width: 0px;\">Off</SPAN>";}
echo "</TD></TR>";
echo "\n<TR><TD CLASS=\"cnt\" WIDTH=\"110\" STYLE=\"text-align: right\">magic_quotes_gpg:</TD>";
echo "\n<TD CLASS=\"cnt\">";
if($php_magic_quotes_gpg == 1) {
  echo "<SPAN CLASS=\"rst_err\" STYLE=\"border-bottom-width: 0px;\">On</SPAN>";
  $php_err = '1';
}
else {echo "<SPAN CLASS=\"rst_ok\" STYLE=\"border-bottom-width: 0px;\">Off</SPAN>";}
echo "</TD></TR>";
echo "\n<TR><TD CLASS=\"cnt\" WIDTH=\"110\" STYLE=\"text-align: right\">file_uploads:</TD>";
echo "\n<TD CLASS=\"cnt\">"; 
if($php_file_uploads == 0) {
  echo "<SPAN CLASS=\"rst_err\" STYLE=\"border-bottom-width: 0px;\">Off</SPAN>";
  $php_err = '1';
}
else {echo "<SPAN CLASS=\"rst_ok\" STYLE=\"border-bottom-width: 0px;\">On</SPAN>";}
echo "</TD></TR>";

echo "\n<TR><TD CLASS=\"cnt\" WIDTH=\"110\" STYLE=\"text-align: right\">allow_url_fopen:</TD>";
echo "\n<TD CLASS=\"cnt\">"; 
if($php_allow_url_fopen == 1) {
  echo "<SPAN CLASS=\"rst\" STYLE=\"border-bottom-width: 0px;\">On</SPAN>";
  //$php_err = '1';
}
else {echo "<SPAN CLASS=\"rst_ok\" STYLE=\"border-bottom-width: 0px;\">Off</SPAN>";}
echo "</TD></TR>";

echo "\n<TR><TD CLASS=\"cnt\" WIDTH=\"110\" STYLE=\"text-align: right\">GD:</TD>";
echo "\n<TD CLASS=\"cnt\">";
if($gd_check[0] != '0') {echo "<SPAN CLASS=\"rst_ok\" STYLE=\"border-bottom-width: 0px;\">yes (" . $gd_check[0] . ")</SPAN>";}
else {echo "<SPAN CLASS=\"rst_err\">no</SPAN>"; $php_err = '1';}
echo "</TD></TR>";
echo "\n<TR><TD CLASS=\"cnt\" WIDTH=\"110\" STYLE=\"text-align: right\">FreeType:</TD>";
echo "\n<TD CLASS=\"cnt\">";
if($gd_check[1] != '0') {echo "<SPAN CLASS=\"rst_ok\" STYLE=\"border-bottom-width: 0px;\">yes</SPAN>";}
else {echo "<SPAN CLASS=\"rst_err\">no</SPAN>"; $php_err = '1';}
echo "</TD></TR>";
echo "\n</TABLE>";

echo "\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
echo "\n<TR><TD CLASS=\"cnt\" WIDTH=\"110\" STYLE=\"text-align: right;\"><B>PHP:</B></TD>";
echo "<TD CLASS=\"cnt\">"; 
if ($php_err == '0') {echo "<SPAN CLASS=\"rst_ok\" STYLE=\"border-bottom-width: 0px;\">passed!</SPAN>";}
else {echo "<SPAN CLASS=\"rst_err\" STYLE=\"border-bottom-width: 0px;\">failed!</SPAN>";}
echo "</TD>";
echo "</TR>";
echo "\n</TABLE>";




echo "\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
echo "\n<TR><TD CLASS=\"hdr\"><B>Database</B></TD></TR>";
echo "\n</TABLE>";
  
  switch($set_dbtype) {
    case "my" : {
      echo "\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
      echo "\n<TR><TD CLASS=\"cnt\" WIDTH=\"110\" STYLE=\"text-align: right\">type:</TD>";
      echo "\n<TD CLASS=\"cnt\">MySQL</TD></TR>";
      echo "\n</TABLE>";
  
      if(function_exists('mysql_connect')) {
      $db_conn = @mysql_connect($set_dbhost . ":" . $set_dbport , $set_dbuser, $set_dbpass);
      }
      else {$db_conn = false;}
      echo "\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
      echo "\n<TR><TD CLASS=\"cnt\" WIDTH=\"110\" STYLE=\"text-align: right\">version:</TD>";
      echo "\n<TD CLASS=\"cnt\">";
      if(!$db_conn) {echo "<SPAN CLASS=\"rst_err\" STYLE=\"border-bottom-width: 0px;\">could not connect!</SPAN>";$db_err = '1';}
      else {
        $db_ver = ubws_qres("my", "SELECT VERSION()");
        $row_v = ubws_fetch_assoc("my", $db_ver);
        $db_version = $row_v['VERSION()'];
        if(!$row_v) {echo "<SPAN CLASS=\"rst_err\" STYLE=\"border-bottom-width: 0px;\">n/a</SPAN>";$db_err = '1';};
        echo "<SPAN CLASS=\"rst_ok\" STYLE=\"border-bottom-width: 0px;\">".$db_version."</SPAN>";
        $dbv = substr($db_version, 0 , 3);
        $set_dbmy = eregi_replace('\.', '', $dbv);
      }
      echo "</TD></TR>";
      echo "\n</TABLE>";
      
      echo "\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
      echo "\n<TR><TD CLASS=\"cnt\" WIDTH=\"110\" STYLE=\"text-align: right\">connection:</TD>";
      echo "\n<TD CLASS=\"cnt\">";
      if(!$db_conn) {echo "<SPAN CLASS=\"rst_err\" STYLE=\"border-bottom-width: 0px;\">could not connect!</SPAN>";$db_err = '1';}
      else {echo "<SPAN CLASS=\"rst_ok\" STYLE=\"border-bottom-width: 0px;\">ok</SPAN>";}
      echo "</TD></TR>";
      echo "\n</TABLE>";
      
      echo "\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
      echo "\n<TR><TD CLASS=\"cnt\" WIDTH=\"110\" STYLE=\"text-align: right\">database:</TD>";
      echo "\n<TD CLASS=\"cnt\">";
      if(!$db_conn) {echo "<SPAN CLASS=\"rst_err\" STYLE=\"border-bottom-width: 0px;\">could not connect!</SPAN>";$db_err = '1';}
      else {
        $db_select = @mysql_select_db($set_dbname);
        if(!$db_select) {echo "<SPAN CLASS=\"rst_err\" STYLE=\"border-bottom-width: 0px;\">database <I>" . $set_dbname . "</I> not found!</SPAN>";$db_err = '1';}
        else {echo "<SPAN CLASS=\"rst_ok\" STYLE=\"border-bottom-width: 0px;\">ok</SPAN>";}
      }
      echo "</TD></TR>";
      echo "\n</TABLE>";
      break;
    }
    case "pg" : {
      $set_dbmy = '0';
      echo "\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
      echo "\n<TR><TD CLASS=\"cnt\" WIDTH=\"110\" STYLE=\"text-align: right\">type:</TD>";
      echo "\n<TD CLASS=\"cnt\">PostgreSQL</TD></TR>";
      echo "\n</TABLE>";
  
      if(function_exists('pg_connect')) {
        $db_conn = @pg_connect("host=" . $set_dbhost . " port=".$set_dbport." dbname=".$set_dbname." user=".$set_dbuser." password=".$set_dbpass."");
      }
      else {$db_conn = false;}
      echo "\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
      echo "\n<TR><TD CLASS=\"cnt\" WIDTH=\"110\" STYLE=\"text-align: right\">version:</TD>";
      echo "\n<TD CLASS=\"cnt\">";
      if(!$db_conn) {echo "<SPAN CLASS=\"rst_err\" STYLE=\"border-bottom-width: 0px;\">could not connect!</SPAN>";$db_err = '1';}
      else {
        $db_ver = ubws_qres("pg", "SELECT version()");
        $row_v = ubws_fetch_assoc("pg", $db_ver);
        if(!$row_v) {echo "<SPAN CLASS=\"rst_err\" STYLE=\"border-bottom-width: 0px;\">n/a</SPAN>";$db_err = '1';};
        echo "<SPAN CLASS=\"rst_ok\" STYLE=\"border-bottom-width: 0px;\">".$row_v['version']."</SPAN>";
      }
      echo "</TD></TR>";
      echo "\n</TABLE>";
      
      echo "\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
      echo "\n<TR><TD CLASS=\"cnt\" WIDTH=\"110\" STYLE=\"text-align: right\">connection:</TD>";
      echo "\n<TD CLASS=\"cnt\">";
      if(!$db_conn) {echo "<SPAN CLASS=\"rst_err\" STYLE=\"border-bottom-width: 0px;\">could not connect!</SPAN>";$db_err = '1';}
      else {echo "<SPAN CLASS=\"rst_ok\" STYLE=\"border-bottom-width: 0px;\">ok</SPAN>";}
      echo "</TD></TR>";
      echo "\n</TABLE>";
      
      echo "\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
      echo "\n<TR><TD CLASS=\"cnt\" WIDTH=\"110\" STYLE=\"text-align: right\">database:</TD>";
      echo "\n<TD CLASS=\"cnt\">";
      if(!$db_conn) {echo "<SPAN CLASS=\"rst_err\" STYLE=\"border-bottom-width: 0px;\">could not connect!</SPAN>";$db_err = '1';}
      else {
        echo "<SPAN CLASS=\"rst_ok\" STYLE=\"border-bottom-width: 0px;\">ok</SPAN>";
      }
      echo "</TD></TR>";
      echo "\n</TABLE>";
      break;
    }
    default   : {break;}
  }
echo "\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
echo "\n<TR><TD CLASS=\"cnt\" WIDTH=\"110\" STYLE=\"text-align: right;\"><B>Database:</B></TD>";
echo "<TD CLASS=\"cnt\">"; 
if ($db_err == '0') {echo "<SPAN CLASS=\"rst_ok\" STYLE=\"border-bottom-width: 0px;\">passed!</SPAN>";}
else {echo "<SPAN CLASS=\"rst_err\" STYLE=\"border-bottom-width: 0px;\">failed!</SPAN>";}
echo "</TD>";
echo "</TR>";
echo "\n</TABLE>";
?>

<?php if ($srv_err == '0' && ($php_err == '0' && $db_err == '0')){ ?>
<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="110" STYLE="text-align: right;"><B>&#160;</B></TD>
<TD CLASS="cnt">
<TABLE BORDER="0" CELLPADDING="0" CELLSPACING="0"><TR>
  <TD>
  <FORM NAME="verifformnext" METHOD="POST" STYLE="display: inline; margin: 0px; padding: 0px;" ACTION="./setup.php?target=<?php echo $target_var;?>&amp;set=<?php echo $set;?>&amp;act=usett&amp;step=1">
  <INPUT TYPE="hidden" NAME="set_dbtype" VALUE="<?php echo $set_dbtype;?>">
  <INPUT TYPE="hidden" NAME="set_dbmy" VALUE="<?php echo $set_dbmy;?>">
  <INPUT TYPE="hidden" NAME="set_dbhost" VALUE="<?php echo $set_dbhost;?>">
  <INPUT TYPE="hidden" NAME="set_dbport" VALUE="<?php echo $set_dbport;?>">
  <INPUT TYPE="hidden" NAME="set_dbuser" VALUE="<?php echo $set_dbuser;?>">
  <INPUT TYPE="hidden" NAME="set_dbpass" VALUE="<?php echo $set_dbpass;?>">
  <INPUT TYPE="hidden" NAME="set_dbname" VALUE="<?php echo $set_dbname;?>">
  <INPUT TYPE="submit" CLASS="button" STYLE="background-color: #DDDDDD" NAME="next" VALUE="next">
  </FORM>
  </TD>
  </TR></TABLE>

</TD></TR></TABLE>
<?php } ?>

<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="110" STYLE="text-align: right;"><B>&#160;</B></TD>
<TD CLASS="cnt">
  <TABLE BORDER="0" CELLPADDING="0" CELLSPACING="0"><TR>
  <TD>
  <FORM NAME="verifformback" METHOD="POST" STYLE="display: inline; margin: 0px; padding: 0px;" ACTION="./setup.php?target=<?php echo $target_var;?>&amp;set=<?php echo $set;?>&amp;act=index&amp;step=1">
  <INPUT TYPE="hidden" NAME="set_dbtype" VALUE="<?php echo $set_dbtype;?>">
  <INPUT TYPE="hidden" NAME="set_dbmy" VALUE="<?php echo $set_dbmy;?>">
  <INPUT TYPE="hidden" NAME="set_dbhost" VALUE="<?php echo $set_dbhost;?>">
  <INPUT TYPE="hidden" NAME="set_dbport" VALUE="<?php echo $set_dbport;?>">
  <INPUT TYPE="hidden" NAME="set_dbuser" VALUE="<?php echo $set_dbuser;?>">
  <INPUT TYPE="hidden" NAME="set_dbpass" VALUE="<?php echo $set_dbpass;?>">
  <INPUT TYPE="hidden" NAME="set_dbname" VALUE="<?php echo $set_dbname;?>">
  <INPUT TYPE="submit" CLASS="button" STYLE="background-color: #CCCCCC" NAME="back" VALUE="back">
  </FORM>
  </TD>
  </TR></TABLE>
</TD></TR></TABLE>

<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="110" STYLE="text-align: right">&#160;</TD>
<TD CLASS="cnt">
  <TABLE BORDER="0" CELLPADDING="0" CELLSPACING="0"><TR>
  <TD>
  <FORM NAME="verifformabort" METHOD="POST" STYLE="display: inline; margin: 0px; padding: 0px;" ACTION="./setup.php">
  <INPUT TYPE="submit" CLASS="button" STYLE="background-color: #BBBBBB" NAME="abort" VALUE="abort">
  </FORM>
  </TD>
  </TR></TABLE>
</TD></TR></TABLE>