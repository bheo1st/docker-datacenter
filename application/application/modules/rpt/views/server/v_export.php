<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
</head>

<body>
    <table style="margin: 20px auto; border-collapse: collapse;">
        <thead>
            <tr>
                <th style="border: 1px solid #3c3c3c; padding: 3px 8px;">No</th>
                <th style="border: 1px solid #3c3c3c; padding: 3px 8px;">Name Server</th>
                <th style="border: 1px solid #3c3c3c; padding: 3px 8px;">Server Ip</th>
                <th style="border: 1px solid #3c3c3c; padding: 3px 8px;">Type Os</th>
                <th style="border: 1px solid #3c3c3c; padding: 3px 8px;">CPU</th>
                <th style="border: 1px solid #3c3c3c; padding: 3px 8px;">RAM</th>
                <th style="border: 1px solid #3c3c3c; padding: 3px 8px;">STORAGE</th>
                <th style="border: 1px solid #3c3c3c; padding: 3px 8px;">IN RACK</th>
                <th style="border: 1px solid #3c3c3c; padding: 3px 8px;">IN ROOM</th>
                <th style="border: 1px solid #3c3c3c; padding: 3px 8px;">IN GEDUNG</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($data as $dt) { ?>
                <tr>
                    <td style="border: 1px solid #3c3c3c; padding: 3px 8px;"><?= $i++ ?></td>
                    <td style="border: 1px solid #3c3c3c; padding: 3px 8px;"><?= $dt['server_name'] ?></td>
                    <td style="border: 1px solid #3c3c3c; padding: 3px 8px;"><?= $dt['server_ip'] ?></td>
                    <td style="border: 1px solid #3c3c3c; padding: 3px 8px;"><?= $dt['type_os'] ?></td>
                    <td style="border: 1px solid #3c3c3c; padding: 3px 8px;"><?= $dt['server_cpu'] ?> Core</td>
                    <td style="border: 1px solid #3c3c3c; padding: 3px 8px;"><?= $dt['server_ram'] ?> GB</td>
                    <td style="border: 1px solid #3c3c3c; padding: 3px 8px;"><?= $dt['server_storage'] ?> GB</td>
                    <td style="border: 1px solid #3c3c3c; padding: 3px 8px;"><?= $dt['rack_name'] ?></td>
                    <td style="border: 1px solid #3c3c3c; padding: 3px 8px;"><?= $dt['room_name'] ?></td>
                    <td style="border: 1px solid #3c3c3c; padding: 3px 8px;"><?= $dt['gedung_name'] ?></td>

                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>

</html>