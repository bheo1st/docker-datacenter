<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-04-22 02:07:21 --> Severity: error --> Exception: Call to undefined method M_gedung::read_detail() C:\laragon\www\codeapp\application\modules\mst\controllers\C_gedung.php 63
ERROR - 2022-04-22 02:07:22 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:33:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;WHERE&quot;
LINE 1: ....company_id WHERE mst.t_gedung.deleted_at is NULL WHERE mst....
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-22 04:33:37 --> Query error: ERROR:  syntax error at or near "WHERE"
LINE 1: ....company_id WHERE mst.t_gedung.deleted_at is NULL WHERE mst....
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL WHERE mst.t_gedung.gedung_id = 13),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-22 04:35:28 --> Severity: Notice --> Undefined variable: listCompany C:\laragon\www\codeapp\application\modules\mst\views\v_form_gedung.php 15
ERROR - 2022-04-22 04:35:28 --> Severity: Warning --> Invalid argument supplied for foreach() C:\laragon\www\codeapp\application\modules\mst\views\v_form_gedung.php 15
ERROR - 2022-04-22 04:35:35 --> Severity: Notice --> Undefined variable: listCompany C:\laragon\www\codeapp\application\modules\mst\views\v_form_gedung.php 15
ERROR - 2022-04-22 04:35:35 --> Severity: Warning --> Invalid argument supplied for foreach() C:\laragon\www\codeapp\application\modules\mst\views\v_form_gedung.php 15
ERROR - 2022-04-22 04:36:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;company_name&quot; of relation &quot;t_gedung&quot; does not exist
LINE 1: ...ATE &quot;mst&quot;.&quot;t_gedung&quot; SET &quot;gedung_name&quot; = 'CYBER', &quot;company_n...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-22 04:36:56 --> Query error: ERROR:  column "company_name" of relation "t_gedung" does not exist
LINE 1: ...ATE "mst"."t_gedung" SET "gedung_name" = 'CYBER', "company_n...
                                                             ^ - Invalid query: UPDATE "mst"."t_gedung" SET "gedung_name" = 'CYBER', "company_name" = '7', "gedung_address" = NULL, "created_at" = 'now()', "created_by" = 'admin'
WHERE "gedung_name" = 'CYBER'
ERROR - 2022-04-22 04:37:02 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:37:02 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:37:02 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:37:03 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:37:15 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:37:15 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:37:15 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:37:15 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:37:20 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:37:21 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:37:21 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:37:21 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:37:24 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:37:24 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:37:24 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:37:25 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:37:34 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:37:34 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:37:34 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:37:34 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:37:37 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:37:38 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:37:38 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:37:38 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:37:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;company_name&quot; of relation &quot;t_gedung&quot; does not exist
LINE 1: ...ATE &quot;mst&quot;.&quot;t_gedung&quot; SET &quot;gedung_name&quot; = 'CYBER', &quot;company_n...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-22 04:37:52 --> Query error: ERROR:  column "company_name" of relation "t_gedung" does not exist
LINE 1: ...ATE "mst"."t_gedung" SET "gedung_name" = 'CYBER', "company_n...
                                                             ^ - Invalid query: UPDATE "mst"."t_gedung" SET "gedung_name" = 'CYBER', "company_name" = '9', "gedung_address" = NULL, "created_at" = 'now()', "created_by" = 'admin'
WHERE "gedung_name" = 'CYBER'
ERROR - 2022-04-22 04:39:01 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:39:03 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:39:03 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:39:03 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:39:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;CYBER&quot;
LINE 2: WHERE &quot;gedung_id&quot; = 'CYBER'
                            ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-22 04:39:11 --> Query error: ERROR:  invalid input syntax for integer: "CYBER"
LINE 2: WHERE "gedung_id" = 'CYBER'
                            ^ - Invalid query: UPDATE "mst"."t_gedung" SET "gedung_name" = 'CYBER', "company_name" = '9', "gedung_address" = NULL, "created_at" = 'now()', "created_by" = 'admin'
