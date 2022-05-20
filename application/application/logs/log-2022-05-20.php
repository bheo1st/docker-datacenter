<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-05-20 03:46:58 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  the database system is starting up /application/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-05-20 03:46:58 --> Unable to connect to the database
ERROR - 2022-05-20 03:46:58 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  the database system is starting up /application/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-05-20 03:46:58 --> Unable to connect to the database
ERROR - 2022-05-20 03:47:41 --> Severity: Notice --> Undefined variable: listLokasi /application/application/modules/rpt/views/v_infra.php 55
ERROR - 2022-05-20 03:47:41 --> Severity: Warning --> Invalid argument supplied for foreach() /application/application/modules/rpt/views/v_infra.php 55
ERROR - 2022-05-20 03:47:48 --> Severity: Notice --> Array to string conversion /application/application/modules/rpt/models/M_infra.php 30
ERROR - 2022-05-20 03:47:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 1: ....company_id WHERE a.deleted_at is NULL AND a.rack_id=Array),
                                                                     ^ /application/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-05-20 03:47:48 --> Query error: ERROR:  syntax error at or near ")"
LINE 1: ....company_id WHERE a.deleted_at is NULL AND a.rack_id=Array),
                                                                     ^ - Invalid query: WITH x AS (SELECT a.* , b.room_name , c.gedung_name , d.company_name FROM mst.t_rack a LEFT JOIN mst.t_room b  ON a.room_id=b.room_id LEFT JOIN mst.t_gedung c ON b.gedung_id=c.gedung_id LEFT JOIN mst.t_company d ON c.company_id=d.company_id WHERE a.deleted_at is NULL AND a.rack_id=Array),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_rack WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_rack WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-05-20 03:47:50 --> Severity: Notice --> Array to string conversion /application/application/modules/rpt/models/M_infra.php 30
ERROR - 2022-05-20 03:47:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 1: ....company_id WHERE a.deleted_at is NULL AND a.rack_id=Array),
                                                                     ^ /application/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-05-20 03:47:50 --> Query error: ERROR:  syntax error at or near ")"
LINE 1: ....company_id WHERE a.deleted_at is NULL AND a.rack_id=Array),
                                                                     ^ - Invalid query: WITH x AS (SELECT a.* , b.room_name , c.gedung_name , d.company_name FROM mst.t_rack a LEFT JOIN mst.t_room b  ON a.room_id=b.room_id LEFT JOIN mst.t_gedung c ON b.gedung_id=c.gedung_id LEFT JOIN mst.t_company d ON c.company_id=d.company_id WHERE a.deleted_at is NULL AND a.rack_id=Array),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_rack WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_rack WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-05-20 03:48:09 --> 404 Page Not Found: ../modules/rpt/controllers//index
ERROR - 2022-05-20 03:48:09 --> 404 Page Not Found: /index
ERROR - 2022-05-20 03:48:13 --> Severity: Notice --> Undefined variable: listLokasi /application/application/modules/rpt/views/v_infra.php 55
ERROR - 2022-05-20 03:48:13 --> Severity: Warning --> Invalid argument supplied for foreach() /application/application/modules/rpt/views/v_infra.php 55
ERROR - 2022-05-20 03:48:28 --> Severity: Notice --> Undefined variable: listLokasi /application/application/modules/rpt/views/v_infra.php 55
ERROR - 2022-05-20 03:48:28 --> Severity: Warning --> Invalid argument supplied for foreach() /application/application/modules/rpt/views/v_infra.php 55
ERROR - 2022-05-20 06:39:12 --> 404 Page Not Found: 
ERROR - 2022-05-20 06:39:13 --> 404 Page Not Found: /index
ERROR - 2022-05-20 06:39:13 --> 404 Page Not Found: /index
ERROR - 2022-05-20 06:39:14 --> 404 Page Not Found: /index
ERROR - 2022-05-20 06:42:10 --> 404 Page Not Found: /index
ERROR - 2022-05-20 06:42:10 --> 404 Page Not Found: /index
ERROR - 2022-05-20 06:42:11 --> 404 Page Not Found: /index
ERROR - 2022-05-20 06:42:11 --> 404 Page Not Found: /index
ERROR - 2022-05-20 06:43:03 --> 404 Page Not Found: /index
ERROR - 2022-05-20 06:43:03 --> 404 Page Not Found: /index
ERROR - 2022-05-20 06:43:03 --> 404 Page Not Found: /index
ERROR - 2022-05-20 08:43:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;svc.t_m_user&quot; does not exist
LINE 2: FROM &quot;svc&quot;.&quot;t_m_user&quot; &quot;a&quot;
             ^ /application/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-05-20 08:43:07 --> Query error: ERROR:  relation "svc.t_m_user" does not exist
