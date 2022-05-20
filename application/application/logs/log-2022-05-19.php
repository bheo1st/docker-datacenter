<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-05-19 03:13:14 --> 404 Page Not Found: /index
ERROR - 2022-05-19 03:13:15 --> 404 Page Not Found: /index
ERROR - 2022-05-19 03:13:15 --> 404 Page Not Found: /index
ERROR - 2022-05-19 03:13:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;svc.t_m_user&quot; does not exist
LINE 2: FROM &quot;svc&quot;.&quot;t_m_user&quot; &quot;a&quot;
             ^ /application/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-05-19 03:13:21 --> Query error: ERROR:  relation "svc.t_m_user" does not exist
LINE 2: FROM "svc"."t_m_user" "a"
             ^ - Invalid query: SELECT a.*, b.company_name, c.i_level, c.n_role, d.n_company, e.nama_lokasi
FROM "svc"."t_m_user" "a"
LEFT JOIN "svc"."t_m_role" "c" ON "c"."c_role" = "a"."c_role"
LEFT JOIN "public"."t_m_company" "d" ON "d"."c_company" = "a"."c_company"
LEFT JOIN "mst"."t_company" "b" ON "b"."company_id" = "a"."company_id"
LEFT JOIN "mst"."t_lokasi" "e" ON "e"."id_lokasi" = "a"."id_lokasi"
WHERE "a"."n_user" = 'adsad'
AND "a"."n_pass" = 'b5b037a78522671b89a2c1b21d9b80c6'
AND "a"."b_delete" = 'f'
ERROR - 2022-05-19 03:19:25 --> 404 Page Not Found: /index
ERROR - 2022-05-19 03:19:25 --> 404 Page Not Found: /index
ERROR - 2022-05-19 03:19:25 --> 404 Page Not Found: /index
ERROR - 2022-05-19 03:19:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;mst.t_company&quot; does not exist
LINE 5: LEFT JOIN &quot;mst&quot;.&quot;t_company&quot; &quot;b&quot; ON &quot;b&quot;.&quot;company_id&quot; = &quot;a&quot;.&quot;c...
                  ^ /application/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-05-19 03:19:30 --> Query error: ERROR:  relation "mst.t_company" does not exist
LINE 5: LEFT JOIN "mst"."t_company" "b" ON "b"."company_id" = "a"."c...
                  ^ - Invalid query: SELECT a.*, b.company_name, c.i_level, c.n_role, d.n_company, e.nama_lokasi