WHERE "gedung_id" = 'CYBER'
ERROR - 2022-04-22 04:39:57 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:39:59 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:39:59 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:39:59 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:40:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;company_name&quot; of relation &quot;t_gedung&quot; does not exist
LINE 1: ...ATE &quot;mst&quot;.&quot;t_gedung&quot; SET &quot;gedung_name&quot; = 'CYBER', &quot;company_n...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-22 04:40:10 --> Query error: ERROR:  column "company_name" of relation "t_gedung" does not exist
LINE 1: ...ATE "mst"."t_gedung" SET "gedung_name" = 'CYBER', "company_n...
                                                             ^ - Invalid query: UPDATE "mst"."t_gedung" SET "gedung_name" = 'CYBER', "company_name" = '9', "gedung_address" = NULL, "created_at" = 'now()', "created_by" = 'admin'
WHERE "gedung_name" = 'CYBER'
ERROR - 2022-04-22 04:40:44 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:40:46 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:40:46 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:40:46 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:40:55 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:40:55 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:40:55 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:40:56 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:41:06 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:41:07 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:41:07 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:41:07 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:41:16 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:41:16 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:41:16 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:41:16 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:41:50 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:41:51 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:41:51 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:41:51 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:42:53 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:42:54 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:42:54 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:42:55 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:42:59 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:42:59 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:42:59 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:42:59 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:43:23 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:43:24 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:43:24 --> 404 Page Not Found: /index
ERROR - 2022-04-22 04:43:24 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:03:08 --> 404 Page Not Found: ../modules/mst/controllers//index
ERROR - 2022-04-22 08:10:03 --> 404 Page Not Found: ../modules/mst/controllers//index
ERROR - 2022-04-22 08:10:07 --> 404 Page Not Found: ../modules/mst/controllers//index
ERROR - 2022-04-22 08:10:49 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:10:49 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:10:49 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:10:49 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:11:19 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:11:19 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:11:19 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:11:19 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:12:42 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:12:42 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:12:42 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:12:42 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:12:46 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:12:46 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:12:46 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:12:46 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:12:53 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:12:54 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:12:54 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:12:54 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:23:00 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:23:01 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:23:01 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:23:01 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:24:02 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:24:02 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:24:02 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:24:02 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:27:24 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:27:25 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:27:25 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:27:26 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:27:39 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:27:40 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:27:40 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:27:40 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:27:48 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:27:48 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:27:48 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:27:49 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:28:11 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:28:11 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:28:11 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:28:12 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:33:01 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:33:02 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:33:02 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:33:02 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:33:07 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:33:07 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:33:07 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:33:08 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:33:35 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:33:35 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:33:35 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:33:35 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:33:39 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:33:39 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:33:39 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:33:39 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:33:41 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:33:42 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:33:42 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:33:42 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:33:52 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:33:52 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:33:52 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:33:52 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:34:04 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:34:05 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:34:05 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:34:05 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:34:14 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:34:14 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:34:15 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:34:15 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:37:48 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:37:48 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:37:49 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:37:49 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:37:55 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:37:55 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:37:55 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:37:55 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:39:35 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:39:35 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:39:35 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:39:35 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:39:42 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:39:42 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:39:42 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:39:42 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:39:48 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:39:48 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:39:48 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:39:48 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:41:06 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:41:07 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:41:07 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:41:08 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:41:11 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:41:11 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:41:11 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:41:11 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:41:22 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:41:22 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:41:22 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:41:22 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:41:37 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:41:37 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:41:37 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:41:37 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:41:45 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:41:45 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:41:45 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:41:45 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:44:18 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:44:19 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:44:19 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:44:20 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:44:24 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:44:24 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:44:24 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:44:24 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:44:27 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:44:27 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:44:27 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:44:27 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:44:35 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:44:35 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:44:35 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:44:36 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:44:46 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:44:46 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:44:46 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:44:47 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:44:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;JARING SOLUSI&quot;
LINE 2: WHERE &quot;company_id&quot; = 'JARING SOLUSI'
                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-22 08:44:54 --> Query error: ERROR:  invalid input syntax for integer: "JARING SOLUSI"
LINE 2: WHERE "company_id" = 'JARING SOLUSI'
                             ^ - Invalid query: UPDATE "mst"."t_company" SET "company_name" = 'JARING SOLUSI', "company_address" = NULL, "created_at" = 'now()', "created_by" = 'admin'
