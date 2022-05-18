<!DOCTYPE html>
<html>

<head>
    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <title>Laporan Data Buku Tamu</title>
</head>

<style>
    html,
    body {
        background-color: whitesmoke;
        color: black;
        font-family: Serif;
        margin-right: 2px;
        margin-left: 2px;
    }

    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    th {
        text-align: center;
    }
    
    a{
        margin-top: 5px;
        margin-right: 2px;
        margin-left: 2px;
    }
</style>

<body>
    <div>
        <a href="<?php echo base_url('kelola/export_pdf'); ?>" class="btn btn-secondary" >
            <i class="fas fa-sync"></i>PDF
        </a>
    </div>

    <div>

        <center>
            <h2>Laporan Data Buku Tamu</h2>
        </center>

        <!-- opsional bisa ditampilkan bisa tidak -->
        <!-- <div>
        <a href="<?php echo base_url('kelola/export_pdf'); ?>" class="btn bg-light">
            <i class="fas fa-sync"></i>Cetak PDF
        </a>
        </div> -->

        <br>
        <table style="table-layout: fixed; width: 100%" cellpadding="2" cellspacing="2">
            <thead>
                <tr>
                    <th width="5%" align="center">No</th>
                    <th width="20%" align="center">Nama</th>
                    <th width="20%" align="center">Instansi</th>
                    <th width="20%" align="center">Alamat</th>
                    <th width="25%" align="center">Keperluan</th>
                    <th width="10%" align="center">No. HP</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $hitung = 0;
                foreach ($user as $user) {
                    $hitung = $hitung + 1;
                ?>
                    <tr>
                        <td align="center"><?php echo $hitung; ?></td>
                        <td style="word-wrap: break-word"><?php echo $user->nama; ?></td>
                        <td style="word-wrap: break-word"><?php echo $user->instansi; ?></td>
                        <td style="word-wrap: break-word"><?php echo $user->alamat; ?></td>
                        <td style="word-wrap: break-word"><?php echo $user->keperluan; ?></td>
                        <td style="word-wrap: break-word"><?php echo $user->no_hp; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>


    <script>
        window.print();
    </script>

</body>

</html>