LINE 2: FROM "svc"."t_m_user" "a"
             ^ - Invalid query: SELECT a.*, b.company_name, c.i_level, c.n_role, d.n_company, e.nama_lokasi
FROM "svc"."t_m_user" "a"
LEFT JOIN "svc"."t_m_role" "c" ON "c"."c_role" = "a"."c_role"
LEFT JOIN "public"."t_m_company" "d" ON "d"."c_company" = "a"."c_company"
LEFT JOIN "mst"."t_company" "b" ON "b"."company_id" = "a"."company_id"
LEFT JOIN "mst"."t_lokasi" "e" ON "e"."id_lokasi" = "a"."id_lokasi"
WHERE "a"."n_user" = 'admin'
AND "a"."n_pass" = 'd3e4fa19267c778c28a6c5ca34b2f757'
AND "a"."b_delete" = 'f'
ERROR - 2022-05-20 08:43:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;svc.t_m_user&quot; does not exist
LINE 2: FROM &quot;svc&quot;.&quot;t_m_user&quot; &quot;a&quot;
             ^ /application/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-05-20 08:43:08 --> Query error: ERROR:  relation "svc.t_m_user" does not exist
LINE 2: FROM "svc"."t_m_user" "a"
             ^ - Invalid query: SELECT a.*, b.company_name, c.i_level, c.n_role, d.n_company, e.nama_lokasi
FROM "svc"."t_m_user" "a"
LEFT JOIN "svc"."t_m_role" "c" ON "c"."c_role" = "a"."c_role"
LEFT JOIN "public"."t_m_company" "d" ON "d"."c_company" = "a"."c_company"
LEFT JOIN "mst"."t_company" "b" ON "b"."company_id" = "a"."company_id"
LEFT JOIN "mst"."t_lokasi" "e" ON "e"."id_lokasi" = "a"."id_lokasi"
WHERE "a"."n_user" = 'admin'
AND "a"."n_pass" = 'd3e4fa19267c778c28a6c5ca34b2f757'
AND "a"."b_delete" = 'f'
ERROR - 2022-05-20 08:43:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;svc.t_m_user&quot; does not exist
LINE 2: FROM &quot;svc&quot;.&quot;t_m_user&quot; &quot;a&quot;
             ^ /application/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-05-20 08:43:08 --> Query error: ERROR:  relation "svc.t_m_user" does not exist
LINE 2: FROM "svc"."t_m_user" "a"
             ^ - Invalid query: SELECT a.*, b.company_name, c.i_level, c.n_role, d.n_company, e.nama_lokasi
FROM "svc"."t_m_user" "a"
LEFT JOIN "svc"."t_m_role" "c" ON "c"."c_role" = "a"."c_role"
LEFT JOIN "public"."t_m_company" "d" ON "d"."c_company" = "a"."c_company"
LEFT JOIN "mst"."t_company" "b" ON "b"."company_id" = "a"."company_id"
LEFT JOIN "mst"."t_lokasi" "e" ON "e"."id_lokasi" = "a"."id_lokasi"
WHERE "a"."n_user" = 'admin'
AND "a"."n_pass" = 'd3e4fa19267c778c28a6c5ca34b2f757'
AND "a"."b_delete" = 'f'
ERROR - 2022-05-20 08:43:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;svc.t_m_user&quot; does not exist
LINE 2: FROM &quot;svc&quot;.&quot;t_m_user&quot; &quot;a&quot;
             ^ /application/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-05-20 08:43:09 --> Query error: ERROR:  relation "svc.t_m_user" does not exist
