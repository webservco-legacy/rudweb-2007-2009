UPDATE mhs_ws_cnt SET cnt_txt =
replace(cnt_txt, 'http://www.man-romania.ro/var/', 'http://localhost/work/ds/man-romania/var/');

UPDATE mhs_ws_nws SET nws_txt =
replace(nws_txt, 'http://www.man-romania.ro/var/', 'http://localhost/work/ds/man-romania/var/');


UPDATE jumbo_ws_cnt SET cnt_txt =
replace(cnt_txt, 'http://dasoft.homelinux.net/work/ds/jumbo/var/', 'http://www.test.dasoft.ro/jumbo/var/');


