<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-04-23 03:30:55 --> 404 Page Not Found: ../modules/mst/controllers//index
ERROR - 2022-04-23 03:30:55 --> 404 Page Not Found: /index
ERROR - 2022-04-23 03:54:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;mst&quot;
LINE 1: ...dung_id FROM mst.t_room left join mst.t_gedung ON mst.gedung...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 03:54:07 --> Query error: ERROR:  missing FROM-clause entry for table "mst"
LINE 1: ...dung_id FROM mst.t_room left join mst.t_gedung ON mst.gedung...
                                                             ^ - Invalid query: WITH x AS (SELECT room_id,room_name,created_at,created_by,gedung_id FROM mst.t_room left join mst.t_gedung ON mst.gedung_id = mst.gedung_id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_room WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_room WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 03:55:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;g&quot;
LINE 1: ...dung_id FROM mst.t_room left join mst.t_gedung ON mst.g.gedu...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 03:55:24 --> Query error: ERROR:  missing FROM-clause entry for table "g"
LINE 1: ...dung_id FROM mst.t_room left join mst.t_gedung ON mst.g.gedu...
                                                             ^ - Invalid query: WITH x AS (SELECT room_id,room_name,created_at,created_by,g.gedung_id FROM mst.t_room left join mst.t_gedung ON mst.g.gedung_id = mst.gedung_id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_room WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_room WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 03:55:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;g&quot;
LINE 1: ...dung_id FROM mst.t_room left join mst.t_gedung ON mst.g.gedu...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 03:55:25 --> Query error: ERROR:  missing FROM-clause entry for table "g"
LINE 1: ...dung_id FROM mst.t_room left join mst.t_gedung ON mst.g.gedu...
                                                             ^ - Invalid query: WITH x AS (SELECT room_id,room_name,created_at,created_by,g.gedung_id FROM mst.t_room left join mst.t_gedung ON mst.g.gedung_id = mst.gedung_id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_room WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_room WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 03:55:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;g&quot;
LINE 1: ...dung_id FROM mst.t_room left join mst.t_gedung ON mst.g.gedu...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 03:55:25 --> Query error: ERROR:  missing FROM-clause entry for table "g"
LINE 1: ...dung_id FROM mst.t_room left join mst.t_gedung ON mst.g.gedu...
                                                             ^ - Invalid query: WITH x AS (SELECT room_id,room_name,created_at,created_by,g.gedung_id FROM mst.t_room left join mst.t_gedung ON mst.g.gedung_id = mst.gedung_id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_room WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_room WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 03:55:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;g&quot;
LINE 1: ...dung_id FROM mst.t_room left join mst.t_gedung ON mst.g.gedu...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 03:55:25 --> Query error: ERROR:  missing FROM-clause entry for table "g"
LINE 1: ...dung_id FROM mst.t_room left join mst.t_gedung ON mst.g.gedu...
                                                             ^ - Invalid query: WITH x AS (SELECT room_id,room_name,created_at,created_by,g.gedung_id FROM mst.t_room left join mst.t_gedung ON mst.g.gedung_id = mst.gedung_id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_room WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_room WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 03:55:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;g&quot;
LINE 1: ...dung_id FROM mst.t_room left join mst.t_gedung ON mst.g.gedu...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 03:55:25 --> Query error: ERROR:  missing FROM-clause entry for table "g"
LINE 1: ...dung_id FROM mst.t_room left join mst.t_gedung ON mst.g.gedu...
                                                             ^ - Invalid query: WITH x AS (SELECT room_id,room_name,created_at,created_by,g.gedung_id FROM mst.t_room left join mst.t_gedung ON mst.g.gedung_id = mst.gedung_id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_room WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_room WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 03:55:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;g&quot;
LINE 1: ...dung_id FROM mst.t_room left join mst.t_gedung ON mst.g.gedu...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 03:55:26 --> Query error: ERROR:  missing FROM-clause entry for table "g"
LINE 1: ...dung_id FROM mst.t_room left join mst.t_gedung ON mst.g.gedu...
                                                             ^ - Invalid query: WITH x AS (SELECT room_id,room_name,created_at,created_by,g.gedung_id FROM mst.t_room left join mst.t_gedung ON mst.g.gedung_id = mst.gedung_id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_room WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_room WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 03:55:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;g&quot;
LINE 1: ...dung_id FROM mst.t_room left join mst.t_gedung ON mst.g.gedu...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 03:55:26 --> Query error: ERROR:  missing FROM-clause entry for table "g"
LINE 1: ...dung_id FROM mst.t_room left join mst.t_gedung ON mst.g.gedu...
                                                             ^ - Invalid query: WITH x AS (SELECT room_id,room_name,created_at,created_by,g.gedung_id FROM mst.t_room left join mst.t_gedung ON mst.g.gedung_id = mst.gedung_id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_room WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_room WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 03:59:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  cross-database references are not implemented: mst.t_gedung.g.gedung_id
LINE 1: ... left join mst.t_gedung ON mst.t_room.gedung_id = mst.t_gedu...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 03:59:55 --> Query error: ERROR:  cross-database references are not implemented: mst.t_gedung.g.gedung_id
LINE 1: ... left join mst.t_gedung ON mst.t_room.gedung_id = mst.t_gedu...
                                                             ^ - Invalid query: WITH x AS (SELECT room_id,room_name,created_at,created_by,g.gedung_id FROM mst.t_room left join mst.t_gedung ON mst.t_room.gedung_id = mst.t_gedung.g.gedung_id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_room WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_room WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 03:59:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  cross-database references are not implemented: mst.t_gedung.g.gedung_id
LINE 1: ... left join mst.t_gedung ON mst.t_room.gedung_id = mst.t_gedu...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 03:59:56 --> Query error: ERROR:  cross-database references are not implemented: mst.t_gedung.g.gedung_id
LINE 1: ... left join mst.t_gedung ON mst.t_room.gedung_id = mst.t_gedu...
                                                             ^ - Invalid query: WITH x AS (SELECT room_id,room_name,created_at,created_by,g.gedung_id FROM mst.t_room left join mst.t_gedung ON mst.t_room.gedung_id = mst.t_gedung.g.gedung_id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_room WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_room WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 03:59:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  cross-database references are not implemented: mst.t_gedung.g.gedung_id
LINE 1: ... left join mst.t_gedung ON mst.t_room.gedung_id = mst.t_gedu...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 03:59:56 --> Query error: ERROR:  cross-database references are not implemented: mst.t_gedung.g.gedung_id
LINE 1: ... left join mst.t_gedung ON mst.t_room.gedung_id = mst.t_gedu...
                                                             ^ - Invalid query: WITH x AS (SELECT room_id,room_name,created_at,created_by,g.gedung_id FROM mst.t_room left join mst.t_gedung ON mst.t_room.gedung_id = mst.t_gedung.g.gedung_id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_room WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_room WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 03:59:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  cross-database references are not implemented: mst.t_gedung.g.gedung_id
LINE 1: ... left join mst.t_gedung ON mst.t_room.gedung_id = mst.t_gedu...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 03:59:57 --> Query error: ERROR:  cross-database references are not implemented: mst.t_gedung.g.gedung_id
LINE 1: ... left join mst.t_gedung ON mst.t_room.gedung_id = mst.t_gedu...
                                                             ^ - Invalid query: WITH x AS (SELECT room_id,room_name,created_at,created_by,g.gedung_id FROM mst.t_room left join mst.t_gedung ON mst.t_room.gedung_id = mst.t_gedung.g.gedung_id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_room WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_room WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 03:59:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  cross-database references are not implemented: mst.t_gedung.g.gedung_id
LINE 1: ... left join mst.t_gedung ON mst.t_room.gedung_id = mst.t_gedu...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 03:59:57 --> Query error: ERROR:  cross-database references are not implemented: mst.t_gedung.g.gedung_id
LINE 1: ... left join mst.t_gedung ON mst.t_room.gedung_id = mst.t_gedu...
                                                             ^ - Invalid query: WITH x AS (SELECT room_id,room_name,created_at,created_by,g.gedung_id FROM mst.t_room left join mst.t_gedung ON mst.t_room.gedung_id = mst.t_gedung.g.gedung_id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_room WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_room WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 03:59:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  cross-database references are not implemented: mst.t_gedung.g.gedung_id
LINE 1: ... left join mst.t_gedung ON mst.t_room.gedung_id = mst.t_gedu...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 03:59:57 --> Query error: ERROR:  cross-database references are not implemented: mst.t_gedung.g.gedung_id
LINE 1: ... left join mst.t_gedung ON mst.t_room.gedung_id = mst.t_gedu...
                                                             ^ - Invalid query: WITH x AS (SELECT room_id,room_name,created_at,created_by,g.gedung_id FROM mst.t_room left join mst.t_gedung ON mst.t_room.gedung_id = mst.t_gedung.g.gedung_id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_room WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_room WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 03:59:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  cross-database references are not implemented: mst.t_gedung.g.gedung_id
LINE 1: ... left join mst.t_gedung ON mst.t_room.gedung_id = mst.t_gedu...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 03:59:57 --> Query error: ERROR:  cross-database references are not implemented: mst.t_gedung.g.gedung_id
LINE 1: ... left join mst.t_gedung ON mst.t_room.gedung_id = mst.t_gedu...
                                                             ^ - Invalid query: WITH x AS (SELECT room_id,room_name,created_at,created_by,g.gedung_id FROM mst.t_room left join mst.t_gedung ON mst.t_room.gedung_id = mst.t_gedung.g.gedung_id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_room WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_room WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 03:59:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  cross-database references are not implemented: mst.t_gedung.g.gedung_id
LINE 1: ... left join mst.t_gedung ON mst.t_room.gedung_id = mst.t_gedu...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 03:59:58 --> Query error: ERROR:  cross-database references are not implemented: mst.t_gedung.g.gedung_id
LINE 1: ... left join mst.t_gedung ON mst.t_room.gedung_id = mst.t_gedu...
                                                             ^ - Invalid query: WITH x AS (SELECT room_id,room_name,created_at,created_by,g.gedung_id FROM mst.t_room left join mst.t_gedung ON mst.t_room.gedung_id = mst.t_gedung.g.gedung_id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_room WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_room WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 03:59:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  cross-database references are not implemented: mst.t_gedung.g.gedung_id
LINE 1: ... left join mst.t_gedung ON mst.t_room.gedung_id = mst.t_gedu...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 03:59:58 --> Query error: ERROR:  cross-database references are not implemented: mst.t_gedung.g.gedung_id
LINE 1: ... left join mst.t_gedung ON mst.t_room.gedung_id = mst.t_gedu...
                                                             ^ - Invalid query: WITH x AS (SELECT room_id,room_name,created_at,created_by,g.gedung_id FROM mst.t_room left join mst.t_gedung ON mst.t_room.gedung_id = mst.t_gedung.g.gedung_id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_room WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_room WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 04:12:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;NUL&quot;
LINE 1: ...st.t_company.company_id WHERE mst.t_room.deleted_at is NUL),
                                                                  ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 04:12:19 --> Query error: ERROR:  syntax error at or near "NUL"
LINE 1: ...st.t_company.company_id WHERE mst.t_room.deleted_at is NUL),
                                                                  ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_room LEFT JOIN mst.t_gedung ON mst.t_room.gedung_id=mst.t_gedung.gedung_id JOIN mst.t_company ON mst.t_gedung.company_id=mst.t_company.company_id WHERE mst.t_room.deleted_at is NUL),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_room WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_room WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 04:16:45 --> 404 Page Not Found: ../modules/mst/controllers//index
ERROR - 2022-04-23 04:26:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;company_name&quot; of relation &quot;t_m_user&quot; does not exist
LINE 1: ...&quot;n_name&quot; = 'nurul hidayah', &quot;n_user&quot; = 'bheo2nd', &quot;company_n...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 04:26:21 --> Query error: ERROR:  column "company_name" of relation "t_m_user" does not exist
LINE 1: ..."n_name" = 'nurul hidayah', "n_user" = 'bheo2nd', "company_n...
                                                             ^ - Invalid query: UPDATE "svc"."t_m_user" SET "c_role" = 'CRO0005', "n_name" = 'nurul hidayah', "n_user" = 'bheo2nd', "company_name" = NULL, "n_mail" = 'bheo93@gmail.com', "n_phone" = '0816752313', "d_modif" = 'now()', "e_modif" = 'admin'
WHERE "n_user" = 'bheo2nd'
ERROR - 2022-04-23 04:26:26 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:26:26 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:26:26 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:26:26 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:26:37 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:26:37 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:26:37 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:26:37 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:26:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;company_name&quot; of relation &quot;t_m_user&quot; does not exist
LINE 1: ...&quot;n_name&quot; = 'nurul hidayah', &quot;n_user&quot; = 'bheo2nd', &quot;company_n...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 04:26:52 --> Query error: ERROR:  column "company_name" of relation "t_m_user" does not exist
LINE 1: ..."n_name" = 'nurul hidayah', "n_user" = 'bheo2nd', "company_n...
                                                             ^ - Invalid query: UPDATE "svc"."t_m_user" SET "c_role" = 'CRO0005', "n_name" = 'nurul hidayah', "n_user" = 'bheo2nd', "company_name" = NULL, "n_mail" = 'bheo93@gmail.com', "n_phone" = '0816752313', "d_modif" = 'now()', "e_modif" = 'admin'
WHERE "n_user" = 'bheo2nd'
ERROR - 2022-04-23 04:27:04 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:27:05 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:27:05 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:27:05 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:27:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;company_name&quot; of relation &quot;t_m_user&quot; does not exist
LINE 1: ...&quot;n_name&quot; = 'nurul hidayah', &quot;n_user&quot; = 'bheo2nd', &quot;company_n...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 04:27:35 --> Query error: ERROR:  column "company_name" of relation "t_m_user" does not exist
LINE 1: ..."n_name" = 'nurul hidayah', "n_user" = 'bheo2nd', "company_n...
                                                             ^ - Invalid query: UPDATE "svc"."t_m_user" SET "c_role" = 'CRO0005', "n_name" = 'nurul hidayah', "n_user" = 'bheo2nd', "company_name" = NULL, "n_mail" = 'bheo93@gmail.com', "n_phone" = '0816752313', "d_modif" = 'now()', "e_modif" = 'admin'
WHERE "n_user" = 'bheo2nd'
ERROR - 2022-04-23 04:28:12 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:28:13 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:28:13 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:28:14 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:28:29 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:28:29 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:28:29 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:28:30 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:28:45 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:28:46 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:28:46 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:28:46 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:29:21 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:29:22 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:29:22 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:29:22 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:29:34 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:29:34 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:29:34 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:29:34 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:29:38 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:29:39 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:29:39 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:29:39 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:29:53 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:29:53 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:29:53 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:29:54 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:29:58 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:29:58 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:29:58 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:29:58 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:30:17 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:30:17 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:30:17 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:30:18 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:30:32 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:30:32 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:30:32 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:30:32 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:30:37 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:30:38 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:30:38 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:30:38 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:30:45 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:30:45 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:30:45 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:30:46 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:30:53 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:30:54 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:30:54 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:30:54 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:30:57 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:30:57 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:30:57 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:30:57 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:35:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;company_name&quot; of relation &quot;t_m_user&quot; does not exist
LINE 1: ...&quot;n_name&quot; = 'nurul hidayah', &quot;n_user&quot; = 'bheo2nd', &quot;company_n...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 04:35:51 --> Query error: ERROR:  column "company_name" of relation "t_m_user" does not exist
LINE 1: ..."n_name" = 'nurul hidayah', "n_user" = 'bheo2nd', "company_n...
                                                             ^ - Invalid query: UPDATE "svc"."t_m_user" SET "c_role" = 'CRO0005', "n_name" = 'nurul hidayah', "n_user" = 'bheo2nd', "company_name" = NULL, "n_mail" = 'bheo93@gmail.com', "n_phone" = '0816752313', "d_modif" = 'now()', "e_modif" = 'admin'
WHERE "n_user" = 'bheo2nd'
ERROR - 2022-04-23 04:35:54 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:35:54 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:35:54 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:35:54 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:36:04 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:36:04 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:36:04 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:36:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;company_name&quot; of relation &quot;t_m_user&quot; does not exist
LINE 1: ...&quot;n_name&quot; = 'nurul hidayah', &quot;n_user&quot; = 'bheo2nd', &quot;company_n...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 04:36:23 --> Query error: ERROR:  column "company_name" of relation "t_m_user" does not exist
LINE 1: ..."n_name" = 'nurul hidayah', "n_user" = 'bheo2nd', "company_n...
                                                             ^ - Invalid query: UPDATE "svc"."t_m_user" SET "c_role" = 'CRO0005', "n_name" = 'nurul hidayah', "n_user" = 'bheo2nd', "company_name" = NULL, "n_mail" = 'bheo93@gmail.com', "n_phone" = '0816752313', "d_modif" = 'now()', "e_modif" = 'admin'
WHERE "n_user" = 'bheo2nd'
ERROR - 2022-04-23 04:37:12 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:37:14 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:37:14 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:37:14 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:37:28 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:37:28 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:37:28 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:37:28 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:37:36 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:37:36 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:37:36 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:37:36 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:37:51 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:37:51 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:37:51 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:37:51 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:41:11 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:41:12 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:41:12 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:41:12 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:42:41 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:42:42 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:42:42 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:42:42 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:43:03 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:43:03 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:43:03 --> 404 Page Not Found: /index
ERROR - 2022-04-23 04:43:04 --> 404 Page Not Found: /index
ERROR - 2022-04-23 05:07:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: ... WHERE mst.t_gedung.deleted_at is NULL   order by a.d_entry ...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:07:08 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: ... WHERE mst.t_gedung.deleted_at is NULL   order by a.d_entry ...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL   order by a.d_entry desc limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:07:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: ... WHERE mst.t_gedung.deleted_at is NULL   order by a.d_entry ...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:07:52 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: ... WHERE mst.t_gedung.deleted_at is NULL   order by a.d_entry ...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL   order by a.d_entry desc limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:07:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: ... WHERE mst.t_gedung.deleted_at is NULL   order by a.d_entry ...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:07:53 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: ... WHERE mst.t_gedung.deleted_at is NULL   order by a.d_entry ...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL   order by a.d_entry desc limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:07:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: ... WHERE mst.t_gedung.deleted_at is NULL   order by a.d_entry ...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:07:53 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: ... WHERE mst.t_gedung.deleted_at is NULL   order by a.d_entry ...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL   order by a.d_entry desc limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:07:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: ... WHERE mst.t_gedung.deleted_at is NULL   order by a.d_entry ...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:07:53 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: ... WHERE mst.t_gedung.deleted_at is NULL   order by a.d_entry ...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL   order by a.d_entry desc limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:07:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: ... WHERE mst.t_gedung.deleted_at is NULL   order by a.d_entry ...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:07:53 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: ... WHERE mst.t_gedung.deleted_at is NULL   order by a.d_entry ...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL   order by a.d_entry desc limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:07:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: ... WHERE mst.t_gedung.deleted_at is NULL   order by a.d_entry ...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:07:53 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: ... WHERE mst.t_gedung.deleted_at is NULL   order by a.d_entry ...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL   order by a.d_entry desc limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:15:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;address_name&quot; does not exist
LINE 1: ...deleted_at is NULL  AND (gedung_name like'%J%' or address_na...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:15:09 --> Query error: ERROR:  column "address_name" does not exist
LINE 1: ...deleted_at is NULL  AND (gedung_name like'%J%' or address_na...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  AND (gedung_name like'%J%' or address_name like'%J%' ) ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:15:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;address_name&quot; does not exist
LINE 1: ...deleted_at is NULL  AND (gedung_name like'%J%' or address_na...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:15:14 --> Query error: ERROR:  column "address_name" does not exist
LINE 1: ...deleted_at is NULL  AND (gedung_name like'%J%' or address_na...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  AND (gedung_name like'%J%' or address_name like'%J%' ) ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:20:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by a.d_entry ...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:20:39 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by a.d_entry ...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by a.d_entry desc limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:21:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by a.d_entry ...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:21:01 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by a.d_entry ...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by a.d_entry desc),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:21:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by a.d_entry ...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:21:02 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by a.d_entry ...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by a.d_entry desc),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:21:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by a.d_entry ...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:21:02 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by a.d_entry ...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by a.d_entry desc),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:21:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by a.d_entry ...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:21:03 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by a.d_entry ...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by a.d_entry desc),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:22:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by a.d_entry ...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:22:16 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by a.d_entry ...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by a.d_entry desc),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL ),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:23:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by a.d_entry ...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:23:32 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by a.d_entry ...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by a.d_entry desc),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL ),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:23:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by a.d_entry ...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:23:32 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by a.d_entry ...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by a.d_entry desc),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL ),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:28:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:28:34 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by d_entry desc limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:29:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:29:15 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by d_entry desc limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:29:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:29:16 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by d_entry desc limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:29:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:29:16 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by d_entry desc limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:29:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:29:16 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by d_entry desc limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:29:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:29:16 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by d_entry desc limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:29:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:29:16 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by d_entry desc limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:29:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:29:17 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by d_entry desc limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:29:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:29:17 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by d_entry desc limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:29:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:29:17 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by d_entry desc limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:29:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:29:17 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by d_entry desc limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:29:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:29:19 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by d_entry desc limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:29:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:29:19 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by d_entry desc limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:30:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ...L  and mst.t_company.company_id = '14'   order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:30:26 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ...L  and mst.t_company.company_id = '14'   order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  and mst.t_company.company_id = '14'   order by d_entry desc limit 10 offset 0 ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:30:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ...L  and mst.t_company.company_id = '14'   order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:30:27 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ...L  and mst.t_company.company_id = '14'   order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  and mst.t_company.company_id = '14'   order by d_entry desc limit 10 offset 0 ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:30:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ...L  and mst.t_company.company_id = '14'   order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:30:27 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ...L  and mst.t_company.company_id = '14'   order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  and mst.t_company.company_id = '14'   order by d_entry desc limit 10 offset 0 ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:30:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ...L  and mst.t_company.company_id = '14'   order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:30:27 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ...L  and mst.t_company.company_id = '14'   order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  and mst.t_company.company_id = '14'   order by d_entry desc limit 10 offset 0 ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:30:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ...L  and mst.t_company.company_id = '14'   order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:30:28 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ...L  and mst.t_company.company_id = '14'   order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  and mst.t_company.company_id = '14'   order by d_entry desc limit 10 offset 0 ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:30:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ...L  and mst.t_company.company_id = '14'   order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:30:28 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ...L  and mst.t_company.company_id = '14'   order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  and mst.t_company.company_id = '14'   order by d_entry desc limit 10 offset 0 ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:31:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;company_id&quot; is ambiguous
LINE 1: ...any_id WHERE mst.t_gedung.deleted_at is NULL  and company_id...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:31:09 --> Query error: ERROR:  column reference "company_id" is ambiguous
LINE 1: ...any_id WHERE mst.t_gedung.deleted_at is NULL  and company_id...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  and company_id = '14'   order by d_entry desc limit 10 offset 0 ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:31:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ... WHERE mst.t_gedung.deleted_at is NULL   order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:31:32 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ... WHERE mst.t_gedung.deleted_at is NULL   order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL   order by d_entry desc limit 10 offset 0 ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:31:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ... WHERE mst.t_gedung.deleted_at is NULL   order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:31:33 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ... WHERE mst.t_gedung.deleted_at is NULL   order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL   order by d_entry desc limit 10 offset 0 ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:31:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ... WHERE mst.t_gedung.deleted_at is NULL   order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:31:33 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ... WHERE mst.t_gedung.deleted_at is NULL   order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL   order by d_entry desc limit 10 offset 0 ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:31:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ... WHERE mst.t_gedung.deleted_at is NULL   order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:31:33 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ... WHERE mst.t_gedung.deleted_at is NULL   order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL   order by d_entry desc limit 10 offset 0 ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:31:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ... WHERE mst.t_gedung.deleted_at is NULL   order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:31:33 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ... WHERE mst.t_gedung.deleted_at is NULL   order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL   order by d_entry desc limit 10 offset 0 ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:32:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ... WHERE mst.t_gedung.deleted_at is NULL   order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:32:02 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ... WHERE mst.t_gedung.deleted_at is NULL   order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL   order by d_entry desc limit 10 offset 0 ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:32:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ... WHERE mst.t_gedung.deleted_at is NULL   order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:32:03 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ... WHERE mst.t_gedung.deleted_at is NULL   order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL   order by d_entry desc limit 10 offset 0 ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:32:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ... WHERE mst.t_gedung.deleted_at is NULL   order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:32:03 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ... WHERE mst.t_gedung.deleted_at is NULL   order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL   order by d_entry desc limit 10 offset 0 ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:32:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ... WHERE mst.t_gedung.deleted_at is NULL   order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:32:03 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ... WHERE mst.t_gedung.deleted_at is NULL   order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL   order by d_entry desc limit 10 offset 0 ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:32:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:32:37 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by d_entry desc limit 10 offset 0 ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:32:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:32:38 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by d_entry desc limit 10 offset 0 ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:32:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:32:38 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by d_entry desc limit 10 offset 0 ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:32:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:32:39 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by d_entry desc limit 10 offset 0 ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:32:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:32:39 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by d_entry desc limit 10 offset 0 ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:32:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:32:39 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by d_entry desc limit 10 offset 0 ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:32:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:32:39 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by d_entry desc limit 10 offset 0 ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:32:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:32:39 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by d_entry desc limit 10 offset 0 ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:32:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:32:40 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by d_entry desc limit 10 offset 0 ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:32:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:32:40 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by d_entry desc limit 10 offset 0 ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:32:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:32:40 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by d_entry desc limit 10 offset 0 ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:32:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:32:41 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by d_entry desc limit 10 offset 0 ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:33:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:33:49 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by d_entry desc limit 10 offset 0 ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:33:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:33:57 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by d_entry desc limit 10 offset 0 ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:34:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:34:08 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by d_entry desc),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:34:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:34:09 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by d_entry desc),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:34:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:34:09 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by d_entry desc),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:34:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:34:09 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by d_entry desc),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:34:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:34:09 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by d_entry desc),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:34:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:34:09 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by d_entry desc),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:34:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:34:09 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by d_entry desc),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:34:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;entry&quot; does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by entry desc...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:34:34 --> Query error: ERROR:  column "entry" does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by entry desc...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by entry desc),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:34:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;entry&quot; does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by entry desc...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:34:35 --> Query error: ERROR:  column "entry" does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by entry desc...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by entry desc),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:34:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;entry&quot; does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by entry desc...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:34:35 --> Query error: ERROR:  column "entry" does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by entry desc...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by entry desc),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:34:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;entry&quot; does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by entry desc...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:34:35 --> Query error: ERROR:  column "entry" does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by entry desc...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by entry desc),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:35:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:35:35 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by d_entry desc limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:35:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:35:36 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by d_entry desc limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:35:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:35:36 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by d_entry desc limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:35:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:35:36 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by d_entry desc limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:35:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:35:36 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by d_entry desc limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:35:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:35:36 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by d_entry desc limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:35:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:35:36 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by d_entry desc limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:37:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;order&quot;
LINE 1: ...st.t_gedung.deleted_at is NULL  limit 10 offset 0 order by ....
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:37:16 --> Query error: ERROR:  syntax error at or near "order"
LINE 1: ...st.t_gedung.deleted_at is NULL  limit 10 offset 0 order by ....
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  limit 10 offset 0 order by .d_entry desc),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:37:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;order&quot;
LINE 1: ...st.t_gedung.deleted_at is NULL  limit 10 offset 0 order by d...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:37:51 --> Query error: ERROR:  syntax error at or near "order"
LINE 1: ...st.t_gedung.deleted_at is NULL  limit 10 offset 0 order by d...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  limit 10 offset 0 order by d_entry desc),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:37:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;order&quot;
LINE 1: ...st.t_gedung.deleted_at is NULL  limit 10 offset 0 order by d...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:37:52 --> Query error: ERROR:  syntax error at or near "order"
LINE 1: ...st.t_gedung.deleted_at is NULL  limit 10 offset 0 order by d...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  limit 10 offset 0 order by d_entry desc),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:37:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;order&quot;
LINE 1: ...st.t_gedung.deleted_at is NULL  limit 10 offset 0 order by d...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:37:52 --> Query error: ERROR:  syntax error at or near "order"
LINE 1: ...st.t_gedung.deleted_at is NULL  limit 10 offset 0 order by d...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  limit 10 offset 0 order by d_entry desc),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:37:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;order&quot;
LINE 1: ...st.t_gedung.deleted_at is NULL  limit 10 offset 0 order by d...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:37:52 --> Query error: ERROR:  syntax error at or near "order"
LINE 1: ...st.t_gedung.deleted_at is NULL  limit 10 offset 0 order by d...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  limit 10 offset 0 order by d_entry desc),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:37:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;order&quot;
LINE 1: ...st.t_gedung.deleted_at is NULL  limit 10 offset 0 order by d...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:37:52 --> Query error: ERROR:  syntax error at or near "order"
LINE 1: ...st.t_gedung.deleted_at is NULL  limit 10 offset 0 order by d...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  limit 10 offset 0 order by d_entry desc),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:39:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;order&quot;
LINE 1: ...st.t_gedung.deleted_at is NULL  limit 10 offset 0 order by d...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:39:04 --> Query error: ERROR:  syntax error at or near "order"
LINE 1: ...st.t_gedung.deleted_at is NULL  limit 10 offset 0 order by d...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  limit 10 offset 0 order by d_entry desc),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:39:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;order&quot;
LINE 1: ...st.t_gedung.deleted_at is NULL  limit 10 offset 0 order by d...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:39:05 --> Query error: ERROR:  syntax error at or near "order"
LINE 1: ...st.t_gedung.deleted_at is NULL  limit 10 offset 0 order by d...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  limit 10 offset 0 order by d_entry desc),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:39:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;order&quot;
LINE 1: ...st.t_gedung.deleted_at is NULL  limit 10 offset 0 order by d...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:39:05 --> Query error: ERROR:  syntax error at or near "order"
LINE 1: ...st.t_gedung.deleted_at is NULL  limit 10 offset 0 order by d...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  limit 10 offset 0 order by d_entry desc),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:39:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;order&quot;
LINE 1: ...st.t_gedung.deleted_at is NULL  limit 10 offset 0 order by d...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:39:05 --> Query error: ERROR:  syntax error at or near "order"
LINE 1: ...st.t_gedung.deleted_at is NULL  limit 10 offset 0 order by d...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  limit 10 offset 0 order by d_entry desc),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:39:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;order&quot;
LINE 1: ...st.t_gedung.deleted_at is NULL  limit 10 offset 0 order by d...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:39:05 --> Query error: ERROR:  syntax error at or near "order"
LINE 1: ...st.t_gedung.deleted_at is NULL  limit 10 offset 0 order by d...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  limit 10 offset 0 order by d_entry desc),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:39:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;order&quot;
LINE 1: ...st.t_gedung.deleted_at is NULL  limit 10 offset 0 order by d...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:39:05 --> Query error: ERROR:  syntax error at or near "order"
LINE 1: ...st.t_gedung.deleted_at is NULL  limit 10 offset 0 order by d...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  limit 10 offset 0 order by d_entry desc),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:39:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;order&quot;
LINE 1: ...st.t_gedung.deleted_at is NULL  limit 10 offset 0 order by d...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:39:50 --> Query error: ERROR:  syntax error at or near "order"
LINE 1: ...st.t_gedung.deleted_at is NULL  limit 10 offset 0 order by d...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  limit 10 offset 0 order by desc),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:39:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;order&quot;
LINE 1: ...st.t_gedung.deleted_at is NULL  limit 10 offset 0 order by d...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:39:50 --> Query error: ERROR:  syntax error at or near "order"
LINE 1: ...st.t_gedung.deleted_at is NULL  limit 10 offset 0 order by d...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  limit 10 offset 0 order by desc),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:39:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;order&quot;
LINE 1: ...st.t_gedung.deleted_at is NULL  limit 10 offset 0 order by d...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:39:51 --> Query error: ERROR:  syntax error at or near "order"
LINE 1: ...st.t_gedung.deleted_at is NULL  limit 10 offset 0 order by d...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  limit 10 offset 0 order by desc),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:39:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;order&quot;
LINE 1: ...st.t_gedung.deleted_at is NULL  limit 10 offset 0 order by d...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:39:51 --> Query error: ERROR:  syntax error at or near "order"
LINE 1: ...st.t_gedung.deleted_at is NULL  limit 10 offset 0 order by d...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  limit 10 offset 0 order by desc),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:39:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;order&quot;
LINE 1: ...st.t_gedung.deleted_at is NULL  limit 10 offset 0 order by d...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:39:51 --> Query error: ERROR:  syntax error at or near "order"
LINE 1: ...st.t_gedung.deleted_at is NULL  limit 10 offset 0 order by d...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  limit 10 offset 0 order by desc),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:39:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;order&quot;
LINE 1: ...st.t_gedung.deleted_at is NULL  limit 10 offset 0 order by d...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:39:52 --> Query error: ERROR:  syntax error at or near "order"
LINE 1: ...st.t_gedung.deleted_at is NULL  limit 10 offset 0 order by d...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  limit 10 offset 0 order by desc),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:39:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;order&quot;
LINE 1: ...st.t_gedung.deleted_at is NULL  limit 10 offset 0 order by d...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:39:52 --> Query error: ERROR:  syntax error at or near "order"
LINE 1: ...st.t_gedung.deleted_at is NULL  limit 10 offset 0 order by d...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  limit 10 offset 0 order by desc),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:41:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:41:39 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by d_entry desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:41:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:41:39 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by d_entry desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:41:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:41:40 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by d_entry desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:41:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:41:40 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ...d WHERE mst.t_gedung.deleted_at is NULL  order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL  order by d_entry desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:42:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;d_entry&quot; does not exist
LINE 1: ... WHERE mst.t_gedung.deleted_at is NULL   order by d_entry de...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:42:20 --> Query error: ERROR:  column "d_entry" does not exist
LINE 1: ... WHERE mst.t_gedung.deleted_at is NULL   order by d_entry de...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL   order by d_entry desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:45:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  ORDER BY &quot;created_at&quot; is ambiguous
LINE 1: ... WHERE mst.t_gedung.deleted_at is NULL   order by created_at...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:45:20 --> Query error: ERROR:  ORDER BY "created_at" is ambiguous
LINE 1: ... WHERE mst.t_gedung.deleted_at is NULL   order by created_at...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL   order by created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:45:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  ORDER BY &quot;created_at&quot; is ambiguous
LINE 1: ... WHERE mst.t_gedung.deleted_at is NULL   order by created_at...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:45:21 --> Query error: ERROR:  ORDER BY "created_at" is ambiguous
LINE 1: ... WHERE mst.t_gedung.deleted_at is NULL   order by created_at...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL   order by created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:45:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  ORDER BY &quot;created_at&quot; is ambiguous
LINE 1: ... WHERE mst.t_gedung.deleted_at is NULL   order by created_at...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:45:21 --> Query error: ERROR:  ORDER BY "created_at" is ambiguous
LINE 1: ... WHERE mst.t_gedung.deleted_at is NULL   order by created_at...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL   order by created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:45:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  ORDER BY &quot;created_at&quot; is ambiguous
LINE 1: ... WHERE mst.t_gedung.deleted_at is NULL   order by created_at...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:45:21 --> Query error: ERROR:  ORDER BY "created_at" is ambiguous
LINE 1: ... WHERE mst.t_gedung.deleted_at is NULL   order by created_at...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL   order by created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:45:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  ORDER BY &quot;created_at&quot; is ambiguous
LINE 1: ... WHERE mst.t_gedung.deleted_at is NULL   order by created_at...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:45:21 --> Query error: ERROR:  ORDER BY "created_at" is ambiguous
LINE 1: ... WHERE mst.t_gedung.deleted_at is NULL   order by created_at...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL   order by created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:45:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  ORDER BY &quot;created_at&quot; is ambiguous
LINE 1: ... WHERE mst.t_gedung.deleted_at is NULL   order by created_at...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:45:22 --> Query error: ERROR:  ORDER BY "created_at" is ambiguous
LINE 1: ... WHERE mst.t_gedung.deleted_at is NULL   order by created_at...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL   order by created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:45:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  ORDER BY &quot;created_at&quot; is ambiguous
LINE 1: ... WHERE mst.t_gedung.deleted_at is NULL   order by created_at...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:45:23 --> Query error: ERROR:  ORDER BY "created_at" is ambiguous
LINE 1: ... WHERE mst.t_gedung.deleted_at is NULL   order by created_at...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL   order by created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:45:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  ORDER BY &quot;created_at&quot; is ambiguous
LINE 1: ... WHERE mst.t_gedung.deleted_at is NULL   order by created_at...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:45:24 --> Query error: ERROR:  ORDER BY "created_at" is ambiguous
LINE 1: ... WHERE mst.t_gedung.deleted_at is NULL   order by created_at...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL   order by created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:45:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  ORDER BY &quot;created_at&quot; is ambiguous
LINE 1: ... WHERE mst.t_gedung.deleted_at is NULL   order by created_at...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:45:24 --> Query error: ERROR:  ORDER BY "created_at" is ambiguous
LINE 1: ... WHERE mst.t_gedung.deleted_at is NULL   order by created_at...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL   order by created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:45:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  ORDER BY &quot;created_at&quot; is ambiguous
LINE 1: ... WHERE mst.t_gedung.deleted_at is NULL   order by created_at...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 05:45:25 --> Query error: ERROR:  ORDER BY "created_at" is ambiguous
LINE 1: ... WHERE mst.t_gedung.deleted_at is NULL   order by created_at...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL   order by created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 05:51:13 --> Severity: Notice --> Undefined variable: listCompany C:\laragon\www\codeapp\application\modules\mst\views\room\v_form_room.php 16
ERROR - 2022-04-23 05:51:13 --> Severity: Warning --> Invalid argument supplied for foreach() C:\laragon\www\codeapp\application\modules\mst\views\room\v_form_room.php 16
ERROR - 2022-04-23 05:51:21 --> Severity: Notice --> Undefined variable: listCompany C:\laragon\www\codeapp\application\modules\mst\views\room\v_form_room.php 16
ERROR - 2022-04-23 05:51:21 --> Severity: Warning --> Invalid argument supplied for foreach() C:\laragon\www\codeapp\application\modules\mst\views\room\v_form_room.php 16
ERROR - 2022-04-23 06:08:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;company_id&quot; is ambiguous
LINE 1: ...y_id WHERE mst.t_gedung.deleted_at is NULL    and company_id...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 06:08:51 --> Query error: ERROR:  column reference "company_id" is ambiguous
LINE 1: ...y_id WHERE mst.t_gedung.deleted_at is NULL    and company_id...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL    and company_id = '15'  order by mst.t_gedung.created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL  and company_id = '15' ),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL  and company_id = '15' )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 06:09:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;t_company&quot;
LINE 2: ...l FROM mst.t_gedung WHERE deleted_at is NULL  and mst.t_comp...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 06:09:20 --> Query error: ERROR:  missing FROM-clause entry for table "t_company"
LINE 2: ...l FROM mst.t_gedung WHERE deleted_at is NULL  and mst.t_comp...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL    and mst.t_company.company_id = '15'  order by mst.t_gedung.created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL  and mst.t_company.company_id = '15' ),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL  and mst.t_company.company_id = '15' )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 06:09:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;t_company&quot;
LINE 2: ...l FROM mst.t_gedung WHERE deleted_at is NULL  and mst.t_comp...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 06:09:21 --> Query error: ERROR:  missing FROM-clause entry for table "t_company"
LINE 2: ...l FROM mst.t_gedung WHERE deleted_at is NULL  and mst.t_comp...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL    and mst.t_company.company_id = '15'  order by mst.t_gedung.created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL  and mst.t_company.company_id = '15' ),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL  and mst.t_company.company_id = '15' )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 06:09:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;t_company&quot;
LINE 2: ...l FROM mst.t_gedung WHERE deleted_at is NULL  and mst.t_comp...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 06:09:21 --> Query error: ERROR:  missing FROM-clause entry for table "t_company"
LINE 2: ...l FROM mst.t_gedung WHERE deleted_at is NULL  and mst.t_comp...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL    and mst.t_company.company_id = '15'  order by mst.t_gedung.created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL  and mst.t_company.company_id = '15' ),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL  and mst.t_company.company_id = '15' )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 06:09:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;t_company&quot;
LINE 2: ...l FROM mst.t_gedung WHERE deleted_at is NULL  and mst.t_comp...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 06:09:21 --> Query error: ERROR:  missing FROM-clause entry for table "t_company"
LINE 2: ...l FROM mst.t_gedung WHERE deleted_at is NULL  and mst.t_comp...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL    and mst.t_company.company_id = '15'  order by mst.t_gedung.created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL  and mst.t_company.company_id = '15' ),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL  and mst.t_company.company_id = '15' )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 06:09:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;t_company&quot;
LINE 2: ...l FROM mst.t_gedung WHERE deleted_at is NULL  and mst.t_comp...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 06:09:21 --> Query error: ERROR:  missing FROM-clause entry for table "t_company"
LINE 2: ...l FROM mst.t_gedung WHERE deleted_at is NULL  and mst.t_comp...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL    and mst.t_company.company_id = '15'  order by mst.t_gedung.created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL  and mst.t_company.company_id = '15' ),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL  and mst.t_company.company_id = '15' )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 06:09:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;t_company&quot;
LINE 2: ...l FROM mst.t_gedung WHERE deleted_at is NULL  and mst.t_comp...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 06:09:22 --> Query error: ERROR:  missing FROM-clause entry for table "t_company"
LINE 2: ...l FROM mst.t_gedung WHERE deleted_at is NULL  and mst.t_comp...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE mst.t_gedung.deleted_at is NULL    and mst.t_company.company_id = '15'  order by mst.t_gedung.created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL  and mst.t_company.company_id = '15' ),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL  and mst.t_company.company_id = '15' )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-23 06:12:34 --> Severity: Notice --> Undefined variable: where_id C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 17
ERROR - 2022-04-23 06:12:38 --> Severity: Notice --> Undefined variable: where_id C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 17
ERROR - 2022-04-23 06:12:39 --> Severity: Notice --> Undefined variable: where_id C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 17
ERROR - 2022-04-23 06:12:44 --> Severity: Notice --> Undefined variable: where_id C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 17
ERROR - 2022-04-23 06:12:45 --> Severity: Notice --> Undefined variable: where_id C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 17
ERROR - 2022-04-23 06:13:36 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:13:36 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:13:36 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:13:37 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:13:53 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:13:53 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:13:53 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:13:53 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:14:13 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:14:13 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:14:13 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:14:14 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:14:36 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:14:37 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:14:37 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:14:37 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:15:15 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:15:17 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:15:17 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:15:17 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:15:19 --> Severity: Notice --> Undefined offset: 0 C:\laragon\www\codeapp\application\modules\mst\controllers\C_gedung.php 63
ERROR - 2022-04-23 06:15:20 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:15:20 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:15:20 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:15:20 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:15:42 --> Severity: Notice --> Undefined offset: 0 C:\laragon\www\codeapp\application\modules\mst\controllers\C_gedung.php 63
ERROR - 2022-04-23 06:15:42 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:15:43 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:15:43 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:15:43 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:15:43 --> Severity: Notice --> Undefined offset: 0 C:\laragon\www\codeapp\application\modules\mst\controllers\C_gedung.php 63
ERROR - 2022-04-23 06:15:44 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:15:44 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:15:44 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:15:44 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:15:44 --> Severity: Notice --> Undefined offset: 0 C:\laragon\www\codeapp\application\modules\mst\controllers\C_gedung.php 63
ERROR - 2022-04-23 06:15:45 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:15:45 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:15:45 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:15:45 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:15:46 --> Severity: Notice --> Undefined offset: 0 C:\laragon\www\codeapp\application\modules\mst\controllers\C_gedung.php 63
ERROR - 2022-04-23 06:15:46 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:15:47 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:15:47 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:15:47 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:15:47 --> Severity: Notice --> Undefined offset: 0 C:\laragon\www\codeapp\application\modules\mst\controllers\C_gedung.php 63
ERROR - 2022-04-23 06:15:47 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:15:48 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:15:48 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:15:48 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:15:48 --> Severity: Notice --> Undefined offset: 0 C:\laragon\www\codeapp\application\modules\mst\controllers\C_gedung.php 63
ERROR - 2022-04-23 06:15:48 --> Severity: Notice --> Undefined offset: 0 C:\laragon\www\codeapp\application\modules\mst\controllers\C_gedung.php 63
ERROR - 2022-04-23 06:15:48 --> Severity: Notice --> Undefined offset: 0 C:\laragon\www\codeapp\application\modules\mst\controllers\C_gedung.php 63
ERROR - 2022-04-23 06:15:48 --> Severity: Notice --> Undefined offset: 0 C:\laragon\www\codeapp\application\modules\mst\controllers\C_gedung.php 63
ERROR - 2022-04-23 06:15:48 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:15:48 --> Severity: Notice --> Undefined offset: 0 C:\laragon\www\codeapp\application\modules\mst\controllers\C_gedung.php 63
ERROR - 2022-04-23 06:15:49 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:15:49 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:15:49 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:15:49 --> Severity: Notice --> Undefined offset: 0 C:\laragon\www\codeapp\application\modules\mst\controllers\C_gedung.php 63
ERROR - 2022-04-23 06:15:50 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:15:50 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:15:50 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:15:50 --> Severity: Notice --> Undefined offset: 0 C:\laragon\www\codeapp\application\modules\mst\controllers\C_gedung.php 63
ERROR - 2022-04-23 06:15:50 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:15:50 --> Severity: Notice --> Undefined offset: 0 C:\laragon\www\codeapp\application\modules\mst\controllers\C_gedung.php 63
ERROR - 2022-04-23 06:15:50 --> Severity: Notice --> Undefined offset: 0 C:\laragon\www\codeapp\application\modules\mst\controllers\C_gedung.php 63
ERROR - 2022-04-23 06:15:50 --> Severity: Notice --> Undefined offset: 0 C:\laragon\www\codeapp\application\modules\mst\controllers\C_gedung.php 63
ERROR - 2022-04-23 06:15:51 --> Severity: Notice --> Undefined offset: 0 C:\laragon\www\codeapp\application\modules\mst\controllers\C_gedung.php 63
ERROR - 2022-04-23 06:15:51 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:15:52 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:15:52 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:15:52 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:18:04 --> Severity: Notice --> Undefined offset: 0 C:\laragon\www\codeapp\application\modules\mst\controllers\C_gedung.php 63
ERROR - 2022-04-23 06:18:05 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:18:06 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:18:06 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:18:06 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:18:07 --> Severity: Notice --> Undefined offset: 0 C:\laragon\www\codeapp\application\modules\mst\controllers\C_gedung.php 63
ERROR - 2022-04-23 06:18:08 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:18:08 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:18:08 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:18:09 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:18:10 --> Severity: Notice --> Undefined offset: 0 C:\laragon\www\codeapp\application\modules\mst\controllers\C_gedung.php 63
ERROR - 2022-04-23 06:18:10 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:18:11 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:18:11 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:18:11 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:18:25 --> Severity: Notice --> Undefined offset: 0 C:\laragon\www\codeapp\application\modules\mst\controllers\C_gedung.php 63
ERROR - 2022-04-23 06:18:25 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:18:25 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:18:25 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:18:25 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:18:26 --> Severity: Notice --> Undefined offset: 0 C:\laragon\www\codeapp\application\modules\mst\controllers\C_gedung.php 63
ERROR - 2022-04-23 06:18:27 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:18:27 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:18:27 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:18:27 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:18:28 --> Severity: Notice --> Undefined offset: 0 C:\laragon\www\codeapp\application\modules\mst\controllers\C_gedung.php 63
ERROR - 2022-04-23 06:18:29 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:18:29 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:18:29 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:18:29 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:18:29 --> Severity: Notice --> Undefined offset: 0 C:\laragon\www\codeapp\application\modules\mst\controllers\C_gedung.php 63
ERROR - 2022-04-23 06:18:30 --> Severity: Notice --> Undefined offset: 0 C:\laragon\www\codeapp\application\modules\mst\controllers\C_gedung.php 63
ERROR - 2022-04-23 06:18:30 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:18:30 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:18:30 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:18:30 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:18:31 --> Severity: Notice --> Undefined offset: 0 C:\laragon\www\codeapp\application\modules\mst\controllers\C_gedung.php 63
ERROR - 2022-04-23 06:18:31 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:18:31 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:18:31 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:18:32 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:18:32 --> Severity: Notice --> Undefined offset: 0 C:\laragon\www\codeapp\application\modules\mst\controllers\C_gedung.php 63
ERROR - 2022-04-23 06:18:33 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:18:33 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:18:33 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:18:33 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:18:34 --> Severity: Notice --> Undefined offset: 0 C:\laragon\www\codeapp\application\modules\mst\controllers\C_gedung.php 63
ERROR - 2022-04-23 06:18:34 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:18:35 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:18:35 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:18:35 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:18:36 --> Severity: Notice --> Undefined offset: 0 C:\laragon\www\codeapp\application\modules\mst\controllers\C_gedung.php 63
ERROR - 2022-04-23 06:18:37 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:18:37 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:18:37 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:18:37 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:18:40 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:18:40 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:18:40 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:18:41 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:18:44 --> Severity: Notice --> Undefined offset: 0 C:\laragon\www\codeapp\application\modules\mst\controllers\C_gedung.php 63
ERROR - 2022-04-23 06:18:45 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:18:45 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:18:45 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:18:45 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:23:02 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:23:02 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:23:02 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:23:03 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:23:08 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:23:08 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:23:08 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:23:08 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:23:29 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:23:30 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:23:30 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:23:30 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:27:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;CYBER25&quot;
LINE 1: UPDATE &quot;mst&quot;.&quot;t_gedung&quot; SET &quot;gedung_id&quot; = 'CYBER25', &quot;compan...
                                                  ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 06:27:13 --> Query error: ERROR:  invalid input syntax for integer: "CYBER25"
