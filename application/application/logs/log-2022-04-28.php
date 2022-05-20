<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-04-28 03:26:37 --> Severity: Notice --> Undefined variable: listRoom C:\laragon\www\codeapp\application\modules\mst\views\server\v_form_server.php 16
ERROR - 2022-04-28 03:26:37 --> Severity: Warning --> Invalid argument supplied for foreach() C:\laragon\www\codeapp\application\modules\mst\views\server\v_form_server.php 16
ERROR - 2022-04-28 03:26:56 --> Severity: Notice --> Undefined variable: listRoom C:\laragon\www\codeapp\application\modules\mst\views\server\v_form_server.php 16
ERROR - 2022-04-28 03:26:56 --> Severity: Warning --> Invalid argument supplied for foreach() C:\laragon\www\codeapp\application\modules\mst\views\server\v_form_server.php 16
ERROR - 2022-04-28 03:34:54 --> Severity: Notice --> Undefined variable: listRoom C:\laragon\www\codeapp\application\modules\mst\views\server\v_form_server.php 40
ERROR - 2022-04-28 03:34:54 --> Severity: Warning --> Invalid argument supplied for foreach() C:\laragon\www\codeapp\application\modules\mst\views\server\v_form_server.php 40
ERROR - 2022-04-28 03:49:46 --> Severity: Notice --> Undefined variable: listRoom C:\laragon\www\codeapp\application\modules\mst\views\server\v_form_server.php 36
ERROR - 2022-04-28 03:49:46 --> Severity: Warning --> Invalid argument supplied for foreach() C:\laragon\www\codeapp\application\modules\mst\views\server\v_form_server.php 36
ERROR - 2022-04-28 04:04:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;t_server_pkey&quot;
DETAIL:  Key (server_id)=(1) already exists. C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-28 04:04:49 --> Query error: ERROR:  duplicate key value violates unique constraint "t_server_pkey"
DETAIL:  Key (server_id)=(1) already exists. - Invalid query: INSERT INTO "mst"."t_server" ("server_name", "server_ip", "type_os", "server_cpu", "server_ram", "server_storage", "created_at", "created_by") VALUES ('DL 380 G6', '172.100.100.202', 'Centos 7', '12', '16', '500', 'now()', 'admin')
ERROR - 2022-04-28 04:04:51 --> 404 Page Not Found: /index
ERROR - 2022-04-28 04:04:52 --> 404 Page Not Found: /index
ERROR - 2022-04-28 04:04:52 --> 404 Page Not Found: /index
ERROR - 2022-04-28 04:04:52 --> 404 Page Not Found: /index
ERROR - 2022-04-28 04:05:01 --> 404 Page Not Found: /index
ERROR - 2022-04-28 04:05:01 --> 404 Page Not Found: /index
ERROR - 2022-04-28 04:05:01 --> 404 Page Not Found: /index
ERROR - 2022-04-28 04:13:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column a.virtual_name does not exist
LINE 1: ... = e.company_id WHERE a.deleted_at is NULL   AND (a.virtual_...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-28 04:13:49 --> Query error: ERROR:  column a.virtual_name does not exist
LINE 1: ... = e.company_id WHERE a.deleted_at is NULL   AND (a.virtual_...
                                                             ^ - Invalid query: WITH x AS (SELECT a.* , b.rack_name , c.room_name , d.gedung_name, e.company_name FROM mst.t_server a LEFT JOIN mst.t_rack b ON a.rack_id = b.rack_id LEFT JOIN mst.t_room c ON b.room_id=c.room_id LEFT JOIN mst.t_gedung d ON c.gedung_id = d.gedung_id LEFT JOIN mst.t_company e ON d.company_id = e.company_id WHERE a.deleted_at is NULL   AND (a.virtual_name like '%a%' or a.virtual_ip like '%a%')  order by type_os asc limit 10 offset 0 ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-28 04:14:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column a.virtual_name does not exist
LINE 1: ... = e.company_id WHERE a.deleted_at is NULL   AND (a.virtual_...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-28 04:14:09 --> Query error: ERROR:  column a.virtual_name does not exist
LINE 1: ... = e.company_id WHERE a.deleted_at is NULL   AND (a.virtual_...
                                                             ^ - Invalid query: WITH x AS (SELECT a.* , b.rack_name , c.room_name , d.gedung_name, e.company_name FROM mst.t_server a LEFT JOIN mst.t_rack b ON a.rack_id = b.rack_id LEFT JOIN mst.t_room c ON b.room_id=c.room_id LEFT JOIN mst.t_gedung d ON c.gedung_id = d.gedung_id LEFT JOIN mst.t_company e ON d.company_id = e.company_id WHERE a.deleted_at is NULL   AND (a.virtual_name like '%a%' or a.virtual_ip like '%a%')  order by server_name asc limit 10 offset 0 ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-28 05:46:36 --> Severity: Notice --> Undefined variable: listServer C:\laragon\www\codeapp\application\modules\mst\views\virtual\v_form_virtual.php 28
ERROR - 2022-04-28 05:46:36 --> Severity: Warning --> Invalid argument supplied for foreach() C:\laragon\www\codeapp\application\modules\mst\views\virtual\v_form_virtual.php 28
ERROR - 2022-04-28 05:48:18 --> Severity: Notice --> Undefined variable: listServer C:\laragon\www\codeapp\application\modules\mst\views\virtual\v_form_virtual.php 28
ERROR - 2022-04-28 05:48:18 --> Severity: Warning --> Invalid argument supplied for foreach() C:\laragon\www\codeapp\application\modules\mst\views\virtual\v_form_virtual.php 28
ERROR - 2022-04-28 05:48:27 --> Severity: Notice --> Undefined variable: listServer C:\laragon\www\codeapp\application\modules\mst\views\virtual\v_form_virtual.php 28
ERROR - 2022-04-28 05:48:27 --> Severity: Warning --> Invalid argument supplied for foreach() C:\laragon\www\codeapp\application\modules\mst\views\virtual\v_form_virtual.php 28
ERROR - 2022-04-28 06:13:48 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:13:48 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:13:48 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:13:48 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:13:51 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:13:51 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:13:51 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:13:51 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:19:34 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:19:35 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:19:35 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:19:35 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:20:19 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:20:19 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:20:19 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:20:20 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:39:22 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:39:22 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:39:23 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:39:23 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:39:23 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:39:24 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:40:25 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:40:25 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:40:26 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:40:26 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:40:26 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:44:21 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:44:21 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:44:21 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:44:21 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:44:22 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:45:00 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:45:00 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:45:01 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:45:01 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:45:01 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:46:15 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:46:15 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:46:16 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:46:16 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:48:56 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:48:56 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:48:57 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:48:57 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:50:17 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:50:17 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:50:18 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:50:18 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:51:35 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:51:35 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:51:35 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:51:36 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:53:08 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:53:08 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:53:09 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:53:09 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:53:35 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:53:35 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:53:35 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:53:35 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:55:09 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:55:09 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:55:10 --> 404 Page Not Found: /index
ERROR - 2022-04-28 06:55:10 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:06:22 --> Severity: error --> Exception: Call to undefined method M_virtual::read() C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 19
ERROR - 2022-04-28 07:06:22 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:07:51 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:07:51 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:07:51 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:07:51 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:08:10 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:08:10 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:08:10 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:08:10 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:10:55 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:10:55 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:10:56 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:10:56 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:10:59 --> Severity: Notice --> Undefined index: draw C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 61
ERROR - 2022-04-28 07:10:59 --> Severity: Notice --> Undefined index: order C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 64
ERROR - 2022-04-28 07:10:59 --> Severity: Notice --> Undefined index: columns C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 65
ERROR - 2022-04-28 07:10:59 --> Severity: Notice --> Undefined index: order C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 66
ERROR - 2022-04-28 07:10:59 --> Severity: Notice --> Undefined index: search C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 67
ERROR - 2022-04-28 07:10:59 --> Severity: Notice --> Undefined index: draw C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 99
ERROR - 2022-04-28 07:11:05 --> Severity: Notice --> Undefined index: draw C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 61
ERROR - 2022-04-28 07:11:05 --> Severity: Notice --> Undefined index: order C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 64
ERROR - 2022-04-28 07:11:05 --> Severity: Notice --> Undefined index: columns C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 65
ERROR - 2022-04-28 07:11:05 --> Severity: Notice --> Undefined index: order C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 66
ERROR - 2022-04-28 07:11:05 --> Severity: Notice --> Undefined index: search C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 67
ERROR - 2022-04-28 07:11:05 --> Severity: Notice --> Undefined index: draw C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 99
ERROR - 2022-04-28 07:11:06 --> Severity: Notice --> Undefined index: draw C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 61
ERROR - 2022-04-28 07:11:06 --> Severity: Notice --> Undefined index: order C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 64
ERROR - 2022-04-28 07:11:06 --> Severity: Notice --> Undefined index: columns C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 65
ERROR - 2022-04-28 07:11:06 --> Severity: Notice --> Undefined index: order C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 66
ERROR - 2022-04-28 07:11:06 --> Severity: Notice --> Undefined index: search C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 67
ERROR - 2022-04-28 07:11:06 --> Severity: Notice --> Undefined index: draw C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 99
ERROR - 2022-04-28 07:11:09 --> Severity: Notice --> Undefined index: draw C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 61
ERROR - 2022-04-28 07:11:09 --> Severity: Notice --> Undefined index: order C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 64
ERROR - 2022-04-28 07:11:09 --> Severity: Notice --> Undefined index: columns C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 65
ERROR - 2022-04-28 07:11:09 --> Severity: Notice --> Undefined index: order C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 66
ERROR - 2022-04-28 07:11:09 --> Severity: Notice --> Undefined index: search C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 67
ERROR - 2022-04-28 07:11:09 --> Severity: Notice --> Undefined index: draw C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 99
ERROR - 2022-04-28 07:11:11 --> Severity: Notice --> Undefined index: draw C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 61
ERROR - 2022-04-28 07:11:11 --> Severity: Notice --> Undefined index: order C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 64
ERROR - 2022-04-28 07:11:11 --> Severity: Notice --> Undefined index: columns C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 65
ERROR - 2022-04-28 07:11:11 --> Severity: Notice --> Undefined index: order C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 66
ERROR - 2022-04-28 07:11:11 --> Severity: Notice --> Undefined index: search C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 67
ERROR - 2022-04-28 07:11:11 --> Severity: Notice --> Undefined index: draw C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 99
ERROR - 2022-04-28 07:15:36 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:15:36 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:15:37 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:15:37 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:15:40 --> Severity: Warning --> virtual() expects exactly 1 parameter, 2 given C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:15:40 --> Severity: Notice --> Object of class M_virtual could not be converted to number C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:24:39 --> Severity: Warning --> virtual() expects exactly 1 parameter, 2 given C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:24:39 --> Severity: Notice --> Object of class M_virtual could not be converted to number C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:24:39 --> Severity: Warning --> virtual() expects exactly 1 parameter, 2 given C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:24:40 --> Severity: Notice --> Object of class M_virtual could not be converted to number C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:24:41 --> Severity: Warning --> virtual() expects exactly 1 parameter, 2 given C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:24:41 --> Severity: Notice --> Object of class M_virtual could not be converted to number C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:24:42 --> Severity: Warning --> virtual() expects exactly 1 parameter, 2 given C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:24:42 --> Severity: Notice --> Object of class M_virtual could not be converted to number C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:24:42 --> Severity: Warning --> virtual() expects exactly 1 parameter, 2 given C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:24:42 --> Severity: Notice --> Object of class M_virtual could not be converted to number C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:24:42 --> Severity: Warning --> virtual() expects exactly 1 parameter, 2 given C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:24:42 --> Severity: Notice --> Object of class M_virtual could not be converted to number C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:24:42 --> Severity: Warning --> virtual() expects exactly 1 parameter, 2 given C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:24:42 --> Severity: Notice --> Object of class M_virtual could not be converted to number C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:24:42 --> Severity: Warning --> virtual() expects exactly 1 parameter, 2 given C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:24:42 --> Severity: Notice --> Object of class M_virtual could not be converted to number C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:24:42 --> Severity: Warning --> virtual() expects exactly 1 parameter, 2 given C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:24:42 --> Severity: Notice --> Object of class M_virtual could not be converted to number C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:24:42 --> Severity: Warning --> virtual() expects exactly 1 parameter, 2 given C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:24:42 --> Severity: Notice --> Object of class M_virtual could not be converted to number C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:24:43 --> Severity: Warning --> virtual() expects exactly 1 parameter, 2 given C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:24:43 --> Severity: Notice --> Object of class M_virtual could not be converted to number C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:24:43 --> Severity: Warning --> virtual() expects exactly 1 parameter, 2 given C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:24:43 --> Severity: Notice --> Object of class M_virtual could not be converted to number C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:24:43 --> Severity: Warning --> virtual() expects exactly 1 parameter, 2 given C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:24:43 --> Severity: Notice --> Object of class M_virtual could not be converted to number C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:24:43 --> Severity: Warning --> virtual() expects exactly 1 parameter, 2 given C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:24:43 --> Severity: Notice --> Object of class M_virtual could not be converted to number C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:24:43 --> Severity: Warning --> virtual() expects exactly 1 parameter, 2 given C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:24:43 --> Severity: Notice --> Object of class M_virtual could not be converted to number C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:24:44 --> Severity: Warning --> virtual() expects exactly 1 parameter, 2 given C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:24:44 --> Severity: Notice --> Object of class M_virtual could not be converted to number C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:24:44 --> Severity: Warning --> virtual() expects exactly 1 parameter, 2 given C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:24:44 --> Severity: Notice --> Object of class M_virtual could not be converted to number C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:24:45 --> Severity: Warning --> virtual() expects exactly 1 parameter, 2 given C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:24:45 --> Severity: Notice --> Object of class M_virtual could not be converted to number C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:24:45 --> Severity: Warning --> virtual() expects exactly 1 parameter, 2 given C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:24:45 --> Severity: Notice --> Object of class M_virtual could not be converted to number C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:24:45 --> Severity: Warning --> virtual() expects exactly 1 parameter, 2 given C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:24:45 --> Severity: Notice --> Object of class M_virtual could not be converted to number C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:24:45 --> Severity: Warning --> virtual() expects exactly 1 parameter, 2 given C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:24:45 --> Severity: Notice --> Object of class M_virtual could not be converted to number C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:24:48 --> Severity: Warning --> virtual() expects exactly 1 parameter, 2 given C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:24:48 --> Severity: Notice --> Object of class M_virtual could not be converted to number C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:24:52 --> Severity: Warning --> virtual() expects exactly 1 parameter, 2 given C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:24:52 --> Severity: Notice --> Object of class M_virtual could not be converted to number C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:38:40 --> Severity: Warning --> virtual() expects exactly 1 parameter, 2 given C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:38:40 --> Severity: Notice --> Object of class M_virtual could not be converted to number C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:38:41 --> Severity: Warning --> virtual() expects exactly 1 parameter, 2 given C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:38:41 --> Severity: Notice --> Object of class M_virtual could not be converted to number C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:39:32 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:39:32 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:39:32 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:39:32 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:39:34 --> Severity: Warning --> virtual() expects exactly 1 parameter, 2 given C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:39:34 --> Severity: Notice --> Object of class M_virtual could not be converted to number C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:39:42 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:39:42 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:39:42 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:39:47 --> Severity: Warning --> virtual() expects exactly 1 parameter, 2 given C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:39:47 --> Severity: Notice --> Object of class M_virtual could not be converted to number C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:42:45 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:42:46 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:42:46 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:42:46 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:42:52 --> Severity: Warning --> virtual() expects exactly 1 parameter, 2 given C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:42:52 --> Severity: Notice --> Object of class M_virtual could not be converted to number C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:47:21 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:47:22 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:47:22 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:47:22 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:47:28 --> Severity: Warning --> virtual() expects exactly 1 parameter, 2 given C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:47:28 --> Severity: Notice --> Object of class M_virtual could not be converted to number C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:49:08 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:49:09 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:49:09 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:49:09 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:49:14 --> Severity: Warning --> virtual() expects exactly 1 parameter, 2 given C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:49:14 --> Severity: Notice --> Object of class M_virtual could not be converted to number C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:50:01 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:50:02 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:50:02 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:50:02 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:50:05 --> Severity: Notice --> Constant ENVIRONMENT already defined C:\laragon\www\codeapp\index.php 56
ERROR - 2022-04-28 07:50:05 --> Severity: Notice --> Constant SELF already defined C:\laragon\www\codeapp\index.php 227
ERROR - 2022-04-28 07:50:05 --> Severity: Notice --> Constant BASEPATH already defined C:\laragon\www\codeapp\index.php 230
ERROR - 2022-04-28 07:50:05 --> Severity: Notice --> Constant FCPATH already defined C:\laragon\www\codeapp\index.php 233
ERROR - 2022-04-28 07:50:05 --> Severity: Notice --> Constant SYSDIR already defined C:\laragon\www\codeapp\index.php 236
ERROR - 2022-04-28 07:50:05 --> Severity: Notice --> Constant APPPATH already defined C:\laragon\www\codeapp\index.php 269
ERROR - 2022-04-28 07:50:05 --> Severity: Notice --> Constant VIEWPATH already defined C:\laragon\www\codeapp\index.php 306
ERROR - 2022-04-28 07:50:05 --> Severity: Notice --> Object of class M_virtual could not be converted to number C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:53:27 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:53:28 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:53:28 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:53:28 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:53:31 --> Severity: error --> Exception: Call to undefined method M_virtual::read_virtual() C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 46
ERROR - 2022-04-28 07:54:10 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:54:10 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:54:10 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:54:11 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:54:13 --> Severity: Warning --> Illegal string offset 'draw' C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 10
ERROR - 2022-04-28 07:54:13 --> Severity: Notice --> Uninitialized string offset: 0 C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 10
ERROR - 2022-04-28 07:54:13 --> Severity: Warning --> Illegal string offset 'order' C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 13
ERROR - 2022-04-28 07:54:13 --> Severity: Notice --> Uninitialized string offset: 0 C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 13
ERROR - 2022-04-28 07:54:13 --> Severity: Notice --> Uninitialized string offset: 0 C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 13
ERROR - 2022-04-28 07:54:13 --> Severity: Warning --> Illegal string offset 'column' C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 13
ERROR - 2022-04-28 07:54:13 --> Severity: Notice --> Uninitialized string offset: 0 C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 13
ERROR - 2022-04-28 07:54:13 --> Severity: Warning --> Illegal string offset 'columns' C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 14
ERROR - 2022-04-28 07:54:13 --> Severity: Notice --> Uninitialized string offset: 0 C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 14
ERROR - 2022-04-28 07:54:13 --> Severity: Warning --> Illegal string offset '' C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 14
ERROR - 2022-04-28 07:54:13 --> Severity: Notice --> Uninitialized string offset: 0 C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 14
ERROR - 2022-04-28 07:54:13 --> Severity: Warning --> Illegal string offset 'data' C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 14
ERROR - 2022-04-28 07:54:13 --> Severity: Notice --> Uninitialized string offset: 0 C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 14
ERROR - 2022-04-28 07:54:13 --> Severity: Warning --> Illegal string offset 'order' C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 15
ERROR - 2022-04-28 07:54:13 --> Severity: Notice --> Uninitialized string offset: 0 C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 15
ERROR - 2022-04-28 07:54:13 --> Severity: Notice --> Uninitialized string offset: 0 C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 15
ERROR - 2022-04-28 07:54:13 --> Severity: Warning --> Illegal string offset 'dir' C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 15
ERROR - 2022-04-28 07:54:13 --> Severity: Notice --> Uninitialized string offset: 0 C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 15
ERROR - 2022-04-28 07:54:13 --> Severity: Warning --> Illegal string offset 'search' C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 16
ERROR - 2022-04-28 07:54:13 --> Severity: Notice --> Uninitialized string offset: 0 C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 16
ERROR - 2022-04-28 07:54:13 --> Severity: Warning --> Illegal string offset 'value' C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 16
ERROR - 2022-04-28 07:54:13 --> Severity: Notice --> Uninitialized string offset: 0 C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 16
ERROR - 2022-04-28 07:54:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 1: ...deleted_at is NULL AND a.virtual_id = 2 AND b.server_id = ),
                                                                     ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-28 07:54:13 --> Query error: ERROR:  syntax error at or near ")"
LINE 1: ...deleted_at is NULL AND a.virtual_id = 2 AND b.server_id = ),
                                                                     ^ - Invalid query: WITH x AS (SELECT a.*, b.server_name,c.rack_name,d.room_name,e.gedung_name,f.company_name FROM mst.t_virtual a LEFT JOIN mst.t_server b ON a.server_id = b.server_id LEFT JOIN mst.t_rack c ON b.rack_id = c.rack_id LEFT JOIN mst.t_room d ON c.room_id=d.room_id LEFT JOIN mst.t_gedung e ON d.gedung_id=e.gedung_id LEFT JOIN mst.t_company f ON e.company_id=f.company_id WHERE a.deleted_at is NULL AND a.virtual_id = 2 AND b.server_id = ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual   WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual  WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-28 07:54:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\laragon\www\codeapp\system\core\Exceptions.php:271) C:\laragon\www\codeapp\system\core\Common.php 570
ERROR - 2022-04-28 07:57:28 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:57:28 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:57:28 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:57:29 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:57:31 --> Severity: Notice --> Undefined index: draw C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 10
ERROR - 2022-04-28 07:57:31 --> Severity: Notice --> Undefined index: order C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 13
ERROR - 2022-04-28 07:57:31 --> Severity: Notice --> Undefined index: columns C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 14
ERROR - 2022-04-28 07:57:31 --> Severity: Notice --> Undefined index: order C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 15
ERROR - 2022-04-28 07:57:31 --> Severity: Notice --> Undefined index: search C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 16
ERROR - 2022-04-28 07:57:31 --> Severity: Notice --> Undefined index: draw C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 48
ERROR - 2022-04-28 07:58:33 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:58:34 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:58:34 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:58:34 --> 404 Page Not Found: /index
ERROR - 2022-04-28 07:58:37 --> Severity: Notice --> Undefined index: draw C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 10
ERROR - 2022-04-28 07:58:37 --> Severity: Notice --> Undefined index: order C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 13
ERROR - 2022-04-28 07:58:37 --> Severity: Notice --> Undefined index: columns C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 14
ERROR - 2022-04-28 07:58:37 --> Severity: Notice --> Undefined index: order C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 15
ERROR - 2022-04-28 07:58:37 --> Severity: Notice --> Undefined index: search C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 16
ERROR - 2022-04-28 07:58:37 --> Severity: Notice --> Undefined index: draw C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 48
ERROR - 2022-04-28 08:00:02 --> 404 Page Not Found: /index
ERROR - 2022-04-28 08:00:03 --> 404 Page Not Found: /index
ERROR - 2022-04-28 08:00:03 --> 404 Page Not Found: /index
ERROR - 2022-04-28 08:00:03 --> 404 Page Not Found: /index
ERROR - 2022-04-28 08:01:57 --> 404 Page Not Found: /index
ERROR - 2022-04-28 08:01:57 --> 404 Page Not Found: /index
ERROR - 2022-04-28 08:01:57 --> 404 Page Not Found: /index
ERROR - 2022-04-28 08:01:58 --> 404 Page Not Found: /index
ERROR - 2022-04-28 08:03:11 --> 404 Page Not Found: /index
ERROR - 2022-04-28 08:03:11 --> 404 Page Not Found: /index
ERROR - 2022-04-28 08:03:11 --> 404 Page Not Found: /index
ERROR - 2022-04-28 08:03:12 --> 404 Page Not Found: /index
ERROR - 2022-04-28 08:03:43 --> 404 Page Not Found: /index
ERROR - 2022-04-28 08:03:43 --> 404 Page Not Found: /index
ERROR - 2022-04-28 08:03:43 --> 404 Page Not Found: /index
ERROR - 2022-04-28 08:03:43 --> 404 Page Not Found: /index
ERROR - 2022-04-28 08:07:21 --> 404 Page Not Found: /index
ERROR - 2022-04-28 08:07:22 --> 404 Page Not Found: /index
ERROR - 2022-04-28 08:07:22 --> 404 Page Not Found: /index
ERROR - 2022-04-28 08:07:22 --> 404 Page Not Found: /index
ERROR - 2022-04-28 08:08:37 --> 404 Page Not Found: /index
ERROR - 2022-04-28 08:08:38 --> 404 Page Not Found: /index
ERROR - 2022-04-28 08:08:38 --> 404 Page Not Found: /index
ERROR - 2022-04-28 08:08:38 --> 404 Page Not Found: /index
ERROR - 2022-04-28 08:10:03 --> 404 Page Not Found: /index
ERROR - 2022-04-28 08:10:03 --> 404 Page Not Found: /index
ERROR - 2022-04-28 08:10:03 --> 404 Page Not Found: /index
ERROR - 2022-04-28 08:10:03 --> 404 Page Not Found: /index
ERROR - 2022-04-28 08:18:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;,&quot;
LINE 1: ... f ON e.company_id=f.company_id WHERE a.deleted_at,a.server_...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-28 08:18:16 --> Query error: ERROR:  syntax error at or near ","
LINE 1: ... f ON e.company_id=f.company_id WHERE a.deleted_at,a.server_...
                                                             ^ - Invalid query: WITH x AS (SELECT a.*, b.server_name,c.rack_name,d.room_name,e.gedung_name,f.company_name FROM mst.t_virtual a LEFT JOIN mst.t_server b ON a.server_id = b.server_id LEFT JOIN mst.t_rack c ON b.rack_id = c.rack_id LEFT JOIN mst.t_room d ON c.room_id=d.room_id LEFT JOIN mst.t_gedung e ON d.gedung_id=e.gedung_id LEFT JOIN mst.t_company f ON e.company_id=f.company_id WHERE a.deleted_at,a.server_id is NULL ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL ),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-28 08:18:21 --> 404 Page Not Found: /index
ERROR - 2022-04-28 08:18:21 --> 404 Page Not Found: /index
ERROR - 2022-04-28 08:18:21 --> 404 Page Not Found: /index
ERROR - 2022-04-28 08:18:21 --> 404 Page Not Found: /index
ERROR - 2022-04-28 08:18:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;,&quot;
LINE 1: ... f ON e.company_id=f.company_id WHERE a.deleted_at,a.server_...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-28 08:18:25 --> Query error: ERROR:  syntax error at or near ","
LINE 1: ... f ON e.company_id=f.company_id WHERE a.deleted_at,a.server_...
                                                             ^ - Invalid query: WITH x AS (SELECT a.*, b.server_name,c.rack_name,d.room_name,e.gedung_name,f.company_name FROM mst.t_virtual a LEFT JOIN mst.t_server b ON a.server_id = b.server_id LEFT JOIN mst.t_rack c ON b.rack_id = c.rack_id LEFT JOIN mst.t_room d ON c.room_id=d.room_id LEFT JOIN mst.t_gedung e ON d.gedung_id=e.gedung_id LEFT JOIN mst.t_company f ON e.company_id=f.company_id WHERE a.deleted_at,a.server_id is NULL ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL ),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-28 08:18:25 --> 404 Page Not Found: /index
ERROR - 2022-04-28 08:18:52 --> 404 Page Not Found: /index
ERROR - 2022-04-28 08:18:52 --> 404 Page Not Found: /index
ERROR - 2022-04-28 08:18:53 --> 404 Page Not Found: /index
ERROR - 2022-04-28 08:18:53 --> 404 Page Not Found: /index
ERROR - 2022-04-28 08:18:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;,&quot;
LINE 1: ...f ON e.company_id=f.company_id WHERE a.deleted_at , a.server...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-28 08:18:56 --> Query error: ERROR:  syntax error at or near ","
LINE 1: ...f ON e.company_id=f.company_id WHERE a.deleted_at , a.server...
                                                             ^ - Invalid query: WITH x AS (SELECT a.*, b.server_name,c.rack_name,d.room_name,e.gedung_name,f.company_name FROM mst.t_virtual a LEFT JOIN mst.t_server b ON a.server_id = b.server_id LEFT JOIN mst.t_rack c ON b.rack_id = c.rack_id LEFT JOIN mst.t_room d ON c.room_id=d.room_id LEFT JOIN mst.t_gedung e ON d.gedung_id=e.gedung_id LEFT JOIN mst.t_company f ON e.company_id=f.company_id WHERE a.deleted_at , a.server_id is NULL ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL ),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-28 08:19:25 --> 404 Page Not Found: /index
ERROR - 2022-04-28 08:19:25 --> 404 Page Not Found: /index
ERROR - 2022-04-28 08:19:25 --> 404 Page Not Found: /index
ERROR - 2022-04-28 08:19:26 --> 404 Page Not Found: /index
ERROR - 2022-04-28 08:19:32 --> 404 Page Not Found: /index
ERROR - 2022-04-28 08:19:32 --> 404 Page Not Found: /index
ERROR - 2022-04-28 08:19:32 --> 404 Page Not Found: /index
ERROR - 2022-04-28 08:19:33 --> 404 Page Not Found: /index
ERROR - 2022-04-28 09:00:51 --> 404 Page Not Found: /index
ERROR - 2022-04-28 09:00:51 --> 404 Page Not Found: /index
ERROR - 2022-04-28 09:00:51 --> 404 Page Not Found: /index
ERROR - 2022-04-28 09:00:51 --> 404 Page Not Found: /index
ERROR - 2022-04-28 09:01:39 --> 404 Page Not Found: /index
ERROR - 2022-04-28 09:01:39 --> 404 Page Not Found: /index
ERROR - 2022-04-28 09:01:39 --> 404 Page Not Found: /index
ERROR - 2022-04-28 09:01:39 --> 404 Page Not Found: /index
ERROR - 2022-04-28 09:02:53 --> 404 Page Not Found: /index
ERROR - 2022-04-28 09:02:54 --> 404 Page Not Found: /index
ERROR - 2022-04-28 09:02:54 --> 404 Page Not Found: /index
ERROR - 2022-04-28 09:02:54 --> 404 Page Not Found: /index
ERROR - 2022-04-28 09:03:09 --> 404 Page Not Found: /index
ERROR - 2022-04-28 09:03:09 --> 404 Page Not Found: /index
ERROR - 2022-04-28 09:03:09 --> 404 Page Not Found: /index
ERROR - 2022-04-28 09:03:09 --> 404 Page Not Found: /index
ERROR - 2022-04-28 09:38:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;FROM&quot;
LINE 2:             FROM x
                    ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-28 09:38:40 --> Query error: ERROR:  syntax error at or near "FROM"
LINE 2:             FROM x
                    ^ - Invalid query: WITH x AS (SELECT a.*, b.server_name,c.rack_name,d.room_name,e.gedung_name,f.company_name FROM mst.t_virtual a LEFT JOIN mst.t_server b ON a.server_id = b.server_id LEFT JOIN mst.t_rack c ON b.rack_id = c.rack_id LEFT JOIN mst.t_room d ON c.room_id=d.room_id LEFT JOIN mst.t_gedung e ON d.gedung_id=e.gedung_id LEFT JOIN mst.t_company f ON e.company_id=f.company_id WHERE a.deleted_at is NULL ),
            FROM x
ERROR - 2022-04-28 09:38:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;FROM&quot;
LINE 2:             FROM x
                    ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-28 09:38:41 --> Query error: ERROR:  syntax error at or near "FROM"
LINE 2:             FROM x
                    ^ - Invalid query: WITH x AS (SELECT a.*, b.server_name,c.rack_name,d.room_name,e.gedung_name,f.company_name FROM mst.t_virtual a LEFT JOIN mst.t_server b ON a.server_id = b.server_id LEFT JOIN mst.t_rack c ON b.rack_id = c.rack_id LEFT JOIN mst.t_room d ON c.room_id=d.room_id LEFT JOIN mst.t_gedung e ON d.gedung_id=e.gedung_id LEFT JOIN mst.t_company f ON e.company_id=f.company_id WHERE a.deleted_at is NULL ),
            FROM x
ERROR - 2022-04-28 09:38:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;FROM&quot;
LINE 2:             FROM x
                    ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-28 09:38:42 --> Query error: ERROR:  syntax error at or near "FROM"
LINE 2:             FROM x
                    ^ - Invalid query: WITH x AS (SELECT a.*, b.server_name,c.rack_name,d.room_name,e.gedung_name,f.company_name FROM mst.t_virtual a LEFT JOIN mst.t_server b ON a.server_id = b.server_id LEFT JOIN mst.t_rack c ON b.rack_id = c.rack_id LEFT JOIN mst.t_room d ON c.room_id=d.room_id LEFT JOIN mst.t_gedung e ON d.gedung_id=e.gedung_id LEFT JOIN mst.t_company f ON e.company_id=f.company_id WHERE a.deleted_at is NULL ),
            FROM x
ERROR - 2022-04-28 09:38:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;FROM&quot;
LINE 2:             FROM x
                    ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-28 09:38:43 --> Query error: ERROR:  syntax error at or near "FROM"
LINE 2:             FROM x
                    ^ - Invalid query: WITH x AS (SELECT a.*, b.server_name,c.rack_name,d.room_name,e.gedung_name,f.company_name FROM mst.t_virtual a LEFT JOIN mst.t_server b ON a.server_id = b.server_id LEFT JOIN mst.t_rack c ON b.rack_id = c.rack_id LEFT JOIN mst.t_room d ON c.room_id=d.room_id LEFT JOIN mst.t_gedung e ON d.gedung_id=e.gedung_id LEFT JOIN mst.t_company f ON e.company_id=f.company_id WHERE a.deleted_at is NULL ),
            FROM x
ERROR - 2022-04-28 09:38:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;FROM&quot;
LINE 2:             FROM x
                    ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-28 09:38:44 --> Query error: ERROR:  syntax error at or near "FROM"
LINE 2:             FROM x
                    ^ - Invalid query: WITH x AS (SELECT a.*, b.server_name,c.rack_name,d.room_name,e.gedung_name,f.company_name FROM mst.t_virtual a LEFT JOIN mst.t_server b ON a.server_id = b.server_id LEFT JOIN mst.t_rack c ON b.rack_id = c.rack_id LEFT JOIN mst.t_room d ON c.room_id=d.room_id LEFT JOIN mst.t_gedung e ON d.gedung_id=e.gedung_id LEFT JOIN mst.t_company f ON e.company_id=f.company_id WHERE a.deleted_at is NULL ),
            FROM x
ERROR - 2022-04-28 09:38:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;FROM&quot;
LINE 2:             FROM x
                    ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-28 09:38:46 --> Query error: ERROR:  syntax error at or near "FROM"
LINE 2:             FROM x
                    ^ - Invalid query: WITH x AS (SELECT a.*, b.server_name,c.rack_name,d.room_name,e.gedung_name,f.company_name FROM mst.t_virtual a LEFT JOIN mst.t_server b ON a.server_id = b.server_id LEFT JOIN mst.t_rack c ON b.rack_id = c.rack_id LEFT JOIN mst.t_room d ON c.room_id=d.room_id LEFT JOIN mst.t_gedung e ON d.gedung_id=e.gedung_id LEFT JOIN mst.t_company f ON e.company_id=f.company_id WHERE a.deleted_at is NULL ),
            FROM x
ERROR - 2022-04-28 09:38:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;FROM&quot;
LINE 2:             FROM x
                    ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-28 09:38:46 --> Query error: ERROR:  syntax error at or near "FROM"
LINE 2:             FROM x
                    ^ - Invalid query: WITH x AS (SELECT a.*, b.server_name,c.rack_name,d.room_name,e.gedung_name,f.company_name FROM mst.t_virtual a LEFT JOIN mst.t_server b ON a.server_id = b.server_id LEFT JOIN mst.t_rack c ON b.rack_id = c.rack_id LEFT JOIN mst.t_room d ON c.room_id=d.room_id LEFT JOIN mst.t_gedung e ON d.gedung_id=e.gedung_id LEFT JOIN mst.t_company f ON e.company_id=f.company_id WHERE a.deleted_at is NULL ),
            FROM x
ERROR - 2022-04-28 09:38:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;FROM&quot;
LINE 2:             FROM x
                    ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-28 09:38:49 --> Query error: ERROR:  syntax error at or near "FROM"
LINE 2:             FROM x
                    ^ - Invalid query: WITH x AS (SELECT a.*, b.server_name,c.rack_name,d.room_name,e.gedung_name,f.company_name FROM mst.t_virtual a LEFT JOIN mst.t_server b ON a.server_id = b.server_id LEFT JOIN mst.t_rack c ON b.rack_id = c.rack_id LEFT JOIN mst.t_room d ON c.room_id=d.room_id LEFT JOIN mst.t_gedung e ON d.gedung_id=e.gedung_id LEFT JOIN mst.t_company f ON e.company_id=f.company_id WHERE a.deleted_at is NULL ),
            FROM x
ERROR - 2022-04-28 09:38:52 --> 404 Page Not Found: /index
ERROR - 2022-04-28 09:38:52 --> 404 Page Not Found: /index
ERROR - 2022-04-28 09:38:52 --> 404 Page Not Found: /index
ERROR - 2022-04-28 09:38:53 --> 404 Page Not Found: /index
ERROR - 2022-04-28 09:38:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;FROM&quot;
LINE 2:             FROM x
                    ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-28 09:38:58 --> Query error: ERROR:  syntax error at or near "FROM"
LINE 2:             FROM x
                    ^ - Invalid query: WITH x AS (SELECT a.*, b.server_name,c.rack_name,d.room_name,e.gedung_name,f.company_name FROM mst.t_virtual a LEFT JOIN mst.t_server b ON a.server_id = b.server_id LEFT JOIN mst.t_rack c ON b.rack_id = c.rack_id LEFT JOIN mst.t_room d ON c.room_id=d.room_id LEFT JOIN mst.t_gedung e ON d.gedung_id=e.gedung_id LEFT JOIN mst.t_company f ON e.company_id=f.company_id WHERE a.deleted_at is NULL ),
            FROM x
ERROR - 2022-04-28 09:38:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;FROM&quot;
LINE 2:             FROM x
                    ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-28 09:38:58 --> Query error: ERROR:  syntax error at or near "FROM"
LINE 2:             FROM x
                    ^ - Invalid query: WITH x AS (SELECT a.*, b.server_name,c.rack_name,d.room_name,e.gedung_name,f.company_name FROM mst.t_virtual a LEFT JOIN mst.t_server b ON a.server_id = b.server_id LEFT JOIN mst.t_rack c ON b.rack_id = c.rack_id LEFT JOIN mst.t_room d ON c.room_id=d.room_id LEFT JOIN mst.t_gedung e ON d.gedung_id=e.gedung_id LEFT JOIN mst.t_company f ON e.company_id=f.company_id WHERE a.deleted_at is NULL ),
            FROM x
ERROR - 2022-04-28 09:39:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;y&quot;
LINE 4:             SELECT x.*, y.*, z.*
                                ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-28 09:39:18 --> Query error: ERROR:  missing FROM-clause entry for table "y"
LINE 4:             SELECT x.*, y.*, z.*
                                ^ - Invalid query: WITH x AS (SELECT a.*, b.server_name,c.rack_name,d.room_name,e.gedung_name,f.company_name FROM mst.t_virtual a LEFT JOIN mst.t_server b ON a.server_id = b.server_id LEFT JOIN mst.t_rack c ON b.rack_id = c.rack_id LEFT JOIN mst.t_room d ON c.room_id=d.room_id LEFT JOIN mst.t_gedung e ON d.gedung_id=e.gedung_id LEFT JOIN mst.t_company f ON e.company_id=f.company_id WHERE a.deleted_at is NULL ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL ),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x
ERROR - 2022-04-28 09:39:32 --> 404 Page Not Found: /index
ERROR - 2022-04-28 09:39:32 --> 404 Page Not Found: /index
ERROR - 2022-04-28 09:39:32 --> 404 Page Not Found: /index
ERROR - 2022-04-28 09:39:32 --> 404 Page Not Found: /index
ERROR - 2022-04-28 09:40:09 --> 404 Page Not Found: /index
ERROR - 2022-04-28 09:40:09 --> 404 Page Not Found: /index
ERROR - 2022-04-28 09:40:09 --> 404 Page Not Found: /index
ERROR - 2022-04-28 09:53:37 --> 404 Page Not Found: /index
ERROR - 2022-04-28 09:53:38 --> 404 Page Not Found: /index
ERROR - 2022-04-28 09:53:38 --> 404 Page Not Found: /index
ERROR - 2022-04-28 09:53:38 --> 404 Page Not Found: /index
ERROR - 2022-04-28 09:56:14 --> 404 Page Not Found: /index
ERROR - 2022-04-28 09:56:15 --> 404 Page Not Found: /index
ERROR - 2022-04-28 09:56:15 --> 404 Page Not Found: /index
ERROR - 2022-04-28 09:56:15 --> 404 Page Not Found: /index
ERROR - 2022-04-28 09:56:18 --> Severity: Notice --> Undefined variable: records C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 24
ERROR - 2022-04-28 09:56:20 --> Severity: Notice --> Undefined variable: records C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 24
ERROR - 2022-04-28 09:56:21 --> Severity: Notice --> Undefined variable: records C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 24
ERROR - 2022-04-28 09:56:22 --> Severity: Notice --> Undefined variable: records C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 24
ERROR - 2022-04-28 09:56:55 --> 404 Page Not Found: /index
ERROR - 2022-04-28 09:56:55 --> 404 Page Not Found: /index
ERROR - 2022-04-28 09:56:55 --> 404 Page Not Found: /index
ERROR - 2022-04-28 09:56:56 --> 404 Page Not Found: /index
ERROR - 2022-04-28 09:56:59 --> Severity: Notice --> Array to string conversion C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 20
ERROR - 2022-04-28 09:56:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 1: ...any_id WHERE a.deleted_at is NULL  AND b.server_id = Array),
                                                                     ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-28 09:56:59 --> Query error: ERROR:  syntax error at or near ")"
LINE 1: ...any_id WHERE a.deleted_at is NULL  AND b.server_id = Array),
                                                                     ^ - Invalid query: WITH x AS (SELECT a.*, b.server_name,c.rack_name,d.room_name,e.gedung_name,f.company_name FROM mst.t_virtual a LEFT JOIN mst.t_server b ON a.server_id = b.server_id LEFT JOIN mst.t_rack c ON b.rack_id = c.rack_id LEFT JOIN mst.t_room d ON c.room_id=d.room_id LEFT JOIN mst.t_gedung e ON d.gedung_id=e.gedung_id LEFT JOIN mst.t_company f ON e.company_id=f.company_id WHERE a.deleted_at is NULL  AND b.server_id = Array),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL ),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-28 09:56:59 --> Severity: Notice --> Array to string conversion C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 20
ERROR - 2022-04-28 09:56:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 1: ...any_id WHERE a.deleted_at is NULL  AND b.server_id = Array),
                                                                     ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-28 09:56:59 --> Query error: ERROR:  syntax error at or near ")"