FROM "svc"."t_m_user" "a"
LEFT JOIN "svc"."t_m_role" "c" ON "c"."c_role" = "a"."c_role"
LEFT JOIN "public"."t_m_company" "d" ON "d"."c_company" = "a"."c_company"
LEFT JOIN "mst"."t_company" "b" ON "b"."company_id" = "a"."company_id"
LEFT JOIN "mst"."t_lokasi" "e" ON "e"."id_lokasi" = "a"."id_lokasi"
WHERE "a"."n_user" = 'admin'
AND "a"."n_pass" = 'd3e4fa19267c778c28a6c5ca34b2f757'
AND "a"."b_delete" = 'f'
ERROR - 2022-05-19 03:21:02 --> 404 Page Not Found: /index
ERROR - 2022-05-19 03:21:03 --> 404 Page Not Found: /index
ERROR - 2022-05-19 03:21:03 --> 404 Page Not Found: /index
ERROR - 2022-05-19 03:21:03 --> 404 Page Not Found: /index
ERROR - 2022-05-19 04:11:08 --> 404 Page Not Found: /index
ERROR - 2022-05-19 04:11:08 --> 404 Page Not Found: /index
ERROR - 2022-05-19 04:30:26 --> 404 Page Not Found: ../modules/rpt/controllers//index
ERROR - 2022-05-19 04:30:54 --> Severity: Notice --> Undefined variable: listLokasi /application/application/modules/rpt/views/v_infra.php 73
ERROR - 2022-05-19 04:30:54 --> Severity: Warning --> Invalid argument supplied for foreach() /application/application/modules/rpt/views/v_infra.php 73
ERROR - 2022-05-19 04:31:56 --> 404 Page Not Found: /index
ERROR - 2022-05-19 04:31:56 --> 404 Page Not Found: /index
ERROR - 2022-05-19 04:31:56 --> 404 Page Not Found: /index
ERROR - 2022-05-19 04:31:56 --> 404 Page Not Found: /index
ERROR - 2022-05-19 04:37:43 --> Severity: Notice --> Undefined variable: listLokasi /application/application/modules/rpt/views/v_infra.php 73
ERROR - 2022-05-19 04:37:43 --> Severity: Warning --> Invalid argument supplied for foreach() /application/application/modules/rpt/views/v_infra.php 73
ERROR - 2022-05-19 04:37:45 --> 404 Page Not Found: /index
ERROR - 2022-05-19 04:37:45 --> 404 Page Not Found: /index
ERROR - 2022-05-19 04:37:45 --> 404 Page Not Found: /index
ERROR - 2022-05-19 04:37:45 --> 404 Page Not Found: ../modules/rpt/controllers//index
ERROR - 2022-05-19 04:37:45 --> 404 Page Not Found: /index
ERROR - 2022-05-19 04:37:55 --> 404 Page Not Found: ../modules/rpt/controllers//index
ERROR - 2022-05-19 06:32:37 --> Severity: Notice --> Undefined variable: listLokasi /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-19 06:32:37 --> Severity: Warning --> Invalid argument supplied for foreach() /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-19 06:32:54 --> Severity: Notice --> Undefined variable: listLokasi /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-19 06:32:54 --> Severity: Warning --> Invalid argument supplied for foreach() /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-19 06:35:48 --> Severity: Notice --> Undefined variable: listLokasi /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-19 06:35:48 --> Severity: Warning --> Invalid argument supplied for foreach() /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-19 06:35:51 --> 404 Page Not Found: ../modules/rpt/controllers//index
ERROR - 2022-05-19 06:36:38 --> Severity: Notice --> Undefined variable: listLokasi /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-19 06:36:38 --> Severity: Warning --> Invalid argument supplied for foreach() /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-19 06:36:41 --> 404 Page Not Found: ../modules/rpt/controllers//index
ERROR - 2022-05-19 06:36:45 --> Severity: Notice --> Undefined variable: listLokasi /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-19 06:36:45 --> Severity: Warning --> Invalid argument supplied for foreach() /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-19 06:36:46 --> 404 Page Not Found: ../modules/rpt/controllers//index
ERROR - 2022-05-19 06:37:10 --> Severity: Notice --> Undefined variable: listLokasi /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-19 06:37:10 --> Severity: Warning --> Invalid argument supplied for foreach() /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-19 06:37:12 --> 404 Page Not Found: ../modules/rpt/controllers//index
ERROR - 2022-05-19 06:37:37 --> 404 Page Not Found: /index
ERROR - 2022-05-19 06:37:37 --> 404 Page Not Found: /index
ERROR - 2022-05-19 06:37:37 --> 404 Page Not Found: /index
ERROR - 2022-05-19 06:37:37 --> 404 Page Not Found: /index
ERROR - 2022-05-19 06:37:41 --> Severity: Notice --> Undefined variable: listLokasi /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-19 06:37:41 --> Severity: Warning --> Invalid argument supplied for foreach() /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-19 06:37:43 --> 404 Page Not Found: /index
ERROR - 2022-05-19 06:37:43 --> 404 Page Not Found: /index
ERROR - 2022-05-19 06:37:43 --> 404 Page Not Found: /index
ERROR - 2022-05-19 06:37:43 --> 404 Page Not Found: /index
ERROR - 2022-05-19 06:37:43 --> 404 Page Not Found: ../modules/rpt/controllers//index
ERROR - 2022-05-19 06:38:45 --> Severity: Notice --> Undefined variable: listLokasi /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-19 06:38:46 --> Severity: Warning --> Invalid argument supplied for foreach() /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-19 06:38:48 --> Severity: Notice --> Undefined variable: listLokasi /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-19 06:38:48 --> Severity: Warning --> Invalid argument supplied for foreach() /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-19 06:38:48 --> 404 Page Not Found: ../modules/rpt/controllers//index
ERROR - 2022-05-19 06:38:50 --> 404 Page Not Found: ../modules/rpt/controllers//index
ERROR - 2022-05-19 06:39:46 --> 404 Page Not Found: ../modules/rpt/controllers//index
ERROR - 2022-05-19 06:41:21 --> Severity: Notice --> Undefined variable: listLokasi /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-19 06:41:22 --> Severity: Warning --> Invalid argument supplied for foreach() /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-19 06:41:24 --> 404 Page Not Found: ../modules/rpt/controllers//index
ERROR - 2022-05-19 06:41:29 --> Severity: Notice --> Undefined variable: listLokasi /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-19 06:41:29 --> Severity: Warning --> Invalid argument supplied for foreach() /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-19 06:41:31 --> 404 Page Not Found: ../modules/rpt/controllers//index
ERROR - 2022-05-19 06:42:17 --> 404 Page Not Found: /index
ERROR - 2022-05-19 06:42:34 --> 404 Page Not Found: ../modules/rpt/controllers//index
ERROR - 2022-05-19 06:43:52 --> Severity: Notice --> Undefined variable: listLokasi /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-19 06:43:52 --> Severity: Warning --> Invalid argument supplied for foreach() /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-19 06:45:01 --> Severity: Notice --> Undefined variable: listLokasi /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-19 06:45:01 --> Severity: Warning --> Invalid argument supplied for foreach() /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-19 06:45:07 --> Severity: Notice --> Undefined variable: listLokasi /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-19 06:45:07 --> Severity: Warning --> Invalid argument supplied for foreach() /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-19 06:45:12 --> Severity: Notice --> Undefined variable: listLokasi /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-19 06:45:12 --> Severity: Warning --> Invalid argument supplied for foreach() /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-19 06:45:52 --> Severity: Notice --> Undefined variable: listLokasi /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-19 06:45:52 --> Severity: Warning --> Invalid argument supplied for foreach() /application/application/modules/rpt/views/v_infra.php 56
ERROR - 2022-05-19 06:46:17 --> Severity: Notice --> Undefined variable: listLokasi /application/application/modules/rpt/views/v_infra.php 55
ERROR - 2022-05-19 06:46:17 --> Severity: Warning --> Invalid argument supplied for foreach() /application/application/modules/rpt/views/v_infra.php 55
ERROR - 2022-05-19 06:46:26 --> 404 Page Not Found: ../modules/rpt/controllers//index
ERROR - 2022-05-19 06:47:49 --> Severity: Notice --> Undefined variable: listLokasi /application/application/modules/rpt/views/v_infra.php 55
ERROR - 2022-05-19 06:47:49 --> Severity: Warning --> Invalid argument supplied for foreach() /application/application/modules/rpt/views/v_infra.php 55
ERROR - 2022-05-19 06:47:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;log.t_log_shift&quot; does not exist
LINE 1: SELECT a.* FROM log.t_log_shift a where a.id_lokasi is not n...
                        ^ /application/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-05-19 06:47:55 --> Query error: ERROR:  relation "log.t_log_shift" does not exist