WHERE "company_id" = 'JARING SOLUSI'
ERROR - 2022-04-22 08:48:25 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:48:27 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:48:27 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:48:27 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:48:38 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:48:39 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:48:39 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:48:39 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:48:58 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:48:59 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:48:59 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:48:59 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:50:05 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:50:06 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:50:06 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:50:06 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:50:12 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:50:12 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:50:12 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:50:12 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:50:21 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:50:22 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:50:22 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:50:22 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:50:31 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:50:32 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:50:32 --> 404 Page Not Found: /index
ERROR - 2022-04-22 08:50:32 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:37:35 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:37:35 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:37:35 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:37:35 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:37:49 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:37:49 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:37:49 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:37:49 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:40:17 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:40:18 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:40:19 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:40:19 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:46:10 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:46:10 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:46:10 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:46:10 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:46:28 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:46:29 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:46:29 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:46:29 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:49:27 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:49:28 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:49:28 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:49:28 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:49:33 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:49:33 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:49:33 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:49:33 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:49:45 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:49:46 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:49:46 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:49:46 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:49:50 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:49:50 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:49:50 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:49:50 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:49:56 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:49:57 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:49:57 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:49:57 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:50:03 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:50:03 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:50:03 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:50:04 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:50:45 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:50:46 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:50:46 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:50:46 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:51:01 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:51:02 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:51:02 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:51:02 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:54:16 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:54:17 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:54:17 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:54:18 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:54:23 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:54:23 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:54:23 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:54:23 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:54:38 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:54:39 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:54:39 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:54:39 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:54:46 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:54:46 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:54:46 --> 404 Page Not Found: /index
ERROR - 2022-04-22 09:54:46 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:09:36 --> Severity: Notice --> Undefined index: draw C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 10
ERROR - 2022-04-22 10:09:36 --> Severity: Notice --> Undefined index: order C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 13
ERROR - 2022-04-22 10:09:36 --> Severity: Notice --> Undefined index: columns C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 14
ERROR - 2022-04-22 10:09:36 --> Severity: Notice --> Undefined index: order C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 15
ERROR - 2022-04-22 10:09:36 --> Severity: Notice --> Undefined index: search C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 16
ERROR - 2022-04-22 10:09:36 --> Severity: Notice --> Undefined index: draw C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 47
ERROR - 2022-04-22 10:09:49 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:09:50 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:09:50 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:09:50 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:09:55 --> Severity: Notice --> Undefined index: draw C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 10
ERROR - 2022-04-22 10:09:55 --> Severity: Notice --> Undefined index: order C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 13
ERROR - 2022-04-22 10:09:55 --> Severity: Notice --> Undefined index: columns C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 14
ERROR - 2022-04-22 10:09:55 --> Severity: Notice --> Undefined index: order C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 15
ERROR - 2022-04-22 10:09:55 --> Severity: Notice --> Undefined index: search C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 16
ERROR - 2022-04-22 10:09:55 --> Severity: Notice --> Undefined index: draw C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 47
ERROR - 2022-04-22 10:10:41 --> Severity: Notice --> Undefined index: raw C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 10
ERROR - 2022-04-22 10:10:41 --> Severity: Notice --> Undefined index: order C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 13
ERROR - 2022-04-22 10:10:41 --> Severity: Notice --> Undefined index: columns C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 14
ERROR - 2022-04-22 10:10:41 --> Severity: Notice --> Undefined index: order C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 15
ERROR - 2022-04-22 10:10:41 --> Severity: Notice --> Undefined index: search C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 16
ERROR - 2022-04-22 10:10:41 --> Severity: Notice --> Undefined index: draw C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 47
ERROR - 2022-04-22 10:10:42 --> Severity: Notice --> Undefined index: raw C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 10
ERROR - 2022-04-22 10:10:42 --> Severity: Notice --> Undefined index: order C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 13
ERROR - 2022-04-22 10:10:42 --> Severity: Notice --> Undefined index: columns C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 14
ERROR - 2022-04-22 10:10:42 --> Severity: Notice --> Undefined index: order C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 15
ERROR - 2022-04-22 10:10:42 --> Severity: Notice --> Undefined index: search C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 16
ERROR - 2022-04-22 10:10:42 --> Severity: Notice --> Undefined index: draw C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 47
ERROR - 2022-04-22 10:10:42 --> Severity: Notice --> Undefined index: raw C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 10
ERROR - 2022-04-22 10:10:42 --> Severity: Notice --> Undefined index: order C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 13
ERROR - 2022-04-22 10:10:42 --> Severity: Notice --> Undefined index: columns C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 14
ERROR - 2022-04-22 10:10:42 --> Severity: Notice --> Undefined index: order C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 15
ERROR - 2022-04-22 10:10:42 --> Severity: Notice --> Undefined index: search C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 16
ERROR - 2022-04-22 10:10:42 --> Severity: Notice --> Undefined index: draw C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 47
ERROR - 2022-04-22 10:10:42 --> Severity: Notice --> Undefined index: raw C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 10
ERROR - 2022-04-22 10:10:42 --> Severity: Notice --> Undefined index: order C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 13
ERROR - 2022-04-22 10:10:42 --> Severity: Notice --> Undefined index: columns C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 14
ERROR - 2022-04-22 10:10:42 --> Severity: Notice --> Undefined index: order C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 15
ERROR - 2022-04-22 10:10:42 --> Severity: Notice --> Undefined index: search C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 16
ERROR - 2022-04-22 10:10:42 --> Severity: Notice --> Undefined index: draw C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 47
ERROR - 2022-04-22 10:10:42 --> Severity: Notice --> Undefined index: raw C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 10
ERROR - 2022-04-22 10:10:42 --> Severity: Notice --> Undefined index: order C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 13
ERROR - 2022-04-22 10:10:42 --> Severity: Notice --> Undefined index: columns C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 14
ERROR - 2022-04-22 10:10:42 --> Severity: Notice --> Undefined index: order C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 15
ERROR - 2022-04-22 10:10:42 --> Severity: Notice --> Undefined index: search C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 16
ERROR - 2022-04-22 10:10:42 --> Severity: Notice --> Undefined index: draw C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 47
ERROR - 2022-04-22 10:10:43 --> Severity: Notice --> Undefined index: raw C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 10
ERROR - 2022-04-22 10:10:43 --> Severity: Notice --> Undefined index: order C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 13
ERROR - 2022-04-22 10:10:43 --> Severity: Notice --> Undefined index: columns C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 14
ERROR - 2022-04-22 10:10:43 --> Severity: Notice --> Undefined index: order C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 15
ERROR - 2022-04-22 10:10:43 --> Severity: Notice --> Undefined index: search C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 16
ERROR - 2022-04-22 10:10:43 --> Severity: Notice --> Undefined index: draw C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 47
ERROR - 2022-04-22 10:11:30 --> Severity: Notice --> Undefined index: draw C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 10
ERROR - 2022-04-22 10:11:30 --> Severity: Notice --> Undefined index: order C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 13
ERROR - 2022-04-22 10:11:30 --> Severity: Notice --> Undefined index: columns C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 14
ERROR - 2022-04-22 10:11:30 --> Severity: Notice --> Undefined index: order C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 15
ERROR - 2022-04-22 10:11:30 --> Severity: Notice --> Undefined index: search C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 16
ERROR - 2022-04-22 10:11:30 --> Severity: Notice --> Undefined index: draw C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 47
ERROR - 2022-04-22 10:12:31 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:12:32 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:12:32 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:12:33 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:13:20 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:13:21 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:13:21 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:13:21 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:14:30 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:14:30 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:14:30 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:14:30 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:15:04 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:15:04 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:15:04 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:15:05 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:15:15 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:15:15 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:15:15 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:15:15 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:15:27 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:15:28 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:15:28 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:15:28 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:16:01 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:16:02 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:16:02 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:16:02 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:17:27 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:17:28 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:17:28 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:17:28 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:17:31 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:17:31 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:17:31 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:17:31 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:17:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;PT JARING SOLUSI&quot;
LINE 2: WHERE &quot;company_id&quot; = 'PT JARING SOLUSI'
                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-22 10:17:35 --> Query error: ERROR:  invalid input syntax for integer: "PT JARING SOLUSI"
