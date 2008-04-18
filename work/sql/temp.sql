SELECT
PC.pic_fn AS picture,
P.prd_tt AS title,
P.prd_dsc AS description
FROM mhs_cat_csp AS A
LEFT JOIN mhs_cat_prd AS P on (P.prd_id = A.prd_id)
LEFT JOIN mhs_cat_pic AS PC on (PC.prd_id = A.prd_id AND PC.pic_loc = '1')
WHERE P.prd_tt IS NOT NULL AND ('2008-04-16' BETWEEN A.csp_sdate AND A.csp_edate);