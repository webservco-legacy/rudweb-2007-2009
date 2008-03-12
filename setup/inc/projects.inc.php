<?php
/*
./setup/inc/projects.inc.php
11:35 2008-03-07
*/
echo "\n\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
echo "\n<TR><TD CLASS=\"total\">";
echo "<BR><B>Projects:</B><BR>";
echo "\n</TD></TR>";
echo "</TABLE>";

echo "\n\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
echo "\n<TR>";
echo "\n<TD CLASS=\"projht\">";
echo "\nproject";
echo "\n</TD>";
echo "\n<TD CLASS=\"projht\" WIDTH=\"100\">";
echo "\nengine version";
echo "\n</TD>";
echo "\n<TD CLASS=\"projht\" WIDTH=\"100\">";
echo "\nurl";
echo "\n</TD>";
echo "\n<TD CLASS=\"projht\" WIDTH=\"100\">";
echo "\ndir";
echo "\n</TD>";
echo "\n<TD CLASS=\"projht\" WIDTH=\"150\">";
echo "\nactions";
echo "\n</TD>";
echo "\n<TD CLASS=\"projht\">";
echo "\n&#160;";
echo "\n</TD>";
echo "\n</TR>";
for($target_tt_i=1; $target_tt_i<=count($target_vars); $target_tt_i++) {
  echo "\n<TR>";
  echo "\n<TD CLASS=\"proj\">";
  echo "<B>";
  echo $target_name[$target_tt_i];
  echo "</B>";
  echo "\n</TD>";
  echo "\n<TD CLASS=\"proj\">";
  $project_version[$target_tt_i] = get_version($target_root . $target_vars[$target_tt_i]);

  if($project_version[$target_tt_i][0] == '0.0.000000') {
    echo "<SPAN STYLE=\"color: #990000\">not installed</SPAN>";
  }
  else {
    echo "<SPAN STYLE=\"color: ";
    if($project_version[$target_tt_i][0] == $ub_version[0]) {echo "#009900";}
    else if($project_version[$target_tt_i][0] != $ub_version[0]) {echo "#990000";}
    echo "\">";
    echo $project_version[$target_tt_i][1] . '.' . $project_version[$target_tt_i][2] . ' build ' . $project_version[$target_tt_i][4];
    echo "</SPAN>";
  }
  echo "\n</TD>";
  
  echo "\n<TD CLASS=\"proj\">";
  echo "\n<A CLASS=\"link\" HREF=\"".$target_url[$target_tt_i]."\" TARGET=\"_blank\">".$target_url[$target_tt_i]."</A>";
  echo "\n</TD>";
  
  echo "\n<TD CLASS=\"proj\">";
  echo "\n".$target_root . $target_vars[$target_tt_i];
  echo "\n</TD>";
  echo "\n<TD CLASS=\"proj\">";
  echo "\n<A CLASS=\"link\" HREF=\"./setup.php?pid=".$target_tt_i."&amp;set=install&amp;act=start&amp;step=1\">install</A>";
  echo "&#160;";
  echo "\n<A CLASS=\"link\" HREF=\"./setup.php?pid=".$target_tt_i."&amp;set=upgrade&amp;act=start&amp;step=1\">upgrade</A>";
  echo "&#160;";
  echo "\n<A CLASS=\"link\" HREF=\"./setup.php?pid=".$target_tt_i."&amp;set=remove&amp;act=start&amp;step=1\">remove</A>";
  echo "\n</TD>";
  echo "\n<TD CLASS=\"proj\">";
  echo "\n&#160;";
  echo "\n</TD>";
  echo "\n</TR>";
}
//echo "\n\n<TABLE BORDER=\"0\" CELLPADDING=\"3\" CELLSPACING=\"0\" BGCOLOR=\"#000000\" WIDTH=\"100%\">";
echo "\n<TR>";
echo "\n<TD CLASS=\"projhb\" COLSPAN=\"6\">&#160;</TD>";
echo "</TR>";
echo "</TABLE>";
?>
