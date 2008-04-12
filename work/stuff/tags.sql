CREATE TABLE rudweb_ws_relat (
  relat_id INT(5) UNSIGNED NOT NULL,
  cnt_id INT(5) UNSIGNED NOT NULL,
  tag_id INT(5) UNSIGNED NOT NULL,
  PRIMARY KEY (relat_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE rudweb_ws_tags (
  tag_id INT(5) UNSIGNED NOT NULL,
  tag_name VARCHAR(30) NOT NULL,
PRIMARY KEY (tag_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;