DROP TABLE IF EXISTS mhs_ws_nws;
CREATE TABLE mhs_ws_nws (
  nws_id INT(5) UNSIGNED NOT NULL,
  nws_ln char(2) NOT NULL,
  nws_tt varchar(150) NOT NULL,
  nws_txt varchar(150) NOT NULL,
  nws_crd date NOT NULL,
  nws_crt time NOT NULL,
  nws_cru int(5) unsigned NOT NULL,
  nws_mdd date NOT NULL,
  nws_mdt time NOT NULL,
  nws_mdu int(5) unsigned NOT NULL,
  PRIMARY KEY (nws_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;