<?php
/*
./setup/act/cfgs02.inc.php
12:42 2008-01-14
*/
echo "\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
echo "\n<TR><TD CLASS=\"total\" WIDTH=\"200\"><BR><B>Install Engine Configuration File:</B><BR></TD>";
echo "</TR></TABLE>";

$rudwebcfg_str = generate_rudwebcfg_str($eol, $file_time_stamp);
$rudwebcfg_file_check = check_cfg_file($target.$rudwebcfg_file_path, $rudwebcfg_file_name);

echo "\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
echo "\n<TR><TD CLASS=\"hdr\">".$target.$rudwebcfg_file_path."<B>".$rudwebcfg_file_name."</B></TD></TR>";
echo "\n</TABLE>";

echo "<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
echo "<TR><TD CLASS=\"cnt\" WIDTH=\"100\" STYLE=\"text-align: right;\">status:</TD>";
echo "<TD CLASS=\"cnt\">";

switch($rudwebcfg_file_check) {
  case "0" : {
    echo "<SPAN CLASS=\"rst_ok\" STYLE=\"border-bottom-width: 0px;\">ok</SPAN>";
    echo "</TD></TR></TABLE>";

    echo "<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
    echo "<TR><TD CLASS=\"cnt\" WIDTH=\"100\" STYLE=\"text-align: right;\">writing file:</TD>";
    echo "<TD CLASS=\"cnt\">";
    echo "<SPAN CLASS=\"";
    $write_config_file = write_config_str($rudwebcfg_str, $target.$rudwebcfg_file_path.$rudwebcfg_file_name);
    if($write_config_file == '0') {
      echo "rst_ok\" STYLE=\"border-bottom-width: 0px;\">done";
    }
    else {
      echo "rst_err\" STYLE=\"border-bottom-width: 0px;\">error";
    }
    echo "</SPAN>";
    break;
  }
  case "1" : {
    echo "<SPAN CLASS=\"rst_err\" STYLE=\"border-bottom-width: 0px;\">directory doesn't exist</SPAN>";
    echo "</TD></TR></TABLE>";
    
    echo "<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
    echo "<TR><TD CLASS=\"cnt\" WIDTH=\"100\" STYLE=\"text-align: right;\">creating dir <B>".$rudwebcfg_file_path."</B></TD>";
    echo "<TD CLASS=\"cnt\">";
    if (!is_dir($target.$rudwebcfg_file_path)) {
      if(mkdir($target.$rudwebcfg_file_path)) {echo "<SPAN CLASS=\"rst_ok\" STYLE=\"border-bottom-width: 0px;\">done</SPAN>";}
      else {echo "<SPAN CLASS=\"rst_err\" STYLE=\"border-bottom-width: 0px;\">error creating dir!</SPAN>";}
    } 
    else {echo "<SPAN CLASS=\"rst_err\" STYLE=\"border-bottom-width: 0px;\">directory already exists!</SPAN>";}
    echo "</TD></TR></TABLE>";
    
    echo "<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
    echo "<TR><TD CLASS=\"cnt\" WIDTH=\"100\" STYLE=\"text-align: right;\">writing file:</TD>";
    echo "<TD CLASS=\"cnt\">";
    echo "<SPAN CLASS=\"";
    $write_config_file = write_config_str($rudwebcfg_str, $target.$rudwebcfg_file_path.$rudwebcfg_file_name);
    if($write_config_file == '0') {
      echo "rst_ok\" STYLE=\"border-bottom-width: 0px;\">done";
    }
    else {
      echo "rst_err\" STYLE=\"border-bottom-width: 0px;\">error";
    }
    echo "</SPAN>";
    break;
  }
  case "2" : {
    echo "<SPAN CLASS=\"rst_err\" STYLE=\"border-bottom-width: 0px;\">directory not writable!</SPAN>";
    echo "</TD></TR></TABLE>";

    echo "<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
    echo "<TR><TD CLASS=\"cnt\" WIDTH=\"100\" STYLE=\"text-align: right;\">writing file:</TD>";
    echo "<TD CLASS=\"cnt\">";
    echo "<SPAN CLASS=\"";
    $write_config_file = write_config_str($rudwebcfg_str, $target.$rudwebcfg_file_path.$rudwebcfg_file_name);
    if($write_config_file == '0') {
      echo "rst_ok\" STYLE=\"border-bottom-width: 0px;\">done";
    }
    else {
      echo "rst_err\" STYLE=\"border-bottom-width: 0px;\">error";
    }
    echo "</SPAN>";
    break;
  }
  case "3" : {
    echo "<SPAN CLASS=\"rst_err\" STYLE=\"border-bottom-width: 0px;\">file already exists!</SPAN>";
    echo "</TD></TR></TABLE>";

    echo "<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
    echo "<TR><TD CLASS=\"cnt\" WIDTH=\"100\" STYLE=\"text-align: right;\">over-writing file:</TD>";
    echo "<TD CLASS=\"cnt\">";
    echo "<SPAN CLASS=\"";
    $write_config_file = write_config_str($rudwebcfg_str, $target.$rudwebcfg_file_path.$rudwebcfg_file_name);
    if($write_config_file == '0') {
      echo "rst_ok\" STYLE=\"border-bottom-width: 0px;\">ok";
    }
    else {
      echo "rst_err\" STYLE=\"border-bottom-width: 0px;\">error";
    }
    echo "</SPAN>";
    break;
  }
  case "4" : {
    echo "<SPAN CLASS=\"rst_err\" STYLE=\"border-bottom-width: 0px;\">file already exists and not writable!</SPAN>";
    echo "</TD></TR></TABLE>";

    echo "<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
    echo "<TR><TD CLASS=\"cnt\" WIDTH=\"100\" STYLE=\"text-align: right;\">over-writing file:</TD>";
    echo "<TD CLASS=\"cnt\">";
    echo "<SPAN CLASS=\"";
    $write_config_file = write_config_str($rudwebcfg_str, $target.$rudwebcfg_file_path.$rudwebcfg_file_name);
    if($write_config_file == '0') {
      echo "rst_ok\" STYLE=\"border-bottom-width: 0px;\">ok";
    }
    else {
      echo "rst_err\" STYLE=\"border-bottom-width: 0px;\">error";
    }
    echo "</SPAN>";
    break;
  }
  default  : {
    echo "</TD></TR></TABLE>";

    echo "<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
    echo "<TR><TD CLASS=\"cnt\" WIDTH=\"100\" STYLE=\"text-align: right;\">writing file:</TD>";
    echo "<TD CLASS=\"cnt\">";
    echo "<SPAN CLASS=\"";
    echo "rst_err\" STYLE=\"border-bottom-width: 0px;\">error";
    echo "</SPAN>";
    break;
  }
}
echo "</TD></TR></TABLE>";
?>
<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="100" STYLE="text-align: right;"><B>&#160;</B></TD>
<TD CLASS="cnt">
  <TABLE BORDER="0" CELLPADDING="0" CELLSPACING="0"><TR>
  <TD>
  <FORM NAME="formnext" METHOD="POST" STYLE="display: inline; margin: 0px; padding: 0px;" ACTION="./setup.php?pid=<?php echo $pid;?>&amp;set=<?php echo $set;?>&amp;act=dbs&amp;step=1">
  <INPUT TYPE="submit" CLASS="button" STYLE="background-color: #DDDDDD" NAME="next" VALUE="next">
  </FORM>
  </TD>
  </TR></TABLE>
