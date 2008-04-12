-- LEVEL 1
SELECT cat_id, cat_tt FROM mhs_cat_cat WHERE cat_par = '2' ORDER BY cat_ord ASC;
-- LEVEL 2
SELECT cat_id, cat_tt FROM mhs_cat_cat WHERE cat_par = '3' ORDER BY cat_ord ASC;
SELECT cat_id, cat_tt FROM mhs_cat_cat WHERE cat_par = '4' ORDER BY cat_ord ASC;
-- LEVEL3
SELECT cat_id, cat_tt FROM mhs_cat_cat WHERE cat_par = '5' ORDER BY cat_ord ASC;
-- ETC
SELECT COUNT(prd_id) FROM mhs_cat_prd WHERE cat_id = '4';