<?php
/*
./inc/modcart.inc.php
13:20 2008-03-12
*/
if(!defined('_RSWEB_PUBFIL')) {require_once './../lib/404.php';}

if(isset($_POST[_RSWEB_PRE.'cart_act'])) { // needs further validation
  $rsweb_cart_act = $_POST[_RSWEB_PRE.'cart_act'];
  switch($rsweb_cart_act) {
    case "add": {
      foreach ($_POST['qty'] as $pid => $qty) {
        if (isset($_SESSION[_RSWEB_PRE.'cart']['qty'][$pid])) {
          $_SESSION[_RSWEB_PRE.'cart']['qty'][$pid] = $_SESSION[_RSWEB_PRE.'cart']['qty'][$pid] + $qty;
        }
        else {$_SESSION[_RSWEB_PRE.'cart']['qty'][$pid] = $qty;}
      }
      foreach ($_POST['prc'] as $pid => $prc) {
        $_SESSION[_RSWEB_PRE.'cart']['prc'][$pid] = $prc;
        $_SESSION[_RSWEB_PRE.'cart']['stt'][$pid] = $_SESSION[_RSWEB_PRE.'cart']['qty'][$pid] * $_SESSION[_RSWEB_PRE.'cart']['prc'][$pid];
      }
      break;
    }
    case "mod": {
      foreach ($_POST['qty'] as $pid => $qty) {
        if (isset($_POST['del'][$pid])) {
          if (isset($_SESSION[_RSWEB_PRE.'cart']['qty'][$pid])) {unset($_SESSION[_RSWEB_PRE.'cart']['qty'][$pid]);}
        }
        else {
          if (isset($_SESSION[_RSWEB_PRE.'cart']['qty'][$pid])) {
            if ($qty == '0') {
              if (isset($_SESSION[_RSWEB_PRE.'cart']['qty'][$pid])) {unset($_SESSION[_RSWEB_PRE.'cart']['qty'][$pid]);}
              if (isset($_SESSION[_RSWEB_PRE.'cart']['prc'][$pid])) {unset($_SESSION[_RSWEB_PRE.'cart']['prc'][$pid]);}
              if (isset($_SESSION[_RSWEB_PRE.'cart']['stt'][$pid])) {unset($_SESSION[_RSWEB_PRE.'cart']['stt'][$pid]);}
            }
            else {
              $_SESSION[_RSWEB_PRE.'cart']['qty'][$pid] = $qty;
            }
          }
        }
      }
      foreach ($_POST['prc'] as $pid => $prc) {
        if (isset($_POST['del'][$pid])) {
          if (isset($_SESSION[_RSWEB_PRE.'cart']['prc'][$pid])) {unset($_SESSION[_RSWEB_PRE.'cart']['prc'][$pid]);}
          if (isset($_SESSION[_RSWEB_PRE.'cart']['stt'][$pid])) {unset($_SESSION[_RSWEB_PRE.'cart']['stt'][$pid]);}
        }
        else {
          if (isset($_SESSION[_RSWEB_PRE.'cart']['prc'][$pid])) {$_SESSION[_RSWEB_PRE.'cart']['prc'][$pid] = $prc;}
          if (isset($_SESSION[_RSWEB_PRE.'cart']['stt'][$pid])) {$_SESSION[_RSWEB_PRE.'cart']['stt'][$pid] = $_SESSION[_RSWEB_PRE.'cart']['qty'][$pid] * $_SESSION[_RSWEB_PRE.'cart']['prc'][$pid];}
        }
      }
      if (count($_SESSION[_RSWEB_PRE.'cart']['qty']) == '0') {$_SESSION[_RSWEB_PRE.'cart'] = NULL;}
      break;
    }
    /*
    case "del": {
      foreach ($_POST['qty'] as $pid => $qty) {
        if (isset($_SESSION[_RSWEB_PRE.'cart']['qty'][$pid])) {unset($_SESSION[_RSWEB_PRE.'cart']['qty'][$pid]);}
        if (isset($_SESSION[_RSWEB_PRE.'cart']['prc'][$pid])) {unset($_SESSION[_RSWEB_PRE.'cart']['prc'][$pid]);}
        if (isset($_SESSION[_RSWEB_PRE.'cart']['stt'][$pid])) {unset($_SESSION[_RSWEB_PRE.'cart']['stt'][$pid]);}
      }
      break;
    }
    */
    case "rst": {
      $_SESSION[_RSWEB_PRE.'cart'] = NULL;
      break;
    }
    default   : {break;}
  }
}

$rsweb_cart = $_SESSION[_RSWEB_PRE.'cart'];

