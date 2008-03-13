# rudweb table structure
-- 10:54 2008-01-21
DROP TABLE IF EXISTS rudweb_set_cfg;
CREATE TABLE rudweb_set_cfg (
  set_id int(5) unsigned NOT NULL default '0',
  set_set varchar(150) NOT NULL default '',
  set_val varchar(150) NOT NULL default '',
  set_crd date NOT NULL default '0000-00-00',
  set_crt time NOT NULL default '00:00:00',
  set_cru int(5) unsigned NOT NULL default '0',
  set_mdd date NOT NULL default '0000-00-00',
  set_mdt time NOT NULL default '00:00:00',
  set_mdu int(5) unsigned NOT NULL default '0',
  PRIMARY KEY  (set_id)
) myisam_str;

DROP TABLE IF EXISTS rudweb_set_thm;
CREATE TABLE rudweb_set_thm (
  thm_id int(5) unsigned NOT NULL default '0',
  thm_tt varchar(30) NOT NULL default '',
  thm_set varchar(150) NOT NULL default '',
  thm_val varchar(150) NOT NULL default '',
  thm_crd date NOT NULL default '0000-00-00',
  thm_crt time NOT NULL default '00:00:00',
  thm_cru int(5) unsigned NOT NULL default '0',
  thm_mdd date NOT NULL default '0000-00-00',
  thm_mdt time NOT NULL default '00:00:00',
  thm_mdu int(5) unsigned NOT NULL default '0',
  PRIMARY KEY  (thm_id)
) myisam_str;

DROP TABLE IF EXISTS rudweb_set_usr;
CREATE TABLE rudweb_set_usr (
  usr_id int(5) unsigned NOT NULL default '0',
  usr_first_name varchar(30) NOT NULL default '',
  usr_middle_name varchar(15) NOT NULL default '',
  usr_last_name varchar(30) NOT NULL default '',
  usr_mail varchar(30) NOT NULL default '',
  usr_nick_name varchar(30) NOT NULL default '',
  usr_login varchar(20) NOT NULL default '',
  usr_pass varchar(20) NOT NULL default '',
  usr_theme varchar(15) NOT NULL default '',
  usr_lang_index char(2) NOT NULL default '',
  usr_level tinyint(1) unsigned NOT NULL default '0',
  usr_status tinyint(1) unsigned NOT NULL default '0',
  usr_obs varchar(255) NOT NULL default '',
  usr_add_date date NOT NULL default '0000-00-00',
  PRIMARY KEY  (usr_id)
) myisam_str;

DROP TABLE IF EXISTS rudweb_var_logins;
CREATE TABLE rudweb_var_logins (
  login_id int(5) unsigned NOT NULL default '0',
  usr_id int(5) unsigned NOT NULL default '0',
  login_date date NOT NULL default '0000-00-00',
  login_time time NOT NULL default '00:00:00',
  PRIMARY KEY  (login_id)
) myisam_str;

DROP TABLE IF EXISTS rudweb_var_stats;
CREATE TABLE rudweb_var_stats (
  stats_id int(5) unsigned NOT NULL default '0',
  usr_id int(5) unsigned NOT NULL default '0',
  usr_lang_index char(2) NOT NULL default '',
  stats_page varchar(150) NOT NULL default '',
  stats_ip varchar(20) NOT NULL default '',
  stats_date date NOT NULL default '0000-00-00',
  stats_time time NOT NULL default '00:00:00',
  stats_browser varchar(150) NOT NULL default '',
  stats_host varchar(150) NOT NULL default '',
  stats_referer varchar(150) NOT NULL default '',
  stats_requesturi varchar(150) NOT NULL default '',
  PRIMARY KEY  (stats_id)
) myisam_str;

DROP TABLE IF EXISTS rudweb_ws_cnt;
CREATE TABLE rudweb_ws_cnt (
  cnt_id int(5) unsigned NOT NULL default '0',
  cnt_ln char(2) NOT NULL default '',
  cnt_alias varchar(150) NOT NULL default '',
  cnt_tt varchar(150) NOT NULL default '',
  cnt_kw varchar(255) NOT NULL default '',
  cnt_dsc varchar(255) NOT NULL default '',
  cnt_stt varchar(60) NOT NULL default '',
  cnt_txt mediumtext NOT NULL,
  cnt_crd date NOT NULL default '0000-00-00',
  cnt_crt time NOT NULL default '00:00:00',
  cnt_cru int(5) unsigned NOT NULL default '0',
  cnt_mdd date NOT NULL default '0000-00-00',
  cnt_mdt time NOT NULL default '00:00:00',
  cnt_mdu int(5) unsigned NOT NULL default '0',
  cnt_dis tinyint(1) unsigned NOT NULL default '0',
  cnt_lvl tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (cnt_id)
) myisam_str;