LINE 2: WHERE "company_id" = 'PT JARING SOLUSI'
                             ^ - Invalid query: UPDATE "mst"."t_company" SET "company_name" = 'PT JARING SOLUSI', "company_address" = 'KREKOT', "created_at" = 'now()', "created_by" = 'admin'
WHERE "company_id" = 'PT JARING SOLUSI'
ERROR - 2022-04-22 10:20:50 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:20:51 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:20:51 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:20:51 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:21:10 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:21:10 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:21:10 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:21:10 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:24:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;mst.t_company WHERE deleted_at is&quot; does not exist
LINE 2: FROM &quot;mst&quot;.&quot;t_company WHERE deleted_at is&quot; &quot;NULL&quot;
             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-22 10:24:06 --> Query error: ERROR:  relation "mst.t_company WHERE deleted_at is" does not exist
LINE 2: FROM "mst"."t_company WHERE deleted_at is" "NULL"
             ^ - Invalid query: SELECT *
FROM "mst"."t_company WHERE deleted_at is" "NULL"
ERROR - 2022-04-22 10:25:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;mst.t_company WHERE deleted_at is&quot; does not exist
LINE 2: FROM &quot;mst&quot;.&quot;t_company WHERE deleted_at is&quot; &quot;NULL&quot;
             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-22 10:25:37 --> Query error: ERROR:  relation "mst.t_company WHERE deleted_at is" does not exist
