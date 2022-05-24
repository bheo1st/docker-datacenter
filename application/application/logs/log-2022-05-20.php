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
ERROR - 2022-05-20 11:08:24 --> Severity: Notice --> Undefined variable: listLokasi /application/application/modules/rpt/views/v_infra.php 55
ERROR - 2022-05-20 11:08:24 --> Severity: Warning --> Invalid argument supplied for foreach() /application/application/modules/rpt/views/v_infra.php 55
ERROR - 2022-05-20 11:08:28 --> Severity: Notice --> Array to string conversion /application/application/modules/rpt/models/M_infra.php 30
ERROR - 2022-05-20 11:08:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 1: ....company_id WHERE a.deleted_at is NULL AND a.rack_id=Array),
                                                                     ^ /application/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-05-20 11:08:28 --> Query error: ERROR:  syntax error at or near ")"
LINE 1: ....company_id WHERE a.deleted_at is NULL AND a.rack_id=Array),
                                                                     ^ - Invalid query: WITH x AS (SELECT a.* , b.room_name , c.gedung_name , d.company_name FROM mst.t_rack a LEFT JOIN mst.t_room b  ON a.room_id=b.room_id LEFT JOIN mst.t_gedung c ON b.gedung_id=c.gedung_id LEFT JOIN mst.t_company d ON c.company_id=d.company_id WHERE a.deleted_at is NULL AND a.rack_id=Array),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_rack WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_rack WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-05-20 11:08:29 --> Severity: Notice --> Array to string conversion /application/application/modules/rpt/models/M_infra.php 30
ERROR - 2022-05-20 11:08:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 1: ....company_id WHERE a.deleted_at is NULL AND a.rack_id=Array),
                                                                     ^ /application/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-05-20 11:08:29 --> Query error: ERROR:  syntax error at or near ")"
LINE 1: ....company_id WHERE a.deleted_at is NULL AND a.rack_id=Array),
                                                                     ^ - Invalid query: WITH x AS (SELECT a.* , b.room_name , c.gedung_name , d.company_name FROM mst.t_rack a LEFT JOIN mst.t_room b  ON a.room_id=b.room_id LEFT JOIN mst.t_gedung c ON b.gedung_id=c.gedung_id LEFT JOIN mst.t_company d ON c.company_id=d.company_id WHERE a.deleted_at is NULL AND a.rack_id=Array),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_rack WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_rack WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-05-20 11:08:35 --> Severity: Notice --> Array to string conversion /application/application/modules/rpt/models/M_infra.php 30
ERROR - 2022-05-20 11:08:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 1: ....company_id WHERE a.deleted_at is NULL AND a.rack_id=Array),
                                                                     ^ /application/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-05-20 11:08:35 --> Query error: ERROR:  syntax error at or near ")"
LINE 1: ....company_id WHERE a.deleted_at is NULL AND a.rack_id=Array),
                                                                     ^ - Invalid query: WITH x AS (SELECT a.* , b.room_name , c.gedung_name , d.company_name FROM mst.t_rack a LEFT JOIN mst.t_room b  ON a.room_id=b.room_id LEFT JOIN mst.t_gedung c ON b.gedung_id=c.gedung_id LEFT JOIN mst.t_company d ON c.company_id=d.company_id WHERE a.deleted_at is NULL AND a.rack_id=Array),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_rack WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_rack WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-05-20 11:09:05 --> Severity: Notice --> Array to string conversion /application/application/modules/rpt/models/M_infra.php 30
ERROR - 2022-05-20 11:09:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 1: ....company_id WHERE a.deleted_at is NULL AND a.rack_id=Array),
                                                                     ^ /application/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-05-20 11:09:05 --> Query error: ERROR:  syntax error at or near ")"
LINE 1: ....company_id WHERE a.deleted_at is NULL AND a.rack_id=Array),
                                                                     ^ - Invalid query: WITH x AS (SELECT a.* , b.room_name , c.gedung_name , d.company_name FROM mst.t_rack a LEFT JOIN mst.t_room b  ON a.room_id=b.room_id LEFT JOIN mst.t_gedung c ON b.gedung_id=c.gedung_id LEFT JOIN mst.t_company d ON c.company_id=d.company_id WHERE a.deleted_at is NULL AND a.rack_id=Array),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_rack WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_rack WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-05-20 11:10:06 --> Severity: Notice --> Array to string conversion /application/application/modules/rpt/models/M_infra.php 30
