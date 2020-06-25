<?php 

require 'functions.php';
// cek apakah tombol submit sudah ditekan atau belum

if(isset($_POST["submit"])){
	// cek apakah data berhasil ditambahkan atau tidak		
	if(tambah($_POST)>0){
		echo "
			<script>
			alert('data berhasil ditambahkan');
			document.location.href = 'soalBonus.php'; 
			</script>
		";
	} else{
		echo "
			<script>
			alert('data tidak berhasil ditambahkan');
			</script>
			";
		}
}

 


 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tambah Data Produk</title>
</head>
<body>
	<h1>Tambah Data Mahasiwa</h1>

	<form action="" method="post">
		<ul>
			<li>
				<label for="nama_produk">nama_produk : </label>
				<input type="text" name="nama_produk" id="nama_produk" required>
			</li>
			<li>
				<label for="keterangan">keterangan : </label>
				<input type="text" name="keterangan" id="keterangan" required>
			</li>
			<li>
				<label for="harga">harga : </label>
				<input type="text" name="harga" id="harga" required>
			</li>
			<li>
				<label for="jumlah">jumlah: </label>
				<input type="text" name="jumlah" id="jumlah" required>
			</li>
			<li>
				<button type="submit" name="submit">Tambah Data!</button>
			</li>
		</ul>

	</form>
	
</body>
</html>