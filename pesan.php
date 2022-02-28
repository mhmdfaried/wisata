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
</head>
<body>
	<!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#!">Wisata Kota Bogor</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="tmpln.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php">Daftar Harga Tiket</a></li>
                    <li class="nav-item"><a class="nav-link" href="pesan.php">Pesan Tiket</a></li>
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
        <h1>Pesan Tiket</h1>
        <div class="card">
            <div class="card-header bg-dark text-white">
            </div>
            <br>
            <div class="card-body">
<h1> Pilih Wisata</h1>
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
                            if (isset($_POST['id'])) {
                                $id = trim($_POST['id']);

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
        if (isset($_POST['id'])) {
            $id = $_POST['id'];

            $sql = "SELECT * FROM wsta WHERE id = $id";
            $hasil = mysqli_query($kon, $sql);
            $data =  mysqli_fetch_assoc($hasil);
        }
        ?>
		<br>
        <form action="">
            <table>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td><input type="text" nama="nl" value="" placeholder="Masukkan Nama Anda"></td>
                </tr>
                <tr>
                    <td>Nomor Identitas</td>
                    <td>:</td>
                    <td><input type="text" nama="ni" value="" placeholder="Masukkan Nomor Identitas Anda"></td>
                </tr>
                <tr>
                    <td>No.HP</td>
                    <td>:</td>
                    <td><input type="text" nama="nh" value="" placeholder="Masukkan No.Hp Anda"></td>
                </tr>
                <tr>
                    <td>Nama Wisata</td>
                    <td>:</td>
                    <td><input type="text" id="tmpt" nama="tmpt" value="<?php if (isset($data['tmpt'])) echo $data['tmpt']; ?>"></td>
                </tr>
                <tr>
                    <td>Harga 1 Tiket</td>
                    <td>:</td>
                    <td><input type="text" id="hrg" nama="hrg" value="<?php if (isset($data['hrg'])) echo $data['hrg']; ?>"></td>
                </tr>
                <tr>
                    <td>Tanggal Kunjungan</td>
                    <td>:</td>
                    <td><input type="date"  nama="tk" value="tk"></td>
                </tr>
                <tr>
                    <td>Jumlah Pengunjung</td>
                    <td>:</td>
                    <td><input type="number" id="jp" nama="jp" value="" placeholder="Masukkan Jumlah Pengunjung"></td>
                </tr>
                <tr>
                    <td>Pengunjung Anak-Anak</td>
                    <td>:</td>
                    <td><input type="number" id="pa" nama="pa" value="" placeholder="Masukkan Jumlah Pengunjung Anak-Anak"></td>
                </tr>
                <tr>
                    <td>Total Bayar</td>
                    <td>:</td>
                    <td><input type="text" id="total" nama="total" value=""></td>
                </tr>
            </table>
            <br>

            <button id="jumlah">Hitung Total Bayar</button>
            <input type="submit" name="Cancel" value="Cancel">
            <input type="submit" name="CheckOut" value="Check Out">
        </form>

        <script>
            const jumlah = document.querySelector('form #jumlah')
            jumlah.onclick = (e) => {
                e.preventDefault();
                var bil1 = document.querySelector('form #hrg').value;
                var bil2 = document.querySelector('form #jp').value;
                var hasil = bil1 * bil2;

                document.querySelector('form #total').value = hasil;
            }
        </script>
</body>
</html>



