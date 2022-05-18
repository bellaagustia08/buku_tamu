<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EDIT DATA BUKU TAMU</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #2c3e50; height:65px">
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-9 px-0 px-lg-3 rounded js-scroll-trigger"></a>
                    </li>
                </ul>
            </div>
        </nav>
        <br><br>

        
            <center><h1 class="mt-4">Edit Data Buku Tamu</h1></center>
            <div class="card" style="width: 600px; margin-left: 255px;">
                <div class="card-header">Edit Data Buku Tamu</div>

                <div class="card-body">

                    <form action="<?php echo base_url() . 'kelola/fungsiEdit'; ?>" method="post">

                        <div class="form-group">
                            <label style="text-align: left;">ID Data </label>
                            <input type="text" value="<?php echo $guestbook->id; ?>" class="form-control" id="id" name="id" readonly>
                        </div>
                        <div class="form-group">
                            <label>Nama </label>
                            <input type="text" value="<?php echo $guestbook->nama; ?>" class="form-control" id="nama" name="nama"">
                    </div>
                    <div class=" form-group">
                            <label>Instansi </label>
                            <input type="text" value="<?php echo $guestbook->instansi; ?>" class="form-control" id="instansi" name="instansi">
                        </div>
                        <div class="form-group">
                            <label>Alamat </label>
                            <input type="text" value="<?php echo $guestbook->alamat; ?>" class="form-control" id="alamat" name="alamat">
                        </div>
                        <div class="form-group">
                            <label>Nomor HP </label>
                            <input type="text" value="<?php echo $guestbook->no_hp; ?>" class="form-control" id="no_hp" name="no_hp" maxlength="12">
                        </div>
                        <div class="form-group">
                            <label>Keperluan </label>
                            <textarea rows="5" name="keperluan" class="form-control" id="keperluan"><?php echo $guestbook->keperluan; ?></textarea>
                        </div>

                        <div class="form-group">
                            <center><button type="submit" class="btn btn-primary btn-xl" style="background-color: #1abc9c; height:50px; width:150px; font-size:x-large;">Ubah</button></center>
                        </div>

                    </form>
                </div>
            </div>
        

    </div>

</body>

</html>