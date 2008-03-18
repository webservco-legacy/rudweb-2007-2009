# rudweb table structure
-- 09:57 2008-03-18
DROP TABLE IF EXISTS rudweb_set_cfg;
CREATE TABLE rudweb_set_cfg (
  set_id int(5) unsigned NOT NULL,
  set_set varchar(150) NOT NULL,
  set_val varchar(150) NOT NULL,
  set_crd date NOT NULL,
  set_crt time NOT NULL,
  set_cru int(5) unsigned NOT NULL,
  set_mdd date NOT NULL,
  set_mdt time NOT NULL,
  set_mdu int(5) unsigned NOT NULL,
  PRIMARY KEY  (set_id)
) myisam_str;

DROP TABLE IF EXISTS rudweb_set_thm;
CREATE TABLE rudweb_set_thm (
  thm_id int(5) unsigned NOT NULL,
  thm_tt varchar(30) NOT NULL,
  thm_set varchar(150) NOT NULL,
  thm_val varchar(150) NOT NULL,
  thm_crd date NOT NULL,
  thm_crt time NOT NULL,
  thm_cru int(5) unsigned NOT NULL,
  thm_mdd date NOT NULL,
  thm_mdt time NOT NULL,
  thm_mdu int(5) unsigned NOT NULL,
  PRIMARY KEY  (thm_id)
) myisam_str;

DROP TABLE IF EXISTS rudweb_set_usr;
CREATE TABLE rudweb_set_usr (
  usr_id int(5) unsigned NOT NULL,
  usr_first_name varchar(30) NOT NULL,
  usr_middle_name varchar(15) NOT NULL,
  usr_last_name varchar(30) NOT NULL,
  usr_mail varchar(30) NOT NULL,
  usr_phone varchar(30) NOT NULL,
  usr_address varchar(255) NOT NULL,
  usr_country varchar(30) NOT NULL,
  usr_nick_name varchar(30) NOT NULL,
  usr_login varchar(30) NOT NULL,
  usr_pass varchar(32) NOT NULL,
  usr_theme varchar(15) NOT NULL,
  usr_lang_index char(2) NOT NULL,
  usr_level tinyint(1) unsigned NOT NULL,
  usr_active tinyint(1) unsigned NOT NULL,
  usr_auth varchar(32) NOT NULL,
  usr_status tinyint(1) unsigned NOT NULL,
  usr_subscribe tinyint(1) unsigned NOT NULL,
  usr_obs varchar(255) NOT NULL,
  usr_add_date date NOT NULL,
  PRIMARY KEY  (usr_id)
) myisam_str;

DROP TABLE IF EXISTS rudweb_var_logins;
CREATE TABLE rudweb_var_logins (
  login_id int(5) unsigned NOT NULL,
  usr_id int(5) unsigned NOT NULL,
  login_date date NOT NULL,
  login_time time NOT NULL,
  PRIMARY KEY  (login_id)
) myisam_str;

DROP TABLE IF EXISTS rudweb_var_stats;
CREATE TABLE rudweb_var_stats (
  stats_id int(5) unsigned NOT NULL,
  usr_id int(5) unsigned NOT NULL,
  usr_lang_index char(2) NOT NULL,
  stats_page varchar(150) NOT NULL,
  stats_ip varchar(20) NOT NULL,
  stats_date date NOT NULL,
  stats_time time NOT NULL,
  stats_browser varchar(150) NOT NULL,
  stats_host varchar(150) NOT NULL,
  stats_referer varchar(150) NOT NULL,
  stats_requesturi varchar(150) NOT NULL,
  PRIMARY KEY  (stats_id)
) myisam_str;

DROP TABLE IF EXISTS rudweb_ws_cnt;
CREATE TABLE rudweb_ws_cnt (
  cnt_id int(5) unsigned NOT NULL,
  cnt_ln char(2) NOT NULL,
  cnt_alias varchar(150) NOT NULL,
  cnt_tt varchar(150) NOT NULL,
  cnt_kw varchar(255) NOT NULL,
  cnt_dsc varchar(255) NOT NULL,
  cnt_stt varchar(60) NOT NULL,
  cnt_txt mediumtext NOT NULL,
  cnt_crd date NOT NULL,
  cnt_crt time NOT NULL,
  cnt_cru int(5) unsigned NOT NULL,
  cnt_mdd date NOT NULL,
  cnt_mdt time NOT NULL,
  cnt_mdu int(5) unsigned NOT NULL,
  cnt_dis tinyint(1) unsigned NOT NULL,
  cnt_lvl tinyint(1) unsigned NOT NULL,
  PRIMARY KEY  (cnt_id)
) myisam_str;

