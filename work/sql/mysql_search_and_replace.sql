UPDATE test_ws_cnt
SET cnt_txt =
replace(cnt_txt, 'http://localhost/work/rs/test/var/', 'http://www.example.com/var/')
WHERE cnt_id = '1';