SELECT DISTINCT r.cnt_id as cnt_id,
m.mnu_id AS mnu_id, c.cnt_alias AS cnt_alias, m.mnu_typ AS mnu_typ
FROM mhs_ws_rel As r 
LEFT JOIN mhs_ws_tags as t ON (r.tag_id = t.tag_id)
LEFT JOIN mhs_ws_cnt as c ON (r.cnt_id = c.cnt_id)
LEFT JOIN mhs_ws_mnu as m ON (c.cnt_alias = m.mnu_cnt_alias)
WHERE t.tag_name = 'despre' AND c.cnt_ln = 'ro'
ORDER BY c.cnt_mdd DESC, c.cnt_mdt DESC, c.cnt_crd DESC, c.cnt_crt DESC;

SELECT DISTINCT r.cnt_id as cnt_id,
m.mnu_id AS mnu_id, c.cnt_alias AS cnt_alias, m.mnu_typ AS mnu_typ,
c.cnt_crd AS cnt_crd,
c.cnd_crt AS cnt_crt,
c.cnt_cru AS cnt_cru,
c.cnt_mdd AS cnt_mdd,
c.cnt_mdt AS cnt_mdt,
c.cnt_mdu AS cnt_mdu
FROM mhs_ws_rel As r 
LEFT JOIN mhs_ws_tags as t ON (r.tag_id = t.tag_id)
LEFT JOIN mhs_ws_cnt as c ON (r.cnt_id = c.cnt_id)
LEFT JOIN mhs_ws_mnu as m ON (c.cnt_alias = m.mnu_cnt_alias)
WHERE t.tag_name = 'despre' AND c.cnt_ln = 'ro'
ORDER BY c.cnt_mdd DESC, c.cnt_mdt DESC, c.cnt_crd DESC, c.cnt_crt DESC;