LINE 1: UPDATE "mst"."t_gedung" SET "gedung_id" = 'CYBER25', "compan...
                                                  ^ - Invalid query: UPDATE "mst"."t_gedung" SET "gedung_id" = 'CYBER25', "company_id" = '15', "gedung_address" = 'JL KREKOT BUNDER ', "created_at" = 'now()', "created_by" = 'wanto'
WHERE "gedung_name" = 'CYBER25'
ERROR - 2022-04-23 06:27:16 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:27:16 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:27:16 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:27:17 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:27:32 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:27:32 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:27:32 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:27:33 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:27:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;CYBER25&quot;
LINE 1: UPDATE &quot;mst&quot;.&quot;t_gedung&quot; SET &quot;gedung_id&quot; = 'CYBER25', &quot;compan...
                                                  ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-23 06:27:49 --> Query error: ERROR:  invalid input syntax for integer: "CYBER25"
LINE 1: UPDATE "mst"."t_gedung" SET "gedung_id" = 'CYBER25', "compan...
                                                  ^ - Invalid query: UPDATE "mst"."t_gedung" SET "gedung_id" = 'CYBER25', "company_id" = '15', "gedung_address" = 'JL KREKOT BUNDER ', "created_at" = 'now()', "created_by" = 'wanto'
WHERE "gedung_name" = 'CYBER25'
ERROR - 2022-04-23 06:32:17 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:32:18 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:32:18 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:32:18 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:32:23 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:32:23 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:32:23 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:32:23 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:32:31 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:32:32 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:32:32 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:32:32 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:32:45 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:32:46 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:32:46 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:32:46 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:33:01 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:33:02 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:33:02 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:33:02 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:33:37 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:33:37 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:33:37 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:33:38 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:33:41 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:33:41 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:33:41 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:33:41 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:34:03 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:34:03 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:34:03 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:34:04 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:44:40 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:44:40 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:44:40 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:44:40 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:44:57 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:44:57 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:44:57 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:44:57 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:50:35 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:50:37 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:50:37 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:50:37 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:52:45 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:52:47 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:52:47 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:52:47 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:53:02 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:53:02 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:53:02 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:53:02 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:53:07 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:53:08 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:53:08 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:53:08 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:53:54 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:53:55 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:53:55 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:53:55 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:54:01 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:54:01 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:54:01 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:54:01 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:54:13 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:54:14 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:54:14 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:54:14 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:54:18 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:54:18 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:54:18 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:54:19 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:54:28 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:54:28 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:54:28 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:54:29 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:54:33 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:54:34 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:54:34 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:54:34 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:55:01 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:55:02 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:55:02 --> 404 Page Not Found: /index
ERROR - 2022-04-23 06:55:02 --> 404 Page Not Found: /index
