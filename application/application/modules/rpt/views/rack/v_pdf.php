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
        <center>LAPORAN RACK SERVER </center>
    </h3>
    <br />
    <table class="table-data">
        <thead>
            <tr>
                <th>No</th>
                <th>Rack</th>
                <th>Room</th>
                <th>Gedung</th>
                <th>Company</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($data as $l) {
            ?>
                <tr>
                    <td scope="row"><?= $no++; ?></td>
                    <td><?= $l['rack_name']; ?></td>
                    <td><?= $l['room_name']; ?></td>
                    <td><?= $l['gedung_name']; ?></td>
                    <td><?= $l['company_name']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html