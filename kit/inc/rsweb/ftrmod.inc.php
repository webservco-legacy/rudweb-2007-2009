<?php
/*
./inc/rsweb/ftrmod.inc.php
15:54 2007-12-12
*/
if(!defined('_RSWEB_PUBFIL')) {require_once './../../lib/404.php';}

//echo $rsweb_theme['ftr']['hdr'];
if($_SESSION[_RSWEB_PRE.'usr_level'] >= 3) {

if(_RSWEB_CFG_FTR_ON == "0") {
  echo "<DIV STYLE=\"text-align: center\">";
  echo $rsweb_ln['adm']['ftrmodstat0'];
  echo "<BR>";
  if(_RSWEB_DBCFG == "1") {
    echo "<FORM ENCTYPE=\"multipart/form-data\" CLASS=\"ftronoffform\" NAME=\"ftronoffform\" ACTION=\"\" METHOD=\"post\">";
    echo "<INPUT TYPE=\"hidden\" NAME=\"ftronoff\" VALUE=\"1\">";
    echo "<BR>";
    echo "<INPUT CLASS=\"formsubmit\" TYPE=\"submit\" NAME=\"ftrmod\" VALUE=\"".$rsweb_ln['adm']['ftrmodstat01']."\">";
    echo "</FORM>";
  }
  else {
    echo $rsweb_ln['adm']['ftrmodstat00'];
  }
  echo "</DIV>";
} // if disabled

else {
  echo "<DIV STYLE=\"text-align: center\">";
  echo $rsweb_ln['adm']['ftrmodstat1'];
  echo "<BR>";
  
  if(_RSWEB_DBCFG == "1") {
    echo "<FORM ENCTYPE=\"multipart/form-data\" CLASS=\"ftronoffform\" NAME=\"ftronoffform\" ACTION=\"\" METHOD=\"post\">";
    echo "<INPUT TYPE=\"hidden\" NAME=\"ftronoff\" VALUE=\"0\">";
    echo "<BR>";
    echo "<INPUT CLASS=\"formsubmit\" TYPE=\"submit\" NAME=\"ftrmod\" VALUE=\"".$rsweb_ln['adm']['ftrmodstat10']."\">";
    echo "</FORM>";
  }
  else {
    echo $rsweb_ln['adm']['ftrmodstat11'];
  }  
  echo $rsweb_theme['ftr']['sep'];

  if(_RSWEB_DBCFG == "1") {  
    echo "<FORM ENCTYPE=\"multipart/form-data\" CLASS=\"ftrlmtform\" NAME=\"ftrlmtform\" ACTION=\"\" METHOD=\"post\">";
    echo $rsweb_ln['adm']['ftrlmttxt1'];
    echo "<SELECT CLASS=\"forminput\" NAME=\"ftr_lmt\">";
    for ($ftr_lmt_i=1; $ftr_lmt_i<=10; $ftr_lmt_i++) {
?>
    <OPTION VALUE="<?php echo $ftr_lmt_i;?>"<?php if($ftr_lmt_i == _RSWEB_CFG_FTR_LMT) {echo " SELECTED";}?>><?php echo $ftr_lmt_i;?></OPTION>
<?php
    }
    echo "</SELECT>";
    echo "<BR><BR>";
    echo "<INPUT CLASS=\"formsubmit\" TYPE=\"submit\" NAME=\"ftrmod\" VALUE=\"".$rsweb_ln['adm']['ftrlmt']."\">";
    echo "</FORM>";
  }
  else {
    echo $rsweb_ln['adm']['ftrlmttxt1'] . _RSWEB_CFG_FTR_LMT;
    echo "<BR>";
    echo $rsweb_ln['adm']['ftrmodstat12'];
  }
  echo "</DIV>";
  require_once _RSWEB_RSWEB_DIR . 'ftrmodforms.inc.php';
} // else if enabled
} // if user has the rights
else {
  echo "<DIV CLASS=\"err\">" . $rsweb_ln['err']['1'] . "</DIV>";
} // else if user has no rights
?>