LINE 2: FROM "svc"."t_m_user" "a"
             ^ - Invalid query: SELECT a.*, b.company_name, c.i_level, c.n_role, d.n_company, e.nama_lokasi
FROM "svc"."t_m_user" "a"
LEFT JOIN "svc"."t_m_role" "c" ON "c"."c_role" = "a"."c_role"
LEFT JOIN "public"."t_m_company" "d" ON "d"."c_company" = "a"."c_company"
LEFT JOIN "mst"."t_company" "b" ON "b"."company_id" = "a"."company_id"
LEFT JOIN "mst"."t_lokasi" "e" ON "e"."id_lokasi" = "a"."id_lokasi"
WHERE "a"."n_user" = 'admin'
AND "a"."n_pass" = 'd3e4fa19267c778c28a6c5ca34b2f757'
AND "a"."b_delete" = 'f'
ERROR - 2022-05-20 08:43:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;svc.t_m_user&quot; does not exist
LINE 2: FROM &quot;svc&quot;.&quot;t_m_user&quot; &quot;a&quot;
             ^ /application/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-05-20 08:43:09 --> Query error: ERROR:  relation "svc.t_m_user" does not exist
LINE 2: FROM "svc"."t_m_user" "a"
             ^ - Invalid query: SELECT a.*, b.company_name, c.i_level, c.n_role, d.n_company, e.nama_lokasi
FROM "svc"."t_m_user" "a"
LEFT JOIN "svc"."t_m_role" "c" ON "c"."c_role" = "a"."c_role"
LEFT JOIN "public"."t_m_company" "d" ON "d"."c_company" = "a"."c_company"
LEFT JOIN "mst"."t_company" "b" ON "b"."company_id" = "a"."company_id"
LEFT JOIN "mst"."t_lokasi" "e" ON "e"."id_lokasi" = "a"."id_lokasi"
WHERE "a"."n_user" = 'admin'
AND "a"."n_pass" = 'd3e4fa19267c778c28a6c5ca34b2f757'
AND "a"."b_delete" = 'f'
ERROR - 2022-05-20 08:43:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;svc.t_m_user&quot; does not exist
LINE 2: FROM &quot;svc&quot;.&quot;t_m_user&quot; &quot;a&quot;
             ^ /application/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-05-20 08:43:10 --> Query error: ERROR:  relation "svc.t_m_user" does not exist
LINE 2: FROM "svc"."t_m_user" "a"
             ^ - Invalid query: SELECT a.*, b.company_name, c.i_level, c.n_role, d.n_company, e.nama_lokasi
FROM "svc"."t_m_user" "a"
LEFT JOIN "svc"."t_m_role" "c" ON "c"."c_role" = "a"."c_role"
LEFT JOIN "public"."t_m_company" "d" ON "d"."c_company" = "a"."c_company"
LEFT JOIN "mst"."t_company" "b" ON "b"."company_id" = "a"."company_id"
LEFT JOIN "mst"."t_lokasi" "e" ON "e"."id_lokasi" = "a"."id_lokasi"
WHERE "a"."n_user" = 'admin'
AND "a"."n_pass" = 'd3e4fa19267c778c28a6c5ca34b2f757'
AND "a"."b_delete" = 'f'
ERROR - 2022-05-20 08:43:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;svc.t_m_user&quot; does not exist
LINE 2: FROM &quot;svc&quot;.&quot;t_m_user&quot; &quot;a&quot;
             ^ /application/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-05-20 08:43:11 --> Query error: ERROR:  relation "svc.t_m_user" does not exist
LINE 2: FROM "svc"."t_m_user" "a"
             ^ - Invalid query: SELECT a.*, b.company_name, c.i_level, c.n_role, d.n_company, e.nama_lokasi
