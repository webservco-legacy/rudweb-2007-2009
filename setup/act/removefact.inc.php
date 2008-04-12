<?php
/*
./setup/act/removefact.inc.php
12:50 2008-04-05
*/
if(is_array($dirs)) {
  for($counti=0; $counti<count($dirs); $counti++){
    if(is_array($files[$dirs[$counti]][1])) {
      $allfiles[$counti] = count($files[$dirs[$counti]][1]);
    }
  }
/*
  for($countj=0; $countj<count($dirs); $countj++){
    if(is_array($files[$dirs[$countj]][0])) {
      $allcfgfiles[$countj] = count($files[$dirs[$countj]][0]);
    }
    else {$allcfgfiles[$countj] = "0";}
  }
*/
  $total_dirs = count($dirs);
  $total_files = array_sum($allfiles);
  //$total_cfg_files = array_sum($allcfgfiles);
  //$total_all_files = $total_files + $total_cfg_files;
}
else {
  $total_dirs = "0";
  $total_files = "0";
  //$total_cfg_files = "0";
  //$total_all_files = $total_files + $total_cfg_files;
}

echo "\n<TR CLASS=\"total\"><TD CLASS=\"total\" COLSPAN=\"4\">".$total_dirs." directories , ".$total_files." files </TD></TR>";
for ($i=0; $i<count($dirs); $i++) {
/*
  if(is_array($files[$dirs[$i]][0])) {
    for ($j=0; $j<count($files[$dirs[$i]][0]); $j++) {
      if($set == "upgrade" && is_file($target . $dirs[$i] . $files[$dirs[$i]][0][$j])) {
        echo "\n<TR CLASS=\"cnt\"><TD CLASS=\"act\">creating config file</TD><TD CLASS=\"nam\">./" . $dirs[$i] . $files[$dirs[$i]][0][$j] . "</TD>";
        echo "<TD CLASS=\"msg\">action = upgrade</TD><TD CLASS=\"rst\">skipped</TD></TR>";
      }
      else if($set == "install" || !is_file($target . $dirs[$i] . $files[$dirs[$i]][0][$j])) {
        echo "\n<TR CLASS=\"cnt\"><TD CLASS=\"act\">creating config file</TD><TD CLASS=\"nam\">./" . $dirs[$i] . $files[$dirs[$i]][0][$j] . "</TD>";
        if(is_file($target . $dirs[$i] . $files[$dirs[$i]][0][$j])) {
          if(md5_file($source . $dirs[$i] . $files[$dirs[$i]][0][$j]) == md5_file($target . $dirs[$i] . $files[$dirs[$i]][0][$j])) {
            echo "<TD CLASS=\"msg\">file exists ... hasn't changed</TD><TD CLASS=\"rst\">skipped</TD></TR>";
          }
          else {
            echo "<TD CLASS=\"msg\">file exists ... over-writing ...";
            if(is_writable($target . $dirs[$i] . $files[$dirs[$i]][0][$j])) {
              if(is_readable($source . $dirs[$i] . $files[$dirs[$i]][0][$j])) {
                if(copy($source . $dirs[$i] . $files[$dirs[$i]][0][$j], $target . $dirs[$i] . $files[$dirs[$i]][0][$j])) {echo "</TD><TD CLASS=\"rst_ok\">done</TD></TR>";}
              }
              else {
                echo "oops! source error!</TD><TD CLASS=\"rst_err\">error</TD></TR>";
              }
            }
            else {echo "oops! write error!</TD><TD CLASS=\"rst_err\">error</TD></TR>";}
          }
        } // file exists
        else {
          if(is_readable($source . $dirs[$i] . $files[$dirs[$i]][0][$j])) {
            if(copy($source . $dirs[$i] . $files[$dirs[$i]][0][$j], $target . $dirs[$i] . $files[$dirs[$i]][0][$j])) {echo "<TD CLASS=\"msg\">...</TD><TD CLASS=\"rst_ok\">done</TD></TR>";}
            else {echo "<TD CLASS=\"msg\">oops! write error!</TD><TD CLASS=\"rst_err\">error</TD></TR>";}
          }
          else {echo "<TD CLASS=\"msg\">oops! source error!</TD><TD CLASS=\"rst_err\">error</TD></TR>";}
        } // new file
      }
    }
  }
*/
  if(is_array($files[$dirs[$i]][1])) {
    for ($k=0; $k<count($files[$dirs[$i]][1]); $k++) {
      echo "\n<TR CLASS=\"cnt\"><TD CLASS=\"act\">deleting file</TD><TD CLASS=\"nam\">./" . $dirs[$i] . $files[$dirs[$i]][1][$k] . "</TD>";
      if(is_file($target . $dirs[$i] . $files[$dirs[$i]][1][$k])) {
        echo "<TD CLASS=\"msg\">file exists ... deleting ...";
        if(is_writable($target . $dirs[$i] . $files[$dirs[$i]][1][$k])) {
          if(is_readable($source . $dirs[$i] . $files[$dirs[$i]][1][$k])) {
            if(@unlink($target . $dirs[$i] . $files[$dirs[$i]][1][$k])) {echo "</TD><TD CLASS=\"rst_ok\">done</TD></TR>";}
          }
          else {echo "oops! source error!</TD><TD CLASS=\"rst_err\">error</TD></TR>";}
        }
        else {echo "oops! write error!</TD><TD CLASS=\"rst_err\">error</TD></TR>";}
      }
      else {
        echo "\n<TD CLASS=\"msg\">file not found</TD><TD CLASS=\"rst_err\">error</TD></TR>";
      }
    }
  }
  else {
    echo "\n<TR CLASS=\"cnt\"><TD CLASS=\"act\">&#160;</TD><TD CLASS=\"nam\">&#160;</TD><TD CLASS=\"msg\">nothing to be done</TD><TD CLASS=\"rst\">skipped</TD></TR>";
  }

  echo "\n<TR CLASS=\"hdr\"><TD CLASS=\"act\">removing directory</TD><TD CLASS=\"nam\">./" . $dirs[$i] . "</TD>";
  if (is_dir($target . $dirs[$i])) {
    if(@rmdir($target . $dirs[$i])) {echo "<TD CLASS=\"msg\">...</TD><TD CLASS=\"rst_ok\">done</TD></TR>";}
    else {echo "<TD CLASS=\"msg\">error removing dir!</TD><TD CLASS=\"rst_err\">error</TD></TR>";}
  } 
  else {echo "<TD CLASS=\"msg\">directory doesn't exists</TD><TD CLASS=\"rst_err\">error</TD></TR>";}
}
?>