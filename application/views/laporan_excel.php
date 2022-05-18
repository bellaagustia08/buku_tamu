<?php

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=$title.xls");

header("Pragma: no-cache");

header("Expires: 1");

?>

<table border="1" style="width: 100%; border-collapse: collapse">
    <thead>
        <tr>
            <th colspan="6">DATA BUKU TAMU</th>
        </tr>
        <tr>
            <th width="5%" align="center">No</th>
            <th width="25%" align="center">Nama</th>
            <th width="30%" align="center">Instansi</th>
            <th width="30%" align="center">Alamat</th>
            <th width="40%" align="center">Keperluan</th>
            <th width="15%" align="center">No. HP</th>
        </tr>
    </thead>

    <tbody>
        <?php
        $hitung = 0;
        foreach ($user as $user) {
            $hitung = $hitung + 1;
        ?>
            <tr>
                <td align="center"><?php echo $hitung ?></td>
                <td><?php echo $user->nama ?></td>
                <td><?php echo $user->instansi ?></td>
                <td><?php echo $user->alamat ?></td>
                <td><?php echo $user->keperluan ?></td>
                <td><?php echo $user->no_hp ?></td>
            </tr>

        <?php } ?>

    </tbody>

</table>