FROM "svc"."t_m_user" "a"
LEFT JOIN "svc"."t_m_role" "c" ON "c"."c_role" = "a"."c_role"
LEFT JOIN "public"."t_m_company" "d" ON "d"."c_company" = "a"."c_company"
LEFT JOIN "mst"."t_company" "b" ON "b"."company_id" = "a"."company_id"
LEFT JOIN "mst"."t_lokasi" "e" ON "e"."id_lokasi" = "a"."id_lokasi"
WHERE "a"."n_user" = 'admin'
AND "a"."n_pass" = 'd3e4fa19267c778c28a6c5ca34b2f757'
AND "a"."b_delete" = 'f'
ERROR - 2022-05-20 08:43:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;svc.t_m_user&quot; does not exist
LINE 2: FROM &quot;svc&quot;.&quot;t_m_user&quot; &quot;a&quot;
             ^ /application/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-05-20 08:43:11 --> Query error: ERROR:  relation "svc.t_m_user" does not exist
LINE 2: FROM "svc"."t_m_user" "a"
             ^ - Invalid query: SELECT a.*, b.company_name, c.i_level, c.n_role, d.n_company, e.nama_lokasi
FROM "svc"."t_m_user" "a"
LEFT JOIN "svc"."t_m_role" "c" ON "c"."c_role" = "a"."c_role"
LEFT JOIN "public"."t_m_company" "d" ON "d"."c_company" = "a"."c_company"
LEFT JOIN "mst"."t_company" "b" ON "b"."company_id" = "a"."company_id"
LEFT JOIN "mst"."t_lokasi" "e" ON "e"."id_lokasi" = "a"."id_lokasi"
WHERE "a"."n_user" = 'admin'
AND "a"."n_pass" = 'd3e4fa19267c778c28a6c5ca34b2f757'
AND "a"."b_delete" = 'f'
ERROR - 2022-05-20 08:43:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;svc.t_m_user&quot; does not exist
LINE 2: FROM &quot;svc&quot;.&quot;t_m_user&quot; &quot;a&quot;
             ^ /application/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-05-20 08:43:11 --> Query error: ERROR:  relation "svc.t_m_user" does not exist
LINE 2: FROM "svc"."t_m_user" "a"
             ^ - Invalid query: SELECT a.*, b.company_name, c.i_level, c.n_role, d.n_company, e.nama_lokasi
FROM "svc"."t_m_user" "a"
LEFT JOIN "svc"."t_m_role" "c" ON "c"."c_role" = "a"."c_role"
LEFT JOIN "public"."t_m_company" "d" ON "d"."c_company" = "a"."c_company"
LEFT JOIN "mst"."t_company" "b" ON "b"."company_id" = "a"."company_id"
LEFT JOIN "mst"."t_lokasi" "e" ON "e"."id_lokasi" = "a"."id_lokasi"
WHERE "a"."n_user" = 'admin'
AND "a"."n_pass" = 'd3e4fa19267c778c28a6c5ca34b2f757'
AND "a"."b_delete" = 'f'
ERROR - 2022-05-20 08:43:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;svc.t_m_user&quot; does not exist
LINE 2: FROM &quot;svc&quot;.&quot;t_m_user&quot; &quot;a&quot;
             ^ /application/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-05-20 08:43:11 --> Query error: ERROR:  relation "svc.t_m_user" does not exist
LINE 2: FROM "svc"."t_m_user" "a"
             ^ - Invalid query: SELECT a.*, b.company_name, c.i_level, c.n_role, d.n_company, e.nama_lokasi
FROM "svc"."t_m_user" "a"
LEFT JOIN "svc"."t_m_role" "c" ON "c"."c_role" = "a"."c_role"
LEFT JOIN "public"."t_m_company" "d" ON "d"."c_company" = "a"."c_company"
LEFT JOIN "mst"."t_company" "b" ON "b"."company_id" = "a"."company_id"
LEFT JOIN "mst"."t_lokasi" "e" ON "e"."id_lokasi" = "a"."id_lokasi"
WHERE "a"."n_user" = 'admin'
AND "a"."n_pass" = 'd3e4fa19267c778c28a6c5ca34b2f757'
AND "a"."b_delete" = 'f'
ERROR - 2022-05-20 08:43:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;svc.t_m_user&quot; does not exist
LINE 2: FROM &quot;svc&quot;.&quot;t_m_user&quot; &quot;a&quot;
             ^ /application/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-05-20 08:43:12 --> Query error: ERROR:  relation "svc.t_m_user" does not exist