ERROR - 2022-05-20 11:10:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 1: ....company_id WHERE a.deleted_at is NULL AND a.rack_id=Array),
                                                                     ^ /application/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-05-20 11:10:06 --> Query error: ERROR:  syntax error at or near ")"
LINE 1: ....company_id WHERE a.deleted_at is NULL AND a.rack_id=Array),
                                                                     ^ - Invalid query: WITH x AS (SELECT a.* , b.room_name , c.gedung_name , d.company_name FROM mst.t_rack a LEFT JOIN mst.t_room b  ON a.room_id=b.room_id LEFT JOIN mst.t_gedung c ON b.gedung_id=c.gedung_id LEFT JOIN mst.t_company d ON c.company_id=d.company_id WHERE a.deleted_at is NULL AND a.rack_id=Array),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_rack WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_rack WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-05-20 11:15:06 --> Severity: Notice --> Array to string conversion /application/application/modules/rpt/models/M_infra.php 30
ERROR - 2022-05-20 11:15:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 1: ....company_id WHERE a.deleted_at is NULL AND a.rack_id=Array),
                                                                     ^ /application/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-05-20 11:15:06 --> Query error: ERROR:  syntax error at or near ")"
LINE 1: ....company_id WHERE a.deleted_at is NULL AND a.rack_id=Array),
                                                                     ^ - Invalid query: WITH x AS (SELECT a.* , b.room_name , c.gedung_name , d.company_name FROM mst.t_rack a LEFT JOIN mst.t_room b  ON a.room_id=b.room_id LEFT JOIN mst.t_gedung c ON b.gedung_id=c.gedung_id LEFT JOIN mst.t_company d ON c.company_id=d.company_id WHERE a.deleted_at is NULL AND a.rack_id=Array),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_rack WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_rack WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-05-20 11:25:07 --> Severity: Notice --> Array to string conversion /application/application/modules/rpt/models/M_infra.php 30
ERROR - 2022-05-20 11:25:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 1: ....company_id WHERE a.deleted_at is NULL AND a.rack_id=Array),
                                                                     ^ /application/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-05-20 11:25:07 --> Query error: ERROR:  syntax error at or near ")"
LINE 1: ....company_id WHERE a.deleted_at is NULL AND a.rack_id=Array),
                                                                     ^ - Invalid query: WITH x AS (SELECT a.* , b.room_name , c.gedung_name , d.company_name FROM mst.t_rack a LEFT JOIN mst.t_room b  ON a.room_id=b.room_id LEFT JOIN mst.t_gedung c ON b.gedung_id=c.gedung_id LEFT JOIN mst.t_company d ON c.company_id=d.company_id WHERE a.deleted_at is NULL AND a.rack_id=Array),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_rack WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_rack WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-05-20 11:38:46 --> Severity: Notice --> Array to string conversion /application/application/modules/rpt/models/M_infra.php 30
ERROR - 2022-05-20 11:38:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 1: ....company_id WHERE a.deleted_at is NULL AND a.rack_id=Array),
                                                                     ^ /application/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-05-20 11:38:46 --> Query error: ERROR:  syntax error at or near ")"
LINE 1: ....company_id WHERE a.deleted_at is NULL AND a.rack_id=Array),
                                                                     ^ - Invalid query: WITH x AS (SELECT a.* , b.room_name , c.gedung_name , d.company_name FROM mst.t_rack a LEFT JOIN mst.t_room b  ON a.room_id=b.room_id LEFT JOIN mst.t_gedung c ON b.gedung_id=c.gedung_id LEFT JOIN mst.t_company d ON c.company_id=d.company_id WHERE a.deleted_at is NULL AND a.rack_id=Array),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_rack WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_rack WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-05-20 11:38:47 --> Severity: Notice --> Array to string conversion /application/application/modules/rpt/models/M_infra.php 30
ERROR - 2022-05-20 11:38:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 1: ....company_id WHERE a.deleted_at is NULL AND a.rack_id=Array),
                                                                     ^ /application/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-05-20 11:38:47 --> Query error: ERROR:  syntax error at or near ")"
