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
        <center>LAPORAN VIRTUAL SERVER </center>
    </h3>
    <br />
    <table class="table-data">
        <thead>
            <tr>
                <th>No</th>
                <th>Virtual Name</th>
                <th>IP</th>
                <th>Username</th>
                <th>Password</th>
                <th>In Server</th>
                <th>In Rack</th>
                <th>In Room</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($data as $l) {
            ?>
                <tr>
                    <td scope="row"><?= $no++; ?></td>
                    <td><?= $l['virtual_name']; ?></td>
                    <td><?= $l['virtual_ip']; ?></td>
                    <td><?= $l['virtual_username']; ?></td>
                    <td><?= $l['virtual_password']; ?></td>
                    <td><?= $l['server_name']; ?></td>
                    <td><?= $l['rack_name']; ?></td>
                    <td><?= $l['room_name']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html