LINE 2: FROM "mst"."t_company WHERE deleted_at is" "NULL"
             ^ - Invalid query: SELECT *
FROM "mst"."t_company WHERE deleted_at is" "NULL"
ERROR - 2022-04-22 10:41:12 --> Severity: error --> Exception: Call to undefined method CI_DB_postgre_driver::num_rows() C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 65
ERROR - 2022-04-22 10:41:16 --> Severity: error --> Exception: Call to undefined method CI_DB_postgre_driver::num_rows() C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 65
ERROR - 2022-04-22 10:41:16 --> Severity: error --> Exception: Call to undefined method CI_DB_postgre_driver::num_rows() C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 65
ERROR - 2022-04-22 10:41:16 --> Severity: error --> Exception: Call to undefined method CI_DB_postgre_driver::num_rows() C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 65
ERROR - 2022-04-22 10:41:16 --> Severity: error --> Exception: Call to undefined method CI_DB_postgre_driver::num_rows() C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 65
ERROR - 2022-04-22 10:41:16 --> Severity: error --> Exception: Call to undefined method CI_DB_postgre_driver::num_rows() C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 65
ERROR - 2022-04-22 10:41:17 --> Severity: error --> Exception: Call to undefined method CI_DB_postgre_driver::num_rows() C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 65
ERROR - 2022-04-22 10:41:17 --> Severity: error --> Exception: Call to undefined method CI_DB_postgre_driver::num_rows() C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 65
ERROR - 2022-04-22 10:41:51 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:41:52 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:41:52 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:41:53 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:44:12 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:44:13 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:44:13 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:44:14 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:44:32 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:44:33 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:44:33 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:44:33 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:45:02 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:45:02 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:45:02 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:45:03 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:45:06 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:45:06 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:45:06 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:45:06 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:46:46 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:46:48 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:46:48 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:46:48 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:46:56 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:46:56 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:46:56 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:46:56 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:47:13 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:47:14 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:47:14 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:47:14 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:48:07 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:48:08 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:48:08 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:48:08 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:48:22 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:48:22 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:48:22 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:48:23 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:48:31 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:48:32 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:48:32 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:48:32 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:48:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;PT JARING SOLUSI&quot;
LINE 2: WHERE &quot;company_id&quot; = 'PT JARING SOLUSI'
                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-22 10:48:44 --> Query error: ERROR:  invalid input syntax for integer: "PT JARING SOLUSI"
LINE 2: WHERE "company_id" = 'PT JARING SOLUSI'
                             ^ - Invalid query: UPDATE "mst"."t_company" SET "company_name" = 'PT JARING SOLUSI', "company_address" = 'KREKOT 26', "created_at" = 'now()', "created_by" = 'admin'