LINE 1: ...any_id WHERE a.deleted_at is NULL  AND b.server_id = Array),
                                                                     ^ - Invalid query: WITH x AS (SELECT a.*, b.server_name,c.rack_name,d.room_name,e.gedung_name,f.company_name FROM mst.t_virtual a LEFT JOIN mst.t_server b ON a.server_id = b.server_id LEFT JOIN mst.t_rack c ON b.rack_id = c.rack_id LEFT JOIN mst.t_room d ON c.room_id=d.room_id LEFT JOIN mst.t_gedung e ON d.gedung_id=e.gedung_id LEFT JOIN mst.t_company f ON e.company_id=f.company_id WHERE a.deleted_at is NULL  AND b.server_id = Array),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL ),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-28 09:56:59 --> Severity: Notice --> Array to string conversion C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 20
ERROR - 2022-04-28 09:56:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 1: ...any_id WHERE a.deleted_at is NULL  AND b.server_id = Array),
                                                                     ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-28 09:56:59 --> Query error: ERROR:  syntax error at or near ")"
LINE 1: ...any_id WHERE a.deleted_at is NULL  AND b.server_id = Array),
                                                                     ^ - Invalid query: WITH x AS (SELECT a.*, b.server_name,c.rack_name,d.room_name,e.gedung_name,f.company_name FROM mst.t_virtual a LEFT JOIN mst.t_server b ON a.server_id = b.server_id LEFT JOIN mst.t_rack c ON b.rack_id = c.rack_id LEFT JOIN mst.t_room d ON c.room_id=d.room_id LEFT JOIN mst.t_gedung e ON d.gedung_id=e.gedung_id LEFT JOIN mst.t_company f ON e.company_id=f.company_id WHERE a.deleted_at is NULL  AND b.server_id = Array),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL ),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-28 09:57:00 --> Severity: Notice --> Array to string conversion C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 20
