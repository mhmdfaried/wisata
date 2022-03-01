<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Daftar Harga Tiket</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-4 px-lg-5">
            <a style="font-family:Roboto Slab ;" class="navbar-brand" href="#!">Wisata Kota Bogor</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a style="font-family:Roboto Slab ;" class="nav-link" href="tmpln.php">Home</a></li>
                    <li class="nav-item"><a style="font-family:Roboto Slab ;" class="nav-link" href="index.php">Daftar Harga Tiket</a></li>
                    <li class="nav-item"><a style="font-family:Roboto Slab ;" class="nav-link" href="tmbh.php">Pesan Tiket</a></li>
                    <li class="nav-item"><a style="font-family:Roboto Slab ;" class="nav-link active" aria-current="page" href="dtpsn.php">Data Pengunjung</a></li>
                </ul>
                <!-- <form class="d-flex">
                    <button class="btn btn-outline-dark" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Cart
                        <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                    </button>
                </form> -->
            </div>
        </div>
    </nav>
    <!-- Tampil semua data barang dari database-->
    <div class="container col-md-16 mt-4">

        <br>
        <br>
        <h1 style="font-family:Roboto Slab ;">Daftar Pengunjung</h1>
        <div class="card">
            <div class="card-header bg-dark text-white">
            </div>
            <br>
            <div class="card">
                <!-- <div class="card-header bg-white text-white "> -->
                <div style="font-family:Roboto Slab ;" class="card-body">
                    <table class="table table-bordered table-dark"><br>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Nomor Identitas</th>
                        <th>No. HP</th>
                        <th>Tempat Wisata</th>
                        <th>Tanggal Kunjungan</th>
                        <th>Jumlah Pengunjung</th>
                        <th>Pengunjung Anak-Anak</th>
                        <!-- <th>Harga Tiket</th>
                        <th>Total</th>
                        <th>Potongan Harga</th>
                        <th>Total Bayar</th> -->
                        </tr>
                        <?php
                        $no = 1;
                        //Query menampilkan semua data dari tabel barang
                        $sql = "select * from psn";
                        $hasil = mysqli_query($kon, $sql);
                        while ($data = mysqli_fetch_array($hasil)) {
                        ?>
                            <tr>
                                <!--Tampil data berupa array -->
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $data['nl']; ?></td>
                                <td><?php echo $data['ni']; ?></td>
                                <td><?php echo $data['nh']; ?></td>
                                <td><?php echo $data['tw']; ?></td>
                                <td><?php echo $data['tk']; ?></td>
                                <td><?php echo $data['jp']; ?> Orang</td>
                                <td><?php echo $data['pa']; ?> Orang</td>
                                <!-- <td><?php echo $data['hrg']; ?></td> -->
                                <!-- <td><?php echo $data['th']; ?></td> -->
                                <!-- <td><?php echo $data['potongan']; ?></td> -->
                                <!-- <td>Rp. <?php echo $data['tb']; ?></td> -->
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                    <br>

                    <!-- <h4><a class=" btn btn-primary" href="tmpln.php" style="text-decoration: none;">
                            <-- Kembali</a>
                    </h4> -->
</body>

</html>