LINE 2: FROM "svc"."t_m_user" "a"
             ^ - Invalid query: SELECT a.*, b.company_name, c.i_level, c.n_role, d.n_company, e.nama_lokasi
FROM "svc"."t_m_user" "a"
LEFT JOIN "svc"."t_m_role" "c" ON "c"."c_role" = "a"."c_role"
LEFT JOIN "public"."t_m_company" "d" ON "d"."c_company" = "a"."c_company"
LEFT JOIN "mst"."t_company" "b" ON "b"."company_id" = "a"."company_id"
LEFT JOIN "mst"."t_lokasi" "e" ON "e"."id_lokasi" = "a"."id_lokasi"
WHERE "a"."n_user" = 'admin'
AND "a"."n_pass" = 'd3e4fa19267c778c28a6c5ca34b2f757'
AND "a"."b_delete" = 'f'
ERROR - 2022-05-20 08:43:14 --> 404 Page Not Found: /index
ERROR - 2022-05-20 08:43:14 --> 404 Page Not Found: /index
ERROR - 2022-05-20 08:43:14 --> 404 Page Not Found: /index
ERROR - 2022-05-20 08:43:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;svc.t_m_user&quot; does not exist
LINE 2: FROM &quot;svc&quot;.&quot;t_m_user&quot; &quot;a&quot;
             ^ /application/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-05-20 08:43:19 --> Query error: ERROR:  relation "svc.t_m_user" does not exist
LINE 2: FROM "svc"."t_m_user" "a"
             ^ - Invalid query: SELECT a.*, b.company_name, c.i_level, c.n_role, d.n_company, e.nama_lokasi
FROM "svc"."t_m_user" "a"
LEFT JOIN "svc"."t_m_role" "c" ON "c"."c_role" = "a"."c_role"
LEFT JOIN "public"."t_m_company" "d" ON "d"."c_company" = "a"."c_company"
LEFT JOIN "mst"."t_company" "b" ON "b"."company_id" = "a"."company_id"
LEFT JOIN "mst"."t_lokasi" "e" ON "e"."id_lokasi" = "a"."id_lokasi"
WHERE "a"."n_user" = 'admin'
AND "a"."n_pass" = 'd3e4fa19267c778c28a6c5ca34b2f757'
AND "a"."b_delete" = 'f'
ERROR - 2022-05-20 08:43:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;svc.t_m_user&quot; does not exist
LINE 2: FROM &quot;svc&quot;.&quot;t_m_user&quot; &quot;a&quot;
             ^ /application/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-05-20 08:43:20 --> Query error: ERROR:  relation "svc.t_m_user" does not exist
LINE 2: FROM "svc"."t_m_user" "a"
             ^ - Invalid query: SELECT a.*, b.company_name, c.i_level, c.n_role, d.n_company, e.nama_lokasi
FROM "svc"."t_m_user" "a"
LEFT JOIN "svc"."t_m_role" "c" ON "c"."c_role" = "a"."c_role"
LEFT JOIN "public"."t_m_company" "d" ON "d"."c_company" = "a"."c_company"
LEFT JOIN "mst"."t_company" "b" ON "b"."company_id" = "a"."company_id"
LEFT JOIN "mst"."t_lokasi" "e" ON "e"."id_lokasi" = "a"."id_lokasi"
WHERE "a"."n_user" = 'admin'
AND "a"."n_pass" = 'd3e4fa19267c778c28a6c5ca34b2f757'
AND "a"."b_delete" = 'f'
ERROR - 2022-05-20 08:43:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;svc.t_m_user&quot; does not exist
LINE 2: FROM &quot;svc&quot;.&quot;t_m_user&quot; &quot;a&quot;
             ^ /application/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-05-20 08:43:21 --> Query error: ERROR:  relation "svc.t_m_user" does not exist
