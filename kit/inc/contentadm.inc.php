<?php
/*
./inc/contentadm.inc.php
14:09 2008-03-11
*/
if(!defined('_UBWS_PUBFIL')) {require_once './../lib/404.php';}

      // CONTENT
      echo $ubws_theme['cnt']['hdr'];
      echo $ubws_theme['cnt']['pre'];
      
      $query_menu = "SELECT * FROM `"._UBWS_PRE."ws_mnu` WHERE `mnu_id` = '".$ubws_mnu_id."' AND (`mnu_dis` = '0' AND `mnu_ln` = '".$_SESSION[_UBWS_PRE.'usr_lang_index']."') LIMIT 1";
      $rst_query_menu = mysql_query($query_menu) or require _UBWS_LIB_DIR . 'myerr.php';
      $row_rst_menu = mysql_fetch_assoc($rst_query_menu);
        
      $mnu_tt    = $row_rst_menu['mnu_tt'];
      $mnu_trg   = $row_rst_menu['mnu_trg'];
      $cnt_alias = $row_rst_content['cnt_alias'];
      $cnt_tt    = $row_rst_content['cnt_tt'];
      $cnt_stt   = $row_rst_content['cnt_stt'];
      $cnt_txt   = $row_rst_content['cnt_txt'];
?>
<FORM ENCTYPE="multipart/form-data" CLASS="contmodform" NAME="contmodform" ACTION="" METHOD="post">
<BR>
<DIV STYLE="text-align:center">
<INPUT TYPE="hidden" NAME="mnu_id" VALUE="<?php echo $ubws_mnu_id;?>">
<?php echo $ubws_ln['adm']['mnu_tt'];?>
<INPUT CLASS="forminput" TYPE="text" NAME="mnu_tt" MAXLENGTH="150" VALUE="<?php echo $mnu_tt;?>">
<?php echo $ubws_ln['adm']['mnu_trg'];?>&#160;
<INPUT CLASS="forminput" TYPE="text" NAME="mnu_trg" MAXLENGTH="8" VALUE="<?php echo $mnu_trg;?>">
<INPUT TYPE="hidden" NAME="cnt_id" VALUE="<?php echo $this_content_id;?>">
<INPUT TYPE="hidden" NAME="cnt_alias" VALUE="<?php echo $cnt_alias;?>">
</DIV>
<?php      
      // PICTURES 1
      if (_UBWS_CFG_PICS_1 === "1") {
        echo $ubws_theme['cnt']['pic']['hdr']['1'];
        $query_pic1 = "SELECT * FROM `"._UBWS_PRE."ws_pic` WHERE `cnt_id` = '".$this_content_id."' AND (`pic_loc` = '1' AND `pic_dis` = '0') ORDER BY `pic_ord` ASC";
        $rst_query_pic1 = mysql_query($query_pic1) or require _UBWS_LIB_DIR . 'myerr.php';
        $total_pic1 = mysql_num_rows($rst_query_pic1);
        if ($total_pic1 != '0') {
          for ($pic1i=1; $pic1i<=$total_pic1; $pic1i++) {
            $row_rst_pic1 = mysql_fetch_assoc($rst_query_pic1);
            $pictureFile1[$pic1i]    = _UBWS_PIC_DIR . $row_rst_pic1['pic_fn'];
            $pictureFile1url[$pic1i] = _UBWS_PIC_URL . $row_rst_pic1['pic_fn'];
            $pictureFile1TT[$pic1i] = $row_rst_pic1['pic_tt'];
            $pic1_imgsrc[$pic1i] = "<IMG SRC=\""._UBWS_LIB_URL ."pic.php?imgfile=" . $pictureFile1[$pic1i] . "&amp;max_size=".$ubws_theme['cnt']['pic']['max']['1']."\" ALT=\"".$pictureFile1TT[$pic1i]."\">";
            echo $ubws_theme['cnt']['pic']['pre']['1'];
            if ($row_rst_pic1['pic_tmb'] === '1') {
              echo "<A CLASS=\"default\" rel=\"lightbox[".$row_rst_pic1['pic_loc']."]\" HREF=\"" . $pictureFile1url[$pic1i] . "\" TITLE=\"".$pictureFile1TT[$pic1i]."\">";
              echo $pic1_imgsrc[$pic1i];
              echo "</A>";
            }
            else {
              echo $pic1_imgsrc[$pic1i];
            }
            echo "<BR>" . $ubws_ln['adm']['pic_del'];
            echo "<INPUT CLASS=\"chk\" TYPE=\"checkbox\" NAME=\"delpic[".$row_rst_pic1['pic_id']."]\">";
            echo "<BR>" . $ubws_ln['adm']['pic_repl'];
            echo "<INPUT CLASS=\"imgupload\" TYPE=\"file\" NAME=\"pcscnt[".$row_rst_pic1['pic_id']."]\" SIZE=\"1\">";
            echo $ubws_theme['cnt']['pic']['suf']['1'];
            echo $ubws_theme['cnt']['pic']['sep']['1'];
          }
        }
        // NEW PIC
        echo $ubws_theme['cnt']['pic']['pre']['1'];
        echo "<BR><BR>";
        echo $ubws_ln['adm']['new_pic'];
        echo "<INPUT CLASS=\"imgupload\" TYPE=\"file\" NAME=\"pcscntnew[1]\" SIZE=\"1\">";
        echo $ubws_theme['cnt']['pic']['suf']['1'];
        echo $ubws_theme['cnt']['pic']['ftr']['1'];
      }

      // TITLE