ERROR - 2022-04-28 09:57:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 1: ...any_id WHERE a.deleted_at is NULL  AND b.server_id = Array),
                                                                     ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-28 09:57:00 --> Query error: ERROR:  syntax error at or near ")"
LINE 1: ...any_id WHERE a.deleted_at is NULL  AND b.server_id = Array),
                                                                     ^ - Invalid query: WITH x AS (SELECT a.*, b.server_name,c.rack_name,d.room_name,e.gedung_name,f.company_name FROM mst.t_virtual a LEFT JOIN mst.t_server b ON a.server_id = b.server_id LEFT JOIN mst.t_rack c ON b.rack_id = c.rack_id LEFT JOIN mst.t_room d ON c.room_id=d.room_id LEFT JOIN mst.t_gedung e ON d.gedung_id=e.gedung_id LEFT JOIN mst.t_company f ON e.company_id=f.company_id WHERE a.deleted_at is NULL  AND b.server_id = Array),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL ),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-28 09:57:02 --> Severity: Notice --> Array to string conversion C:\laragon\www\codeapp\application\modules\mst\models\M_virtual.php 20
ERROR - 2022-04-28 09:57:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 1: ...any_id WHERE a.deleted_at is NULL  AND b.server_id = Array),
                                                                     ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-28 09:57:02 --> Query error: ERROR:  syntax error at or near ")"