LINE 2: FROM "svc"."t_m_user" "a"
             ^ - Invalid query: SELECT a.*, b.company_name, c.i_level, c.n_role, d.n_company, e.nama_lokasi
FROM "svc"."t_m_user" "a"
LEFT JOIN "svc"."t_m_role" "c" ON "c"."c_role" = "a"."c_role"
LEFT JOIN "public"."t_m_company" "d" ON "d"."c_company" = "a"."c_company"
LEFT JOIN "mst"."t_company" "b" ON "b"."company_id" = "a"."company_id"
LEFT JOIN "mst"."t_lokasi" "e" ON "e"."id_lokasi" = "a"."id_lokasi"
WHERE "a"."n_user" = 'admin'
AND "a"."n_pass" = 'd3e4fa19267c778c28a6c5ca34b2f757'
AND "a"."b_delete" = 'f'
ERROR - 2022-05-20 08:43:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;svc.t_m_user&quot; does not exist
LINE 2: FROM &quot;svc&quot;.&quot;t_m_user&quot; &quot;a&quot;
             ^ /application/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-05-20 08:43:21 --> Query error: ERROR:  relation "svc.t_m_user" does not exist
LINE 2: FROM "svc"."t_m_user" "a"
             ^ - Invalid query: SELECT a.*, b.company_name, c.i_level, c.n_role, d.n_company, e.nama_lokasi
FROM "svc"."t_m_user" "a"
LEFT JOIN "svc"."t_m_role" "c" ON "c"."c_role" = "a"."c_role"
LEFT JOIN "public"."t_m_company" "d" ON "d"."c_company" = "a"."c_company"
LEFT JOIN "mst"."t_company" "b" ON "b"."company_id" = "a"."company_id"
LEFT JOIN "mst"."t_lokasi" "e" ON "e"."id_lokasi" = "a"."id_lokasi"
WHERE "a"."n_user" = 'admin'
AND "a"."n_pass" = 'd3e4fa19267c778c28a6c5ca34b2f757'
AND "a"."b_delete" = 'f'
ERROR - 2022-05-20 08:43:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;svc.t_m_user&quot; does not exist
LINE 2: FROM &quot;svc&quot;.&quot;t_m_user&quot; &quot;a&quot;
             ^ /application/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-05-20 08:43:21 --> Query error: ERROR:  relation "svc.t_m_user" does not exist
LINE 2: FROM "svc"."t_m_user" "a"
             ^ - Invalid query: SELECT a.*, b.company_name, c.i_level, c.n_role, d.n_company, e.nama_lokasi
FROM "svc"."t_m_user" "a"
LEFT JOIN "svc"."t_m_role" "c" ON "c"."c_role" = "a"."c_role"
LEFT JOIN "public"."t_m_company" "d" ON "d"."c_company" = "a"."c_company"
LEFT JOIN "mst"."t_company" "b" ON "b"."company_id" = "a"."company_id"
LEFT JOIN "mst"."t_lokasi" "e" ON "e"."id_lokasi" = "a"."id_lokasi"
WHERE "a"."n_user" = 'admin'
AND "a"."n_pass" = 'd3e4fa19267c778c28a6c5ca34b2f757'
AND "a"."b_delete" = 'f'
ERROR - 2022-05-20 08:44:03 --> 404 Page Not Found: /index
ERROR - 2022-05-20 08:44:03 --> 404 Page Not Found: /index
ERROR - 2022-05-20 08:44:03 --> 404 Page Not Found: /index
ERROR - 2022-05-20 08:44:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;svc.t_m_user&quot; does not exist
LINE 2: FROM &quot;svc&quot;.&quot;t_m_user&quot; &quot;a&quot;
             ^ /application/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-05-20 08:44:06 --> Query error: ERROR:  relation "svc.t_m_user" does not exist
LINE 2: FROM "svc"."t_m_user" "a"
             ^ - Invalid query: SELECT a.*, b.company_name, c.i_level, c.n_role, d.n_company, e.nama_lokasi
