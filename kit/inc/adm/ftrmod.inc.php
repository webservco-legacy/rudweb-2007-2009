<?php
/*
./inc/adm/ftrmod.inc.php
17:03 2008-04-21
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once './../../lib/404.php';}

//echo $rudweb_skin['ftr']['hdr'];
if($_SESSION[_RUDWEB_PRE.'usr_level'] >= 3) {

  echo $rudweb_skin['cnt']['tt1']['pre'];
  echo $rudweb_ln['featured']['tt'];
  echo $rudweb_skin['cnt']['tt1']['suf'];

  echo $rudweb_skin['cnt']['txt']['pre'];
  
  if(!isset($_GET['act'])) {
    if(_RUDWEB_CFG_FTR_ON == "0") {
      echo $rudweb_skin['adm']['mod']['pre'];
      echo $rudweb_ln['adm']['modstat0'];
      echo "<BR>";
      echo $rudweb_skin['adm']['mod']['suf'];
    } // if disabled

    else {
      if(_RUDWEB_DBCFG == "1") {  
        echo $rudweb_skin['adm']['mod']['pre'];
        echo "<FORM ENCTYPE=\"multipart/form-data\" CLASS=\"ftrlmtform\" NAME=\"ftrlmtform\" ACTION=\"\" METHOD=\"post\">";
        echo $rudweb_ln['adm']['lmttxt1'];
        echo "<SELECT CLASS=\"forminput\" NAME=\"ftr_lmt\">";
        for ($ftr_lmt_i=1; $ftr_lmt_i<=10; $ftr_lmt_i++) {
    ?>
        <OPTION VALUE="<?php echo $ftr_lmt_i;?>"<?php if($ftr_lmt_i == _RUDWEB_CFG_FTR_LMT) {echo " SELECTED";}?>><?php echo $ftr_lmt_i;?></OPTION>
    <?php
        }
        echo "</SELECT>";
        echo "<BR><BR>";
        echo "<INPUT CLASS=\"formsubmit\" TYPE=\"submit\" NAME=\"ftrmod\" VALUE=\"".$rudweb_ln['adm']['save']."\">";
        echo "</FORM>";
        echo $rudweb_skin['adm']['mod']['suf'];
      }
      else {
        echo $rudweb_skin['adm']['mod']['pre'];
        echo $rudweb_ln['adm']['lmttxt1'] . _RUDWEB_CFG_FTR_LMT;
        echo "<BR>";
        echo $rudweb_ln['adm']['modstat12'];
        echo $rudweb_skin['adm']['mod']['suf'];
      }
    } // else if enabled
  }
  else if (isset($_GET['act'])) {
    if(_RUDWEB_CFG_FTR_ON == 1) {
      $act = rudweb_filter_input($_GET['act']);
      switch($act) {
        case 'add' : {showNewFtrForm(); break;}
        case 'adm' : {require_once _RUDWEB_ADMIN_DIR . 'ftrmodforms.inc.php'; break;}
        default : {break;}
      }
    }
  }  
  echo $rudweb_skin['cnt']['txt']['suf'];
} // if user has the rights
else {
  echo "<DIV CLASS=\"err\">" . $rudweb_ln['err']['1'] . "</DIV>";
} // else if user has no rights
?>