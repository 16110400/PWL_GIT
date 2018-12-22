<?php 
require_once("koneksi/koneksi.php");
 ?>

 <h2>Tambah Berita</h2>
 <form action="" method="POST">
 	<table  width="200">
 		<tr>
 			<td>Judul Berita</td>
 			<td><input type="text" name="judul"></td>
 		</tr>
 		<tr>
 			<td>Kategori Berita</td>
 			<td>
 				<select name="kat">
 					<?php 
						$q = "SELECT * FROM Kategori";
						$query = mysqli_query($con, $q);
						while ($kat=mysqli_fetch_array($query)) {
 					 ?>
 					 <option value="<?php echo $kat['id_kategori'];?>"><?php echo $kat['nama_kategori'];?></option>
 					 <?php } ?>
 				</select>
 			</td>
 		</tr>
 		<tr>
 			<td>Isi</td>
 			<td><textarea name="isi"></textarea></td>
 		</tr>
 		<tr>
 			<td>Tanggal</td>
 			<td><input type="date" name="tanggal"></td>
 		</tr>
 		<tr align="right">
 			<td colspan="2"><input type="submit" name="submit" value="Tambah"></td>
 		</tr>
 	</table>
 </form>

 <?php 
	if(isset($_POST['submit'])){
	$query = "INSERT INTO berita (id_berita, id_kategori, judul_berita, isi_berita, tanggal_berita) VALUES ('', '".$_POST['kat']."', '".$_POST['judul']."', '".$_POST['isi']."', '".$_POST['date']."')";
	
	$hasil = mysqli_query($con, $query) or die (mysqli_error());
  ?>
  
  <script>
  	alert("data sukses ditambahkan");
  	window.location = 'berita.php';
  </script>

<?php 
	}
?>