FROM "svc"."t_m_user" "a"
LEFT JOIN "svc"."t_m_role" "c" ON "c"."c_role" = "a"."c_role"
LEFT JOIN "public"."t_m_company" "d" ON "d"."c_company" = "a"."c_company"
LEFT JOIN "mst"."t_company" "b" ON "b"."company_id" = "a"."company_id"
LEFT JOIN "mst"."t_lokasi" "e" ON "e"."id_lokasi" = "a"."id_lokasi"
WHERE "a"."n_user" = 'asdsad'
AND "a"."n_pass" = 'e71c27c3ee34c7e07c04d95cd97d571d'
AND "a"."b_delete" = 'f'
ERROR - 2022-05-20 08:45:38 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;db&quot; (172.20.0.3) and accepting
	TCP/IP connections on port 5432? /application/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-05-20 08:45:38 --> Unable to connect to the database
ERROR - 2022-05-20 08:45:44 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;db&quot; (172.20.0.3) and accepting
	TCP/IP connections on port 5432? /application/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-05-20 08:45:44 --> Unable to connect to the database
ERROR - 2022-05-20 08:45:44 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;db&quot; (172.20.0.3) and accepting
	TCP/IP connections on port 5432? /application/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-05-20 08:45:44 --> Unable to connect to the database
ERROR - 2022-05-20 08:45:45 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;db&quot; (172.20.0.3) and accepting
	TCP/IP connections on port 5432? /application/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-05-20 08:45:45 --> Unable to connect to the database
ERROR - 2022-05-20 08:45:45 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;db&quot; (172.20.0.3) and accepting
	TCP/IP connections on port 5432? /application/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-05-20 08:45:45 --> Unable to connect to the database
ERROR - 2022-05-20 08:45:45 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;db&quot; (172.20.0.3) and accepting
	TCP/IP connections on port 5432? /application/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-05-20 08:45:45 --> Unable to connect to the database
ERROR - 2022-05-20 08:45:45 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;db&quot; (172.20.0.3) and accepting
	TCP/IP connections on port 5432? /application/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-05-20 08:45:45 --> Unable to connect to the database
ERROR - 2022-05-20 08:45:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;db&quot; (172.20.0.3) and accepting
	TCP/IP connections on port 5432? /application/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-05-20 08:45:46 --> Unable to connect to the database
ERROR - 2022-05-20 08:45:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;db&quot; (172.20.0.3) and accepting
	TCP/IP connections on port 5432? /application/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-05-20 08:45:46 --> Unable to connect to the database
ERROR - 2022-05-20 08:45:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;db&quot; (172.20.0.3) and accepting
	TCP/IP connections on port 5432? /application/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-05-20 08:45:46 --> Unable to connect to the database
ERROR - 2022-05-20 08:45:47 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;db&quot; (172.20.0.3) and accepting
	TCP/IP connections on port 5432? /application/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-05-20 08:45:47 --> Unable to connect to the database
ERROR - 2022-05-20 08:45:48 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;db&quot; (172.20.0.3) and accepting
	TCP/IP connections on port 5432? /application/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-05-20 08:45:48 --> Unable to connect to the database
ERROR - 2022-05-20 08:45:48 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;db&quot; (172.20.0.3) and accepting
	TCP/IP connections on port 5432? /application/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-05-20 08:45:48 --> Unable to connect to the database
ERROR - 2022-05-20 08:45:48 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;db&quot; (172.20.0.3) and accepting
	TCP/IP connections on port 5432? /application/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-05-20 08:45:48 --> Unable to connect to the database
ERROR - 2022-05-20 08:45:48 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;db&quot; (172.20.0.3) and accepting
	TCP/IP connections on port 5432? /application/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-05-20 08:45:48 --> Unable to connect to the database
ERROR - 2022-05-20 08:45:48 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;db&quot; (172.20.0.3) and accepting
	TCP/IP connections on port 5432? /application/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-05-20 08:45:48 --> Unable to connect to the database
ERROR - 2022-05-20 08:45:49 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;db&quot; (172.20.0.3) and accepting
	TCP/IP connections on port 5432? /application/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-05-20 08:45:49 --> Unable to connect to the database
