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
                <th style="border: 1px solid #3c3c3c; padding: 3px 8px;">No #</th>
                <th style="border: 1px solid #3c3c3c; padding: 3px 8px;">Lokasi</th>
                <th style="border: 1px solid #3c3c3c; padding: 3px 8px;">Tanggal Mulai</th>
                <th style="border: 1px solid #3c3c3c; padding: 3px 8px;">Tanggal Berakhir</th>
                <th style="border: 1px solid #3c3c3c; padding: 3px 8px;">Nama Petugas</th>
                <th style="border: 1px solid #3c3c3c; padding: 3px 8px;">Nama Terminal</th>
                <th style="border: 1px solid #3c3c3c; padding: 3px 8px;">Jumlah Total</th>
                <th style="border: 1px solid #3c3c3c; padding: 3px 8px;">Total Pendapatan</th>
                <th style="border: 1px solid #3c3c3c; padding: 3px 8px;">Total Cash</th>
                <th style="border: 1px solid #3c3c3c; padding: 3px 8px;">Pendapatan Cash</th>
                <th style="border: 1px solid #3c3c3c; padding: 3px 8px;">Jumlah Cashless</th>
                <th style="border: 1px solid #3c3c3c; padding: 3px 8px;">Pendapatan Cashless</th>
                <th style="border: 1px solid #3c3c3c; padding: 3px 8px;">Jumlah Member</th>
                <th style="border: 1px solid #3c3c3c; padding: 3px 8px;">Jumlah VIP Motor</th>
                <th style="border: 1px solid #3c3c3c; padding: 3px 8px;">Jumlah VIP Mobil</th>
                <th style="border: 1px solid #3c3c3c; padding: 3px 8px;">Jumlah Dinas Motor</th>
                <th style="border: 1px solid #3c3c3c; padding: 3px 8px;">Jumlah Dinas Mobil</th>
                <th style="border: 1px solid #3c3c3c; padding: 3px 8px;">Total Registrasi Member</th>
                <th style="border: 1px solid #3c3c3c; padding: 3px 8px;">Pendapatan Registrasi Member</th>
                <th style="border: 1px solid #3c3c3c; padding: 3px 8px;">Pendapatan Registrasi Member Cash</th>
                <th style="border: 1px solid #3c3c3c; padding: 3px 8px;">Jumlah Registrasi Member Cash</th>
                <th style="border: 1px solid #3c3c3c; padding: 3px 8px;">Pendapatan Registrasi Member Cashless</th>
                <th style="border: 1px solid #3c3c3c; padding: 3px 8px;">Jumlah Registrasi Member Cashless</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($data as $dt) { ?>
                <tr>
                    <td style="border: 1px solid #3c3c3c; padding: 3px 8px;"><?= $i++ ?></td>
                    <td style="border: 1px solid #3c3c3c; padding: 3px 8px;"><?= $dt['nama_lokasi'] ?></td>
                    <td style="border: 1px solid #3c3c3c; padding: 3px 8px;"><?= $dt['start_date'] ?></td>
                    <td style="border: 1px solid #3c3c3c; padding: 3px 8px;"><?= $dt['end_date'] ?></td>
                    <td style="border: 1px solid #3c3c3c; padding: 3px 8px;"><?= $dt['nama_petugas'] ?></td>
                    <td style="border: 1px solid #3c3c3c; padding: 3px 8px;"><?= $dt['nama_terminal'] ?></td>
                    <td style="border: 1px solid #3c3c3c; padding: 3px 8px;"><?= $dt['jumlah_total'] ?></td>
                    <td style="border: 1px solid #3c3c3c; padding: 3px 8px;"><?= $dt['total_pendapatan'] ?></td>
                    <td style="border: 1px solid #3c3c3c; padding: 3px 8px;"><?= $dt['total_cash'] ?></td>
                    <td style="border: 1px solid #3c3c3c; padding: 3px 8px;"><?= $dt['pendapatan_cash'] ?></td>
                    <td style="border: 1px solid #3c3c3c; padding: 3px 8px;"><?= $dt['total_cashless'] ?></td>
                    <td style="border: 1px solid #3c3c3c; padding: 3px 8px;"><?= $dt['pendapatan_cashless'] ?></td>
                    <td style="border: 1px solid #3c3c3c; padding: 3px 8px;"><?= $dt['total_member'] ?></td>
                    <td style="border: 1px solid #3c3c3c; padding: 3px 8px;"><?= $dt['vip_motor'] ?></td>
                    <td style="border: 1px solid #3c3c3c; padding: 3px 8px;"><?= $dt['vip_mobil'] ?></td>
                    <td style="border: 1px solid #3c3c3c; padding: 3px 8px;"><?= $dt['dinas_motor'] ?></td>
                    <td style="border: 1px solid #3c3c3c; padding: 3px 8px;"><?= $dt['dinas_mobil'] ?></td>
                    <td style="border: 1px solid #3c3c3c; padding: 3px 8px;"><?= $dt['total_registrasi_member'] ?></td>
                    <td style="border: 1px solid #3c3c3c; padding: 3px 8px;"><?= $dt['pendapatan_registrasi_member'] ?></td>
                    <td style="border: 1px solid #3c3c3c; padding: 3px 8px;"><?= $dt['pendapatan_registrasi_member_cash'] ?></td>
                    <td style="border: 1px solid #3c3c3c; padding: 3px 8px;"><?= $dt['total_registrasi_member_cash'] ?></td>
                    <td style="border: 1px solid #3c3c3c; padding: 3px 8px;"><?= $dt['pendapatan_registrasi_member_cashless'] ?></td>
                    <td style="border: 1px solid #3c3c3c; padding: 3px 8px;"><?= $dt['total_registrasi_member_cashless'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>

</html>