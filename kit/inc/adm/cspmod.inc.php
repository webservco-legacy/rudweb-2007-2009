<?php
/*
./inc/adm/cspmod.inc.php
16:23 2008-04-21
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once './../../lib/404.php';}

if($_SESSION[_RUDWEB_PRE.'usr_level'] >= 3) {

  echo $rudweb_skin['cnt']['tt1']['pre'];
  echo $rudweb_ln['catalog']['csp'] ;
  echo $rudweb_skin['cnt']['tt1']['suf'];

  echo $rudweb_skin['cnt']['txt']['pre'];
  if (!isset($_GET['act'])) {
    if(_RUDWEB_CFG_CSP_ON == "0") {
      echo $rudweb_skin['adm']['mod']['pre'];
      echo $rudweb_ln['adm']['cspmodstat0'];
      echo "<BR>";
      if(_RUDWEB_DBCFG == "1") {
        echo "<FORM ENCTYPE=\"multipart/form-data\" CLASS=\"csponoffform\" NAME=\"csponoffform\" ACTION=\"\" METHOD=\"post\">";
        echo "<INPUT TYPE=\"hidden\" NAME=\"csponoff\" VALUE=\"1\">";
        echo "<BR>";
        echo "<INPUT CLASS=\"formsubmit\" TYPE=\"submit\" NAME=\"cspmod\" VALUE=\"".$rudweb_ln['adm']['cspmodstat01']."\">";
        echo "</FORM>";
      }
      else {
        echo $rudweb_ln['adm']['cspmodstat00'];
      }
      echo $rudweb_skin['adm']['mod']['suf'];
    } // if disabled

    else {
      echo $rudweb_skin['adm']['mod']['pre'];
      echo $rudweb_ln['adm']['cspmodstat1'];
      echo "<BR>";
      
      if(_RUDWEB_DBCFG == "1") {
        echo "<FORM ENCTYPE=\"multipart/form-data\" CLASS=\"csponoffform\" NAME=\"csponoffform\" ACTION=\"\" METHOD=\"post\">";
        echo "<INPUT TYPE=\"hidden\" NAME=\"csponoff\" VALUE=\"0\">";
        echo "<BR>";
        echo "<INPUT CLASS=\"formsubmit\" TYPE=\"submit\" NAME=\"cspmod\" VALUE=\"".$rudweb_ln['adm']['cspmodstat10']."\">";
        echo "</FORM>";
      }
      else {
        echo $rudweb_ln['adm']['cspmodstat11'];
      }  
      echo $rudweb_skin['adm']['mod']['suf'];

      if(_RUDWEB_DBCFG == "1") {
        echo $rudweb_skin['adm']['mod']['pre'];
        echo "<FORM ENCTYPE=\"multipart/form-data\" CLASS=\"csplmtform\" NAME=\"csplmtform\" ACTION=\"\" METHOD=\"post\">";
        echo $rudweb_ln['adm']['csplmttxt1'];
        echo "<SELECT CLASS=\"forminput\" NAME=\"csp_lmt\">";
        for ($csp_lmt_i=1; $csp_lmt_i<=10; $csp_lmt_i++) {
    ?>
        <OPTION VALUE="<?php echo $csp_lmt_i;?>"<?php if($csp_lmt_i == _RUDWEB_CFG_CSP_LMT) {echo " SELECTED";}?>><?php echo $csp_lmt_i;?></OPTION>
    <?php
        }
        echo "</SELECT>";
        echo "<BR><BR>";
        echo "<INPUT CLASS=\"formsubmit\" TYPE=\"submit\" NAME=\"cspmod\" VALUE=\"".$rudweb_ln['adm']['save']."\">";
        echo "</FORM>";
        echo $rudweb_skin['adm']['mod']['suf'];
      }
      else {
        echo $rudweb_skin['adm']['mod']['pre'];
        echo $rudweb_ln['adm']['csplmttxt1'] . _RUDWEB_CFG_CSP_LMT;
        echo "<BR>";
        echo $rudweb_ln['adm']['cspmodstat12'];
        echo $rudweb_skin['adm']['mod']['suf'];
      }
    } // else if enabled
  }
  else if (isset($_GET['act'])) {
    if(_RUDWEB_CFG_CSP_ON == 1) {
      $act = rudweb_filter_input($_GET['act']);
      switch($act) {
        case 'add' : {showNewCspForm(); break;}
        case 'adm' : {require_once _RUDWEB_ADMIN_DIR . 'cspmodforms.inc.php'; break;}
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