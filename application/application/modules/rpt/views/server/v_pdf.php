<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <style type="text/css">
        .table-data {
            width: 100%;
            border-collapse: collapse;
        }

        .table-data tr th,
        .table-data tr td {
            border: 1px solid black;
            font-size: 11pt;
            font-family: Verdana;
            padding: 10px 10px 10px 10px;
        }

        .table-data th {
            background-color: grey;
        }

        h3 {
            font-family: Verdana;
        }
    </style>
    <h3>
        <center>LAPORAN SERVER FISIK </center>
    </h3>
    <br />
    <table class="table-data">
        <thead>
            <tr>
                <th>No</th>
                <th>Name Server</th>
                <th>Server IP</th>
                <th>Type OS</th>
                <th>CPU</th>
                <th>RAM</th>
                <th>STORAGE</th>
                <th>IN RACK</th>
                <th>IN ROOM</th>
                <th>IN GEDUNGs</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($data as $l) {
            ?>
                <tr>
                    <td scope="row"><?= $no++; ?></td>
                    <td><?= $l['server_name']; ?></td>
                    <td><?= $l['server_ip']; ?></td>
                    <td><?= $l['type_os']; ?></td>
                    <td><?= $l['server_cpu']; ?></td>
                    <td><?= $l['server_ram']; ?></td>
                    <td><?= $l['server_storage']; ?></td>
                    <td><?= $l['rack_name']; ?></td>
                    <td><?= $l['room_name']; ?></td>
                    <td><?= $l['gedung_name']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html