WHERE "company_id" = 'PT JARING SOLUSI'
ERROR - 2022-04-22 10:49:33 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:49:34 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:49:34 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:49:34 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:49:37 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:49:37 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:49:37 --> 404 Page Not Found: /index
ERROR - 2022-04-22 10:49:37 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:23:59 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:24:00 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:24:00 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:24:00 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:24:08 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:24:08 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:24:08 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:24:08 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:24:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;NOT&quot;
LINE 3: WHERE deleted_at NOT NULL
                         ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-22 11:24:11 --> Query error: ERROR:  syntax error at or near "NOT"
LINE 3: WHERE deleted_at NOT NULL
                         ^ - Invalid query: SELECT *
FROM "mst"."t_company"
WHERE deleted_at NOT NULL
ERROR - 2022-04-22 11:24:32 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:24:32 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:24:33 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:24:33 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:24:40 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:24:40 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:24:40 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:24:40 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:24:45 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:24:45 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:24:45 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:24:45 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:24:49 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:24:49 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:24:49 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:24:50 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:26:11 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:26:12 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:26:12 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:26:12 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:26:18 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:26:18 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:26:18 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:26:19 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:26:24 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:26:25 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:26:25 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:26:25 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:27:15 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:27:16 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:27:16 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:27:16 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:27:31 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:27:31 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:27:31 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:27:32 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:27:38 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:27:38 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:27:38 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:27:38 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:28:47 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:28:47 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:28:47 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:28:47 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:28:56 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:28:56 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:28:56 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:28:56 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:29:04 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:29:04 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:29:04 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:29:05 --> 404 Page Not Found: /index
ERROR - 2022-04-22 11:32:06 --> 404 Page Not Found: ../modules/mst/controllers//index
ERROR - 2022-04-22 11:38:56 --> 404 Page Not Found: ../modules/mst/controllers/C_room/index
ERROR - 2022-04-22 11:42:32 --> 404 Page Not Found: ../modules/mst/controllers/C_room/index
ERROR - 2022-04-22 11:46:41 --> 404 Page Not Found: ../modules/mst/controllers/C_room/index
ERROR - 2022-04-22 12:24:30 --> Severity: error --> Exception: Class 'M_room' not found C:\laragon\www\codeapp\application\third_party\MX\Loader.php 228
ERROR - 2022-04-22 13:25:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;NULL&quot;
LINE 1: ..._id FROM mst.t_room WHERE r.deleted_at=deleted_at NULL LEFT ...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-22 13:25:32 --> Query error: ERROR:  syntax error at or near "NULL"
LINE 1: ..._id FROM mst.t_room WHERE r.deleted_at=deleted_at NULL LEFT ...
                                                             ^ - Invalid query: WITH x AS (SELECT r.room_name,r.room_id,r.deleted_at,g.gedung_id,c.company_id FROM mst.t_room WHERE r.deleted_at=deleted_at NULL LEFT JOIN mst.t_company ON c.company_id = company_id LEFT JOIN mst.t_gedung ON g.gedung_id = gedung_id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_room WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_room WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-22 13:26:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;c&quot;
LINE 1: ...any_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-22 13:26:40 --> Query error: ERROR:  missing FROM-clause entry for table "c"
LINE 1: ...any_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_...
                                                             ^ - Invalid query: WITH x AS (SELECT r.room_name,r.room_id,g.gedung_id,c.company_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_id = company_id LEFT JOIN mst.t_gedung ON g.gedung_id = gedung_id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_room WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_room WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-22 13:26:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;c&quot;
LINE 1: ...any_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-22 13:26:40 --> Query error: ERROR:  missing FROM-clause entry for table "c"
LINE 1: ...any_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_...
                                                             ^ - Invalid query: WITH x AS (SELECT r.room_name,r.room_id,g.gedung_id,c.company_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_id = company_id LEFT JOIN mst.t_gedung ON g.gedung_id = gedung_id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_room WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_room WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-22 13:26:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;c&quot;
LINE 1: ...any_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-22 13:26:41 --> Query error: ERROR:  missing FROM-clause entry for table "c"
LINE 1: ...any_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_...
                                                             ^ - Invalid query: WITH x AS (SELECT r.room_name,r.room_id,g.gedung_id,c.company_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_id = company_id LEFT JOIN mst.t_gedung ON g.gedung_id = gedung_id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_room WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_room WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-22 13:26:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;c&quot;
LINE 1: ...any_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-22 13:26:41 --> Query error: ERROR:  missing FROM-clause entry for table "c"
LINE 1: ...any_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_...
                                                             ^ - Invalid query: WITH x AS (SELECT r.room_name,r.room_id,g.gedung_id,c.company_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_id = company_id LEFT JOIN mst.t_gedung ON g.gedung_id = gedung_id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_room WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_room WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-22 13:26:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;c&quot;
LINE 1: ...any_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-22 13:26:41 --> Query error: ERROR:  missing FROM-clause entry for table "c"
LINE 1: ...any_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_...
                                                             ^ - Invalid query: WITH x AS (SELECT r.room_name,r.room_id,g.gedung_id,c.company_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_id = company_id LEFT JOIN mst.t_gedung ON g.gedung_id = gedung_id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_room WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_room WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-22 13:26:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;c&quot;
LINE 1: ...any_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-22 13:26:41 --> Query error: ERROR:  missing FROM-clause entry for table "c"
LINE 1: ...any_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_...
                                                             ^ - Invalid query: WITH x AS (SELECT r.room_name,r.room_id,g.gedung_id,c.company_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_id = company_id LEFT JOIN mst.t_gedung ON g.gedung_id = gedung_id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_room WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_room WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-22 13:27:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;c&quot;
LINE 1: ...any_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-22 13:27:17 --> Query error: ERROR:  missing FROM-clause entry for table "c"
LINE 1: ...any_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_...
                                                             ^ - Invalid query: WITH x AS (SELECT r.room_name,r.room_id,g.gedung_id,c.company_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_id = company_id LEFT JOIN mst.t_gedung ON g.gedung_id = gedung_id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_room WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_room WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-22 13:27:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;c&quot;
LINE 1: ...any_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-22 13:27:18 --> Query error: ERROR:  missing FROM-clause entry for table "c"
LINE 1: ...any_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_...
                                                             ^ - Invalid query: WITH x AS (SELECT r.room_name,r.room_id,g.gedung_id,c.company_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_id = company_id LEFT JOIN mst.t_gedung ON g.gedung_id = gedung_id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_room WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_room WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-22 13:27:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;c&quot;
LINE 1: ...any_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-22 13:27:18 --> Query error: ERROR:  missing FROM-clause entry for table "c"
LINE 1: ...any_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_...
                                                             ^ - Invalid query: WITH x AS (SELECT r.room_name,r.room_id,g.gedung_id,c.company_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_id = company_id LEFT JOIN mst.t_gedung ON g.gedung_id = gedung_id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_room WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_room WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-22 13:27:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;c&quot;
LINE 1: ...any_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-22 13:27:18 --> Query error: ERROR:  missing FROM-clause entry for table "c"
LINE 1: ...any_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_...
                                                             ^ - Invalid query: WITH x AS (SELECT r.room_name,r.room_id,g.gedung_id,c.company_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_id = company_id LEFT JOIN mst.t_gedung ON g.gedung_id = gedung_id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_room WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_room WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-22 13:27:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;c&quot;
LINE 1: ...any_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-22 13:27:19 --> Query error: ERROR:  missing FROM-clause entry for table "c"
LINE 1: ...any_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_...
                                                             ^ - Invalid query: WITH x AS (SELECT r.room_name,r.room_id,g.gedung_id,c.company_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_id = company_id LEFT JOIN mst.t_gedung ON g.gedung_id = gedung_id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_room WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_room WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-22 13:28:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;c&quot;
LINE 1: ...any_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-22 13:28:09 --> Query error: ERROR:  missing FROM-clause entry for table "c"
LINE 1: ...any_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_...
                                                             ^ - Invalid query: WITH x AS (SELECT r.room_name,r.room_id,g.gedung_id,c.company_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_id = company_id LEFT JOIN mst.t_gedung ON g.gedung_id = gedung_id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_room WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_room WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-22 13:28:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;c&quot;
LINE 1: ...any_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-22 13:28:09 --> Query error: ERROR:  missing FROM-clause entry for table "c"
LINE 1: ...any_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_...
                                                             ^ - Invalid query: WITH x AS (SELECT r.room_name,r.room_id,g.gedung_id,c.company_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_id = company_id LEFT JOIN mst.t_gedung ON g.gedung_id = gedung_id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_room WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_room WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-22 13:28:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;c&quot;
LINE 1: ...any_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-22 13:28:09 --> Query error: ERROR:  missing FROM-clause entry for table "c"
LINE 1: ...any_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_...
                                                             ^ - Invalid query: WITH x AS (SELECT r.room_name,r.room_id,g.gedung_id,c.company_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_id = company_id LEFT JOIN mst.t_gedung ON g.gedung_id = gedung_id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_room WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_room WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-22 13:28:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;c&quot;
LINE 1: ...any_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-22 13:28:10 --> Query error: ERROR:  missing FROM-clause entry for table "c"
LINE 1: ...any_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_...
                                                             ^ - Invalid query: WITH x AS (SELECT r.room_name,r.room_id,g.gedung_id,c.company_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_id = company_id LEFT JOIN mst.t_gedung ON g.gedung_id = gedung_id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_room WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_room WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-22 13:28:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;c&quot;
LINE 1: ...any_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-22 13:28:10 --> Query error: ERROR:  missing FROM-clause entry for table "c"
LINE 1: ...any_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_...
                                                             ^ - Invalid query: WITH x AS (SELECT r.room_name,r.room_id,g.gedung_id,c.company_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_id = company_id LEFT JOIN mst.t_gedung ON g.gedung_id = gedung_id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_room WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_room WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-22 13:28:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;c&quot;
LINE 1: ...any_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-22 13:28:10 --> Query error: ERROR:  missing FROM-clause entry for table "c"
LINE 1: ...any_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_...
                                                             ^ - Invalid query: WITH x AS (SELECT r.room_name,r.room_id,g.gedung_id,c.company_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_id = company_id LEFT JOIN mst.t_gedung ON g.gedung_id = gedung_id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_room WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_room WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-22 13:28:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;c&quot;
LINE 1: ...any_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-22 13:28:10 --> Query error: ERROR:  missing FROM-clause entry for table "c"
LINE 1: ...any_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_...
                                                             ^ - Invalid query: WITH x AS (SELECT r.room_name,r.room_id,g.gedung_id,c.company_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_id = company_id LEFT JOIN mst.t_gedung ON g.gedung_id = gedung_id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_room WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_room WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-22 13:28:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;c&quot;
LINE 1: ...any_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-22 13:28:10 --> Query error: ERROR:  missing FROM-clause entry for table "c"
LINE 1: ...any_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_...
                                                             ^ - Invalid query: WITH x AS (SELECT r.room_name,r.room_id,g.gedung_id,c.company_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_id = company_id LEFT JOIN mst.t_gedung ON g.gedung_id = gedung_id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_room WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_room WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-22 13:28:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;c&quot;
LINE 1: ...any_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-22 13:28:10 --> Query error: ERROR:  missing FROM-clause entry for table "c"
LINE 1: ...any_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_...
                                                             ^ - Invalid query: WITH x AS (SELECT r.room_name,r.room_id,g.gedung_id,c.company_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_id = company_id LEFT JOIN mst.t_gedung ON g.gedung_id = gedung_id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_room WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_room WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-22 13:28:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;c&quot;
LINE 1: ...any_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-22 13:28:10 --> Query error: ERROR:  missing FROM-clause entry for table "c"
LINE 1: ...any_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_...
                                                             ^ - Invalid query: WITH x AS (SELECT r.room_name,r.room_id,g.gedung_id,c.company_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_id = company_id LEFT JOIN mst.t_gedung ON g.gedung_id = gedung_id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_room WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_room WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-22 13:28:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;c&quot;
LINE 1: ...any_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-22 13:28:11 --> Query error: ERROR:  missing FROM-clause entry for table "c"
LINE 1: ...any_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_...
                                                             ^ - Invalid query: WITH x AS (SELECT r.room_name,r.room_id,g.gedung_id,c.company_id FROM mst.t_room LEFT JOIN mst.t_company ON c.company_id = company_id LEFT JOIN mst.t_gedung ON g.gedung_id = gedung_id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_room WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_room WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