LINE 1: ...any_id WHERE a.deleted_at is NULL  AND b.server_id = Array),
                                                                     ^ - Invalid query: WITH x AS (SELECT a.*, b.server_name,c.rack_name,d.room_name,e.gedung_name,f.company_name FROM mst.t_virtual a LEFT JOIN mst.t_server b ON a.server_id = b.server_id LEFT JOIN mst.t_rack c ON b.rack_id = c.rack_id LEFT JOIN mst.t_room d ON c.room_id=d.room_id LEFT JOIN mst.t_gedung e ON d.gedung_id=e.gedung_id LEFT JOIN mst.t_company f ON e.company_id=f.company_id WHERE a.deleted_at is NULL  AND b.server_id = Array),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL ),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-28 09:57:42 --> 404 Page Not Found: /index
ERROR - 2022-04-28 09:57:43 --> 404 Page Not Found: /index
ERROR - 2022-04-28 09:57:43 --> 404 Page Not Found: /index
ERROR - 2022-04-28 09:57:43 --> 404 Page Not Found: /index
ERROR - 2022-04-28 09:57:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 1: ....company_id WHERE a.deleted_at is NULL AND a.server_id =  ),
                                                                     ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-28 09:57:45 --> Query error: ERROR:  syntax error at or near ")"
LINE 1: ....company_id WHERE a.deleted_at is NULL AND a.server_id =  ),
                                                                     ^ - Invalid query: WITH x AS (SELECT a.*, b.server_name,c.rack_name,d.room_name,e.gedung_name,f.company_name FROM mst.t_virtual a LEFT JOIN mst.t_server b ON a.server_id = b.server_id LEFT JOIN mst.t_rack c ON b.rack_id = c.rack_id LEFT JOIN mst.t_room d ON c.room_id=d.room_id LEFT JOIN mst.t_gedung e ON d.gedung_id=e.gedung_id LEFT JOIN mst.t_company f ON e.company_id=f.company_id WHERE a.deleted_at is NULL AND a.server_id =  ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL ),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-28 09:57:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 1: ....company_id WHERE a.deleted_at is NULL AND a.server_id =  ),
                                                                     ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-28 09:57:48 --> Query error: ERROR:  syntax error at or near ")"
