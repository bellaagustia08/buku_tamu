<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Dashboard Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- Untuk Datatables -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <!-- Style -->
    <style>
        html,
        body {
            background-color: whitesmoke;
            color: #000000;
        }

        th {
            text-align: center;
        }
    </style>
</head>

<body class="sb-nav-fixed">

    <!-- NAVBAR -->
    <nav class="sb-topnav navbar navbar-expand" style="background-color: #2c3e50;">

        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="<?php echo base_url('kelola'); ?>" style="color:whitesmoke">Dashboard</a>

        <!-- Navbar Content-->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
                <a class="nav-link py-9 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo base_url('login/logout'); ?>" style="background-color:whitesmoke; color:black">
                    Logout
                </a>
            </li>
        </ul>
    </nav>

    <div>
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-2" style="color:black">Kelola Data Buku Tamu</h1>

                <div class="box">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Tabel Buku Tamu
                    </div>
                    <br>

                    <div class="fa-pull-right">
                        <a class="btn btn-default btn-xs" href="<?php echo base_url('kelola'); ?>">
                            <i class="fas fa-sync-alt"></i>
                        </a>
                        <a class="btn btn-xl" href="<?php echo base_url('kelola/export_excel'); ?>" style="background-color:darkseagreen; color:black; width:fit-content;">
                            Export Excel
                        </a>
                        <a class="btn btn-xl" href="<?php echo base_url('kelola/export_pdf'); ?>" style="background-color:cadetblue; color:black; width:fit-content">
                            Export PDF
                        </a>
                    </div>
                    <br><br>

                    <div class="table-responsive">
                        <table class="table table-hover" id="table-datatables" style="background:whitesmoke; border-radius:10px; width: 1850px;">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Instansi</th>
                                    <th>Alamat</th>
                                    <th>Keperluan</th>
                                    <th>No Telp</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $hitung = 0;
                                foreach ($queryAllData as $row) {
                                    $hitung = $hitung + 1;
                                ?>
                                    <tr>
                                        <td align="center"><?php echo $hitung ?></td>
                                        <td><?php echo $row->nama ?></td>
                                        <td><?php echo $row->instansi ?></td>
                                        <td><?php echo $row->alamat ?></td>
                                        <td><?php echo $row->keperluan ?></td>
                                        <td><?php echo $row->no_hp ?></td>
                                        <td style="width:200px;" align="center">
                                            <a class="badge badge-warning" href="<?php echo base_url('kelola/halamanEdit') ?>/<?php echo $row->id ?>"> <i class="fas fa-edit"></i>Edit</a>

                                            <a class="badge badge-danger" href="<?php echo base_url('kelola/fungsiDelete') ?>/<?php echo $row->id ?>" onclick="return confirm('Yakin ingin menghapus data tersebut?')"> <i class="fas fa-eraser"></i>Delete</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <br>
                    </div>

                    <br>
                </div>
            </div>
        </main>

    </div>
    </div>

    <!-- Script Datatable -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#table-datatables').DataTable({
                buttons: [{
                        extend: 'pdf',
                        orientation: 'landscape',
                        pageSize: 'A4',
                        title: 'Data'
                    },
                    'csv', 'excel', 'print', 'copy'
                ]
            });
        });
    </script>

    <script src="js/scripts.js"></script>

</body>

</html>