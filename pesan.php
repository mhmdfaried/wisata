<?php
	include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Pemesanan Tiket</title>
</head>
<body>
<div class="container col-md-6 mt-4">
<?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pemesanan baru berhasil!";
            } else {
                echo "Pemesanan gagal!";
            }
        ?>
    </p>
	<?php endif; ?>

	<h2>Pesan Tiket</h2>
    <div class="card">
            <div class="card-header bg-dark text-white">
            </div>
            <br>
            <div class="card-body">
	<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
		<table>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td>
					<input type="text" name="nama">
				</td>
			</tr>
			<tr>
				<td>Nomor Identitas</td>
				<td>:</td>
				<td>
					<input type="text" name="nik">
				</td>
			</tr>
            <tr>
				<td>No. HP</td>
				<td>:</td>
				<td>
					<input type="text" name="nik">
				</td>
			</tr>
			<tr>
				<td>Tempat Wisata</td>
				<td>:</td>
				<td>
					<select name="id">
						<option value="" selected="selected">-</option>
						<?php						
						//perintah sql untuk menampilkan semua data pada table barang
						$sql = "select id,tmpt from wsta";
						$hasil = mysqli_query($kon,$sql);						
						while ($data = mysqli_fetch_array($hasil)) {						
							$ket="";
							if (isset($_GET['id'])){
								$id = trim($_GET['id']);

								if($id==$data['id'])
								{
									$ket="selected";
								}
							}
							?>
							<option <?php echo $ket;?> 
							value="<?php echo $data['id']?>">
							<?php echo $data['id'];?> - <?php echo $data['tmpt'];?>
							</option>
							<?php
						}
						?>
					</select>
				</td>				
				<td>
					<input type="submit" name="submit" value="Pilih">
				</td>
			</tr>
			<?php
					if (isset($_POST['id'])) {
					 	$id = $_POST['id'];

					 	$sql = "select * from wsta where id=$id";
					 	$hasil = mysqli_query($kon,$sql);
					 	$data = mysqli_fetch_assoc($hasil);
					 } 
				?>
            <tr>
	 		    <td>Harga 1 Tiket</td>
	 		    <td>:</td>
	 		    <td><input type="text" name="hrg" 
	 			value="<?php echo $data['hrg'];?>"></td>
	 	    </tr>
		 	<tr>
		 		<td>Tanggal Kunjungan</td>
		 		<td>:</td>
		 		<td>
		 			<input type="date" name="tanggal" value="">
		 		</td>
		 	</tr>
            <tr>
		 		<td>Jumlah Pengunjung</td>
		 		<td>:</td>
		 		<td>
		 			<input type="number" name="tanggal" value="">
		 		</td>
		 	</tr>
            <tr>
		 		<td>Pengunjung Anak Anak</td>
		 		<td>:</td>
		 		<td>
		 			<input type="number" name="tanggal" value="">
		 		</td>
		 	</tr>
		 	<tr>
		 		<td>Total</td>
		 		<td>:</td>
		 		<td>
		 			<input type="text" name="total" value="">
		 		</td>
		 	</tr>
		 	<tr>
		 		<td></td>
		 		<td></td>
		 		<td><br>
                    <input type="submit" name="hitung" value="Hitung">
                    <input type="reset" name="batal" value="Batal">
		 			<input type="submit" name="simpan" value="Check Out">
		 		</td>
		 	</tr>
		</table>
	</form>
</body>
</html>