ERROR - 2022-05-20 08:45:49 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;db&quot; (172.20.0.3) and accepting
	TCP/IP connections on port 5432? /application/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-05-20 08:45:49 --> Unable to connect to the database
ERROR - 2022-05-20 08:45:49 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;db&quot; (172.20.0.3) and accepting
	TCP/IP connections on port 5432? /application/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-05-20 08:45:49 --> Unable to connect to the database
ERROR - 2022-05-20 08:45:49 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;db&quot; (172.20.0.3) and accepting
	TCP/IP connections on port 5432? /application/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-05-20 08:45:49 --> Unable to connect to the database
ERROR - 2022-05-20 08:45:50 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;db&quot; (172.20.0.3) and accepting
	TCP/IP connections on port 5432? /application/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-05-20 08:45:50 --> Unable to connect to the database
ERROR - 2022-05-20 08:45:50 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;db&quot; (172.20.0.3) and accepting
	TCP/IP connections on port 5432? /application/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-05-20 08:45:50 --> Unable to connect to the database
ERROR - 2022-05-20 08:45:50 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;db&quot; (172.20.0.3) and accepting
	TCP/IP connections on port 5432? /application/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-05-20 08:45:50 --> Unable to connect to the database
ERROR - 2022-05-20 08:45:52 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;db&quot; (172.20.0.3) and accepting
	TCP/IP connections on port 5432? /application/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-05-20 08:45:52 --> Unable to connect to the database
ERROR - 2022-05-20 08:45:52 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;db&quot; (172.20.0.3) and accepting
	TCP/IP connections on port 5432? /application/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-05-20 08:45:52 --> Unable to connect to the database
ERROR - 2022-05-20 08:45:52 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;db&quot; (172.20.0.3) and accepting
	TCP/IP connections on port 5432? /application/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-05-20 08:45:52 --> Unable to connect to the database
ERROR - 2022-05-20 08:45:52 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;db&quot; (172.20.0.3) and accepting
	TCP/IP connections on port 5432? /application/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-05-20 08:45:52 --> Unable to connect to the database
ERROR - 2022-05-20 08:45:52 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;db&quot; (172.20.0.3) and accepting
	TCP/IP connections on port 5432? /application/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-05-20 08:45:52 --> Unable to connect to the database
ERROR - 2022-05-20 08:45:53 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;db&quot; (172.20.0.3) and accepting
	TCP/IP connections on port 5432? /application/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-05-20 08:45:53 --> Unable to connect to the database
ERROR - 2022-05-20 08:45:53 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;db&quot; (172.20.0.3) and accepting
	TCP/IP connections on port 5432? /application/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-05-20 08:45:53 --> Unable to connect to the database
ERROR - 2022-05-20 08:45:54 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;db&quot; (172.20.0.3) and accepting
	TCP/IP connections on port 5432? /application/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-05-20 08:45:54 --> Unable to connect to the database
ERROR - 2022-05-20 08:45:54 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;db&quot; (172.20.0.3) and accepting
	TCP/IP connections on port 5432? /application/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-05-20 08:45:54 --> Unable to connect to the database
ERROR - 2022-05-20 08:46:06 --> 404 Page Not Found: /index
ERROR - 2022-05-20 08:46:06 --> 404 Page Not Found: /index
ERROR - 2022-05-20 08:46:06 --> 404 Page Not Found: /index
ERROR - 2022-05-20 08:46:16 --> 404 Page Not Found: /index
ERROR - 2022-05-20 08:46:16 --> 404 Page Not Found: /index
ERROR - 2022-05-20 08:46:16 --> 404 Page Not Found: /index
ERROR - 2022-05-20 08:46:17 --> 404 Page Not Found: /index
ERROR - 2022-05-20 10:19:52 --> 404 Page Not Found: /index
ERROR - 2022-05-20 10:19:53 --> 404 Page Not Found: /index
ERROR - 2022-05-20 10:19:53 --> 404 Page Not Found: /index
ERROR - 2022-05-20 10:19:53 --> 404 Page Not Found: /index
