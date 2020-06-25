<?php 
	$conn = mysqli_connect("localhost", "root", "", "arkademy");

	function query($query){
		global $conn;
		$result = mysqli_query($conn, $query);
		$rows = [];
		while($row = mysqli_fetch_assoc($result)){
			$rows[] = $row;
		}
		return $rows;
	}





function tambah($data){
	global $conn; 
		// ambil data dari tiap elemen dalam form
		$nama_produk = htmlspecialchars($data["nama_produk"]);
		$keterangan = htmlspecialchars($data["keterangan"]);
		$harga = htmlspecialchars($data["harga"]);
		$jumlah = htmlspecialchars($data["jumlah"]);

			//query insert data
		$query = "INSERT INTO product
					VALUES
				('','$nama_produk', '$keterangan', '$harga', '$jumlah')";
		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);

	}



function hapus($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM product WHERE id = $id");

	return mysqli_affected_rows($conn);
}







 ?>