LINE 1: ....company_id WHERE a.deleted_at is NULL AND a.server_id =  ),
                                                                     ^ - Invalid query: WITH x AS (SELECT a.*, b.server_name,c.rack_name,d.room_name,e.gedung_name,f.company_name FROM mst.t_virtual a LEFT JOIN mst.t_server b ON a.server_id = b.server_id LEFT JOIN mst.t_rack c ON b.rack_id = c.rack_id LEFT JOIN mst.t_room d ON c.room_id=d.room_id LEFT JOIN mst.t_gedung e ON d.gedung_id=e.gedung_id LEFT JOIN mst.t_company f ON e.company_id=f.company_id WHERE a.deleted_at is NULL AND a.server_id =  ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL ),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-28 09:58:29 --> 404 Page Not Found: /index
ERROR - 2022-04-28 09:58:30 --> 404 Page Not Found: /index
ERROR - 2022-04-28 09:58:30 --> 404 Page Not Found: /index
ERROR - 2022-04-28 09:58:30 --> 404 Page Not Found: /index
ERROR - 2022-04-28 09:59:31 --> 404 Page Not Found: /index
ERROR - 2022-04-28 09:59:32 --> 404 Page Not Found: /index
ERROR - 2022-04-28 09:59:32 --> 404 Page Not Found: /index
ERROR - 2022-04-28 09:59:32 --> 404 Page Not Found: /index
ERROR - 2022-04-28 10:20:47 --> Severity: error --> Exception: Call to undefined method M_virtual::read() C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 66
ERROR - 2022-04-28 10:20:47 --> 404 Page Not Found: /index
ERROR - 2022-04-28 10:20:53 --> 404 Page Not Found: /index
ERROR - 2022-04-28 10:20:53 --> 404 Page Not Found: /index
ERROR - 2022-04-28 10:20:53 --> 404 Page Not Found: /index
ERROR - 2022-04-28 10:20:54 --> 404 Page Not Found: /index
ERROR - 2022-04-28 10:20:59 --> 404 Page Not Found: /index
ERROR - 2022-04-28 10:20:59 --> 404 Page Not Found: /index
ERROR - 2022-04-28 10:20:59 --> 404 Page Not Found: /index
ERROR - 2022-04-28 10:20:59 --> 404 Page Not Found: /index
ERROR - 2022-04-28 10:21:06 --> 404 Page Not Found: /index
ERROR - 2022-04-28 10:21:07 --> 404 Page Not Found: /index
ERROR - 2022-04-28 10:21:07 --> 404 Page Not Found: /index
ERROR - 2022-04-28 10:21:07 --> 404 Page Not Found: /index
ERROR - 2022-04-28 10:21:13 --> 404 Page Not Found: /index
ERROR - 2022-04-28 10:21:13 --> 404 Page Not Found: /index
ERROR - 2022-04-28 10:21:14 --> 404 Page Not Found: /index
ERROR - 2022-04-28 10:21:14 --> 404 Page Not Found: /index
ERROR - 2022-04-28 10:21:19 --> 404 Page Not Found: /index
ERROR - 2022-04-28 10:21:19 --> 404 Page Not Found: /index
ERROR - 2022-04-28 10:21:19 --> 404 Page Not Found: /index
ERROR - 2022-04-28 10:21:20 --> 404 Page Not Found: /index
ERROR - 2022-04-28 10:21:24 --> 404 Page Not Found: /index
ERROR - 2022-04-28 10:21:24 --> 404 Page Not Found: /index
ERROR - 2022-04-28 10:21:24 --> 404 Page Not Found: /index
ERROR - 2022-04-28 10:21:24 --> 404 Page Not Found: /index
ERROR - 2022-04-28 10:23:07 --> 404 Page Not Found: /index
ERROR - 2022-04-28 10:23:07 --> 404 Page Not Found: /index
ERROR - 2022-04-28 10:23:07 --> 404 Page Not Found: /index
ERROR - 2022-04-28 10:23:07 --> 404 Page Not Found: /index
ERROR - 2022-04-28 12:11:16 --> 404 Page Not Found: /index
ERROR - 2022-04-28 12:11:16 --> 404 Page Not Found: /index
ERROR - 2022-04-28 12:11:16 --> 404 Page Not Found: /index
ERROR - 2022-04-28 12:11:17 --> 404 Page Not Found: /index
ERROR - 2022-04-28 12:11:21 --> 404 Page Not Found: /index
ERROR - 2022-04-28 12:11:21 --> 404 Page Not Found: /index
ERROR - 2022-04-28 12:11:21 --> 404 Page Not Found: /index
ERROR - 2022-04-28 12:18:35 --> 404 Page Not Found: /index
ERROR - 2022-04-28 12:18:35 --> 404 Page Not Found: /index
ERROR - 2022-04-28 12:18:36 --> 404 Page Not Found: /index
ERROR - 2022-04-28 12:18:36 --> 404 Page Not Found: /index
ERROR - 2022-04-28 12:19:51 --> 404 Page Not Found: /index
ERROR - 2022-04-28 12:19:51 --> 404 Page Not Found: /index
ERROR - 2022-04-28 12:19:52 --> 404 Page Not Found: /index
ERROR - 2022-04-28 12:19:52 --> 404 Page Not Found: /index
ERROR - 2022-04-28 12:20:26 --> 404 Page Not Found: /index
ERROR - 2022-04-28 12:20:26 --> 404 Page Not Found: /index
ERROR - 2022-04-28 12:20:27 --> 404 Page Not Found: /index
ERROR - 2022-04-28 12:20:27 --> 404 Page Not Found: /index
ERROR - 2022-04-28 12:22:27 --> 404 Page Not Found: /index
ERROR - 2022-04-28 12:22:27 --> 404 Page Not Found: /index
ERROR - 2022-04-28 12:22:28 --> 404 Page Not Found: /index
ERROR - 2022-04-28 12:22:28 --> 404 Page Not Found: /index
ERROR - 2022-04-28 12:23:57 --> 404 Page Not Found: /index
ERROR - 2022-04-28 12:23:57 --> 404 Page Not Found: /index
ERROR - 2022-04-28 12:23:57 --> 404 Page Not Found: /index
ERROR - 2022-04-28 12:23:57 --> 404 Page Not Found: /index
ERROR - 2022-04-28 12:54:14 --> 404 Page Not Found: ../modules/mst/controllers//index
ERROR - 2022-04-28 12:54:14 --> 404 Page Not Found: /index
ERROR - 2022-04-28 13:21:59 --> Severity: error --> Exception: Call to undefined method M_virtual::read() C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 66
ERROR - 2022-04-28 13:24:37 --> 404 Page Not Found: ../modules/mst/controllers/C_virtual/read_virtual
ERROR - 2022-04-28 13:24:46 --> 404 Page Not Found: ../modules/mst/controllers/C_virtual/read_virtual
ERROR - 2022-04-28 13:25:37 --> Severity: error --> Exception: Call to undefined method M_virtual::read() C:\laragon\www\codeapp\application\modules\mst\controllers\C_virtual.php 66
ERROR - 2022-04-28 13:26:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;undefined&quot; does not exist
LINE 1: ..._id WHERE a.deleted_at is NULL  AND a.server_id = undefined)...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-28 13:26:28 --> Query error: ERROR:  column "undefined" does not exist
LINE 1: ..._id WHERE a.deleted_at is NULL  AND a.server_id = undefined)...
                                                             ^ - Invalid query: WITH x AS (SELECT a.*, b.server_name,c.rack_name,d.room_name,e.gedung_name,f.company_name FROM mst.t_virtual a LEFT JOIN mst.t_server b ON a.server_id = b.server_id LEFT JOIN mst.t_rack c ON b.rack_id = c.rack_id LEFT JOIN mst.t_room d ON c.room_id=d.room_id LEFT JOIN mst.t_gedung e ON d.gedung_id=e.gedung_id LEFT JOIN mst.t_company f ON e.company_id=f.company_id WHERE a.deleted_at is NULL  AND a.server_id = undefined),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual   WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual  WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-28 13:32:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;undefined&quot; does not exist
