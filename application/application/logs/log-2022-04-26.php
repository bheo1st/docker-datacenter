<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-04-26 03:30:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;null&quot;
LINE 2: WHERE &quot;room_id&quot; = 'null'
                          ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 03:30:32 --> Query error: ERROR:  invalid input syntax for integer: "null"
LINE 2: WHERE "room_id" = 'null'
                          ^ - Invalid query: UPDATE "mst"."t_room" SET "deleted_at" = 'now()'
WHERE "room_id" = 'null'
ERROR - 2022-04-26 03:36:07 --> 404 Page Not Found: /index
ERROR - 2022-04-26 03:43:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;c&quot;
LINE 1: WITH x AS (SELECT a.*,b.room_name,c.gedung_name,d.company_na...
                                          ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 03:43:25 --> Query error: ERROR:  missing FROM-clause entry for table "c"
LINE 1: WITH x AS (SELECT a.*,b.room_name,c.gedung_name,d.company_na...
                                          ^ - Invalid query: WITH x AS (SELECT a.*,b.room_name,c.gedung_name,d.company_name FROM mst.t_rack a LEFT JOIN mst.t_room b  ON a.rack_id=b.room_id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_rack WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_rack WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 03:43:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;c&quot;
LINE 1: WITH x AS (SELECT a.*,b.room_name,c.gedung_name,d.company_na...
                                          ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 03:43:27 --> Query error: ERROR:  missing FROM-clause entry for table "c"
LINE 1: WITH x AS (SELECT a.*,b.room_name,c.gedung_name,d.company_na...
                                          ^ - Invalid query: WITH x AS (SELECT a.*,b.room_name,c.gedung_name,d.company_name FROM mst.t_rack a LEFT JOIN mst.t_room b  ON a.rack_id=b.room_id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_rack WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_rack WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 03:43:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;c&quot;
LINE 1: WITH x AS (SELECT a.*,b.room_name,c.gedung_name,d.company_na...
                                          ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 03:43:27 --> Query error: ERROR:  missing FROM-clause entry for table "c"
LINE 1: WITH x AS (SELECT a.*,b.room_name,c.gedung_name,d.company_na...
                                          ^ - Invalid query: WITH x AS (SELECT a.*,b.room_name,c.gedung_name,d.company_name FROM mst.t_rack a LEFT JOIN mst.t_room b  ON a.rack_id=b.room_id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_rack WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_rack WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 03:43:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;c&quot;
LINE 1: WITH x AS (SELECT a.*,b.room_name,c.gedung_name,d.company_na...
                                          ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 03:43:27 --> Query error: ERROR:  missing FROM-clause entry for table "c"
LINE 1: WITH x AS (SELECT a.*,b.room_name,c.gedung_name,d.company_na...
                                          ^ - Invalid query: WITH x AS (SELECT a.*,b.room_name,c.gedung_name,d.company_name FROM mst.t_rack a LEFT JOIN mst.t_room b  ON a.rack_id=b.room_id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_rack WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_rack WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 03:43:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;c&quot;
LINE 1: WITH x AS (SELECT a.*,b.room_name,c.gedung_name,d.company_na...
                                          ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 03:43:27 --> Query error: ERROR:  missing FROM-clause entry for table "c"
LINE 1: WITH x AS (SELECT a.*,b.room_name,c.gedung_name,d.company_na...
                                          ^ - Invalid query: WITH x AS (SELECT a.*,b.room_name,c.gedung_name,d.company_name FROM mst.t_rack a LEFT JOIN mst.t_room b  ON a.rack_id=b.room_id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_rack WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_rack WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 03:46:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid reference to FROM-clause entry for table &quot;t_rack&quot;
LINE 1: ...LECT * FROM mst.t_rack a LEFT JOIN mst.t_room  ON mst.t_rack...
                                                             ^
HINT:  Perhaps you meant to reference the table alias &quot;a&quot;. C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 03:46:09 --> Query error: ERROR:  invalid reference to FROM-clause entry for table "t_rack"
LINE 1: ...LECT * FROM mst.t_rack a LEFT JOIN mst.t_room  ON mst.t_rack...
                                                             ^
HINT:  Perhaps you meant to reference the table alias "a". - Invalid query: WITH x AS (SELECT * FROM mst.t_rack a LEFT JOIN mst.t_room  ON mst.t_rack.room_id =mst.t_room.room_id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_rack WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_rack WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 03:46:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid reference to FROM-clause entry for table &quot;t_rack&quot;
LINE 1: ...LECT * FROM mst.t_rack a LEFT JOIN mst.t_room  ON mst.t_rack...
                                                             ^
HINT:  Perhaps you meant to reference the table alias &quot;a&quot;. C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 03:46:11 --> Query error: ERROR:  invalid reference to FROM-clause entry for table "t_rack"
LINE 1: ...LECT * FROM mst.t_rack a LEFT JOIN mst.t_room  ON mst.t_rack...
                                                             ^
HINT:  Perhaps you meant to reference the table alias "a". - Invalid query: WITH x AS (SELECT * FROM mst.t_rack a LEFT JOIN mst.t_room  ON mst.t_rack.room_id =mst.t_room.room_id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_rack WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_rack WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 03:46:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid reference to FROM-clause entry for table &quot;t_rack&quot;
LINE 1: ...LECT * FROM mst.t_rack a LEFT JOIN mst.t_room  ON mst.t_rack...
                                                             ^
HINT:  Perhaps you meant to reference the table alias &quot;a&quot;. C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 03:46:11 --> Query error: ERROR:  invalid reference to FROM-clause entry for table "t_rack"
LINE 1: ...LECT * FROM mst.t_rack a LEFT JOIN mst.t_room  ON mst.t_rack...
                                                             ^
HINT:  Perhaps you meant to reference the table alias "a". - Invalid query: WITH x AS (SELECT * FROM mst.t_rack a LEFT JOIN mst.t_room  ON mst.t_rack.room_id =mst.t_room.room_id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_rack WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_rack WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 03:47:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid reference to FROM-clause entry for table &quot;t_rack&quot;
LINE 1: ...LECT * FROM mst.t_rack a LEFT JOIN mst.t_room  ON mst.t_rack...
                                                             ^
HINT:  Perhaps you meant to reference the table alias &quot;a&quot;. C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 03:47:03 --> Query error: ERROR:  invalid reference to FROM-clause entry for table "t_rack"
LINE 1: ...LECT * FROM mst.t_rack a LEFT JOIN mst.t_room  ON mst.t_rack...
                                                             ^
HINT:  Perhaps you meant to reference the table alias "a". - Invalid query: WITH x AS (SELECT * FROM mst.t_rack a LEFT JOIN mst.t_room  ON mst.t_rack.room_id =mst.t_room.room_id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_rack WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_rack WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 03:47:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid reference to FROM-clause entry for table &quot;t_rack&quot;
LINE 1: ...LECT * FROM mst.t_rack a LEFT JOIN mst.t_room  ON mst.t_rack...
                                                             ^
HINT:  Perhaps you meant to reference the table alias &quot;a&quot;. C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 03:47:04 --> Query error: ERROR:  invalid reference to FROM-clause entry for table "t_rack"
LINE 1: ...LECT * FROM mst.t_rack a LEFT JOIN mst.t_room  ON mst.t_rack...
                                                             ^
HINT:  Perhaps you meant to reference the table alias "a". - Invalid query: WITH x AS (SELECT * FROM mst.t_rack a LEFT JOIN mst.t_room  ON mst.t_rack.room_id =mst.t_room.room_id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_rack WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_rack WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 03:47:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid reference to FROM-clause entry for table &quot;t_rack&quot;
LINE 1: ...LECT * FROM mst.t_rack a LEFT JOIN mst.t_room  ON mst.t_rack...
                                                             ^
HINT:  Perhaps you meant to reference the table alias &quot;a&quot;. C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 03:47:04 --> Query error: ERROR:  invalid reference to FROM-clause entry for table "t_rack"
LINE 1: ...LECT * FROM mst.t_rack a LEFT JOIN mst.t_room  ON mst.t_rack...
                                                             ^
HINT:  Perhaps you meant to reference the table alias "a". - Invalid query: WITH x AS (SELECT * FROM mst.t_rack a LEFT JOIN mst.t_room  ON mst.t_rack.room_id =mst.t_room.room_id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_rack WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_rack WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 03:47:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid reference to FROM-clause entry for table &quot;t_rack&quot;
LINE 1: ...LECT * FROM mst.t_rack a LEFT JOIN mst.t_room  ON mst.t_rack...
                                                             ^
HINT:  Perhaps you meant to reference the table alias &quot;a&quot;. C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 03:47:04 --> Query error: ERROR:  invalid reference to FROM-clause entry for table "t_rack"
LINE 1: ...LECT * FROM mst.t_rack a LEFT JOIN mst.t_room  ON mst.t_rack...
                                                             ^
HINT:  Perhaps you meant to reference the table alias "a". - Invalid query: WITH x AS (SELECT * FROM mst.t_rack a LEFT JOIN mst.t_room  ON mst.t_rack.room_id =mst.t_room.room_id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_rack WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_rack WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 03:47:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid reference to FROM-clause entry for table &quot;t_rack&quot;
LINE 1: ...LECT * FROM mst.t_rack a LEFT JOIN mst.t_room  ON mst.t_rack...
                                                             ^
HINT:  Perhaps you meant to reference the table alias &quot;a&quot;. C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 03:47:04 --> Query error: ERROR:  invalid reference to FROM-clause entry for table "t_rack"
LINE 1: ...LECT * FROM mst.t_rack a LEFT JOIN mst.t_room  ON mst.t_rack...
                                                             ^
HINT:  Perhaps you meant to reference the table alias "a". - Invalid query: WITH x AS (SELECT * FROM mst.t_rack a LEFT JOIN mst.t_room  ON mst.t_rack.room_id =mst.t_room.room_id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_rack WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_rack WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 03:50:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;c&quot;
LINE 1: WITH x AS (SELECT a.*,b.room_name,c.gedung_name,d.company_na...
                                          ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 03:50:13 --> Query error: ERROR:  missing FROM-clause entry for table "c"
LINE 1: WITH x AS (SELECT a.*,b.room_name,c.gedung_name,d.company_na...
                                          ^ - Invalid query: WITH x AS (SELECT a.*,b.room_name,c.gedung_name,d.company_name FROM mst.t_rack a LEFT JOIN mst.t_room b  ON a.rack_id=b.room_id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_rack WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_rack WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 03:58:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;d&quot;
LINE 1: ... x AS (SELECT a.* , b.room_name , c.gedung_name , d.company_...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 03:58:53 --> Query error: ERROR:  missing FROM-clause entry for table "d"
LINE 1: ... x AS (SELECT a.* , b.room_name , c.gedung_name , d.company_...
                                                             ^ - Invalid query: WITH x AS (SELECT a.* , b.room_name , c.gedung_name , d.company_name FROM mst.t_rack a LEFT JOIN mst.t_room b  ON a.room_id=b.room_id LEFT JOIN mst.t_gedung c ON b.gedung_id=c.gedung_id ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_rack WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_rack WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 03:58:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;d&quot;
LINE 1: ... x AS (SELECT a.* , b.room_name , c.gedung_name , d.company_...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 03:58:58 --> Query error: ERROR:  missing FROM-clause entry for table "d"
LINE 1: ... x AS (SELECT a.* , b.room_name , c.gedung_name , d.company_...
                                                             ^ - Invalid query: WITH x AS (SELECT a.* , b.room_name , c.gedung_name , d.company_name FROM mst.t_rack a LEFT JOIN mst.t_room b  ON a.room_id=b.room_id LEFT JOIN mst.t_gedung c ON b.gedung_id=c.gedung_id ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_rack WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_rack WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 03:58:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;d&quot;
LINE 1: ... x AS (SELECT a.* , b.room_name , c.gedung_name , d.company_...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 03:58:58 --> Query error: ERROR:  missing FROM-clause entry for table "d"
LINE 1: ... x AS (SELECT a.* , b.room_name , c.gedung_name , d.company_...
                                                             ^ - Invalid query: WITH x AS (SELECT a.* , b.room_name , c.gedung_name , d.company_name FROM mst.t_rack a LEFT JOIN mst.t_room b  ON a.room_id=b.room_id LEFT JOIN mst.t_gedung c ON b.gedung_id=c.gedung_id ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_rack WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_rack WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 04:25:09 --> Severity: Notice --> Undefined offset: 0 C:\laragon\www\codeapp\application\modules\mst\controllers\C_room.php 63
ERROR - 2022-04-26 04:25:18 --> Severity: Notice --> Undefined offset: 0 C:\laragon\www\codeapp\application\modules\mst\controllers\C_room.php 63
ERROR - 2022-04-26 04:32:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 1: ... by a.created_at desc limit 10 offset 0 AND a. room_id =  ),
                                                                     ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 04:32:37 --> Query error: ERROR:  syntax error at or near ")"
LINE 1: ... by a.created_at desc limit 10 offset 0 AND a. room_id =  ),
                                                                     ^ - Invalid query: WITH x AS (SELECT a.*, b.gedung_name, c.company_name FROM mst.t_room a LEFT JOIN mst.t_gedung b ON a.gedung_id=b.gedung_id LEFT JOIN mst.t_company c ON b.company_id=c.company_id WHERE a.deleted_at is NULL   order by a.created_at desc limit 10 offset 0 AND a. room_id =  ),
        y AS (SELECT COUNT(*) AS record_total FROM mst.t_room WHERE deleted_at is NULL),
        z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_room WHERE deleted_at is NULL )
        SELECT x.*, y.*, z.*
        FROM x, y, z
ERROR - 2022-04-26 04:32:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 1: ... by a.created_at desc limit 10 offset 0 AND a. room_id =  ),
                                                                     ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 04:32:40 --> Query error: ERROR:  syntax error at or near ")"
LINE 1: ... by a.created_at desc limit 10 offset 0 AND a. room_id =  ),
                                                                     ^ - Invalid query: WITH x AS (SELECT a.*, b.gedung_name, c.company_name FROM mst.t_room a LEFT JOIN mst.t_gedung b ON a.gedung_id=b.gedung_id LEFT JOIN mst.t_company c ON b.company_id=c.company_id WHERE a.deleted_at is NULL   order by a.created_at desc limit 10 offset 0 AND a. room_id =  ),
        y AS (SELECT COUNT(*) AS record_total FROM mst.t_room WHERE deleted_at is NULL),
        z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_room WHERE deleted_at is NULL )
        SELECT x.*, y.*, z.*
        FROM x, y, z
ERROR - 2022-04-26 04:32:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 1: ... by a.created_at desc limit 10 offset 0 AND a. room_id =  ),
                                                                     ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 04:32:41 --> Query error: ERROR:  syntax error at or near ")"
LINE 1: ... by a.created_at desc limit 10 offset 0 AND a. room_id =  ),
                                                                     ^ - Invalid query: WITH x AS (SELECT a.*, b.gedung_name, c.company_name FROM mst.t_room a LEFT JOIN mst.t_gedung b ON a.gedung_id=b.gedung_id LEFT JOIN mst.t_company c ON b.company_id=c.company_id WHERE a.deleted_at is NULL   order by a.created_at desc limit 10 offset 0 AND a. room_id =  ),
        y AS (SELECT COUNT(*) AS record_total FROM mst.t_room WHERE deleted_at is NULL),
        z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_room WHERE deleted_at is NULL )
        SELECT x.*, y.*, z.*
        FROM x, y, z
ERROR - 2022-04-26 04:32:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 1: ... by a.created_at desc limit 10 offset 0 AND a. room_id =  ),
                                                                     ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 04:32:41 --> Query error: ERROR:  syntax error at or near ")"
LINE 1: ... by a.created_at desc limit 10 offset 0 AND a. room_id =  ),
                                                                     ^ - Invalid query: WITH x AS (SELECT a.*, b.gedung_name, c.company_name FROM mst.t_room a LEFT JOIN mst.t_gedung b ON a.gedung_id=b.gedung_id LEFT JOIN mst.t_company c ON b.company_id=c.company_id WHERE a.deleted_at is NULL   order by a.created_at desc limit 10 offset 0 AND a. room_id =  ),
        y AS (SELECT COUNT(*) AS record_total FROM mst.t_room WHERE deleted_at is NULL),
        z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_room WHERE deleted_at is NULL )
        SELECT x.*, y.*, z.*
        FROM x, y, z
ERROR - 2022-04-26 04:32:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 1: ... by a.created_at desc limit 10 offset 0 AND a. room_id =  ),
                                                                     ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 04:32:41 --> Query error: ERROR:  syntax error at or near ")"
LINE 1: ... by a.created_at desc limit 10 offset 0 AND a. room_id =  ),
                                                                     ^ - Invalid query: WITH x AS (SELECT a.*, b.gedung_name, c.company_name FROM mst.t_room a LEFT JOIN mst.t_gedung b ON a.gedung_id=b.gedung_id LEFT JOIN mst.t_company c ON b.company_id=c.company_id WHERE a.deleted_at is NULL   order by a.created_at desc limit 10 offset 0 AND a. room_id =  ),
        y AS (SELECT COUNT(*) AS record_total FROM mst.t_room WHERE deleted_at is NULL),
        z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_room WHERE deleted_at is NULL )
        SELECT x.*, y.*, z.*
        FROM x, y, z
ERROR - 2022-04-26 04:44:47 --> 404 Page Not Found: /index
ERROR - 2022-04-26 04:44:47 --> 404 Page Not Found: /index
ERROR - 2022-04-26 04:44:47 --> 404 Page Not Found: /index
ERROR - 2022-04-26 04:44:47 --> 404 Page Not Found: /index
ERROR - 2022-04-26 04:44:51 --> 404 Page Not Found: /index
ERROR - 2022-04-26 04:44:51 --> 404 Page Not Found: /index
ERROR - 2022-04-26 04:44:51 --> 404 Page Not Found: /index
ERROR - 2022-04-26 04:44:51 --> 404 Page Not Found: /index
ERROR - 2022-04-26 04:47:06 --> 404 Page Not Found: /index
ERROR - 2022-04-26 04:47:08 --> 404 Page Not Found: /index
ERROR - 2022-04-26 04:47:08 --> 404 Page Not Found: /index
ERROR - 2022-04-26 04:47:08 --> 404 Page Not Found: /index
ERROR - 2022-04-26 04:47:22 --> 404 Page Not Found: /index
ERROR - 2022-04-26 04:47:22 --> 404 Page Not Found: /index
ERROR - 2022-04-26 04:47:22 --> 404 Page Not Found: /index
ERROR - 2022-04-26 04:47:22 --> 404 Page Not Found: /index
ERROR - 2022-04-26 04:51:00 --> 404 Page Not Found: /index
ERROR - 2022-04-26 04:51:00 --> 404 Page Not Found: /index
ERROR - 2022-04-26 04:51:02 --> 404 Page Not Found: /index
ERROR - 2022-04-26 04:51:02 --> 404 Page Not Found: /index
ERROR - 2022-04-26 04:51:12 --> 404 Page Not Found: /index
ERROR - 2022-04-26 04:51:12 --> 404 Page Not Found: /index
ERROR - 2022-04-26 04:51:12 --> 404 Page Not Found: /index
ERROR - 2022-04-26 04:51:13 --> 404 Page Not Found: /index
ERROR - 2022-04-26 04:51:29 --> 404 Page Not Found: /index
ERROR - 2022-04-26 04:51:29 --> 404 Page Not Found: /index
ERROR - 2022-04-26 04:51:30 --> 404 Page Not Found: /index
ERROR - 2022-04-26 04:51:30 --> 404 Page Not Found: /index
ERROR - 2022-04-26 04:51:33 --> 404 Page Not Found: /index
ERROR - 2022-04-26 04:51:33 --> 404 Page Not Found: /index
ERROR - 2022-04-26 04:51:33 --> 404 Page Not Found: /index
ERROR - 2022-04-26 04:51:33 --> 404 Page Not Found: /index
ERROR - 2022-04-26 04:53:46 --> 404 Page Not Found: /index
ERROR - 2022-04-26 04:53:47 --> 404 Page Not Found: /index
ERROR - 2022-04-26 04:53:47 --> 404 Page Not Found: /index
ERROR - 2022-04-26 04:53:47 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:08:06 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:08:06 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:08:06 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:08:06 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:11:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;A-1&quot;
LINE 2: WHERE &quot;room_id&quot; = 'A-1'
                          ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 05:11:31 --> Query error: ERROR:  invalid input syntax for integer: "A-1"
LINE 2: WHERE "room_id" = 'A-1'
                          ^ - Invalid query: UPDATE "mst"."t_room" SET "deleted_at" = 'now()'
WHERE "room_id" = 'A-1'
ERROR - 2022-04-26 05:11:34 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:11:34 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:11:34 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:11:34 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:11:38 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:11:38 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:11:38 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:11:38 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:12:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;A-1&quot;
LINE 2: WHERE &quot;room_id&quot; = 'A-1'
                          ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 05:12:11 --> Query error: ERROR:  invalid input syntax for integer: "A-1"
LINE 2: WHERE "room_id" = 'A-1'
                          ^ - Invalid query: UPDATE "mst"."t_room" SET "deleted_at" = 'now()'
WHERE "room_id" = 'A-1'
ERROR - 2022-04-26 05:12:14 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:12:14 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:12:14 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:12:14 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:12:16 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:12:16 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:12:16 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:12:25 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:12:25 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:12:26 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:12:26 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:12:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;A-1&quot;
LINE 2: WHERE &quot;room_id&quot; = 'A-1'
                          ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 05:12:31 --> Query error: ERROR:  invalid input syntax for integer: "A-1"
LINE 2: WHERE "room_id" = 'A-1'
                          ^ - Invalid query: UPDATE "mst"."t_room" SET "deleted_at" = 'now()'
WHERE "room_id" = 'A-1'
ERROR - 2022-04-26 05:13:15 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:13:16 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:13:16 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:13:16 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:13:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;A-1&quot;
LINE 2: WHERE &quot;room_id&quot; = 'A-1'
                          ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 05:13:19 --> Query error: ERROR:  invalid input syntax for integer: "A-1"
LINE 2: WHERE "room_id" = 'A-1'
                          ^ - Invalid query: UPDATE "mst"."t_room" SET "deleted_at" = 'now()'
WHERE "room_id" = 'A-1'
ERROR - 2022-04-26 05:13:52 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:13:53 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:13:53 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:13:53 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:13:57 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:13:57 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:13:57 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:13:57 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:13:57 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:13:57 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:13:57 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:13:58 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:13:58 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:13:58 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:13:58 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:13:59 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:14:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;A-1&quot;
LINE 2: WHERE &quot;room_id&quot; = 'A-1'
                          ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 05:14:24 --> Query error: ERROR:  invalid input syntax for integer: "A-1"
LINE 2: WHERE "room_id" = 'A-1'
                          ^ - Invalid query: UPDATE "mst"."t_room" SET "deleted_at" = 'now()'
WHERE "room_id" = 'A-1'
ERROR - 2022-04-26 05:15:12 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:15:12 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:15:12 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:15:12 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:15:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;LT-3&quot;
LINE 2: WHERE &quot;room_id&quot; = 'LT-3'
                          ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 05:15:19 --> Query error: ERROR:  invalid input syntax for integer: "LT-3"
LINE 2: WHERE "room_id" = 'LT-3'
                          ^ - Invalid query: UPDATE "mst"."t_room" SET "deleted_at" = 'now()'
WHERE "room_id" = 'LT-3'
ERROR - 2022-04-26 05:15:58 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:15:59 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:15:59 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:15:59 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:16:06 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:16:06 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:16:06 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:16:06 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:16:11 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:16:12 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:16:12 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:16:12 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:16:19 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:16:19 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:16:19 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:16:20 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:17:23 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:17:24 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:17:24 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:17:24 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:17:30 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:17:30 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:17:30 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:17:31 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:17:38 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:17:38 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:17:38 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:17:38 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:17:49 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:17:49 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:17:49 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:17:50 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:17:53 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:17:53 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:17:53 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:17:54 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:17:59 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:18:00 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:18:00 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:18:00 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:23:11 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:23:12 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:23:12 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:23:12 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:23:17 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:23:17 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:23:17 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:23:17 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:26:20 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:26:21 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:26:21 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:26:21 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:26:51 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:26:51 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:26:51 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:26:52 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:28:51 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:28:52 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:28:52 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:28:53 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:29:11 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:29:11 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:29:11 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:29:12 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:43:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;LT-3&quot;
LINE 2: WHERE &quot;room_id&quot; = 'LT-3'
                          ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 05:43:51 --> Query error: ERROR:  invalid input syntax for integer: "LT-3"
LINE 2: WHERE "room_id" = 'LT-3'
                          ^ - Invalid query: UPDATE "mst"."t_room" SET "deleted_at" = 'now()'
WHERE "room_id" = 'LT-3'
ERROR - 2022-04-26 05:43:54 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:43:54 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:43:54 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:43:54 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:43:57 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:43:57 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:43:57 --> 404 Page Not Found: /index
ERROR - 2022-04-26 05:44:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;LT-3&quot;
LINE 2: WHERE &quot;room_id&quot; = 'LT-3'
                          ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 05:44:03 --> Query error: ERROR:  invalid input syntax for integer: "LT-3"
LINE 2: WHERE "room_id" = 'LT-3'
                          ^ - Invalid query: UPDATE "mst"."t_room" SET "deleted_at" = 'now()'
WHERE "room_id" = 'LT-3'
ERROR - 2022-04-26 05:52:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid reference to FROM-clause entry for table &quot;t_gedung&quot;
LINE 1: ...b.company_id WHERE a.deleted_at is NULL  order by mst.t_gedu...
                                                             ^
HINT:  Perhaps you meant to reference the table alias &quot;a&quot;. C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 05:52:34 --> Query error: ERROR:  invalid reference to FROM-clause entry for table "t_gedung"
LINE 1: ...b.company_id WHERE a.deleted_at is NULL  order by mst.t_gedu...
                                                             ^
HINT:  Perhaps you meant to reference the table alias "a". - Invalid query: WITH x AS (SELECT a.* , b.company_name FROM mst.t_gedung a LEFT JOIN  mst.t_company b ON a.company_id = b.company_id WHERE a.deleted_at is NULL  order by mst.t_gedung.created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 06:16:24 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:16:24 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:16:24 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:16:24 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:16:37 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:16:37 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:16:37 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:16:37 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:17:02 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:17:03 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:17:03 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:17:03 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:17:09 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:17:09 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:17:09 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:17:09 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:21:19 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:21:20 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:21:20 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:21:21 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:21:42 --> 404 Page Not Found: ../modules/mst/controllers/C_company/validate_companyUser
ERROR - 2022-04-26 06:21:51 --> 404 Page Not Found: ../modules/mst/controllers/C_company/validate_companyUser
ERROR - 2022-04-26 06:22:20 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:22:21 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:22:21 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:22:21 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:24:05 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:24:05 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:24:05 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:24:06 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:24:32 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:24:33 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:24:33 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:24:33 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:24:47 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:24:47 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:24:47 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:24:47 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:24:51 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:24:52 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:24:52 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:24:52 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:25:05 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:25:06 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:25:06 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:25:06 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:25:15 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:25:15 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:25:15 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:25:15 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:25:20 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:25:20 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:25:20 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:25:20 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:25:59 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:26:01 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:26:01 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:26:01 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:26:07 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:26:07 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:26:07 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:26:08 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:27:27 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:27:28 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:27:28 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:27:28 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:28:29 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:28:30 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:28:30 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:28:30 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:31:55 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:31:56 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:31:56 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:31:56 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:32:46 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:32:47 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:32:47 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:32:47 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:32:53 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:32:53 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:32:53 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:32:53 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:38:26 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:38:26 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:38:26 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:38:26 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:38:28 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:38:28 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:38:29 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:38:29 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:39:57 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:39:58 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:39:58 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:39:58 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:42:48 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:42:48 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:42:49 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:42:49 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:43:04 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:43:04 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:43:04 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:43:04 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:43:08 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:43:08 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:43:08 --> 404 Page Not Found: /index
ERROR - 2022-04-26 06:43:08 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:08:12 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:08:12 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:08:14 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:08:14 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:08:18 --> Severity: error --> Exception: Class 'M_virtual' not found C:\laragon\www\codeapp\application\third_party\MX\Loader.php 228
ERROR - 2022-04-26 07:08:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;mst.t_virtual&quot; does not exist
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE deleted_at is N...
                                 ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 07:08:36 --> Query error: ERROR:  relation "mst.t_virtual" does not exist
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE deleted_at is N...
                                 ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE deleted_at is NULL),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 07:09:27 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:09:27 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:09:28 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:09:28 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:10:32 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:10:32 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:10:33 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:10:33 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:13:07 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:13:07 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:13:08 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:13:08 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:13:33 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:13:33 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:13:34 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:13:34 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:13:42 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:13:42 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:13:42 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:13:42 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:23:44 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:23:45 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:23:46 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:23:46 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:23:51 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:23:51 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:23:51 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:23:51 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:23:57 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:23:58 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:23:58 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:23:58 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:24:00 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:24:01 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:24:01 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:24:01 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:35:02 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:35:02 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:35:03 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:35:03 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:35:17 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:35:17 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:35:17 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:35:17 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:35:21 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:35:21 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:35:21 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:35:21 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:40:23 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:40:23 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:40:23 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:40:23 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:42:51 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:42:51 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:42:51 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:42:51 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:45:30 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:45:30 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:45:30 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:45:30 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:45:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;t_virtual_server_pkey&quot;
DETAIL:  Key (virtual_id)=(1) already exists. C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 07:45:36 --> Query error: ERROR:  duplicate key value violates unique constraint "t_virtual_server_pkey"
DETAIL:  Key (virtual_id)=(1) already exists. - Invalid query: INSERT INTO "mst"."t_virtual" ("virtual_name", "virtual_ip", "virtual_username", "virtual_password", "created_at", "created_by") VALUES ('LEMI', '192.168.99.54', 'bheo2nd', 'gampang42', 'now()', 'admin')
ERROR - 2022-04-26 07:46:25 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:46:26 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:46:26 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:46:26 --> 404 Page Not Found: /index
ERROR - 2022-04-26 07:57:41 --> 404 Page Not Found: ../modules/mst/controllers//index
ERROR - 2022-04-26 07:57:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: ... mst.t_virtual WHERE deleted_at is NULL  order by a.created_...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 07:57:52 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: ... mst.t_virtual WHERE deleted_at is NULL  order by a.created_...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE deleted_at is NULL  order by a.created_by desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 07:59:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: ... mst.t_virtual WHERE deleted_at is NULL  order by a.created_...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 07:59:31 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: ... mst.t_virtual WHERE deleted_at is NULL  order by a.created_...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE deleted_at is NULL  order by a.created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 07:59:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: ... mst.t_virtual WHERE deleted_at is NULL  order by a.created_...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 07:59:32 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: ... mst.t_virtual WHERE deleted_at is NULL  order by a.created_...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE deleted_at is NULL  order by a.created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 07:59:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: ... mst.t_virtual WHERE deleted_at is NULL  order by a.created_...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 07:59:32 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: ... mst.t_virtual WHERE deleted_at is NULL  order by a.created_...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE deleted_at is NULL  order by a.created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 07:59:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: ... mst.t_virtual WHERE deleted_at is NULL  order by a.created_...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 07:59:32 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: ... mst.t_virtual WHERE deleted_at is NULL  order by a.created_...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE deleted_at is NULL  order by a.created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 07:59:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: ... mst.t_virtual WHERE deleted_at is NULL  order by a.created_...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 07:59:33 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: ... mst.t_virtual WHERE deleted_at is NULL  order by a.created_...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE deleted_at is NULL  order by a.created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 07:59:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: ... mst.t_virtual WHERE deleted_at is NULL  order by a.created_...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 07:59:33 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: ... mst.t_virtual WHERE deleted_at is NULL  order by a.created_...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE deleted_at is NULL  order by a.created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 07:59:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: ... mst.t_virtual WHERE deleted_at is NULL  order by a.created_...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 07:59:33 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: ... mst.t_virtual WHERE deleted_at is NULL  order by a.created_...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE deleted_at is NULL  order by a.created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 07:59:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: ... mst.t_virtual WHERE deleted_at is NULL  order by a.created_...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 07:59:34 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: ... mst.t_virtual WHERE deleted_at is NULL  order by a.created_...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE deleted_at is NULL  order by a.created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 07:59:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: ... mst.t_virtual WHERE deleted_at is NULL  order by a.created_...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 07:59:34 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: ... mst.t_virtual WHERE deleted_at is NULL  order by a.created_...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE deleted_at is NULL  order by a.created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:00:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AND&quot;
LINE 1: ...E deleted_at is NULL  order by virtual_name desc  AND (a.vir...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:00:57 --> Query error: ERROR:  syntax error at or near "AND"
LINE 1: ...E deleted_at is NULL  order by virtual_name desc  AND (a.vir...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE deleted_at is NULL  order by virtual_name desc  AND (a.virtual_name like '%V%' or a.virtual_username like'%V%')  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:01:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AND&quot;
LINE 1: ...RE deleted_at is NULL  order by virtual_name asc  AND (mst.t...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:01:35 --> Query error: ERROR:  syntax error at or near "AND"
LINE 1: ...RE deleted_at is NULL  order by virtual_name asc  AND (mst.t...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE deleted_at is NULL  order by virtual_name asc  AND (mst.t_virtual.virtual_name like '%V%' or mst.t_virtual.virtual_username like'%V%')  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:01:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AND&quot;
LINE 1: ...RE deleted_at is NULL  order by virtual_name asc  AND (mst.t...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:01:44 --> Query error: ERROR:  syntax error at or near "AND"
LINE 1: ...RE deleted_at is NULL  order by virtual_name asc  AND (mst.t...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE deleted_at is NULL  order by virtual_name asc  AND (mst.t_virtual.virtual_name like '%a%' or mst.t_virtual.virtual_username like'%a%')  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:03:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AND&quot;
LINE 1: ...RE deleted_at is NULL  order by virtual_name asc  AND (a.vir...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:03:08 --> Query error: ERROR:  syntax error at or near "AND"
LINE 1: ...RE deleted_at is NULL  order by virtual_name asc  AND (a.vir...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE deleted_at is NULL  order by virtual_name asc  AND (a.virtual_name like '%a%' or a.virtual_username like'%a%')  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:03:21 --> 404 Page Not Found: /index
ERROR - 2022-04-26 08:03:21 --> 404 Page Not Found: /index
ERROR - 2022-04-26 08:03:21 --> 404 Page Not Found: /index
ERROR - 2022-04-26 08:03:21 --> 404 Page Not Found: /index
ERROR - 2022-04-26 08:03:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AND&quot;
LINE 1: ...RE deleted_at is NULL  order by virtual_name asc  AND (a.vir...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:03:23 --> Query error: ERROR:  syntax error at or near "AND"
LINE 1: ...RE deleted_at is NULL  order by virtual_name asc  AND (a.vir...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE deleted_at is NULL  order by virtual_name asc  AND (a.virtual_name like '%a%' or a.virtual_username like'%a%')  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:03:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AND&quot;
LINE 1: ...RE deleted_at is NULL  order by virtual_name asc  AND (a.vir...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:03:53 --> Query error: ERROR:  syntax error at or near "AND"
LINE 1: ...RE deleted_at is NULL  order by virtual_name asc  AND (a.vir...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE deleted_at is NULL  order by virtual_name asc  AND (a.virtual_name like '%L%' or a.virtual_username like'%L%')  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:04:28 --> 404 Page Not Found: /index
ERROR - 2022-04-26 08:04:28 --> 404 Page Not Found: /index
ERROR - 2022-04-26 08:04:28 --> 404 Page Not Found: /index
ERROR - 2022-04-26 08:04:28 --> 404 Page Not Found: /index
ERROR - 2022-04-26 08:04:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AND&quot;
LINE 1: ...E a.deleted_at is NULL  order by gedung_name asc  AND (a.ged...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:04:30 --> Query error: ERROR:  syntax error at or near "AND"
LINE 1: ...E a.deleted_at is NULL  order by gedung_name asc  AND (a.ged...
                                                             ^ - Invalid query: WITH x AS (SELECT a.* , b.company_name FROM mst.t_gedung a LEFT JOIN  mst.t_company b ON a.company_id = b.company_id WHERE a.deleted_at is NULL  order by gedung_name asc  AND (a.gedung_name like'%a%' or a.gedung_address like'%a%' or b.company_name like'%a%' )  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:04:41 --> 404 Page Not Found: /index
ERROR - 2022-04-26 08:04:42 --> 404 Page Not Found: /index
ERROR - 2022-04-26 08:04:42 --> 404 Page Not Found: /index
ERROR - 2022-04-26 08:04:42 --> 404 Page Not Found: /index
ERROR - 2022-04-26 08:04:52 --> 404 Page Not Found: /index
ERROR - 2022-04-26 08:04:53 --> 404 Page Not Found: /index
ERROR - 2022-04-26 08:04:53 --> 404 Page Not Found: /index
ERROR - 2022-04-26 08:04:54 --> 404 Page Not Found: /index
ERROR - 2022-04-26 08:08:16 --> 404 Page Not Found: /index
ERROR - 2022-04-26 08:08:22 --> 404 Page Not Found: /index
ERROR - 2022-04-26 08:08:22 --> 404 Page Not Found: /index
ERROR - 2022-04-26 08:08:23 --> 404 Page Not Found: /index
ERROR - 2022-04-26 08:08:53 --> 404 Page Not Found: /index
ERROR - 2022-04-26 08:08:54 --> 404 Page Not Found: /index
ERROR - 2022-04-26 08:08:54 --> 404 Page Not Found: /index
ERROR - 2022-04-26 08:08:55 --> 404 Page Not Found: /index
ERROR - 2022-04-26 08:09:05 --> 404 Page Not Found: /index
ERROR - 2022-04-26 08:09:05 --> 404 Page Not Found: /index
ERROR - 2022-04-26 08:09:05 --> 404 Page Not Found: /index
ERROR - 2022-04-26 08:09:05 --> 404 Page Not Found: /index
ERROR - 2022-04-26 08:11:33 --> 404 Page Not Found: /index
ERROR - 2022-04-26 08:11:33 --> 404 Page Not Found: /index
ERROR - 2022-04-26 08:11:33 --> 404 Page Not Found: /index
ERROR - 2022-04-26 08:11:34 --> 404 Page Not Found: /index
ERROR - 2022-04-26 08:11:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AND&quot;
LINE 1: ...E a.deleted_at is NULL  order by gedung_name asc  AND (a.ged...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:11:37 --> Query error: ERROR:  syntax error at or near "AND"
LINE 1: ...E a.deleted_at is NULL  order by gedung_name asc  AND (a.ged...
                                                             ^ - Invalid query: WITH x AS (SELECT a.* , b.company_name FROM mst.t_gedung a LEFT JOIN  mst.t_company b ON a.company_id = b.company_id WHERE a.deleted_at is NULL  order by gedung_name asc  AND (a.gedung_name like'%C%' or a.gedung_address like'%C%' or b.company_name like'%C%' )  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:13:00 --> 404 Page Not Found: /index
ERROR - 2022-04-26 08:13:01 --> 404 Page Not Found: /index
ERROR - 2022-04-26 08:13:01 --> 404 Page Not Found: /index
ERROR - 2022-04-26 08:13:01 --> 404 Page Not Found: /index
ERROR - 2022-04-26 08:13:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AND&quot;
LINE 1: ...E a.deleted_at is NULL  order by gedung_name asc  AND (b.com...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:13:04 --> Query error: ERROR:  syntax error at or near "AND"
LINE 1: ...E a.deleted_at is NULL  order by gedung_name asc  AND (b.com...
                                                             ^ - Invalid query: WITH x AS (SELECT a.* , b.company_name FROM mst.t_gedung a LEFT JOIN  mst.t_company b ON a.company_id = b.company_id WHERE a.deleted_at is NULL  order by gedung_name asc  AND (b.company_name like'%a%')  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:13:52 --> 404 Page Not Found: /index
ERROR - 2022-04-26 08:13:52 --> 404 Page Not Found: /index
ERROR - 2022-04-26 08:13:52 --> 404 Page Not Found: /index
ERROR - 2022-04-26 08:13:52 --> 404 Page Not Found: /index
ERROR - 2022-04-26 08:13:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AND&quot;
LINE 1: ...E a.deleted_at is NULL  order by gedung_name asc  AND (mst.t...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:13:58 --> Query error: ERROR:  syntax error at or near "AND"
LINE 1: ...E a.deleted_at is NULL  order by gedung_name asc  AND (mst.t...
                                                             ^ - Invalid query: WITH x AS (SELECT a.* , b.company_name FROM mst.t_gedung a LEFT JOIN  mst.t_company b ON a.company_id = b.company_id WHERE a.deleted_at is NULL  order by gedung_name asc  AND (mst.t_company.company_name like'%J%')  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:14:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AND&quot;
LINE 1: ...E a.deleted_at is NULL  order by gedung_name asc  AND (a.rac...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:14:52 --> Query error: ERROR:  syntax error at or near "AND"
LINE 1: ...E a.deleted_at is NULL  order by gedung_name asc  AND (a.rac...
                                                             ^ - Invalid query: WITH x AS (SELECT a.* , b.company_name FROM mst.t_gedung a LEFT JOIN  mst.t_company b ON a.company_id = b.company_id WHERE a.deleted_at is NULL  order by gedung_name asc  AND (a.rack_name like'%a%' or b.room_name like'%a%' or c.gedung_name like'%a%' )  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:15:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AND&quot;
LINE 1: ...E a.deleted_at is NULL  order by gedung_name asc  AND (a.rac...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:15:34 --> Query error: ERROR:  syntax error at or near "AND"
LINE 1: ...E a.deleted_at is NULL  order by gedung_name asc  AND (a.rac...
                                                             ^ - Invalid query: WITH x AS (SELECT a.* , b.company_name FROM mst.t_gedung a LEFT JOIN  mst.t_company b ON a.company_id = b.company_id WHERE a.deleted_at is NULL  order by gedung_name asc  AND (a.rack_name like'%a%' or b.room_name like'%a%' or c.gedung_name like'%a%' )  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:15:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AND&quot;
LINE 1: ...E a.deleted_at is NULL  order by gedung_name asc  AND (a.rac...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:15:41 --> Query error: ERROR:  syntax error at or near "AND"
LINE 1: ...E a.deleted_at is NULL  order by gedung_name asc  AND (a.rac...
                                                             ^ - Invalid query: WITH x AS (SELECT a.* , b.company_name FROM mst.t_gedung a LEFT JOIN  mst.t_company b ON a.company_id = b.company_id WHERE a.deleted_at is NULL  order by gedung_name asc  AND (a.rack_name like'%J%' or b.room_name like'%J%' or c.gedung_name like'%J%' )  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:17:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AND&quot;
LINE 1: ...E a.deleted_at is NULL  order by gedung_name asc  AND (a.rac...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:17:03 --> Query error: ERROR:  syntax error at or near "AND"
LINE 1: ...E a.deleted_at is NULL  order by gedung_name asc  AND (a.rac...
                                                             ^ - Invalid query: WITH x AS (SELECT a.* , b.company_name FROM mst.t_gedung a LEFT JOIN  mst.t_company b ON a.company_id = b.company_id WHERE a.deleted_at is NULL  order by gedung_name asc  AND (a.rack_name like'%a%' or b.room_name like'%a%' or c.gedung_name like'%a%' )  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:17:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AND&quot;
LINE 1: ...E a.deleted_at is NULL  order by gedung_name asc  AND (a.rac...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:17:09 --> Query error: ERROR:  syntax error at or near "AND"
LINE 1: ...E a.deleted_at is NULL  order by gedung_name asc  AND (a.rac...
                                                             ^ - Invalid query: WITH x AS (SELECT a.* , b.company_name FROM mst.t_gedung a LEFT JOIN  mst.t_company b ON a.company_id = b.company_id WHERE a.deleted_at is NULL  order by gedung_name asc  AND (a.rack_name like'%asds%' or b.room_name like'%asds%' or c.gedung_name like'%asds%' )  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:17:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AND&quot;
LINE 1: ...E a.deleted_at is NULL  order by gedung_name asc  AND (a.rac...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:17:10 --> Query error: ERROR:  syntax error at or near "AND"
LINE 1: ...E a.deleted_at is NULL  order by gedung_name asc  AND (a.rac...
                                                             ^ - Invalid query: WITH x AS (SELECT a.* , b.company_name FROM mst.t_gedung a LEFT JOIN  mst.t_company b ON a.company_id = b.company_id WHERE a.deleted_at is NULL  order by gedung_name asc  AND (a.rack_name like'%asdsa%' or b.room_name like'%asdsa%' or c.gedung_name like'%asdsa%' )  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:17:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AND&quot;
LINE 1: ...E a.deleted_at is NULL  order by gedung_name asc  AND (a.rac...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:17:12 --> Query error: ERROR:  syntax error at or near "AND"
LINE 1: ...E a.deleted_at is NULL  order by gedung_name asc  AND (a.rac...
                                                             ^ - Invalid query: WITH x AS (SELECT a.* , b.company_name FROM mst.t_gedung a LEFT JOIN  mst.t_company b ON a.company_id = b.company_id WHERE a.deleted_at is NULL  order by gedung_name asc  AND (a.rack_name like'%asdsaa%' or b.room_name like'%asdsaa%' or c.gedung_name like'%asdsaa%' )  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:18:45 --> Severity: Notice --> Undefined variable: searchValue C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 20
ERROR - 2022-04-26 08:18:46 --> Severity: Notice --> Undefined variable: searchValue C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 20
ERROR - 2022-04-26 08:18:53 --> Severity: Notice --> Undefined variable: searchValue C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 20
ERROR - 2022-04-26 08:18:54 --> Severity: Notice --> Undefined variable: searchValue C:\laragon\www\codeapp\application\modules\mst\models\M_gedung.php 20
ERROR - 2022-04-26 08:19:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AND&quot;
LINE 1: ...E a.deleted_at is NULL  order by gedung_name asc  AND (a.rac...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:19:26 --> Query error: ERROR:  syntax error at or near "AND"
LINE 1: ...E a.deleted_at is NULL  order by gedung_name asc  AND (a.rac...
                                                             ^ - Invalid query: WITH x AS (SELECT a.* , b.company_name FROM mst.t_gedung a LEFT JOIN  mst.t_company b ON a.company_id = b.company_id WHERE a.deleted_at is NULL  order by gedung_name asc  AND (a.rack_name like'%a%' or b.room_name like'%a%' or c.gedung_name like'%a%' )  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:22:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  argument of AND must be type boolean, not type integer
LINE 1: ...is NULL  order by gedung_name asc limit 10 offset 0  AND (a....
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:22:50 --> Query error: ERROR:  argument of AND must be type boolean, not type integer
LINE 1: ...is NULL  order by gedung_name asc limit 10 offset 0  AND (a....
                                                             ^ - Invalid query: WITH x AS (SELECT a.* , b.company_name FROM mst.t_gedung a LEFT JOIN  mst.t_company b ON a.company_id = b.company_id WHERE a.deleted_at is NULL  order by gedung_name asc limit 10 offset 0  AND (a.gedung_name like'%a%') ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:23:03 --> Severity: Notice --> Undefined variable: content C:\laragon\www\codeapp\application\modules\mst\controllers\C_room.php 73
ERROR - 2022-04-26 08:23:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  argument of AND must be type boolean, not type integer
LINE 1: ...is NULL  order by gedung_name asc limit 10 offset 0  AND (a....
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:23:22 --> Query error: ERROR:  argument of AND must be type boolean, not type integer
LINE 1: ...is NULL  order by gedung_name asc limit 10 offset 0  AND (a....
                                                             ^ - Invalid query: WITH x AS (SELECT a.* , b.company_name FROM mst.t_gedung a LEFT JOIN  mst.t_company b ON a.company_id = b.company_id WHERE a.deleted_at is NULL  order by gedung_name asc limit 10 offset 0  AND (a.gedung_name like'%a%') ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:24:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  argument of AND must be type boolean, not type integer
LINE 1: ...is NULL  order by gedung_name asc limit 10 offset 0  AND (ge...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:24:22 --> Query error: ERROR:  argument of AND must be type boolean, not type integer
LINE 1: ...is NULL  order by gedung_name asc limit 10 offset 0  AND (ge...
                                                             ^ - Invalid query: WITH x AS (SELECT a.* , b.company_name FROM mst.t_gedung a LEFT JOIN  mst.t_company b ON a.company_id = b.company_id WHERE a.deleted_at is NULL  order by gedung_name asc limit 10 offset 0  AND (gedung_name like'%a%') ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:29:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;deleted_at&quot; is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:29:10 --> Query error: ERROR:  column reference "deleted_at" is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung LEFT JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE deleted_at is NULL  order by a.created_at desc limit 10 offset 0 ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:29:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;deleted_at&quot; is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:29:36 --> Query error: ERROR:  column reference "deleted_at" is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung LEFT JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE deleted_at is NULL  order by mst.t_gedung.created_at desc limit 10 offset 0 ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:29:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;deleted_at&quot; is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:29:37 --> Query error: ERROR:  column reference "deleted_at" is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung LEFT JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE deleted_at is NULL  order by mst.t_gedung.created_at desc limit 10 offset 0 ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:29:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;deleted_at&quot; is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:29:37 --> Query error: ERROR:  column reference "deleted_at" is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung LEFT JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE deleted_at is NULL  order by mst.t_gedung.created_at desc limit 10 offset 0 ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:30:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;deleted_at&quot; is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:30:18 --> Query error: ERROR:  column reference "deleted_at" is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung LEFT JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE deleted_at is NULL  order by mst.t_gedung.created_at desc limit 10 offset 0 ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:30:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;deleted_at&quot; is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:30:19 --> Query error: ERROR:  column reference "deleted_at" is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung LEFT JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE deleted_at is NULL  order by mst.t_gedung.created_at desc limit 10 offset 0 ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:30:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;deleted_at&quot; is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:30:19 --> Query error: ERROR:  column reference "deleted_at" is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung LEFT JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE deleted_at is NULL  order by mst.t_gedung.created_at desc limit 10 offset 0 ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:30:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;deleted_at&quot; is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:30:19 --> Query error: ERROR:  column reference "deleted_at" is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung LEFT JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE deleted_at is NULL  order by mst.t_gedung.created_at desc limit 10 offset 0 ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:30:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;deleted_at&quot; is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:30:20 --> Query error: ERROR:  column reference "deleted_at" is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung LEFT JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE deleted_at is NULL  order by mst.t_gedung.created_at desc limit 10 offset 0 ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:30:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;deleted_at&quot; is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:30:20 --> Query error: ERROR:  column reference "deleted_at" is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung LEFT JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE deleted_at is NULL  order by mst.t_gedung.created_at desc limit 10 offset 0 ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:30:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;deleted_at&quot; is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:30:20 --> Query error: ERROR:  column reference "deleted_at" is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung LEFT JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE deleted_at is NULL  order by mst.t_gedung.created_at desc limit 10 offset 0 ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:31:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;deleted_at&quot; is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:31:10 --> Query error: ERROR:  column reference "deleted_at" is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE deleted_at is NULL  order by mst.t_gedung.created_at desc limit 10 offset 0 ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:31:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;deleted_at&quot; is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:31:11 --> Query error: ERROR:  column reference "deleted_at" is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE deleted_at is NULL  order by mst.t_gedung.created_at desc limit 10 offset 0 ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:31:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;deleted_at&quot; is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:31:11 --> Query error: ERROR:  column reference "deleted_at" is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE deleted_at is NULL  order by mst.t_gedung.created_at desc limit 10 offset 0 ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:31:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;deleted_at&quot; is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:31:11 --> Query error: ERROR:  column reference "deleted_at" is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE deleted_at is NULL  order by mst.t_gedung.created_at desc limit 10 offset 0 ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:31:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;deleted_at&quot; is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:31:11 --> Query error: ERROR:  column reference "deleted_at" is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE deleted_at is NULL  order by mst.t_gedung.created_at desc limit 10 offset 0 ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:31:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;deleted_at&quot; is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:31:11 --> Query error: ERROR:  column reference "deleted_at" is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE deleted_at is NULL  order by mst.t_gedung.created_at desc limit 10 offset 0 ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:31:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;deleted_at&quot; is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:31:11 --> Query error: ERROR:  column reference "deleted_at" is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE deleted_at is NULL  order by mst.t_gedung.created_at desc limit 10 offset 0 ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:31:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;deleted_at&quot; is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:31:12 --> Query error: ERROR:  column reference "deleted_at" is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE deleted_at is NULL  order by mst.t_gedung.created_at desc limit 10 offset 0 ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:31:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;deleted_at&quot; is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:31:12 --> Query error: ERROR:  column reference "deleted_at" is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE deleted_at is NULL  order by mst.t_gedung.created_at desc limit 10 offset 0 ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:31:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;deleted_at&quot; is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:31:12 --> Query error: ERROR:  column reference "deleted_at" is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE deleted_at is NULL  order by mst.t_gedung.created_at desc limit 10 offset 0 ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:31:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;deleted_at&quot; is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:31:12 --> Query error: ERROR:  column reference "deleted_at" is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN  mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE deleted_at is NULL  order by mst.t_gedung.created_at desc limit 10 offset 0 ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:32:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;deleted_at&quot; is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:32:18 --> Query error: ERROR:  column reference "deleted_at" is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE deleted_at is NULL  order by mst.t_gedung.created_at desc limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:32:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;deleted_at&quot; is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:32:18 --> Query error: ERROR:  column reference "deleted_at" is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE deleted_at is NULL  order by mst.t_gedung.created_at desc limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:32:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;deleted_at&quot; is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:32:18 --> Query error: ERROR:  column reference "deleted_at" is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE deleted_at is NULL  order by mst.t_gedung.created_at desc limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:32:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;deleted_at&quot; is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:32:19 --> Query error: ERROR:  column reference "deleted_at" is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE deleted_at is NULL  order by mst.t_gedung.created_at desc limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:32:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;deleted_at&quot; is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:32:29 --> Query error: ERROR:  column reference "deleted_at" is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE deleted_at is NULL),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:32:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;deleted_at&quot; is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:32:29 --> Query error: ERROR:  column reference "deleted_at" is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE deleted_at is NULL),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:32:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;deleted_at&quot; is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:32:29 --> Query error: ERROR:  column reference "deleted_at" is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE deleted_at is NULL),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:32:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;deleted_at&quot; is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:32:30 --> Query error: ERROR:  column reference "deleted_at" is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE deleted_at is NULL),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:32:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;deleted_at&quot; is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:32:30 --> Query error: ERROR:  column reference "deleted_at" is ambiguous
LINE 1: ...edung.company_id = mst.t_company.company_id WHERE deleted_at...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_gedung JOIN mst.t_company ON mst.t_gedung.company_id = mst.t_company.company_id WHERE deleted_at is NULL),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:37:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;NULL&quot;
LINE 1: ... ON a.company_id = b.company_id WHERE a.created_atis NULL ),
                                                                ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:37:53 --> Query error: ERROR:  syntax error at or near "NULL"
LINE 1: ... ON a.company_id = b.company_id WHERE a.created_atis NULL ),
                                                                ^ - Invalid query: WITH x AS (SELECT a.*, b.company_name FROM mst.t_gedung a LEFT JOIN mst.t_company b ON a.company_id = b.company_id WHERE a.created_atis NULL ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:38:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;NULL&quot;
LINE 1: ... ON a.company_id = b.company_id WHERE a.created_atis NULL ),
                                                                ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:38:10 --> Query error: ERROR:  syntax error at or near "NULL"
LINE 1: ... ON a.company_id = b.company_id WHERE a.created_atis NULL ),
                                                                ^ - Invalid query: WITH x AS (SELECT a.*, b.company_name FROM mst.t_gedung a LEFT JOIN mst.t_company b ON a.company_id = b.company_id WHERE a.created_atis NULL ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:38:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;NULL&quot;
LINE 1: ... ON a.company_id = b.company_id WHERE a.created_atis NULL ),
                                                                ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:38:11 --> Query error: ERROR:  syntax error at or near "NULL"
LINE 1: ... ON a.company_id = b.company_id WHERE a.created_atis NULL ),
                                                                ^ - Invalid query: WITH x AS (SELECT a.*, b.company_name FROM mst.t_gedung a LEFT JOIN mst.t_company b ON a.company_id = b.company_id WHERE a.created_atis NULL ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:38:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;NULL&quot;
LINE 1: ... ON a.company_id = b.company_id WHERE a.created_atis NULL ),
                                                                ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:38:11 --> Query error: ERROR:  syntax error at or near "NULL"
LINE 1: ... ON a.company_id = b.company_id WHERE a.created_atis NULL ),
                                                                ^ - Invalid query: WITH x AS (SELECT a.*, b.company_name FROM mst.t_gedung a LEFT JOIN mst.t_company b ON a.company_id = b.company_id WHERE a.created_atis NULL ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 08:39:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid reference to FROM-clause entry for table &quot;t_gedung&quot;
LINE 1: ...d = b.company_id WHERE a.created_at is NULL  AND (mst.t_gedu...
                                                             ^
HINT:  Perhaps you meant to reference the table alias &quot;a&quot;. C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 08:39:49 --> Query error: ERROR:  invalid reference to FROM-clause entry for table "t_gedung"
LINE 1: ...d = b.company_id WHERE a.created_at is NULL  AND (mst.t_gedu...
                                                             ^
HINT:  Perhaps you meant to reference the table alias "a". - Invalid query: WITH x AS (SELECT a.*, b.company_name FROM mst.t_gedung a JOIN mst.t_company b ON a.company_id = b.company_id WHERE a.created_at is NULL  AND (mst.t_gedung.gedung_name like'%a%') ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 09:12:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 09:12:48 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is NULL  order by a.created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 09:12:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 09:12:55 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is NULL  order by a.created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 09:14:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: ... mst.t_virtual WHERE deleted_at is NULL  order by a.created_...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 09:14:36 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: ... mst.t_virtual WHERE deleted_at is NULL  order by a.created_...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE deleted_at is NULL  order by a.created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 09:14:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 09:14:53 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is NULL  order by created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 09:14:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 09:14:54 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is NULL  order by created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 09:14:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 09:14:54 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is NULL  order by created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 09:14:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 09:14:54 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is NULL  order by created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 09:14:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 09:14:55 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is NULL  order by created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 09:14:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 09:14:55 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is NULL  order by created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 09:14:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 09:14:55 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is NULL  order by created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 09:14:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 09:14:55 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is NULL  order by created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 09:15:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 09:15:21 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is NULL  order by mst.t_virtual.created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 09:15:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 09:15:23 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is NULL  order by mst.t_virtual.created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 09:15:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 09:15:23 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is NULL  order by mst.t_virtual.created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 09:15:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 09:15:23 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is NULL  order by mst.t_virtual.created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 09:15:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 09:15:23 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is NULL  order by mst.t_virtual.created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 09:15:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 09:15:23 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is NULL  order by mst.t_virtual.created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 09:15:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 09:15:24 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is NULL  order by mst.t_virtual.created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 09:15:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 09:15:24 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is NULL  order by mst.t_virtual.created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 09:15:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 09:15:24 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is NULL  order by mst.t_virtual.created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 09:15:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 09:15:24 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is NULL  order by mst.t_virtual.created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 09:15:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 09:15:25 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is NULL  order by mst.t_virtual.created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 09:15:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 09:15:25 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is NULL  order by mst.t_virtual.created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 09:15:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 09:15:25 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is NULL  order by mst.t_virtual.created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 09:15:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 09:15:26 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is NULL  order by mst.t_virtual.created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 09:15:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 09:15:26 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is NULL  order by mst.t_virtual.created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 09:15:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 09:15:26 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is NULL  order by mst.t_virtual.created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 09:15:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 09:15:27 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is NULL  order by mst.t_virtual.created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 09:15:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 09:15:27 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is NULL  order by mst.t_virtual.created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 09:15:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: ... mst.t_virtual WHERE deleted_at is NULL  order by a.created_...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 09:15:59 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: ... mst.t_virtual WHERE deleted_at is NULL  order by a.created_...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE deleted_at is NULL  order by a.created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 09:16:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: ... mst.t_virtual WHERE deleted_at is NULL  order by a.created_...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 09:16:00 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: ... mst.t_virtual WHERE deleted_at is NULL  order by a.created_...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE deleted_at is NULL  order by a.created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 09:16:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: ... mst.t_virtual WHERE deleted_at is NULL  order by a.created_...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 09:16:00 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: ... mst.t_virtual WHERE deleted_at is NULL  order by a.created_...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE deleted_at is NULL  order by a.created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 09:16:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: ... mst.t_virtual WHERE deleted_at is NULL  order by a.created_...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 09:16:00 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: ... mst.t_virtual WHERE deleted_at is NULL  order by a.created_...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE deleted_at is NULL  order by a.created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 09:16:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 09:16:22 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is NULL  order by a.created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 09:16:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 09:16:22 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is...
                                                     ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE a.deleted_at is NULL  order by a.created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 09:16:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: WITH x AS (SELECT a.* FROM mst.t_virtual WHERE a.deleted_at ...
                          ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 09:16:47 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: WITH x AS (SELECT a.* FROM mst.t_virtual WHERE a.deleted_at ...
                          ^ - Invalid query: WITH x AS (SELECT a.* FROM mst.t_virtual WHERE a.deleted_at is NULL  order by a.created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 09:16:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: WITH x AS (SELECT a.* FROM mst.t_virtual WHERE a.deleted_at ...
                          ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 09:16:48 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: WITH x AS (SELECT a.* FROM mst.t_virtual WHERE a.deleted_at ...
                          ^ - Invalid query: WITH x AS (SELECT a.* FROM mst.t_virtual WHERE a.deleted_at is NULL  order by a.created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 09:16:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: WITH x AS (SELECT a.* FROM mst.t_virtual WHERE a.deleted_at ...
                          ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 09:16:48 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: WITH x AS (SELECT a.* FROM mst.t_virtual WHERE a.deleted_at ...
                          ^ - Invalid query: WITH x AS (SELECT a.* FROM mst.t_virtual WHERE a.deleted_at is NULL  order by a.created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 09:16:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: WITH x AS (SELECT a.* FROM mst.t_virtual WHERE a.deleted_at ...
                          ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 09:16:48 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: WITH x AS (SELECT a.* FROM mst.t_virtual WHERE a.deleted_at ...
                          ^ - Invalid query: WITH x AS (SELECT a.* FROM mst.t_virtual WHERE a.deleted_at is NULL  order by a.created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 09:16:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: WITH x AS (SELECT a.* FROM mst.t_virtual WHERE a.deleted_at ...
                          ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 09:16:48 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: WITH x AS (SELECT a.* FROM mst.t_virtual WHERE a.deleted_at ...
                          ^ - Invalid query: WITH x AS (SELECT a.* FROM mst.t_virtual WHERE a.deleted_at is NULL  order by a.created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 09:16:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: WITH x AS (SELECT a.* FROM mst.t_virtual WHERE a.deleted_at ...
                          ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 09:16:49 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: WITH x AS (SELECT a.* FROM mst.t_virtual WHERE a.deleted_at ...
                          ^ - Invalid query: WITH x AS (SELECT a.* FROM mst.t_virtual WHERE a.deleted_at is NULL  order by a.created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 09:17:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AND&quot;
LINE 1: ... a.deleted_at is NULL  order by virtual_name asc  AND (a.vir...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 09:17:06 --> Query error: ERROR:  syntax error at or near "AND"
LINE 1: ... a.deleted_at is NULL  order by virtual_name asc  AND (a.vir...
                                                             ^ - Invalid query: WITH x AS (SELECT a.* FROM mst.t_virtual a WHERE a.deleted_at is NULL  order by virtual_name asc  AND (a.virtual_name like '%a%' or a.virtual_username like'%a%')  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 09:18:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AND&quot;
LINE 1: ... a.deleted_at is NULL  order by virtual_name asc  AND (a.vir...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 09:18:43 --> Query error: ERROR:  syntax error at or near "AND"
LINE 1: ... a.deleted_at is NULL  order by virtual_name asc  AND (a.vir...
                                                             ^ - Invalid query: WITH x AS (SELECT a.* FROM mst.t_virtual a WHERE a.deleted_at is NULL  order by virtual_name asc  AND (a.virtual_ip like '%a%')  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 09:18:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AND&quot;
LINE 1: ... a.deleted_at is NULL  order by virtual_name asc  AND (a.vir...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 09:18:47 --> Query error: ERROR:  syntax error at or near "AND"
LINE 1: ... a.deleted_at is NULL  order by virtual_name asc  AND (a.vir...
                                                             ^ - Invalid query: WITH x AS (SELECT a.* FROM mst.t_virtual a WHERE a.deleted_at is NULL  order by virtual_name asc  AND (a.virtual_ip like '%aa%')  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 09:18:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AND&quot;
LINE 1: ... a.deleted_at is NULL  order by virtual_name asc  AND (a.vir...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 09:18:52 --> Query error: ERROR:  syntax error at or near "AND"
LINE 1: ... a.deleted_at is NULL  order by virtual_name asc  AND (a.vir...
                                                             ^ - Invalid query: WITH x AS (SELECT a.* FROM mst.t_virtual a WHERE a.deleted_at is NULL  order by virtual_name asc  AND (a.virtual_ip like '%aad%')  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 09:18:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AND&quot;
LINE 1: ... a.deleted_at is NULL  order by virtual_name asc  AND (a.vir...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 09:18:57 --> Query error: ERROR:  syntax error at or near "AND"
LINE 1: ... a.deleted_at is NULL  order by virtual_name asc  AND (a.vir...
                                                             ^ - Invalid query: WITH x AS (SELECT a.* FROM mst.t_virtual a WHERE a.deleted_at is NULL  order by virtual_name asc  AND (a.virtual_ip like '%a%')  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 09:20:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AND&quot;
LINE 1: ... a.deleted_at is NULL  order by virtual_name asc  AND (a.vir...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 09:20:02 --> Query error: ERROR:  syntax error at or near "AND"
LINE 1: ... a.deleted_at is NULL  order by virtual_name asc  AND (a.vir...
                                                             ^ - Invalid query: WITH x AS (SELECT a.* FROM mst.t_virtual a WHERE a.deleted_at is NULL  order by virtual_name asc  AND (a.virtual_ip like '%a%')  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual a WHERE a.deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual a WHERE a.deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 09:20:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AND&quot;
LINE 1: ... a.deleted_at is NULL  order by virtual_name asc  AND (a.vir...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 09:20:36 --> Query error: ERROR:  syntax error at or near "AND"
LINE 1: ... a.deleted_at is NULL  order by virtual_name asc  AND (a.vir...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual a WHERE a.deleted_at is NULL  order by virtual_name asc  AND (a.virtual_ip like '%a%')  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 09:21:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: ... mst.t_virtual WHERE deleted_at is NULL  order by a.created_...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 09:21:42 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: ... mst.t_virtual WHERE deleted_at is NULL  order by a.created_...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE deleted_at is NULL  order by a.created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 09:21:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 1: ... mst.t_virtual WHERE deleted_at is NULL  order by a.created_...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 09:21:44 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 1: ... mst.t_virtual WHERE deleted_at is NULL  order by a.created_...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE deleted_at is NULL  order by a.created_at desc  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 09:22:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AND&quot;
LINE 1: ...RE deleted_at is NULL  order by virtual_name asc  AND (mst.t...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 09:22:21 --> Query error: ERROR:  syntax error at or near "AND"
LINE 1: ...RE deleted_at is NULL  order by virtual_name asc  AND (mst.t...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE deleted_at is NULL  order by virtual_name asc  AND (mst.t_virtual.virtual_ip like '%a%')  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 09:22:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AND&quot;
LINE 1: ...RE deleted_at is NULL  order by virtual_name asc  AND (mst.t...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 09:22:24 --> Query error: ERROR:  syntax error at or near "AND"
LINE 1: ...RE deleted_at is NULL  order by virtual_name asc  AND (mst.t...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE deleted_at is NULL  order by virtual_name asc  AND (mst.t_virtual.virtual_ip like '%ab%')  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 09:24:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AND&quot;
LINE 1: ...RE deleted_at is NULL  order by virtual_name asc  AND (virtu...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 09:24:02 --> Query error: ERROR:  syntax error at or near "AND"
LINE 1: ...RE deleted_at is NULL  order by virtual_name asc  AND (virtu...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE deleted_at is NULL  order by virtual_name asc  AND (virtual_name like '%a%')  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 09:25:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AND&quot;
LINE 1: ...RE deleted_at is NULL  order by virtual_name asc  AND (mst.t...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 09:25:19 --> Query error: ERROR:  syntax error at or near "AND"
LINE 1: ...RE deleted_at is NULL  order by virtual_name asc  AND (mst.t...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE deleted_at is NULL  order by virtual_name asc  AND (mst.t_virtual.virtual_name like '%a%')  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 09:25:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AND&quot;
LINE 1: ...RE deleted_at is NULL  order by virtual_name asc  AND (mst.t...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 09:25:29 --> Query error: ERROR:  syntax error at or near "AND"
LINE 1: ...RE deleted_at is NULL  order by virtual_name asc  AND (mst.t...
                                                             ^ - Invalid query: WITH x AS (SELECT * FROM mst.t_virtual WHERE deleted_at is NULL  order by virtual_name asc  AND (mst.t_virtual.virtual_name like '%aa%')  limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 09:37:34 --> 404 Page Not Found: ../modules/mst/controllers//index
ERROR - 2022-04-26 13:54:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid reference to FROM-clause entry for table &quot;t_company&quot;
LINE 1: ...y_id=b.company_id WHERE a.deleted_at is NULL  and mst.t_comp...
                                                             ^
HINT:  Perhaps you meant to reference the table alias &quot;b&quot;. C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 13:54:39 --> Query error: ERROR:  invalid reference to FROM-clause entry for table "t_company"
LINE 1: ...y_id=b.company_id WHERE a.deleted_at is NULL  and mst.t_comp...
                                                             ^
HINT:  Perhaps you meant to reference the table alias "b". - Invalid query: WITH x AS (SELECT a.* , b.company_name FROM mst.t_gedung a  LEFT JOIN mst.t_company b ON a.company_id=b.company_id WHERE a.deleted_at is NULL  and mst.t_company.company_id = '17'   order by a.created_at desc limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_gedung WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_gedung WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 13:55:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;t_company&quot;
LINE 1: ...M mst.t_virtual a WHERE a.deleted_at is NULL  and mst.t_comp...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 13:55:36 --> Query error: ERROR:  missing FROM-clause entry for table "t_company"
LINE 1: ...M mst.t_virtual a WHERE a.deleted_at is NULL  and mst.t_comp...
                                                             ^ - Invalid query: WITH x AS (SELECT a.* FROM mst.t_virtual a WHERE a.deleted_at is NULL  and mst.t_company.company_id = '17'   order by a.created_at desc limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 13:56:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;t_company&quot;
LINE 1: ...M mst.t_virtual a WHERE a.deleted_at is NULL  and mst.t_comp...
                                                             ^ C:\laragon\www\codeapp\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2022-04-26 13:56:14 --> Query error: ERROR:  missing FROM-clause entry for table "t_company"
LINE 1: ...M mst.t_virtual a WHERE a.deleted_at is NULL  and mst.t_comp...
                                                             ^ - Invalid query: WITH x AS (SELECT a.* FROM mst.t_virtual a WHERE a.deleted_at is NULL  and mst.t_company.company_id = '17'   order by a.created_at desc limit 10 offset 0),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z
ERROR - 2022-04-26 13:58:12 --> 404 Page Not Found: 
ERROR - 2022-04-26 13:58:14 --> 404 Page Not Found: 
ERROR - 2022-04-26 13:58:15 --> 404 Page Not Found: 
ERROR - 2022-04-26 13:58:15 --> 404 Page Not Found: 
ERROR - 2022-04-26 13:58:18 --> 404 Page Not Found: /index
ERROR - 2022-04-26 13:58:18 --> 404 Page Not Found: /index
ERROR - 2022-04-26 13:58:18 --> 404 Page Not Found: /index
ERROR - 2022-04-26 13:58:20 --> 404 Page Not Found: 
ERROR - 2022-04-26 14:28:54 --> 404 Page Not Found: /index
