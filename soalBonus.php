<?php 
require 'functions.php';

$produk = query("SELECT*FROM product");

 ?> 

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Halaman Admin</title>
</head>
<body>
	<h1>Product</h1>
	<a href="tambah.php">Tambah Data Produk</a>
	<br><br>
	<table border="1" cellpadding="10" cellspacing="0" >
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Nama_produk</th>
			<th>Keterangan</th>
			<th>Harga</th>
			<th>Jumlah</th>
	
		</tr>
		<?php $i = 1; ?>
		<?php foreach($produk as $row): ?>
		<tr>
			<td><?= $i; ?></td>
			<td>
				<a href="">ubah</a> |
				<a href="hapus.php?id=<?php echo $row["id"] ?>">hapus</a>
			</td>
			<td><?php echo $row["nama_produk"]; ?></td>
			<td><?php echo $row["keterangan"]; ?></td>
			<td><?php echo $row["harga"]; ?></td>
			<td><?php echo $row["jumlah"]; ?></td>
		</tr>
		<?php $i++ ?>
	<?php endforeach?>
	</table>
	
</body>
</html>