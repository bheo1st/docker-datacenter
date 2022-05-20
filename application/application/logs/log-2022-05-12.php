<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-05-12 07:27:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column b.rack_id does not exist
LINE 1: ...mst.t_rack a LEFT JOIN mst.t_room b ON a.rack_id = b.rack_id
                                                              ^
HINT:  Perhaps you meant to reference the column &quot;a.rack_id&quot;. /application/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-05-12 07:27:56 --> Query error: ERROR:  column b.rack_id does not exist
LINE 1: ...mst.t_rack a LEFT JOIN mst.t_room b ON a.rack_id = b.rack_id
                                                              ^
HINT:  Perhaps you meant to reference the column "a.rack_id". - Invalid query: SELECT COUNT (distinct rack_id) AS record_rack FROM mst.t_rack a LEFT JOIN mst.t_room b ON a.rack_id = b.rack_id
ERROR - 2022-05-12 07:27:56 --> 404 Page Not Found: /index