?>      
      <?php echo $ubws_theme['cnt']['tt1']['pre'];?>
      <INPUT CLASS="titleadm" TYPE="text" NAME="cnt_tt" SIZE="" MAXLENGTH="150" VALUE="<?php echo $cnt_tt;?>">
      <?php echo $ubws_theme['cnt']['tt1']['suf'];?>
<?php
      // PICTURES 2
      if (_UBWS_CFG_PICS_2 === "1") {
        echo $ubws_theme['cnt']['pic']['hdr']['2'];
        $query_pic2 = "SELECT * FROM `"._UBWS_PRE."ws_pic` WHERE `cnt_id` = '".$this_content_id."' AND (`pic_loc` = '2' AND `pic_dis` = '0') ORDER BY `pic_ord` ASC";
        $rst_query_pic2 = mysql_query($query_pic2) or require _UBWS_LIB_DIR . 'myerr.php';
        $total_pic2 = mysql_num_rows($rst_query_pic2);
        if ($total_pic2 != '0') {
          for ($pic2i=1; $pic2i<=$total_pic2; $pic2i++) {
            $row_rst_pic2 = mysql_fetch_assoc($rst_query_pic2);
            $pictureFile2[$pic2i]    = _UBWS_PIC_DIR . $row_rst_pic2['pic_fn'];
            $pictureFile2url[$pic2i] = _UBWS_PIC_URL . $row_rst_pic2['pic_fn'];
            $pictureFile2TT[$pic2i] = $row_rst_pic2['pic_tt'];
            $pic2_imgsrc[$pic2i] = "<IMG SRC=\""._UBWS_LIB_URL ."pic.php?imgfile=" . $pictureFile2[$pic2i] . "&amp;max_size=".$ubws_theme['cnt']['pic']['max']['2']."\" ALT=\"".$pictureFile2TT[$pic2i]."\">";
            echo $ubws_theme['cnt']['pic']['pre']['2'];
            if ($row_rst_pic2['pic_tmb'] === '1') {
              echo "<A CLASS=\"default\" rel=\"lightbox[".$row_rst_pic2['pic_loc']."]\" HREF=\"" . $pictureFile2url[$pic2i] . "\" TITLE=\"".$pictureFile2TT[$pic2i]."\">";
              echo $pic2_imgsrc[$pic2i];
              echo "</A>";
            }
            else {
              echo $pic2_imgsrc[$pic2i];
            }
            echo "<BR>" . $ubws_ln['adm']['pic_del'];
            echo "<INPUT CLASS=\"chk\" TYPE=\"checkbox\" NAME=\"delpic[".$row_rst_pic2['pic_id']."]\">";
            echo "<BR>" . $ubws_ln['adm']['pic_repl'];
            echo "<INPUT CLASS=\"imgupload\" TYPE=\"file\" NAME=\"pcscnt[".$row_rst_pic2['pic_id']."]\" SIZE=\"1\">";
            echo $ubws_theme['cnt']['pic']['suf']['2'];
            echo $ubws_theme['cnt']['pic']['sep']['2'];
          }
        }
        // NEW PIC
        echo $ubws_theme['cnt']['pic']['pre']['2'];
        echo "<BR><BR>";
        echo $ubws_ln['adm']['new_pic'];
        echo "<INPUT CLASS=\"imgupload\" TYPE=\"file\" NAME=\"pcscntnew[2]\" SIZE=\"1\">";
        echo $ubws_theme['cnt']['pic']['suf']['2'];
        echo $ubws_theme['cnt']['pic']['ftr']['2'];
      }
      
      // SUBTITLE
