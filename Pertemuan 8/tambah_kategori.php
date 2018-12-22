<?php 
require_once("koneksi/koneksi.php");
 ?>

 <h2>Tambah Kategori</h2>
 <form action="" method="POST">
 	<table  width="200">
 		<tr>
 			<td>Nama Kategori</td>
 			<td><input type="text" name="nama_kategori"></td>
 		</tr>
 		<tr align="right">
 			<td colspan="2"><input type="submit" name="submit" value="Daftar"></td>
 		</tr>
 	</table>
 </form>

 <?php 
	if(isset($_POST['submit'])){
	$query = "INSERT INTO kategori (id_kategori, nama_kategori) VALUES ('', '".$_POST['nama_kategori']."')";
	
	$hasil = mysqli_query($con, $query) or die (mysqli_error());
  ?>
  
  <script>
  	alert("data sukses ditambahkan");
  	window.location = 'kategori.php';
  </script>

<?php 
	}
?>
