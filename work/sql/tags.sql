DROP TABLE IF EXISTS mhs_ws_rel;
CREATE TABLE mhs_ws_rel (
  rel_id INT(5) UNSIGNED NOT NULL,
  cnt_id INT(5) UNSIGNED NOT NULL,
  tag_id INT(5) UNSIGNED NOT NULL,
  PRIMARY KEY (rel_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS mhs_ws_tags;
CREATE TABLE mhs_ws_tags (
  tag_id INT(5) UNSIGNED NOT NULL,
  tag_name VARCHAR(30) NOT NULL,
PRIMARY KEY (tag_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- all tags for a certain content
SELECT DISTINCT
tag_name AS tag
FROM mhs_ws_rel AS r
LEFT JOIN mhs_ws_tags AS t ON (r.tag_id = t.tag_id)
WHERE r.cnt_id = '1'
ORDER BY t.tag_name ASC;
-- all content tags
SELECT tag_id, tag_name AS tag FROM mhs_ws_tags ORDER BY tag_name ASC;
-- all content with a certain tag
SELECT DISTINCT r.cnt_id as cnt_id FROM mhs_ws_rel As r LEFT JOIN mhs_ws_tags as t ON (r.tag_id = t.tag_id)
WHERE t.tag_name = 'despre';
-- all used tags with how many content ids are using them
SELECT DISTINCT t.tag_id AS tag_id, t.tag_name AS tag_name FROM mhs_ws_rel AS r
LEFT JOIN mhs_ws_tags AS t on (r.tag_id = t.tag_id) ORDER BY t.tag_name ASC
;
SELECT COUNT(cnt_id) AS sum_cnt FROM mhs_ws_rel WHERE tag_id = '1';
-- unused tags
SELECT tag_id, tag_name FROM mhs_ws_tags WHERE tag_id NOT IN (SELECT tag_id AS tid FROM mhs_ws_rel);