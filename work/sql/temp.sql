DROP TABLE IF EXISTS mhs_con_cat;
CREATE TABLE mhs_con_cat (
  con_cat_id int(5) unsigned NOT NULL,
  con_cat_ln char(2) NOT NULL,
  con_cat_tt varchar(150) NOT NULL,
  con_cat_notif3 tinyint(1) unsigned NOT NULL,
  con_cat_notif4 tinyint(1) unsigned NOT NULL,
  con_cat_notify varchar(255) NOT NULL,
  con_cat_crd date NOT NULL,
  con_cat_crt time NOT NULL,
  con_cat_cru int(5) unsigned NOT NULL,
  con_cat_mdd date NOT NULL,
  con_cat_mdt time NOT NULL,
  con_cat_mdu int(5) unsigned NOT NULL,
  PRIMARY KEY (con_cat_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS mhs_con_det;
CREATE TABLE mhs_con_det (
  con_det_id int(5) unsigned NOT NULL,
  con_cat_id int(5) unsigned NOT NULL,
  con_det_typ tinyint(1) unsigned NOT NULL,
  con_det_tt varchar(150) NOT NULL,
  con_det_ord tinyint(2) unsigned NOT NULL,
  con_det_req tinyint(1) unsigned NOT NULL,
  con_det_crd date NOT NULL,
  con_det_crt time NOT NULL,
  con_det_cru int(5) unsigned NOT NULL,
  con_det_mdd date NOT NULL,
  con_det_mdt time NOT NULL,
  con_det_mdu int(5) unsigned NOT NULL,
  PRIMARY KEY (con_det_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS mhs_con_opt;
CREATE TABLE mhs_con_opt (
  con_opt_id int(5) unsigned NOT NULL,
  con_det_id int(5) unsigned NOT NULL,  
  con_opt_tt varchar(255) NOT NULL,
  con_opt_ord tinyint(2) unsigned NOT NULL,
  con_opt_crd date NOT NULL,
  con_opt_crt time NOT NULL,
  con_opt_cru int(5) unsigned NOT NULL,
  con_opt_mdd date NOT NULL,
  con_opt_mdt time NOT NULL,
  con_opt_mdu int(5) unsigned NOT NULL,
  PRIMARY KEY (con_opt_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS mhs_con_con;
CREATE TABLE mhs_con_con (
  con_id int(5) unsigned NOT NULL,
  con_ln char(2) NOT NULL,
  con_cat_id int(5) unsigned NOT NULL,    
  con_name varchar(255) NOT NULL,
  con_email varchar(255) NOT NULL,
  con_subject varchar(255) NOT NULL,
  con_message varchar(255) NOT NULL,
  con_crd date NOT NULL,
  con_crt time NOT NULL,
  con_rd date NOT NULL,
  con_rt time NOT NULL,
  con_ru int(5) unsigned NOT NULL,
  PRIMARY KEY (con_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS mhs_con_val;
CREATE TABLE mhs_con_val (
  con_val_id int(5) unsigned NOT NULL,
  con_id int(5) unsigned NOT NULL,  
  con_det_id int(5) unsigned NOT NULL,  
  con_opt_id int(5) unsigned NOT NULL,
  con_val_txt varchar(255) NOT NULL,
  PRIMARY KEY (con_val_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