LINE 1: ...ny_id WHERE a.deleted_at is NULL AND a.virtual_id=undefined)...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-28 13:32:41 --> Query error: ERROR:  column "undefined" does not exist
LINE 1: ...ny_id WHERE a.deleted_at is NULL AND a.virtual_id=undefined)...
                                                             ^ - Invalid query: WITH x AS (SELECT a.*, b.server_name,c.rack_name,d.room_name,e.gedung_name,f.company_name FROM mst.t_virtual a LEFT JOIN mst.t_server b ON a.server_id = b.server_id LEFT JOIN mst.t_rack c ON b.rack_id = c.rack_id LEFT JOIN mst.t_room d ON c.room_id=d.room_id LEFT JOIN mst.t_gedung e ON d.gedung_id=e.gedung_id LEFT JOIN mst.t_company f ON e.company_id=f.company_id WHERE a.deleted_at is NULL AND a.virtual_id=undefined),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual   WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual  WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-28 13:32:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;undefined&quot; does not exist
LINE 1: ...ny_id WHERE a.deleted_at is NULL AND a.virtual_id=undefined)...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-28 13:32:42 --> Query error: ERROR:  column "undefined" does not exist
LINE 1: ...ny_id WHERE a.deleted_at is NULL AND a.virtual_id=undefined)...
                                                             ^ - Invalid query: WITH x AS (SELECT a.*, b.server_name,c.rack_name,d.room_name,e.gedung_name,f.company_name FROM mst.t_virtual a LEFT JOIN mst.t_server b ON a.server_id = b.server_id LEFT JOIN mst.t_rack c ON b.rack_id = c.rack_id LEFT JOIN mst.t_room d ON c.room_id=d.room_id LEFT JOIN mst.t_gedung e ON d.gedung_id=e.gedung_id LEFT JOIN mst.t_company f ON e.company_id=f.company_id WHERE a.deleted_at is NULL AND a.virtual_id=undefined),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual   WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual  WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-28 13:32:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;undefined&quot; does not exist