?>
      <?php echo $ubws_theme['cnt']['tt2']['pre'];?>
      <INPUT CLASS="subtitleadm" TYPE="text" NAME="cnt_stt" MAXLENGTH="60" VALUE="<?php echo $cnt_stt;?>">
      <?php echo $ubws_theme['cnt']['tt2']['suf'];?>
<?php
      // PICTURES 3
      if (_UBWS_CFG_PICS_3 === "1") {
        echo $ubws_theme['cnt']['pic']['hdr']['3'];
        $query_pic3 = "SELECT * FROM `"._UBWS_PRE."ws_pic` WHERE `cnt_id` = '".$this_content_id."' AND (`pic_loc` = '3' AND `pic_dis` = '0') ORDER BY `pic_ord` ASC";
        $rst_query_pic3 = mysql_query($query_pic3) or require _UBWS_LIB_DIR . 'myerr.php';
        $total_pic3 = mysql_num_rows($rst_query_pic3);
        if ($total_pic3 != '0') {
          for ($pic3i=1; $pic3i<=$total_pic3; $pic3i++) {
            $row_rst_pic3 = mysql_fetch_assoc($rst_query_pic3);
            $pictureFile3[$pic3i]    = _UBWS_PIC_DIR . $row_rst_pic3['pic_fn'];
            $pictureFile3url[$pic3i] = _UBWS_PIC_URL . $row_rst_pic3['pic_fn'];
            $pictureFile3TT[$pic3i] = $row_rst_pic3['pic_tt'];
            $pic3_imgsrc[$pic3i] = "<IMG SRC=\""._UBWS_LIB_URL ."pic.php?imgfile=" . $pictureFile3[$pic3i] . "&amp;max_size=".$ubws_theme['cnt']['pic']['max']['3']."\" ALT=\"".$pictureFile3TT[$pic3i]."\">";
            echo $ubws_theme['cnt']['pic']['pre']['3'];
            if ($row_rst_pic3['pic_tmb'] === '1') {
              echo "<A CLASS=\"default\" rel=\"lightbox[".$row_rst_pic3['pic_loc']."]\" HREF=\"" . $pictureFile3url[$pic3i] . "\" TITLE=\"".$pictureFile3TT[$pic3i]."\">";
              echo $pic3_imgsrc[$pic3i];
              echo "</A>";
            }
            else {
              echo $pic3_imgsrc[$pic3i];
            }
            echo "<BR>" . $ubws_ln['adm']['pic_del'];
            echo "<INPUT CLASS=\"chk\" TYPE=\"checkbox\" NAME=\"delpic[".$row_rst_pic3['pic_id']."]\">";
            echo "<BR>" . $ubws_ln['adm']['pic_repl'];
            echo "<INPUT CLASS=\"imgupload\" TYPE=\"file\" NAME=\"pcscnt[".$row_rst_pic3['pic_id']."]\" SIZE=\"1\">";
            echo $ubws_theme['cnt']['pic']['suf']['3'];
            echo $ubws_theme['cnt']['pic']['sep']['3'];
          }
        }
        // NEW PIC
        echo $ubws_theme['cnt']['pic']['pre']['3'];
        echo "<BR><BR>";
        echo $ubws_ln['adm']['new_pic'];
        echo "<INPUT CLASS=\"imgupload\" TYPE=\"file\" NAME=\"pcscntnew[3]\" SIZE=\"1\">";
        echo $ubws_theme['cnt']['pic']['suf']['3'];
        echo $ubws_theme['cnt']['pic']['ftr']['3'];
      }

      // CONTENT TEXT