DROP TABLE IF EXISTS rudweb_ws_ftr;
CREATE TABLE rudweb_ws_ftr (
  ftr_id int(5) unsigned NOT NULL default '0',
  ftr_ln char(2) NOT NULL default '',
  cnt_id int(5) unsigned NOT NULL default '0',
  pic_id int(5) unsigned NOT NULL default '0',
  ftr_sdate date NOT NULL default '0000-00-00',
  ftr_edate date NOT NULL default '0000-00-00',
  ftr_sup varchar(255) NOT NULL default '',
  ftr_ord tinyint(2) unsigned NOT NULL default '0',
  ftr_crd date NOT NULL default '0000-00-00',
  ftr_crt time NOT NULL default '00:00:00',
  ftr_cru int(5) unsigned NOT NULL default '0',
  ftr_mdd date NOT NULL default '0000-00-00',
  ftr_mdt time NOT NULL default '00:00:00',
  ftr_mdu int(5) unsigned NOT NULL default '0',
  ftr_dis tinyint(1) unsigned NOT NULL default '0',
  ftr_lvl tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (ftr_id)
) myisam_str;

DROP TABLE IF EXISTS rudweb_ws_lnk;
CREATE TABLE rudweb_ws_lnk (
  lnk_id int(5) unsigned NOT NULL default '0',
  lnk_ln char(2) NOT NULL default '',
  lnk_alias varchar(150) NOT NULL default '',
  lnk_cat tinyint(1) unsigned NOT NULL default '0',
  lnk_tt varchar(150) NOT NULL default '',
  lnk_url varchar(150) NOT NULL default '',
  lnk_trg varchar(8) NOT NULL default '',
  lnk_dsc varchar(255) NOT NULL default '',
  lnk_crd date NOT NULL default '0000-00-00',
  lnk_crt time NOT NULL default '00:00:00',
  lnk_cru int(5) unsigned NOT NULL default '0',
  lnk_mdd date NOT NULL default '0000-00-00',
  lnk_mdt time NOT NULL default '00:00:00',
  lnk_mdu int(5) unsigned NOT NULL default '0',
  lnk_dis tinyint(1) unsigned NOT NULL default '0',
  lnk_lvl tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (lnk_id)
) myisam_str;

DROP TABLE IF EXISTS rudweb_ws_mnu;
CREATE TABLE rudweb_ws_mnu (
  mnu_id int(5) unsigned NOT NULL default '0',
  mnu_ln char(2) NOT NULL default '',
  mnu_cat varchar(15) NOT NULL default '',
  mnu_lev tinyint(1) unsigned NOT NULL default '0',
  mnu_par int(5) unsigned NOT NULL default '0',
  mnu_ord tinyint(2) unsigned NOT NULL default '0',
  mnu_tt varchar(150) NOT NULL default '',
  mnu_typ tinyint(1) unsigned NOT NULL default '0',
  mnu_cnt_alias varchar(150) NOT NULL default '',
  mnu_trg varchar(8) NOT NULL default '',
  mnu_crd date NOT NULL default '0000-00-00',
  mnu_crt time NOT NULL default '00:00:00',
  mnu_cru int(5) unsigned NOT NULL default '0',
  mnu_mdd date NOT NULL default '0000-00-00',
  mnu_mdt time NOT NULL default '00:00:00',
  mnu_mdu int(5) unsigned NOT NULL default '0',
  mnu_dis tinyint(1) unsigned NOT NULL default '0',
  mnu_lvl tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (mnu_id)
) myisam_str;

DROP TABLE IF EXISTS rudweb_ws_pic;
CREATE TABLE rudweb_ws_pic (
  pic_id int(5) unsigned NOT NULL default '0',
  cnt_id int(5) unsigned NOT NULL default '0',
  pic_ln char(2) NOT NULL default '',
  pic_tt varchar(150) NOT NULL default '',
  pic_fn varchar(150) NOT NULL default '',
  pic_loc tinyint(1) unsigned NOT NULL default '0',
  pic_ord tinyint(2) unsigned NOT NULL default '0',
  pic_tmb tinyint(1) unsigned NOT NULL default '0',
  pic_crd date NOT NULL default '0000-00-00',
  pic_crt time NOT NULL default '00:00:00',
  pic_cru int(5) unsigned NOT NULL default '0',
  pic_mdd date NOT NULL default '0000-00-00',
  pic_mdt time NOT NULL default '00:00:00',
  pic_mdu int(5) unsigned NOT NULL default '0',
  pic_dis tinyint(1) unsigned NOT NULL default '0',
  pic_lvl tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (pic_id)
) myisam_str;