LINE 1: ....company_id WHERE a.deleted_at is NULL AND a.rack_id=Array),
                                                                     ^ - Invalid query: WITH x AS (SELECT a.* , b.room_name , c.gedung_name , d.company_name FROM mst.t_rack a LEFT JOIN mst.t_room b  ON a.room_id=b.room_id LEFT JOIN mst.t_gedung c ON b.gedung_id=c.gedung_id LEFT JOIN mst.t_company d ON c.company_id=d.company_id WHERE a.deleted_at is NULL AND a.rack_id=Array),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_rack WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_rack WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-05-20 11:55:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;log.t_log_shift&quot; does not exist
LINE 1: WITH x AS (SELECT a.* FROM log.t_log_shift a where a.id_loka...
                                   ^ /application/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-05-20 11:55:19 --> Query error: ERROR:  relation "log.t_log_shift" does not exist
LINE 1: WITH x AS (SELECT a.* FROM log.t_log_shift a where a.id_loka...
                                   ^ - Invalid query: WITH x AS (SELECT a.* FROM log.t_log_shift a where a.id_lokasi is not null   order by a.id_sync_shift desc limit 10 offset 0),
		y AS (SELECT COUNT(*) AS record_total FROM log.t_log_shift),
		z AS (SELECT COUNT(*) AS record_filtered FROM log.t_log_shift a  where a.id_lokasi is not null  )
		SELECT x.*, y.*, z.*
		FROM x, y, z
ERROR - 2022-05-20 12:02:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column a.id_sync_shift does not exist
LINE 1: ....company_id WHERE a.deleted_at is NULL   order by a.id_sync_...
                                                             ^ /application/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-05-20 12:02:03 --> Query error: ERROR:  column a.id_sync_shift does not exist
LINE 1: ....company_id WHERE a.deleted_at is NULL   order by a.id_sync_...
                                                             ^ - Invalid query: WITH x AS (SELECT a.* , b.room_name , c.gedung_name , d.company_name FROM mst.t_rack a LEFT JOIN mst.t_room b  ON a.room_id=b.room_id LEFT JOIN mst.t_gedung c ON b.gedung_id=c.gedung_id LEFT JOIN mst.t_company d ON c.company_id=d.company_id WHERE a.deleted_at is NULL   order by a.id_sync_shift desc limit 10 offset 0),
		y AS (SELECT COUNT(*) AS record_total FROM mst.t_rack WHERE deleted_at is NULL),
		z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_rack WHERE deleted_at is NULL  )
		SELECT x.*, y.*, z.*
		FROM x, y, z
ERROR - 2022-05-20 12:02:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column a.id_sync_shift does not exist
LINE 1: ....company_id WHERE a.deleted_at is NULL   order by a.id_sync_...
                                                             ^ /application/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-05-20 12:02:04 --> Query error: ERROR:  column a.id_sync_shift does not exist
LINE 1: ....company_id WHERE a.deleted_at is NULL   order by a.id_sync_...
                                                             ^ - Invalid query: WITH x AS (SELECT a.* , b.room_name , c.gedung_name , d.company_name FROM mst.t_rack a LEFT JOIN mst.t_room b  ON a.room_id=b.room_id LEFT JOIN mst.t_gedung c ON b.gedung_id=c.gedung_id LEFT JOIN mst.t_company d ON c.company_id=d.company_id WHERE a.deleted_at is NULL   order by a.id_sync_shift desc limit 10 offset 0),
		y AS (SELECT COUNT(*) AS record_total FROM mst.t_rack WHERE deleted_at is NULL),
		z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_rack WHERE deleted_at is NULL  )
		SELECT x.*, y.*, z.*
		FROM x, y, z
ERROR - 2022-05-20 12:02:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column a.id_sync_shift does not exist
LINE 1: ....company_id WHERE a.deleted_at is NULL   order by a.id_sync_...
                                                             ^ /application/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-05-20 12:02:06 --> Query error: ERROR:  column a.id_sync_shift does not exist
LINE 1: ....company_id WHERE a.deleted_at is NULL   order by a.id_sync_...
                                                             ^ - Invalid query: WITH x AS (SELECT a.* , b.room_name , c.gedung_name , d.company_name FROM mst.t_rack a LEFT JOIN mst.t_room b  ON a.room_id=b.room_id LEFT JOIN mst.t_gedung c ON b.gedung_id=c.gedung_id LEFT JOIN mst.t_company d ON c.company_id=d.company_id WHERE a.deleted_at is NULL   order by a.id_sync_shift desc limit 10 offset 0),
		y AS (SELECT COUNT(*) AS record_total FROM mst.t_rack WHERE deleted_at is NULL),
		z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_rack WHERE deleted_at is NULL  )
		SELECT x.*, y.*, z.*
		FROM x, y, z
