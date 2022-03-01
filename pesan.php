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
    <title>Pemesanan Tiket</title>
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
                    <li class="nav-item"><a style="font-family:Roboto Slab ;" class="nav-link active" aria-current="page">Pesan Tiket</a></li>
                    <li class="nav-item"><a style="font-family:Roboto Slab ;" class="nav-link" href="dtpsn.php">Data Pengunjung</a></li>
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
    <div class="container col-md-6 mt-4">

        <br>
        <br>
        <h1 style="font-family:Roboto Slab ;">Pesan Tiket</h1>
        <div class="card">
            <div class="card-header bg-dark text-white">
            </div>
            <br>
            <div class="card-body">
                <form action="" method="POST">
                    <table>
                        <tr>
                            <td> Pilih Wisata </td>
                            <td>:</td>
                            <td>

                                <select name="id" value="">
                                    <option value="" selected="selected">-</option>
                                    <?php
                                    include "koneksi.php";
                                    $sql = "SELECT * FROM wsta";
                                    $hasil = mysqli_query($kon, $sql);

                                    while ($data = mysqli_fetch_array($hasil)) {
                                        $ket = "";
                                        if (isset($_['id'])) {
                                            $id = trim($_GET['id']);

                                            if ($id == $data['id']) {
                                                $ket = "selected";
                                            }
                                        }
                                    ?>

                                        <option <?php echo $ket; ?> value="<?php echo $data['id']
                                                                            ?>"> <?php echo $data['id']; ?>
                                            - <?php echo $data['tmpt']; ?>
                                        </option>
                                    <?php
                                    }
                                    ?>

                                </select>
                            </td>
                            <td>
                                <button type="submit" name="submit">Pilih</button>
                            </td>
                        </tr>
                    </table>
                    </from>
                    <?php
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];

                        $sql = "SELECT * FROM wsta WHERE id = $id";
                        $hsl = mysqli_query($kon, $sql);
                        $data =  mysqli_fetch_assoc($hsl);
                    }
                    ?>

                    <br>

                    <form action="" method="post" role="form">
                        <table>
                            <tr>
                                <td>Nama Lengkap</td>
                                <td>:</td>
                                <td><input type="text" name="nl" value="" placeholder="Masukkan Nama Anda"></td>
                            </tr>
                            <tr>
                                <td>Nomor Identitas</td>
                                <td>:</td>
                                <td><input type="text" name="ni" value="" placeholder="Masukkan Nomor Identitas Anda"></td>
                            </tr>
                            <tr>
                                <td>No.HP</td>
                                <td>:</td>
                                <td><input type="text" name="nh" value="" placeholder="Masukkan No.Hp Anda"></td>
                            </tr>
                            <tr>
                                <td>Nama Wisata</td>
                                <td>:</td>
                                <td><input type="text" id="tmpt" name="tmpt" placeholder="Pilih Tempat Wisata" value="<?php if (isset($data['tmpt'])) echo $data['tmpt']; ?>"></td>
                            </tr>
                            <tr>
                                <td>Harga 1 Tiket</td>
                                <td>:</td>
                                <td><input type="text" id="hrg" name="hrg" placeholder="Pilih Tempat Wisata" value="<?php if (isset($data['hrg'])) echo $data['hrg']; ?>"></td>
                            </tr>
                            <tr>
                                <td>Tanggal Kunjungan</td>
                                <td>:</td>
                                <td><input type="date" name="tk" value="tk"></td>
                            </tr>
                            <tr>
                                <td>Jumlah Pengunjung</td>
                                <td>:</td>
                                <td>
                                    <select id="jp" name="jp" value="">
                                        <option value="0">Total Semua Pengunjung</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Pengunjung Anak-Anak</td>
                                <td>:</td>
                                <td>
                                    <select id="pa" name="pa" value="">
                                        <option value="0">Usia di bawah 12 tahun</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Total Bayar</td>
                                <td>:</td>
                                <td><input type="text" id="total" nama="total" value=""></td>
                            </tr>
                        </table>
                        <br>

                        <button class=" btn btn-primary" id="jumlah">Cek Harga Tiket</button>
                        <a class=" btn btn-danger" href="pesan.php#" name="Cancel" value="Cancel">Cancel</a>
                        <button type="submit" class="btn btn-success" name="simpan" value="simpan">Check Out</button>
                    </form>
                    <?php
                    if (isset($_POST['id'])) {
                        $id = $_POST['id'];

                        $sql = "SELECT * FROM wsta WHERE id = $id";
                        $hsl = mysqli_query($kon, $sql);
                        $data =  mysqli_fetch_assoc($hsl);
                    }
                    ?>
                    <?php
                    // koneksi database
                    include 'koneksi.php';
                    if (isset($_POST['submit'])) {
                        // menangkap data yang di kirim dari form
                        // $id = $_POST;
                        $nl = $_POST['nl'];
                        $ni = $_POST['ni'];
                        $nh = $_POST['nh'];
                        $tk = $_POST['tk'];
                        $jp = $_POST['jp'];
                        $pa = $_POST['pa'];

                        // menginput data ke database
                        mysqli_query($kon, "INSERT INTO psn VALUES('','$nl','$ni','$nh','$tk','$jp','$pa')") or die(mysqli_error($kon));

                        echo "<script>alert('Data Berhasil Disimpan.');window.location='tmpln.php';</script>";
                    }
                    ?>

                    <script>
                        const jumlah = document.querySelector('form #jumlah')
                        jumlah.onclick = (e) => {
                            e.preventDefault();
                            var hrg = document.querySelector('form #hrg').value;
                            var jp = document.querySelector('form #jp').value;
                            var pa = document.querySelector('form #pa').value;
                            var potongan = hrg * pa;
                            var hasil = hrg * jp - potongan;

                            document.querySelector('form #total').value = hasil;
                        }
                    </script>
</body>

</html>