</TD></TR></TABLE>

<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="100" STYLE="text-align: right;"><B>&#160;</B></TD>
<TD CLASS="cnt">
  <TABLE BORDER="0" CELLPADDING="0" CELLSPACING="0"><TR>
  <TD>
  <FORM NAME="formback" METHOD="POST" STYLE="display: inline; margin: 0px; padding: 0px;" ACTION="./setup.php?pid=<?php echo $pid;?>&amp;set=<?php echo $set;?>&amp;act=cfgs&amp;step=1">
  <INPUT TYPE="submit" CLASS="button" STYLE="background-color: #CCCCCC" NAME="back" VALUE="back">
  </FORM>
  </TD>
  </TR></TABLE>
</TD></TR></TABLE>

<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="100" STYLE="text-align: right">&#160;</TD>
<TD CLASS="cnt">
  <TABLE BORDER="0" CELLPADDING="0" CELLSPACING="0"><TR>
  <TD>
  <FORM NAME="formabort" METHOD="POST" STYLE="display: inline; margin: 0px; padding: 0px;" ACTION="./setup.php">
  <INPUT TYPE="submit" CLASS="button" STYLE="background-color: #BBBBBB" NAME="abort" VALUE="abort">
  </FORM>
  </TD>
  </TR></TABLE>
</TD></TR></TABLE>