LINE 1: SELECT a.* FROM log.t_log_shift a where a.id_lokasi is not n...
                        ^ - Invalid query: SELECT a.* FROM log.t_log_shift a where a.id_lokasi is not null  order by a.id_sync_shift desc
ERROR - 2022-05-19 06:47:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;log.t_log_shift&quot; does not exist
LINE 1: SELECT a.* FROM log.t_log_shift a where a.id_lokasi is not n...
                        ^ /application/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-05-19 06:47:57 --> Query error: ERROR:  relation "log.t_log_shift" does not exist
LINE 1: SELECT a.* FROM log.t_log_shift a where a.id_lokasi is not n...
                        ^ - Invalid query: SELECT a.* FROM log.t_log_shift a where a.id_lokasi is not null  order by a.id_sync_shift desc
ERROR - 2022-05-19 06:48:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;log.t_log_shift&quot; does not exist
LINE 1: SELECT a.* FROM log.t_log_shift a where a.id_lokasi is not n...
                        ^ /application/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-05-19 06:48:03 --> Query error: ERROR:  relation "log.t_log_shift" does not exist
LINE 1: SELECT a.* FROM log.t_log_shift a where a.id_lokasi is not n...
                        ^ - Invalid query: SELECT a.* FROM log.t_log_shift a where a.id_lokasi is not null  order by a.id_sync_shift desc
