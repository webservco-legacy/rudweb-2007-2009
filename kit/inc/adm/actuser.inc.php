<?php
/*
./inc/adm/actuser.inc.php
12:50 2008-04-05
*/
if(!defined('_RUDWEB_PUBFIL')) {require_once './../../lib/404.php';}

?>
<?php
if (isset($_GET['auth'])) {
  echo '<DIV CLASS="title">';
  echo $rudweb_ln['usr']['accact'];
  echo '</DIV>';
  if($_SESSION[_RUDWEB_PRE.'usr_level'] > 0) {
    echo '<DIV CLASS="text" STYLE="text-align: center;">';
    echo '<BR>';
    echo $rudweb_ln['usr']['alreadyreg'];
    echo '</DIV>';
  }
  else {
    $authtoken = rudweb_filter_input($_GET['auth']);
    
    // verif if token exists
    $yesterday  = date("Y-m-d",mktime(0, 0, 0, date("m")  , date("d")-1, date("Y")));
    
    $query_va = "SELECT * FROM "._RUDWEB_PRE."var_reg WHERE usr_auth = '$authtoken' AND (usr_auth_mail = '1' AND usr_add_date >= '$yesterday') LIMIT 1";
    $result_va = rudweb_qres($rudweb_dbtype, $query_va);
    $total_results_va = rudweb_qtotal($rudweb_dbtype, $result_va);
    
    // display error message if not
    if ($total_results_va == '0') {
      echo '<DIV CLASS="text" STYLE="text-align: center;">';
      echo '<BR>';
      echo $rudweb_ln['usr']['aaerror1'];
      echo '<BR>';
      echo $rudweb_ln['usr']['aaerror2'];
      echo '</DIV>';
    }
    
    else {
      $authrow = rudweb_fetch_assoc($rudweb_dbtype, $result_va);
      
      $usr_add_date = date("Y-m-d");
      
      $next_id_query  = "SELECT MAX(usr_id) FROM "._RUDWEB_PRE."set_usr";
      $next_id_result = rudweb_qres($rudweb_dbtype, $next_id_query);
      $next_id        = rudweb_result($rudweb_dbtype, $next_id_result, 0) + 1;
      
      $insert_query = "INSERT INTO "._RUDWEB_PRE."set_usr (usr_id, usr_first_name, usr_middle_name, usr_last_name, usr_mail, usr_phone, usr_address, usr_country, usr_nick_name, usr_login, usr_pass, usr_skin, usr_lang_index, usr_level, usr_status, usr_subscribe, usr_notes, usr_add_date) VALUES ('".$next_id."', '".$authrow['usr_first_name']."', '".$authrow['usr_middle_name']."', '".$authrow['usr_last_name']."', '".$authrow['usr_mail']."', '".$authrow['usr_phone']."', '".$authrow['usr_address']."', '".$authrow['usr_country']."', '".$authrow['usr_first_name']."', '".$authrow['usr_mail']."', '".$authrow['usr_pass']."', '"._RUDWEB_CFG_SKIN."', '".$authrow['usr_lang_index']."', '1', '1', '".$authrow['usr_subscribe']."', '', '$usr_add_date')";
      $result_iq    = rudweb_qres($rudweb_dbtype, $insert_query);
      
      $delete_query = "DELETE FROM "._RUDWEB_PRE."var_reg WHERE reg_id = '".$authrow['reg_id']."'";
      $result_iq    = rudweb_qres($rudweb_dbtype, $delete_query);
      
      $new_username = $authrow['usr_first_name'] . ' ' . $authrow['usr_last_name'];
      require _RUDWEB_LANG_DIR . $_SESSION[_RUDWEB_PRE.'usr_lang_index'] . '/usrmail.inc.php';
      
      echo '<DIV CLASS="text" STYLE="text-align: center;">';
      echo $rudweb_ln['usr']['authoka'];
      echo $new_username;
      echo $rudweb_ln['usr']['authokb'];
      echo '</DIV>';
    }
  }
}
else {
  echo "<DIV CLASS=\"err\">" . $rudweb_ln['err']['1'] . "</DIV>";
} // else if user has no rights
?>