LINE 1: ...ny_id WHERE a.deleted_at is NULL AND a.virtual_id=undefined)...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-28 13:32:43 --> Query error: ERROR:  column "undefined" does not exist
LINE 1: ...ny_id WHERE a.deleted_at is NULL AND a.virtual_id=undefined)...
                                                             ^ - Invalid query: WITH x AS (SELECT a.*, b.server_name,c.rack_name,d.room_name,e.gedung_name,f.company_name FROM mst.t_virtual a LEFT JOIN mst.t_server b ON a.server_id = b.server_id LEFT JOIN mst.t_rack c ON b.rack_id = c.rack_id LEFT JOIN mst.t_room d ON c.room_id=d.room_id LEFT JOIN mst.t_gedung e ON d.gedung_id=e.gedung_id LEFT JOIN mst.t_company f ON e.company_id=f.company_id WHERE a.deleted_at is NULL AND a.virtual_id=undefined),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual   WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual  WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-28 13:32:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;undefined&quot; does not exist
LINE 1: ...ny_id WHERE a.deleted_at is NULL AND a.virtual_id=undefined)...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-28 13:32:43 --> Query error: ERROR:  column "undefined" does not exist
LINE 1: ...ny_id WHERE a.deleted_at is NULL AND a.virtual_id=undefined)...
                                                             ^ - Invalid query: WITH x AS (SELECT a.*, b.server_name,c.rack_name,d.room_name,e.gedung_name,f.company_name FROM mst.t_virtual a LEFT JOIN mst.t_server b ON a.server_id = b.server_id LEFT JOIN mst.t_rack c ON b.rack_id = c.rack_id LEFT JOIN mst.t_room d ON c.room_id=d.room_id LEFT JOIN mst.t_gedung e ON d.gedung_id=e.gedung_id LEFT JOIN mst.t_company f ON e.company_id=f.company_id WHERE a.deleted_at is NULL AND a.virtual_id=undefined),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual   WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual  WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-28 13:32:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;undefined&quot; does not exist