ERROR - 2022-05-19 07:03:46 --> Severity: Notice --> Undefined variable: listLokasi /application/application/modules/rpt/views/v_infra.php 55
ERROR - 2022-05-19 07:03:46 --> Severity: Warning --> Invalid argument supplied for foreach() /application/application/modules/rpt/views/v_infra.php 55
ERROR - 2022-05-19 07:03:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;log.t_log_shift&quot; does not exist
LINE 1: SELECT a.* FROM log.t_log_shift a where a.id_lokasi is not n...
                        ^ /application/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-05-19 07:03:56 --> Query error: ERROR:  relation "log.t_log_shift" does not exist
LINE 1: SELECT a.* FROM log.t_log_shift a where a.id_lokasi is not n...
                        ^ - Invalid query: SELECT a.* FROM log.t_log_shift a where a.id_lokasi is not null  order by a.id_sync_shift desc
ERROR - 2022-05-19 07:03:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;log.t_log_shift&quot; does not exist
LINE 1: SELECT a.* FROM log.t_log_shift a where a.id_lokasi is not n...
                        ^ /application/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-05-19 07:03:58 --> Query error: ERROR:  relation "log.t_log_shift" does not exist
LINE 1: SELECT a.* FROM log.t_log_shift a where a.id_lokasi is not n...
                        ^ - Invalid query: SELECT a.* FROM log.t_log_shift a where a.id_lokasi is not null  order by a.id_sync_shift desc
ERROR - 2022-05-19 07:04:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;log.t_log_shift&quot; does not exist
LINE 1: SELECT a.* FROM log.t_log_shift a where a.id_lokasi is not n...
                        ^ /application/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-05-19 07:04:04 --> Query error: ERROR:  relation "log.t_log_shift" does not exist
LINE 1: SELECT a.* FROM log.t_log_shift a where a.id_lokasi is not n...
                        ^ - Invalid query: SELECT a.* FROM log.t_log_shift a where a.id_lokasi is not null  order by a.id_sync_shift desc
ERROR - 2022-05-19 07:04:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;log.t_log_shift&quot; does not exist
LINE 1: SELECT a.* FROM log.t_log_shift a where a.id_lokasi is not n...
                        ^ /application/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-05-19 07:04:25 --> Query error: ERROR:  relation "log.t_log_shift" does not exist
LINE 1: SELECT a.* FROM log.t_log_shift a where a.id_lokasi is not n...
                        ^ - Invalid query: SELECT a.* FROM log.t_log_shift a where a.id_lokasi is not null  order by a.id_sync_shift desc
ERROR - 2022-05-19 07:04:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;log.t_log_shift&quot; does not exist
LINE 1: SELECT a.* FROM log.t_log_shift a where a.id_lokasi is not n...
                        ^ /application/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-05-19 07:04:26 --> Query error: ERROR:  relation "log.t_log_shift" does not exist
LINE 1: SELECT a.* FROM log.t_log_shift a where a.id_lokasi is not n...
                        ^ - Invalid query: SELECT a.* FROM log.t_log_shift a where a.id_lokasi is not null  order by a.id_sync_shift desc
ERROR - 2022-05-19 07:05:15 --> Severity: Notice --> Undefined variable: listLokasi /application/application/modules/rpt/views/v_infra.php 55
ERROR - 2022-05-19 07:05:15 --> Severity: Warning --> Invalid argument supplied for foreach() /application/application/modules/rpt/views/v_infra.php 55
