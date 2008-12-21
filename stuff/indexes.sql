EXPLAIN SELECT cod, descriere FROM tmp_asesoft_prod WHERE producator = 'TOSHIBA';
SHOW INDEX FROM tmp_asesoft_prod;

CREATE INDEX my_index ON tmp_asesoft_prod(producator(30), cod(30), pret(6));
DROP INDEX my_index ON tmp_asesoft_prod;