ERROR - 2022-05-20 12:02:44 --> Severity: Notice --> Undefined index: id_lokasi /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-20 12:02:44 --> Severity: Notice --> Undefined index: nama_lokasi /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-20 12:06:39 --> Severity: Notice --> Undefined index: id_lokasi /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-20 12:06:39 --> Severity: Notice --> Undefined index: nama_lokasi /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-20 13:20:58 --> 404 Page Not Found: /index
ERROR - 2022-05-20 13:21:05 --> Severity: Notice --> Undefined index: id_lokasi /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-20 13:21:05 --> Severity: Notice --> Undefined index: nama_lokasi /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-20 13:21:14 --> 404 Page Not Found: /index
ERROR - 2022-05-20 13:21:14 --> 404 Page Not Found: /index
ERROR - 2022-05-20 13:21:14 --> 404 Page Not Found: /index
ERROR - 2022-05-20 13:21:14 --> 404 Page Not Found: /index
ERROR - 2022-05-20 13:21:55 --> Severity: Notice --> Undefined index: id_lokasi /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-20 13:21:55 --> Severity: Notice --> Undefined index: nama_lokasi /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-20 13:21:56 --> 404 Page Not Found: /index
ERROR - 2022-05-20 13:21:56 --> 404 Page Not Found: /index
ERROR - 2022-05-20 13:21:56 --> 404 Page Not Found: /index
ERROR - 2022-05-20 13:21:56 --> 404 Page Not Found: /index
ERROR - 2022-05-20 13:22:39 --> Severity: Notice --> Undefined index: id_lokasi /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-20 13:22:39 --> Severity: Notice --> Undefined index: nama_lokasi /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-20 13:22:39 --> 404 Page Not Found: /index
ERROR - 2022-05-20 13:22:40 --> 404 Page Not Found: /index
ERROR - 2022-05-20 13:22:41 --> 404 Page Not Found: /index
ERROR - 2022-05-20 13:22:41 --> 404 Page Not Found: /index
ERROR - 2022-05-20 13:22:45 --> Severity: Notice --> Undefined variable: data /application/application/modules/rpt/views/v_export.php 40
ERROR - 2022-05-20 13:22:45 --> Severity: Warning --> Invalid argument supplied for foreach() /application/application/modules/rpt/views/v_export.php 40
ERROR - 2022-05-20 13:23:56 --> Severity: Notice --> Undefined variable: data /application/application/modules/rpt/views/v_export.php 40
ERROR - 2022-05-20 13:23:56 --> Severity: Warning --> Invalid argument supplied for foreach() /application/application/modules/rpt/views/v_export.php 40
ERROR - 2022-05-20 13:25:06 --> Severity: Notice --> Undefined index: id_lokasi /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-20 13:25:06 --> Severity: Notice --> Undefined index: nama_lokasi /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-20 13:25:06 --> 404 Page Not Found: /index
ERROR - 2022-05-20 13:25:07 --> 404 Page Not Found: /index
ERROR - 2022-05-20 13:25:07 --> 404 Page Not Found: /index
ERROR - 2022-05-20 13:25:07 --> 404 Page Not Found: /index
ERROR - 2022-05-20 13:29:08 --> 404 Page Not Found: /index
ERROR - 2022-05-20 13:29:22 --> Severity: Notice --> Undefined index: id_lokasi /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-20 13:29:22 --> Severity: Notice --> Undefined index: nama_lokasi /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-20 13:30:15 --> Severity: Notice --> Undefined index: id_lokasi /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-20 13:30:15 --> Severity: Notice --> Undefined index: nama_lokasi /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-20 13:30:19 --> Severity: Notice --> Undefined variable: data /application/application/modules/rpt/views/v_export.php 22
ERROR - 2022-05-20 13:30:19 --> Severity: Warning --> Invalid argument supplied for foreach() /application/application/modules/rpt/views/v_export.php 22
ERROR - 2022-05-20 13:34:37 --> Severity: Notice --> Undefined index: id_lokasi /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-20 13:34:37 --> Severity: Notice --> Undefined index: nama_lokasi /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-20 13:34:37 --> 404 Page Not Found: /index
ERROR - 2022-05-20 13:34:38 --> 404 Page Not Found: /index
ERROR - 2022-05-20 13:34:38 --> 404 Page Not Found: /index
ERROR - 2022-05-20 13:34:38 --> 404 Page Not Found: /index
ERROR - 2022-05-20 13:34:43 --> Severity: Notice --> Undefined variable: data /application/application/modules/rpt/views/v_export.php 22
ERROR - 2022-05-20 13:34:43 --> Severity: Warning --> Invalid argument supplied for foreach() /application/application/modules/rpt/views/v_export.php 22
ERROR - 2022-05-20 13:36:42 --> Severity: Notice --> Undefined variable: data /application/application/modules/rpt/views/v_export.php 22
ERROR - 2022-05-20 13:36:42 --> Severity: Warning --> Invalid argument supplied for foreach() /application/application/modules/rpt/views/v_export.php 22
ERROR - 2022-05-20 13:36:45 --> Severity: Notice --> Undefined index: id_lokasi /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-20 13:36:45 --> Severity: Notice --> Undefined index: nama_lokasi /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-20 13:36:46 --> 404 Page Not Found: /index
ERROR - 2022-05-20 13:36:47 --> 404 Page Not Found: /index
ERROR - 2022-05-20 13:36:47 --> 404 Page Not Found: /index
ERROR - 2022-05-20 13:36:47 --> 404 Page Not Found: /index
ERROR - 2022-05-20 13:36:50 --> Severity: Notice --> Undefined variable: data /application/application/modules/rpt/views/v_export.php 22
ERROR - 2022-05-20 13:36:50 --> Severity: Warning --> Invalid argument supplied for foreach() /application/application/modules/rpt/views/v_export.php 22
ERROR - 2022-05-20 13:38:03 --> Severity: Notice --> Undefined index: id_lokasi /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-20 13:38:03 --> Severity: Notice --> Undefined index: nama_lokasi /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-20 13:41:25 --> Severity: Notice --> Undefined index: id_lokasi /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-20 13:41:25 --> Severity: Notice --> Undefined index: nama_lokasi /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-20 13:42:59 --> Severity: Notice --> Undefined index: id_lokasi /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-20 13:42:59 --> Severity: Notice --> Undefined index: nama_lokasi /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-20 13:42:59 --> 404 Page Not Found: /index
ERROR - 2022-05-20 13:43:00 --> 404 Page Not Found: /index
ERROR - 2022-05-20 13:43:00 --> 404 Page Not Found: /index
ERROR - 2022-05-20 13:43:00 --> 404 Page Not Found: /index
ERROR - 2022-05-20 13:43:17 --> Severity: Notice --> Undefined index: id_lokasi /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-20 13:43:17 --> Severity: Notice --> Undefined index: nama_lokasi /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-20 13:43:17 --> 404 Page Not Found: /index
ERROR - 2022-05-20 13:43:18 --> 404 Page Not Found: /index
ERROR - 2022-05-20 13:43:18 --> 404 Page Not Found: /index
ERROR - 2022-05-20 13:43:18 --> 404 Page Not Found: /index
ERROR - 2022-05-20 13:43:47 --> Severity: Notice --> Undefined index: id_lokasi /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-20 13:43:47 --> Severity: Notice --> Undefined index: nama_lokasi /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-20 13:43:47 --> 404 Page Not Found: /index
ERROR - 2022-05-20 13:43:48 --> 404 Page Not Found: /index
ERROR - 2022-05-20 13:43:48 --> 404 Page Not Found: /index
ERROR - 2022-05-20 13:43:48 --> 404 Page Not Found: /index
ERROR - 2022-05-20 13:46:33 --> Severity: Notice --> Undefined variable: listLokasi /application/application/modules/rpt/views/v_infra.php 55
ERROR - 2022-05-20 13:46:33 --> Severity: Warning --> Invalid argument supplied for foreach() /application/application/modules/rpt/views/v_infra.php 55
ERROR - 2022-05-20 13:46:33 --> 404 Page Not Found: /index
ERROR - 2022-05-20 13:46:34 --> 404 Page Not Found: /index
ERROR - 2022-05-20 13:46:34 --> 404 Page Not Found: /index
ERROR - 2022-05-20 13:46:34 --> 404 Page Not Found: /index
ERROR - 2022-05-20 13:46:39 --> Severity: Notice --> Undefined variable: data /application/application/modules/rpt/views/v_export.php 22
ERROR - 2022-05-20 13:46:39 --> Severity: Warning --> Invalid argument supplied for foreach() /application/application/modules/rpt/views/v_export.php 22