?>
<?php echo $ubws_theme['cnt']['txt']['pre'];?>
<?php
$oFCKeditor                                     = new FCKeditor('cnt_txt');
$oFCKeditor->BasePath                           = _UBWS_LIB_URL .'editor/';
$oFCKeditor->Config['CustomConfigurationsPath'] = _UBWS_JS_URL . 'editor.js';
$oFCKeditor->ToolbarSet                         = "ubws";
$oFCKeditor->Config['SkinPath']                 = _UBWS_LIB_URL . 'editor/editor/skins/ubws/';
$oFCKeditor->Config['EditorAreaCSS']            = _UBWS_THEME_URL . $_SESSION[_UBWS_PRE.'usr_theme_dir'] . '/styles/editor.css';
$oFCKeditor->Height                             = 500;
$oFCKeditor->Value                              = $cnt_txt;
$oFCKeditor->Config['AutoDetectLanguage'] 	    = false;
$oFCKeditor->Config['DefaultLanguage']          = $_SESSION[_UBWS_PRE.'usr_lang_index'];
$oFCKeditor->Create();
?>
<?php echo $ubws_theme['cnt']['txt']['suf'];?>
<?php      
      // PICTURES 4
      if (_UBWS_CFG_PICS_4 === "1") {
        echo $ubws_theme['cnt']['pic']['hdr']['4'];
        $query_pic4 = "SELECT * FROM `"._UBWS_PRE."ws_pic` WHERE `cnt_id` = '".$this_content_id."' AND (`pic_loc` = '4' AND `pic_dis` = '0') ORDER BY `pic_ord` ASC";
        $rst_query_pic4 = mysql_query($query_pic4) or require _UBWS_LIB_DIR . 'myerr.php';
        $total_pic4 = mysql_num_rows($rst_query_pic4);
        if ($total_pic4 != '0') {
          for ($pic4i=1; $pic4i<=$total_pic4; $pic4i++) {
            $row_rst_pic4 = mysql_fetch_assoc($rst_query_pic4);
            $pictureFile4[$pic4i]    = _UBWS_PIC_DIR . $row_rst_pic4['pic_fn'];
            $pictureFile4url[$pic4i] = _UBWS_PIC_URL . $row_rst_pic4['pic_fn'];
            $pictureFile4TT[$pic4i] = $row_rst_pic4['pic_tt'];
            $pic4_imgsrc[$pic4i] = "<IMG SRC=\""._UBWS_LIB_URL ."pic.php?imgfile=" . $pictureFile4[$pic4i] . "&amp;max_size=".$ubws_theme['cnt']['pic']['max']['4']."\" ALT=\"".$pictureFile4TT[$pic4i]."\">";
            echo $ubws_theme['cnt']['pic']['pre']['4'];
            if ($row_rst_pic4['pic_tmb'] === '1') {
              echo "<A CLASS=\"default\" rel=\"lightbox[".$row_rst_pic4['pic_loc']."]\" HREF=\"" . $pictureFile4url[$pic4i] . "\" TITLE=\"".$pictureFile4TT[$pic4i]."\">";
              echo $pic4_imgsrc[$pic4i];
              echo "</A>";
            }
            else {
              echo $pic4_imgsrc[$pic4i];
            }
            echo "<BR>" . $ubws_ln['adm']['pic_del'];
            echo "<INPUT CLASS=\"chk\" TYPE=\"checkbox\" NAME=\"delpic[".$row_rst_pic4['pic_id']."]\">";
            echo "<BR>" . $ubws_ln['adm']['pic_repl'];
            echo "<INPUT CLASS=\"imgupload\" TYPE=\"file\" NAME=\"pcscnt[".$row_rst_pic4['pic_id']."]\" SIZE=\"1\">";
            echo $ubws_theme['cnt']['pic']['suf']['4'];
            echo $ubws_theme['cnt']['pic']['sep']['4'];
          }
        }
        // NEW PIC
        echo $ubws_theme['cnt']['pic']['pre']['4'];
        echo "<BR><BR>";
        echo $ubws_ln['adm']['new_pic'];
        echo "<INPUT CLASS=\"imgupload\" TYPE=\"file\" NAME=\"pcscntnew[4]\" SIZE=\"1\">";
        echo $ubws_theme['cnt']['pic']['suf']['4'];
        echo $ubws_theme['cnt']['pic']['ftr']['4'];
      }
?>
<DIV STYLE="text-align: center">
<BR>
<INPUT CLASS="formsubmit" TYPE="submit" NAME="cntmodcnt" VALUE="<?php echo $ubws_ln['adm']['cnt_mod'];?>">
&#160;
<INPUT CLASS="formsubmit" TYPE="submit" NAME="cntdelcnt" VALUE="<?php echo $ubws_ln['adm']['cnt_del'];?>">
<BR><BR>
</DIV>
</FORM>
<?php
      echo $ubws_theme['cnt']['suf'];
      echo $ubws_theme['cnt']['ftr'];
      
      // TAGS
      // XXX
      
      // COMMENTS
      // XXX
      
      // LINKS
      // XXX
      
      // XXX
?>