function showProducts() { // this will become obsolete, or fully changed to take form db or something
  echo "<HR>";
  echo "our products:<BR>";
  
  echo "<FORM ENCTYPE=\"multipart/form-data\" CLASS=\"\" NAME=\"cartaddform[1]\" ACTION=\"\" METHOD=\"post\">";
  echo "CD  - $ 25&#160;";
  echo "<INPUT CLASS=\"\" TYPE=\"hidden\" NAME=\""._RSWEB_PRE."cart_act\" VALUE=\"add\">";
  echo "<INPUT CLASS=\"\" TYPE=\"text\" NAME=\"qty[1]\" SIZE=\"1\" MAXLENGTH=\"2\" VALUE=\"1\">";
  echo "<INPUT CLASS=\"\" TYPE=\"hidden\" NAME=\"prc[1]\" VALUE=\"25\">";
  echo "&#160;";
  echo "<INPUT CLASS=\"\" TYPE=\"submit\" NAME=\"go\" VALUE=\"add\">";
  echo "</FORM>";
  
  echo "<BR>";
  
  echo "<FORM ENCTYPE=\"multipart/form-data\" CLASS=\"\" NAME=\"cartaddform[2]\" ACTION=\"\" METHOD=\"post\">";
  echo "LP  - $ 50&#160;";
  echo "<INPUT CLASS=\"\" TYPE=\"hidden\" NAME=\""._RSWEB_PRE."cart_act\" VALUE=\"add\">";
  echo "<INPUT CLASS=\"\" TYPE=\"text\" NAME=\"qty[2]\" SIZE=\"1\" MAXLENGTH=\"2\" VALUE=\"1\">";
  echo "<INPUT CLASS=\"\" TYPE=\"hidden\" NAME=\"prc[2]\" VALUE=\"50\">";
  echo "&#160;";
  echo "<INPUT CLASS=\"\" TYPE=\"submit\" NAME=\"go\" VALUE=\"add\">";
  echo "</FORM>";
  
  echo "<BR>";
  
  echo "<FORM ENCTYPE=\"multipart/form-data\" CLASS=\"\" NAME=\"cartaddform[3]\" ACTION=\"\" METHOD=\"post\">";
  echo "MC  - $ 10&#160;";
  echo "<INPUT CLASS=\"\" TYPE=\"hidden\" NAME=\""._RSWEB_PRE."cart_act\" VALUE=\"add\">";
  echo "<INPUT CLASS=\"\" TYPE=\"text\" NAME=\"qty[3]\" SIZE=\"1\" MAXLENGTH=\"2\" VALUE=\"1\">";
  echo "<INPUT CLASS=\"\" TYPE=\"hidden\" NAME=\"prc[3]\" VALUE=\"10\">";
  echo "&#160;";
  echo "<INPUT CLASS=\"\" TYPE=\"submit\" NAME=\"go\" VALUE=\"add\">";
  echo "</FORM>";
}
function showCart() {
  global $rsweb_theme;
  global $rsweb_cart;
  
  echo $rsweb_theme['crt']['hdr'];

  echo $rsweb_theme['crt']['pre'];
  
  echo "<HR>";
  
  echo "your cart: ";
  
  if ($rsweb_cart === NULL) {
    echo "cart is empty";
  }
  else if($rsweb_cart !== NULL) {
    echo "<BR>";
    echo "prd = ";
    if($rsweb_cart !== NULL) {echo count($rsweb_cart['qty']);} else {echo "00";}
    echo "<BR>";
    echo "qty = ";
    if($rsweb_cart !== NULL) {echo array_sum($rsweb_cart['qty']);} else {echo "00";}
    echo "<BR>";
    echo "tot = ";
    if($rsweb_cart !== NULL) {echo array_sum($rsweb_cart['stt']);} else {echo "00";}
    
    echo "<BR>";
    
    echo "<FORM ENCTYPE=\"multipart/form-data\" CLASS=\"\" NAME=\"myform\" ACTION=\"\" METHOD=\"post\">";
    echo "<INPUT CLASS=\"\" TYPE=\"hidden\" NAME=\""._RSWEB_PRE."cart_act\" VALUE=\"mod\">";
    foreach ($rsweb_cart['prc'] as $pid => $prc) {
      echo "<INPUT CLASS=\"\" TYPE=\"hidden\" NAME=\"prc[".$pid."]\" VALUE=\"".$prc."\">";
    }
    foreach ($rsweb_cart['qty'] as $pid => $qty) {
      echo $rsweb_cart['prc'][$pid] . '$&#160;';
      echo "<INPUT CLASS=\"\" TYPE=\"text\" NAME=\"qty[".$pid."]\" SIZE=\"1\" MAXLENGTH=\"2\" VALUE=\"".$qty."\">";
      echo "&#160;";
      echo "<INPUT TYPE=\"checkbox\" NAME=\"del[".$pid."]\">";
      echo "<BR>";
      
    }
    echo "<INPUT CLASS=\"\" TYPE=\"submit\" NAME=\"go\" VALUE=\"mod\">";
    echo "</FORM>";
    
    echo "<BR>";
    
    echo "<FORM ENCTYPE=\"multipart/form-data\" CLASS=\"\" NAME=\"myform\" ACTION=\"\" METHOD=\"post\">";
    echo "<INPUT CLASS=\"\" TYPE=\"hidden\" NAME=\""._RSWEB_PRE."cart_act\" VALUE=\"rst\">";
    echo "<INPUT CLASS=\"\" TYPE=\"submit\" NAME=\"go\" VALUE=\"empty\">";
    echo "</FORM>";
  }
  echo "<HR>";
  
  echo $rsweb_theme['crt']['suf'];
  echo $rsweb_theme['crt']['sep'];

  echo $rsweb_theme['crt']['ftr'];
}
?>