LINE 1: ...ny_id WHERE a.deleted_at is NULL AND a.virtual_id=undefined)...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-28 13:32:43 --> Query error: ERROR:  column "undefined" does not exist
LINE 1: ...ny_id WHERE a.deleted_at is NULL AND a.virtual_id=undefined)...
                                                             ^ - Invalid query: WITH x AS (SELECT a.*, b.server_name,c.rack_name,d.room_name,e.gedung_name,f.company_name FROM mst.t_virtual a LEFT JOIN mst.t_server b ON a.server_id = b.server_id LEFT JOIN mst.t_rack c ON b.rack_id = c.rack_id LEFT JOIN mst.t_room d ON c.room_id=d.room_id LEFT JOIN mst.t_gedung e ON d.gedung_id=e.gedung_id LEFT JOIN mst.t_company f ON e.company_id=f.company_id WHERE a.deleted_at is NULL AND a.virtual_id=undefined),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual   WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual  WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-28 13:32:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;undefined&quot; does not exist
LINE 1: ...ny_id WHERE a.deleted_at is NULL AND a.virtual_id=undefined)...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-28 13:32:49 --> Query error: ERROR:  column "undefined" does not exist
LINE 1: ...ny_id WHERE a.deleted_at is NULL AND a.virtual_id=undefined)...
                                                             ^ - Invalid query: WITH x AS (SELECT a.*, b.server_name,c.rack_name,d.room_name,e.gedung_name,f.company_name FROM mst.t_virtual a LEFT JOIN mst.t_server b ON a.server_id = b.server_id LEFT JOIN mst.t_rack c ON b.rack_id = c.rack_id LEFT JOIN mst.t_room d ON c.room_id=d.room_id LEFT JOIN mst.t_gedung e ON d.gedung_id=e.gedung_id LEFT JOIN mst.t_company f ON e.company_id=f.company_id WHERE a.deleted_at is NULL AND a.virtual_id=undefined),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual   WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual  WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-28 13:41:21 --> 404 Page Not Found: /index
ERROR - 2022-04-28 13:41:21 --> 404 Page Not Found: /index
ERROR - 2022-04-28 13:41:21 --> 404 Page Not Found: /index
ERROR - 2022-04-28 13:41:21 --> 404 Page Not Found: /index
ERROR - 2022-04-28 13:41:25 --> 404 Page Not Found: /index
ERROR - 2022-04-28 13:41:25 --> 404 Page Not Found: /index
ERROR - 2022-04-28 13:41:25 --> 404 Page Not Found: /index
ERROR - 2022-04-28 13:41:25 --> 404 Page Not Found: /index
ERROR - 2022-04-28 13:42:42 --> 404 Page Not Found: /index
ERROR - 2022-04-28 13:42:42 --> 404 Page Not Found: /index
ERROR - 2022-04-28 13:42:43 --> 404 Page Not Found: /index
ERROR - 2022-04-28 13:42:43 --> 404 Page Not Found: /index
ERROR - 2022-04-28 13:44:49 --> 404 Page Not Found: /index
ERROR - 2022-04-28 13:44:49 --> 404 Page Not Found: /index
ERROR - 2022-04-28 13:44:49 --> 404 Page Not Found: /index
ERROR - 2022-04-28 13:44:49 --> 404 Page Not Found: /index
ERROR - 2022-04-28 13:45:15 --> 404 Page Not Found: /index
ERROR - 2022-04-28 13:45:16 --> 404 Page Not Found: /index
ERROR - 2022-04-28 13:45:16 --> 404 Page Not Found: /index
ERROR - 2022-04-28 13:45:16 --> 404 Page Not Found: /index
ERROR - 2022-04-28 13:46:13 --> 404 Page Not Found: /index
ERROR - 2022-04-28 13:46:13 --> 404 Page Not Found: /index
ERROR - 2022-04-28 13:46:14 --> 404 Page Not Found: /index
ERROR - 2022-04-28 13:46:14 --> 404 Page Not Found: /index
ERROR - 2022-04-28 13:48:30 --> 404 Page Not Found: /index
ERROR - 2022-04-28 13:48:30 --> 404 Page Not Found: /index
ERROR - 2022-04-28 13:48:31 --> 404 Page Not Found: /index
ERROR - 2022-04-28 13:48:31 --> 404 Page Not Found: /index
