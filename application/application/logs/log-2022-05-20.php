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
