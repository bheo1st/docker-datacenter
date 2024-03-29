<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Laporan</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .line-title {
            border: 0;
            border-style: inset;
            border-top: 1px solid #000;
        }
    </style>
</head>

<body>
    <img src="assets/img/logo.jpg" style="position: absolute; width: 120px; height: auto;">
    <table style="width: 100%;">
        <tr>
            <td align="center">
                <span style="line-height: 1.6; font-weight: bold;">
                    LAPORAN DATA VIRTUAL SERVER <br>
                    JARING MAL INDONESIA

                </span>
            </td>
        </tr>
    </table>

    <hr class="line-title">
    <table class="table table-bordered">
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
    </table>

</body>

</html>