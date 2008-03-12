<?php
/*
./setup/act/thms02.inc.php
12:51 2008-01-17
*/

if(isset($_POST['set_cfg_tm_inst'])) {
  echo "\n\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
  foreach ($_POST['set_cfg_tm_inst'] as $thm => $value) {
    echo "\n<TR><TD CLASS=\"hdr\" WIDTH=\"200\"><B>$thm</B></TD><TD CLASS=\"hdr\" COLSPAN=\"3\">&#160;</TD></TR>";
    $cfg_thm_check_target = check_cfg_file($target.$thm_file_path, $thm_file_name);
    if($cfg_thm_check_target == '0') {
      switch($thm) {
        case 'ubws' : {
          $dirs[0] = 'themes/'.$thm.'/';
          $files[$dirs[0]][0] = array();
          $files[$dirs[0]][1] = array();
          $files[$dirs[0]][1][] = 'favicon.ico';
          $files[$dirs[0]][1][] = 'footer.inc.php';
          $files[$dirs[0]][1][] = 'footer.print.inc.php';
          $files[$dirs[0]][1][] = 'footeri.inc.php';
          $files[$dirs[0]][1][] = 'header.inc.php';
          $files[$dirs[0]][1][] = 'header.print.inc.php';
          $files[$dirs[0]][1][] = 'headeri.inc.php';
          $files[$dirs[0]][1][] = 'index.php';
          $files[$dirs[0]][1][] = 'style.inc.php';
          $files[$dirs[0]][1][] = 'theme.inc.php';
          $files[$dirs[0]][1][] = 'theme.info.php';
          
          $dirs[1] = 'themes/'.$thm.'/graphics/';
          $files[$dirs[1]][0] = array();
          $files[$dirs[1]][1] = array();
          $files[$dirs[1]][1][] = 'blank.gif';
          $files[$dirs[1]][1][] = 'close.gif';
          $files[$dirs[1]][1][] = 'loading.gif';
          $files[$dirs[1]][1][] = 'next.gif';
          $files[$dirs[1]][1][] = 'prev.gif';
          $files[$dirs[1]][1][] = 'index.php';
          
          $dirs[2] = 'themes/'.$thm.'/graphics/lang/';
          $files[$dirs[2]][0] = array();
          $files[$dirs[2]][1] = array();
          $files[$dirs[2]][1][] = 'index.php';
          $files[$dirs[2]][1][] = 'de.png';
          $files[$dirs[2]][1][] = 'en.png';
          $files[$dirs[2]][1][] = 'es.png';
          $files[$dirs[2]][1][] = 'fr.png';
          $files[$dirs[2]][1][] = 'it.png';
          $files[$dirs[2]][1][] = 'ro.png';
          
          $dirs[3] = 'themes/'.$thm.'/scripts/';
          $files[$dirs[3]][0] = array();
          $files[$dirs[3]][1] = array();
          $files[$dirs[3]][1][] = 'index.php';
          $files[$dirs[3]][1][] = 'js.inc.php';
          
          $dirs[4] = 'themes/'.$thm.'/styles/';
          $files[$dirs[4]][0] = array();
          $files[$dirs[4]][1] = array();
          $files[$dirs[4]][1][] = 'custom.css';
          $files[$dirs[4]][1][] = 'default.css';
          $files[$dirs[4]][1][] = 'wysiwyg.css';
          $files[$dirs[4]][1][] = 'index.php';
          
          require "./act/engnact.inc.php";
          unset($dirs);
          unset($files);
          break;
        }
        default : {break;}
      }
    }
    else {
      echo "\n<TR CLASS=\"hdr\"><TD CLASS=\"rst_err\" STYLE=\"border-bottom-width: 0px;\" COLSPAN=\"4\"><B>target directory doesn't exist!</B></TD></TR>";
    }
  }
  echo "\n</TABLE>";
}
else {
  echo "\n\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
  echo "\n<TR CLASS=\"hdr\"><TD CLASS=\"rst_err\" STYLE=\"border-bottom-width: 0px;\" WIDTH=\"200\"><B>no themes selected</B></TD></TR>";
  echo "\n</TABLE>";
}
?>
<BR>
<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="200" STYLE="text-align: right;"><B>&#160;</B></TD>
<TD CLASS="cnt">
  <TABLE BORDER="0" CELLPADDING="0" CELLSPACING="0"><TR>
  <TD>
  <?php
  if($set == 'upgrade') { ?>
  <FORM NAME="formnext" METHOD="POST" STYLE="display: inline; margin: 0px; padding: 0px;" ACTION="./setup.php?target=<?php echo $target_var;?>&amp;set=<?php echo $set;?>&amp;act=finish&amp;step=1">
  <?php }
  else {
  ?>
  <FORM NAME="formnext" METHOD="POST" STYLE="display: inline; margin: 0px; padding: 0px;" ACTION="./setup.php?target=<?php echo $target_var;?>&amp;set=<?php echo $set;?>&amp;act=usett&amp;step=1">
  <?php } ?>
  <INPUT TYPE="submit" CLASS="button" STYLE="background-color: #DDDDDD" NAME="next" VALUE="next">
  </FORM>
  </TD>
  </TR></TABLE>
</TD></TR></TABLE>

<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="200" STYLE="text-align: right;"><B>&#160;</B></TD>
<TD CLASS="cnt">
  <TABLE BORDER="0" CELLPADDING="0" CELLSPACING="0"><TR>
  <TD>
  <FORM NAME="formback" METHOD="POST" STYLE="display: inline; margin: 0px; padding: 0px;" ACTION="./setup.php?target=<?php echo $target_var;?>&amp;set=<?php echo $set;?>&amp;act=thms&amp;step=1">
  <INPUT TYPE="submit" CLASS="button" STYLE="background-color: #CCCCCC" NAME="back" VALUE="back">
  </FORM>
  </TD>
  </TR></TABLE>
</TD></TR></TABLE>

<TABLE BORDER="0" CELLPADDING="3" CELLSPACING="0" BGCOLOR="#000000" WIDTH="100%">
<TR><TD CLASS="cnt" WIDTH="200" STYLE="text-align: right">&#160;</TD>
<TD CLASS="cnt">
  <TABLE BORDER="0" CELLPADDING="0" CELLSPACING="0"><TR>
  <TD>
  <FORM NAME="formabort" METHOD="POST" STYLE="display: inline; margin: 0px; padding: 0px;" ACTION="./setup.php">
  <INPUT TYPE="submit" CLASS="button" STYLE="background-color: #BBBBBB" NAME="abort" VALUE="abort">
  </FORM>
  </TD>
  </TR></TABLE>
</TD></TR></TABLE>