DROP TABLE IF EXISTS rudweb_ws_ftr;
CREATE TABLE rudweb_ws_ftr (
  ftr_id int(5) unsigned NOT NULL,
  ftr_ln char(2) NOT NULL,
  cnt_id int(5) unsigned NOT NULL,
  pic_id int(5) unsigned NOT NULL,
  ftr_sdate date NOT NULL,
  ftr_edate date NOT NULL,
  ftr_sup varchar(255) NOT NULL,
  ftr_ord tinyint(2) unsigned NOT NULL,
  ftr_crd date NOT NULL,
  ftr_crt time NOT NULL,
  ftr_cru int(5) unsigned NOT NULL,
  ftr_mdd date NOT NULL,
  ftr_mdt time NOT NULL,
  ftr_mdu int(5) unsigned NOT NULL,
  ftr_dis tinyint(1) unsigned NOT NULL,
  ftr_lvl tinyint(1) unsigned NOT NULL,
  PRIMARY KEY  (ftr_id)
) myisam_str;

DROP TABLE IF EXISTS rudweb_ws_lnk;
CREATE TABLE rudweb_ws_lnk (
  lnk_id int(5) unsigned NOT NULL,
  lnk_ln char(2) NOT NULL,
  lnk_alias varchar(150) NOT NULL,
  lnk_cat tinyint(1) unsigned NOT NULL,
  lnk_tt varchar(150) NOT NULL,
  lnk_url varchar(150) NOT NULL,
  lnk_trg varchar(8) NOT NULL,
  lnk_dsc varchar(255) NOT NULL,
  lnk_crd date NOT NULL,
  lnk_crt time NOT NULL,
  lnk_cru int(5) unsigned NOT NULL,
  lnk_mdd date NOT NULL,
  lnk_mdt time NOT NULL,
  lnk_mdu int(5) unsigned NOT NULL,
  lnk_dis tinyint(1) unsigned NOT NULL,
  lnk_lvl tinyint(1) unsigned NOT NULL,
  PRIMARY KEY  (lnk_id)
) myisam_str;

DROP TABLE IF EXISTS rudweb_ws_mnu;
CREATE TABLE rudweb_ws_mnu (
  mnu_id int(5) unsigned NOT NULL,
  mnu_ln char(2) NOT NULL,
  mnu_cat varchar(15) NOT NULL,
  mnu_lev tinyint(1) unsigned NOT NULL,
  mnu_par int(5) unsigned NOT NULL,
  mnu_ord tinyint(2) unsigned NOT NULL,
  mnu_tt varchar(150) NOT NULL,
  mnu_typ tinyint(1) unsigned NOT NULL,
  mnu_cnt_alias varchar(150) NOT NULL,
  mnu_trg varchar(8) NOT NULL,
  mnu_crd date NOT NULL,
  mnu_crt time NOT NULL,
  mnu_cru int(5) unsigned NOT NULL,
  mnu_mdd date NOT NULL,
  mnu_mdt time NOT NULL,
  mnu_mdu int(5) unsigned NOT NULL,
  mnu_dis tinyint(1) unsigned NOT NULL,
  mnu_lvl tinyint(1) unsigned NOT NULL,
  PRIMARY KEY  (mnu_id)
) myisam_str;

DROP TABLE IF EXISTS rudweb_ws_pic;
CREATE TABLE rudweb_ws_pic (
  pic_id int(5) unsigned NOT NULL,
  cnt_id int(5) unsigned NOT NULL,
  pic_ln char(2) NOT NULL,
  pic_tt varchar(150) NOT NULL,
  pic_fn varchar(150) NOT NULL,
  pic_loc tinyint(1) unsigned NOT NULL,
  pic_ord tinyint(2) unsigned NOT NULL,
  pic_tmb tinyint(1) unsigned NOT NULL,
  pic_crd date NOT NULL,
  pic_crt time NOT NULL,
  pic_cru int(5) unsigned NOT NULL,
  pic_mdd date NOT NULL,
  pic_mdt time NOT NULL,
  pic_mdu int(5) unsigned NOT NULL,
  pic_dis tinyint(1) unsigned NOT NULL,
  pic_lvl tinyint(1) unsigned NOT NULL,
  PRIMARY KEY  (pic_id)
) myisam_str;