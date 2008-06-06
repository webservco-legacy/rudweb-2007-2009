ALTER TABLE mhs_con_cat ADD COLUMN con_cat_send varchar(255) NOT NULL AFTER con_cat_notify;
ALTER TABLE mhsused_con_cat ADD COLUMN con_cat_send varchar(255) NOT NULL AFTER con_cat_notify;

SELECT B.con_cat_tt, A.con_det_id, A.con_det_tt
FROM mhs_con_det as A
left join mhs_con_cat as B on (A.con_cat_id = B.con_cat_id)
WHERE A.con_det_typ = '1'
ORDER BY A.con_cat_id ASC, A.con_det_ord ASC;