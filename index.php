<?php
	include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Daftar Harga Tiket</title>
</head>
<body>
<!-- Tampil semua data barang dari database-->
<div class="container col-md-8 mt-4">
        <h1>Daftar Harga Tiket</h1>
        <div class="card">
            <div class="card-header bg-dark text-white ">
			<div class="card-body">
                <table class="table table-bordered table-dark">
			<th>No</th>
			<th>Tempat Wisata</th>
			<th>Harga</th>
		</tr>
		<?php 
			$no = 1;
			//Query menampilkan semua data dari tabel barang
			$sql = "select * from wsta";
			$hasil = mysqli_query($kon, $sql);
			while($data = mysqli_fetch_array($hasil)){
		?>
		<tr>
			<!--Tampil data berupa array -->
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['tmpt']; ?></td>
			<td><?php echo $data['hrg']; ?></td>
		</tr>
			<?php 
		}
		?>
	</table>
<!-- Pilih data barang dengan combo box-->
<hr>
	<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="get">
		<table>
			<tr>
				<td><h4>Pilih Tempat Wisata</h4></td>
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
		</table>
	</form>

	<h2>Detail Data Barang</h2>
	<?php
	if (isset($_GET['id'])) {
	 	$id = $_GET['id'];

	 	$sql = "select * from wsta where id=$id";
	 	$hasil = mysqli_query($kon,$sql);
	 	$data = mysqli_fetch_assoc($hasil);
	 } 
	 ?>
	 <table>
	 	<tr>
	 		<td>ID</td>
	 		<td>:</td>
	 		<td><input type="text" name="id" 
	 			value="<?php echo $data['id'];?>"></td>
	 	</tr>
	 	<tr>
	 		<td>Nama Barang</td>
	 		<td>:</td>
	 		<td><input type="text" name="tmpt" 
	 			value="<?php echo $data['tmpt'];?>"></td>
	 	</tr>
	 	<tr>
	 		<td>Harga</td>
	 		<td>:</td>
	 		<td><input type="text" name="hrg" 
	 			value="<?php echo $data['hrg'];?>"></td>
	 	</tr>		 	
	 </table>

	 <h4><a href="tmpln.php" style="text-decoration: none;"><-- Kembali</a></h4>	 
</body>
</html>